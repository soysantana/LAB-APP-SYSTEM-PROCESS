<?php
$page_title = 'Grain Size Calculation ';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/GrainSize.php'); 
}
$search_table = find_by_id('grain_size', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
<div class="col-md-12">
<?php echo display_msg($msg); ?>
<div class="panel panel-default">
<div class="panel-heading clearfix">
<strong>
<span class="glyphicon glyphicon-th"></span>
<span>Grain Size Calculation</span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="" onsubmit="calcular();calcularD();">

<div>
  <table class="table table-bordered" style="width: 100%;">
    <thead>
      <caption></caption>
    </thead>
    <tbody>
      <tr></tr>
    </tbody>
    <tbody id="product_info"></tbody>
  </table>
</div>

<table class="table table-bordered">
<thead>
</div>

</div>
<div class="col-xs-4">
<label >Standard</label>
<select class="form-control" name="Standard">
<option <?php if ($search_table['Standard'] == 'ASTM-D6913') echo 'selected'; ?>>ASTM-D6913</option>    
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
<select class="form-control" name="Split">
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
</div>


<div>
  <table class="table table-bordered border-primary" style="width: 350px;">
  <thead>
  </thead>
  <tbody>
  
  <tr>
  <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Container</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['Container']); ?>" id="1" name="Container"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Wet Soil + Tare (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['Tare_Wet_Soil']); ?>" id="2" name="TareWetSoil"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil + Tare (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['Tare_Dry_Soil']); ?>" id="3" name="TareDrySoil" oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row"> Tare (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['Tare']); ?>" id="4" name="Tare" oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['Dry_Soil']); ?>" id="5" name="DrySoil" oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Washed (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['Washed']); ?>" id="6" name="Washed" oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Wash Pan (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['Wash_Pan']); ?>" id="7" name="WashPan" oninput="calcular()"></td>
  </tr>
  </table>
</div>


<div style="margin-left: 1%;">
  <table class="table table-bordered border-primary" style="width: 350px;">
      <thead>
  </thead>
  <tbody>
      <tr>
        <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Coarse Than Gravel %:</th>
        <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['Coarser_than_Gravel']); ?>" id="112" name="CoarserThanGravel" oninput="calcular()"></td>
      </tr>
      <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Gravel %:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['Gravel']); ?>" id="113" name="Gravel" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Sand %:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['Sand']); ?>" id="114" name="sand" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row"> Fines %:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['Fines']); ?>" id="115" name="Fines" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D10 (mm):</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['D10']); ?>" id="116" name="d10" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D15 (mm):</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['D15']); ?>" id="117" name="d15" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D30 (mm)::</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['D30']); ?>" id="118" name="d30" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D60 (mm)::</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['D60']); ?>" id="119" name="d60" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D85 (mm)::</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['D85']); ?>" id="120" name="d85" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Cc:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['Wash_Pan']); ?>" id="121" name="Cc" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Cu:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;" value="<?php echo ($search_table['Wash_Pan']); ?>" id="122" name="Cu" oninput="calcularD()"></td>
        </tr>
  </tbody>
  </table>
</div>

