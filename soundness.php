<?php
$page_title = 'Soundness of Aggregates by use of Sodium Sulfate or Magnesium Sulfate';
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
<span>Soundness of Aggregates by use of Sodium Sulfate or Magnesium Sulfate</span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="" onsubmit="calcular()">

<table class="table table-bordered">
<thead>
</div>
<div class="col-xs-4">
<label >Standard</label>
<select class="form-control" name="Standard">
<option selected>Choose...</option>
<option value="ASTM C88">ASTM C88</option>         
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
    <table class="table table-bordered" style="width: 250px;">
        <thead></thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Wt Dry Soil, g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="1"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Wt Washed, g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="2"></td>
            </tr>
        </tbody>
    </table>
</div>


<div>
    <table class="table table-bordered" style="width: 350px;">
        <thead>
            <th style="font-size: 20px; text-align: center;" scope="col" colspan="4">Grain Size Distribution</th>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="col">Screen</th>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="col">(mm)</th>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="col">Wt. Ret</th>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="col">% Ret</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="col" colspan="4">Coarse Aggregate</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">4"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="3" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="4" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="5" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3 1/2"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="6" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="7" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="8" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="9" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="10" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="11" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">2 1/2"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="12" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="13" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="14" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">2"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="15" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="16" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="17" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1 1/2"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="18" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="19" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="20" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="21" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="22" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="23" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3/4"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="24" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="25" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="26" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1/2"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="27" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="28" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="29" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3/8"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="30" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="31" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="32" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No.4</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="33" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="34" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="35" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Total</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="36" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="37" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="38" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div>
    <table class="table table-bordered" style="width: 350px;">
        <thead>
            <th style="font-size: 20px; text-align: center;" scope="col" colspan="4">Fine Aggregate</th>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No.4</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="3.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="4.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="5.1" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No.8</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="6.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="7.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="8.1" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No.16</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="9.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="10.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="11.1" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No.30</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="12.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="13.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="14.1" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No.50</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="15.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="16.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="17.1" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No.100</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="18.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="19.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="20.1" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Pan</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="21.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="22.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="23.1" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="Col" colspan="2">Total</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="24.1" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="25.1" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="display: flex; justify-content: center; margin-top: -66%; margin-right: 26%;">
    <table class="table table-bordered" style="width: 350px;">
        <thead>
            <th style="font-size: 20px; text-align: center;" scope="col" colspan="4">Grain Size Distribution</th>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="col">Screen</th>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="col">(mm)</th>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="col">Wt. Ret</th>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="col">% Ret</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="col" colspan="4">Coarse Aggregate</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">4"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="3.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="4.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="5.2" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3 1/2"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="6.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="7.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="8.2" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="9.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="10.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="11.2" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">2 1/2"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="12.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="13.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="14.2" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">2"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="15.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="16.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="17.2" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1 1/2"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="18.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="19.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="20.2" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="21.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="22.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="23.2" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3/4"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="24.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="25.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="26.2" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">1/2"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="27.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="28.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="29.2" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3/8"</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="30.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="31.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="32.2" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No.4</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="33.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="34.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="35.2" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Total</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="36.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="37.2" oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="38.2" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="display: flex; justify-content: center; margin-right: 26%;">
    <table class="table table-bordered" style="width: 350px;">
        <thead>
            <th style="font-size: 20px; text-align: center;" scope="col" colspan="4">Fine Aggregate</th>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No.4</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="3.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="4.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="5.3"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No.8</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="6.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="7.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="8.3"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No.16</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="9.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="10.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="11.3"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No.30</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="12.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="13.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="14.3"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No.50</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="15.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="16.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="17.3"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">No.100</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="18.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="19.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="20.3"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Pan</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="21.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="22.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="23.3"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="Col" colspan="2">Total</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="24.3"oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="25.3"oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="display: flex; justify-content: flex-end; margin-top: -68%;">
    <table class="table table-bordered" style="width: 50%;">
        <thead>
            <caption>Test Results</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Screen</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Weight of Sample for each size (required)</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Star Weight Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Combined Fractions</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Designated Sieve After Test</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Final Weight Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Percentage Passing Designated Sieve After Test</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Weigthed Percentage of Mass Loss</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col" colspan="8">Soundness Test of Fine Aggregate</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">Minus 150 µm (No. 100)</th>
                <th style="font-size: 15px; text-align: center;" scope="row">100g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">300 µm (No. 50) to No. 100</th>
                <th style="font-size: 15px; text-align: center;" scope="row">100g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" scope="row">No.100</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">600 µm (No. 30) to No. 50</th>
                <th style="font-size: 15px; text-align: center;" scope="row">100g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" scope="row">No.50</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">1.18 mm (No. 16) to No. 30</th>
                <th style="font-size: 15px; text-align: center;" scope="row">100g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" scope="row">No.30</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">2.36 mm (No. 8) to No. 16</th>
                <th style="font-size: 15px; text-align: center;" scope="row">100g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" scope="row">No.16</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">4.75 mm (No. 4) to No. 8</th>
                <th style="font-size: 15px; text-align: center;" scope="row">100g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" scope="row">No.8</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">9.5mm(3⁄8 in.) to No. 4</th>
                <th style="font-size: 15px; text-align: center;" scope="row">100g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" scope="row">No.4</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col" colspan="2">Total</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" scope="row">---</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="display: flex; justify-content: flex-end;">
    <table class="table table-bordered" style="width: 51%;">
        <thead>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col" colspan="8">Soundness Test of Coarse Aggregate</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">9.5mm(3⁄8 in.) to 4.75 mm (No. 4)</th>
                <th style="font-size: 15px; text-align: center;" scope="row">(300+-5)g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <th style="font-size: 15px; text-align: center;" scope="row">---</th>
                <th style="font-size: 15px; text-align: center;" scope="row">4.0 mm (No. 5)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">12.5 mm (1⁄2 in) to 9.5 mm (3⁄8 in)</th>
                <th style="font-size: 15px; text-align: center;" scope="row">(330+-5)g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" scope="row" rowspan="2">19.0mm(3⁄4 in) to 9.5mm(3⁄8 in)</th>
                <th style="font-size: 15px; text-align: center;" scope="row" rowspan="2">8.0 mm (5⁄16 in)</oninput="calcular()"th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">19.0mm(3⁄4 in) to 12.5 mm (1⁄2 in)</th>
                <th style="font-size: 15px; text-align: center;" scope="row">(670+-10)g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">25 mm (1 in) to 19.0 mm (3⁄4 in)</th>
                <th style="font-size: 15px; text-align: center;" scope="row">(500+-30)g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" scope="row" rowspan="2">37.5mm(1 1⁄2 in) to 19.0mm(3⁄4 in)</th>
                <th style="font-size: 15px; text-align: center;" scope="row" rowspan="2">16.0 mm (5⁄8 in)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">37.5mm(11⁄2 in) to 25.0 mm (1 in.)</th>
                <th style="font-size: 15px; text-align: center;" scope="row">(1000+-50)g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">50 mm (2 in) to 37.5 mm (1 1⁄2 in)</th>
                <th style="font-size: 15px; text-align: center;" scope="row">(2000+-200)g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" scope="row" rowspan="2">63mm(2 1⁄2 in) to 37.5mm(1 1⁄2 in)</th>
                <th style="font-size: 15px; text-align: center;" scope="row" rowspan="2">31.5 mm (1 1⁄4 in)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">63 mm (2 1⁄2 in) to 50 mm (2 in)</th>
                <th style="font-size: 15px; text-align: center;" scope="row">(3000+-300)g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">75 mm (3 in) to 63 mm (2 1⁄2 in)</th>
                <th style="font-size: 15px; text-align: center;" scope="row">(7000+-100)g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" scope="row" rowspan="2">100mm(4 in.) to  90mm(2 1⁄2 in.)</th>
                <th style="font-size: 15px; text-align: center;" scope="row">50 mm (2 in)</th>oninput="calcular()"
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">90 mm (3 1⁄2 in) to 75 mm (3 in)</th>
                <th style="font-size: 15px; text-align: center;" scope="row">(7000+-1000)g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" scope="row">63 mm (2 1⁄2 in)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="row">100 mm (4 in) to 90 mm (3 1⁄2 in)</th>
                <th style="font-size: 15px; text-align: center;" scope="row">(7000+-1000)g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" scope="row">75 mm (3 in)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col" colspan="2">Total</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px; text-align: center;" scope="row">---</th>
                <th style="font-size: 15px; text-align: center;" scope="row">---</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div>
    <table class="table table-bordered" style="width: 67%;">
        <thead>
            <tr><th style="font-size: 15px; text-align: center;"colspan="14">Qualitative Examination of Coarse Sizes</th></tr>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center; padding: 3%;" rowspan="3">Sieve Size</th>
                <th style="font-size: 15px; text-align: center;" colspan="12">Particles Exhibiting Distress</th>
                <th style="font-size: 15px; text-align: center; width: 12%; padding: 2%;" rowspan="3">Total No. of Particles Before Test</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" colspan="2">Splitting</th>
                <th style="font-size: 15px; text-align: center;" colspan="2">Crumbling</th>
                <th style="font-size: 15px; text-align: center;" colspan="4"></th>
                <th style="font-size: 15px; text-align: center;" colspan="2">Cracking</th>
                <th style="font-size: 15px; text-align: center;" colspan="2">Flaking</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;">No.</th>
                <th style="font-size: 15px; text-align: center;">%</th>
                <th style="font-size: 15px; text-align: center;">No.</th>
                <th style="font-size: 15px; text-align: center;">%</th>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;">No.</th>
                <th style="font-size: 15px; text-align: center;">%</th>
                <th style="font-size: 15px; text-align: center;">No.</th>
                <th style="font-size: 15px; text-align: center;">%</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center; width: 10%;">37.5mm(11⁄2 in) to 19.0 mm (3/4 in)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;">63 mm (2 1⁄2 in) to 37.5 mm (1 1⁄2 in)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;">75 mm (3 in) to 63 mm (2 1⁄2 in)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;">91 mm (3 1⁄2 in) to 75 mm (3 in)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;">100 mm (4 in) to 90 mm (3 1⁄2 in)</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <th style="font-size: 15px; text-align: center;"></th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="display: flex; justify-content: flex-end; margin-top: -35%; margin-bottom: 10%;">
    <table class="table table-bordered" style="width: 32%;">
        <thead>
            <caption>Test Information</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;">Cycle</th>
                <th style="font-size: 15px; text-align: center;">Start Date</th>
                <th style="font-size: 15px; text-align: center;">Room Temperature (°C)</th>
                <th style="font-size: 15px; text-align: center;">Solution Temperature (°C)</th>
                <th style="font-size: 15px; text-align: center;">Specific Gravity of the Solution</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;">1</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;">2</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;">3</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;">4</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;">5</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;">Solution used:</th>
                <td colspan="4"><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
        </tbody>
    </table>
