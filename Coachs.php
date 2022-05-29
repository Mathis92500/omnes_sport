<html lang="fr">

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
    <div class="dropdown">
      <div class="dropbtn">Actvités Sportives</div>
      <!--  Main Dropdown -->
      <div class="dropdown-one">
        <a id="link1" href="musculation.php" class="dItem">Musculation</a>
        <a id="link1" href="fitness.php" class="dItem">Fitness</a>
        <a id="link1" href="biking.php"class="dItem">Biking</a>
        <a id="link1" href="cardio_training.php"class="dItem">Cardio-Training</a>
        <a id="link1" href="cours_collectif.php"class="dItem">Cours Collectif</a>

      </div>
    </div>

    <div class="dropdown">
      <div class="dropbtn">Sports de Compétition</div>
      <!--  Main Dropdown -->
      <div class="dropdown-one">
        <a id="link1" href="basketball.php" class="dItem">Basketball</a>
        <a id="link1" href="football.php" class="dItem">Football</a>
        <a id="link1" href="rugby.php"class="dItem">Rugby</a>
        <a id="link1" href="tennis.php"class="dItem">Tennis</a>
        <a id="link1" href="plongeon.php"class="dItem">Plongeon</a>
        <a id="link1" href="natation.php"class="dItem">Natation</a>

      </div>
    </div>
    <input type="text" placeholder="Search..">
  </div>

  <caroussel>
        <div class="container">
            <input type="radio" name="slider" id="item-1" checked>
            <input type="radio" name="slider" id="item-2">
            <input type="radio" name="slider" id="item-3">
            <div class="cards">
                <label class="card" for="item-1" id="Picture-1">
                    <img src="PSG.jpg" alt="Picture">
                </label>
                <label class="card" for="item-2" id="Picture-2">
                    <img src="Rolland Garros.jpg" alt="Picture">
                </label>
                <label class="card" for="item-3" id="Picture-3">
                    <img src="F1.jpg">
                </label>
            </div>
        </div>
    </caroussel>



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