<?php
    $numero = 1;
    while ($numero <= 100) {
        if($numero % 7 == 0){
            break;
        }
        echo"numero $numero <br>";
        $numero++;
    }
?>