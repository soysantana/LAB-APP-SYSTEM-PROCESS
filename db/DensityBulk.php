<?php

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['density_bulk'])) {

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
        'Comments',
        'Technician',
        'TestStartDate',
        'Container',
        'WeightTareg',
        'WeightTareSoilg',
        'VolumeTheMoldm3',
        'WeightLooseMaterialg',
        'AbsorptionPorce',
        'SpecificGravityOD',
        'DensityWaterKgm3',
        'LooseBulkDenistyKgm3',
        'PercentVoidsLooseAggregate',
        'CompactedWeightTareg',
        'CompactedWeightTareSoilg',
        'CompactedVolumeTheMoldm3',
        'WeightCompactedMaterialg',
        'CompactedAbsorptionPorce',
        'CompactedSpecificGravityOD',
        'CompactedDensityWaterKgm3',
        'CompactedBulkDenistyKgm3',
        'PercentVoidsCompactedAggregate'
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
    $testype = "Bulk-density";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $PreparationMethod = $db->escape($_POST['PreparationMethod']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $Container = $db->escape($_POST['Container']);
    $WeightTareg = $db->escape($_POST['WeightTareg']);
    $WeightTareSoilg = $db->escape($_POST['WeightTareSoilg']);
    $VolumeTheMoldm3 = $db->escape($_POST['VolumeTheMoldm3']);
    $WeightLooseMaterialg = $db->escape($_POST['WeightLooseMaterialg']);
    $AbsorptionPorce = $db->escape($_POST['AbsorptionPorce']);
    $SpecificGravityOD = $db->escape($_POST['SpecificGravityOD']);
    $DensityWaterKgm3 = $db->escape($_POST['DensityWaterKgm3']);
    $LooseBulkDenistyKgm3 = $db->escape($_POST['LooseBulkDenistyKgm3']);
    $PercentVoidsLooseAggregate = $db->escape($_POST['PercentVoidsLooseAggregate']);
    
    $CompactedWeightTareg = $db->escape($_POST['CompactedWeightTareg']);
    $CompactedWeightTareSoilg = $db->escape($_POST['CompactedWeightTareSoilg']);
    $CompactedVolumeTheMoldm3 = $db->escape($_POST['CompactedVolumeTheMoldm3']);
    $WeightCompactedMaterialg = $db->escape($_POST['WeightCompactedMaterialg']);
    $CompactedAbsorptionPorce = $db->escape($_POST['CompactedAbsorptionPorce']);
    $CompactedSpecificGravityOD = $db->escape($_POST['CompactedSpecificGravityOD']);
    $CompactedDensityWaterKgm3 = $db->escape($_POST['CompactedDensityWaterKgm3']);
    $CompactedBulkDenistyKgm3 = $db->escape($_POST['CompactedBulkDenistyKgm3']);
    $PercentVoidsCompactedAggregate = $db->escape($_POST['PercentVoidsCompactedAggregate']);

// Componemos la sentencia SQL
$sql = "INSERT INTO density_bulk (
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
    Container,
    Weight_Tare_g,
    Weight_Tare_Soil_g,
    Volume_The_Mold_m3,
    Weight_Loose_Material_g,
    Absorption_Porce,
    Specific_Gravity_OD,
    Density_Water_Kgm3,
    Loose_Bulk_Denisty_Kgm3,
    Percent_Voids_Loose_Aggregate,
    Compacted_Weight_Tare_g,
    Compacted_Weight_Tare_Soil_g,
    Compacted_Volume_The_Mold_m3,
    Weight_Compacted_Material_g,
    Compacted_Absorption_Porce,
    Compacted_Specific_Gravity_OD,
    Compacted_Density_Water_Kgm3,
    Compacted_Bulk_Denisty_Kgm3,
    Percent_Voids_Compacted_Aggregate
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
    '$Container',
    '$WeightTareg',
    '$WeightTareSoilg',
    '$VolumeTheMoldm3',
    '$WeightLooseMaterialg',
    '$AbsorptionPorce',
    '$SpecificGravityOD',
    '$DensityWaterKgm3',
    '$LooseBulkDenistyKgm3',
    '$PercentVoidsLooseAggregate',
    '$CompactedWeightTareg',
    '$CompactedWeightTareSoilg',
    '$CompactedVolumeTheMoldm3',
    '$WeightCompactedMaterialg',
    '$CompactedAbsorptionPorce',
    '$CompactedSpecificGravityOD',
    '$CompactedDensityWaterKgm3',
    '$CompactedBulkDenistyKgm3',
    '$PercentVoidsCompactedAggregate'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./density_bulk.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./density_bulk.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./density_bulk.php', false);
  }
}

?>