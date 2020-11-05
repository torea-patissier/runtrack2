
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job07</title>
</head>

<body>

<form action="index.php" method="get">  

<label form="Largeur">Largeur</label><br>
<input type="text" id="Largeur" name="largeur" required><br><br>

<label form="Hauteur">Hauteur</label><br>
<input type="text" id="Hauteur" name="hauteur" required><br><br>

<input type="submit" name="submit"  value="Envoyer">

</form>

<?php

if(isset($_GET["submit"])){
if(($_GET["largeur"]) == "10" && ($_GET["hauteur"]) == "5"){

    echo ("/\<br/>
          /__\<br/>
         /____\<br/>
        /______\<br/>
       /________\<br/>
       |        |<br/>
       |        |<br/>
       |        |<br/>
       |        |<br/>
       |________|<br/>");
}

if(($_GET["largeur"]) == "20" && ($_GET["hauteur"]) == "10"){
    
    echo ("/\<br/>
          /__\<br/>
         /____\<br/>
        /______\<br/>
       /________\<br/>
      /__________\<br/>
     /____________\<br/>
    /______________\<br/>
   /________________\<br/>
  /__________________\<br/>
  |                  |<br/>
  |                  |<br/>
  |                  |<br/>
  |                  |<br/>
  |                  |<br/>
  |                  |<br/>
  |                  |<br/>
  |                  |<br/>
  |                  |<br/>
  |__________________|<br/>
    ");
}

}


?>

</body>
</html>
