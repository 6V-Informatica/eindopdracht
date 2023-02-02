<?php /** @noinspection PhpParamsInspection */
// Eerst $link aanmaken en daarna doormiddel van config.php $link een waarde geven
$link = '';
require_once "config.php";

// Zorgen dat variabelen worden gedifineerd
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";


// Deze functie wordt aangeslagen als de form ingeleverd wordt
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Kijkt of de gebruikersnaam (in dit geval email) een goede email is
    if(empty(trim($_POST["username"]))){ // kijkt of de email leeg is
        $username_err = "Please enter an email.";
    } elseif(!filter_var(trim($_POST["username"]), FILTER_VALIDATE_EMAIL)){ // kijkt of het een email is
        $username_err = "Email is not an email.";
    } else{
        // Maak een SQL
        $sql = "SELECT id FROM users WHERE email = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (email, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Register | Freshie</title> <!-- Titel instellen van de pagina -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css"> <!-- style.css gebruiken voor de opmaak van de pagina -->
    <style> /* Extra opmaak specifiek voor deze pagina die niet bij de rest van de pagina hoort*/
        body {
            font-family: "Times New Roman", Georgia, Serif, serif;}
        h1, h2, h3, h4, h5, h6 {
            font-family: "Playfair Display", serif;
            letter-spacing: 5px;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: rgb(6, 122, 70);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .middle{
            margin: 0;
            position: sticky;
            width: 50%;
            transform: translateX(50%);
            text-align: center;
        }
        .register-middle{
            margin: 0;
            position: sticky;
            transform: translateY(35%);
        }
    </style>
    <link rel="icon" type="image/x-icon" href="photo/freshie%20logo.png"> <!-- Logo instellen -->
</head>
<body>
<!-- Header -->
<div class="top">
    <div class="bar white padding card" style="letter-spacing: 4px;">
        <div class="left">
            <a href="index.html" class="button">
                <!--suppress CheckImageSize -->
                <img class="image" src="photo/freshie logo.png" alt="Freshie Logo" width="50" height="50">
            </a>
        </div>
        <div class="right vertical-middle hide-small">
            <a href="index.html#about" class="bar-item button">Informatie</a>
            <a href="index.html#prizes" class="bar-item button">Prijzen</a>
            <a href="welcome.php" class="bar-item button">Inloggen</a>
        </div>
        <div class="right vertical-middle hide-large hide-medium">
            <a href="welcome.php" class="bar-item button">Inloggen</a>
        </div>
    </div>
</div>

<div class="content" style="max-width: 1100px">
    <div class="row padding-64" id="registreren">
        <div class="right col m6 padding-large hide-small">
            <img src="photo/freshie%20registreren.jpg" class="round image opacity-min" alt="Voorbeeld eten" width="600" height="750">
        </div>

        <div class="left col m6 padding-large">
            <div class="register-middle">
                <h2 class="middle">Registreren</h2>
                <div class="container">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <label>
                            <input type="text" name="username" placeholder="Email" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                        </label>
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>

                        <label>
                            <input type="password" name="password" placeholder="Wachtwoord" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                        </label>
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>

                        <label>
                            <input type="password" name="confirm_password" placeholder="Bevestig wachtwoord" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                        </label>
                        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>

                        <button type="submit">Registreren</button>
                        <hr>
                        <div class="niet-geregistreerd middle">
                            <a href="welcome.php">Terug</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- OUD
<div class="wrapper">
    <h2>Sign Up</h2>
    <p>Please fill this form to create an account.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-secondary ml-2" value="Reset">
        </div>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </form>
</div> -->
</body>
</html>