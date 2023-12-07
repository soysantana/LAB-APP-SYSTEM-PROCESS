<?php
$page_title = 'Hydrometer';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/Hydrometer.php'); 
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
<span>Hydrometer</span>
</strong>
</div>

<div class="panel-body">
<form method="post" action="hydrometer.php" onsubmit="calcular()">
<div>
<table class="table table-bordered">
<thead>
<tbody id="product_info"> </tbody>
</thead>
</table>


<div class="col-xs-4">
<label>Standard</label>
<select class="form-control" name="Standard">
<option selected>Choose...</option>
<option value="ASTM-D7928">ASTM-D7928</option>
</select> </div>

<div class="col-xs-4">
<label>Specimen Preparation Method</label>
<select class="form-control" type = "text" name="PreparationMethod" id="">
<option selected>Choose...</option>
<option value="Moist">Moist</option>
<option value="Air-Dried">Air Dried</option>  
</select>
</div>
          
<div class="col-xs-4">
<label>Dispersion Device</label>
<select class="form-control" type = "text" name="DispersionDevice" id="">
<option selected>Choose...</option>
<option value="Cup-Mixer">Cup Mixer</option>
<option value="Air-Jet">Air Jet</option>  
</select>
</div>
</div>

<div class="col-xs-4">
<label>Hydrometer Type</label>
<select class="form-control" type = "text" name="HydrometerType" id="">
<option selected>Choose...</option>
<option value="151H">151 H</option>
<option value="152H">152 H</option> 
</select>
</div>
</div>
           
<div class="col-xs-4">
<label>Specific Gravity of Soil</label>
<select class="form-control" type = "text" name="Specific_Gravity_Type" id="">
<option selected>Choose...</option>
<option value="Assumed">Assumed</option>
<option value="Measured">Measured</option>
</select>
</div>         
        

<div class="form-check form-check-inline col-xs-4  panel-body">
<input class="form-check-input" type="checkbox" name="TemperatureType" value="Temp-Density-Correction">
<label class="form-check-label" for="inlineCheckbox1"> Temp-Density Correction</label>
</div>
          
<div class="form-check form-check-inline col-xs-4  panel-body">
<input class="form-check-input" type="checkbox" name="TemperatureType" value="Temperature-Control">
<label class="form-check-label" for="inlineCheckbox2"> Temperature Control</label>
</div>

<div class="form-check form-check-inline col-xs-4  panel-body">
<input class="form-check-input" type="checkbox" name="TemperatureType" value="Companion-Measurements">
<label class="form-check-label" for="inlineCheckbox3">Companion Measurements</label>
</div>

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

<div class="panel-body">
<div class="col-md-12">
</div>
</div>
<div></div>


<div style="display: flex; flex-direction: row; justify-content: space-between;">
<table class="table table-bordered border-primary" style="width:450px;">
<thead>
</thead>
<caption>Hydrometer Analysis</caption>
<tbody>
<tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Dispersing Agent</th>
<td><input type="text" name="Dispersing_Agent" style="border: none;" size="10" style="background: transparent;" id="1" value="(NaPO3)6" oninput="calcular()"></td>
</tr>
<tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Amount used (g)</th>
<td><input type="text" name="Amount_Used_g" style="border: none;" size="10" style="background: transparent;" id="2"  value=""oninput="calcular()"></td>
</tr>
<tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Temperature of test, T (ºC)</th>
<td><input type="text" name="Temperature_of_Test" style="border: none;" size="10" style="background: transparent;" id="3" value ="" oninput="calcular()"></td>
</tr>
<tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Viscosity of water (g*s/cm2)</th>
<td><input type="text" name="Viscosity_of_Water_gs_cm2" style="border: none;" size="10" style="background: transparent;" id="4" value ="0.01"oninput="calcular()"></td>
</tr>
<tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Mass density of water Calibrated (ᵨc )</th>
<td><input type="text" name="Mass_Density_of_Water_Calibrated" style="border: none;" size="10" style="background: transparent;" id="5" value ="" oninput="calcular()"></td>
</tr>
<tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Acceleration (cm/s2)</th>
<td><input type="text" name="Acceleration_cm_s2" style="border: none;" size="10" style="background: transparent;" id="6" value ="980.7" oninput="calcular()"></td>
</tr>
<tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Volume of suspension (Vsp) cm3</th>
<td><input type="text" name="Volume_of_Suspension_Vsp_cm3" style="border: none;" size="10" style="background: transparent;" id="7" value ="1000" oninput="calcular()"></td>
</tr>
<tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Meniscus Correction, Cm</th>
<td><input type="text" name="Meniscus_Correction_Cm" style="border: none;" size="10" style="background: transparent;" id="8" oninput="calcular()"></td>
</tr>
<tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Percent Passing No. 200 sieve</th>
<td><input type="text" name="Percent_Passing_No_200_sieve" style="border: none;" size="10" style="background: transparent;" id="9" oninput="calcular()"></td>
</tr>
</tbody>
</table>
</div>


<div style="display: flex; justify-content: flex-end; margin-top: -3%;">
<table class="table table-bordered border-primary" style="width:350px;">
<thead>
</thead>
<caption>Atterber Limit Results</caption>
<tbody>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Liquid Limit (%)</th>
<td><input type="text" name="Liquid_Limit_Porce" style="border: none;" size="4" style="background: transparent;" id="10" oninput="calcular()" onclick="search()"></td>
</tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Plasticity Index (%)</th>
<td><input type="text" name="Plasticity_Index_Porce" style="border: none;" size="4" style="background: transparent;" id="11" oninput="calcular()"></td>
</tr>
</tbody>
</table>
</div>


<div style="display: flex; justify-content: flex-end; margin-top: -3%;">
<table class="table table-bordered border-primary" style="width:350px;">
<thead>
</thead>
<caption>Specific Gravity</caption>
<tbody>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">SG</th>
<td><input type="text" name="Specific_Gravity"  style="border: none;" size="4" style="background: transparent;" id="12" oninput="calcular()"></td>
</tr>
</tbody>
</table>
</div>


<div style="display: flex; flex-direction: row-reverse; justify-content: space-around; margin-top: -2%;">
<table class="table table-bordered border-primary" style="width:350px;">
<thead>
</thead>
<caption>Moisture Content Test</caption>
<tbody>
<tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Trial No</th>
<td><input disabled type="text" value="A" style="border: none;" size="4" style="background: transparent;" id="13" oninput="calcular()"></td>
</tr>
<tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Name</th>
<td><input type="text" name="Tare_Name" style="border: none;" size="4" style="background: transparent;" id="14" oninput="calcular()"></td>
</tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Oven Temperature (°C)</th>
<td><input type="text" name="Oven_Temperature" value="110 ºC" style="border: none;" size="4" style="background: transparent;" id="15" oninput="calcular()"></td>
</tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Wet Soil (gr)</th>
<td><input type="text" name="Tare_Plus_Wet_Soil_gr" style="border: none;" size="4" style="background: transparent;" id="16" oninput="calcular()"></td>
</tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Dry Soil (gr)</th>
<td><input type="text" name="Tare_Plus_Dry_Soil_gr" style="border: none;" size="4" style="background: transparent;" id="17" oninput="calcular()"></td>
</tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Water, Ww (gr)</th>
<td><input type="text" name="Water_Ww_gr" style="border: none;" size="4" style="background: transparent;" id="18" oninput="calcular()"></td>
</tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare (gr)</th>
<td><input type="text" name="Tare_gr" style="border: none;" size="4" style="background: transparent;" id="19" oninput="calcular()"></td>
</tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Dry Soil, Ws (gr)</th>
<td><input type="text" name="Dry_Soil_Ws_gr" style="border: none;" size="4" style="background: transparent;" id="20" oninput="calcular()"></td>
</tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content (%)</th>
<td><input type="text" name="Moisture_Content_Porce" style="border: none;" size="4" style="background: transparent;" id="21" oninput="calcular()"></td>
</tr>
</tbody>
</table>
</div>




