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
        case 'LAA-Small';
            $pagina_detalles = 'Revision-Laa-Small.php';
            break;
        case 'LLA-Large';
            $pagina_detalles = 'Revision-Laa-Large.php';
            break;
        case 'Bulk-density';
            $pagina_detalles = 'Revision-Density-Bulk.php';
            break;
        case 'Weigth-den';
            $pagina_detalles = 'Revision-Density-Weigth.php';
            break;
        case 'Count-gamm';
            $pagina_detalles = 'Revision-Density-Count-Gama.php';
            break;
        case 'Sand-Densi';
            $pagina_detalles = 'Revision-Density-Sand.php';
            break;
        case 'Gamma-dens';
            $pagina_detalles = 'Revision-Density-Gama.php';
            break;
        case 'UCS';
            $pagina_detalles = 'Revision-UCS.php';
            break;
        case 'UCS-grout';
            $pagina_detalles = 'Revision-Grout.php';
            break;
        case 'UCS-Concre';
            $pagina_detalles = 'Revision-Concrete-Specimen.php';
            break;
        case 'BTS';
            $pagina_detalles = 'Revision-BTS.php';
            break;
        case 'Leeb';
            $pagina_detalles = 'Revision-Leeb.php';
            break;
        case 'MC-Microwave';
            $pagina_detalles = 'Revision-MC-Microwave.php';
            break;
        case 'MC-Constant Mas';
            $pagina_detalles = 'Revision-MC-Constant-Mass.php';
            break;
        case 'MC-Scale';
            $pagina_detalles = 'Revision-MC-Scale.php';
            break;
        case 'PH';
            $pagina_detalles = 'Revision-PH.php';
            break;
        case 'Perma-Gran';
            $pagina_detalles = 'Revision-Permeability.php';
            break;
        case 'HY';
            $pagina_detalles = 'Revision-Hydrometer.php';
            break;
        case 'DHY';
            $pagina_detalles = 'Revision-Double-Hydrometer.php';
            break;
        case 'GS-Fine';
            $pagina_detalles = 'Revision-GS-Fine.php';
            break;
        case 'GS-Coarse';
            $pagina_detalles = 'Revision-GS-Coarse.php';
            break;
        case 'GS-Sieved-Coarse';
            $pagina_detalles = 'Revision-GS-Sieved-Coarse.php';
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
