<?php
// Incluir el archivo de configuración de la base de datos
include 'config.php';

// Prueba de conexión a la base de datos
if ($conn) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "Error de conexión.";
}

// Realizar una consulta de prueba
$sql = "SELECT * FROM tu_tabla LIMIT 5"; // Reemplaza 'tu_tabla' con el nombre real de tu tabla
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Salida de los datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Nombre: " . $row["nombre"] . "<br>";
    }
} else {
    echo "0 resultados";
}

// Cerrar la conexión
$conn->close();
?>
