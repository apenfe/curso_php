<?php
include "seguridad.php";
?>
<html>

<head>

    <title>Jugadores</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<h1>Listado de jugadores</h1>

<div class="text-left">
    <a href="index.php">Volver atrás</a>
</div>

<?php
$servername = "r2d2.iescierva.net";
$username = "champions";
$password = "champions";
$dbname = "champions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT j.nombre, j.dorsal, j.posicion, j.fechaNac, e.nombre AS equipo FROM jugador j INNER JOIN equipo e ON j.equipo = e.codEquipo";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table class='table'>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Dorsal</th>";
    echo "<th>Posicion</th>";
    echo "<th>Equipo</th>";
    echo "<th>Fecha nacimiento</th>";

    echo "</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>".$row["nombre"]."</td>";
        echo "<td>".$row["dorsal"]."</td>";
        echo "<td>".$row["posicion"]."</td>";
        echo "<td>".$row["equipo"]."</td>";
        echo "<td>".$row["fechaNac"]."</td>";

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
