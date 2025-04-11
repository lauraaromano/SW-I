<?php
    $numero = 1;
    while ($numero<= 100) {
        echo "numero $numero <br>";
        if ($numero % 7 == 0){
            break;
        }        
        $numero++;
    }
?>