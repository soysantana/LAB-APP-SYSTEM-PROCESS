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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["repeat"])) {
        // Recupera el valor del campo oculto "ensayo_repetir"
        $ensayo_repetir = $_POST["Sample_ID"];

        // Aquí puedes realizar la inserción en la base de datos
        $rtv = mysqli_connect('localhost', 'root', '', 'index_test_lab');
        if (!$rtv) {
            die("Error de conexión a la base de datos: " . mysqli_connect_error());
        }

        // Inserta la cadena en la columna "Sample_ID"
        $query = "INSERT INTO ensayo_en_repeticion (Sample_ID) VALUES ('$ensayo_repetir')";
        echo "Query: $query"; // Mensaje de depuración
        $result = mysqli_query($rtv, $query);
        if ($result) {
            // La inserción fue exitosa
            echo "El ensayo ha sido enviado a repetir.";
        } else {
            // Error en la inserción
            echo "Error al enviar el ensayo a repetir: " . mysqli_error($rtv);
        }

        mysqli_close($rtv);
    } else {
        // El botón "Enviar ensayo a firma" se presionó
        // Realiza la lógica para enviar el ensayo a firma aquí
    }
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
        <form method="post" action="revisionensayoMCoven.php" onsubmit="calcular()">

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
                $testType = htmlspecialchars($row['test_type']);
                ?>


<div class="container">
    <h3>Laboratory Information</h3>
    <form>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="technician">Laboratory:</label>
                    <input class="form-control" id="technician" name="technician" type="text" value="QA-Lab">
                </div>

           
            

            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="standard">Test Method:</label>
                    <input class="form-control" id="standard" name="standard" type="text" value="<?= $standard?>">
                </div>
                
                
                

            </div>
        </div>

        <div class="container">
    <h3>Sample Information</h3>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sample Date</td>
                <td><input type="text" name="sampleDate" value="<?= $sampleDate ?>"></td>
            </tr>
            <tr>
                <td>Sample Name</td>
                <td><input type="text" name="sampleId" value="<?= $sampleId ?>"></td>
            </tr>
            <tr>
                <td>Sample Number</td>
                <td><input type="text" name="sampleDate" value="<?= $sampleNumber?>"></td>
            </tr>

            <tr>
                <td>Sample Type</td>
                <td><input type="text" name="sampleDate" value="<?= $sampleType ?>"></td>
            </tr>


            <tr>
                <td>Material Type</td>
                <td><input type="text" name="sampleDate" value="<?= $materialType ?>"></td>
            </tr>

            <tr>
                <td>Depth From</td>
                <td><input type="text" name="sampleDate" value="<?= $depthFrom ?>"></td>
            </tr>
            <tr>
                <td>Depth To</td>
                <td><input type="text" name="sampleDate" value="<?= $depthTo ?>"></td>
            </tr>

            <tr>
                <td>Structure</td>
                <td><input type="text" name="sampleDate" value="<?= $structure ?>"></td>
            </tr>
            <tr>
                <td>Area</td>
                <td><input type="text" name="sampleDate" value="<?= $area ?>"></td>
            </tr>
            <tr>
                <td>Source</td>
                <td><input type="text" name="sampleDate" value="<?= $source ?>"></td>
            </tr>
            <tr>
                <td>North</td>
                <td><input type="text" name="sampleDate" value="<?= $north ?>"></td>
            </tr>
            <tr>
                <td>East</td>
                <td><input type="text" name="sampleDate" value="<?= $east ?>"></td>
            </tr>
            <tr>
                <td>Elevation</td>
                <td><input type="text" name="sampleDate" value="<?= $elevation ?>"></td>
            </tr>


        </tbody>
    </table>
</div>
<div class="container">
    <h3>Test Information</h3>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Trial No.</td>
                <td><input type="text" name="sampleDate" value="1"></td>
            </tr>
            <tr>
                <td>Tare Name</td>
                <td><input type="text" name="sampleId" value="<?= $tareName?>"></td>
            </tr>
            <tr>
                <td>Oven Temperature</td>
                <td><input type="text" name="sampleDate" value="<?= $temperature?>"></td>
            </tr>

            <tr>
                <td>Tare Plus Wet Soil (gr)</td>
                <td><input type="text" name="sampleDate" value="<?= $tarePlusWetSoil?>"></td>
            </tr>

            <tr>
                <td>Tare Plus Dry Soil (gr)</td>
                <td><input type="text" name="sampleDate" value="<?= $tarePlusDrySoil ?>"></td>
            </tr>
            <tr>
                <td>Water (gr)</td>
                <td><input type="text" name="sampleDate" value="<?= $water ?>"></td>
            </tr>
            <tr>
                <td>Tare (gr)</td>
                <td><input type="text" name="sampleDate" value="<?= $weightTare?>"></td>
            </tr>

            <tr>
                <td>Dry Soil (gr)</td>
                <td><input type="text" name="sampleDate" value="<?= $drySoil ?>"></td>
            </tr>
            <tr>
                <td>Moisture Content (%)</td>
                <td><input type="text" name="sampleDate" value="<?= $mc ?>"></td>
            </tr>

            <tr>
    <td>Comments</td>
    <td><textarea name="comments" rows="4" cols="50"><?= $comments ?></textarea></td>
</tr>


        </tbody>
    </table>
</div>
<input type="hidden" name="Sample_ID" value="<?= $sample_id . ',' . $sample_number . ',' . $testType ?>">
        <button type="submit" class="btn btn-success">Enviar ensayo a firma</button>

        <button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>

    </form>
</div>

<!-- Tabla debajo del container -->



              

            <?php endforeach; ?>

        
    </div>
</div>
        

