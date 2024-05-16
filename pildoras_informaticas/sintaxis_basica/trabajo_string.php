<!doctype html>

<html>
<head>
    <meta charset="utf=8">
    <title>Documento sin titulo</title>
    <style>
        .resaltar{
            color:#F00;
            font-weight:bold;
        }
    </style>

</head>

<body>

<?php

    $nombre = "adrian";
    echo "hola $nombre";
    echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";

    // comparaciones de string

$variable1 = "casa";
$variable2 = "CASA";

$resultado =strcmp($variable1,$variable2); // devuelve 0 si son iguales y 1 si no lo son
$resultado2 =strcasecmp($variable1,$variable2); // devuelve 0 si son iguales y 1 si no lo son

echo "el resultado sin case es: $resultado <br>";
echo "el resultado con case es: $resultado2 <br>";

if(!$resultado2){
    echo "coinciden";
}else{
    echo "no coinciden";
}

?>

</body>
</html>