<div style="display: flex; justify-content: flex-end; margin-top: -3%; margin-right: 10%;">
<table class="table table-bordered border-primary" style="width: 530px;">
<thead>
</thead>
<caption></caption>
<th style="text-align: center;" scope="row" colspan="2">Hydrometer Calibration:</th>
<th style="text-align: center;" scope="row" colspan="2">Hydrometer measure of fluid:</th>
<tbody>
<tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Hydrometer ID:</th>
<td><input disabled type="text" name="" value="" style="border: none;" size="4" style="background: transparent;" id="22" oninput="calcular()"></td>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Hydrometer ID:</th>
<td><input disabled type="text" value="" style="border: none;" size="4" style="background: transparent;" id="23" oninput="calcular()"></td>
</tr>
<tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Temperature (ºC)</th>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Actual Reading</th>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Temperature (ºC)</th>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Actual Reading</th>
</tr>
<td><input type="text" name="Hy_Calibration_Temperature_No1" style="border: none;" size="9" style="background: transparent;" id="24" oninput="calcular()"></td>
<td><input type="text" name="Hy_Calibration_Actual_Reading_No1" style="border: none;" size="4" style="background: transparent;" id="25" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Temperature_No1" style="border: none;" size="4" style="background: transparent;" id="26" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Actual_Reading_No1" style="border: none;" size="4" style="background: transparent;" id="27" oninput="calcular()"></td>
</tr>
<td><input type="text" name="Hy_Calibration_Temperature_No2" style="border: none;" size="4" style="background: transparent;" id="28" oninput="calcular()"></td>
<td><input type="text" name="Hy_Calibration_Actual_Reading_No2" style="border: none;" size="4" style="background: transparent;" id="29" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Temperature_No2" style="border: none;" size="4" style="background: transparent;" id="30" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Actual_Reading_No2" style="border: none;" size="4" style="background: transparent;" id="31" oninput="calcular()"></td>
</tr>
<td><input type="text" name="Hy_Calibration_Temperature_No3" style="border: none;" size="4" style="background: transparent;" id="32" oninput="calcular()"></td>
<td><input type="text" name="Hy_Calibration_Actual_Reading_No3" style="border: none;" size="4" style="background: transparent;" id="33" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Temperature_No3" style="border: none;" size="4" style="background: transparent;" id="34" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Actual_Reading_No3" style="border: none;" size="4" style="background: transparent;" id="35" oninput="calcular()"></td>
</tr>
<td><input type="text" name="Hy_Calibration_Temperature_No4" style="border: none;" size="4" style="background: transparent;" id="36" oninput="calcular()"></td>
<td><input type="text" name="Hy_Calibration_Actual_Reading_No4" style="border: none;" size="4" style="background: transparent;" id="37" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Temperature_No4" style="border: none;" size="4" style="background: transparent;" id="38" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Actual_Reading_No4" style="border: none;" size="4" style="background: transparent;" id="39" oninput="calcular()"></td>
</tr>
<td><input type="text" name="Hy_Calibration_Temperature_No5" style="border: none;" size="4" style="background: transparent;" id="40" oninput="calcular()"></td>
<td><input type="text" name="Hy_Calibration_Actual_Reading_No5" style="border: none;" size="4" style="background: transparent;" id="41" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Temperature_No5" style="border: none;" size="4" style="background: transparent;" id="42" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Actual_Reading_No5" style="border: none;" size="4" style="background: transparent;" id="43" oninput="calcular()"></td>
</tr>
<td><input type="text" name="Hy_Calibration_Temperature_No6" style="border: none;" size="4" style="background: transparent;" id="44" oninput="calcular()"></td>
<td><input type="text" name="Hy_Calibration_Actual_Reading_No6" style="border: none;" size="4" style="background: transparent;" id="45" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Temperature_No6" style="border: none;" size="4" style="background: transparent;" id="46" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Actual_Reading_No6" style="border: none;" size="4" style="background: transparent;" id="47" oninput="calcular()"></td>
</tr>
<td><input type="text" name="Hy_Calibration_Temperature_No7" style="border: none;" size="4" style="background: transparent;" id="48" oninput="calcular()"></td>
<td><input type="text" name="Hy_Calibration_Actual_Reading_No7" style="border: none;" size="4" style="background: transparent;" id="49" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Temperature_No7" style="border: none;" size="4" style="background: transparent;" id="50" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Actual_Reading_No7" style="border: none;" size="4" style="background: transparent;" id="51" oninput="calcular()"></td>
</tr>
</tr>
<td><input type="text" name="Hy_Calibration_Temperature_No8" style="border: none;" size="4" style="background: transparent;" id="52" oninput="calcular()"></td>
<td><input type="text" name="Hy_Calibration_Actual_Reading_No8" style="border: none;" size="4" style="background: transparent;" id="53" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Temperature_No8" style="border: none;" size="4" style="background: transparent;" id="54" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Actual_Reading_No8" style="border: none;" size="4" style="background: transparent;" id="55" oninput="calcular()"></td>
</tr>
</tr>
<td><input type="text" name="Hy_Calibration_Temperature_No9" style="border: none;" size="4" style="background: transparent;" id="56" oninput="calcular()"></td>
<td><input type="text" name="Hy_Calibration_Actual_Reading_No9" style="border: none;" size="4" style="background: transparent;" id="57" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Temperature_No9" style="border: none;" size="4" style="background: transparent;" id="58" oninput="calcular()"></td>
<td><input type="text" name="Hy_Measure_Fluid_Actual_Reading_No9" style="border: none;" size="4" style="background: transparent;" id="59" oninput="calcular()"></td>
</tr>
</tbody>
</table>
</div>


