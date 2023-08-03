<?php
$page_title = '';
require_once('includes/load.php');
// Comprobación del nivel de permiso del usuario para ver esta página
page_require_level(1);

if (isset($_GET['sampleid']) && isset($_GET['samplenumber'])) {
    $sample_id = $_GET['sampleid'];
    $sample_number = $_GET['samplenumber'];

    $rtv = mysqli_connect('localhost', 'root', '', 'index_test_lab');
    if (!$rtv) {
        die("Error de conexión a la base de datos: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM moisture_content WHERE Sample_ID = '$sample_id' AND Sample_Number = '$sample_number'";
    $result = mysqli_query($rtv, $query);
    if (!$result) {
        die("Error al consultar la base de datos: " . mysqli_error($rtv));
    }

    // Mostrar los datos de la tabla moisture_content
    while ($row = mysqli_fetch_assoc($result)) {
        
    }

    mysqli_close($rtv);
} else {
    header('Location: menuEnsayosRevision.php');
    exit();
}
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Revision Ensayo de humedad de horno</span>
                </strong>
            </div>
            <div class="panel-body">
                <!-- Aquí puedes agregar el código HTML y las etiquetas necesarias para mostrar la información -->
            </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>
