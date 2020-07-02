<?php
    //las constantes no cambian su valor


    //Copnstante simple
    define("MI_CONSTANTE", "HOLA MUNDO");

    //Constante de arrays
    define('MI_ARRAY', array('1', '2', '...', '10'));


    $_miConstante = MI_CONSTANTE;

    echo $_miConstante."\n";

    $_miArray = MI_ARRAY;

    foreach (MI_ARRAY as $valor) {
        print_r($valor. " ");
    }
?>
