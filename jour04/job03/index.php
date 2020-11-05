
<form action="index.php" method="post">

<label for="prénom">Prénom</label><br>
<input type="text" id="prenom" name="prénom" required><br><br>

<label form="nom">Nom</label><br>
<input type="text" id="nom" name="nom" required><br><br>

<label for="mot de passe">Mot de passe</label><br>
<input type="password" id="Mot de passe" name="Mot de passe" required><br><br>

<label for="sexe-a">Masculin</label>
<input type="radio" name="sexe" value="garçon" id="sexe-a"required>

<label for="sexe-b">Féminin</label>
<input type="radio" name="sexe" value="fille" id="sexe-b" required><br><br>

<input type="submit" value="Envoyer">

</form>

<?php
$var = 0; 

foreach ($_POST as $valeurs){
    $var++;
}

echo $var;
?>