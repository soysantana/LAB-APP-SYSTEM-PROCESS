<?php

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['PointLoad'])) {

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
        'ExtraEquip',
        'CutterEquip',
        'TestDevice',
        'Temperature',
        'Comments',
        'Technician',
        'TestStartDate',
        'EffectiveAreaofJackPistonm2',
        'K1ValueAssumedValueToCorrelateIs50ToUCS',
        'K2ValueAssumed',
        'TestTypeABCD',
        'DimensionLmm',
        'DimensionDorWmm',
        'PlattensSeparationmm',
        'LoadDirection',
        'GaugeReadingMpa',
        'FailureLaodMN',
        'Demm',
        'IsMpa',
        'F',
        'Is50',
        'UCSFromK1Mpa',
        'UCSFromK2Mpa',
        'StrenghtClassification'
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
    $testype = "NOSE";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $Method = $db->escape($_POST['Method']);
    $ExtraEquip = $db->escape($_POST['ExtraEquip']);
    $CutterEquip = $db->escape($_POST['CutterEquip']);
    $TestDevice = $db->escape($_POST['TestDevice']);
    $Temperature = $db->escape($_POST['Temperature']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $EffectiveAreaofJackPistonm2 = $db->escape($_POST['EffectiveAreaofJackPistonm2']);
    $K1ValueAssumedValueToCorrelateIs50ToUCS = $db->escape($_POST['K1ValueAssumedValueToCorrelateIs50ToUCS']);
    $K2ValueAssumed = $db->escape($_POST['K2ValueAssumed']);
    $TestTypeABCD = $db->escape($_POST['TestTypeABCD']);
    $DimensionLmm = $db->escape($_POST['DimensionLmm']);
    $DimensionDorWmm = $db->escape($_POST['DimensionDorWmm']);
    $PlattensSeparationmm = $db->escape($_POST['PlattensSeparationmm']);
    $LoadDirection = $db->escape($_POST['LoadDirection']);
    $GaugeReadingMpa = $db->escape($_POST['GaugeReadingMpa']);
    $FailureLaodMN = $db->escape($_POST['FailureLaodMN']);
    $Demm = $db->escape($_POST['Demm']);
    $IsMpa = $db->escape($_POST['IsMpa']);
    $F = $db->escape($_POST['F']);
    $Is50 = $db->escape($_POST['Is50']);
    $UCSFromK1Mpa = $db->escape($_POST['UCSFromK1Mpa']);
    $UCSFromK2Mpa = $db->escape($_POST['UCSFromK2Mpa']);
    $StrenghtClassification = $db->escape($_POST['StrenghtClassification']);

// Componemos la sentencia SQL
$sql = "INSERT INTO point_load_test (
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
    Extraction_Equipment,
    Cutter_Equipment,
    Test_Device,
    Temperature,
    Comments,
    Technician,
    Test_Start_Date,
    Effective_Area_of_Jack_Piston_m2,
    K1_Value_Assumed_Value_To_Correlate_Is50_To_UCS,
    K2_Value_Assumed,
    Test_Type_A_B_C_D,
    Dimension_L_mm,
    Dimension_D_or_W_mm,
    Plattens_Separation_mm,
    Load_Direction,
    Gauge_Reading_Mpa,
    Failure_Laod_MN,
    De_mm,
    Is_Mpa,
    F,
    Is_50,
    UCS_From_K1_Mpa,
    UCS_From_K2_Mpa,
    Strenght_Classification
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
    '$ExtraEquip',
    '$CutterEquip',
    '$TestDevice',
    '$Temperature',
    '$Comments',
    '$Technician',
    '$TestStartDate',
    '$EffectiveAreaofJackPistonm2',
    '$K1ValueAssumedValueToCorrelateIs50ToUCS',
    '$K2ValueAssumed',
    '$TestTypeABCD',
    '$DimensionLmm',
    '$DimensionDorWmm',
    '$PlattensSeparationmm',
    '$LoadDirection',
    '$GaugeReadingMpa',
    '$FailureLaodMN',
    '$Demm',
    '$IsMpa',
    '$F',
    '$Is50',
    '$UCSFromK1Mpa',
    '$UCSFromK2Mpa',
    '$StrenghtClassification'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./PLT.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./PLT.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./PLT.php', false);
  }
}

?>