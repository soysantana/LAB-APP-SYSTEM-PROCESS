<?php
$page_title = 'Specific Gravity for Fine Aggregate';
require_once('includes/load.php');
// Checking what level user has permission to view this page
page_require_level(3);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('db/SgFine.php'); 
  }

$Specific_Gravity = find_by_id('specific_gravity_fine', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
    <?php echo display_msg($msg); ?>  
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Laboratory Specific Gravity for Fine Aggregate</span>
                </strong>
            </div>
            <div class="panel-body">
                <form method="post" action="Revision-SG-Fines.php?id=<?php echo (int)$Specific_Gravity['id']; ?>" onsubmit="calcular();">
                    <table class="table table-bordered">
                        <thead>
                        <tbody id="product_info"></tbody>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="col-xs-4">
                                        <label>Standard</label>
                                        <select class="form-control" name="Standard">
                                            <option <?php if ($Specific_Gravity['Standard'] == 'Choose...') echo 'selected'; ?>>Choose...</option>
                                            <option <?php if ($Specific_Gravity['Standard'] == 'ASTM-D854') echo 'selected'; ?>>ASTM-D854</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-4">
                                        <label>Preparation Method</label>
                                        <select class="form-control" name="PreparationMethod">
                                            <option <?php if ($Specific_Gravity['Preparation_Method'] == 'Oven_Dried') echo 'selected'; ?>>Oven Dried</option>
                                            <option <?php if ($Specific_Gravity['Preparation_Method'] == 'Air_Dried') echo 'selected'; ?>>Air_Dried</option> 
                                        </select>
                                    </div>
                                    <div class="col-xs-4">
                                        <label>Split Method</label>
                                        <select class="form-control" name="SplitMethod">
                                            <option <?php if ($Specific_Gravity['Split_Method'] == 'Mech_Split') echo 'selected'; ?>>Mech. Split</option>  
                                            <option <?php if ($Specific_Gravity['Split_Method'] == 'Man_Split') echo 'selected'; ?>>Man_Split</option>  
                                        </select>
                                    </div>
                                </td>
                                <td>
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
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered" style="width: 66%;">
                        <thead>
                            <caption>Test information</caption>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Pycnometer Number :</th>
                                <td><input type="text" value="<?php echo ($Specific_Gravity['Pycnometer_Number']); ?>" style="border: none;" size="12" style="background: transparent;"id="1" name="PycnometerNumber"  oninput="calcular()"></td>
                                <th>Weight of Saturated Surface Dry Soil in Air (g):</th>
                                <td><input type="text" value="<?php echo ($Specific_Gravity['Weight_Saturated_Surface_Dry_Soil_Air']); ?>" style="border: none;" size="12" style="background: transparent;"id="2" name="WeightSaturatedSurfaceDrySoilAir"  oninput="calcular()"></td>
                            </tr>
                            <tr>
                                <th>Weight of Pycnometer(g): </th>
                                <td><input type="text" value="<?php echo ($Specific_Gravity['Weight_Pycnometer']); ?>" style="border: none;" size="12" style="background: transparent;"id="3" name="WeightPycnometer"  oninput="calcular()"></td>
                                <th>Temperature of Sample (°C) :</th>
                                <td><input type="text" value="<?php echo ($Specific_Gravity['Temp_Sample']); ?>" style="border: none;" size="12" style="background: transparent;"id="4" name="TempSample"  oninput="calcular()"></td>
                            </tr>
                            <tr>
                                <th>Weight of Dry Soil + Tare (g):</th>
                                <td><input type="text" value="<?php echo ($Specific_Gravity['Weight_Dry_Soil_Tare']); ?>" style="border: none;" size="12" style="background: transparent;"id="5" name="WeightDrySoilTare"  oninput="calcular()"></td>
                                <th>Weight of Pycnometer + Soil + Water (g):</th>
                                <td><input type="text" value="<?php echo ($Specific_Gravity['Weight_Pycnometer_Soil_Water']); ?>" style="border: none;" size="12" style="background: transparent;"id="6" name="WeightPycnometerSoilWater"  oninput="calcular()"></td>
                            </tr>
                            <tr>
                                <th>Weight of Dry Soil (g):</th>
                                <td><input type="text" value="<?php echo ($Specific_Gravity['Weight_Dry_Soil']); ?>" style="border: none;" size="12" style="background: transparent;"id="7" name="WeightDrySoil"  oninput="calcular()"></td>
                                <th>Calibration Weight of Pycnometer at Desired Temprature (g):</th>
                                <td><input type="text" value="<?php echo ($Specific_Gravity['Calibration_Weight_Pycnometer_Desired_Temp']); ?>" style="border: none;" size="12" style="background: transparent;"id="8" name="CalibrationWeightPycnometerDesiredTemp"  oninput="calcular()"></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered" style="width: 66%;">
                        <thead>
                            <caption>Result</caption>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Specific Gravity</th>
                                <td><input type="text" value="<?php echo ($Specific_Gravity['Specific_Gravity']); ?>" style="border: none;" size="12" style="background: transparent;"id="9" name="SpecificGravity"  oninput="calcular()"></td>
                                <th>Specific Gravity (SSD)</th>
                                <td><input type="text" value="<?php echo ($Specific_Gravity['Specific_Gravity_SSD']); ?>" style="border: none;" size="12" style="background: transparent;"id="10" name="SpecificGravitySSD"  oninput="calcular()"></td>
                            </tr>
                            <tr>
                                <th>Apparent Specific Gravity</th>
                                <td><input type="text" value="<?php echo ($Specific_Gravity['Apparent_Specific_Gravity']); ?>" style="border: none;" size="12" style="background: transparent;"id="11" name="ApparentSpecificGravity"  oninput="calcular()"></td>
                                <th>Percent of Absortion</th>
                                <td><input type="text" value="<?php echo ($Specific_Gravity['Percent_Absortion']); ?>" style="border: none;" size="12" style="background: transparent;"id="12" name="PercentAbsortion"  oninput="calcular()"></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
                    <button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
                    <div class="btn-group dropup" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Generar PDF
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Contrucion</a></li>
                    <li><a href="PDF/SG_FA_Rev_1.php?id=<?php echo intval($SearchTable['id']); ?>">Investigacion</a></li>
                    </ul>
                    </div>
                    <button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
function convertToNumberOrZero(value) {
  const parsedValue = parseFloat(value);
  return isNaN(parsedValue) ? 0 : parsedValue;
}

function calcular() {
  // Obtener los valores de los input y convertir a número o cero
  let pycnum = convertToNumberOrZero(document.getElementById("1").value);
  let wtssda = convertToNumberOrZero(document.getElementById("2").value);
  let wtpyc = convertToNumberOrZero(document.getElementById("3").value);
  let temp = convertToNumberOrZero(document.getElementById("4").value);
  let wtfst = convertToNumberOrZero(document.getElementById("5").value);
  let wtpycsw = convertToNumberOrZero(document.getElementById("6").value);
  let wtds = convertToNumberOrZero(document.getElementById("7").value);
  let calpyc = convertToNumberOrZero(document.getElementById("8").value);

  // Formulas
  const pn1 = 0.99994;
  const mp100 = 100;

  var sg = (wtds / (calpyc + wtssda - wtpycsw)) * pn1;
  var sgssd = (wtssda / (calpyc + wtssda - wtpycsw)) * pn1;
  var atsg = (wtds / (calpyc + wtds - wtpycsw)) * pn1;
  var pnta = (wtssda - wtds) / wtds * mp100;

  // Resultado
  document.getElementById("9").value = isNaN(sg) ? 0 : sg.toFixed(2);
  document.getElementById("10").value = isNaN(sgssd) ? 0 : sgssd.toFixed(2);
  document.getElementById("11").value = isNaN(atsg) ? 0 : atsg.toFixed(2);
  document.getElementById("12").value = isNaN(pnta) ? 0 : pnta.toFixed(2);
}
</script>

<?php include_once('layouts/footer.php'); ?>
