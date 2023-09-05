<?php
$page_title = '';
require_once('includes/load.php');
// Comprobación del nivel de permiso del usuario para ver esta página
page_require_level(1);

function obtenerDetallesEnsayoHumedad($sample_id, $sample_number) {
    $rtv = mysqli_connect('localhost', 'root', '', 'index_test_lab');
    if (!$rtv) {
        die("Error de conexión a la base de datos: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM moisture_content WHERE Sample_ID = '$sample_id' AND Sample_Number = '$sample_number'";
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

    $detalles_ensayo = obtenerDetallesEnsayoHumedad($sample_id, $sample_number);
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

            <?php foreach ($detalles_ensayo as $row) : ?>
                <?php
                // Almacenar datos en variables para evitar duplicación y escapar datos HTML
                $technician = htmlspecialchars($row['Technician']);
                $standard = htmlspecialchars($row['Standard']);
                $sampleDate = htmlspecialchars($row['Sample_Date']);
                $testStartDate = htmlspecialchars($row['Test_Start_Date']);
                $reportDate = htmlspecialchars($row['Report_Date']);
                $sampleId = htmlspecialchars($row['Sample_ID']);
                $sampleNumber = htmlspecialchars($row['Sample_Number']);
                $materialType = htmlspecialchars($row['Material_Type']);
                $structure = htmlspecialchars($row['Structure']);
                $area = htmlspecialchars($row['Area']);
                $source = htmlspecialchars($row['Source']);
                $depthFrom = htmlspecialchars($row['Depth_From']);
                $depthTo = htmlspecialchars($row['Depth_To']);
                $sampleType = htmlspecialchars($row['Sample_Type']);
                $north = htmlspecialchars($row['North']);
                $east = htmlspecialchars($row['East']);
                $elevation = htmlspecialchars($row['Elev']);
                $tareName = htmlspecialchars($row['Tare_Name']);
                $temperature = htmlspecialchars($row['Temperature']);
                $tarePlusWetSoil = htmlspecialchars($row['Tare_Plus_Wet_Soil']);
                $tarePlusDrySoil = htmlspecialchars($row['Tare_Plus_Dry_Soil']);
                $water = htmlspecialchars($row['Water']);
                $weightTare = htmlspecialchars($row['Weigth_Tare']);
                $drySoil = htmlspecialchars($row['Dry_Soil']);
                $mc = htmlspecialchars($row['Mc']);
                $comments = htmlspecialchars($row['Comments']);
                ?>

                <div class="col-xs-4">
                    <div class="form-group form-inline"> <!-- Agrega la clase form-inline -->
                        <h3>Laboratory Information</h3>
                        <label for="technician" class="mr-2">Technician:</label> <!-- Agrega la clase mr-2 para añadir un margen derecho -->
                        <input class="form-control" id="technician" name="technician" type="text" value="<?= $technician ?>">
                    </div>
                </div>
                

                <!-- Resto de los datos aquí... -->

            <?php endforeach; ?>

        </div>
    </div>
</div>