<?php

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['CountGama'])) {

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
        'DateCount1',
        'DateCount2',
        'DateCount3',
        'DateCount4',
        'DateCount5',
        'ValueCount1',
        'ValueCount2',
        'ValueCount3',
        'ValueCount4',
        'ValueCount5',
        'RankDate1',
        'RankDate2',
        'RankDate3',
        'RankDate4',
        'RankDate5',
        'Operator1',
        'Operator2',
        'Operator3',
        'Operator4',
        'Operator5'
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
    $testype = "Count-gamma";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $PreparationMethod = $db->escape($_POST['PreparationMethod']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $DateCount1  = $db->escape($_POST['DateCount1']);
    $DateCount2  = $db->escape($_POST['DateCount2']);
    $DateCount3 = $db->escape($_POST['DateCount3']);
    $DateCount4 = $db->escape($_POST['DateCount4']);
    $DateCount5 = $db->escape($_POST['DateCount5']);
    $ValueCount1 = $db->escape($_POST['ValueCount1']);
    $ValueCount2 = $db->escape($_POST['ValueCount2']);
    $ValueCount3 = $db->escape($_POST['ValueCount3']);
    $ValueCount4 = $db->escape($_POST['ValueCount4']);
    $ValueCount5 = $db->escape($_POST['ValueCount5']);
    $RankDate1 = $db->escape($_POST['RankDate1']);
    $RankDate2 = $db->escape($_POST['RankDate2']);
    $RankDate3 = $db->escape($_POST['RankDate3']);
    $RankDate4 = $db->escape($_POST['RankDate4']);
    $RankDate5 = $db->escape($_POST['RankDate5']);
    $Operator1 = $db->escape($_POST['Operator1']);
    $Operator2 = $db->escape($_POST['Operator2']);
    $Operator3 = $db->escape($_POST['Operator3']);
    $Operator4 = $db->escape($_POST['Operator4']);
    $Operator5 = $db->escape($_POST['Operator5']);

// Componemos la sentencia SQL
$sql = "INSERT INTO count_gama (
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
    Date_Count_1,
    Date_Count_2,
    Date_Count_3,
    Date_Count_4,
    Date_Count_5,
    Value_Count_1,
    Value_Count_2,
    Value_Count_3,
    Value_Count_4,
    Value_Count_5,
    Rank_Date_1,
    Rank_Date_2,
    Rank_Date_3,
    Rank_Date_4,
    Rank_Date_5,
    Operator_1,
    Operator_2,
    Operator_3,
    Operator_4,
    Operator_5
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
    '$DateCount1',
    '$DateCount2',
    '$DateCount3',
    '$DateCount4',
    '$DateCount5',
    '$ValueCount1',
    '$ValueCount2',
    '$ValueCount3',
    '$ValueCount4',
    '$ValueCount5',
    '$RankDate1',
    '$RankDate2',
    '$RankDate3',
    '$RankDate4',
    '$RankDate5',
    '$Operator1',
    '$Operator2',
    '$Operator3',
    '$Operator4',
    '$Operator5'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./conteo_gama.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./conteo_gama.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./conteo_gama.php', false);
  }
}

?>