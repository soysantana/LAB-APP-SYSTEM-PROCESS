<?php
$page_title = 'PLT Calculation ';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);

$PLT = find_by_id('point_load_test', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Point Load test Calculation</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="PLT.php" onsubmit="calcular()">

            <table class="table table-bordered">
                <thead>
                <tbody id="product_info"></tbody>
          </div>
          <div class="col-xs-4">
            <label>Standard</label>
            <select class="form-control" name="Standard">
              <option <?php if ($PLT['Standard'] == 'ASTM-D4318') echo 'selected'; ?>>ASTM-D4318</option>  
            </select>
          </div>
          <div class="col-xs-4">
            <label>Method</label>
            <select class="form-control" type = "text" name="Method" id="1">
              <option <?php if ($PLT['Method'] == 'diametral') echo 'selected'; ?>>Diametral</option>  
              <option <?php if ($PLT['Method'] == 'axial') echo 'selected'; ?>>Axial</option>  
              <option <?php if ($PLT['Method'] == 'block') echo 'selected'; ?>>Block</option>  
              <option <?php if ($PLT['Method'] == 'lump') echo 'selected'; ?>>Irregular Lump</option>  
            </select>
          </div>
    
          <div class="col-xs-4">
            <label>Extraction Equipment:</label>
            <input class="form-control" name="ExtraEquip" value="<?php echo ($PLT['Extraction_Equipment']); ?>" type="text">
          </div>

          <div class="col-xs-4">
            <label>Cutter Equipment:</label>
            <input class="form-control" name="CutterEquip" value="<?php echo ($PLT['Cutter_Equipment']); ?>" type="text">
          </div>
          <div class="col-xs-4">
            <label>Test Device:</label>
            <input class="form-control" name="TestDevice" value="<?php echo ($PLT['Test_Device']); ?>" type="text">
          </div>
          <div class="col-xs-4">
            <label>Temperature:</label>
            <input class="form-control" name="Temperature" value="<?php echo ($PLT['Temperature']); ?>" type="text">
          </div>
    
          <div class="col-xs-4">
            <label>Comments</label>
            <textarea class="form-control" name="Comments"><?php echo ($PLT['Comments']); ?></textarea>
          </div>
    
          <div class="col-xs-4">
            <label>Technician</label>
            <input class="form-control" name="Technician" value="<?php echo ($PLT['Technician']); ?>" type="text">
          </div>
    
          <div class="col-xs-4">
            <label>Test Start Date</label>
            <input class="form-control" name="TestStartDate" value="<?php echo ($PLT['Test_Start_Date']); ?>" type="date">
          </div>

          <div class="panel-body">
            <div class="col-md-12">
            </div>
          </div>
          <div style="display: flex; flex-direction: row; justify-content: space-between;">
            <table class="table table-bordered border-primary" style="width:450px;">
              <thead>
              </thead>
              <caption>Point Load Test Device Values</caption>
              <tbody>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Effective Area of Jack Piston (m²)</th>
                  <td><input type="text" value="<?php echo ($PLT['Effective_Area_of_Jack_Piston_m2']); ?>" style="border: none;" size="4" style="background: transparent;" id="2" name="EffectiveAreaofJackPistonm2" oninput="calcular()"></td>
                </tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">k₁ value (assumed value to correlate Is50 to UCS):</th>
                  <td><input type="text" value="<?php echo ($PLT['K1_Value_Assumed_Value_To_Correlate_Is50_To_UCS']); ?>" style="border: none;" size="4" style="background: transparent;" id="3" name="K1ValueAssumedValueToCorrelateIs50ToUCS" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">k₂ value (assumed)::</th>
                <td><input type="text" value="<?php echo ($PLT['K2_Value_Assumed']); ?>" style="border: none;" size="4" style="background: transparent;" id="4" name="K2ValueAssumed" oninput="calcular()"></td>
              </tr>
              
              <table class="table table-bordered border-primary" style="width: 450px;">
                <caption>Testing Information</caption>
                <tr>
                  <th style="font-size: 16px; width: 350px; height: 25px;" scope="row" colspan="3">Test Type (A, B, C, D):</th>
                  <td><input type="text" value="<?php echo ($PLT['Test_Type_A_B_C_D']); ?>" style="border: none; background: transparent;" size="4" id="5" name="TestTypeABCD" oninput="calcular()"></td>
                </tr>
                <tr>
                  <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">Dimension L (mm):</th>
                  <td><input type="text" value="<?php echo ($PLT['Dimension_L_mm']); ?>" style="border: none; background: transparent;" size="4" id="6" name="DimensionLmm" oninput="calcular()"></td>
                
                
                  <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">Dimension D or W (mm):</th>
                  <td><input type="text" value="<?php echo ($PLT['Dimension_D_or_W_mm']); ?>" style="border: none; background: transparent;" size="4" id="7" name="DimensionDorWmm" oninput="calcular()"></td>
                
                <tr>
                  <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">Plattens Separation (mm):</th>
                  <td><input type="text" value="<?php echo ($PLT['Plattens_Separation_mm']); ?>" style="border: none; background: transparent;" size="4" id="8" name="PlattensSeparationmm" oninput="calcular()"></td>
                
                  <th style="font-size: 15px; width: 450px; height: 25px;" scope="row">Load Direction:</th>
                  <td>
                    <select class="form-control" name="LoadDirection">
                      <option <?php if ($PLT['Load_Direction'] == 'Perpendicular') echo 'selected'; ?>>⊥</option>  
                      <option <?php if ($PLT['Load_Direction'] == 'Parallel') echo 'selected'; ?>>//</option>  
                    </select>
                  </td>
                </tr>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">Gauge Reading (Mpa):</th>
                  <td><input type="text" value="<?php echo ($PLT['Gauge_Reading_Mpa']); ?>" style="border: none; background: transparent;" size="4" id="9" name="GaugeReadingMpa" oninput="calcular()"></td>
                
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">Failure Laod (MN):</th>
                  <td><input type="text" value="<?php echo ($PLT['Failure_Laod_MN']); ?>" style="border: none; background: transparent;" size="4" id="10" name="FailureLaodMN" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">De (mm):</th>
                  <td><input type="text" value="<?php echo ($PLT['De_mm']); ?>" style="border: none; background: transparent;" size="4" id="11" name="Demm" oninput="calcular()"></td>
             
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">Is (Mpa):</th>
                <td><input type="text" value="<?php echo ($PLT['De_mm']); ?>" style="border: none; background: transparent;" size="4" id="12" name="IsMpa" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">F:</th>
                <td><input type="text" value="<?php echo ($PLT['F']); ?>" style="border: none; background: transparent;" size="4" id="13" name="F" oninput="calcular()"></td>
              
              <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">Is 50:</th>
              <td><input type="text" value="<?php echo ($PLT['Is_50']); ?>" style="border: none; background: transparent;" size="4" id="14" name="Is50" oninput="calcular()"></td>
            </tr>
            <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">UCS From k1 (Mpa):</th>
                <td><input type="text" value="<?php echo ($PLT['UCS_From_K1_Mpa']); ?>" style="border: none; background: transparent;" size="4" id="15" name="UCSFromK1Mpa" oninput="calcular()"></td>
              
              <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">UCS From k2 (Mpa):</th>
              <td><input type="text" value="<?php echo ($PLT['UCS_From_K2_Mpa']); ?>" style="border: none; background: transparent;" size="4" id="16" name="UCSFromK2Mpa" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row" colspan="3">Strenght Classification :</th>
                <td><input type="text" value="<?php echo ($PLT['Strenght_Classification']); ?>" style="border: none; background: transparent;" size="6" id="17" name="StrenghtClassification" oninput="calcular()"></td>
              </tr>
              </table>
        


              <script>
                function calcular() {
                  // declaramos todas las variables a usar.
                  var apiston = parseFloat(document.getElementById("2").value);
                  var k1 = parseFloat(document.getElementById("3").value);
                  var k2 = parseFloat(document.getElementById("4").value);
                  var texttype = document.getElementById("5").value;
                  var dimL = parseFloat(document.getElementById("6").value);
                  var dimD = parseFloat(document.getElementById("7").value);
                  var plattensep = parseFloat(document.getElementById("8").value);
                  var Gr = parseFloat(document.getElementById("9").value);
                  var selectElement = document.getElementById("1");
                  var selectedOption = selectElement.options[selectElement.selectedIndex].value;
              
                  function obtenerLetra(palabra) {
                    let letra = '';
                    palabra = palabra.toLowerCase();
                    if (palabra === 'diametral') {
                      letra = 'A';
                    } else if (palabra === 'axial') {
                      letra = 'B';
                    } else if (palabra === 'block') {
                      letra = 'C';
                    } else if (palabra === 'lump') {
                      letra = 'D';
                    }
                    return letra;
                  }
              
                  var De;
              
                  // Calculamos el valor de De
                  if (texttype === "B") {
                    De = Math.sqrt(4 * dimD * plattensep / Math.PI);
                  } else if (texttype === "A") {
                    De = dimD;
                  } else if (texttype === "C") {
                    De = Math.sqrt(4 * dimD * plattensep/ Math.PI);
                  } else if (texttype === "D") {
                    De = Math.sqrt(4 * dimD * plattensep/ Math.PI);
                  } else {
                    De = 0; 
                  }

                  var Fload = Gr > 0 ? Gr * apiston : 0;
                  
                  var Is = Fload / Math.pow(De / 1000, 2);
                  var F =   Math.pow(De / 50, 0.45);
                  var Is50 = Is * F;
                  var k1ucs = k1 * Is50;
                  var k2ucs = k2 * Is50;

                  function clasificarCarga(Is) {
                  if (Is< 0.03) {
                  return 'Extremly Low';
                  } else if ( Is>= 0.03 && Is < 0.1) {
                 return 'Very Low';
                } else if (Is >= 0.1 && Is < 0.3) {
                 return 'Low';
                 } else if (Is >= 0.3 && Is < 1) {
                     return 'Medium';
                } else if (Is >= 1 && Is < 3) {
                    return 'High';
                } else if (Is >= 3 && Is < 10) {
                    return 'Very High';
                } else {
                    return 'Extremelly High';
                }
                }

                  // Pasamos los resultados a los elementos correspondientes
                  document.getElementById("5").value = obtenerLetra(selectedOption);
                  document.getElementById("10").value = Fload.toFixed(3);
                  document.getElementById("11").value = De.toFixed(3);
                  document.getElementById("12").value = Is.toFixed(3);
                  document.getElementById("13").value = F.toFixed(3);
                  document.getElementById("14").value = Is50.toFixed(3);
                  document.getElementById("15").value = k1ucs.toFixed(3);
                  document.getElementById("16").value = k2ucs.toFixed(3);
                  document.getElementById("17").value = clasificarCarga(Is);


                }
              </script>
              <div class="col-md-12">
                    <span class="glyphicon glyphicon-camera"></span>
                    <span>Specimen Before Test</span>
                    <div class="pull-right">
                      <form class="form-inline" action="PLT.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <input type="file" name="file_upload" multiple="multiple" class="btn btn-primary btn-file"/>
                         </span>
        
                         <button type="submit" name="submit" class="btn btn-default">Subir</button>
                       </div>
                      </div>

                      <span class="glyphicon glyphicon-camera"></span>
                      <span>Specimen After Test</span>
                      <div class="pull-right">
                        <form class="form-inline" action="PLT.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-btn">
                              <input type="file" name="file_upload" multiple="multiple" class="btn btn-primary btn-file"/>
                           </span>
          
                           <button type="submit" name="submit" class="btn btn-default">Subir</button>
                         </div>
                        </div>
                     </form>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
              <button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
              <a href="PDF/PLT_Rev_2.php?id=<?php echo intval($PLT['id']); ?>" class="btn btn-primary">Generar PDF</a>
                  </form>
                
                </div>
                </div>
                </div>
                </div>

                <?php include_once('layouts/footer.php'); ?>