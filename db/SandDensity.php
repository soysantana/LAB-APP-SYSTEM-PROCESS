<?php

$user = current_user();

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['SandDensity'])) {

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
    $testype = "Sand-Density";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $PreparationMethod = $db->escape($_POST['PreparationMethod']);
    $SplitMethod = $db->escape($_POST['SplitMethod']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $WeightSandMold1 = $db->escape($_POST['WeightSandMold1']);
    $WeightSandMold2 = $db->escape($_POST['WeightSandMold2']);
    $WeightSandMold3 = $db->escape($_POST['WeightSandMold3']);
    $Mold1 = $db->escape($_POST['Mold1']);
    $Mold2 = $db->escape($_POST['Mold2']);
    $Mold3 = $db->escape($_POST['Mold3']);
    $WeightMold1 = $db->escape($_POST['WeightMold1']);
    $WeightMold2 = $db->escape($_POST['WeightMold2']);
    $WeightMold3 = $db->escape($_POST['WeightMold3']);
    $WeightSandInMold1 = $db->escape($_POST['WeightSandInMold1']);
    $WeightSandInMold2 = $db->escape($_POST['WeightSandInMold2']);
    $WeightSandInMold3 = $db->escape($_POST['WeightSandInMold3']);
    $VolumeMoldcm31 = $db->escape($_POST['VolumeMoldcm31']);
    $VolumeMoldcm32 = $db->escape($_POST['VolumeMoldcm32']);
    $VolumeMoldcm33 = $db->escape($_POST['VolumeMoldcm33']);
    $BulkDensitySandgcm31 = $db->escape($_POST['BulkDensitySandgcm31']);
    $BulkDensitySandgcm32 = $db->escape($_POST['BulkDensitySandgcm32']);
    $BulkDensitySandgcm33 = $db->escape($_POST['BulkDensitySandgcm33']);
    $AverageBulkDensitySand = $db->escape($_POST['AverageBulkDensitySand']);
    $WeightSandContainerBeforeTest1 = $db->escape($_POST['WeightSandContainerBeforeTest1']);
    $WeightSandContainerBeforeTest2 = $db->escape($_POST['WeightSandContainerBeforeTest2']);
    $WeightSandContainerBeforeTest3 = $db->escape($_POST['WeightSandContainerBeforeTest3']);
    $WeightSandContainerAfterTest1 = $db->escape($_POST['WeightSandContainerAfterTest1']);
    $WeightSandContainerAfterTest2 = $db->escape($_POST['WeightSandContainerAfterTest2']);
    $WeightSandContainerAfterTest3 = $db->escape($_POST['WeightSandContainerAfterTest3']);
    $WeightSandUsed1 = $db->escape($_POST['WeightSandUsed1']);
    $WeightSandUsed2 = $db->escape($_POST['WeightSandUsed2']);
    $WeightSandUsed3 = $db->escape($_POST['WeightSandUsed3']);
    $BulkDensityofSand1 = $db->escape($_POST['BulkDensityofSand1']);
    $BulkDensityofSand2 = $db->escape($_POST['BulkDensityofSand2']);
    $BulkDensityofSand3 = $db->escape($_POST['BulkDensityofSand3']);
    $VolumeFunnel1 = $db->escape($_POST['VolumeFunnel1']);
    $VolumeFunnel2 = $db->escape($_POST['VolumeFunnel2']);
    $VolumeFunnel3 = $db->escape($_POST['VolumeFunnel3']);
    $AverageVolumeFunnel = $db->escape($_POST['AverageVolumeFunnel']);

    $RegisterBy = $user['name'];


// Componemos la sentencia SQL
$sql = "INSERT INTO sand_density (
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
    Weight_Sand_Mold_1,
    Weight_Sand_Mold_2,
    Weight_Sand_Mold_3,
    Mold_1,
    Mold_2,
    Mold_3,
    Weight_Mold_1,
    Weight_Mold_2,
    Weight_Mold_3,
    Weight_Sand_In_Mold_1,
    Weight_Sand_In_Mold_2,
    Weight_Sand_In_Mold_3,
    Volume_Mold_cm3_1,
    Volume_Mold_cm3_2,
    Volume_Mold_cm3_3,
    Bulk_Density_Sand_gcm3_1,
    Bulk_Density_Sand_gcm3_2,
    Bulk_Density_Sand_gcm3_3,
    Average_Bulk_Density_Sand,
    Weight_Sand_Container_Before_Test_1,
    Weight_Sand_Container_Before_Test_2,
    Weight_Sand_Container_Before_Test_3,
    Weight_Sand_Container_After_Test_1,
    Weight_Sand_Container_After_Test_2,
    Weight_Sand_Container_After_Test_3,
    Weight_Sand_Used_1,
    Weight_Sand_Used_2,
    Weight_Sand_Used_3,
    Bulk_Density_of_Sand_1,
    Bulk_Density_of_Sand_2,
    Bulk_Density_of_Sand_3,
    Volume_Funnel_1,
    Volume_Funnel_2,
    Volume_Funnel_3,
    Average_Volume_Funnel,
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
    '$WeightSandMold1',
    '$WeightSandMold2',
    '$WeightSandMold3',
    '$Mold1',
    '$Mold2',
    '$Mold3',
    '$WeightMold1',
    '$WeightMold2',
    '$WeightMold3',
    '$WeightSandInMold1',
    '$WeightSandInMold2',
    '$WeightSandInMold3',
    '$VolumeMoldcm31',
    '$VolumeMoldcm32',
    '$VolumeMoldcm33',
    '$BulkDensitySandgcm31',
    '$BulkDensitySandgcm32',
    '$BulkDensitySandgcm33',
    '$AverageBulkDensitySand',
    '$WeightSandContainerBeforeTest1',
    '$WeightSandContainerBeforeTest2',
    '$WeightSandContainerBeforeTest3',
    '$WeightSandContainerAfterTest1',
    '$WeightSandContainerAfterTest2',
    '$WeightSandContainerAfterTest3',
    '$WeightSandUsed1',
    '$WeightSandUsed2',
    '$WeightSandUsed3',
    '$BulkDensityofSand1',
    '$BulkDensityofSand2',
    '$BulkDensityofSand3',
    '$VolumeFunnel1',
    '$VolumeFunnel2',
    '$VolumeFunnel3',
    '$AverageVolumeFunnel',
    '$RegisterBy'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./sand_density.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./sand_density.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./sand_density.php', false);
  }
}

