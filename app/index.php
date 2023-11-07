<!DOCTYPE html>
<html>
<head>
    <title>Hola Mundo klk</title>
</head>
<body>
    <h1>Hola Mundo Misa</h1>

    <?php
      echo "<p>Conexión a la base de datos Vacana.</p>";
    // Conexión a la base de datos
    $mysqli = new mysqli("mariadb", "miapp", "mi@pp", "miapp");

    // Verificar la conexión
    if ($mysqli->connect_error) {
        die("Error de conexión a la base de datos: " . $mysqli->connect_error);
    }

    echo "<p>Conexion dura.</p>";

    // Realizar una consulta
    $result = $mysqli->query("SELECT 'Soy franchesco' AS message");

    if ($result) {
        $row = $result->fetch_assoc();
        echo "<p>Respuesta de la base de datos: " . $row["message"] . "</p>";
        $result->close();
    } else {
        echo "Error en la consulta: " . $mysqli->error;
    }

    // Cerrar la conexión
    $mysqli->close();
    ?>

</body>
</html>