<?php
$page_title = 'Double Hydrometer';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/DoubleHydrometer.php'); 
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
          <span> Double Hydrometer</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="double_hydrometer.php" onsubmit="calcular()">
        <div>
          <table class="table table-bordered">
            <thead>
              <tbody id="product_info"> </tbody>
            </thead>
          </table>
          </div>
          <div class="col-xs-4">
            <label>Standard</label>
            <select class="form-control" name="Standard">
              <option selected>Choose...</option>
              <option value="ASTM-D46">ASTM-D4647</option>
            </select>
          </div>
          <div class="col-xs-4">
            <label>Method</label>
            <select class="form-control" type = "text" name="PreparationMethod" id="">
              <option selected>Choose...</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
            </select>
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


            <div style="display: flex; flex-direction: row-reverse; margin-top: -28%;">
              <table class="table table-bordered border-primary" style="width:450px;">
              <thead>
              </thead>
              <caption>Moisture Content Test</caption>
              <tbody>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content</th>
                  <td><input disabled type="text" value="50 (gr)" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input disabled type="text" value="25 (gr)" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                 <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Name</th>
                 <td><input type="text" name="Tare_Name_50gr" value="" style="border: none;" size="4" style="background: transparent;" id="14" oninput="calcular()"></td>
                 <td><input type="text" name="Tare_Name_25gr" value="" style="border: none;" size="4" style="background: transparent;" id="14.1" oninput="calcular()"></td>
                </tr>                
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Oven Temperature (°C)</th>
                  <td><input type="text" name="Oven_Temperature_50gr" value="110 º C" style="border: none;" size="4" style="background: transparent;" id="15" oninput="calcular()"></td>
                  <td><input type="text" name="Oven_Temperature_25gr" value="110 º C" style="border: none;" size="4" style="background: transparent;" id="15.1" oninput="calcular()"></td>
                </tr>
              <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Wet Soil (gr)</th>
                <td><input type="text" name="Tare_Plus_Wet_Soil_50gr" style="border: none;" size="4" style="background: transparent;" id="16" oninput="calcular()"></td>
                <td><input type="text" name="Tare_Plus_Wet_Soil_25gr" style="border: none;" size="4" style="background: transparent;" id="16.1" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Dry Soil (gr)</th>
                <td><input type="text" name="Tare_Plus_Dry_Soil_50gr" style="border: none;" size="4" style="background: transparent;" id="17" oninput="calcular()"></td>
                <td><input type="text" name="Tare_Plus_Dry_Soil_25gr" style="border: none;" size="4" style="background: transparent;" id="17.1" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Water, Ww (gr)</th>
                <td><input type="text" name="Water_Ww_50gr" style="border: none;" size="4" style="background: transparent;" id="18" oninput="calcular()"></td>
                <td><input type="text" name="Water_Ww_25gr" style="border: none;" size="4" style="background: transparent;" id="18.1" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare (gr)</th>
                <td><input type="text" name="Tare_50gr" style="border: none;" size="4" style="background: transparent;" id="19" oninput="calcular()"></td>
                <td><input type="text" name="Tare_25gr" style="border: none;" size="4" style="background: transparent;" id="19.1" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Dry Soil, Ws (gr)</th>
                <td><input type="text" name="Dry_Soil_Ws_50gr" style="border: none;" size="4" style="background: transparent;" id="20" oninput="calcular()"></td>
                <td><input type="text" name="Dry_Soil_Ws_25gr" style="border: none;" size="4" style="background: transparent;" id="20.1" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content (%)</th>
                <td><input type="text" name="Moisture_Content_Porce_50gr" style="border: none;" size="4" style="background: transparent;" id="21" oninput="calcular()"></td>
                <td><input type="text" name="Moisture_Content_Porce_25gr" style="border: none;" size="4" style="background: transparent;" id="21.1" oninput="calcular()"></td>
              </tr>
              </tbody>
            </table>
            </div>

  
              <div style="display: flex; justify-content: center;">
                <table class="table table-bordered border-primary" style="width:450px;">
                  <thead>
                  </thead>
                  <caption>Specific Gravity</caption>
                  <tbody>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">SG</th>
                    <td>
                    <div class="input-group">
                    <input type="text" class="form-control" name="Specific_Gravity" size="4" style="background: transparent;" id="12" oninput="calcular()">
                    <span class="input-group-addon glyphicon glyphicon-search btn btn-default" onclick="search()"></span>
                    </div>
                  </td>
                  </tr>
                  </tbody>
                </table>
              </div>             
 



            <div style="display: flex; justify-content: flex-end;">
              <table class="table table-bordered border-primary" style="width: 530px;">
              <thead>
              </thead>
              <caption>Hydrometer Calibration (25 gr) </caption>
              <th style="text-align: center;" scope="row" colspan="2">Hydrometer Calibration:</th>
              <th style="text-align: center;" scope="row" colspan="2">Hydrometer measure of fluid:</th>
              <tbody>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Hydrometer ID:</th>
                  <td><input disabled type="text" value="" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Hydrometer ID:</th>
                  <td><input disabled type="text" value="" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Temperature (ºC)</th>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Actual Reading</th>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Temperature (ºC)</th>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Actual Reading</th>
                  </tr>
                  <td><input type="text" name="Hy_Calibration_25gr_Temperature_No1" style="border: none;" size="9" style="background: transparent;" id="24.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_25gr_Actual_Reading_No1" style="border: none;" size="4" style="background: transparent;" id="25.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Temperature_No1" style="border: none;" size="4" style="background: transparent;" id="26.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Actual_Reading_No1" style="border: none;" size="4" style="background: transparent;" id="27.1" oninput="calcular()"></td>
                </tr>
                  <td><input type="text" name="Hy_Calibration_25gr_Temperature_No2" style="border: none;" size="4" style="background: transparent;" id="28.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_25gr_Actual_Reading_No2" style="border: none;" size="4" style="background: transparent;" id="29.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Temperature_No2" style="border: none;" size="4" style="background: transparent;" id="30.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Actual_Reading_No2" style="border: none;" size="4" style="background: transparent;" id="31.1" oninput="calcular()"></td>
                </tr>
                  <td><input type="text" name="Hy_Calibration_25gr_Temperature_No3" style="border: none;" size="4" style="background: transparent;" id="32.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_25gr_Actual_Reading_No3" style="border: none;" size="4" style="background: transparent;" id="33.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Temperature_No3" style="border: none;" size="4" style="background: transparent;" id="34.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Actual_Reading_No3" style="border: none;" size="4" style="background: transparent;" id="35.1" oninput="calcular()"></td>
                </tr>
                  <td><input type="text" name="Hy_Calibration_25gr_Temperature_No4" style="border: none;" size="4" style="background: transparent;" id="36.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_25gr_Actual_Reading_No4" style="border: none;" size="4" style="background: transparent;" id="37.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Temperature_No4" style="border: none;" size="4" style="background: transparent;" id="38.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Actual_Reading_No4" style="border: none;" size="4" style="background: transparent;" id="39.1" oninput="calcular()"></td>
                </tr>
                  <td><input type="text" name="Hy_Calibration_25gr_Temperature_No5" style="border: none;" size="4" style="background: transparent;" id="40.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_25gr_Actual_Reading_No5" style="border: none;" size="4" style="background: transparent;" id="41.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Temperature_No5" style="border: none;" size="4" style="background: transparent;" id="42.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Actual_Reading_No5" style="border: none;" size="4" style="background: transparent;" id="43.1" oninput="calcular()"></td>
                </tr>
                  <td><input type="text" name="Hy_Calibration_25gr_Temperature_No6" style="border: none;" size="4" style="background: transparent;" id="44.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_25gr_Actual_Reading_No6" style="border: none;" size="4" style="background: transparent;" id="45.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Temperature_No6" style="border: none;" size="4" style="background: transparent;" id="46.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Actual_Reading_No6" style="border: none;" size="4" style="background: transparent;" id="47.1" oninput="calcular()"></td>
                </tr>
                  <td><input type="text" name="Hy_Calibration_25gr_Temperature_No7" style="border: none;" size="4" style="background: transparent;" id="48.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_25gr_Actual_Reading_No7" style="border: none;" size="4" style="background: transparent;" id="49.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Temperature_No7" style="border: none;" size="4" style="background: transparent;" id="50.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Actual_Reading_No7" style="border: none;" size="4" style="background: transparent;" id="51.1" oninput="calcular()"></td>
                </tr>
                </tr>
                  <td><input type="text" name="Hy_Calibration_25gr_Temperature_No8" style="border: none;" size="4" style="background: transparent;" id="52.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_25gr_Actual_Reading_No8" style="border: none;" size="4" style="background: transparent;" id="53.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Temperature_No8" style="border: none;" size="4" style="background: transparent;" id="54.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Actual_Reading_No8" style="border: none;" size="4" style="background: transparent;" id="55.1" oninput="calcular()"></td>
                </tr>
                </tr>
                  <td><input type="text" name="Hy_Calibration_25gr_Temperature_No9" style="border: none;" size="4" style="background: transparent;" id="56.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_25gr_Actual_Reading_No9" style="border: none;" size="4" style="background: transparent;" id="57.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Temperature_No9" style="border: none;" size="4" style="background: transparent;" id="58.1" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_25gr_Actual_Reading_No9" style="border: none;" size="4" style="background: transparent;" id="59.1" oninput="calcular()"></td>
                </tr>
              </tbody>
            </table>
            </div>

            <div style="display: flex; margin-top: -34%; margin-left: 1%;">
                <table class="table table-bordered border-primary" style="width: 530px;">
                <thead>
                </thead>
                <caption>Hydrometer Calibration (50 gr) </caption>
                <th style="text-align: center;" scope="row" colspan="2">Hydrometer Calibration:</th>
                <th style="text-align: center;" scope="row" colspan="2">Hydrometer measure of fluid:</th>
                <tbody>
                  <tr>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Hydrometer ID:</th>
                    <td><input disabled type="text" value="" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Hydrometer ID:</th>
                    <td><input disabled type="text" value="" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Temperature (ºC)</th>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Actual Reading</th>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Temperature (ºC)</th>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Actual Reading</th>
                  </tr>
                  <td><input type="text" name="Hy_Calibration_50gr_Temperature_No1" style="border: none;" size="9" style="background: transparent;" id="24" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_50gr_Actual_Reading_No1" style="border: none;" size="4" style="background: transparent;" id="25" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Temperature_No1" style="border: none;" size="4" style="background: transparent;" id="26" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Actual_Reading_No1" style="border: none;" size="4" style="background: transparent;" id="27" oninput="calcular()"></td>
                </tr>
                  <td><input type="text" name="Hy_Calibration_50gr_Temperature_No2" style="border: none;" size="4" style="background: transparent;" id="28" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_50gr_Actual_Reading_No2" style="border: none;" size="4" style="background: transparent;" id="29" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Temperature_No2" style="border: none;" size="4" style="background: transparent;" id="30" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Actual_Reading_No2" style="border: none;" size="4" style="background: transparent;" id="31" oninput="calcular()"></td>
                </tr>
                  <td><input type="text" name="Hy_Calibration_50gr_Temperature_No3" style="border: none;" size="4" style="background: transparent;" id="32" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_50gr_Actual_Reading_No3" style="border: none;" size="4" style="background: transparent;" id="33" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Temperature_No3" style="border: none;" size="4" style="background: transparent;" id="34" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Actual_Reading_No3" style="border: none;" size="4" style="background: transparent;" id="35" oninput="calcular()"></td>
                </tr>
                  <td><input type="text" name="Hy_Calibration_50gr_Temperature_No4" style="border: none;" size="4" style="background: transparent;" id="36" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_50gr_Actual_Reading_No4" style="border: none;" size="4" style="background: transparent;" id="37" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Temperature_No4" style="border: none;" size="4" style="background: transparent;" id="38" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Actual_Reading_No4" style="border: none;" size="4" style="background: transparent;" id="39" oninput="calcular()"></td>
                </tr>
                  <td><input type="text" name="Hy_Calibration_50gr_Temperature_No5" style="border: none;" size="4" style="background: transparent;" id="40" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_50gr_Actual_Reading_No5" style="border: none;" size="4" style="background: transparent;" id="41" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Temperature_No5" style="border: none;" size="4" style="background: transparent;" id="42" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Actual_Reading_No5" style="border: none;" size="4" style="background: transparent;" id="43" oninput="calcular()"></td>
                </tr>
                  <td><input type="text" name="Hy_Calibration_50gr_Temperature_No6" style="border: none;" size="4" style="background: transparent;" id="44" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_50gr_Actual_Reading_No6" style="border: none;" size="4" style="background: transparent;" id="45" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Temperature_No6" style="border: none;" size="4" style="background: transparent;" id="46" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Actual_Reading_No6" style="border: none;" size="4" style="background: transparent;" id="47" oninput="calcular()"></td>
                </tr>
                  <td><input type="text" name="Hy_Calibration_50gr_Temperature_No7" style="border: none;" size="4" style="background: transparent;" id="48" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_50gr_Actual_Reading_No7" style="border: none;" size="4" style="background: transparent;" id="49" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Temperature_No7" style="border: none;" size="4" style="background: transparent;" id="50" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Actual_Reading_No7" style="border: none;" size="4" style="background: transparent;" id="51" oninput="calcular()"></td>
                </tr>
                </tr>
                  <td><input type="text" name="Hy_Calibration_50gr_Temperature_No8" style="border: none;" size="4" style="background: transparent;" id="52" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_50gr_Actual_Reading_No8" style="border: none;" size="4" style="background: transparent;" id="53" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Temperature_No8" style="border: none;" size="4" style="background: transparent;" id="54" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Actual_Reading_No8" style="border: none;" size="4" style="background: transparent;" id="55" oninput="calcular()"></td>
                </tr>
                </tr>
                  <td><input type="text" name="Hy_Calibration_50gr_Temperature_No9" style="border: none;" size="4" style="background: transparent;" id="56" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Calibration_50gr_Actual_Reading_No9" style="border: none;" size="4" style="background: transparent;" id="57" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Temperature_No9" style="border: none;" size="4" style="background: transparent;" id="58" oninput="calcular()"></td>
                  <td><input type="text" name="Hy_Measure_Fluid_50gr_Actual_Reading_No9" style="border: none;" size="4" style="background: transparent;" id="59" oninput="calcular()"></td>
                </tr>
                </tbody>
              </table>
              </div>

              <div style="display: flex; flex-direction: row-reverse; justify-content: space-around">
                <table class="table table-bordered border-primary" style="width: 90%">
                <thead>
                </thead>
                <caption>Hydrometer of 25 gr specimen</caption>
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
                  </tr>
                <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="182.1" value="1" oninput="calcular()"></td>
                    <td><input type="date" name="gr25_Date_No1" style="border: none;" size="4" style="background: transparent;" id="183.1" oninput="calcular()"></td>
                    <td><input type="time" name="gr25_Hour_No1" style="border: none;" size="4" style="background: transparent;" id="184.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Reading_Time_min_No1" style="border: none;" size="4" style="background: transparent;" id="185.1" value="1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Temp_No1" style="border: none;" size="4" style="background: transparent;" id="186.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Hydrometer_Readings_Rm_No1" style="border: none;" size="4" style="background: transparent;" id="187.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_A_or_B_depending_of_the_Hy_type_No1" style="border: none;" size="4" style="background: transparent;" id="188.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Offset_at_Reading_rdm_No1" style="border: none;" size="4" style="background: transparent;" id="189.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Mass_Percent_Finer_Nm_Porce_No1" style="border: none;" size="4" style="background: transparent;" id="190.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Effective_Length_Hm_No1" style="border: none;" size="4" style="background: transparent;" id="191.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_D_mm_No1" style="border: none;" size="4" style="background: transparent;" id="192.1" oninput="calcular()"></td>
                   
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="194.1" value="2" oninput="calcular()"></td>
                    <td><input type="date" name="gr25_Date_No2" style="border: none;" size="4" style="background: transparent;" id="195.1" oninput="calcular()"></td>
                    <td><input type="time" name="gr25_Hour_No2" style="border: none;" size="4" style="background: transparent;" id="196.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Reading_Time_min_No2" style="border: none;" size="4" style="background: transparent;" id="197.1" value="2" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Temp_No2" style="border: none;" size="4" style="background: transparent;" id="198.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Hydrometer_Readings_Rm_No2" style="border: none;" size="4" style="background: transparent;" id="199.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_A_or_B_depending_of_the_Hy_type_No2" style="border: none;" size="4" style="background: transparent;" id="200.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Offset_at_Reading_rdm_No2" style="border: none;" size="4" style="background: transparent;" id="201.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Mass_Percent_Finer_Nm_Porce_No2" style="border: none;" size="4" style="background: transparent;" id="202.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Effective_Length_Hm_No2" style="border: none;" size="4" style="background: transparent;" id="203.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_D_mm_No2" style="border: none;" size="4" style="background: transparent;" id="204.1" oninput="calcular()"></td>
                   
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="206.1" value="3" oninput="calcular()"></td>
                    <td><input type="date" name="gr25_Date_No3" style="border: none;" size="4" style="background: transparent;" id="207.1" oninput="calcular()"></td>
                    <td><input type="time" name="gr25_Hour_No3" style="border: none;" size="4" style="background: transparent;" id="208.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Reading_Time_min_No3" style="border: none;" size="4" style="background: transparent;" id="209.1" value="4" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Temp_No3" style="border: none;" size="4" style="background: transparent;" id="210.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Hydrometer_Readings_Rm_No3" style="border: none;" size="4" style="background: transparent;" id="211.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_A_or_B_depending_of_the_Hy_type_No3" style="border: none;" size="4" style="background: transparent;" id="212.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Offset_at_Reading_rdm_No3" style="border: none;" size="4" style="background: transparent;" id="213.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Mass_Percent_Finer_Nm_Porce_No3" style="border: none;" size="4" style="background: transparent;" id="214.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Effective_Length_Hm_No3" style="border: none;" size="4" style="background: transparent;" id="215.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_D_mm_No3" style="border: none;" size="4" style="background: transparent;" id="216.1" oninput="calcular()"></td>
                    
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="218.1" value="4" oninput="calcular()"></td>
                    <td><input type="date" name="gr25_Date_No4" style="border: none;" size="4" style="background: transparent;" id="219.1" oninput="calcular()"></td>
                    <td><input type="time" name="gr25_Hour_No4" style="border: none;" size="4" style="background: transparent;" id="220.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Reading_Time_min_No4" style="border: none;" size="4" style="background: transparent;" id="221.1" value="15" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Temp_No4" style="border: none;" size="4" style="background: transparent;" id="222.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Hydrometer_Readings_Rm_No4" style="border: none;" size="4" style="background: transparent;" id="223.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_A_or_B_depending_of_the_Hy_type_No4" style="border: none;" size="4" style="background: transparent;" id="224.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Offset_at_Reading_rdm_No4" style="border: none;" size="4" style="background: transparent;" id="225.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Mass_Percent_Finer_Nm_Porce_No4" style="border: none;" size="4" style="background: transparent;" id="226.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Effective_Length_Hm_No4" style="border: none;" size="4" style="background: transparent;" id="227.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_D_mm_No4" style="border: none;" size="4" style="background: transparent;" id="228.1" oninput="calcular()"></td>
                    
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="230.1" value="5" oninput="calcular()"></td>
                    <td><input type="date" name="gr25_Date_No5" style="border: none;" size="4" style="background: transparent;" id="231.1" oninput="calcular()"></td>
                    <td><input type="time" name="gr25_Hour_No5" style="border: none;" size="4" style="background: transparent;" id="232.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Reading_Time_min_No5" style="border: none;" size="4" style="background: transparent;" id="233.1" value="30" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Temp_No5" style="border: none;" size="4" style="background: transparent;" id="234.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Hydrometer_Readings_Rm_No5" style="border: none;" size="4" style="background: transparent;" id="235.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_A_or_B_depending_of_the_Hy_type_No5" style="border: none;" size="4" style="background: transparent;" id="236.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Offset_at_Reading_rdm_No5" style="border: none;" size="4" style="background: transparent;" id="237.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Mass_Percent_Finer_Nm_Porce_No5" style="border: none;" size="4" style="background: transparent;" id="238.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Effective_Length_Hm_No5" style="border: none;" size="4" style="background: transparent;" id="239.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_D_mm_No5" style="border: none;" size="4" style="background: transparent;" id="240.1" oninput="calcular()"></td>
                    
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="242.1" value="6" oninput="calcular()"></td>
                    <td><input type="date" name="gr25_Date_No6" style="border: none;" size="4" style="background: transparent;" id="243.1" oninput="calcular()"></td>
                    <td><input type="time" name="gr25_Hour_No6" style="border: none;" size="4" style="background: transparent;" id="244.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Reading_Time_min_No6" style="border: none;" size="4" style="background: transparent;" id="245.1"  value="60" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Temp_No6" style="border: none;" size="4" style="background: transparent;" id="246.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Hydrometer_Readings_Rm_No6" style="border: none;" size="4" style="background: transparent;" id="247.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_A_or_B_depending_of_the_Hy_type_No6" style="border: none;" size="4" style="background: transparent;" id="248.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Offset_at_Reading_rdm_No6" style="border: none;" size="4" style="background: transparent;" id="249.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Mass_Percent_Finer_Nm_Porce_No6" style="border: none;" size="4" style="background: transparent;" id="250.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Effective_Length_Hm_No6" style="border: none;" size="4" style="background: transparent;" id="251.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_D_mm_No6" style="border: none;" size="4" style="background: transparent;" id="252.1" oninput="calcular()"></td>
                    
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="254.1" value="7" oninput="calcular()"></td>
                    <td><input type="date" name="gr25_Date_No7" style="border: none;" size="4" style="background: transparent;" id="255.1" oninput="calcular()"></td>
                    <td><input type="time" name="gr25_Hour_No7" style="border: none;" size="4" style="background: transparent;" id="256.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Reading_Time_min_No7" style="border: none;" size="4" style="background: transparent;" id="257.1"  value="240" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Temp_No7" style="border: none;" size="4" style="background: transparent;" id="258.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Hydrometer_Readings_Rm_No7" style="border: none;" size="4" style="background: transparent;" id="259.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_A_or_B_depending_of_the_Hy_type_No7" style="border: none;" size="4" style="background: transparent;" id="260.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Offset_at_Reading_rdm_No7" style="border: none;" size="4" style="background: transparent;" id="261.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Mass_Percent_Finer_Nm_Porce_No7" style="border: none;" size="4" style="background: transparent;" id="262.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Effective_Length_Hm_No7" style="border: none;" size="4" style="background: transparent;" id="263.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_D_mm_No7" style="border: none;" size="4" style="background: transparent;" id="264.1" oninput="calcular()"></td>
                   
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="266.1" value="8" oninput="calcular()"></td>
                    <td><input type="date" name="gr25_Date_No8" style="border: none;" size="4" style="background: transparent;" id="267.1" oninput="calcular()"></td>
                    <td><input type="time" name="gr25_Hour_No8" style="border: none;" size="4" style="background: transparent;" id="268.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Reading_Time_min_No8" style="border: none;" size="4" style="background: transparent;" id="269.1" value="340" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Temp_No8" style="border: none;" size="4" style="background: transparent;" id="270.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Hydrometer_Readings_Rm_No8" style="border: none;" size="4" style="background: transparent;" id="271.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_A_or_B_depending_of_the_Hy_type_No8" style="border: none;" size="4" style="background: transparent;" id="272.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Offset_at_Reading_rdm_No8" style="border: none;" size="4" style="background: transparent;" id="273.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Mass_Percent_Finer_Nm_Porce_No8" style="border: none;" size="4" style="background: transparent;" id="274.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Effective_Length_Hm_No8" style="border: none;" size="4" style="background: transparent;" id="275.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_D_mm_No8" style="border: none;" size="4" style="background: transparent;" id="276.1" oninput="calcular()"></td>
                    
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="278.1" value="9" oninput="calcular()"></td>
                    <td><input type="date" name="gr25_Date_No9" style="border: none;" size="4" style="background: transparent;" id="279.1" oninput="calcular()"></td>
                    <td><input type="time" name="gr25_Hour_No9" style="border: none;" size="4" style="background: transparent;" id="280.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Reading_Time_min_No9" style="border: none;" size="4" style="background: transparent;" id="281.1" value="1440" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Temp_No9" style="border: none;" size="4" style="background: transparent;" id="282.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Hydrometer_Readings_Rm_No9" style="border: none;" size="4" style="background: transparent;" id="283.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_A_or_B_depending_of_the_Hy_type_No9" style="border: none;" size="4" style="background: transparent;" id="284.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Offset_at_Reading_rdm_No9" style="border: none;" size="4" style="background: transparent;" id="285.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Mass_Percent_Finer_Nm_Porce_No9" style="border: none;" size="4" style="background: transparent;" id="286.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_Effective_Length_Hm_No9" style="border: none;" size="4" style="background: transparent;" id="287.1" oninput="calcular()"></td>
                    <td><input type="text" name="gr25_D_mm_No9" style="border: none;" size="4" style="background: transparent;" id="288.1" oninput="calcular()"></td>
                  </tr>
                </tbody>
              </table>
              </div>

              <div style="display: flex; flex-direction: row-reverse; justify-content: space-around;">
                <table class="table table-bordered border-primary" style="width: 90%;">
                <thead>
                </thead>
                <caption>Hydrometer of 50 gr specimen</caption>
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
                  </tr>
                <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="182" value="1" oninput="calcular()"></td>
                    <td><input type="date" name="gr50_Date_No1" style="border: none;" size="4" style="background: transparent;" id="183" oninput="calcular()"></td>
                    <td><input type="time" name="gr50_Hour_No1" style="border: none;" size="4" style="background: transparent;" id="184" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Reading_Time_min_No1" style="border: none;" size="4" style="background: transparent;" id="185" value="1" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Temp_No1" style="border: none;" size="4" style="background: transparent;" id="186" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Hydrometer_Readings_Rm_No1" style="border: none;" size="4" style="background: transparent;" id="187" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_A_or_B_depending_of_the_Hy_type_No1" style="border: none;" size="4" style="background: transparent;" id="188" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Offset_at_Reading_rdm_No1" style="border: none;" size="4" style="background: transparent;" id="189" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Mass_Percent_Finer_Nm_Porce_No1" style="border: none;" size="4" style="background: transparent;" id="190" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Effective_Length_Hm_No1" style="border: none;" size="4" style="background: transparent;" id="191" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_D_mm_No1" style="border: none;" size="4" style="background: transparent;" id="192" oninput="calcular()"></td>
                   
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="194" value="2" oninput="calcular()"></td>
                    <td><input type="date" name="gr50_Date_No2" style="border: none;" size="4" style="background: transparent;" id="195" oninput="calcular()"></td>
                    <td><input type="time" name="gr50_Hour_No2" style="border: none;" size="4" style="background: transparent;" id="196" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Reading_Time_min_No2" style="border: none;" size="4" style="background: transparent;" id="197" value="2" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Temp_No2" style="border: none;" size="4" style="background: transparent;" id="198" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Hydrometer_Readings_Rm_No2" style="border: none;" size="4" style="background: transparent;" id="199" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_A_or_B_depending_of_the_Hy_type_No2" style="border: none;" size="4" style="background: transparent;" id="200" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Offset_at_Reading_rdm_No2" style="border: none;" size="4" style="background: transparent;" id="201" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Mass_Percent_Finer_Nm_Porce_No2" style="border: none;" size="4" style="background: transparent;" id="202" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Effective_Length_Hm_No2" style="border: none;" size="4" style="background: transparent;" id="203" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_D_mm_No2" style="border: none;" size="4" style="background: transparent;" id="204" oninput="calcular()"></td>
                   
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="206" value="3" oninput="calcular()"></td>
                    <td><input type="date" name="gr50_Date_No3" style="border: none;" size="4" style="background: transparent;" id="207" oninput="calcular()"></td>
                    <td><input type="time" name="gr50_Hour_No3" style="border: none;" size="4" style="background: transparent;" id="208" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Reading_Time_min_No3" style="border: none;" size="4" style="background: transparent;" id="209" value="4" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Temp_No3" style="border: none;" size="4" style="background: transparent;" id="210" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Hydrometer_Readings_Rm_No3" style="border: none;" size="4" style="background: transparent;" id="211" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_A_or_B_depending_of_the_Hy_type_No3" style="border: none;" size="4" style="background: transparent;" id="212" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Offset_at_Reading_rdm_No3" style="border: none;" size="4" style="background: transparent;" id="213" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Mass_Percent_Finer_Nm_Porce_No3" style="border: none;" size="4" style="background: transparent;" id="214" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Effective_Length_Hm_No3" style="border: none;" size="4" style="background: transparent;" id="215" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_D_mm_No3" style="border: none;" size="4" style="background: transparent;" id="216" oninput="calcular()"></td>
                    
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="218" value="4" oninput="calcular()"></td>
                    <td><input type="date" name="gr50_Date_No4" style="border: none;" size="4" style="background: transparent;" id="219" oninput="calcular()"></td>
                    <td><input type="time" name="gr50_Hour_No4" style="border: none;" size="4" style="background: transparent;" id="220" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Reading_Time_min_No4" style="border: none;" size="4" style="background: transparent;" id="221" value="15" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Temp_No4" style="border: none;" size="4" style="background: transparent;" id="222" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Hydrometer_Readings_Rm_No4" style="border: none;" size="4" style="background: transparent;" id="223" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_A_or_B_depending_of_the_Hy_type_No4" style="border: none;" size="4" style="background: transparent;" id="224" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Offset_at_Reading_rdm_No4" style="border: none;" size="4" style="background: transparent;" id="225" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Mass_Percent_Finer_Nm_Porce_No4" style="border: none;" size="4" style="background: transparent;" id="226" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Effective_Length_Hm_No4" style="border: none;" size="4" style="background: transparent;" id="227" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_D_mm_No4" style="border: none;" size="4" style="background: transparent;" id="228" oninput="calcular()"></td>
                    
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="230" value="5" oninput="calcular()"></td>
                    <td><input type="date" name="gr50_Date_No5" style="border: none;" size="4" style="background: transparent;" id="231" oninput="calcular()"></td>
                    <td><input type="time" name="gr50_Hour_No5" style="border: none;" size="4" style="background: transparent;" id="232" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Reading_Time_min_No5" style="border: none;" size="4" style="background: transparent;" id="233" value="30" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Temp_No5" style="border: none;" size="4" style="background: transparent;" id="234" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Hydrometer_Readings_Rm_No5" style="border: none;" size="4" style="background: transparent;" id="235" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_A_or_B_depending_of_the_Hy_type_No5" style="border: none;" size="4" style="background: transparent;" id="236" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Offset_at_Reading_rdm_No5" style="border: none;" size="4" style="background: transparent;" id="237" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Mass_Percent_Finer_Nm_Porce_No5" style="border: none;" size="4" style="background: transparent;" id="238" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Effective_Length_Hm_No5" style="border: none;" size="4" style="background: transparent;" id="239" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_D_mm_No5" style="border: none;" size="4" style="background: transparent;" id="240" oninput="calcular()"></td>
                    
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="242" value="6" oninput="calcular()"></td>
                    <td><input type="date" name="gr50_Date_No6" style="border: none;" size="4" style="background: transparent;" id="243" oninput="calcular()"></td>
                    <td><input type="time" name="gr50_Hour_No6" style="border: none;" size="4" style="background: transparent;" id="244" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Reading_Time_min_No6" style="border: none;" size="4" style="background: transparent;" id="245"  value="60" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Temp_No6" style="border: none;" size="4" style="background: transparent;" id="246" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Hydrometer_Readings_Rm_No6" style="border: none;" size="4" style="background: transparent;" id="247" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_A_or_B_depending_of_the_Hy_type_No6" style="border: none;" size="4" style="background: transparent;" id="248" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Offset_at_Reading_rdm_No6" style="border: none;" size="4" style="background: transparent;" id="249" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Mass_Percent_Finer_Nm_Porce_No6" style="border: none;" size="4" style="background: transparent;" id="250" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Effective_Length_Hm_No6" style="border: none;" size="4" style="background: transparent;" id="251" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_D_mm_No6" style="border: none;" size="4" style="background: transparent;" id="252" oninput="calcular()"></td>
                    
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="254" value="7" oninput="calcular()"></td>
                    <td><input type="date" name="gr50_Date_No7" style="border: none;" size="4" style="background: transparent;" id="255" oninput="calcular()"></td>
                    <td><input type="time" name="gr50_Hour_No7" style="border: none;" size="4" style="background: transparent;" id="256" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Reading_Time_min_No7" style="border: none;" size="4" style="background: transparent;" id="257"  value="240" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Temp_No7" style="border: none;" size="4" style="background: transparent;" id="258" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Hydrometer_Readings_Rm_No7" style="border: none;" size="4" style="background: transparent;" id="259" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_A_or_B_depending_of_the_Hy_type_No7" style="border: none;" size="4" style="background: transparent;" id="260" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Offset_at_Reading_rdm_No7" style="border: none;" size="4" style="background: transparent;" id="261" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Mass_Percent_Finer_Nm_Porce_No7" style="border: none;" size="4" style="background: transparent;" id="262" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Effective_Length_Hm_No7" style="border: none;" size="4" style="background: transparent;" id="263" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_D_mm_No7" style="border: none;" size="4" style="background: transparent;" id="264" oninput="calcular()"></td>
                   
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="266" value="8" oninput="calcular()"></td>
                    <td><input type="date" name="gr50_Date_No8" style="border: none;" size="4" style="background: transparent;" id="267" oninput="calcular()"></td>
                    <td><input type="time" name="gr50_Hour_No8" style="border: none;" size="4" style="background: transparent;" id="268" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Reading_Time_min_No8" style="border: none;" size="4" style="background: transparent;" id="269" value="340" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Temp_No8" style="border: none;" size="4" style="background: transparent;" id="270" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Hydrometer_Readings_Rm_No8" style="border: none;" size="4" style="background: transparent;" id="271" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_A_or_B_depending_of_the_Hy_type_No8" style="border: none;" size="4" style="background: transparent;" id="272" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Offset_at_Reading_rdm_No8" style="border: none;" size="4" style="background: transparent;" id="273" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Mass_Percent_Finer_Nm_Porce_No8" style="border: none;" size="4" style="background: transparent;" id="274" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Effective_Length_Hm_No8" style="border: none;" size="4" style="background: transparent;" id="275" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_D_mm_No8" style="border: none;" size="4" style="background: transparent;" id="276" oninput="calcular()"></td>
                    
                  </tr>
                  <tr>
                    <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;" id="278" value="9" oninput="calcular()"></td>
                    <td><input type="date" name="gr50_Date_No9" style="border: none;" size="4" style="background: transparent;" id="279" oninput="calcular()"></td>
                    <td><input type="time" name="gr50_Hour_No9" style="border: none;" size="4" style="background: transparent;" id="280" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Reading_Time_min_No9" style="border: none;" size="4" style="background: transparent;" id="281" value="1440" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Temp_No9" style="border: none;" size="4" style="background: transparent;" id="282" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Hydrometer_Readings_Rm_No9" style="border: none;" size="4" style="background: transparent;" id="283" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_A_or_B_depending_of_the_Hy_type_No9" style="border: none;" size="4" style="background: transparent;" id="284" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Offset_at_Reading_rdm_No9" style="border: none;" size="4" style="background: transparent;" id="285" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Mass_Percent_Finer_Nm_Porce_No9" style="border: none;" size="4" style="background: transparent;" id="286" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_Effective_Length_Hm_No9" style="border: none;" size="4" style="background: transparent;" id="287" oninput="calcular()"></td>
                    <td><input type="text" name="gr50_D_mm_No9" style="border: none;" size="4" style="background: transparent;" id="288" oninput="calcular()"></td>
                  </tr>
                </tbody>
              </table>
              </div>

              <div style="display: flex; margin-left: 5%;">
                <table class="table table-bordered border-primary" style="width:450px;">
                <thead>
                </thead>
                <caption>Percent Dispersion</caption>
                <tbody>
                  <tr>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Nm, 2µm not dispersed</th>
                    <td><input type="text" name="Nm_2um_Not_Dispersed" style="border: none;" size="8" style="background: transparent;" id="289" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Nm, 2µm  dispersed</th>
                    <td><input type="text" name="Nm_2um_Dispersed" style="border: none;" size="8" style="background: transparent;" id="289.1" oninput="calcular()"></td>
                  </tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">% Dispersion</th>
                  <td><input type="text" name="Porce_Dispersion" style="border: none;" size="8" style="background: transparent;" id="290" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Classification</th>
                  <td><input type="text" name="Classification" style="border: none;" size="8" style="background: transparent;" id="291" oninput="calcular()"></td>
                </tr>
                </tbody>
              </table>
              </div>

              <button type="submit" name="DoubleHydrometer" class="btn btn-danger">Registrar ensayo</button>
                <button type="submit" name="grafico" class="btn btn-primary" onclick="enviarData(event)">Graficar</button>
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

         var tpws = parseFloat(document.getElementById("16").value);
         var tpds = parseFloat(document.getElementById("17").value);
         var tare = parseFloat(document.getElementById("19").value);

         var tpws1 = parseFloat(document.getElementById("16.1").value);
         var tpds1 = parseFloat(document.getElementById("17.1").value);
         var tare1 = parseFloat(document.getElementById("19.1").value);

         var tempCal1 = parseFloat(document.getElementById("24").value);
         var tempCal6 = parseFloat(document.getElementById("44").value);
         var tempCal7 = parseFloat(document.getElementById("48").value);
         var tempCal8 = parseFloat(document.getElementById("52").value);
         var tempCal9 = parseFloat(document.getElementById("56").value);

         var tempCal10 = parseFloat(document.getElementById("24.1").value);
         var tempCal15 = parseFloat(document.getElementById("44.1").value);
         var tempCal16 = parseFloat(document.getElementById("48.1").value);
         var tempCal17 = parseFloat(document.getElementById("52.1").value);
         var tempCal18 = parseFloat(document.getElementById("56.1").value);

         var ar1 = parseFloat(document.getElementById("25").value);
         var ar2 = parseFloat(document.getElementById("29").value);
         var ar3 = parseFloat(document.getElementById("33").value);
         var ar4 = parseFloat(document.getElementById("37").value);
         var ar5 = parseFloat(document.getElementById("41").value);
         var ar6 = parseFloat(document.getElementById("45").value);
         var ar7 = parseFloat(document.getElementById("49").value);
         var ar8 = parseFloat(document.getElementById("53").value);
         var ar9 = parseFloat(document.getElementById("57").value);

         var ar10 = parseFloat(document.getElementById("25.1").value);
         var ar11 = parseFloat(document.getElementById("29.1").value);
         var ar12 = parseFloat(document.getElementById("33.1").value);
         var ar13 = parseFloat(document.getElementById("37.1").value);
         var ar14 = parseFloat(document.getElementById("41.1").value);
         var ar15 = parseFloat(document.getElementById("45.1").value);
         var ar16 = parseFloat(document.getElementById("49.1").value);
         var ar17 = parseFloat(document.getElementById("53.1").value);
         var ar18 = parseFloat(document.getElementById("57.1").value);

         var tempf1 = parseFloat(document.getElementById("26").value);
         var tempf2 = parseFloat(document.getElementById("30").value);
         var tempf3 = parseFloat(document.getElementById("34").value);
         var tempf4 = parseFloat(document.getElementById("38").value);
         var tempf5 = parseFloat(document.getElementById("42").value);
         var tempf6 = parseFloat(document.getElementById("46").value);
         var tempf7 = parseFloat(document.getElementById("50").value);
         var tempf8 = parseFloat(document.getElementById("54").value);
         var tempf9 = parseFloat(document.getElementById("58").value);

         var tempf10 = parseFloat(document.getElementById("26.1").value);
         var tempf11 = parseFloat(document.getElementById("30.1").value);
         var tempf12 = parseFloat(document.getElementById("34.1").value);
         var tempf13 = parseFloat(document.getElementById("38.1").value);
         var tempf14 = parseFloat(document.getElementById("42.1").value);
         var tempf15 = parseFloat(document.getElementById("46.1").value);
         var tempf16 = parseFloat(document.getElementById("50.1").value);
         var tempf17 = parseFloat(document.getElementById("54.1").value);
         var tempf18 = parseFloat(document.getElementById("58.1").value);

         var arf1 = parseFloat(document.getElementById("27").value);
         var arf2 = parseFloat(document.getElementById("31").value);
         var arf3 = parseFloat(document.getElementById("35").value);
         var arf4 = parseFloat(document.getElementById("39").value);
         var arf5 = parseFloat(document.getElementById("43").value);
         var arf6 = parseFloat(document.getElementById("47").value);
         var arf7 = parseFloat(document.getElementById("51").value);
         var arf8 = parseFloat(document.getElementById("55").value);
         var arf9 = parseFloat(document.getElementById("59").value);

         var arf10 = parseFloat(document.getElementById("27.1").value);
         var arf11 = parseFloat(document.getElementById("31.1").value);
         var arf12 = parseFloat(document.getElementById("35.1").value);
         var arf13 = parseFloat(document.getElementById("39.1").value);
         var arf14 = parseFloat(document.getElementById("43.1").value);
         var arf15 = parseFloat(document.getElementById("47.1").value);
         var arf16 = parseFloat(document.getElementById("51.1").value);
         var arf17 = parseFloat(document.getElementById("55.1").value);
         var arf18 = parseFloat(document.getElementById("59.1").value);

         var tm1 = parseFloat(document.getElementById("185").value);
         var tm2 = parseFloat(document.getElementById("197").value);
         var tm3 = parseFloat(document.getElementById("209").value);
         var tm4 = parseFloat(document.getElementById("221").value);
         var tm5 = parseFloat(document.getElementById("233").value);
         var tm6 = parseFloat(document.getElementById("245").value);
         var tm7 = parseFloat(document.getElementById("257").value);
         var tm8 = parseFloat(document.getElementById("269").value);
         var tm9 = parseFloat(document.getElementById("281").value);

         var tm10 = parseFloat(document.getElementById("185.1").value);
         var tm11 = parseFloat(document.getElementById("197.1").value);
         var tm12 = parseFloat(document.getElementById("209.1").value);
         var tm13 = parseFloat(document.getElementById("221.1").value);
         var tm14 = parseFloat(document.getElementById("233.1").value);
         var tm15 = parseFloat(document.getElementById("245.1").value);
         var tm16 = parseFloat(document.getElementById("257.1").value);
         var tm17 = parseFloat(document.getElementById("269.1").value);
         var tm18 = parseFloat(document.getElementById("281.1").value);


         var Temp1 = parseFloat(document.getElementById("186").value);
         var Temp2 = parseFloat(document.getElementById("198").value);
         var Temp3 = parseFloat(document.getElementById("210").value);
         var Temp4 = parseFloat(document.getElementById("222").value);
         var Temp5 = parseFloat(document.getElementById("234").value);
         var Temp6 = parseFloat(document.getElementById("246").value);
         var Temp7 = parseFloat(document.getElementById("258").value);
         var Temp8 = parseFloat(document.getElementById("270").value);
         var Temp9 = parseFloat(document.getElementById("282").value);

         var Temp10 = parseFloat(document.getElementById("186.1").value);
         var Temp11 = parseFloat(document.getElementById("198.1").value);
         var Temp12 = parseFloat(document.getElementById("210.1").value);
         var Temp13 = parseFloat(document.getElementById("222.1").value);
         var Temp14 = parseFloat(document.getElementById("234.1").value);
         var Temp15 = parseFloat(document.getElementById("246.1").value);
         var Temp16 = parseFloat(document.getElementById("258.1").value);
         var Temp17 = parseFloat(document.getElementById("270.1").value);
         var Temp18 = parseFloat(document.getElementById("282.1").value);

         var Rm1 = parseFloat(document.getElementById("187").value);
         var Rm2 = parseFloat(document.getElementById("199").value);
         var Rm3 = parseFloat(document.getElementById("211").value);
         var Rm4 = parseFloat(document.getElementById("223").value);
         var Rm5 = parseFloat(document.getElementById("235").value);
         var Rm6 = parseFloat(document.getElementById("247").value);
         var Rm7 = parseFloat(document.getElementById("259").value);
         var Rm8 = parseFloat(document.getElementById("271").value);
         var Rm9 = parseFloat(document.getElementById("283").value);

         var Rm10 = parseFloat(document.getElementById("187.1").value);
         var Rm11 = parseFloat(document.getElementById("199.1").value);
         var Rm12 = parseFloat(document.getElementById("211.1").value);
         var Rm13 = parseFloat(document.getElementById("223.1").value);
         var Rm14 = parseFloat(document.getElementById("235.1").value);
         var Rm15 = parseFloat(document.getElementById("247.1").value);
         var Rm16 = parseFloat(document.getElementById("259.1").value);
         var Rm17 = parseFloat(document.getElementById("271.1").value);
         var Rm18 = parseFloat(document.getElementById("283.1").value);

      

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
       
       
        // calculos hidrometros de 50 gr

        // Calculo de Md

        var Water = tpws - tpds;

        var Mdd = tpds - tare;

        var Mc = (Water / Mdd) * 100;

       var tempCal2 = tempCal1 + 0;
       var tempCal3 = tempCal2;
       var tempCal4 = tempCal3;
       var tempCal5 = tempCal4;

       //Determinacion de A o B
       var b1 = ar1 + (0.01248 * tempCal1) + (0.00795 * (Math.pow(tempCal1, 2)));
       var b2 = ar2 + (0.01248 * tempCal2) + (0.00795 * (Math.pow(tempCal2, 2)));
       var b3= ar3 + (0.01248 * tempCal3) + (0.00795 * (Math.pow(tempCal3, 2)));
       var b4 = ar4 + (0.01248 * tempCal4) + (0.00795 * (Math.pow(tempCal4, 2)));
       var b5 = ar5 + (0.01248 * tempCal5) + (0.00795 * (Math.pow(tempCal5, 2)));

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

       // calculos hidrometros de 25 gr
        
        // Calculo de Md

        var Water1 = tpws1 - tpds1;

        var Mdd1 = tpds1 - tare1;

        var Mc1 = (Water1 / Mdd1) * 100;

       var tempCal11 = tempCal10 + 0;
       var tempCal12 = tempCal11;
       var tempCal13 = tempCal12;
       var tempCal14 = tempCal13;

       //Determinacion de A o B
       var b6 = ar10 + (0.01248 * tempCal10) + (0.00795 * (Math.pow(tempCal10, 2)));
       var b7 = ar11 + (0.01248 * tempCal11) + (0.00795 * (Math.pow(tempCal11, 2)));
       var b8= ar12 + (0.01248 * tempCal12) + (0.00795 * (Math.pow(tempCal12, 2)));
       var b9 = ar13 + (0.01248 * tempCal13) + (0.00795 * (Math.pow(tempCal13, 2)));
       var b10 = ar14 + (0.01248 * tempCal14) + (0.00795 * (Math.pow(tempCal14, 2)));

       var B10 = (b6 + b7 +b8 + b9 + b10) / 5;
       var B11 = B10;
       var B12 = B11;
       var B13 = B12;
       var B14 = B13;
       var B15 = B14;
       var B16 = B15;
       var B17 = B16;
       var B18 = B17;

      
       // Determinacion del Offset at Reading.
       var Rdm10 = B10 - (0.01248 * Temp10) - (0.00795 * (Math.pow(Temp10, 2)));
       var Rdm11 = B11 - (0.01248 * Temp11) - (0.00795 * (Math.pow(Temp11, 2)));
       var Rdm12 = B12 - (0.01248 * Temp12) - (0.00795 * (Math.pow(Temp12, 2)));
       var Rdm13 = B13 - (0.01248 * Temp13) - (0.00795 * (Math.pow(Temp13, 2)));
       var Rdm14 = B14 - (0.01248 * Temp14) - (0.00795 * (Math.pow(Temp14, 2)));
       var Rdm15 = B15 - (0.01248 * Temp15) - (0.00795 * (Math.pow(Temp15, 2)));
       var Rdm16 = B16 - (0.01248 * Temp16) - (0.00795 * (Math.pow(Temp16, 2)));
       var Rdm17 = B17 - (0.01248 * Temp17) - (0.00795 * (Math.pow(Temp17, 2)));
       var Rdm18 = B18   - (0.01248 * Temp18) - (0.00795 * (Math.pow(Temp18, 2)));

      // Determinacion de la masa usada en el ensayo.
      var Md1 = Mdd1 - 0;

      // Determinacion del porcentaje de masa fina.

      Nm10 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md1) * (Rm10- Rdm10) * (100/1000);
      Nm11 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md1) * (Rm11- Rdm11) * (100/1000);
      Nm12= 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md1) * (Rm12- Rdm12) * (100/1000);
      Nm13 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md1) * (Rm13- Rdm13) * (100/1000);
      Nm14 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md1) * (Rm14- Rdm14) * (100/1000);
      Nm15= 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md1) * (Rm15- Rdm15) * (100/1000);
      Nm16 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md1) * (Rm16- Rdm16) * (100/1000);
      Nm17 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md1) * (Rm17- Rdm17) * (100/1000);
      Nm18 = 0.6226 *(Sg / (Sg - 1) ) * (Vsp / Md1) * (Rm18- Rdm18) * (100/1000);
      
      //Determinacion de la profundidad efectiva.


      var Hm10 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm10 ))- (Vhb / dAc);
      var Hm11 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm11 ))- (Vhb / dAc);
      var Hm12 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm12 ))- (Vhb / dAc);
      var Hm13 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm13 ))- (Vhb / dAc);
      var Hm14 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm14 ))- (Vhb / dAc);
      var Hm15 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm15 ))- (Vhb / dAc);
      var Hm16 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm16 ))- (Vhb / dAc);
      var Hm17 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm17 ))- (Vhb / dAc);
      var Hm18 = Hr2 + (((Hr1 - Hr2) / (r2 - r1)) * (r2 - Rm18))- (Vhb / dAc);

      // Determinamos el diametro maximo en suspension.

      var Dm10 = Math.sqrt((A / B) * (Hm10 / (tm10 * 60))) * 10;
      var Dm11= Math.sqrt((A / B) * (Hm11 / (tm11 * 60))) * 10;
      var Dm12 = Math.sqrt((A / B) * (Hm12 / (tm12 * 60))) * 10;
      var Dm13 = Math.sqrt((A / B) * (Hm13 / (tm13 * 60))) * 10;
      var Dm14 = Math.sqrt((A / B) * (Hm14 / (tm14 * 60))) * 10;
      var Dm15 = Math.sqrt((A / B) * (Hm15 / (tm15 * 60))) * 10;
      var Dm16 = Math.sqrt((A / B) * (Hm16 / (tm16 * 60))) * 10;
      var Dm17 = Math.sqrt((A / B) * (Hm17 / (tm17 * 60))) * 10;
      var Dm18 = Math.sqrt((A / B) * (Hm18 / (tm18 * 60))) * 10;

      // Porcentaje de Dispersion

  
      var diametros25 = [Dm1, Dm2, Dm3, Dm4, Dm5, Dm6, Dm7, Dm8, Dm9];
