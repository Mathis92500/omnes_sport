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
  <link rel="stylesheet" href="Coachs.css">

</head>

<body>

  <div class="navbar">
    <a href="Accueil.html">Omnes Sport</a>
    <div class="dropdown">
      <div class="dropbtn">Actvités Sportives</div>
      <!--  Main Dropdown -->
      <div class="dropdown-one">
        <div id="link1" class="dItem">Musculation
          <!--  Inside Dropdown -->
          <div class="dropdown-two">
            <a name="DUMAIS" href="musculation.php" value="1" class="dItem" onclick="affiche_coach()">Coach 1</a>
            <a name="Identifiant" href="fitness.php" value="2" class="dItem" onClick="reply_click(this.value)">Coach 2</a>
          </div>
        </div>
        <div id="link1" class="dItem">Fitness
          <!--  Inside Dropdown -->
          <div class="dropdown-two">
            <a name="Identifiant" value="3" class="dItem" onClick="reply_click(this.id)">Coach 3</a>
            <a name="Identifiant" value="4" class="dItem" onClick="reply_click(this.id)">Coach 4</a>
          </div>
        </div>
        <div id="link1" class="dItem">Biking
          <!--  Inside Dropdown -->
          <div class="dropdown-two">
            <a name="Identifiant" value="5" class="dItem" onClick="reply_click(this.id)">Coach 5</a>
            <a name="Identifiant" value="6" class="dItem" onClick="reply_click(this.id)">Coach 6</a>
          </div>
        </div>
        <div id="link1" class="dItem">Cardio-Training
          <!--  Inside Dropdown -->
          <div class="dropdown-two">
            <a name="Identifiant" value="7" class="dItem" onClick="reply_click(this.id)">Coach 7</a>
            <a name="Identifiant" value="8" class="dItem" onClick="reply_click(this.id)">Coach 8</a>
          </div>
        </div>
      </div>
    </div>

    <div class="dropdown">
      <div class="dropbtn">Sports de Compétition</div>
      <!--  Main Dropdown -->
      <div class="dropdown-one">
        <div id="link1" class="dItem">Basketball
          <!--  Inside Dropdown -->
          <div class="dropdown-two">
            <div class="dItem" id="file">Coach 1</div>
            <div class="dItem" id="file">Coach 2</div>
          </div>
        </div>
        <div id="link1" class="dItem">Football
          <!--  Inside Dropdown -->
          <div class="dropdown-two">
            <div class="dItem" id="">Coach 1</div>
            <div class="dItem" id="file" file>Coach 5</div>
          </div>
        </div>
        <div id="link1" class="dItem">Rugby
          <!--  Inside Dropdown -->
          <div class="dropdown-two">
            <div class="dItem" id="file">Coach 1</div>
            <div class="dItem" id="file">Coach 4</div>
          </div>
        </div>
        <div id="link1" class="dItem">Tennis
          <!--  Inside Dropdown -->
          <div class="dropdown-two">
            <div class="dItem" id="file">Coach 1</div>
            <div class="dItem" id="file">Coach 3</div>
          </div>
        </div>
      </div>
    </div>
    <input type="text" placeholder="Search..">
  </div>



<?php
$database = "omnes_sports";


$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) {

    $sql = "SELECT * FROM coachs WHERE sport='Fitness'";
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
    $a=1;
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

