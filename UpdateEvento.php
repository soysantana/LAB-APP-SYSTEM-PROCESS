<?php
date_default_timezone_set("America/Santo_domingo");
setlocale(LC_ALL, "es_ES");

require_once('includes/config.php');

$con = mysqli_connect("localhost", "root", "", "index_test_lab");
if (mysqli_connect_errno()) {
    echo "Error en la conexión a la base de datos: " . mysqli_connect_error();
    exit();
}

$idEvento = $_POST['idEvento'] ?? '';
$tecnico = ucwords($_POST['tecnico'] ?? '');

$f_inicio = $_POST['fecha_inicio'] ?? '';
$fecha_inicio = date('Y-m-d', strtotime($f_inicio));

$f_fin = $_POST['fecha_fin'] ?? '';
$seteando_f_final = date('Y-m-d', strtotime($f_fin));
$fecha_fin1 = strtotime($seteando_f_final . "+ 1 days");
$fecha_fin = date('Y-m-d', ($fecha_fin1));

$color_evento = $_POST['color_evento'] ?? '';

$UpdateProd = "UPDATE eventoscalendar 
    SET tecnico = '$tecnico',
        fecha_inicio = '$fecha_inicio',
        fecha_fin = '$fecha_fin',
        color_evento = '$color_evento'
    WHERE id = '$idEvento' ";

$result = mysqli_query($con, $UpdateProd);

if ($result) {
    header("Location: planificacion.php?ea=1");
    exit();
} else {
    echo "Error al actualizar el evento. Por favor, inténtalo de nuevo.";
    // Puedes agregar un código de manejo de errores más específico aquí.
}
?>
