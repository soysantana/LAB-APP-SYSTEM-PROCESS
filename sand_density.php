<?php
$page_title = 'SAND DENSITY CALIBRATION';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('db/SandDensity.php'); 
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
<input type="text" id="sug_input" class="form-control" name="title"  placeholder="Buscar por el nombre de la muestra">
</div>
<div id="result" class="list-group"></div>
</div>
</form>
</div>
</div>
<div class="row"></div>
<div class="col-md-12"></div>
<div class="panel panel-default">
<div class="panel-heading clearfix">
<strong>
<span class="glyphicon glyphicon-th"></span>
<span>SAND DENSITY CALIBRATION</span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="sand_density.php" onsubmit="calcular();">

<table class="table table-bordered">
<thead>
<tbody id="product_info"></tbody>
</div>
<div class="col-xs-4">
<label >Standard</label>
<select class="form-control" name="Standard">
<option selected>Choose...</option>
<option value="ASTM D1556">ASTM D1556</option>         
</select>
</div>

<div class="col-xs-4">
<label >Preparation Method</label>
<select class="form-control" name="PreparationMethod">
<option selected>Choose...</option>
<option value="Oven_Dried">Oven Dried</option>
<option value="Air_Dried">Air Dried</option>
</select>
</div>

<div class="col-xs-4">
<label >Split Method</label>
<select class="form-control" name="SplitMethod">
<option selected>Choose...</option>
<option value="Mech_Split">Mech. Split</option>
<option value="Man_Split">Manual Split</option>
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


<div>
    <table class="table table-bordered" style="width: 60%;">
        <thead>
            <caption style="text-align: center;">Bulk Density of Sand</caption>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Trials</th>
                <th scope="col">1</th>
                <th scope="col">2</th>
                <th scope="col">3</th>
            </tr>
            <tr>
                <th scope="row">Weight of Sand + Mold (g)</th>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandMold1" id="1"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandMold2" id="2"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandMold3" id="3"oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Mold</th>
                <td><input type="text" style="border: none; background: transparent;" name="Mold1" id="4"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="Mold2" id="5"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="Mold3" id="6"oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Weight Mold (g)</th>
                <td><input type="text" style="border: none; background: transparent;" name="WeightMold1" id="7"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="WeightMold2" id="8"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="WeightMold3" id="9"oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Weight of Sand in Mold (g)</th>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandInMold1" id="10"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandInMold2" id="11"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandInMold3" id="12"oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Volume of Mold (cm3)</th>
                <td><input type="text" style="border: none; background: transparent;" name="VolumeMoldcm31" id="13"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="VolumeMoldcm32" id="14"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="VolumeMoldcm33" id="15"oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Bulk Density of Sand (g/cm3)</th>
                <td><input type="text" style="border: none; background: transparent;" name="BulkDensitySandgcm31" id="16"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="BulkDensitySandgcm32" id="17"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="BulkDensitySandgcm33" id="18"oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Average Bulk Density of Sand (g/cm3)</th>
                <td colspan="3"><input type="text" style="border: none; text-align: center; background: transparent;" name="AverageBulkDensitySand" id="19"oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>



<div style="margin-left: 1%;">
    <table class="table table-bordered" style="width: 60%;">
        <thead>
            <caption style="text-align: center;">Volume of  Funnel</caption>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Trials</th>
                <th scope="col">1</th>
                <th scope="col">2</th>
                <th scope="col">3</th>
            </tr>
            <tr>
                <th scope="row">Weight of Sand + Container Before Test (g)</th>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandContainerBeforeTest1" id="20"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandContainerBeforeTest2" id="21"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandContainerBeforeTest3" id="22"oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Weight of Sand + Container After Test (g)</th>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandContainerAfterTest1" id="23"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandContainerAfterTest2" id="24"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandContainerAfterTest3" id="25"oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Weight Sand Used (g)</th>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandUsed1" id="26"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandUsed2" id="27"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="WeightSandUsed3" id="28"oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Bulk Density of Sand (g/cm3)</th>
                <td><input type="text" style="border: none; background: transparent;" name="BulkDensityofSand1" id="29"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="BulkDensityofSand2" id="30"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="BulkDensityofSand3" id="31"oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Volume of Funnel (cm3)</th>
                <td><input type="text" style="border: none; background: transparent;" name="VolumeFunnel1" id="32"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="VolumeFunnel2" id="33"oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="VolumeFunnel3" id="34"oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="row">Average Volume of Funnel (cm3)</th>
                <td colspan="3"><input type="text" style="border: none; background: transparent;" name="AverageVolumeFunnel" id="35"oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="margin-left: 1%;">
    <button type="submit" name="SandDensity" class="btn btn-danger">Registrar ensayo</button>
