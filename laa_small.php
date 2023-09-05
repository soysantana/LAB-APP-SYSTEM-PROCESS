<?php
$page_title = 'Los Angeles Abrasion For Small Size Coarse';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('db/LLASmall.php'); 
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
<span>Los Angeles Abrasion For Small Size Coarse</span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="laa_small.php" oninput="calcular();">

<table class="table table-bordered">
<thead>
<tbody id="product_info"></tbody>
</div>
<div class="col-xs-4">
<label >Standard</label>
<select class="form-control" name="Standard">
<option selected>Choose...</option>
<option value="ASTM-D854">ASTM-D854</option>         
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
    <table class="table table-bordered border-primary" style="width: 350px; height: 50px;">
        <thead>
            <caption>Test Information</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Selected Grading</th>
                <td><select name="SelectedGrading" id=""  style="border: none;" style="background: transparent;">
                    <option>Choose...</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="display: flex; justify-content: flex-end; margin-top: -6%; margin-right: 6%;">
    <table class="table table-bordered border-primary" style="width: 360px; height: 50px;">
        <thead>
            <caption></caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Initial Weight (g)</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="In-Weigt-g" name="InitialWeight" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Final Weight (g)</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="Fin-Weigt-g" name="FinalWeight" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Weight Loss (g)</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="Weigt-Loss-g" name="WeightLoss" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Weight Loss (%)</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="Weigt-Loss-Porce" name="WeightLossPorce" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="display: flex; justify-content: center; margin-top: -13%; margin-bottom: 6%;">
    <table class="table table-bordered border-primary" style="width: 360px; height: 50px;">
        <thead>
            <caption></caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Weight of the Spheres (g)</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="" name="WeightofTheSpheres" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Revolutions</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="" name="Revolutions" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>

<div style="margin-left: 1%;">
    <button type="submit" name="LAASmall" class="btn btn-danger">Registrar ensayo</button>
</div>
</form>

<script>
    function convertToNumberOrZero(value) {
        const parsedValue = parseFloat(value);
        return isNaN(parsedValue) ? 0 : parsedValue;
    }
    function calcular() {
        //Pasamos los valores de los input
        InWeigtg = convertToNumberOrZero(document.getElementById("In-Weigt-g").value);
        FinWeigtg = convertToNumberOrZero(document.getElementById("Fin-Weigt-g").value);
        
        //Calculamos los valores
        const WeigtLossg = InWeigtg-FinWeigtg;
        const WeigtLossPorce = (WeigtLossg/InWeigtg)*100;

        //Resultados
        document.getElementById("Weigt-Loss-g").value = isNaN(WeigtLossg) ? 0 : WeigtLossg.toFixed(1);
        document.getElementById("Weigt-Loss-Porce").value = isNaN(WeigtLossPorce) ? 0 : WeigtLossPorce.toFixed(2);
    }
</script>

<?php include_once('layouts/footer.php'); ?>