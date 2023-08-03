<?php
$page_title = 'Moisture Content Constant Mass';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);

// Procesamiento del formulario de búsqueda

if (isset($_POST['mc_constant_mass'])) {
  $req_fields = array('sampleid', 'samplenumber', 'structure', 'area', 'source', 'depthfrom', 'depthto', 
  'materialtype', 'sampletype', 'north', 'east', 'elev', 'sampledate', 'standard', 'preparation', 'comment',
   'technician', 'testdate', 'trial', 'tarename', 'temperature', 'tarewet', 'taredry1', 'taredry2', 'taredry3',
    'taredry4', 'weigthtare', 'water', 'drysoil', 'mc');
  validate_fields($req_fields);
  
  if (empty($errors)) {
    $sampleid = $db->escape($_POST['sampleid']);
    $samplenumber = $db->escape($_POST['samplenumber']);
    $structure = $db->escape($_POST['structure']);
    $area = $db->escape($_POST['area']);
    $source = $db->escape($_POST['source']);
    $depthfrom = $db->escape($_POST['depthfrom']);
    $depthto = $db->escape($_POST['depthto']);
    $materialtype = $db->escape($_POST['materialtype']);
    $sampletype = $db->escape($_POST['sampletype']);
    $north = $db->escape($_POST['north']);
    $east = $db->escape($_POST['east']);
    $elev = $db->escape($_POST['elev']);
    $sampledate = $db->escape($_POST['sampledate']);
    $standard = $db->escape($_POST['standard']);
    $preparation = $db->escape($_POST['preparation']);
    $comment = $db->escape($_POST['comment']);
    $technician = $db->escape($_POST['technician']);
    $testdate = $db->escape($_POST['testdate']);
    $trial = $db->escape($_POST['trial']);
    $tarename = $db->escape($_POST['tarename']);
    $temperature = $db->escape($_POST['temperature']);
    $tarewet = $db->escape($_POST['tarewet']);
    $taredry1 = $db->escape($_POST['taredry1']);
    $taredry2 = $db->escape($_POST['taredry2']);
    $taredry3 = $db->escape($_POST['taredry3']);
    $taredry4 = $db->escape($_POST['taredry4']);
    $weigthtare = $db->escape($_POST['weigthtare']);
    $water = $db->escape($_POST['water']);
    $drysoil = $db->escape($_POST['drysoil']);
    $mc = $db->escape($_POST['mc']);
    $reportdate = make_date();
    $testtype = "MC-Constant Mass";

    $sql = "INSERT INTO moisture_content_constant_mass (Sample_ID, Sample_Number, Structure, Area, Source, Depth_From, 
    Depth_To, Material_Type, Sample_Type, North, East, Elev, Sample_Date, Standard, Preparation, Comment, Technician,
     Test_Start_Date, Trial, Tare_Name, Temperature, Tare_Plus_Wet_Soil, Tare_Plus_Dry_Soil1, Tare_Plus_Dry_Soil2, 
     Tare_Plus_Dry_Soil3, Tare_Plus_Dry_Soil4, Water, Weigth_Tare, Dry_Soil, Mc, Report_Date, test_type) 
     VALUES (
        '$sampleid', '$samplenumber', '$structure', '$area', '$source', '$depthfrom', '$depthto', '$materialtype', 
        '$sampletype', '$north', '$east', '$elev', '$sampledate', '$standard', '$preparation', '$comment', '$technician',
         '$testdate', '$trial', '$tarename', '$temperature', '$tarewet', '$taredry1', '$taredry2', '$taredry3',
          '$taredry4', '$water', '$weigthtare', '$drysoil', '$mc', '$reportdate', '$testtype')";

    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('mc_constant_mass.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('mc_constant_mass.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('mc_constant_mass.php', false);
  }
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
                    <option selected>Choose...</option>
                    <option value="60 ºC">60 ºC</option>
                  </select>
                </div>
              </div>


            <div class="col-xs-4">
              <div class="form-group">
                <label>Standard</label>
                <select class="form-control" name="standard">
                  <option selected>Choose...</option>
                  <option value="ASTM D2216">ASTM D2216</option>
                </select>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <label>Split Method</label>
                <select class="form-control" name="preparation">
                  <option selected>Choose...</option>
                  <option value="Mech_Split">Mech. Split</option>
                  <option value="Man_Split">Manual Split</option>
                </select>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="comment"></textarea>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <label>Technician</label>
                <input class="form-control" name="technician" type="text">
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <label>Test Start Date</label>
                <input class="form-control" name="testdate" type="date">
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
                <td><input type="text" class="form-control" name="trial" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Name</td>
                <td><input type="text" class="form-control" name="tarename" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Wet Soil (g)</td>
                <td><input type="text" class="form-control" name="tarewet" id="1" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Dry Soil (g) 1</td>
                <td><input type="text" class="form-control" name="taredry1" id="2" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Dry Soil (g) 2</td>
                <td><input type="text" class="form-control" name="taredry2" id="3" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Dry Soil (g) 3</td>
                <td><input type="text" class="form-control" name="taredry3" id="4" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare Plus Dry Soil (g) 4</td>
                <td><input type="text" class="form-control" name="taredry4" id="5" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Water, Ww (g)</td>
                <td><input type="text" class="form-control" name="water" id="6" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Tare (g)</td>
                <td><input type="text" class="form-control" name="weigthtare" id="7" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Dry Soil, Ws (g)</td>
                <td><input type="text" class="form-control" name="drysoil" id="8" oninput="calcular()"></td>
              </tr>
              <tr>
                <td>Moisture Content (%)</td>
                <td><input type="text" class="form-control" name="mc" id="9" oninput="calcular()"></td>
              </tr>
            </tbody>
            <tbody id="product_info"></tbody>
          </table>
        
          <button type="submit" name="mc_constant_mass" class="btn btn-danger">Registrar ensayo</button>
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