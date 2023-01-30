<?php

// Gegevens van database inladen
include "gegevens.php";

if (isset($_POST["inloggen"])) {
    $Naam = $_POST["Naam"];
    $Wachtwoord = $_POST["Wachtwoord"];

    $query = "SELECT * FROM Werknemers WHERE Naam = '$Naam' AND Wachtwoord = '$Wachtwoord'";
    $resultaat = mysqli_query($verbinding, $query);
    $aantal = mysqli_num_rows($resultaat);

    if ($aantal == 1){

        session_start();
        $_SESSION["Naam"] = $Naam;
        header("location: admin.php");

    } else {

       header("Location: inloggen.php");

    }
    

} else {
    
    header("Location: inloggen.php");
    
}

?>