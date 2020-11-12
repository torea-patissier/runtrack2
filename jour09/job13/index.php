<?php

$db = mysqli_connect("localhost", "root", "root", "Jour08");
$requete = "SELECT salles.nom AS 'Nom de la Salle', etage.nom AS 'Nom de l'étage' 
FROM salles INNER JOIN etage ON salles.id_etage = etage.id";
$query = mysqli_query($db, $requete);
echo '<table>';
$x = 0;

while (($resultat = mysqli_fetch_assoc($query)) != null) 
{
    if ($x == 0) {
        echo '<thead>';
        foreach ($resultat as $key => $value) {
            echo '<th>' . $key . '</th>';
        }
        echo '</thead>';
        $x = +1;
    }
    echo '<tbody>';
    foreach ($resultat as $key => $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tbody>';
}
echo '</table>';
