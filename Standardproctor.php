<?php
$page_title = 'Standard Proctor Calculation';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/StandardProctor.php'); // Incluir el archivo de procesamiento del formulario
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
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading clearfix">
<strong>
<span class="glyphicon glyphicon-th"></span>
<span>Standard Proctor Calculation</span>
</strong>
</div>
<div class="panel-body">
    <form method="post" action="Standardproctor.php" onsubmit="calcular()">
      
    <table class="table table-bordered">
    <tbody id="product_info"> </tbody>
    <thead>
    </div>
    <div class="col-xs-4">
    <label >Standard</label>
    <select class="form-control" name="Standard">
    <option selected>Choose...</option>
    <option value="ASTM-D698">ASTM-D698</option>          
    </select>
    </div>
    
    <div class="col-xs-4">
    <label >Preparation Method</label>
    <select class="form-control" name="PreparationMethod">
    <option selected>Choose...</option>
    <option value="wet">Wet</option>
    <option value="dry">Dry</option>
    </select>
    </div>

    <div class="col-xs-4">
        <label >Hammer</label>
        <select class="form-control" name="Split">
        <option selected>Choose...</option>
        <option value="manual">Manual</option>
        <option value="mechanical">Mechanical</option>
        </select>
        </div>

<div class="col-xs-4">
<label >Method</label>
<select class="form-control" name="Method">
<option selected>Choose...</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
</select>
</div>
    
    <div class="col-xs-4">
    <label>Natural Mc (%):</label>
    <div class="input-group">
    <input type="text" class="form-control" name="Nmc" id="1">
    <span class="input-group-addon glyphicon glyphicon-search btn btn-default" onclick="search()"></span>
    </div>
    </div>

    <div class="col-xs-4">
        <label>Specific Gravity:</label>
        <input class="form-control" name="natmc" type="text" value="" id="98" onclick="search()">   
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

    <div class="panel-body"><div class="col-md-12">
    </div> 
    </div> 
    <div style="display: flex; flex-direction: row; justify-content: space-between;">
    <table class="table table-bordered border-primary" style="width:850px;" >
    <thead>
    </thead>
      <caption >Test Information</caption>
      <tr>
      <th scope="col">Trial  Number</th>
      <th scope="col" style="text-align: center;">1</th>
      <th scope="col" style="text-align: center;">2</th>
      <th scope="col" style="text-align: center;">3</th>
      <th scope="col" style="text-align: center;">4</th>
      <th scope="col" style="text-align: center;">5</th>
      <th scope="col" style="text-align: center;">6</th>
      </tr>
      <tbody>
        <tr>
        <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Wt Wet Soil + Mold (gr)</th>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="2" name="Wt_Wet_Soil_Mold_1" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="3" name="Wt_Wet_Soil_Mold_2" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="4" name="Wt_Wet_Soil_Mold_3" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="5" name="Wt_Wet_Soil_Mold_4" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="6" name="Wt_Wet_Soil_Mold_5" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="7" name="Wt_Wet_Soil_Mold_6" oninput="calcular()"></td>
        </tr>
        <tr>
        <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Wt Mold (gr)</th>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="8" name="Wt_Mold_g_1" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="9" name="Wt_Mold_g_2" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="10" name="Wt_Mold_g_3" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="11" name="Wt_Mold_g_4" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="12" name="Wt_Mold_g_5" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="13" name="Wt_Mold_g_6" oninput="calcular()"></td>
        </tr>
        <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Wt Wet Soil (gr)</th>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="14" name="Wt_Wet_Soil_g_1" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="15" name="Wt_Wet_Soil_g_2" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="16" name="Wt_Wet_Soil_g_3" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="17" name="Wt_Wet_Soil_g_4" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="18" name="Wt_Wet_Soil_g_5" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="19" name="Wt_Wet_Soil_g_6" oninput="calcular()"></td>
        </tr>
        <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Vol Mold (cmᵌ)</th>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="20" name="Vol_Mold_cm3_1" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="21" name="Vol_Mold_cm3_2" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="22" name="Vol_Mold_cm3_3" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="23" name="Vol_Mold_cm3_4" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="24" name="Vol_Mold_cm3_5" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="25" name="Vol_Mold_cm3_6" oninput="calcular()"></td>
        </tr>
    </tr>
    <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Wet Density (Kg/mᵌ)</th>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="26" name="Wet_Density_kgm3_1" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="27" name="Wet_Density_kgm3_2" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="28" name="Wet_Density_kgm3_3" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="29" name="Wet_Density_kgm3_4" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="30" name="Wet_Density_kgm3_5" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="31" name="Wet_Density_kgm3_6" oninput="calcular()"></td>
    </tr>
    </tr>
    <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Dry Density (Kg/mᵌ)</th>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="32" name="Dry_Density_kgm3_1" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="33" name="Dry_Density_kgm3_2" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="34" name="Dry_Density_kgm3_3" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="35" name="Dry_Density_kgm3_4" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="36" name="Dry_Density_kgm3_5" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="37" name="Dry_Density_kgm3_6" oninput="calcular()"></td>
    </tr>
    <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Dry Density Corrected (Kg/mᵌ)</th>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="38" name="Dry_Density_Corrected_kgm3_1" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="39" name="Dry_Density_Corrected_kgm3_2" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="40" name="Dry_Density_Corrected_kgm3_3" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="41" name="Dry_Density_Corrected_kgm3_4" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="42" name="Dry_Density_Corrected_kgm3_5" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="43" name="Dry_Density_Corrected_kgm3_6" oninput="calcular()"></td>
    </tr>
    
    <table class="table table-bordered border-primary" style="width:850px;" >
        <thead>
        </thead>
    <tr>
      <th scope="col">Trial  Number</th>
      <th scope="col" style="text-align: center;">1</th>
      <th scope="col" style="text-align: center;">2</th>
      <th scope="col" style="text-align: center;">3</th>
      <th scope="col" style="text-align: center;">4</th>
      <th scope="col" style="text-align: center;">5</th>
      <th scope="col" style="text-align: center;">6</th>
      </tr>
      <tbody>
        <tr>
        <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Container</th>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="44" name="MC_Container_1" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="45" name="MC_Container_2" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="46" name="MC_Container_3" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="47" name="MC_Container_4" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="48" name="MC_Container_5" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="49" name="MC_Container_6" oninput="calcular()"></td>
        </tr>
        <tr>
        <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Wt Wet Soil + Tare (gr)</th>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="50" name="MC_Wt_Wet_Soil_Tare_1" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="51" name="MC_Wt_Wet_Soil_Tare_2" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="52" name="MC_Wt_Wet_Soil_Tare_3" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="53" name="MC_Wt_Wet_Soil_Tare_4" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="54" name="MC_Wt_Wet_Soil_Tare_5" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="55" name="MC_Wt_Wet_Soil_Tare_6" oninput="calcular()"></td>
        </tr>
        <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Wt Dry Soil + Tare (gr)</th>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="56" name="MC_Wt_Dry_Soil_Tare_1" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="57" name="MC_Wt_Dry_Soil_Tare_2" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="58" name="MC_Wt_Dry_Soil_Tare_3" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="59" name="MC_Wt_Dry_Soil_Tare_4" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="60" name="MC_Wt_Dry_Soil_Tare_5" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="61" name="MC_Wt_Dry_Soil_Tare_6" oninput="calcular()"></td>
        </tr>
        <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Wt Water (gr)</th>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="62" name="Wt_Water_g_1" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="63" name="Wt_Water_g_2" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="64" name="Wt_Water_g_3" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="65" name="Wt_Water_g_4" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="66" name="Wt_Water_g_5" oninput="calcular()"></td>
        <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="67" name="Wt_Water_g_6" oninput="calcular()"></td>
        </tr>
    </tr>
    <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Tare (gr)</th>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="68" name="Tare_g_1" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="69" name="Tare_g_2" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="70" name="Tare_g_3" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="71" name="Tare_g_4" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="72" name="Tare_g_5" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="73" name="Tare_g_6" oninput="calcular()"></td>
    </tr>
    </tr>
    <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Wt Dry Soil (gr)</th>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="74" name="MC_Wt_Dry_Soil_g_1" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="75" name="MC_Wt_Dry_Soil_g_2" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="76" name="MC_Wt_Dry_Soil_g_3" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="77" name="MC_Wt_Dry_Soil_g_4" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="78" name="MC_Wt_Dry_Soil_g_5" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="79" name="MC_Wt_Dry_Soil_g_6" oninput="calcular()"></td>
    </tr>
    <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Moisture Content (%)</th>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="80" name="MC_Porce_1" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="81" name="MC_Porce_2" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="82" name="MC_Porce_3" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="83" name="MC_Porce_4" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="84" name="MC_Porce_5" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="85" name="MC_Porce_6" oninput="calcular()"></td>
    </tr>
    <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Moisture Content Corrected (%)</th>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="86" name="MC_Porce_Corrected_1" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="87" name="MC_Porce_Corrected_2" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="88" name="MC_Porce_Corrected_3" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="89" name="MC_Porce_Corrected_4" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="90" name="MC_Porce_Corrected_5" oninput="calcular()"></td>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="91" name="MC_Porce_Corrected_6" oninput="calcular()"></td>
    </tr>
