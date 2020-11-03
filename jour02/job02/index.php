<?php

$nombre = 0;

while ($nombre <= 1337)
{
    echo ($nombre);
    $nombre++;
    echo ("<br/>");

    if ($nombre == 26 || $nombre == 37 || $nombre == 88 || $nombre == 1111)
    {
        $nombre++;
    }
    
}


?>