<?php

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
    $testype = "NOSE";
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
    Average_No8
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
    '$AverageNo8'
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