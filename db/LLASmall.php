<?php

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['LAASmall'])) {

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
        'SelectedGrading',
        'WeightofTheSpheres',
        'Revolutions',
        'InitialWeight',
        'FinalWeight',
        'WeightLoss',
        'WeightLossPorce'
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

// Componemos la sentencia SQL
$sql = "INSERT INTO los_angeles_abrasion_small (
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
    Weight_Loss_Porce
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
    '$WeightLossPorce'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./laa_small.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./laa_small.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./laa_small.php', false);
  }
}

?>