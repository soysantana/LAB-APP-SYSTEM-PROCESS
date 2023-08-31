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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sampleId = $_POST['Sample_ID'];
    $sampleNumber = $_POST['Sample_Number'];
    $daterepetir = make_date();
    $tabla = $_POST['ensayo_en_repeticion']; // Este valor te permite identificar a qué tabla debes insertar los datos

    
    }

    // Insertar datos en la tabla correspondiente
    if ($tabla === 'ensayo_en_repeticion') {
        $query = "INSERT INTO ensayo_en_repeticion (Sample_ID, Sample_Number, Fecha_envio_repetir) VALUES ('$sampleId', '$sampleNumber', '$daterepetir')";
        if (mysqli_query($conn, $query)) {
            echo "Datos insertados en Ensayo Repetido";
        } else {
            echo "Error al insertar datos: " . mysqli_error($conn);
        }
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conn);
}
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
            

<?php foreach ($detalles_ensayo as $row) { ?>
    <div class="col-xs-4">
        <div class="form-group">
            <h3>Laboratory Information</h3>
            <label for="technician">Technician</label>
            <input class="form-control" id="technician" name="technician" type="text" value="<?php echo $row['Technician']; ?>">
        </div> 
<?php } ?>


<?php foreach ($detalles_ensayo as $row) { ?>
    <div class="col-xs-4">
        <div class="form-group">
            <label for="technician">Technician</label>
            <input class="form-control" id="technician" name="technician" type="text" value="<?php echo $row['Technician']; ?>">
        </div> 
<?php } ?>


        

</div>

           
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="font-size: 15px; width: 350px; height: 25px;">Laboratory Information</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($detalles_ensayo as $row) { ?>
                        <tr>
                            <td style="padding-right: 2px;">Laboratory:</td>
                            <td style="padding-left: 10px;">QA-Lab</td>
                            <td style="padding-right: 10px;">Test Method:</td>
                            <td><?php echo $row['Standard']; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-right: 10px;">Technician:</td>
                            <td style="padding-left: 10px;"><?php echo $row['Technician']; ?></td>
                            <td style="padding-right: 10px;">Sample Date:</td>
                            <td><?php echo $row['Sample_Date']; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-right: 10px;">Test Date:</td>
                            <td style="padding-left: 10px;"><?php echo $row['Test_Start_Date']; ?></td>
                            <td style="padding-right: 10px;">Report Date:</td>
                            <td><?php echo $row['Report_Date']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="font-size: 15px; width: 350px; height: 25px;">Sample Information</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($detalles_ensayo as $row) { ?>
                        <tr>
                            <td style="padding-right: 20px;">Sample Name:</td>
                            <td style="padding-right: 10px;"><?php echo $row['Sample_ID']; ?></td>
                            <td style="padding-right: 20px;">Sample Number:</td>
                            <td style="padding-left: 10px; padding-right: 10px;"><?php echo $row['Sample_Number']; ?></td>
                            <td style="padding-right: 20px;">Material Type:</td>
                            <td style="padding-left: 10px;"><?php echo $row['Material_Type']; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-right: 20px;">Structure:</td>
                            <td style="padding-right: 10px;"><?php echo $row['Structure']; ?></td>
                            <td style="padding-right: 20px;">Area:</td>
                            <td style="padding-left: 10px; padding-right: 10px;"><?php echo $row['Area']; ?></td>
                            <td style="padding-right: 20px;">Source:</td>
                            <td style="padding-left: 10px;"><?php echo $row['Source']; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-right: 20px;">Depth From:</td>
                            <td style="padding-right: 10px;"><?php echo $row['Depth_From']; ?></td>
                            <td style="padding-right: 20px;">Depth_To:</td>
                            <td style="padding-left: 10px; padding-right: 10px;"><?php echo $row['Depth_To']; ?></td>
                            <td style="padding-right: 20px;">Sample Type:</td>
                            <td style="padding-left: 10px;"><?php echo $row['Sample_Type']; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-right: 20px;">North:</td>
                            <td style="padding-right: 10px;"><?php echo $row['North']; ?></td>
                            <td style="padding-right: 20px;">East:</td>
                            <td style="padding-left: 10px; padding-right: 10px;"><?php echo $row['East']; ?></td>
                            <td style="padding-right: 20px;">Elevation:</td>
                            <td style="padding-left: 10px;"><?php echo $row['Elev']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="font-size: 15px; width: 350px; height: 25px;">Test Information</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($detalles_ensayo as $row) { ?>
                        <tr>
                            <td style="padding-right: 2px;">Trial No.:</td>
                            <td style="padding-left: 10px;">1</td>
                        </tr>
                        <tr>
                            <td style="padding-right: 10px;">Tare Name:</td>
                            <td style="padding-left: 10px;"><?php echo $row['Tare_Name']; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-right: 10px;">Oven Temperature (°C):</td>
                            <td style="padding-left: 10px;"><?php echo $row['Temperature']; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-right: 10px;">Tare Plus Wet Soil (g):</td>
                            <td style="padding-left: 10px;"><?php echo $row['Tare_Plus_Wet_Soil']; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-right: 10px;">Tare Plus Dry Soil (g):</td>
                            <td style="padding-left: 10px;"><?php echo $row['Tare_Plus_Dry_Soil']; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-right: 10px;">Water, Ww (g):</td>
                            <td style="padding-left: 10px;"><?php echo $row['Water']; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-right: 10px;">Tare (g):</td>
                            <td style="padding-left: 10px;"><?php echo $row['Weigth_Tare']; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-right: 10px;">Dry Soil, Ws (g):</td>
                            <td style="padding-left: 10px;"><?php echo $row['Dry_Soil']; ?></td>
                        </tr>
                        <tr>
                            <td style="padding-right: 10px;">Moisture Content (%):</td>
                            <td style="padding-left: 10px;"><?php echo $row['Mc']; ?></td>
                        </tr>

                        <tr>
                            <td style="padding-right: 10px;">Comments:</td>
                            <td style="padding-left: 10px;"><?php echo $row['Comments']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>

                <tr>
                    <td colspan="6">
                        <button class="btn btn-primary" onclick="enviarAEnsayoRepetir()">Enviar Ensayo a repetir</button>
                        <button class="btn btn-success" onclick="enviarAEnsayoFirma()">Enviar a Ensayo a Firma</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div><script>
    function enviarAEnsayoRepetir(sampleId, sampleNumber) {
       
        $.ajax({
            method: 'POST',
            url: 'revisionensayoMCoven.php',
            data: { sampleId: sampleId, sampleNumber: sampleNumber, tabla: 'ensayo_repetido' },
            success: function(response) {
                alert('Datos enviados a Ensayo Repetido');
            },
            error: function() {
                alert('Error al enviar los datos');
            }
        });
        
    }

    function enviarAEnsayoFirma(sampleId, sampleNumber) {
        // Hacer aquí la lógica para enviar los datos a la tabla de Ensayo a Firma
        // Similar al proceso anterior, pero para la tabla de Ensayo a Firma.
    }
</script>

<?php include_once('layouts/footer.php'); ?>
