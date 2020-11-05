
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job06</title>
</head>

<body>

<form action="index.php" method="get">  

<label form="nombre">nombre</label><br>
<input type="text" id="nombre" name="Nombre" required><br><br>

<input type="submit" name="submit" value="submit">

</form>

<?php


if(isset($_GET["submit"])){
    if ($_GET["Nombre"]%2 == 0 ){
        echo "Nombre pair";
    }
    else{
        echo "Nombre impair";
    }
}

?>

</body>
</html>
