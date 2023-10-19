<?php
$page_title = 'Moisture Content Microwave';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/McMicrowave.php'); 
}
$Search_Table = find_by_id('moisture_content_microwave', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
  <?php echo display_msg($msg); ?> 
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Moisture Content Microwave</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="Revision-MC-Microwave.php?id=<?php echo (int)$Search_Table['id']; ?>" onsubmit="calcular();">
          <div class="row">

            <div class="col-xs-4">
              <div class="form-group">
                <label for="standard">Standard</label>
                <select class="form-control" name="standard" id="standard">
                  <option <?php if ($Search_Table['Standard'] == 'ASTM D2216') echo 'selected'; ?>>ASTM D2216</option>
                </select>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <label for="preparation">Split Method</label>
                <select class="form-control" name="preparation" id="preparation">
                  <option <?php if ($Search_Table['Preparation'] == 'Mech_Split') echo 'selected'; ?>>Mech_Split</option>
                  <option <?php if ($Search_Table['Preparation'] == 'Man_Split') echo 'selected'; ?>>Man_Split</option>
                </select>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <label for="comment">Comments</label>
                <textarea class="form-control" name="comment" id="comment"><?php echo ($Search_Table['Comment']); ?></textarea>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <label for="technician">Technician</label>
                <input class="form-control" name="technician" value="<?php echo ($Search_Table['Technician']); ?>" type="text" id="technician">
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <label for="testdate">Test Start Date</label>
                <input class="form-control" name="testdate" value="<?php echo ($Search_Table['Test_Start_Date']); ?>" type="date" id="testdate">
              </div>
            </div>
          </div>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="font-size: 15px; width: 350px; height: 25px;">Test Information</th>
                <th style="font-size: 15px; width: 350px; height: 25px;">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Trial</td>
                <td><input value="<?php echo ($Search_Table['Trial']); ?>" type="text" class="form-control" name="trial" id="trial" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Name</td>
                <td><input value="<?php echo ($Search_Table['Tare_Name']); ?>" type="text" class="form-control" name="tarename" id="tarename" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Microwave Model</td>
                <td><input value="<?php echo ($Search_Table['Microwave_Model']); ?>" type="text" class="form-control" name="micromodel" id="micromodel" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Wet Soil (g)</td>
                <td><input value="<?php echo ($Search_Table['Tare_Plus_Wet_Soil']); ?>" type="text" class="form-control" name="tarewet" id="1" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Dry Soil (g) 1</td>
                <td><input value="<?php echo ($Search_Table['Tare_Plus_Dry_Soil1']); ?>" type="text" class="form-control" name="taredry1" id="2" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Dry Soil (g) 2</td>
                <td><input value="<?php echo ($Search_Table['Tare_Plus_Dry_Soil2']); ?>" type="text" class="form-control" name="taredry2" id="3" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Dry Soil (g) 3</td>
                <td><input value="<?php echo ($Search_Table['Tare_Plus_Dry_Soil3']); ?>" type="text" class="form-control" name="taredry3" id="4" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Dry Soil (g) 4</td>
                <td><input value="<?php echo ($Search_Table['Tare_Plus_Dry_Soil4']); ?>" type="text" class="form-control" name="taredry4" id="5" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Water, Ww (g)</td>
                <td><input value="<?php echo ($Search_Table['Water']); ?>" type="text" class="form-control" name="water" id="6" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare (g)</td>
                <td><input value="<?php echo ($Search_Table['Weigth_Tare']); ?>" type="text" class="form-control" name="weigthtare" id="7" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Dry Soil, Ws (g)</td>
                <td><input value="<?php echo ($Search_Table['Dry_Soil']); ?>" type="text" class="form-control" name="drysoil" id="8" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Moisture Content (%)</td>
                <td><input value="<?php echo ($Search_Table['Mc']); ?>" type="text" class="form-control" name="mc" id="9" oninput="calcular()"></td>
              </tr>
            </tbody>
            <tbody id="product_info"></tbody>
          </table>
          <button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
          <button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
          <a href="PDF/MC-Microwave_Rev_1.php?id=<?php echo intval($Search_Table['id']); ?>" class="btn btn-primary">Generar PDF</a>
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
    var TPDS1 = parseFloat(document.getElementById("2").value);
    var TPDS2 = parseFloat(document.getElementById("3").value);
    var TPDS3 = parseFloat(document.getElementById("4").value);
    var TPDS4 = parseFloat(document.getElementById("5").value);
    var WT = parseFloat(document.getElementById("7").value);

    // Calcular los valores restantes
    if (TPDS4 != 0) {
      var water = TPWS - TPDS4;
      var Drysoil = TPDS4 - WT;
    } else if (TPDS3 != 0) {
      var water = TPWS - TPDS3;
      var Drysoil = TPDS3 - WT;
    } else if (TPDS2 != 0) {
      var water = TPWS - TPDS2;
      var Drysoil = TPDS2 - WT;
    } else if (TPDS1 != 0) {
      var water = TPWS - TPDS1;
      var Drysoil = TPDS1 - WT;
    } else {
      var water = 0;
      var Drysoil = 0;
    }

    if (water != 0 && Drysoil != 0) {
      var Mc = (water / Drysoil) * 100;
    }

    // Pasar el resultado al input
    document.getElementById("6").value = water.toFixed(2);
    document.getElementById("8").value = Drysoil.toFixed(2);
    document.getElementById("9").value = Mc.toFixed(2);
  }

  // Código AJAX para la búsqueda
  $(document).ready(function() {
    $('#sug_input').keyup(function() {
      var query = $(this).val();
      if (query != '') {
        $.ajax({
          url: "ajax.php",
          method: "POST",
          data: {
            query: query
          },
          success: function(data) {
            $('#result').html(data);
          }
        });
      } else {
        $('#result').html('');
      }
    });
  });
</script>

<?php include_once('layouts/footer.php'); ?>
