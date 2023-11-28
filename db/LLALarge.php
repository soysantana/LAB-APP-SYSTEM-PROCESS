<?php

$user = current_user();

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['LAALarge'])) {

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
        'TestStartDate',
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
    $testype = "LLA-Large";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $PreparationMethod = $db->escape($_POST['PreparationMethod']);
    $SplitMethod = $db->escape($_POST['SplitMethod']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $SelectedGrading = $db->escape($_POST['SelectedGrading']);
    $WeightofTheSpheres = $db->escape($_POST['WeightofTheSpheres']);
    $Revolutions = $db->escape($_POST['Revolutions']);
    $InitialWeight = $db->escape($_POST['InitialWeight']);
    $FinalWeight = $db->escape($_POST['FinalWeight']);
    $WeightLoss = $db->escape($_POST['WeightLoss']);
    $WeightLossPorce = $db->escape($_POST['WeightLossPorce']);

    $RegisterBy = $user['name'];

// Componemos la sentencia SQL
$sql = "INSERT INTO los_angeles_abrasion_large (
    Sample_ID, 
    Sample_Number, 
    Structure, Area, 
    Source, Depth_From, 
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
    Preparation_Method,
    Split_Method,
    Comments,
    Technician,
    Test_Start_Date,
    Selected_Grading,
    Weight_of_The_Spheres,
    Revolutions,
    Initial_Weight,
    Final_Weight,
    Weight_Loss,
    Weight_Loss_Porce,
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
    '$PreparationMethod',
    '$SplitMethod',
    '$Comments',
    '$Technician',
    '$TestStartDate',
    '$SelectedGrading',
    '$WeightofTheSpheres',
    '$Revolutions',
    '$InitialWeight',
    '$FinalWeight',
    '$WeightLoss',
    '$WeightLossPorce',
    '$RegisterBy'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./laa_large.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./laa_large.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./laa_large.php', false);
  }
}

?>

<?php
$search_table = find_by_id('los_angeles_abrasion_large', (int)$_GET['id']);
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
      $SplitMethod = $db->escape($_POST['SplitMethod']);
      $Comments = $db->escape($_POST['Comments']);
      $Technician = $db->escape($_POST['Technician']);
      $TestStartDate = $db->escape($_POST['TestStartDate']);
  
      $SelectedGrading = $db->escape($_POST['SelectedGrading']);
      $WeightofTheSpheres = $db->escape($_POST['WeightofTheSpheres']);
      $Revolutions = $db->escape($_POST['Revolutions']);
      $InitialWeight = $db->escape($_POST['InitialWeight']);
      $FinalWeight = $db->escape($_POST['FinalWeight']);
      $WeightLoss = $db->escape($_POST['WeightLoss']);
      $WeightLossPorce = $db->escape($_POST['WeightLossPorce']);

      $RegisterBy = $user['name'];

      $query = "UPDATE los_angeles_abrasion_large SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Split_Method = '{$SplitMethod}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Selected_Grading = '{$SelectedGrading}', ";
      $query .= "Weight_of_The_Spheres = '{$WeightofTheSpheres}', ";
      $query .= "Revolutions = '{$Revolutions}', ";
      $query .= "Initial_Weight = '{$InitialWeight}', ";
      $query .= "Final_Weight = '{$FinalWeight}', ";
      $query .= "Weight_Loss = '{$WeightLoss}', ";
      $query .= "Weight_Loss_Porce = '{$WeightLossPorce}', ";

      $query .= "Registered_By = '{$RegisterBy}' ";
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-Laa-Large.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-Laa-Large.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-Laa-Large.php?id=' . $search_table['id'], false);
    }
  }
?>