var porcentajes25 = [Nm1, Nm2, Nm3, Nm4, Nm5, Nm6, Nm7, Nm8, Nm9];

var diametros50 = [Dm10, Dm11, Dm12, Dm13, Dm14, Dm15, Dm16, Dm17, Dm18];
var porcentajes50 = [Nm10, Nm11, Nm12, Nm13, Nm14, Nm15, Nm16, Nm17, Nm18];

var Dref = 0.002;

var Diamenor25 = null;
var Diamayor25 = null;

var Diamenor50 = null;
var Diamayor50 = null;

for (var dia25 of diametros25) {
   if (dia25 <= Dref && (Diamenor25 === null || dia25 > Diamenor25)){
      Diamenor25 = dia25;
   }
   if (dia25 >= Dref && (Diamayor25 === null || dia25 < Diamayor25)){
      Diamayor25 = dia25;
   }
}

for (var dia50 of diametros50) {
   if (dia50 <= Dref && (Diamenor50 === null || dia50 > Diamenor50)){
      Diamenor50 = dia50;
   }
   if (dia50 >= Dref && (Diamayor50 === null || dia50 < Diamayor50)){
      Diamayor50 = dia50;
   }
}

// Calcula los porcentajes correspondientes a los diámetros más cercanos.

var porcentajemenor25 = porcentajes25[diametros25.indexOf(Diamenor25)];
var porcentajemayor25 = porcentajes25[diametros25.indexOf(Diamayor25)];