<div style="display: flex; flex-direction: row-reverse; justify-content: center; margin-top: -50%;">
  <table class="table table-bordered border-primary" style="width: 450px;">
  <thead>
  <tr>
  <th scope="col">Screen</th>
  <th scope="col">mm</th>
  <th scope="col">Wt Ret</th>
  <th scope="col">% Ret</th>
  <th scope="col">Cum % Ret</th>
  <th scope="col">% Pass</th>
   </tr>
      </thead>
      <tbody>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">40"</th>
          <td>1016</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_40_1016']); ?>" id="8" name="WtRet40" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_40_1016']); ?>" id="9" name="Ret40" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_40_1016']); ?>" id="10" name="CumRet40" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_40_1016']); ?>" id="11" name="Pass40" oninput="calcular()"></td>
        </tr>
  
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">12"</th>
          <td>304.8</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_12_304']); ?>" id="12" name="WtRet12" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_12_304']); ?>" id="13" name="Ret12" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_12_304']); ?>" id="14" name="CumRet12" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_12_304']); ?>" id="15" name="Pass12" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">10"</th>
          <td>254</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_10_254']); ?>" id="16" name="WtRet10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_10_254']); ?>" id="17" name="Ret10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_10_254']); ?>" id="18" name="CumRet10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_10_254']); ?>" id="19" name="Pass10" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">8"</th>
          <td>203.2</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_8_203']); ?>" id="20" name="WtRet8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_8_203']); ?>" id="21" name="Ret8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_8_203']); ?>" id="22" name="CumRet8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_8_203']); ?>" id="23" name="Pass8" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">6"</th>
          <td>152.4</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_6_152']); ?>" id="24" name="WtRet6" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_6_152']); ?>" id="25" name="Ret6" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_6_152']); ?>" id="26" name="CumRet6" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_6_152']); ?>" id="27" name="Pass6" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">5"</th>
          <td>127</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_5_127']); ?>" id="28" name="WtRet5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_5_127']); ?>" id="29" name="Ret5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_5_127']); ?>" id="30" name="CumRet5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_5_127']); ?>" id="31" name="Pass5" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">4"</th>
          <td>101.6</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_4_101']); ?>" id="32" name="WtRet4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_4_101']); ?>" id="33" name="Ret4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_4_101']); ?>" id="34" name="CumRet4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_4_101']); ?>" id="35" name="Pass4" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">3"</th>
          <td>76.2</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_3_75']); ?>" id="36" name="WtRet3" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_3_75']); ?>" id="37" name="Ret3" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_3_75']); ?>" id="38" name="CumRet3" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_3_75']); ?>" id="39" name="Pass3" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">2.5"</th>
          <td>63.50</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_2p5_63']); ?>" id="40" name="WtRet2p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_2p5_63']); ?>" id="41" name="Ret2p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_2p5_63']); ?>" id="42" name="CumRet2p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_2p5_63']); ?>" id="43" name="Pass2p5" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">2"</th>
          <td>50.80</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_2_50']); ?>" id="44" name="WtRet2" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_2_50']); ?>" id="45" name="Ret2" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_2_50']); ?>" id="46" name="CumRet2" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_2_50']); ?>" id="47" name="Pass2" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">1.5"</th>
          <td>38.1</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_1p5_37']); ?>" id="48" name="WtRet1p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_1p5_37']); ?>" id="49" name="Ret1p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_1p5_37']); ?>" id="50" name="CumRet1p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_1p5_37']); ?>" id="51" name="Pass1p5" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">1"</th>
          <td>25.4</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_1_25']); ?>" id="52" name="WtRet1" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_1_25']); ?>" id="53" name="Ret1" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_1_25']); ?>" id="54" name="CumRet1" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_1_25']); ?>" id="55" name="Pass1" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">3/4"</th>
          <td>19.5</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_3p4_19']); ?>" id="56" name="WtRet3p4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_3p4_19']); ?>" id="57" name="Ret3p4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_3p4_19']); ?>" id="58" name="CumRet3p4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_3p4_19']); ?>" id="59" name="Pass3p4" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">1/2"</th>
          <td>12.7</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_1p2_12']); ?>" id="60" name="WtRet1p2" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_1p2_12']); ?>" id="61" name="Ret1p2" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_1p2_12']); ?>" id="62" name="CumRet1p2" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_1p2_12']); ?>" id="63" name="Pass1p2" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">3/8"</th>
          <td>9.5</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_3p8_9']); ?>" id="64" name="WtRet3p8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_3p8_9']); ?>" id="65" name="Ret3p8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_3p8_9']); ?>" id="66" name="CumRet3p8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_3p8_9']); ?>" id="67" name="Pass3p8" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 4</th>
          <td>4.75</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_No4_4']); ?>" id="68" name="WtRetn4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_No4_4']); ?>" id="69" name="Retn4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_No4_4']); ?>" id="70" name="CumRetn4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_No4_4']); ?>" id="71" name="Passn4" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 10</th>
          <td>2.00</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_No10_2']); ?>" id="72" name="WtRetn10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_No10_2']); ?>" id="73" name="Retn10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_No10_2']); ?>" id="74" name="CumRetn10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_No10_2']); ?>" id="75" name="Passn10" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 16</th>
          <td>1.18</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_No16_1']); ?>" id="76" name="WtRetn16" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_No16_1']); ?>" id="77" name="Retn16" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_No16_1']); ?>" id="78" name="CumRetn16" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_No16_1']); ?>" id="79" name="Passn16" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 20</th>
          <td>0.85</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_No20_0p85']); ?>" id="80" name="WtRetn20" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_No20_0p85']); ?>" id="81" name="Retn20" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_No20_0p85']); ?>" id="82" name="CumRetn20" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_No20_0p85']); ?>" id="83" name="Passn20" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 50</th>
          <td>0.30</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_No50_0p3']); ?>" id="84" name="WtRetn50" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_No50_0p3']); ?>" id="85" name="Retn50" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_No50_0p3']); ?>" id="86" name="CumRetn50" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_No50_0p3']); ?>" id="87" name="Passn50" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 60</th>
          <td>0.25</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_No60_0p25']); ?>" id="88" name="WtRetn60" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_No60_0p25']); ?>" id="89" name="Retn60" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_No60_0p25']); ?>" id="90" name="CumRetn60" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_No60_0p25']); ?>" id="91" name="Passn60" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">No. 100</th>
          <td>0.15</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_No100_0p15']); ?>" id="92" name="WtRetn100" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_No100_0p15']); ?>" id="93" name="Retn100" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_No100_0p15']); ?>" id="94" name="CumRetn100" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_No100_0p15']); ?>" id="95" name="Passn100" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">No. 140</th>
          <td>0.106</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_No140_0p106']); ?>" id="96" name="WtRetn140" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_No140_0p106']); ?>" id="97" name="Retn140" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_No140_0p106']); ?>" id="98" name="CumRetn140" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_No140_0p106']); ?>" id="99" name="Passn140" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">No. 200</th>
          <td>0.075</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_No200_0p075']); ?>" id="100" name="WtRetn200" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_No200_0p075']); ?>" id="101" name="Retn200" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_No200_0p075']); ?>" id="102" name="CumRetn200" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_No200_0p075']); ?>" id="103" name="Passn200" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row" colspan="2">Pan</th>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_Pan']); ?>" id="104" name="WtRentPan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_Pan']); ?>" id="105" name="RetPan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="106" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="107" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row" colspan="2"> Total Pan</th>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Wt_Ret_Total_Pan']); ?>" id="108" name="WtRetTpan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Ret_Total_Pan']); ?>" id="109" name="RetTTPan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Cum_Ret_Total_Pan']); ?>" id="110" name="CumRetPan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($search_table['Porce_Pass_Total_Pan']); ?>" id="111" name="PassnPan" oninput="calcular()"></td>
        </tr>
      </tbody>
    </table>
