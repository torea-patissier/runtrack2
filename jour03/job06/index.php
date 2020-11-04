<?php

$str= "Les choses que l'on
possede finissent par nous posseder.";

for ($x = 0; isset($str[$x]); $x++) {

} // Permet de déplacer $x de 0 à 56 (nb de caractères)

for($x = $x - 1; $x >= 0; $x--) { 
     // POUR $x(56 à cause de 1er for)= $x - 1 (55) ; 
     //Tant que $x est > ou égal à 0;
     // $x -- (revenir en arrière)
    echo $str[$x];
}


?>