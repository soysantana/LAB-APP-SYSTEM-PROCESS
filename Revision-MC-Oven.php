<?php
$page_title = 'Moisture Content Calculation ';
require_once('includes/load.php');
// Comprobación del nivel de permiso del usuario para ver esta página
page_require_level(3);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/McOven.php'); 
}
$Search_Table = find_by_id('moisture_content', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
  <?php echo display_msg($msg); ?>
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Moisture Content Calculation</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="" onsubmit="calcular()">

          <table class="table table-bordered">
            <thead>
              <tr>
              
                <div class="col-xs-4">
                  <label>Tare Name</label>
                  <input class="form-control" name="tarename" type="text" value="<?php echo ($Search_Table['Tare_Name']); ?>">
                </div>
                <div class="col-xs-4">
                  <label>Tare Plus Wet Soil (gr)</label>
                  <input class="form-control" name="tarewet" id="1" oninput="calcular()" value="<?php echo ($Search_Table['Tare_Plus_Wet_Soil']); ?>">
                </div>
                <div class="col-xs-4">
                  <label>Tare Plus Dry Soil (gr)</label>
                  <input class="form-control" name="taredry" id="2" oninput="calcular()" value="<?php echo ($Search_Table['Tare_Plus_Dry_Soil']); ?>">
                </div>
                <div class="col-xs-4">
                  <label>Water (gr)</label>
                  <input class="form-control" name="water" id="3" oninput="calcular()" value="<?php echo ($Search_Table['Water']); ?>">
                </div>
                <div class="col-xs-4">
                  <label>Weigth Tare (gr)</label>
                  <input class="form-control" name="weigthtare" id="4" oninput="calcular()" value="<?php echo ($Search_Table['Weigth_Tare']); ?>">
                </div>

                <div class="col-xs-4">
                  <label>Dry Soil (gr)</label>
                  <input class="form-control" name="drysoil" id="5" oninput="calcular()" value="<?php echo ($Search_Table['Dry_Soil']); ?>">
                </div>
                <div class="col-xs-4">
                  <label>MC %</label>
                  <input class="form-control" name="mc" id="6" oninput="calcular()" value="<?php echo ($Search_Table['Mc']); ?>">
                </div>

                <div class="col-xs-4">
                  <label>Standard</label>
                  <select class="form-control" name="standard">
                    <option <?php if ($Search_Table['Standard'] == 'Choose...') echo 'selected'; ?>>Choose...</option>
                    <option <?php if ($Search_Table['Standard'] == 'ASTM D2216') echo 'selected'; ?>>ASTM D2216</option>
                  </select>
                </div>
                <div class="col-xs-4">
                  <label>Temperature</label>
                  <select class="form-control" name="temperature">
                    <option <?php if ($Search_Table['Temperature'] == 'Choose...') echo 'selected'; ?>>Choose...</option>
                    <option <?php if ($Search_Table['Temperature'] == '110 ºC') echo 'selected'; ?>>110 ºC</option>
                  </select>
                </div>

                
                <div class="col-xs-4">
                  <label>Technician</label>
                  <input class="form-control" name="technician" value="<?php echo ($Search_Table['Technician']); ?>" type="text">
                </div>
                <div class="col-xs-4">
                  <label>Comments</label>
                  <textarea class="form-control" name="comments" type="text"><?php echo ($Search_Table['Comments']); ?></textarea>
                </div>

                <div class="col-xs-4">
                  <label>Test Start Date</label>
                  <input class="form-control" name="testdate" value="<?php echo ($Search_Table['Test_Start_Date']); ?>" type="date">
                </div>
              </tr>
            </div>
            </thead>
            <tbody></tbody>
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
                    <li><a href="PDF/MC_Oven_Rev_5.php?id=<?php echo intval($SearchTable['id']); ?>">Investigacion</a></li>
                    </ul>
                    </div>
          <button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  function calcular() {
    // Obtener los valores
    var TPWS = parseFloat(document.getElementById("1").value);
    var TPDS = parseFloat(document.getElementById("2").value);
    var WT = parseFloat(document.getElementById("4").value);

    // Calcular los valores
    var water = TPWS - TPDS;
    var Drysoil = TPDS - WT;
    var Mc = (water / Drysoil) * 100;

    // Pasar el resultado al input
    document.getElementById("3").value = water.toFixed(2);
    document.getElementById("5").value = Drysoil.toFixed(2);
    document.getElementById("6").value = Mc.toFixed(2);
  }
</script>

<?php include_once('layouts/footer.php'); ?>

