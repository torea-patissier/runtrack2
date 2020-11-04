<?php

//Variable ($tab_chiffres) associé à un tableau(array) dans lequel on met des valeurs (CHIFFRES)
$tab_chiffres = array (200,204,173,98,171,404,459);
{

foreach ($tab_chiffres as $tab)
{  //Pour chaque->(foreach) valeurs de ($tab_chiffres) créer une variable ($tab)

    if ($tab%2 == 1){  // Formule pour trouver et classer les nombres pairs et impairs
        echo "$tab est Impair<br/>";
    }
    
    else {
        echo "$tab est Pair<br/>";
    }
}


}
?>
