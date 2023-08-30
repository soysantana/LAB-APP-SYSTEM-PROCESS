<?php
$page_title = 'Specific Gravity for Fine Aggregate';
require_once('includes/load.php');
// Checking what level user has permission to view this page
page_require_level(3);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('db/SgFine.php'); 
  }
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-6">
        <?php echo display_msg($msg); ?>
        <form method="post" action="ajax.php" autocomplete="off" id="sug-form">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Búsqueda</button>
                    </span>
                    <input type="text" id="sug_input" class="form-control" name="title" placeholder="Buscar por el nombre de la muestra">
                </div>
                <div id="result" class="list-group"></div>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Laboratory Specific Gravity for Fine Aggregate</span>
                </strong>
            </div>
            <div class="panel-body">
                <form method="post" action="sg_fine.php" onsubmit="calcular();">
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
                                            <option selected>Choose...</option>
                                            <option value="ASTM-D854">ASTM-D854</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-4">
                                        <label>Preparation Method</label>
                                        <select class="form-control" name="PreparationMethod">
                                            <option selected>Choose...</option>
                                            <option value="Oven_Dried">Oven Dried</option>
                                            <option value="Air_Dried">Air Dried</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-4">
                                        <label>Split Method</label>
                                        <select class="form-control" name="SplitMethod">
                                            <option selected>Choose...</option>
                                            <option value="Mech_Split">Mech. Split</option>
                                            <option value="Man_Split">Manual Split</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-xs-4">
                                        <label>Comments</label>
                                        <textarea class="form-control" name="Comments"></textarea>
                                    </div>
                                    <div class="col-xs-4">
                                        <label>Technician</label>
                                        <input class="form-control" name="Technician" type="text">
                                    </div>
                                    <div class="col-xs-4">
                                        <label>Test Start Date</label>
                                        <input class="form-control" name="TestStartDate" type="date">
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
                                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="1" name="PycnometerNumber"  oninput="calcular()"></td>
                                <th>Weight of Saturated Surface Dry Soil in Air (g):</th>
                                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="2" name="WeightSaturatedSurfaceDrySoilAir"  oninput="calcular()"></td>
                            </tr>
                            <tr>
                                <th>Weight of Pycnometer(g): </th>
                                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="3" name="WeightPycnometer"  oninput="calcular()"></td>
                                <th>Temperature of Sample (°C) :</th>
                                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="4" name="TempSample"  oninput="calcular()"></td>
                            </tr>
                            <tr>
                                <th>Weight of Dry Soil + Tare (g):</th>
                                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="5" name="WeightDrySoilTare"  oninput="calcular()"></td>
                                <th>Weight of Pycnometer + Soil + Water (g):</th>
                                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="6" name="WeightPycnometerSoilWater"  oninput="calcular()"></td>
                            </tr>
                            <tr>
                                <th>Weight of Dry Soil (g):</th>
                                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="7" name="WeightDrySoil"  oninput="calcular()"></td>
                                <th>Calibration Weight of Pycnometer at Desired Temprature (g):</th>
                                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="8" name="CalibrationWeightPycnometerDesiredTemp"  oninput="calcular()"></td>
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
                                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="9" name="SpecificGravity"  oninput="calcular()"></td>
                                <th>Specific Gravity (SSD)</th>
                                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="10" name="SpecificGravitySSD"  oninput="calcular()"></td>
                            </tr>
                            <tr>
                                <th>Apparent Specific Gravity</th>
                                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="11" name="ApparentSpecificGravity"  oninput="calcular()"></td>
                                <th>Percent of Absortion</th>
                                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="12" name="PercentAbsortion"  oninput="calcular()"></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" name="SgFine" class="btn btn-danger">Registrar ensayo</button>
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
  var atsg = (wtds / (calpyc + wtssda - wtpycsw)) * pn1;
  var pnta = (wtssda - wtds) / wtds * mp100;

  // Resultado
  document.getElementById("9").value = isNaN(sg) ? 0 : sg.toFixed(2);
  document.getElementById("10").value = isNaN(sgssd) ? 0 : sgssd.toFixed(2);
  document.getElementById("11").value = isNaN(atsg) ? 0 : atsg.toFixed(2);
  document.getElementById("12").value = isNaN(pnta) ? 0 : pnta.toFixed(2);
}
</script>

<?php include_once('layouts/footer.php'); ?>
