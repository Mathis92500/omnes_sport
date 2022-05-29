<?php
session_start();
$database = "omnes sport";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);
 //si le BDD existe, faire le traitement

if ($db_found) {

if (isset($_POST["button1"])) {
    $foo= true;
    $jour= isset($_POST["jour"])? $_POST["jour"] : "";
    $heure= isset($_POST["heure"])? $_POST["heure"] : "";
    $nom= isset($_POST["nom"])? $_POST["nom"] : "";
    $prenom= isset($_POST["prenom"])? $_POST["prenom"] : "";
    

    $sql = "SELECT * FROM rdv WHERE id_coach='$nom'";
    $result = mysqli_query($db_handle, $sql);
    while ($data = mysqli_fetch_assoc($result)) {
        if(($data["jour"]==$jour)&&($data["heure"]==$heure))
        {
            echo "Le coach à déjà un rdv sur ce créneau ! Veuillez en choisir un autre !";
            $foo=false;
        }
        else{
            $sql = "INSERT INTO `rdv`(`id_coach`, `id_client`, `jour`, `heure`) VALUES ('$nom','aaa','$jour','$heure')";
            
        }
    }
    if($foo==true)
    {
    echo "RDV ok ! Vous pouvez consulter vos rdv dans la page Rendez-Vous";
    }

    

}
}

?>