</div>
<table class="table table-bordered border-primary" style="width:450px;" >
    <thead>
    </thead>
</tr>
    <th style="font-size: 15px;" style="width: 750px; height: 25px;"scope="row">Maximum Dry Density (Kg/mᵌ)</th>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="92" name="Max_Dry_Density_kgm3" oninput="calcular()"></td>
</tr>
    <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Optimum Moisture Content (%)</th>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="93" name="Optimun_MC_Porce" oninput="calcular()"></td>

<table class="table table-bordered border-primary" style="width:350px;" >
    <thead>
        <caption >Correction of Unit Weight and Water Content for Soils 
            Containing Oversize Particles ASTM D4718</caption>
    </thead>
</tr>
<th style="font-size: 15px;" style="width: 450px; height: 25px;"scope="row">Wc (%)</th>
<td><input type="text" style="border: none;" size="4" style="background: transparent;"id="94" name="Wc_Porce" oninput="calcular()"></td>
<th style="font-size: 15px;" style="width: 450px; height: 25px;"scope="row">GM</th>
<td><input type="text" style="border: none;" size="4" style="background: transparent;"id="95" name="GM_Porce" oninput="calcular()"></td>
</tr>
</tr>
<th style="font-size: 15px;" style="width: 450px; height: 25px;"scope="row">PC (%)</th>
<td><input type="text" style="border: none;" size="4" style="background: transparent;"id="96" name="PC_Porce" oninput="calcular()"></td>
<th style="font-size: 15px;" style="width: 450px; height: 25px;"scope="row">PF (%)</th>
<td><input type="text" style="border: none;" size="4" style="background: transparent;"id="97" name="PF_Porce" oninput="calcular()"></td>
</tr>
</tr>
<th style="font-size: 15px;" style="width: 450px; height: 25px;"scope="row">YDF</th>
<td><input type="text" style="border: none;" size="4" style="background: transparent;"id="98" name="YDF_Porce" oninput="calcular()"></td>
<th style="font-size: 15px;" style="width: 450px; height: 25px;"scope="row">YDT</th>
<td><input type="text" style="border: none;" size="4" style="background: transparent;"id="99" name="YDT_Porce" oninput="calcular()"></td>
</tr>
</tr>

