<?php



$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelles = "aAeEiIoOuUyY";

for($cacao = 0; isset($str[$cacao]); $cacao++){

    for ($y = 0; isset($voyelles[$y]); $y++){

        if ($str[$cacao] == $voyelles[$y]){
            
            echo $str[$cacao];

        }
    }
}

?>