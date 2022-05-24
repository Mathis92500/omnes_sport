<?php
$database = "omnes_sports";


$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);
 //si le BDD existe, faire le traitement

if ($db_found) {

    $sql = "SELECT * FROM coachs";
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
    echo "<th>" . "Mdp" . "</th>";
    echo "<th>" . "Choix" . "</th>";
    echo "</tr>";
    echo "<tr>";
    $a=1;
    while ($data = mysqli_fetch_assoc($result)) {
        
        $c="$a";
        $b="C:\Users\mathi\Desktop\ING3\WEBDYNAMIQUE\PROJET\photos_coachs\m".$c.".jpg";
        
        echo "<tr>";
        echo "<td>" . "<img src='$b' height='200' width='200'/>" . "</td>";
        echo "<td>" . $data['nom'] . "</td>";
        echo "<td>" . $data['prenom'] . "</td>";
        echo "<td>" . $data['bureau'] . "</td>";
        echo "<td>" . $data['telephone'] . "</td>";
        echo "<td>" . $data['sport'] . "</td>";
        echo "<td>" . $data['mail'] . "</td>";
        echo "<td>" . $data['mdp'] . "</td>";
        echo "</tr>";
        $a=$a+1;

    }
echo "</table>";

}


?>