</div>

<Script>

function calcular() {

    // BulkN Density Sand
    SandMoldN1 = parseFloat(document.getElementById("1").value);
    SandMoldN2 = parseFloat(document.getElementById("2").value);
    SandMoldN3 = parseFloat(document.getElementById("3").value);

    WeigMoldN1 = parseFloat(document.getElementById("7").value);
    WeigMoldN2 = parseFloat(document.getElementById("8").value);
    WeigMoldN3 = parseFloat(document.getElementById("9").value);

    VolMoldN1 = parseFloat(document.getElementById("13").value);
    VolMoldN2 = parseFloat(document.getElementById("14").value);
    VolMoldN3 = parseFloat(document.getElementById("15").value);

    // Volumen of Funnel
    ConBeforeN1 = parseFloat(document.getElementById("20").value);
    ConBeforeN2 = parseFloat(document.getElementById("21").value);
    ConBeforeN3 = parseFloat(document.getElementById("22").value);

    ConAfterN1 = parseFloat(document.getElementById("23").value);
    ConAfterN2 = parseFloat(document.getElementById("24").value);
    ConAfterN3 = parseFloat(document.getElementById("25").value);

    BulkSandN1 = parseFloat(document.getElementById("29").value);
    BulkSandN2 = parseFloat(document.getElementById("30").value);
    BulkSandN3 = parseFloat(document.getElementById("31").value);

    // Calculo Bulkn Density
    var wSandMoldN1 = SandMoldN1 - WeigMoldN1;
    var wSandMoldN2 = SandMoldN2 - WeigMoldN2;
    var wSandMoldN3 = SandMoldN3 - WeigMoldN3;

    var BDSandN1 = wSandMoldN1 / VolMoldN1;
    var BDSandN2 = wSandMoldN2 / VolMoldN2;
    var BDSandN3 = wSandMoldN3 / VolMoldN3;
    
    var AverageDensity = (BDSandN1 + BDSandN2 + BDSandN3) / 3;

    // Calculo Volumen Funnel
    var wSandUsedN1 = ConBeforeN1 - ConAfterN1;
    var wSandUsedN2 = ConBeforeN2 - ConAfterN2;
    var wSandUsedN3 = ConBeforeN3 - ConAfterN3;

    var VolFunnelN1 = wSandUsedN1 / BulkSandN1;
    var VolFunnelN2 = wSandUsedN2 / BulkSandN2;
    var VolFunnelN3 = wSandUsedN3 / BulkSandN3;

    var AverageFunnel = (VolFunnelN1 + VolFunnelN2 + VolFunnelN3) / 3;

    // Resultados Bulkn Density
    document.getElementById("10").value = wSandMoldN1.toFixed(2);
    document.getElementById("11").value = wSandMoldN2.toFixed(2);
    document.getElementById("12").value = wSandMoldN3.toFixed(2);

    document.getElementById("16").value = BDSandN1;
    document.getElementById("17").value = BDSandN2;
    document.getElementById("18").value = BDSandN3;

    document.getElementById("19").value = AverageDensity.toFixed(4);

    // Resultados Volume of Funnel
    document.getElementById("26").value = wSandUsedN1.toFixed(2);
    document.getElementById("27").value = wSandUsedN2.toFixed(2);
    document.getElementById("28").value = wSandUsedN3.toFixed(2);

    document.getElementById("32").value = VolFunnelN1.toFixed(2);
    document.getElementById("33").value = VolFunnelN2.toFixed(2);
    document.getElementById("34").value = VolFunnelN3.toFixed(2);

    document.getElementById("35").value = AverageFunnel.toFixed(4);



}



</Script>

<?php include_once('layouts/footer.php'); ?>