<?php

$numb = 0;

while ($numb <=100)
{

if ($numb <=20) //Si 20 est inf à 100
{
    echo "<i>$numb</i><br/>"; //Afficher en italique avec saut de ligne
}

elseif ($numb>24 && $numb<42)
{
    echo "<u>$numb</u><br/>";
}

elseif ($numb == 42)
{
    echo "La plateforme_<br/>";
}

elseif ($numb>42 && $numb<51)
{
    echo "<u>$numb</u><br/>";
}

else { 
    echo ("$numb<br/>"); //Afficher avec saut de ligne
}

$numb++; //0 + 1 en boucle jusqu'a 100


}

?>