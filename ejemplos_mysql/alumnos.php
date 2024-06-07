<html>

    <head>

        <title>Alumnos</title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

    <h1>Listado de alumnos</h1>

    <div class="text-left">
        <a href="index.php">Volver atrás</a>
    </div>

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

            echo "<table class='table'>";
            echo "<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Apellidos</th>";
            echo "<th>DNI</th>";
         
            echo "</tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {

                echo "<tr>";
                echo "<td>".$row["nombre"]."</td>";
                echo "<td>".$row["apellido1"]." ".$row["apellido2"]."</td>";
                echo "<td>".$row["dni"]."</td>";
            
                echo "</tr>";
                
            }
            echo "</table>";
        } else {
            echo "0 resultados";
        }
        $conn->close();
    ?>

    </body>

</html>