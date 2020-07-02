<?php

    include "script1.php";//warning si no lo encuentra
    require "script2.php";//error si no lo encuentra

    $varLocal = "Variable local.";

    echo $varLocal. "\n" . $var_1 . "\n". $var_2 . "\n";
?>
