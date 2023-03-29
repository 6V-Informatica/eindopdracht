<?php
// Start een sessie
session_start();

// Zorg ervoor dat alle data uit de sessie wordt weggehaald
$_SESSION = array();

// Maak de sessie kapot
session_destroy();

// Verwijs door naar de home-pagina
header("location: index.php");
exit;