<div style="display: flex; justify-content: center; margin-top: -1%; margin-right: 6%;">
<table class="table table-bordered border-primary" style="width: 350px;">
<thead>
</thead>
<tbody>
<tr>
<th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Container</th>
<td><input type="text" name="Container" style="border: none;" size="12" style="background: transparent;"id="60"></td>
</tr>              
<tr>
<th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Wet Soil + Tare (gr):</th>
<td><input type="text" name="Wt_Wet_Soil_Tare_gr" style="border: none;" size="12" style="background: transparent;"id="61"></td>
</tr>              
<tr>
<th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil + Tare (gr):</th>
<td><input type="text" name="Wt_Dry_Soil_Tare_gr" style="border: none;" size="12" style="background: transparent;"id="62"></td>
</tr>              
<tr>
<th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row"> Tare (gr):</th>
<td><input type="text" name="Gs_Tare_gr" style="border: none;" size="12" style="background: transparent;"id="63"></td>
</tr>              
<tr>
<th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil (gr):</th>
<td><input type="text" name="Wt_Dry_Soil_gr" style="border: none;" size="12" style="background: transparent;"id="64"></td>
</tr>              
<tr>
<th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Washed (gr):</th>
<td><input type="text" name="Wt_Washed_gr" style="border: none;" size="12" style="background: transparent;"id="65"></td>
</tr>              
<tr>
<th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Wash Pan (gr):</th>
<td><input type="text" name="Wt_Wash_Pan_gr" style="border: none;" size="12" style="background: transparent;"id="66"></td>
</tr>
</table>
</div>


  <div style="margin-left: 1%; margin-top: -2%;">
  <table class="table table-bordered border-primary" style="width: 450px;">
  <thead>
  <tr>
  <th scope="col">Screen</th>
  <th scope="col">mm</th>
  <th scope="col">Wt Ret</th>
  <th scope="col">% Ret</th>
  <th scope="col">Cum % Ret</th>
  <th scope="col">% Pass</th>
  </tr>
  </thead>
  <tbody>
  <tr>          
    <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">40"</th>
    <td>1016</td>
    <td><input type="text" name="Wt_Ret_40" style="border: none;" size="4" style="background: transparent;" id="67" oninput="calcular()"></td>
    <td><input type="text" name="Ret_40" style="border: none;" size="4" style="background: transparent;" id="68" oninput="calcular()"></td>
    <td><input type="text" name="Cum_Ret_40" style="border: none;" size="4" style="background: transparent;"id="69" oninput="calcular()"></td>
    <td><input type="text" name="Pass_40" style="border: none;" size="4" style="background: transparent;"id="70" oninput="calcular()"></td>
    </tr>
    <tr>
    <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">12"</th>
    <td>304.8</td>
    <td><input type="text" name="Wt_Ret_12" style="border: none;" size="4" style="background: transparent;"id="71" oninput="calcular()"></td>
    <td><input type="text" name="Ret_12" style="border: none;" size="4" style="background: transparent;"id="72" oninput="calcular()"></td>
    <td><input type="text" name="Cum_Ret_12" style="border: none;" size="4" style="background: transparent;"id="73" oninput="calcular()"></td>
    <td><input type="text" name="Pass_12" style="border: none;" size="4" style="background: transparent;"id="74" oninput="calcular()"></td>
    </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">10"</th>
          <td>254</td>
          <td><input type="text" name="Wt_Ret_10" style="border: none;" size="4" style="background: transparent;"id="75" oninput="calcular()"></td>
          <td><input type="text" name="Ret_10" style="border: none;" size="4" style="background: transparent;"id="76" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_10" style="border: none;" size="4" style="background: transparent;"id="77" oninput="calcular()"></td>
          <td><input type="text" name="Pass_10" style="border: none;" size="4" style="background: transparent;"id="78" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">8"</th>
          <td>203.2</td>
          <td><input type="text" name="Wt_Ret_8" style="border: none;" size="4" style="background: transparent;"id="79" oninput="calcular()"></td>
          <td><input type="text" name="Ret_8" style="border: none;" size="4" style="background: transparent;"id="80" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_8" style="border: none;" size="4" style="background: transparent;"id="81" oninput="calcular()"></td>
          <td><input type="text" name="Pass_8" style="border: none;" size="4" style="background: transparent;"id="82" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">6"</th>
          <td>152.4</td>
          <td><input type="text" name="Wt_Ret_6" style="border: none;" size="4" style="background: transparent;"id="83" oninput="calcular()"></td>
          <td><input type="text" name="Ret_6" style="border: none;" size="4" style="background: transparent;"id="84" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_6" style="border: none;" size="4" style="background: transparent;"id="85" oninput="calcular()"></td>
          <td><input type="text" name="Pass_6" style="border: none;" size="4" style="background: transparent;"id="86" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">5"</th>
          <td>127</td>
          <td><input type="text" name="Wt_Ret_5" style="border: none;" size="4" style="background: transparent;"id="87" oninput="calcular()"></td>
          <td><input type="text" name="Ret_5" style="border: none;" size="4" style="background: transparent;"id="88" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_5" style="border: none;" size="4" style="background: transparent;"id="89" oninput="calcular()"></td>
          <td><input type="text" name="Pass_5" style="border: none;" size="4" style="background: transparent;"id="90" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">4"</th>
          <td>101.6</td>
          <td><input type="text" name="Wt_Ret_4" style="border: none;" size="4" style="background: transparent;"id="91" oninput="calcular()"></td>
          <td><input type="text" name="Ret_4" style="border: none;" size="4" style="background: transparent;"id="92" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_4" style="border: none;" size="4" style="background: transparent;"id="93" oninput="calcular()"></td>
          <td><input type="text" name="Pass_4" style="border: none;" size="4" style="background: transparent;"id="94" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">3"</th>
          <td>76.2</td>
          <td><input type="text" name="Wt_Ret_3" style="border: none;" size="4" style="background: transparent;"id="95" oninput="calcular()"></td>
          <td><input type="text" name="Ret_3" style="border: none;" size="4" style="background: transparent;"id="96" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_3" style="border: none;" size="4" style="background: transparent;"id="97" oninput="calcular()"></td>
          <td><input type="text" name="Pass_3" style="border: none;" size="4" style="background: transparent;"id="98" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">2.5"</th>
          <td>63.50</td>
          <td><input type="text" name="Wt_Ret_2p5" style="border: none;" size="4" style="background: transparent;"id="99" oninput="calcular()"></td>
          <td><input type="text" name="Ret_2p5" style="border: none;" size="4" style="background: transparent;"id="100" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_2p5" style="border: none;" size="4" style="background: transparent;"id="101" oninput="calcular()"></td>
          <td><input type="text" name="Pass_2p5" style="border: none;" size="4" style="background: transparent;"id="102" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">2"</th>
          <td>50.80</td>
          <td><input type="text" name="Wt_Ret_2" style="border: none;" size="4" style="background: transparent;"id="103" oninput="calcular()"></td>
          <td><input type="text" name="Ret_2" style="border: none;" size="4" style="background: transparent;"id="104" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_2" style="border: none;" size="4" style="background: transparent;"id="105" oninput="calcular()"></td>
          <td><input type="text" name="Pass_2" style="border: none;" size="4" style="background: transparent;"id="106" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">1.5"</th>
          <td>38.1</td>
          <td><input type="text" name="Wt_Ret_1p5" style="border: none;" size="4" style="background: transparent;"id="107" oninput="calcular()"></td>
          <td><input type="text" name="Ret_1p5" style="border: none;" size="4" style="background: transparent;"id="108" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_1p5" style="border: none;" size="4" style="background: transparent;"id="109" oninput="calcular()"></td>
          <td><input type="text" name="Pass_1p5" style="border: none;" size="4" style="background: transparent;"id="110" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">1"</th>
          <td>25.4</td>
          <td><input type="text" name="Wt_Ret_1" style="border: none;" size="4" style="background: transparent;"id="111" oninput="calcular()"></td>
          <td><input type="text" name="Ret_1" style="border: none;" size="4" style="background: transparent;"id="112" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_1" style="border: none;" size="4" style="background: transparent;"id="113" oninput="calcular()"></td>
          <td><input type="text" name="Pass_1" style="border: none;" size="4" style="background: transparent;"id="114" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">3/4"</th>
          <td>19.5</td>
          <td><input type="text" name="Wt_Ret_3p4" style="border: none;" size="4" style="background: transparent;"id="115" oninput="calcular()"></td>
          <td><input type="text" name="Ret_3p4" style="border: none;" size="4" style="background: transparent;"id="116" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_3p4" style="border: none;" size="4" style="background: transparent;"id="117" oninput="calcular()"></td>
          <td><input type="text" name="Pass_3p4" style="border: none;" size="4" style="background: transparent;"id="118" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">1/2"</th>
          <td>12.7</td>
          <td><input type="text" name="Wt_Ret_1p2" style="border: none;" size="4" style="background: transparent;"id="119" oninput="calcular()"></td>
          <td><input type="text" name="Ret_1p2" style="border: none;" size="4" style="background: transparent;"id="120" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_1p2" style="border: none;" size="4" style="background: transparent;"id="121" oninput="calcular()"></td>
          <td><input type="text" name="Pass_1p2" style="border: none;" size="4" style="background: transparent;"id="122" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">3/8"</th>
          <td>9.5</td>
          <td><input type="text" name="Wt_Ret_3p8" style="border: none;" size="4" style="background: transparent;"id="123" oninput="calcular()"></td>
          <td><input type="text" name="Ret_3p8" style="border: none;" size="4" style="background: transparent;"id="124" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_3p8" style="border: none;" size="4" style="background: transparent;"id="125" oninput="calcular()"></td>
          <td><input type="text" name="Pass_3p8" style="border: none;" size="4" style="background: transparent;"id="126" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 4</th>
          <td>4.75</td>
          <td><input type="text" name="Wt_Ret_No4" style="border: none;" size="4" style="background: transparent;"id="127" oninput="calcular()"></td>
          <td><input type="text" name="Ret_No4" style="border: none;" size="4" style="background: transparent;"id="128" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_No4" style="border: none;" size="4" style="background: transparent;"id="129" oninput="calcular()"></td>
          <td><input type="text" name="Pass_No4" style="border: none;" size="4" style="background: transparent;"id="130" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 10</th>
          <td>2.00</td>
          <td><input type="text" name="Wt_Ret_No10" style="border: none;" size="4" style="background: transparent;"id="131" oninput="calcular()"></td>
          <td><input type="text" name="Ret_No10" style="border: none;" size="4" style="background: transparent;"id="132" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_No10" style="border: none;" size="4" style="background: transparent;"id="133" oninput="calcular()"></td>
          <td><input type="text" name="Pass_No10" style="border: none;" size="4" style="background: transparent;"id="134" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 16</th>
          <td>1.18</td>
          <td><input type="text" name="Wt_Ret_No16" style="border: none;" size="4" style="background: transparent;"id="135" oninput="calcular()"></td>
          <td><input type="text" name="Ret_No16" style="border: none;" size="4" style="background: transparent;"id="136" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_No16" style="border: none;" size="4" style="background: transparent;"id="137" oninput="calcular()"></td>
          <td><input type="text" name="Pass_No16" style="border: none;" size="4" style="background: transparent;"id="138" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 20</th>
          <td>0.85</td>
          <td><input type="text" name="Wt_Ret_No20" style="border: none;" size="4" style="background: transparent;"id="139" oninput="calcular()"></td>
          <td><input type="text" name="Ret_No20" style="border: none;" size="4" style="background: transparent;"id="140" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_No20" style="border: none;" size="4" style="background: transparent;"id="141" oninput="calcular()"></td>
          <td><input type="text" name="Pass_No20" style="border: none;" size="4" style="background: transparent;"id="142" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 50</th>
          <td>0.30</td>
          <td><input type="text" name="Wt_Ret_No50" style="border: none;" size="4" style="background: transparent;"id="143" oninput="calcular()"></td>
          <td><input type="text" name="Ret_No50" style="border: none;" size="4" style="background: transparent;"id="144" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_No50" style="border: none;" size="4" style="background: transparent;"id="145" oninput="calcular()"></td>
          <td><input type="text" name="Pass_No50" style="border: none;" size="4" style="background: transparent;"id="146" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 60</th>
          <td>0.25</td>
          <td><input type="text" name="Wt_Ret_No60" style="border: none;" size="4" style="background: transparent;"id="147" oninput="calcular()"></td>
          <td><input type="text" name="Ret_No60" style="border: none;" size="4" style="background: transparent;"id="148" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_No60" style="border: none;" size="4" style="background: transparent;"id="149" oninput="calcular()"></td>
          <td><input type="text" name="Pass_No60" style="border: none;" size="4" style="background: transparent;"id="150" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">No. 100</th>
          <td>0.15</td>
          <td><input type="text" name="Wt_Ret_No100" style="border: none;" size="4" style="background: transparent;"id="151" oninput="calcular()"></td>
          <td><input type="text" name="Ret_No100" style="border: none;" size="4" style="background: transparent;"id="152" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_No100" style="border: none;" size="4" style="background: transparent;"id="153" oninput="calcular()"></td>
          <td><input type="text" name="Pass_No100" style="border: none;" size="4" style="background: transparent;"id="154" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">No. 140</th>
          <td>0.106</td>
          <td><input type="text" name="Wt_Ret_No140" style="border: none;" size="4" style="background: transparent;"id="155" oninput="calcular()"></td>
          <td><input type="text" name="Ret_No140" style="border: none;" size="4" style="background: transparent;"id="156" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_No140" style="border: none;" size="4" style="background: transparent;"id="157" oninput="calcular()"></td>
          <td><input type="text" name="Pass_No140" style="border: none;" size="4" style="background: transparent;"id="158" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">No. 200</th>
          <td>0.075</td>
          <td><input type="text" name="Wt_Ret_No200" style="border: none;" size="4" style="background: transparent;"id="159" oninput="calcular()"></td>
          <td><input type="text" name="Ret_No200" style="border: none;" size="4" style="background: transparent;"id="160" oninput="calcular()"></td>
          <td><input type="text" name="Cum_Ret_No200" style="border: none;" size="4" style="background: transparent;"id="161" oninput="calcular()"></td>
          <td><input type="text" name="Pass_No200" style="border: none;" size="4" style="background: transparent;"id="162" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row" colspan="2">Pan</th>
          <td><input type="text" name="Pan_Wt_Ret" style="border: none;" size="4" style="background: transparent;"id="163" oninput="calcular()"></td>
          <td><input type="text" name="Pan_Ret" style="border: none;" size="4" style="background: transparent;"id="164" oninput="calcular()"></td>
          <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;"id="165" oninput="calcular()"></td>
          <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;"id="166" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row" colspan="2"> Total Pan</th>
          <td><input type="text" name="Total_Wt_Ret" style="border: none;" size="4" style="background: transparent;"id="167" oninput="calcular()"></td>
          <td><input type="text" name="Total_Ret" style="border: none;" size="4" style="background: transparent;"id="168" oninput="calcular()"></td>
          <td><input type="text" name="Total_Cum_Ret" style="border: none;" size="4" style="background: transparent;"id="169" oninput="calcular()"></td>
          <td><input type="text" name="Total_Pass" style="border: none;" size="4" style="background: transparent;"id="170" oninput="calcular()"></td>
        </tr>
      </tbody>
    </table>
            </div>
            




            <div style="display: flex; justify-content: flex-end; margin-top: -3%;">
              <table class="table table-bordered border-primary" style="width:450px;">
              <thead>
              </thead>
              <caption>Summary Grain Size Distribution Parameter</caption>
              <tbody>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Coarser than Gravel%</th>
                  <td><input type="text" name="Coarser_than_Gravel" style="border: none;" size="4" style="background: transparent;" id="171" oninput="calcular()"></td>
                </tr>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Gravel%</th>
                  <td><input type="text" name="Gravel" style="border: none;" size="4" style="background: transparent;" id="172" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Sand%</th>
                <td><input type="text" name="Sand" style="border: none;" size="4" style="background: transparent;" id="173" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Fines%</th>
                <td><input type="text" name="Fines" style="border: none;" size="4" style="background: transparent;" id="174" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">D10 (mm) =</th>
                <td><input type="text" name="D10" style="border: none;" size="4" style="background: transparent;" id="175" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">D15 (mm) =</th>
                <td><input type="text" name="D15" style="border: none;" size="4" style="background: transparent;" id="176" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">D30 (mm) =</th>
                <td><input type="text" name="D30" style="border: none;" size="4" style="background: transparent;" id="177" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">D60 (mm) =</th>
                <td><input type="text" name="D60" style="border: none;" size="4" style="background: transparent;" id="178" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">D85 (mm) =</th>
                <td><input type="text" name="D85" style="border: none;" size="4" style="background: transparent;" id="179" oninput="calcular()"></td>
              </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Cc:</th>
                <td><input type="text" name="Cc" style="border: none;" size="4" style="background: transparent;" id="180" oninput="calcular()"></td>
              </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Cu:</th>
                <td><input type="text" name="Cu" style="border: none;" size="4" style="background: transparent;" id="181" oninput="calcular()"></td>
              </tr>
              </tbody>
            </table>
            </div>


              <div style="display: flex; flex-direction: row-reverse; justify-content: space-around; margin-top: -2%">
                <table class="table table-bordered border-primary"  style="width: 300px; font-size: 12px;">
                <thead>
                </thead>
                <caption></caption>
                <tbody>
                  <tr>
                    <th style="font-size: 13px; text-align: center;" style="width: 350px; height: 25px;" scope="row">Reading #</th>
                    <th style="font-size: 13px; text-align: center;" style="width: 350px; height: 25px;" scope="row">Date</th>
                    <th style="font-size: 13px; text-align: center;" style="width: 350px; height: 25px;" scope="row">Hour</th>
                    <th style="font-size: 13px; text-align: center;" style="width: 350px; height: 25px;" scope="row">Reading Time, T(min)</th>
                    <th style="font-size: 13px; text-align: center;" style="width: 350px; height: 25px;" scope="row">Temp °C</th>
                    <th style="font-size: 13px; text-align: center;" style="width: 350px; height: 25px;" scope="row">Hydrometer Readings ( Rm)</th>
                    <th style="font-size: 13px; text-align: center;" style="width: 350px; height: 25px;" scope="row">A or B depending of the Hydrometer type</th>
                    <th style="font-size: 13px; text-align: center;" style="width: 350px; height: 25px;" scope="row">Offset at Reading (rdm)</th>
                    <th style="font-size: 13px; text-align: center;" style="width: 350px; height: 25px;" scope="row">Mass Percent Finer (Nm) (%)</th>
                    <th style="font-size: 13px; text-align: center;" style="width: 350px; height: 25px;" scope="row">Effective Length(Hm)</th>
                    <th style="font-size: 13px; text-align: center;" style="width: 350px; height: 25px;" scope="row">D, mm</th>
                    <th style="font-size: 13px; text-align: center;" style="width: 350px; height: 25px;" scope="row">passing percentage respect to the total sample</th>
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="182" value="1" oninput="calcular()"></td>
                    <td><input type="date" name="Date_No1" style="border: none;" size="4" style="background: transparent;" id="183" oninput="calcular()"></td>
                    <td><input type="time" name="Hour_No1" style="border: none;" size="4" style="background: transparent;" id="184" oninput="calcular()"></td>
                    <td><input type="text" name="Reading_Time_min_No1" style="border: none;" size="4" style="background: transparent;" id="185" value="1" oninput="calcular()"></td>
                    <td><input type="text" name="Temp_No1" style="border: none;" size="4" style="background: transparent;" id="186" oninput="calcular()"></td>
                    <td><input type="text" name="Hydrometer_Readings_Rm_No1" style="border: none;" size="4" style="background: transparent;" id="187" oninput="calcular()"></td>
                    <td><input type="text" name="A_or_B_depending_of_the_Hy_type_No1" style="border: none;" size="4" style="background: transparent;" id="188" oninput="calcular()"></td>
                    <td><input type="text" name="Offset_at_Reading_rdm_No1" style="border: none;" size="4" style="background: transparent;" id="189" oninput="calcular()"></td>
                    <td><input type="text" name="Mass_Percent_Finer_Nm_Porce_No1" style="border: none;" size="4" style="background: transparent;" id="190" oninput="calcular()"></td>
                    <td><input type="text" name="Effective_Length_Hm_No1" style="border: none;" size="4" style="background: transparent;" id="191" oninput="calcular()"></td>
                    <td><input type="text" name="D_mm_No1" style="border: none;" size="4" style="background: transparent;" id="192" oninput="calcular()"></td>
                    <td><input type="text" name="Passing_Percentage_Respect_to_the_Total_Sample_No1" style="border: none;" size="4" style="background: transparent;" id="193" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="194" value="2" oninput="calcular()"></td>
                    <td><input type="date" name="Date_No2" style="border: none;" size="4" style="background: transparent;" id="195" oninput="calcular()"></td>
                    <td><input type="time" name="Hour_No2" style="border: none;" size="4" style="background: transparent;" id="196" oninput="calcular()"></td>
                    <td><input type="text" name="Reading_Time_min_No2" style="border: none;" size="4" style="background: transparent;" id="197" value="2" oninput="calcular()"></td>
                    <td><input type="text" name="Temp_No2" style="border: none;" size="4" style="background: transparent;" id="198" oninput="calcular()"></td>
                    <td><input type="text" name="Hydrometer_Readings_Rm_No2" style="border: none;" size="4" style="background: transparent;" id="199" oninput="calcular()"></td>
                    <td><input type="text" name="A_or_B_depending_of_the_Hy_type_No2" style="border: none;" size="4" style="background: transparent;" id="200" oninput="calcular()"></td>
                    <td><input type="text" name="Offset_at_Reading_rdm_No2" style="border: none;" size="4" style="background: transparent;" id="201" oninput="calcular()"></td>
                    <td><input type="text" name="Mass_Percent_Finer_Nm_Porce_No2" style="border: none;" size="4" style="background: transparent;" id="202" oninput="calcular()"></td>
                    <td><input type="text" name="Effective_Length_Hm_No2" style="border: none;" size="4" style="background: transparent;" id="203" oninput="calcular()"></td>
                    <td><input type="text" name="D_mm_No2" style="border: none;" size="4" style="background: transparent;" id="204" oninput="calcular()"></td>
                    <td><input type="text" name="Passing_Percentage_Respect_to_the_Total_Sample_No2" style="border: none;" size="4" style="background: transparent;" id="205" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="206" value="3" oninput="calcular()"></td>
                    <td><input type="date" name="Date_No3" style="border: none;" size="4" style="background: transparent;" id="207" oninput="calcular()"></td>
                    <td><input type="time" name="Hour_No3" style="border: none;" size="4" style="background: transparent;" id="208" oninput="calcular()"></td>
                    <td><input type="text" name="Reading_Time_min_No3" style="border: none;" size="4" style="background: transparent;" id="209" value="4" oninput="calcular()"></td>
                    <td><input type="text" name="Temp_No3" style="border: none;" size="4" style="background: transparent;" id="210" oninput="calcular()"></td>
                    <td><input type="text" name="Hydrometer_Readings_Rm_No3" style="border: none;" size="4" style="background: transparent;" id="211" oninput="calcular()"></td>
                    <td><input type="text" name="A_or_B_depending_of_the_Hy_type_No3" style="border: none;" size="4" style="background: transparent;" id="212" oninput="calcular()"></td>
                    <td><input type="text" name="Offset_at_Reading_rdm_No3" style="border: none;" size="4" style="background: transparent;" id="213" oninput="calcular()"></td>
                    <td><input type="text" name="Mass_Percent_Finer_Nm_Porce_No3" style="border: none;" size="4" style="background: transparent;" id="214" oninput="calcular()"></td>
                    <td><input type="text" name="Effective_Length_Hm_No3" style="border: none;" size="4" style="background: transparent;" id="215" oninput="calcular()"></td>
                    <td><input type="text" name="D_mm_No3" style="border: none;" size="4" style="background: transparent;" id="216" oninput="calcular()"></td>
                    <td><input type="text" name="Passing_Percentage_Respect_to_the_Total_Sample_No3" style="border: none;" size="4" style="background: transparent;" id="217" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="218" value="4" oninput="calcular()"></td>
                    <td><input type="date" name="Date_No4" style="border: none;" size="4" style="background: transparent;" id="219" oninput="calcular()"></td>
                    <td><input type="time" name="Hour_No4" style="border: none;" size="4" style="background: transparent;" id="220" oninput="calcular()"></td>
                    <td><input type="text" name="Reading_Time_min_No4" style="border: none;" size="4" style="background: transparent;" id="221" value="15" oninput="calcular()"></td>
                    <td><input type="text" name="Temp_No4" style="border: none;" size="4" style="background: transparent;" id="222" oninput="calcular()"></td>
                    <td><input type="text" name="Hydrometer_Readings_Rm_No4" style="border: none;" size="4" style="background: transparent;" id="223" oninput="calcular()"></td>
                    <td><input type="text" name="A_or_B_depending_of_the_Hy_type_No4" style="border: none;" size="4" style="background: transparent;" id="224" oninput="calcular()"></td>
                    <td><input type="text" name="Offset_at_Reading_rdm_No4" style="border: none;" size="4" style="background: transparent;" id="225" oninput="calcular()"></td>
                    <td><input type="text" name="Mass_Percent_Finer_Nm_Porce_No4" style="border: none;" size="4" style="background: transparent;" id="226" oninput="calcular()"></td>
                    <td><input type="text" name="Effective_Length_Hm_No4" style="border: none;" size="4" style="background: transparent;" id="227" oninput="calcular()"></td>
                    <td><input type="text" name="D_mm_No4" style="border: none;" size="4" style="background: transparent;" id="228" oninput="calcular()"></td>
                    <td><input type="text" name="Passing_Percentage_Respect_to_the_Total_Sample_No4" style="border: none;" size="4" style="background: transparent;" id="229" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="230" value="5" oninput="calcular()"></td>
                    <td><input type="date" name="Date_No5" style="border: none;" size="4" style="background: transparent;" id="231" oninput="calcular()"></td>
                    <td><input type="time" name="Hour_No5" style="border: none;" size="4" style="background: transparent;" id="232" oninput="calcular()"></td>
                    <td><input type="text" name="Reading_Time_min_No5" style="border: none;" size="4" style="background: transparent;" id="233" value="30" oninput="calcular()"></td>
                    <td><input type="text" name="Temp_No5" style="border: none;" size="4" style="background: transparent;" id="234" oninput="calcular()"></td>
                    <td><input type="text" name="Hydrometer_Readings_Rm_No5" style="border: none;" size="4" style="background: transparent;" id="235" oninput="calcular()"></td>
                    <td><input type="text" name="A_or_B_depending_of_the_Hy_type_No5" style="border: none;" size="4" style="background: transparent;" id="236" oninput="calcular()"></td>
                    <td><input type="text" name="Offset_at_Reading_rdm_No5" style="border: none;" size="4" style="background: transparent;" id="237" oninput="calcular()"></td>
                    <td><input type="text" name="Mass_Percent_Finer_Nm_Porce_No5" style="border: none;" size="4" style="background: transparent;" id="238" oninput="calcular()"></td>
                    <td><input type="text" name="Effective_Length_Hm_No5" style="border: none;" size="4" style="background: transparent;" id="239" oninput="calcular()"></td>
                    <td><input type="text" name="D_mm_No5" style="border: none;" size="4" style="background: transparent;" id="240" oninput="calcular()"></td>
                    <td><input type="text" name="Passing_Percentage_Respect_to_the_Total_Sample_No5" style="border: none;" size="4" style="background: transparent;" id="241" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="242" value="6" oninput="calcular()"></td>
                    <td><input type="date" name="Date_No6" style="border: none;" size="4" style="background: transparent;" id="243" oninput="calcular()"></td>
                    <td><input type="time" name="Hour_No6" style="border: none;" size="4" style="background: transparent;" id="244" oninput="calcular()"></td>
                    <td><input type="text" name="Reading_Time_min_No6" style="border: none;" size="4" style="background: transparent;" id="245"  value="60" oninput="calcular()"></td>
                    <td><input type="text" name="Temp_No6" style="border: none;" size="4" style="background: transparent;" id="246" oninput="calcular()"></td>
                    <td><input type="text" name="Hydrometer_Readings_Rm_No6" style="border: none;" size="4" style="background: transparent;" id="247" oninput="calcular()"></td>
                    <td><input type="text" name="A_or_B_depending_of_the_Hy_type_No6" style="border: none;" size="4" style="background: transparent;" id="248" oninput="calcular()"></td>
                    <td><input type="text" name="Offset_at_Reading_rdm_No6" style="border: none;" size="4" style="background: transparent;" id="249" oninput="calcular()"></td>
                    <td><input type="text" name="Mass_Percent_Finer_Nm_Porce_No6" style="border: none;" size="4" style="background: transparent;" id="250" oninput="calcular()"></td>
                    <td><input type="text" name="Effective_Length_Hm_No6" style="border: none;" size="4" style="background: transparent;" id="251" oninput="calcular()"></td>
                    <td><input type="text" name="D_mm_No6" style="border: none;" size="4" style="background: transparent;" id="252" oninput="calcular()"></td>
                    <td><input type="text" name="Passing_Percentage_Respect_to_the_Total_Sample_No6" style="border: none;" size="4" style="background: transparent;" id="253" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="254" value="7" oninput="calcular()"></td>
                    <td><input type="date" name="Date_No7" style="border: none;" size="4" style="background: transparent;" id="255" oninput="calcular()"></td>
                    <td><input type="time" name="Hour_No7" style="border: none;" size="4" style="background: transparent;" id="256" oninput="calcular()"></td>
                    <td><input type="text" name="Reading_Time_min_No7" style="border: none;" size="4" style="background: transparent;" id="257"  value="240" oninput="calcular()"></td>
                    <td><input type="text" name="Temp_No7" style="border: none;" size="4" style="background: transparent;" id="258" oninput="calcular()"></td>
                    <td><input type="text" name="Hydrometer_Readings_Rm_No7" style="border: none;" size="4" style="background: transparent;" id="259" oninput="calcular()"></td>
                    <td><input type="text" name="A_or_B_depending_of_the_Hy_type_No7" style="border: none;" size="4" style="background: transparent;" id="260" oninput="calcular()"></td>
                    <td><input type="text" name="Offset_at_Reading_rdm_No7" style="border: none;" size="4" style="background: transparent;" id="261" oninput="calcular()"></td>
                    <td><input type="text" name="Mass_Percent_Finer_Nm_Porce_No7" style="border: none;" size="4" style="background: transparent;" id="262" oninput="calcular()"></td>
                    <td><input type="text" name="Effective_Length_Hm_No7" style="border: none;" size="4" style="background: transparent;" id="263" oninput="calcular()"></td>
                    <td><input type="text" name="D_mm_No7" style="border: none;" size="4" style="background: transparent;" id="264" oninput="calcular()"></td>
                    <td><input type="text" name="Passing_Percentage_Respect_to_the_Total_Sample_No7" style="border: none;" size="4" style="background: transparent;" id="265" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="266" value="8" oninput="calcular()"></td>
                    <td><input type="date" name="Date_No8" style="border: none;" size="4" style="background: transparent;" id="267" oninput="calcular()"></td>
                    <td><input type="time" name="Hour_No8" style="border: none;" size="4" style="background: transparent;" id="268" oninput="calcular()"></td>
                    <td><input type="text" name="Reading_Time_min_No8" style="border: none;" size="4" style="background: transparent;" id="269" value="340" oninput="calcular()"></td>
                    <td><input type="text" name="Temp_No8" style="border: none;" size="4" style="background: transparent;" id="270" oninput="calcular()"></td>
                    <td><input type="text" name="Hydrometer_Readings_Rm_No8" style="border: none;" size="4" style="background: transparent;" id="271" oninput="calcular()"></td>
                    <td><input type="text" name="A_or_B_depending_of_the_Hy_type_No8" style="border: none;" size="4" style="background: transparent;" id="272" oninput="calcular()"></td>
                    <td><input type="text" name="Offset_at_Reading_rdm_No8" style="border: none;" size="4" style="background: transparent;" id="273" oninput="calcular()"></td>
                    <td><input type="text" name="Mass_Percent_Finer_Nm_Porce_No8" style="border: none;" size="4" style="background: transparent;" id="274" oninput="calcular()"></td>
                    <td><input type="text" name="Effective_Length_Hm_No8" style="border: none;" size="4" style="background: transparent;" id="275" oninput="calcular()"></td>
                    <td><input type="text" name="D_mm_No8" style="border: none;" size="4" style="background: transparent;" id="276" oninput="calcular()"></td>
                    <td><input type="text" name="Passing_Percentage_Respect_to_the_Total_Sample_No8" style="border: none;" size="4" style="background: transparent;" id="277" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="278" value="9" oninput="calcular()"></td>
                    <td><input type="date" name="Date_No9" style="border: none;" size="4" style="background: transparent;" id="279" oninput="calcular()"></td>
                    <td><input type="time" name="Hour_No9" style="border: none;" size="4" style="background: transparent;" id="280" oninput="calcular()"></td>
                    <td><input type="text" name="Reading_Time_min_No9" style="border: none;" size="4" style="background: transparent;" id="281" value="1440" oninput="calcular()"></td>
                    <td><input type="text" name="Temp_No9" style="border: none;" size="4" style="background: transparent;" id="282" oninput="calcular()"></td>
                    <td><input type="text" name="Hydrometer_Readings_Rm_No9" style="border: none;" size="4" style="background: transparent;" id="283" oninput="calcular()"></td>
                    <td><input type="text" name="A_or_B_depending_of_the_Hy_type_No9" style="border: none;" size="4" style="background: transparent;" id="284" oninput="calcular()"></td>
                    <td><input type="text" name="Offset_at_Reading_rdm_No9" style="border: none;" size="4" style="background: transparent;" id="285" oninput="calcular()"></td>
                    <td><input type="text" name="Mass_Percent_Finer_Nm_Porce_No9" style="border: none;" size="4" style="background: transparent;" id="286" oninput="calcular()"></td>
                    <td><input type="text" name="Effective_Length_Hm_No9" style="border: none;" size="4" style="background: transparent;" id="287" oninput="calcular()"></td>
                    <td><input type="text" name="D_mm_No9" style="border: none;" size="4" style="background: transparent;" id="288" oninput="calcular()"></td>
                    <td><input type="text" name="Passing_Percentage_Respect_to_the_Total_Sample_No9" style="border: none;" size="4" style="background: transparent;" id="289" oninput="calcular()"></td>
                  </tr>
                </tbody>
              </table>
              </div>

              <div style="display: flex; justify-content: space-around; margin-right: 3%; margin-top: -1%">
              <table class="table table-bordered border-primary" style="width:400px; height: 150px;">
                <thead>
                </thead>
                <caption style="text-align: center;">Classification of Soils as per USCS,<br>ASTM designation D 2487-06</caption>
                <tbody>
                  <td><input type="text" name="TempeClassification_of_Soils_as_per_USCSratureType" style="border: none; text-align: center;" size="40" style="background: transparent;" id="290" oninput="calcular()"></td>
                </tr>
                <td><input type="text" name="ASTM_designation_D_2487_06" style="border: none; text-align: center;" size="40" style="background: transparent;" id="291" oninput="calcular()"></td>
              </tr>
                </tbody>
              </table>
            </div>

            <div style="display: flex; justify-content: flex-end;">
              <div id="hyd" style="height: 600px; width: 1070px;"></div>
            </div>
              

                <button type="submit" name="Hydrometer" class="btn btn-danger">Registrar ensayo</button>
                <button type="submit" name="hyd" class="btn btn-primary" onclick="enviarData(event)">Graficar</button>
                </form>
                </div>
                </div>
                </div>
                </div>


