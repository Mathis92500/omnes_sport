<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Omnes Sport </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="RendezVous.css">
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
        function getIdentifiant(clicked_id) { }
    </script>


    <div class="navbar">
        <a href="Accueil.html">Omnes Sport</a>
        
        <input type="text" placeholder="Search..">
    </div>

    <footer>

        <h2>Nos services</h2>
        <div class="services">

            <div class="service">
                <h4>Salle de sport</h4>
                <p>L.</p>
            </div>

            <div class="service">
                <h4>Consultations</h4>
                <p>L.</p>
            </div>

            <div class="service">
                <h4>Aimé ou remboursé</h4>
                <p>L.</p>
            </div>

        </div>

        <p id="contact">Contact : 08 19 17 278 1 | &copy; 2021, Burgure.</p>
    </footer>




    
</body>
</html>

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

    $sql = "SELECT * FROM rdv WHERE id_client='$nom_client'";
    $result = mysqli_query($db_handle, $sql);

    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<th>" . "Nom coach" . "</th>";
    echo "<th>" . "Jour" . "</th>";
    echo "<th>" . "Heure" . "</th>";

    echo "</tr>";

    while ($data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $data['id_coach'] . "</td>";
        echo "<td>" . $data['jour'] . "</td>";
        echo "<td>" . $data['heure'] . "</td>";

        echo "</tr>";
    }



}
?>