</div>


<div>
    <table class="table table-bordered" style="width: 250px;">
        <thead></thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Wt Dry Soil, g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Wt Washed, g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
        </tbody>
    </table>
</div>


<div>
    <table class="table table-bordered" style="width: 10%;">
        <thead>
            <th style="font-size: 18px; text-align: center;" scope="col" colspan="7">Grain Size Distribution</th>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Screen</th>
                <th style="font-size: 15px; text-align: center;" scope="col">(mm)</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Wt. Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">% Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Cum % Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">% Pass</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">100</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3</th>
                <th style="font-size: 15px; text-align: center;" scope="col">75</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">11/2</th>
                <th style="font-size: 15px; text-align: center;" scope="col">38</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">1</th>
                <th style="font-size: 15px; text-align: center;" scope="col">25</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3/4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">19</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">1/2</th>
                <th style="font-size: 15px; text-align: center;" scope="col">13</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3/8</th>
                <th style="font-size: 15px; text-align: center;" scope="col">10</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">5</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.8</th>
                <th style="font-size: 15px; text-align: center;" scope="col">2.36</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.16</th>
                <th style="font-size: 15px; text-align: center;" scope="col">2</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.30</th>
                <th style="font-size: 15px; text-align: center;" scope="col">1.18</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.50</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.3</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.100</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.15</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Pan</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
        </tbody>
    </table>
