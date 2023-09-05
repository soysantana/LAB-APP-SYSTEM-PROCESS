<?php
$page_title = '';
require_once('includes/load.php');
// Comprobación del nivel de permiso del usuario para ver esta página
page_require_level(1);

function obtenerDetallesEnsayogranulometria($sample_id, $sample_number) {
    $rtv = mysqli_connect('localhost', 'root', '', 'index_test_lab');
    if (!$rtv) {
        die("Error de conexión a la base de datos: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM grain_size WHERE Sample_ID = '$sample_id' AND Sample_Number = '$sample_number'";
    $result = mysqli_query($rtv, $query);
    if (!$result) {
        die("Error al consultar la base de datos: " . mysqli_error($rtv));
    }

    $detalles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($rtv);

    return $detalles;
}

if (isset($_GET['sampleid']) && isset($_GET['samplenumber'])) {
    $sample_id = $_GET['sampleid'];
    $sample_number = $_GET['samplenumber'];

    $detalles_ensayo = obtenerDetallesEnsayogranulometria($sample_id, $sample_number);
} else {
    header('Location: menuEnsayosRevision.php');
    exit();
}
?>