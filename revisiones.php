<?php
// Verifica si se reciben los parámetros necesarios en la URL
if (isset($_GET['sampleid']) && isset($_GET['id']) && isset($_GET['samplenumber']) && isset($_GET['test_type'])) {
    $sample_id = $_GET['sampleid'];
    $id = $_GET['id'];
    $sample_number = $_GET['samplenumber'];
    $test_type = $_GET['test_type'];

    // Determina la página de detalles según el tipo de ensayo
    $pagina_detalles = '';

    switch ($test_type) {
        case 'MC-Oven':
            $pagina_detalles = 'revisionensayoMCoven.php';
            break;
        case 'GS-Soil':
            $pagina_detalles = 'Revision-GS.php';
            break;
        case 'AL':
            $pagina_detalles = 'Revision-Limit.php';
            break;
        case 'SP';
            $pagina_detalles = 'Revision-SP.php';
            break;
        case 'SG';
            $pagina_detalles = 'Revision-SG.php';
            break;
        case 'SG-Absortion';
            $pagina_detalles = 'Revision-SG-Absortion.php';
            break;
        case 'SG-Fines';
            $pagina_detalles = 'Revision-SG-Fines.php';
            break;
        case 'PLT';
            $pagina_detalles = 'Revision-PLT.php';
            break;

        default:
            // Página de detalles por defecto si no coincide con ningún tipo de ensayo conocido
            $pagina_detalles = 'menuEnsayosRevision.php';
            break;
    }

    // Redirige a la página de detalles correspondiente
    header('Location: ' . $pagina_detalles . '?id=' . urlencode($id) );
    exit();
}
?>

<!-- Aquí puedes agregar el contenido adicional de la página -->