<script>
    function search() {
        var sampleId = $('#sample_id').val();
        var sampleNumber = $('#sample_number').val();

        $.ajax({
            type: 'POST',
            url: 'Ajax-Mc.php',
            data: { sample_id: sampleId, sample_number: sampleNumber },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('#12').val(response.sg_value);
                    $('#10').val(response.LLporce);
                    $('#11').val(response.PLindex);
                    $('#67').val(response.Wt40);
                    $('#71').val(response.Wt12);
                    $('#75').val(response.Wt10);
                    $('#79').val(response.Wt8);
                    $('#83').val(response.Wt6);
                    $('#87').val(response.Wt5);
                    $('#91').val(response.Wt4);
                    $('#95').val(response.Wt3);
                    $('#99').val(response.Wt2p5);
                    $('#103').val(response.Wt2);
                    $('#107').val(response.Wt1p5);
                    $('#111').val(response.Wt1);
                    $('#115').val(response.Wt3p4);
                    $('#119').val(response.Wt1p2);
                    $('#123').val(response.Wt3p8);
                    $('#127').val(response.Wtn4);
                    $('#131').val(response.Wtn10);
                    $('#135').val(response.Wtn16);
                    $('#139').val(response.Wtn20);
                    $('#143').val(response.Wtn50);
                    $('#147').val(response.Wtn60);
                    $('#151').val(response.Wtn100);
                    $('#155').val(response.Wtn140);
                    $('#159').val(response.Wtn200);
                    $('#163').val(response.Wtpan);
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('Error en la solicitud AJAX.');
            }
        });
    }
