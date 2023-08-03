<?php
$page_title = 'Leeb Hardness Test';
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
          <span>Leeb Hardness Test</span>
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
              <option value="ASTM-A956">ASTM-A956</option>
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
              <caption>Testing Information</caption>
              <tbody>
                <tr>
                    <th style="font-size: 15px; text-align: center;" style="width: 350px; height: 25px;" scope="col" colspan="2">Sample #:</th>
                    <td><input type="text" style="border: none;" size="8" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Depth (m)</th>
                  <td><input type="text" style="border: none;" size="8" style="background: transparent;" id="" oninput="calcular()"></td>
                  <td><input type="text" style="border: none;" size="8" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Test No.</th>
                <th style="font-size: 15px; text-align: center;" style="width: 350px; height: 25px;" scope="col" colspan="2">Leeb Hardness Number</th>
              </tr>
              <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">1</th>
                <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">2</th>
              <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">3</th>
              <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">4</th>
              <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" id="" oninput="calcular()"></td>
              </tr>
              <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">5</th>
              <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">6</th>
                <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">7</th>
                <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">8</th>
                <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">9</th>
                <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">10</th>
                <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Average</th>
                <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            </tbody>
            </table>
             </div>







        



<?php include_once('layouts/footer.php'); ?>