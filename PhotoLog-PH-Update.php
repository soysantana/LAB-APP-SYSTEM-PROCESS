<?php
require_once('includes/load.php');

// Obtener datos del formulario desde la URL
$idUsuario = $_GET['id'];

// Crear una nueva conexión a la base de datos
$db = new mysqli('localhost', 'root', '', 'index_test_lab');

// Verificar errores en la conexión
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Iniciar sesión
session_start();

// Variable de control para la redirección
$redireccionar = true;

// Verificar si el ID del usuario existe en la base de datos
$queryVerificar = "SELECT * FROM pinhole WHERE id = ?";
$stmtVerificar = $db->prepare($queryVerificar);

// Verificar si la consulta preparada fue exitosa
if ($stmtVerificar) {
    $stmtVerificar->bind_param('i', $idUsuario);
    $stmtVerificar->execute();
    $resultadoVerificar = $stmtVerificar->get_result();

    if ($resultadoVerificar->num_rows > 0) {
        // Procesar las nuevas fotos
        for ($i = 1; $i <= 7; $i++) {
            $nombreFoto = 'photo' . $i;
        
            if (isset($_FILES[$nombreFoto]) && $_FILES[$nombreFoto]['error'] === UPLOAD_ERR_OK && is_uploaded_file($_FILES[$nombreFoto]['tmp_name'])) {
                $nuevaFoto = $_FILES[$nombreFoto]['tmp_name'];
                $contenidoFoto = file_get_contents($nuevaFoto);
        
                // Actualizar la base de datos con la nueva foto
                $nombreColumna = 'Picture_' . $i;
                $queryActualizar = "UPDATE pinhole SET $nombreColumna = ? WHERE id = ?";
                $stmtActualizar = $db->prepare($queryActualizar);
        
                // Verificar si la consulta preparada fue exitosa
                if ($stmtActualizar) {
                    $stmtActualizar->bind_param('si', $contenidoFoto, $idUsuario);
                    $stmtActualizar->execute();
        
                    if ($stmtActualizar->affected_rows > 0) {
                        // Foto actualizada con éxito
                        $session->msg('s', 'Foto actualizada con éxito.');
                    } else {
                        // Error al actualizar la foto
                        $session->msg('d', 'Error al actualizar la foto ' . $i . '.' . $stmtActualizar->error);
                        $redireccionar = false;
                    }
        
                    $stmtActualizar->close();
                }
            } else {
                // Error al subir la nueva foto
                $session->msg('d', 'Error al subir la nueva foto ' . $i . '.');
                $redireccionar = false;
            }
        }
    }
}

// Cerrar la conexión a la base de datos
$db->close();

// Redirigir según la variable de control
if ($redireccionar) {
    redirect('PhotoLog_PH.php');
} else {
    // Puedes manejar la redirección de manera diferente si es necesario
    redirect('PhotoLog_PH.php');
}

exit();
?>
