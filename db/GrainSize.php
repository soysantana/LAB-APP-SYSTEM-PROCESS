<?php

$user = current_user();

// Recuperamos los datos del formulario
if (isset($_POST['Grain_Size'])) {
  $req_fields = array(
'sampleid', 'structure', 'area', 'source', 'depthfrom', 'depthto',
'materialtype', 'sampletype', 'north', 'east', 'elev', 'sampledate',
'Standard', 'Comments', 'Technician', 'TestStartDate'
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

    $RegisterBy = $user['name'];


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
Wt_Ret_Pan, Porce_Ret_Pan, Wt_Ret_Total_Pan, Porce_Ret_Total_Pan, Cum_Ret_Total_Pan, Porce_Pass_Total_Pan, Registered_By
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
'$WtRentPan', '$RetPan', '$WtRetTpan', '$RetTTPan', '$CumRetPan', '$PassnPan', '$RegisterBy'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./Grain_Size.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./Grain_Size.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./Grain_Size.php', false);
  }
}

?>

<?php
$search_table = find_by_id('grain_size', (int)$_GET['id']);
  // Verifica si se ha enviado el formulario
  if (isset($_POST['update_muestra'])) {
    $req_fields = array(
      'Standard'
    );
    
    // Valida los campos requeridos
    validate_fields($req_fields);

    if (empty($errors)) {
      // Obtiene los valores de los campos del formulario
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

      $RegisterBy = $user['name'];

      $query = "UPDATE grain_size SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Split_Method = '{$Split}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Container = '{$Container}', ";
      $query .= "Tare_Wet_Soil = '{$TareWetSoil}', ";
      $query .= "Tare_Dry_Soil = '{$TareDrySoil}', ";
      $query .= "Tare = '{$Tare}', ";
      $query .= "Dry_Soil = '{$DrySoil}', ";
      $query .= "Washed = '{$Washed}', ";
      $query .= "Wash_Pan = '{$WashPan}', ";

      $query .= "Coarser_than_Gravel = '{$CoarserThanGravel}', ";
      $query .= "Gravel = '{$Gravel}', ";
      $query .= "Sand = '{$sand}', ";
      $query .= "Fines = '{$Fines}', ";
      $query .= "D10 = '{$d10}', ";
      $query .= "D15 = '{$d15}', ";
      $query .= "D30 = '{$d30}', ";
      $query .= "D60 = '{$d60}', ";
      $query .= "D85 = '{$d85}', ";
      $query .= "Cc = '{$Cc}', ";
      $query .= "Cu = '{$Cu}', ";

      $query .= "Wt_Ret_40_1016 = '{$WtRet40}', ";
      $query .= "Porce_Ret_40_1016 = '{$Ret40}', ";
      $query .= "Cum_Ret_40_1016 = '{$CumRet40}', ";
      $query .= "Porce_Pass_40_1016 = '{$Pass40}', ";

      $query .= "Wt_Ret_12_304 = '{$WtRet12}', ";
      $query .= "Porce_Ret_12_304 = '{$Ret12}', ";
      $query .= "Cum_Ret_12_304 = '{$CumRet12}', ";
      $query .= "Porce_Pass_12_304 = '{$Pass12}', ";

      $query .= "Wt_Ret_10_254 = '{$WtRet10}', ";
      $query .= "Porce_Ret_10_254 = '{$Ret10}', ";
      $query .= "Cum_Ret_10_254 = '{$CumRet10}', ";
      $query .= "Porce_Pass_10_254 = '{$Pass10}', ";

      $query .= "Wt_Ret_8_203 = '{$WtRet8}', ";
      $query .= "Porce_Ret_8_203 = '{$Ret8}', ";
      $query .= "Cum_Ret_8_203 = '{$CumRet8}', ";
      $query .= "Porce_Pass_8_203 = '{$Pass8}', ";

      $query .= "Wt_Ret_6_152 = '{$WtRet6}', ";
      $query .= "Porce_Ret_6_152 = '{$Ret6}', ";
      $query .= "Cum_Ret_6_152 = '{$CumRet6}', ";
      $query .= "Porce_Pass_6_152 = '{$Pass6}', ";

      $query .= "Wt_Ret_5_127 = '{$WtRet5}', ";
      $query .= "Porce_Ret_5_127 = '{$Ret5}', ";
      $query .= "Cum_Ret_5_127 = '{$CumRet5}', ";
      $query .= "Porce_Pass_5_127 = '{$Pass5}', ";

      $query .= "Wt_Ret_4_101 = '{$WtRet4}', ";
      $query .= "Porce_Ret_4_101 = '{$Ret4}', ";
      $query .= "Cum_Ret_4_101 = '{$CumRet4}', ";
      $query .= "Porce_Pass_4_101 = '{$Pass4}', ";

      $query .= "Wt_Ret_3_75 = '{$WtRet3}', ";
      $query .= "Porce_Ret_3_75 = '{$Ret3}', ";
      $query .= "Cum_Ret_3_75 = '{$CumRet3}', ";
      $query .= "Porce_Pass_3_75 = '{$Pass3}', ";

      $query .= "Wt_Ret_2p5_63 = '{$WtRet2p5}', ";
      $query .= "Porce_Ret_2p5_63 = '{$Ret2p5}', ";
      $query .= "Cum_Ret_2p5_63 = '{$CumRet2p5}', ";
      $query .= "Porce_Pass_2p5_63 = '{$Pass2p5}', ";

      $query .= "Wt_Ret_2_50 = '{$WtRet2}', ";
      $query .= "Porce_Ret_2_50 = '{$Ret2}', ";
      $query .= "Cum_Ret_2_50 = '{$CumRet2}', ";
      $query .= "Porce_Pass_2_50 = '{$Pass2}', ";

      $query .= "Wt_Ret_1p5_37 = '{$WtRet1p5}', ";
      $query .= "Porce_Ret_1p5_37 = '{$Ret1p5}', ";
      $query .= "Cum_Ret_1p5_37 = '{$CumRet1p5}', ";
      $query .= "Porce_Pass_1p5_37 = '{$Pass1p5}', ";

      $query .= "Wt_Ret_1_25 = '{$WtRet1}', ";
      $query .= "Porce_Ret_1_25 = '{$Ret1}', ";
      $query .= "Cum_Ret_1_25 = '{$CumRet1}', ";
      $query .= "Porce_Pass_1_25 = '{$Pass1}', ";

      $query .= "Wt_Ret_3p4_19 = '{$WtRet3p4}', ";
      $query .= "Porce_Ret_3p4_19 = '{$Ret3p4}', ";
      $query .= "Cum_Ret_3p4_19 = '{$CumRet3p4}', ";
      $query .= "Porce_Pass_3p4_19 = '{$Pass3p4}', ";

      $query .= "Wt_Ret_1p2_12 = '{$WtRet1p2}', ";
      $query .= "Porce_Ret_1p2_12 = '{$Ret1p2}', ";
      $query .= "Cum_Ret_1p2_12 = '{$CumRet1p2}', ";
      $query .= "Porce_Pass_1p2_12 = '{$Pass1p2}', ";

      $query .= "Wt_Ret_3p8_9 = '{$WtRet3p8}', ";
      $query .= "Porce_Ret_3p8_9 = '{$Ret3p8}', ";
      $query .= "Cum_Ret_3p8_9 = '{$CumRet3p8}', ";
      $query .= "Porce_Pass_3p8_9 = '{$Pass3p8}', ";

      $query .= "Wt_Ret_No4_4 = '{$WtRetn4}', ";
      $query .= "Porce_Ret_No4_4 = '{$Retn4}', ";
      $query .= "Cum_Ret_No4_4 = '{$CumRetn4}', ";
      $query .= "Porce_Pass_No4_4 = '{$Passn4}', ";

      $query .= "Wt_Ret_No10_2 = '{$WtRetn10}', ";
      $query .= "Porce_Ret_No10_2 = '{$Retn10}', ";
      $query .= "Cum_Ret_No10_2 = '{$CumRetn10}', ";
      $query .= "Porce_Pass_No10_2 = '{$Passn10}', ";

      $query .= "Wt_Ret_No16_1 = '{$WtRetn16}', ";
      $query .= "Porce_Ret_No16_1 = '{$Retn16}', ";
      $query .= "Cum_Ret_No16_1 = '{$CumRetn16}', ";
      $query .= "Porce_Pass_No16_1 = '{$Passn16}', ";

      $query .= "Wt_Ret_No20_0p85 = '{$WtRetn20}', ";
      $query .= "Porce_Ret_No20_0p85 = '{$Retn20}', ";
      $query .= "Cum_Ret_No20_0p85 = '{$CumRetn20}', ";
      $query .= "Porce_Pass_No20_0p85 = '{$Passn20}', ";

      $query .= "Wt_Ret_No50_0p3 = '{$WtRetn50}', ";
      $query .= "Porce_Ret_No50_0p3 = '{$Retn50}', ";
      $query .= "Cum_Ret_No50_0p3 = '{$CumRetn50}', ";
      $query .= "Porce_Pass_No50_0p3 = '{$Passn50}', ";

      $query .= "Wt_Ret_No60_0p25 = '{$WtRetn60}', ";
      $query .= "Porce_Ret_No60_0p25 = '{$Retn60}', ";
      $query .= "Cum_Ret_No60_0p25 = '{$CumRetn60}', ";
      $query .= "Porce_Pass_No60_0p25 = '{$Passn60}', ";

      $query .= "Wt_Ret_No100_0p15 = '{$WtRetn100}', ";
      $query .= "Porce_Ret_No100_0p15 = '{$Retn100}', ";
      $query .= "Cum_Ret_No100_0p15 = '{$CumRetn100}', ";
      $query .= "Porce_Pass_No100_0p15 = '{$Passn100}', ";

      $query .= "Wt_Ret_No140_0p106 = '{$WtRetn140}', ";
      $query .= "Porce_Ret_No140_0p106 = '{$Retn140}', ";
      $query .= "Cum_Ret_No140_0p106 = '{$CumRetn140}', ";
      $query .= "Porce_Pass_No140_0p106 = '{$Passn140}', ";

      $query .= "Wt_Ret_No200_0p075 = '{$WtRetn200}', ";
      $query .= "Porce_Ret_No200_0p075 = '{$Retn200}', ";
      $query .= "Cum_Ret_No200_0p075 = '{$CumRetn200}', ";
      $query .= "Porce_Pass_No200_0p075 = '{$Passn200}', ";

      $query .= "Wt_Ret_Pan = '{$WtRentPan}', ";
      $query .= "Porce_Ret_Pan = '{$RetPan}', ";

      $query .= "Wt_Ret_Total_Pan = '{$WtRetTpan}', ";
      $query .= "Porce_Ret_Total_Pan = '{$RetTTPan}', ";
      $query .= "Cum_Ret_Total_Pan = '{$CumRetPan}', ";
      $query .= "Porce_Pass_Total_Pan = '{$PassnPan}', ";

      $query .= "Registered_By = '{$RegisterBy}' ";

      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-GS.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-GS.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-GS.php?id=' . $search_table['id'], false);
    }
  }