</script>




      <script>
        function calcular() {
        // obtenemos los valores
         var temperatura_ensayo = parseFloat(document.getElementById("3").value);
         var Mdisp = parseFloat(document.getElementById("2").value);
         var Viscwater = parseFloat(document.getElementById("4").value);
         var g= parseFloat(document.getElementById("6").value);
         var Vsp = parseFloat(document.getElementById("7").value);
         var Cm = parseFloat(document.getElementById("8").value);
         var Sg = parseFloat(document.getElementById("12").value);
         var PNo200 = parseFloat(document.getElementById("9").value);
         var TPWS = parseFloat(document.getElementById("16").value);
         var TPDS = parseFloat(document.getElementById("17").value);
         var tare = parseFloat(document.getElementById("19").value);
         var tempCal1 = parseFloat(document.getElementById("24").value);
         var tempCal6 = parseFloat(document.getElementById("44").value);
         var tempCal7 = parseFloat(document.getElementById("48").value);
         var tempCal8 = parseFloat(document.getElementById("52").value);
         var tempCal9 = parseFloat(document.getElementById("56").value);

         var AR1 = parseFloat(document.getElementById("25").value);
         var AR2 = parseFloat(document.getElementById("29").value);
         var AR3 = parseFloat(document.getElementById("33").value);
         var AR4 = parseFloat(document.getElementById("37").value);
         var AR5 = parseFloat(document.getElementById("41").value);
         var AR6 = parseFloat(document.getElementById("45").value);
         var AR7 = parseFloat(document.getElementById("49").value);
         var AR8 = parseFloat(document.getElementById("53").value);
         var AR9 = parseFloat(document.getElementById("57").value);

         var tempf1 = parseFloat(document.getElementById("26").value);
         var tempf2 = parseFloat(document.getElementById("30").value);
         var tempf3 = parseFloat(document.getElementById("34").value);
         var tempf4 = parseFloat(document.getElementById("38").value);
         var tempf5 = parseFloat(document.getElementById("42").value);
         var tempf6 = parseFloat(document.getElementById("46").value);
         var tempf7 = parseFloat(document.getElementById("50").value);
         var tempf8 = parseFloat(document.getElementById("54").value);
         var tempf9 = parseFloat(document.getElementById("58").value);

         var arf1 = parseFloat(document.getElementById("27").value);
         var arf2 = parseFloat(document.getElementById("31").value);
         var arf3 = parseFloat(document.getElementById("35").value);
         var arf4 = parseFloat(document.getElementById("39").value);
         var arf5 = parseFloat(document.getElementById("43").value);
         var arf6 = parseFloat(document.getElementById("47").value);
         var arf7 = parseFloat(document.getElementById("51").value);
         var arf8 = parseFloat(document.getElementById("55").value);
         var arf9 = parseFloat(document.getElementById("59").value);

         var tm1 = parseFloat(document.getElementById("185").value);
         var tm2 = parseFloat(document.getElementById("197").value);
         var tm3 = parseFloat(document.getElementById("209").value);
         var tm4 = parseFloat(document.getElementById("221").value);
         var tm5 = parseFloat(document.getElementById("233").value);
         var tm6 = parseFloat(document.getElementById("245").value);
         var tm7 = parseFloat(document.getElementById("257").value);
         var tm8 = parseFloat(document.getElementById("269").value);
         var tm9 = parseFloat(document.getElementById("281").value);


         var Temp1 = parseFloat(document.getElementById("186").value);
         var Temp2 = parseFloat(document.getElementById("198").value);
         var Temp3 = parseFloat(document.getElementById("210").value);
         var Temp4 = parseFloat(document.getElementById("222").value);
         var Temp5 = parseFloat(document.getElementById("234").value);
         var Temp6 = parseFloat(document.getElementById("246").value);
         var Temp7 = parseFloat(document.getElementById("258").value);
         var Temp8 = parseFloat(document.getElementById("270").value);
         var Temp9 = parseFloat(document.getElementById("282").value);

         var Rm1 = parseFloat(document.getElementById("187").value);
         var Rm2 = parseFloat(document.getElementById("199").value);
         var Rm3 = parseFloat(document.getElementById("211").value);
         var Rm4 = parseFloat(document.getElementById("223").value);
         var Rm5 = parseFloat(document.getElementById("235").value);
         var Rm6 = parseFloat(document.getElementById("247").value);
         var Rm7 = parseFloat(document.getElementById("259").value);
         var Rm8 = parseFloat(document.getElementById("271").value);
         var Rm9 = parseFloat(document.getElementById("283").value);

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


        // Calculo de Md

        var TPWS = parseFloat(document.getElementById("16").value);
        var TPDS = parseFloat(document.getElementById("17").value);
        var tare = parseFloat(document.getElementById("19").value);

        var Water = TPWS - TPDS;

        var Mdd = TPDS - tare;

        var Mc = (Water / Mdd) * 100;

       var tempCal2 = tempCal1 + 0;
       var tempCal3 = tempCal2;
       var tempCal4 = tempCal3;
       var tempCal5 = tempCal4;

       //Determinacion de A o B
       var b1 = AR1 + (0.01248 * tempCal1) + (0.00795 * (Math.pow(tempCal1, 2)));
       var b2 = AR2 + (0.01248 * tempCal2) + (0.00795 * (Math.pow(tempCal2, 2)));
       var b3= AR3 + (0.01248 * tempCal3) + (0.00795 * (Math.pow(tempCal3, 2)));
       var b4 = AR4 + (0.01248 * tempCal4) + (0.00795 * (Math.pow(tempCal4, 2)));
       var b5 = AR5 + (0.01248 * tempCal5) + (0.00795 * (Math.pow(tempCal5, 2)));

       var B1 = (b1 + b2 +b3 + b4 + b5) / 5;
       var B2 = B1;
       var B3 = B2;
       var B4 = B3;
       var B5 = B4;
       var B6 = B5;
       var B7 = B6;
       var B8 = B7;
       var B9 = B8;

      
       // Determinacion del Offset at Reading.
       var Rdm1 = B1 - (0.01248 * Temp1) - (0.00795 * (Math.pow(Temp1, 2)));
       var Rdm2 = B2 - (0.01248 * Temp2) - (0.00795 * (Math.pow(Temp2, 2)));
       var Rdm3 = B3 - (0.01248 * Temp3) - (0.00795 * (Math.pow(Temp3, 2)));
       var Rdm4 = B4 - (0.01248 * Temp4) - (0.00795 * (Math.pow(Temp4, 2)));
       var Rdm5 = B5 - (0.01248 * Temp5) - (0.00795 * (Math.pow(Temp5, 2)));
       var Rdm6 = B6 - (0.01248 * Temp6) - (0.00795 * (Math.pow(Temp6, 2)));
       var Rdm7 = B7 - (0.01248 * Temp7) - (0.00795 * (Math.pow(Temp7, 2)));
       var Rdm8 = B8 - (0.01248 * Temp8) - (0.00795 * (Math.pow(Temp8, 2)));
       var Rdm9 = B9 - (0.01248 * Temp9) - (0.00795 * (Math.pow(Temp9, 2)));

      // Determinacion de la masa usada en el ensayo.
      var Md = Mdd - Mdisp;

      // Determinacion del porcentaje de masa fina.

      Nm1 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md) * (Rm1- Rdm1) * (100/1000);
      Nm2 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md) * (Rm2- Rdm2) * (100/1000);
      Nm3 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md) * (Rm3- Rdm3) * (100/1000);
      Nm4 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md) * (Rm4- Rdm4) * (100/1000);
      Nm5 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md) * (Rm5- Rdm5) * (100/1000);
      Nm6= 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md) * (Rm6- Rdm6) * (100/1000);
      Nm7 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md) * (Rm7- Rdm7) * (100/1000);
      Nm8 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md) * (Rm8- Rdm8) * (100/1000);
      Nm9 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md) * (Rm9- Rdm9) * (100/1000);
      
      //Determinacion de la profundidad efectiva.

      var Hr1 = 17.0;
      var Hr2 = 7.1;
      var r1 = 0.0;
      var r2 = 60.0;
      var Vhb = 60;
      var dAc = 54.96;

      var Hm1 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm1 + Cm))- (Vhb / dAc);
      var Hm2 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm2 + Cm))- (Vhb / dAc);
      var Hm3 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm3 + Cm))- (Vhb / dAc);
      var Hm4 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm4 + Cm))- (Vhb / dAc);
      var Hm5 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm5 + Cm))- (Vhb / dAc);
      var Hm6 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm6 + Cm))- (Vhb / dAc);
      var Hm7 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm7 + Cm))- (Vhb / dAc);
      var Hm8 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm8 + Cm))- (Vhb / dAc);
      var Hm9 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm9 + Cm))- (Vhb / dAc);

      // Determinamos el diametro maximo en suspension.

      var A = 18 * Viscwater;
      var B = densidad_ensayo * g * (Sg - 1);
      var Dm1 = Math.sqrt((A / B) * (Hm1 / (tm1 * 60))) * 10;
      var Dm2= Math.sqrt((A / B) * (Hm2 / (tm2 * 60))) * 10;
      var Dm3 = Math.sqrt((A / B) * (Hm3 / (tm3 * 60))) * 10;
      var Dm4 = Math.sqrt((A / B) * (Hm4 / (tm4 * 60))) * 10;
      var Dm5 = Math.sqrt((A / B) * (Hm5 / (tm5 * 60))) * 10;
      var Dm6= Math.sqrt((A / B) * (Hm6 / (tm6 * 60))) * 10;
      var Dm7 = Math.sqrt((A / B) * (Hm7 / (tm7 * 60))) * 10;
      var Dm8 = Math.sqrt((A / B) * (Hm8 / (tm8 * 60))) * 10;
      var Dm9 = Math.sqrt((A / B) * (Hm9 / (tm9 * 60))) * 10;

      // Determinacion de granulometria.
      var valores = [];
    for (var i = 67; i <=170; i++) {
      valores.push(parseFloat(document.getElementById(i.toString()).value || 0));
    }




      //pasamos resultados a los inputs.
      document.getElementById("5").value = densidad_ensayo.toFixed(5);
      document.getElementById("18").value = Water.toFixed(2);
      document.getElementById("20").value = Mdd.toFixed(2);
      document.getElementById("21").value = Mc.toFixed(2);
      document.getElementById("28").value = tempCal2.toFixed(2);
      document.getElementById("32").value = tempCal3.toFixed(2);
      document.getElementById("36").value = tempCal4.toFixed(2);
      document.getElementById("40").value = tempCal5.toFixed(2);

      document.getElementById("188").value = B1.toFixed(3);
      document.getElementById("200").value = B2.toFixed(3);
      document.getElementById("212").value = B3.toFixed(3);
      document.getElementById("224").value = B4.toFixed(3);
      document.getElementById("236").value = B5.toFixed(3);
      document.getElementById("248").value = B6.toFixed(3);
      document.getElementById("260").value = B7.toFixed(3);
      document.getElementById("272").value = B8.toFixed(3);
      document.getElementById("284").value = B9.toFixed(3);

      document.getElementById("189").value = Rdm1.toFixed(1);
      document.getElementById("201").value = Rdm2.toFixed(1);
      document.getElementById("213").value = Rdm3.toFixed(1);
      document.getElementById("225").value = Rdm4.toFixed(1);
      document.getElementById("237").value = Rdm5.toFixed(1);
      document.getElementById("249").value = Rdm6.toFixed(1);
      document.getElementById("261").value = Rdm7.toFixed(1);
      document.getElementById("273").value = Rdm8.toFixed(1);
      document.getElementById("285").value = Rdm9.toFixed(1);

      document.getElementById("190").value = Nm1.toFixed(2);
      document.getElementById("202").value = Nm1.toFixed(2);
      document.getElementById("214").value = Nm1.toFixed(2);
      document.getElementById("226").value = Nm1.toFixed(2);
      document.getElementById("238").value = Nm1.toFixed(2);
      document.getElementById("250").value = Nm1.toFixed(2);
      document.getElementById("262").value = Nm1.toFixed(2);
      document.getElementById("274").value = Nm1.toFixed(2);
      document.getElementById("286").value = Nm1.toFixed(2);

      document.getElementById("191").value = Hm1.toFixed(2);
      document.getElementById("203").value = Hm2.toFixed(2);
      document.getElementById("215").value = Hm3.toFixed(2);
      document.getElementById("227").value = Hm4.toFixed(2);
      document.getElementById("239").value = Hm5.toFixed(2);
      document.getElementById("251").value = Hm6.toFixed(2);
      document.getElementById("263").value = Hm7.toFixed(2);
      document.getElementById("275").value = Hm8.toFixed(2);
      document.getElementById("287").value = Hm9.toFixed(2);

      document.getElementById("192").value = Dm1.toFixed(4);
      document.getElementById("204").value = Dm2.toFixed(4);
      document.getElementById("216").value = Dm3.toFixed(4);
      document.getElementById("228").value = Dm4.toFixed(4);
      document.getElementById("240").value = Dm5.toFixed(4);
      document.getElementById("252").value = Dm6.toFixed(4);
      document.getElementById("264").value = Dm7.toFixed(4);
      document.getElementById("276").value = Dm8.toFixed(4);
      document.getElementById("288").value = Dm9.toFixed(4);




                 }


              </script>
                
                <script>
    function enviarData(event) {
      event.preventDefault()
      $.ajax({
        url: "libs/js/hydrometer.js",
        type: "POST",
        data: $("#mxy").serialize(),
        success: function(data) {
          $("#resultado").html(data);
        }
      });


    }
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php include_once('layouts/footer.php'); ?>