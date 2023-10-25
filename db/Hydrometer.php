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

<?php
$search_table = find_by_id('hydrometer', (int)$_GET['id']);
  // Verifica si se ha enviado el formulario
  if (isset($_POST['update_muestra'])) {
    $req_fields = array(
      'Standard'
    );
    
    // Valida los campos requeridos
    validate_fields($req_fields);

    if (empty($errors)) {
      // Obtiene los valores de los campos del formulario
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

      $query = "UPDATE hydrometer SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Dispersion_Device = '{$DispersionDevice}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";
      $query .= "Hydrometer_Type = '{$HydrometerType}', ";
      $query .= "Temperature_Type = '{$TemperatureType}', ";
      $query .= "Specific_Gravity_Type = '{$Specific_Gravity_Type}', ";

      $query .= "Dispersing_Agent = '{$Dispersing_Agent}', ";
      $query .= "Amount_Used_g = '{$Amount_Used_g}', ";
      $query .= "Temperature_of_Test = '{$Temperature_of_Test}', ";
      $query .= "Viscosity_of_Water_gs_cm2 = '{$Viscosity_of_Water_gs_cm2}', ";
      $query .= "Mass_Density_of_Water_Calibrated = '{$Mass_Density_of_Water_Calibrated}', ";
      $query .= "Acceleration_cm_s2 = '{$Acceleration_cm_s2}', ";
      $query .= "Volume_of_Suspension_Vsp_cm3 = '{$Volume_of_Suspension_Vsp_cm3}', ";
      $query .= "Meniscus_Correction_Cm = '{$Meniscus_Correction_Cm}', ";
      $query .= "Percent_Passing_No_200_sieve = '{$Percent_Passing_No_200_sieve}', ";
      $query .= "Liquid_Limit_Porce = '{$Liquid_Limit_Porce}', ";
      $query .= "Plasticity_Index_Porce = '{$Plasticity_Index_Porce}', ";
      $query .= "Specific_Gravity = '{$Specific_Gravity}', ";
      $query .= "Tare_Name = '{$Tare_Name}', ";
      $query .= "Oven_Temperature = '{$Oven_Temperature}', ";
      $query .= "Tare_Plus_Wet_Soil_gr = '{$Tare_Plus_Wet_Soil_gr}', ";
      $query .= "Tare_Plus_Dry_Soil_gr = '{$Tare_Plus_Dry_Soil_gr}', ";
      $query .= "Water_Ww_gr = '{$Water_Ww_gr}', ";
      $query .= "Gs_Tare_gr = '{$Gs_Tare_gr}', ";
      $query .= "Dry_Soil_Ws_gr = '{$Dry_Soil_Ws_gr}', ";
      $query .= "Moisture_Content_Porce = '{$Moisture_Content_Porce}', ";

      $query .= "Hy_Calibration_Temperature_No1 = '{$Hy_Calibration_Temperature_No1}', ";
      $query .= "Hy_Calibration_Temperature_No2 = '{$Hy_Calibration_Temperature_No2}', ";
      $query .= "Hy_Calibration_Temperature_No3 = '{$Hy_Calibration_Temperature_No3}', ";
      $query .= "Hy_Calibration_Temperature_No4 = '{$Hy_Calibration_Temperature_No4}', ";
      $query .= "Hy_Calibration_Temperature_No5 = '{$Hy_Calibration_Temperature_No5}', ";
      $query .= "Hy_Calibration_Temperature_No6 = '{$Hy_Calibration_Temperature_No6}', ";
      $query .= "Hy_Calibration_Temperature_No7 = '{$Hy_Calibration_Temperature_No7}', ";
      $query .= "Hy_Calibration_Temperature_No8 = '{$Hy_Calibration_Temperature_No8}', ";
      $query .= "Hy_Calibration_Temperature_No9 = '{$Hy_Calibration_Temperature_No9}', ";
      $query .= "Hy_Calibration_Actual_Reading_No1 = '{$Hy_Calibration_Actual_Reading_No1}', ";
      $query .= "Hy_Calibration_Actual_Reading_No2 = '{$Hy_Calibration_Actual_Reading_No2}', ";
      $query .= "Hy_Calibration_Actual_Reading_No3 = '{$Hy_Calibration_Actual_Reading_No3}', ";
      $query .= "Hy_Calibration_Actual_Reading_No4 = '{$Hy_Calibration_Actual_Reading_No4}', ";
      $query .= "Hy_Calibration_Actual_Reading_No5 = '{$Hy_Calibration_Actual_Reading_No5}', ";
      $query .= "Hy_Calibration_Actual_Reading_No6 = '{$Hy_Calibration_Actual_Reading_No6}', ";
      $query .= "Hy_Calibration_Actual_Reading_No7 = '{$Hy_Calibration_Actual_Reading_No7}', ";
      $query .= "Hy_Calibration_Actual_Reading_No8 = '{$Hy_Calibration_Actual_Reading_No8}', ";
      $query .= "Hy_Calibration_Actual_Reading_No9 = '{$Hy_Calibration_Actual_Reading_No9}', ";
      $query .= "Hy_Measure_Fluid_Temperature_No1 = '{$Hy_Measure_Fluid_Temperature_No1}', ";
      $query .= "Hy_Measure_Fluid_Temperature_No2 = '{$Hy_Measure_Fluid_Temperature_No2}', ";
      $query .= "Hy_Measure_Fluid_Temperature_No3 = '{$Hy_Measure_Fluid_Temperature_No3}', ";
      $query .= "Hy_Measure_Fluid_Temperature_No4 = '{$Hy_Measure_Fluid_Temperature_No4}', ";
      $query .= "Hy_Measure_Fluid_Temperature_No5 = '{$Hy_Measure_Fluid_Temperature_No5}', ";
      $query .= "Hy_Measure_Fluid_Temperature_No6 = '{$Hy_Measure_Fluid_Temperature_No6}', ";
      $query .= "Hy_Measure_Fluid_Temperature_No7 = '{$Hy_Measure_Fluid_Temperature_No7}', ";
      $query .= "Hy_Measure_Fluid_Temperature_No8 = '{$Hy_Measure_Fluid_Temperature_No8}', ";
      $query .= "Hy_Measure_Fluid_Temperature_No9 = '{$Hy_Measure_Fluid_Temperature_No9}', ";
      $query .= "Hy_Measure_Fluid_Actual_Reading_No1 = '{$Hy_Measure_Fluid_Actual_Reading_No1}', ";
      $query .= "Hy_Measure_Fluid_Actual_Reading_No2 = '{$Hy_Measure_Fluid_Actual_Reading_No2}', ";
      $query .= "Hy_Measure_Fluid_Actual_Reading_No3 = '{$Hy_Measure_Fluid_Actual_Reading_No3}', ";
      $query .= "Hy_Measure_Fluid_Actual_Reading_No4 = '{$Hy_Measure_Fluid_Actual_Reading_No4}', ";
      $query .= "Hy_Measure_Fluid_Actual_Reading_No5 = '{$Hy_Measure_Fluid_Actual_Reading_No5}', ";
      $query .= "Hy_Measure_Fluid_Actual_Reading_No6 = '{$Hy_Measure_Fluid_Actual_Reading_No6}', ";
      $query .= "Hy_Measure_Fluid_Actual_Reading_No7 = '{$Hy_Measure_Fluid_Actual_Reading_No7}', ";
      $query .= "Hy_Measure_Fluid_Actual_Reading_No8 = '{$Hy_Measure_Fluid_Actual_Reading_No8}', ";
      $query .= "Hy_Measure_Fluid_Actual_Reading_No9 = '{$Hy_Measure_Fluid_Actual_Reading_No9}', ";

      $query .= "Container = '{$Container}', ";
      $query .= "Wt_Wet_Soil_Tare_gr = '{$Wt_Wet_Soil_Tare_gr}', ";
      $query .= "Wt_Dry_Soil_Tare_gr = '{$Wt_Dry_Soil_Tare_gr}', ";
      $query .= "Tare_gr = '{$Tare_gr}', ";
      $query .= "Wt_Dry_Soil_gr = '{$Wt_Dry_Soil_gr}', ";
      $query .= "Wt_Washed_gr = '{$Wt_Washed_gr}', ";
      $query .= "Wt_Wash_Pan_gr = '{$Wt_Wash_Pan_gr}', ";

      $query .= "Wt_Ret_40 = '{$Wt_Ret_40}', ";
      $query .= "Ret_40 = '{$Ret_40}', ";
      $query .= "Cum_Ret_40 = '{$Cum_Ret_40}', ";
      $query .= "Pass_40 = '{$Pass_40}', ";

      $query .= "Wt_Ret_12 = '{$Wt_Ret_12}', ";
      $query .= "Ret_12 = '{$Ret_12}', ";
      $query .= "Cum_Ret_12 = '{$Cum_Ret_12}', ";
      $query .= "Pass_12 = '{$Pass_12}', ";

      $query .= "Wt_Ret_10 = '{$Wt_Ret_10}', ";
      $query .= "Ret_10 = '{$Ret_10}', ";
      $query .= "Cum_Ret_10 = '{$Cum_Ret_10}', ";
      $query .= "Pass_10 = '{$Pass_10}', ";

      $query .= "Wt_Ret_8 = '{$Wt_Ret_8}', ";
      $query .= "Ret_8 = '{$Ret_8}', ";
      $query .= "Cum_Ret_8 = '{$Cum_Ret_8}', ";
      $query .= "Pass_8 = '{$Pass_8}', ";

      $query .= "Wt_Ret_6 = '{$Wt_Ret_6}', ";
      $query .= "Ret_6 = '{$Ret_6}', ";
      $query .= "Cum_Ret_6 = '{$Cum_Ret_6}', ";
      $query .= "Pass_6 = '{$Pass_6}', ";

      $query .= "Wt_Ret_5 = '{$Wt_Ret_5}', ";
      $query .= "Ret_5 = '{$Ret_5}', ";
      $query .= "Cum_Ret_5 = '{$Cum_Ret_5}', ";
      $query .= "Pass_5 = '{$Pass_5}', ";

      $query .= "Wt_Ret_4 = '{$Wt_Ret_4}', ";
      $query .= "Ret_4 = '{$Ret_4}', ";
      $query .= "Cum_Ret_4 = '{$Cum_Ret_4}', ";
      $query .= "Pass_4 = '{$Pass_4}', ";

      $query .= "Wt_Ret_3 = '{$Wt_Ret_3}', ";
      $query .= "Ret_3 = '{$Ret_3}', ";
      $query .= "Cum_Ret_3 = '{$Cum_Ret_3}', ";
      $query .= "Pass_3 = '{$Pass_3}', ";

      $query .= "Wt_Ret_2p5 = '{$Wt_Ret_2p5}', ";
      $query .= "Ret_2p5 = '{$Ret_2p5}', ";
      $query .= "Cum_Ret_2p5 = '{$Cum_Ret_2p5}', ";
      $query .= "Pass_2p5 = '{$Pass_2p5}', ";

      $query .= "Wt_Ret_2 = '{$Wt_Ret_2}', ";
      $query .= "Ret_2 = '{$Ret_2}', ";
      $query .= "Cum_Ret_2 = '{$Cum_Ret_2}', ";
      $query .= "Pass_2 = '{$Pass_2}', ";

      $query .= "Wt_Ret_1p5 = '{$Wt_Ret_1p5}', ";
      $query .= "Ret_1p5 = '{$Ret_1p5}', ";
      $query .= "Cum_Ret_1p5 = '{$Cum_Ret_1p5}', ";
      $query .= "Pass_1p5 = '{$Pass_1p5}', ";

      $query .= "Wt_Ret_1 = '{$Wt_Ret_1}', ";
      $query .= "Ret_1 = '{$Ret_1}', ";
      $query .= "Cum_Ret_1 = '{$Cum_Ret_1}', ";
      $query .= "Pass_1 = '{$Pass_1}', ";

      $query .= "Wt_Ret_3p4 = '{$Wt_Ret_3p4}', ";
      $query .= "Ret_3p4 = '{$Ret_3p4}', ";
      $query .= "Cum_Ret_3p4 = '{$Cum_Ret_3p4}', ";
      $query .= "Pass_3p4 = '{$Pass_3p4}', ";

      $query .= "Wt_Ret_1p2 = '{$Wt_Ret_1p2}', ";
      $query .= "Ret_1p2 = '{$Ret_1p2}', ";
      $query .= "Cum_Ret_1p2 = '{$Cum_Ret_1p2}', ";
      $query .= "Pass_1p2 = '{$Pass_1p2}', ";

      $query .= "Wt_Ret_3p8 = '{$Wt_Ret_3p8}', ";
      $query .= "Ret_3p8 = '{$Ret_3p8}', ";
      $query .= "Cum_Ret_3p8 = '{$Cum_Ret_3p8}', ";
      $query .= "Pass_3p8 = '{$Pass_3p8}', ";

      $query .= "Wt_Ret_No4 = '{$Wt_Ret_No4}', ";
      $query .= "Ret_No4 = '{$Ret_No4}', ";
      $query .= "Cum_Ret_No4 = '{$Cum_Ret_No4}', ";
      $query .= "Pass_No4 = '{$Pass_No4}', ";

      $query .= "Wt_Ret_No10 = '{$Wt_Ret_No10}', ";
      $query .= "Ret_No10 = '{$Ret_No10}', ";
      $query .= "Cum_Ret_No10 = '{$Cum_Ret_No10}', ";
      $query .= "Pass_No10 = '{$Pass_No10}', ";

      $query .= "Wt_Ret_No16 = '{$Wt_Ret_No16}', ";
      $query .= "Ret_No16 = '{$Ret_No16}', ";
      $query .= "Cum_Ret_No16 = '{$Cum_Ret_No16}', ";
      $query .= "Pass_No16 = '{$Pass_No16}', ";

      $query .= "Wt_Ret_No20 = '{$Wt_Ret_No20}', ";
      $query .= "Ret_No20 = '{$Ret_No20}', ";
      $query .= "Cum_Ret_No20 = '{$Cum_Ret_No20}', ";
      $query .= "Pass_No20 = '{$Pass_No20}', ";

      $query .= "Wt_Ret_No50 = '{$Wt_Ret_No50}', ";
      $query .= "Ret_No50 = '{$Ret_No50}', ";
      $query .= "Cum_Ret_No50 = '{$Cum_Ret_No50}', ";
      $query .= "Pass_No50 = '{$Pass_No50}', ";

      $query .= "Wt_Ret_No60 = '{$Wt_Ret_No60}', ";
      $query .= "Ret_No60 = '{$Ret_No60}', ";
      $query .= "Cum_Ret_No60 = '{$Cum_Ret_No60}', ";
      $query .= "Pass_No60 = '{$Pass_No60}', ";

      $query .= "Wt_Ret_No100 = '{$Wt_Ret_No100}', ";
      $query .= "Ret_No100 = '{$Ret_No100}', ";
      $query .= "Cum_Ret_No100 = '{$Cum_Ret_No100}', ";
      $query .= "Pass_No100 = '{$Pass_No100}', ";

      $query .= "Wt_Ret_No140 = '{$Wt_Ret_No140}', ";
      $query .= "Ret_No140 = '{$Ret_No140}', ";
      $query .= "Cum_Ret_No140 = '{$Cum_Ret_No140}', ";
      $query .= "Pass_No140 = '{$Pass_No140}', ";

      $query .= "Wt_Ret_No200 = '{$Wt_Ret_No200}', ";
      $query .= "Ret_No200 = '{$Ret_No200}', ";
      $query .= "Cum_Ret_No200 = '{$Cum_Ret_No200}', ";
      $query .= "Pass_No200 = '{$Pass_No200}', ";

      $query .= "Pan_Wt_Ret = '{$Pan_Wt_Ret}', ";
      $query .= "Pan_Ret = '{$Pan_Ret}', ";

      $query .= "Total_Wt_Ret = '{$Total_Wt_Ret}', ";
      $query .= "Total_Ret = '{$Total_Ret}', ";
      $query .= "Total_Cum_Ret = '{$Total_Cum_Ret}', ";
      $query .= "Total_Pass = '{$Total_Pass}', ";

      $query .= "Coarser_than_Gravel = '{$Coarser_than_Gravel}', ";
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

      $query .= "Date_No1 = '{$Date_No1}', ";
      $query .= "Date_No2 = '{$Date_No2}', ";
      $query .= "Date_No3 = '{$Date_No3}', ";
      $query .= "Date_No4 = '{$Date_No4}', ";
      $query .= "Date_No5 = '{$Date_No5}', ";
      $query .= "Date_No6 = '{$Date_No6}', ";
      $query .= "Date_No7 = '{$Date_No7}', ";
      $query .= "Date_No8 = '{$Date_No8}', ";
      $query .= "Date_No9 = '{$Date_No9}', ";
      $query .= "Hour_No1 = '{$Hour_No1}', ";
      $query .= "Hour_No2 = '{$Hour_No2}', ";
      $query .= "Hour_No3 = '{$Hour_No3}', ";
      $query .= "Hour_No4 = '{$Hour_No4}', ";
      $query .= "Hour_No5 = '{$Hour_No5}', ";
      $query .= "Hour_No6 = '{$Hour_No6}', ";
      $query .= "Hour_No7 = '{$Hour_No7}', ";
      $query .= "Hour_No8 = '{$Hour_No8}', ";
      $query .= "Hour_No9 = '{$Hour_No9}', ";
      $query .= "Reading_Time_min_No1 = '{$Reading_Time_min_No1}', ";
      $query .= "Reading_Time_min_No2 = '{$Reading_Time_min_No2}', ";
      $query .= "Reading_Time_min_No3 = '{$Reading_Time_min_No3}', ";
      $query .= "Reading_Time_min_No4 = '{$Reading_Time_min_No4}', ";
      $query .= "Reading_Time_min_No5 = '{$Reading_Time_min_No5}', ";
      $query .= "Reading_Time_min_No6 = '{$Reading_Time_min_No6}', ";
      $query .= "Reading_Time_min_No7 = '{$Reading_Time_min_No7}', ";
      $query .= "Reading_Time_min_No8 = '{$Reading_Time_min_No8}', ";
      $query .= "Reading_Time_min_No9 = '{$Reading_Time_min_No9}', ";
      $query .= "Temp_No1 = '{$Temp_No1}', ";
      $query .= "Temp_No2 = '{$Temp_No2}', ";
      $query .= "Temp_No3 = '{$Temp_No3}', ";
      $query .= "Temp_No4 = '{$Temp_No4}', ";
      $query .= "Temp_No5 = '{$Temp_No5}', ";
      $query .= "Temp_No6 = '{$Temp_No6}', ";
      $query .= "Temp_No7 = '{$Temp_No7}', ";
      $query .= "Temp_No8 = '{$Temp_No8}', ";
      $query .= "Temp_No9 = '{$Temp_No9}', ";
      $query .= "Hydrometer_Readings_Rm_No1 = '{$Hydrometer_Readings_Rm_No1}', ";
      $query .= "Hydrometer_Readings_Rm_No2 = '{$Hydrometer_Readings_Rm_No2}', ";
      $query .= "Hydrometer_Readings_Rm_No3 = '{$Hydrometer_Readings_Rm_No3}', ";
      $query .= "Hydrometer_Readings_Rm_No4 = '{$Hydrometer_Readings_Rm_No4}', ";
      $query .= "Hydrometer_Readings_Rm_No5 = '{$Hydrometer_Readings_Rm_No5}', ";
      $query .= "Hydrometer_Readings_Rm_No6 = '{$Hydrometer_Readings_Rm_No6}', ";
      $query .= "Hydrometer_Readings_Rm_No7 = '{$Hydrometer_Readings_Rm_No7}', ";
      $query .= "Hydrometer_Readings_Rm_No8 = '{$Hydrometer_Readings_Rm_No8}', ";
      $query .= "Hydrometer_Readings_Rm_No9 = '{$Hydrometer_Readings_Rm_No9}', ";
      $query .= "A_or_B_depending_of_the_Hy_type_No1 = '{$A_or_B_depending_of_the_Hy_type_No1}', ";
      $query .= "A_or_B_depending_of_the_Hy_type_No2 = '{$A_or_B_depending_of_the_Hy_type_No2}', ";
      $query .= "A_or_B_depending_of_the_Hy_type_No3 = '{$A_or_B_depending_of_the_Hy_type_No3}', ";
      $query .= "A_or_B_depending_of_the_Hy_type_No4 = '{$A_or_B_depending_of_the_Hy_type_No4}', ";
      $query .= "A_or_B_depending_of_the_Hy_type_No5 = '{$A_or_B_depending_of_the_Hy_type_No5}', ";
      $query .= "A_or_B_depending_of_the_Hy_type_No6 = '{$A_or_B_depending_of_the_Hy_type_No6}', ";
      $query .= "A_or_B_depending_of_the_Hy_type_No7 = '{$A_or_B_depending_of_the_Hy_type_No7}', ";
      $query .= "A_or_B_depending_of_the_Hy_type_No8 = '{$A_or_B_depending_of_the_Hy_type_No8}', ";
      $query .= "A_or_B_depending_of_the_Hy_type_No9 = '{$A_or_B_depending_of_the_Hy_type_No9}', ";
      $query .= "Offset_at_Reading_rdm_No1 = '{$Offset_at_Reading_rdm_No1}', ";
      $query .= "Offset_at_Reading_rdm_No2 = '{$Offset_at_Reading_rdm_No2}', ";
      $query .= "Offset_at_Reading_rdm_No3 = '{$Offset_at_Reading_rdm_No3}', ";
      $query .= "Offset_at_Reading_rdm_No4 = '{$Offset_at_Reading_rdm_No4}', ";
      $query .= "Offset_at_Reading_rdm_No5 = '{$Offset_at_Reading_rdm_No5}', ";
      $query .= "Offset_at_Reading_rdm_No6 = '{$Offset_at_Reading_rdm_No6}', ";
      $query .= "Offset_at_Reading_rdm_No7 = '{$Offset_at_Reading_rdm_No7}', ";
      $query .= "Offset_at_Reading_rdm_No8 = '{$Offset_at_Reading_rdm_No8}', ";
      $query .= "Offset_at_Reading_rdm_No9 = '{$Offset_at_Reading_rdm_No9}', ";
      $query .= "Mass_Percent_Finer_Nm_Porce_No1 = '{$Mass_Percent_Finer_Nm_Porce_No1}', ";
      $query .= "Mass_Percent_Finer_Nm_Porce_No2 = '{$Mass_Percent_Finer_Nm_Porce_No2}', ";
      $query .= "Mass_Percent_Finer_Nm_Porce_No3 = '{$Mass_Percent_Finer_Nm_Porce_No3}', ";
      $query .= "Mass_Percent_Finer_Nm_Porce_No4 = '{$Mass_Percent_Finer_Nm_Porce_No4}', ";
      $query .= "Mass_Percent_Finer_Nm_Porce_No5 = '{$Mass_Percent_Finer_Nm_Porce_No5}', ";
      $query .= "Mass_Percent_Finer_Nm_Porce_No6 = '{$Mass_Percent_Finer_Nm_Porce_No6}', ";
      $query .= "Mass_Percent_Finer_Nm_Porce_No7 = '{$Mass_Percent_Finer_Nm_Porce_No7}', ";
      $query .= "Mass_Percent_Finer_Nm_Porce_No8 = '{$Mass_Percent_Finer_Nm_Porce_No8}', ";
      $query .= "Mass_Percent_Finer_Nm_Porce_No9 = '{$Mass_Percent_Finer_Nm_Porce_No9}', ";
      $query .= "Effective_Length_Hm_No1 = '{$Effective_Length_Hm_No1}', ";
      $query .= "Effective_Length_Hm_No2 = '{$Effective_Length_Hm_No2}', ";
      $query .= "Effective_Length_Hm_No3 = '{$Effective_Length_Hm_No3}', ";
      $query .= "Effective_Length_Hm_No4 = '{$Effective_Length_Hm_No4}', ";
      $query .= "Effective_Length_Hm_No5 = '{$Effective_Length_Hm_No5}', ";
      $query .= "Effective_Length_Hm_No6 = '{$Effective_Length_Hm_No6}', ";
      $query .= "Effective_Length_Hm_No7 = '{$Effective_Length_Hm_No7}', ";
      $query .= "Effective_Length_Hm_No8 = '{$Effective_Length_Hm_No8}', ";
      $query .= "Effective_Length_Hm_No9 = '{$Effective_Length_Hm_No9}', ";
      $query .= "D_mm_No1 = '{$D_mm_No1}', ";
      $query .= "D_mm_No2 = '{$D_mm_No2}', ";
      $query .= "D_mm_No3 = '{$D_mm_No3}', ";
      $query .= "D_mm_No4 = '{$D_mm_No4}', ";
      $query .= "D_mm_No5 = '{$D_mm_No5}', ";
      $query .= "D_mm_No6 = '{$D_mm_No6}', ";
      $query .= "D_mm_No7 = '{$D_mm_No7}', ";
      $query .= "D_mm_No8 = '{$D_mm_No8}', ";
      $query .= "D_mm_No9 = '{$D_mm_No9}', ";
      $query .= "Passing_Percentage_Respect_to_the_Total_Sample_No1 = '{$Passing_Percentage_Respect_to_the_Total_Sample_No1}', ";
      $query .= "Passing_Percentage_Respect_to_the_Total_Sample_No2 = '{$Passing_Percentage_Respect_to_the_Total_Sample_No2}', ";
      $query .= "Passing_Percentage_Respect_to_the_Total_Sample_No3 = '{$Passing_Percentage_Respect_to_the_Total_Sample_No3}', ";
      $query .= "Passing_Percentage_Respect_to_the_Total_Sample_No4 = '{$Passing_Percentage_Respect_to_the_Total_Sample_No4}', ";
      $query .= "Passing_Percentage_Respect_to_the_Total_Sample_No5 = '{$Passing_Percentage_Respect_to_the_Total_Sample_No5}', ";
      $query .= "Passing_Percentage_Respect_to_the_Total_Sample_No6 = '{$Passing_Percentage_Respect_to_the_Total_Sample_No6}', ";
      $query .= "Passing_Percentage_Respect_to_the_Total_Sample_No7 = '{$Passing_Percentage_Respect_to_the_Total_Sample_No7}', ";
      $query .= "Passing_Percentage_Respect_to_the_Total_Sample_No8 = '{$Passing_Percentage_Respect_to_the_Total_Sample_No8}', ";
      $query .= "Passing_Percentage_Respect_to_the_Total_Sample_No9 = '{$Passing_Percentage_Respect_to_the_Total_Sample_No9}', ";
    
      $query .= "Classification_of_Soils_as_per_USCS = '{$Classification_of_Soils_as_per_USCS}', ";
      $query .= "ASTM_designation_D_2487_06 = '{$ASTM_designation_D_2487_06}' ";
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-Hydrometer.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-Hydrometer.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-Hydrometer.php?id=' . $search_table['id'], false);
    }
  }
?>