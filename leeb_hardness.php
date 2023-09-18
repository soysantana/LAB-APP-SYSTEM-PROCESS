<?php
$page_title = 'Leeb Hardness Test';
require_once('includes/load.php');
// Verifica el nivel de permiso del usuario para ver esta página
page_require_level(2);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/LeebHardness.php'); 
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
          <span>Leeb Hardness Test</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="leeb_hardness.php" oninput="calculateAverageStrength()">
        <table class="table table-bordered">
          <thead>
            <tbody id="product_info"></tbody>
          </thead>
        </table>
          <div class="col-xs-4">
            <label>Standard</label>
            <select class="form-control" name="Standard">
              <option selected>Choose...</option>
              <option value="ASTM-A956">ASTM-A956</option>
            </select>
          </div>

          <div class="col-xs-4">
            <label>Method</label>
            <select class="form-control" type="text" name="Method" id="">
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
              <div style="display: flex; flex-direction: row; justify-content: space-between;">
                <table class="table table-bordered border-primary" style="width:450px;">
                  <caption>Testing Information</caption>
                  <tbody>
                    <tr>
                      <th style="font-size: 15px; text-align: center; width: 350px; height: 25px;" colspan="2">Sample #:</th>
                      <td><input type="text" style="border: none;" size="8" style="background: transparent;" name="Sample" id="1"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row" colspan="2">Depth (m)</th>
                      <td><input type="text" style="border: none;" size="8" style="background: transparent;" name="Depthm" id="2"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">Test No.</th>
                      <th style="font-size: 15px; text-align: center; width: 350px; height: 25px;" colspan="2">Leeb Hardness Number</th>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">1</th>
                      <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber1" id="No-1"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">2</th>
                      <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber2" id="No-2"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">3</th>
                      <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber3" id="No-3"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">4</th>
                      <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber4" id="No-4"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">5</th>
                      <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber5" id="No-5"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">6</th>
                      <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber6" id="No-6"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">7</th>
                      <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber7" id="No-7"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">8</th>
                      <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber8" id="No-8"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">9</th>
                      <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber9" id="No-9"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">10</th>
                      <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber10" id="No-10"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">Average</th>
                      <td colspan="2"><input type="text" style="border: none;" size="35" style="background: transparent;" name="Average" id="Average"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <button type="submit" name="LeebHardness" class="btn btn-danger">Registrar ensayo</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    function calculateAverageStrength() {
        const strengthInputs = [
            document.getElementById('No-1'),
            document.getElementById('No-2'),
            document.getElementById('No-3'),
            document.getElementById('No-4'),
            document.getElementById('No-5'),
            document.getElementById('No-6'),
            document.getElementById('No-7'),
            document.getElementById('No-8'),
            document.getElementById('No-9'),
            document.getElementById('No-10')
        ];

        let validCount = 0;
        let totalStrength = 0;

        for (const input of strengthInputs) {
            const value = parseFloat(input.value);
            if (!isNaN(value)) {
                totalStrength += value;
                validCount++;
            }
        }

        if (validCount === 0) {
            document.getElementById("14").value = 0;
            return;
        }

        const averageStrength = totalStrength / validCount;
        document.getElementById("Average").value = isNaN(averageStrength) ? 0 : averageStrength.toFixed(2);
    }
</script>
   
<?php include_once('layouts/footer.php'); ?>