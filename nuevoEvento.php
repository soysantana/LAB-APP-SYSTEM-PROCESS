<?php
date_default_timezone_set("America/Santo_domingo");
setlocale(LC_ALL, "es_ES");

require_once('includes/config.php');

$con = mysqli_connect("localhost", "root", "", "index_test_lab");
if (mysqli_connect_errno()) {
    echo "Error en la conexión a la base de datos: " . mysqli_connect_error();
    exit();
}

$tecnico = ucwords($_POST['tecnico'] ?? '');
$fecha_inicio = date('Y-m-d', strtotime($_POST['fecha_inicio'] ?? ''));
$fecha_fin = date('Y-m-d', strtotime($_POST['fecha_fin'] . "+1 day"));
$color_evento = $_POST['color_evento'] ?? '';

$InsertNuevoEvento = "INSERT INTO eventoscalendar (tecnico, fecha_inicio, fecha_fin, color_evento)
    VALUES ('$tecnico', '$fecha_inicio', '$fecha_fin', '$color_evento')";

$resultadoNuevoEvento = mysqli_query($con, $InsertNuevoEvento);

if ($resultadoNuevoEvento) {
    header("Location: planificacion.php?e=1");
    exit();
} else {
    echo "Error al crear el evento. Por favor, inténtalo de nuevo.";
    // Puedes agregar un código de manejo de errores más específico aquí.
}
?>
