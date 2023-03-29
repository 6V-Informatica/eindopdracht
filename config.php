<?php
/* Database inlogcodes */
const DB_SERVER = 'freshie.ddns.net'; // IP van de database
const DB_USERNAME = 'root'; // Gebruikersnaam van de database
const DB_PASSWORD = 'FreshieSQL7481'; // Wachtwoord van de database
const DB_NAME = 'freshie'; // Naam van de database

/* Een link aangaan met de database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Als er een error is, moet de connectie gestopt worden
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
