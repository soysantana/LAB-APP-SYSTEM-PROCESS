<?php

$user = current_user();

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['SgAbsortion'])) {

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
    $testype = "SG-Absortion";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $PreparationMethod = $db->escape($_POST['PreparationMethod']);
    $SplitMethod = $db->escape($_POST['SplitMethod']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $Inch5Wt1 = $db->escape($_POST['Inch5Wt1']);
    $Inch5Wt2 = $db->escape($_POST['Inch5Wt2']);
    $Inch5Wt3 = $db->escape($_POST['Inch5Wt3']);
    $Inch4Wt1 = $db->escape($_POST['Inch4Wt1']);
    $Inch4Wt2 = $db->escape($_POST['Inch4Wt2']);
    $Inch4Wt3 = $db->escape($_POST['Inch4Wt3']);
    $Inch3p5Wt1 = $db->escape($_POST['Inch3p5Wt1']);
    $Inch3p5Wt2 = $db->escape($_POST['Inch3p5Wt2']);
    $Inch3p5Wt3 = $db->escape($_POST['Inch3p5Wt3']);
    $Inch3Wt1 = $db->escape($_POST['Inch3Wt1']);
    $Inch3Wt2 = $db->escape($_POST['Inch3Wt2']);
    $Inch3Wt3 = $db->escape($_POST['Inch3Wt3']);
    $Inch2p5Wt1 = $db->escape($_POST['Inch2p5Wt1']);
    $Inch2p5Wt2 = $db->escape($_POST['Inch2p5Wt2']);
    $Inch2p5Wt3 = $db->escape($_POST['Inch2p5Wt3']);
    $Inch2Wt1 = $db->escape($_POST['Inch2Wt1']);
    $Inch2Wt2 = $db->escape($_POST['Inch2Wt2']);
    $Inch2Wt3 = $db->escape($_POST['Inch2Wt3']);
    $Inch1p5Wt1 = $db->escape($_POST['Inch1p5Wt1']);
    $Inch1p5Wt2 = $db->escape($_POST['Inch1p5Wt2']);
    $Inch1p5Wt3 = $db->escape($_POST['Inch1p5Wt3']);
    $Inch1Wt1 = $db->escape($_POST['Inch1Wt1']);
    $Inch1Wt2 = $db->escape($_POST['Inch1Wt2']);
    $Inch1Wt3 = $db->escape($_POST['Inch1Wt3']);
    $Inch3p4Wt1 = $db->escape($_POST['Inch3p4Wt1']);
    $Inch3p4Wt2 = $db->escape($_POST['Inch3p4Wt2']);
    $Inch3p4Wt3 = $db->escape($_POST['Inch3p4Wt3']);
    $Inch1p2Wt1 = $db->escape($_POST['Inch1p2Wt1']);
    $Inch1p2Wt2 = $db->escape($_POST['Inch1p2Wt2']);
    $Inch1p2Wt3 = $db->escape($_POST['Inch1p2Wt3']);
    $Inch3p8Wt1 = $db->escape($_POST['Inch3p8Wt1']);
    $Inch3p8Wt2 = $db->escape($_POST['Inch3p8Wt2']);
    $Inch3p8Wt3 = $db->escape($_POST['Inch3p8Wt3']);
    $InchNo4Wt1 = $db->escape($_POST['InchNo4Wt1']);
    $InchNo4Wt2 = $db->escape($_POST['InchNo4Wt2']);
    $InchNo4Wt3 = $db->escape($_POST['InchNo4Wt3']);
    $InchTotalWt1 = $db->escape($_POST['InchTotalWt1']);
    $InchTotalWt2 = $db->escape($_POST['InchTotalWt2']);
    $InchTotalWt3 = $db->escape($_POST['InchTotalWt3']);
    $SpecificGravityOD = $db->escape($_POST['SpecificGravityOD']);
    $SpecificGravitySSD = $db->escape($_POST['SpecificGravitySSD']);
    $ApparentSpecificGravity = $db->escape($_POST['ApparentSpecificGravity']);
    $PercentAbsortion = $db->escape($_POST['PercentAbsortion']);

    $RegisterBy = $user['name'];


// Componemos la sentencia SQL
$sql = "INSERT INTO specific_gravity_absortion (
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
    Inch5_Wt1,
    Inch5_Wt2,
    Inch5_Wt3,
    Inch4_Wt1,
    Inch4_Wt2,
    Inch4_Wt3,
    Inch3p5_Wt1,
    Inch3p5_Wt2,
    Inch3p5_Wt3,
    Inch3_Wt1,
    Inch3_Wt2,
    Inch3_Wt3,
    Inch2p5_Wt1,
    Inch2p5_Wt2,
    Inch2p5_Wt3,
    Inch2_Wt1,
    Inch2_Wt2,
    Inch2_Wt3,
    Inch1p5_Wt1,
    Inch1p5_Wt2,
    Inch1p5_Wt3,
    Inch1_Wt1,
    Inch1_Wt2,
    Inch1_Wt3,
    Inch3p4_Wt1,
    Inch3p4_Wt2,
    Inch3p4_Wt3,
    Inch1p2_Wt1,
    Inch1p2_Wt2,
    Inch1p2_Wt3,
    Inch3p8_Wt1,
    Inch3p8_Wt2,
    Inch3p8_Wt3,
    InchNo4_Wt1,
    InchNo4_Wt2,
    InchNo4_Wt3,
    InchTotal_Wt1,
    InchTotal_Wt2,
    InchTotal_Wt3,
    Specific_Gravity_OD,
    Specific_Gravity_SSD,
    Apparent_Specific_Gravity,
    Percent_Absortion,
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
    '$SplitMethod',
    '$Comments',
    '$Technician',
    '$TestStartDate',
    '$Inch5Wt1',
    '$Inch5Wt2',
    '$Inch5Wt3',
    '$Inch4Wt1',
    '$Inch4Wt2',
    '$Inch4Wt3',
    '$Inch3p5Wt1',
    '$Inch3p5Wt2',
    '$Inch3p5Wt3',
    '$Inch3Wt1',
    '$Inch3Wt2',
    '$Inch3Wt3',
    '$Inch2p5Wt1',
    '$Inch2p5Wt2',
    '$Inch2p5Wt3',
    '$Inch2Wt1',
    '$Inch2Wt2',
    '$Inch2Wt3',
    '$Inch1p5Wt1',
    '$Inch1p5Wt2',
    '$Inch1p5Wt3',
    '$Inch1Wt1',
    '$Inch1Wt2',
    '$Inch1Wt3',
    '$Inch3p4Wt1',
    '$Inch3p4Wt2',
    '$Inch3p4Wt3',
    '$Inch1p2Wt1',
    '$Inch1p2Wt2',
    '$Inch1p2Wt3',
    '$Inch3p8Wt1',
    '$Inch3p8Wt2',
    '$Inch3p8Wt3',
    '$InchNo4Wt1',
    '$InchNo4Wt2',
    '$InchNo4Wt3',
    '$InchTotalWt1',
    '$InchTotalWt2',
    '$InchTotalWt3',
    '$SpecificGravityOD',
    '$SpecificGravitySSD',
    '$ApparentSpecificGravity',
    '$PercentAbsortion',
    '$RegisterBy'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./sg_absortion.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./sg_absortion.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./sg_absortion.php', false);
  }
}

