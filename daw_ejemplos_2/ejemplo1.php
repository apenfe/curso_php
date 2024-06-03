<html>

<head>

    <title>Ejemplo 8 (arrays)</title>

</head>

<body>

<?php

function mostrarArray($cosas) {
    $texto = "<h3> listado de las ".count($cosas)." cosas.</h3>";

    $texto.= "<ul>";

    for ($i = 0; $i < count($cosas); $i++) {
        $texto .= "<li>".$cosas[$i]."</li>";
    }

    $texto.= "</ul>";
    return $texto;
}

$cosas = array("Chocolate",42,true,"23",34.44);

echo mostrarArray($cosas);

?>

</body>

</html>
