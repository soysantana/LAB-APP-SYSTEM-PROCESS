<?php

$user = current_user();

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
    $testype = "PLT";
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

    $RegisterBy = $user['name'];

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
    Strenght_Classification,
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
    '$StrenghtClassification',
    '$RegisterBy'
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
      $Method = remove_junk($db->escape($_POST['Method']));
      $ExtraEquip = remove_junk($db->escape($_POST['ExtraEquip']));
      $CutterEquip = remove_junk($db->escape($_POST['CutterEquip']));
      $TestDevice = remove_junk($db->escape($_POST['TestDevice']));
      $Temperature = remove_junk($db->escape($_POST['Temperature']));
      $Comments = remove_junk($db->escape($_POST['Comments']));
      $Technician = remove_junk($db->escape($_POST['Technician']));
      $TestStartDate = remove_junk($db->escape($_POST['TestStartDate']));
  
      $EffectiveAreaofJackPistonm2 = remove_junk($db->escape($_POST['EffectiveAreaofJackPistonm2']));
      $K1ValueAssumedValueToCorrelateIs50ToUCS = remove_junk($db->escape($_POST['K1ValueAssumedValueToCorrelateIs50ToUCS']));
      $K2ValueAssumed = remove_junk($db->escape($_POST['K2ValueAssumed']));
      $TestTypeABCD = remove_junk($db->escape($_POST['TestTypeABCD']));
      $DimensionLmm = remove_junk($db->escape($_POST['DimensionLmm']));
      $DimensionDorWmm = remove_junk($db->escape($_POST['DimensionDorWmm']));
      $PlattensSeparationmm = remove_junk($db->escape($_POST['PlattensSeparationmm']));
      $LoadDirection = remove_junk($db->escape($_POST['LoadDirection']));
      $GaugeReadingMpa = remove_junk($db->escape($_POST['GaugeReadingMpa']));
      $FailureLaodMN = remove_junk($db->escape($_POST['FailureLaodMN']));
      $Demm = remove_junk($db->escape($_POST['Demm']));
      $IsMpa = remove_junk($db->escape($_POST['IsMpa']));
      $F = remove_junk($db->escape($_POST['F']));
      $Is50 = remove_junk($db->escape($_POST['Is50']));
      $UCSFromK1Mpa = remove_junk($db->escape($_POST['UCSFromK1Mpa']));
      $UCSFromK2Mpa = remove_junk($db->escape($_POST['UCSFromK2Mpa']));
      $StrenghtClassification = remove_junk($db->escape($_POST['StrenghtClassification']));

      $RegisterBy = $user['name'];

      $query = "UPDATE point_load_test SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Method = '{$Method}', ";
      $query .= "Extraction_Equipment = '{$ExtraEquip}', ";
      $query .= "Cutter_Equipment = '{$CutterEquip}', ";
      $query .= "Test_Device = '{$TestDevice}', ";
      $query .= "Temperature = '{$Temperature}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Effective_Area_of_Jack_Piston_m2 = '{$EffectiveAreaofJackPistonm2}', ";
      $query .= "K1_Value_Assumed_Value_To_Correlate_Is50_To_UCS = '{$K1ValueAssumedValueToCorrelateIs50ToUCS}', ";
      $query .= "K2_Value_Assumed = '{$K2ValueAssumed}', ";
      $query .= "Test_Type_A_B_C_D = '{$TestTypeABCD}', ";
      $query .= "Dimension_L_mm = '{$DimensionLmm}', ";
      $query .= "Dimension_D_or_W_mm = '{$DimensionDorWmm}', ";
      $query .= "Plattens_Separation_mm = '{$PlattensSeparationmm}', ";
      $query .= "Load_Direction = '{$LoadDirection}', ";
      $query .= "Gauge_Reading_Mpa = '{$GaugeReadingMpa}', ";
      $query .= "Failure_Laod_MN = '{$FailureLaodMN}', ";
      $query .= "De_mm = '{$Demm}', ";
      $query .= "Is_Mpa = '{$IsMpa}', ";
      $query .= "F = '{$F}', ";
      $query .= "Is_50 = '{$Is50}', ";
      $query .= "UCS_From_K1_Mpa = '{$UCSFromK1Mpa}', ";
      $query .= "UCS_From_K2_Mpa = '{$UCSFromK2Mpa}', ";
      $query .= "Strenght_Classification = '{$StrenghtClassification}', ";

      $query .= "Registered_By = '{$RegisterBy}' ";
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-PLT.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-PLT.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-PLT.php?id=' . $search_table['id'], false);
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
    $query_select = "SELECT * FROM point_load_test WHERE id = '{$search_table}'";
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