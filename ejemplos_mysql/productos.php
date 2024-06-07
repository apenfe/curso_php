<html>

<head>

    <title>Productos</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<h1>Listado de productos</h1>

<div class="text-left">
    <a href="index.php">Volver atrás</a>
</div>

<?php
$servername = "r2d2.iescierva.net";
$username = "tienda";
$password = "tienda";
$dbname = "tienda";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT p.id, p.nombre, p.precio, f.nombre AS fabricante FROM producto p INNER JOIN fabricante f ON p.id_fabricante = f.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table class='table'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Precio</th>";
    echo "<th>Fabricante</th>";

    echo "</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["nombre"]."</td>";
        echo "<td>".$row["precio"]."</td>";
        echo "<td>".$row["fabricante"]."</td>";

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