?>

<?php
// Verifica si se ha hecho clic en el botón "repetir"
if (isset($_POST['repetir_muestra'])) {
    // Obtén el ID de la muestra específica
    $search_table = (int)$_GET['id'];
    $reportdate = make_date();

    // Consulta para obtener los datos de la muestra específica
    $query_select = "SELECT * FROM grain_size WHERE id = '{$search_table}'";
    $result_select = $db->query($query_select);

    if ($result_select && $db->num_rows($result_select) == 1) {
        $search_table_data = $db->fetch_assoc($result_select);

        // Verifica si ya existe una fila con los mismos Sample_ID, Sample_Number y Test_Type
        $query_check_existence = "SELECT COUNT(*) as count FROM ensayo_en_repeticion WHERE Sample_ID = '{$search_table_data['Sample_ID']}' AND Sample_Number = '{$search_table_data['Sample_Number']}' AND Test_Type = '{$search_table_data['test_type']}'";
        $result_check_existence = $db->query($query_check_existence);
        $existence_data = $db->fetch_assoc($result_check_existence);

        if ($existence_data['count'] > 0) {
            // Ya existe una fila con los mismos Sample_ID, Sample_Number y Test_Type
            $session->msg('d', 'No se puede repetir la muestra porque ya existe una fila con los mismos Sample_ID, Sample_Number y Test_Type.');
            redirect('repiteEnsayo.php', false);
        } else {
            // Inserta los datos en la tabla "ensayo_en_repeticion"
            $query_insert = "INSERT INTO ensayo_en_repeticion (Sample_ID, Sample_Number, Test_Type, Tecnico, Fecha_Inicio) VALUES ";
            $query_insert .= "('{$search_table_data['Sample_ID']}', '{$search_table_data['Sample_Number']}', '{$search_table_data['test_type']}', '{$search_table_data['Technician']}', '{$reportdate}')";

            $result_insert = $db->query($query_insert);

            if ($result_insert && $db->affected_rows() === 1) {
                $session->msg('s', 'Muestra repetida con éxito.');
                redirect('repiteEnsayo.php', false);
            } else {
                $session->msg('d', 'Error al repetir la muestra.');
                redirect('repiteEnsayo.php', false);
            }
        }
    } else {
        $session->msg('d', 'Error al obtener datos de la muestra específica.');
        redirect('repiteEnsayo.php', false);
    }
}
?>