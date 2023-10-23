<?php
$page_title = 'Los Angeles Abrasion For Small Size Coarse';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('db/LLASmall.php'); 
  }
$search_table = find_by_id('los_angeles_abrasion_small', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row"></div>
<div class="col-md-12"></div>
<?php echo display_msg($msg); ?>
<div class="panel panel-default">
<div class="panel-heading clearfix">
<strong>
<span class="glyphicon glyphicon-th"></span>
<span>Los Angeles Abrasion For Small Size Coarse</span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="" oninput="calcular();">

<table class="table table-bordered">
<thead>
<tbody id="product_info"></tbody>
</div>
<div class="col-xs-4">
<label >Standard</label>
<select class="form-control" name="Standard">
<option <?php if ($search_table['Standard'] == 'ASTM-D854') echo 'selected'; ?>>ASTM-D854</option>      
</select>
</div>

<div class="col-xs-4">
<label >Preparation Method</label>
<select class="form-control" name="PreparationMethod">
<option <?php if ($search_table['Preparation_Method'] == 'Oven_Dried') echo 'selected'; ?>>Oven_Dried</option>
<option <?php if ($search_table['Preparation_Method'] == 'Air_Dried') echo 'selected'; ?>>Air_Dried</option>   
</select>
</div>

<div class="col-xs-4">
<label >Split Method</label>
<select class="form-control" name="SplitMethod">
<option <?php if ($search_table['Split_Method'] == 'Mech_Split') echo 'selected'; ?>>Mech_Split</option>
<option <?php if ($search_table['Split_Method'] == 'Man_Split') echo 'selected'; ?>>Man_Split</option>
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




<div>
    <table class="table table-bordered border-primary" style="width: 350px; height: 50px;">
        <thead>
            <caption>Test Information</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Selected Grading</th>
                <td><select name="SelectedGrading" id=""  style="border: none;" style="background: transparent;">
                    <option <?php if ($search_table['Selected_Grading'] == 'Choose...') echo 'selected'; ?>>Choose...</option>  
                    <option <?php if ($search_table['Selected_Grading'] == 'A') echo 'selected'; ?>>A</option>  
                    <option <?php if ($search_table['Selected_Grading'] == 'B') echo 'selected'; ?>>B</option>  
                    <option <?php if ($search_table['Selected_Grading'] == 'C') echo 'selected'; ?>>C</option>  
                    <option <?php if ($search_table['Selected_Grading'] == 'D') echo 'selected'; ?>>D</option>
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
                <td><input type="text" value="<?php echo ($search_table['Initial_Weight']); ?>" style="border: none;" size="12" style="background: transparent;"id="In-Weigt-g" name="InitialWeight" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Final Weight (g)</th>
                <td><input type="text" value="<?php echo ($search_table['Final_Weight']); ?>" style="border: none;" size="12" style="background: transparent;"id="Fin-Weigt-g" name="FinalWeight" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Weight Loss (g)</th>
                <td><input type="text" value="<?php echo ($search_table['Weight_Loss']); ?>" style="border: none;" size="12" style="background: transparent;"id="Weigt-Loss-g" name="WeightLoss" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Weight Loss (%)</th>
                <td><input type="text" value="<?php echo ($search_table['Weight_Loss_Porce']); ?>" style="border: none;" size="12" style="background: transparent;"id="Weigt-Loss-Porce" name="WeightLossPorce" oninput="calcular()"></td>
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
                <td><input type="text" value="<?php echo ($search_table['Weight_of_The_Spheres']); ?>" style="border: none;" size="12" style="background: transparent;"id="" name="WeightofTheSpheres" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Revolutions</th>
                <td><input type="text" value="<?php echo ($search_table['Revolutions']); ?>" style="border: none;" size="12" style="background: transparent;"id="" name="Revolutions" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>

<div style="margin-left: 1%;">
<button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
<button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
<a href="PDF/LAA_CA_Rev_1.php?id=<?php echo intval($search_table['id']); ?>" class="btn btn-primary">Generar PDF</a>
<button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>
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