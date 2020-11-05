
<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job02</title>
</head>
<body>
<form action="index.php" method="get">  

<label for="prénom">Prénom</label><br>
<input type="text" id="prenom" name="prénom" required><br><br>

<label form="nom">Nom</label><br>
<input type="text" id="nom" name="nom" required><br><br>

<label for="mot de passe">Mot de passe</label><br>
<input type="password" id="Mot de passe" name="Mot de passe" required><br><br>

<input type="submit" value="Envoyer">

</form>

<table>
<tr>
    <th>arguments</th>
    <th>valeurs</th>
</tr>
    


<?php
//Foreach = pour chaque (arguments [Nom/Prénom/MDP] de GET)
// as = transforme en la variable $arguments 
foreach ($_GET as $key => $value){
    echo '<tr>
    <td>'.$key.'</td>
    <td>'.$value.'</td>
    </tr>';
}


?>
</table>
</body>
</html>
