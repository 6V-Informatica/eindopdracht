<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
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
<div>
    <div class="niet-geregistreerd middle">
        <a href="delete-account.php" class="bar-item button">Uitschrijven</a>
        <br>
        <a href="welcome.php">Terug</a>
    </div>

</div>
</body>
</html>
