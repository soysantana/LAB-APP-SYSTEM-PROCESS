<?php
$page_title = 'BULK DENSITY AND VOIDS IN AGGREGATES';
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
                    <input type="text" id="sug_input" class="form-control" name="title"
                        placeholder="Buscar por el nombre de la muestra">
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
                    <span>BULK DENSITY AND VOIDS IN AGGREGATES</span>
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
                    <option value="ASTM C29">ASTM C29</option>
                </select>
            </div>
            <div class="col-xs-4">
                <label>Method</label>
                <select class="form-control" type="text" name="method" id="">
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
    <table class="table table-bordered" style="width: 50%;">
        <thead>
            <caption>Loose Bulk Density</caption>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Sample ID</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight of tare (g)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Weig-Tare-g" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight of tare + Soil (g)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Weig-Tare-Soil-g" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Volume of the Mold (m³)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Vol-the-Mold-m3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight Loose Material (g)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Weig-Loose-Material-g" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Absorption %</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Absorption-Porce" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Specific Gravity (OD)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Sg-OD" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Density of Water (Kg/m³)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Densy-Wt-Kgm3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Loose Bulk Denisty (Kg/m³)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Loose-Bulk-Densy-Kgm3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Percent Voids in loose Aggregate</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Percent-Voids-Loose-Agg" oninput="calcular()"></td>
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
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Weig-Tare-Compacted" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight of tare + Soil (g)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Weig-Tare-Soil-Compacted" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Volume of the Mold (m³)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Vol-Mold-m3-Compacted" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight Compacted Material (g)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Weig-Compacted-Material" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Absorption %</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Absorption-Porce-Compacted" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Specific Gravity (OD)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Sg-OD-Compacted" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Density of Water (Kg/m³)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Densy-Wt-Kgm3-Compacted" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Compacted Bulk Denisty (Kg/m³)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Compacted-Bulk-Densy" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Percent Voids in compacted Aggregate</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="Percent-Voids-Compacted-Agg" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div>
    <button type="submit" name="add_mcoven" class="btn btn-danger">Registrar ensayo</button>
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