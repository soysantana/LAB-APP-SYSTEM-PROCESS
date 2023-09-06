<?php
$page_title = 'Consolidation';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);
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



<div>
    <table class="table table-bordered" style="width: 60%;">
        <thead>
            <caption></caption>
        </thead>
        <tbody>
            <tr>
                <th scope="col" rowspan="3">Date</th>
                <th scope="col" rowspan="3">Elapsed time (suggested)</th>
                <th style="text-align: center;" scope="row" colspan="6">Mass on hangar</th>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="MaxKgLeeNo" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="MaxKgLeeNo1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="MaxKgLeeNo2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="MaxKgLeeNo3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="MaxKgLeeNo4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="MaxKgLeeNo5" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="text-align: center;" scope="row">mm</th>
                <th style="text-align: center;" scope="row">mm</th>
                <th style="text-align: center;" scope="row">mm</th>
                <th style="text-align: center;" scope="row">mm</th>
                <th style="text-align: center;" scope="row">mm</th>
                <th style="text-align: center;" scope="row">mm</th>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">Initial</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no1"  oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no1" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">6 sec</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no2" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">15 sec</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no3" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">30 sec</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no4" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">60 sec</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no5" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">2 min</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no6" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">4 min</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no7" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no7" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no7" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no7" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no7" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no7" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">8 min</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no8" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no8" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no8" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no8" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no8" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no8" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">15 min</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no9" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no9" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no9" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no9" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no9" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no9" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">30 min</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no10" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no10" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no10" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no10" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no10" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no10" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">60 min</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no11" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no11" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no11" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no11" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no11" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no11" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">2 hr</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no12" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no12" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no12" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no12" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no12" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no12" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">4 hr</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no13" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no13" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no13" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no13" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no13" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no13" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">8 hr</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no14" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no14" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no14" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no14" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no14" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no14" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">16 hr</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no15" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no15" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no15" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no15" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no15" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no15" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" name="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">24 hr</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum1" id="6-sec-no16" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum2" id="Val2-kg-no16" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum3" id="Val3-kg-no16" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum4" id="Val4-kg-no16" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum5" id="Val5-kg-no16" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" name="MaxNum6" id="Val6-kg-no16" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="
    display: flex;
    justify-content: flex-end;
    margin-top: -60.8%;
    margin-right: 14.5%;
