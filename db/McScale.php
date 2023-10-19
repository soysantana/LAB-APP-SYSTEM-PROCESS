<?php
if (isset($_POST['mc_scale'])) {
    $req_fields = array('sampleid','samplenumber', 'structure', 'area', 'source', 'depthfrom', 'depthto', 
    'materialtype', 'sampletype', 'north', 'east', 'elev', 'sampledate','comment','technician', 'testdate', 
    'trial', 'tarename', 'scale_model', 'mc');
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
      $comment = $db->escape($_POST['comment']);
      $technician = $db->escape($_POST['technician']);
      $testdate = $db->escape($_POST['testdate']);
      $trial = $db->escape($_POST['trial']);
      $tarename = $db->escape($_POST['tarename']);
      $scale_model = $db->escape($_POST['scale_model']);
      $mc = $db->escape($_POST['mc']);
      $reportdate = make_date();
      $testtype = "MC-Scale";
  
      $sql = "INSERT INTO moisture_scale (Sample_ID, Sample_Number, Structure, Area, Source, Depth_From, 
      Depth_To, Material_Type, Sample_Type, North, East, Elev, Sample_Date, Comment, Technician,
       Test_Start_Date, Trial, Tare_Name, Scale_Model, Mc, Report_Date, test_type) 
       VALUES (
          '$sampleid', '$samplenumber', '$structure', '$area', '$source', '$depthfrom', '$depthto', '$materialtype', 
          '$sampletype', '$north', '$east', '$elev', '$sampledate','$comment', '$technician','$testdate', '$trial', 
          '$tarename', '$scale_model' ,'$mc', '$reportdate', '$testtype')";
  
      if ($db->query($sql)) {
        $session->msg('s', "Ensayo agregado exitosamente.");
        redirect('mc_scale.php', false);
      } else {
        $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
        redirect('mc_scale.php', false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('mc_scale.php', false);
    }
  }
?>


<?php
$search_table = find_by_id('moisture_scale', (int)$_GET['id']);
  // Verifica si se ha enviado el formulario
  if (isset($_POST['update_muestra'])) {
    $req_fields = array(
      'technician'
    );
    
    // Valida los campos requeridos
    validate_fields($req_fields);

    if (empty($errors)) {
      // Obtiene los valores de los campos del formulario
      $comment = remove_junk($db->escape($_POST['comment']));
      $technician = remove_junk($db->escape($_POST['technician']));
      $testdate = remove_junk($db->escape($_POST['testdate']));
  
      $trial = remove_junk($db->escape($_POST['trial']));
      $tarename = remove_junk($db->escape($_POST['tarename']));
      $scale_model = remove_junk($db->escape($_POST['scale_model']));
      $mc = remove_junk($db->escape($_POST['mc']));

      $query = "UPDATE moisture_scale SET ";
      $query .= "Comment = '{$comment}', ";
      $query .= "Technician = '{$technician}', ";
      $query .= "Test_Start_Date = '{$testdate}', ";

      $query .= "Trial = '{$trial}', ";
      $query .= "Tare_Name = '{$tarename}', ";
      $query .= "Scale_Model = '{$scale_model}', ";;
      $query .= "Mc = '{$mc}' ";
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-MC-Scale.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-MC-Scale.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-MC-Scale.php?id=' . $search_table['id'], false);
    }
  }
?>