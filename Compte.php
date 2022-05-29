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
    <link rel="stylesheet" href="Compte.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            <form>
                <h2>OmnesSport</h2>
                <h2>Se connecter </h2>
                <br>
                <input id="truc" type="mail" placeholder="Email"><br>
                <input id="truc" type="mdp" placeholder="Mot de passe"><br>
                <input id="truc" onclick="clickMe()" type="button" value="Connexion"><br>
                <br>
                <a href="CreaCompte.html">Créer votre compte client</a>
                <a href="CreaCompteCoach.html">Créer votre compte coach</a>
                <a href="CreaCompteEmployee.html">Créer votre compte administrateur</a>

            </form>

            <script>
                function clickMe() {
                    var result = "<?php php_func(); ?>"
                    document.write(result);
                }
            </script>

            <?php
            function php_func()
            {

                $database = "omnes_sports";
                $db_handle = mysqli_connect('localhost', 'root', '');
                $db_found = mysqli_select_db($db_handle, $database);

                $mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";
                $mail = isset($_POST["mail"]) ? $_POST["mail"] : "";

                if ($db_found) {
                    $sql = "SELECT * FROM coachs WHERE 'mail'='$mail' and 'mdp'='$mdp'";
                    $num_rows = mysqli_query($db_handle, $sql);

                    if ($num_rows > 0) {
                        // do something
                        echo "Trop bien";

                    } else {
                        // do something else
                        echo "Trop nul";
                    }
                } else {
                }
            }
            ?>

            


            <div class="drop drop-1"></div>
            <div class="drop drop-2"></div>
            <div class="drop drop-3"></div>
            <div class="drop drop-4"></div>
            <div class="drop drop-5"></div>

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