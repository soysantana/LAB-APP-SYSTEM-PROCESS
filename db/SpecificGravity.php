<?php

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['SpecificGravity'])) {

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
        'PycnometerUsedmL',
        'PycnometerNumber',
        'TestTempTtC',
        'AveCalibratedMassDryPycnometerMpgr',
        'AveCalibratedVolumePycnometerVpmL',
        'DensityWaterTestTempgmL',
        'CalibrationWeightPynometerWaterCalibrationTempMpwcgr',
        'WeightDrySoilTaregr',
        'WeightDrySoilMsgr',
        'WeightPycnometerSoilWaterMpwstgr',
        'SpecificGravitySoilSolidTestTempGt',
        'TemperatureCoefficentK',
        'SpecificGravitySoilSolid'
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
    $testype = "SG";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $PreparationMethod = $db->escape($_POST['PreparationMethod']);
    $SplitMethod = $db->escape($_POST['SplitMethod']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $PycnometerUsedmL = $db->escape($_POST['PycnometerUsedmL']);
    $PycnometerNumber = $db->escape($_POST['PycnometerNumber']);
    $TestTempTtC = $db->escape($_POST['TestTempTtC']);
    $AveCalibratedMassDryPycnometerMpgr = $db->escape($_POST['AveCalibratedMassDryPycnometerMpgr']);
    $AveCalibratedVolumePycnometerVpmL = $db->escape($_POST['AveCalibratedVolumePycnometerVpmL']);
    $DensityWaterTestTempgmL = $db->escape($_POST['DensityWaterTestTempgmL']);
    $CalibrationWeightPynometerWaterCalibrationTempMpwcgr = $db->escape($_POST['CalibrationWeightPynometerWaterCalibrationTempMpwcgr']);
    $WeightDrySoilTaregr = $db->escape($_POST['WeightDrySoilTaregr']);
    $WeightDrySoilMsgr = $db->escape($_POST['WeightDrySoilMsgr']);
    $WeightPycnometerSoilWaterMpwstgr = $db->escape($_POST['WeightPycnometerSoilWaterMpwstgr']);
    $SpecificGravitySoilSolidTestTempGt = $db->escape($_POST['SpecificGravitySoilSolidTestTempGt']);
    $TemperatureCoefficentK = $db->escape($_POST['TemperatureCoefficentK']);
    $SpecificGravitySoilSolid = $db->escape($_POST['SpecificGravitySoilSolid']);


// Componemos la sentencia SQL
$sql = "INSERT INTO specific_gravity (
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
    Pycnometer_Used_mL,
    Pycnometer_Number,
    Test_Temp_Tt_C,
    Ave_Calibrated_Mass_Dry_Pycnometer_Mp_gr,
    Ave_Calibrated_Volume_Pycnometer_Vp_mL,
    Density_Water_Test_Temp_gmL,
    Calibration_Weight_Pynometer_Water_Calibration_Temp_Mpwc_gr,
    Weight_Dry_Soil_Tare_gr,
    Weight_Dry_Soil_Ms_gr,
    Weight_Pycnometer_Soil_Water_Mpwst_gr,
    Specific_Gravity_Soil_Solid_Test_Temp_Gt,
    Temperature_Coefficent_K,
    Specific_Gravity_Soil_Solid
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
    '$PycnometerUsedmL',
    '$PycnometerNumber',
    '$TestTempTtC',
    '$AveCalibratedMassDryPycnometerMpgr',
    '$AveCalibratedVolumePycnometerVpmL',
    '$DensityWaterTestTempgmL',
    '$CalibrationWeightPynometerWaterCalibrationTempMpwcgr',
    '$WeightDrySoilTaregr',
    '$WeightDrySoilMsgr',
    '$WeightPycnometerSoilWaterMpwstgr',
    '$SpecificGravitySoilSolidTestTempGt',
    '$TemperatureCoefficentK',
    '$SpecificGravitySoilSolid'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./specific_gravity.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./specific_gravity.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./specific_gravity.php', false);
  }
}