</div>




  


  <script>
      function calcular() {
    // Obtener los valores
    var valores = [];
    for (var i = 3; i <=111; i++) {
      valores.push(parseFloat(document.getElementById(i.toString()).value || 0));
    }
  
    // Calculando
    var WDS = valores[0] - valores[1] ;
    var WWpan = WDS - valores [3];
    
  
    var PWR40 = (valores [5]/WDS)*100;
    var PC40 = PWR40+0;
    var PP40 = 100-PC40;
  
    var PWR12 = (valores [9]/WDS)*100;
    var PC12 = PC40+PWR12;
    var PP12 = 100-PC12;
  
    var PWR10 = (valores [13]/WDS)*100;
    var PC10 = PC12+PWR10;
    var PP10 = 100-PC10;
  
    var PWR8 = (valores [17]/WDS)*100;
    var PC8 = PC10+PWR8;
    var PP8 = 100-PC8;
    
    var PWR6 = (valores [21]/WDS)*100;
    var PC6= PC8+PWR6;
    var PP6 = 100-PC6;
  
    var PWR5 = (valores [25]/WDS)*100;
    var PC5= PC6+PWR5;
    var PP5 = 100-PC5;
   
    var PWR4 = (valores [29]/WDS)*100;
    var PC4= PC5+PWR4;
    var PP4 = 100-PC4;
    
    var PWR3 = (valores [33]/WDS)*100;
    var PC3= PC4+PWR3;
    var PP3 = 100-PC3;
    
    var PWR2p5 = (valores [37]/WDS)*100;
    var PC2p5= PC3+PWR2p5;
    var PP2p5= 100-PC2p5;
    
    var PWR2 = (valores [41]/WDS)*100;
    var PC2= PC2p5+PWR2;
    var PP2= 100-PC2;
    
    var PWR1p5 = (valores [45]/WDS)*100;
    var PC1p5= PC2+PWR1p5;
    var PP1p5= 100-PC1p5;
    
    var PWR1 = (valores [49]/WDS)*100;
    var PC1= PC1p5+PWR1;
    var PP1= 100-PC1;
  
    var PWR3p4 = (valores [53]/WDS)*100;
    var PC3p4= PC1+PWR3p4;
    var PP3p4= 100-PC3p4;
    
    var PWR1p2 = (valores [57]/WDS)*100;
    var PC1p2= PC3p4+PWR1p2;
    var PP1p2= 100-PC1p2;
  
    var PWR3p8= (valores [61]/WDS)*100;
    var PC3p8= PC1p2+PWR3p8;
    var PP3p8= 100-PC3p8;
   
    var PWRNo4= (valores [65]/WDS)*100;
    var PCNo4= PC3p8+PWRNo4;
    var PPNo4= 100-PCNo4;
  
    var PWRNo10= (valores [69]/WDS)*100;
    var PCNo10= PCNo4+PWRNo10;
    var PPNo10= 100-PCNo10;
    
    var PWRNo16= (valores [73]/WDS)*100;
    var PCNo16= PCNo10+PWRNo16;
    var PPNo16= 100-PCNo16;
    
    var PWRNo20= (valores [77]/WDS)*100;
    var PCNo20= PCNo16+PWRNo20;
    var PPNo20= 100-PCNo20;
   
    var PWRNo50= (valores [81]/WDS)*100;
    var PCNo50= PCNo20+PWRNo50;
    var PPNo50= 100-PCNo50;
   
    var PWRNo60= (valores [85]/WDS)*100;
    var PCNo60= PCNo50+PWRNo60;
    var PPNo60= 100-PCNo60;
    
    var PWRNo100= (valores [89]/WDS)*100;
    var PCNo100= PCNo60+PWRNo100;
    var PPNo100= 100-PCNo100;
    
    var PWRNo140= (valores [93]/WDS)*100;
    var PCNo140= PCNo100+PWRNo140;
    var PPNo140= 100-PCNo140;
    
    var PWRNo200= (valores [97]/WDS)*100;
    var PCNo200= PCNo140+PWRNo200;
    var PPNo200= 100-PCNo200;
  
  
    var PRpan = (valores [101] /WDS)*100;
    
    var TotalPan = valores [101]+WWpan;
    var TPPR = (TotalPan /WDS)*100;
    var TPCP = PCNo200 + TPPR;
    var TPPP = 100-TPCP;
    
    
    
    var pasante3;
  
  if (PP3 === "") {
    pasante3 = 100;
  } else {
    pasante3 = PP3;
  }
   
    var pasanteN4 = 100-PCNo4;
    var pasanteN200 = 100-PCNo200;
    var ctgravel = 100-pasante3;
    var gravel = pasante3-pasanteN4;
    var sand = pasanteN4-pasanteN200;
    var fines = pasanteN200;

  var p40 = parseFloat(document.getElementById("11").value);
  var p12 = parseFloat(document.getElementById("15").value);
  var p10 = parseFloat(document.getElementById("19").value);
  var p8 = parseFloat(document.getElementById("23").value);
  var p6 = parseFloat(document.getElementById("27").value);
  var p5 = parseFloat(document.getElementById("31").value);
  var p4 = parseFloat(document.getElementById("35").value);
  var p3 = parseFloat(document.getElementById("39").value);
  var p2m5 = parseFloat(document.getElementById("43").value);
  var p2 = parseFloat(document.getElementById("47").value);
  var p1m5 = parseFloat(document.getElementById("51").value);
  var p1 = parseFloat(document.getElementById("55").value);
  var p3m4 = parseFloat(document.getElementById("59").value);
  var p1m2 = parseFloat(document.getElementById("63").value);
  var p3m8 = parseFloat(document.getElementById("67").value);
  var no4 = parseFloat(document.getElementById("71").value);
  var no10 = parseFloat(document.getElementById("75").value);
  var no16 = parseFloat(document.getElementById("79").value);
  var no20 = parseFloat(document.getElementById("83").value);
  var no50 = parseFloat(document.getElementById("87").value);
  var no60 = parseFloat(document.getElementById("91").value);
  var no100 = parseFloat(document.getElementById("95").value);
  var no140 = parseFloat(document.getElementById("99").value);
  var no200 = parseFloat(document.getElementById("103").value);


  var tamanos = [0.075, 0.106, 0.15, 0.25, 0.30, 0.85, 1.18, 2.00, 4.75, 9.5, 12.7, 19.5, 25.4, 38.1, 50.80, 63.50,
 76.2, 101.6, 127, 152.4, 203.2, 254, 304.8, 1016];
 var porcentajes = [no200, no140, no100, no60, no50, no20, no16, no10, no4, p3m8, p1m2, p3m4, p1, p1m5,
 p2, p2m5, p3, p4, p5, p6, p8, p10, p12, p40];

function calcularDiametro(d) {
  function buscarIndice() {
    for (var i = 0; i < porcentajes.length; i++) {
      if (porcentajes[i] >= d) {
        return i;
      }
    }
    return porcentajes.length - 1; // Si no se encuentra un índice, se devuelve el último
  }

  var indice = buscarIndice();
  if (porcentajes[indice] == d) {
    return tamanos[indice];
  } else {
    // Realizar interpolación logarítmica
    var logD = Math.log(d);
    var logD1 = Math.log(porcentajes[indice - 1]);
    var logD2 = Math.log(porcentajes[indice]);
    var logT1 = Math.log(tamanos[indice - 1]);
    var logT2 = Math.log(tamanos[indice]);
    var resultadoD = Math.exp(logT1 + (logD - logD1) * (logT2 - logT1) / (logD2 - logD1));
    return resultadoD;
  }
}

var d10 = calcularDiametro(10)||0;
var d15 = calcularDiametro(15)||0;
var d30 = calcularDiametro(30)||0;
var d60 = calcularDiametro(60)||0;
var d85 = calcularDiametro(85)||0;
  
var Cc = (Math.pow(d30, 2) / (d60 * d10))||0;
var Cu = (d60 / d10)||0;

//pasamos los valores a los inputs
  document.getElementById("5").value = WDS.toFixed(2);
  document.getElementById("7").value = WWpan.toFixed(2);

  document.getElementById("9").value = PWR40.toFixed(2);
  document.getElementById("10").value = PC40.toFixed(2);
  document.getElementById("11").value = PP40.toFixed(2);

  document.getElementById("13").value = PWR12.toFixed(2);
  document.getElementById("14").value = PC12.toFixed(2);
  document.getElementById("15").value = PP12.toFixed(2);

  document.getElementById("17").value = PWR10.toFixed(2);
  document.getElementById("18").value = PC10.toFixed(2);
  document.getElementById("19").value = PP10.toFixed(2);

  document.getElementById("21").value = PWR8.toFixed(2);
  document.getElementById("22").value = PC8.toFixed(2);
  document.getElementById("23").value = PP8.toFixed(2);

  document.getElementById("25").value = PWR6.toFixed(2);
  document.getElementById("26").value = PC6.toFixed(2);
  document.getElementById("27").value = PP6.toFixed(2);

  document.getElementById("29").value = PWR5.toFixed(2);
  document.getElementById("30").value = PC5.toFixed(2);
  document.getElementById("31").value = PP5.toFixed(2);

  document.getElementById("33").value = PWR4.toFixed(2);
  document.getElementById("34").value = PC4.toFixed(2);
  document.getElementById("35").value = PP4.toFixed(2);

  document.getElementById("37").value = PWR3.toFixed(2);
  document.getElementById("38").value = PC3.toFixed(2);
  document.getElementById("39").value = PP3.toFixed(2);

  document.getElementById("41").value = PWR2p5.toFixed(2);
  document.getElementById("42").value = PC2p5.toFixed(2);
  document.getElementById("43").value = PP2p5.toFixed(2);

  document.getElementById("45").value = PWR2.toFixed(2);
  document.getElementById("46").value = PC2.toFixed(2);
  document.getElementById("47").value = PP2.toFixed(2);

  document.getElementById("49").value = PWR1p5.toFixed(2);
  document.getElementById("50").value = PC1p5.toFixed(2);
  document.getElementById("51").value = PP1p5.toFixed(2);

  document.getElementById("53").value = PWR1.toFixed(2);
  document.getElementById("54").value = PC1.toFixed(2);
  document.getElementById("55").value = PP1.toFixed(2);

  document.getElementById("57").value = PWR3p4.toFixed(2);
  document.getElementById("58").value = PC3p4.toFixed(2);
  document.getElementById("59").value = PP3p4.toFixed(2);

  document.getElementById("61").value = PWR1p2.toFixed(2);
  document.getElementById("62").value = PC1p2.toFixed(2);
  document.getElementById("63").value = PP1p2.toFixed(2);

  document.getElementById("65").value = PWR3p8.toFixed(2);
  document.getElementById("66").value = PC3p8.toFixed(2);
  document.getElementById("67").value = PP3p8.toFixed(2);

  document.getElementById("69").value = PWRNo4.toFixed(2);
  document.getElementById("70").value = PCNo4.toFixed(2);
  document.getElementById("71").value = PPNo4.toFixed(2);

  document.getElementById("73").value = PWRNo10.toFixed(2);
  document.getElementById("74").value = PCNo10.toFixed(2);
  document.getElementById("75").value = PPNo10.toFixed(2);

  document.getElementById("77").value = PWRNo16.toFixed(2);
  document.getElementById("78").value = PCNo16.toFixed(2);
  document.getElementById("79").value = PPNo16.toFixed(2);

  document.getElementById("81").value = PWRNo20.toFixed(2);
  document.getElementById("82").value = PCNo20.toFixed(2);
  document.getElementById("83").value = PPNo20.toFixed(3);

  document.getElementById("85").value = PWRNo50.toFixed(2);
  document.getElementById("86").value = PCNo50.toFixed(2);
  document.getElementById("87").value = PPNo50.toFixed(2);

  document.getElementById("89").value = PWRNo60.toFixed(2);
  document.getElementById("90").value = PCNo60.toFixed(2);
  document.getElementById("91").value = PPNo60.toFixed(2);

  document.getElementById("93").value = PWRNo100.toFixed(2);
  document.getElementById("94").value = PCNo100.toFixed(2);
  document.getElementById("95").value = PPNo100.toFixed(3);

  document.getElementById("97").value = PWRNo140.toFixed(2);
  document.getElementById("98").value = PCNo140.toFixed(2);
  document.getElementById("99").value = PPNo140.toFixed(3);

  document.getElementById("101").value = PWRNo200.toFixed(2);
  document.getElementById("102").value = PCNo200.toFixed(2);
  document.getElementById("103").value = PPNo200.toFixed(2);

  document.getElementById("105").value = PRpan.toFixed(2);
  document.getElementById("108").value = TotalPan.toFixed(2);
  document.getElementById("109").value = TPPR.toFixed(2);
  document.getElementById("110").value = TPCP.toFixed(2);
  document.getElementById("111").value = TPPP.toFixed(2);

  document.getElementById("112").value = ctgravel.toFixed(2);
  document.getElementById("113").value = gravel.toFixed(2);
  document.getElementById("114").value = sand.toFixed(2);
  document.getElementById("115").value = fines.toFixed(2);

  document.getElementById("116").value = d10.toFixed(2);
  document.getElementById("117").value = d15.toFixed(2);
  document.getElementById("118").value = d30.toFixed(2);
  document.getElementById("119").value = d60.toFixed(2);
  document.getElementById("120").value = d85.toFixed(2);
  document.getElementById("121").value = Cc.toFixed(2);
  document.getElementById("122").value = Cu.toFixed(2);
  





 }


  </script>


