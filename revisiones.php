<?php
// Verifica si se reciben los parámetros necesarios en la URL
if (isset($_GET['sampleid']) && isset($_GET['samplenumber']) && isset($_GET['test_type'])) {
    $sample_id = $_GET['sampleid'];
    $sample_number = $_GET['samplenumber'];
    $test_type = $_GET['test_type'];

    // Determina la página de detalles según el tipo de ensayo
    $pagina_detalles = '';

    switch ($test_type) {
        case 'MC-Oven':
            $pagina_detalles = 'revisionensayoMCoven.php';
            break;
        case 'GS-Soil':
            $pagina_detalles = 'revisionGS.php';
            break;
        case 'atterberg_limit':
            $pagina_detalles = 'detalles_atterberg_limit.php';
            break;
        // Agrega más casos según los tipos de ensayo que tengas

        default:
            // Página de detalles por defecto si no coincide con ningún tipo de ensayo conocido
            $pagina_detalles = 'menuEnsayosRevision.php';
            break;
    }

    // Redirige a la página de detalles correspondiente
    header('Location: ' . $pagina_detalles . '?sampleid=' . urlencode($sample_id) . '&samplenumber=' . urlencode($sample_number) . '&test_type=' . urlencode($test_type));
    exit();
}
?>

<!-- Aquí puedes agregar el contenido adicional de la página -->