?>

<?php
$search_table = find_by_id('specific_gravity_absortion', (int)$_GET['id']);
  // Verifica si se ha enviado el formulario
  if (isset($_POST['update_muestra'])) {
    $req_fields = array(
      'Standard'
    );
    
    // Valida los campos requeridos
    validate_fields($req_fields);

    if (empty($errors)) {
      // Obtiene los valores de los campos del formulario
      $Standard = remove_junk($db->escape($_POST['Standard']));
      $PreparationMethod = remove_junk($db->escape($_POST['PreparationMethod']));
      $SplitMethod = remove_junk($db->escape($_POST['SplitMethod']));
      $Comments = remove_junk($db->escape($_POST['Comments']));
      $Technician = remove_junk($db->escape($_POST['Technician']));
      $TestStartDate = remove_junk($db->escape($_POST['TestStartDate']));
  
      $Inch5Wt1 = remove_junk($db->escape($_POST['Inch5Wt1']));
      $Inch5Wt2 = remove_junk($db->escape($_POST['Inch5Wt2']));
      $Inch5Wt3 = remove_junk($db->escape($_POST['Inch5Wt3']));
      $Inch4Wt1 = remove_junk($db->escape($_POST['Inch4Wt1']));
      $Inch4Wt2 = remove_junk($db->escape($_POST['Inch4Wt2']));
      $Inch4Wt3 = remove_junk($db->escape($_POST['Inch4Wt3']));
      $Inch3p5Wt1 = remove_junk($db->escape($_POST['Inch3p5Wt1']));
      $Inch3p5Wt2 = remove_junk($db->escape($_POST['Inch3p5Wt2']));
      $Inch3p5Wt3 = remove_junk($db->escape($_POST['Inch3p5Wt3']));
      $Inch3Wt1 = remove_junk($db->escape($_POST['Inch3Wt1']));
      $Inch3Wt2 = remove_junk($db->escape($_POST['Inch3Wt2']));
      $Inch3Wt3 = remove_junk($db->escape($_POST['Inch3Wt3']));
      $Inch2p5Wt1 = remove_junk($db->escape($_POST['Inch2p5Wt1']));
      $Inch2p5Wt2 = remove_junk($db->escape($_POST['Inch2p5Wt2']));
      $Inch2p5Wt3 = remove_junk($db->escape($_POST['Inch2p5Wt3']));
      $Inch2Wt1 = remove_junk($db->escape($_POST['Inch2Wt1']));
      $Inch2Wt2 = remove_junk($db->escape($_POST['Inch2Wt2']));
      $Inch2Wt3 = remove_junk($db->escape($_POST['Inch2Wt3']));
      $Inch1p5Wt1 = remove_junk($db->escape($_POST['Inch1p5Wt1']));
      $Inch1p5Wt2 = remove_junk($db->escape($_POST['Inch1p5Wt2']));
      $Inch1p5Wt3 = remove_junk($db->escape($_POST['Inch1p5Wt3']));
      $Inch1Wt1 = remove_junk($db->escape($_POST['Inch1Wt1']));
      $Inch1Wt2 = remove_junk($db->escape($_POST['Inch1Wt2']));
      $Inch1Wt3 = remove_junk($db->escape($_POST['Inch1Wt3']));
      $Inch3p4Wt1 = remove_junk($db->escape($_POST['Inch3p4Wt1']));
      $Inch3p4Wt2 = remove_junk($db->escape($_POST['Inch3p4Wt2']));
      $Inch3p4Wt3 = remove_junk($db->escape($_POST['Inch3p4Wt3']));
      $Inch1p2Wt1 = remove_junk($db->escape($_POST['Inch1p2Wt1']));
      $Inch1p2Wt2 = remove_junk($db->escape($_POST['Inch1p2Wt2']));
      $Inch1p2Wt3 = remove_junk($db->escape($_POST['Inch1p2Wt3']));
      $Inch3p8Wt1 = remove_junk($db->escape($_POST['Inch3p8Wt1']));
      $Inch3p8Wt2 = remove_junk($db->escape($_POST['Inch3p8Wt2']));
      $Inch3p8Wt3 = remove_junk($db->escape($_POST['Inch3p8Wt3']));
      $InchNo4Wt1 = remove_junk($db->escape($_POST['InchNo4Wt1']));
      $InchNo4Wt2 = remove_junk($db->escape($_POST['InchNo4Wt2']));
      $InchNo4Wt3 = remove_junk($db->escape($_POST['InchNo4Wt3']));
      $InchTotalWt1 = remove_junk($db->escape($_POST['InchTotalWt1']));
      $InchTotalWt2 = remove_junk($db->escape($_POST['InchTotalWt2']));
      $InchTotalWt3 = remove_junk($db->escape($_POST['InchTotalWt3']));
      $SpecificGravityOD = remove_junk($db->escape($_POST['SpecificGravityOD']));
      $SpecificGravitySSD = remove_junk($db->escape($_POST['SpecificGravitySSD']));
      $ApparentSpecificGravity = remove_junk($db->escape($_POST['ApparentSpecificGravity']));
      $PercentAbsortion = remove_junk($db->escape($_POST['PercentAbsortion']));

      $RegisterBy = $user['name'];

      $query = "UPDATE specific_gravity_absortion SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Split_Method = '{$SplitMethod}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Inch5_Wt1 = '{$Inch5Wt1}', ";
      $query .= "Inch5_Wt2 = '{$Inch5Wt2}', ";
      $query .= "Inch5_Wt3 = '{$Inch5Wt3}', ";
      $query .= "Inch4_Wt1 = '{$Inch4Wt1}', ";
      $query .= "Inch4_Wt2 = '{$Inch4Wt2}', ";
      $query .= "Inch4_Wt3 = '{$Inch4Wt3}', ";
      $query .= "Inch3p5_Wt1 = '{$Inch3p5Wt1}', ";
      $query .= "Inch3p5_Wt2 = '{$Inch3p5Wt2}', ";
      $query .= "Inch3p5_Wt3 = '{$Inch3p5Wt3}', ";
      $query .= "Inch3_Wt1 = '{$Inch3Wt1}', ";
      $query .= "Inch3_Wt2 = '{$Inch3Wt2}', ";
      $query .= "Inch3_Wt3 = '{$Inch3Wt3}', ";
      $query .= "Inch2p5_Wt1 = '{$Inch2p5Wt1}', ";
      $query .= "Inch2p5_Wt2 = '{$Inch2p5Wt2}', ";
      $query .= "Inch2p5_Wt3 = '{$Inch2p5Wt3}', ";
      $query .= "Inch2_Wt1 = '{$Inch2Wt1}', ";
      $query .= "Inch2_Wt2 = '{$Inch2Wt2}', ";
      $query .= "Inch2_Wt3 = '{$Inch2Wt3}', ";
      $query .= "Inch1p5_Wt1 = '{$Inch1p5Wt1}', ";
      $query .= "Inch1p5_Wt2 = '{$Inch1p5Wt2}', ";
      $query .= "Inch1p5_Wt3 = '{$Inch1p5Wt3}', ";
      $query .= "Inch1_Wt1 = '{$Inch1Wt1}', ";
      $query .= "Inch1_Wt2 = '{$Inch1Wt2}', ";
      $query .= "Inch1_Wt3 = '{$Inch1Wt3}', ";
      $query .= "Inch3p4_Wt1 = '{$Inch3p4Wt1}', ";
      $query .= "Inch3p4_Wt2 = '{$Inch3p4Wt2}', ";
      $query .= "Inch3p4_Wt3 = '{$Inch3p4Wt3}', ";
      $query .= "Inch1p2_Wt1 = '{$Inch1p2Wt1}', ";
      $query .= "Inch1p2_Wt2 = '{$Inch1p2Wt2}', ";
      $query .= "Inch1p2_Wt3 = '{$Inch1p2Wt3}', ";
      $query .= "Inch3p8_Wt1 = '{$Inch3p8Wt1}', ";
      $query .= "Inch3p8_Wt2 = '{$Inch3p8Wt2}', ";
      $query .= "Inch3p8_Wt3 = '{$Inch3p8Wt3}', ";
      $query .= "InchNo4_Wt1 = '{$InchNo4Wt1}', ";
      $query .= "InchNo4_Wt2 = '{$InchNo4Wt2}', ";
      $query .= "InchNo4_Wt3 = '{$InchNo4Wt3}', ";
      $query .= "InchTotal_Wt1 = '{$InchTotalWt1}', ";
      $query .= "InchTotal_Wt2 = '{$InchTotalWt2}', ";
      $query .= "InchTotal_Wt3 = '{$InchTotalWt3}', ";

      $query .= "Specific_Gravity_OD = '{$SpecificGravityOD}', ";
      $query .= "Specific_Gravity_SSD = '{$SpecificGravitySSD}', ";
      $query .= "Apparent_Specific_Gravity = '{$ApparentSpecificGravity}', ";
      $query .= "Percent_Absortion = '{$PercentAbsortion}', ";

      $query .= "Registered_By = '{$RegisterBy}' ";

      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-SG-Absortion.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-SG-Absortion.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-SG-Absortion.php?id=' . $search_table['id'], false);
    }
  }