?>


<?php
$Specific_Gravity = find_by_id('specific_gravity', (int)$_GET['id']);
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

      $PycnometerUsedmL = remove_junk($db->escape($_POST['PycnometerUsedmL']));
      $PycnometerNumber = remove_junk($db->escape($_POST['PycnometerNumber']));
      $TestTempTtC = remove_junk($db->escape($_POST['TestTempTtC']));
      $AveCalibratedMassDryPycnometerMpgr = remove_junk($db->escape($_POST['AveCalibratedMassDryPycnometerMpgr']));
      $AveCalibratedVolumePycnometerVpmL = remove_junk($db->escape($_POST['AveCalibratedVolumePycnometerVpmL']));
      $DensityWaterTestTempgmL = remove_junk($db->escape($_POST['DensityWaterTestTempgmL']));
      $CalibrationWeightPynometerWaterCalibrationTempMpwcgr = remove_junk($db->escape($_POST['CalibrationWeightPynometerWaterCalibrationTempMpwcgr']));
      $WeightDrySoilTaregr = remove_junk($db->escape($_POST['WeightDrySoilTaregr']));
      $WeightDrySoilMsgr = remove_junk($db->escape($_POST['WeightDrySoilMsgr']));
      $WeightPycnometerSoilWaterMpwstgr = remove_junk($db->escape($_POST['WeightPycnometerSoilWaterMpwstgr']));
      $SpecificGravitySoilSolidTestTempGt = remove_junk($db->escape($_POST['SpecificGravitySoilSolidTestTempGt']));
      $TemperatureCoefficentK = remove_junk($db->escape($_POST['TemperatureCoefficentK']));
      $SpecificGravitySoilSolid = remove_junk($db->escape($_POST['SpecificGravitySoilSolid']));


      $query = "UPDATE specific_gravity SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Split_Method = '{$SplitMethod}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";
      $query .= "Pycnometer_Used_mL = '{$PycnometerUsedmL}', ";
      $query .= "Pycnometer_Number = '{$PycnometerNumber}', ";
      $query .= "Test_Temp_Tt_C = '{$TestTempTtC}', ";
      $query .= "Ave_Calibrated_Mass_Dry_Pycnometer_Mp_gr = '{$AveCalibratedMassDryPycnometerMpgr}', ";
      $query .= "Ave_Calibrated_Volume_Pycnometer_Vp_mL = '{$AveCalibratedVolumePycnometerVpmL}', ";
      $query .= "Density_Water_Test_Temp_gmL = '{$DensityWaterTestTempgmL}', ";
      $query .= "Calibration_Weight_Pynometer_Water_Calibration_Temp_Mpwc_gr = '{$CalibrationWeightPynometerWaterCalibrationTempMpwcgr}', ";
      $query .= "Weight_Dry_Soil_Tare_gr = '{$WeightDrySoilTaregr}', ";
      $query .= "Weight_Dry_Soil_Ms_gr = '{$WeightDrySoilMsgr}', ";
      $query .= "Weight_Pycnometer_Soil_Water_Mpwst_gr = '{$WeightPycnometerSoilWaterMpwstgr}', ";
      $query .= "Specific_Gravity_Soil_Solid_Test_Temp_Gt = '{$SpecificGravitySoilSolidTestTempGt}', ";
      $query .= "Temperature_Coefficent_K = '{$TemperatureCoefficentK}', ";
      $query .= "Specific_Gravity_Soil_Solid = '{$SpecificGravitySoilSolid}' ";
      $query .= "WHERE id = '{$Specific_Gravity['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-SG.php?id=' . $Specific_Gravity['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-SG.php?id=' . $Specific_Gravity['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-SG.php?id=' . $Specific_Gravity['id'], false);
    }
  }
?>