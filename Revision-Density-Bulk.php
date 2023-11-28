<?php
$page_title = 'BULK DENSITY AND VOIDS IN AGGREGATES';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('db/DensityBulk.php'); 
  }
$search_table = find_by_id('density_bulk', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
    <?php echo display_msg($msg); ?>
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>BULK DENSITY AND VOIDS IN AGGREGATES</span>
                </strong>
            </div>
            <div class="panel-body">
                <form method="post" action="" onsubmit="calcular()">

                    <table class="table table-bordered">
                        <thead>
                        <tbody id="product_info"></tbody>
            </div>
            <div class="col-xs-4">
                <label>Standard</label>
                <select class="form-control" name="Standard">
                    <option <?php if ($search_table['Standard'] == 'ASTM C29') echo 'selected'; ?>>ASTM C29</option>   
                </select>
            </div>
            <div class="col-xs-4">
                <label>Method</label>
                <select class="form-control" type="text" name="PreparationMethod" id="">
                <option <?php if ($search_table['Preparation_Method'] == 'A') echo 'selected'; ?>>A</option>   
                <option <?php if ($search_table['Preparation_Method'] == 'B') echo 'selected'; ?>>B</option>   
                <option <?php if ($search_table['Preparation_Method'] == 'C') echo 'selected'; ?>>C</option>   
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
                </div>
            </div>


<div>
    <table class="table table-bordered" style="width: 50%;">
        <thead>
            <caption>Loose Bulk Density</caption>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Sample ID</th>
                <td><input value="<?php echo ($search_table['Container']); ?>" type="text" style="border: none; background: transparent;" size="4" id="" name="Container" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight of tare (g)</th>
                <td><input value="<?php echo ($search_table['Weight_Tare_g']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Weig-Tare-g" name="WeightTareg" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight of tare + Soil (g)</th>
                <td><input value="<?php echo ($search_table['Weight_Tare_Soil_g']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Weig-Tare-Soil-g" name="WeightTareSoilg" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Volume of the Mold (m³)</th>
                <td><input value="<?php echo ($search_table['Volume_The_Mold_m3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Vol-the-Mold-m3" name="VolumeTheMoldm3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight Loose Material (g)</th>
                <td><input value="<?php echo ($search_table['Weight_Loose_Material_g']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Weig-Loose-Material-g" name="WeightLooseMaterialg" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Absorption %</th>
                <td><input value="<?php echo ($search_table['Absorption_Porce']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Absorption-Porce" name="AbsorptionPorce" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Specific Gravity (OD)</th>
                <td><input value="<?php echo ($search_table['Specific_Gravity_OD']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Sg-OD" name="SpecificGravityOD" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Density of Water (Kg/m³)</th>
                <td><input value="<?php echo ($search_table['Density_Water_Kgm3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Densy-Wt-Kgm3" name="DensityWaterKgm3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Loose Bulk Denisty (Kg/m³)</th>
                <td><input value="<?php echo ($search_table['Loose_Bulk_Denisty_Kgm3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Loose-Bulk-Densy-Kgm3" name="LooseBulkDenistyKgm3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Percent Voids in loose Aggregate</th>
                <td><input value="<?php echo ($search_table['Percent_Voids_Loose_Aggregate']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Percent-Voids-Loose-Agg" name="PercentVoidsLooseAggregate" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>



<div style="display: flex; justify-content: flex-end; margin-top: -30.2%; margin-bottom: 10%;">
    <table class="table table-bordered" style="width: 40%;">
        <thead>
            <caption>Compacted Bulk Density</caption>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Weight of tare (g)</th>
                <td><input value="<?php echo ($search_table['Compacted_Weight_Tare_g']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Weig-Tare-Compacted" name="CompactedWeightTareg" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight of tare + Soil (g)</th>
                <td><input value="<?php echo ($search_table['Compacted_Weight_Tare_Soil_g']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Weig-Tare-Soil-Compacted" name="CompactedWeightTareSoilg" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Volume of the Mold (m³)</th>
                <td><input value="<?php echo ($search_table['Compacted_Volume_The_Mold_m3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Vol-Mold-m3-Compacted" name="CompactedVolumeTheMoldm3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight Compacted Material (g)</th>
                <td><input value="<?php echo ($search_table['Weight_Compacted_Material_g']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Weig-Compacted-Material" name="WeightCompactedMaterialg" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Absorption %</th>
                <td><input value="<?php echo ($search_table['Compacted_Absorption_Porce']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Absorption-Porce-Compacted" name="CompactedAbsorptionPorce" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Specific Gravity (OD)</th>
                <td><input value="<?php echo ($search_table['Compacted_Specific_Gravity_OD']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Sg-OD-Compacted" name="CompactedSpecificGravityOD" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Density of Water (Kg/m³)</th>
                <td><input value="<?php echo ($search_table['Compacted_Density_Water_Kgm3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Densy-Wt-Kgm3-Compacted" name="CompactedDensityWaterKgm3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Compacted Bulk Denisty (Kg/m³)</th>
                <td><input value="<?php echo ($search_table['Compacted_Bulk_Denisty_Kgm3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Compacted-Bulk-Densy" name="CompactedBulkDenistyKgm3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Percent Voids in compacted Aggregate</th>
                <td><input value="<?php echo ($search_table['Percent_Voids_Compacted_Aggregate']); ?>" type="text" style="border: none; background: transparent;" size="4" id="Percent-Voids-Compacted-Agg" name="PercentVoidsCompactedAggregate" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div>
<button type="submit" name="repetir_muestra" class="btn btn-warning">Enviar ensayo repetir</button>
<div class="btn-group dropup" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Generar PDF
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Contrucion</a></li>
                    <li><a href="PDF/Density_Bulk_Rev_1.php?id=<?php echo intval($search_table['id']); ?>">Investigacion</a></li>
                    </ul>
                    </div>
<button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>
</div>

<script>
    function convertToNumberOrZero(value) {
        const parsedValue = parseFloat(value);
        return isNaN(parsedValue) ? 0 : parsedValue;
    }

    function calcular() {

        WeigTareg = convertToNumberOrZero(document.getElementById("Weig-Tare-g").value);
        WeigTareSoilg = convertToNumberOrZero(document.getElementById("Weig-Tare-Soil-g").value);
        VoltheMoldm3 = convertToNumberOrZero(document.getElementById("Vol-the-Mold-m3").value);
        AbsorptionPorce = convertToNumberOrZero(document.getElementById("Absorption-Porce").value);
        SgOD = convertToNumberOrZero(document.getElementById("Sg-OD").value);
        DensyWtKgm3 = convertToNumberOrZero(document.getElementById("Densy-Wt-Kgm3").value);

        WeigTareCompacted = convertToNumberOrZero(document.getElementById("Weig-Tare-Compacted").value);
        WeigTareSoilCompacted = convertToNumberOrZero(document.getElementById("Weig-Tare-Soil-Compacted").value);
        VolMoldm3Compacted = convertToNumberOrZero(document.getElementById("Vol-Mold-m3-Compacted").value);
        WeigCompactedMaterial = convertToNumberOrZero(document.getElementById("Weig-Compacted-Material").value);
        AbsorptionPorceCompacted = convertToNumberOrZero(document.getElementById("Absorption-Porce-Compacted").value);
        SgODCompacted = convertToNumberOrZero(document.getElementById("Sg-OD-Compacted").value);
        DensyWtKgm3Compacted = convertToNumberOrZero(document.getElementById("Densy-Wt-Kgm3-Compacted").value);
        
        const WeigLsMtg = WeigTareSoilg-WeigTareg;
        const LsBkDensyKgm3 = (WeigLsMtg/1000)/VoltheMoldm3;
        const PorcentVoidsLsAgg = 100*((SgOD*DensyWtKgm3)-LsBkDensyKgm3)/(SgOD*DensyWtKgm3);
        const CompactedBkDensyKgm3 = (WeigCompactedMaterial/1000)/VolMoldm3Compacted;
        const PorcentCompactedAgg = 100*((SgODCompacted*DensyWtKgm3Compacted)-CompactedBkDensyKgm3)/(SgODCompacted*DensyWtKgm3Compacted);

        document.getElementById("Weig-Loose-Material-g").value = isNaN(WeigLsMtg) ? 0 : WeigLsMtg.toFixed(2);
        document.getElementById("Loose-Bulk-Densy-Kgm3").value = isNaN(LsBkDensyKgm3) ? 0 : LsBkDensyKgm3.toFixed(2);
        document.getElementById("Percent-Voids-Loose-Agg").value = isNaN(PorcentVoidsLsAgg) ? 0 : PorcentVoidsLsAgg.toFixed(2);
        document.getElementById("Compacted-Bulk-Densy").value = isNaN(CompactedBkDensyKgm3) ? 0 : CompactedBkDensyKgm3.toFixed(2);
        document.getElementById("Percent-Voids-Compacted-Agg").value = isNaN(PorcentCompactedAgg) ? 0 : PorcentCompactedAgg.toFixed(2);
    }
</script>

<?php include_once('layouts/footer.php'); ?>