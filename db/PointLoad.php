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
    Test_Start_Date
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
    '$TestStartDate'
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