<?php
session_start();

            if (isset($_POST["Connexion"])) {
                $database = "omnes sport";
                $db_handle = mysqli_connect('localhost', 'root', '');
                $db_found = mysqli_select_db($db_handle, $database);

                $mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";
                $mail = isset($_POST["mail"]) ? $_POST["mail"] : "";
               
                if ($db_found) {
                    $sql = "SELECT * FROM `client` WHERE `mail`='$mail' and `mdp`='$mdp'";
                    $resultat = mysqli_query($db_handle, $sql);
                    while ($data = mysqli_fetch_assoc($resultat)) {
                        
                    $_SESSION['nom_client'] = $data['nom'];

                    }
                    header('Location: Accueil.html');
                   
                } 
            }
            ?>
