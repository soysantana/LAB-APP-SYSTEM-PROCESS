<?php
$page_title = 'Moisture Content Constant Mass';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);

$MC = find_by_id('moisture_content_constant_mass', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Moisture Content Constant Mass</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="mc_constant_mass.php" onsubmit="calcular();">
          <div class="row">
            <div class="col-xs-4">
                <div class="form-group">
                  <label>Temperature</label>
                  <select class="form-control" name="temperature">
                  <option <?php if ($MC['Temperature'] == '60 ºC') echo 'selected'; ?>>60 ºC</option>
                  </select>
                </div>
              </div>


            <div class="col-xs-4">
              <div class="form-group">
                <label>Standard</label>
                <select class="form-control" name="standard">
                  <option <?php if ($MC['Standard'] == 'ASTM D2216') echo 'selected'; ?>>ASTM D2216</option>
                </select>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <label>Split Method</label>
                <select class="form-control" name="preparation">
                  <option <?php if ($MC['Preparation'] == 'Mech_Split') echo 'selected'; ?>>Mech_Split</option>
                  <option <?php if ($MC['Preparation'] == 'Man_Split') echo 'selected'; ?>>Man_Split</option>
                </select>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="comment"><?php echo ($MC['Comment']); ?></textarea>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <label>Technician</label>
                <input class="form-control" name="technician" value="<?php echo ($MC['Technician']); ?>" type="text">
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <label>Test Start Date</label>
                <input class="form-control" name="testdate" value="<?php echo ($MC['Test_Start_Date']); ?>" type="date">
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
                <td><input value="<?php echo ($MC['Trial']); ?>" type="text" class="form-control" name="trial" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Name</td>
                <td><input value="<?php echo ($MC['Tare_Name']); ?>" type="text" class="form-control" name="tarename" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Wet Soil (g)</td>
                <td><input value="<?php echo ($MC['Tare_Plus_Wet_Soil']); ?>" type="text" class="form-control" name="tarewet" id="1" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Dry Soil (g) 1</td>
                <td><input value="<?php echo ($MC['Tare_Plus_Dry_Soil1']); ?>" type="text" class="form-control" name="taredry1" id="2" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Dry Soil (g) 2</td>
                <td><input value="<?php echo ($MC['Tare_Plus_Dry_Soil2']); ?>" type="text" class="form-control" name="taredry2" id="3" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Dry Soil (g) 3</td>
                <td><input value="<?php echo ($MC['Tare_Plus_Dry_Soil3']); ?>" type="text" class="form-control" name="taredry3" id="4" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Dry Soil (g) 4</td>
                <td><input value="<?php echo ($MC['Tare_Plus_Dry_Soil4']); ?>" type="text" class="form-control" name="taredry4" id="5" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Water, Ww (g)</td>
                <td><input value="<?php echo ($MC['Water']); ?>" type="text" class="form-control" name="water" id="6" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare (g)</td>
                <td><input value="<?php echo ($MC['Weigth_Tare']); ?>" type="text" class="form-control" name="weigthtare" id="7" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Dry Soil, Ws (g)</td>
                <td><input value="<?php echo ($MC['Dry_Soil']); ?>" type="text" class="form-control" name="drysoil" id="8" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Moisture Content (%)</td>
                <td><input value="<?php echo ($MC['Mc']); ?>" type="text" class="form-control" name="mc" id="9" oninput="calcular()"></td>
              </tr>
            </tbody>
            <tbody id="product_info"></tbody>
          </table>
          <button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
          <button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
          <a href="PDF/MC_Constant_Mass_Rev_2.php?id=<?php echo intval($MC['id']); ?>" class="btn btn-primary">Generar PDF</a>
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