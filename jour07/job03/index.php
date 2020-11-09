<?php
session_start();
// Si prénom dans la var $[] n'est pas défini { alors $[] est une chaine de caractère vide} & prénom est ajouté à la var $[]
if(!isset($_SESSION["prénom"])){
    $_SESSION["prénom"] = "";
}
// Si envoyer dans la var $[] est défini { alors $[] = $[] Ancienne entrée + $_POST (nouvelle entrée)} DANS CE CAS le (.) = (+)
if(isset($_POST["Envoyer"])){
    $_SESSION["prénom"] = $_SESSION["prénom"] . $_POST["prénom"]. "<br />";
    echo $_SESSION["prénom"];
}

if(isset($_POST["Reset"])){

    header("location: index.php");
    $_SESSION["prénom"] = null;
}

?>

<form action="index.php" method="post">
    <label for="prénom">Prénom</label>
        <input type="text" name="prénom" id="prénom" >

        <input type="submit" name="Envoyer" id="Envoyer">

        <input type="submit" name="Reset" id="Reset" value="Reset">

</form>
    

<!-- Créez un formulaire qui contient un input de type de text nommé “prenom”
et un bouton submit.

Lorsque l’on valide le formulaire, le prénom est ajouté
dans une variable de session.

Afficher l’ensemble des prénoms.

Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. -->