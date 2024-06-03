<html>

    <head>

        <title>Ejemplo 5</title>

    </head>

    <body>

        <?php

            $numero = 7;
            echo "<h2> Tabla del numero $numero </h2>";

            $i = 1;

            while($i <= 10){
                echo $i ."x". $numero ."= ".($i*$numero)."<br>";
                $i++;
            }

        ?>

    </body>

</html>
