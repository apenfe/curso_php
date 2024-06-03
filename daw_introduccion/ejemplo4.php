<html>

    <head>

        <title>Ejemplo 4</title>

    </head>

    <body>

        <?php

            $numero = 5;
            echo "<h2> Tabla del numero $numero </h2>";

            for($i = 1; $i <= 10; $i++){
                echo $i ."x". $numero ."= ".($i*$numero)."<br>";
            }

        ?>

    </body>

</html>
