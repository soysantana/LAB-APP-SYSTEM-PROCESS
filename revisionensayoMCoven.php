<?php
$page_title = '';
require_once('includes/load.php');
// Comprobación del nivel de permiso del usuario para ver esta página
page_require_level(1);
require 'libs/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

function obtenerDetallesEnsayoHumedad($sampleId, $sampleNumber) {
    $rtv = mysqli_connect('localhost', 'root', '', 'index_test_lab');
    if (!$rtv) {
        die("Error de conexión a la base de datos: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM moisture_content WHERE Sample_ID = '$sampleId' AND Sample_Number = '$sampleNumber'";
    $result = mysqli_query($rtv, $query);
    if (!$result) {
        die("Error al consultar la base de datos: " . mysqli_error($rtv));
    }

    $detalles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($rtv);

    return $detalles;
}

if (isset($_GET['sampleid']) && isset($_GET['samplenumber'])) {
    $sampleId = $_GET['sampleid'];
    $sampleNumber = $_GET['samplenumber'];

    $detalles_ensayo = obtenerDetallesEnsayoHumedad($sampleId, $sampleNumber);
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
        $query = "INSERT INTO ensayo_en_repeticion (Sample_ID, Tecnico, Fecha_Inicio ) VALUES ('$ensayo_repetir','$technician', '$repetirFecha')";
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
    } elseif (isset($_POST["generate_pdf"])) {
        // Se hizo clic en el botón "Generar PDF"

        // Crear una instancia de Dompdf
        $dompdf = new Dompdf();

        // Obtener el contenido HTML que deseas convertir en PDF
        ob_start();
        include 'revisionensayoMCoven.php';
        $html = ob_get_clean();

        // Cargar el HTML en Dompdf
        $dompdf->loadHtml($html);

        // Establecer el tamaño del papel y la orientación
        $dompdf->setPaper('A4', 'portrait');

        // Renderizar el PDF
        $dompdf->render();

        // Obtener Sample ID, Sample Number y Test Type
        $sampleId = $_POST['Sample_ID'];
        $sample_id_parts = explode(',', $sampleId);
        $sampleId = $sample_id_parts[0];
        $sampleNumber = $sample_id_parts[1];
        $testType = $sample_id_parts[2];

        // Nombre del archivo PDF basado en Sample ID, Sample Number y Test Type
        $filename = "sample_id{$sampleId}_sample_number{$sampleNumber}_test_type{$testType}.pdf";

        // Generar el archivo PDF y enviarlo al navegador para su descarga
        $dompdf->stream($filename);
        exit(); // Importante: salir del script después de generar el PDF
    }
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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
                <form method="post" action="revisionensayoMCoven.php">

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
                        $repetirFecha = make_date();
                        ?>


<div class="container">
    <h3>Laboratory Information</h3>
    <form>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="lab">Laboratory:</label>
                    <input class="form-control" id="Qalab" name="QaLab" type="text" value="QA-Lab">
                </div>
                <div class="form-group">
                    <label for="technician">Technician:</label>
                    <input class="form-control" id="technician" name="technician" type="text" value="<?= $technician?>"readonly>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="standard">Test Method:</label>
                    <input class="form-control" id="standard" name="standard" type="text" value="<?= $standard?>"readonly>
                </div>
                <div class="form-group">
                    <label for="teststartdate">Test Start Date:</label>
                    <input class="form-control" id="teststartdate" name="teststartdate" type="text" value="<?= $testStartDate?>"readonly>
                </div>
                <div class="form-group">
                    <label for="reportdate">Report Date:</label>
                    <input class="form-control" id="reportdate" name="reportdate" type="text" value="<?= $reportDate?>"readonly>
                </div>
            </div>
        </div>
    </form>
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
                <td><input type="text" name="sampleDate" value="<?= $sampleDate ?>"readonly></td>
            </tr>
            <tr>
                <td>Sample Name</td>
                <td><input type="text" name="sampleId" value="<?= $sampleId ?>"readonly></td>
            </tr>
            <tr>
                <td>Sample Number</td>
                <td><input type="text" name="sampleNumber" value="<?= $sampleNumber?>"readonly></td>
            </tr>
            <tr>
                <td>Sample Type</td>
                <td><input type="text" name="sampleType" value="<?= $sampleType ?>"readonly></td>
            </tr>
            <tr>
                <td>Material Type</td>
                <td><input type="text" name="materialType" value="<?= $materialType ?>"readonly></td>
            </tr>
            <tr>
                <td>Depth From</td>
                <td><input type="text" name="depthFrom" value="<?= $depthFrom ?>"readonly></td>
            </tr>
            <tr>
                <td>Depth To</td>
                <td><input type="text" name="depthTo" value="<?= $depthTo ?>"readonly></td>
            </tr>
            <tr>
                <td>Structure</td>
                <td><input type="text" name="structure" value="<?= $structure ?>"readonly></td>
            </tr>
            <tr>
                <td>Area</td>
                <td><input type="text" name="area" value="<?= $area ?>"readonly></td>
            </tr>
            <tr>
                <td>Source</td>
                <td><input type="text" name="source" value="<?= $source ?>"readonly></td>
            </tr>
            <tr>
                <td>North</td>
                <td><input type="text" name="north" value="<?= $north ?>"readonly></td>
            </tr>
            <tr>
                <td>East</td>
                <td><input type="text" name="east" value="<?= $east ?>"readonly></td>
            </tr>
            <tr>
                <td>Elevation</td>
                <td><input type="text" name="elevation" value="<?= $elevation ?>"readonly></td>
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
                <td><input type="text" name="trialNo" value="1"readonly></td>
            </tr>
            <tr>
                <td>Tare Name</td>
                <td><input type="text" name="tareName" value="<?= $tareName ?>"readonly></td>
            </tr>
            <tr>
                <td>Oven Temperature</td>
                <td><input type="text" name="ovenTemperature" value="<?= $temperature ?>"readonly></td>
            </tr>
            <tr>
                <td>Tare Plus Wet Soil (gr)</td>
                <td><input type="text" name="tarePlusWetSoil" value="<?= $tarePlusWetSoil ?>"readonly></td>
            </tr>
            <tr>
                <td>Tare Plus Dry Soil (gr)</td>
                <td><input type="text" name="tarePlusDrySoil" value="<?= $tarePlusDrySoil ?>"readonly></td>
            </tr>
            <tr>
                <td>Water (gr)</td>
                <td><input type="text" name="water" value="<?= $water ?>"readonly></td>
            </tr>
            <tr>
                <td>Tare (gr)</td>
                <td><input type="text" name="tare" value="<?= $weightTare ?>"readonly></td>
            </tr>
            <tr>
                <td>Dry Soil (gr)</td>
                <td><input type="text" name="drySoil" value="<?= $drySoil ?>"readonly></td>
            </tr>
            <tr>
                <td>Moisture Content (%)</td>
                <td><input type="text" name="moistureContent" value="<?= $mc ?>"readonly></td>
            </tr>
            <tr>
                <td>Comments</td>
                <td><textarea readonly name="comments" rows="4" cols="50"><?= $comments ?></textarea></td>
            </tr>
        </tbody>
    </table>
</div>


<!-- Botones para enviar y generar PDF -->
                    <input type="hidden" name="Sample_ID" value="<?= $sampleId . ',' . $sampleNumber . ',' . $testType ?>">
                    <button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
                    <button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Editar Ensayo</button>
                    <button type="submit" name="generate_pdf" class="btn btn-primary">Generar PDF</button>
                </form>
                <!-- Cierra el formulario aquí -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Editar Ensayo</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form id="editForm" action="guardar_edicion.php" method="post">
          <table class="table table-bordered">
            <thead>
              <tr>
                <div class="col-xs-4">
                  <label>Tare Name</label>
                  <input class="form-control" name="tarename" type="text" value="<?= $tareName ?>">
                </div>
                <div class="col-xs-4">
                  <label>Tare Plus Wet Soil (gr)</label>
                  <input class="form-control" name="tarewet" id="1" value="<?= $tarePlusWetSoil ?>">
                </div>
                <div class="col-xs-4">
                  <label>Tare Plus Dry Soil (gr)</label>
                  <input class="form-control" name="taredry" id="2" value="<?= $tarePlusDrySoil ?>">
                </div>
                <div class="col-xs-4">
                  <label>Water (gr)</label>
                  <input class="form-control" name="water" id="3" value="<?= $water ?>">
                </div>
                <div class="col-xs-4">
                  <label>Weigth Tare (gr)</label>
                  <input class="form-control" name="weigthtare" id="4" value="<?= $weightTare ?>">
                </div>
                <div class="col-xs-4">
                  <label>Dry Soil (gr)</label>
                  <input class="form-control" name="drysoil" id="5" value="<?= $drySoil ?>">
                </div>
                <div class="col-xs-4">
                  <label>MC Calculado</label>
                  <input class="form-control" name="mc_before_drying" id="6" value="<?= $mc?>">
                </div>
                <div class="col-xs-4">
                  <label>MC Corregido</label>
                  <input class="form-control" name="mc_after_drying" id="7" value="">
                </div>
              </tr>
            </thead>
          </table>

          <script>
               // Obtén referencias a los campos de entrada y salida
               const pTPWS= document.getElementById("1");
               const pTPDS= document.getElementById("2");
               const pwater = document.getElementById("3");
               const pWT = document.getElementById("4");
               const pmccorrected = document.getElementById("7");

               // Agrega un evento "input" a los campos de entrada para detectar cambios
               pTPWS.addEventListener("input", calcularResultado);
               pTPDS.addEventListener("input", calcularResultado);
               pwater.addEventListener("input", calcularResultado);
               pWT.addEventListener("input", calcularResultado);
              pmccorrected.addEventListener("input", calcularResultado);

               // Función para calcular el resultado
               function calcularResultado() {
                 // Obtén los valores de los campos de entrada y realiza el cálculo deseado
                 const TPWS = parseFloat(pTPWS.value) || 0;
                 const TPDS = parseFloat(pTPDS.value) || 0;
                 const WT = parseFloat(pWT.value) || 0;
    
                 // Realiza el cálculo 
                 const water = TPWS - TPDS;
                 const DS = TPDS - WT;
                const Mc = (water / DS) * 100;


    
                 // Muestra el resultado en el campo de salida
                 pmcorrected.value = Mc;
               }
         </script>
          <!-- Botón de guardar cambios -->
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<?php endforeach; ?>
<?php include_once('layouts/footer.php'); ?>