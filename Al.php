<?php
$page_title = 'Atterberg limit  Calculation ';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/AtterbergLimit.php'); 
}
?>

<?php
/*
// Recuperamos los datos del formulario
if (isset($_POST['Al'])) {
  $req_fields = array(
'sampleid', 'structure', 'Sample_Number', 'area', 'source', 'depthfrom', 'depthto', 'materialtype', 'sampletype', 'north', 'east', 'elev', 'sampledate',
'standard', 'technician', 'comments', 'test_start_date', 'LLBlows1', 'LLBlows2', 'LLBlows3', 'LLContainer1', 'LLContainer2', 'LLContainer3',
'LLWetSoil1', 'LLWetSoil2', 'LLWetSoil3', 'LLDrysoiltare1', 'LLDrysoiltare2', 'LLDrysoiltare3', 'LLWater1', 'LLWater2', 'LLWater3', 'LLTare1',
'LLTare2', 'LLTare3', 'LLWtDrySoil1', 'LLWtDrySoil2', 'LLWtDrySoil3', 'LLMCPorce1', 'LLMCPorce2', 'LLMCPorce3', 'PLContainer1', 'PLContainer2', 'PLContainer3',
'PLWetSoil1', 'PLWetSoil2', 'PLWetSoil3', 'PLDrysoiltare1', 'PLDrysoiltare2', 'PLDrysoiltare3', 'PLWater1', 'PLWater2', 'PLWater3', 'PLTare1',
'PLTare2', 'PLTare3', 'PLWtDrySoil1', 'PLWtDrySoil2', 'PLWtDrySoil3', 'PLMCPorce1', 'PLMCPorce2', 'PLMCPorce3', 'PLAvgMc', 'LLPorce', 'PLPorce',
'PLIndexPorce', 'LLIndexPorce', 'classification', 'split', 'methodpre'
);
  validate_fields($req_fields);

// Validacion de post
  if (empty($errors)) {
    $sampleid = $db->escape($_POST['sampleid']);
    $structure = $db->escape($_POST['structure']);
    $samplenumber = $db->escape($_POST['Sample_Number']);
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
    $technician = $db->escape($_POST['technician']);
    $comments = $db->escape($_POST['comments']);
    $test_start_date = $db->escape($_POST['test_start_date']);


    $reportdate = make_date();
    $testype = "AL";

// LIQUID LIMIT
    $LLBlows1 = $db->escape($_POST['LLBlows1']);
    $LLBlows2 = $db->escape($_POST['LLBlows2']);
    $LLBlows3 = $db->escape($_POST['LLBlows3']);
    $LLContainer1 = $db->escape($_POST['LLContainer1']);
    $LLContainer2 = $db->escape($_POST['LLContainer2']);
    $LLContainer3 = $db->escape($_POST['LLContainer3']);
    $LLWetSoil1 = $db->escape($_POST['LLWetSoil1']);
    $LLWetSoil2 = $db->escape($_POST['LLWetSoil2']);
    $LLWetSoil3 = $db->escape($_POST['LLWetSoil3']);
    $LLDrysoiltare1 = $db->escape($_POST['LLDrysoiltare1']);
    $LLDrysoiltare2 = $db->escape($_POST['LLDrysoiltare2']);
    $LLDrysoiltare3 = $db->escape($_POST['LLDrysoiltare3']);
    $LLWater1 = $db->escape($_POST['LLWater1']);
    $LLWater2 = $db->escape($_POST['LLWater2']);
    $LLWater3 = $db->escape($_POST['LLWater3']);
    $LLTare1 = $db->escape($_POST['LLTare1']);
    $LLTare2 = $db->escape($_POST['LLTare2']);
    $LLTare3 = $db->escape($_POST['LLTare3']);
    $LLWtDrySoil1 = $db->escape($_POST['LLWtDrySoil1']);
    $LLWtDrySoil2 = $db->escape($_POST['LLWtDrySoil2']);
    $LLWtDrySoil3 = $db->escape($_POST['LLWtDrySoil3']);
    $LLMCPorce1 = $db->escape($_POST['LLMCPorce1']);
    $LLMCPorce2 = $db->escape($_POST['LLMCPorce2']);
    $LLMCPorce3 = $db->escape($_POST['LLMCPorce3']);

// PLASTIC LIMIT
    $PLContainer1 = $db->escape($_POST['PLContainer1']);
    $PLContainer2 = $db->escape($_POST['PLContainer2']);
    $PLContainer3 = $db->escape($_POST['PLContainer3']);
    $PLWetSoil1 = $db->escape($_POST['PLWetSoil1']);
    $PLWetSoil2 = $db->escape($_POST['PLWetSoil2']);
    $PLWetSoil3 = $db->escape($_POST['PLWetSoil3']);
    $PLDrysoiltare1 = $db->escape($_POST['PLDrysoiltare1']);
    $PLDrysoiltare2 = $db->escape($_POST['PLDrysoiltare2']);
    $PLDrysoiltare3 = $db->escape($_POST['PLDrysoiltare3']);
    $PLWater1 = $db->escape($_POST['PLWater1']);
    $PLWater2 = $db->escape($_POST['PLWater2']);
    $PLWater3 = $db->escape($_POST['PLWater3']);
    $PLTare1 = $db->escape($_POST['PLTare1']);
    $PLTare2 = $db->escape($_POST['PLTare2']);
    $PLTare3 = $db->escape($_POST['PLTare3']);
    $PLWtDrySoil1 = $db->escape($_POST['PLWtDrySoil1']);
    $PLWtDrySoil2 = $db->escape($_POST['PLWtDrySoil2']);
    $PLWtDrySoil3 = $db->escape($_POST['PLWtDrySoil3']);
    $PLMCPorce1 = $db->escape($_POST['PLMCPorce1']);
    $PLMCPorce2 = $db->escape($_POST['PLMCPorce2']);
    $PLMCPorce3 = $db->escape($_POST['PLMCPorce3']);
    $PLAvgMc = $db->escape($_POST['PLAvgMc']);
    
// Limit Parameter
  $LLPorce = $db->escape($_POST['LLPorce']);
  $PLPorce = $db->escape($_POST['PLPorce']);
  $PLIndexPorce = $db->escape($_POST['PLIndexPorce']);
  $LLIndexPorce = $db->escape($_POST['LLIndexPorce']);
  $classification = $db->escape($_POST['classification']);

  $split = $db->escape($_POST['split']);
  $methodpre = $db->escape($_POST['methodpre']);


// Componemos la sentencia SQL
    $sql = "INSERT INTO atterberg_limit (
Sample_ID, Structure, Sample_Number, Area, Source, Depth_From, Depth_To, Material_Type, Sample_Type, North, East, Elev, Sample_Date, Standard, Technician,
Comments, Test_Start_Date, Report_Date, test_type, LL_Blows_1, LL_Blows_2, LL_Blows_3, LL_Container_1, LL_Container_2, LL_Container_3, 
LL_Wet_Soil_1, LL_Wet_Soil_2, LL_Wet_Soil_3, LL_Dry_soil_tare1, LL_Dry_soil_tare2, LL_Dry_soil_tare3, LL_Water_1, LL_Water_2, LL_Water_3, 
LL_Tare_1, LL_Tare_2, LL_Tare_3, LL_Wt_Dry_Soil_1, LL_Wt_Dry_Soil_2, LL_Wt_Dry_Soil_3, LL_MC_Porce_1, LL_MC_Porce_2, LL_MC_Porce_3, PL_Container_1, PL_Container_2, PL_Container_3, 
PL_Wet_Soil_1, PL_Wet_Soil_2, PL_Wet_Soil_3, PL_Dry_soil_tare1, PL_Dry_soil_tare2, PL_Dry_soil_tare3, PL_Water_1, PL_Water_2, PL_Water_3, 
PL_Tare_1, PL_Tare_2, PL_Tare_3, PL_Wt_Dry_Soil_1, PL_Wt_Dry_Soil_2, PL_Wt_Dry_Soil_3, PL_MC_Porce_1, PL_MC_Porce_2, PL_MC_Porce_3, PL_Avg_Mc, Liquid_Limit_Porce,
Plastic_Limit_Porce, Plasticity_Index_Porce, Liquidity_Index_Porce, Classification, Split_Method, Preparation_Method
)
      VALUES (
'$sampleid', '$structure', '$samplenumber', '$area', '$source', '$depthfrom', '$depthto', '$materialtype', '$sampletype', '$north', '$east', '$elev', '$sampledate',
'$standard', '$technician', '$comments', '$test_start_date', '$reportdate', '$testype', '$LLBlows1', '$LLBlows2', '$LLBlows3', '$LLContainer1', '$LLContainer2',
'$LLContainer3', '$LLWetSoil1', '$LLWetSoil2', '$LLWetSoil3', '$LLDrysoiltare1', '$LLDrysoiltare2', '$LLDrysoiltare3', '$LLWater1', '$LLWater2', '$LLWater3',
'$LLTare1', '$LLTare2', '$LLTare3', '$LLWtDrySoil1', '$LLWtDrySoil2', '$LLWtDrySoil3', '$LLMCPorce1', '$LLMCPorce2', '$LLMCPorce3', '$PLContainer1', '$PLContainer2',
'$PLContainer3', '$PLWetSoil1', '$PLWetSoil2', '$PLWetSoil3', '$PLDrysoiltare1', '$PLDrysoiltare2', '$PLDrysoiltare3', '$PLWater1', '$PLWater2', '$PLWater3',
'$PLTare1', '$PLTare2', '$PLTare3', '$PLWtDrySoil1', '$PLWtDrySoil2', '$PLWtDrySoil3', '$PLMCPorce1', '$PLMCPorce2', '$PLMCPorce3', '$PLAvgMc', '$LLPorce',
'$PLPorce', '$PLIndexPorce', '$LLIndexPorce', '$classification', '$split', '$methodpre'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('Al.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('Al.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('Al.php', false);
  }
}
*/
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
          <span>Atterberg Limit Calculation</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="Al.php" onsubmit="calcular()">

  <table>
    <thead></thead>
    <tbody id="product_info"> </tbody>
  </table>

          <table class="table table-bordered">
            <thead>
      </div>
      <div class="col-xs-4">
        <label>Standard</label>
        <select class="form-control" name="standard">
          <option selected>Choose...</option>
          <option value="ASTM-D4318">ASTM-D4318</option>
        </select>
      </div>
      <div class="col-xs-4">
        <label>Preparation Method</label>
        <select class="form-control" name="methodpre">
          <option selected>Choose...</option>
          <option value="Oven_Dried">Oven Dried</option>
          <option value="Air_Dried">Air Dried</option>
          <option value="Microwave_Dried">Microwave Dried</option>
          <option value="Wet">Wet</option>
        </select>
      </div>

      <div class="col-xs-4">
        <label>Split Method</label>
        <select class="form-control" name="split">
          <option selected>Choose...</option>
          <option value="Manual">Manual</option>
          <option value="Mechanical">Mechanical</option>
        </select>
      </div>

      <div class="col-xs-4">
        <label>Natural Mc (%):</label>
        <input class="form-control" name="natmc" type="text" id="1">
      </div>

      <div class="col-xs-4">
        <label>Comments</label>
        <textarea class="form-control" name="comments"></textarea>
      </div>

      <div class="col-xs-4">
        <label>Technician</label>
        <input class="form-control" name="technician" type="text">
      </div>

      <div class="col-xs-4">
        <label>Test Start Date</label>
        <input class="form-control" name="test_start_date" type="date">
      </div>


      <div class="panel-body"></div>


      <div style="display: flex; flex-direction: row; justify-content: space-between;">
        <table class="table table-bordered border-primary" style="width:450px;">
          <thead>
          </thead>
          <caption style="font-weight: bold;">Liquid Limit</caption>
          <tr>
            <th scope="col">Trial Number</th>
            <th scope="col" style="text-align: center;">1</th>
            <th scope="col" style="text-align: center;">2</th>
            <th scope="col" style="text-align: center;">3</th>
          </tr>

          <tbody>
            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">No. of Blows</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="2" name="LLBlows1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="3" name="LLBlows2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="4" name="LLBlows3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Container</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="5" name="LLContainer1"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="6" name="LLContainer2"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="7" name="LLContainer3"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Wet Soil + Tare (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="8" name="LLWetSoil1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="9" name="LLWetSoil2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="10" name="LLWetSoil3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Dry Soil + Tare (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="11" name="LLDrysoiltare1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="12" name="LLDrysoiltare2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="13" name="LLDrysoiltare3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Water (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="14" name="LLWater1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="15" name="LLWater2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="16" name="LLWater3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row"> Tare (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="17" name="LLTare1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="18" name="LLTare2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="19" name="LLTare3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Dry Soil (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="20" name="LLWtDrySoil1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="21" name="LLWtDrySoil2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="22" name="LLWtDrySoil3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content (%) </th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="23" name="LLMCPorce1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="24" name="LLMCPorce2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="25" name="LLMCPorce3" oninput="calcular()"></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div id="chart-container" style="margin-top: -28%; margin-left: 30%; height: 450px; width: 730px;"></div>

      <div style="display: flex; flex-wrap: wrap; margin-left: 1%;">
        <table class="table table-bordered border-primary" style=" width:450px;">
          <thead>
          </thead>
          <caption style="font-weight: bold;">Plastic Limit</caption>
          <thead>
            <tr>
              <th scope="col">Trial Number</th>
              <th scope="col" style="text-align: center;">1</th>
              <th scope="col" style="text-align: center;">2</th>
              <th scope="col" style="text-align: center;">3</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Container</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="26" name="PLContainer1"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="27" name="PLContainer2"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="28" name="PLContainer3"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Wet Soil + Tare (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="29" name="PLWetSoil1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="30" name="PLWetSoil2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="31" name="PLWetSoil3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Dry Soil + Tare (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="32" name="PLDrysoiltare1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="33" name="PLDrysoiltare2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="34" name="PLDrysoiltare3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Water (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="35" name="PLWater1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="36" name="PLWater2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="37" name="PLWater3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row"> Tare (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="38" name="PLTare1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="39" name="PLTare2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="40" name="PLTare3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Dry Soil (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="41" name="PLWtDrySoil1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="42" name="PLWtDrySoil2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="43" name="PLWtDrySoil3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content (%) </th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="44" name="PLMCPorce1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="45" name="PLMCPorce2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="46" name="PLMCPorce3" oninput="calcular()"></td>
            </tr>

            
            <tr>
              <th style="font-size: 14px;" scope="row">Avg. Moisture Content%</th>
              <td scope="row" colspan="3"><input type="text" style="border: none; text-align: center;" size="25" style="background: transparent;" id="52" name="PLAvgMc" oninput="calcular()"></td>
            </tr>
        </table>
      </div>

      <div id="plasticity-chart" style="margin-top: -25%; margin-left: 30%; height: 450px; width: 730px;"></div>

        <div style="display: flex; flex-direction: row-reverse; margin-top: -55%; margin-bottom: 35%;">
          <table class="table table-bordered border-primary" style="width: 350px;">
            <thead>

              <caption>Summary Atteberg Limit Parameter</caption>
            </thead>
            <tbody>
              <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Liquid Limit (%):</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="47" name="LLPorce" oninput="calcular()"></td>
              </tr>

              <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Plastic Limit (%):</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="48" name="PLPorce" oninput="calcular()"></td>
              </tr>

              <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Plasticity Index (%):</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="49" name="PLIndexPorce" oninput="calcular()"></td>

              <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Liquidity Index (%):</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="50" name="LLIndexPorce" oninput="calcular()"></td>
              </tr>
              <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Soil Classification as per Unified Soil Classification System,ASTM designation D2487-06</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="51" name="classification" oninput="calcular()"></td>
              </tr>
              
              <div>
              
              </div>


              <script>
                function calcular() {
                  // Obtener los valores del liquid limit
                  var Nmc = parseFloat(document.getElementById("1").value);
                  var Lwst1 = parseFloat(document.getElementById("8").value);
                  var Lwst2 = parseFloat(document.getElementById("9").value);
                  var Lwst3 = parseFloat(document.getElementById("10").value);

                  var Ldst1 = parseFloat(document.getElementById("11").value);
                  var Ldst2 = parseFloat(document.getElementById("12").value);
                  var Ldst3 = parseFloat(document.getElementById("13").value);

                  var Lw1 = parseFloat(document.getElementById("14").value);
                  var Lw2 = parseFloat(document.getElementById("15").value);
                  var Lw3 = parseFloat(document.getElementById("16").value);

                  var Lt1 = parseFloat(document.getElementById("17").value);
                  var Lt2 = parseFloat(document.getElementById("18").value);
                  var Lt3 = parseFloat(document.getElementById("19").value);

                  var Lds1 = parseFloat(document.getElementById("20").value);
                  var Lds2 = parseFloat(document.getElementById("21").value);
                  var Lds3 = parseFloat(document.getElementById("22").value);

                  var Pwst1 = parseFloat(document.getElementById("29").value);
                  var Pwst2 = parseFloat(document.getElementById("30").value);
                  var Pwst3 = parseFloat(document.getElementById("31").value);

                  var Pdst1 = parseFloat(document.getElementById("32").value);
                  var Pdst2 = parseFloat(document.getElementById("33").value);
                  var Pdst3 = parseFloat(document.getElementById("34").value);

                  var Pw1 = parseFloat(document.getElementById("35").value);
                  var Pw2 = parseFloat(document.getElementById("36").value);
                  var Pw3 = parseFloat(document.getElementById("37").value);

                  var Pt1 = parseFloat(document.getElementById("38").value);
                  var Pt2 = parseFloat(document.getElementById("39").value);
                  var Pt3 = parseFloat(document.getElementById("40").value);

                  var Pds1 = parseFloat(document.getElementById("41").value);
                  var Pds2 = parseFloat(document.getElementById("42").value);
                  var Pds3 = parseFloat(document.getElementById("43").value);

                  var PLL = parseFloat(document.getElementById("48").value);
                  var PLP = parseFloat(document.getElementById("49").value);
                  var IP = parseFloat(document.getElementById("50").value);



                  //calcular
                  var Ww1 = Lwst1 - Ldst1;
                  var Ww2 = Lwst2 - Ldst2;
                  var Ww3 = Lwst3 - Ldst3;

                  var Ds1 = Ldst1 - Lt1;
                  var Ds2 = Ldst2 - Lt2;
                  var Ds3 = Ldst3 - Lt3;

                  var Lmc1 = (Ww1 / Ds1) * 100;
                  var Lmc2 = (Ww2 / Ds2) * 100;
                  var Lmc3 = (Ww3 / Ds3) * 100;

                  var Ww4 = Pwst1 - Pdst1;
                  var Ww5 = Pwst2 - Pdst2;
                  var Ww6 = Pwst3 - Pdst3;

                  var Ds4 = Pdst1 - Pt1;
                  var Ds5 = Pdst2 - Pt2;
                  var Ds6 = Pdst3 - Pt3;

                  var Lmc4 = (Ww4 / Ds4) * 100;
                  var Lmc5 = (Ww5 / Ds5) * 100;
                  var Lmc6 = (Ww6 / Ds6) * 100;

                  var PLL = (Lmc1 + Lmc2 + Lmc3) / 3;
                  var PLP = (Lmc4 + Lmc5 + Lmc6) / 3;
                  var IP = PLL - PLP;
                  var LI = ((Nmc - PLP) / IP)||0;

                  function clasificarsuelo() {
                    if (PLL < 50 && IP > 7) {
                      return "CL";
                    } else if (PLL < 50 && IP >= 4 && IP <= 7) {
                      return "CL-ML";
                    } else if (PLL < 50 && IP < 4) {
                      return "ML";

                      //Valores Mayores a 50
                    } else if (PLL >= 50 && IP > 7) {
                      return "CH";
                    } else if (PLL >= 50 && IP < 4) {
                      return "MH";
                    } else {
                      return "Error";
                    }
                  }



                  // Pasar el resultado al input
                  document.getElementById("14").value = Ww1.toFixed(2);
                  document.getElementById("15").value = Ww2.toFixed(2);
                  document.getElementById("16").value = Ww3.toFixed(2);

                  document.getElementById("20").value = Ds1.toFixed(2);
                  document.getElementById("21").value = Ds2.toFixed(2);
                  document.getElementById("22").value = Ds3.toFixed(2);

                  document.getElementById("23").value = Lmc1.toFixed(2);
                  document.getElementById("24").value = Lmc2.toFixed(2);
                  document.getElementById("25").value = Lmc3.toFixed(2);

                  document.getElementById("35").value = Ww4.toFixed(2);
                  document.getElementById("36").value = Ww5.toFixed(2);
                  document.getElementById("37").value = Ww6.toFixed(2);

                  document.getElementById("41").value = Ds4.toFixed(2);
                  document.getElementById("42").value = Ds5.toFixed(2);
                  document.getElementById("43").value = Ds6.toFixed(2);

                  document.getElementById("44").value = Lmc4.toFixed(2);
                  document.getElementById("45").value = Lmc5.toFixed(2);
                  document.getElementById("46").value = Lmc6.toFixed(2);

                  document.getElementById("47").value = PLL.toFixed(0);
                  document.getElementById("48").value = PLP.toFixed(0);
                  document.getElementById("49").value = IP.toFixed(0);
                  document.getElementById("50").value = LI.toFixed(4);
                  document.getElementById("51").value = clasificarsuelo();


                  //average
                  var average_plastic = (Lmc4 + Lmc5 + Lmc6) / 3;
                  document.getElementById("52").value = average_plastic.toFixed(2);

                }
              </script>
        </div>
      </div>
    </div>
    </thead>
    
    </table>


  
  

  <script>
    function enviarData(event) {
      event.preventDefault()
      $.ajax({
        url: "libs/js/liquid_limit_plot.js",
        type: "POST",
        data: $("#47").serialize(),
        success: function(data) {
          $("#resultado").html(data);
        }
      });
    }
  </script>

<script>
    function enviarData2(event) {
      $.ajax({
        url: "libs/js/plasticity_chart.js",
        type: "POST",
        data: $("#23").serialize(),
        success: function(data) {
          $("#resultado").html(data);
        }
      });
    }
  </script>

<script>
    $(pag).ready(function() {
        var refrescarid = setInterval(function() {
            $("#23").load("Al.php")
            .error(function() { alert("Error"); });
        }, 1000); // Tiempo
        $.ajaxSetup({ cache: false });              
    });
</script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </div>
  <button type="submit" name="Al" class="btn btn-danger">Registrar ensayo</button>
  <button type="submit" name="grafico" class="btn btn-primary" onclick="enviarData(event),enviarData2(event) ">Graficar</button>
  </form>

</div>
</div>
</div>
</div>



<?php include_once('layouts/footer.php'); ?>