<html>

<head>

    <title>Ejemplo 3 (formulario)</title>

</head>

<body>

<h2>Tabla de multiplicar</h2>

<?php

    if(isset($_POST["numero"])){

        $num = $_POST["numero"];
        echo "<h2> Tabla del numero $num </h2>";

        $i = 1;

        if($num<1 || $num>10){
            echo "<h2 style='color: #FF0000'> Tabla no valida </h2>";
        }else{

            while($i <= 10){
                echo $i ."x". $num ."= ".($i*$num)."<br>";
                $i++;
            }

        }

    }else{

        echo "<h2 style='color: #FF0000'> Es necesario cargar un nuemro para calcular la tabla </h2>";

    }

?>

</body>

</html>
