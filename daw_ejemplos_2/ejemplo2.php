<html>

<head>

    <title>Ejemplo 2 (formulario)</title>

</head>

<body>

<h2>Datos recogidos 2</h2>

<?php

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$edad = $_POST["edad"];

echo "Nombre: $nombre <br>";
echo "Apellidos: $apellidos <br>";
echo "Edad: $edad <br>";

?>

</body>

</html>