?>

<?php
// Verifica si se ha hecho clic en el botón "repetir"
if (isset($_POST['repetir_muestra'])) {
    // Obtén el ID de la muestra específica
    $search_table = (int)$_GET['id'];
    $reportdate = make_date();

    // Consulta para obtener los datos de la muestra específica
    $query_select = "SELECT * FROM specific_gravity_absortion WHERE id = '{$search_table}'";
    $result_select = $db->query($query_select);

    if ($result_select && $db->num_rows($result_select) == 1) {
        $search_table_data = $db->fetch_assoc($result_select);

        // Verifica si ya existe una fila con los mismos Sample_ID, Sample_Number y Test_Type
        $query_check_existence = "SELECT COUNT(*) as count FROM ensayo_en_repeticion WHERE Sample_ID = '{$search_table_data['Sample_ID']}' AND Sample_Number = '{$search_table_data['Sample_Number']}' AND Test_Type = '{$search_table_data['test_type']}'";
        $result_check_existence = $db->query($query_check_existence);
        $existence_data = $db->fetch_assoc($result_check_existence);

        if ($existence_data['count'] > 0) {
            // Ya existe una fila con los mismos Sample_ID, Sample_Number y Test_Type
            $session->msg('d', 'No se puede repetir la muestra porque ya existe una fila con los mismos Sample_ID, Sample_Number y Test_Type.');
            redirect('repiteEnsayo.php', false);
        } else {
            // Inserta los datos en la tabla "ensayo_en_repeticion"
            $query_insert = "INSERT INTO ensayo_en_repeticion (Sample_ID, Sample_Number, Test_Type, Tecnico, Fecha_Inicio) VALUES ";
            $query_insert .= "('{$search_table_data['Sample_ID']}', '{$search_table_data['Sample_Number']}', '{$search_table_data['test_type']}', '{$search_table_data['Technician']}', '{$reportdate}')";

            $result_insert = $db->query($query_insert);

            if ($result_insert && $db->affected_rows() === 1) {
                $session->msg('s', 'Muestra repetida con éxito.');
                redirect('repiteEnsayo.php', false);
            } else {
                $session->msg('d', 'Error al repetir la muestra.');
                redirect('repiteEnsayo.php', false);
            }
        }
    } else {
        $session->msg('d', 'Error al obtener datos de la muestra específica.');
        redirect('repiteEnsayo.php', false);
    }
}
?>