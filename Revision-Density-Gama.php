<?php
$page_title = 'Standard Count for Nuclear Gauche';
require_once('includes/load.php');
// Verifica el nivel de permiso del usuario para ver esta página
page_require_level(3);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('db/EnsayoGama.php'); 
  }
$SearchTable = find_by_id('ensayo_gama', (int)$_GET['id']);
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
    <?php echo display_msg($msg); ?>
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Standard Count for Nuclear Gauche</span>
                </strong>
            </div>
            <div class="panel-body">
                <form method="post" action="" oninput="calcular()">
                    <div class="col-xs-4">
                        <label>Standard</label>
                        <select class="form-control" name="Standard">
                        <option <?php if ($SearchTable['Standard'] == 'Choose...') echo 'selected'; ?>>Choose...</option>
                        <option <?php if ($SearchTable['Standard'] == 'ASTM D6938') echo 'selected'; ?>>ASTM D6938</option>
                        </select>
                    </div>
                    <div class="col-xs-4">
                        <label>Method</label>
                        <select class="form-control" type="text" name="PreparationMethod" id="">
                        <option <?php if ($SearchTable['Preparation_Method'] == 'Choose...') echo 'selected'; ?>>Choose...</option> 
                        <option <?php if ($SearchTable['Preparation_Method'] == 'A') echo 'selected'; ?>>A</option>   
                        <option <?php if ($SearchTable['Preparation_Method'] == 'B') echo 'selected'; ?>>B</option>   
                        <option <?php if ($SearchTable['Preparation_Method'] == 'C') echo 'selected'; ?>>C</option>
                        </select>
                    </div>
                    <div class="col-xs-4">
                        <label>Comments</label>
                        <textarea class="form-control" name="Comments"><?php echo ($SearchTable['Comments']); ?></textarea>
                    </div>
                    <div class="col-xs-4">
                        <label>Technician</label>
                        <input class="form-control" name="Technician" value="<?php echo ($SearchTable['Technician']); ?>" type="text">
                    </div>
                    <div class="col-xs-4">
                        <label>Test Start Date</label>
                        <input class="form-control" name="TestStartDate" value="<?php echo ($SearchTable['Test_Start_Date']); ?>" type="date">
                    </div>
                    <table class="table table-bordered">
                        <tbody id="product_info"></tbody>
                    </table>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <table class="table table-bordered" style="width: 20%;">
                            <thead>
                                <caption></caption>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">Station</th>
                                    <td><input value="<?php echo ($SearchTable['Station']); ?>" type="text" style="border: none; background: transparent;" name="Station" id="Station"></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-bordered" style="width: 30%;">
                            <thead>
                                <caption>Field Test Result</caption>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">Max Dry Density ( Kg/m3)</th>
                                    <td><input value="<?php echo ($SearchTable['Max_Dry_Density_Kgm3']); ?>" type="text" style="border: none; background: transparent;" name="MaxDryDensityKgm3" id="Max-Dry-Densy-Kgm3"></td>
                                </tr>
                                <tr>
                                    <th scope="col">Max Wet Density (Kg/m3)</th>
                                    <td><input value="<?php echo ($SearchTable['Max_Wet_Density_Kgm3']); ?>" type="text" style="border: none; background: transparent;" name="MaxWetDensityKgm3" id="Max-Wet-Densy-kgm3"></td>
                                </tr>
                                <tr>
                                    <th scope="col">Percent Moisture Content</th>
                                    <td><input value="<?php echo ($SearchTable['Percent_Moisture_Content']); ?>" type="text" style="border: none; background: transparent;" name="PercentMoistureContent" id="Porce-MC"></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-bordered" style="width: 35%;">
                            <thead>
                                <caption>LAB Test Result</caption>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">Optimun Moisture Content %</th>
                                    <td style="width: 10%;"><input value="<?php echo ($SearchTable['Optimun_Moisture_Content']); ?>" type="text" style="border: none; background: transparent;" name="OptimunMoistureContent" id="Optimun-MC-Porce"></td>
                                </tr>
                                <tr>
                                    <th scope="col">Max Dry Density (kg/m3)</th>
                                    <td><input value="<?php echo ($SearchTable['Max_Dry_Density']); ?>" type="text" style="border: none; background: transparent;" name="MaxDryDensity" id="Max-Dry-Density-Lab"></td>
                                </tr>
                                <tr>
                                    <th scope="col">Percent of Compaction</th>
                                    <td><input value="<?php echo ($SearchTable['Percent_of_Compaction']); ?>" type="text" style="border: none; background: transparent;" name="PercentofCompaction" id="Porce-Compaction-Lab"></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <button type="submit" name="repetir_muestra" class="btn btn-warning">Enviar ensayo repetir</button>
                    <div class="btn-group dropup" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Generar PDF
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Contrucion</a></li>
                    <li><a href="PDF/Density_Bulk_Rev_1.php?id=<?php echo intval($SearchTable['id']); ?>">Investigacion</a></li>
                    </ul>
                    </div>
                    <button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function convertToNumberOrZero(value) {
        const parsedValue = parseFloat(value);
        return isNaN(parsedValue) ? 0 : parsedValue;
    }
    function calcular() {
        MaxDryDensyKgm31 = convertToNumberOrZero(document.getElementById("Max-Dry-Densy-Kgm3").value);
        MaxDryDensityLab = convertToNumberOrZero(document.getElementById("Max-Dry-Density-Lab").value);
        const PorceCompactionLab = (MaxDryDensyKgm31/MaxDryDensityLab)*100;
        document.getElementById("Porce-Compaction-Lab").value = isNaN(PorceCompactionLab) ? 0 : PorceCompactionLab.toFixed(0);
    }
</script>
<?php include_once('layouts/footer.php'); ?>
