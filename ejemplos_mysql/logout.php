<?php

// iniciar sesion navegador
session_start();

// borrar todas las variables de sesion
session_unset();

// destruir la sesion del navegador
session_destroy();

header("location:login.php");

?>
