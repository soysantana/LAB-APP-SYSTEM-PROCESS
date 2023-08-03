<?php
$page_title = 'Hydrometer';
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
          <span>Hydrometer</span>
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
          <div></div>
          <div style="display: flex; flex-direction: row; justify-content: space-between;">
            <table class="table table-bordered border-primary" style="width:450px;">
              <thead>
              </thead>
              <caption>Hydrometer Analysis</caption>
              <tbody>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Dispersing Agent</th>
                  <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Amount used (g)</th>
                  <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Temperature of test, T (ºC)</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Viscosity of water (g*s/cm2)</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Mass density of water Calibrated (ᵨc )</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Acceleration (cm/s2)</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Volume of suspension (Vsp) cm3</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Meniscus Correction, Cm</th>
              <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Percent Passing No. 200 sieve</th>
                <td><input type="text" style="border: none;" size="10" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
            </tbody>
            </table>
            </div>

            <div style="display: flex; justify-content: flex-end; margin-top: -28%;">
              <table class="table table-bordered border-primary" style="width:450px;">
                <thead>
                </thead>
                <caption>Atterber Limit Results</caption>
                <tbody>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Liquid Limit (%)</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Plasticity Index (%)</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                </tbody>
              </table>
            </div>

            <div style="display: flex; justify-content: flex-end;">
              <table class="table table-bordered border-primary" style="width:450px;">
                <thead>
                </thead>
                <caption>Specific Gravity</caption>
                <tbody>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">SG</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                </tbody>
              </table>
            </div>

            <div style="display: flex; flex-direction: row-reverse; justify-content: space-around; margin-top: -15%;">
              <table class="table table-bordered border-primary" style="width:450px;">
              <thead>
              </thead>
              <caption>Moisture Content Test</caption>
              <tbody>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Trial No</th>
                  <td><input disabled type="text" value="A" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Name</th>
                  <td><input type="text" value="110 º C" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Oven Temperature (°C)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Wet Soil (gr)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Dry Soil (gr)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Water, Ww (gr)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare (gr)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Dry Soil, Ws (gr)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content (%)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              </tbody>
            </table>
            </div>




            <div style="display: flex; justify-content: flex-end; margin-top: -13%;">
              <table class="table table-bordered border-primary" style="width: 530px;">
              <thead>
              </thead>
              <caption></caption>
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
                <td><input type="text" style="border: none;" size="9" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              </tr>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              </tr>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              </tbody>
            </table>
            </div>




            <div style="display: flex; justify-content: center; margin-top: -21%; margin-right: 6%;">
              <table class="table table-bordered border-primary" style="width: 350px;">
              <thead>
              </thead>
              <tbody>
              
              <tr>
              <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Container</th>
              <td><input type="text" style="border: none;" size="12" style="background: transparent;"id=""></td>
              </tr>
              
              <tr>
              <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Wet Soil + Tare (gr):</th>
              <td><input type="text" style="border: none;" size="12" style="background: transparent;"id=""></td>
              </tr>
              
              <tr>
              <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil + Tare (gr):</th>
              <td><input type="text" style="border: none;" size="12" style="background: transparent;"id=""></td>
              </tr>
              
              <tr>
              <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row"> Tare (gr):</th>
              <td><input type="text" style="border: none;" size="12" style="background: transparent;"id=""></td>
              </tr>
              
              <tr>
              <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil (gr):</th>
              <td><input type="text" style="border: none;" size="12" style="background: transparent;"id=""></td>
              </tr>
              
              <tr>
              <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Washed (gr):</th>
              <td><input type="text" style="border: none;" size="12" style="background: transparent;"id=""></td>
              </tr>
              
              <tr>
              <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Wash Pan (gr):</th>
              <td><input type="text" style="border: none;" size="12" style="background: transparent;"id=""></td>
              </tr>
              </table>
            </div>



            <div style="display: flex; justify-content: space-around; margin-right: 3%;">
              <table class="table table-bordered border-primary" style="width:400px; height: 150px;">
                <thead>
                </thead>
                <caption style="text-align: center;">Classification of Soils as per USCS,<br>ASTM designation D 2487-06</caption>
                <tbody>
                  <td><input type="text" style="border: none; text-align: center;" size="40" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <td><input type="text" style="border: none; text-align: center;" size="40" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
                </tbody>
              </table>
            </div>


            <div style="margin-left: 1%; margin-top: -34%;">
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
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
  
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">12"</th>
          <td>304.8</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">10"</th>
          <td>254</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">8"</th>
          <td>203.2</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">6"</th>
          <td>152.4</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">5"</th>
          <td>127</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">4"</th>
          <td>101.6</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">3"</th>
          <td>76.2</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">2.5"</th>
          <td>63.50</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">2"</th>
          <td>50.80</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">1.5"</th>
          <td>38.1</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">1"</th>
          <td>25.4</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">3/4"</th>
          <td>19.5</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">1/2"</th>
          <td>12.7</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">3/8"</th>
          <td>9.5</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 4</th>
          <td>4.75</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 10</th>
          <td>2.00</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 16</th>
          <td>1.18</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 20</th>
          <td>0.85</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 50</th>
          <td>0.30</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 60</th>
          <td>0.25</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">No. 100</th>
          <td>0.15</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">No. 140</th>
          <td>0.106</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">No. 200</th>
          <td>0.075</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row" colspan="2">Pan</th>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row" colspan="2"> Total Pan</th>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
        </tr>
      </tbody>
    </table>
            </div>
            




            <div style="display: flex; justify-content: flex-end; margin-top: -53%;">
              <table class="table table-bordered border-primary" style="width:450px;">
              <thead>
              </thead>
              <caption>Summary Grain Size Distribution Parameter</caption>
              <tbody>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Coarser than Gravel%</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Gravel%</th>
                  <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Sand%</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Fines%</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">D10 (mm) =</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">D15 (mm) =</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">D30 (mm) =</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">D60 (mm) =</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">D85 (mm) =</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Cc:</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Cu:</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              </tbody>
            </table>
            </div>


              

            <div style="display: flex; justify-content: flex-end;">
              <div id="grain_size" style="height: 600px; width: 1070px;"></div>
            </div>
           



              <div style="display: flex; flex-direction: row-reverse; justify-content: space-around;">
                <table class="table table-bordered border-primary" style="width: 90%;">
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
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                  <tr>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                    <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                </tbody>
              </table>
              </div>
              

                <button type="submit" name="add_mcoven" class="btn btn-danger">Registrar ensayo</button>
                <button type="submit" name="grafico" class="btn btn-primary" onclick="enviarData(event)">Graficar</button>
                </form>
                </div>
                </div>
                </div>
                </div>
                
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