<?php
session_start();

if(!isset($_COOKIE["prénom"])){
    setcookie("prénom", 0);
}

if(isset($_POST["Envoyer"])){
    $_POST["prénom"] = ($_POST["prénom"]) . setcookie($_COOKIE["prénom"]);

    echo $_COOKIE["prénom"];
}



?>

<form action="index.php" method="post">

    <label for="prénom">Prénom</label>
        <input type="text" name="prénom" id="prénom" >

        <input type="submit" name="Envoyer" id="Envoyer">

        <input type="submit" name="Connexion" id="Connexion" value="Connexion">

</form>

<!-- Créez un formulaire de connexion qui contient un input de type de text
nommé “prenom” et un bouton submit nommé “connexion”.

Lorsque l’on valide le formulaire, le prénom est ajouté dans un cookie. 

Si un utilisateur a déjà entré son prénom n'affichez plus le formulaire de connexion. 

A la place, écrivez “Bonjour prenom !” 

et ajouter un bouton “Déconnexion” nommé “deco”.

Lorsque l’utilisateur se déconnecte, il faut à nouveau
afficher le formulaire de connexion. -->