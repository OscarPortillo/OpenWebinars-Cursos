<?php
    //sesiones
    session_start();
    $_SESSION['mi_session'] = "valor";
    echo $_SESSION['mi_session'];



    //cookies
    //la siguiente fuinción también puede recibir otro parametro que será el tiempo de duración de la cookie
    setcookie('mi_cookie', 'valor de mi cookie');
 ?>
