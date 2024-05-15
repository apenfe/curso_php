<!doctype html>

<html>
<head>
    <meta charset="utf=8">
    <title>Documento sin titulo</title>
</head>

<body>

<?php

    function incrementaVariable(){

      static $contador = 0; // se guarda el valor en global y solo se ejecuta en la primera llamada
        $contador++;

        echo $contador."<br>";
    }

    incrementaVariable();
    incrementaVariable();
    incrementaVariable();

?>

</body>
</html>
