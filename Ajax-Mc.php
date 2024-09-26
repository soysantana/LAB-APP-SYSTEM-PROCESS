<?php
require_once('includes/load.php');
page_require_level(3);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sample_id = $db->escape($_POST['sample_id']);
    $sample_number = $db->escape($_POST['sample_number']);

    $sql_mc = "SELECT Mc FROM moisture_content WHERE Sample_ID = '{$sample_id}' AND Sample_Number = '{$sample_number}'";
    $result_mc = $db->query($sql_mc);

    $sql_sg = "SELECT Specific_Gravity_Soil_Solid FROM specific_gravity WHERE Sample_ID = '{$sample_id}' AND Sample_Number = '{$sample_number}'";
    $result_sg = $db->query($sql_sg);

    $sql_sp = "SELECT Max_Dry_Density_kgm3, Optimun_MC_Porce FROM standard_proctor WHERE Sample_ID = '{$sample_id}' AND Sample_Number = '{$sample_number}'";
    $result_sp = $db->query($sql_sp);

    $sql_al = "SELECT Liquid_Limit_Porce, Plasticity_Index_Porce FROM atterberg_limit WHERE Sample_ID = '{$sample_id}' AND Sample_Number = '{$sample_number}'";
    $result_al = $db->query($sql_al);

    $sql_gs = "SELECT * FROM grain_size WHERE Sample_ID = '{$sample_id}' AND Sample_Number = '{$sample_number}'";
    $result_gs = $db->query($sql_gs);

    if ($result_mc && $result_sg && $result_sp && $result_al && $result_gs && 
    $result_mc->num_rows > 0 && $result_sg->num_rows > 0 && $result_sp->num_rows > 0 && $result_al->num_rows > 0 && $result_gs->num_rows > 0) {
        $record_mc = $result_mc->fetch_assoc();
        $mc_value = $record_mc['Mc'];

        $record_sg = $result_sg->fetch_assoc();
        $sg_value = $record_sg['Specific_Gravity_Soil_Solid'];

        $record_sp = $result_sp->fetch_assoc();
        $max_density = $record_sp['Max_Dry_Density_kgm3'];
        $optimum_mc = $record_sp['Optimun_MC_Porce'];

        $record_al = $result_al->fetch_assoc();
        $LLporce = $record_al['Liquid_Limit_Porce'];
        $PLindex = $record_al['Plasticity_Index_Porce'];

        $record_gs = $result_gs->fetch_assoc();
        $Wt40 = $record_gs['Wt_Ret_40_1016'];
        $Wt12 = $record_gs['Wt_Ret_12_304'];
        $Wt10 = $record_gs['Wt_Ret_10_254'];
        $Wt8 = $record_gs['Wt_Ret_8_203'];
        $Wt6 = $record_gs['Wt_Ret_6_152'];
        $Wt5 = $record_gs['Wt_Ret_5_127'];
        $Wt4 = $record_gs['Wt_Ret_4_101'];
        $Wt3 = $record_gs['Wt_Ret_3_75'];
        $Wt2p5 = $record_gs['Wt_Ret_2p5_63'];
        $Wt2 = $record_gs['Wt_Ret_2_50'];
        $Wt1p5 = $record_gs['Wt_Ret_1p5_37'];
        $Wt1 = $record_gs['Wt_Ret_1_25'];
        $Wt3p4 = $record_gs['Wt_Ret_3p4_19'];
        $Wt1p2 = $record_gs['Wt_Ret_1p2_12'];
        $Wt3p8 = $record_gs['Wt_Ret_3p8_9'];
        $Wtn4 = $record_gs['Wt_Ret_No4_4'];
        $Wtn10 = $record_gs['Wt_Ret_No10_2'];
        $Wtn16 = $record_gs['Wt_Ret_No16_1'];
        $Wtn20 = $record_gs['Wt_Ret_No20_0p85'];
        $Wtn50 = $record_gs['Wt_Ret_No50_0p3'];
        $Wtn60 = $record_gs['Wt_Ret_No60_0p25'];
        $Wtn100 = $record_gs['Wt_Ret_No100_0p15'];
        $Wtn140 = $record_gs['Wt_Ret_No140_0p106'];
        $Wtn200 = $record_gs['Wt_Ret_No200_0p075'];
        $Wtpan = $record_gs['Wt_Ret_Pan'];

        echo json_encode([
            'success' => true,
            'mc_value' => $mc_value,
            'sg_value' => $sg_value,
            'max_density' => $max_density,
            'optimum_mc' => $optimum_mc,
            'LLporce' => $LLporce,
            'PLindex' => $PLindex,
            'Wt40' => $Wt40,
            'Wt12' => $Wt12,
            'Wt10' => $Wt10,
            'Wt8' => $Wt8,
            'Wt6' => $Wt6,
            'Wt5' => $Wt5,
            'Wt4' => $Wt4,
            'Wt3' => $Wt3,
            'Wt2p5' => $Wt2p5,
            'Wt2' => $Wt2,
            'Wt1p5' => $Wt1p5,
            'Wt1' => $Wt1,
            'Wt3p4' => $Wt3p4,
            'Wt1p2' => $Wt1p2,
            'Wt3p8' => $Wt3p8,
            'Wtn4' => $Wtn4,
            'Wtn10' => $Wtn10,
            'Wtn16' => $Wtn16,
            'Wtn20' => $Wtn20,
            'Wtn50' => $Wtn50,
            'Wtn60' => $Wtn60,
            'Wtn100' => $Wtn100,
            'Wtn140' => $Wtn140,
            'Wtn200' => $Wtn200,
            'Wtpan' => $Wtpan
        ]);
        exit;
    } else {
        echo json_encode(['success' => false, 'message' => 'No se encontraron registros.']);
        exit;
    }
}
?>
