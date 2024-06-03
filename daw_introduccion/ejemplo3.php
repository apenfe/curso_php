<html>

    <head>

        <title>Ejemplo 3</title>

    </head>

    <body>

        <?php
            $nota = 5;

            if ($nota < 5 && $nota >=0) {
                echo "<h4> insuficente </h4>";
            } else if ($nota >= 5 && $nota <7) {
                echo "<h4> suficiente </h4>";
            }else if($nota >= 7 && $nota <9){
                echo "<h4> notable </h4>";
            }else if($nota >= 9 && $nota <=10){
                echo "<h4> sobresaliente </h4>";
            }else{
                echo "<h4> nota no valida </h4>";
            }

        ?>

    </body>

</html>
