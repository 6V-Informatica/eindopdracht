<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit();
}
$link = "";
$geenVlees_status = false;
$geenLactose_status = false;
$geenGluten_status = false;

require_once "config.php";

$sql = "SELECT voorkeuren FROM users WHERE ID = ?";
if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    $param_id = $_SESSION["id"];

    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);

        mysqli_stmt_bind_result($stmt, $voorkeuren);
        if(mysqli_stmt_fetch($stmt)){
            $voorkeuren_list_array = unserialize($voorkeuren);
            foreach ($voorkeuren_list_array as $value){
                if($value == "geenVlees"){
                    $geenVlees_status = true;
                }else if($value == "geenLactose"){
                    $geenLactose_status = true;
                }else if($value == "geenGluten"){
                    $geenGluten_status = true;
                }
            }
        }
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $geenVlees_status = false;
    $geenLactose_status = false;
    $geenGluten_status = false;

    $voorkeuren_list = array($_POST['geenVlees'], $_POST['geenLactose'], $_POST['geenGluten']);
//    foreach ($voorkeuren_list as $value) {
//        echo $value . "<br>";
//    }
//    echo serialize($voorkeuren_list) . "<br>";

    $sql = "UPDATE users SET voorkeuren = ? WHERE id = ?";
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "si", $param_voorkeuren, $param_id);

        $param_voorkeuren = serialize($voorkeuren_list);
        $param_id = $_SESSION["id"];

        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
    }

    $sql = "SELECT voorkeuren FROM users WHERE ID = ?";
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        $param_id = $_SESSION["id"];

        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);

            mysqli_stmt_bind_result($stmt, $voorkeuren);
            if(mysqli_stmt_fetch($stmt)){
                $voorkeuren_list_array = unserialize($voorkeuren);
                foreach ($voorkeuren_list_array as $value){
                    if($value == "geenVlees"){
                        $geenVlees_status = true;
                    }else if($value == "geenLactose"){
                        $geenLactose_status = true;
                    }else if($value == "geenGluten"){
                        $geenGluten_status = true;
                    }
                }
            }
        }
    }
    header("location: schema-generator.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Settings | Freshie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <style>
        body {font-family: "Times New Roman", Georgia, serif;}
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
    </style>
    <link rel="icon" type="image/x-icon" href="photo/freshie%20logo.png">
</head>
<body>
<div class="top">
    <div class="bar white padding card" style="letter-spacing:4px;">
        <div class="left">
            <a href="index.php" class="button">
                <img class="image" src="photo/freshie%20logo.png" alt="Freshie logo" width="50" height="50">
            </a>
        </div>
        <div class="right vertical-middle hide-small">
            <a href="index.php" class="bar-item button">Home</a>
            <a href="welcome.php" class="bar-item button">Klantenportaal</a>
            <a href="logout.php" class="bar-item button">Uitloggen</a>
        </div>
        <div class="right vertical-middle hide-large hide-medium">
            <a href="welcome.php" class="bar-item button">Klantenportaal</a>
            <a href="logout.php" class="bar-item button">Uitloggen</a>
        </div>
    </div>
</div>
<div class="content" style="max-width:1100px">

    <!-- About Section -->
    <div class="row padding-64" id="about">
        <div class="col m6 padding-large hide-small">
            <img src="photo/freshie%20prijzen.jpg" class="round image opacity-min" alt="Over Freshie" width="600" height="750">
        </div>

        <div class="col m6 padding-large">
            <h1 class="center">Instellingen</h1>
            <p><b>Voorkeuren</b></p>
            <form method="post">
                <p>
                    <label>
                        <input type="hidden" name="geenVlees" value="">
                        <input type="checkbox" name="geenVlees" value="geenVlees" <?php if ($geenVlees_status) echo 'checked'; ?> >    Ik wil geen vlees
                    </label>
                </p>
                <p>
                    <label>
                        <input type="hidden" name="geenLactose" value="">
                        <input type="checkbox" name="geenLactose" value="geenLactose" <?php if ($geenLactose_status) echo 'checked'; ?> >  Ik wil geen lactose
                    </label>
                </p>
                <p>
                    <label>
                        <input type="hidden" name="geenGluten" value="">
                        <input type="checkbox" name="geenGluten" value="geenGluten" <?php if ($geenGluten_status) echo 'checked'; ?> >   Ik wil geen gluten
                    </label>
                </p>
                <button type="submit">Bevestig</button>
            </form>
            <div class="niet-geregistreerd middle">
                <a href="unsubscribe.php">Uitschrijven</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>