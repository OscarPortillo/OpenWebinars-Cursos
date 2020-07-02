<?php

    $array = array(
        "v1" => "1",
        "v2" => "2",
        "v3" => "3",
        "v4" => "4",
        "vsaludo" => "Hola mundo",
    );
    foreach ($array as $clave => $valor) {
        print_r($clave. " *-* ". $valor. "\n");
    }

 ?>
