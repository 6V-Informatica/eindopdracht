<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
const DB_SERVER = 'freshie.ddns.net';
const DB_USERNAME = 'root';
const DB_PASSWORD = 'FreshieSQL7481';
const DB_NAME = 'freshie';

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
