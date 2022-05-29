<?php

//saisir les donnÃ©es du formulaire
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";

echo "<meta charset=\"utf-8\">";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"dupontStyle.css\">";
//nomentifier votre BDD
$database = "tpnote2";
//nomentifier votre serveur (localhost), utlisateur (root), mot de passe ("")
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$sql = "";
//Si la BDD existe
if ($db_found) {
    
    $sql = "INSERT INTO coachs (nom, prenom, mail,mdp ) VALUES ('$nom', '$prenom', '$mail', '$mdp')";
    $result =mysqli_query($db_handle, $sql);
    echo "<p>Add successful.</p>";

}else { 
echo "<br>Database not found";
 }

//fermer la connexion
mysqli_close($db_handle);
?>