<?php

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
    Dispersive_Classification
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
    '$DispersiveClassification'
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