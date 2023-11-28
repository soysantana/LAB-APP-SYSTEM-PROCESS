<?php

$user = current_user();

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['Pinhole'])) {

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
    $testype = "PH";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $Method = $db->escape($_POST['Method']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $MoistureContentBeforeTestMCPorce = $db->escape($_POST['MoistureContentBeforeTestMCPorce']);
    $SpecificGravityEstimatedorMeasured = $db->escape($_POST['SpecificGravityEstimatedorMeasured']);
    $MaxDryDensitygcm3 = $db->escape($_POST['MaxDryDensitygcm3']);
    $OptimumMoistureContentPorce = $db->escape($_POST['OptimumMoistureContentPorce']);
    $WtWetSoilMoldgr = $db->escape($_POST['WtWetSoilMoldgr']);
    $WtMoldgr = $db->escape($_POST['WtMoldgr']);
    $WtWetSoilgr = $db->escape($_POST['WtWetSoilgr']);
    $LogintudDelSpecimencm = $db->escape($_POST['LogintudDelSpecimencm']);
    $VolSpecimencm3 = $db->escape($_POST['VolSpecimencm3']);
    $WetDensitygcm3 = $db->escape($_POST['WetDensitygcm3']);
    $DryDensitygcm3 = $db->escape($_POST['DryDensitygcm3']);
    $PorceCompaction = $db->escape($_POST['PorceCompaction']);
    $MoistureContentAfterTestPorce = $db->escape($_POST['MoistureContentAfterTestPorce']);
    $WirePunchDiametermm = $db->escape($_POST['WirePunchDiametermm']);
    $TareNameMcBefore = $db->escape($_POST['TareNameMcBefore']);
    $OvenTemperatureMcBefore = $db->escape($_POST['OvenTemperatureMcBefore']);
    $TarePlusWetSoilgMcBefore = $db->escape($_POST['TarePlusWetSoilgMcBefore']);
    $TarePlusDrySoilgMcBefore = $db->escape($_POST['TarePlusDrySoilgMcBefore']);
    $WaterWwgMcBefore = $db->escape($_POST['WaterWwgMcBefore']);
    $TaregMcBefore = $db->escape($_POST['TaregMcBefore']);
    $DrySoilWsgMcBefore = $db->escape($_POST['DrySoilWsgMcBefore']);
    $MoistureContentPorceMcBefore = $db->escape($_POST['MoistureContentPorceMcBefore']);
    $TareNameMcAfter = $db->escape($_POST['TareNameMcAfter']);
    $OvenTemperatureMcAfter = $db->escape($_POST['OvenTemperatureMcAfter']);
    $TarePlusWetSoilgMcAfter = $db->escape($_POST['TarePlusWetSoilgMcAfter']);
    $TarePlusDrySoilgMcAfter = $db->escape($_POST['TarePlusDrySoilgMcAfter']);
    $WaterWwgMcAfter = $db->escape($_POST['WaterWwgMcAfter']);
    $TaregMcAfter = $db->escape($_POST['TaregMcAfter']);
    $DrySoilWsgMcAfter = $db->escape($_POST['DrySoilWsgMcAfter']);
    $MoistureContentPorceMcAfter = $db->escape($_POST['MoistureContentPorceMcAfter']);
    $mLNo7 = $db->escape($_POST['mLNo7']);
    $mLNo8 = $db->escape($_POST['mLNo8']);
    $mLNo9 = $db->escape($_POST['mLNo9']);
    $mLNo10 = $db->escape($_POST['mLNo10']);
    $mLNo11 = $db->escape($_POST['mLNo11']);
    $mLNo12 = $db->escape($_POST['mLNo12']);
    $mLNo13 = $db->escape($_POST['mLNo13']);
    $mLNo14 = $db->escape($_POST['mLNo14']);
    $mLNo15 = $db->escape($_POST['mLNo15']);
    $mLNo16 = $db->escape($_POST['mLNo16']);
    $mLNo17 = $db->escape($_POST['mLNo17']);
    $mLNo18 = $db->escape($_POST['mLNo18']);
    $mLNo19 = $db->escape($_POST['mLNo19']);
    $mLNo20 = $db->escape($_POST['mLNo20']);
    $mLNo21 = $db->escape($_POST['mLNo21']);
    $mLNo22 = $db->escape($_POST['mLNo22']);
    $SegNo1 = $db->escape($_POST['SegNo1']);
    $SegNo2 = $db->escape($_POST['SegNo2']);
    $SegNo3 = $db->escape($_POST['SegNo3']);
    $SegNo4 = $db->escape($_POST['SegNo4']);
    $SegNo5 = $db->escape($_POST['SegNo5']);
    $SegNo6 = $db->escape($_POST['SegNo6']);
    $SegNo7 = $db->escape($_POST['SegNo7']);
    $FlowRateNo1 = $db->escape($_POST['FlowRateNo1']);
    $FlowRateNo2 = $db->escape($_POST['FlowRateNo2']);
    $FlowRateNo3 = $db->escape($_POST['FlowRateNo3']);
    $FlowRateNo4 = $db->escape($_POST['FlowRateNo4']);
    $FlowRateNo5 = $db->escape($_POST['FlowRateNo5']);
    $FlowRateNo6 = $db->escape($_POST['FlowRateNo6']);
    $FlowRateNo7 = $db->escape($_POST['FlowRateNo7']);
    $FlowRateNo8 = $db->escape($_POST['FlowRateNo8']);
    $FlowRateNo9 = $db->escape($_POST['FlowRateNo9']);
    $FlowRateNo10 = $db->escape($_POST['FlowRateNo10']);
    $FlowRateNo11 = $db->escape($_POST['FlowRateNo11']);
    $FlowRateNo12 = $db->escape($_POST['FlowRateNo12']);
    $FlowRateNo13 = $db->escape($_POST['FlowRateNo13']);
    $FlowRateNo14 = $db->escape($_POST['FlowRateNo14']);
    $FlowRateNo15 = $db->escape($_POST['FlowRateNo15']);
    $FlowRateNo16 = $db->escape($_POST['FlowRateNo16']);
    $FlowRateNo17 = $db->escape($_POST['FlowRateNo17']);
    $FlowRateNo18 = $db->escape($_POST['FlowRateNo18']);
    $FlowRateNo19 = $db->escape($_POST['FlowRateNo19']);
    $FlowRateNo20 = $db->escape($_POST['FlowRateNo20']);
    $FlowRateNo21 = $db->escape($_POST['FlowRateNo21']);
    $FlowRateNo22 = $db->escape($_POST['FlowRateNo22']);
    $FromSideNo1 = $db->escape($_POST['FromSideNo1']);
    $FromSideNo2 = $db->escape($_POST['FromSideNo2']);
    $FromSideNo3 = $db->escape($_POST['FromSideNo3']);
    $FromSideNo4 = $db->escape($_POST['FromSideNo4']);
    $FromSideNo5 = $db->escape($_POST['FromSideNo5']);
    $FromSideNo6 = $db->escape($_POST['FromSideNo6']);
    $FromSideNo7 = $db->escape($_POST['FromSideNo7']);
    $FromSideNo8 = $db->escape($_POST['FromSideNo8']);
    $FromSideNo9 = $db->escape($_POST['FromSideNo9']);
    $FromSideNo10 = $db->escape($_POST['FromSideNo10']);
    $FromSideNo11 = $db->escape($_POST['FromSideNo11']);
    $FromSideNo12 = $db->escape($_POST['FromSideNo12']);
    $FromSideNo13 = $db->escape($_POST['FromSideNo13']);
    $FromSideNo14 = $db->escape($_POST['FromSideNo14']);
    $FromSideNo15 = $db->escape($_POST['FromSideNo15']);
    $FromSideNo16 = $db->escape($_POST['FromSideNo16']);
    $FromSideNo17 = $db->escape($_POST['FromSideNo17']);
    $FromSideNo18 = $db->escape($_POST['FromSideNo18']);
    $FromSideNo19 = $db->escape($_POST['FromSideNo19']);
    $FromSideNo20 = $db->escape($_POST['FromSideNo20']);
    $FromSideNo21 = $db->escape($_POST['FromSideNo21']);
    $FromSideNo22 = $db->escape($_POST['FromSideNo22']);
    $FromTopNo1 = $db->escape($_POST['FromTopNo1']);
    $FromTopNo2 = $db->escape($_POST['FromTopNo2']);
    $FromTopNo3 = $db->escape($_POST['FromTopNo3']);
    $FromTopNo4 = $db->escape($_POST['FromTopNo4']);
    $FromTopNo5 = $db->escape($_POST['FromTopNo5']);
    $FromTopNo6 = $db->escape($_POST['FromTopNo6']);
    $FromTopNo7 = $db->escape($_POST['FromTopNo7']);
    $FromTopNo8 = $db->escape($_POST['FromTopNo8']);
    $FromTopNo9 = $db->escape($_POST['FromTopNo9']);
    $FromTopNo10 = $db->escape($_POST['FromTopNo10']);
    $FromTopNo11 = $db->escape($_POST['FromTopNo11']);
    $FromTopNo12 = $db->escape($_POST['FromTopNo12']);
    $FromTopNo13 = $db->escape($_POST['FromTopNo13']);
    $FromTopNo14 = $db->escape($_POST['FromTopNo14']);
    $FromTopNo15 = $db->escape($_POST['FromTopNo15']);
    $FromTopNo16 = $db->escape($_POST['FromTopNo16']);
    $FromTopNo17 = $db->escape($_POST['FromTopNo17']);
    $FromTopNo18 = $db->escape($_POST['FromTopNo18']);
    $FromTopNo19 = $db->escape($_POST['FromTopNo19']);
    $FromTopNo20 = $db->escape($_POST['FromTopNo20']);
    $FromTopNo21 = $db->escape($_POST['FromTopNo21']);
    $FromTopNo22 = $db->escape($_POST['FromTopNo22']);
    $ObservationNo1 = $db->escape($_POST['ObservationNo1']);
    $ObservationNo2 = $db->escape($_POST['ObservationNo2']);
    $ObservationNo3 = $db->escape($_POST['ObservationNo3']);
    $ObservationNo4 = $db->escape($_POST['ObservationNo4']);
    $ObservationNo5 = $db->escape($_POST['ObservationNo5']);
    $ObservationNo6 = $db->escape($_POST['ObservationNo6']);
    $ObservationNo7 = $db->escape($_POST['ObservationNo7']);
    $ObservationNo8 = $db->escape($_POST['ObservationNo8']);
    $ObservationNo9 = $db->escape($_POST['ObservationNo9']);
    $ObservationNo10 = $db->escape($_POST['ObservationNo10']);
    $ObservationNo11 = $db->escape($_POST['ObservationNo11']);
    $ObservationNo12 = $db->escape($_POST['ObservationNo12']);
    $ObservationNo13 = $db->escape($_POST['ObservationNo13']);
    $ObservationNo14 = $db->escape($_POST['ObservationNo14']);
    $ObservationNo15 = $db->escape($_POST['ObservationNo15']);
    $ObservationNo16 = $db->escape($_POST['ObservationNo16']);
    $ObservationNo17 = $db->escape($_POST['ObservationNo17']);
    $ObservationNo18 = $db->escape($_POST['ObservationNo18']);
    $ObservationNo19 = $db->escape($_POST['ObservationNo19']);
    $ObservationNo20 = $db->escape($_POST['ObservationNo20']);
    $ObservationNo21 = $db->escape($_POST['ObservationNo21']);
    $ObservationNo22 = $db->escape($_POST['ObservationNo22']);
    $HoleSizeAfterTestmm = $db->escape($_POST['HoleSizeAfterTestmm']);
    $DispersiveClassification = $db->escape($_POST['DispersiveClassification']);

    $RegisterBy = $user['name'];

// Componemos la sentencia SQL
$sql = "INSERT INTO pinhole (
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
    Moisture_Content_Before_Test_MC_Porce,
    Specific_Gravity_Estimated_or_Measured,
    Max_Dry_Density_g_cm3,
    Optimum_Moisture_Content_Porce,
    Wt_Wet_Soil_Mold_gr,
    Wt_Mold_gr,
    Wt_Wet_Soil_gr,
    Logintud_Del_Specimen_cm,
    Vol_Specimen_cm3,
    Wet_Density_gcm3,
    Dry_Density_gcm3,
    Porce_Compaction,
    Moisture_Content_After_Test_Porce,
    Wire_Punch_Diameter_mm,
    Tare_Name_Mc_Before,
    Oven_Temperature_Mc_Before,
    Tare_Plus_Wet_Soil_g_Mc_Before,
    Tare_Plus_Dry_Soil_g_Mc_Before,
    Water_Ww_g_Mc_Before,
    Tare_g_Mc_Before,
    Dry_Soil_Ws_g_Mc_Before,
    Moisture_Content_Porce_Mc_Before,
    Tare_Name_Mc_After,
    Oven_Temperature_Mc_After,
    Tare_Plus_Wet_Soil_g_Mc_After,
    Tare_Plus_Dry_Soil_g_Mc_After,
    Water_Ww_g_Mc_After,
    Tare_g_Mc_After,
    Dry_Soil_Ws_g_Mc_After,
    Moisture_Content_Porce_Mc_After,
    mL_No7,
    mL_No8,
    mL_No9,
    mL_No10,
    mL_No11,
    mL_No12,
    mL_No13,
    mL_No14,
    mL_No15,
    mL_No16,
    mL_No17,
    mL_No18,
    mL_No19,
    mL_No20,
    mL_No21,
    mL_No22,
    Seg_No1,
    Seg_No2,
    Seg_No3,
    Seg_No4,
    Seg_No5,
    Seg_No6,
    Seg_No7,
    Flow_Rate_No1,
    Flow_Rate_No2,
    Flow_Rate_No3,
    Flow_Rate_No4,
    Flow_Rate_No5,
    Flow_Rate_No6,
    Flow_Rate_No7,
    Flow_Rate_No8,
    Flow_Rate_No9,
    Flow_Rate_No10,
    Flow_Rate_No11,
    Flow_Rate_No12,
    Flow_Rate_No13,
    Flow_Rate_No14,
    Flow_Rate_No15,
    Flow_Rate_No16,
    Flow_Rate_No17,
    Flow_Rate_No18,
    Flow_Rate_No19,
    Flow_Rate_No20,
    Flow_Rate_No21,
    Flow_Rate_No22,
    From_Side_No1,
    From_Side_No2,
    From_Side_No3,
    From_Side_No4,
    From_Side_No5,
    From_Side_No6,
    From_Side_No7,
    From_Side_No8,
    From_Side_No9,
    From_Side_No10,
    From_Side_No11,
    From_Side_No12,
    From_Side_No13,
    From_Side_No14,
    From_Side_No15,
    From_Side_No16,
    From_Side_No17,
    From_Side_No18,
    From_Side_No19,
    From_Side_No20,
    From_Side_No21,
    From_Side_No22,
    From_Top_No1,
    From_Top_No2,
    From_Top_No3,
    From_Top_No4,
    From_Top_No5,
    From_Top_No6,
    From_Top_No7,
    From_Top_No8,
    From_Top_No9,
    From_Top_No10,
    From_Top_No11,
    From_Top_No12,
    From_Top_No13,
    From_Top_No14,
    From_Top_No15,
    From_Top_No16,
    From_Top_No17,
    From_Top_No18,
    From_Top_No19,
    From_Top_No20,
    From_Top_No21,
    From_Top_No22,
    Observation_No1,
    Observation_No2,
    Observation_No3,
    Observation_No4,
    Observation_No5,
    Observation_No6,
    Observation_No7,
    Observation_No8,
    Observation_No9,
    Observation_No10,
    Observation_No11,
    Observation_No12,
    Observation_No13,
    Observation_No14,
    Observation_No15,
    Observation_No16,
    Observation_No17,
    Observation_No18,
    Observation_No19,
    Observation_No20,
    Observation_No21,
    Observation_No22,
    Hole_Size_After_Test_mm,
    Dispersive_Classification,
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
    '$MoistureContentBeforeTestMCPorce',
    '$SpecificGravityEstimatedorMeasured',
    '$MaxDryDensitygcm3',
    '$OptimumMoistureContentPorce',
    '$WtWetSoilMoldgr',
    '$WtMoldgr',
    '$WtWetSoilgr',
    '$LogintudDelSpecimencm',
    '$VolSpecimencm3',
    '$WetDensitygcm3',
    '$DryDensitygcm3',
    '$PorceCompaction',
    '$MoistureContentAfterTestPorce',
    '$WirePunchDiametermm',
    '$TareNameMcBefore',
    '$OvenTemperatureMcBefore',
    '$TarePlusWetSoilgMcBefore',
    '$TarePlusDrySoilgMcBefore',
    '$WaterWwgMcBefore',
    '$TaregMcBefore',
    '$DrySoilWsgMcBefore',
    '$MoistureContentPorceMcBefore',
    '$TareNameMcAfter',
    '$OvenTemperatureMcAfter',
    '$TarePlusWetSoilgMcAfter',
    '$TarePlusDrySoilgMcAfter',
    '$WaterWwgMcAfter',
    '$TaregMcAfter',
    '$DrySoilWsgMcAfter',
    '$MoistureContentPorceMcAfter',
    '$mLNo7',
    '$mLNo8',
    '$mLNo9',
    '$mLNo10',
    '$mLNo11',
    '$mLNo12',
    '$mLNo13',
    '$mLNo14',
    '$mLNo15',
    '$mLNo16',
    '$mLNo17',
    '$mLNo18',
    '$mLNo19',
    '$mLNo20',
    '$mLNo21',
    '$mLNo22',
    '$SegNo1',
    '$SegNo2',
    '$SegNo3',
    '$SegNo4',
    '$SegNo5',
    '$SegNo6',
    '$SegNo7',
    '$FlowRateNo1',
    '$FlowRateNo2',
    '$FlowRateNo3',
    '$FlowRateNo4',
    '$FlowRateNo5',
    '$FlowRateNo6',
    '$FlowRateNo7',
    '$FlowRateNo8',
    '$FlowRateNo9',
    '$FlowRateNo10',
    '$FlowRateNo11',
    '$FlowRateNo12',
    '$FlowRateNo13',
    '$FlowRateNo14',
    '$FlowRateNo15',
    '$FlowRateNo16',
    '$FlowRateNo17',
    '$FlowRateNo18',
    '$FlowRateNo19',
    '$FlowRateNo20',
    '$FlowRateNo21',
    '$FlowRateNo22',
    '$FromSideNo1',
    '$FromSideNo2',
    '$FromSideNo3',
    '$FromSideNo4',
    '$FromSideNo5',
    '$FromSideNo6',
    '$FromSideNo7',
    '$FromSideNo8',
    '$FromSideNo9',
    '$FromSideNo10',
    '$FromSideNo11',
    '$FromSideNo12',
    '$FromSideNo13',
    '$FromSideNo14',
    '$FromSideNo15',
    '$FromSideNo16',
    '$FromSideNo17',
    '$FromSideNo18',
    '$FromSideNo19',
    '$FromSideNo20',
    '$FromSideNo21',
    '$FromSideNo22',
    '$FromTopNo1',
    '$FromTopNo2',
    '$FromTopNo3',
    '$FromTopNo4',
    '$FromTopNo5',
    '$FromTopNo6',
    '$FromTopNo7',
    '$FromTopNo8',
    '$FromTopNo9',
    '$FromTopNo10',
    '$FromTopNo11',
    '$FromTopNo12',
    '$FromTopNo13',
    '$FromTopNo14',
    '$FromTopNo15',
    '$FromTopNo16',
    '$FromTopNo17',
    '$FromTopNo18',
    '$FromTopNo19',
    '$FromTopNo20',
    '$FromTopNo21',
    '$FromTopNo22',
    '$ObservationNo1',
    '$ObservationNo2',
    '$ObservationNo3',
    '$ObservationNo4',
    '$ObservationNo5',
    '$ObservationNo6',
    '$ObservationNo7',
    '$ObservationNo8',
    '$ObservationNo9',
    '$ObservationNo10',
    '$ObservationNo11',
    '$ObservationNo12',
    '$ObservationNo13',
    '$ObservationNo14',
    '$ObservationNo15',
    '$ObservationNo16',
    '$ObservationNo17',
    '$ObservationNo18',
    '$ObservationNo19',
    '$ObservationNo20',
    '$ObservationNo21',
    '$ObservationNo22',
    '$HoleSizeAfterTestmm',
    '$DispersiveClassification',
    '$RegisterBy'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./pinhole.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./pinhole.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./pinhole.php', false);
  }
}