?>

<?php
$search_table = find_by_id('sand_density', (int)$_GET['id']);
  // Verifica si se ha enviado el formulario
  if (isset($_POST['update_muestra'])) {
    $req_fields = array(
      'Standard'
    );
    
    // Valida los campos requeridos
    validate_fields($req_fields);

    if (empty($errors)) {
      // Obtiene los valores de los campos del formulario
      $Standard = remove_junk($db->escape($_POST['Standard']));
      $PreparationMethod = remove_junk($db->escape($_POST['PreparationMethod']));
      $SplitMethod = remove_junk($db->escape($_POST['SplitMethod']));
      $Comments = remove_junk($db->escape($_POST['Comments']));
      $Technician = remove_junk($db->escape($_POST['Technician']));
      $TestStartDate = remove_junk($db->escape($_POST['TestStartDate']));
  
      $WeightSandMold1 = remove_junk($db->escape($_POST['WeightSandMold1']));
      $WeightSandMold2 = remove_junk($db->escape($_POST['WeightSandMold2']));
      $WeightSandMold3 = remove_junk($db->escape($_POST['WeightSandMold3']));
      $Mold1 = remove_junk($db->escape($_POST['Mold1']));
      $Mold2 = remove_junk($db->escape($_POST['Mold2']));
      $Mold3 = remove_junk($db->escape($_POST['Mold3']));
      $WeightMold1 = remove_junk($db->escape($_POST['WeightMold1']));
      $WeightMold2 = remove_junk($db->escape($_POST['WeightMold2']));
      $WeightMold3 = remove_junk($db->escape($_POST['WeightMold3']));
      $WeightSandInMold1 = remove_junk($db->escape($_POST['WeightSandInMold1']));
      $WeightSandInMold2 = remove_junk($db->escape($_POST['WeightSandInMold2']));
      $WeightSandInMold3 = remove_junk($db->escape($_POST['WeightSandInMold3']));
      $VolumeMoldcm31 = remove_junk($db->escape($_POST['VolumeMoldcm31']));
      $VolumeMoldcm32 = remove_junk($db->escape($_POST['VolumeMoldcm32']));
      $VolumeMoldcm33 = remove_junk($db->escape($_POST['VolumeMoldcm33']));
      $BulkDensitySandgcm31 = remove_junk($db->escape($_POST['BulkDensitySandgcm31']));
      $BulkDensitySandgcm32 = remove_junk($db->escape($_POST['BulkDensitySandgcm32']));
      $BulkDensitySandgcm33 = remove_junk($db->escape($_POST['BulkDensitySandgcm33']));
      $AverageBulkDensitySand = remove_junk($db->escape($_POST['AverageBulkDensitySand']));
      $WeightSandContainerBeforeTest1 = remove_junk($db->escape($_POST['WeightSandContainerBeforeTest1']));
      $WeightSandContainerBeforeTest2 = remove_junk($db->escape($_POST['WeightSandContainerBeforeTest2']));
      $WeightSandContainerBeforeTest3 = remove_junk($db->escape($_POST['WeightSandContainerBeforeTest3']));
      $WeightSandContainerAfterTest1 = remove_junk($db->escape($_POST['WeightSandContainerAfterTest1']));
      $WeightSandContainerAfterTest2 = remove_junk($db->escape($_POST['WeightSandContainerAfterTest2']));
      $WeightSandContainerAfterTest3 = remove_junk($db->escape($_POST['WeightSandContainerAfterTest3']));
      $WeightSandUsed1 = remove_junk($db->escape($_POST['WeightSandUsed1']));
      $WeightSandUsed2 = remove_junk($db->escape($_POST['WeightSandUsed2']));
      $WeightSandUsed3 = remove_junk($db->escape($_POST['WeightSandUsed3']));
      $BulkDensityofSand1 = remove_junk($db->escape($_POST['BulkDensityofSand1']));
      $BulkDensityofSand2 = remove_junk($db->escape($_POST['BulkDensityofSand2']));
      $BulkDensityofSand3 = remove_junk($db->escape($_POST['BulkDensityofSand3']));
      $VolumeFunnel1 = remove_junk($db->escape($_POST['VolumeFunnel1']));
      $VolumeFunnel2 = remove_junk($db->escape($_POST['VolumeFunnel2']));
      $VolumeFunnel3 = remove_junk($db->escape($_POST['VolumeFunnel3']));
      $AverageVolumeFunnel = remove_junk($db->escape($_POST['AverageVolumeFunnel']));

      $RegisterBy = $user['name'];

      $query = "UPDATE sand_density SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Split_Method = '{$SplitMethod}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Weight_Sand_Mold_1 = '{$WeightSandMold1}', ";
      $query .= "Weight_Sand_Mold_2 = '{$WeightSandMold2}', ";
      $query .= "Weight_Sand_Mold_3 = '{$WeightSandMold3}', ";
      $query .= "Mold_1 = '{$Mold1}', ";
      $query .= "Mold_2 = '{$Mold2}', ";
      $query .= "Mold_3 = '{$Mold3}', ";
      $query .= "Weight_Mold_1 = '{$WeightMold1}', ";
      $query .= "Weight_Mold_2 = '{$WeightMold2}', ";
      $query .= "Weight_Mold_3 = '{$WeightMold3}', ";
      $query .= "Weight_Sand_In_Mold_1 = '{$WeightSandInMold1}', ";
      $query .= "Weight_Sand_In_Mold_2 = '{$WeightSandInMold2}', ";
      $query .= "Weight_Sand_In_Mold_3 = '{$WeightSandInMold3}', ";
      $query .= "Volume_Mold_cm3_1 = '{$VolumeMoldcm31}', ";
      $query .= "Volume_Mold_cm3_2 = '{$VolumeMoldcm32}', ";
      $query .= "Volume_Mold_cm3_3 = '{$VolumeMoldcm33}', ";
      $query .= "Bulk_Density_Sand_gcm3_1 = '{$BulkDensitySandgcm31}', ";
      $query .= "Bulk_Density_Sand_gcm3_2 = '{$BulkDensitySandgcm32}', ";
      $query .= "Bulk_Density_Sand_gcm3_3 = '{$BulkDensitySandgcm33}', ";
      $query .= "Average_Bulk_Density_Sand = '{$AverageBulkDensitySand}', ";

      $query .= "Weight_Sand_Container_Before_Test_1 = '{$WeightSandContainerBeforeTest1}', ";
      $query .= "Weight_Sand_Container_Before_Test_2 = '{$WeightSandContainerBeforeTest2}', ";
      $query .= "Weight_Sand_Container_Before_Test_3 = '{$WeightSandContainerBeforeTest3}', ";
      $query .= "Weight_Sand_Container_After_Test_1 = '{$WeightSandContainerAfterTest1}', ";
      $query .= "Weight_Sand_Container_After_Test_2 = '{$WeightSandContainerAfterTest2}', ";
      $query .= "Weight_Sand_Container_After_Test_3 = '{$WeightSandContainerAfterTest3}', ";
      $query .= "Weight_Sand_Used_1 = '{$WeightSandUsed1}', ";
      $query .= "Weight_Sand_Used_2 = '{$WeightSandUsed2}', ";
      $query .= "Weight_Sand_Used_3 = '{$WeightSandUsed3}', ";
      $query .= "Bulk_Density_of_Sand_1 = '{$BulkDensityofSand1}', ";
      $query .= "Bulk_Density_of_Sand_2 = '{$BulkDensityofSand2}', ";
      $query .= "Bulk_Density_of_Sand_3 = '{$BulkDensityofSand3}', ";
      $query .= "Volume_Funnel_1 = '{$VolumeFunnel1}', ";
      $query .= "Volume_Funnel_2 = '{$VolumeFunnel2}', ";
      $query .= "Volume_Funnel_3 = '{$VolumeFunnel3}', ";
      $query .= "Average_Volume_Funnel = '{$AverageVolumeFunnel}', ";

      $query .= "Registered_By = '{$RegisterBy}' ";
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-Density-Sand.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-Density-Sand.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-Density-Sand.php?id=' . $search_table['id'], false);
    }
  }
?>