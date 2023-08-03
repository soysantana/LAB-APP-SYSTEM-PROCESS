<?php
$page_title = 'Pinhole Test';
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
                <th scope="col" rowspan="2">Date</th>
                <th scope="col" rowspan="2">Elapsed time (suggested)</th>
                <th style="text-align: center;" scope="row" colspan="6">Mass on hangar</th>
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
                <th style="text-align: center;" scope="row">0</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">6 sec</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">15 sec</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">30 sec</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">60 sec</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">2 min</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">4 min</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">8 min</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">15 min</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">30 min</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">60 min</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">2 hr</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">4 hr</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">8 hr</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">16 hr</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="date" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <th style="text-align: center;" scope="row">24 hr</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
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
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Mass of wet soil + tare (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Mass of dry soil + tare</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Mass of water  (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Mass of dry soil (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Initial Moisture conten (%) Wfp</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
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
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Height, cm</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Area A, cm2</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Volume, Vo, cm3</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Weight, (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
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
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Initial Mois Mass</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Final Dry mass + Ring (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">final Dry mass (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Initial Dry Density (g/cm3)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Dry Unit Weight ϒd (KN/m3)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Density of water ᵨw ( gr/cm3)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
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
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="text-align: center;">Factor Dial</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
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
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>mass weight wet soil + tare, (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>mass weight  dry soil + tare (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>mass of water (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Weight  wet soil (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Weight Dry soil (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Moisture Content (%)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Initial degree of Saturation (%)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Final degree of Saturation (%)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
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
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Dry mass of the total specimen, Md (gr)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Volume of Solids, Vs (cm3)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>equivalent Height of Solids, Hs (cm)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Initial specimen height Ho, (cm)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Final specimen height  Hf, (cm)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Void ratio before test, e0</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th>Void ratio after test, ef</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>



<div style="margin-left: 1%;">
    <table class="table table-bordered" style="width: 40%;">
        <thead></thead>
        <tbody>
            <tr>
                <th style="text-align: center;">Load (Kg)</th>
                <th style="text-align: center;">σ'v (Kg/cm2)</th>
                <th style="text-align: center;">Reading Dial</th>
                <th style="text-align: center;">ΔH (cm)</th>
                <th style="text-align: center;">ε (ΔH/Ho)</th>
                <th style="text-align: center;">(ΔH/Hs)</th>
                <th style="text-align: center;">σ'v * ε</th>
                <th style="text-align: center;">e</th>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
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
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>



























<?php include_once('layouts/footer.php'); ?>