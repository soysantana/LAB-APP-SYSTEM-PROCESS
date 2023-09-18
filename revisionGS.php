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
        die("Error en la consulta SQL: " . mysqli_error($rtv));
    }

    $result_set = array(); // Inicializa un array vacío

    // Verifica si hay resultados antes de intentar acceder a ellos
    if (mysqli_num_rows($result) > 0) {
        $result_set = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    mysqli_close($rtv);

    return $result_set;
}

if (isset($_GET['sampleid']) && isset($_GET['samplenumber'])) {
    $sample_id = $_GET['sampleid'];
    $sample_number = $_GET['samplenumber'];

    $detalles_ensayo = obtenerDetallesEnsayogranulometria($sample_id, $sample_number);

    // Ahora puedes trabajar con $detalles_ensayo sin preocuparte por el error de acceso a array offset en caso de que no haya resultados.
} else {
    header('Location: menuEnsayosRevision.php');
    exit();
}

?>



