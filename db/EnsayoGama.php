<?php

$user = current_user();

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['EnsayoGama'])) {

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
    $testype = "Gamma-density";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $PreparationMethod = $db->escape($_POST['PreparationMethod']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $Station = $db->escape($_POST['Station']);
    $MaxDryDensityKgm3 = $db->escape($_POST['MaxDryDensityKgm3']);
    $MaxWetDensityKgm3 = $db->escape($_POST['MaxWetDensityKgm3']);
    $PercentMoistureContent = $db->escape($_POST['PercentMoistureContent']);
    $OptimunMoistureContent = $db->escape($_POST['OptimunMoistureContent']);
    $MaxDryDensity = $db->escape($_POST['MaxDryDensity']);
    $PercentofCompaction = $db->escape($_POST['PercentofCompaction']);

    $RegisterBy = $user['name'];

// Componemos la sentencia SQL
$sql = "INSERT INTO ensayo_gama (
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
    Comments,
    Technician,
    Test_Start_Date,
    Station,
    Max_Dry_Density_Kgm3,
    Max_Wet_Density_Kgm3,
    Percent_Moisture_Content,
    Optimun_Moisture_Content,
    Max_Dry_Density,
    Percent_of_Compaction,
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
    '$Comments',
    '$Technician',
    '$TestStartDate',
    '$Station',
    '$MaxDryDensityKgm3',
    '$MaxWetDensityKgm3',
    '$PercentMoistureContent',
    '$OptimunMoistureContent',
    '$MaxDryDensity',
    '$PercentofCompaction',
    '$RegisterBy'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./ensayo_gama.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./ensayo_gama.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./ensayo_gama.php', false);
  }
}

?>

<?php
$search_table = find_by_id('ensayo_gama', (int)$_GET['id']);
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
      $Comments = $db->escape($_POST['Comments']);
      $Technician = $db->escape($_POST['Technician']);
      $TestStartDate = $db->escape($_POST['TestStartDate']);
  
      $Station = $db->escape($_POST['Station']);
      $MaxDryDensityKgm3 = $db->escape($_POST['MaxDryDensityKgm3']);
      $MaxWetDensityKgm3 = $db->escape($_POST['MaxWetDensityKgm3']);
      $PercentMoistureContent = $db->escape($_POST['PercentMoistureContent']);
      $OptimunMoistureContent = $db->escape($_POST['OptimunMoistureContent']);
      $MaxDryDensity = $db->escape($_POST['MaxDryDensity']);
      $PercentofCompaction = $db->escape($_POST['PercentofCompaction']);

      $RegisterBy = $user['name'];

      $query = "UPDATE ensayo_gama SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Station = '{$Station}', ";
      $query .= "Max_Dry_Density_Kgm3 = '{$MaxDryDensityKgm3}', ";
      $query .= "Max_Wet_Density_Kgm3 = '{$MaxWetDensityKgm3}', ";
      $query .= "Percent_Moisture_Content = '{$PercentMoistureContent}', ";
      $query .= "Optimun_Moisture_Content = '{$OptimunMoistureContent}', ";
      $query .= "Max_Dry_Density = '{$MaxDryDensity}', ";
      $query .= "Percent_of_Compaction = '{$PercentofCompaction}', ";

      $query .= "Registered_By = '{$RegisterBy}' ";
      
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-Density-Gama.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-Density-Gama.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-Density-Gama.php?id=' . $search_table['id'], false);
    }
  }
?>