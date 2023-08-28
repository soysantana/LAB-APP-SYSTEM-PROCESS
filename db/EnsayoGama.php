<?php

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
        'PreparationMethod',
        'Comments',
        'Technician',
        'TestStartDate',
        'Station',
        'MaxDryDensityKgm3',
        'MaxWetDensityKgm3',
        'PercentMoistureContent',
        'OptimunMoistureContent',
        'MaxDryDensity',
        'PercentofCompaction'
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
    Percent_of_Compaction
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
    '$PercentofCompaction'
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