<?php
session_start();
$database = "omnes_sports";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);
 //si le BDD existe, faire le traitement

if ($db_found) {

if (isset($_POST["button1"])) {
    $jour= isset($_POST["jour"])? $_POST["jour"] : "";
    $heure= isset($_POST["heure"])? $_POST["heure"] : "";
    
}
}

?>