<?php

$user = current_user();

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

    $RegisterBy = $user['name'];

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
    Operator_5,
    Registered_By
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
    '$Operator5',
    '$RegisterBy'
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

<?php
$search_table = find_by_id('count_gama', (int)$_GET['id']);
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

      $RegisterBy = $user['name'];

      $query = "UPDATE count_gama SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Date_Count_1 = '{$DateCount1}', ";
      $query .= "Date_Count_2 = '{$DateCount2}', ";
      $query .= "Date_Count_3 = '{$DateCount3}', ";
      $query .= "Date_Count_4 = '{$DateCount4}', ";
      $query .= "Date_Count_5 = '{$DateCount5}', ";
      $query .= "Value_Count_1 = '{$ValueCount1}', ";
      $query .= "Value_Count_2 = '{$ValueCount2}', ";
      $query .= "Value_Count_3 = '{$ValueCount3}', ";
      $query .= "Value_Count_4 = '{$ValueCount4}', ";
      $query .= "Value_Count_5 = '{$ValueCount5}', ";
      $query .= "Rank_Date_1 = '{$RankDate1}', ";
      $query .= "Rank_Date_2 = '{$RankDate2}', ";
      $query .= "Rank_Date_3 = '{$RankDate3}', ";
      $query .= "Rank_Date_4 = '{$RankDate4}', ";
      $query .= "Rank_Date_5 = '{$RankDate5}', ";
      $query .= "Operator_1 = '{$Operator1}', ";
      $query .= "Operator_2 = '{$Operator2}', ";
      $query .= "Operator_3 = '{$Operator3}', ";
      $query .= "Operator_4 = '{$Operator4}', ";
      $query .= "Operator_5 = '{$Operator5}', ";

      $query .= "Registered_By = '{$RegisterBy}' ";
      
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-Density-Count-Gama.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-Density-Count-Gama.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-Density-Count-Gama.php?id=' . $search_table['id'], false);
    }
  }
?>