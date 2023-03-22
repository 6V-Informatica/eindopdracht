<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$link = '';
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
        mysqli_stmt_bind_result($stmt, $voorkeuren_serialized);
        if(mysqli_stmt_fetch($stmt)){
            $voorkeuren = unserialize($voorkeuren_serialized);
            foreach ($voorkeuren as $value){
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
    mysqli_stmt_close($stmt);
}

//$geenVleesRecepten = rand(1,14);
//$geenFilterRecepten = rand(15,28);
//$geenLactoseRecepten = rand(29,42);
//$geenGlutenRecepten = rand(,);
// Nog extra recepten

if($geenVlees_status){
    $numbers = range(1,14);
    shuffle($numbers);

}else if($geenLactose_status){
    $numbers = range(29,42);
    shuffle($numbers);

}else if($geenGluten_status){
    $numbers = range(1,14);
    shuffle($numbers);
}else {
    $numbers = range(15,28);
    shuffle($numbers);
}

//voorkeuren = list($voorkeuren);
//vleesVoorkeur = voorkeuren[0];
//lactoseVoorkeur = voorkeuren[1];
//glutenVoorkeur = voorkeuren[2];
//
//$numbers = array();
//while (count($numbers) < 14){
//    $random = rand(1,14);
//    if (!in_array($random, $numbers)) {
//        $numbers[] = $random;
//    }
//}
$sql = "UPDATE users SET weekschema = ? WHERE id = ?";
if($stmt= mysqli_prepare($link, $sql)) {
    mysqli_stmt_bind_param($stmt, "si", $param_schema, $param_id);
    $param_schema = serialize($numbers);
    $param_id = $_SESSION["id"];
    if (mysqli_stmt_execute($stmt)) {
        header("location: welcome.php");
        exit();
    } else {
        echo "Er is iets verkeerd gegaan probeer het later opnieuw.";
    }
    mysqli_stmt_close($stmt);
}