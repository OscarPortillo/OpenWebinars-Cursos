<?php

    for ($i=0; $i < 10; $i++) {
        if($i == 5) {
            echo "Se rompe la ejecución alv \n";
            break;
        }
    }
    echo "Siguiente preuba con continue";
    for ($i=0; $i < 10; $i++) {
        if($i == 5) {
            echo "Se salta el cinco y sigue alv \n";
            continue;
        }
    }
 ?>
