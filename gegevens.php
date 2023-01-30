<?php

$server = "localhost";
$gebruikersnaam = "meesterproef";
$wachtwoord = "LZ6TRM4qkc"; 
$database = "meesterproef_1";

$verbinding = mysqli_connect($server, $gebruikersnaam, $wachtwoord, $database, 3306);


if (!$verbinding) {
    exit("Verbinding mislukt met de database!");
}

?>