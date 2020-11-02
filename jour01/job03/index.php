<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

$bool = true;
$int = 10;
$str = "coucou";
$float = 2.3;


?>

<body>

<table>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td><?php echo gettype ($bool)?></td>
            <td><?php echo "Vrai" ?></td>
            <td><?php echo $bool ?></td>
        </tr>
        <tr>
            <td><?php echo gettype ($int)?></td>
            <td><?php echo "Chiffre entier" ?></td>
            <td><?php echo $int ?></td>
        </tr>
        <tr>
            <td><?php echo gettype ($str)?></td>
            <td><?php echo "Texte"?></td>
            <td><?php echo $str?></td>
        </tr>
        <tr>
            <td><?php echo gettype ($float)?></td>
            <td><?php echo "Chiffre à décimale" ?></td>
            <td><?php echo $float ?></td>
        </tr>
    </table>
    
</body>
</html>