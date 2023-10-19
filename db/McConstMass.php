<?php
if (isset($_POST['mc_constant_mass'])) {
    $req_fields = array('sampleid', 'samplenumber', 'structure', 'area', 'source', 'depthfrom', 'depthto', 
    'materialtype', 'sampletype', 'north', 'east', 'elev', 'sampledate', 'standard', 'preparation', 'comment',
     'technician', 'testdate', 'trial', 'tarename', 'temperature', 'tarewet', 'taredry1', 'taredry2', 'taredry3',
      'taredry4', 'weigthtare', 'water', 'drysoil', 'mc');
    validate_fields($req_fields);
    
    if (empty($errors)) {
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
      $standard = $db->escape($_POST['standard']);
      $preparation = $db->escape($_POST['preparation']);
      $comment = $db->escape($_POST['comment']);
      $technician = $db->escape($_POST['technician']);
      $testdate = $db->escape($_POST['testdate']);
      $trial = $db->escape($_POST['trial']);
      $tarename = $db->escape($_POST['tarename']);
      $temperature = $db->escape($_POST['temperature']);
      $tarewet = $db->escape($_POST['tarewet']);
      $taredry1 = $db->escape($_POST['taredry1']);
      $taredry2 = $db->escape($_POST['taredry2']);
      $taredry3 = $db->escape($_POST['taredry3']);
      $taredry4 = $db->escape($_POST['taredry4']);
      $weigthtare = $db->escape($_POST['weigthtare']);
      $water = $db->escape($_POST['water']);
      $drysoil = $db->escape($_POST['drysoil']);
      $mc = $db->escape($_POST['mc']);
      $reportdate = make_date();
      $testtype = "MC-Constant Mass";
  
      $sql = "INSERT INTO moisture_content_constant_mass (Sample_ID, Sample_Number, Structure, Area, Source, Depth_From, 
      Depth_To, Material_Type, Sample_Type, North, East, Elev, Sample_Date, Standard, Preparation, Comment, Technician,
       Test_Start_Date, Trial, Tare_Name, Temperature, Tare_Plus_Wet_Soil, Tare_Plus_Dry_Soil1, Tare_Plus_Dry_Soil2, 
       Tare_Plus_Dry_Soil3, Tare_Plus_Dry_Soil4, Water, Weigth_Tare, Dry_Soil, Mc, Report_Date, test_type) 
       VALUES (
          '$sampleid', '$samplenumber', '$structure', '$area', '$source', '$depthfrom', '$depthto', '$materialtype', 
          '$sampletype', '$north', '$east', '$elev', '$sampledate', '$standard', '$preparation', '$comment', '$technician',
           '$testdate', '$trial', '$tarename', '$temperature', '$tarewet', '$taredry1', '$taredry2', '$taredry3',
            '$taredry4', '$water', '$weigthtare', '$drysoil', '$mc', '$reportdate', '$testtype')";
  
      if ($db->query($sql)) {
        $session->msg('s', "Ensayo agregado exitosamente.");
        redirect('mc_constant_mass.php', false);
      } else {
        $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
        redirect('mc_constant_mass.php', false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('mc_constant_mass.php', false);
    }
  }
?>

<?php
$search_table = find_by_id('moisture_content_constant_mass', (int)$_GET['id']);
  // Verifica si se ha enviado el formulario
  if (isset($_POST['update_muestra'])) {
    $req_fields = array(
      'standard'
    );
    
    // Valida los campos requeridos
    validate_fields($req_fields);

    if (empty($errors)) {
      // Obtiene los valores de los campos del formulario
      $standard = remove_junk($db->escape($_POST['standard']));
      $temperature = remove_junk($db->escape($_POST['temperature']));
      $preparation = remove_junk($db->escape($_POST['preparation']));
      $comment = remove_junk($db->escape($_POST['comment']));
      $technician = remove_junk($db->escape($_POST['technician']));
      $testdate = remove_junk($db->escape($_POST['testdate']));
  
      $trial = remove_junk($db->escape($_POST['trial']));
      $tarename = remove_junk($db->escape($_POST['tarename']));
      $tarewet = remove_junk($db->escape($_POST['tarewet']));
      $taredry1 = remove_junk($db->escape($_POST['taredry1']));
      $taredry2 = remove_junk($db->escape($_POST['taredry2']));
      $taredry3 = remove_junk($db->escape($_POST['taredry3']));
      $taredry4 = remove_junk($db->escape($_POST['taredry4']));
      $water = remove_junk($db->escape($_POST['water']));
      $weigthtare = remove_junk($db->escape($_POST['weigthtare']));
      $drysoil = remove_junk($db->escape($_POST['drysoil']));
      $mc = remove_junk($db->escape($_POST['mc']));

      $query = "UPDATE moisture_content_constant_mass SET ";
      $query .= "Standard = '{$standard}', ";
      $query .= "Temperature = '{$temperature}', ";
      $query .= "Preparation = '{$preparation}', ";
      $query .= "Comment = '{$comment}', ";
      $query .= "Technician = '{$technician}', ";
      $query .= "Test_Start_Date = '{$testdate}', ";

      $query .= "Trial = '{$trial}', ";
      $query .= "Tare_Name = '{$tarename}', ";
      $query .= "Tare_Plus_Wet_Soil = '{$tarewet}', ";
      $query .= "Tare_Plus_Dry_Soil1 = '{$taredry1}', ";
      $query .= "Tare_Plus_Dry_Soil2 = '{$taredry2}', ";
      $query .= "Tare_Plus_Dry_Soil3 = '{$taredry3}', ";
      $query .= "Tare_Plus_Dry_Soil4 = '{$taredry4}', ";
      $query .= "Water = '{$water}', ";
      $query .= "Weigth_Tare = '{$weigthtare}', ";
      $query .= "Dry_Soil = '{$drysoil}', ";
      $query .= "Mc = '{$mc}' ";
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-MC-Constant-Mass.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-MC-Constant-Mass.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-MC-Constant-Mass.php?id=' . $search_table['id'], false);
    }
  }
?>