<th style="font-size: 15px;" style="width: 850px; height: 25px;"scope="row" colspan="3">Yω (KN/mᵌ)</th>
<td><input type="text" style="border: none;" size="4" style="background: transparent;"id="100" name="Yw_KnM3" oninput="calcular()"></td>
</tr>
</div>

<table class="table table-bordered border-primary" style="width:450px;" >
    <thead>
    </thead>
</tr>
    <th style="font-size: 15px;" style="width: 750px; height: 25px;"scope="row">Corrected Dry unit weight of the total material 
        (combined finer and oversize fractions) (Kg/mᵌ)</th>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="101" name="Corrected_Dry_Unit_Weigt" oninput="calcular()"></td>
</tr>
    <th style="font-size: 15px;" style="width: 650px; height: 25px;"scope="row">Corrected water content of combined finer and 
        oversize fractions ωT (%)</th>
    <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="102" name="Corrected_Water_Content_Finer" oninput="calcular()"></td>


    <script>
        function search() {
            var sampleId = $('#sample_id').val();
            var sampleNumber = $('#sample_number').val();

            $.ajax({
                type: 'POST',
                url: 'Ajax-Mc.php',
                data: { sample_id: sampleId, sample_number: sampleNumber },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#1').val(response.mc_value);
                        $('#98').val(response.sg_value);
                    } else {
                        alert(response.message);
                    }
                },
                error: function() {
                    alert('Error en la solicitud AJAX.');
                }
            });
        }
    </script>


    <script>
