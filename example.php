<?php
require_once('includes/load.php');

// Recuperamos los datos del formulario
if (isset($_POST['Al'])) {
  $req_fields = array(
'sampleid', 'structure', 'Sample_Number', 'area', 'source', 'depthfrom', 'depthto', 'materialtype', 'sampletype', 'north', 'east', 'elev', 'sampledate',
'Preparation_Method', 'Technician', 'Container', 'Split', 'Test_Start_Date', 'Comments', 'Standard', 'Tare_Wet_Soil', 'Tare_Dry_Soil', 'Tare', 'Dry_Soil',
'Washed', 'Wash_Pan', 'Coarser_than_Gravel', 'Gravel', 'sand', 'Fines', 'd10', 'd15', 'd30', 'd60', 'd85', 'Cc', 'Cu', 'WtRet40', 'Ret40', 'CumRet40', 'Pass40',
'WtRet12', 'Ret12', 'CumRet12', 'Pass12', 'WtRet10', 'Ret10', 'CumRet10', 'Pass10', 'WtRet8', 'Ret8', 'CumRet8', 'Pass8', 'WtRet6', 'Ret6', 'CumRet6', 'Pass6',
'WtRet4', 'Ret4', 'CumRet4', 'Pass4', 'WtRet3', 'Ret3', 'CumRet3', 'Pass3', 'WtRet2p5', 'Ret2p5', 'CumRet2p5', 'Pass2p5', 'WtRet2', 'Ret2', 'CumRet2', 'Pass2',
'WtRet1p5', 'Ret1p5', 'CumRet1p5', 'Pass1p5', 'WtRet1', 'Ret1', 'CumRet1', 'Pass1', 'WtRet3p4', 'Ret3p4', 'CumRet3p4', 'Pass3p4', 'WtRet1p2', 'Ret1p2', 'CumRet1p2', 'Pass1p2',
'WtRet3p8', 'Ret3p8', 'CumRet3p8', 'Pass3p8', 'WtRetn4', 'Retn4', 'CumRetn4', 'Passn4', 'WtRetn16', 'Retn16', 'CumRetn16', 'Passn16', 'WtRetn20', 'Retn20', 'CumRetn20', 'Passn20',
'WtRetn50', 'Retn50', 'CumRetn50', 'Passn50', 'WtRetn60', 'Retn60', 'CumRetn60', 'Passn60', 'WtRetn100', 'Retn100', 'CumRetn100', 'Passn100',
'WtRetn140', 'Retn140', 'CumRetn140', 'Passn140', 'WtRetn200', 'Retn200', 'CumRetn200', 'Passn200', 'WtRentPan', 'RetPan', 'WtRetTpan', 'RetTTPan', 'CumRetPan', 'PassnPan'
);
  validate_fields($req_fields);

// Validacion de post
  if (empty($errors)) {
    $sampleid = $db->escape($_POST['sampleid']);
    $structure = $db->escape($_POST['structure']);
    $samplenumber = $db->escape($_POST['Sample_Number']);
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

    $preparation = $db->escape($_POST['Preparation_Method']);
    $technician = $db->escape($_POST['Technician']);
    $container = $db->escape($_POST['Container']);
    $split = $db->escape($_POST['Split']);
    $startdate = $db->escape($_POST['Test_Start_Date']);
    $comments = $db->escape($_POST['Comments']);
    $standard = $db->escape($_POST['Standard']);

    $reportdate = make_date();
    $testype = "GS-Soil";

    $tarewet = $db->escape($_POST['Tare_Wet_Soil']);
    $taredry = $db->escape($_POST['Tare_Dry_Soil']);
    $tare = $db->escape($_POST['Tare']);
    $drysoil = $db->escape($_POST['Dry_Soil']);
    $wtwashed = $db->escape($_POST['Washed']);
    $wtwash = $db->escape($_POST['Wash_Pan']);

    $coarsegravel = $db->escape($_POST['Coarser_than_Gravel']);
    $gravel = $db->escape($_POST['Gravel']);
    $sand = $db->escape($_POST['sand']);
    $fines = $db->escape($_POST['Fines']);
    $d10 = $db->escape($_POST['d10']);
    $d15 = $db->escape($_POST['d15']);
    $d30 = $db->escape($_POST['d30']);
    $d60 = $db->escape($_POST['d60']);
    $d85 = $db->escape($_POST['d85']);
    $cc = $db->escape($_POST['Cc']);
    $cu = $db->escape($_POST['Cu']);

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
    $sql = "INSERT INTO atterberg_limit (
Sample_ID, Structure, Sample_Number, Area, Source, Depth_From, Depth_To, Material_Type, Sample_Type, North, East, Elev, Sample_Date,
Preparation_Method, Technician, Container, Split_Method, Test_Start_Date, Comments, Standard, test_type, Report_Date, Tare_Wet_Soil,
Tare_Dry_Soil, Tare, Dry_Soil, Washed, Wash_Pan, Coarser_than_Gravel, Gravel, Sand, Fines, D10, D15, D30, D60, D85, Cc, Cu,
Wt_Ret_40_1016, Porce_Ret_40_1016, Cum_Ret_40_1016, Porce_Pass_40_1016, Wt_Ret_12_304, Porce_Ret_12_304, Cum_Ret_12_304, Porce_Pass_12_304
)
      VALUES (
'$sampleid', '$structure', '$samplenumber', '$area', '$source', '$depthfrom', '$depthto', '$materialtype', '$sampletype', '$north', '$east', '$elev', '$sampledate',
'$preparation', '$technician', '$container', '$split', '$startdate', '$comments', '$standard', '$testype', '$reportdate', '$tarewet', '$taredry'
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


?>