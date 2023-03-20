<?php
// Initialize the session
session_start();

// Unset all the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
header("location: index.php");
exit;
?>

<?php
//// Een array maken met 14 getallen van 1 tot 14
//$array = range(1, 14);
//
//// De array randomiseren met de shuffle-functie
//shuffle($array);
//
//// De array serialiseren met de serialize-functie
//$serialized = serialize($array);
//
//// De geserialiseerde tekenreeks afdrukken om het resultaat te zien
//echo $serialized;
//?>
