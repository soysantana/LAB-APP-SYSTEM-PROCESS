<?php
$page_title = 'Moisture Content Calculation ';
require_once('includes/load.php');
// Comprobación del nivel de permiso del usuario para ver esta página
page_require_level(3);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/McOven.php'); 
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
          <span>Moisture Content Calculation</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="mcoven.php" onsubmit="calcular()">

          <table class="table table-bordered">
            <thead>
              <tr>
              
                <div class="col-xs-4">
                  <label>Tare Name</label>
                  <input class="form-control" name="tarename" type="text" value="">
                </div>
                <div class="col-xs-4">
                  <label>Tare Plus Wet Soil (gr)</label>
                  <input class="form-control" name="tarewet" id="1" oninput="calcular()">
                </div>
                <div class="col-xs-4">
                  <label>Tare Plus Dry Soil (gr)</label>
                  <input class="form-control" name="taredry" id="2" oninput="calcular()">
                </div>
                <div class="col-xs-4">
                  <label>Water (gr)</label>
                  <input class="form-control" name="water" value="" id="3" oninput="calcular()">
                </div>
                <div class="col-xs-4">
                  <label>Weigth Tare (gr)</label>
                  <input class="form-control" name="weigthtare" id="4" oninput="calcular()">
                </div>

                <div class="col-xs-4">
                  <label>Dry Soil (gr)</label>
                  <input class="form-control" name="drysoil" value="" id="5" oninput="calcular()">
                </div>
                <div class="col-xs-4">
                  <label>MC %</label>
                  <input class="form-control" name="mc" value="" id="6" oninput="calcular()">
                </div>

                <div class="col-xs-4">
                  <label>Standard</label>
                  <select class="form-control" name="standard">
                    <option selected>Choose...</option>
                    <option value="ASTM D2216">ASTM D2216</option>
                  </select>
                </div>
                <div class="col-xs-4">
                  <label>Temperature</label>
                  <select class="form-control" name="temperature">
                    <option selected>Choose...</option>
                    <option value="110 ºC">110 ºC</option>
                  </select>
                </div>

                
                <div class="col-xs-4">
                  <label>Technician</label>
                  <input class="form-control" name="technician" type="text">
                </div>
                <div class="col-xs-4">
                  <label>Comments</label>
                  <textarea class="form-control" name="comments" type="text"></textarea>
                </div>

                <div class="col-xs-4">
                  <label>Test Start Date</label>
                  <input class="form-control" name="testdate" type="date">
                </div>
              </tr>
            </div>
            </thead>
            <tbody id="product_info"></tbody>
          </table>
          <button type="submit" name="mcoven" class="btn btn-danger">Registrar ensayo</button>
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

  // Código AJAX para la búsqueda
  $(document).ready(function() {
    $('#sug_input').keyup(function() {
      var query = $(this).val();
      if(query != '') {
        $.ajax({
          url: "ajax.php",
          method: "POST",
          data: {query:query},
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

