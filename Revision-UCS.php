<?php
$page_title = 'Uniaxial Compressive Strength Calculation ';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/UCS.php'); 
}
$Search_Table = find_by_id('uniaxial_compressive_strength', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
  <?php echo display_msg($msg); ?> 
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span> Unixial Compressive Strength Calculation</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="Revision-UCS.php?id=<?php echo (int)$Search_Table['id']; ?>" onsubmit="calcular()">

            <table class="table table-bordered">
                <thead>
                <tbody id="product_info"></tbody>
          </div>
          <div class="col-xs-4">
            <label>Standard</label>
            <select class="form-control" name="Standard">
              <option <?php if ($Search_Table['Method'] == 'ASTM-D4318') echo 'selected'; ?>>ASTM-D4318</option>
            </select>
          </div>
          <div class="col-xs-4">
            <label>Method</label>
            <select class="form-control" type = "text" name="Method">
              <option <?php if ($Search_Table['Method'] == 'A') echo 'selected'; ?>>A</option>   
              <option <?php if ($Search_Table['Method'] == 'B') echo 'selected'; ?>>B</option>   
              <option <?php if ($Search_Table['Method'] == 'C') echo 'selected'; ?>>C</option>
              <option <?php if ($Search_Table['Method'] == 'D') echo 'selected'; ?>>D</option>  
            </select>
          </div>
    
          <div class="col-xs-4">
            <label>Extraction Equipment:</label>
            <input class="form-control" name="ExtraEquip" value="<?php echo ($Search_Table['Extraction_Equipment']); ?>" type="text">
          </div>

          <div class="col-xs-4">
            <label>Cutter Equipment:</label>
            <input class="form-control" name="CutterEquip" value="<?php echo ($Search_Table['Cutter_Equipment']); ?>" type="text">
          </div>
          <div class="col-xs-4">
            <label>Test Device:</label>
            <input class="form-control" name="TestDevice" value="<?php echo ($Search_Table['Test_Device']); ?>" type="text">
          </div>
          <div class="col-xs-4">
            <label>Temperature:</label>
            <input class="form-control" name="Temperature"  type="text">
          </div>
    
          <div class="col-xs-4">
            <label>Comments</label>
            <textarea class="form-control" name="Comments"><?php echo ($Search_Table['Comments']); ?></textarea>
          </div>
    
          <div class="col-xs-4">
            <label>Technician</label>
            <input class="form-control" name="Technician" value="<?php echo ($Search_Table['Technician']); ?>" type="text">
          </div>
        </div>
          <div class="col-xs-4">
            <label>Test Start Date</label>
            <input class="form-control" name="TestStartDate" value="<?php echo ($Search_Table['Test_Start_Date']); ?>" type="date">
          </div>
          <div class="panel-body">
            <div class="col-md-12">
            </div>
          </div>
          <div style="display: flex; flex-direction: row; justify-content: space-between;">
            <table class="table table-bordered border-primary" style="width:850px;">
              <thead>
              </thead>
              <caption>Testing Information</caption>
              <tr>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">Dimension D (cm):</th>
                <td><input value="<?php echo ($Search_Table['Dimension_D_cm']); ?>" type="text" style="border: none; background: transparent;" size="4" id="1" name="DimensionDcm" oninput="calcular()"></td>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">Dimension h (cm):</th>
                <td><input value="<?php echo ($Search_Table['Dimension_H_cm']); ?>" type="text" style="border: none; background: transparent;" size="4" id="2" name="DimensionHcm" oninput="calcular()"></td>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Relation h/D:</th>
                <td><input value="<?php echo ($Search_Table['Relation_hD']); ?>" type="text" style="border: none; background: transparent;" size="4" id="3" name="RelationhD" oninput="calcular()"></td>
              <tr>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Area (m2):</th>
                <td><input value="<?php echo ($Search_Table['Area_m2']); ?>" type="text" style="border: none; background: transparent;" size="4" id="4" name="Aream2" oninput="calcular()"></td>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Volume (m3):</th>
                <td><input value="<?php echo ($Search_Table['Volume_m3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="5" name="Volumem3" oninput="calcular()"></td>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Weight of the Core (Kg):</th>
                <td><input value="<?php echo ($Search_Table['Weight_Core_Kg']); ?>" type="text" style="border: none; background: transparent;" size="4" id="6" name="WeightCoreKg" oninput="calcular()"></td>
            <tr>
               <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Unit Weight of the Core (Kg/m³):</th>
               <td><input value="<?php echo ($Search_Table['Unit_Weight_Core_kgm3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="7" name="UnitWeightCorekgm3" oninput="calcular()"></td>
               <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Failure Load (KN):</th>
               <td><input value="<?php echo ($Search_Table['Failure_Loand_KN']); ?>" type="text" style="border: none; background: transparent;" size="4" id="8" name="FailureLoandKN" oninput="calcular()"></td>
               <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Test Timing (s):</th>
               <td><input value="<?php echo ($Search_Table['Test_Timing_S']); ?>" type="text" style="border: none; background: transparent;" size="4" id="9" name="TestTimingS" oninput="calcular()"></td>
            <tr>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Load Proportion (Mpa/s):</th>
                <td><input value="<?php echo ($Search_Table['Load_Proportion_Mpas']); ?>" type="text" style="border: none; background: transparent;" size="4" id="10" name="LoadProportionMpas" oninput="calcular()"></td>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Uniaxial Compressive Strenght (Mpa):</th>       
                <td><input value="<?php echo ($Search_Table['uniaxial_Compressive_Strenght_Mpa']); ?>" type="text" style="border: none; background: transparent;" size="4" id="11" name="uniaxialCompressiveStrenghtMpa" oninput="calcular()"></td>
            </tr>
        </table>

<button type="submit" name="repetir_muestra" class="btn btn-warning">Enviar ensayo repetir</button>
<div class="btn-group dropup" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Generar PDF
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Contrucion</a></li>
                    <li><a href="PDF/UCS_Core_Specimen_Rev_3.php?id=<?php echo intval($Search_Table['id']); ?>">Investigacion</a></li>
                    </ul>
                    </div>
<button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>
                <script>
                    function calcular() {
                      // Obtenemos los valores de los campos de entrada
                      var dD = parseFloat(document.getElementById("1").value);
                      var dh = parseFloat(document.getElementById("2").value);
                      var wc = parseFloat(document.getElementById("6").value);
                    
                      // Calculamos los resultados
                      var relh = dh / dD;
                      var area = Math.PI * ((dD / 2) ** 2) * 0.0001;
                      var volume = area * (dh * 0.01);
                      var Uwc = wc / volume;
                    
                      // Pasamos los resultados a los elementos correspondientes
                      document.getElementById("3").value = relh.toFixed(3);
                      document.getElementById("4").value = area.toFixed(5);
                      document.getElementById("5").value = volume.toFixed(6);
                      document.getElementById("7").value = Uwc.toFixed(3);
                    }
                    </script>
                      
                    
                
                </form>
              
                    
                    <?php include_once('layouts/footer.php'); ?>