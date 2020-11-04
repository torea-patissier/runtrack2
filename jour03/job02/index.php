<?php


$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

for ($cacao = 0; isset($str[$cacao]); $cacao++) {
     
}


 for($x = 0; $x < $cacao; $x = $x + 2){ 

     // Boucle FOR (expr1; expr2; expr3)
     // expr1 toujours executé  -- Créer une var x et lui donner la valeur 0
     // expr2 évaluée et executé si TRUE -- var x différent de strlen($str) soit le nb de caractères de la phrases
     // expr3 executé -- +1 permet de continuer la boucle tant que x != de strlen (77)

     echo $str[$x]; //afficher les lettre [$x] dans la variable $str -- 
 }



?>