</div>




<div style="display: flex; justify-content: center; margin-top: -51%; margin-right: 18%;">
    <table class="table table-bordered" style="width: 250px;">
        <thead></thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Wt Dry Soil, g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Wt Washed, g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
        </tbody>
    </table>
</div>




<div style="display: flex; justify-content: flex-end; margin-right: 35%;">
    <table class="table table-bordered" style="width: 38%;">
        <thead>
            <th style="font-size: 18px; text-align: center;" scope="col" colspan="7">Grain Size Selected before Soundness test</th>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Screen</th>
                <th style="font-size: 15px; text-align: center;" scope="col">(mm)</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Wt. Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">% Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Cum % Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">% Pass</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">100</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3</th>
                <th style="font-size: 15px; text-align: center;" scope="col">75</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">11/2</th>
                <th style="font-size: 15px; text-align: center;" scope="col">38</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">1</th>
                <th style="font-size: 15px; text-align: center;" scope="col">25</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3/4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">19</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">1/2</th>
                <th style="font-size: 15px; text-align: center;" scope="col">13</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3/8</th>
                <th style="font-size: 15px; text-align: center;" scope="col">10</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">5</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.10</th>
                <th style="font-size: 15px; text-align: center;" scope="col">2.00</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.16</th>
                <th style="font-size: 15px; text-align: center;" scope="col">1.18</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.20</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.85</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.50</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.3</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.60</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.25</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.200</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.075</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Pan</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
        </tbody>
    </table>
</div>




<div style="display: flex; justify-content: flex-end; margin-top: -54%; margin-right: 17%;">
    <table class="table table-bordered" style="width: 250px;">
        <thead></thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Wt Dry Soil, g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Wt Washed, g</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
        </tbody>
    </table>
</div>




