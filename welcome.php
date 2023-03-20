<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$link = "";
$schema = "";
require_once "config.php";

$sql = "SELECT weekschema FROM users WHERE ID = ?";
if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    $param_id = $_SESSION["id"];

    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $schema_serialized);
        if(mysqli_stmt_fetch($stmt)){
            $schema = unserialize($schema_serialized);
            if(is_null($schema)){
                header("location: Schema-generator.php");
            }
        }
    }
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
        #Overview {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #Overview td, #Overview th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #Overview tr:nth-child(even){background-color: #f2f2f2;}

        #Overview tr:hover {background-color: #ddd;}

        #Overview th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
    <link rel="icon" type="image/x-icon" href="photo/freshie%20logo.png">
</head>
<body>

<div class="top">
    <div class="bar white padding card" style="letter-spacing:4px;">
        <div class="left">
            <a href="index.html" class="button">
                <img class="image" src="photo/freshie%20logo.png" alt="Freshie logo" width="50" height="50">
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

    <div class="row padding-64" id="tabel">
        <h2>Schema</h2>
        <table id="Overview">
            <tr>
                <th>Dag</th>
                <th>Naam</th>
                <th>Beschrijving</th>
                <th>Ingrediënten</th>

            </tr>
            <tr>
                <td>Dag 1</td>
                <td>Test</td>
                <td>test 2</td>
                <td>test 3</td>
            </tr>
        </table>

    </div>
</div>
<script>
    function show() {

    }
</script>
</body>
</html>