<?php

$user = current_user();

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['BTS'])) {

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
    $testype = "BTS";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $Method = $db->escape($_POST['Method']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $CutterEquipment = $db->escape($_POST['CutterEquipment']);
    $ExtractionEquipment = $db->escape($_POST['ExtractionEquipment']);
    $TestDevice = $db->escape($_POST['TestDevice']);
    $DiameterDcmNo1 = $db->escape($_POST['DiameterDcmNo1']);
    $DiameterDcmNo2 = $db->escape($_POST['DiameterDcmNo2']);
    $DiameterDcmNo3 = $db->escape($_POST['DiameterDcmNo3']);
    $DiameterDcmNo4 = $db->escape($_POST['DiameterDcmNo4']);
    $DiameterDcmNo5 = $db->escape($_POST['DiameterDcmNo5']);
    $DiameterDcmNo6 = $db->escape($_POST['DiameterDcmNo6']);
    $DiameterDcmNo7 = $db->escape($_POST['DiameterDcmNo7']);
    $DiameterDcmNo8 = $db->escape($_POST['DiameterDcmNo8']);
    $DiameterDcmNo9 = $db->escape($_POST['DiameterDcmNo9']);
    $DiameterDcmNo10 = $db->escape($_POST['DiameterDcmNo10']);
    $ThicnesstcmNo1 = $db->escape($_POST['ThicnesstcmNo1']);
    $ThicnesstcmNo2 = $db->escape($_POST['ThicnesstcmNo2']);
    $ThicnesstcmNo3 = $db->escape($_POST['ThicnesstcmNo3']);
    $ThicnesstcmNo4 = $db->escape($_POST['ThicnesstcmNo4']);
    $ThicnesstcmNo5 = $db->escape($_POST['ThicnesstcmNo5']);
    $ThicnesstcmNo6 = $db->escape($_POST['ThicnesstcmNo6']);
    $ThicnesstcmNo7 = $db->escape($_POST['ThicnesstcmNo7']);
    $ThicnesstcmNo8 = $db->escape($_POST['ThicnesstcmNo8']);
    $ThicnesstcmNo9 = $db->escape($_POST['ThicnesstcmNo9']);
    $ThicnesstcmNo10 = $db->escape($_POST['ThicnesstcmNo10']);    
    $RelationtdNo1 = $db->escape($_POST['RelationtdNo1']);
    $RelationtdNo2 = $db->escape($_POST['RelationtdNo2']);
    $RelationtdNo3 = $db->escape($_POST['RelationtdNo3']);
    $RelationtdNo4 = $db->escape($_POST['RelationtdNo4']);
    $RelationtdNo5 = $db->escape($_POST['RelationtdNo5']);
    $RelationtdNo6 = $db->escape($_POST['RelationtdNo6']);
    $RelationtdNo7 = $db->escape($_POST['RelationtdNo7']);
    $RelationtdNo8 = $db->escape($_POST['RelationtdNo8']);
    $RelationtdNo9 = $db->escape($_POST['RelationtdNo9']);
    $RelationtdNo10 = $db->escape($_POST['RelationtdNo10']);
    $LoadingRateKNsNo1 = $db->escape($_POST['LoadingRateKNsNo1']);
    $LoadingRateKNsNo2 = $db->escape($_POST['LoadingRateKNsNo2']);
    $LoadingRateKNsNo3 = $db->escape($_POST['LoadingRateKNsNo3']);
    $LoadingRateKNsNo4 = $db->escape($_POST['LoadingRateKNsNo4']);
    $LoadingRateKNsNo5 = $db->escape($_POST['LoadingRateKNsNo5']);
    $LoadingRateKNsNo6 = $db->escape($_POST['LoadingRateKNsNo6']);
    $LoadingRateKNsNo7 = $db->escape($_POST['LoadingRateKNsNo7']);
    $LoadingRateKNsNo8 = $db->escape($_POST['LoadingRateKNsNo8']);
    $LoadingRateKNsNo9 = $db->escape($_POST['LoadingRateKNsNo9']);
    $LoadingRateKNsNo10 = $db->escape($_POST['LoadingRateKNsNo10']);
    $TimeToFailuresNo1 = $db->escape($_POST['TimeToFailuresNo1']);
    $TimeToFailuresNo2 = $db->escape($_POST['TimeToFailuresNo2']);
    $TimeToFailuresNo3 = $db->escape($_POST['TimeToFailuresNo3']);
    $TimeToFailuresNo4 = $db->escape($_POST['TimeToFailuresNo4']);
    $TimeToFailuresNo5 = $db->escape($_POST['TimeToFailuresNo5']);
    $TimeToFailuresNo6 = $db->escape($_POST['TimeToFailuresNo6']);
    $TimeToFailuresNo7 = $db->escape($_POST['TimeToFailuresNo7']);
    $TimeToFailuresNo8 = $db->escape($_POST['TimeToFailuresNo8']);
    $TimeToFailuresNo9 = $db->escape($_POST['TimeToFailuresNo9']);
    $TimeToFailuresNo10 = $db->escape($_POST['TimeToFailuresNo10']);
    $MaxLoadkNNo1 = $db->escape($_POST['MaxLoadkNNo1']);
    $MaxLoadkNNo2 = $db->escape($_POST['MaxLoadkNNo2']);
    $MaxLoadkNNo3 = $db->escape($_POST['MaxLoadkNNo3']);
    $MaxLoadkNNo4 = $db->escape($_POST['MaxLoadkNNo4']);
    $MaxLoadkNNo5 = $db->escape($_POST['MaxLoadkNNo5']);
    $MaxLoadkNNo6 = $db->escape($_POST['MaxLoadkNNo6']);
    $MaxLoadkNNo7 = $db->escape($_POST['MaxLoadkNNo7']);
    $MaxLoadkNNo8 = $db->escape($_POST['MaxLoadkNNo8']);
    $MaxLoadkNNo9 = $db->escape($_POST['MaxLoadkNNo9']);
    $MaxLoadkNNo10 = $db->escape($_POST['MaxLoadkNNo10']);
    $TensileStrengthMpaNo1 = $db->escape($_POST['TensileStrengthMpaNo1']);
    $TensileStrengthMpaNo2 = $db->escape($_POST['TensileStrengthMpaNo2']);
    $TensileStrengthMpaNo3 = $db->escape($_POST['TensileStrengthMpaNo3']);
    $TensileStrengthMpaNo4 = $db->escape($_POST['TensileStrengthMpaNo4']);
    $TensileStrengthMpaNo5 = $db->escape($_POST['TensileStrengthMpaNo5']);
    $TensileStrengthMpaNo6 = $db->escape($_POST['TensileStrengthMpaNo6']);
    $TensileStrengthMpaNo7 = $db->escape($_POST['TensileStrengthMpaNo7']);
    $TensileStrengthMpaNo8 = $db->escape($_POST['TensileStrengthMpaNo8']);
    $TensileStrengthMpaNo9 = $db->escape($_POST['TensileStrengthMpaNo9']);
    $TensileStrengthMpaNo10 = $db->escape($_POST['TensileStrengthMpaNo10']);
    $FailureTypeNo1 = $db->escape($_POST['FailureTypeNo1']);
    $FailureTypeNo2 = $db->escape($_POST['FailureTypeNo2']);
    $FailureTypeNo3 = $db->escape($_POST['FailureTypeNo3']);
    $FailureTypeNo4 = $db->escape($_POST['FailureTypeNo4']);
    $FailureTypeNo5 = $db->escape($_POST['FailureTypeNo5']);
    $FailureTypeNo6 = $db->escape($_POST['FailureTypeNo6']);
    $FailureTypeNo7 = $db->escape($_POST['FailureTypeNo7']);
    $FailureTypeNo8 = $db->escape($_POST['FailureTypeNo8']);
    $FailureTypeNo9 = $db->escape($_POST['FailureTypeNo9']);
    $FailureTypeNo10 = $db->escape($_POST['FailureTypeNo10']);
    $AverageNo1 = $db->escape($_POST['AverageNo1']);
    $AverageNo2 = $db->escape($_POST['AverageNo2']);
    $AverageNo3 = $db->escape($_POST['AverageNo3']);
    $AverageNo4 = $db->escape($_POST['AverageNo4']);
    $AverageNo5 = $db->escape($_POST['AverageNo5']);
    $AverageNo6 = $db->escape($_POST['AverageNo6']);
    $AverageNo7 = $db->escape($_POST['AverageNo7']);
    $AverageNo8 = $db->escape($_POST['AverageNo8']);

    $RegisterBy = $user['name'];

// Componemos la sentencia SQL
$sql = "INSERT INTO splitting_tensile_strenght (
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
    Cutter_Equipment,
    Extraction_Equipment,
    Test_Device,
    Diameter_D_cm_No1,
    Diameter_D_cm_No2,
    Diameter_D_cm_No3,
    Diameter_D_cm_No4,
    Diameter_D_cm_No5,
    Diameter_D_cm_No6,
    Diameter_D_cm_No7,
    Diameter_D_cm_No8,
    Diameter_D_cm_No9,
    Diameter_D_cm_No10,
    Thicness_t_cm_No1,
    Thicness_t_cm_No2,
    Thicness_t_cm_No3,
    Thicness_t_cm_No4,
    Thicness_t_cm_No5,
    Thicness_t_cm_No6,
    Thicness_t_cm_No7,
    Thicness_t_cm_No8,
    Thicness_t_cm_No9,
    Thicness_t_cm_No10,
    Relation_td_No1,
    Relation_td_No2,
    Relation_td_No3,
    Relation_td_No4,
    Relation_td_No5,
    Relation_td_No6,
    Relation_td_No7,
    Relation_td_No8,
    Relation_td_No9,
    Relation_td_No10,
    Loading_Rate_KNs_No1,
    Loading_Rate_KNs_No2,
    Loading_Rate_KNs_No3,
    Loading_Rate_KNs_No4,
    Loading_Rate_KNs_No5,
    Loading_Rate_KNs_No6,
    Loading_Rate_KNs_No7,
    Loading_Rate_KNs_No8,
    Loading_Rate_KNs_No9,
    Loading_Rate_KNs_No10,
    Time_To_Failure_s_No1,
    Time_To_Failure_s_No2,
    Time_To_Failure_s_No3,
    Time_To_Failure_s_No4,
    Time_To_Failure_s_No5,
    Time_To_Failure_s_No6,
    Time_To_Failure_s_No7,
    Time_To_Failure_s_No8,
    Time_To_Failure_s_No9,
    Time_To_Failure_s_No10,
    Max_Load_kN_No1,
    Max_Load_kN_No2,
    Max_Load_kN_No3,
    Max_Load_kN_No4,
    Max_Load_kN_No5,
    Max_Load_kN_No6,
    Max_Load_kN_No7,
    Max_Load_kN_No8,
    Max_Load_kN_No9,
    Max_Load_kN_No10,
    Tensile_Strength_Mpa_No1,
    Tensile_Strength_Mpa_No2,
    Tensile_Strength_Mpa_No3,
    Tensile_Strength_Mpa_No4,
    Tensile_Strength_Mpa_No5,
    Tensile_Strength_Mpa_No6,
    Tensile_Strength_Mpa_No7,
    Tensile_Strength_Mpa_No8,
    Tensile_Strength_Mpa_No9,
    Tensile_Strength_Mpa_No10,
    Failure_Type_No1,
    Failure_Type_No2,
    Failure_Type_No3,
    Failure_Type_No4,
    Failure_Type_No5,
    Failure_Type_No6,
    Failure_Type_No7,
    Failure_Type_No8,
    Failure_Type_No9,
    Failure_Type_No10,
    Average_No1,
    Average_No2,
    Average_No3,
    Average_No4,
    Average_No5,
    Average_No6,
    Average_No7,
    Average_No8,
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
    '$Comments',
    '$Technician',
    '$TestStartDate',
    '$CutterEquipment',
    '$ExtractionEquipment',
    '$TestDevice',
    '$DiameterDcmNo1',
    '$DiameterDcmNo2',
    '$DiameterDcmNo3',
    '$DiameterDcmNo4',
    '$DiameterDcmNo5',
    '$DiameterDcmNo6',
    '$DiameterDcmNo7',
    '$DiameterDcmNo8',
    '$DiameterDcmNo9',
    '$DiameterDcmNo10',
    '$ThicnesstcmNo1',
    '$ThicnesstcmNo2',
    '$ThicnesstcmNo3',
    '$ThicnesstcmNo4',
    '$ThicnesstcmNo5',
    '$ThicnesstcmNo6',
    '$ThicnesstcmNo7',
    '$ThicnesstcmNo8',
    '$ThicnesstcmNo9',
    '$ThicnesstcmNo10',
    '$RelationtdNo1',
    '$RelationtdNo2',
    '$RelationtdNo3',
    '$RelationtdNo4',
    '$RelationtdNo5',
    '$RelationtdNo6',
    '$RelationtdNo7',
    '$RelationtdNo8',
    '$RelationtdNo9',
    '$RelationtdNo10',
    '$LoadingRateKNsNo1',
    '$LoadingRateKNsNo2',
    '$LoadingRateKNsNo3',
    '$LoadingRateKNsNo4',
    '$LoadingRateKNsNo5',
    '$LoadingRateKNsNo6',
    '$LoadingRateKNsNo7',
    '$LoadingRateKNsNo8',
    '$LoadingRateKNsNo9',
    '$LoadingRateKNsNo10',
    '$TimeToFailuresNo1',
    '$TimeToFailuresNo2',
    '$TimeToFailuresNo3',
    '$TimeToFailuresNo4',
    '$TimeToFailuresNo5',
    '$TimeToFailuresNo6',
    '$TimeToFailuresNo7',
    '$TimeToFailuresNo8',
    '$TimeToFailuresNo9',
    '$TimeToFailuresNo10',
    '$MaxLoadkNNo1',
    '$MaxLoadkNNo2',
    '$MaxLoadkNNo3',
    '$MaxLoadkNNo4',
    '$MaxLoadkNNo5',
    '$MaxLoadkNNo6',
    '$MaxLoadkNNo7',
    '$MaxLoadkNNo8',
    '$MaxLoadkNNo9',
    '$MaxLoadkNNo10',
    '$TensileStrengthMpaNo1',
    '$TensileStrengthMpaNo2',
    '$TensileStrengthMpaNo3',
    '$TensileStrengthMpaNo4',
    '$TensileStrengthMpaNo5',
    '$TensileStrengthMpaNo6',
    '$TensileStrengthMpaNo7',
    '$TensileStrengthMpaNo8',
    '$TensileStrengthMpaNo9',
    '$TensileStrengthMpaNo10',
    '$FailureTypeNo1',
    '$FailureTypeNo2',
    '$FailureTypeNo3',
    '$FailureTypeNo4',
    '$FailureTypeNo5',
    '$FailureTypeNo6',
    '$FailureTypeNo7',
    '$FailureTypeNo8',
    '$FailureTypeNo9',
    '$FailureTypeNo10',
    '$AverageNo1',
    '$AverageNo2',
    '$AverageNo3',
    '$AverageNo4',
    '$AverageNo5',
    '$AverageNo6',
    '$AverageNo7',
    '$AverageNo8',
    '$RegisterBy'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./BTS.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./BTS.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./BTS.php', false);
  }
}

