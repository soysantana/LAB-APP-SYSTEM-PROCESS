<?php
$sample_stored = muestras_enlab(); 
// Verifica si se reciben los parámetros necesarios en la URL
if (isset($_GET['sampleid']) && isset($_GET['samplenumber']) && isset($_GET['depthfrom']) && isset($_GET['depthto']) && isset($_GET['sample_type'])) {
    $sample_id = $_GET['sampleid'];
    $sample_number = $_GET['samplenumber'];
    $sample_type = $_GET['sample_type']; // Cambio aquí
    $depth_from = $_GET['depthfrom'];
    $depth_to = $_GET['depthto'];

    // Determina la página de detalles según el tipo de muestra
    $pagina_detalles = '';

    switch ($sample_type) { // Cambio aquí
        case 'Shelby':
            $pagina_detalles = '';
            break;
        case 'Lexan':
            $pagina_detalles = '';
            break;
        case 'Ring':
            $pagina_detalles = '';
            break;
        case 'Maxier':
            $pagina_detalles = '';
            break;
        // Agrega más casos según los tipos de ensayo que tengas
        default:
            // Página de detalles por defecto si no coincide con ningún tipo de ensayo conocido
            $pagina_detalles = 'inalteraded.php';
            break;
    }

    // Redirige a la página de detalles correspondiente
    header('Location: ' . $pagina_detalles . '?sampleid=' . urlencode($sample_id) . '&samplenumber=' . urlencode($sample_number) . '&sample_type=' . urlencode($sample_type)); // Cambio aquí
    exit();
}
?>
