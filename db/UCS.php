<?php

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['UCS'])) {

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
        'DimensionDcm',
        'DimensionHcm',
        'RelationhD',
        'Aream2',
        'Volumem3',
        'WeightCoreKg',
        'UnitWeightCorekgm3',
        'FailureLoandKN',
        'TestTimingS',
        'LoadProportionMpas',
        'uniaxialCompressiveStrenghtMpa'
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
    $testype = "UCS";
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

    $DimensionDcm = $db->escape($_POST['DimensionDcm']);
    $DimensionHcm = $db->escape($_POST['DimensionHcm']);
    $RelationhD = $db->escape($_POST['RelationhD']);
    $Aream2 = $db->escape($_POST['Aream2']);
    $Volumem3 = $db->escape($_POST['Volumem3']);
    $WeightCoreKg = $db->escape($_POST['WeightCoreKg']);
    $UnitWeightCorekgm3 = $db->escape($_POST['UnitWeightCorekgm3']);
    $FailureLoandKN = $db->escape($_POST['FailureLoandKN']);
    $TestTimingS = $db->escape($_POST['TestTimingS']);
    $LoadProportionMpas = $db->escape($_POST['LoadProportionMpas']);
    $uniaxialCompressiveStrenghtMpa = $db->escape($_POST['uniaxialCompressiveStrenghtMpa']);

// Componemos la sentencia SQL
$sql = "INSERT INTO uniaxial_compressive_strength (
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
    Comments,
    Technician,
    Test_Start_Date,
    Dimension_D_cm,
    Dimension_H_cm,
    Relation_hD,
    Area_m2,
    Volume_m3,
    Weight_Core_Kg,
    Unit_Weight_Core_kgm3,
    Failure_Loand_KN,
    Test_Timing_S,
    Load_Proportion_Mpas,
    uniaxial_Compressive_Strenght_Mpa
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
    '$Comments',
    '$Technician',
    '$TestStartDate',
    '$DimensionDcm',
    '$DimensionHcm',
    '$RelationhD',
    '$Aream2',
    '$Volumem3',
    '$WeightCoreKg',
    '$UnitWeightCorekgm3',
    '$FailureLoandKN',
    '$TestTimingS',
    '$LoadProportionMpas',
    '$uniaxialCompressiveStrenghtMpa'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./UCS.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./UCS.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./UCS.php', false);
  }
}

?>