<?php

$nombre = 0;
$nombremax = 1337;

while ($nombre <= $nombremax)
{
    echo ($nombre);
    $nombre = $nombre+1;
    echo ("<br/>");

    if ($nombre == 42) 
    {
        echo "<b><u>";
    }
    else
    {
        echo "</b></u>";
    }

}

?>