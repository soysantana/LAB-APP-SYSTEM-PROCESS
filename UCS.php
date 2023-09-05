<?php
$page_title = 'Uniaxial Compressive Strength Calculation ';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/UCS.php'); 
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
          <span> Unixial Compressive Strength Calculation</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="UCS.php" onsubmit="calcular()">

            <table class="table table-bordered">
                <thead>
                <tbody id="product_info"></tbody>
          </div>
          <div class="col-xs-4">
            <label>Standard</label>
            <select class="form-control" name="Standard">
              <option selected>Choose...</option>
              <option value="ASTM-D4318">ASTM-D7012</option>
            </select>
          </div>
          <div class="col-xs-4">
            <label>Method</label>
            <select class="form-control" type = "text" name="Method">
              <option selected>Choose...</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
            </select>
          </div>
    
          <div class="col-xs-4">
            <label>Extraction Equipment:</label>
            <input class="form-control" name="ExtraEquip" type="text">
          </div>

          <div class="col-xs-4">
            <label>Cutter Equipment:</label>
            <input class="form-control" name="CutterEquip" type="text">
          </div>
          <div class="col-xs-4">
            <label>Test Device:</label>
            <input class="form-control" name="TestDevice" type="text">
          </div>
          <div class="col-xs-4">
            <label>Temperature:</label>
            <input class="form-control" name="Temperature" type="text">
          </div>
    
          <div class="col-xs-4">
            <label>Comments</label>
            <textarea class="form-control" name="Comments"></textarea>
          </div>
    
          <div class="col-xs-4">
            <label>Technician</label>
            <input class="form-control" name="Technician" type="text">
          </div>
        </div>
          <div class="col-xs-4">
            <label>Test Start Date</label>
            <input class="form-control" name="TestStartDate" type="date">
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
                <td><input type="text" style="border: none; background: transparent;" size="4" id="1" name="DimensionDcm" oninput="calcular()"></td>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row">Dimension h (cm):</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="2" name="DimensionHcm" oninput="calcular()"></td>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Relation h/D:</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="3" name="RelationhD" oninput="calcular()"></td>
              <tr>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Area (m2):</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="4" name="Aream2" oninput="calcular()"></td>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Volume (m3):</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="5" name="Volumem3" oninput="calcular()"></td>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Weight of the Core (Kg):</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="6" name="WeightCoreKg" oninput="calcular()"></td>
            <tr>
               <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Unit Weight of the Core (Kg/m³):</th>
               <td><input type="text" style="border: none; background: transparent;" size="4" id="7" name="UnitWeightCorekgm3" oninput="calcular()"></td>
               <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Failure Load (KN):</th>
               <td><input type="text" style="border: none; background: transparent;" size="4" id="8" name="FailureLoandKN" oninput="calcular()"></td>
               <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Test Timing (s):</th>
               <td><input type="text" style="border: none; background: transparent;" size="4" id="9" name="TestTimingS" oninput="calcular()"></td>
            <tr>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Load Proportion (Mpa/s):</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="10" name="LoadProportionMpas" oninput="calcular()"></td>
                <th style="font-size: 15px; width: 350px; height: 25px;" scope="row"> Uniaxial Compressive Strenght (Mpa):</th>       
                <td><input type="text" style="border: none; background: transparent;" size="4" id="11" name="uniaxialCompressiveStrenghtMpa" oninput="calcular()"></td>
            </tr>
        </table>

        <button type="submit" name="UCS" class="btn btn-danger">Registrar ensayo</button>
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
                      
                      <div class="col-md-12">
                        <span class="glyphicon glyphicon-camera"></span>
                        <span>Graphic Failure Load versus Time </span>
                        <div class="pull-right">
                          <form class="form-inline" action="" method="POST" enctype="multipart/form-data">
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
                            <form class="form-inline" action="" method="POST" enctype="multipart/form-data">
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
                              <form class="form-inline" action="" method="POST" enctype="multipart/form-data">
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
                    </div>
                    
                    
                
                </form>
              
                    
                    <?php include_once('layouts/footer.php'); ?>