<div>
  <div id="grain_size" style="height: 600px; width: 1070px;"></div>
</div>

<script>
  html2canvas(document.getElementById('grain_size')).then(function(canvas) {
    var imageData = canvas.toDataURL('image/png'); // Convierte la imagen en base64

    // Envia 'imageData' al servidor utilizando una solicitud AJAX
    fetch('db/GrainSize.php', {
      method: 'POST',
      body: JSON.stringify({ imageData: imageData }),
      headers: {
        'Content-Type': 'application/json'
      }
    })
    .then(function(response) {
      if (response.ok) {
        // La imagen se ha guardado con éxito en la base de datos.
        // Puedes continuar con el proceso de registro u otras acciones.
      } else {
        // Hubo un error al guardar la imagen.
      }
    })
    .catch(function(error) {
      // Manejar errores de red u otros errores.
    });
  });
</script>


<button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
<button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
<div class="btn-group dropup" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Generar PDF
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Contrucion</a></li>
                    <li><a href="PDF/Grain_Size_Rev_5.php?id=<?php echo intval($search_table['id']); ?>">Investigacion</a></li>
                    </ul>
                    </div>
<button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>
<button type="submit" name="grainsize" class="btn btn-primary" onclick="enviarData(event)">Graficar</button>
</form>
</div>
</div>
</div>
</div>

<script>
    function enviarData(event) {
      event.preventDefault()
      $.ajax({
        url: "libs/js/grainsize.js",
        type: "POST",
        data: $("#mxy").serialize(),
        success: function(data) {
          $("#resultado").html(data);
        }
      });


    }
    $(document).ready(function() {
    $('#sug_input').keyup(function() {
      var query = $(this).val();
      if (query != '') {
        $.ajax({
          url: "ajax.php",
          method: "POST",
          data: {
            query: query
          },
          success: function(data) {
            $('#result').html(data);
          }
        });
      } else {
        $('#result').html('');
      }
    });
  });
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>

<?php include_once('layouts/footer.php'); ?>