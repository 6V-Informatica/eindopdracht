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
    <title>Welcome | Freshie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <style>
        body {font-family: "Times New Roman", Georgia, Serif;}
        h1, h2, h3, h4, h5, h6 {
            font-family: "Playfair Display";
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
        .inloggen-middle{
            margin: 0;
            position: sticky;
            transform: translateY(35%);
        }
    </style>
    <link rel="icon" type="image/x-icon" href="photo\freshie%20logo.png">
</head>
<body>

<div class="top">
    <div class="bar white padding card" style="letter-spacing:4px;">
        <div class="left">
            <a href="index.html" class="button">
                <img class="image" src="photo\freshie%20logo.png" alt="Freshie logo" width="50" height="50">
            </a>
        </div>
        <div class="right vertical-middle hide-small">
            <a href="index.html" class="bar-item button">Home</a>
            <a href="settings.php" class="bar-item button">Settings</a>
            <a href="logout.php" class="bar-item button">Uitloggen</a>
        </div>
        <div class="right vertical-middle hide-large hide-medium">
            <a href="index.html" class="bar-item button">Settings</a>
            <a href="logout.php" class="bar-item button">Uitloggen</a>
        </div>
    </div>
</div>
<div class="content" style="max-width:1100px">

    <!-- About Section -->
    <div class="row padding-64" id="about">
        <div class="col m6 padding-large hide-small">
            <img src="photo/freshie%20over.jpg" class="round image opacity-min" alt="Over Freshie" width="600" height="750">
        </div>

        <div class="col m6 padding-large">
            <h1 class="center">Welkom bij Freshie</h1><br>
            <h6 class="center">Wil jij gezonder eten?</h6>
            <p class="large"> Dan zit jij goed bij Freshie. Sinds 2022 zijn wij bezig om voor jou een eetschema te maken. Met dit schema voldoe je elke week aan de schijf van vijf en krijg je voldoende voedingsstoffen binnen. Bij Freshie streven wij naar een gezond lichaam en dus ook een gezonde geest. Je kan je eigen schema samenstellen en je voorkeuren uitgeven.</p>
            <p class="large"> Begin nu en krijg je eerste maand gratis!</p>

        </div>
    </div>
</div>
</body>
</html>