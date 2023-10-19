<?php
$page_title = 'Leeb Hardness Test';
require_once('includes/load.php');
// Verifica el nivel de permiso del usuario para ver esta página
page_require_level(2);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/LeebHardness.php'); 
}
$search_table = find_by_id('leeb_hardness', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
  <?php echo display_msg($msg); ?>
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Leeb Hardness Test</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="" oninput="calculateAverageStrength()">
        <table class="table table-bordered">
          <thead>
            <tbody id="product_info"></tbody>
          </thead>
        </table>
          <div class="col-xs-4">
            <label>Standard</label>
            <select class="form-control" name="Standard">
            <option <?php if ($search_table['Standard'] == 'ASTM-A956') echo 'selected'; ?>>ASTM-A956</option>
            </select>
          </div>

          <div class="col-xs-4">
            <label>Method</label>
            <select class="form-control" type="text" name="Method" id="">
            <option <?php if ($search_table['Method'] == 'A') echo 'selected'; ?>>A</option>
            <option <?php if ($search_table['Method'] == 'B') echo 'selected'; ?>>B</option>
            <option <?php if ($search_table['Method'] == 'C') echo 'selected'; ?>>C</option>
            </select>
          </div>

          <div class="col-xs-4">
            <label>Comments</label>
            <textarea class="form-control" name="Comments"><?php echo ($search_table['Comments']); ?></textarea>
          </div>

          <div class="col-xs-4">
            <label>Technician</label>
            <input class="form-control" name="Technician" value="<?php echo ($search_table['Technician']); ?>" type="text">
          </div>

          <div class="col-xs-4">
            <label>Test Start Date</label>
            <input class="form-control" name="TestStartDate" value="<?php echo ($search_table['Test_Start_Date']); ?>" type="date">
          </div>

          <div class="panel-body">
            <div class="col-md-12">
              <div style="display: flex; flex-direction: row; justify-content: space-between;">
                <table class="table table-bordered border-primary" style="width:450px;">
                  <caption>Testing Information</caption>
                  <tbody>
                    <tr>
                      <th style="font-size: 15px; text-align: center; width: 350px; height: 25px;" colspan="2">Sample #:</th>
                      <td><input value="<?php echo ($search_table['Sample']); ?>" type="text" style="border: none;" size="8" style="background: transparent;" name="Sample" id="1"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row" colspan="2">Depth (m)</th>
                      <td><input value="<?php echo ($search_table['Depth_m']); ?>" type="text" style="border: none;" size="8" style="background: transparent;" name="Depthm" id="2"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">Test No.</th>
                      <th style="font-size: 15px; text-align: center; width: 350px; height: 25px;" colspan="2">Leeb Hardness Number</th>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">1</th>
                      <td colspan="2"><input value="<?php echo ($search_table['Leeb_Hardness_Number1']); ?>" type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber1" id="No-1"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">2</th>
                      <td colspan="2"><input value="<?php echo ($search_table['Leeb_Hardness_Number2']); ?>" type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber2" id="No-2"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">3</th>
                      <td colspan="2"><input value="<?php echo ($search_table['Leeb_Hardness_Number3']); ?>" type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber3" id="No-3"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">4</th>
                      <td colspan="2"><input value="<?php echo ($search_table['Leeb_Hardness_Number4']); ?>" type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber4" id="No-4"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">5</th>
                      <td colspan="2"><input value="<?php echo ($search_table['Leeb_Hardness_Number5']); ?>" type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber5" id="No-5"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">6</th>
                      <td colspan="2"><input value="<?php echo ($search_table['Leeb_Hardness_Number6']); ?>" type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber6" id="No-6"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">7</th>
                      <td colspan="2"><input value="<?php echo ($search_table['Leeb_Hardness_Number7']); ?>" type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber7" id="No-7"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">8</th>
                      <td colspan="2"><input value="<?php echo ($search_table['Leeb_Hardness_Number8']); ?>" type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber8" id="No-8"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">9</th>
                      <td colspan="2"><input value="<?php echo ($search_table['Leeb_Hardness_Number9']); ?>" type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber9" id="No-9"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">10</th>
                      <td colspan="2"><input value="<?php echo ($search_table['Leeb_Hardness_Number10']); ?>" type="text" style="border: none;" size="35" style="background: transparent;" name="LeebHardnessNumber10" id="No-10"></td>
                    </tr>
                    <tr>
                      <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">Average</th>
                      <td colspan="2"><input value="<?php echo ($search_table['Average']); ?>" type="text" style="border: none;" size="35" style="background: transparent;" name="Average" id="Average"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
          <button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
          <a href="PDF/Leeb_Hardness_Rev_1.php?id=<?php echo intval($search_table['id']); ?>" class="btn btn-primary">Generar PDF</a>
          <button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>
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