var porcentajemenor50 = porcentajes50[diametros50.indexOf(Diamenor50)];
var porcentajemayor50 = porcentajes50[diametros50.indexOf(Diamayor50)];

// Interpolaciones

var porcentajeinter25 = ((porcentajemayor25 - porcentajemenor25) / (Math.log(Diamayor25) - Math.log(Diamenor25))) * (Math.log(Dref) - Math.log(Diamenor25)) + porcentajemenor25;
var porcentajeinter50 = ((porcentajemayor50 - porcentajemenor50) / (Math.log(Diamayor50) - Math.log(Diamenor50))) * (Math.log(Dref) - Math.log(Diamenor50)) + porcentajemenor50;

if (porcentajeinter25 != 0){
  var PerDisp = (porcentajeinter50 / porcentajeinter25) * 100;

}else{
  PerDisp =0;
}



var clasificacion;

if (PerDisp >= 50) {
   clasificacion = "Dispersive";
} else if (PerDisp >= 30) {
   clasificacion = "Intermediate";
} else {
   clasificacion = "No Dispersive";
}


      //pasamos resultados a los inputs.

      document.getElementById("5").value = densidad_ensayo.toFixed(5);

      document.getElementById("18").value = Water.toFixed(2);
      document.getElementById("18.1").value = Water1.toFixed(2);

      document.getElementById("20").value = Mdd.toFixed(2);
      document.getElementById("20.1").value = Mdd1.toFixed(2);

      document.getElementById("21").value = Mc.toFixed(2);
      document.getElementById("21.1").value = Mc1.toFixed(2);

      document.getElementById("28").value = tempCal2.toFixed(2);
      document.getElementById("32").value = tempCal3.toFixed(2);
      document.getElementById("36").value = tempCal4.toFixed(2);
      document.getElementById("40").value = tempCal5.toFixed(2);

      document.getElementById("28.1").value = tempCal11.toFixed(2);
      document.getElementById("32.1").value = tempCal12.toFixed(2);
      document.getElementById("36.1").value = tempCal13.toFixed(2);
      document.getElementById("40.1").value = tempCal14.toFixed(2);

      document.getElementById("188").value = B1.toFixed(3);
      document.getElementById("200").value = B2.toFixed(3);
      document.getElementById("212").value = B3.toFixed(3);
      document.getElementById("224").value = B4.toFixed(3);
      document.getElementById("236").value = B5.toFixed(3);
      document.getElementById("248").value = B6.toFixed(3);
      document.getElementById("260").value = B7.toFixed(3);
      document.getElementById("272").value = B8.toFixed(3);
      document.getElementById("284").value = B9.toFixed(3);

      document.getElementById("188.1").value = B10.toFixed(3);
      document.getElementById("200.1").value = B11.toFixed(3);
      document.getElementById("212.1").value = B12.toFixed(3);
      document.getElementById("224.1").value = B13.toFixed(3);
      document.getElementById("236.1").value = B14.toFixed(3);
      document.getElementById("248.1").value = B15.toFixed(3);
      document.getElementById("260.1").value = B16.toFixed(3);
      document.getElementById("272.1").value = B17.toFixed(3);
      document.getElementById("284.1").value = B18.toFixed(3);


      document.getElementById("189").value = Rdm1.toFixed(1);
      document.getElementById("201").value = Rdm2.toFixed(1);
      document.getElementById("213").value = Rdm3.toFixed(1);
      document.getElementById("225").value = Rdm4.toFixed(1);
      document.getElementById("237").value = Rdm5.toFixed(1);
      document.getElementById("249").value = Rdm6.toFixed(1);
      document.getElementById("261").value = Rdm7.toFixed(1);
      document.getElementById("273").value = Rdm8.toFixed(1);
      document.getElementById("285").value = Rdm9.toFixed(1);

      document.getElementById("189.1").value = Rdm10.toFixed(1);
      document.getElementById("201.1").value = Rdm11.toFixed(1);
      document.getElementById("213.1").value = Rdm12.toFixed(1);
      document.getElementById("225.1").value = Rdm13.toFixed(1);
      document.getElementById("237.1").value = Rdm14.toFixed(1);
      document.getElementById("249.1").value = Rdm15.toFixed(1);
      document.getElementById("261.1").value = Rdm16.toFixed(1);
      document.getElementById("273.1").value = Rdm17.toFixed(1);
      document.getElementById("285.1").value = Rdm18.toFixed(1);

      document.getElementById("190").value = Nm1.toFixed(2);
      document.getElementById("202").value = Nm2.toFixed(2);
      document.getElementById("214").value = Nm3.toFixed(2);
      document.getElementById("226").value = Nm4.toFixed(2);
      document.getElementById("238").value = Nm5.toFixed(2);
      document.getElementById("250").value = Nm6.toFixed(2);
      document.getElementById("262").value = Nm7.toFixed(2);
      document.getElementById("274").value = Nm8.toFixed(2);
      document.getElementById("286").value = Nm9.toFixed(2);

      document.getElementById("190.1").value = Nm10.toFixed(2);
      document.getElementById("202.1").value = Nm11.toFixed(2);
      document.getElementById("214.1").value = Nm12.toFixed(2);
      document.getElementById("226.1").value = Nm13.toFixed(2);
      document.getElementById("238.1").value = Nm14.toFixed(2);
      document.getElementById("250.1").value = Nm15.toFixed(2);
      document.getElementById("262.1").value = Nm16.toFixed(2);
      document.getElementById("274.1").value = Nm17.toFixed(2);
      document.getElementById("286.1").value = Nm18.toFixed(2);

      document.getElementById("191").value = Hm1.toFixed(2);
      document.getElementById("203").value = Hm2.toFixed(2);
      document.getElementById("215").value = Hm3.toFixed(2);
      document.getElementById("227").value = Hm4.toFixed(2);
      document.getElementById("239").value = Hm5.toFixed(2);
      document.getElementById("251").value = Hm6.toFixed(2);
      document.getElementById("263").value = Hm7.toFixed(2);
      document.getElementById("275").value = Hm8.toFixed(2);
      document.getElementById("287").value = Hm9.toFixed(2);

      document.getElementById("191.1").value = Hm10.toFixed(2);
      document.getElementById("203.1").value = Hm11.toFixed(2);
      document.getElementById("215.1").value = Hm12.toFixed(2);
      document.getElementById("227.1").value = Hm13.toFixed(2);
      document.getElementById("239.1").value = Hm14.toFixed(2);
      document.getElementById("251.1").value = Hm15.toFixed(2);
      document.getElementById("263.1").value = Hm16.toFixed(2);
      document.getElementById("275.1").value = Hm17.toFixed(2);
      document.getElementById("287.1").value = Hm18.toFixed(2);

      document.getElementById("192").value = Dm1.toFixed(4);
      document.getElementById("204").value = Dm2.toFixed(4);
      document.getElementById("216").value = Dm3.toFixed(4);
      document.getElementById("228").value = Dm4.toFixed(4);
      document.getElementById("240").value = Dm5.toFixed(4);
      document.getElementById("252").value = Dm6.toFixed(4);
      document.getElementById("264").value = Dm7.toFixed(4);
      document.getElementById("276").value = Dm8.toFixed(4);
      document.getElementById("288").value = Dm9.toFixed(4);

      document.getElementById("192.1").value = Dm10.toFixed(4);
      document.getElementById("204.1").value = Dm11.toFixed(4);
      document.getElementById("216.1").value = Dm12.toFixed(4);
      document.getElementById("228.1").value = Dm13.toFixed(4);
      document.getElementById("240.1").value = Dm14.toFixed(4);
      document.getElementById("252.1").value = Dm15.toFixed(4);
      document.getElementById("264.1").value = Dm16.toFixed(4);
      document.getElementById("276.1").value = Dm17.toFixed(4);
      document.getElementById("288.1").value = Dm18.toFixed(4);

      document.getElementById("289").value = porcentajeinter50.toFixed(0);
      document.getElementById("289.1").value = porcentajeinter25 .toFixed(0);
      document.getElementById("290").value = PerDisp.toFixed(0);
      document.getElementById("291").value = clasificacion;





                 }


              </script>
                
                <script>
                    function enviarData(event) {
                      event.preventDefault()
                      $.ajax({
                        url: "grainsize.js",
                        type: "POST",
                        data: $("#mxy").serialize(),
                        success: function(data) {
                          $("#resultado").html(data);
                        }
                      });
                    }
                  </script>
                
                  <script src="https://fastly.jsdelivr.net/npm/echarts@5.4.2/dist/echarts.min.js"></script>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                  <script src="grainsize.js"></script>
            </div>
          </form>
        </div>
      </div>
                
<?php include_once('layouts/footer.php'); ?>