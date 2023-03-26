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

$sql = "SELECT weekschema FROM users WHERE ID = ?";
if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    $param_id = $_SESSION["id"];

    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $schema_serialized);
        if(mysqli_stmt_fetch($stmt)){
            if(is_null($schema_serialized)){
                header("location: schema-generator.php");
            }
            $schema = unserialize($schema_serialized);

        }
    }
}

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

foreach ($schema as $value){
    $sql = "SELECT ingredienten FROM recepten WHERE ID = ?";
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $recept_id);
        $recept_id = intval($value);

        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            mysqli_stmt_bind_result($stmt, $recept_ingredienten);
            if(mysqli_stmt_fetch($stmt)){
                $ingredienten = $ingredienten + "<br />" + $recept_ingredienten;
            }
        }
    }
}

//$geenVleesRecepten = rand(1,14);
//$geenFilterRecepten = rand(15,28);
//$geenLactoseRecepten = rand(29,42);
//$geenGlutenRecepten = rand(,);

//if ($vleesVoorkeur == false AND $lactoseVoorkeur == false AND $glutenVoorkeur == false) {
//    $ingredienten = rand(15,28);
//    $ingredienten = list($ingredienten);
//} else if ($vleesVoorkeur == true AND $lactoseVoorkeur == false AND $glutenVoorkeur == false) {
//
//}
//


$mail = array();

$sql = "SELECT email FROM users";
if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $recept_id);

    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $user_email);
        if(mysqli_stmt_fetch($stmt)){
            $mail = $recept_ingredienten;
        }
    }
// hier moeten de emailadressen die graag een email willen ontvangen uit sql worden uitgelezen en opgeslagen
aantalKlanten = list();
// hier moet het totale aantal ingeschreven mensen komen

var $dag;
var $receptMaandag1;
var $receptDinsdag1;
var $receptWoensdag1;
var $receptDonderdag1;
var $receptVrijdag1;
var $receptZaterdag1;
var $receptZondag1;
var $receptMaandag2;
var $receptDinsdag2;
var $receptWoensdag2;
var $receptDonderdag2;
var $receptVrijdag2;
var $receptZaterdag2;
var $receptZondag2;
var $idKlant;
$subject = "Recept voor vandaag";
$headers = "From: noreply@freshie.com";
$aantalNogTeMailen = count($klantenMail);

    while ($aantalNogTeMailen != 0) {
        idKlant = aantalKlanten - aantalNogTeMailen;
        $to = klantenMail[idKlant];
        // hier moet uit de list het emailadres uitgehaald worden
        if (dag == Maandag) {
        $message = $receptMaandag1;
        mail($to, $subject, $message, $headers);
        $subject = "Ingrediënten hele week Freshie!";
        $message = $ingredienten;
        mail($to, $subject, $message, $headers);
        } else if (dag == Dinsdag) {
            $message = receptDinsdag;
            mail($to, $subject, $message, $headers);
        } else if (dag == Woensdag) {
            $message = receptWoensdag;
            mail($to, $subject, $message, $headers);
        } else if (dag == Donderdag) {
            $message = receptDonderdag;
            mail($to, $subject, $message, $headers);
        } else if (dag == Vrijdag) {
            $message = receptVrijdag;
            mail($to, $subject, $message, $headers);
        } else if (dag == Zaterdag) {
            $message = receptZaterdag;
            mail($to, $subject, $message, $headers);
        } else if (dag == Zondag) {
            $message = receptZondag;
            mail($to, $subject, $message, $headers);
        }
    }


