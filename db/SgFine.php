<?php

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['SgFine'])) {

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
        'PreparationMethod',
        'SplitMethod',
        'Comments',
        'Technician',
        'TestStartDate',
        'PycnometerNumber',
        'WeightPycnometer',
        'WeightDrySoilTare',
        'WeightDrySoil',
        'WeightSaturatedSurfaceDrySoilAir',
        'TempSample',
        'WeightPycnometerSoilWater',
        'CalibrationWeightPycnometerDesiredTemp',
        'SpecificGravity',
        'SpecificGravitySSD',
        'ApparentSpecificGravity',
        'PercentAbsortion'
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
    $testype = "SG-Fines";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $PreparationMethod = $db->escape($_POST['PreparationMethod']);
    $SplitMethod = $db->escape($_POST['SplitMethod']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $PycnometerNumber = $db->escape($_POST['PycnometerNumber']);
    $WeightPycnometer = $db->escape($_POST['WeightPycnometer']);
    $WeightDrySoilTare = $db->escape($_POST['WeightDrySoilTare']);
    $WeightDrySoil = $db->escape($_POST['WeightDrySoil']);
    $WeightSaturatedSurfaceDrySoilAir = $db->escape($_POST['WeightSaturatedSurfaceDrySoilAir']);
    $TempSample = $db->escape($_POST['TempSample']);
    $WeightPycnometerSoilWater = $db->escape($_POST['WeightPycnometerSoilWater']);
    $CalibrationWeightPycnometerDesiredTemp = $db->escape($_POST['CalibrationWeightPycnometerDesiredTemp']);
    $SpecificGravity = $db->escape($_POST['SpecificGravity']);
    $SpecificGravitySSD = $db->escape($_POST['SpecificGravitySSD']);
    $ApparentSpecificGravity = $db->escape($_POST['ApparentSpecificGravity']);
    $PercentAbsortion = $db->escape($_POST['PercentAbsortion']);

// Componemos la sentencia SQL
$sql = "INSERT INTO specific_gravity_fine (
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
    Pycnometer_Number,
    Weight_Pycnometer,
    Weight_Dry_Soil_Tare,
    Weight_Dry_Soil,
    Weight_Saturated_Surface_Dry_Soil_Air,
    Temp_Sample,
    Weight_Pycnometer_Soil_Water,
    Calibration_Weight_Pycnometer_Desired_Temp,
    Specific_Gravity,
    Specific_Gravity_SSD,
    Apparent_Specific_Gravity,
    Percent_Absortion
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
    '$PycnometerNumber',
    '$WeightPycnometer',
    '$WeightDrySoilTare',
    '$WeightDrySoil',
    '$WeightSaturatedSurfaceDrySoilAir',
    '$TempSample',
    '$WeightPycnometerSoilWater',
    '$CalibrationWeightPycnometerDesiredTemp',
    '$SpecificGravity',
    '$SpecificGravitySSD',
    '$ApparentSpecificGravity',
    '$PercentAbsortion'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./sg_fine.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./sg_fine.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./sg_fine.php', false);
  }
}

?>


<?php
$Specific_Gravity = find_by_id('specific_gravity_fine', (int)$_GET['id']);
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
  
      $PycnometerNumber = remove_junk($db->escape($_POST['PycnometerNumber']));
      $WeightPycnometer = remove_junk($db->escape($_POST['WeightPycnometer']));
      $WeightDrySoilTare = remove_junk($db->escape($_POST['WeightDrySoilTare']));
      $WeightDrySoil = remove_junk($db->escape($_POST['WeightDrySoil']));
      $WeightSaturatedSurfaceDrySoilAir = remove_junk($db->escape($_POST['WeightSaturatedSurfaceDrySoilAir']));
      $TempSample = remove_junk($db->escape($_POST['TempSample']));
      $WeightPycnometerSoilWater = remove_junk($db->escape($_POST['WeightPycnometerSoilWater']));
      $CalibrationWeightPycnometerDesiredTemp = remove_junk($db->escape($_POST['CalibrationWeightPycnometerDesiredTemp']));
      $SpecificGravity = remove_junk($db->escape($_POST['SpecificGravity']));
      $SpecificGravitySSD = remove_junk($db->escape($_POST['SpecificGravitySSD']));
      $ApparentSpecificGravity = remove_junk($db->escape($_POST['ApparentSpecificGravity']));
      $PercentAbsortion = remove_junk($db->escape($_POST['PercentAbsortion']));


      $query = "UPDATE specific_gravity_fine SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Split_Method = '{$SplitMethod}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";
      $query .= "Pycnometer_Number = '{$PycnometerNumber}', ";
      $query .= "Weight_Pycnometer = '{$WeightPycnometer}', ";
      $query .= "Weight_Dry_Soil_Tare = '{$WeightDrySoilTare}', ";
      $query .= "Weight_Dry_Soil = '{$WeightDrySoil}', ";
      $query .= "Weight_Saturated_Surface_Dry_Soil_Air = '{$WeightSaturatedSurfaceDrySoilAir}', ";
      $query .= "Temp_Sample = '{$TempSample}', ";
      $query .= "Weight_Pycnometer_Soil_Water = '{$WeightPycnometerSoilWater}', ";
      $query .= "Calibration_Weight_Pycnometer_Desired_Temp = '{$CalibrationWeightPycnometerDesiredTemp}', ";
      $query .= "Specific_Gravity = '{$SpecificGravity}', ";
      $query .= "Specific_Gravity_SSD = '{$SpecificGravitySSD}', ";
      $query .= "Apparent_Specific_Gravity = '{$ApparentSpecificGravity}', ";
      $query .= "Percent_Absortion = '{$PercentAbsortion}' ";
      $query .= "WHERE id = '{$Specific_Gravity['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-SG-Fines.php?id=' . $Specific_Gravity['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-SG-Fines.php?id=' . $Specific_Gravity['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-SG-Fines.php?id=' . $Specific_Gravity['id'], false);
    }
  }
?>