?>

<?php
$search_table = find_by_id('splitting_tensile_strenght', (int)$_GET['id']);
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
      $Method = $db->escape($_POST['Method']);
      $Comments = $db->escape($_POST['Comments']);
      $Technician = $db->escape($_POST['Technician']);
      $TestStartDate = $db->escape($_POST['TestStartDate']);
  
      $CutterEquipment = $db->escape($_POST['CutterEquipment']);
      $ExtractionEquipment = $db->escape($_POST['ExtractionEquipment']);
      $TestDevice = $db->escape($_POST['TestDevice']);
      $DiameterDcmNo1 = $db->escape($_POST['DiameterDcmNo1']);
      $DiameterDcmNo2 = $db->escape($_POST['DiameterDcmNo2']);
      $DiameterDcmNo3 = $db->escape($_POST['DiameterDcmNo3']);
      $DiameterDcmNo4 = $db->escape($_POST['DiameterDcmNo4']);
      $DiameterDcmNo5 = $db->escape($_POST['DiameterDcmNo5']);
      $DiameterDcmNo6 = $db->escape($_POST['DiameterDcmNo6']);
      $DiameterDcmNo7 = $db->escape($_POST['DiameterDcmNo7']);
      $DiameterDcmNo8 = $db->escape($_POST['DiameterDcmNo8']);
      $DiameterDcmNo9 = $db->escape($_POST['DiameterDcmNo9']);
      $DiameterDcmNo10 = $db->escape($_POST['DiameterDcmNo10']);
      $ThicnesstcmNo1 = $db->escape($_POST['ThicnesstcmNo1']);
      $ThicnesstcmNo2 = $db->escape($_POST['ThicnesstcmNo2']);
      $ThicnesstcmNo3 = $db->escape($_POST['ThicnesstcmNo3']);
      $ThicnesstcmNo4 = $db->escape($_POST['ThicnesstcmNo4']);
      $ThicnesstcmNo5 = $db->escape($_POST['ThicnesstcmNo5']);
      $ThicnesstcmNo6 = $db->escape($_POST['ThicnesstcmNo6']);
      $ThicnesstcmNo7 = $db->escape($_POST['ThicnesstcmNo7']);
      $ThicnesstcmNo8 = $db->escape($_POST['ThicnesstcmNo8']);
      $ThicnesstcmNo9 = $db->escape($_POST['ThicnesstcmNo9']);
      $ThicnesstcmNo10 = $db->escape($_POST['ThicnesstcmNo10']);    
      $RelationtdNo1 = $db->escape($_POST['RelationtdNo1']);
      $RelationtdNo2 = $db->escape($_POST['RelationtdNo2']);
      $RelationtdNo3 = $db->escape($_POST['RelationtdNo3']);
      $RelationtdNo4 = $db->escape($_POST['RelationtdNo4']);
      $RelationtdNo5 = $db->escape($_POST['RelationtdNo5']);
      $RelationtdNo6 = $db->escape($_POST['RelationtdNo6']);
      $RelationtdNo7 = $db->escape($_POST['RelationtdNo7']);
      $RelationtdNo8 = $db->escape($_POST['RelationtdNo8']);
      $RelationtdNo9 = $db->escape($_POST['RelationtdNo9']);
      $RelationtdNo10 = $db->escape($_POST['RelationtdNo10']);
      $LoadingRateKNsNo1 = $db->escape($_POST['LoadingRateKNsNo1']);
      $LoadingRateKNsNo2 = $db->escape($_POST['LoadingRateKNsNo2']);
      $LoadingRateKNsNo3 = $db->escape($_POST['LoadingRateKNsNo3']);
      $LoadingRateKNsNo4 = $db->escape($_POST['LoadingRateKNsNo4']);
      $LoadingRateKNsNo5 = $db->escape($_POST['LoadingRateKNsNo5']);
      $LoadingRateKNsNo6 = $db->escape($_POST['LoadingRateKNsNo6']);
      $LoadingRateKNsNo7 = $db->escape($_POST['LoadingRateKNsNo7']);
      $LoadingRateKNsNo8 = $db->escape($_POST['LoadingRateKNsNo8']);
      $LoadingRateKNsNo9 = $db->escape($_POST['LoadingRateKNsNo9']);
      $LoadingRateKNsNo10 = $db->escape($_POST['LoadingRateKNsNo10']);
      $TimeToFailuresNo1 = $db->escape($_POST['TimeToFailuresNo1']);
      $TimeToFailuresNo2 = $db->escape($_POST['TimeToFailuresNo2']);
      $TimeToFailuresNo3 = $db->escape($_POST['TimeToFailuresNo3']);
      $TimeToFailuresNo4 = $db->escape($_POST['TimeToFailuresNo4']);
      $TimeToFailuresNo5 = $db->escape($_POST['TimeToFailuresNo5']);
      $TimeToFailuresNo6 = $db->escape($_POST['TimeToFailuresNo6']);
      $TimeToFailuresNo7 = $db->escape($_POST['TimeToFailuresNo7']);
      $TimeToFailuresNo8 = $db->escape($_POST['TimeToFailuresNo8']);
      $TimeToFailuresNo9 = $db->escape($_POST['TimeToFailuresNo9']);
      $TimeToFailuresNo10 = $db->escape($_POST['TimeToFailuresNo10']);
      $MaxLoadkNNo1 = $db->escape($_POST['MaxLoadkNNo1']);
      $MaxLoadkNNo2 = $db->escape($_POST['MaxLoadkNNo2']);
      $MaxLoadkNNo3 = $db->escape($_POST['MaxLoadkNNo3']);
      $MaxLoadkNNo4 = $db->escape($_POST['MaxLoadkNNo4']);
      $MaxLoadkNNo5 = $db->escape($_POST['MaxLoadkNNo5']);
      $MaxLoadkNNo6 = $db->escape($_POST['MaxLoadkNNo6']);
      $MaxLoadkNNo7 = $db->escape($_POST['MaxLoadkNNo7']);
      $MaxLoadkNNo8 = $db->escape($_POST['MaxLoadkNNo8']);
      $MaxLoadkNNo9 = $db->escape($_POST['MaxLoadkNNo9']);
      $MaxLoadkNNo10 = $db->escape($_POST['MaxLoadkNNo10']);
      $TensileStrengthMpaNo1 = $db->escape($_POST['TensileStrengthMpaNo1']);
      $TensileStrengthMpaNo2 = $db->escape($_POST['TensileStrengthMpaNo2']);
      $TensileStrengthMpaNo3 = $db->escape($_POST['TensileStrengthMpaNo3']);
      $TensileStrengthMpaNo4 = $db->escape($_POST['TensileStrengthMpaNo4']);
      $TensileStrengthMpaNo5 = $db->escape($_POST['TensileStrengthMpaNo5']);
      $TensileStrengthMpaNo6 = $db->escape($_POST['TensileStrengthMpaNo6']);
      $TensileStrengthMpaNo7 = $db->escape($_POST['TensileStrengthMpaNo7']);
      $TensileStrengthMpaNo8 = $db->escape($_POST['TensileStrengthMpaNo8']);
      $TensileStrengthMpaNo9 = $db->escape($_POST['TensileStrengthMpaNo9']);
      $TensileStrengthMpaNo10 = $db->escape($_POST['TensileStrengthMpaNo10']);
      $FailureTypeNo1 = $db->escape($_POST['FailureTypeNo1']);
      $FailureTypeNo2 = $db->escape($_POST['FailureTypeNo2']);
      $FailureTypeNo3 = $db->escape($_POST['FailureTypeNo3']);
      $FailureTypeNo4 = $db->escape($_POST['FailureTypeNo4']);
      $FailureTypeNo5 = $db->escape($_POST['FailureTypeNo5']);
      $FailureTypeNo6 = $db->escape($_POST['FailureTypeNo6']);
      $FailureTypeNo7 = $db->escape($_POST['FailureTypeNo7']);
      $FailureTypeNo8 = $db->escape($_POST['FailureTypeNo8']);
      $FailureTypeNo9 = $db->escape($_POST['FailureTypeNo9']);
      $FailureTypeNo10 = $db->escape($_POST['FailureTypeNo10']);
      $AverageNo1 = $db->escape($_POST['AverageNo1']);
      $AverageNo2 = $db->escape($_POST['AverageNo2']);
      $AverageNo3 = $db->escape($_POST['AverageNo3']);
      $AverageNo4 = $db->escape($_POST['AverageNo4']);
      $AverageNo5 = $db->escape($_POST['AverageNo5']);
      $AverageNo6 = $db->escape($_POST['AverageNo6']);
      $AverageNo7 = $db->escape($_POST['AverageNo7']);
      $AverageNo8 = $db->escape($_POST['AverageNo8']);

      $RegisterBy = $user['name'];

      $query = "UPDATE splitting_tensile_strenght SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Method = '{$Method}', ";
      $query .= "Cutter_Equipment = '{$CutterEquipment}', ";
      $query .= "Extraction_Equipment = '{$ExtractionEquipment}', ";
      $query .= "Test_Device = '{$TestDevice}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Diameter_D_cm_No1 = '{$DiameterDcmNo1}', ";
      $query .= "Diameter_D_cm_No2 = '{$DiameterDcmNo2}', ";
      $query .= "Diameter_D_cm_No3 = '{$DiameterDcmNo3}', ";
      $query .= "Diameter_D_cm_No4 = '{$DiameterDcmNo4}', ";
      $query .= "Diameter_D_cm_No5 = '{$DiameterDcmNo5}', ";
      $query .= "Diameter_D_cm_No6 = '{$DiameterDcmNo6}', ";
      $query .= "Diameter_D_cm_No7 = '{$DiameterDcmNo7}', ";
      $query .= "Diameter_D_cm_No8 = '{$DiameterDcmNo8}', ";
      $query .= "Diameter_D_cm_No9 = '{$DiameterDcmNo9}', ";
      $query .= "Diameter_D_cm_No10 = '{$DiameterDcmNo10}', ";

      $query .= "Thicness_t_cm_No1 = '{$ThicnesstcmNo1}', ";
      $query .= "Thicness_t_cm_No2 = '{$ThicnesstcmNo2}', ";
      $query .= "Thicness_t_cm_No3 = '{$ThicnesstcmNo3}', ";
      $query .= "Thicness_t_cm_No4 = '{$ThicnesstcmNo4}', ";
      $query .= "Thicness_t_cm_No5 = '{$ThicnesstcmNo5}', ";
      $query .= "Thicness_t_cm_No6 = '{$ThicnesstcmNo6}', ";
      $query .= "Thicness_t_cm_No7 = '{$ThicnesstcmNo7}', ";
      $query .= "Thicness_t_cm_No8 = '{$ThicnesstcmNo8}', ";
      $query .= "Thicness_t_cm_No9 = '{$ThicnesstcmNo9}', ";
      $query .= "Thicness_t_cm_No10 = '{$ThicnesstcmNo10}', ";

      $query .= "Relation_td_No1 = '{$RelationtdNo1}', ";
      $query .= "Relation_td_No2 = '{$RelationtdNo2}', ";
      $query .= "Relation_td_No3 = '{$RelationtdNo3}', ";
      $query .= "Relation_td_No4 = '{$RelationtdNo4}', ";
      $query .= "Relation_td_No5 = '{$RelationtdNo5}', ";
      $query .= "Relation_td_No6 = '{$RelationtdNo6}', ";
      $query .= "Relation_td_No7 = '{$RelationtdNo7}', ";
      $query .= "Relation_td_No8 = '{$RelationtdNo8}', ";
      $query .= "Relation_td_No9 = '{$RelationtdNo9}', ";
      $query .= "Relation_td_No10 = '{$RelationtdNo10}', ";

      $query .= "Loading_Rate_KNs_No1 = '{$LoadingRateKNsNo1}', ";
      $query .= "Loading_Rate_KNs_No2 = '{$LoadingRateKNsNo2}', ";
      $query .= "Loading_Rate_KNs_No3 = '{$LoadingRateKNsNo3}', ";
      $query .= "Loading_Rate_KNs_No4 = '{$LoadingRateKNsNo4}', ";
      $query .= "Loading_Rate_KNs_No5 = '{$LoadingRateKNsNo5}', ";
      $query .= "Loading_Rate_KNs_No6 = '{$LoadingRateKNsNo6}', ";
      $query .= "Loading_Rate_KNs_No7 = '{$LoadingRateKNsNo7}', ";
      $query .= "Loading_Rate_KNs_No8 = '{$LoadingRateKNsNo8}', ";
      $query .= "Loading_Rate_KNs_No9 = '{$LoadingRateKNsNo9}', ";
      $query .= "Loading_Rate_KNs_No10 = '{$LoadingRateKNsNo10}', ";

      $query .= "Time_To_Failure_s_No1 = '{$TimeToFailuresNo1}', ";
      $query .= "Time_To_Failure_s_No2 = '{$TimeToFailuresNo2}', ";
      $query .= "Time_To_Failure_s_No3 = '{$TimeToFailuresNo3}', ";
      $query .= "Time_To_Failure_s_No4 = '{$TimeToFailuresNo4}', ";
      $query .= "Time_To_Failure_s_No5 = '{$TimeToFailuresNo5}', ";
      $query .= "Time_To_Failure_s_No6 = '{$TimeToFailuresNo6}', ";
      $query .= "Time_To_Failure_s_No7 = '{$TimeToFailuresNo7}', ";
      $query .= "Time_To_Failure_s_No8 = '{$TimeToFailuresNo8}', ";
      $query .= "Time_To_Failure_s_No9 = '{$TimeToFailuresNo9}', ";
      $query .= "Time_To_Failure_s_No10 = '{$TimeToFailuresNo10}', ";

      $query .= "Max_Load_kN_No1 = '{$MaxLoadkNNo1}', ";
      $query .= "Max_Load_kN_No2 = '{$MaxLoadkNNo2}', ";
      $query .= "Max_Load_kN_No3 = '{$MaxLoadkNNo3}', ";
      $query .= "Max_Load_kN_No4 = '{$MaxLoadkNNo4}', ";
      $query .= "Max_Load_kN_No5 = '{$MaxLoadkNNo5}', ";
      $query .= "Max_Load_kN_No6 = '{$MaxLoadkNNo6}', ";
      $query .= "Max_Load_kN_No7 = '{$MaxLoadkNNo7}', ";
      $query .= "Max_Load_kN_No8 = '{$MaxLoadkNNo8}', ";
      $query .= "Max_Load_kN_No9 = '{$MaxLoadkNNo9}', ";
      $query .= "Max_Load_kN_No10 = '{$MaxLoadkNNo10}', ";

      $query .= "Tensile_Strength_Mpa_No1 = '{$TensileStrengthMpaNo1}', ";
      $query .= "Tensile_Strength_Mpa_No2 = '{$TensileStrengthMpaNo2}', ";
      $query .= "Tensile_Strength_Mpa_No3 = '{$TensileStrengthMpaNo3}', ";
      $query .= "Tensile_Strength_Mpa_No4 = '{$TensileStrengthMpaNo4}', ";
      $query .= "Tensile_Strength_Mpa_No5 = '{$TensileStrengthMpaNo5}', ";
      $query .= "Tensile_Strength_Mpa_No6 = '{$TensileStrengthMpaNo6}', ";
      $query .= "Tensile_Strength_Mpa_No7 = '{$TensileStrengthMpaNo7}', ";
      $query .= "Tensile_Strength_Mpa_No8 = '{$TensileStrengthMpaNo8}', ";
      $query .= "Tensile_Strength_Mpa_No9 = '{$TensileStrengthMpaNo9}', ";
      $query .= "Tensile_Strength_Mpa_No10 = '{$TensileStrengthMpaNo10}', ";

      $query .= "Failure_Type_No1 = '{$FailureTypeNo1}', ";
      $query .= "Failure_Type_No2 = '{$FailureTypeNo2}', ";
      $query .= "Failure_Type_No3 = '{$FailureTypeNo3}', ";
      $query .= "Failure_Type_No4 = '{$FailureTypeNo4}', ";
      $query .= "Failure_Type_No5 = '{$FailureTypeNo5}', ";
      $query .= "Failure_Type_No6 = '{$FailureTypeNo6}', ";
      $query .= "Failure_Type_No7 = '{$FailureTypeNo7}', ";
      $query .= "Failure_Type_No8 = '{$FailureTypeNo8}', ";
      $query .= "Failure_Type_No9 = '{$FailureTypeNo9}', ";
      $query .= "Failure_Type_No10 = '{$FailureTypeNo10}', ";

      $query .= "Average_No1 = '{$AverageNo1}', ";
      $query .= "Average_No2 = '{$AverageNo2}', ";
      $query .= "Average_No3 = '{$AverageNo3}', ";
      $query .= "Average_No4 = '{$AverageNo4}', ";
      $query .= "Average_No5 = '{$AverageNo5}', ";
      $query .= "Average_No6 = '{$AverageNo6}', ";
      $query .= "Average_No7 = '{$AverageNo7}', ";
      $query .= "Average_No8 = '{$AverageNo8}', ";

      $query .= "Registered_By = '{$RegisterBy}' ";
      
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-BTS.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-BTS.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-BTS.php?id=' . $search_table['id'], false);
    }
  }
?>