<?php

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['PermeabilityGranular'])) {

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
        'Method',
        'Comments',
        'Technician',
        'TestStartDate',
        'Descriptionofmaterialusefortest',
        'DiameterDcm',
        'Areacm2',
        'LenghtLcm',
        'WMaxKgm2',
        'WMaxKgm3',
        'HeightBeforeH1',
        'HeightAfterH2',
        'HeightNetcm',
        'VoidRatioe',
        'RelativeDensityRDPorce',
        'H11',
        'H12',
        'H13',
        'H14',
        'H15',
        'H16',
        'H17',
        'H18',
        'H21',
        'H22',
        'H23',
        'H24',
        'H25',
        'H26',
        'H27',
        'H28',
        'HeadhcmN1',
        'HeadhcmN2',
        'HeadhcmN3',
        'HeadhcmN4',
        'HeadhcmN5',
        'HeadhcmN6',
        'HeadhcmN7',
        'HeadhcmN8',
        'Quantityofwaterdischargedcm3N1',
        'Quantityofwaterdischargedcm3N2',
        'Quantityofwaterdischargedcm3N3',
        'Quantityofwaterdischargedcm3N4',
        'Quantityofwaterdischargedcm3N5',
        'Quantityofwaterdischargedcm3N6',
        'Quantityofwaterdischargedcm3N7',
        'Quantityofwaterdischargedcm3N8',
        'TotaltimeofdischargesecN1',
        'TotaltimeofdischargesecN2',
        'TotaltimeofdischargesecN3',
        'TotaltimeofdischargesecN4',
        'TotaltimeofdischargesecN5',
        'TotaltimeofdischargesecN6',
        'TotaltimeofdischargesecN7',
        'TotaltimeofdischargesecN8',
        'QAtN1',
        'QAtN2',
        'QAtN3',
        'QAtN4',
        'QAtN5',
        'QAtN6',
        'QAtN7',
        'QAtN8',
        'hLN1',
        'hLN2',
        'hLN3',
        'hLN4',
        'hLN5',
        'hLN6',
        'hLN7',
        'hLN8',
        'TemperatureCN1',
        'TemperatureCN2',
        'TemperatureCN3',
        'TemperatureCN4',
        'TemperatureCN5',
        'TemperatureCN6',
        'TemperatureCN7',
        'TemperatureCN8',
        'CoefficientofpermeabilitycmsegN1',
        'CoefficientofpermeabilitycmsegN2',
        'CoefficientofpermeabilitycmsegN3',
        'CoefficientofpermeabilitycmsegN4',
        'CoefficientofpermeabilitycmsegN5',
        'CoefficientofpermeabilitycmsegN6',
        'CoefficientofpermeabilitycmsegN7',
        'CoefficientofpermeabilitycmsegN8'
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
    $testype = "Perma-Granular";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $Method = $db->escape($_POST['Method']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $Descriptionofmaterialusefortest = $db->escape($_POST['Descriptionofmaterialusefortest']);
    $DiameterDcm = $db->escape($_POST['DiameterDcm']);
    $Areacm2 = $db->escape($_POST['Areacm2']);
    $LenghtLcm = $db->escape($_POST['LenghtLcm']);
    $WMaxKgm2 = $db->escape($_POST['WMaxKgm2']);
    $WMaxKgm3 = $db->escape($_POST['WMaxKgm3']);
    $HeightBeforeH1 = $db->escape($_POST['HeightBeforeH1']);
    $HeightAfterH2 = $db->escape($_POST['HeightAfterH2']);
    $HeightNetcm = $db->escape($_POST['HeightNetcm']);
    $VoidRatioe = $db->escape($_POST['VoidRatioe']);
    $RelativeDensityRDPorce = $db->escape($_POST['RelativeDensityRDPorce']);
    $H11 = $db->escape($_POST['H11']);
    $H12 = $db->escape($_POST['H12']);
    $H13 = $db->escape($_POST['H13']);
    $H14 = $db->escape($_POST['H14']);
    $H15 = $db->escape($_POST['H15']);
    $H16 = $db->escape($_POST['H16']);
    $H17 = $db->escape($_POST['H17']);
    $H18 = $db->escape($_POST['H18']);
    $H21 = $db->escape($_POST['H21']);
    $H22 = $db->escape($_POST['H22']);
    $H23 = $db->escape($_POST['H23']);
    $H24 = $db->escape($_POST['H24']);
    $H25 = $db->escape($_POST['H25']);
    $H26 = $db->escape($_POST['H26']);
    $H27 = $db->escape($_POST['H27']);
    $H28 = $db->escape($_POST['H28']);
    $HeadhcmN1 = $db->escape($_POST['HeadhcmN1']);
    $HeadhcmN2 = $db->escape($_POST['HeadhcmN2']);
    $HeadhcmN3 = $db->escape($_POST['HeadhcmN3']);
    $HeadhcmN4 = $db->escape($_POST['HeadhcmN4']);
    $HeadhcmN5 = $db->escape($_POST['HeadhcmN5']);
    $HeadhcmN6 = $db->escape($_POST['HeadhcmN6']);
    $HeadhcmN7 = $db->escape($_POST['HeadhcmN7']);
    $HeadhcmN8 = $db->escape($_POST['HeadhcmN8']);
    $Quantityofwaterdischargedcm3N1 = $db->escape($_POST['Quantityofwaterdischargedcm3N1']);
    $Quantityofwaterdischargedcm3N2 = $db->escape($_POST['Quantityofwaterdischargedcm3N2']);
    $Quantityofwaterdischargedcm3N3 = $db->escape($_POST['Quantityofwaterdischargedcm3N3']);
    $Quantityofwaterdischargedcm3N4 = $db->escape($_POST['Quantityofwaterdischargedcm3N4']);
    $Quantityofwaterdischargedcm3N5 = $db->escape($_POST['Quantityofwaterdischargedcm3N5']);
    $Quantityofwaterdischargedcm3N6 = $db->escape($_POST['Quantityofwaterdischargedcm3N6']);
    $Quantityofwaterdischargedcm3N7 = $db->escape($_POST['Quantityofwaterdischargedcm3N7']);
    $Quantityofwaterdischargedcm3N8 = $db->escape($_POST['Quantityofwaterdischargedcm3N8']);
    $TotaltimeofdischargesecN1 = $db->escape($_POST['TotaltimeofdischargesecN1']);
    $TotaltimeofdischargesecN2 = $db->escape($_POST['TotaltimeofdischargesecN2']);
    $TotaltimeofdischargesecN3 = $db->escape($_POST['TotaltimeofdischargesecN3']);
    $TotaltimeofdischargesecN4 = $db->escape($_POST['TotaltimeofdischargesecN4']);
    $TotaltimeofdischargesecN5 = $db->escape($_POST['TotaltimeofdischargesecN5']);
    $TotaltimeofdischargesecN6 = $db->escape($_POST['TotaltimeofdischargesecN6']);
    $TotaltimeofdischargesecN7 = $db->escape($_POST['TotaltimeofdischargesecN7']);
    $TotaltimeofdischargesecN8 = $db->escape($_POST['TotaltimeofdischargesecN8']);
    $QAtN1 = $db->escape($_POST['QAtN1']);
    $QAtN2 = $db->escape($_POST['QAtN2']);
    $QAtN3 = $db->escape($_POST['QAtN3']);
    $QAtN4 = $db->escape($_POST['QAtN4']);
    $QAtN5 = $db->escape($_POST['QAtN5']);
    $QAtN6 = $db->escape($_POST['QAtN6']);
    $QAtN7 = $db->escape($_POST['QAtN7']);
    $QAtN8 = $db->escape($_POST['QAtN8']);
    $hLN1 = $db->escape($_POST['hLN1']);
    $hLN2 = $db->escape($_POST['hLN2']);
    $hLN3 = $db->escape($_POST['hLN3']);
    $hLN4 = $db->escape($_POST['hLN4']);
    $hLN5 = $db->escape($_POST['hLN5']);
    $hLN6 = $db->escape($_POST['hLN5']);
    $hLN7 = $db->escape($_POST['hLN7']);
    $hLN8 = $db->escape($_POST['hLN8']);
    $TemperatureCN1 = $db->escape($_POST['TemperatureCN1']);
    $TemperatureCN2 = $db->escape($_POST['TemperatureCN2']);
    $TemperatureCN3 = $db->escape($_POST['TemperatureCN3']);
    $TemperatureCN4 = $db->escape($_POST['TemperatureCN4']);
    $TemperatureCN5 = $db->escape($_POST['TemperatureCN5']);
    $TemperatureCN6 = $db->escape($_POST['TemperatureCN6']);
    $TemperatureCN7 = $db->escape($_POST['TemperatureCN7']);
    $TemperatureCN8 = $db->escape($_POST['TemperatureCN8']);
    $CoefficientofpermeabilitycmsegN1 = $db->escape($_POST['CoefficientofpermeabilitycmsegN1']);
    $CoefficientofpermeabilitycmsegN2 = $db->escape($_POST['CoefficientofpermeabilitycmsegN2']);
    $CoefficientofpermeabilitycmsegN3 = $db->escape($_POST['CoefficientofpermeabilitycmsegN3']);
    $CoefficientofpermeabilitycmsegN4 = $db->escape($_POST['CoefficientofpermeabilitycmsegN4']);
    $CoefficientofpermeabilitycmsegN5 = $db->escape($_POST['CoefficientofpermeabilitycmsegN5']);
    $CoefficientofpermeabilitycmsegN6 = $db->escape($_POST['CoefficientofpermeabilitycmsegN6']);
    $CoefficientofpermeabilitycmsegN7 = $db->escape($_POST['CoefficientofpermeabilitycmsegN7']);
    $CoefficientofpermeabilitycmsegN8 = $db->escape($_POST['CoefficientofpermeabilitycmsegN8']);

// Componemos la sentencia SQL
$sql = "INSERT INTO permeability_of_granular_soils (
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
    Description_of_material_use_for_test,
    Diameter_D_cm,
    Area_cm2,
    Lenght_L_cm,
    W_Max_Kgm2,
    W_Max_Kgm3,
    Height_Before_H1,
    Height_After_H2,
    Height_Net_cm,
    Void_Ratio_e,
    Relative_Density_RD_Porce,
    H1_1,
    H1_2,
    H1_3,
    H1_4,
    H1_5,
    H1_6,
    H1_7,
    H1_8,
    H2_1,
    H2_2,
    H2_3,
    H2_4,
    H2_5,
    H2_6,
    H2_7,
    H2_8,
    Head_h_cm_N1,
    Head_h_cm_N2,
    Head_h_cm_N3,
    Head_h_cm_N4,
    Head_h_cm_N5,
    Head_h_cm_N6,
    Head_h_cm_N7,
    Head_h_cm_N8,
    Quantity_of_water_discharged_cm3_N1,
    Quantity_of_water_discharged_cm3_N2,
    Quantity_of_water_discharged_cm3_N3,
    Quantity_of_water_discharged_cm3_N4,
    Quantity_of_water_discharged_cm3_N5,
    Quantity_of_water_discharged_cm3_N6,
    Quantity_of_water_discharged_cm3_N7,
    Quantity_of_water_discharged_cm3_N8,
    Total_time_of_discharge_sec_N1,
    Total_time_of_discharge_sec_N2,
    Total_time_of_discharge_sec_N3,
    Total_time_of_discharge_sec_N4,
    Total_time_of_discharge_sec_N5,
    Total_time_of_discharge_sec_N6,
    Total_time_of_discharge_sec_N7,
    Total_time_of_discharge_sec_N8,
    Q_At_N1,
    Q_At_N2,
    Q_At_N3,
    Q_At_N4,
    Q_At_N5,
    Q_At_N6,
    Q_At_N7,
    Q_At_N8,
    h_L_N1,
    h_L_N2,
    h_L_N3,
    h_L_N4,
    h_L_N5,
    h_L_N6,
    h_L_N7,
    h_L_N8,
    Temperature_C_N1,
    Temperature_C_N2,
    Temperature_C_N3,
    Temperature_C_N4,
    Temperature_C_N5,
    Temperature_C_N6,
    Temperature_C_N7,
    Temperature_C_N8,
    Coefficient_of_permeability_cm_seg_N1,
    Coefficient_of_permeability_cm_seg_N2,
    Coefficient_of_permeability_cm_seg_N3,
    Coefficient_of_permeability_cm_seg_N4,
    Coefficient_of_permeability_cm_seg_N5,
    Coefficient_of_permeability_cm_seg_N6,
    Coefficient_of_permeability_cm_seg_N7,
    Coefficient_of_permeability_cm_seg_N8
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
    '$Descriptionofmaterialusefortest',
    '$DiameterDcm',
    '$Areacm2',
    '$LenghtLcm',
    '$WMaxKgm2',
    '$WMaxKgm3',
    '$HeightBeforeH1',
    '$HeightAfterH2',
    '$HeightNetcm',
    '$VoidRatioe',
    '$RelativeDensityRDPorce',
    '$H11',
    '$H12',
    '$H13',
    '$H14',
    '$H15',
    '$H16',
    '$H17',
    '$H18',
    '$H21',
    '$H22',
    '$H23',
    '$H24',
    '$H25',
    '$H26',
    '$H27',
    '$H28',
    '$HeadhcmN1',
    '$HeadhcmN2',
    '$HeadhcmN3',
    '$HeadhcmN4',
    '$HeadhcmN5',
    '$HeadhcmN6',
    '$HeadhcmN7',
    '$HeadhcmN8',
    '$Quantityofwaterdischargedcm3N1',
    '$Quantityofwaterdischargedcm3N2',
    '$Quantityofwaterdischargedcm3N3',
    '$Quantityofwaterdischargedcm3N4',
    '$Quantityofwaterdischargedcm3N5',
    '$Quantityofwaterdischargedcm3N6',
    '$Quantityofwaterdischargedcm3N7',
    '$Quantityofwaterdischargedcm3N8',
    '$TotaltimeofdischargesecN1',
    '$TotaltimeofdischargesecN2',
    '$TotaltimeofdischargesecN3',
    '$TotaltimeofdischargesecN4',
    '$TotaltimeofdischargesecN5',
    '$TotaltimeofdischargesecN6',
    '$TotaltimeofdischargesecN7',
    '$TotaltimeofdischargesecN8',
    '$QAtN1',
    '$QAtN2',
    '$QAtN3',
    '$QAtN4',
    '$QAtN5',
    '$QAtN6',
    '$QAtN7',
    '$QAtN8',
    '$hLN1',
    '$hLN2',
    '$hLN3',
    '$hLN4',
    '$hLN5',
    '$hLN6',
    '$hLN7',
    '$hLN8',
    '$TemperatureCN1',
    '$TemperatureCN2',
    '$TemperatureCN3',
    '$TemperatureCN4',
    '$TemperatureCN5',
    '$TemperatureCN6',
    '$TemperatureCN7',
    '$TemperatureCN8',
    '$CoefficientofpermeabilitycmsegN1',
    '$CoefficientofpermeabilitycmsegN2',
    '$CoefficientofpermeabilitycmsegN3',
    '$CoefficientofpermeabilitycmsegN4',
    '$CoefficientofpermeabilitycmsegN5',
    '$CoefficientofpermeabilitycmsegN6',
    '$CoefficientofpermeabilitycmsegN7',
    '$CoefficientofpermeabilitycmsegN8'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./permeability_granular.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./permeability_granular.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./permeability_granular.php', false);
  }
}

