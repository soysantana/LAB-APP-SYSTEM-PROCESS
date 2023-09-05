<?php
$page_title = 'Pinhole Test';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);
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
          <span>Pinhole Test Calculation</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="#" onsubmit="calcular()">

            <table class="table table-bordered">
                <thead>
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
            <select class="form-control" type = "text" name="method" id="">
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
            <input class="form-control" name="Test_Start_Date" type="date">
          </div>

          <div class="panel-body">
            <div class="col-md-12">
            </div>
          </div>
          
          <div style="display: flex; flex-direction: row; justify-content: space-between;">
            <table class="table table-bordered border-primary" style="width:450px;">
              <thead>
              </thead>
              <caption>Testing Information</caption>
              <tbody>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content Before Test MC(%)</th>
                  <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="2" oninput="calcular()"></td>
                </tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Specific Gravity (Estimated or Measured)</th>
                  <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="3" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Max Dry Density (g/cm3)</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="4" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Optimum Moisture Content (%)</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="5" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Wet Soil + Mold (gr)</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="6" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Mold (gr)</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="7" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Wet Soil (gr)</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="8" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Logintud Del Specimen (cm)</th>
              <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="9" oninput="calcular()"></td>
            </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Vol Specimen (cm3)</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="10" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wet Density (g/cm3)</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="11" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Dry Density (g/cm3)</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="12" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">% Compaction</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="13" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content after test %</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="14" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wire Punch Diameter (mm)</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="15" oninput="calcular()"></td>
              </tr>
              <th scope="col" style="text-align: center;">Compaction Type</th>
              <th scope="col" style="text-align: center;">Harvard miniature compaction Apparatus</th>
            </tbody>
            </table>
            </div>
            
            <div style="display: flex; flex-direction: row-reverse; justify-content: space-around; margin-left: 10%; margin-top: -750px;">
            <table class="table table-bordered border-primary" style="width:450px;">
              <thead>
              </thead>
              <caption></caption>
              <th style="font-size: 17px; text-align: center;" scope="row" colspan="9">Moisture Content before test MC(%)</th>
              <tbody>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Trial No</th>
                  <td><input disabled type="text" value="1" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Name</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Oven Temperature (°C)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Wet Soil (g)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="16" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Dry Soil (g)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="17" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Water, Ww (g)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="18" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare (g)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="19" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Dry Soil, Ws (g)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="20" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content (%)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="21" oninput="calcular()"></td>
              </tr>
              </tbody>
            </table>
            </div>

            <div style="display: flex; flex-direction: row-reverse; justify-content: space-around; margin-left: 10%;">
              <table class="table table-bordered border-primary" style="width:450px;">
                <thead>
                </thead>
                <caption></caption>
                <th style="font-size: 17px; text-align: center;" scope="row" colspan="9">Moisture Content after test, %</th>
                <tbody>
                  <tr>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Trial No</th>
                    <td><input disabled type="text" value="2" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Name</th>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Oven Temperature (°C)</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Wet Soil (g)</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="22" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Dry Soil (g)</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="23" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Water, Ww (g)</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="24" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare (g)</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="25" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Dry Soil, Ws (g)</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="26" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content (%)</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="27" oninput="calcular()"></td>
                </tr>
                </tbody>
              </table>
              </div>


              <div style="display: flex; flex-direction: row-reverse; justify-content: space-around; margin-left: 10%; margin-block-end: -7%;">
                <table class="table table-bordered border-primary" style="width:450px;">
                  <thead>
                  </thead>
                  <caption></caption>
                  <tbody>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Hole Size After Test (mm)</th>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Dispersive Classification</th>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                  </tbody>
                </table>
              </div>
        

              <div style="display: flex; flex-direction: row-reverse; justify-content: space-around; margin-left: 30%; margin-top: 10%; margin-bottom: -50%;">
                <div id="pinhole_graph" style="height: 650px; width: 900px;"></div>
                </div>


             <div style="display: flex; flex-direction: row; justify-content: space-between;">
              <table class="table table-bordered border-primary" style="width: 450px;">
                <thead>
                <th style="font-size: 20px; text-align: center;" scope="row" colspan="9">Flow</th>
                  <tr>
                    <th scope="col">Head</th>
                    <th scope="col">mL</th>
                    <th scope="col">Seg</th>
                    <th scope="col">Flow Rate</th>
                    <th scope="col">From Side</th>
                    <th scope="col">From Top</th>
                    <th scope="col">Observation</th>
                  </tr>
                </thead>
              <tbody>
                <tr>
                  <th scope="row" rowspan="12">50</th>
                  <td>10</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="28" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="29" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="30" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="31" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="32" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="33" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td>25</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="34" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="35" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td>25</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="36" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="37" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td>25</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="38" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="39" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="40" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="41" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="42" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="43" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="44" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="45" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="46" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="47" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="48" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="49" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="50" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="51" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="52" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <th scope="row" rowspan="5">180</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="53" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="54" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="55" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="56" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="57" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="58" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="59" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="60" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="61" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="62" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <th scope="row" rowspan="5">380</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="63" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="64" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="65" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="66" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="67" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="68" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="69" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="70" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="71" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="72" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
              </tbody>
              </table>
             </div>

             
             <div style="display: flex; flex-direction: column-reverse; margin-bottom: 2%;">
              <span>50 mm, 10 mL Effluent</span>
              <div>
                <form action="" method="POST" enctype="multipart/form-data">
                <div>
                  <div>
                    <span>
                      <input type="file" name="" id="fileToUpload" multiple="multiple" class="btn btn-primary"/>
                   </span>
  
                   <div style="display: table-footer-group;" id="imatge"></div>
                 </div>
                </div>
            </div>
            </div>
            
            <div style="display: flex; flex-direction: column-reverse; margin-bottom: -9%;">
              <span>50 mm mL Effluent</span>
              <div>
                <form action="" method="POST" enctype="multipart/form-data">
                <div>
                  <div>
                    <span>
                      <input type="file" name="" id="fileToUpload" multiple="multiple" class="btn btn-primary"/>
                   </span>
  
                   <div style="display: table-footer-group;" id="imatge"></div>
                 </div>
                </div>
            </div>
            </div>

            <div style="display: flex; flex-direction: column-reverse; flex-wrap: wrap; align-content: center; align-items: flex-start; margin-bottom: 2%;">
              <span>50 mm 25 mL Effluent </span>
              <div>
                <form action="" method="POST" enctype="multipart/form-data">
                <div>
                  <div>
                    <span>
                      <input type="file" name="" id="fileToUpload" multiple="multiple" class="btn btn-primary"/>
                   </span>
  
                   <div style="display: table-footer-group;" id="imatg"></div>
                 </div>
                </div>
            </div>
            </div>


            <div style="display: flex; flex-direction: column-reverse; flex-wrap: wrap; align-content: center; align-items: flex-start; margin-bottom: -9%;">
              <span>50 mm 60 mL Effluent </span>
              <div>
                <form action="" method="POST" enctype="multipart/form-data">
                <div>
                  <div>
                    <span>
                      <input type="file" name="" id="fileToUpload" multiple="multiple" class="btn btn-primary"/>
                   </span>
  
                   <div style="display: table-footer-group;" id="imatg"></div>
                 </div>
                </div>
            </div>
            </div>

            <div style="display: flex; flex-direction: column-reverse; flex-wrap: wrap; align-items: flex-start; align-content: flex-end; margin-bottom: 2%;">
              <span>50 mm 60 mL Effluent </span>
              <div>
                <form action="" method="POST" enctype="multipart/form-data">
                <div>
                  <div>
                    <span>
                      <input type="file" name="" id="fileToUpload" multiple="multiple" class="btn btn-primary"/>
                   </span>
  
                   <div style="display: table-footer-group;" id="imatge"></div>
                 </div>
                </div>
            </div>
            </div>

            <div style="display: flex; flex-direction: column-reverse; flex-wrap: wrap; align-items: flex-start; align-content: flex-end; margin-bottom: 1%;">
              <span>50 mm 80 mL Effluent</span>
              <div>
                <form action="" method="POST" enctype="multipart/form-data">
                <div>
                  <div>
                    <span>
                      <input type="file" name="" id="fileToUpload" multiple="multiple" class="btn btn-primary"/>
                   </span>
  
                   <div style="display: table-footer-group;" id="imatge"></div>
                 </div>
                </div>
            </div>
            </div>


            </div>
          </form>
        </div>
      </div>

      <script>
        document.getElementById("fileToUpload").onchange = function(e) {   
         
         // Creamos el objeto de la clase FileReader 
         let reader = new FileReader();
         
         // Leemos el archivo subido y se lo pasamos a nuestro fileReader   
         reader.readAsDataURL(e.target.files[0]);   
         
         // Le decimos que cuando este listo ejecute el código interno 
         reader.onload = function(){ 
          
          let preview = document.getElementById('imatge'), 
          image = document.createElement('img'); 
          image.src = reader.result; 
          preview.innerHTML = ''; 
          preview.append(image);
         
         }; 
        
        }
        </script>


      <script>
        function calcular() {
      
          //before trial no.1
          tare_plus_wet_soil_before = parseFloat(document.getElementById("16").value);
          tare_plus_dry_soil_before = parseFloat(document.getElementById("17").value);
          tare_before = parseFloat(document.getElementById("19").value);


          //calcular before no.1
          var water_ww_before = tare_plus_wet_soil_before - tare_plus_dry_soil_before;
          var dry_soil_ws_before = tare_plus_dry_soil_before - tare_before;
          var mc_before = (water_ww_before / dry_soil_ws_before)*100;


          //resultado before no.1
          document.getElementById("18").value = water_ww_before.toFixed(2);
          document.getElementById("20").value = dry_soil_ws_before.toFixed(2);
          document.getElementById("21").value = mc_before.toFixed(2);


          

          //after trial no.2
          tare_plus_wet_soil_after = parseFloat(document.getElementById("22").value);
          tare_plus_dry_soil_after = parseFloat(document.getElementById("23").value);
          tare_after = parseFloat(document.getElementById("25").value);


          //calcular after no.2
          var water_ww_after = tare_plus_wet_soil_after - tare_plus_dry_soil_after;
          var dry_soil_ws_after = tare_plus_dry_soil_after - tare_after;
          var mc_after = (water_ww_after / dry_soil_ws_after)*100;


          //resultado after no.2
          document.getElementById("24").value = water_ww_after.toFixed(2);
          document.getElementById("26").value = dry_soil_ws_after.toFixed(2);
          document.getElementById("27").value = mc_after.toFixed(2);




          //obtener valores de input
          max_dry_density_gcm3 = parseFloat(document.getElementById("4").value);
          wt_wet_soil_mold_gr = parseFloat(document.getElementById("6").value);
          wt_mold_gr = parseFloat(document.getElementById("7").value);
          specimen_length = parseFloat(document.getElementById("9").value);


          //calculos
          var wt_wet_soil_gr =  wt_wet_soil_mold_gr - wt_mold_gr;
          var vol_specimen_cm3 =  Math.pow(3.322 / 2, 2) * specimen_length * 3.14159265358979;
          var wet_density_cm3 = wt_wet_soil_gr / vol_specimen_cm3;
          var dry_density_gcm3 = wet_density_cm3  / (1+(mc_before /100));
          var compaction = ( dry_density_gcm3 / max_dry_density_gcm3 ) * 100;

          //resultados
          document.getElementById("8").value = wt_wet_soil_gr.toFixed(2);
          document.getElementById("10").value = vol_specimen_cm3.toFixed(2);
          document.getElementById("11").value = wet_density_cm3.toFixed(2);
          document.getElementById("12").value = dry_density_gcm3.toFixed(2); 
          document.getElementById("13").value = compaction.toFixed(2); 

          document.getElementById("14").value = mc_after.toFixed(2);
          document.getElementById("2").value = mc_before.toFixed(2);


          //flow valores input
          seg1 = parseFloat(document.getElementById("28").value);
          seg2 = parseFloat(document.getElementById("30").value);
          seg3 = parseFloat(document.getElementById("32").value);
          seg4 = parseFloat(document.getElementById("34").value);
          seg5 = parseFloat(document.getElementById("36").value);
          seg6 = parseFloat(document.getElementById("38").value);

          ml1 = parseFloat(document.getElementById("40").value);
          seg7 = parseFloat(document.getElementById("41").value);

          ml2 = parseFloat(document.getElementById("43").value);
          ml3 = parseFloat(document.getElementById("45").value);
          ml4 = parseFloat(document.getElementById("47").value);
          ml5 = parseFloat(document.getElementById("49").value);
          ml6 = parseFloat(document.getElementById("51").value);
          ml7 = parseFloat(document.getElementById("53").value);
          ml8 = parseFloat(document.getElementById("55").value);
          ml9 = parseFloat(document.getElementById("57").value);
          ml10 = parseFloat(document.getElementById("59").value);
          ml11 = parseFloat(document.getElementById("61").value);
          ml12 = parseFloat(document.getElementById("63").value);
          ml13 = parseFloat(document.getElementById("65").value);
          ml14 = parseFloat(document.getElementById("67").value);
          ml15 = parseFloat(document.getElementById("69").value);
          ml16 = parseFloat(document.getElementById("71").value);


          //flow calculo
          var flowrate1 = 10 / seg1;
          var flowrate2 = 10 / seg2;
          var flowrate3 = 10 / seg3;
          var flowrate4 = 25 / seg4;
          var flowrate5 = 25 / seg5;
          var flowrate6 = 25 / seg6;

          var flowrate7 = ml1 / seg7;

          var flowrate8 = ml2 / 60;
          var flowrate9 = ml3 / 60;
          var flowrate10 = ml4 / 60;
          var flowrate11 = ml5 / 60;
          var flowrate12 = ml6 / 60;
          var flowrate13 = ml7 / 60;
          var flowrate14 = ml8 / 60;
          var flowrate15 = ml9 / 60;
          var flowrate16 = ml10 / 60;
          var flowrate17 = ml11 / 60;
          var flowrate18 = ml12 / 60;
          var flowrate19 = ml13 / 60;
          var flowrate20 = ml14 / 60;
          var flowrate21 = ml15 / 60;
          var flowrate22 = ml16 / 60;




          //flow resuktado
          document.getElementById("29").value = flowrate1.toFixed(2);
          document.getElementById("31").value = flowrate2.toFixed(2);
          document.getElementById("33").value = flowrate3.toFixed(2);
          document.getElementById("35").value = flowrate4.toFixed(2);
          document.getElementById("37").value = flowrate5.toFixed(2);
          document.getElementById("39").value = flowrate6.toFixed(2);

          document.getElementById("42").value = flowrate7.toFixed(2);

          document.getElementById("44").value = flowrate8.toFixed(2);
          document.getElementById("46").value = flowrate9.toFixed(2);
          document.getElementById("48").value = flowrate10.toFixed(2);
          document.getElementById("50").value = flowrate11.toFixed(2);
          document.getElementById("52").value = flowrate12.toFixed(2);
          document.getElementById("54").value = flowrate13.toFixed(2);
          document.getElementById("56").value = flowrate14.toFixed(2);
          document.getElementById("58").value = flowrate15.toFixed(2);
          document.getElementById("60").value = flowrate16.toFixed(2);
          document.getElementById("62").value = flowrate17.toFixed(2);
          document.getElementById("64").value = flowrate18.toFixed(2);
          document.getElementById("66").value = flowrate19.toFixed(2);
          document.getElementById("68").value = flowrate20.toFixed(2);
          document.getElementById("70").value = flowrate21.toFixed(2);
          document.getElementById("72").value = flowrate22.toFixed(2);


          //graph pinhole
          var point_seg = seg1 * 0.0166667;




        }



      </script>

<script>
  function enviarData(event) {
    event.preventDefault()
    $.ajax({
      url: "libs/js/pinhole.js",
      type: "POST",
      data: $("#47").serialize(),
      success: function(data) {
        $("#resultado").html(data);
      }
    });
  }
</script>

<button type="submit" name="grafico" class="btn btn-primary" onclick="enviarData(event),enviarData2(event) ">Graficar</button>

<script src="https://fastly.jsdelivr.net/npm/echarts@5.4.2/dist/echarts.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="libs/js/pinhole.js"></script>

                
<?php include_once('layouts/footer.php'); ?>