<?php
session_start();
$nom_client=$_SESSION['nom_client'];

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
    }
    if($foo==true)
    {
        if($nom_client!==""){
    $sql = "INSERT INTO `rdv`(`id_coach`,`id_client`, `jour`, `heure`) VALUES ('$nom','$nom_client','$jour','$heure')";
    $result = mysqli_query($db_handle, $sql);
    echo "RDV ok ! Vous pouvez consulter vos rdv dans la page Rendez-Vous";
    
        }
    }

    

}
}

?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Omnes Sport </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Compte1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>

<body>

    <script type="text/javascript">
        function reply_click(clicked_id) {
            //alert(clicked_id);
            //console.log(clicked_id);
        }

        function getIdentifiant(clicked_id) {}
    </script>

    <div class="navbar">
        <a href="Accueil.html">Omnes Sport</a>
        <a href="Coachs.php">Tout Parcourir</a>
        <a href="RendezVous.html"> Rendez-Vous</a>
        <a href="Comte.php"> Votre Compte</a>
        <form method="post" action="recherche.php">
            <input type="text" name="recherche" id="recherche" placeholder="Search..">
        </form>
    </div>



        <a href="Accueil.html">Retour à l'acceuil</a>

        <footer>
        <div class="machin">
            <div class="col-sm-4">

                <h2>Nos services</h2>
                <div class="services">

                    <div class="service">
                        <h4>Salle de sport</h4>
                        <p>Nos salles de sports sont très belles et extrèmement bien équipée.</p>
                    </div>

                    <div class="service">
                        <h4>Rendez-Vous</h4>
                        <p>Prenez rendez-vous avec l'un de nos nombreux coachs de renom.</p>
                    </div>

                    <div class="service">
                        <h4>Satisfait ou remboursé</h4>
                        <p>Essayez nos services pendants 30 jours.</p>
                    </div>

                </div>
                <p id="contact">Contact : 08 19 17 278 1 | &copy; 2022, Omnes Sport.</p>
            </div>

            
        </div>
    </footer>

</html>