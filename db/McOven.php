<?php
// Procesamiento del formulario
if(isset($_POST['mcoven'])){
  $req_fields = array('sampleid','samplenumber','structure', 'area', 'source', 'depthfrom', 'depthto', 'materialtype', 
  'sampletype', 'north', 'east', 'elev' ,'sampledate','tarename','temperature','tarewet','taredry','water','weigthtare',
  'drysoil','mc','standard', 'technician','testdate' );
  validate_fields($req_fields);
  if(empty($errors)){
    $sampleid  = $db->escape($_POST['sampleid']);
    $samplenumber  = $db->escape($_POST['samplenumber']);
    $structure   = $db->escape($_POST['structure']);
    $area   = $db->escape($_POST['area']);
    $source   = $db->escape($_POST['source']);
    $depthfrom  = $db->escape($_POST['depthfrom']);
    $depthto  = $db->escape($_POST['depthto']);
    $materialtype  = $db->escape($_POST['materialtype']);
    $sampletype  = $db->escape($_POST['sampletype']);
    $north  = $db->escape($_POST['north']);
    $east  = $db->escape($_POST['east']);
    $elev  = $db->escape($_POST['elev']);
    $sampledate = $db->escape($_POST['sampledate']);
    $tarename   = $db->escape($_POST['tarename']);
    $temperature   = $db->escape($_POST['temperature']);
    $tarewet   = $db->escape($_POST['tarewet']);
    $taredry   = $db->escape($_POST['taredry']);
    $water = $db->escape($_POST['water']);
    $weigthtare  = $db->escape($_POST['weigthtare']);
    $drysoil  = $db->escape($_POST['drysoil']);
    $mc = $db->escape($_POST['mc']);
    $standard  = $db->escape($_POST['standard']);
    $technician  = $db->escape($_POST['technician']);
    $testdate  = $db->escape($_POST['testdate']);
    $reportdate  = make_date();
    $testtype = "MC-Oven";

    $sql = "INSERT INTO moisture_content (";
    $sql .= "Sample_ID, Sample_Number, Structure, Area, Source, Depth_From, Depth_To, Material_Type, Sample_Type, North, East, ";
    $sql .= "Elev, Sample_Date, Tare_Name, Temperature, Tare_Plus_Wet_Soil, Tare_Plus_Dry_Soil, Water, Weigth_Tare, Dry_Soil, Mc, ";
    $sql .= "Standard, Technician, Test_Start_Date, Report_Date, test_type ";
    $sql .= ") VALUES (";
    $sql .= "'{$sampleid}', '{$samplenumber}', '{$structure}', '{$area}', '{$source}', '{$depthfrom}', '{$depthto}', '{$materialtype}', '{$sampletype}', ";
    $sql .= "'{$north}', '{$east}', '{$elev}', '{$sampledate}', '{$tarename}', '{$temperature}', '{$tarewet}', '{$taredry}', '{$water}', ";
    $sql .= "'{$weigthtare}', '{$drysoil}', '{$mc}', '{$standard}', '{$technician}', '{$testdate}', '{$reportdate}' , '{$testtype}'";
    $sql .= ")";
    
    if($db->query($sql)){
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./mcoven.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./mcoven.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./mcoven.php', false);
  }
}
?>