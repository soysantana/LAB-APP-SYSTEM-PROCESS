<?php
// Función para obtener y escapar datos del POST
function get_post_data($field) {
    global $db;
    return $db->escape($_POST[$field]);
}

if (isset($_POST['GrainSievedCoarse'])) {
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
        'PreparationMethod',
        'SplitMethod',
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
        $testype = "GS-Coarse";
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
        $Specs3p89 = get_post_data('Specs3p89');
        $SpecsNo44 = get_post_data('SpecsNo44');
        $SpecsNo102 = get_post_data('SpecsNo102');
        $SpecsNo2000p075 = get_post_data('SpecsNo2000p075');
        $TotalSampleWeightg = get_post_data('TotalSampleWeightg');
        $WeightusedfortheTestg = get_post_data('WeightusedfortheTestg');
        $AParticlesReactive = get_post_data('AParticlesReactive');
        $BParticlesReactive = get_post_data('BParticlesReactive');
        $CParticlesReactive = get_post_data('CParticlesReactive');
        $WeightMatRetNo4IfApplicable = get_post_data('WeightMatRetNo4IfApplicable');
        $WtReactivePartRetNo4IfApplicable = get_post_data('WtReactivePartRetNo4IfApplicable');
        $PercentReactiveParticlesIfApplicable = get_post_data('PercentReactiveParticlesIfApplicable');
        $AverageParticlesReactive = get_post_data('AverageParticlesReactive');
        $ReactionStrengthResult = get_post_data('ReactionStrengthResult');
        $AcidReactivityTestResult = get_post_data('AcidReactivityTestResult');
        $GrainSizeTestResult = get_post_data('GrainSizeTestResult');
        $FineGrainedClassificationusingtheUSCS = get_post_data('FineGrainedClassificationusingtheUSCS');
        $WtRet3p589 = get_post_data('WtRet3p589');
        $PorceRet3p589 = get_post_data('PorceRet3p589');
        $CumRet3p589 = get_post_data('CumRet3p589');
        $PorcePass3p589 = get_post_data('PorcePass3p589');
        $Specs3p589 = get_post_data('Specs3p589');

        $sql = "INSERT INTO grain_size_sieved_coarse_aggregate (
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
            Specs_5_127,
            Wt_Ret_4_101,
            Porce_Ret_4_101,
            Cum_Ret_4_101,
            Porce_Pass_4_101,
            Specs_4_101,
            Wt_Ret_3p5_89,
            Porce_Ret_3p5_89,
            Cum_Ret_3p5_89,
            Porce_Pass_3p5_89,
            Specs_3p5_89,
            Wt_Ret_3_75,
            Porce_Ret_3_75,
            Cum_Ret_3_75,
            Porce_Pass_3_75,
            Specs_3_75,
            Wt_Ret_2p5_63,
            Porce_Ret_2p5_63,
            Cum_Ret_2p5_63,
            Porce_Pass_2p5_63,
            Specs_2p5_63,
            Wt_Ret_2_50,
            Porce_Ret_2_50,
            Cum_Ret_2_50,
            Porce_Pass_2_50,
            Specs_2_50,
            Wt_Ret_1p5_37,
            Porce_Ret_1p5_37,
            Cum_Ret_1p5_37,
            Porce_Pass_1p5_37,
            Specs_1p5_37,
            Wt_Ret_1_25,
            Porce_Ret_1_25,
            Cum_Ret_1_25,
            Porce_Pass_1_25,
            Specs_1_25,
            Wt_Ret_3p4_19,
            Porce_Ret_3p4_19,
            Cum_Ret_3p4_19,
            Porce_Pass_3p4_19,
            Specs_3p4_19,
            Wt_Ret_3p8_9,
            Porce_Ret_3p8_9,
            Cum_Ret_3p8_9,
            Porce_Pass_3p8_9,
            Specs_3p8_9,
            Wt_Ret_No4_4,
            Porce_Ret_No4_4,
            Cum_Ret_No4_4,
            Porce_Pass_No4_4,
            Specs_No4_4,
            Wt_Ret_No10_2,
            Porce_Ret_No10_2,
            Cum_Ret_No10_2,
            Porce_Pass_No10_2,
            Specs_No10_2,
            Wt_Ret_No200_0p075,
            Porce_Ret_No200_0p075,
            Cum_Ret_No200_0p075,
            Porce_Pass_No200_0p075,
            Specs_No200_0p075,
            Wt_Ret_Pan,
            Porce_Ret_Pan,
            Wt_Ret_Total_Pan,
            Porce_Ret_Total_Pan,
            Cum_Ret_Total_Pan,
            Porce_Pass_Total_Pan,
            Total_Sample_Weight_g,
            Weight_used_for_the_Test_g,
            A_Particles_Reactive,
            B_Particles_Reactive,
            C_Particles_Reactive,
            Weight_Mat_Ret_No_4_If_Applicable,
            Wt_Reactive_Part_Ret_No4_If_Applicable,
            Percent_Reactive_Particles_If_Applicable,
            Average_Particles_Reactive,
            Reaction_Strength_Result,
            Acid_Reactivity_Test_Result,
            Grain_Size_Test_Result,
            Fine_Grained_Classification_using_the_USCS,
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
            Cu
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
            '$Specs5127',
            '$WtRet4101',
            '$PorceRet4101',
            '$CumRet4101',
            '$PorcePass4101',
            '$Specs4101',
            '$WtRet3p589',
            '$PorceRet3p589',
            '$CumRet3p589',
            '$PorcePass3p589',
            '$Specs3p589',
            '$WtRet375',
            '$PorceRet375',
            '$CumRet375',
            '$PorcePass375',
            '$Specs375',
            '$WtRet2p563',
            '$PorceRet2p563',
            '$CumRet2p563',
            '$PorcePass2p563',
            '$Specs2p563',
            '$WtRet250',
            '$PorceRet250',
            '$CumRet250',
            '$PorcePass250',
            '$Specs250',
            '$WtRet1p537',
            '$PorceRet1p537',
            '$CumRet1p537',
            '$PorcePass1p537',
            '$Specs1p537',
            '$WtRet125',
            '$PorceRet125',
            '$CumRet125',
            '$PorcePass125',
            '$Specs125',
            '$WtRet3p419',
            '$PorceRet3p419',
            '$CumRet3p419',
            '$PorcePass3p419',
            '$Specs3p419',
            '$WtRet3p89',
            '$PorceRet3p89',
            '$CumRet3p89',
            '$PorcePass3p89',
            '$Specs3p89',
            '$WtRetNo44',
            '$PorceRetNo44',
            '$CumRetNo44',
            '$PorcePassNo44',
            '$SpecsNo44',
            '$WtRetNo102',
            '$PorceRetNo102',
            '$CumRetNo102',
            '$PorcePassNo102',
            '$SpecsNo102',
            '$WtRetNo2000p075',
            '$PorceRetNo2000p075',
            '$CumRetNo2000p075',
            '$PorcePassNo2000p075',
            '$SpecsNo2000p075',
            '$WtRetPan',
            '$PorceRetPan',
            '$WtRetTotalPan',
            '$PorceRetTotalPan',
            '$CumRetTotalPan',
            '$PorcePassTotalPan',
            '$TotalSampleWeightg',
            '$WeightusedfortheTestg',
            '$AParticlesReactive',
            '$BParticlesReactive',
            '$CParticlesReactive',
            '$WeightMatRetNo4IfApplicable',
            '$WtReactivePartRetNo4IfApplicable',
            '$PercentReactiveParticlesIfApplicable',
            '$AverageParticlesReactive',
            '$ReactionStrengthResult',
            '$AcidReactivityTestResult',
            '$GrainSizeTestResult',
            '$FineGrainedClassificationusingtheUSCS',
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
            '$Cu'
        )";

        if ($db->query($sql)) {
            $session->msg('s', "Ensayo agregado exitosamente.");
            redirect('./gs_coarsethan_agg.php', false);
        } else {
            $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
            redirect('./gs_coarsethan_agg.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('./gs_coarsethan_agg.php', false);
    }
}

?>