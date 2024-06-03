<html>

    <head>

        <title>Ejemplo 6 funciones</title>

    </head>

    <body>

        <?php

        function factorial($n) {
            $acumulado = 1;

            for ($i = 1; $i <= $n; $i++) {
                $acumulado *= $i;

            }
            return $acumulado;
        }

            $numero = 5;
            echo "<h2> El factorial del numero $numero es: ". factorial($numero)." </h2>";

        ?>

    </body>

</html>