?>

<?php
$search_table = find_by_id('permeability_of_granular_soils', (int)$_GET['id']);
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
  
      $Descriptionofmaterialusefortest = $db->escape($_POST['Descriptionofmaterialusefortest']);
      $DiameterDcm = $db->escape($_POST['DiameterDcm']);
      $Areacm2 = $db->escape($_POST['Areacm2']);
      $LenghtLcm = $db->escape($_POST['LenghtLcm']);
      $WMaxKgm2 = $db->escape($_POST['WMaxKgm2']);
      $WMaxKgm3 = $db->escape($_POST['WMaxKgm3']);
      $HeightBeforeH1 = $db->escape($_POST['HeightBeforeH1']);
      $HeightAfterH2 = $db->escape($_POST['HeightAfterH2']);
      $HeightNetcm = $db->escape($_POST['HeightNetcm']);
      $VoidRatioe = $db->escape($_POST['VoidRatioe']);
      $RelativeDensityRDPorce = $db->escape($_POST['RelativeDensityRDPorce']);
      $H11 = $db->escape($_POST['H11']);
      $H12 = $db->escape($_POST['H12']);
      $H13 = $db->escape($_POST['H13']);
      $H14 = $db->escape($_POST['H14']);
      $H15 = $db->escape($_POST['H15']);
      $H16 = $db->escape($_POST['H16']);
      $H17 = $db->escape($_POST['H17']);
      $H18 = $db->escape($_POST['H18']);
      $H21 = $db->escape($_POST['H21']);
      $H22 = $db->escape($_POST['H22']);
      $H23 = $db->escape($_POST['H23']);
      $H24 = $db->escape($_POST['H24']);
      $H25 = $db->escape($_POST['H25']);
      $H26 = $db->escape($_POST['H26']);
      $H27 = $db->escape($_POST['H27']);
      $H28 = $db->escape($_POST['H28']);
      $HeadhcmN1 = $db->escape($_POST['HeadhcmN1']);
      $HeadhcmN2 = $db->escape($_POST['HeadhcmN2']);
      $HeadhcmN3 = $db->escape($_POST['HeadhcmN3']);
      $HeadhcmN4 = $db->escape($_POST['HeadhcmN4']);
      $HeadhcmN5 = $db->escape($_POST['HeadhcmN5']);
      $HeadhcmN6 = $db->escape($_POST['HeadhcmN6']);
      $HeadhcmN7 = $db->escape($_POST['HeadhcmN7']);
      $HeadhcmN8 = $db->escape($_POST['HeadhcmN8']);
      $Quantityofwaterdischargedcm3N1 = $db->escape($_POST['Quantityofwaterdischargedcm3N1']);
      $Quantityofwaterdischargedcm3N2 = $db->escape($_POST['Quantityofwaterdischargedcm3N2']);
      $Quantityofwaterdischargedcm3N3 = $db->escape($_POST['Quantityofwaterdischargedcm3N3']);
      $Quantityofwaterdischargedcm3N4 = $db->escape($_POST['Quantityofwaterdischargedcm3N4']);
      $Quantityofwaterdischargedcm3N5 = $db->escape($_POST['Quantityofwaterdischargedcm3N5']);
      $Quantityofwaterdischargedcm3N6 = $db->escape($_POST['Quantityofwaterdischargedcm3N6']);
      $Quantityofwaterdischargedcm3N7 = $db->escape($_POST['Quantityofwaterdischargedcm3N7']);
      $Quantityofwaterdischargedcm3N8 = $db->escape($_POST['Quantityofwaterdischargedcm3N8']);
      $TotaltimeofdischargesecN1 = $db->escape($_POST['TotaltimeofdischargesecN1']);
      $TotaltimeofdischargesecN2 = $db->escape($_POST['TotaltimeofdischargesecN2']);
      $TotaltimeofdischargesecN3 = $db->escape($_POST['TotaltimeofdischargesecN3']);
      $TotaltimeofdischargesecN4 = $db->escape($_POST['TotaltimeofdischargesecN4']);
      $TotaltimeofdischargesecN5 = $db->escape($_POST['TotaltimeofdischargesecN5']);
      $TotaltimeofdischargesecN6 = $db->escape($_POST['TotaltimeofdischargesecN6']);
      $TotaltimeofdischargesecN7 = $db->escape($_POST['TotaltimeofdischargesecN7']);
      $TotaltimeofdischargesecN8 = $db->escape($_POST['TotaltimeofdischargesecN8']);
      $QAtN1 = $db->escape($_POST['QAtN1']);
      $QAtN2 = $db->escape($_POST['QAtN2']);
      $QAtN3 = $db->escape($_POST['QAtN3']);
      $QAtN4 = $db->escape($_POST['QAtN4']);
      $QAtN5 = $db->escape($_POST['QAtN5']);
      $QAtN6 = $db->escape($_POST['QAtN6']);
      $QAtN7 = $db->escape($_POST['QAtN7']);
      $QAtN8 = $db->escape($_POST['QAtN8']);
      $hLN1 = $db->escape($_POST['hLN1']);
      $hLN2 = $db->escape($_POST['hLN2']);
      $hLN3 = $db->escape($_POST['hLN3']);
      $hLN4 = $db->escape($_POST['hLN4']);
      $hLN5 = $db->escape($_POST['hLN5']);
      $hLN6 = $db->escape($_POST['hLN5']);
      $hLN7 = $db->escape($_POST['hLN7']);
      $hLN8 = $db->escape($_POST['hLN8']);
      $TemperatureCN1 = $db->escape($_POST['TemperatureCN1']);
      $TemperatureCN2 = $db->escape($_POST['TemperatureCN2']);
      $TemperatureCN3 = $db->escape($_POST['TemperatureCN3']);
      $TemperatureCN4 = $db->escape($_POST['TemperatureCN4']);
      $TemperatureCN5 = $db->escape($_POST['TemperatureCN5']);
      $TemperatureCN6 = $db->escape($_POST['TemperatureCN6']);
      $TemperatureCN7 = $db->escape($_POST['TemperatureCN7']);
      $TemperatureCN8 = $db->escape($_POST['TemperatureCN8']);
      $CoefficientofpermeabilitycmsegN1 = $db->escape($_POST['CoefficientofpermeabilitycmsegN1']);
      $CoefficientofpermeabilitycmsegN2 = $db->escape($_POST['CoefficientofpermeabilitycmsegN2']);
      $CoefficientofpermeabilitycmsegN3 = $db->escape($_POST['CoefficientofpermeabilitycmsegN3']);
      $CoefficientofpermeabilitycmsegN4 = $db->escape($_POST['CoefficientofpermeabilitycmsegN4']);
      $CoefficientofpermeabilitycmsegN5 = $db->escape($_POST['CoefficientofpermeabilitycmsegN5']);
      $CoefficientofpermeabilitycmsegN6 = $db->escape($_POST['CoefficientofpermeabilitycmsegN6']);
      $CoefficientofpermeabilitycmsegN7 = $db->escape($_POST['CoefficientofpermeabilitycmsegN7']);
      $CoefficientofpermeabilitycmsegN8 = $db->escape($_POST['CoefficientofpermeabilitycmsegN8']);

      $query = "UPDATE permeability_of_granular_soils SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Method = '{$Method}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Description_of_material_use_for_test = '{$Descriptionofmaterialusefortest}', ";
      $query .= "Diameter_D_cm = '{$DiameterDcm}', ";
      $query .= "Area_cm2 = '{$Areacm2}', ";
      $query .= "Lenght_L_cm = '{$LenghtLcm}', ";
      $query .= "W_Max_Kgm2 = '{$WMaxKgm2}', ";
      $query .= "W_Max_Kgm3 = '{$WMaxKgm3}', ";
      $query .= "Height_Before_H1 = '{$HeightBeforeH1}', ";
      $query .= "Height_After_H2 = '{$HeightAfterH2}', ";
      $query .= "Height_Net_cm = '{$HeightNetcm}', ";
      $query .= "Void_Ratio_e = '{$VoidRatioe}', ";
      $query .= "Relative_Density_RD_Porce = '{$RelativeDensityRDPorce}', ";

      $query .= "H1_1 = '{$H11}', ";
      $query .= "H1_2 = '{$H12}', ";
      $query .= "H1_3 = '{$H13}', ";
      $query .= "H1_4 = '{$H14}', ";
      $query .= "H1_5 = '{$H15}', ";
      $query .= "H1_6 = '{$H16}', ";
      $query .= "H1_7 = '{$H17}', ";
      $query .= "H1_8 = '{$H18}', ";
      $query .= "H2_1 = '{$H21}', ";
      $query .= "H2_2 = '{$H22}', ";
      $query .= "H2_3 = '{$H23}', ";
      $query .= "H2_4 = '{$H24}', ";
      $query .= "H2_5 = '{$H25}', ";
      $query .= "H2_6 = '{$H26}', ";
      $query .= "H2_7 = '{$H27}', ";
      $query .= "H2_8 = '{$H28}', ";
      $query .= "Head_h_cm_N1 = '{$HeadhcmN1}', ";
      $query .= "Head_h_cm_N2 = '{$HeadhcmN2}', ";
      $query .= "Head_h_cm_N3 = '{$HeadhcmN3}', ";
      $query .= "Head_h_cm_N4 = '{$HeadhcmN4}', ";
      $query .= "Head_h_cm_N5 = '{$HeadhcmN5}', ";
      $query .= "Head_h_cm_N6 = '{$HeadhcmN6}', ";
      $query .= "Head_h_cm_N7 = '{$HeadhcmN7}', ";
      $query .= "Head_h_cm_N8 = '{$HeadhcmN8}', ";
      $query .= "Quantity_of_water_discharged_cm3_N1 = '{$Quantityofwaterdischargedcm3N1}', ";
      $query .= "Quantity_of_water_discharged_cm3_N2 = '{$Quantityofwaterdischargedcm3N2}', ";
      $query .= "Quantity_of_water_discharged_cm3_N3 = '{$Quantityofwaterdischargedcm3N3}', ";
      $query .= "Quantity_of_water_discharged_cm3_N4 = '{$Quantityofwaterdischargedcm3N4}', ";
      $query .= "Quantity_of_water_discharged_cm3_N5 = '{$Quantityofwaterdischargedcm3N5}', ";
      $query .= "Quantity_of_water_discharged_cm3_N6 = '{$Quantityofwaterdischargedcm3N6}', ";
      $query .= "Quantity_of_water_discharged_cm3_N7 = '{$Quantityofwaterdischargedcm3N7}', ";
      $query .= "Quantity_of_water_discharged_cm3_N8 = '{$Quantityofwaterdischargedcm3N8}', ";
      $query .= "Total_time_of_discharge_sec_N1 = '{$TotaltimeofdischargesecN1}', ";
      $query .= "Total_time_of_discharge_sec_N2 = '{$TotaltimeofdischargesecN2}', ";
      $query .= "Total_time_of_discharge_sec_N3 = '{$TotaltimeofdischargesecN3}', ";
      $query .= "Total_time_of_discharge_sec_N4 = '{$TotaltimeofdischargesecN4}', ";
      $query .= "Total_time_of_discharge_sec_N5 = '{$TotaltimeofdischargesecN5}', ";
      $query .= "Total_time_of_discharge_sec_N6 = '{$TotaltimeofdischargesecN6}', ";
      $query .= "Total_time_of_discharge_sec_N7 = '{$TotaltimeofdischargesecN7}', ";
      $query .= "Total_time_of_discharge_sec_N8 = '{$TotaltimeofdischargesecN8}', ";
      $query .= "Q_At_N1 = '{$QAtN1}', ";
      $query .= "Q_At_N2 = '{$QAtN2}', ";
      $query .= "Q_At_N3 = '{$QAtN3}', ";
      $query .= "Q_At_N4 = '{$QAtN4}', ";
      $query .= "Q_At_N5 = '{$QAtN5}', ";
      $query .= "Q_At_N6 = '{$QAtN6}', ";
      $query .= "Q_At_N7 = '{$QAtN7}', ";
      $query .= "Q_At_N8 = '{$QAtN8}', ";
      $query .= "h_L_N1 = '{$hLN1}', ";
      $query .= "h_L_N2 = '{$hLN2}', ";
      $query .= "h_L_N3 = '{$hLN3}', ";
      $query .= "h_L_N4 = '{$hLN4}', ";
      $query .= "h_L_N5 = '{$hLN5}', ";
      $query .= "h_L_N6 = '{$hLN6}', ";
      $query .= "h_L_N7 = '{$hLN7}', ";
      $query .= "h_L_N8 = '{$hLN8}', ";
      $query .= "Temperature_C_N1 = '{$TemperatureCN1}', ";
      $query .= "Temperature_C_N2 = '{$TemperatureCN2}', ";
      $query .= "Temperature_C_N3 = '{$TemperatureCN3}', ";
      $query .= "Temperature_C_N4 = '{$TemperatureCN4}', ";
      $query .= "Temperature_C_N5 = '{$TemperatureCN5}', ";
      $query .= "Temperature_C_N6 = '{$TemperatureCN6}', ";
      $query .= "Temperature_C_N7 = '{$TemperatureCN7}', ";
      $query .= "Temperature_C_N8 = '{$TemperatureCN8}', ";
      $query .= "Coefficient_of_permeability_cm_seg_N1 = '{$CoefficientofpermeabilitycmsegN1}', ";
      $query .= "Coefficient_of_permeability_cm_seg_N2 = '{$CoefficientofpermeabilitycmsegN2}', ";
      $query .= "Coefficient_of_permeability_cm_seg_N3 = '{$CoefficientofpermeabilitycmsegN3}', ";
      $query .= "Coefficient_of_permeability_cm_seg_N4 = '{$CoefficientofpermeabilitycmsegN4}', ";
      $query .= "Coefficient_of_permeability_cm_seg_N5 = '{$CoefficientofpermeabilitycmsegN5}', ";
      $query .= "Coefficient_of_permeability_cm_seg_N6 = '{$CoefficientofpermeabilitycmsegN6}', ";
      $query .= "Coefficient_of_permeability_cm_seg_N7 = '{$CoefficientofpermeabilitycmsegN7}', ";
      $query .= "Coefficient_of_permeability_cm_seg_N8 = '{$CoefficientofpermeabilitycmsegN8}' ";
      
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-Permeability.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-Permeability.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-Permeability.php?id=' . $search_table['id'], false);
    }
  }
?>