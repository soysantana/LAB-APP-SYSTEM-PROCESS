<?php
// Función para obtener y escapar datos del POST
function get_post_data($field) {
    global $db;
    return $db->escape($_POST[$field]);
}

if (isset($_POST['Hydrometer'])) {
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
        'DispersionDevice',
        'Comments',
        'Technician',
        'TestStartDate',
        'HydrometerType',
        'TemperatureType'
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
        $testype = "HY";
        $Standard = get_post_data('Standard');
        $PreparationMethod = get_post_data('PreparationMethod');
        $DispersionDevice = get_post_data('DispersionDevice');
        $Comments = get_post_data('Comments');
        $Technician = get_post_data('Technician');
        $TestStartDate = get_post_data('TestStartDate');
        $HydrometerType = get_post_data('HydrometerType');
        $TemperatureType = get_post_data('TemperatureType');
        $Specific_Gravity_Type = get_post_data('Specific_Gravity_Type');

        $Dispersing_Agent = get_post_data('Dispersing_Agent');
        $Amount_Used_g = get_post_data('Amount_Used_g');
        $Temperature_of_Test = get_post_data('Temperature_of_Test');
        $Viscosity_of_Water_gs_cm2 = get_post_data('Viscosity_of_Water_gs_cm2');
        $Mass_Density_of_Water_Calibrated = get_post_data('Mass_Density_of_Water_Calibrated');
        $Acceleration_cm_s2 = get_post_data('Acceleration_cm_s2');
        $Volume_of_Suspension_Vsp_cm3 = get_post_data('Volume_of_Suspension_Vsp_cm3');
        $Meniscus_Correction_Cm = get_post_data('Meniscus_Correction_Cm');
        $Percent_Passing_No_200_sieve = get_post_data('Percent_Passing_No_200_sieve');
        $Liquid_Limit_Porce = get_post_data('Liquid_Limit_Porce');
        $Plasticity_Index_Porce = get_post_data('Plasticity_Index_Porce');
        $Specific_Gravity = get_post_data('Specific_Gravity');
        $Tare_Name = get_post_data('Tare_Name');
        $Oven_Temperature = get_post_data('Oven_Temperature');
        $Tare_Plus_Wet_Soil_gr = get_post_data('Tare_Plus_Wet_Soil_gr');
        $Tare_Plus_Dry_Soil_gr = get_post_data('Tare_Plus_Dry_Soil_gr');
        $Water_Ww_gr = get_post_data('Water_Ww_gr');
        $Gs_Tare_gr = get_post_data('Gs_Tare_gr');
        $Dry_Soil_Ws_gr = get_post_data('Dry_Soil_Ws_gr');
        $Moisture_Content_Porce = get_post_data('Moisture_Content_Porce');        
        $Hy_Calibration_Temperature_No1 = get_post_data('Hy_Calibration_Temperature_No1');
        $Hy_Calibration_Temperature_No2 = get_post_data('Hy_Calibration_Temperature_No2');
        $Hy_Calibration_Temperature_No3 = get_post_data('Hy_Calibration_Temperature_No3');
        $Hy_Calibration_Temperature_No4 = get_post_data('Hy_Calibration_Temperature_No4');
        $Hy_Calibration_Temperature_No5 = get_post_data('Hy_Calibration_Temperature_No5');
        $Hy_Calibration_Temperature_No6 = get_post_data('Hy_Calibration_Temperature_No6');
        $Hy_Calibration_Temperature_No7 = get_post_data('Hy_Calibration_Temperature_No7');
        $Hy_Calibration_Temperature_No8 = get_post_data('Hy_Calibration_Temperature_No8');
        $Hy_Calibration_Temperature_No9 = get_post_data('Hy_Calibration_Temperature_No9');
        $Hy_Calibration_Actual_Reading_No1 = get_post_data('Hy_Calibration_Actual_Reading_No1');
        $Hy_Calibration_Actual_Reading_No2 = get_post_data('Hy_Calibration_Actual_Reading_No2');
        $Hy_Calibration_Actual_Reading_No3 = get_post_data('Hy_Calibration_Actual_Reading_No3');
        $Hy_Calibration_Actual_Reading_No4 = get_post_data('Hy_Calibration_Actual_Reading_No4');
        $Hy_Calibration_Actual_Reading_No5 = get_post_data('Hy_Calibration_Actual_Reading_No5');
        $Hy_Calibration_Actual_Reading_No6 = get_post_data('Hy_Calibration_Actual_Reading_No6');
        $Hy_Calibration_Actual_Reading_No7 = get_post_data('Hy_Calibration_Actual_Reading_No7');
        $Hy_Calibration_Actual_Reading_No8 = get_post_data('Hy_Calibration_Actual_Reading_No8');
        $Hy_Calibration_Actual_Reading_No9 = get_post_data('Hy_Calibration_Actual_Reading_No9');
        $Hy_Measure_Fluid_Temperature_No1 = get_post_data('Hy_Measure_Fluid_Temperature_No1');
        $Hy_Measure_Fluid_Temperature_No2 = get_post_data('Hy_Measure_Fluid_Temperature_No2');
        $Hy_Measure_Fluid_Temperature_No3 = get_post_data('Hy_Measure_Fluid_Temperature_No3');
        $Hy_Measure_Fluid_Temperature_No4 = get_post_data('Hy_Measure_Fluid_Temperature_No4');
        $Hy_Measure_Fluid_Temperature_No5 = get_post_data('Hy_Measure_Fluid_Temperature_No5');
        $Hy_Measure_Fluid_Temperature_No6 = get_post_data('Hy_Measure_Fluid_Temperature_No6');
        $Hy_Measure_Fluid_Temperature_No7 = get_post_data('Hy_Measure_Fluid_Temperature_No7');
        $Hy_Measure_Fluid_Temperature_No8 = get_post_data('Hy_Measure_Fluid_Temperature_No8');
        $Hy_Measure_Fluid_Temperature_No9 = get_post_data('Hy_Measure_Fluid_Temperature_No9');
        $Hy_Measure_Fluid_Actual_Reading_No1 = get_post_data('Hy_Measure_Fluid_Actual_Reading_No1');
        $Hy_Measure_Fluid_Actual_Reading_No2 = get_post_data('Hy_Measure_Fluid_Actual_Reading_No2');
        $Hy_Measure_Fluid_Actual_Reading_No3 = get_post_data('Hy_Measure_Fluid_Actual_Reading_No3');
        $Hy_Measure_Fluid_Actual_Reading_No4 = get_post_data('Hy_Measure_Fluid_Actual_Reading_No4');
        $Hy_Measure_Fluid_Actual_Reading_No5 = get_post_data('Hy_Measure_Fluid_Actual_Reading_No5');
        $Hy_Measure_Fluid_Actual_Reading_No6 = get_post_data('Hy_Measure_Fluid_Actual_Reading_No6');
        $Hy_Measure_Fluid_Actual_Reading_No7 = get_post_data('Hy_Measure_Fluid_Actual_Reading_No7');
        $Hy_Measure_Fluid_Actual_Reading_No8 = get_post_data('Hy_Measure_Fluid_Actual_Reading_No8');
        $Hy_Measure_Fluid_Actual_Reading_No9 = get_post_data('Hy_Measure_Fluid_Actual_Reading_No9');
        $Container = get_post_data('Container');
        $Wt_Wet_Soil_Tare_gr = get_post_data('Wt_Wet_Soil_Tare_gr');
        $Wt_Dry_Soil_Tare_gr = get_post_data('Wt_Dry_Soil_Tare_gr');
        $Tare_gr = get_post_data('Tare_gr');
        $Wt_Dry_Soil_gr = get_post_data('Wt_Dry_Soil_gr');
        $Wt_Washed_gr = get_post_data('Wt_Washed_gr');
        $Wt_Wash_Pan_gr = get_post_data('Wt_Wash_Pan_gr');
        $Wt_Ret_40 = get_post_data('Wt_Ret_40');
        $Ret_40 = get_post_data('Ret_40');
        $Cum_Ret_40 = get_post_data('Cum_Ret_40');
        $Pass_40 = get_post_data('Pass_40');

        $Wt_Ret_12 = get_post_data('Wt_Ret_12');
        $Ret_12 = get_post_data('Ret_12');
        $Cum_Ret_12 = get_post_data('Cum_Ret_12');
        $Pass_12 = get_post_data('Pass_12');

        $Wt_Ret_10 = get_post_data('Wt_Ret_10');
        $Ret_10 = get_post_data('Ret_10');
        $Cum_Ret_10 = get_post_data('Cum_Ret_10');
        $Pass_10 = get_post_data('Pass_10');

        $Wt_Ret_8 = get_post_data('Wt_Ret_8');
        $Ret_8 = get_post_data('Ret_8');
        $Cum_Ret_8 = get_post_data('Cum_Ret_8');
        $Pass_8 = get_post_data('Pass_8');

        $Wt_Ret_6 = get_post_data('Wt_Ret_6');
        $Ret_6 = get_post_data('Ret_6');
        $Cum_Ret_6 = get_post_data('Cum_Ret_6');
        $Pass_6 = get_post_data('Pass_6');

        $Wt_Ret_5 = get_post_data('Wt_Ret_5');
        $Ret_5 = get_post_data('Ret_5');
        $Cum_Ret_5 = get_post_data('Cum_Ret_5');
        $Pass_5 = get_post_data('Pass_5');

        $Wt_Ret_4 = get_post_data('Wt_Ret_4');
        $Ret_4 = get_post_data('Ret_4');
        $Cum_Ret_4 = get_post_data('Cum_Ret_4');
        $Pass_4 = get_post_data('Pass_4');

        $Wt_Ret_3 = get_post_data('Wt_Ret_3');
        $Ret_3 = get_post_data('Ret_3');
        $Cum_Ret_3 = get_post_data('Cum_Ret_3');
        $Pass_3 = get_post_data('Pass_3');

        $Wt_Ret_2p5 = get_post_data('Wt_Ret_2p5');
        $Ret_2p5 = get_post_data('Ret_2p5');
        $Cum_Ret_2p5 = get_post_data('Cum_Ret_2p5');
        $Pass_2p5 = get_post_data('Pass_2p5');

        $Wt_Ret_2 = get_post_data('Wt_Ret_2');
        $Ret_2 = get_post_data('Ret_2');
        $Cum_Ret_2 = get_post_data('Cum_Ret_2');
        $Pass_2 = get_post_data('Pass_2');

        $Wt_Ret_1p5 = get_post_data('Wt_Ret_1p5');
        $Ret_1p5 = get_post_data('Ret_1p5');
        $Cum_Ret_1p5 = get_post_data('Cum_Ret_1p5');
        $Pass_1p5 = get_post_data('Pass_1p5');

        $Wt_Ret_1 = get_post_data('Wt_Ret_1');
        $Ret_1 = get_post_data('Ret_1');
        $Cum_Ret_1 = get_post_data('Cum_Ret_1');
        $Pass_1 = get_post_data('Pass_1');

        $Wt_Ret_3p4 = get_post_data('Wt_Ret_3p4');
        $Ret_3p4 = get_post_data('Ret_3p4');
        $Cum_Ret_3p4 = get_post_data('Cum_Ret_3p4');
        $Pass_3p4 = get_post_data('Pass_3p4');

        $Wt_Ret_1p2 = get_post_data('Wt_Ret_1p2');
        $Ret_1p2 = get_post_data('Ret_1p2');
        $Cum_Ret_1p2 = get_post_data('Cum_Ret_1p2');
        $Pass_1p2 = get_post_data('Pass_1p2');

        $Wt_Ret_3p8 = get_post_data('Wt_Ret_3p8');
        $Ret_3p8 = get_post_data('Ret_3p8');
        $Cum_Ret_3p8 = get_post_data('Cum_Ret_3p8');
        $Pass_3p8 = get_post_data('Pass_3p8');

        $Wt_Ret_No4 = get_post_data('Wt_Ret_No4');
        $Ret_No4 = get_post_data('Ret_No4');
        $Cum_Ret_No4 = get_post_data('Cum_Ret_No4');
        $Pass_No4 = get_post_data('Pass_No4');

        $Wt_Ret_No10 = get_post_data('Wt_Ret_No10');
        $Ret_No10 = get_post_data('Ret_No10');
        $Cum_Ret_No10 = get_post_data('Cum_Ret_No10');
        $Pass_No10 = get_post_data('Pass_No10');

        $Wt_Ret_No16 = get_post_data('Wt_Ret_No16');
        $Ret_No16 = get_post_data('Ret_No16');
        $Cum_Ret_No16 = get_post_data('Cum_Ret_No16');
        $Pass_No16 = get_post_data('Pass_No16');

        $Wt_Ret_No20 = get_post_data('Wt_Ret_No20');
        $Ret_No20 = get_post_data('Ret_No20');
        $Cum_Ret_No20 = get_post_data('Cum_Ret_No20');
        $Pass_No20 = get_post_data('Pass_No20');

        $Wt_Ret_No50 = get_post_data('Wt_Ret_No50');
        $Ret_No50 = get_post_data('Ret_No50');
        $Cum_Ret_No50 = get_post_data('Cum_Ret_No50');
        $Pass_No50 = get_post_data('Pass_No50');

        $Wt_Ret_No60 = get_post_data('Wt_Ret_No60');
        $Ret_No60 = get_post_data('Ret_No60');
        $Cum_Ret_No60 = get_post_data('Cum_Ret_No60');
        $Pass_No60 = get_post_data('Pass_No60');

        $Wt_Ret_No100 = get_post_data('Wt_Ret_No100');
        $Ret_No100 = get_post_data('Ret_No100');
        $Cum_Ret_No100 = get_post_data('Cum_Ret_No100');
        $Pass_No100 = get_post_data('Pass_No100');

        $Wt_Ret_No140 = get_post_data('Wt_Ret_No140');
        $Ret_No140 = get_post_data('Ret_No140');
        $Cum_Ret_No140 = get_post_data('Cum_Ret_No140');
        $Pass_No140 = get_post_data('Pass_No140');

        $Wt_Ret_No200 = get_post_data('Wt_Ret_No200');
        $Ret_No200 = get_post_data('Ret_No200');
        $Cum_Ret_No200 = get_post_data('Cum_Ret_No200');
        $Pass_No200 = get_post_data('Pass_No200');

        $Pan_Wt_Ret = get_post_data('Pan_Wt_Ret');
        $Pan_Ret = get_post_data('Pan_Ret');
        $Total_Wt_Ret = get_post_data('Total_Wt_Ret');
        $Total_Ret = get_post_data('Total_Ret');
        $Total_Cum_Ret = get_post_data('Total_Cum_Ret');
        $Total_Pass = get_post_data('Total_Pass');
        $Coarser_than_Gravel = get_post_data('Coarser_than_Gravel');
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
        $Date_No1 = get_post_data('Date_No1');
        $Date_No2 = get_post_data('Date_No2');
        $Date_No3 = get_post_data('Date_No3');
        $Date_No4 = get_post_data('Date_No4');
        $Date_No5 = get_post_data('Date_No5');
        $Date_No6 = get_post_data('Date_No6');
        $Date_No7 = get_post_data('Date_No7');
        $Date_No8 = get_post_data('Date_No8');
        $Date_No9 = get_post_data('Date_No9');
        $Hour_No1 = get_post_data('Hour_No1');
        $Hour_No2 = get_post_data('Hour_No2');
        $Hour_No3 = get_post_data('Hour_No3');
        $Hour_No4 = get_post_data('Hour_No4');
        $Hour_No5 = get_post_data('Hour_No5');
        $Hour_No6 = get_post_data('Hour_No6');
        $Hour_No7 = get_post_data('Hour_No7');
        $Hour_No8 = get_post_data('Hour_No8');
        $Hour_No9 = get_post_data('Hour_No9');
        $Reading_Time_min_No1 = get_post_data('Reading_Time_min_No1');
        $Reading_Time_min_No2 = get_post_data('Reading_Time_min_No2');
        $Reading_Time_min_No3 = get_post_data('Reading_Time_min_No3');
        $Reading_Time_min_No4 = get_post_data('Reading_Time_min_No4');
        $Reading_Time_min_No5 = get_post_data('Reading_Time_min_No5');
        $Reading_Time_min_No6 = get_post_data('Reading_Time_min_No6');
        $Reading_Time_min_No7 = get_post_data('Reading_Time_min_No7');
        $Reading_Time_min_No8 = get_post_data('Reading_Time_min_No8');
        $Reading_Time_min_No9 = get_post_data('Reading_Time_min_No9');
        $Temp_No1 = get_post_data('Temp_No1');
        $Temp_No2 = get_post_data('Temp_No2');
        $Temp_No3 = get_post_data('Temp_No3');
        $Temp_No4 = get_post_data('Temp_No4');
        $Temp_No5 = get_post_data('Temp_No5');
        $Temp_No6 = get_post_data('Temp_No6');
        $Temp_No7 = get_post_data('Temp_No7');
        $Temp_No8 = get_post_data('Temp_No8');
        $Temp_No9 = get_post_data('Temp_No9');
        $Hydrometer_Readings_Rm_No1 = get_post_data('Hydrometer_Readings_Rm_No1');
        $Hydrometer_Readings_Rm_No2 = get_post_data('Hydrometer_Readings_Rm_No2');
        $Hydrometer_Readings_Rm_No3 = get_post_data('Hydrometer_Readings_Rm_No3');
        $Hydrometer_Readings_Rm_No4 = get_post_data('Hydrometer_Readings_Rm_No4');
        $Hydrometer_Readings_Rm_No5 = get_post_data('Hydrometer_Readings_Rm_No5');
        $Hydrometer_Readings_Rm_No6 = get_post_data('Hydrometer_Readings_Rm_No6');
        $Hydrometer_Readings_Rm_No7 = get_post_data('Hydrometer_Readings_Rm_No7');
        $Hydrometer_Readings_Rm_No8 = get_post_data('Hydrometer_Readings_Rm_No8');
        $Hydrometer_Readings_Rm_No9 = get_post_data('Hydrometer_Readings_Rm_No9');
        $A_or_B_depending_of_the_Hy_type_No1 = get_post_data('A_or_B_depending_of_the_Hy_type_No1');
        $A_or_B_depending_of_the_Hy_type_No2 = get_post_data('A_or_B_depending_of_the_Hy_type_No2');
        $A_or_B_depending_of_the_Hy_type_No3 = get_post_data('A_or_B_depending_of_the_Hy_type_No3');
        $A_or_B_depending_of_the_Hy_type_No4 = get_post_data('A_or_B_depending_of_the_Hy_type_No4');
        $A_or_B_depending_of_the_Hy_type_No5 = get_post_data('A_or_B_depending_of_the_Hy_type_No5');
        $A_or_B_depending_of_the_Hy_type_No6 = get_post_data('A_or_B_depending_of_the_Hy_type_No6');
        $A_or_B_depending_of_the_Hy_type_No7 = get_post_data('A_or_B_depending_of_the_Hy_type_No7');
        $A_or_B_depending_of_the_Hy_type_No8 = get_post_data('A_or_B_depending_of_the_Hy_type_No8');
        $A_or_B_depending_of_the_Hy_type_No9 = get_post_data('A_or_B_depending_of_the_Hy_type_No9');
        $Offset_at_Reading_rdm_No1 = get_post_data('Offset_at_Reading_rdm_No1');
        $Offset_at_Reading_rdm_No2 = get_post_data('Offset_at_Reading_rdm_No2');
        $Offset_at_Reading_rdm_No3 = get_post_data('Offset_at_Reading_rdm_No3');
        $Offset_at_Reading_rdm_No4 = get_post_data('Offset_at_Reading_rdm_No4');
        $Offset_at_Reading_rdm_No5 = get_post_data('Offset_at_Reading_rdm_No5');
        $Offset_at_Reading_rdm_No6 = get_post_data('Offset_at_Reading_rdm_No6');
        $Offset_at_Reading_rdm_No7 = get_post_data('Offset_at_Reading_rdm_No7');
        $Offset_at_Reading_rdm_No8 = get_post_data('Offset_at_Reading_rdm_No8');
        $Offset_at_Reading_rdm_No9 = get_post_data('Offset_at_Reading_rdm_No9');
        $Mass_Percent_Finer_Nm_Porce_No1 = get_post_data('Mass_Percent_Finer_Nm_Porce_No1');
        $Mass_Percent_Finer_Nm_Porce_No2 = get_post_data('Mass_Percent_Finer_Nm_Porce_No2');
        $Mass_Percent_Finer_Nm_Porce_No3 = get_post_data('Mass_Percent_Finer_Nm_Porce_No3');
        $Mass_Percent_Finer_Nm_Porce_No4 = get_post_data('Mass_Percent_Finer_Nm_Porce_No4');
        $Mass_Percent_Finer_Nm_Porce_No5 = get_post_data('Mass_Percent_Finer_Nm_Porce_No5');
        $Mass_Percent_Finer_Nm_Porce_No6 = get_post_data('Mass_Percent_Finer_Nm_Porce_No6');
        $Mass_Percent_Finer_Nm_Porce_No7 = get_post_data('Mass_Percent_Finer_Nm_Porce_No7');
        $Mass_Percent_Finer_Nm_Porce_No8 = get_post_data('Mass_Percent_Finer_Nm_Porce_No8');
        $Mass_Percent_Finer_Nm_Porce_No9 = get_post_data('Mass_Percent_Finer_Nm_Porce_No9');
        $Effective_Length_Hm_No1 = get_post_data('Effective_Length_Hm_No1');
        $Effective_Length_Hm_No2 = get_post_data('Effective_Length_Hm_No2');
        $Effective_Length_Hm_No3 = get_post_data('Effective_Length_Hm_No3');
        $Effective_Length_Hm_No4 = get_post_data('Effective_Length_Hm_No4');
        $Effective_Length_Hm_No5 = get_post_data('Effective_Length_Hm_No5');
        $Effective_Length_Hm_No6 = get_post_data('Effective_Length_Hm_No6');
        $Effective_Length_Hm_No7 = get_post_data('Effective_Length_Hm_No7');
        $Effective_Length_Hm_No8 = get_post_data('Effective_Length_Hm_No8');
        $Effective_Length_Hm_No9 = get_post_data('Effective_Length_Hm_No9');
        $D_mm_No1 = get_post_data('D_mm_No1');
        $D_mm_No2 = get_post_data('D_mm_No2');
        $D_mm_No3 = get_post_data('D_mm_No3');
        $D_mm_No4 = get_post_data('D_mm_No4');
        $D_mm_No5 = get_post_data('D_mm_No5');
        $D_mm_No6 = get_post_data('D_mm_No6');
        $D_mm_No7 = get_post_data('D_mm_No7');
        $D_mm_No8 = get_post_data('D_mm_No8');
        $D_mm_No9 = get_post_data('D_mm_No9');
        $Passing_Percentage_Respect_to_the_Total_Sample_No1 = get_post_data('Passing_Percentage_Respect_to_the_Total_Sample_No1');
        $Passing_Percentage_Respect_to_the_Total_Sample_No2 = get_post_data('Passing_Percentage_Respect_to_the_Total_Sample_No2');
        $Passing_Percentage_Respect_to_the_Total_Sample_No3 = get_post_data('Passing_Percentage_Respect_to_the_Total_Sample_No3');
        $Passing_Percentage_Respect_to_the_Total_Sample_No4 = get_post_data('Passing_Percentage_Respect_to_the_Total_Sample_No4');
        $Passing_Percentage_Respect_to_the_Total_Sample_No5 = get_post_data('Passing_Percentage_Respect_to_the_Total_Sample_No5');
        $Passing_Percentage_Respect_to_the_Total_Sample_No6 = get_post_data('Passing_Percentage_Respect_to_the_Total_Sample_No6');
        $Passing_Percentage_Respect_to_the_Total_Sample_No7 = get_post_data('Passing_Percentage_Respect_to_the_Total_Sample_No7');
        $Passing_Percentage_Respect_to_the_Total_Sample_No8 = get_post_data('Passing_Percentage_Respect_to_the_Total_Sample_No8');
        $Passing_Percentage_Respect_to_the_Total_Sample_No9 = get_post_data('Passing_Percentage_Respect_to_the_Total_Sample_No9');
        $Classification_of_Soils_as_per_USCS = get_post_data('TempeClassification_of_Soils_as_per_USCSratureType');
        $ASTM_designation_D_2487_06 = get_post_data('ASTM_designation_D_2487_06');

        $sql = "INSERT INTO hydrometer (
            Sample_ID, Sample_Number, Structure, Area, Source, Depth_From, Depth_To,
            Material_Type, Sample_Type, North, East, Elev, Sample_Date, Report_Date,
            test_type, Standard, Preparation_Method, Dispersion_Device, Comments, Technician,
            Test_Start_Date, Hydrometer_Type, Temperature_Type, Specific_Gravity_Type,
            Dispersing_Agent,
            Amount_Used_g,
            Temperature_of_Test,
            Viscosity_of_Water_gs_cm2,
            Mass_Density_of_Water_Calibrated,
            Acceleration_cm_s2,
            Volume_of_Suspension_Vsp_cm3,
            Meniscus_Correction_Cm,
            Percent_Passing_No_200_sieve,
            Liquid_Limit_Porce,
            Plasticity_Index_Porce,
            Specific_Gravity,
            Tare_Name,
            Oven_Temperature,
            Tare_Plus_Wet_Soil_gr,
            Tare_Plus_Dry_Soil_gr,
            Water_Ww_gr,
            Gs_Tare_gr,
            Dry_Soil_Ws_gr,
            Moisture_Content_Porce,
            Hy_Calibration_Temperature_No1,
            Hy_Calibration_Temperature_No2,
            Hy_Calibration_Temperature_No3,
            Hy_Calibration_Temperature_No4,
            Hy_Calibration_Temperature_No5,
            Hy_Calibration_Temperature_No6,
            Hy_Calibration_Temperature_No7,
            Hy_Calibration_Temperature_No8,
            Hy_Calibration_Temperature_No9,
            Hy_Calibration_Actual_Reading_No1,
            Hy_Calibration_Actual_Reading_No2,
            Hy_Calibration_Actual_Reading_No3,
            Hy_Calibration_Actual_Reading_No4,
            Hy_Calibration_Actual_Reading_No5,
            Hy_Calibration_Actual_Reading_No6,
            Hy_Calibration_Actual_Reading_No7,
            Hy_Calibration_Actual_Reading_No8,
            Hy_Calibration_Actual_Reading_No9,
            Hy_Measure_Fluid_Temperature_No1,
            Hy_Measure_Fluid_Temperature_No2,
            Hy_Measure_Fluid_Temperature_No3,
            Hy_Measure_Fluid_Temperature_No4,
            Hy_Measure_Fluid_Temperature_No5,
            Hy_Measure_Fluid_Temperature_No6,
            Hy_Measure_Fluid_Temperature_No7,
            Hy_Measure_Fluid_Temperature_No8,
            Hy_Measure_Fluid_Temperature_No9,
            Hy_Measure_Fluid_Actual_Reading_No1,
            Hy_Measure_Fluid_Actual_Reading_No2,
            Hy_Measure_Fluid_Actual_Reading_No3,
            Hy_Measure_Fluid_Actual_Reading_No4,
            Hy_Measure_Fluid_Actual_Reading_No5,
            Hy_Measure_Fluid_Actual_Reading_No6,
            Hy_Measure_Fluid_Actual_Reading_No7,
            Hy_Measure_Fluid_Actual_Reading_No8,
            Hy_Measure_Fluid_Actual_Reading_No9,
            Container,
            Wt_Wet_Soil_Tare_gr,
            Wt_Dry_Soil_Tare_gr,
            Tare_gr,
            Wt_Dry_Soil_gr,
            Wt_Washed_gr,
            Wt_Wash_Pan_gr,
            Wt_Ret_40,
            Ret_40,
            Cum_Ret_40,
            Pass_40,
            Wt_Ret_12,
            Ret_12,
            Cum_Ret_12,
            Pass_12,
            Wt_Ret_10,
            Ret_10,
            Cum_Ret_10,
            Pass_10,
            Wt_Ret_8,
            Ret_8,
            Cum_Ret_8,
            Pass_8,
            Wt_Ret_6,
            Ret_6,
            Cum_Ret_6,
            Pass_6,
            Wt_Ret_5,
            Ret_5,
            Cum_Ret_5,
            Pass_5,
            Wt_Ret_4,
            Ret_4,
            Cum_Ret_4,
            Pass_4,
            Wt_Ret_3,
            Ret_3,
            Cum_Ret_3,
            Pass_3,
            Wt_Ret_2p5,
            Ret_2p5,
            Cum_Ret_2p5,
            Pass_2p5,
            Wt_Ret_2,
            Ret_2,
            Cum_Ret_2,
            Pass_2,
            Wt_Ret_1p5,
            Ret_1p5,
            Cum_Ret_1p5,
            Pass_1p5,
            Wt_Ret_1,
            Ret_1,
            Cum_Ret_1,
            Pass_1,
            Wt_Ret_3p4,
            Ret_3p4,
            Cum_Ret_3p4,
            Pass_3p4,
            Wt_Ret_1p2,
            Ret_1p2,
            Cum_Ret_1p2,
            Pass_1p2,
            Wt_Ret_3p8,
            Ret_3p8,
            Cum_Ret_3p8,
            Pass_3p8,
            Wt_Ret_No4,
            Ret_No4,
            Cum_Ret_No4,
            Pass_No4,
            Wt_Ret_No10,
            Ret_No10,
            Cum_Ret_No10,
            Pass_No10,
            Wt_Ret_No16,
            Ret_No16,
            Cum_Ret_No16,
            Pass_No16,
            Wt_Ret_No20,
            Ret_No20,
            Cum_Ret_No20,
            Pass_No20,
            Wt_Ret_No50,
            Ret_No50,
            Cum_Ret_No50,
            Pass_No50,
            Wt_Ret_No60,
            Ret_No60,
            Cum_Ret_No60,
            Pass_No60,
            Wt_Ret_No100,
            Ret_No100,
            Cum_Ret_No100,
            Pass_No100,
            Wt_Ret_No140,
            Ret_No140,
            Cum_Ret_No140,
            Pass_No140,
            Wt_Ret_No200,
            Ret_No200,
            Cum_Ret_No200,
            Pass_No200,
            Pan_Wt_Ret,
            Pan_Ret,
            Total_Wt_Ret,
            Total_Ret,
            Total_Cum_Ret,
            Total_Pass,
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
            Date_No1,
            Date_No2,
            Date_No3,
            Date_No4,
            Date_No5,
            Date_No6,
            Date_No7,
            Date_No8,
            Date_No9,
            Hour_No1,
            Hour_No2,
            Hour_No3,
            Hour_No4,
            Hour_No5,
            Hour_No6,
            Hour_No7,
            Hour_No8,
            Hour_No9,
            Reading_Time_min_No1,
            Reading_Time_min_No2,
            Reading_Time_min_No3,
            Reading_Time_min_No4,
            Reading_Time_min_No5,
            Reading_Time_min_No6,
            Reading_Time_min_No7,
            Reading_Time_min_No8,
            Reading_Time_min_No9,
            Temp_No1,
            Temp_No2,
            Temp_No3,
            Temp_No4,
            Temp_No5,
            Temp_No6,
            Temp_No7,
            Temp_No8,
            Temp_No9,
            Hydrometer_Readings_Rm_No1,
            Hydrometer_Readings_Rm_No2,
            Hydrometer_Readings_Rm_No3,
            Hydrometer_Readings_Rm_No4,
            Hydrometer_Readings_Rm_No5,
            Hydrometer_Readings_Rm_No6,
            Hydrometer_Readings_Rm_No7,
            Hydrometer_Readings_Rm_No8,
            Hydrometer_Readings_Rm_No9,
            A_or_B_depending_of_the_Hy_type_No1,
            A_or_B_depending_of_the_Hy_type_No2,
            A_or_B_depending_of_the_Hy_type_No3,
            A_or_B_depending_of_the_Hy_type_No4,
            A_or_B_depending_of_the_Hy_type_No5,
            A_or_B_depending_of_the_Hy_type_No6,
            A_or_B_depending_of_the_Hy_type_No7,
            A_or_B_depending_of_the_Hy_type_No8,
            A_or_B_depending_of_the_Hy_type_No9,
            Offset_at_Reading_rdm_No1,
            Offset_at_Reading_rdm_No2,
            Offset_at_Reading_rdm_No3,
            Offset_at_Reading_rdm_No4,
            Offset_at_Reading_rdm_No5,
            Offset_at_Reading_rdm_No6,
            Offset_at_Reading_rdm_No7,
            Offset_at_Reading_rdm_No8,
            Offset_at_Reading_rdm_No9,
            Mass_Percent_Finer_Nm_Porce_No1,
            Mass_Percent_Finer_Nm_Porce_No2,
            Mass_Percent_Finer_Nm_Porce_No3,
            Mass_Percent_Finer_Nm_Porce_No4,
            Mass_Percent_Finer_Nm_Porce_No5,
            Mass_Percent_Finer_Nm_Porce_No6,
            Mass_Percent_Finer_Nm_Porce_No7,
            Mass_Percent_Finer_Nm_Porce_No8,
            Mass_Percent_Finer_Nm_Porce_No9,
            Effective_Length_Hm_No1,
            Effective_Length_Hm_No2,
            Effective_Length_Hm_No3,
            Effective_Length_Hm_No4,
            Effective_Length_Hm_No5,
            Effective_Length_Hm_No6,
            Effective_Length_Hm_No7,
            Effective_Length_Hm_No8,
            Effective_Length_Hm_No9,
            D_mm_No1,
            D_mm_No2,
            D_mm_No3,
            D_mm_No4,
            D_mm_No5,
            D_mm_No6,
            D_mm_No7,
            D_mm_No8,
            D_mm_No9,
            Passing_Percentage_Respect_to_the_Total_Sample_No1,
            Passing_Percentage_Respect_to_the_Total_Sample_No2,
            Passing_Percentage_Respect_to_the_Total_Sample_No3,
            Passing_Percentage_Respect_to_the_Total_Sample_No4,
            Passing_Percentage_Respect_to_the_Total_Sample_No5,
            Passing_Percentage_Respect_to_the_Total_Sample_No6,
            Passing_Percentage_Respect_to_the_Total_Sample_No7,
            Passing_Percentage_Respect_to_the_Total_Sample_No8,
            Passing_Percentage_Respect_to_the_Total_Sample_No9,
            Classification_of_Soils_as_per_USCS,
            ASTM_designation_D_2487_06

        ) VALUES (
            '$sampleid', '$samplenumber', '$structure', '$area', '$source', '$depthfrom',
            '$depthto', '$materialtype', '$sampletype', '$north', '$east', '$elev',
            '$sampledate', '$reportdate', '$testype', '$Standard', '$PreparationMethod',
            '$DispersionDevice', '$Comments', '$Technician', '$TestStartDate', '$HydrometerType', '$TemperatureType',
            '$Specific_Gravity_Type',
            '$Dispersing_Agent',
            '$Amount_Used_g',
            '$Temperature_of_Test',
            '$Viscosity_of_Water_gs_cm2',
            '$Mass_Density_of_Water_Calibrated',
            '$Acceleration_cm_s2',
            '$Volume_of_Suspension_Vsp_cm3',
            '$Meniscus_Correction_Cm',
            '$Percent_Passing_No_200_sieve',
            '$Liquid_Limit_Porce',
            '$Plasticity_Index_Porce',
            '$Specific_Gravity',
            '$Tare_Name',
            '$Oven_Temperature',
            '$Tare_Plus_Wet_Soil_gr',
            '$Tare_Plus_Dry_Soil_gr',
            '$Water_Ww_gr',
            '$Gs_Tare_gr',
            '$Dry_Soil_Ws_gr',
            '$Moisture_Content_Porce',
            '$Hy_Calibration_Temperature_No1',
            '$Hy_Calibration_Temperature_No2',
            '$Hy_Calibration_Temperature_No3',
            '$Hy_Calibration_Temperature_No4',
            '$Hy_Calibration_Temperature_No5',
            '$Hy_Calibration_Temperature_No6',
            '$Hy_Calibration_Temperature_No7',
            '$Hy_Calibration_Temperature_No8',
            '$Hy_Calibration_Temperature_No9',
            '$Hy_Calibration_Actual_Reading_No1',
            '$Hy_Calibration_Actual_Reading_No2',
            '$Hy_Calibration_Actual_Reading_No3',
            '$Hy_Calibration_Actual_Reading_No4',
            '$Hy_Calibration_Actual_Reading_No5',
            '$Hy_Calibration_Actual_Reading_No6',
            '$Hy_Calibration_Actual_Reading_No7',
            '$Hy_Calibration_Actual_Reading_No8',
            '$Hy_Calibration_Actual_Reading_No9',
            '$Hy_Measure_Fluid_Temperature_No1',
            '$Hy_Measure_Fluid_Temperature_No2',
            '$Hy_Measure_Fluid_Temperature_No3',
            '$Hy_Measure_Fluid_Temperature_No4',
            '$Hy_Measure_Fluid_Temperature_No5',
            '$Hy_Measure_Fluid_Temperature_No6',
            '$Hy_Measure_Fluid_Temperature_No7',
            '$Hy_Measure_Fluid_Temperature_No8',
            '$Hy_Measure_Fluid_Temperature_No9',
            '$Hy_Measure_Fluid_Actual_Reading_No1',
            '$Hy_Measure_Fluid_Actual_Reading_No2',
            '$Hy_Measure_Fluid_Actual_Reading_No3',
            '$Hy_Measure_Fluid_Actual_Reading_No4',
            '$Hy_Measure_Fluid_Actual_Reading_No5',
            '$Hy_Measure_Fluid_Actual_Reading_No6',
            '$Hy_Measure_Fluid_Actual_Reading_No7',
            '$Hy_Measure_Fluid_Actual_Reading_No8',
            '$Hy_Measure_Fluid_Actual_Reading_No9',
            '$Container',
            '$Wt_Wet_Soil_Tare_gr',
            '$Wt_Dry_Soil_Tare_gr',
            '$Tare_gr',
            '$Wt_Dry_Soil_gr',
            '$Wt_Washed_gr',
            '$Wt_Wash_Pan_gr',
            '$Wt_Ret_40',
            '$Ret_40',
            '$Cum_Ret_40',
            '$Pass_40',
            '$Wt_Ret_12',
            '$Ret_12',
            '$Cum_Ret_12',
            '$Pass_12',
            '$Wt_Ret_10',
            '$Ret_10',
            '$Cum_Ret_10',
            '$Pass_10',
            '$Wt_Ret_8',
            '$Ret_8',
            '$Cum_Ret_8',
            '$Pass_8',
            '$Wt_Ret_6',
            '$Ret_6',
            '$Cum_Ret_6',
            '$Pass_6',
            '$Wt_Ret_5',
            '$Ret_5',
            '$Cum_Ret_5',
            '$Pass_5',
            '$Wt_Ret_4',
            '$Ret_4',
            '$Cum_Ret_4',
            '$Pass_4',
            '$Wt_Ret_3',
            '$Ret_3',
            '$Cum_Ret_3',
            '$Pass_3',
            '$Wt_Ret_2p5',
            '$Ret_2p5',
            '$Cum_Ret_2p5',
            '$Pass_2p5',
            '$Wt_Ret_2',
            '$Ret_2',
            '$Cum_Ret_2',
            '$Pass_2',
            '$Wt_Ret_1p5',
            '$Ret_1p5',
            '$Cum_Ret_1p5',
            '$Pass_1p5',
            '$Wt_Ret_1',
            '$Ret_1',
            '$Cum_Ret_1',
            '$Pass_1',
            '$Wt_Ret_3p4',
            '$Ret_3p4',
            '$Cum_Ret_3p4',
            '$Pass_3p4',
            '$Wt_Ret_1p2',
            '$Ret_1p2',
            '$Cum_Ret_1p2',
            '$Pass_1p2',
            '$Wt_Ret_3p8',
            '$Ret_3p8',
            '$Cum_Ret_3p8',
            '$Pass_3p8',
            '$Wt_Ret_No4',
            '$Ret_No4',
            '$Cum_Ret_No4',
            '$Pass_No4',
            '$Wt_Ret_No10',
            '$Ret_No10',
            '$Cum_Ret_No10',
            '$Pass_No10',
            '$Wt_Ret_No16',
            '$Ret_No16',
            '$Cum_Ret_No16',
            '$Pass_No16',
            '$Wt_Ret_No20',
            '$Ret_No20',
            '$Cum_Ret_No20',
            '$Pass_No20',
            '$Wt_Ret_No50',
            '$Ret_No50',
            '$Cum_Ret_No50',
            '$Pass_No50',
            '$Wt_Ret_No60',
            '$Ret_No60',
            '$Cum_Ret_No60',
            '$Pass_No60',
            '$Wt_Ret_No100',
            '$Ret_No100',
            '$Cum_Ret_No100',
            '$Pass_No100',
            '$Wt_Ret_No140',
            '$Ret_No140',
            '$Cum_Ret_No140',
            '$Pass_No140',
            '$Wt_Ret_No200',
            '$Ret_No200',
            '$Cum_Ret_No200',
            '$Pass_No200',
            '$Pan_Wt_Ret',
            '$Pan_Ret',
            '$Total_Wt_Ret',
            '$Total_Ret',
            '$Total_Cum_Ret',
            '$Total_Pass',
            '$Coarser_than_Gravel',
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
            '$Date_No1',
            '$Date_No2',
            '$Date_No3',
            '$Date_No4',
            '$Date_No5',
            '$Date_No6',
            '$Date_No7',
            '$Date_No8',
            '$Date_No9',
            '$Hour_No1',
            '$Hour_No2',
            '$Hour_No3',
            '$Hour_No4',
            '$Hour_No5',
            '$Hour_No6',
            '$Hour_No7',
            '$Hour_No8',
            '$Hour_No9',
            '$Reading_Time_min_No1',
            '$Reading_Time_min_No2',
            '$Reading_Time_min_No3',
            '$Reading_Time_min_No4',
            '$Reading_Time_min_No5',
            '$Reading_Time_min_No6',
            '$Reading_Time_min_No7',
            '$Reading_Time_min_No8',
            '$Reading_Time_min_No9',
            '$Temp_No1',
            '$Temp_No2',
            '$Temp_No3',
            '$Temp_No4',
            '$Temp_No5',
            '$Temp_No6',
            '$Temp_No7',
            '$Temp_No8',
            '$Temp_No9',
            '$Hydrometer_Readings_Rm_No1',
            '$Hydrometer_Readings_Rm_No2',
            '$Hydrometer_Readings_Rm_No3',
            '$Hydrometer_Readings_Rm_No4',
            '$Hydrometer_Readings_Rm_No5',
            '$Hydrometer_Readings_Rm_No6',
            '$Hydrometer_Readings_Rm_No7',
            '$Hydrometer_Readings_Rm_No8',
            '$Hydrometer_Readings_Rm_No9',
            '$A_or_B_depending_of_the_Hy_type_No1',
            '$A_or_B_depending_of_the_Hy_type_No2',
            '$A_or_B_depending_of_the_Hy_type_No3',
            '$A_or_B_depending_of_the_Hy_type_No4',
            '$A_or_B_depending_of_the_Hy_type_No5',
            '$A_or_B_depending_of_the_Hy_type_No6',
            '$A_or_B_depending_of_the_Hy_type_No7',
            '$A_or_B_depending_of_the_Hy_type_No8',
            '$A_or_B_depending_of_the_Hy_type_No9',
            '$Offset_at_Reading_rdm_No1',
            '$Offset_at_Reading_rdm_No2',
            '$Offset_at_Reading_rdm_No3',
            '$Offset_at_Reading_rdm_No4',
            '$Offset_at_Reading_rdm_No5',
            '$Offset_at_Reading_rdm_No6',
            '$Offset_at_Reading_rdm_No7',
            '$Offset_at_Reading_rdm_No8',
            '$Offset_at_Reading_rdm_No9',
            '$Mass_Percent_Finer_Nm_Porce_No1',
            '$Mass_Percent_Finer_Nm_Porce_No2',
            '$Mass_Percent_Finer_Nm_Porce_No3',
            '$Mass_Percent_Finer_Nm_Porce_No4',
            '$Mass_Percent_Finer_Nm_Porce_No5',
            '$Mass_Percent_Finer_Nm_Porce_No6',
            '$Mass_Percent_Finer_Nm_Porce_No7',
            '$Mass_Percent_Finer_Nm_Porce_No8',
            '$Mass_Percent_Finer_Nm_Porce_No9',
            '$Effective_Length_Hm_No1',
            '$Effective_Length_Hm_No2',
            '$Effective_Length_Hm_No3',
            '$Effective_Length_Hm_No4',
            '$Effective_Length_Hm_No5',
            '$Effective_Length_Hm_No6',
            '$Effective_Length_Hm_No7',
            '$Effective_Length_Hm_No8',
            '$Effective_Length_Hm_No9',
            '$D_mm_No1',
            '$D_mm_No2',
            '$D_mm_No3',
            '$D_mm_No4',
            '$D_mm_No5',
            '$D_mm_No6',
            '$D_mm_No7',
            '$D_mm_No8',
            '$D_mm_No9',
            '$Passing_Percentage_Respect_to_the_Total_Sample_No1',
            '$Passing_Percentage_Respect_to_the_Total_Sample_No2',
            '$Passing_Percentage_Respect_to_the_Total_Sample_No3',
            '$Passing_Percentage_Respect_to_the_Total_Sample_No4',
            '$Passing_Percentage_Respect_to_the_Total_Sample_No5',
            '$Passing_Percentage_Respect_to_the_Total_Sample_No6',
            '$Passing_Percentage_Respect_to_the_Total_Sample_No7',
            '$Passing_Percentage_Respect_to_the_Total_Sample_No8',
            '$Passing_Percentage_Respect_to_the_Total_Sample_No9',
            '$Classification_of_Soils_as_per_USCS',
            '$ASTM_designation_D_2487_06'

        )";

        if ($db->query($sql)) {
            $session->msg('s', "Ensayo agregado exitosamente.");
            redirect('./hydrometer.php', false);
        } else {
            $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
            redirect('./hydrometer.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('./hydrometer.php', false);
    }
}

?>