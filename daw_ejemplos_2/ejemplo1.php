<html>

    <head>

        <title>Ejemplo 1 (formulario)</title>

    </head>

    <body>

    <h2>Datos recogidos</h2>

        <?php

        $nombre = $_GET["nombre"];
        $apellidos = $_GET["apellidos"];
        $edad = $_GET["edad"];

        echo "Nombre: $nombre <br>";
        echo "Apellidos: $apellidos <br>";
        echo "Edad: $edad <br>";

        ?>

    </body>

</html>
