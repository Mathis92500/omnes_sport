<html lang="fr">

<?php
// Start the session
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Omnes Sport </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Compte1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

</head>

<?php
// Set session variables (variables globales)
$_SESSION["mail"] = "";
$_SESSION["mdp"] = "";
?>

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
        <a href="Compte.html">Votre Compte</a>
        <form method="post" action="recherche.php">
            <input type="text" name="recherche" id="recherche" placeholder="Search..">
        </form>
    </div>

    <div class="conta">
        <div class="container">
            <link rel="stylesheet" href="2.css">
            <form action="principale.php" method="POST">
            <form class="login">
                <h2>OmnesSport</h2>
                <h2>Se connecter </h2>
                <br>
                <input id="truc" type="mail" name="mail" placeholder="Email"><br>
                <input id="truc" type="mdp" name="mdp" placeholder="Mot de passe"><br>
                
                <input id="truc" type="submit" name="Connexion" value="Connexion"><br>
                <br>
                <a id="truc" href="CreaCompte.html">Créer votre compte client</a>
                <a id="truc" href="CreaCompteCoach.html">Créer votre compte coach</a>
                <br></br>
                <br></br>
                <a id="truc" href="CreaCompteEmployee.html">Créer votre compte administrateur</a>

            </form>
            </form>

            
            
            

<!--
            <div class="drop drop-1"></div>
            <div class="drop drop-2"></div>
            <div class="drop drop-3"></div>
            <div class="drop drop-4"></div>
            <div class="drop drop-5"></div>-->

        </div>
    </div>

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