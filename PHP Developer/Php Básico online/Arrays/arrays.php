<?php
    $array = array("uno", "dos", "tres", "...", "diez");

    foreach ($array as $valor) {
        print_r($valor. ", ");
    }
    print_r("\n");
    print_r($array);

    $array_asosiativo = array(
        '1' => "valor 1",
        '2' => "valor 2",
        '3' => $array,
    );

    print_r($array_asosiativo);
    print_r("\n");
 ?>
