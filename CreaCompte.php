<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Omnes Sport </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Compte.css">
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
        <input type="text" placeholder="Search..">

    </div>


    <?php

    //saisir les donnÃ©es du formulaire
    $nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
    $prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
    $mail = isset($_POST["mail"]) ? $_POST["mail"] : "";
    $adresse_ligne_1 = isset($_POST["adresse_ligne_1"]) ? $_POST["adresse_ligne_1"] : "";
    $adresse_ligne_2 = isset($_POST["adresse_ligne_2"]) ? $_POST["adresse_ligne_2"] : "";
    $ville = isset($_POST["ville"]) ? $_POST["ville"] : "";
    $code_postal = isset($_POST["code_postal"]) ? $_POST["code_postal"] : "";
    $numero = isset($_POST["numero"]) ? $_POST["numero"] : "";
    $pays = isset($_POST["pays"]) ? $_POST["pays"] : "";
    $mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";



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

       // echo "<p>Database found.</p>";

        $sql = "INSERT INTO `client` (`nom`,`prenom`,`adresse_ligne_1`,`adresse_ligne_2`,`ville`,`code_postal`,`pays`,`numero`,`carte_etudiante`,`mail`,`type_carte`,`numero_carte`,`nom_carte`,`date_expiration`,`CVV`,`mdp` ) VALUES ('$nom', '$prenom','$adresse_ligne_1','$adresse_ligne_2','$ville','$code_postal','$pays','$numero','0','$mail','0','0','0','2020-12-12','0','$mdp')";
        $result = mysqli_query($db_handle, $sql);
        /*echo "<p>Add successful.</p>";
        echo "$mail";
        echo "$nom";
        echo "$prenom";
        echo "$adresse_ligne_1";
        echo "$adresse_ligne_2";
        echo "$ville";
        echo "$code_postal";
        echo "$numero";
        echo "$pays";*/
    } else {
        echo "<br>Database not found";
    }

    //fermer la connexion
    mysqli_close($db_handle);
    ?>

        <a href="Accueil.html">Retour à l'acceuil</a>

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

</html>