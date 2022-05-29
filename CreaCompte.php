<?php

//saisir les donnÃ©es du formulaire
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$adresse_ligne_1 = isset($_POST["adresse_ligne_1"])? $_POST["adresse_ligne_1"] : "";
$adresse_ligne_2 = isset($_POST["adresse_ligne_2"])? $_POST["adresse_ligne_2"] : "";
$ville = isset($_POST["ville"])? $_POST["ville"] : "";
$code_postal = isset($_POST["code_postal"])? $_POST["code_postal"] : "";
$numero = isset($_POST["numero"])? $_POST["numero"] : "";
$pays = isset($_POST["pays"])? $_POST["pays"] : "";


echo "<meta charset=\"utf-8\">";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"dupontStyle.css\">";
//nomentifier votre BDD
$database = "omnes sport";
//nomentifier votre serveur (localhost), utlisateur (root), mot de passe ("")
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$sql = "";
//Si la BDD existe
if ($db_found) {
    
    echo "<p>Database found.</p>";

    $sql = "INSERT INTO `client` (`nom`,`prenom`,`adresse_ligne_1`,`adresse_ligne_2`,`ville`,`code_postal`,`pays`,`numero`,`carte_etudiante`,`mail`,`type_carte`,`numero_carte`,`nom_carte`,`date_expiration`,`CVV` ) VALUES ('$nom', '$prenom','$adresse_ligne_1','$adresse_ligne_2','$ville','$code_postal','$pays','$numero','0','$mail','0','0','0','2020-12-12','0')";
    $result =mysqli_query($db_handle, $sql);
    echo "<p>Add successful.</p>";
    echo "$mail";
    echo "$nom";
    echo "$prenom";
    echo "$adresse_ligne_1";
    echo "$adresse_ligne_2";
    echo "$ville";
    echo "$code_postal";
    echo "$numero";
    echo "$pays";

}else { 
echo "<br>Database not found";
 }

//fermer la connexion
mysqli_close($db_handle);
?>