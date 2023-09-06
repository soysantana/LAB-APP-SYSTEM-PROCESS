<?php

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['LeebHardness'])) {

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
        'Sample',
        'Depthm',
        'LeebHardnessNumber1',
        'LeebHardnessNumber2',
        'LeebHardnessNumber3',
        'LeebHardnessNumber4',
        'LeebHardnessNumber5',
        'LeebHardnessNumber6',
        'LeebHardnessNumber7',
        'LeebHardnessNumber8',
        'LeebHardnessNumber9',
        'LeebHardnessNumber10',
        'Average'
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
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $Sample = $db->escape($_POST['Sample']);
    $Depthm = $db->escape($_POST['Depthm']);
    $LeebHardnessNumber1 = $db->escape($_POST['LeebHardnessNumber1']);
    $LeebHardnessNumber2 = $db->escape($_POST['LeebHardnessNumber2']);
    $LeebHardnessNumber3 = $db->escape($_POST['LeebHardnessNumber3']);
    $LeebHardnessNumber4 = $db->escape($_POST['LeebHardnessNumber4']);
    $LeebHardnessNumber5 = $db->escape($_POST['LeebHardnessNumber5']);
    $LeebHardnessNumber6 = $db->escape($_POST['LeebHardnessNumber6']);
    $LeebHardnessNumber7 = $db->escape($_POST['LeebHardnessNumber7']);
    $LeebHardnessNumber8 = $db->escape($_POST['LeebHardnessNumber8']);
    $LeebHardnessNumber9 = $db->escape($_POST['LeebHardnessNumber9']);
    $LeebHardnessNumber10 = $db->escape($_POST['LeebHardnessNumber10']);
    $Average = $db->escape($_POST['Average']);

// Componemos la sentencia SQL
$sql = "INSERT INTO leeb_hardness (
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
    Sample,
    Depth_m,
    Leeb_Hardness_Number1,
    Leeb_Hardness_Number2,
    Leeb_Hardness_Number3,
    Leeb_Hardness_Number4,
    Leeb_Hardness_Number5,
    Leeb_Hardness_Number6,
    Leeb_Hardness_Number7,
    Leeb_Hardness_Number8,
    Leeb_Hardness_Number9,
    Leeb_Hardness_Number10,
    Average
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
    '$Sample',
    '$Depthm',
    '$LeebHardnessNumber1',
    '$LeebHardnessNumber2',
    '$LeebHardnessNumber3',
    '$LeebHardnessNumber4',
    '$LeebHardnessNumber5',
    '$LeebHardnessNumber6',
    '$LeebHardnessNumber7',
    '$LeebHardnessNumber8',
    '$LeebHardnessNumber9',
    '$LeebHardnessNumber10',
    '$Average'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./leeb_hardness.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./leeb_hardness.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./leeb_hardness.php', false);
  }
}

?>