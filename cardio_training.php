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

    $sql = "SELECT * FROM coachs WHERE sport='Cardio-Training'";
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
    echo "</tr>";
    $a=7;
    while ($data = mysqli_fetch_assoc($result)) {
        
        $c="$a";
        $b="C:\wamp64\www\omnes_sport\photos_coachs\m".$c.".jpg";
        
        echo "<tr>";
        echo "<td>" . "<img src='$b' height='200' width='200'/>" . "</td>";
        echo "<td>" . $data['nom'] . "</td>";
        echo "<td>" . $data['prenom'] . "</td>";
        echo "<td>" . $data['bureau'] . "</td>";
        echo "<td>" . $data['telephone'] . "</td>";
        echo "<td>" . $data['sport'] . "</td>";
        echo "<td>" . $data['mail'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        $a=$a+1;

    }
echo "</table>";

}
?>

<footer>

    <h1>Nos services</h1>
    <div class="services">

      <div class="service">
        <h3>Salle de sport</h3>
        <p>L.</p>
      </div>

      <div class="service">
        <h3>Consultations</h3>
        <p>L.</p>
      </div>

      <div class="service">
        <h3>Aimé ou remboursé</h3>
        <p>L.</p>
      </div>

    </div>

    <p id="contact">Contact : 08 19 17 278 1 | &copy; 2021, Burgure.</p>
  </footer>
</body>

</html>

