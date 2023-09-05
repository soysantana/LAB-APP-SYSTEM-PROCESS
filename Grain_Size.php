<?php
$page_title = 'Grain Size Calculation ';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/GrainSize.php'); 
}
?>

<?php
/*
// Recuperamos los datos del formulario
if (isset($_POST['Grain_Size'])) {
  $req_fields = array(
'sampleid', 'structure', 'area', 'source', 'depthfrom', 'depthto',
'materialtype', 'sampletype', 'north', 'east', 'elev', 'sampledate',
'Standard', 'PreparationMethod', 'Split', 'Comments', 'Technician',
'TestStartDate', 'Container', 'TareWetSoil', 'TareDrySoil', 'Tare',
'DrySoil', 'Washed', 'WashPan', 'CoarserThanGravel', 'Gravel', 'sand',
'Fines', 'd10', 'd15', 'd30', 'd60', 'd85', 'Cc', 'Cu', 
'WtRet40', 'Ret40', 'CumRet40', 'Pass40', 'WtRet12', 'Ret12', 'CumRet12', 'Pass12',
'WtRet10', 'Ret10', 'CumRet10', 'Pass10', 'WtRet8', 'Ret8', 'CumRet8', 'Pass8',
'WtRet6', 'Ret6', 'CumRet6', 'Pass6', 'WtRet5', 'Ret5', 'CumRet5', 'Pass5',
'WtRet4', 'Ret4', 'CumRet4', 'Pass4', 'WtRet3', 'Ret3', 'CumRet3', 'Pass3',
'WtRet2p5', 'Ret2p5', 'CumRet2p5', 'Pass2p5', 'WtRet2', 'Ret2', 'CumRet2', 'Pass2',
'WtRet1p5', 'Ret1p5', 'CumRet1p5', 'Pass1p5', 'WtRet1', 'Ret1', 'CumRet1', 'Pass1',
'WtRet3p4', 'Ret3p4', 'CumRet3p4', 'Pass3p4', 'WtRet1p2', 'Ret1p2', 'CumRet1p2', 'Pass1p2',
'WtRet3p8', 'Ret3p8', 'CumRet3p8', 'Pass3p8', 'WtRetn4', 'Retn4', 'CumRetn4', 'Passn4',
'WtRetn10', 'Retn10', 'CumRetn10', 'Passn10', 'WtRetn16', 'Retn16', 'CumRetn16', 'Passn16',
'WtRetn20', 'Retn20', 'CumRetn20', 'Passn20', 'WtRetn50', 'Retn50', 'CumRetn50', 'Passn50',
'WtRetn60', 'Retn60', 'CumRetn60', 'Passn60', 'WtRetn100', 'Retn100', 'CumRetn100', 'Passn100',
'WtRetn140', 'Retn140', 'CumRetn140', 'Passn140', 'WtRetn200', 'Retn200', 'CumRetn200', 'Passn200',
'WtRentPan', 'RetPan', 'WtRetTpan', 'RetTTPan', 'CumRetPan', 'PassnPan'
);
  validate_fields($req_fields);

// Validacion de post
  if (empty($errors)) {
    // Valores Obtenidos del ajax
    $sampleid = $db->escape($_POST['sampleid']);
    $samplenumber = $db->escape($_POST['samplenumber']);
    $structure = $db->escape($_POST['structure']);
    $area = $db->escape($_POST['area']);
    $source = $db->escape($_POST['source']);
    $depthfrom = $db->escape($_POST['depthfrom']);
    $depthto = $db->escape($_POST['depthto']);
    $materialtype = $db->escape($_POST['materialtype']);
    $sampletype = $db->escape($_POST['sampletype']);
    $north = $db->escape($_POST['north']);
    $east = $db->escape($_POST['east']);
    $elev = $db->escape($_POST['elev']);
    $sampledate = $db->escape($_POST['sampledate']);
    $reportdate = make_date();
    $testype = "GS-Soil";

  // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $PreparationMethod = $db->escape($_POST['PreparationMethod']);
    $Split = $db->escape($_POST['Split']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

  // Container
    $Container = $db->escape($_POST['Container']);
    $TareWetSoil = $db->escape($_POST['TareWetSoil']);
    $TareDrySoil = $db->escape($_POST['TareDrySoil']);
    $Tare = $db->escape($_POST['Tare']);
    $DrySoil = $db->escape($_POST['DrySoil']);
    $Washed = $db->escape($_POST['Washed']);
    $WashPan = $db->escape($_POST['WashPan']);

  // Sumary GS
    $CoarserThanGravel = $db->escape($_POST['CoarserThanGravel']);
    $Gravel = $db->escape($_POST['Gravel']);
    $sand = $db->escape($_POST['sand']);
    $Fines = $db->escape($_POST['Fines']);
    $d10 = $db->escape($_POST['d10']);
    $d15 = $db->escape($_POST['d15']);
    $d30 = $db->escape($_POST['d30']);
    $d60 = $db->escape($_POST['d60']);
    $d85 = $db->escape($_POST['d85']);
    $Cc = $db->escape($_POST['Cc']);
    $Cu = $db->escape($_POST['Cu']);
    

  // Tamizes
    $WtRet40 = $db->escape($_POST['WtRet40']);
    $Ret40 = $db->escape($_POST['Ret40']);
    $CumRet40 = $db->escape($_POST['CumRet40']);
    $Pass40 = $db->escape($_POST['Pass40']);

    $WtRet12 = $db->escape($_POST['WtRet12']);
    $Ret12 = $db->escape($_POST['Ret12']);
    $CumRet12 = $db->escape($_POST['CumRet12']);
    $Pass12 = $db->escape($_POST['Pass12']);

    $WtRet10 = $db->escape($_POST['WtRet10']);
    $Ret10 = $db->escape($_POST['Ret10']);
    $CumRet10 = $db->escape($_POST['CumRet10']);
    $Pass10 = $db->escape($_POST['Pass10']);

    $WtRet8 = $db->escape($_POST['WtRet8']);
    $Ret8 = $db->escape($_POST['Ret8']);
    $CumRet8 = $db->escape($_POST['CumRet8']);
    $Pass8 = $db->escape($_POST['Pass8']);

    $WtRet6 = $db->escape($_POST['WtRet6']);
    $Ret6 = $db->escape($_POST['Ret6']);
    $CumRet6 = $db->escape($_POST['CumRet6']);
    $Pass6 = $db->escape($_POST['Pass6']);

    $WtRet5 = $db->escape($_POST['WtRet5']);
    $Ret5 = $db->escape($_POST['Ret5']);
    $CumRet5 = $db->escape($_POST['CumRet5']);
    $Pass5 = $db->escape($_POST['Pass5']);

    $WtRet4 = $db->escape($_POST['WtRet4']);
    $Ret4 = $db->escape($_POST['Ret4']);
    $CumRet4 = $db->escape($_POST['CumRet4']);
    $Pass4 = $db->escape($_POST['Pass4']);

    $WtRet3 = $db->escape($_POST['WtRet3']);
    $Ret3 = $db->escape($_POST['Ret3']);
    $CumRet3 = $db->escape($_POST['CumRet3']);
    $Pass3 = $db->escape($_POST['Pass3']);

    $WtRet2p5 = $db->escape($_POST['WtRet2p5']);
    $Ret2p5 = $db->escape($_POST['Ret2p5']);
    $CumRet2p5 = $db->escape($_POST['CumRet2p5']);
    $Pass2p5 = $db->escape($_POST['Pass2p5']);

    $WtRet2 = $db->escape($_POST['WtRet2']);
    $Ret2 = $db->escape($_POST['Ret2']);
    $CumRet2 = $db->escape($_POST['CumRet2']);
    $Pass2 = $db->escape($_POST['Pass2']);

    $WtRet1p5 = $db->escape($_POST['WtRet1p5']);
    $Ret1p5 = $db->escape($_POST['Ret1p5']);
    $CumRet1p5 = $db->escape($_POST['CumRet1p5']);
    $Pass1p5 = $db->escape($_POST['Pass1p5']);

    $WtRet1 = $db->escape($_POST['WtRet1']);
    $Ret1 = $db->escape($_POST['Ret1']);
    $CumRet1 = $db->escape($_POST['CumRet1']);
    $Pass1 = $db->escape($_POST['Pass1']);
    
    $WtRet3p4 = $db->escape($_POST['WtRet3p4']);
    $Ret3p4 = $db->escape($_POST['Ret3p4']);
    $CumRet3p4 = $db->escape($_POST['CumRet3p4']);
    $Pass3p4 = $db->escape($_POST['Pass3p4']);
    
    $WtRet1p2 = $db->escape($_POST['WtRet1p2']);
    $Ret1p2 = $db->escape($_POST['Ret1p2']);
    $CumRet1p2 = $db->escape($_POST['CumRet1p2']);
    $Pass1p2 = $db->escape($_POST['Pass1p2']);

    $WtRet3p8 = $db->escape($_POST['WtRet3p8']);
    $Ret3p8 = $db->escape($_POST['Ret3p8']);
    $CumRet3p8 = $db->escape($_POST['CumRet3p8']);
    $Pass3p8 = $db->escape($_POST['Pass3p8']);

    $WtRetn4 = $db->escape($_POST['WtRetn4']);
    $Retn4 = $db->escape($_POST['Retn4']);
    $CumRetn4 = $db->escape($_POST['CumRetn4']);
    $Passn4 = $db->escape($_POST['Passn4']);

    $WtRetn10 = $db->escape($_POST['WtRetn10']);
    $Retn10 = $db->escape($_POST['Retn10']);
    $CumRetn10 = $db->escape($_POST['CumRetn10']);
    $Passn10 = $db->escape($_POST['Passn10']);

    $WtRetn16 = $db->escape($_POST['WtRetn16']);
    $Retn16 = $db->escape($_POST['Retn16']);
    $CumRetn16 = $db->escape($_POST['CumRetn16']);
    $Passn16 = $db->escape($_POST['Passn16']);

    $WtRetn20 = $db->escape($_POST['WtRetn20']);
    $Retn20 = $db->escape($_POST['Retn20']);
    $CumRetn20 = $db->escape($_POST['CumRetn20']);
    $Passn20 = $db->escape($_POST['Passn20']);

    $WtRetn50 = $db->escape($_POST['WtRetn50']);
    $Retn50 = $db->escape($_POST['Retn50']);
    $CumRetn50 = $db->escape($_POST['CumRetn50']);
    $Passn50 = $db->escape($_POST['Passn50']);

    $WtRetn60 = $db->escape($_POST['WtRetn60']);
    $Retn60 = $db->escape($_POST['Retn60']);
    $CumRetn60 = $db->escape($_POST['CumRetn60']);
    $Passn60 = $db->escape($_POST['Passn60']);

    $WtRetn100 = $db->escape($_POST['WtRetn100']);
    $Retn100 = $db->escape($_POST['Retn100']);
    $CumRetn100 = $db->escape($_POST['CumRetn100']);
    $Passn100 = $db->escape($_POST['Passn100']);

    $WtRetn140 = $db->escape($_POST['WtRetn140']);
    $Retn140 = $db->escape($_POST['Retn140']);
    $CumRetn140 = $db->escape($_POST['CumRetn140']);
    $Passn140 = $db->escape($_POST['Passn140']);

    $WtRetn200 = $db->escape($_POST['WtRetn200']);
    $Retn200 = $db->escape($_POST['Retn200']);
    $CumRetn200 = $db->escape($_POST['CumRetn200']);
    $Passn200 = $db->escape($_POST['Passn200']);

    $WtRentPan = $db->escape($_POST['WtRentPan']);
    $RetPan = $db->escape($_POST['RetPan']);

    $WtRetTpan = $db->escape($_POST['WtRetTpan']);
    $RetTTPan = $db->escape($_POST['RetTTPan']);
    $CumRetPan = $db->escape($_POST['CumRetPan']);
    $PassnPan = $db->escape($_POST['PassnPan']);


// Componemos la sentencia SQL
    $sql = "INSERT INTO grain_size (
Sample_ID, Sample_Number, Structure, Area, Source, Depth_From, Depth_To, Material_Type, Sample_Type, North, East, Elev, Sample_Date,
Report_Date, test_type, Standard, Preparation_Method, Split_Method, Comments, Technician,
Test_Start_Date, Container, Tare_Wet_Soil, Tare_Dry_Soil, Tare, Dry_Soil, Washed, Wash_Pan,
Coarser_than_Gravel, Gravel, Sand, Fines, D10, D15, D30, D60, D85, Cc, Cu, Wt_Ret_40_1016, 
Porce_Ret_40_1016, Cum_Ret_40_1016, Porce_Pass_40_1016, Wt_Ret_12_304, Porce_Ret_12_304,
Cum_Ret_12_304, Porce_Pass_12_304, Wt_Ret_10_254, Porce_Ret_10_254, Cum_Ret_10_254,
Porce_Pass_10_254, Wt_Ret_8_203, Porce_Ret_8_203, Cum_Ret_8_203, Porce_Pass_8_203, Wt_Ret_6_152,
Porce_Ret_6_152, Cum_Ret_6_152, Porce_Pass_6_152, Wt_Ret_5_127, Porce_Ret_5_127, Cum_Ret_5_127,
Porce_Pass_5_127, Wt_Ret_4_101, Porce_Ret_4_101, Cum_Ret_4_101, Porce_Pass_4_101, Wt_Ret_3_75,
Porce_Ret_3_75, Cum_Ret_3_75, Porce_Pass_3_75, Wt_Ret_2p5_63, Porce_Ret_2p5_63, Cum_Ret_2p5_63,
Porce_Pass_2p5_63, Wt_Ret_2_50, Porce_Ret_2_50, Cum_Ret_2_50, Porce_Pass_2_50, Wt_Ret_1p5_37,
Porce_Ret_1p5_37, Cum_Ret_1p5_37, Porce_Pass_1p5_37, Wt_Ret_1_25, Porce_Ret_1_25, Cum_Ret_1_25,
Porce_Pass_1_25, Wt_Ret_3p4_19, Porce_Ret_3p4_19, Cum_Ret_3p4_19, Porce_Pass_3p4_19, Wt_Ret_1p2_12,
Porce_Ret_1p2_12, Cum_Ret_1p2_12, Porce_Pass_1p2_12, Wt_Ret_3p8_9, Porce_Ret_3p8_9, Cum_Ret_3p8_9,
Porce_Pass_3p8_9, Wt_Ret_No4_4, Porce_Ret_No4_4, Cum_Ret_No4_4, Porce_Pass_No4_4, Wt_Ret_No10_2,
Porce_Ret_No10_2, Cum_Ret_No10_2, Porce_Pass_No10_2, Wt_Ret_No16_1, Porce_Ret_No16_1, Cum_Ret_No16_1,
Porce_Pass_No16_1, Wt_Ret_No20_0p85, Porce_Ret_No20_0p85, Cum_Ret_No20_0p85, Porce_Pass_No20_0p85,
Wt_Ret_No50_0p3, Porce_Ret_No50_0p3, Cum_Ret_No50_0p3, Porce_Pass_No50_0p3, Wt_Ret_No60_0p25,
Porce_Ret_No60_0p25, Cum_Ret_No60_0p25, Porce_Pass_No60_0p25, Wt_Ret_No100_0p15, Porce_Ret_No100_0p15,
Cum_Ret_No100_0p15, Porce_Pass_No100_0p15, Wt_Ret_No140_0p106, Porce_Ret_No140_0p106, Cum_Ret_No140_0p106,
Porce_Pass_No140_0p106, Wt_Ret_No200_0p075, Porce_Ret_No200_0p075, Cum_Ret_No200_0p075, Porce_Pass_No200_0p075,
Wt_Ret_Pan, Porce_Ret_Pan, Wt_Ret_Total_Pan, Porce_Ret_Total_Pan, Cum_Ret_Total_Pan, Porce_Pass_Total_Pan
)
      VALUES (
'$sampleid', '$samplenumber', '$structure', '$area', '$source', '$depthfrom', 
'$depthto', '$materialtype', '$sampletype', '$north', '$east', '$elev', '$sampledate',
'$reportdate', '$testype', '$Standard', '$PreparationMethod', '$Split', '$Comments',
'$Technician', '$TestStartDate', '$Container', '$TareWetSoil', '$TareDrySoil',
'$Tare', '$DrySoil', '$Washed', '$WashPan', '$CoarserThanGravel', '$Gravel',
'$sand', '$Fines', '$d10', '$d15', '$d30', '$d60', '$d85', '$Cc', '$Cu',
'$WtRet40', '$Ret40', '$CumRet40', '$Pass40', '$WtRet12', '$Ret12', '$CumRet12', '$Pass12',
'$WtRet10', '$Ret10', '$CumRet10', '$Pass10', '$WtRet8', '$Ret8', '$CumRet8', '$Pass8',
'$WtRet6', '$Ret6', '$CumRet6', '$Pass6', '$WtRet5', '$Ret5', '$CumRet5', '$Pass5',
'$WtRet4', '$Ret4', '$CumRet4', '$Pass4', '$WtRet3', '$Ret3', '$CumRet3', '$Pass3',
'$WtRet2p5', '$Ret2p5', '$CumRet2p5', '$Pass2p5', '$WtRet2', '$Ret2', '$CumRet2', '$Pass2',
'$WtRet1p5', '$Ret1p5', '$CumRet1p5', '$Pass1p5', '$WtRet1', '$Ret1', '$CumRet1', '$Pass1',
'$WtRet3p4', '$Ret3p4', '$CumRet3p4', '$Pass3p4', '$WtRet1p2', '$Ret1p2', '$CumRet1p2', '$Pass1p2',
'$WtRet3p8', '$Ret3p8', '$CumRet3p8', '$Pass3p8', '$WtRetn4', '$Retn4', '$CumRetn4', '$Passn4',
'$WtRetn10', '$Retn10', '$CumRetn10', '$Passn10', '$WtRetn16', '$Retn16', '$CumRetn16', '$Passn16',
'$WtRetn20', '$Retn20', '$CumRetn20', '$Passn20', '$WtRetn50', '$Retn50', '$CumRetn50', '$Passn50',
'$WtRetn60', '$Retn60', '$CumRetn60', '$Passn60', '$WtRetn100', '$Retn100', '$CumRetn100', '$Passn100',
'$WtRetn140', '$Retn140', '$CumRetn140', '$Passn140', '$WtRetn200', '$Retn200', '$CumRetn200', '$Passn200',
'$WtRentPan', '$RetPan', '$WtRetTpan', '$RetTTPan', '$CumRetPan', '$PassnPan'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('Grain_Size.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('Grain_Size.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('Grain_Size.php', false);
  }
}

*/
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
<span>Grain Size Calculation</span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="Grain_Size.php" onsubmit="calcular();calcularD();">

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
<option selected>Choose...</option>
<option value="ASTM-D6913">ASTM-D6913</option>         
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
<select class="form-control" name="Split">
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
</div>


