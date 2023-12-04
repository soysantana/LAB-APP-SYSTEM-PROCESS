<?php
// Conectar a la base de datos
$host = 'localhost';
$db = 'index_test_lab';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario desde la URL
$idUsuario = $_GET['id'];

// Verificar si el ID del usuario existe en la base de datos (usar consulta preparada)
$queryVerificar = "SELECT * FROM pinhole WHERE id = ?";
$stmtVerificar = $conn->prepare($queryVerificar);
$stmtVerificar->bind_param('i', $idUsuario);
$stmtVerificar->execute();
$resultadoVerificar = $stmtVerificar->get_result();

if ($resultadoVerificar->num_rows > 0) {
    // Procesar la nueva foto
    if (isset($_FILES['photo1']) && $_FILES['photo1']['error'] === UPLOAD_ERR_OK) {
        $nuevaFoto = $_FILES['photo1']['tmp_name'];
        $contenidoFoto = file_get_contents($nuevaFoto);

        // Actualizar la base de datos con la nueva foto (usar consulta preparada)
        $queryActualizar = "UPDATE pinhole SET Picture_1 = ? WHERE id = ?";
        $stmtActualizar = $conn->prepare($queryActualizar);
        $stmtActualizar->bind_param('si', $contenidoFoto, $idUsuario);
        $stmtActualizar->execute();

        if ($stmtActualizar->affected_rows > 0) {
            echo "Foto actualizada con éxito.";
        } else {
            echo "Error al actualizar la foto: " . $stmtActualizar->error;
        }

        $stmtActualizar->close();
    } else {
        echo "Error al subir la nueva foto.";
    }
} else {
    echo "ID de usuario no encontrado en la base de datos.";
}

$stmtVerificar->close();
$conn->close();
?>
