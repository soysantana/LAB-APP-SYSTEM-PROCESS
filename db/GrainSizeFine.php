<?php

$user = current_user();

// Función para obtener y escapar datos del POST
function get_post_data($field) {
    global $db;
    return $db->escape($_POST[$field]);
}

if (isset($_POST['GrainSizeFine'])) {
    $req_fields = array(
        'sampleid',
        'samplenumber',
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
        'TestStartDate',
    );

    validate_fields($req_fields);

    if (empty($errors)) {
        $sampleid = get_post_data('sampleid');
        $samplenumber = get_post_data('samplenumber');
        $structure = get_post_data('structure');
        $area = get_post_data('area');
        $source = get_post_data('source');
        $depthfrom = get_post_data('depthfrom');
        $depthto = get_post_data('depthto');
        $materialtype = get_post_data('materialtype');
        $sampletype = get_post_data('sampletype');
        $north = get_post_data('north');
        $east = get_post_data('east');
        $elev = get_post_data('elev');
        $sampledate = get_post_data('sampledate');
        $reportdate = make_date();
        $testype = "GS-Fine";
        $Standard = get_post_data('Standard');
        $PreparationMethod = get_post_data('PreparationMethod');
        $SplitMethod = get_post_data('SplitMethod');
        $Comments = get_post_data('Comments');
        $Technician = get_post_data('Technician');
        $TestStartDate = get_post_data('TestStartDate');

        $DateMaterialArrive = get_post_data('DateMaterialArrive');
        $Dateofimprovement = get_post_data('Dateofimprovement');
        $Improvement = get_post_data('Improvement');
        $SamplesusigforimprovementNo1 = get_post_data('SamplesusigforimprovementNo1');
        $SamplesusigforimprovementNo2 = get_post_data('SamplesusigforimprovementNo2');
        $Container = get_post_data('Container');
        $TareWetSoil = get_post_data('TareWetSoil');
        $TareDrySoil = get_post_data('TareDrySoil');
        $Tare = get_post_data('Tare');
        $DrySoil = get_post_data('DrySoil');
        $Washed = get_post_data('Washed');
        $WashPan = get_post_data('WashPan');
        $WtRet5127 = get_post_data('WtRet5127');
        $PorceRet5127 = get_post_data('PorceRet5127');
        $CumRet5127 = get_post_data('CumRet5127');
        $PorcePass5127 = get_post_data('PorcePass5127');
        $WtRet4101 = get_post_data('WtRet4101');
        $PorceRet4101 = get_post_data('PorceRet4101');
        $CumRet4101 = get_post_data('CumRet4101');
        $PorcePass4101 = get_post_data('PorcePass4101');
        $WtRet375 = get_post_data('WtRet375');
        $PorceRet375 = get_post_data('PorceRet375');
        $CumRet375 = get_post_data('CumRet375');
        $PorcePass375 = get_post_data('PorcePass375');
        $WtRet2p563 = get_post_data('WtRet2p563');
        $PorceRet2p563 = get_post_data('PorceRet2p563');
        $CumRet2p563 = get_post_data('CumRet2p563');
        $PorcePass2p563 = get_post_data('PorcePass2p563');
        $WtRet250 = get_post_data('WtRet250');
        $PorceRet250 = get_post_data('PorceRet250');
        $CumRet250 = get_post_data('CumRet250');
        $PorcePass250 = get_post_data('PorcePass250');
        $WtRet1p537 = get_post_data('WtRet1p537');
        $PorceRet1p537 = get_post_data('PorceRet1p537');
        $CumRet1p537 = get_post_data('CumRet1p537');
        $PorcePass1p537 = get_post_data('PorcePass1p537');
        $WtRet125 = get_post_data('WtRet125');
        $PorceRet125 = get_post_data('PorceRet125');
        $CumRet125 = get_post_data('CumRet125');
        $PorcePass125 = get_post_data('PorcePass125');
        $WtRet3p419 = get_post_data('WtRet3p419');
        $PorceRet3p419 = get_post_data('PorceRet3p419');
        $CumRet3p419 = get_post_data('CumRet3p419');
        $PorcePass3p419 = get_post_data('PorcePass3p419');
        $WtRet1p212 = get_post_data('WtRet1p212');
        $PorceRet1p212 = get_post_data('PorceRet1p212');
        $CumRet1p212 = get_post_data('CumRet1p212');
        $PorcePass1p212 = get_post_data('PorcePass1p212');
        $WtRet3p89 = get_post_data('WtRet3p89');
        $PorceRet3p89 = get_post_data('PorceRet3p89');
        $CumRet3p89 = get_post_data('CumRet3p89');
        $PorcePass3p89 = get_post_data('PorcePass3p89');
        $WtRetNo44 = get_post_data('WtRetNo44');
        $PorceRetNo44 = get_post_data('PorceRetNo44');
        $CumRetNo44 = get_post_data('CumRetNo44');
        $PorcePassNo44 = get_post_data('PorcePassNo44');
        $WtRetNo102 = get_post_data('WtRetNo102');
        $PorceRetNo102 = get_post_data('PorceRetNo102');
        $CumRetNo102 = get_post_data('CumRetNo102');
        $PorcePassNo102 = get_post_data('PorcePassNo102');
        $WtRetNo161 = get_post_data('WtRetNo161');
        $PorceRetNo161 = get_post_data('PorceRetNo161');
        $CumRetNo161 = get_post_data('CumRetNo161');
        $PorcePassNo161 = get_post_data('PorcePassNo161');
        $WtRetNo200p85 = get_post_data('WtRetNo200p85');
        $PorceRetNo200p85 = get_post_data('PorceRetNo200p85');
        $CumRetNo200p85 = get_post_data('CumRetNo200p85');
        $PorcePassNo200p85 = get_post_data('PorcePassNo200p85');
        $WtRetNo500p3 = get_post_data('WtRetNo500p3');
        $PorceRetNo500p3 = get_post_data('PorceRetNo500p3');
        $CumRetNo500p3 = get_post_data('CumRetNo500p3');
        $PorcePassNo500p3 = get_post_data('PorcePassNo500p3');
        $WtRetNo600p25 = get_post_data('WtRetNo600p25');
        $PorceRetNo600p25 = get_post_data('PorceRetNo600p25');
        $CumRetNo600p25 = get_post_data('CumRetNo600p25');
        $PorcePassNo600p25 = get_post_data('PorcePassNo600p25');
        $WtRetNo2000p075 = get_post_data('WtRetNo2000p075');
        $PorceRetNo2000p075 = get_post_data('PorceRetNo2000p075');
        $CumRetNo2000p075 = get_post_data('CumRetNo2000p075');
        $PorcePassNo2000p075 = get_post_data('PorcePassNo2000p075');
        $WtRetPan = get_post_data('WtRetPan');
        $PorceRetPan = get_post_data('PorceRetPan');
        $WtRetTotalPan = get_post_data('WtRetTotalPan');
        $PorceRetTotalPan = get_post_data('PorceRetTotalPan');
        $CumRetTotalPan = get_post_data('CumRetTotalPan');
        $PorcePassTotalPan = get_post_data('PorcePassTotalPan');
        $CoarserthanGravel = get_post_data('CoarserthanGravel');
        $Gravel = get_post_data('Gravel');
        $Sand = get_post_data('Sand');
        $Fines = get_post_data('Fines');
        $D10 = get_post_data('D10');
        $D15 = get_post_data('D15');
        $D30 = get_post_data('D30');
        $D60 = get_post_data('D60');
        $D85 = get_post_data('D85');
        $Cc = get_post_data('Cc');
        $Cu = get_post_data('Cu');
        $Specs5127 = get_post_data('Specs5127');
        $Specs4101 = get_post_data('Specs4101');
        $Specs375 = get_post_data('Specs375');
        $Specs2p563 = get_post_data('Specs2p563');
        $Specs250 = get_post_data('Specs250');
        $Specs1p537 = get_post_data('Specs1p537');
        $Specs125 = get_post_data('Specs125');
        $Specs3p419 = get_post_data('Specs3p419');
        $Specs1p212 = get_post_data('Specs1p212');
        $Specs3p89 = get_post_data('Specs3p89');
        $SpecsNo44 = get_post_data('SpecsNo44');
        $SpecsNo102 = get_post_data('SpecsNo102');
        $SpecsNo161 = get_post_data('SpecsNo161');
        $SpecsNo200p85 = get_post_data('SpecsNo200p85');
        $SpecsNo500p3 = get_post_data('SpecsNo500p3');
        $SpecsNo600p25 = get_post_data('SpecsNo600p25');
        $SpecsNo2000p075 = get_post_data('SpecsNo2000p075');
        $WeightusedfortheTestg = get_post_data('WeightusedfortheTestg');
        $AParticlesReactive = get_post_data('AParticlesReactive');
        $BParticlesReactive = get_post_data('BParticlesReactive');
        $CParticlesReactive = get_post_data('CParticlesReactive');
        $DParticlesReactive = get_post_data('DParticlesReactive');
        $EParticlesReactive = get_post_data('EParticlesReactive');
        $AverageParticlesReactive = get_post_data('AverageParticlesReactive');
        $ReactionStrengthResult = get_post_data('ReactionStrengthResult');
        $AcidReactivityTestResult = get_post_data('AcidReactivityTestResult');
        $GrainSizeTestResultNo1 = get_post_data('GrainSizeTestResultNo1');
        $GrainSizeTestResultNo2 = get_post_data('GrainSizeTestResultNo2');

        $WtRet3p589 = get_post_data('WtRet3p589');
        $PorceRet3p589 = get_post_data('PorceRet3p589');
        $CumRet3p589 = get_post_data('CumRet3p589');
        $PorcePass3p589 = get_post_data('PorcePass3p589');

        $RegisterBy = $user['name'];

        $sql = "INSERT INTO grain_size_fine_aggregate (
            Sample_ID, Sample_Number, Structure, Area, Source, Depth_From, Depth_To,
            Material_Type, Sample_Type, North, East, Elev, Sample_Date, Report_Date,
            test_type, Standard, Preparation_Method, Split_Method, Comments, Technician,
            Test_Start_Date,
            Date_Material_Arrive,
            Date_of_improvement,
            Improvement,
            Samples_usig_for_improvement_No1,
            Samples_usig_for_improvement_No2,
            Container,
            Tare_Wet_Soil,
            Tare_Dry_Soil,
            Tare,
            Dry_Soil,
            Washed,
            Wash_Pan,
            Wt_Ret_5_127,
            Porce_Ret_5_127,
            Cum_Ret_5_127,
            Porce_Pass_5_127,
            Wt_Ret_4_101,
            Porce_Ret_4_101,
            Cum_Ret_4_101,
            Porce_Pass_4_101,
            Wt_Ret_3_75,
            Porce_Ret_3_75,
            Cum_Ret_3_75,
            Porce_Pass_3_75,
            Wt_Ret_2p5_63,
            Porce_Ret_2p5_63,
            Cum_Ret_2p5_63,
            Porce_Pass_2p5_63,
            Wt_Ret_2_50,
            Porce_Ret_2_50,
            Cum_Ret_2_50,
            Porce_Pass_2_50,
            Wt_Ret_1p5_37,
            Porce_Ret_1p5_37,
            Cum_Ret_1p5_37,
            Porce_Pass_1p5_37,
            Wt_Ret_1_25,
            Porce_Ret_1_25,
            Cum_Ret_1_25,
            Porce_Pass_1_25,
            Wt_Ret_3p4_19,
            Porce_Ret_3p4_19,
            Cum_Ret_3p4_19,
            Porce_Pass_3p4_19,
            Wt_Ret_1p2_12,
            Porce_Ret_1p2_12,
            Cum_Ret_1p2_12,
            Porce_Pass_1p2_12,
            Wt_Ret_3p8_9,
            Porce_Ret_3p8_9,
            Cum_Ret_3p8_9,
            Porce_Pass_3p8_9,
            Wt_Ret_No4_4,
            Porce_Ret_No4_4,
            Cum_Ret_No4_4,
            Porce_Pass_No4_4,
            Wt_Ret_No10_2,
            Porce_Ret_No10_2,
            Cum_Ret_No10_2,
            Porce_Pass_No10_2,
            Wt_Ret_No16_1,
            Porce_Ret_No16_1,
            Cum_Ret_No16_1,
            Porce_Pass_No16_1,
            Wt_Ret_No20_0p85,
            Porce_Ret_No20_0p85,
            Cum_Ret_No20_0p85,
            Porce_Pass_No20_0p85,
            Wt_Ret_No50_0p3,
            Porce_Ret_No50_0p3,
            Cum_Ret_No50_0p3,
            Porce_Pass_No50_0p3,
            Wt_Ret_No60_0p25,
            Porce_Ret_No60_0p25,
            Cum_Ret_No60_0p25,
            Porce_Pass_No60_0p25,
            Wt_Ret_No200_0p075,
            Porce_Ret_No200_0p075,
            Cum_Ret_No200_0p075,
            Porce_Pass_No200_0p075,
            Wt_Ret_Pan,
            Porce_Ret_Pan,
            Wt_Ret_Total_Pan,
            Porce_Ret_Total_Pan,
            Cum_Ret_Total_Pan,
            Porce_Pass_Total_Pan,
            Coarser_than_Gravel,
            Gravel,
            Sand,
            Fines,
            D10,
            D15,
            D30,
            D60,
            D85,
            Cc,
            Cu,
            Specs_5_127,
            Specs_4_101,
            Specs_3_75,
            Specs_2p5_63,
            Specs_2_50,
            Specs_1p5_37,
            Specs_1_25,
            Specs_3p4_19,
            Specs_1p2_12,
            Specs_3p8_9,
            Specs_No4_4,
            Specs_No10_2,
            Specs_No16_1,
            Specs_No20_0p85,
            Specs_No50_0p3,
            Specs_No60_0p25,
            Specs_No200_0p075,
            Weight_used_for_the_Test_g,
            A_Particles_Reactive,
            B_Particles_Reactive,
            C_Particles_Reactive,
            D_Particles_Reactive,
            E_Particles_Reactive,
            Average_Particles_Reactive,
            Reaction_Strength_Result,
            Acid_Reactivity_Test_Result,
            Grain_Size_Test_Result_No1,
            Grain_Size_Test_Result_No2,
            Wt_Ret_3p5_89,
            Porce_Ret_3p5_89,
            Cum_Ret_3p5_89,
            Porce_Pass_3p5_89,
            Registered_By
        ) VALUES (
            '$sampleid', '$samplenumber', '$structure', '$area', '$source', '$depthfrom',
            '$depthto', '$materialtype', '$sampletype', '$north', '$east', '$elev',
            '$sampledate', '$reportdate', '$testype', '$Standard', '$PreparationMethod',
            '$SplitMethod', '$Comments', '$Technician', '$TestStartDate',
            '$DateMaterialArrive',
            '$Dateofimprovement',
            '$Improvement',
            '$SamplesusigforimprovementNo1',
            '$SamplesusigforimprovementNo2',
            '$Container',
            '$TareWetSoil',
            '$TareDrySoil',
            '$Tare',
            '$DrySoil',
            '$Washed',
            '$WashPan',
            '$WtRet5127',
            '$PorceRet5127',
            '$CumRet5127',
            '$PorcePass5127',
            '$WtRet4101',
            '$PorceRet4101',
            '$CumRet4101',
            '$PorcePass4101',
            '$WtRet375',
            '$PorceRet375',
            '$CumRet375',
            '$PorcePass375',
            '$WtRet2p563',
            '$PorceRet2p563',
            '$CumRet2p563',
            '$PorcePass2p563',
            '$WtRet250',
            '$PorceRet250',
            '$CumRet250',
            '$PorcePass250',
            '$WtRet1p537',
            '$PorceRet1p537',
            '$CumRet1p537',
            '$PorcePass1p537',
            '$WtRet125',
            '$PorceRet125',
            '$CumRet125',
            '$PorcePass125',
            '$WtRet3p419',
            '$PorceRet3p419',
            '$CumRet3p419',
            '$PorcePass3p419',
            '$WtRet1p212',
            '$PorceRet1p212',
            '$CumRet1p212',
            '$PorcePass1p212',
            '$WtRet3p89',
            '$PorceRet3p89',
            '$CumRet3p89',
            '$PorcePass3p89',
            '$WtRetNo44',
            '$PorceRetNo44',
            '$CumRetNo44',
            '$PorcePassNo44',
            '$WtRetNo102',
            '$PorceRetNo102',
            '$CumRetNo102',
            '$PorcePassNo102',
            '$WtRetNo161',
            '$PorceRetNo161',
            '$CumRetNo161',
            '$PorcePassNo161',
            '$WtRetNo200p85',
            '$PorceRetNo200p85',
            '$CumRetNo200p85',
            '$PorcePassNo200p85',
            '$WtRetNo500p3',
            '$PorceRetNo500p3',
            '$CumRetNo500p3',
            '$PorcePassNo500p3',
            '$WtRetNo600p25',
            '$PorceRetNo600p25',
            '$CumRetNo600p25',
            '$PorcePassNo600p25',
            '$WtRetNo2000p075',
            '$PorceRetNo2000p075',
            '$CumRetNo2000p075',
            '$PorcePassNo2000p075',
            '$WtRetPan',
            '$PorceRetPan',
            '$WtRetTotalPan',
            '$PorceRetTotalPan',
            '$CumRetTotalPan',
            '$PorcePassTotalPan',
            '$CoarserthanGravel',
            '$Gravel',
            '$Sand',
            '$Fines',
            '$D10',
            '$D15',
            '$D30',
            '$D60',
            '$D85',
            '$Cc',
            '$Cu',
            '$Specs5127',
            '$Specs4101',
            '$Specs375',
            '$Specs2p563',
            '$Specs250',
            '$Specs1p537',
            '$Specs125',
            '$Specs3p419',
            '$Specs1p212',
            '$Specs3p89',
            '$SpecsNo44',
            '$SpecsNo102',
            '$SpecsNo161',
            '$SpecsNo200p85',
            '$SpecsNo500p3',
            '$SpecsNo600p25',
            '$SpecsNo2000p075',
            '$WeightusedfortheTestg',
            '$AParticlesReactive',
            '$BParticlesReactive',
            '$CParticlesReactive',
            '$DParticlesReactive',
            '$EParticlesReactive',
            '$AverageParticlesReactive',
            '$ReactionStrengthResult',
            '$AcidReactivityTestResult',
            '$GrainSizeTestResultNo1',
            '$GrainSizeTestResultNo2',
            '$WtRet3p589',
            '$PorceRet3p589',
            '$CumRet3p589',
            '$PorcePass3p589',
            '$RegisterBy'
        )";

        if ($db->query($sql)) {
            $session->msg('s', "Ensayo agregado exitosamente.");
            redirect('./gs_fine_agg.php', false);
        } else {
            $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
            redirect('./gs_fine_agg.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('./gs_fine_agg.php', false);
    }
}

?>

<?php
$search_table = find_by_id('grain_size_fine_aggregate', (int)$_GET['id']);
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
      $SplitMethod = $db->escape($_POST['SplitMethod']);
      $Comments = $db->escape($_POST['Comments']);
      $Technician = $db->escape($_POST['Technician']);
      $TestStartDate = $db->escape($_POST['TestStartDate']);
      $DateMaterialArrive = $db->escape($_POST['DateMaterialArrive']);
      $Dateofimprovement = $db->escape($_POST['Dateofimprovement']);
      $Improvement = $db->escape($_POST['Improvement']);
      $SamplesusigforimprovementNo1 = $db->escape($_POST['SamplesusigforimprovementNo1']);
      $SamplesusigforimprovementNo2 = $db->escape($_POST['SamplesusigforimprovementNo2']);

    // Reactivity Test Method
      $WeightusedfortheTestg = $db->escape($_POST['WeightusedfortheTestg']);
      $AParticlesReactive = $db->escape($_POST['AParticlesReactive']);
      $BParticlesReactive = $db->escape($_POST['BParticlesReactive']);
      $CParticlesReactive = $db->escape($_POST['CParticlesReactive']);
      $DParticlesReactive = $db->escape($_POST['DParticlesReactive']);
      $EParticlesReactive = $db->escape($_POST['EParticlesReactive']);
      $AverageParticlesReactive = $db->escape($_POST['AverageParticlesReactive']);
      $ReactionStrengthResult = $db->escape($_POST['ReactionStrengthResult']);
      $AcidReactivityTestResult = $db->escape($_POST['AcidReactivityTestResult']);
      $GrainSizeTestResultNo1 = $db->escape($_POST['GrainSizeTestResultNo1']);
      $GrainSizeTestResultNo2 = $db->escape($_POST['GrainSizeTestResultNo2']);
  
    // Container
      $Container = $db->escape($_POST['Container']);
      $TareWetSoil = $db->escape($_POST['TareWetSoil']);
      $TareDrySoil = $db->escape($_POST['TareDrySoil']);
      $Tare = $db->escape($_POST['Tare']);
      $DrySoil = $db->escape($_POST['DrySoil']);
      $Washed = $db->escape($_POST['Washed']);
      $WashPan = $db->escape($_POST['WashPan']);
  
    // Sumary GS
      $CoarserthanGravel = $db->escape($_POST['CoarserthanGravel']);
      $Gravel = $db->escape($_POST['Gravel']);
      $Sand = $db->escape($_POST['Sand']);
      $Fines = $db->escape($_POST['Fines']);
      $D10 = $db->escape($_POST['D10']);
      $D15 = $db->escape($_POST['D15']);
      $D30 = $db->escape($_POST['D30']);
      $D60 = $db->escape($_POST['D60']);
      $D85 = $db->escape($_POST['D85']);
      $Cc = $db->escape($_POST['Cc']);
      $Cu = $db->escape($_POST['Cu']);
  
    // Tamizes  
      $WtRet5127 = $db->escape($_POST['WtRet5127']);
      $PorceRet5127 = $db->escape($_POST['PorceRet5127']);
      $CumRet5127 = $db->escape($_POST['CumRet5127']);
      $PorcePass5127 = $db->escape($_POST['PorcePass5127']);
      $Specs5127 = $db->escape($_POST['Specs5127']);
  
      $WtRet4101 = $db->escape($_POST['WtRet4101']);
      $PorceRet4101 = $db->escape($_POST['PorceRet4101']);
      $CumRet4101 = $db->escape($_POST['CumRet4101']);
      $PorcePass4101 = $db->escape($_POST['PorcePass4101']);
      $Specs4101 = $db->escape($_POST['Specs4101']);

      $WtRet3p589 = $db->escape($_POST['WtRet3p589']);
      $PorceRet3p589 = $db->escape($_POST['PorceRet3p589']);
      $CumRet3p589 = $db->escape($_POST['CumRet3p589']);
      $PorcePass3p589 = $db->escape($_POST['PorcePass3p589']);
      $Specs3p589 = $db->escape($_POST['Specs3p589']);
  
      $WtRet375 = $db->escape($_POST['WtRet375']);
      $PorceRet375 = $db->escape($_POST['PorceRet375']);
      $CumRet375 = $db->escape($_POST['CumRet375']);
      $PorcePass375 = $db->escape($_POST['PorcePass375']);
      $Specs375 = $db->escape($_POST['Specs375']);
  
      $WtRet2p563 = $db->escape($_POST['WtRet2p563']);
      $PorceRet2p563 = $db->escape($_POST['PorceRet2p563']);
      $CumRet2p563 = $db->escape($_POST['CumRet2p563']);
      $PorcePass2p563 = $db->escape($_POST['PorcePass2p563']);
      $Specs2p563 = $db->escape($_POST['Specs2p563']);
  
      $WtRet250 = $db->escape($_POST['WtRet250']);
      $PorceRet250 = $db->escape($_POST['PorceRet250']);
      $CumRet250 = $db->escape($_POST['CumRet250']);
      $PorcePass250 = $db->escape($_POST['PorcePass250']);
      $Specs250 = $db->escape($_POST['Specs250']);
  
      $WtRet1p537 = $db->escape($_POST['WtRet1p537']);
      $PorceRet1p537 = $db->escape($_POST['PorceRet1p537']);
      $CumRet1p537 = $db->escape($_POST['CumRet1p537']);
      $PorcePass1p537 = $db->escape($_POST['PorcePass1p537']);
      $Specs1p537 = $db->escape($_POST['Specs1p537']);
  
      $WtRet125 = $db->escape($_POST['WtRet125']);
      $PorceRet125 = $db->escape($_POST['PorceRet125']);
      $CumRet125 = $db->escape($_POST['CumRet125']);
      $PorcePass125 = $db->escape($_POST['PorcePass125']);
      $Specs125 = $db->escape($_POST['Specs125']);
      
      $WtRet3p419 = $db->escape($_POST['WtRet3p419']);
      $PorceRet3p419 = $db->escape($_POST['PorceRet3p419']);
      $CumRet3p419 = $db->escape($_POST['CumRet3p419']);
      $PorcePass3p419 = $db->escape($_POST['PorcePass3p419']);
      $Specs3p419 = $db->escape($_POST['Specs3p419']);

      $WtRet1p212 = $db->escape($_POST['WtRet1p212']);
      $PorceRet1p212 = $db->escape($_POST['PorceRet1p212']);
      $CumRet1p212 = $db->escape($_POST['CumRet1p212']);
      $PorcePass1p212 = $db->escape($_POST['PorcePass1p212']);
      $Specs1p212 = $db->escape($_POST['Specs1p212']);
  
      $WtRet3p89 = $db->escape($_POST['WtRet3p89']);
      $PorceRet3p89 = $db->escape($_POST['PorceRet3p89']);
      $CumRet3p89 = $db->escape($_POST['CumRet3p89']);
      $PorcePass3p89 = $db->escape($_POST['PorcePass3p89']);
      $Specs3p89 = $db->escape($_POST['Specs3p89']);
      
      $WtRetNo44 = $db->escape($_POST['WtRetNo44']);
      $PorceRetNo44 = $db->escape($_POST['PorceRetNo44']);
      $CumRetNo44 = $db->escape($_POST['CumRetNo44']);
      $PorcePassNo44 = $db->escape($_POST['PorcePassNo44']);
      $SpecsNo44 = $db->escape($_POST['SpecsNo44']);
  
      $WtRetNo102 = $db->escape($_POST['WtRetNo102']);
      $PorceRetNo102 = $db->escape($_POST['PorceRetNo102']);
      $CumRetNo102 = $db->escape($_POST['CumRetNo102']);
      $PorcePassNo102 = $db->escape($_POST['PorcePassNo102']);
      $SpecsNo102 = $db->escape($_POST['SpecsNo102']);
  
      $WtRetNo161 = $db->escape($_POST['WtRetNo161']);
      $PorceRetNo161 = $db->escape($_POST['PorceRetNo161']);
      $CumRetNo161 = $db->escape($_POST['CumRetNo161']);
      $PorcePassNo161 = $db->escape($_POST['PorcePassNo161']);
      $SpecsNo161 = $db->escape($_POST['SpecsNo161']);
  
      $WtRetNo200p85 = $db->escape($_POST['WtRetNo200p85']);
      $PorceRetNo200p85 = $db->escape($_POST['PorceRetNo200p85']);
      $CumRetNo200p85 = $db->escape($_POST['CumRetNo200p85']);
      $PorcePassNo200p85 = $db->escape($_POST['PorcePassNo200p85']);
      $SpecsNo200p85 = $db->escape($_POST['SpecsNo200p85']);
  
      $WtRetNo500p3 = $db->escape($_POST['WtRetNo500p3']);
      $PorceRetNo500p3 = $db->escape($_POST['PorceRetNo500p3']);
      $CumRetNo500p3 = $db->escape($_POST['CumRetNo500p3']);
      $PorcePassNo500p3 = $db->escape($_POST['PorcePassNo500p3']);
      $SpecsNo500p3 = $db->escape($_POST['SpecsNo500p3']);
  
      $WtRetNo600p25 = $db->escape($_POST['WtRetNo600p25']);
      $PorceRetNo600p25 = $db->escape($_POST['PorceRetNo600p25']);
      $CumRetNo600p25 = $db->escape($_POST['CumRetNo600p25']);
      $PorcePassNo600p25 = $db->escape($_POST['PorcePassNo600p25']);
      $SpecsNo600p25 = $db->escape($_POST['SpecsNo600p25']);
  
      $WtRetNo2000p075 = $db->escape($_POST['WtRetNo2000p075']);
      $PorceRetNo2000p075 = $db->escape($_POST['PorceRetNo2000p075']);
      $CumRetNo2000p075 = $db->escape($_POST['CumRetNo2000p075']);
      $PorcePassNo2000p075 = $db->escape($_POST['PorcePassNo2000p075']);
      $SpecsNo2000p075 = $db->escape($_POST['SpecsNo2000p075']);
  
      $WtRetPan = $db->escape($_POST['WtRetPan']);
      $PorceRetPan = $db->escape($_POST['PorceRetPan']);
  
      $WtRetTotalPan = $db->escape($_POST['WtRetTotalPan']);
      $PorceRetTotalPan = $db->escape($_POST['PorceRetTotalPan']);
      $CumRetTotalPan = $db->escape($_POST['CumRetTotalPan']);
      $PorcePassTotalPan = $db->escape($_POST['PorcePassTotalPan']);

      $RegisterBy = $user['name'];

      $query = "UPDATE grain_size_fine_aggregate SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Split_Method = '{$SplitMethod}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";
      $query .= "Date_Material_Arrive = '{$DateMaterialArrive}', ";
      $query .= "Date_of_improvement = '{$Dateofimprovement}', ";
      $query .= "Improvement = '{$Improvement}', ";
      $query .= "Samples_usig_for_improvement_No1 = '{$SamplesusigforimprovementNo1}', ";
      $query .= "Samples_usig_for_improvement_No2 = '{$SamplesusigforimprovementNo2}', ";

      $query .= "Weight_used_for_the_Test_g = '{$WeightusedfortheTestg}', ";
      $query .= "A_Particles_Reactive = '{$AParticlesReactive}', ";
      $query .= "B_Particles_Reactive = '{$BParticlesReactive}', ";
      $query .= "C_Particles_Reactive = '{$CParticlesReactive}', ";
      $query .= "D_Particles_Reactive = '{$DParticlesReactive}', ";
      $query .= "E_Particles_Reactive = '{$EParticlesReactive}', ";
      $query .= "Average_Particles_Reactive = '{$AverageParticlesReactive}', ";
      $query .= "Reaction_Strength_Result = '{$ReactionStrengthResult}', ";
      $query .= "Acid_Reactivity_Test_Result = '{$AcidReactivityTestResult}', ";
      $query .= "Grain_Size_Test_Result_No1 = '{$GrainSizeTestResultNo1}', ";
      $query .= "Grain_Size_Test_Result_No2 = '{$GrainSizeTestResultNo2}', ";

      $query .= "Container = '{$Container}', ";
      $query .= "Tare_Wet_Soil = '{$TareWetSoil}', ";
      $query .= "Tare_Dry_Soil = '{$TareDrySoil}', ";
      $query .= "Tare = '{$Tare}', ";
      $query .= "Dry_Soil = '{$DrySoil}', ";
      $query .= "Washed = '{$Washed}', ";
      $query .= "Wash_Pan = '{$WashPan}', ";

      $query .= "Coarser_than_Gravel = '{$CoarserthanGravel}', ";
      $query .= "Gravel = '{$Gravel}', ";
      $query .= "Sand = '{$Sand}', ";
      $query .= "Fines = '{$Fines}', ";
      $query .= "D10 = '{$D10}', ";
      $query .= "D15 = '{$D15}', ";
      $query .= "D30 = '{$D30}', ";
      $query .= "D60 = '{$D60}', ";
      $query .= "D85 = '{$D85}', ";
      $query .= "Cc = '{$Cc}', ";
      $query .= "Cu = '{$Cu}', ";

      $query .= "Wt_Ret_5_127 = '{$WtRet5127}', ";
      $query .= "Porce_Ret_5_127 = '{$PorceRet5127}', ";
      $query .= "Cum_Ret_5_127 = '{$CumRet5127}', ";
      $query .= "Porce_Pass_5_127 = '{$PorcePass5127}', ";
      $query .= "Specs_5_127 = '{$Specs5127}', ";

      $query .= "Wt_Ret_4_101 = '{$WtRet4101}', ";
      $query .= "Porce_Ret_4_101 = '{$PorceRet4101}', ";
      $query .= "Cum_Ret_4_101 = '{$CumRet4101}', ";
      $query .= "Porce_Pass_4_101 = '{$PorcePass4101}', ";
      $query .= "Specs_4_101 = '{$Specs4101}', ";

      $query .= "Wt_Ret_3p5_89 = '{$WtRet3p589}', ";
      $query .= "Porce_Ret_3p5_89 = '{$PorceRet3p589}', ";
      $query .= "Cum_Ret_3p5_89 = '{$CumRet3p589}', ";
      $query .= "Porce_Pass_3p5_89 = '{$PorcePass3p589}', ";
      $query .= "Specs_3p5_89 = '{$Specs3p589}', ";

      $query .= "Wt_Ret_3_75 = '{$WtRet375}', ";
      $query .= "Porce_Ret_3_75 = '{$PorceRet375}', ";
      $query .= "Cum_Ret_3_75 = '{$CumRet375}', ";
      $query .= "Porce_Pass_3_75 = '{$PorcePass375}', ";
      $query .= "Specs_3_75 = '{$Specs375}', ";

      $query .= "Wt_Ret_2p5_63 = '{$WtRet2p563}', ";
      $query .= "Porce_Ret_2p5_63 = '{$PorceRet2p563}', ";
      $query .= "Cum_Ret_2p5_63 = '{$CumRet2p563}', ";
      $query .= "Porce_Pass_2p5_63 = '{$PorcePass2p563}', ";
      $query .= "Specs_2p5_63 = '{$Specs2p563}', ";

      $query .= "Wt_Ret_2_50 = '{$WtRet250}', ";
      $query .= "Porce_Ret_2_50 = '{$PorceRet250}', ";
      $query .= "Cum_Ret_2_50 = '{$CumRet250}', ";
      $query .= "Porce_Pass_2_50 = '{$PorcePass250}', ";
      $query .= "Specs_2_50 = '{$Specs250}', ";

      $query .= "Wt_Ret_1p5_37 = '{$WtRet1p537}', ";
      $query .= "Porce_Ret_1p5_37 = '{$PorceRet1p537}', ";
      $query .= "Cum_Ret_1p5_37 = '{$CumRet1p537}', ";
      $query .= "Porce_Pass_1p5_37 = '{$PorcePass1p537}', ";
      $query .= "Specs_1p5_37 = '{$Specs1p537}', ";

      $query .= "Wt_Ret_1_25 = '{$WtRet125}', ";
      $query .= "Porce_Ret_1_25 = '{$PorceRet125}', ";
      $query .= "Cum_Ret_1_25 = '{$CumRet125}', ";
      $query .= "Porce_Pass_1_25 = '{$PorcePass125}', ";
      $query .= "Specs_1_25 = '{$Specs125}', ";

      $query .= "Wt_Ret_3p4_19 = '{$WtRet3p419}', ";
      $query .= "Porce_Ret_3p4_19 = '{$PorceRet3p419}', ";
      $query .= "Cum_Ret_3p4_19 = '{$CumRet3p419}', ";
      $query .= "Porce_Pass_3p4_19 = '{$PorcePass3p419}', ";
      $query .= "Specs_3p4_19 = '{$Specs3p419}', ";

      $query .= "Wt_Ret_1p2_12 = '{$WtRet1p212}', ";
      $query .= "Porce_Ret_1p2_12 = '{$PorceRet1p212}', ";
      $query .= "Cum_Ret_1p2_12 = '{$CumRet1p212}', ";
      $query .= "Porce_Pass_1p2_12 = '{$PorcePass1p212}', ";
      $query .= "Specs_1p2_12 = '{$Specs1p212}', ";

      $query .= "Wt_Ret_3p8_9 = '{$WtRet3p89}', ";
      $query .= "Porce_Ret_3p8_9 = '{$PorceRet3p89}', ";
      $query .= "Cum_Ret_3p8_9 = '{$CumRet3p89}', ";
      $query .= "Porce_Pass_3p8_9 = '{$PorcePass3p89}', ";
      $query .= "Specs_3p8_9 = '{$Specs3p89}', ";

      $query .= "Wt_Ret_No4_4 = '{$WtRetNo44}', ";
      $query .= "Porce_Ret_No4_4 = '{$PorceRetNo44}', ";
      $query .= "Cum_Ret_No4_4 = '{$CumRetNo44}', ";
      $query .= "Porce_Pass_No4_4 = '{$PorcePassNo44}', ";
      $query .= "Specs_No4_4 = '{$SpecsNo44}', ";

      $query .= "Wt_Ret_No10_2 = '{$WtRetNo102}', ";
      $query .= "Porce_Ret_No10_2 = '{$PorceRetNo102}', ";
      $query .= "Cum_Ret_No10_2 = '{$CumRetNo102}', ";
      $query .= "Porce_Pass_No10_2 = '{$PorcePassNo102}', ";
      $query .= "Specs_No10_2 = '{$SpecsNo102}', ";

      $query .= "Wt_Ret_No16_1 = '{$WtRetNo161}', ";
      $query .= "Porce_Ret_No16_1 = '{$PorceRetNo161}', ";
      $query .= "Cum_Ret_No16_1 = '{$CumRetNo161}', ";
      $query .= "Porce_Pass_No16_1 = '{$PorcePassNo161}', ";
      $query .= "Specs_No16_1 = '{$SpecsNo161}', ";

      $query .= "Wt_Ret_No20_0p85 = '{$WtRetNo200p85}', ";
      $query .= "Porce_Ret_No20_0p85 = '{$PorceRetNo200p85}', ";
      $query .= "Cum_Ret_No20_0p85 = '{$CumRetNo200p85}', ";
      $query .= "Porce_Pass_No20_0p85 = '{$PorcePassNo200p85}', ";
      $query .= "Specs_No20_0p85 = '{$SpecsNo200p85}', ";

      $query .= "Wt_Ret_No50_0p3 = '{$WtRetNo500p3}', ";
      $query .= "Porce_Ret_No50_0p3 = '{$PorceRetNo500p3}', ";
      $query .= "Cum_Ret_No50_0p3 = '{$CumRetNo500p3}', ";
      $query .= "Porce_Pass_No50_0p3 = '{$PorcePassNo500p3}', ";
      $query .= "Specs_No50_0p3 = '{$SpecsNo500p3}', ";

      $query .= "Wt_Ret_No60_0p25 = '{$WtRetNo600p25}', ";
      $query .= "Porce_Ret_No60_0p25 = '{$PorceRetNo600p25}', ";
      $query .= "Cum_Ret_No60_0p25 = '{$CumRetNo600p25}', ";
      $query .= "Porce_Pass_No60_0p25 = '{$PorcePassNo600p25}', ";
      $query .= "Specs_No60_0p25 = '{$SpecsNo600p25}', ";

      $query .= "Wt_Ret_No200_0p075 = '{$WtRetNo2000p075}', ";
      $query .= "Porce_Ret_No200_0p075 = '{$PorceRetNo2000p075}', ";
      $query .= "Cum_Ret_No200_0p075 = '{$CumRetNo2000p075}', ";
      $query .= "Porce_Pass_No200_0p075 = '{$PorcePassNo2000p075}', ";
      $query .= "Specs_No200_0p075 = '{$SpecsNo2000p075}', ";

      $query .= "Wt_Ret_Pan = '{$WtRetPan}', ";
      $query .= "Porce_Ret_Pan = '{$PorceRetPan}', ";

      $query .= "Wt_Ret_Total_Pan = '{$WtRetTotalPan}', ";
      $query .= "Porce_Ret_Total_Pan = '{$PorceRetTotalPan}', ";
      $query .= "Cum_Ret_Total_Pan = '{$CumRetTotalPan}', ";
      $query .= "Porce_Pass_Total_Pan = '{$PorcePassTotalPan}', ";

      $query .= "Registered_By = '{$RegisterBy}' ";

      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-GS-Fine.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-GS-Fine.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-GS-Fine.php?id=' . $search_table['id'], false);
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
    $query_select = "SELECT * FROM grain_size_fine_aggregate WHERE id = '{$search_table}'";
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