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
$klantenMail = null;
$dag = null;
require_once "config.php";

$mail = array();
// Uit sql moeten de emails in een array worden gezet en dat moet hier gaan gebeuren
//$klantenMail =
$i = 0;
$sql = "SELECT email FROM users WHERE ID = ?";
if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    $param_id = $i;

    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);

        mysqli_stmt_bind_result($stmt, $voorkeuren);
        if(mysqli_stmt_fetch($stmt)){
            $klantenMail = $voorkeuren;
        }
    }
}

if ($dag == null) {
    $dag = 1;
}

$subject = "Recept voor vandaag";
$headers = "From: noreply@freshie.com";
$aantalNogTeMailen = count($klantenMail);
$aantalKlanten = $aantalNogTeMailen;
while ($aantalNogTeMailen != 0) {
    $idKlant = $aantalKlanten - $aantalNogTeMailen;
    $to = $klantenMail[$idKlant];
    $aantalNogTeMailen = $aantalNogTeMailen - 1;
    // hier moeten uit het persoonlijke schema wat gegenereerd is en dat in sql staat
    // alle recepten worden uit gehaald en gedefineerd worden
    $receptMaandag1 = "";
    $receptDinsdag1 = "";
    $receptWoensdag1 = "";
    $receptDonderdag1 = "";
    $receptVrijdag1 = "";
    $receptZaterdag1 = "";
    $receptZondag1 = "";
    $receptMaandag2 = "";
    $receptDinsdag2 = "";
    $receptWoensdag2 = "";
    $receptDonderdag2 = "";
    $receptVrijdag2 = "";
    $receptZaterdag2 = "";
    $receptZondag2 = "";

    if ($dag == 1) {
        $message = $receptMaandag1;
        mail($to, $subject, $message, $headers);
        $dag = $dag + 1;
        } else if ($dag == 2) {
        $message = $receptDinsdag1;
        mail($to, $subject, $message, $headers);
        $dag = $dag + 1;
    } else if ($dag == 3) {
        $message = $receptWoensdag1;
        mail($to, $subject, $message, $headers);
        $dag = $dag + 1;
    } else if ($dag == 4) {
        $message = $receptDonderdag1;
        mail($to, $subject, $message, $headers);
        $dag = $dag + 1;
    } else if ($dag == 5) {
        $message = $receptVrijdag1;
        mail($to, $subject, $message, $headers);
        $dag = $dag + 1;
    } else if ($dag == 6) {
        $message = $receptZaterdag1;
        mail($to, $subject, $message, $headers);
        $dag = $dag + 1;
    } else if ($dag == 7) {
        $message = $receptZondag1;
        mail($to, $subject, $message, $headers);
    } else if ($dag == 8) {
        $message = $receptMaandag2;
        mail($to, $subject, $message, $headers);
        $dag = $dag + 1;
    } else if ($dag == 9) {
        $message = $receptDinsdag2;
        mail($to, $subject, $message, $headers);
        $dag = $dag + 1;
    } else if ($dag == 10) {
        $message = $receptWoensdag2;
        mail($to, $subject, $message, $headers);
        $dag = $dag + 1;
    } else if ($dag == 11) {
        $message = $receptDonderdag2;
        mail($to, $subject, $message, $headers);
        $dag = $dag + 1;
    } else if ($dag == 12) {
        $message = $receptVrijdag2;
        mail($to, $subject, $message, $headers);
        $dag = $dag + 1;
    } else if ($dag == 13) {
        $message = $receptZaterdag2;
        mail($to, $subject, $message, $headers);
        $dag = $dag + 1;
    } else if ($dag == 14) {
        $message = $receptZondag2;
        mail($to, $subject, $message, $headers);
        $dag = 1;
    }
}