<?php
// voorkeuren = list($voorkeuren);
// vleesVoorkeur = voorkeuren[0];
// lactoseVoorkeur = voorkeuren[1];
// glutenVoorkeur = voorkeuren[2];
// ["geenVlees","geenLactose","geenGluten"]
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
$link = '';
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
//$sql = "SELECT ingredienten FROM recepten WHERE ID = ?";
//if($stmt = mysqli_prepare($link, $sql)){
//    mysqli_stmt_bind_param($stmt, "i", $param_id);
//    $param_id = $_SESSION["id"];
//    mysqli_stmt_close($stmt);
//}
//
//$geenVleesRecepten = rand(1,14);
//$geenFilterRecepten = rand(15,28);
//$geenLactoseRecepten = rand(29,42);
//$geenGlutenRecepten = rand(,);

//if ($vleesVoorkeur == false AND $lactoseVoorkeur == false AND $glutenVoorkeur == false) {
 //   $ingredienten = rand(15,28);
//    $ingredienten = list($ingredienten);
//} else if ($vleesVoorkeur == true AND $lactoseVoorkeur == false AND $glutenVoorkeur == false) {

//}



$mail = array();
$klantenMail = list();


$dag;
$receptMaandag1;
$receptDinsdag1;
$receptWoensdag1;
$receptDonderdag1;
$receptVrijdag1;
$receptZaterdag1;
$receptZondag1;
$receptMaandag2;
$receptDinsdag2;
$receptWoensdag2;
$receptDonderdag2;
$receptVrijdag2;
$receptZaterdag2;
$receptZondag2;
$idKlant;
$subject = "Recept voor vandaag";
$headers = "From: noreply@freshie.com";
$aantalNogTeMailen = count($klantenMail);

    while ($aantalNogTeMailen != 0) {
        $idKlant = $aantalKlanten - $aantalNogTeMailen;
        $to = $klantenMail[$idKlant];
        // hier moet uit de list het emailadres uitgehaald worden
        if ($dag == 1) {
        $message = $receptMaandag1;
        mail($to, $subject, $message, $headers);
        $subject = "Ingrediënten hele week Freshie!"
        $message = $ingredienten;
        mail($to, $subject, $message, $headers);
        } else if ($dag == 2) {
            $message = $receptDinsdag1;
            mail($to, $subject, $message, $headers);
        } else if ($dag == 3) {
            $message = $receptWoensdag1;
            mail($to, $subject, $message, $headers);
        } else if ($dag == 4) {
            $message = $receptDonderdag1;
            mail($to, $subject, $message, $headers);
        } else if ($dag == 5) {
            $message = $receptVrijdag1;
            mail($to, $subject, $message, $headers);
        } else if ($dag == 6) {
            $message = $receptZaterdag1;
            mail($to, $subject, $message, $headers);
        } else if ($dag == 7) {
            $message = $receptZondag1;
            mail($to, $subject, $message, $headers);
        }
    }


