<?php
$page_title = 'SPECIFIC GRAVITY AND ABSORTION IN COARSE AGGREGATES';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);
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
<span>DENSITY, RELATIVE DENSITY (SPECIFIC GRAVITY) AND ABSORTION IN COARSE AGGREGATES</span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="" onsubmit="calcular();">

<table class="table table-bordered">
<thead>
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
<select class="form-control" name="preparacion">
<option selected>Choose...</option>
<option value="Oven_Dried">Oven Dried</option>
<option value="Air_Dried">Air Dried</option>
</select>
</div>

<div class="col-xs-4">
<label >Split Method</label>
<select class="form-control" name="preparacion">
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
<input class="form-control" name="Test_Start_Date" type="date">
</div>


<div>
    <table class="table table-bordered border-primary" style="width: 850px; height: 450px;">
        <thead>
            <caption>Test information</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;" scope="col" colspan="1">Oven Dry (A)</th>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;" scope="col" colspan="3">Saturated Surface Dry (B)</th>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;" scope="col" colspan="2">Sample immersed (C)</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Size (inch)</th>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Wt (gr)</th>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Size (inch)</th>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Wt (gr)</th>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Size (inch)</th>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Wt (gr)</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">5"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="1"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">5"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="2"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">5"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="3" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">4"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="4"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">4"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="5"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">4"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="6" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3.5"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="7"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3.5"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="8"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3.5"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="9" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="10"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="11"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="12" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">2.5"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="13"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">2.5"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="14"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">2.5"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="15" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">2"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="16"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">2"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="17"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">2"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="18" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1.5"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="19"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1.5"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="20"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1.5"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="21" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="22"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="23"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="24" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3/4"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="25"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3/4"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="26"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3/4"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="27" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1/2"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="28"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1/2"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="29"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1/2"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="30" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3/8"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="38"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3/8"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="39"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3/8"</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="40" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No4</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="41"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No4</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="42"  oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No4</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="43" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Total</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="31" oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Total</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="32" oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Total</th>
                <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="33" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>




<div style="display: flex; justify-content: flex-end; margin-top: -36%; margin-bottom: 24%; margin-right: 10%;">
    <table class="table table-bordered border-primary" style="width: 350px;">
        <thead>
            <caption>RESULTS</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Specific Gravity (OD)</th>
                <td><input type="text" style="border: none;" size="8" style="background: transparent;"id="34"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Specific Gravity (SSD)</th>
                <td><input type="text" style="border: none;" size="8" style="background: transparent;"id="35"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Apparent Specific Gravity</th>
                <td><input type="text" style="border: none;" size="8" style="background: transparent;"id="36"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Percent of Absortion</th>
                <td><input type="text" style="border: none;" size="8" style="background: transparent;"id="37"oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="margin-left: 1%;">
    <button type="submit" name="" class="btn btn-danger">Registrar ensayo</button>
</div>


<script>
    function calcular() {

        //Valores A
        let a = parseFloat(document.getElementById("1").value);
        let a2 = parseFloat(document.getElementById("4").value);
        let a3 = parseFloat(document.getElementById("7").value);
        let a4 = parseFloat(document.getElementById("10").value);
        let a5 = parseFloat(document.getElementById("13").value);
        let a6 = parseFloat(document.getElementById("16").value);
        let a7 = parseFloat(document.getElementById("19").value);
        let a8 = parseFloat(document.getElementById("22").value);
        let a9 = parseFloat(document.getElementById("25").value);
        let a10 = parseFloat(document.getElementById("28").value);
        let a11 = parseFloat(document.getElementById("38").value);
        let a12 = parseFloat(document.getElementById("41").value);

        //valores B
        let b = parseFloat(document.getElementById("2").value);
        let b2 = parseFloat(document.getElementById("5").value);
        let b3 = parseFloat(document.getElementById("8").value);
        let b4 = parseFloat(document.getElementById("11").value);
        let b5 = parseFloat(document.getElementById("14").value);
        let b6 = parseFloat(document.getElementById("17").value);
        let b7 = parseFloat(document.getElementById("20").value);
        let b8 = parseFloat(document.getElementById("23").value);
        let b9 = parseFloat(document.getElementById("26").value);
        let b10 = parseFloat(document.getElementById("29").value);
        let b11 = parseFloat(document.getElementById("39").value);
        let b12 = parseFloat(document.getElementById("42").value);

        //valores B
        let c = parseFloat(document.getElementById("3").value);
        let c2 = parseFloat(document.getElementById("6").value);
        let c3 = parseFloat(document.getElementById("9").value);
        let c4 = parseFloat(document.getElementById("12").value);
        let c5 = parseFloat(document.getElementById("15").value);
        let c6 = parseFloat(document.getElementById("18").value);
        let c7 = parseFloat(document.getElementById("21").value);
        let c8 = parseFloat(document.getElementById("24").value);
        let c9 = parseFloat(document.getElementById("27").value);
        let c10 = parseFloat(document.getElementById("30").value);
        let c11 = parseFloat(document.getElementById("40").value);
        let c12 = parseFloat(document.getElementById("43").value);

        //Calculos
        const total_a = a+a2+a3+a4+a5+a6+a7+a8+a9+a10+a11+a12;
        const total_b = b+b2+b3+b4+b5+b6+b7+b8+b9+b10+b11+b12;
        const total_c = c+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12;

        const SGOD = (total_a/(total_b-total_c));
        const SGSSD = (total_b/(total_b-total_c));
        const ASG = (total_a/(total_a-total_c));
        const PA = ((total_b-total_a)/total_a)*100;


        //Pasar Resultado
        document.getElementById("31").value = total_a.toFixed(2);
        document.getElementById("32").value = total_b.toFixed(2);
        document.getElementById("33").value = total_c.toFixed(2);
        document.getElementById("34").value = SGOD.toFixed(2);
        document.getElementById("35").value = SGSSD.toFixed(2);
        document.getElementById("36").value = ASG.toFixed(2);
        document.getElementById("37").value = PA.toFixed(2);
    }
</script>


<?php include_once('layouts/footer.php'); ?>