<div style="display: flex; justify-content: flex-end; margin-bottom: 3%;">
    <table class="table table-bordered" style="width: 33%;">
        <thead>
            <th style="font-size: 18px; text-align: center;" scope="col" colspan="7">Grain Size Selected after Soundness test</th>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Screen</th>
                <th style="font-size: 15px; text-align: center;" scope="col">(mm)</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Wt. Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">% Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Cum % Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">% Pass</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">100</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3</th>
                <th style="font-size: 15px; text-align: center;" scope="col">75</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">11/2</th>
                <th style="font-size: 15px; text-align: center;" scope="col">38</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">1</th>
                <th style="font-size: 15px; text-align: center;" scope="col">25</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3/4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">19</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">1/2</th>
                <th style="font-size: 15px; text-align: center;" scope="col">13</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3/8</th>
                <th style="font-size: 15px; text-align: center;" scope="col">10</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">5</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.10</th>
                <th style="font-size: 15px; text-align: center;" scope="col">2.00</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.16</th>
                <th style="font-size: 15px; text-align: center;" scope="col">1.18</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.20</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.85</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.50</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.3</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.60</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.25</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.200</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.075</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Pan</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
        </tbody>
    </table>
</div>



<div>
    <table class="table table-bordered" style="width: 33%;">
        <thead>
            <th style="font-size: 18px; text-align: center;" scope="col" colspan="7">Differences after and before Soundess Test</th>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Screen</th>
                <th style="font-size: 15px; text-align: center;" scope="col">(mm)</th>
                <th style="font-size: 15px; text-align: center;" scope="col">% Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">% Pass</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">100</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3</th>
                <th style="font-size: 15px; text-align: center;" scope="col">75</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">11/2</th>
                <th style="font-size: 15px; text-align: center;" scope="col">37.50</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">1</th>
                <th style="font-size: 15px; text-align: center;" scope="col">25</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3/4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">19</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">1/2</th>
                <th style="font-size: 15px; text-align: center;" scope="col">13</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3/8</th>
                <th style="font-size: 15px; text-align: center;" scope="col">9.5</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">4.75</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.8</th>
                <th style="font-size: 15px; text-align: center;" scope="col">2.36</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.10</th>
                <th style="font-size: 15px; text-align: center;" scope="col">2</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.16</th>
                <th style="font-size: 15px; text-align: center;" scope="col">1.18</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.20</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.85</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.30</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.6</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.50</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.3</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.60</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.25</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.100</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.15</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.200</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.075</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Pan</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
        </tbody>
    </table>
</div>




<div style="display: flex; justify-content: flex-end; margin-top: -54%; margin-right: 27%;">
    <table class="table table-bordered" style="width: 33%;">
        <thead>
            <th style="font-size: 18px; text-align: center;" scope="col" colspan="7">Grain Size Distribution Corrected</th>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Screen</th>
                <th style="font-size: 15px; text-align: center;" scope="col">(mm)</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Wt. Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Ret Corrected</th>
                <th style="font-size: 15px; text-align: center;" scope="col">% Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Cum % Ret</th>
                <th style="font-size: 15px; text-align: center;" scope="col">% Pass</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">100</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3</th>
                <th style="font-size: 15px; text-align: center;" scope="col">75</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">11/2</th>
                <th style="font-size: 15px; text-align: center;" scope="col">37.50</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">1</th>
                <th style="font-size: 15px; text-align: center;" scope="col">25</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3/4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">19</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">1/2</th>
                <th style="font-size: 15px; text-align: center;" scope="col">13</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3/8</th>
                <th style="font-size: 15px; text-align: center;" scope="col">9.5</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.4</th>
                <th style="font-size: 15px; text-align: center;" scope="col">4.75</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.8</th>
                <th style="font-size: 15px; text-align: center;" scope="col">2.36</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.10</th>
                <th style="font-size: 15px; text-align: center;" scope="col">2</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.16</th>
                <th style="font-size: 15px; text-align: center;" scope="col">1.18</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.20</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.85</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.30</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.6</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.50</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.3</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.60</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.25</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.100</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.15</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">No.200</th>
                <th style="font-size: 15px; text-align: center;" scope="col">0.075</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Pan</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
        </tbody>
    </table>
</div>



<div style="display: flex; justify-content: flex-end; margin-top: -55.3%; margin-bottom: 40%;">
    <table class="table table-bordered" style="width: 23%;">
        <thead>
            <th style="font-size: 15px; text-align: center;" scope="col">Sumary Parameter</th>
            <th style="font-size: 15px; text-align: center;" scope="col">Before Soundness Test</th>
            <th style="font-size: 15px; text-align: center;" scope="col">After Soundness Test</th>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">% Fines</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">% Sand</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">% Gravek</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">% Coarser than Gravel</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
        </tbody>
    </table>
</div>
<script>
function calcular() {



    
}
      



</script>


<div>
    <div id="gs_soundness" style="width: 1010px; height: 600;"></div>
</div>



























<?php include_once('layouts/footer.php'); ?>