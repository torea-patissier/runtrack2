
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job05</title>
</head>

<body>

<form action="index.php" method="post">  

<label form="username">username</label><br>
<input type="text" id="username" name="username" required><br><br>

<label for="password">password</label><br>
<input type="password" id="password" name="password" required><br><br>

<input type="submit" name="zebi" >

</form>

<?php

if(isset($_POST["zebi"])){ //is set = est défini (L'input (zebi) de _POST);
if(($_POST["username"]) == "John" && ($_POST["password"]) == "Rambo"){
    echo ("C'est pas ma guerre");
}
    else {
        echo ("Votre pire cauchemar");
    }
}


?>

</body>
</html>