">
    <table class="table table-bordered" style="width: 30%;">
        <thead>
            <tr><th style="text-align: center;" colspan="2">Determine moisture Content of sample cut adjacent to consolidation sample</th>
        </tr></thead>
        <tbody>
            <tr>
                <th>Tare No.</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Mass of tare (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Mass-Tare-gr" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Mass of wet soil + tare (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Mass-Soil-Tare-gr" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Mass of dry soil + tare</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Mass-Dry-Tare-gr" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Mass of water  (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Mass-Water-gr" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Mass of dry soil (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Mass-Dry-gr" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Initial Moisture conten (%) Wfp</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="initial-MC-wfp" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="
    display: flex;
    justify-content: flex-end;
    margin-top: -18.5%;
    margin-right: 0.6%;
">
    <table class="table table-bordered" style="width: 14%;">
        <thead>
            <tr><th style="text-align: center;" colspan="2">Ring Properties</th>
        </tr></thead>
        <tbody>
            <tr>
                <th scope="row">Diameter, cm</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Diameter-cm" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Height, cm</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Height-cm" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Area A, cm2</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Area-cm2" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Volume, Vo, cm3</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Volume-cm3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Weight, (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Weight-gr" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="
    display: flex;
    justify-content: flex-end;
    margin-right: 14.5%;
    margin-top: -1.3%;
    margin-bottom: 13.8%;
">
    <table class="table table-bordered" style="width: 30%;">
        <thead>
            <tr><th style="text-align: center;" colspan="2">Specimen Sample</th>
        </tr></thead>
        <tbody>
            <tr>
                <th scope="row">Initial Mois mass + Ring (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="8" id="In-Ms-Mass-Rg-gr" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Initial Mois Mass</th>
                <td><input type="text" style="border: none; background: transparent;" size="8" id="In-Ms-Mass" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Final Dry mass + Ring (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="8" id="Fin-Dry-Mass-Rg-gr" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">final Dry mass (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="8" id="Fin-Dry-Mass" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Initial Dry Density (g/cm3)</th>
                <td><input type="text" style="border: none; background: transparent;" size="8" id="In-Dry-Density-gcm3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Dry Unit Weight ϒd (KN/m3)</th>
                <td><input type="text" style="border: none; background: transparent;" size="8" id="Dry-Unit-Wt-knm3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Density of water ᵨw ( gr/cm3)</th>
                <td><input type="text" style="border: none; background: transparent;" size="8" id="Density-Water-grcm3" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="
    margin-left: 1%;
">
    <table class="table table-bordered" style="width: 20%;">
        <thead>
            <tr><th style="text-align: center;" colspan="2">Loading Decrements</th>
        </tr></thead>
        <tbody>
            <tr>
                <th style="text-align: center;"><p id="NameLoNo" oninput="calcular()"></p></th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Loand-Decrem-N1" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="text-align: center;"><p id="NameLoNo1" oninput="calcular()"></p></th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Loand-Decrem-N2" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="text-align: center;"><p id="NameLoNo2" oninput="calcular()"></p></th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Loand-Decrem-N3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="text-align: center;"><p id="NameLoNo3" oninput="calcular()"></p></th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Loand-Decrem-N4" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="text-align: center;">Factor Dial</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Factor-Dial" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>



<div style="
    display: flex;
    justify-content: center;
    margin-top: -17.1%;
    margin-right: 15%;
">
    <table class="table table-bordered" style="width: 30%;">
        <thead>
            <tr><th style="text-align: center;" colspan="3">Degree of Saturation</th>
        </tr></thead>
        <tbody>
            <tr>
                <td></td>
                <th style="text-align: center;">Initial</th>
                <th style="text-align: center;">final</th>
            </tr>
            <tr>
                <th>mass weight of Tare (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Mass-Wet-Tare-gr" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Mass-Wet-Tare-gr-Fin" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>mass weight wet soil + tare, (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Mass-Wet-Soil-Tare-gr" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Mass-Wet-Soil-Tare-gr-Fin" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>mass weight  dry soil + tare (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Mass-Dry-Soil-Tare-gr" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Mass-Dry-Soil-Tare-gr-Fin" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>mass of water (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Mss-Water-gr" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Mss-Water-gr-Fin" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Weight  wet soil (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Wet-Wt-Soil-gr" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Wet-Wt-Soil-gr-Fin" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Weight Dry soil (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Wet-Dry-Soil-gr" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Wet-Dry-Soil-gr-Fin" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Moisture Content (%)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="MC-Porce" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="MC-Porce-Fin" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Initial degree of Saturation (%)</th>
                <td colspan="2"><input type="text" style="border: none; background: transparent;" id="In-Degree-Saturation-Porce" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Final degree of Saturation (%)</th>
                <td colspan="2"><input type="text" style="border: none; background: transparent;" id="Fin-Degree-Saturation-Porce" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>



<div style="
    display: flex;
    justify-content: flex-end;
    margin-top: -35.4%;
    margin-right: 8%;
    margin-bottom: 11%;
">
    <table class="table table-bordered" style="width: 35%;">
        <thead>
            <tr><th style="text-align: center;" colspan="3">Soil Characteristic</th>
        </tr></thead>
        <tbody>
            <tr>
                <th>Specific Gravity, Gs</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Specific-Gravity-gs" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Dry mass of the total specimen, Md (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Dry-Mass-T-Specimen-Md-gr" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Volume of Solids, Vs (cm3)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Vol-of-Solids-Vs-cm3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>equivalent Height of Solids, Hs (cm)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Equi-Heig-Solids-Hs-cm" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Initial specimen height Ho, (cm)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="In-Specimen-Heig-Ho-cm" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Final specimen height  Hf, (cm)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Fin-Specimen-Heig-Hf-cm" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Void ratio before test, e0</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Void-Ratio-Before-eo" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Void ratio after test, ef</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Void-Ratio-After-ef" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>

<div style="display: flex; justify-content: end; margin-bottom: -30%;">
    <div id="consolidation-graph" style="width: 800px; height: 500px;"></div>
</div>


<div style="margin-left: 1%;">
    <table class="table table-bordered" style="width: 40%;">
        <thead></thead>
        <tbody>
            <tr>
                <th style="text-align: center;">Load Incement (Kg)</th>
                <th style="text-align: center;">σ'v (Kg/cm2)</th>
                <th style="text-align: center;">Reading Dial</th>
                <th style="text-align: center;">ΔH (mm)</th>
                <th style="text-align: center;">ε (ΔH/Ho)</th>
                <th style="text-align: center;">(ΔH/Hs)</th>
                <th style="text-align: center;">σ'v * ε</th>
                <th style="text-align: center;">e</th>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Load-No" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-Kg-cm2-No" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Read-Dial-No" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-mm-No" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="E-Ah-Ho-No" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-Hs-No" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-xE-No" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="e-No" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Load-No1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-Kg-cm2-No1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Read-Dial-No1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-mm-No1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="E-Ah-Ho-No1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-Hs-No1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-xE-No1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="e-No1" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Load-No2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-Kg-cm2-No2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Read-Dial-No2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-mm-No2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="E-Ah-Ho-No2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-Hs-No2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-xE-No2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="e-No2" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Load-No3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-Kg-cm2-No3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Read-Dial-No3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-mm-No3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="E-Ah-Ho-No3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-Hs-No3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-xE-No3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="e-No3" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Load-No4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-Kg-cm2-No4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Read-Dial-No4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-mm-No4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="E-Ah-Ho-No4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-Hs-No4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-xE-No4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="e-No4" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Load-No5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-Kg-cm2-No5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Read-Dial-No5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-mm-No5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="E-Ah-Ho-No5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-Hs-No5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-xE-No5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="e-No5" oninput="calcular()"></td>
            </tr>
<!--            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Load-No6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-Kg-cm2-No6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Read-Dial-No6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-mm-No6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="E-Ah-Ho-No6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-Hs-No6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-xE-No6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="e-No6" oninput="calcular()"></td>
            </tr>
            <tr> -->
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Load-No7" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-Kg-cm2-No7" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Read-Dial-No7" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-mm-No7" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="E-Ah-Ho-No7" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-Hs-No7" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-xE-No7" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="e-No7" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Load-No8" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-Kg-cm2-No8" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Read-Dial-No8" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-mm-No8" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="E-Ah-Ho-No8" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-Hs-No8" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-xE-No8" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="e-No8" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Load-No9" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-Kg-cm2-No9" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Read-Dial-No9" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-mm-No9" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="E-Ah-Ho-No9" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-Hs-No9" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-xE-No9" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="e-No9" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Load-No10" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-Kg-cm2-No10" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Read-Dial-No10" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-mm-No10" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="E-Ah-Ho-No10" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ah-Hs-No10" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Ov-xE-No10" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="e-No10" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="margin-left: 1%;">
    <table class="table table-bordered" style="width: 80%;">
        <thead></thead>
        <tbody>
            <tr>
                <th style="text-align: center;">Lectura Dial</th>
                <th style="text-align: center;">Deformacion (cm)</th>
                <th style="text-align: center;">Peso (Kg)</th>
                <th style="text-align: center;">σ' (Kg/cm2)</th>
                <th style="text-align: center;">Δσ' (Kg/cm2)</th>
                <th style="text-align: center;">Δh (mm)</th>
                <th style="text-align: center;">Δe</th>
                <th style="text-align: center;">e</th>
                <th style="text-align: center;">Δe / Δσ' (cm2 / Kg)</th>
                <th style="text-align: center;">Cv (cm2 / Kg)</th>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="LecDiNo" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="DeformationNo" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="PesoKgNo" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="oKgcm2No" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AoKgcm2No" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AhcmNo" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AeNo" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="EeNo" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AeAoNo" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Cvcm2KgNo" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="LecDiNo1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="DeformationNo1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="PesoKgNo1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="oKgcm2No1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AoKgcm2No1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AhcmNo1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AeNo1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="EeNo1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AeAoNo1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Cvcm2KgNo1" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="LecDiNo2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="DeformationNo2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="PesoKgNo2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="oKgcm2No2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AoKgcm2No2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AhcmNo2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AeNo2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="EeNo2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AeAoNo2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Cvcm2KgNo2" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="LecDiNo3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="DeformationNo3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="PesoKgNo3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="oKgcm2No3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AoKgcm2No3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AhcmNo3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AeNo3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="EeNo3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AeAoNo3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Cvcm2KgNo3" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="LecDiNo4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="DeformationNo4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="PesoKgNo4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="oKgcm2No4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AoKgcm2No4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AhcmNo4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AeNo4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="EeNo4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AeAoNo4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Cvcm2KgNo4" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="LecDiNo5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="DeformationNo5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="PesoKgNo5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="oKgcm2No5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AoKgcm2No5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AhcmNo5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AeNo5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="EeNo5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AeAoNo5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Cvcm2KgNo5" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="LecDiNo6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="DeformationNo6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="PesoKgNo6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="oKgcm2No6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AoKgcm2No6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AhcmNo6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AeNo6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="EeNo6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="AeAoNo6" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Cvcm2KgNo6" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>

<iframe src="collpse.php" style="width:100%; height:500px; border:0; border-radius: 4px; overflow:hidden;" title="graph-cassagrande-taylor"></iframe>

<div class="button">
    <button type="submit" name="Al" class="btn btn-danger">Registrar ensayo</button>
    <button type="submit" name="grafico" class="btn btn-primary" onclick="enviarData(event)">Graficar</button>
</div>

<script>
function convertToNumberOrZero(value) {
  const parsedValue = parseFloat(value);
  return isNaN(parsedValue) ? 0 : parsedValue;
}

    function calcularMaximoPorNombre(inputName) {
      const inputElements = document.getElementsByName(inputName);
      const numbers = Array.from(inputElements).map(input => parseFloat(input.value));
      return Math.max(...numbers);
    }

function calcular() {

  //MC Sample adjacent to consolidation
  MassTaregr = convertToNumberOrZero(document.getElementById("Mass-Tare-gr").value);
  MassSoilTaregr = convertToNumberOrZero(document.getElementById("Mass-Soil-Tare-gr").value);
  MassDryTaregr = convertToNumberOrZero(document.getElementById("Mass-Dry-Tare-gr").value);

  //Ring Properties
  Diametercm = convertToNumberOrZero(document.getElementById("Diameter-cm").value);
  Heightcm = convertToNumberOrZero(document.getElementById("Height-cm").value);
  Weightgr = convertToNumberOrZero(document.getElementById("Weight-gr").value);

  //Degree Saturation
  MassWetTaregrFin = convertToNumberOrZero(document.getElementById("Mass-Wet-Tare-gr-Fin").value);
  MassWetSoilTaregrFin = convertToNumberOrZero(document.getElementById("Mass-Wet-Soil-Tare-gr-Fin").value);
  MassDrySoilTaregrFin = convertToNumberOrZero(document.getElementById("Mass-Dry-Soil-Tare-gr-Fin").value);

  //Specimen Sample
  InMsMassRggr = convertToNumberOrZero(document.getElementById("In-Ms-Mass-Rg-gr").value);
  FinDryMassRggr = convertToNumberOrZero(document.getElementById("Fin-Dry-Mass-Rg-gr").value);
  DensityWatergrcm3 = convertToNumberOrZero(document.getElementById("Density-Water-grcm3").value);

  //Soil Characterisctic
  SpecificGravitygs = convertToNumberOrZero(document.getElementById("Specific-Gravity-gs").value);
  InSpecimenHeigHocm = convertToNumberOrZero(document.getElementById("In-Specimen-Heig-Ho-cm").value);
  FinSpecimenHeigHfcm = convertToNumberOrZero(document.getElementById("Fin-Specimen-Heig-Hf-cm").value);

  //Loading Decrements
  LoandDecremN1 = convertToNumberOrZero(document.getElementById("Loand-Decrem-N1").value);
  LoandDecremN2 = convertToNumberOrZero(document.getElementById("Loand-Decrem-N2").value);
  LoandDecremN3 = convertToNumberOrZero(document.getElementById("Loand-Decrem-N3").value);
  LoandDecremN4 = convertToNumberOrZero(document.getElementById("Loand-Decrem-N4").value);
  LondFactorDial = convertToNumberOrZero(document.getElementById("Factor-Dial").value);

  //Void Ratio and Strain Information
  LoadNo = convertToNumberOrZero(document.getElementById("Load-No").value);
  LoadNo1 = convertToNumberOrZero(document.getElementById("Load-No1").value);
  LoadNo2 = convertToNumberOrZero(document.getElementById("Load-No2").value);
  LoadNo3 = convertToNumberOrZero(document.getElementById("Load-No3").value);
  LoadNo4 = convertToNumberOrZero(document.getElementById("Load-No4").value);
  LoadNo5 = convertToNumberOrZero(document.getElementById("Load-No5").value);
  //LoadNo6 = convertToNumberOrZero(document.getElementById("Load-No6").value);
  LoadNo7 = convertToNumberOrZero(document.getElementById("Load-No7").value);
  LoadNo8 = convertToNumberOrZero(document.getElementById("Load-No8").value);
  LoadNo9 = convertToNumberOrZero(document.getElementById("Load-No9").value);
  LoadNo10 = convertToNumberOrZero(document.getElementById("Load-No10").value);
  OvKgcm2No = convertToNumberOrZero(document.getElementById("Ov-Kg-cm2-No").value);
  ReadDialNo = convertToNumberOrZero(document.getElementById("Read-Dial-No").value);

  //MC Adjacent
  let MassWatergr = MassSoilTaregr - MassDryTaregr;
  let MassDrygr = MassDryTaregr - MassTaregr;
  let initialMCwfp = (MassWatergr/MassDrygr)*100;

  //Ring Propert
  let Areacm2 = ((Math.pow(Diametercm, 2))/4)*Math.PI;
  let Volumecm3 = Heightcm * Areacm2;

  //Degree Saturation
  const MassWetTaregr = Weightgr;
  const MassWetSoilTaregr = InMsMassRggr;
  const MassDrySoilTaregr = FinDryMassRggr;
  let MssWatergr = MassWetSoilTaregr - MassDrySoilTaregr;
  let MssWatergrFin = MassWetSoilTaregrFin - MassDrySoilTaregrFin;
  let WetWtSoilgr = MassWetSoilTaregr - MassWetTaregr;
  let WetWtSoilgrFin = MassWetSoilTaregrFin - MassWetTaregrFin;
  let WetDrySoilgr = MassDrySoilTaregr - MassWetTaregr;
  let WetDrySoilgrFin = MassDrySoilTaregrFin - MassWetTaregrFin;
  let MCPorce = (MssWatergr/WetDrySoilgr)*100;
  let MCPorceFin = (MssWatergrFin/WetDrySoilgrFin)*100;

  //Soil Characterisctic
  let DryMassTSpecimenMdgr = WetWtSoilgrFin/(1+(initialMCwfp/100));
  let VolofSolidsVscm3 = DryMassTSpecimenMdgr / (SpecificGravitygs * DensityWatergrcm3);
  let EquiHeigSolidsHscm = VolofSolidsVscm3 / Areacm2;
  let VoidRatioBeforeeo = (Heightcm - EquiHeigSolidsHscm)/EquiHeigSolidsHscm;
  let VoidRatioAfteref = (FinSpecimenHeigHfcm - EquiHeigSolidsHscm)/EquiHeigSolidsHscm;
  
  //Specimen Sample
  let InMsMass = InMsMassRggr - Weightgr;
  let FinDryMass = FinDryMassRggr - Weightgr;
  let InDryDensitygcm3 = DryMassTSpecimenMdgr / Volumecm3;
  let DryUnitWtknm3 = 9.8 * InDryDensitygcm3;

  //Degree #2
  let InDegreeSaturationPorce = ((WetWtSoilgr-DryMassTSpecimenMdgr)/(Areacm2*DensityWatergrcm3*(InSpecimenHeigHocm-EquiHeigSolidsHscm)))*100;
  let FinDegreeSaturationPorce = ((WetWtSoilgrFin-DryMassTSpecimenMdgr)/(Areacm2*DensityWatergrcm3*(FinSpecimenHeigHfcm-EquiHeigSolidsHscm)))*100;

  //Obteniendo Valor maximo
  const maxGroup1 = calcularMaximoPorNombre('MaxNum1');
  const maxGroup2 = calcularMaximoPorNombre('MaxNum2');
  const maxGroup3 = calcularMaximoPorNombre('MaxNum3');
  const maxGroup4 = calcularMaximoPorNombre('MaxNum4');
  const maxGroup5 = calcularMaximoPorNombre('MaxNum5');
  const maxGroup6 = calcularMaximoPorNombre('MaxNum6');

  //Void Ratio and Strain
  const OvKgcm2No1 = (LoadNo1/Areacm2)*10;
  const OvKgcm2No2 = (LoadNo2/Areacm2)*10;
  const OvKgcm2No3 = (LoadNo3/Areacm2)*10;
  const OvKgcm2No4 = (LoadNo4/Areacm2)*10;
  const OvKgcm2No5 = (LoadNo5/Areacm2)*10;
  //const OvKgcm2No6 = (LoadNo6/Areacm2)*10;
  const OvKgcm2No7 = (LoadNo7/Areacm2)*10;
  const OvKgcm2No8 = (LoadNo8/Areacm2)*10;
  const OvKgcm2No9 = (LoadNo9/Areacm2)*10;
  const OvKgcm2No10 = (LoadNo10/Areacm2)*10;
  const ReadDialNo1 = maxGroup1;
  const ReadDialNo2 = maxGroup2;
  const ReadDialNo3 = maxGroup3;
  const ReadDialNo4 = maxGroup4;
  const ReadDialNo5 = maxGroup5;
 // const ReadDialNo6 = maxGroup6;
  const ReadDialNo7 = LoandDecremN1;
  const ReadDialNo8 = LoandDecremN2;
  const ReadDialNo9 = LoandDecremN3;
  const ReadDialNo10 = LoandDecremN4;
  const AhmmNo1 = ReadDialNo1*LondFactorDial;
  const AhmmNo2 = ReadDialNo2*LondFactorDial;
  const AhmmNo3 = ReadDialNo3*LondFactorDial;
  const AhmmNo4 = ReadDialNo4*LondFactorDial;
  const AhmmNo5 = ReadDialNo5*LondFactorDial;
  //const AhmmNo6 = ReadDialNo6*LondFactorDial;
  const AhmmNo7 = ReadDialNo7*LondFactorDial;
  const AhmmNo8 = ReadDialNo8*LondFactorDial;
  const AhmmNo9 = ReadDialNo9*LondFactorDial;
  const AhmmNo10 = ReadDialNo10*LondFactorDial;
  const EAhHoNo1 = AhmmNo1/InSpecimenHeigHocm;
  const EAhHoNo2 = AhmmNo2/InSpecimenHeigHocm;
  const EAhHoNo3 = AhmmNo3/InSpecimenHeigHocm;
  const EAhHoNo4 = AhmmNo4/InSpecimenHeigHocm;
  const EAhHoNo5 = AhmmNo5/InSpecimenHeigHocm;
  //const EAhHoNo6 = AhmmNo6/InSpecimenHeigHocm;
  const EAhHoNo7 = AhmmNo7/InSpecimenHeigHocm;
  const EAhHoNo8 = AhmmNo8/InSpecimenHeigHocm;
  const EAhHoNo9 = AhmmNo9/InSpecimenHeigHocm;
  const EAhHoNo10 = AhmmNo10/InSpecimenHeigHocm;
  const AhHsNo1 = AhmmNo1/EquiHeigSolidsHscm;
  const AhHsNo2 = AhmmNo2/EquiHeigSolidsHscm;
  const AhHsNo3 = AhmmNo3/EquiHeigSolidsHscm;
  const AhHsNo4 = AhmmNo4/EquiHeigSolidsHscm;
  const AhHsNo5 = AhmmNo5/EquiHeigSolidsHscm;
  //const AhHsNo6 = AhmmNo6/EquiHeigSolidsHscm;
  const AhHsNo7 = AhmmNo7/EquiHeigSolidsHscm;
  const AhHsNo8 = AhmmNo8/EquiHeigSolidsHscm;
  const AhHsNo9 = AhmmNo9/EquiHeigSolidsHscm;
  const AhHsNo10 = AhmmNo10/EquiHeigSolidsHscm;
  const OvxENo1 = OvKgcm2No1*EAhHoNo1;
  const OvxENo2 = OvKgcm2No2*EAhHoNo2;
  const OvxENo3 = OvKgcm2No3*EAhHoNo3;
  const OvxENo4 = OvKgcm2No4*EAhHoNo4;
  const OvxENo5 = OvKgcm2No5*EAhHoNo5;
  //const OvxENo6 = OvKgcm2No6*EAhHoNo6;
  const OvxENo7 = OvKgcm2No7*EAhHoNo7;
  const OvxENo8 = OvKgcm2No8*EAhHoNo8;
  const OvxENo9 = OvKgcm2No9*EAhHoNo9;
  const OvxENo10 = OvKgcm2No10*EAhHoNo10;
  const eNo1 = VoidRatioBeforeeo-AhHsNo1;
  const eNo2 = VoidRatioBeforeeo-AhHsNo2;
  const eNo3 = VoidRatioBeforeeo-AhHsNo3;
  const eNo4 = VoidRatioBeforeeo-AhHsNo4;
  const eNo5 = VoidRatioBeforeeo-AhHsNo5;
  //const eNo6 = VoidRatioBeforeeo-AhHsNo6;
  const eNo7 = VoidRatioBeforeeo-AhHsNo7;
  const eNo8 = VoidRatioBeforeeo-AhHsNo8;
  const eNo9 = VoidRatioBeforeeo-AhHsNo9;
  const eNo10 = VoidRatioBeforeeo-AhHsNo10;

  //Void Ratio Const
  const AhmmNo = ReadDialNo*LondFactorDial;
  const EAhHoNo = AhmmNo/InSpecimenHeigHocm;
  const AhHsNo = AhmmNo/EquiHeigSolidsHscm;
  const OvxENo = OvKgcm2No*EAhHoNo;
  const eNo = VoidRatioBeforeeo-AhHsNo;

  //Ultima tabla
  const LecDiNo =  ReadDialNo;
  const LecDiNo1 =  ReadDialNo1;
  const LecDiNo2 =  ReadDialNo2;
  const LecDiNo3 =  ReadDialNo3;
  const LecDiNo4 =  ReadDialNo4;
  const LecDiNo5 =  ReadDialNo5;
  const DeformationNo =  (LecDiNo*LondFactorDial)*10;
  const DeformationNo1 =  (LecDiNo1*LondFactorDial)*10;
  const DeformationNo2 =  (LecDiNo2*LondFactorDial)*10;
  const DeformationNo3 =  (LecDiNo3*LondFactorDial)*10;
  const DeformationNo4 =  (LecDiNo4*LondFactorDial)*10;
  const DeformationNo5 =  (LecDiNo5*LondFactorDial)*10;
  const PesoKgNo =  LoadNo;
  const PesoKgNo1 =  LoadNo1;
  const PesoKgNo2 =  LoadNo2;
  const PesoKgNo3 =  LoadNo3;
  const PesoKgNo4 =  LoadNo4;
  const PesoKgNo5 =  LoadNo5;
  const oKgcm2No =  OvKgcm2No;
  const oKgcm2No1 =  OvKgcm2No1;
  const oKgcm2No2 =  OvKgcm2No2;
  const oKgcm2No3 =  OvKgcm2No3;
  const oKgcm2No4 =  OvKgcm2No4;
  const oKgcm2No5 =  OvKgcm2No5;
  const AoKgcm2No =  oKgcm2No;
  const AoKgcm2No1 =  oKgcm2No1-oKgcm2No;
  const AoKgcm2No2 =  oKgcm2No2-oKgcm2No1;
  const AoKgcm2No3 =  oKgcm2No3-oKgcm2No2;
  const AoKgcm2No4 =  oKgcm2No4-oKgcm2No3;
  const AoKgcm2No5 =  oKgcm2No5-oKgcm2No4;
  const AhcmNo =  DeformationNo;
  const AhcmNo1 =  DeformationNo1-DeformationNo;
  const AhcmNo2 =  DeformationNo2-DeformationNo1;
  const AhcmNo3 =  DeformationNo3-DeformationNo2;
  const AhcmNo4 =  DeformationNo4-DeformationNo3;
  const AhcmNo5 =  DeformationNo5-DeformationNo4;
  const AeNo =  AhcmNo;
  const AeNo1 =  (AhcmNo1/InSpecimenHeigHocm)*(1+VoidRatioBeforeeo);
  const AeNo2 =  (AhcmNo2/InSpecimenHeigHocm)*(1+VoidRatioBeforeeo);
  const AeNo3 =  (AhcmNo3/InSpecimenHeigHocm)*(1+VoidRatioBeforeeo);
  const AeNo4 =  (AhcmNo4/InSpecimenHeigHocm)*(1+VoidRatioBeforeeo);
  const AeNo5 =  (AhcmNo5/InSpecimenHeigHocm)*(1+VoidRatioBeforeeo);
  const EeNo =  VoidRatioBeforeeo;
  const EeNo1 =  EeNo-AeNo1;
  const EeNo2 =  EeNo1-AeNo2;
  const EeNo3 =  EeNo2-AeNo3;
  const EeNo4 =  EeNo3-AeNo4;
  const EeNo5 =  EeNo4-AeNo5;
  const AeAoNo =  AeNo/AoKgcm2No;
  const AeAoNo1 =  AeNo1/AoKgcm2No1;
  const AeAoNo2 =  AeNo2/AoKgcm2No2;
  const AeAoNo3 =  AeNo3/AoKgcm2No3;
  const AeAoNo4 =  AeNo4/AoKgcm2No4;
  const AeAoNo5 =  AeNo5/AoKgcm2No5;
  const Cvcm2KgNo =  AeAoNo*1/(1+VoidRatioBeforeeo);
  const Cvcm2KgNo1 =  AeAoNo1*1/(1+VoidRatioBeforeeo);
  const Cvcm2KgNo2 =  AeAoNo2*1/(1+VoidRatioBeforeeo);
  const Cvcm2KgNo3 =  AeAoNo3*1/(1+VoidRatioBeforeeo);
  const Cvcm2KgNo4 =  AeAoNo4*1/(1+VoidRatioBeforeeo);
  const Cvcm2KgNo5 =  AeAoNo5*1/(1+VoidRatioBeforeeo);

  MaxKgLeeNo = document.getElementById("MaxKgLeeNo").value;
  MaxKgLeeNo1 = document.getElementById("MaxKgLeeNo1").value;
  MaxKgLeeNo2 = document.getElementById("MaxKgLeeNo2").value;
  MaxKgLeeNo3 = document.getElementById("MaxKgLeeNo3").value;
  MaxKgLeeNo4 = document.getElementById("MaxKgLeeNo4").value;
  const NameLoNo = MaxKgLeeNo4+ " " +MaxKgLeeNo3;
  const NameLoNo1 = MaxKgLeeNo3+ " " +MaxKgLeeNo2;
  const NameLoNo2 = MaxKgLeeNo2+ " " +MaxKgLeeNo1;
  const NameLoNo3 = MaxKgLeeNo1+ " " +MaxKgLeeNo;

  // Resultado
  document.getElementById("Mass-Water-gr").value = isNaN(MassWatergr) ? 0 : MassWatergr.toFixed(2);
  document.getElementById("Mass-Dry-gr").value = isNaN(MassDrygr) ? 0 : MassDrygr.toFixed(2);
  document.getElementById("initial-MC-wfp").value = isNaN(initialMCwfp) ? 0 : initialMCwfp.toFixed(2);
  document.getElementById("Area-cm2").value = isNaN(Areacm2) ? 0 : Areacm2.toFixed(2);
  document.getElementById("Volume-cm3").value = isNaN(Volumecm3) ? 0 : Volumecm3.toFixed(2);
  document.getElementById("Mss-Water-gr").value = isNaN(MssWatergr) ? 0 : MssWatergr.toFixed(2);
  document.getElementById("Mss-Water-gr-Fin").value = isNaN(MssWatergrFin) ? 0 : MssWatergrFin.toFixed(2);
  document.getElementById("Wet-Wt-Soil-gr").value = isNaN(WetWtSoilgr) ? 0 : WetWtSoilgr.toFixed(2);
  document.getElementById("Wet-Wt-Soil-gr-Fin").value = isNaN(WetWtSoilgrFin) ? 0 : WetWtSoilgrFin.toFixed(2);
  document.getElementById("Wet-Dry-Soil-gr").value = isNaN(WetDrySoilgr) ? 0 : WetDrySoilgr.toFixed(2);
  document.getElementById("Wet-Dry-Soil-gr-Fin").value = isNaN(WetDrySoilgrFin) ? 0 : WetDrySoilgrFin.toFixed(2);
  document.getElementById("MC-Porce").value = isNaN(MCPorce) ? 0 : MCPorce.toFixed(2);
  document.getElementById("MC-Porce-Fin").value = isNaN(MCPorceFin) ? 0 : MCPorceFin.toFixed(2);
  document.getElementById("In-Ms-Mass").value = isNaN(InMsMass) ? 0 : InMsMass.toFixed(2);
  document.getElementById("Fin-Dry-Mass").value = isNaN(FinDryMass) ? 0 : FinDryMass.toFixed(2);
  document.getElementById("In-Dry-Density-gcm3").value = isNaN(InDryDensitygcm3) ? 0 : InDryDensitygcm3.toFixed(9);
  document.getElementById("Dry-Unit-Wt-knm3").value = isNaN(DryUnitWtknm3) ? 0 : DryUnitWtknm3.toFixed(8);
  document.getElementById("Dry-Mass-T-Specimen-Md-gr").value = isNaN(DryMassTSpecimenMdgr) ? 0 : DryMassTSpecimenMdgr.toFixed(2);
  document.getElementById("Vol-of-Solids-Vs-cm3").value = isNaN(VolofSolidsVscm3) ? 0 : VolofSolidsVscm3.toFixed(2);
  document.getElementById("Equi-Heig-Solids-Hs-cm").value = isNaN(EquiHeigSolidsHscm) ? 0 : EquiHeigSolidsHscm.toFixed(2);
  document.getElementById("Void-Ratio-Before-eo").value = isNaN(VoidRatioBeforeeo) ? 0 : VoidRatioBeforeeo.toFixed(2);
  document.getElementById("Void-Ratio-After-ef").value = isNaN(VoidRatioAfteref) ? 0 : VoidRatioAfteref.toFixed(2);
  document.getElementById("In-Degree-Saturation-Porce").value = isNaN(InDegreeSaturationPorce) ? 0 : InDegreeSaturationPorce.toFixed(2);
  document.getElementById("Fin-Degree-Saturation-Porce").value = isNaN(FinDegreeSaturationPorce) ? 0 : FinDegreeSaturationPorce.toFixed(2);
  document.getElementById("Mass-Wet-Tare-gr").value = isNaN(MassWetTaregr) ? 0 : MassWetTaregr.toFixed(2);
  document.getElementById("Mass-Wet-Soil-Tare-gr").value = isNaN(MassWetSoilTaregr) ? 0 : MassWetSoilTaregr.toFixed(2);
  document.getElementById("Mass-Dry-Soil-Tare-gr").value = isNaN(MassDrySoilTaregr) ? 0 : MassDrySoilTaregr.toFixed(2);
  document.getElementById("Ah-mm-No").value = isNaN(AhmmNo) ? 0 : AhmmNo.toFixed(2);
  document.getElementById("E-Ah-Ho-No").value = isNaN(EAhHoNo) ? 0 : EAhHoNo.toFixed(2);
  document.getElementById("Ah-Hs-No").value = isNaN(AhHsNo) ? 0 : AhHsNo.toFixed(2);
  document.getElementById("Ov-xE-No").value = isNaN(OvxENo) ? 0 : OvxENo;
  document.getElementById("e-No").value = isNaN(eNo) ? 0 : eNo.toFixed(3);
  document.getElementById("Ov-Kg-cm2-No1").value = isNaN(OvKgcm2No1) ? 0 : OvKgcm2No1.toFixed(3);
  document.getElementById("Ov-Kg-cm2-No2").value = isNaN(OvKgcm2No2) ? 0 : OvKgcm2No2.toFixed(3);
  document.getElementById("Ov-Kg-cm2-No3").value = isNaN(OvKgcm2No3) ? 0 : OvKgcm2No3.toFixed(3);
  document.getElementById("Ov-Kg-cm2-No4").value = isNaN(OvKgcm2No4) ? 0 : OvKgcm2No4.toFixed(3);
  document.getElementById("Ov-Kg-cm2-No5").value = isNaN(OvKgcm2No5) ? 0 : OvKgcm2No5.toFixed(3);
  //document.getElementById("Ov-Kg-cm2-No6").value = isNaN(OvKgcm2No6) ? 0 : OvKgcm2No6.toFixed(3);
  document.getElementById("Ov-Kg-cm2-No7").value = isNaN(OvKgcm2No7) ? 0 : OvKgcm2No7.toFixed(3);
  document.getElementById("Ov-Kg-cm2-No8").value = isNaN(OvKgcm2No8) ? 0 : OvKgcm2No8.toFixed(3);
  document.getElementById("Ov-Kg-cm2-No9").value = isNaN(OvKgcm2No9) ? 0 : OvKgcm2No9.toFixed(3);
  document.getElementById("Ov-Kg-cm2-No10").value = isNaN(OvKgcm2No10) ? 0 : OvKgcm2No10.toFixed(3);
  document.getElementById("Read-Dial-No1").value = isNaN(ReadDialNo1) ? 0 : ReadDialNo1.toFixed(2);
  document.getElementById("Read-Dial-No2").value = isNaN(ReadDialNo2) ? 0 : ReadDialNo2.toFixed(2);
  document.getElementById("Read-Dial-No3").value = isNaN(ReadDialNo3) ? 0 : ReadDialNo3.toFixed(2);
  document.getElementById("Read-Dial-No4").value = isNaN(ReadDialNo4) ? 0 : ReadDialNo4.toFixed(2);
  document.getElementById("Read-Dial-No5").value = isNaN(ReadDialNo5) ? 0 : ReadDialNo5.toFixed(2);
  //document.getElementById("Read-Dial-No6").value = isNaN(ReadDialNo6) ? 0 : ReadDialNo6.toFixed(2);
  document.getElementById("Read-Dial-No7").value = isNaN(ReadDialNo7) ? 0 : ReadDialNo7.toFixed(2);
  document.getElementById("Read-Dial-No8").value = isNaN(ReadDialNo8) ? 0 : ReadDialNo8.toFixed(2);
  document.getElementById("Read-Dial-No9").value = isNaN(ReadDialNo9) ? 0 : ReadDialNo9.toFixed(2);
  document.getElementById("Read-Dial-No10").value = isNaN(ReadDialNo10) ? 0 : ReadDialNo10.toFixed(2);
  document.getElementById("Ah-mm-No1").value = isNaN(AhmmNo1) ? 0 : AhmmNo1.toFixed(4);
  document.getElementById("Ah-mm-No2").value = isNaN(AhmmNo2) ? 0 : AhmmNo2.toFixed(4);
  document.getElementById("Ah-mm-No3").value = isNaN(AhmmNo3) ? 0 : AhmmNo3.toFixed(4);
  document.getElementById("Ah-mm-No4").value = isNaN(AhmmNo4) ? 0 : AhmmNo4.toFixed(4);
  document.getElementById("Ah-mm-No5").value = isNaN(AhmmNo5) ? 0 : AhmmNo5.toFixed(4);
  //document.getElementById("Ah-mm-No6").value = isNaN(AhmmNo6) ? 0 : AhmmNo6.toFixed(4);
  document.getElementById("Ah-mm-No7").value = isNaN(AhmmNo7) ? 0 : AhmmNo7.toFixed(4);
  document.getElementById("Ah-mm-No8").value = isNaN(AhmmNo8) ? 0 : AhmmNo8.toFixed(4);
  document.getElementById("Ah-mm-No9").value = isNaN(AhmmNo9) ? 0 : AhmmNo9.toFixed(4);
  document.getElementById("Ah-mm-No10").value = isNaN(AhmmNo10) ? 0 : AhmmNo10.toFixed(2);
  document.getElementById("E-Ah-Ho-No1").value = isNaN(EAhHoNo1) ? 0 : EAhHoNo1.toFixed(2);
  document.getElementById("E-Ah-Ho-No2").value = isNaN(EAhHoNo2) ? 0 : EAhHoNo2.toFixed(2);
  document.getElementById("E-Ah-Ho-No3").value = isNaN(EAhHoNo3) ? 0 : EAhHoNo3.toFixed(2);
  document.getElementById("E-Ah-Ho-No4").value = isNaN(EAhHoNo4) ? 0 : EAhHoNo4.toFixed(2);
  document.getElementById("E-Ah-Ho-No5").value = isNaN(EAhHoNo5) ? 0 : EAhHoNo5.toFixed(2);
  //document.getElementById("E-Ah-Ho-No6").value = isNaN(EAhHoNo6) ? 0 : EAhHoNo6.toFixed(2);
  document.getElementById("E-Ah-Ho-No7").value = isNaN(EAhHoNo7) ? 0 : EAhHoNo7.toFixed(2);
  document.getElementById("E-Ah-Ho-No8").value = isNaN(EAhHoNo8) ? 0 : EAhHoNo8.toFixed(2);
  document.getElementById("E-Ah-Ho-No9").value = isNaN(EAhHoNo9) ? 0 : EAhHoNo9.toFixed(2);
  document.getElementById("E-Ah-Ho-No10").value = isNaN(EAhHoNo10) ? 0 : EAhHoNo10.toFixed(2);
  document.getElementById("Ah-Hs-No1").value = isNaN(AhHsNo1) ? 0 : AhHsNo1.toFixed(2);
  document.getElementById("Ah-Hs-No2").value = isNaN(AhHsNo2) ? 0 : AhHsNo2.toFixed(2);
  document.getElementById("Ah-Hs-No3").value = isNaN(AhHsNo3) ? 0 : AhHsNo3.toFixed(2);
  document.getElementById("Ah-Hs-No4").value = isNaN(AhHsNo4) ? 0 : AhHsNo4.toFixed(2);
  document.getElementById("Ah-Hs-No5").value = isNaN(AhHsNo5) ? 0 : AhHsNo5.toFixed(2);
  //document.getElementById("Ah-Hs-No6").value = isNaN(AhHsNo6) ? 0 : AhHsNo6.toFixed(2);
  document.getElementById("Ah-Hs-No7").value = isNaN(AhHsNo7) ? 0 : AhHsNo7.toFixed(2);
  document.getElementById("Ah-Hs-No8").value = isNaN(AhHsNo8) ? 0 : AhHsNo8.toFixed(2);
  document.getElementById("Ah-Hs-No9").value = isNaN(AhHsNo9) ? 0 : AhHsNo9.toFixed(2);
  document.getElementById("Ah-Hs-No10").value = isNaN(AhHsNo10) ? 0 : AhHsNo10.toFixed(2);
  document.getElementById("Ov-xE-No1").value = isNaN(OvxENo1) ? 0 : OvxENo1.toFixed(4);
  document.getElementById("Ov-xE-No2").value = isNaN(OvxENo2) ? 0 : OvxENo2.toFixed(4);
  document.getElementById("Ov-xE-No3").value = isNaN(OvxENo3) ? 0 : OvxENo3.toFixed(4);
  document.getElementById("Ov-xE-No4").value = isNaN(OvxENo4) ? 0 : OvxENo4.toFixed(4);
  document.getElementById("Ov-xE-No5").value = isNaN(OvxENo5) ? 0 : OvxENo5.toFixed(4);
  //document.getElementById("Ov-xE-No6").value = isNaN(OvxENo6) ? 0 : OvxENo6.toFixed(4);
  document.getElementById("Ov-xE-No7").value = isNaN(OvxENo7) ? 0 : OvxENo7.toFixed(4);
  document.getElementById("Ov-xE-No8").value = isNaN(OvxENo8) ? 0 : OvxENo8.toFixed(4);
  document.getElementById("Ov-xE-No9").value = isNaN(OvxENo9) ? 0 : OvxENo9.toFixed(4);
  document.getElementById("Ov-xE-No10").value = isNaN(OvxENo10) ? 0 : OvxENo10.toFixed(4);
  document.getElementById("e-No1").value = isNaN(eNo1) ? 0 : eNo1.toFixed(3);
  document.getElementById("e-No2").value = isNaN(eNo2) ? 0 : eNo2.toFixed(3);
  document.getElementById("e-No3").value = isNaN(eNo3) ? 0 : eNo3.toFixed(3);
  document.getElementById("e-No4").value = isNaN(eNo4) ? 0 : eNo4.toFixed(3);
  document.getElementById("e-No5").value = isNaN(eNo5) ? 0 : eNo5.toFixed(3);
  //document.getElementById("e-No6").value = isNaN(eNo6) ? 0 : eNo6.toFixed(3);
  document.getElementById("e-No7").value = isNaN(eNo7) ? 0 : eNo7.toFixed(3);
  document.getElementById("e-No8").value = isNaN(eNo8) ? 0 : eNo8.toFixed(3);
  document.getElementById("e-No9").value = isNaN(eNo9) ? 0 : eNo9.toFixed(3);
  document.getElementById("e-No10").value = isNaN(eNo10) ? 0 : eNo10.toFixed(3);
  document.getElementById("LecDiNo").value = isNaN(LecDiNo) ? 0 : LecDiNo.toFixed(2);
  document.getElementById("LecDiNo1").value = isNaN(LecDiNo1) ? 0 : LecDiNo1.toFixed(2);
  document.getElementById("LecDiNo2").value = isNaN(LecDiNo2) ? 0 : LecDiNo2.toFixed(2);
  document.getElementById("LecDiNo3").value = isNaN(LecDiNo3) ? 0 : LecDiNo3.toFixed(2);
  document.getElementById("LecDiNo4").value = isNaN(LecDiNo4) ? 0 : LecDiNo4.toFixed(2);
  document.getElementById("LecDiNo5").value = isNaN(LecDiNo5) ? 0 : LecDiNo5.toFixed(2);
  document.getElementById("DeformationNo").value = isNaN(DeformationNo) ? 0 : DeformationNo.toFixed(4);
  document.getElementById("DeformationNo1").value = isNaN(DeformationNo1) ? 0 : DeformationNo1.toFixed(4);
  document.getElementById("DeformationNo2").value = isNaN(DeformationNo2) ? 0 : DeformationNo2.toFixed(4);
  document.getElementById("DeformationNo3").value = isNaN(DeformationNo3) ? 0 : DeformationNo3.toFixed(4);
  document.getElementById("DeformationNo4").value = isNaN(DeformationNo4) ? 0 : DeformationNo4.toFixed(4);
  document.getElementById("DeformationNo5").value = isNaN(DeformationNo5) ? 0 : DeformationNo5.toFixed(4);
  document.getElementById("PesoKgNo").value = isNaN(PesoKgNo) ? 0 : PesoKgNo.toFixed(2);
  document.getElementById("PesoKgNo1").value = isNaN(PesoKgNo1) ? 0 : PesoKgNo1.toFixed(2);
  document.getElementById("PesoKgNo2").value = isNaN(PesoKgNo2) ? 0 : PesoKgNo2.toFixed(2);
  document.getElementById("PesoKgNo3").value = isNaN(PesoKgNo3) ? 0 : PesoKgNo3.toFixed(2);
  document.getElementById("PesoKgNo4").value = isNaN(PesoKgNo4) ? 0 : PesoKgNo4.toFixed(2);
  document.getElementById("PesoKgNo5").value = isNaN(PesoKgNo5) ? 0 : PesoKgNo5.toFixed(2);
  document.getElementById("oKgcm2No").value = isNaN(oKgcm2No) ? 0 : oKgcm2No.toFixed(2);
  document.getElementById("oKgcm2No1").value = isNaN(oKgcm2No1) ? 0 : oKgcm2No1.toFixed(2);
  document.getElementById("oKgcm2No2").value = isNaN(oKgcm2No2) ? 0 : oKgcm2No2.toFixed(2);
  document.getElementById("oKgcm2No3").value = isNaN(oKgcm2No3) ? 0 : oKgcm2No3.toFixed(2);
  document.getElementById("oKgcm2No4").value = isNaN(oKgcm2No4) ? 0 : oKgcm2No4.toFixed(2);
  document.getElementById("oKgcm2No5").value = isNaN(oKgcm2No5) ? 0 : oKgcm2No5.toFixed(2);
  document.getElementById("AoKgcm2No").value = isNaN(AoKgcm2No) ? 0 : AoKgcm2No.toFixed(2);
  document.getElementById("AoKgcm2No1").value = isNaN(AoKgcm2No1) ? 0 : AoKgcm2No1.toFixed(2);
  document.getElementById("AoKgcm2No2").value = isNaN(AoKgcm2No2) ? 0 : AoKgcm2No2.toFixed(2);
  document.getElementById("AoKgcm2No3").value = isNaN(AoKgcm2No3) ? 0 : AoKgcm2No3.toFixed(2);
  document.getElementById("AoKgcm2No4").value = isNaN(AoKgcm2No4) ? 0 : AoKgcm2No4.toFixed(2);
  document.getElementById("AoKgcm2No5").value = isNaN(AoKgcm2No5) ? 0 : AoKgcm2No5.toFixed(2);
  document.getElementById("AhcmNo").value = isNaN(AhcmNo) ? 0 : AhcmNo.toFixed(2);
  document.getElementById("AhcmNo1").value = isNaN(AhcmNo1) ? 0 : AhcmNo1.toFixed(4);
  document.getElementById("AhcmNo2").value = isNaN(AhcmNo2) ? 0 : AhcmNo2.toFixed(4);
  document.getElementById("AhcmNo3").value = isNaN(AhcmNo3) ? 0 : AhcmNo3.toFixed(4);
  document.getElementById("AhcmNo4").value = isNaN(AhcmNo4) ? 0 : AhcmNo4.toFixed(4);
  document.getElementById("AhcmNo5").value = isNaN(AhcmNo5) ? 0 : AhcmNo5.toFixed(4);
  document.getElementById("AeNo").value = isNaN(AeNo) ? 0 : AeNo.toFixed(4);
  document.getElementById("AeNo1").value = isNaN(AeNo1) ? 0 : AeNo1.toFixed(4);
  document.getElementById("AeNo2").value = isNaN(AeNo2) ? 0 : AeNo2.toFixed(4);
  document.getElementById("AeNo3").value = isNaN(AeNo3) ? 0 : AeNo3.toFixed(4);
  document.getElementById("AeNo4").value = isNaN(AeNo4) ? 0 : AeNo4.toFixed(4);
  document.getElementById("AeNo5").value = isNaN(AeNo5) ? 0 : AeNo5.toFixed(4);
  document.getElementById("EeNo").value = isNaN(EeNo) ? 0 : EeNo.toFixed(2);
  document.getElementById("EeNo1").value = isNaN(EeNo1) ? 0 : EeNo1.toFixed(2);
  document.getElementById("EeNo2").value = isNaN(EeNo2) ? 0 : EeNo2.toFixed(2);
  document.getElementById("EeNo3").value = isNaN(EeNo3) ? 0 : EeNo3.toFixed(2);
  document.getElementById("EeNo4").value = isNaN(EeNo4) ? 0 : EeNo4.toFixed(2);
  document.getElementById("EeNo5").value = isNaN(EeNo5) ? 0 : EeNo5.toFixed(2);
  document.getElementById("AeAoNo").value = isNaN(AeAoNo) ? 0 : AeAoNo.toFixed(2);
  document.getElementById("AeAoNo1").value = isNaN(AeAoNo1) ? 0 : AeAoNo1.toFixed(4);
  document.getElementById("AeAoNo2").value = isNaN(AeAoNo2) ? 0 : AeAoNo2.toFixed(4);
  document.getElementById("AeAoNo3").value = isNaN(AeAoNo3) ? 0 : AeAoNo3.toFixed(4);
  document.getElementById("AeAoNo4").value = isNaN(AeAoNo4) ? 0 : AeAoNo4.toFixed(4);
  document.getElementById("AeAoNo5").value = isNaN(AeAoNo5) ? 0 : AeAoNo5.toFixed(4);
  document.getElementById("Cvcm2KgNo").value = isNaN(Cvcm2KgNo) ? 0 : Cvcm2KgNo.toFixed(2);
  document.getElementById("Cvcm2KgNo1").value = isNaN(Cvcm2KgNo1) ? 0 : Cvcm2KgNo1.toFixed(2);
  document.getElementById("Cvcm2KgNo2").value = isNaN(Cvcm2KgNo2) ? 0 : Cvcm2KgNo2.toFixed(2);
  document.getElementById("Cvcm2KgNo3").value = isNaN(Cvcm2KgNo3) ? 0 : Cvcm2KgNo3.toFixed(2);
  document.getElementById("Cvcm2KgNo4").value = isNaN(Cvcm2KgNo4) ? 0 : Cvcm2KgNo4.toFixed(2);
  document.getElementById("Cvcm2KgNo5").value = isNaN(Cvcm2KgNo5) ? 0 : Cvcm2KgNo5.toFixed(2);

  const NameLoandingDcNo = document.getElementById("NameLoNo"); NameLoandingDcNo.textContent = NameLoNo;
  const NameLoandingDcNo1 = document.getElementById("NameLoNo1"); NameLoandingDcNo1.textContent = NameLoNo1;
  const NameLoandingDcNo2 = document.getElementById("NameLoNo2"); NameLoandingDcNo2.textContent = NameLoNo2;
  const NameLoandingDcNo3 = document.getElementById("NameLoNo3"); NameLoandingDcNo3.textContent = NameLoNo3;

  // Calculos Grafica Casagrande
  const secNo6 = 0.316227766;
  const secNo15 = 0.50;
  const secNo30 = 0.707106781;
  const secNo60 = 1.0;
  const miNo2 = 1.414213562;
  const miNo4 = 2.0;
  const miNo8 = 2.828427125;
  const miNo15 = 3.872983346;
  const miNo30 = 5.477225575;
  const miNo60 = 7.745966692;
  const hrNo2 = 10.954451150;
  const hrNo4 = 15.491933385;
  const hrNo8 = 21.908902300;
  const hrNo16 = 30.983866770;
  const hrNo24 = 37.947331922;

  timeF1N1 = convertToNumberOrZero(document.getElementById("6-sec-no2").value);
  timeF1N2 = convertToNumberOrZero(document.getElementById("6-sec-no3").value);
  timeF1N3 = convertToNumberOrZero(document.getElementById("6-sec-no4").value);
  timeF1N4 = convertToNumberOrZero(document.getElementById("6-sec-no5").value);
  timeF1N5 = convertToNumberOrZero(document.getElementById("6-sec-no6").value);
  timeF1N6 = convertToNumberOrZero(document.getElementById("6-sec-no7").value);
  timeF1N7 = convertToNumberOrZero(document.getElementById("6-sec-no8").value);
  timeF1N8 = convertToNumberOrZero(document.getElementById("6-sec-no9").value);
  timeF1N9 = convertToNumberOrZero(document.getElementById("6-sec-no10").value);
  timeF1N10 = convertToNumberOrZero(document.getElementById("6-sec-no11").value);
  timeF1N11 = convertToNumberOrZero(document.getElementById("6-sec-no12").value);
  timeF1N12 = convertToNumberOrZero(document.getElementById("6-sec-no13").value);
  timeF1N13 = convertToNumberOrZero(document.getElementById("6-sec-no14").value);
  timeF1N14 = convertToNumberOrZero(document.getElementById("6-sec-no15").value);
  timeF1N15 = convertToNumberOrZero(document.getElementById("6-sec-no16").value);

  timeF2N = convertToNumberOrZero(document.getElementById("Val2-kg-no1").value);
  timeF2N1 = convertToNumberOrZero(document.getElementById("Val2-kg-no2").value);
  timeF2N2 = convertToNumberOrZero(document.getElementById("Val2-kg-no3").value);
  timeF2N3 = convertToNumberOrZero(document.getElementById("Val2-kg-no4").value);
  timeF2N4 = convertToNumberOrZero(document.getElementById("Val2-kg-no5").value);
  timeF2N5 = convertToNumberOrZero(document.getElementById("Val2-kg-no6").value);
  timeF2N6 = convertToNumberOrZero(document.getElementById("Val2-kg-no7").value);
  timeF2N7 = convertToNumberOrZero(document.getElementById("Val2-kg-no8").value);
  timeF2N8 = convertToNumberOrZero(document.getElementById("Val2-kg-no9").value);
  timeF2N9 = convertToNumberOrZero(document.getElementById("Val2-kg-no10").value);
  timeF2N10 = convertToNumberOrZero(document.getElementById("Val2-kg-no11").value);
  timeF2N11 = convertToNumberOrZero(document.getElementById("Val2-kg-no12").value);
  timeF2N12 = convertToNumberOrZero(document.getElementById("Val2-kg-no13").value);
  timeF2N13 = convertToNumberOrZero(document.getElementById("Val2-kg-no14").value);
  timeF2N14 = convertToNumberOrZero(document.getElementById("Val2-kg-no15").value);
  timeF2N15 = convertToNumberOrZero(document.getElementById("Val2-kg-no16").value);

  timeF3N = convertToNumberOrZero(document.getElementById("Val3-kg-no1").value);
  timeF3N1 = convertToNumberOrZero(document.getElementById("Val3-kg-no2").value);
  timeF3N2 = convertToNumberOrZero(document.getElementById("Val3-kg-no3").value);
  timeF3N3 = convertToNumberOrZero(document.getElementById("Val3-kg-no4").value);
  timeF3N4 = convertToNumberOrZero(document.getElementById("Val3-kg-no5").value);
  timeF3N5 = convertToNumberOrZero(document.getElementById("Val3-kg-no6").value);
  timeF3N6 = convertToNumberOrZero(document.getElementById("Val3-kg-no7").value);
  timeF3N7 = convertToNumberOrZero(document.getElementById("Val3-kg-no8").value);
  timeF3N8 = convertToNumberOrZero(document.getElementById("Val3-kg-no9").value);
  timeF3N9 = convertToNumberOrZero(document.getElementById("Val3-kg-no10").value);
  timeF3N10 = convertToNumberOrZero(document.getElementById("Val3-kg-no11").value);
  timeF3N11 = convertToNumberOrZero(document.getElementById("Val3-kg-no12").value);
  timeF3N12 = convertToNumberOrZero(document.getElementById("Val3-kg-no13").value);
  timeF3N13 = convertToNumberOrZero(document.getElementById("Val3-kg-no14").value);
  timeF3N14 = convertToNumberOrZero(document.getElementById("Val3-kg-no15").value);
  timeF3N15 = convertToNumberOrZero(document.getElementById("Val3-kg-no16").value);

  timeF4N = convertToNumberOrZero(document.getElementById("Val4-kg-no1").value);
  timeF4N1 = convertToNumberOrZero(document.getElementById("Val4-kg-no2").value);
  timeF4N2 = convertToNumberOrZero(document.getElementById("Val4-kg-no3").value);
  timeF4N3 = convertToNumberOrZero(document.getElementById("Val4-kg-no4").value);
  timeF4N4 = convertToNumberOrZero(document.getElementById("Val4-kg-no5").value);
  timeF4N5 = convertToNumberOrZero(document.getElementById("Val4-kg-no6").value);
  timeF4N6 = convertToNumberOrZero(document.getElementById("Val4-kg-no7").value);
  timeF4N7 = convertToNumberOrZero(document.getElementById("Val4-kg-no8").value);
  timeF4N8 = convertToNumberOrZero(document.getElementById("Val4-kg-no9").value);
  timeF4N9 = convertToNumberOrZero(document.getElementById("Val4-kg-no10").value);
  timeF4N10 = convertToNumberOrZero(document.getElementById("Val4-kg-no11").value);
  timeF4N11 = convertToNumberOrZero(document.getElementById("Val4-kg-no12").value);
  timeF4N12 = convertToNumberOrZero(document.getElementById("Val4-kg-no13").value);
  timeF4N13 = convertToNumberOrZero(document.getElementById("Val4-kg-no14").value);
  timeF4N14 = convertToNumberOrZero(document.getElementById("Val4-kg-no15").value);
  timeF4N15 = convertToNumberOrZero(document.getElementById("Val4-kg-no16").value);

  timeF5N = convertToNumberOrZero(document.getElementById("Val5-kg-no1").value);
  timeF5N1 = convertToNumberOrZero(document.getElementById("Val5-kg-no2").value);
  timeF5N2 = convertToNumberOrZero(document.getElementById("Val5-kg-no3").value);
  timeF5N3 = convertToNumberOrZero(document.getElementById("Val5-kg-no4").value);
  timeF5N4 = convertToNumberOrZero(document.getElementById("Val5-kg-no5").value);
  timeF5N5 = convertToNumberOrZero(document.getElementById("Val5-kg-no6").value);
  timeF5N6 = convertToNumberOrZero(document.getElementById("Val5-kg-no7").value);
  timeF5N7 = convertToNumberOrZero(document.getElementById("Val5-kg-no8").value);
  timeF5N8 = convertToNumberOrZero(document.getElementById("Val5-kg-no9").value);
  timeF5N9 = convertToNumberOrZero(document.getElementById("Val5-kg-no10").value);
  timeF5N10 = convertToNumberOrZero(document.getElementById("Val5-kg-no11").value);
  timeF5N11 = convertToNumberOrZero(document.getElementById("Val5-kg-no12").value);
  timeF5N12 = convertToNumberOrZero(document.getElementById("Val5-kg-no13").value);
  timeF5N13 = convertToNumberOrZero(document.getElementById("Val5-kg-no14").value);
  timeF5N14 = convertToNumberOrZero(document.getElementById("Val5-kg-no15").value);
  timeF5N15 = convertToNumberOrZero(document.getElementById("Val5-kg-no16").value);


  
  // Almacenar los resultados calculados en localStorage
  localStorage.setItem('xNo1', OvKgcm2No1);
  localStorage.setItem('xNo2', OvKgcm2No2);
  localStorage.setItem('xNo3', OvKgcm2No3);
  localStorage.setItem('xNo4', OvKgcm2No4);
  localStorage.setItem('xNo5', OvKgcm2No5);
  localStorage.setItem('xNo7', OvKgcm2No7);
  localStorage.setItem('xNo8', OvKgcm2No8);
  localStorage.setItem('xNo9', OvKgcm2No9);
  localStorage.setItem('xNo10', OvKgcm2No10);
  localStorage.setItem('yNo1', eNo1);
  localStorage.setItem('yNo2', eNo2);
  localStorage.setItem('yNo3', eNo3);
  localStorage.setItem('yNo4', eNo4);
  localStorage.setItem('yNo5', eNo5);
  localStorage.setItem('yNo7', eNo7);
  localStorage.setItem('yNo8', eNo8);
  localStorage.setItem('yNo9', eNo9);
  localStorage.setItem('yNo10', eNo10);

  localStorage.setItem('secNo6', secNo6);
  localStorage.setItem('secNo15', secNo15);
  localStorage.setItem('secNo30', secNo30);
  localStorage.setItem('secNo60', secNo60);
  localStorage.setItem('miNo2', miNo2);
  localStorage.setItem('miNo4', miNo4);
  localStorage.setItem('miNo8', miNo8);
  localStorage.setItem('miNo15', miNo15);
  localStorage.setItem('miNo30', miNo30);
  localStorage.setItem('miNo60', miNo60);
  localStorage.setItem('hrNo2', hrNo2); 
  localStorage.setItem('hrNo4', hrNo4); 
  localStorage.setItem('hrNo8', hrNo8);
  localStorage.setItem('hrNo16', hrNo16);
  localStorage.setItem('hrNo24', hrNo24);

  localStorage.setItem('timeF1N1', timeF1N1);
  localStorage.setItem('timeF1N2', timeF1N2);
  localStorage.setItem('timeF1N3', timeF1N3);
  localStorage.setItem('timeF1N4', timeF1N4);
  localStorage.setItem('timeF1N5', timeF1N5);
  localStorage.setItem('timeF1N6', timeF1N6);
  localStorage.setItem('timeF1N7', timeF1N7);
  localStorage.setItem('timeF1N8', timeF1N8);
  localStorage.setItem('timeF1N9', timeF1N9);
  localStorage.setItem('timeF1N10', timeF1N10); 
  localStorage.setItem('timeF1N11', timeF1N11); 
  localStorage.setItem('timeF1N12', timeF1N12);
  localStorage.setItem('timeF1N13', timeF1N13);
  localStorage.setItem('timeF1N14', timeF1N14);
  localStorage.setItem('timeF1N15', timeF1N15);

  localStorage.setItem('timeF2N', timeF2N);
  localStorage.setItem('timeF2N1', timeF2N1);
  localStorage.setItem('timeF2N2', timeF2N2);
  localStorage.setItem('timeF2N3', timeF2N3);
  localStorage.setItem('timeF2N4', timeF2N4);
  localStorage.setItem('timeF2N5', timeF2N5);
  localStorage.setItem('timeF2N6', timeF2N6);
  localStorage.setItem('timeF2N7', timeF2N7);
  localStorage.setItem('timeF2N8', timeF2N8);
  localStorage.setItem('timeF2N9', timeF2N9);
  localStorage.setItem('timeF2N10', timeF2N10); 
  localStorage.setItem('timeF2N11', timeF2N11); 
  localStorage.setItem('timeF2N12', timeF2N12);
  localStorage.setItem('timeF2N13', timeF2N13);
  localStorage.setItem('timeF2N14', timeF2N14);
  localStorage.setItem('timeF2N15', timeF2N15);

  localStorage.setItem('timeF3N', timeF3N);
  localStorage.setItem('timeF3N1', timeF3N1);
  localStorage.setItem('timeF3N2', timeF3N2);
  localStorage.setItem('timeF3N3', timeF3N3);
  localStorage.setItem('timeF3N4', timeF3N4);
  localStorage.setItem('timeF3N5', timeF3N5);
  localStorage.setItem('timeF3N6', timeF3N6);
  localStorage.setItem('timeF3N7', timeF3N7);
  localStorage.setItem('timeF3N8', timeF3N8);
  localStorage.setItem('timeF3N9', timeF3N9);
  localStorage.setItem('timeF3N10', timeF3N10); 
  localStorage.setItem('timeF3N11', timeF3N11); 
  localStorage.setItem('timeF3N12', timeF3N12);
  localStorage.setItem('timeF3N13', timeF3N13);
  localStorage.setItem('timeF3N14', timeF3N14);
  localStorage.setItem('timeF3N15', timeF3N15);

  localStorage.setItem('timeF4N', timeF4N);
  localStorage.setItem('timeF4N1', timeF4N1);
  localStorage.setItem('timeF4N2', timeF4N2);
  localStorage.setItem('timeF4N3', timeF4N3);
  localStorage.setItem('timeF4N4', timeF4N4);
  localStorage.setItem('timeF4N5', timeF4N5);
  localStorage.setItem('timeF4N6', timeF4N6);
  localStorage.setItem('timeF4N7', timeF4N7);
  localStorage.setItem('timeF4N8', timeF4N8);
  localStorage.setItem('timeF4N9', timeF4N9);
  localStorage.setItem('timeF4N10', timeF4N10); 
  localStorage.setItem('timeF4N11', timeF4N11); 
  localStorage.setItem('timeF4N12', timeF4N12);
  localStorage.setItem('timeF4N13', timeF4N13);
  localStorage.setItem('timeF4N14', timeF4N14);
  localStorage.setItem('timeF4N15', timeF4N15);

  localStorage.setItem('timeF5N', timeF5N);
  localStorage.setItem('timeF5N1', timeF5N1);
  localStorage.setItem('timeF5N2', timeF5N2);
  localStorage.setItem('timeF5N3', timeF5N3);
  localStorage.setItem('timeF5N4', timeF5N4);
  localStorage.setItem('timeF5N5', timeF5N5);
  localStorage.setItem('timeF5N6', timeF5N6);
  localStorage.setItem('timeF5N7', timeF5N7);
  localStorage.setItem('timeF5N8', timeF5N8);
  localStorage.setItem('timeF5N9', timeF5N9);
  localStorage.setItem('timeF5N10', timeF5N10); 
  localStorage.setItem('timeF5N11', timeF5N11); 
  localStorage.setItem('timeF5N12', timeF5N12);
  localStorage.setItem('timeF5N13', timeF5N13);
  localStorage.setItem('timeF5N14', timeF5N14);
  localStorage.setItem('timeF5N15', timeF5N15);

  // Graph Auto
  function roundAndFormat(value) {
    const roundedValue = parseFloat(value).toFixed(2);
    return roundedValue + " kg/cm2";
}

  const namKgCassN1 = roundAndFormat(OvKgcm2No1);
  localStorage.setItem('nam_Kg_Cass_N1', namKgCassN1);

  const namKgCassN2 = roundAndFormat(OvKgcm2No2);
  localStorage.setItem('nam_Kg_Cass_N2', namKgCassN2);

  const namKgCassN3 = roundAndFormat(OvKgcm2No3);
  localStorage.setItem('nam_Kg_Cass_N3', namKgCassN3);

  const namKgCassN4 = roundAndFormat(OvKgcm2No4);
  localStorage.setItem('nam_Kg_Cass_N4', namKgCassN4);
  
  const namKgCassN5 = roundAndFormat(OvKgcm2No5);
  localStorage.setItem('nam_Kg_Cass_N5', namKgCassN5);
}
</script>

<?php include_once('layouts/footer.php'); ?>