?>

<?php
$search_table = find_by_id('pinhole', (int)$_GET['id']);
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
      $Comments = remove_junk($db->escape($_POST['Comments']));
      $Technician = remove_junk($db->escape($_POST['Technician']));
      $TestStartDate = remove_junk($db->escape($_POST['TestStartDate']));
  
      $MoistureContentBeforeTestMCPorce = remove_junk($db->escape($_POST['MoistureContentBeforeTestMCPorce']));
      $SpecificGravityEstimatedorMeasured = remove_junk($db->escape($_POST['SpecificGravityEstimatedorMeasured']));
      $MaxDryDensitygcm3 = remove_junk($db->escape($_POST['MaxDryDensitygcm3']));
      $OptimumMoistureContentPorce = remove_junk($db->escape($_POST['OptimumMoistureContentPorce']));
      $WtWetSoilMoldgr = remove_junk($db->escape($_POST['WtWetSoilMoldgr']));
      $WtMoldgr = remove_junk($db->escape($_POST['WtMoldgr']));
      $WtWetSoilgr = remove_junk($db->escape($_POST['WtWetSoilgr']));
      $LogintudDelSpecimencm = remove_junk($db->escape($_POST['LogintudDelSpecimencm']));
      $VolSpecimencm3 = remove_junk($db->escape($_POST['VolSpecimencm3']));
      $WetDensitygcm3 = remove_junk($db->escape($_POST['WetDensitygcm3']));
      $DryDensitygcm3 = remove_junk($db->escape($_POST['DryDensitygcm3']));
      $PorceCompaction = remove_junk($db->escape($_POST['PorceCompaction']));
      $MoistureContentAfterTestPorce = remove_junk($db->escape($_POST['MoistureContentAfterTestPorce']));
      $WirePunchDiametermm = remove_junk($db->escape($_POST['WirePunchDiametermm']));
      $TareNameMcBefore = remove_junk($db->escape($_POST['TareNameMcBefore']));
      $OvenTemperatureMcBefore = remove_junk($db->escape($_POST['OvenTemperatureMcBefore']));
      $TarePlusWetSoilgMcBefore = remove_junk($db->escape($_POST['TarePlusWetSoilgMcBefore']));
      $TarePlusDrySoilgMcBefore = remove_junk($db->escape($_POST['TarePlusDrySoilgMcBefore']));
      $WaterWwgMcBefore = remove_junk($db->escape($_POST['WaterWwgMcBefore']));
      $TaregMcBefore = remove_junk($db->escape($_POST['TaregMcBefore']));
      $DrySoilWsgMcBefore = remove_junk($db->escape($_POST['DrySoilWsgMcBefore']));
      $MoistureContentPorceMcBefore = remove_junk($db->escape($_POST['MoistureContentPorceMcBefore']));
      $TareNameMcAfter = remove_junk($db->escape($_POST['TareNameMcAfter']));
      $OvenTemperatureMcAfter = remove_junk($db->escape($_POST['OvenTemperatureMcAfter']));
      $TarePlusWetSoilgMcAfter = remove_junk($db->escape($_POST['TarePlusWetSoilgMcAfter']));
      $TarePlusDrySoilgMcAfter = remove_junk($db->escape($_POST['TarePlusDrySoilgMcAfter']));
      $WaterWwgMcAfter = remove_junk($db->escape($_POST['WaterWwgMcAfter']));
      $TaregMcAfter = remove_junk($db->escape($_POST['TaregMcAfter']));
      $DrySoilWsgMcAfter = remove_junk($db->escape($_POST['DrySoilWsgMcAfter']));
      $MoistureContentPorceMcAfter = remove_junk($db->escape($_POST['MoistureContentPorceMcAfter']));
      $mLNo7 = remove_junk($db->escape($_POST['mLNo7']));
      $mLNo8 = remove_junk($db->escape($_POST['mLNo8']));
      $mLNo9 = remove_junk($db->escape($_POST['mLNo9']));
      $mLNo10 = remove_junk($db->escape($_POST['mLNo10']));
      $mLNo11 = remove_junk($db->escape($_POST['mLNo11']));
      $mLNo12 = remove_junk($db->escape($_POST['mLNo12']));
      $mLNo13 = remove_junk($db->escape($_POST['mLNo13']));
      $mLNo14 = remove_junk($db->escape($_POST['mLNo14']));
      $mLNo15 = remove_junk($db->escape($_POST['mLNo15']));
      $mLNo16 = remove_junk($db->escape($_POST['mLNo16']));
      $mLNo17 = remove_junk($db->escape($_POST['mLNo17']));
      $mLNo18 = remove_junk($db->escape($_POST['mLNo18']));
      $mLNo19 = remove_junk($db->escape($_POST['mLNo19']));
      $mLNo20 = remove_junk($db->escape($_POST['mLNo20']));
      $mLNo21 = remove_junk($db->escape($_POST['mLNo21']));
      $mLNo22 = remove_junk($db->escape($_POST['mLNo22']));
      $SegNo1 = remove_junk($db->escape($_POST['SegNo1']));
      $SegNo2 = remove_junk($db->escape($_POST['SegNo2']));
      $SegNo3 = remove_junk($db->escape($_POST['SegNo3']));
      $SegNo4 = remove_junk($db->escape($_POST['SegNo4']));
      $SegNo5 = remove_junk($db->escape($_POST['SegNo5']));
      $SegNo6 = remove_junk($db->escape($_POST['SegNo6']));
      $SegNo7 = remove_junk($db->escape($_POST['SegNo7']));
      $FlowRateNo1 = remove_junk($db->escape($_POST['FlowRateNo1']));
      $FlowRateNo2 = remove_junk($db->escape($_POST['FlowRateNo2']));
      $FlowRateNo3 = remove_junk($db->escape($_POST['FlowRateNo3']));
      $FlowRateNo4 = remove_junk($db->escape($_POST['FlowRateNo4']));
      $FlowRateNo5 = remove_junk($db->escape($_POST['FlowRateNo5']));
      $FlowRateNo6 = remove_junk($db->escape($_POST['FlowRateNo6']));
      $FlowRateNo7 = remove_junk($db->escape($_POST['FlowRateNo7']));
      $FlowRateNo8 = remove_junk($db->escape($_POST['FlowRateNo8']));
      $FlowRateNo9 = remove_junk($db->escape($_POST['FlowRateNo9']));
      $FlowRateNo10 = remove_junk($db->escape($_POST['FlowRateNo10']));
      $FlowRateNo11 = remove_junk($db->escape($_POST['FlowRateNo11']));
      $FlowRateNo12 = remove_junk($db->escape($_POST['FlowRateNo12']));
      $FlowRateNo13 = remove_junk($db->escape($_POST['FlowRateNo13']));
      $FlowRateNo14 = remove_junk($db->escape($_POST['FlowRateNo14']));
      $FlowRateNo15 = remove_junk($db->escape($_POST['FlowRateNo15']));
      $FlowRateNo16 = remove_junk($db->escape($_POST['FlowRateNo16']));
      $FlowRateNo17 = remove_junk($db->escape($_POST['FlowRateNo17']));
      $FlowRateNo18 = remove_junk($db->escape($_POST['FlowRateNo18']));
      $FlowRateNo19 = remove_junk($db->escape($_POST['FlowRateNo19']));
      $FlowRateNo20 = remove_junk($db->escape($_POST['FlowRateNo20']));
      $FlowRateNo21 = remove_junk($db->escape($_POST['FlowRateNo21']));
      $FlowRateNo22 = remove_junk($db->escape($_POST['FlowRateNo22']));
      $FromSideNo1 = remove_junk($db->escape($_POST['FromSideNo1']));
      $FromSideNo2 = remove_junk($db->escape($_POST['FromSideNo2']));
      $FromSideNo3 = remove_junk($db->escape($_POST['FromSideNo3']));
      $FromSideNo4 = remove_junk($db->escape($_POST['FromSideNo4']));
      $FromSideNo5 = remove_junk($db->escape($_POST['FromSideNo5']));
      $FromSideNo6 = remove_junk($db->escape($_POST['FromSideNo6']));
      $FromSideNo7 = remove_junk($db->escape($_POST['FromSideNo7']));
      $FromSideNo8 = remove_junk($db->escape($_POST['FromSideNo8']));
      $FromSideNo9 = remove_junk($db->escape($_POST['FromSideNo9']));
      $FromSideNo10 = remove_junk($db->escape($_POST['FromSideNo10']));
      $FromSideNo11 = remove_junk($db->escape($_POST['FromSideNo11']));
      $FromSideNo12 = remove_junk($db->escape($_POST['FromSideNo12']));
      $FromSideNo13 = remove_junk($db->escape($_POST['FromSideNo13']));
      $FromSideNo14 = remove_junk($db->escape($_POST['FromSideNo14']));
      $FromSideNo15 = remove_junk($db->escape($_POST['FromSideNo15']));
      $FromSideNo16 = remove_junk($db->escape($_POST['FromSideNo16']));
      $FromSideNo17 = remove_junk($db->escape($_POST['FromSideNo17']));
      $FromSideNo18 = remove_junk($db->escape($_POST['FromSideNo18']));
      $FromSideNo19 = remove_junk($db->escape($_POST['FromSideNo19']));
      $FromSideNo20 = remove_junk($db->escape($_POST['FromSideNo20']));
      $FromSideNo21 = remove_junk($db->escape($_POST['FromSideNo21']));
      $FromSideNo22 = remove_junk($db->escape($_POST['FromSideNo22']));
      $FromTopNo1 = remove_junk($db->escape($_POST['FromTopNo1']));
      $FromTopNo2 = remove_junk($db->escape($_POST['FromTopNo2']));
      $FromTopNo3 = remove_junk($db->escape($_POST['FromTopNo3']));
      $FromTopNo4 = remove_junk($db->escape($_POST['FromTopNo4']));
      $FromTopNo5 = remove_junk($db->escape($_POST['FromTopNo5']));
      $FromTopNo6 = remove_junk($db->escape($_POST['FromTopNo6']));
      $FromTopNo7 = remove_junk($db->escape($_POST['FromTopNo7']));
      $FromTopNo8 = remove_junk($db->escape($_POST['FromTopNo8']));
      $FromTopNo9 = remove_junk($db->escape($_POST['FromTopNo9']));
      $FromTopNo10 = remove_junk($db->escape($_POST['FromTopNo10']));
      $FromTopNo11 = remove_junk($db->escape($_POST['FromTopNo11']));
      $FromTopNo12 = remove_junk($db->escape($_POST['FromTopNo12']));
      $FromTopNo13 = remove_junk($db->escape($_POST['FromTopNo13']));
      $FromTopNo14 = remove_junk($db->escape($_POST['FromTopNo14']));
      $FromTopNo15 = remove_junk($db->escape($_POST['FromTopNo15']));
      $FromTopNo16 = remove_junk($db->escape($_POST['FromTopNo16']));
      $FromTopNo17 = remove_junk($db->escape($_POST['FromTopNo17']));
      $FromTopNo18 = remove_junk($db->escape($_POST['FromTopNo18']));
      $FromTopNo19 = remove_junk($db->escape($_POST['FromTopNo19']));
      $FromTopNo20 = remove_junk($db->escape($_POST['FromTopNo20']));
      $FromTopNo21 = remove_junk($db->escape($_POST['FromTopNo21']));
      $FromTopNo22 = remove_junk($db->escape($_POST['FromTopNo22']));
      $ObservationNo1 = remove_junk($db->escape($_POST['ObservationNo1']));
      $ObservationNo2 = remove_junk($db->escape($_POST['ObservationNo2']));
      $ObservationNo3 = remove_junk($db->escape($_POST['ObservationNo3']));
      $ObservationNo4 = remove_junk($db->escape($_POST['ObservationNo4']));
      $ObservationNo5 = remove_junk($db->escape($_POST['ObservationNo5']));
      $ObservationNo6 = remove_junk($db->escape($_POST['ObservationNo6']));
      $ObservationNo7 = remove_junk($db->escape($_POST['ObservationNo7']));
      $ObservationNo8 = remove_junk($db->escape($_POST['ObservationNo8']));
      $ObservationNo9 = remove_junk($db->escape($_POST['ObservationNo9']));
      $ObservationNo10 = remove_junk($db->escape($_POST['ObservationNo10']));
      $ObservationNo11 = remove_junk($db->escape($_POST['ObservationNo11']));
      $ObservationNo12 = remove_junk($db->escape($_POST['ObservationNo12']));
      $ObservationNo13 = remove_junk($db->escape($_POST['ObservationNo13']));
      $ObservationNo14 = remove_junk($db->escape($_POST['ObservationNo14']));
      $ObservationNo15 = remove_junk($db->escape($_POST['ObservationNo15']));
      $ObservationNo16 = remove_junk($db->escape($_POST['ObservationNo16']));
      $ObservationNo17 = remove_junk($db->escape($_POST['ObservationNo17']));
      $ObservationNo18 = remove_junk($db->escape($_POST['ObservationNo18']));
      $ObservationNo19 = remove_junk($db->escape($_POST['ObservationNo19']));
      $ObservationNo20 = remove_junk($db->escape($_POST['ObservationNo20']));
      $ObservationNo21 = remove_junk($db->escape($_POST['ObservationNo21']));
      $ObservationNo22 = remove_junk($db->escape($_POST['ObservationNo22']));
      $HoleSizeAfterTestmm = remove_junk($db->escape($_POST['HoleSizeAfterTestmm']));
      $DispersiveClassification = remove_junk($db->escape($_POST['DispersiveClassification']));

      $RegisterBy = $user['name'];

      $query = "UPDATE pinhole SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Method = '{$Method}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";
      $query .= "Moisture_Content_Before_Test_MC_Porce = '{$MoistureContentBeforeTestMCPorce}', ";
      $query .= "Specific_Gravity_Estimated_or_Measured = '{$SpecificGravityEstimatedorMeasured}', ";
      $query .= "Max_Dry_Density_g_cm3 = '{$MaxDryDensitygcm3}', ";
      $query .= "Optimum_Moisture_Content_Porce = '{$OptimumMoistureContentPorce}', ";
      $query .= "Wt_Wet_Soil_Mold_gr = '{$WtWetSoilMoldgr}', ";
      $query .= "Wt_Mold_gr = '{$WtMoldgr}', ";
      $query .= "Wt_Wet_Soil_gr = '{$WtWetSoilgr}', ";
      $query .= "Logintud_Del_Specimen_cm = '{$LogintudDelSpecimencm}', ";
      $query .= "Vol_Specimen_cm3 = '{$VolSpecimencm3}', ";
      $query .= "Wet_Density_gcm3 = '{$WetDensitygcm3}', ";
      $query .= "Dry_Density_gcm3 = '{$DryDensitygcm3}', ";
      $query .= "Porce_Compaction = '{$PorceCompaction}', ";
      $query .= "Moisture_Content_After_Test_Porce = '{$MoistureContentAfterTestPorce}', ";
      $query .= "Wire_Punch_Diameter_mm = '{$WirePunchDiametermm}', ";
      $query .= "Tare_Name_Mc_Before = '{$TareNameMcBefore}', ";
      $query .= "Oven_Temperature_Mc_Before = '{$OvenTemperatureMcBefore}', ";
      $query .= "Tare_Plus_Wet_Soil_g_Mc_Before = '{$TarePlusWetSoilgMcBefore}', ";
      $query .= "Tare_Plus_Dry_Soil_g_Mc_Before = '{$TarePlusDrySoilgMcBefore}', ";
      $query .= "Water_Ww_g_Mc_Before = '{$WaterWwgMcBefore}', ";
      $query .= "Tare_g_Mc_Before = '{$TaregMcBefore}', ";
      $query .= "Dry_Soil_Ws_g_Mc_Before = '{$DrySoilWsgMcBefore}', ";
      $query .= "Moisture_Content_Porce_Mc_Before = '{$MoistureContentPorceMcBefore}', ";
      $query .= "Tare_Name_Mc_After = '{$TareNameMcAfter}', ";
      $query .= "Oven_Temperature_Mc_After = '{$OvenTemperatureMcAfter}', ";
      $query .= "Tare_Plus_Wet_Soil_g_Mc_After = '{$TarePlusWetSoilgMcAfter}', ";
      $query .= "Tare_Plus_Dry_Soil_g_Mc_After = '{$TarePlusDrySoilgMcAfter}', ";
      $query .= "Water_Ww_g_Mc_After = '{$WaterWwgMcAfter}', ";
      $query .= "Tare_g_Mc_After = '{$TaregMcAfter}', ";
      $query .= "Dry_Soil_Ws_g_Mc_After = '{$DrySoilWsgMcAfter}', ";
      $query .= "Moisture_Content_Porce_Mc_After = '{$MoistureContentPorceMcAfter}', ";
      $query .= "mL_No7 = '{$mLNo7}', ";
      $query .= "mL_No8 = '{$mLNo8}', ";
      $query .= "mL_No9 = '{$mLNo9}', ";
      $query .= "mL_No10 = '{$mLNo10}', ";
      $query .= "mL_No11 = '{$mLNo11}', ";
      $query .= "mL_No12 = '{$mLNo12}', ";
      $query .= "mL_No13 = '{$mLNo13}', ";
      $query .= "mL_No14 = '{$mLNo14}', ";
      $query .= "mL_No15 = '{$mLNo15}', ";
      $query .= "mL_No16 = '{$mLNo16}', ";
      $query .= "mL_No17 = '{$mLNo17}', ";
      $query .= "mL_No18 = '{$mLNo18}', ";
      $query .= "mL_No19 = '{$mLNo19}', ";
      $query .= "mL_No20 = '{$mLNo20}', ";
      $query .= "mL_No21 = '{$mLNo21}', ";
      $query .= "mL_No22 = '{$mLNo22}', ";
      $query .= "Seg_No1 = '{$SegNo1}', ";
      $query .= "Seg_No2 = '{$SegNo2}', ";
      $query .= "Seg_No3 = '{$SegNo3}', ";
      $query .= "Seg_No4 = '{$SegNo4}', ";
      $query .= "Seg_No5 = '{$SegNo5}', ";
      $query .= "Seg_No6 = '{$SegNo6}', ";
      $query .= "Seg_No7 = '{$SegNo7}', ";
      $query .= "Flow_Rate_No1 = '{$FlowRateNo1}', ";
      $query .= "Flow_Rate_No2 = '{$FlowRateNo2}', ";
      $query .= "Flow_Rate_No3 = '{$FlowRateNo3}', ";
      $query .= "Flow_Rate_No4 = '{$FlowRateNo4}', ";
      $query .= "Flow_Rate_No5 = '{$FlowRateNo5}', ";
      $query .= "Flow_Rate_No6 = '{$FlowRateNo6}', ";
      $query .= "Flow_Rate_No7 = '{$FlowRateNo7}', ";
      $query .= "Flow_Rate_No8 = '{$FlowRateNo8}', ";
      $query .= "Flow_Rate_No8 = '{$FlowRateNo9}', ";
      $query .= "Flow_Rate_No10 = '{$FlowRateNo10}', ";
      $query .= "Flow_Rate_No11 = '{$FlowRateNo11}', ";
      $query .= "Flow_Rate_No12 = '{$FlowRateNo12}', ";
      $query .= "Flow_Rate_No13 = '{$FlowRateNo13}', ";
      $query .= "Flow_Rate_No14 = '{$FlowRateNo14}', ";
      $query .= "Flow_Rate_No15 = '{$FlowRateNo15}', ";
      $query .= "Flow_Rate_No16 = '{$FlowRateNo16}', ";
      $query .= "Flow_Rate_No17 = '{$FlowRateNo17}', ";
      $query .= "Flow_Rate_No18 = '{$FlowRateNo18}', ";
      $query .= "Flow_Rate_No19 = '{$FlowRateNo19}', ";
      $query .= "Flow_Rate_No20 = '{$FlowRateNo20}', ";
      $query .= "Flow_Rate_No21 = '{$FlowRateNo21}', ";
      $query .= "Flow_Rate_No22 = '{$FlowRateNo22}', ";
      $query .= "From_Side_No1 = '{$FromSideNo1}', ";
      $query .= "From_Side_No2 = '{$FromSideNo2}', ";
      $query .= "From_Side_No3 = '{$FromSideNo3}', ";
      $query .= "From_Side_No4 = '{$FromSideNo4}', ";
      $query .= "From_Side_No5 = '{$FromSideNo5}', ";
      $query .= "From_Side_No6 = '{$FromSideNo6}', ";
      $query .= "From_Side_No7 = '{$FromSideNo7}', ";
      $query .= "From_Side_No8 = '{$FromSideNo8}', ";
      $query .= "From_Side_No9 = '{$FromSideNo9}', ";
      $query .= "From_Side_No10 = '{$FromSideNo10}', ";
      $query .= "From_Side_No11 = '{$FromSideNo11}', ";
      $query .= "From_Side_No12 = '{$FromSideNo12}', ";
      $query .= "From_Side_No13 = '{$FromSideNo13}', ";
      $query .= "From_Side_No14 = '{$FromSideNo14}', ";
      $query .= "From_Side_No15 = '{$FromSideNo15}', ";
      $query .= "From_Side_No16 = '{$FromSideNo16}', ";
      $query .= "From_Side_No17 = '{$FromSideNo17}', ";
      $query .= "From_Side_No18 = '{$FromSideNo18}', ";
      $query .= "From_Side_No19 = '{$FromSideNo19}', ";
      $query .= "From_Side_No20 = '{$FromSideNo20}', ";
      $query .= "From_Side_No21 = '{$FromSideNo21}', ";
      $query .= "From_Side_No22 = '{$FromSideNo22}', ";
      $query .= "From_Top_No1 = '{$FromTopNo1}', ";
      $query .= "From_Top_No2 = '{$FromTopNo2}', ";
      $query .= "From_Top_No3 = '{$FromTopNo3}', ";
      $query .= "From_Top_No4 = '{$FromTopNo4}', ";
      $query .= "From_Top_No5 = '{$FromTopNo5}', ";
      $query .= "From_Top_No6 = '{$FromTopNo6}', ";
      $query .= "From_Top_No7 = '{$FromTopNo7}', ";
      $query .= "From_Top_No8 = '{$FromTopNo8}', ";
      $query .= "From_Top_No9 = '{$FromTopNo9}', ";
      $query .= "From_Top_No10 = '{$FromTopNo10}', ";
      $query .= "From_Top_No11 = '{$FromTopNo11}', ";
      $query .= "From_Top_No12 = '{$FromTopNo12}', ";
      $query .= "From_Top_No13 = '{$FromTopNo13}', ";
      $query .= "From_Top_No14 = '{$FromTopNo14}', ";
      $query .= "From_Top_No15 = '{$FromTopNo15}', ";
      $query .= "From_Top_No16 = '{$FromTopNo16}', ";
      $query .= "From_Top_No17 = '{$FromTopNo17}', ";
      $query .= "From_Top_No18 = '{$FromTopNo18}', ";
      $query .= "From_Top_No19 = '{$FromTopNo19}', ";
      $query .= "From_Top_No20 = '{$FromTopNo20}', ";
      $query .= "From_Top_No21 = '{$FromTopNo21}', ";
      $query .= "From_Top_No22 = '{$FromTopNo22}', ";
      $query .= "Observation_No1 = '{$ObservationNo1}', ";
      $query .= "Observation_No2 = '{$ObservationNo2}', ";
      $query .= "Observation_No3 = '{$ObservationNo3}', ";
      $query .= "Observation_No4 = '{$ObservationNo4}', ";
      $query .= "Observation_No5 = '{$ObservationNo5}', ";
      $query .= "Observation_No6 = '{$ObservationNo6}', ";
      $query .= "Observation_No7 = '{$ObservationNo7}', ";
      $query .= "Observation_No8 = '{$ObservationNo8}', ";
      $query .= "Observation_No9 = '{$ObservationNo9}', ";
      $query .= "Observation_No10 = '{$ObservationNo10}', ";
      $query .= "Observation_No11 = '{$ObservationNo11}', ";
      $query .= "Observation_No12 = '{$ObservationNo12}', ";
      $query .= "Observation_No13 = '{$ObservationNo13}', ";
      $query .= "Observation_No14 = '{$ObservationNo14}', ";
      $query .= "Observation_No15 = '{$ObservationNo15}', ";
      $query .= "Observation_No16 = '{$ObservationNo16}', ";
      $query .= "Observation_No17 = '{$ObservationNo17}', ";
      $query .= "Observation_No18 = '{$ObservationNo18}', ";
      $query .= "Observation_No19 = '{$ObservationNo19}', ";
      $query .= "Observation_No20 = '{$ObservationNo20}', ";
      $query .= "Observation_No21 = '{$ObservationNo21}', ";
      $query .= "Observation_No22 = '{$ObservationNo22}', ";
      $query .= "Hole_Size_After_Test_mm = '{$HoleSizeAfterTestmm}', ";
      $query .= "Dispersive_Classification = '{$DispersiveClassification}', ";
      $query .= "Registered_By = '{$RegisterBy}' ";
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-PH.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-PH.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-PH.php?id=' . $search_table['id'], false);
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
    $query_select = "SELECT * FROM pinhole WHERE id = '{$search_table}'";
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