<?php

$num = 0;

while ($num <=100)
{
    echo $num. "<br/>";
    $num++;

    if (!($num%3)){
        echo "Fizz";
    }

    if (!($num%5)){
        echo "Buzz";
    }

    elseif ($num %3 == 0 AND $num %5 == 0){
        echo "FizzBuzz";
    }


}
?>