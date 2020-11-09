<?php

session_start();

if (!isset ($_SESSION["nbvisites"])){

$_SESSION["nbvisites"] = 1;

}

else{

$_SESSION["nbvisites"]++;

echo  $_SESSION["nbvisites"];

}

if (isset($_POST["reset"])){

header('location: index.php');

$_SESSION["nbvisites"] = 0;

}


?>

<form action="index.php" method="post">
    <input type="submit" value="supprimer" name="reset" >
</form>


<!-- Créez une variable de session nommée “nbvisites”.

A chaque fois que la page est visitée, ajoutez 1. 

Afficher le contenu de cette variable.


Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->