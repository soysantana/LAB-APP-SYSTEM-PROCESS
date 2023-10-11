<?php
$page_title = 'Los Angeles Abrasion For Large Size Coarse';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);

$LAA = find_by_id('los_angeles_abrasion_large', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row"></div>
<div class="col-md-12"></div>
<div class="panel panel-default">
<div class="panel-heading clearfix">
<strong>
<span class="glyphicon glyphicon-th"></span>
<span>Los Angeles Abrasion For Large Size Coarse</span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="laa_large.php" onsubmit="calcular();">

<table class="table table-bordered">
<thead>
<tbody id="product_info"></tbody>
</div>
<div class="col-xs-4">
<label >Standard</label>
<select class="form-control" name="Standard">
<option selected>Choose...</option>
<option <?php if ($LAA['Standard'] == 'ASTM-D854') echo 'selected'; ?>>ASTM-D854</option>
<option value="ASTM-D854">ASTM-D854</option>         
</select>
</div>

<div class="col-xs-4">
<label >Preparation Method</label>
<select class="form-control" name="PreparationMethod">
<option <?php if ($LAA['Preparation_Method'] == 'Oven_Dried') echo 'selected'; ?>>Oven_Dried</option>
<option <?php if ($LAA['Preparation_Method'] == 'Air_Dried') echo 'selected'; ?>>Air_Dried</option>
</select>
</div>

<div class="col-xs-4">
<label >Split Method</label>
<select class="form-control" name="SplitMethod">
<option <?php if ($LAA['Split_Method'] == 'Mech_Split') echo 'selected'; ?>>Mech_Split</option>
<option <?php if ($LAA['Split_Method'] == 'Man_Split') echo 'selected'; ?>>Man_Split</option>
</select>
</div>

<div class="col-xs-4">
<label>Comments</label>
<textarea class="form-control" name="Comments"><?php echo ($LAA['Comments']); ?></textarea>
</div>
      
<div class="col-xs-4">
<label>Technician</label>
<input class="form-control" name="Technician" value="<?php echo ($LAA['Technician']); ?>" type="text">
</div>
    
<div class="col-xs-4">
<label>Test Start Date</label>
<input class="form-control" name="TestStartDate" value="<?php echo ($LAA['Test_Start_Date']); ?>" type="date">
</div>




<div>
    <table class="table table-bordered border-primary" style="width: 350px; height: 50px;">
        <thead>
            <caption>Test Information</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Selected Grading</th>
                <td><select name="SelectedGrading" id="" class="form-control" style="border: none;" style="background: transparent;">
                    <option <?php if ($LAA['Selected_Grading'] == '1') echo 'selected'; ?>>1</option>
                    <option <?php if ($LAA['Selected_Grading'] == '2') echo 'selected'; ?>>2</option>
                    <option <?php if ($LAA['Selected_Grading'] == '3') echo 'selected'; ?>>3</option>
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
                <td><input type="text" value="<?php echo ($LAA['Initial_Weight']); ?>" style="border: none;" size="12" style="background: transparent;"id="In-Weigt-g" name="InitialWeight" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Final Weight (g)</th>
                <td><input type="text" value="<?php echo ($LAA['Final_Weight']); ?>" style="border: none;" size="12" style="background: transparent;"id="Fin-Weigt-g" name="FinalWeight" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Weight Loss (g)</th>
                <td><input type="text" value="<?php echo ($LAA['Weight_Loss']); ?>" style="border: none;" size="12" style="background: transparent;"id="Weigt-Loss-g" name="WeightLoss" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Weight Loss (%)</th>
                <td><input type="text" value="<?php echo ($LAA['Weight_Loss_Porce']); ?>" style="border: none;" size="12" style="background: transparent;"id="Weigt-Loss-Porce" name="WeightLossPorce" oninput="calcular()"></td>
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
                <td><input type="text" value="<?php echo ($LAA['Weight_of_The_Spheres']); ?>" style="border: none;" size="12" style="background: transparent;"id="" name="WeightofTheSpheres" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Revolutions</th>
                <td><input type="text" value="<?php echo ($LAA['Revolutions']); ?>" style="border: none;" size="12" style="background: transparent;"id="" name="Revolutions" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>




<div style="margin-left: 1%;">
<button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
<button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
<a href="PDF/LAA_LS_Rev_1.php?id=<?php echo intval($LAA['id']); ?>" class="btn btn-primary">Generar PDF</a>
</div>


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