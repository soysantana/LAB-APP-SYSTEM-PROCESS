<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén el ID del evento enviado por POST
    $idEvento = $_POST['id'];

    // Realiza la conexión a la base de datos (ya que estás utilizando mysqli)
    $con = mysqli_connect("localhost", "root", "", "index_test_lab");

    // Verifica la conexión
    if (mysqli_connect_errno()) {
        echo "Error en la conexión a la base de datos: " . mysqli_connect_error();
        exit();
    }

    // Construye la consulta para eliminar el evento
    $sql = "DELETE FROM eventoscalendar WHERE id = '$idEvento'";

    // Ejecuta la consulta
    if (mysqli_query($con, $sql)) {
        echo "Evento eliminado correctamente";
    } else {
        echo "Error al eliminar el evento: " . mysqli_error($con);
    }

    // Cierra la conexión a la base de datos
    mysqli_close($con);
}
?>