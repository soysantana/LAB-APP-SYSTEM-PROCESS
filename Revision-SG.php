<?php
$page_title = 'Specific Gravity by Pycnometer';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('db/SpecificGravity.php'); 
  }

$Specific_Gravity = find_by_id('specific_gravity', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row"></div>
<div class="col-md-12"></div>
<?php echo display_msg($msg); ?>  
<div class="panel panel-default">
<div class="panel-heading clearfix">
<strong>
<span class="glyphicon glyphicon-th"></span>
<span>Laboratory Specific Gravity by water pycnometer </span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="Revision-SG.php?id=<?php echo (int)$Specific_Gravity['id']; ?>"  onsubmit="calcular();">

<table class="table table-bordered">
<thead>
<tbody id="product_info"></tbody>
</div>
<div class="col-xs-4">
<label >Standard</label>
<select class="form-control" name="Standard">
<option <?php if ($Specific_Gravity['Standard'] == 'Choose...') echo 'selected'; ?>>Choose...</option> 
<option <?php if ($Specific_Gravity['Standard'] == 'ASTM-D854') echo 'selected'; ?>>ASTM-D854</option>        
</select>
</div>

<div class="col-xs-4">
<label >Preparation Method</label>
<select class="form-control" name="PreparationMethod">
<option <?php if ($Specific_Gravity['Preparation_Method'] == 'Oven_Dried') echo 'selected'; ?>>Oven Dried</option>   
<option <?php if ($Specific_Gravity['Preparation_Method'] == 'Air_Dried') echo 'selected'; ?>>Air Dried</option>   
</select>
</div>

<div class="col-xs-4">
<label >Split Method</label>
<select class="form-control" name="SplitMethod">
<option <?php if ($Specific_Gravity['Split_Method'] == 'Mech_Split') echo 'selected'; ?>>Mech. Split</option>  
<option <?php if ($Specific_Gravity['Split_Method'] == 'Man_Split') echo 'selected'; ?>>Manual Split</option>  
</select>
</div>

<div class="col-xs-4">
<label>Comments</label>
<textarea class="form-control" name="Comments"><?php echo ($Specific_Gravity['Comments']); ?></textarea>
</div>
      
<div class="col-xs-4">
<label>Technician</label>
<input class="form-control" name="Technician" value="<?php echo ($Specific_Gravity['Technician']); ?>" type="text">
</div>
    
<div class="col-xs-4">
<label>Test Start Date</label>
<input class="form-control" name="TestStartDate" value="<?php echo ($Specific_Gravity['Test_Start_Date']); ?>" type="date">
</div>



<div>
    <table class="table table-bordered border-primary" style="width: 600px;">
        <thead>
            <label>Testing Information</label>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Pycnometer used (mL)</th>
                <td><input type="text" value="<?php echo ($Specific_Gravity['Pycnometer_Used_mL']); ?>" style="border: none;" size="12" style="background: transparent;" name="PycnometerUsedmL" id=""></td>
            </tr>

            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Pycnometer Number</th>
                <td><input type="text" value="<?php echo ($Specific_Gravity['Pycnometer_Number']); ?>" style="border: none;" size="12" style="background: transparent;" name="PycnometerNumber" id="1"></td>
            </tr>

            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Test Temperatur  Tt (°C)</th>
                <td><input type="text" value="<?php echo ($Specific_Gravity['Test_Temp_Tt_C']); ?>" style="border: none;" size="12" style="background: transparent;" name="TestTempTtC" id="2"oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Average calibrated mass of the dry pycnometer Mp (gr)</th>
                <td><input type="text" value="<?php echo ($Specific_Gravity['Ave_Calibrated_Mass_Dry_Pycnometer_Mp_gr']); ?>" style="border: none;" size="12" style="background: transparent;" name="AveCalibratedMassDryPycnometerMpgr" id="3"oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Average calibrated volume of the pycnometer Vp (mL)</th>
                <td><input type="text" value="<?php echo ($Specific_Gravity['Ave_Calibrated_Volume_Pycnometer_Vp_mL']); ?>" style="border: none;" size="12" style="background: transparent;" name="AveCalibratedVolumePycnometerVpmL" id="4"oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Density of water at the test temperature (g/mL)</th>
                <td><input type="text" value="<?php echo ($Specific_Gravity['Density_Water_Test_Temp_gmL']); ?>" style="border: none;" size="12" style="background: transparent;" name="DensityWaterTestTempgmL" id="5"oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Calibration Weight of Pynometer and water athe the calibration temperature Mpw,c (gr)</th>
                <td><input type="text" value="<?php echo ($Specific_Gravity['Calibration_Weight_Pynometer_Water_Calibration_Temp_Mpwc_gr']); ?>" style="border: none;" size="12" style="background: transparent;" name="CalibrationWeightPynometerWaterCalibrationTempMpwcgr" id="6"oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Weight of Dry Soil + Tare (gr):</th>
                <td><input type="text" value="<?php echo ($Specific_Gravity['Weight_Dry_Soil_Tare_gr']); ?>" style="border: none;" size="12" style="background: transparent;" name="WeightDrySoilTaregr" id="7"oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Weight of Dry Soil  Ms  (gr):</th>
                <td><input type="text" value="<?php echo ($Specific_Gravity['Weight_Dry_Soil_Ms_gr']); ?>" style="border: none;" size="12" style="background: transparent;" name="WeightDrySoilMsgr" id="8"oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Weight of Pycnometer + Soil + Water  Mpws,t (gr):</th>
                <td><input type="text" value="<?php echo ($Specific_Gravity['Weight_Pycnometer_Soil_Water_Mpwst_gr']); ?>" style="border: none;" size="12" style="background: transparent;" name="WeightPycnometerSoilWaterMpwstgr" id="9"oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row"> Specific Gravity of Soil Solid the test temp Gt</th>
                <td><input type="text" value="<?php echo ($Specific_Gravity['Specific_Gravity_Soil_Solid_Test_Temp_Gt']); ?>" style="border: none;" size="12" style="background: transparent;" name="SpecificGravitySoilSolidTestTempGt" id="10"oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Temperature Coefficent K</th>
                <td><input type="text" value="<?php echo ($Specific_Gravity['Temperature_Coefficent_K']); ?>" style="border: none;" size="12" style="background: transparent;" name="TemperatureCoefficentK" id="11"oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Specific gravity of soil solid at 20 °C</th>
                <td><input type="text" value="<?php echo ($Specific_Gravity['Specific_Gravity_Soil_Solid']); ?>" style="border: none;" size="12" style="background: transparent;" name="SpecificGravitySoilSolid" id="12"oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>

<div style="margin-left: 1%;">
<button type="submit" name="repetir_muestra" class="btn btn-warning">Enviar ensayo repetir</button>
<div class="btn-group dropup" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Generar PDF
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Contrucion</a></li>
                    <li><a href="PDF/Specific_Gravity_Rev_3.php?id=<?php echo intval($Specific_Gravity['id']); ?>">Investigacion</a></li>
                    </ul>
                    </div>
<button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>
</div>

</div>
</form>
</div>
</div>
</div>
<script>
    function calcular() {
        // obtenemos los valores

        var temperatura_ensayo = parseFloat(document.getElementById("2").value);
        var Mp = parseFloat(document.getElementById("3").value);
        var Mpwc = parseFloat(document.getElementById("6").value);
        var Wdst = parseFloat(document.getElementById("7").value);
        var Mpws = parseFloat(document.getElementById("9").value);


        // Función para realizar la interpolación lineal
        function interpolate(x, x0, x1, y0, y1) {
            return y0 + ((x - x0) / (x1 - x0)) * (y1 - y0);
        }

        // Tabla con valores de temperatura, densidad y coeficiente de temperatura
        var tabla = [
            { temperatura: 15.0, densidad: 0.9991, coef_temp: 1.00090 },
            { temperatura: 15.9, densidad: 0.99896, coef_temp: 1.00076 },
            { temperatura: 20.0, densidad: 0.99821, coef_temp: 1.00000 },
            { temperatura: 20.9, densidad: 0.99802, coef_temp: 0.99981 },
            { temperatura: 25.0, densidad: 0.99705, coef_temp: 0.9984 },
            { temperatura: 25.9, densidad: 0.99681, coef_temp: 0.9986 },
            { temperatura: 30.0, densidad: 0.99565, coef_temp: 0.99744 },
            { temperatura: 30.5, densidad: 0.99550, coef_temp: 0.99729 },
            { temperatura: 30.9, densidad: 0.99538, coef_temp: 0.99716}
        ];

        // Buscar los índices de los valores inferior y superior en la tabla
        var index_superior = tabla.findIndex(function (element) {
            return element.temperatura >= temperatura_ensayo;
        });

        var index_inferior;
        if (index_superior === -1) {
            // Si la temperatura de ensayo está fuera del rango de la tabla, ajusta los índices
            index_inferior = tabla.length - 2;
            index_superior = tabla.length - 1;
        } else {
            index_inferior = index_superior - 1;
        }

        // Realizar la interpolación
        var densidad_ensayo = interpolate(temperatura_ensayo, tabla[index_inferior].temperatura, tabla[index_superior].temperatura, tabla[index_inferior].densidad, tabla[index_superior].densidad);
        var coef_temp_ensayo = interpolate(temperatura_ensayo, tabla[index_inferior].temperatura, tabla[index_superior].temperatura, tabla[index_inferior].coef_temp, tabla[index_superior].coef_temp);
        var Ms = Wdst - Mp;
        var Vp = (Mpwc - Ms) / densidad_ensayo; 
        var GT = Ms / (Mpwc - (Mpws - Ms));
        var Sg = GT * coef_temp_ensayo;

        // pasamos los valores a los inputs
        document.getElementById("4").value = Vp.toFixed(2);
        document.getElementById("5").value = densidad_ensayo.toFixed(5);
        document.getElementById("8").value = Ms.toFixed(2);
        document.getElementById("10").value = GT.toFixed(2);
        document.getElementById("11").value = coef_temp_ensayo.toFixed(5);
        document.getElementById("12").value = Sg.toFixed(2);
    }
</script>




<?php include_once('layouts/footer.php'); ?>