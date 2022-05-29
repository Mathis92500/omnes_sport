<html lang="fr">

<?php
/*session_start();
$nom = ($_GET['action']);

$_SESSION["nomMedecin"] = $nom;
*/
?>



<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site Omnes Sport </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Coachs1.css">

</head>

<body>

  <div class="navbar">
    <a href="Accueil.html">Omnes Sport</a>
    <input type="text" placeholder="Search..">
  </div>

<?php
$database = "omnes sport";


$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) {

    $sql = "SELECT * FROM coachs WHERE sport='Tennis Competitif'";
    $result = mysqli_query($db_handle, $sql);
    
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<th>" . "Photo" . "</th>";
    echo "<th>" . "Nom" . "</th>";
    echo "<th>" . "Prénom" . "</th>";
    echo "<th>" . "Bureau" . "</th>";
    echo "<th>" . "Téléphone" . "</th>";
    echo "<th>" . "Sport" . "</th>";
    echo "<th>" . "Mail" . "</th>";
    echo "<th>" . "Choix" . "</th>";

    echo "</tr>";
    $a=17;
    while ($data = mysqli_fetch_assoc($result)) {
        
        $c="$a";
        $b="C:\wamp64\www\omnes_sport\photos_coachs\m".$c.".jpg";
        $z=$data['nom']."_".$data['prenom'];

        echo "<tr>";
        echo "<td>" . "<img src='$b' height='200' width='200'/>" . "</td>";
        echo "<td>" . $data['nom'] . "</td>";
        echo "<td>" . $data['prenom'] . "</td>";
        echo "<td>" . $data['bureau'] . "</td>";
        echo "<td>" . $data['telephone'] . "</td>";
        echo "<td>" . $data['sport'] . "</td>";
        echo "<td>" . $data['mail'] . "</td>";
        echo "<td>" . "<input type='button' id='$z' onclick='reply_onclick(this.id)' value='Choisir ce coach'>" ."</td>";

        echo "</tr>";
        echo "<tr>";
        $a=$a+1;

    }
echo "</table>";

}
?>
<form method="post" action="rdv.php">
        <tr>
        <td>Nom Coach :</td>
        <td><input type="text" id="12" name="nom"></td>
        </tr>
        <tr>
        <td>Prenom Coach:</td>
        <td><input type="text" id="13" name="prenom"> </td>
        </tr>
            <!--Type date pour choissir son anniversaire  -->
        
        <td>
        <td colspan="2" align="center">
     <!--Bouton pour valider le formulaire  -->
<input type="submit" name="button1" value="Prendre RDV avec ce coach">
</td>
</form>


<script type="text/javascript">

function reply_onclick(clicked_id) {
    
    a=clicked_id.split('_');
    var Myelement = document.getElementById("12");
   
    Myelement.value = a[0];
    console.log(Myelement.value);

    var Myelement = document.getElementById("13");
    Myelement.value = a[1];
    console.log(Myelement.value);
    
}
</script>
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
                <br></br>
            </div>

            <div class="col-sm-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84020.35679770722!2d2.1404457092285276!3d48.846078571874976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671a7ae7c6039%3A0xfcf852a8ee294df7!2sBasic-Fit%20Paris%20Avenue%20Emile%20Zola!5e0!3m2!1sfr!2sfr!4v1653663327892!5m2!1sfr!2sfr" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            
        </div>
    </footer>
</body>

</html>

