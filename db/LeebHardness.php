<?php

$user = current_user();

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['LeebHardness'])) {

    // Definimos los campos requeridos para la validación
    $req_fields = array(
        'sampleid',
        'structure',
        'area',
        'source',
        'depthfrom',
        'depthto',
        'materialtype',
        'sampletype',
        'north',
        'east',
        'elev',
        'sampledate',
        'Standard',
        'Comments',
        'Technician',
        'TestStartDate'
    );    

    // Llamamos a la función para validar los campos
    validate_fields($req_fields);

// Validación de post: Comprobamos si no hay errores
if (empty($errors)) {

    // Valores obtenidos del AJAX
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
    $testype = "Leeb";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $Method = $db->escape($_POST['Method']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $Sample = $db->escape($_POST['Sample']);
    $Depthm = $db->escape($_POST['Depthm']);
    $LeebHardnessNumber1 = $db->escape($_POST['LeebHardnessNumber1']);
    $LeebHardnessNumber2 = $db->escape($_POST['LeebHardnessNumber2']);
    $LeebHardnessNumber3 = $db->escape($_POST['LeebHardnessNumber3']);
    $LeebHardnessNumber4 = $db->escape($_POST['LeebHardnessNumber4']);
    $LeebHardnessNumber5 = $db->escape($_POST['LeebHardnessNumber5']);
    $LeebHardnessNumber6 = $db->escape($_POST['LeebHardnessNumber6']);
    $LeebHardnessNumber7 = $db->escape($_POST['LeebHardnessNumber7']);
    $LeebHardnessNumber8 = $db->escape($_POST['LeebHardnessNumber8']);
    $LeebHardnessNumber9 = $db->escape($_POST['LeebHardnessNumber9']);
    $LeebHardnessNumber10 = $db->escape($_POST['LeebHardnessNumber10']);
    $Average = $db->escape($_POST['Average']);

    $RegisterBy = $user['name'];

// Componemos la sentencia SQL
$sql = "INSERT INTO leeb_hardness (
    Sample_ID, 
    Sample_Number, 
    Structure, 
    Area, 
    Source, 
    Depth_From, 
    Depth_To, 
    Material_Type,
    Sample_Type, 
    North, 
    East, 
    Elev, 
    Sample_Date, 
    Report_Date, 
    test_type, 
    Standard, 
    Method,
    Comments,
    Technician,
    Test_Start_Date,
    Sample,
    Depth_m,
    Leeb_Hardness_Number1,
    Leeb_Hardness_Number2,
    Leeb_Hardness_Number3,
    Leeb_Hardness_Number4,
    Leeb_Hardness_Number5,
    Leeb_Hardness_Number6,
    Leeb_Hardness_Number7,
    Leeb_Hardness_Number8,
    Leeb_Hardness_Number9,
    Leeb_Hardness_Number10,
    Average,
    Registered_By
)
VALUES (
    '$sampleid',
    '$samplenumber',
    '$structure', 
    '$area', 
    '$source', 
    '$depthfrom', 
    '$depthto', 
    '$materialtype', 
    '$sampletype',
    '$north', 
    '$east',
    '$elev',
    '$sampledate',
    '$reportdate',
    '$testype',
    '$Standard',
    '$Method',
    '$Comments',
    '$Technician',
    '$TestStartDate',
    '$Sample',
    '$Depthm',
    '$LeebHardnessNumber1',
    '$LeebHardnessNumber2',
    '$LeebHardnessNumber3',
    '$LeebHardnessNumber4',
    '$LeebHardnessNumber5',
    '$LeebHardnessNumber6',
    '$LeebHardnessNumber7',
    '$LeebHardnessNumber8',
    '$LeebHardnessNumber9',
    '$LeebHardnessNumber10',
    '$Average',
    '$RegisterBy'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./leeb_hardness.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./leeb_hardness.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./leeb_hardness.php', false);
  }
}

?>

<?php
$search_table = find_by_id('leeb_hardness', (int)$_GET['id']);
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
      $Method = $db->escape($_POST['Method']);
      $Comments = $db->escape($_POST['Comments']);
      $Technician = $db->escape($_POST['Technician']);
      $TestStartDate = $db->escape($_POST['TestStartDate']);
  
      $Sample = $db->escape($_POST['Sample']);
      $Depthm = $db->escape($_POST['Depthm']);
      $LeebHardnessNumber1 = $db->escape($_POST['LeebHardnessNumber1']);
      $LeebHardnessNumber2 = $db->escape($_POST['LeebHardnessNumber2']);
      $LeebHardnessNumber3 = $db->escape($_POST['LeebHardnessNumber3']);
      $LeebHardnessNumber4 = $db->escape($_POST['LeebHardnessNumber4']);
      $LeebHardnessNumber5 = $db->escape($_POST['LeebHardnessNumber5']);
      $LeebHardnessNumber6 = $db->escape($_POST['LeebHardnessNumber6']);
      $LeebHardnessNumber7 = $db->escape($_POST['LeebHardnessNumber7']);
      $LeebHardnessNumber8 = $db->escape($_POST['LeebHardnessNumber8']);
      $LeebHardnessNumber9 = $db->escape($_POST['LeebHardnessNumber9']);
      $LeebHardnessNumber10 = $db->escape($_POST['LeebHardnessNumber10']);
      $Average = $db->escape($_POST['Average']);

      $RegisterBy = $user['name'];

      $query = "UPDATE leeb_hardness SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Method = '{$Method}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Sample = '{$Sample}', ";
      $query .= "Depth_m = '{$Depthm}', ";
      $query .= "Leeb_Hardness_Number1 = '{$LeebHardnessNumber1}', ";
      $query .= "Leeb_Hardness_Number2 = '{$LeebHardnessNumber2}', ";
      $query .= "Leeb_Hardness_Number3 = '{$LeebHardnessNumber3}', ";
      $query .= "Leeb_Hardness_Number4 = '{$LeebHardnessNumber4}', ";
      $query .= "Leeb_Hardness_Number5 = '{$LeebHardnessNumber5}', ";
      $query .= "Leeb_Hardness_Number6 = '{$LeebHardnessNumber6}', ";
      $query .= "Leeb_Hardness_Number7 = '{$LeebHardnessNumber7}', ";
      $query .= "Leeb_Hardness_Number8 = '{$LeebHardnessNumber8}', ";
      $query .= "Leeb_Hardness_Number9 = '{$LeebHardnessNumber9}', ";
      $query .= "Leeb_Hardness_Number10 = '{$LeebHardnessNumber10}', ";
      $query .= "Average = '{$Average}', ";
      $query .= "Registered_By = '{$RegisterBy}' ";
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-Leeb.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-Leeb.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-Leeb.php?id=' . $search_table['id'], false);
    }
  }
?>