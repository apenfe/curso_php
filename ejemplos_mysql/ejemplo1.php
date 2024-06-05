<html>

    <head>

        <title>Ejemplo 1 (mysql)</title>

    </head>

    <body>

    <?php
        $servername = "r2d2.iescierva.net";
        $username = "instituto";
        $password = "instituto";
        $dbname = "instituto";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM alumno";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "nombre: " . $row["nombre"]. " 1º apellido: " . $row["apellido1"]. " 2º apellido:" . $row["apellido2"]. "<br>";
            }

        } else {
            echo "0 resultados";
        }
        $conn->close();
    ?>

    </body>

</html>