function calcular() {
    //declaro todas mis variables.

    //variables de otro ensayo.
    var Nmc = parseFloat(document.getElementById("1").value);
    var SG = parseFloat(document.getElementById("98").value);

    //variables del peso del material humedo mas el molde de cada punto.
    var Wwsm1 = parseFloat(document.getElementById("2").value);
    var Wwsm2 = parseFloat(document.getElementById("3").value);
    var Wwsm3 = parseFloat(document.getElementById("4").value);
    var Wwsm4 = parseFloat(document.getElementById("5").value);
    var Wwsm5 = parseFloat(document.getElementById("6").value);
    var Wwsm6 = parseFloat(document.getElementById("7").value);

    //variables del peso del  molde usado en el ensayo.
    var WM1 = parseFloat(document.getElementById("8").value);
    var WM2 = parseFloat(document.getElementById("9").value);
    var WM3 = parseFloat(document.getElementById("10").value);
    var WM4 = parseFloat(document.getElementById("11").value);
    var WM5 = parseFloat(document.getElementById("12").value);
    var WM6 = parseFloat(document.getElementById("13").value);

    //variables del volumen del  molde usado en el ensayo.
    var VM1 = parseFloat(document.getElementById("20").value);
    var VM2 = parseFloat(document.getElementById("21").value);
    var VM3 = parseFloat(document.getElementById("22").value);
    var VM4 = parseFloat(document.getElementById("23").value);
    var VM5 = parseFloat(document.getElementById("24").value);
    var VM6 = parseFloat(document.getElementById("25").value);


    //variables del peso del material humedo en el calculo de humedades.
    var CWwsT1 = parseFloat(document.getElementById("50").value);
    var CWwsT2 = parseFloat(document.getElementById("51").value);
    var CWwsT3 = parseFloat(document.getElementById("52").value);
    var CWwsT4 = parseFloat(document.getElementById("53").value);
    var CWwsT5  = parseFloat(document.getElementById("54").value);
    var CWwsT6  = parseFloat(document.getElementById("55").value);


    //variables del peso del material seco en el calculo de humedades.
    var CWdsT1 = parseFloat(document.getElementById("56").value);
    var CWdsT2 = parseFloat(document.getElementById("57").value);
    var CWdsT3 = parseFloat(document.getElementById("58").value);
    var CWdsT4 = parseFloat(document.getElementById("59").value);
    var CWdsT5  = parseFloat(document.getElementById("60").value);
    var CWdsT6  = parseFloat(document.getElementById("61").value);

    //variables del peso del tare en el calculo de humedades.
    var WT1 = parseFloat(document.getElementById("68").value);
    var WT2  = parseFloat(document.getElementById("69").value);
    var WT3  = parseFloat(document.getElementById("70").value);
    var WT4  = parseFloat(document.getElementById("71").value);
    var WT5   = parseFloat(document.getElementById("72").value);
    var WT6   = parseFloat(document.getElementById("73").value);

    //variables para la correccion de tamano.

    var Wc = parseFloat(document.getElementById("94").value);
    var Gm = parseFloat(document.getElementById("95").value);
    var Pc = parseFloat(document.getElementById("96").value);
    var Pf = parseFloat(document.getElementById("97").value);
    
    var Ydt = parseFloat(document.getElementById("99").value);
    var Yw = parseFloat(document.getElementById("100").value);

    // CALCULAMOS
    
         //peso de agua
      var WW1 = CWwsT1-CWdsT1;
      var WW2 = CWwsT2-CWdsT2;
      var WW3 = CWwsT3-CWdsT3;
      var WW4 = CWwsT4-CWdsT4;
      var WW5 = CWwsT5-CWdsT5;
      var WW6 = CWwsT6-CWdsT6;

    // peso del material seco para la humedad
    var WDS1 = CWdsT1- WT1;
    var WDS2 = CWdsT2- WT2;
    var WDS3 = CWdsT3- WT3;
    var WDS4 = CWdsT4- WT4;
    var WDS5 = CWdsT5- WT5;
    var WDS6 = CWdsT6- WT6;

    //--- Contenido de humedad 
    var MC1 = (WW1/WDS1);
    var MC2 = (WW2/WDS2);
    var MC3 = (WW3/WDS3);
    var MC4 = (WW4/WDS4);
    var MC5 = (WW5/WDS5);
    var MC6 = (WW6/WDS6);

    //peso seco del material.
    var WS1 = Wwsm1 - WM1;
    var WS2 = Wwsm2 - WM2;
    var WS3 = Wwsm3 - WM3;
    var WS4 = Wwsm4 - WM4;
    var WS5 = Wwsm5 - WM5;
    var WS6 = Wwsm6 - WM6;

    // calculamos la densidad humedad.
    var WD1 = (WS1/VM1)*1000;
    var WD2 = (WS2/VM2)*1000;
    var WD3 = (WS3/VM3)*1000;
    var WD4 = (WS4/VM4)*1000;
    var WD5 = (WS5/VM5)*1000;
    var WD6 = (WS6/VM6)*1000;

    //Calculamos la densidad seca.
     var DD1 = WD1/(1+ MC1);
     var DD2= WD2/(1+ MC2);
     var DD3 = WD3/(1+ MC3);
     var DD4 = WD4/(1+ MC4);
     var DD5 = WD5/(1+ MC5);
     var DD6 = WD6/(1+ MC6);

     // densidades secas y humedades
    var densidadesSecas = [DD1, DD2, DD3, DD4, DD5, DD6];
    var humedades = [MC1, MC2, MC3, MC4, MC5, MC6];

    // Variables para almacenar la densidad seca máxima y su humedad correspondiente
    var densidadSecaMaxima = densidadesSecas[0];
    var humedadOptima = humedades[0];

    // Iterar sobre los datos para encontrar la densidad seca máxima
    for (var i = 1; i < densidadesSecas.length; i++) {
    if (densidadesSecas[i] > densidadSecaMaxima) {
    densidadSecaMaxima = densidadesSecas[i];
    humedadOptima = humedades[i];
  

  }
}

    //Determinacion de correction de densidad y humedad por sobre tamaño.

    // punto 1
    var OptMc1 = MC1;
    var Ydf1 = DD1 / 98.1;
    var YDT1 = 100 *(Ydf1 * Gm * Yw) / ((Ydf1 * Pc) + (Gm * Yw * Pf));

    var DD1C = YDT1 * 98.1;
    var Mc1C = (OptMc1 * Pf) + ((Wc/100) * Pc);

    // punto 2
    var OptMc2 = MC2;
    var Ydf2 = DD2 / 98.1;
    var YDT2 = 100 *(Ydf2 * Gm * Yw) / ((Ydf2 * Pc) + (Gm * Yw * Pf));

    var DD2C = YDT2 * 98.1;
    var Mc2C = (OptMc2 * Pf) + ((Wc/100) * Pc);


    // punto 3
    var OptMc3 = MC3;
    var Ydf3 = DD3 / 98.1;
    var YDT3 = 100 *(Ydf3 * Gm * Yw) / ((Ydf3 * Pc) + (Gm * Yw * Pf));

    var DD3C = YDT3 * 98.1;
    var Mc3C = (OptMc3 * Pf) + ((Wc/100) * Pc);

    // punto 4
    var OptMc4 = MC4;
    var Ydf4 = DD4 / 98.1;
    var YDT4 = 100 *(Ydf4 * Gm * Yw) / ((Ydf4 * Pc) + (Gm * Yw * Pf));

    var DD4C = YDT4 * 98.1;
    var Mc4C = (OptMc4 * Pf) + ((Wc/100) * Pc);

    // punto 5
    var OptMc5 = MC5;
    var Ydf5 = DD5 / 98.1;
    var YDT5 = 100 *(Ydf5 * Gm * Yw) / ((Ydf5 * Pc) + (Gm * Yw * Pf));

    var DD5C = YDT5 * 98.1;
    var Mc5C = (OptMc5 * Pf) + ((Wc/100) * Pc);


    // punto 6
    var OptMc6 = MC6;
    var Ydf6 = DD6 / 98.1;
    var YDT6 = 100 *(Ydf6 * Gm * Yw) / ((Ydf6 * Pc) + (Gm * Yw * Pf));

    var DD6C = YDT6 * 98.1;
    var Mc6C = (OptMc6 * Pf) + ((Wc/100) * Pc);

// densidades secas y humedades corregidas
var densidadesSecasC = [DD1C, DD2C, DD3C, DD4C, DD5C, DD6C];
    var humedadesC = [Mc1C, Mc2C, Mc3C, Mc4C, Mc5C, Mc6C];

    // Variables para almacenar la densidad seca máxima y su humedad correspondiente
    var densidadSecaMaximaC = densidadesSecasC[0];
    var humedadOptimaC = humedadesC[0];

    // Iterar sobre los datos para encontrar la densidad seca máxima
    for (var i = 1; i < densidadesSecasC.length; i++) {
    if (densidadesSecasC[i] > densidadSecaMaximaC) {
    densidadSecaMaximaC = densidadesSecasC[i];
    humedadOptimaC = humedadesC[i];
  

  }
}

    // Pasar el resultado al input
    //peso seco del material.
    document.getElementById("14").value = WS1.toFixed(2);
    document.getElementById("15").value = WS2.toFixed(2);
    document.getElementById("16").value = WS3.toFixed(2);
    document.getElementById("17").value = WS4.toFixed(2);
    document.getElementById("18").value = WS5.toFixed(2);
    document.getElementById("19").value = WS6.toFixed(2);

    // Peso del agua.
    document.getElementById("62").value = WW1.toFixed(2);
    document.getElementById("63").value = WW2.toFixed(2);
    document.getElementById("64").value = WW3.toFixed(2);
    document.getElementById("65").value = WW4.toFixed(2);
    document.getElementById("66").value = WW5.toFixed(2);
    document.getElementById("67").value = WW6.toFixed(2);

    //peso seco del material de la humedad.
    document.getElementById("74").value = WDS1.toFixed(2);
    document.getElementById("75").value = WDS2.toFixed(2);
    document.getElementById("76").value = WDS3.toFixed(2);
    document.getElementById("77").value = WDS4.toFixed(2);
    document.getElementById("78").value = WDS5.toFixed(2);
    document.getElementById("79").value = WDS6.toFixed(2);

    //contenido de humedad en porcentaje.
    document.getElementById("80").value = (MC1*100).toFixed(2);
    document.getElementById("81").value = (MC2*100).toFixed(2);
    document.getElementById("82").value = (MC3*100).toFixed(2);
    document.getElementById("83").value = (MC4*100).toFixed(2);
    document.getElementById("84").value = (MC5*100).toFixed(2);
    document.getElementById("85").value = (MC6*100).toFixed(2);

    //Densidad humedad del material.
    document.getElementById("26").value = WD1.toFixed(2);
    document.getElementById("27").value = WD2.toFixed(2);
    document.getElementById("28").value = WD3.toFixed(2);
    document.getElementById("29").value = WD4.toFixed(2);
    document.getElementById("30").value = WD5.toFixed(2);
    document.getElementById("31").value = WD6.toFixed(2);

    //Densidades secas del material.
    document.getElementById("32").value = DD1.toFixed(2);
    document.getElementById("33").value = DD2.toFixed(2);
    document.getElementById("34").value = DD3.toFixed(2);
    document.getElementById("35").value = DD4.toFixed(2);
    document.getElementById("36").value = DD5.toFixed(2);
    document.getElementById("37").value = DD6.toFixed(2);


    // Correccion por sobre tamano.

    document.getElementById("38").value = DD1C.toFixed(2);
    document.getElementById("39").value = DD2C.toFixed(2);
    document.getElementById("40").value = DD3C.toFixed(2);
    document.getElementById("41").value = DD4C.toFixed(2);
    document.getElementById("42").value = DD5C.toFixed(2);
    document.getElementById("43").value = DD6C.toFixed(2);

    document.getElementById("86").value = Mc1C.toFixed(2);
    document.getElementById("87").value = Mc2C.toFixed(2);
    document.getElementById("88").value = Mc3C.toFixed(2);
    document.getElementById("89").value = Mc4C.toFixed(2);
    document.getElementById("90").value = Mc5C.toFixed(2);
    document.getElementById("91").value = Mc6C.toFixed(2);

     // Densidad Maxima y Humedad Optima.
    document.getElementById("92").value = densidadSecaMaxima.toFixed(2);
    document.getElementById("93").value = (humedadOptima *100).toFixed(2);
    document.getElementById("101").value = densidadSecaMaximaC.toFixed(2);
    document.getElementById("102").value = (humedadOptimaC).toFixed(2);


}
 </script>


</thead>

</table>


<div id="standard_proctor" style="height: 600px; width: 1070px;"></div>

<button type="submit" name="Standardproctor" class="btn btn-danger">Registrar ensayo</button>
<button type="submit" name="grafico" class="btn btn-primary" onclick="enviarData(event)">Graficar</button>
</form>
</div>
</div>
</div>
</div>

<script>
    function enviarData(event) {
      event.preventDefault()
      $.ajax({
        url: "libs/js/sp_graph.js",
        type: "POST",
        data: $("#standard_proctor").serialize(),
        success: function(data) {
          $("#resultado").html(data);
        }
      });
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="libs/js/sp_graph.js"></script>

<?php include_once('layouts/footer.php'); ?>