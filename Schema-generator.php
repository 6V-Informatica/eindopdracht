<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
$link = '';
require_once "config.php";
$geenVleesRecepten = rand(1,14);
$geenFilterRecepten = rand(15,28);
$geenLactoseRecepten = rand(29,42);
$geenGlutenRecepten = rand(,);
// Nog extra recepten

voorkeuren = list($voorkeuren);
vleesVoorkeur = voorkeuren[0];
lactoseVoorkeur = voorkeuren[1];
glutenVoorkeur = voorkeuren[2];

$numbers = array();
while (count($numbers) < 14){
    $random = rand(1,14);
    if (!in_array($random, $numbers)) {
        $numbers[] = $random;
    }
}
$sql = "UPDATE users SET schema = ? WHERE id = ?";
if($stmt= mysqli_prepare($link, $sql)) {
    mysqli_stmt_bind_param($stmt, "si", $param_schema, $param_id);
    $param_schema = serialize($numbers);
    $param_id = $_SESSION["id"];
    if (mysqli_stmt_execute($stmt)) {
        header("location: welcome.php");
        exit();
    } else {
        echo "Er is iets verkeerd gegaan probeer het later opnieuw."
    }
    mysqli_stmt_close($stmt);
}





?>