<div>
  <table class="table table-bordered border-primary" style="width: 350px;">
  <thead>
  </thead>
  <tbody>
  
  <tr>
  <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Container</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="1" name="Container"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Wet Soil + Tare (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="2" name="TareWetSoil"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil + Tare (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="3" name="TareDrySoil" oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row"> Tare (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="4" name="Tare" oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="5" name="DrySoil" oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Washed (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="6" name="Washed" oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Wash Pan (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="7" name="WashPan" oninput="calcular()"></td>
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
        <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="112" name="CoarserThanGravel" oninput="calcular()"></td>
      </tr>
      <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Gravel %:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="113" name="Gravel" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Sand %:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="114" name="sand" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row"> Fines %:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="115" name="Fines" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D10 (mm):</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="116" name="d10" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D15 (mm):</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="117" name="d15" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D30 (mm)::</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="118" name="d30" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D60 (mm)::</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="119" name="d60" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D85 (mm)::</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="120" name="d85" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Cc:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="121" name="Cc" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Cu:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="122" name="Cu" oninput="calcularD()"></td>
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
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="8" name="WtRet40" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="9" name="Ret40" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="10" name="CumRet40" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="11" name="Pass40" oninput="calcular()"></td>
        </tr>
  
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">12"</th>
          <td>304.8</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="12" name="WtRet12" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="13" name="Ret12" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="14" name="CumRet12" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="15" name="Pass12" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">10"</th>
          <td>254</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="16" name="WtRet10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="17" name="Ret10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="18" name="CumRet10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="19" name="Pass10" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">8"</th>
          <td>203.2</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="20" name="WtRet8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="21" name="Ret8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="22" name="CumRet8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="23" name="Pass8" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">6"</th>
          <td>152.4</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="24" name="WtRet6" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="25" name="Ret6" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="26" name="CumRet6" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="27" name="Pass6" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">5"</th>
          <td>127</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="28" name="WtRet5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="29" name="Ret5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="30" name="CumRet5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="31" name="Pass5" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">4"</th>
          <td>101.6</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="32" name="WtRet4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="33" name="Ret4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="34" name="CumRet4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="35" name="Pass4" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">3"</th>
          <td>76.2</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="36" name="WtRet3" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="37" name="Ret3" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="38" name="CumRet3" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="39" name="Pass3" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">2.5"</th>
          <td>63.50</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="40" name="WtRet2p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="41" name="Ret2p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="42" name="CumRet2p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="43" name="Pass2p5" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">2"</th>
          <td>50.80</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="44" name="WtRet2" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="45" name="Ret2" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="46" name="CumRet2" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="47" name="Pass2" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">1.5"</th>
          <td>38.1</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="48" name="WtRet1p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="49" name="Ret1p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="50" name="CumRet1p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="51" name="Pass1p5" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">1"</th>
          <td>25.4</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="52" name="WtRet1" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="53" name="Ret1" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="54" name="CumRet1" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="55" name="Pass1" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">3/4"</th>
          <td>19.5</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="56" name="WtRet3p4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="57" name="Ret3p4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="58" name="CumRet3p4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="59" name="Pass3p4" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">1/2"</th>
          <td>12.7</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="60" name="WtRet1p2" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="61" name="Ret1p2" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="62" name="CumRet1p2" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="63" name="Pass1p2" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">3/8"</th>
          <td>9.5</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="64" name="WtRet3p8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="65" name="Ret3p8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="66" name="CumRet3p8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="67" name="Pass3p8" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 4</th>
          <td>4.75</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="68" name="WtRetn4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="69" name="Retn4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="70" name="CumRetn4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="71" name="Passn4" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 10</th>
          <td>2.00</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="72" name="WtRetn10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="73" name="Retn10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="74" name="CumRetn10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="75" name="Passn10" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 16</th>
          <td>1.18</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="76" name="WtRetn16" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="77" name="Retn16" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="78" name="CumRetn16" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="79" name="Passn16" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 20</th>
          <td>0.85</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="80" name="WtRetn20" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="81" name="Retn20" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="82" name="CumRetn20" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="83" name="Passn20" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 50</th>
          <td>0.30</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="84" name="WtRetn50" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="85" name="Retn50" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="86" name="CumRetn50" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="87" name="Passn50" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">No. 60</th>
          <td>0.25</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="88" name="WtRetn60" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="89" name="Retn60" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="90" name="CumRetn60" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="91" name="Passn60" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">No. 100</th>
          <td>0.15</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="92" name="WtRetn100" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="93" name="Retn100" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="94" name="CumRetn100" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="95" name="Passn100" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">No. 140</th>
          <td>0.106</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="96" name="WtRetn140" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="97" name="Retn140" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="98" name="CumRetn140" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="99" name="Passn140" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 125px; height: 25px;"scope="row">No. 200</th>
          <td>0.075</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="100" name="WtRetn200" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="101" name="Retn200" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="102" name="CumRetn200" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="103" name="Passn200" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row" colspan="2">Pan</th>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="104" name="WtRentPan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="105" name="RetPan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="106" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="107" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row" colspan="2"> Total Pan</th>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="108" name="WtRetTpan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="109" name="RetTTPan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="110" name="CumRetPan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="111" name="PassnPan" oninput="calcular()"></td>
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

<button type="submit" name="Grain_Size" class="btn btn-danger">Registrar ensayo</button>
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

<?php include_once('layouts/footer.php'); ?>

