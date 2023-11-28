<?php

$user = current_user();

// Función para obtener y escapar datos del POST
function get_post_data($field) {
    global $db;
    return $db->escape($_POST[$field]);
}

if (isset($_POST['DoubleHydrometer'])) {
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
        'TestStartDate'
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
        $testype = "DHY";
        $Standard = get_post_data('Standard');
        $PreparationMethod = get_post_data('PreparationMethod');
        $Comments = get_post_data('Comments');
        $Technician = get_post_data('Technician');
        $TestStartDate = get_post_data('TestStartDate');

        $Dispersing_Agent = get_post_data('Dispersing_Agent');
        $Amount_Used_g = get_post_data('Amount_Used_g');
        $Temperature_of_Test = get_post_data('Temperature_of_Test');
        $Viscosity_of_Water_gs_cm2 = get_post_data('Viscosity_of_Water_gs_cm2');
        $Mass_Density_of_Water_Calibrated = get_post_data('Mass_Density_of_Water_Calibrated');
        $Acceleration_cm_s2 = get_post_data('Acceleration_cm_s2');
        $Volume_of_Suspension_Vsp_cm3 = get_post_data('Volume_of_Suspension_Vsp_cm3');
        $Meniscus_Correction_Cm = get_post_data('Meniscus_Correction_Cm');
        $Percent_Passing_No_200_sieve = get_post_data('Percent_Passing_No_200_sieve');
        $Specific_Gravity = get_post_data('Specific_Gravity');
        $Tare_Name_50gr = get_post_data('Tare_Name_50gr');
        $Tare_Name_25gr = get_post_data('Tare_Name_25gr');
        $Oven_Temperature_50gr = get_post_data('Oven_Temperature_50gr');
        $Oven_Temperature_25gr = get_post_data('Oven_Temperature_25gr');
        $Tare_Plus_Wet_Soil_50gr = get_post_data('Tare_Plus_Wet_Soil_50gr');
        $Tare_Plus_Wet_Soil_25gr = get_post_data('Tare_Plus_Wet_Soil_25gr');
        $Tare_Plus_Dry_Soil_50gr = get_post_data('Tare_Plus_Dry_Soil_50gr');
        $Tare_Plus_Dry_Soil_25gr = get_post_data('Tare_Plus_Dry_Soil_25gr');
        $Water_Ww_50gr = get_post_data('Water_Ww_50gr');
        $Water_Ww_25gr = get_post_data('Water_Ww_25gr');
        $Tare_50gr = get_post_data('Tare_50gr');
        $Tare_25gr = get_post_data('Tare_25gr');
        $Dry_Soil_Ws_50gr = get_post_data('Dry_Soil_Ws_50gr');
        $Dry_Soil_Ws_25gr = get_post_data('Dry_Soil_Ws_25gr');
        $Moisture_Content_Porce_50gr = get_post_data('Moisture_Content_Porce_50gr');
        $Moisture_Content_Porce_25gr = get_post_data('Moisture_Content_Porce_25gr');
        $Hy_Calibration_50gr_Temperature_No1 = get_post_data('Hy_Calibration_50gr_Temperature_No1');
        $Hy_Calibration_50gr_Temperature_No2 = get_post_data('Hy_Calibration_50gr_Temperature_No2');
        $Hy_Calibration_50gr_Temperature_No3 = get_post_data('Hy_Calibration_50gr_Temperature_No3');
        $Hy_Calibration_50gr_Temperature_No4 = get_post_data('Hy_Calibration_50gr_Temperature_No4');
        $Hy_Calibration_50gr_Temperature_No5 = get_post_data('Hy_Calibration_50gr_Temperature_No5');
        $Hy_Calibration_50gr_Temperature_No6 = get_post_data('Hy_Calibration_50gr_Temperature_No6');
        $Hy_Calibration_50gr_Temperature_No7 = get_post_data('Hy_Calibration_50gr_Temperature_No7');
        $Hy_Calibration_50gr_Temperature_No8 = get_post_data('Hy_Calibration_50gr_Temperature_No8');
        $Hy_Calibration_50gr_Temperature_No9 = get_post_data('Hy_Calibration_50gr_Temperature_No9');
        $Hy_Calibration_50gr_Actual_Reading_No1 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No1');
        $Hy_Calibration_50gr_Actual_Reading_No2 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No2');
        $Hy_Calibration_50gr_Actual_Reading_No3 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No3');
        $Hy_Calibration_50gr_Actual_Reading_No4 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No4');
        $Hy_Calibration_50gr_Actual_Reading_No5 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No5');
        $Hy_Calibration_50gr_Actual_Reading_No6 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No6');
        $Hy_Calibration_50gr_Actual_Reading_No7 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No7');
        $Hy_Calibration_50gr_Actual_Reading_No8 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No8');
        $Hy_Calibration_50gr_Actual_Reading_No9 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No9');
        $Hy_Measure_Fluid_50gr_Temperature_No1 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No1');
        $Hy_Measure_Fluid_50gr_Temperature_No2 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No2');
        $Hy_Measure_Fluid_50gr_Temperature_No3 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No3');
        $Hy_Measure_Fluid_50gr_Temperature_No4 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No4');
        $Hy_Measure_Fluid_50gr_Temperature_No5 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No5');
        $Hy_Measure_Fluid_50gr_Temperature_No6 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No6');
        $Hy_Measure_Fluid_50gr_Temperature_No7 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No7');
        $Hy_Measure_Fluid_50gr_Temperature_No8 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No8');
        $Hy_Measure_Fluid_50gr_Temperature_No9 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No9');
        $Hy_Measure_Fluid_50gr_Actual_Reading_No1 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No1');
        $Hy_Measure_Fluid_50gr_Actual_Reading_No2 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No2');
        $Hy_Measure_Fluid_50gr_Actual_Reading_No3 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No3');
        $Hy_Measure_Fluid_50gr_Actual_Reading_No4 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No4');
        $Hy_Measure_Fluid_50gr_Actual_Reading_No5 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No5');
        $Hy_Measure_Fluid_50gr_Actual_Reading_No6 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No6');
        $Hy_Measure_Fluid_50gr_Actual_Reading_No7 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No7');
        $Hy_Measure_Fluid_50gr_Actual_Reading_No8 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No8');
        $Hy_Measure_Fluid_50gr_Actual_Reading_No9 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No9');
        $Hy_Calibration_25gr_Temperature_No1 = get_post_data('Hy_Calibration_25gr_Temperature_No1');
        $Hy_Calibration_25gr_Temperature_No2 = get_post_data('Hy_Calibration_25gr_Temperature_No2');
        $Hy_Calibration_25gr_Temperature_No3 = get_post_data('Hy_Calibration_25gr_Temperature_No3');
        $Hy_Calibration_25gr_Temperature_No4 = get_post_data('Hy_Calibration_25gr_Temperature_No4');
        $Hy_Calibration_25gr_Temperature_No5 = get_post_data('Hy_Calibration_25gr_Temperature_No5');
        $Hy_Calibration_25gr_Temperature_No6 = get_post_data('Hy_Calibration_25gr_Temperature_No6');
        $Hy_Calibration_25gr_Temperature_No7 = get_post_data('Hy_Calibration_25gr_Temperature_No7');
        $Hy_Calibration_25gr_Temperature_No8 = get_post_data('Hy_Calibration_25gr_Temperature_No8');
        $Hy_Calibration_25gr_Temperature_No9 = get_post_data('Hy_Calibration_25gr_Temperature_No9');
        $Hy_Calibration_25gr_Actual_Reading_No1 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No1');
        $Hy_Calibration_25gr_Actual_Reading_No2 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No2');
        $Hy_Calibration_25gr_Actual_Reading_No3 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No3');
        $Hy_Calibration_25gr_Actual_Reading_No4 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No4');
        $Hy_Calibration_25gr_Actual_Reading_No5 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No5');
        $Hy_Calibration_25gr_Actual_Reading_No6 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No6');
        $Hy_Calibration_25gr_Actual_Reading_No7 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No7');
        $Hy_Calibration_25gr_Actual_Reading_No8 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No8');
        $Hy_Calibration_25gr_Actual_Reading_No9 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No9');
        $Hy_Measure_Fluid_25gr_Temperature_No1 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No1');
        $Hy_Measure_Fluid_25gr_Temperature_No2 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No2');
        $Hy_Measure_Fluid_25gr_Temperature_No3 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No3');
        $Hy_Measure_Fluid_25gr_Temperature_No4 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No4');
        $Hy_Measure_Fluid_25gr_Temperature_No5 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No5');
        $Hy_Measure_Fluid_25gr_Temperature_No6 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No6');
        $Hy_Measure_Fluid_25gr_Temperature_No7 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No7');
        $Hy_Measure_Fluid_25gr_Temperature_No8 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No8');
        $Hy_Measure_Fluid_25gr_Temperature_No9 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No9');
        $Hy_Measure_Fluid_25gr_Actual_Reading_No1 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No1');
        $Hy_Measure_Fluid_25gr_Actual_Reading_No2 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No2');
        $Hy_Measure_Fluid_25gr_Actual_Reading_No3 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No3');
        $Hy_Measure_Fluid_25gr_Actual_Reading_No4 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No4');
        $Hy_Measure_Fluid_25gr_Actual_Reading_No5 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No5');
        $Hy_Measure_Fluid_25gr_Actual_Reading_No6 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No6');
        $Hy_Measure_Fluid_25gr_Actual_Reading_No7 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No7');
        $Hy_Measure_Fluid_25gr_Actual_Reading_No8 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No8');
        $Hy_Measure_Fluid_25gr_Actual_Reading_No9 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No9');
        $gr25_Date_No1 = get_post_data('gr25_Date_No1');
        $gr25_Date_No2 = get_post_data('gr25_Date_No2');
        $gr25_Date_No3 = get_post_data('gr25_Date_No3');
        $gr25_Date_No4 = get_post_data('gr25_Date_No4');
        $gr25_Date_No5 = get_post_data('gr25_Date_No5');
        $gr25_Date_No6 = get_post_data('gr25_Date_No6');
        $gr25_Date_No7 = get_post_data('gr25_Date_No7');
        $gr25_Date_No8 = get_post_data('gr25_Date_No8');
        $gr25_Date_No9 = get_post_data('gr25_Date_No9');
        $gr25_Hour_No1 = get_post_data('gr25_Hour_No1');
        $gr25_Hour_No2 = get_post_data('gr25_Hour_No2');
        $gr25_Hour_No3 = get_post_data('gr25_Hour_No3');
        $gr25_Hour_No4 = get_post_data('gr25_Hour_No4');
        $gr25_Hour_No5 = get_post_data('gr25_Hour_No5');
        $gr25_Hour_No6 = get_post_data('gr25_Hour_No6');
        $gr25_Hour_No7 = get_post_data('gr25_Hour_No7');
        $gr25_Hour_No8 = get_post_data('gr25_Hour_No8');
        $gr25_Hour_No9 = get_post_data('gr25_Hour_No9');
        $gr25_Reading_Time_min_No1 = get_post_data('gr25_Reading_Time_min_No1');
        $gr25_Reading_Time_min_No2 = get_post_data('gr25_Reading_Time_min_No2');
        $gr25_Reading_Time_min_No3 = get_post_data('gr25_Reading_Time_min_No3');
        $gr25_Reading_Time_min_No4 = get_post_data('gr25_Reading_Time_min_No4');
        $gr25_Reading_Time_min_No5 = get_post_data('gr25_Reading_Time_min_No5');
        $gr25_Reading_Time_min_No6 = get_post_data('gr25_Reading_Time_min_No6');
        $gr25_Reading_Time_min_No7 = get_post_data('gr25_Reading_Time_min_No7');
        $gr25_Reading_Time_min_No8 = get_post_data('gr25_Reading_Time_min_No8');
        $gr25_Reading_Time_min_No9 = get_post_data('gr25_Reading_Time_min_No9');
        $gr25_Temp_No1 = get_post_data('gr25_Temp_No1');
        $gr25_Temp_No2 = get_post_data('gr25_Temp_No2');
        $gr25_Temp_No3 = get_post_data('gr25_Temp_No3');
        $gr25_Temp_No4 = get_post_data('gr25_Temp_No4');
        $gr25_Temp_No5 = get_post_data('gr25_Temp_No5');
        $gr25_Temp_No6 = get_post_data('gr25_Temp_No6');
        $gr25_Temp_No7 = get_post_data('gr25_Temp_No7');
        $gr25_Temp_No8 = get_post_data('gr25_Temp_No8');
        $gr25_Temp_No9 = get_post_data('gr25_Temp_No9');
        $gr25_Hydrometer_Readings_Rm_No1 = get_post_data('gr25_Hydrometer_Readings_Rm_No1');
        $gr25_Hydrometer_Readings_Rm_No2 = get_post_data('gr25_Hydrometer_Readings_Rm_No2');
        $gr25_Hydrometer_Readings_Rm_No3 = get_post_data('gr25_Hydrometer_Readings_Rm_No3');
        $gr25_Hydrometer_Readings_Rm_No4 = get_post_data('gr25_Hydrometer_Readings_Rm_No4');
        $gr25_Hydrometer_Readings_Rm_No5 = get_post_data('gr25_Hydrometer_Readings_Rm_No5');
        $gr25_Hydrometer_Readings_Rm_No6 = get_post_data('gr25_Hydrometer_Readings_Rm_No6');
        $gr25_Hydrometer_Readings_Rm_No7 = get_post_data('gr25_Hydrometer_Readings_Rm_No7');
        $gr25_Hydrometer_Readings_Rm_No8 = get_post_data('gr25_Hydrometer_Readings_Rm_No8');
        $gr25_Hydrometer_Readings_Rm_No9 = get_post_data('gr25_Hydrometer_Readings_Rm_No9');
        $gr25_A_or_B_depending_of_the_Hy_type_No1 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No1');
        $gr25_A_or_B_depending_of_the_Hy_type_No2 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No2');
        $gr25_A_or_B_depending_of_the_Hy_type_No3 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No3');
        $gr25_A_or_B_depending_of_the_Hy_type_No4 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No4');
        $gr25_A_or_B_depending_of_the_Hy_type_No5 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No5');
        $gr25_A_or_B_depending_of_the_Hy_type_No6 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No6');
        $gr25_A_or_B_depending_of_the_Hy_type_No7 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No7');
        $gr25_A_or_B_depending_of_the_Hy_type_No8 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No8');
        $gr25_A_or_B_depending_of_the_Hy_type_No9 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No9');
        $gr25_Offset_at_Reading_rdm_No1 = get_post_data('gr25_Offset_at_Reading_rdm_No1');
        $gr25_Offset_at_Reading_rdm_No2 = get_post_data('gr25_Offset_at_Reading_rdm_No2');
        $gr25_Offset_at_Reading_rdm_No3 = get_post_data('gr25_Offset_at_Reading_rdm_No3');
        $gr25_Offset_at_Reading_rdm_No4 = get_post_data('gr25_Offset_at_Reading_rdm_No4');
        $gr25_Offset_at_Reading_rdm_No5 = get_post_data('gr25_Offset_at_Reading_rdm_No5');
        $gr25_Offset_at_Reading_rdm_No6 = get_post_data('gr25_Offset_at_Reading_rdm_No6');
        $gr25_Offset_at_Reading_rdm_No7 = get_post_data('gr25_Offset_at_Reading_rdm_No7');
        $gr25_Offset_at_Reading_rdm_No8 = get_post_data('gr25_Offset_at_Reading_rdm_No8');
        $gr25_Offset_at_Reading_rdm_No9 = get_post_data('gr25_Offset_at_Reading_rdm_No9');
        $gr25_Mass_Percent_Finer_Nm_Porce_No1 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No1');
        $gr25_Mass_Percent_Finer_Nm_Porce_No2 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No2');
        $gr25_Mass_Percent_Finer_Nm_Porce_No3 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No3');
        $gr25_Mass_Percent_Finer_Nm_Porce_No4 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No4');
        $gr25_Mass_Percent_Finer_Nm_Porce_No5 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No5');
        $gr25_Mass_Percent_Finer_Nm_Porce_No6 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No6');
        $gr25_Mass_Percent_Finer_Nm_Porce_No7 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No7');
        $gr25_Mass_Percent_Finer_Nm_Porce_No8 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No8');
        $gr25_Mass_Percent_Finer_Nm_Porce_No9 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No9');
        $gr25_Effective_Length_Hm_No1 = get_post_data('gr25_Effective_Length_Hm_No1');
        $gr25_Effective_Length_Hm_No2 = get_post_data('gr25_Effective_Length_Hm_No2');
        $gr25_Effective_Length_Hm_No3 = get_post_data('gr25_Effective_Length_Hm_No3');
        $gr25_Effective_Length_Hm_No4 = get_post_data('gr25_Effective_Length_Hm_No4');
        $gr25_Effective_Length_Hm_No5 = get_post_data('gr25_Effective_Length_Hm_No5');
        $gr25_Effective_Length_Hm_No6 = get_post_data('gr25_Effective_Length_Hm_No6');
        $gr25_Effective_Length_Hm_No7 = get_post_data('gr25_Effective_Length_Hm_No7');
        $gr25_Effective_Length_Hm_No8 = get_post_data('gr25_Effective_Length_Hm_No8');
        $gr25_Effective_Length_Hm_No9 = get_post_data('gr25_Effective_Length_Hm_No9');
        $gr25_D_mm_No1 = get_post_data('gr25_D_mm_No1');
        $gr25_D_mm_No2 = get_post_data('gr25_D_mm_No2');
        $gr25_D_mm_No3 = get_post_data('gr25_D_mm_No3');
        $gr25_D_mm_No4 = get_post_data('gr25_D_mm_No4');
        $gr25_D_mm_No5 = get_post_data('gr25_D_mm_No5');
        $gr25_D_mm_No6 = get_post_data('gr25_D_mm_No6');
        $gr25_D_mm_No7 = get_post_data('gr25_D_mm_No7');
        $gr25_D_mm_No8 = get_post_data('gr25_D_mm_No8');
        $gr25_D_mm_No9 = get_post_data('gr25_D_mm_No9');
        $gr50_Date_No1 = get_post_data('gr50_Date_No1');
        $gr50_Date_No2 = get_post_data('gr50_Date_No2');
        $gr50_Date_No3 = get_post_data('gr50_Date_No3');
        $gr50_Date_No4 = get_post_data('gr50_Date_No4');
        $gr50_Date_No5 = get_post_data('gr50_Date_No5');
        $gr50_Date_No6 = get_post_data('gr50_Date_No6');
        $gr50_Date_No7 = get_post_data('gr50_Date_No7');
        $gr50_Date_No8 = get_post_data('gr50_Date_No8');
        $gr50_Date_No9 = get_post_data('gr50_Date_No9');
        $gr50_Hour_No1 = get_post_data('gr50_Hour_No1');
        $gr50_Hour_No2 = get_post_data('gr50_Hour_No2');
        $gr50_Hour_No3 = get_post_data('gr50_Hour_No3');
        $gr50_Hour_No4 = get_post_data('gr50_Hour_No4');
        $gr50_Hour_No5 = get_post_data('gr50_Hour_No5');
        $gr50_Hour_No6 = get_post_data('gr50_Hour_No6');
        $gr50_Hour_No7 = get_post_data('gr50_Hour_No7');
        $gr50_Hour_No8 = get_post_data('gr50_Hour_No8');
        $gr50_Hour_No9 = get_post_data('gr50_Hour_No9');
        $gr50_Reading_Time_min_No1 = get_post_data('gr50_Reading_Time_min_No1');
        $gr50_Reading_Time_min_No2 = get_post_data('gr50_Reading_Time_min_No2');
        $gr50_Reading_Time_min_No3 = get_post_data('gr50_Reading_Time_min_No3');
        $gr50_Reading_Time_min_No4 = get_post_data('gr50_Reading_Time_min_No4');
        $gr50_Reading_Time_min_No5 = get_post_data('gr50_Reading_Time_min_No5');
        $gr50_Reading_Time_min_No6 = get_post_data('gr50_Reading_Time_min_No6');
        $gr50_Reading_Time_min_No7 = get_post_data('gr50_Reading_Time_min_No7');
        $gr50_Reading_Time_min_No8 = get_post_data('gr50_Reading_Time_min_No8');
        $gr50_Reading_Time_min_No9 = get_post_data('gr50_Reading_Time_min_No9');
        $gr50_Temp_No1 = get_post_data('gr50_Temp_No1');
        $gr50_Temp_No2 = get_post_data('gr50_Temp_No2');
        $gr50_Temp_No3 = get_post_data('gr50_Temp_No3');
        $gr50_Temp_No4 = get_post_data('gr50_Temp_No4');
        $gr50_Temp_No5 = get_post_data('gr50_Temp_No5');
        $gr50_Temp_No6 = get_post_data('gr50_Temp_No6');
        $gr50_Temp_No7 = get_post_data('gr50_Temp_No7');
        $gr50_Temp_No8 = get_post_data('gr50_Temp_No8');
        $gr50_Temp_No9 = get_post_data('gr50_Temp_No9');
        $gr50_Hydrometer_Readings_Rm_No1 = get_post_data('gr50_Hydrometer_Readings_Rm_No1');
        $gr50_Hydrometer_Readings_Rm_No2 = get_post_data('gr50_Hydrometer_Readings_Rm_No2');
        $gr50_Hydrometer_Readings_Rm_No3 = get_post_data('gr50_Hydrometer_Readings_Rm_No3');
        $gr50_Hydrometer_Readings_Rm_No4 = get_post_data('gr50_Hydrometer_Readings_Rm_No4');
        $gr50_Hydrometer_Readings_Rm_No5 = get_post_data('gr50_Hydrometer_Readings_Rm_No5');
        $gr50_Hydrometer_Readings_Rm_No6 = get_post_data('gr50_Hydrometer_Readings_Rm_No6');
        $gr50_Hydrometer_Readings_Rm_No7 = get_post_data('gr50_Hydrometer_Readings_Rm_No7');
        $gr50_Hydrometer_Readings_Rm_No8 = get_post_data('gr50_Hydrometer_Readings_Rm_No8');
        $gr50_Hydrometer_Readings_Rm_No9 = get_post_data('gr50_Hydrometer_Readings_Rm_No9');
        $gr50_A_or_B_depending_of_the_Hy_type_No1 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No1');
        $gr50_A_or_B_depending_of_the_Hy_type_No2 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No2');
        $gr50_A_or_B_depending_of_the_Hy_type_No3 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No3');
        $gr50_A_or_B_depending_of_the_Hy_type_No4 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No4');
        $gr50_A_or_B_depending_of_the_Hy_type_No5 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No5');
        $gr50_A_or_B_depending_of_the_Hy_type_No6 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No6');
        $gr50_A_or_B_depending_of_the_Hy_type_No7 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No7');
        $gr50_A_or_B_depending_of_the_Hy_type_No8 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No8');
        $gr50_A_or_B_depending_of_the_Hy_type_No9 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No9');
        $gr50_Offset_at_Reading_rdm_No1 = get_post_data('gr50_Offset_at_Reading_rdm_No1');
        $gr50_Offset_at_Reading_rdm_No2 = get_post_data('gr50_Offset_at_Reading_rdm_No2');
        $gr50_Offset_at_Reading_rdm_No3 = get_post_data('gr50_Offset_at_Reading_rdm_No3');
        $gr50_Offset_at_Reading_rdm_No4 = get_post_data('gr50_Offset_at_Reading_rdm_No4');
        $gr50_Offset_at_Reading_rdm_No5 = get_post_data('gr50_Offset_at_Reading_rdm_No5');
        $gr50_Offset_at_Reading_rdm_No6 = get_post_data('gr50_Offset_at_Reading_rdm_No6');
        $gr50_Offset_at_Reading_rdm_No7 = get_post_data('gr50_Offset_at_Reading_rdm_No7');
        $gr50_Offset_at_Reading_rdm_No8 = get_post_data('gr50_Offset_at_Reading_rdm_No8');
        $gr50_Offset_at_Reading_rdm_No9 = get_post_data('gr50_Offset_at_Reading_rdm_No9');
        $gr50_Mass_Percent_Finer_Nm_Porce_No1 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No1');
        $gr50_Mass_Percent_Finer_Nm_Porce_No2 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No2');
        $gr50_Mass_Percent_Finer_Nm_Porce_No3 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No3');
        $gr50_Mass_Percent_Finer_Nm_Porce_No4 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No4');
        $gr50_Mass_Percent_Finer_Nm_Porce_No5 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No5');
        $gr50_Mass_Percent_Finer_Nm_Porce_No6 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No6');
        $gr50_Mass_Percent_Finer_Nm_Porce_No7 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No7');
        $gr50_Mass_Percent_Finer_Nm_Porce_No8 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No8');
        $gr50_Mass_Percent_Finer_Nm_Porce_No9 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No9');
        $gr50_Effective_Length_Hm_No1 = get_post_data('gr50_Effective_Length_Hm_No1');
        $gr50_Effective_Length_Hm_No2 = get_post_data('gr50_Effective_Length_Hm_No2');
        $gr50_Effective_Length_Hm_No3 = get_post_data('gr50_Effective_Length_Hm_No3');
        $gr50_Effective_Length_Hm_No4 = get_post_data('gr50_Effective_Length_Hm_No4');
        $gr50_Effective_Length_Hm_No5 = get_post_data('gr50_Effective_Length_Hm_No5');
        $gr50_Effective_Length_Hm_No6 = get_post_data('gr50_Effective_Length_Hm_No6');
        $gr50_Effective_Length_Hm_No7 = get_post_data('gr50_Effective_Length_Hm_No7');
        $gr50_Effective_Length_Hm_No8 = get_post_data('gr50_Effective_Length_Hm_No8');
        $gr50_Effective_Length_Hm_No9 = get_post_data('gr50_Effective_Length_Hm_No9');
        $gr50_D_mm_No1 = get_post_data('gr50_D_mm_No1');
        $gr50_D_mm_No2 = get_post_data('gr50_D_mm_No2');
        $gr50_D_mm_No3 = get_post_data('gr50_D_mm_No3');
        $gr50_D_mm_No4 = get_post_data('gr50_D_mm_No4');
        $gr50_D_mm_No5 = get_post_data('gr50_D_mm_No5');
        $gr50_D_mm_No6 = get_post_data('gr50_D_mm_No6');
        $gr50_D_mm_No7 = get_post_data('gr50_D_mm_No7');
        $gr50_D_mm_No8 = get_post_data('gr50_D_mm_No8');
        $gr50_D_mm_No9 = get_post_data('gr50_D_mm_No9');
        $Nm_2um_Not_Dispersed = get_post_data('Nm_2um_Not_Dispersed');
        $Nm_2um_Dispersed = get_post_data('Nm_2um_Dispersed');
        $Porce_Dispersion = get_post_data('Porce_Dispersion');
        $Classification = get_post_data('Classification');

        $RegisterBy = $user['name'];

        $sql = "INSERT INTO double_hydrometer (
            Sample_ID, Sample_Number, Structure, Area, Source, Depth_From, Depth_To,
            Material_Type, Sample_Type, North, East, Elev, Sample_Date, Report_Date,
            test_type, Standard, Preparation_Method, Comments, Technician,
            Test_Start_Date,
            Dispersing_Agent,
            Amount_Used_g,
            Temperature_of_Test,
            Viscosity_of_Water_gs_cm2,
            Mass_Density_of_Water_Calibrated,
            Acceleration_cm_s2,
            Volume_of_Suspension_Vsp_cm3,
            Meniscus_Correction_Cm,
            Percent_Passing_No_200_sieve,
            Specific_Gravity,
            Tare_Name_50gr,
            Tare_Name_25gr,
            Oven_Temperature_50gr,
            Oven_Temperature_25gr,
            Tare_Plus_Wet_Soil_50gr,
            Tare_Plus_Wet_Soil_25gr,
            Tare_Plus_Dry_Soil_50gr,
            Tare_Plus_Dry_Soil_25gr,
            Water_Ww_50gr,
            Water_Ww_25gr,
            Tare_50gr,
            Tare_25gr,
            Dry_Soil_Ws_50gr,
            Dry_Soil_Ws_25gr,
            Moisture_Content_Porce_50gr,
            Moisture_Content_Porce_25gr,
            Hy_Calibration_50gr_Temperature_No1,
            Hy_Calibration_50gr_Temperature_No2,
            Hy_Calibration_50gr_Temperature_No3,
            Hy_Calibration_50gr_Temperature_No4,
            Hy_Calibration_50gr_Temperature_No5,
            Hy_Calibration_50gr_Temperature_No6,
            Hy_Calibration_50gr_Temperature_No7,
            Hy_Calibration_50gr_Temperature_No8,
            Hy_Calibration_50gr_Temperature_No9,
            Hy_Calibration_50gr_Actual_Reading_No1,
            Hy_Calibration_50gr_Actual_Reading_No2,
            Hy_Calibration_50gr_Actual_Reading_No3,
            Hy_Calibration_50gr_Actual_Reading_No4,
            Hy_Calibration_50gr_Actual_Reading_No5,
            Hy_Calibration_50gr_Actual_Reading_No6,
            Hy_Calibration_50gr_Actual_Reading_No7,
            Hy_Calibration_50gr_Actual_Reading_No8,
            Hy_Calibration_50gr_Actual_Reading_No9,
            Hy_Measure_Fluid_50gr_Temperature_No1,
            Hy_Measure_Fluid_50gr_Temperature_No2,
            Hy_Measure_Fluid_50gr_Temperature_No3,
            Hy_Measure_Fluid_50gr_Temperature_No4,
            Hy_Measure_Fluid_50gr_Temperature_No5,
            Hy_Measure_Fluid_50gr_Temperature_No6,
            Hy_Measure_Fluid_50gr_Temperature_No7,
            Hy_Measure_Fluid_50gr_Temperature_No8,
            Hy_Measure_Fluid_50gr_Temperature_No9,
            Hy_Measure_Fluid_50gr_Actual_Reading_No1,
            Hy_Measure_Fluid_50gr_Actual_Reading_No2,
            Hy_Measure_Fluid_50gr_Actual_Reading_No3,
            Hy_Measure_Fluid_50gr_Actual_Reading_No4,
            Hy_Measure_Fluid_50gr_Actual_Reading_No5,
            Hy_Measure_Fluid_50gr_Actual_Reading_No6,
            Hy_Measure_Fluid_50gr_Actual_Reading_No7,
            Hy_Measure_Fluid_50gr_Actual_Reading_No8,
            Hy_Measure_Fluid_50gr_Actual_Reading_No9,
            Hy_Calibration_25gr_Temperature_No1,
            Hy_Calibration_25gr_Temperature_No2,
            Hy_Calibration_25gr_Temperature_No3,
            Hy_Calibration_25gr_Temperature_No4,
            Hy_Calibration_25gr_Temperature_No5,
            Hy_Calibration_25gr_Temperature_No6,
            Hy_Calibration_25gr_Temperature_No7,
            Hy_Calibration_25gr_Temperature_No8,
            Hy_Calibration_25gr_Temperature_No9,
            Hy_Calibration_25gr_Actual_Reading_No1,
            Hy_Calibration_25gr_Actual_Reading_No2,
            Hy_Calibration_25gr_Actual_Reading_No3,
            Hy_Calibration_25gr_Actual_Reading_No4,
            Hy_Calibration_25gr_Actual_Reading_No5,
            Hy_Calibration_25gr_Actual_Reading_No6,
            Hy_Calibration_25gr_Actual_Reading_No7,
            Hy_Calibration_25gr_Actual_Reading_No8,
            Hy_Calibration_25gr_Actual_Reading_No9,
            Hy_Measure_Fluid_25gr_Temperature_No1,
            Hy_Measure_Fluid_25gr_Temperature_No2,
            Hy_Measure_Fluid_25gr_Temperature_No3,
            Hy_Measure_Fluid_25gr_Temperature_No4,
            Hy_Measure_Fluid_25gr_Temperature_No5,
            Hy_Measure_Fluid_25gr_Temperature_No6,
            Hy_Measure_Fluid_25gr_Temperature_No7,
            Hy_Measure_Fluid_25gr_Temperature_No8,
            Hy_Measure_Fluid_25gr_Temperature_No9,
            Hy_Measure_Fluid_25gr_Actual_Reading_No1,
            Hy_Measure_Fluid_25gr_Actual_Reading_No2,
            Hy_Measure_Fluid_25gr_Actual_Reading_No3,
            Hy_Measure_Fluid_25gr_Actual_Reading_No4,
            Hy_Measure_Fluid_25gr_Actual_Reading_No5,
            Hy_Measure_Fluid_25gr_Actual_Reading_No6,
            Hy_Measure_Fluid_25gr_Actual_Reading_No7,
            Hy_Measure_Fluid_25gr_Actual_Reading_No8,
            Hy_Measure_Fluid_25gr_Actual_Reading_No9,
            gr25_Date_No1,
            gr25_Date_No2,
            gr25_Date_No3,
            gr25_Date_No4,
            gr25_Date_No5,
            gr25_Date_No6,
            gr25_Date_No7,
            gr25_Date_No8,
            gr25_Date_No9,
            gr25_Hour_No1,
            gr25_Hour_No2,
            gr25_Hour_No3,
            gr25_Hour_No4,
            gr25_Hour_No5,
            gr25_Hour_No6,
            gr25_Hour_No7,
            gr25_Hour_No8,
            gr25_Hour_No9,
            gr25_Reading_Time_min_No1,
            gr25_Reading_Time_min_No2,
            gr25_Reading_Time_min_No3,
            gr25_Reading_Time_min_No4,
            gr25_Reading_Time_min_No5,
            gr25_Reading_Time_min_No6,
            gr25_Reading_Time_min_No7,
            gr25_Reading_Time_min_No8,
            gr25_Reading_Time_min_No9,
            gr25_Temp_No1,
            gr25_Temp_No2,
            gr25_Temp_No3,
            gr25_Temp_No4,
            gr25_Temp_No5,
            gr25_Temp_No6,
            gr25_Temp_No7,
            gr25_Temp_No8,
            gr25_Temp_No9,
            gr25_Hydrometer_Readings_Rm_No1,
            gr25_Hydrometer_Readings_Rm_No2,
            gr25_Hydrometer_Readings_Rm_No3,
            gr25_Hydrometer_Readings_Rm_No4,
            gr25_Hydrometer_Readings_Rm_No5,
            gr25_Hydrometer_Readings_Rm_No6,
            gr25_Hydrometer_Readings_Rm_No7,
            gr25_Hydrometer_Readings_Rm_No8,
            gr25_Hydrometer_Readings_Rm_No9,
            gr25_A_or_B_depending_of_the_Hy_type_No1,
            gr25_A_or_B_depending_of_the_Hy_type_No2,
            gr25_A_or_B_depending_of_the_Hy_type_No3,
            gr25_A_or_B_depending_of_the_Hy_type_No4,
            gr25_A_or_B_depending_of_the_Hy_type_No5,
            gr25_A_or_B_depending_of_the_Hy_type_No6,
            gr25_A_or_B_depending_of_the_Hy_type_No7,
            gr25_A_or_B_depending_of_the_Hy_type_No8,
            gr25_A_or_B_depending_of_the_Hy_type_No9,
            gr25_Offset_at_Reading_rdm_No1,
            gr25_Offset_at_Reading_rdm_No2,
            gr25_Offset_at_Reading_rdm_No3,
            gr25_Offset_at_Reading_rdm_No4,
            gr25_Offset_at_Reading_rdm_No5,
            gr25_Offset_at_Reading_rdm_No6,
            gr25_Offset_at_Reading_rdm_No7,
            gr25_Offset_at_Reading_rdm_No8,
            gr25_Offset_at_Reading_rdm_No9,
            gr25_Mass_Percent_Finer_Nm_Porce_No1,
            gr25_Mass_Percent_Finer_Nm_Porce_No2,
            gr25_Mass_Percent_Finer_Nm_Porce_No3,
            gr25_Mass_Percent_Finer_Nm_Porce_No4,
            gr25_Mass_Percent_Finer_Nm_Porce_No5,
            gr25_Mass_Percent_Finer_Nm_Porce_No6,
            gr25_Mass_Percent_Finer_Nm_Porce_No7,
            gr25_Mass_Percent_Finer_Nm_Porce_No8,
            gr25_Mass_Percent_Finer_Nm_Porce_No9,
            gr25_Effective_Length_Hm_No1,
            gr25_Effective_Length_Hm_No2,
            gr25_Effective_Length_Hm_No3,
            gr25_Effective_Length_Hm_No4,
            gr25_Effective_Length_Hm_No5,
            gr25_Effective_Length_Hm_No6,
            gr25_Effective_Length_Hm_No7,
            gr25_Effective_Length_Hm_No8,
            gr25_Effective_Length_Hm_No9,
            gr25_D_mm_No1,
            gr25_D_mm_No2,
            gr25_D_mm_No3,
            gr25_D_mm_No4,
            gr25_D_mm_No5,
            gr25_D_mm_No6,
            gr25_D_mm_No7,
            gr25_D_mm_No8,
            gr25_D_mm_No9,
            gr50_Date_No1,
            gr50_Date_No2,
            gr50_Date_No3,
            gr50_Date_No4,
            gr50_Date_No5,
            gr50_Date_No6,
            gr50_Date_No7,
            gr50_Date_No8,
            gr50_Date_No9,
            gr50_Hour_No1,
            gr50_Hour_No2,
            gr50_Hour_No3,
            gr50_Hour_No4,
            gr50_Hour_No5,
            gr50_Hour_No6,
            gr50_Hour_No7,
            gr50_Hour_No8,
            gr50_Hour_No9,
            gr50_Reading_Time_min_No1,
            gr50_Reading_Time_min_No2,
            gr50_Reading_Time_min_No3,
            gr50_Reading_Time_min_No4,
            gr50_Reading_Time_min_No5,
            gr50_Reading_Time_min_No6,
            gr50_Reading_Time_min_No7,
            gr50_Reading_Time_min_No8,
            gr50_Reading_Time_min_No9,
            gr50_Temp_No1,
            gr50_Temp_No2,
            gr50_Temp_No3,
            gr50_Temp_No4,
            gr50_Temp_No5,
            gr50_Temp_No6,
            gr50_Temp_No7,
            gr50_Temp_No8,
            gr50_Temp_No9,
            gr50_Hydrometer_Readings_Rm_No1,
            gr50_Hydrometer_Readings_Rm_No2,
            gr50_Hydrometer_Readings_Rm_No3,
            gr50_Hydrometer_Readings_Rm_No4,
            gr50_Hydrometer_Readings_Rm_No5,
            gr50_Hydrometer_Readings_Rm_No6,
            gr50_Hydrometer_Readings_Rm_No7,
            gr50_Hydrometer_Readings_Rm_No8,
            gr50_Hydrometer_Readings_Rm_No9,
            gr50_A_or_B_depending_of_the_Hy_type_No1,
            gr50_A_or_B_depending_of_the_Hy_type_No2,
            gr50_A_or_B_depending_of_the_Hy_type_No3,
            gr50_A_or_B_depending_of_the_Hy_type_No4,
            gr50_A_or_B_depending_of_the_Hy_type_No5,
            gr50_A_or_B_depending_of_the_Hy_type_No6,
            gr50_A_or_B_depending_of_the_Hy_type_No7,
            gr50_A_or_B_depending_of_the_Hy_type_No8,
            gr50_A_or_B_depending_of_the_Hy_type_No9,
            gr50_Offset_at_Reading_rdm_No1,
            gr50_Offset_at_Reading_rdm_No2,
            gr50_Offset_at_Reading_rdm_No3,
            gr50_Offset_at_Reading_rdm_No4,
            gr50_Offset_at_Reading_rdm_No5,
            gr50_Offset_at_Reading_rdm_No6,
            gr50_Offset_at_Reading_rdm_No7,
            gr50_Offset_at_Reading_rdm_No8,
            gr50_Offset_at_Reading_rdm_No9,
            gr50_Mass_Percent_Finer_Nm_Porce_No1,
            gr50_Mass_Percent_Finer_Nm_Porce_No2,
            gr50_Mass_Percent_Finer_Nm_Porce_No3,
            gr50_Mass_Percent_Finer_Nm_Porce_No4,
            gr50_Mass_Percent_Finer_Nm_Porce_No5,
            gr50_Mass_Percent_Finer_Nm_Porce_No6,
            gr50_Mass_Percent_Finer_Nm_Porce_No7,
            gr50_Mass_Percent_Finer_Nm_Porce_No8,
            gr50_Mass_Percent_Finer_Nm_Porce_No9,
            gr50_Effective_Length_Hm_No1,
            gr50_Effective_Length_Hm_No2,
            gr50_Effective_Length_Hm_No3,
            gr50_Effective_Length_Hm_No4,
            gr50_Effective_Length_Hm_No5,
            gr50_Effective_Length_Hm_No6,
            gr50_Effective_Length_Hm_No7,
            gr50_Effective_Length_Hm_No8,
            gr50_Effective_Length_Hm_No9,
            gr50_D_mm_No1,
            gr50_D_mm_No2,
            gr50_D_mm_No3,
            gr50_D_mm_No4,
            gr50_D_mm_No5,
            gr50_D_mm_No6,
            gr50_D_mm_No7,
            gr50_D_mm_No8,
            gr50_D_mm_No9,
            Nm_2um_Not_Dispersed,
            Nm_2um_Dispersed,
            Porce_Dispersion,
            Classification,
            Registered_By
        ) VALUES (
            '$sampleid', '$samplenumber', '$structure', '$area', '$source', '$depthfrom',
            '$depthto', '$materialtype', '$sampletype', '$north', '$east', '$elev',
            '$sampledate', '$reportdate', '$testype', '$Standard', '$PreparationMethod',
            '$Comments', '$Technician', '$TestStartDate',
            '$Dispersing_Agent',
            '$Amount_Used_g',
            '$Temperature_of_Test',
            '$Viscosity_of_Water_gs_cm2',
            '$Mass_Density_of_Water_Calibrated',
            '$Acceleration_cm_s2',
            '$Volume_of_Suspension_Vsp_cm3',
            '$Meniscus_Correction_Cm',
            '$Percent_Passing_No_200_sieve',
            '$Specific_Gravity',
            '$Tare_Name_50gr',
            '$Tare_Name_25gr',
            '$Oven_Temperature_50gr',
            '$Oven_Temperature_25gr',
            '$Tare_Plus_Wet_Soil_50gr',
            '$Tare_Plus_Wet_Soil_25gr',
            '$Tare_Plus_Dry_Soil_50gr',
            '$Tare_Plus_Dry_Soil_25gr',
            '$Water_Ww_50gr',
            '$Water_Ww_25gr',
            '$Tare_50gr',
            '$Tare_25gr',
            '$Dry_Soil_Ws_50gr',
            '$Dry_Soil_Ws_25gr',
            '$Moisture_Content_Porce_50gr',
            '$Moisture_Content_Porce_25gr',
            '$Hy_Calibration_50gr_Temperature_No1',
            '$Hy_Calibration_50gr_Temperature_No2',
            '$Hy_Calibration_50gr_Temperature_No3',
            '$Hy_Calibration_50gr_Temperature_No4',
            '$Hy_Calibration_50gr_Temperature_No5',
            '$Hy_Calibration_50gr_Temperature_No6',
            '$Hy_Calibration_50gr_Temperature_No7',
            '$Hy_Calibration_50gr_Temperature_No8',
            '$Hy_Calibration_50gr_Temperature_No9',
            '$Hy_Calibration_50gr_Actual_Reading_No1',
            '$Hy_Calibration_50gr_Actual_Reading_No2',
            '$Hy_Calibration_50gr_Actual_Reading_No3',
            '$Hy_Calibration_50gr_Actual_Reading_No4',
            '$Hy_Calibration_50gr_Actual_Reading_No5',
            '$Hy_Calibration_50gr_Actual_Reading_No6',
            '$Hy_Calibration_50gr_Actual_Reading_No7',
            '$Hy_Calibration_50gr_Actual_Reading_No8',
            '$Hy_Calibration_50gr_Actual_Reading_No9',
            '$Hy_Measure_Fluid_50gr_Temperature_No1',
            '$Hy_Measure_Fluid_50gr_Temperature_No2',
            '$Hy_Measure_Fluid_50gr_Temperature_No3',
            '$Hy_Measure_Fluid_50gr_Temperature_No4',
            '$Hy_Measure_Fluid_50gr_Temperature_No5',
            '$Hy_Measure_Fluid_50gr_Temperature_No6',
            '$Hy_Measure_Fluid_50gr_Temperature_No7',
            '$Hy_Measure_Fluid_50gr_Temperature_No8',
            '$Hy_Measure_Fluid_50gr_Temperature_No9',
            '$Hy_Measure_Fluid_50gr_Actual_Reading_No1',
            '$Hy_Measure_Fluid_50gr_Actual_Reading_No2',
            '$Hy_Measure_Fluid_50gr_Actual_Reading_No3',
            '$Hy_Measure_Fluid_50gr_Actual_Reading_No4',
            '$Hy_Measure_Fluid_50gr_Actual_Reading_No5',
            '$Hy_Measure_Fluid_50gr_Actual_Reading_No6',
            '$Hy_Measure_Fluid_50gr_Actual_Reading_No7',
            '$Hy_Measure_Fluid_50gr_Actual_Reading_No8',
            '$Hy_Measure_Fluid_50gr_Actual_Reading_No9',
            '$Hy_Calibration_25gr_Temperature_No1',
            '$Hy_Calibration_25gr_Temperature_No2',
            '$Hy_Calibration_25gr_Temperature_No3',
            '$Hy_Calibration_25gr_Temperature_No4',
            '$Hy_Calibration_25gr_Temperature_No5',
            '$Hy_Calibration_25gr_Temperature_No6',
            '$Hy_Calibration_25gr_Temperature_No7',
            '$Hy_Calibration_25gr_Temperature_No8',
            '$Hy_Calibration_25gr_Temperature_No9',
            '$Hy_Calibration_25gr_Actual_Reading_No1',
            '$Hy_Calibration_25gr_Actual_Reading_No2',
            '$Hy_Calibration_25gr_Actual_Reading_No3',
            '$Hy_Calibration_25gr_Actual_Reading_No4',
            '$Hy_Calibration_25gr_Actual_Reading_No5',
            '$Hy_Calibration_25gr_Actual_Reading_No6',
            '$Hy_Calibration_25gr_Actual_Reading_No7',
            '$Hy_Calibration_25gr_Actual_Reading_No8',
            '$Hy_Calibration_25gr_Actual_Reading_No9',
            '$Hy_Measure_Fluid_25gr_Temperature_No1',
            '$Hy_Measure_Fluid_25gr_Temperature_No2',
            '$Hy_Measure_Fluid_25gr_Temperature_No3',
            '$Hy_Measure_Fluid_25gr_Temperature_No4',
            '$Hy_Measure_Fluid_25gr_Temperature_No5',
            '$Hy_Measure_Fluid_25gr_Temperature_No6',
            '$Hy_Measure_Fluid_25gr_Temperature_No7',
            '$Hy_Measure_Fluid_25gr_Temperature_No8',
            '$Hy_Measure_Fluid_25gr_Temperature_No9',
            '$Hy_Measure_Fluid_25gr_Actual_Reading_No1',
            '$Hy_Measure_Fluid_25gr_Actual_Reading_No2',
            '$Hy_Measure_Fluid_25gr_Actual_Reading_No3',
            '$Hy_Measure_Fluid_25gr_Actual_Reading_No4',
            '$Hy_Measure_Fluid_25gr_Actual_Reading_No5',
            '$Hy_Measure_Fluid_25gr_Actual_Reading_No6',
            '$Hy_Measure_Fluid_25gr_Actual_Reading_No7',
            '$Hy_Measure_Fluid_25gr_Actual_Reading_No8',
            '$Hy_Measure_Fluid_25gr_Actual_Reading_No9',
            '$gr25_Date_No1',
            '$gr25_Date_No2',
            '$gr25_Date_No3',
            '$gr25_Date_No4',
            '$gr25_Date_No5',
            '$gr25_Date_No6',
            '$gr25_Date_No7',
            '$gr25_Date_No8',
            '$gr25_Date_No9',
            '$gr25_Hour_No1',
            '$gr25_Hour_No2',
            '$gr25_Hour_No3',
            '$gr25_Hour_No4',
            '$gr25_Hour_No5',
            '$gr25_Hour_No6',
            '$gr25_Hour_No7',
            '$gr25_Hour_No8',
            '$gr25_Hour_No9',
            '$gr25_Reading_Time_min_No1',
            '$gr25_Reading_Time_min_No2',
            '$gr25_Reading_Time_min_No3',
            '$gr25_Reading_Time_min_No4',
            '$gr25_Reading_Time_min_No5',
            '$gr25_Reading_Time_min_No6',
            '$gr25_Reading_Time_min_No7',
            '$gr25_Reading_Time_min_No8',
            '$gr25_Reading_Time_min_No9',
            '$gr25_Temp_No1',
            '$gr25_Temp_No2',
            '$gr25_Temp_No3',
            '$gr25_Temp_No4',
            '$gr25_Temp_No5',
            '$gr25_Temp_No6',
            '$gr25_Temp_No7',
            '$gr25_Temp_No8',
            '$gr25_Temp_No9',
            '$gr25_Hydrometer_Readings_Rm_No1',
            '$gr25_Hydrometer_Readings_Rm_No2',
            '$gr25_Hydrometer_Readings_Rm_No3',
            '$gr25_Hydrometer_Readings_Rm_No4',
            '$gr25_Hydrometer_Readings_Rm_No5',
            '$gr25_Hydrometer_Readings_Rm_No6',
            '$gr25_Hydrometer_Readings_Rm_No7',
            '$gr25_Hydrometer_Readings_Rm_No8',
            '$gr25_Hydrometer_Readings_Rm_No9',
            '$gr25_A_or_B_depending_of_the_Hy_type_No1',
            '$gr25_A_or_B_depending_of_the_Hy_type_No2',
            '$gr25_A_or_B_depending_of_the_Hy_type_No3',
            '$gr25_A_or_B_depending_of_the_Hy_type_No4',
            '$gr25_A_or_B_depending_of_the_Hy_type_No5',
            '$gr25_A_or_B_depending_of_the_Hy_type_No6',
            '$gr25_A_or_B_depending_of_the_Hy_type_No7',
            '$gr25_A_or_B_depending_of_the_Hy_type_No8',
            '$gr25_A_or_B_depending_of_the_Hy_type_No9',
            '$gr25_Offset_at_Reading_rdm_No1',
            '$gr25_Offset_at_Reading_rdm_No2',
            '$gr25_Offset_at_Reading_rdm_No3',
            '$gr25_Offset_at_Reading_rdm_No4',
            '$gr25_Offset_at_Reading_rdm_No5',
            '$gr25_Offset_at_Reading_rdm_No6',
            '$gr25_Offset_at_Reading_rdm_No7',
            '$gr25_Offset_at_Reading_rdm_No8',
            '$gr25_Offset_at_Reading_rdm_No9',
            '$gr25_Mass_Percent_Finer_Nm_Porce_No1',
            '$gr25_Mass_Percent_Finer_Nm_Porce_No2',
            '$gr25_Mass_Percent_Finer_Nm_Porce_No3',
            '$gr25_Mass_Percent_Finer_Nm_Porce_No4',
            '$gr25_Mass_Percent_Finer_Nm_Porce_No5',
            '$gr25_Mass_Percent_Finer_Nm_Porce_No6',
            '$gr25_Mass_Percent_Finer_Nm_Porce_No7',
            '$gr25_Mass_Percent_Finer_Nm_Porce_No8',
            '$gr25_Mass_Percent_Finer_Nm_Porce_No9',
            '$gr25_Effective_Length_Hm_No1',
            '$gr25_Effective_Length_Hm_No2',
            '$gr25_Effective_Length_Hm_No3',
            '$gr25_Effective_Length_Hm_No4',
            '$gr25_Effective_Length_Hm_No5',
            '$gr25_Effective_Length_Hm_No6',
            '$gr25_Effective_Length_Hm_No7',
            '$gr25_Effective_Length_Hm_No8',
            '$gr25_Effective_Length_Hm_No9',
            '$gr25_D_mm_No1',
            '$gr25_D_mm_No2',
            '$gr25_D_mm_No3',
            '$gr25_D_mm_No4',
            '$gr25_D_mm_No5',
            '$gr25_D_mm_No6',
            '$gr25_D_mm_No7',
            '$gr25_D_mm_No8',
            '$gr25_D_mm_No9',
            '$gr50_Date_No1',
            '$gr50_Date_No2',
            '$gr50_Date_No3',
            '$gr50_Date_No4',
            '$gr50_Date_No5',
            '$gr50_Date_No6',
            '$gr50_Date_No7',
            '$gr50_Date_No8',
            '$gr50_Date_No9',
            '$gr50_Hour_No1',
            '$gr50_Hour_No2',
            '$gr50_Hour_No3',
            '$gr50_Hour_No4',
            '$gr50_Hour_No5',
            '$gr50_Hour_No6',
            '$gr50_Hour_No7',
            '$gr50_Hour_No8',
            '$gr50_Hour_No9',
            '$gr50_Reading_Time_min_No1',
            '$gr50_Reading_Time_min_No2',
            '$gr50_Reading_Time_min_No3',
            '$gr50_Reading_Time_min_No4',
            '$gr50_Reading_Time_min_No5',
            '$gr50_Reading_Time_min_No6',
            '$gr50_Reading_Time_min_No7',
            '$gr50_Reading_Time_min_No8',
            '$gr50_Reading_Time_min_No9',
            '$gr50_Temp_No1',
            '$gr50_Temp_No2',
            '$gr50_Temp_No3',
            '$gr50_Temp_No4',
            '$gr50_Temp_No5',
            '$gr50_Temp_No6',
            '$gr50_Temp_No7',
            '$gr50_Temp_No8',
            '$gr50_Temp_No9',
            '$gr50_Hydrometer_Readings_Rm_No1',
            '$gr50_Hydrometer_Readings_Rm_No2',
            '$gr50_Hydrometer_Readings_Rm_No3',
            '$gr50_Hydrometer_Readings_Rm_No4',
            '$gr50_Hydrometer_Readings_Rm_No5',
            '$gr50_Hydrometer_Readings_Rm_No6',
            '$gr50_Hydrometer_Readings_Rm_No7',
            '$gr50_Hydrometer_Readings_Rm_No8',
            '$gr50_Hydrometer_Readings_Rm_No9',
            '$gr50_A_or_B_depending_of_the_Hy_type_No1',
            '$gr50_A_or_B_depending_of_the_Hy_type_No2',
            '$gr50_A_or_B_depending_of_the_Hy_type_No3',
            '$gr50_A_or_B_depending_of_the_Hy_type_No4',
            '$gr50_A_or_B_depending_of_the_Hy_type_No5',
            '$gr50_A_or_B_depending_of_the_Hy_type_No6',
            '$gr50_A_or_B_depending_of_the_Hy_type_No7',
            '$gr50_A_or_B_depending_of_the_Hy_type_No8',
            '$gr50_A_or_B_depending_of_the_Hy_type_No9',
            '$gr50_Offset_at_Reading_rdm_No1',
            '$gr50_Offset_at_Reading_rdm_No2',
            '$gr50_Offset_at_Reading_rdm_No3',
            '$gr50_Offset_at_Reading_rdm_No4',
            '$gr50_Offset_at_Reading_rdm_No5',
            '$gr50_Offset_at_Reading_rdm_No6',
            '$gr50_Offset_at_Reading_rdm_No7',
            '$gr50_Offset_at_Reading_rdm_No8',
            '$gr50_Offset_at_Reading_rdm_No9',
            '$gr50_Mass_Percent_Finer_Nm_Porce_No1',
            '$gr50_Mass_Percent_Finer_Nm_Porce_No2',
            '$gr50_Mass_Percent_Finer_Nm_Porce_No3',
            '$gr50_Mass_Percent_Finer_Nm_Porce_No4',
            '$gr50_Mass_Percent_Finer_Nm_Porce_No5',
            '$gr50_Mass_Percent_Finer_Nm_Porce_No6',
            '$gr50_Mass_Percent_Finer_Nm_Porce_No7',
            '$gr50_Mass_Percent_Finer_Nm_Porce_No8',
            '$gr50_Mass_Percent_Finer_Nm_Porce_No9',
            '$gr50_Effective_Length_Hm_No1',
            '$gr50_Effective_Length_Hm_No2',
            '$gr50_Effective_Length_Hm_No3',
            '$gr50_Effective_Length_Hm_No4',
            '$gr50_Effective_Length_Hm_No5',
            '$gr50_Effective_Length_Hm_No6',
            '$gr50_Effective_Length_Hm_No7',
            '$gr50_Effective_Length_Hm_No8',
            '$gr50_Effective_Length_Hm_No9',
            '$gr50_D_mm_No1',
            '$gr50_D_mm_No2',
            '$gr50_D_mm_No3',
            '$gr50_D_mm_No4',
            '$gr50_D_mm_No5',
            '$gr50_D_mm_No6',
            '$gr50_D_mm_No7',
            '$gr50_D_mm_No8',
            '$gr50_D_mm_No9',
            '$Nm_2um_Not_Dispersed',
            '$Nm_2um_Dispersed',
            '$Porce_Dispersion',
            '$Classification',
            '$RegisterBy'
        )";

        if ($db->query($sql)) {
            $session->msg('s', "Ensayo agregado exitosamente.");
            redirect('./double_hydrometer.php', false);
        } else {
            $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
            redirect('./double_hydrometer.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('./double_hydrometer.php', false);
    }
}

?>

<?php
$search_table = find_by_id('double_hydrometer', (int)$_GET['id']);
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
      $Comments = get_post_data('Comments');
      $Technician = get_post_data('Technician');
      $TestStartDate = get_post_data('TestStartDate');

      $Dispersing_Agent = get_post_data('Dispersing_Agent');
      $Amount_Used_g = get_post_data('Amount_Used_g');
      $Temperature_of_Test = get_post_data('Temperature_of_Test');
      $Viscosity_of_Water_gs_cm2 = get_post_data('Viscosity_of_Water_gs_cm2');
      $Mass_Density_of_Water_Calibrated = get_post_data('Mass_Density_of_Water_Calibrated');
      $Acceleration_cm_s2 = get_post_data('Acceleration_cm_s2');
      $Volume_of_Suspension_Vsp_cm3 = get_post_data('Volume_of_Suspension_Vsp_cm3');
      $Meniscus_Correction_Cm = get_post_data('Meniscus_Correction_Cm');
      $Percent_Passing_No_200_sieve = get_post_data('Percent_Passing_No_200_sieve');
      $Specific_Gravity = get_post_data('Specific_Gravity');
      $Tare_Name_50gr = get_post_data('Tare_Name_50gr');
      $Tare_Name_25gr = get_post_data('Tare_Name_25gr');
      $Oven_Temperature_50gr = get_post_data('Oven_Temperature_50gr');
      $Oven_Temperature_25gr = get_post_data('Oven_Temperature_25gr');
      $Tare_Plus_Wet_Soil_50gr = get_post_data('Tare_Plus_Wet_Soil_50gr');
      $Tare_Plus_Wet_Soil_25gr = get_post_data('Tare_Plus_Wet_Soil_25gr');
      $Tare_Plus_Dry_Soil_50gr = get_post_data('Tare_Plus_Dry_Soil_50gr');
      $Tare_Plus_Dry_Soil_25gr = get_post_data('Tare_Plus_Dry_Soil_25gr');
      $Water_Ww_50gr = get_post_data('Water_Ww_50gr');
      $Water_Ww_25gr = get_post_data('Water_Ww_25gr');
      $Tare_50gr = get_post_data('Tare_50gr');
      $Tare_25gr = get_post_data('Tare_25gr');
      $Dry_Soil_Ws_50gr = get_post_data('Dry_Soil_Ws_50gr');
      $Dry_Soil_Ws_25gr = get_post_data('Dry_Soil_Ws_25gr');
      $Moisture_Content_Porce_50gr = get_post_data('Moisture_Content_Porce_50gr');
      $Moisture_Content_Porce_25gr = get_post_data('Moisture_Content_Porce_25gr');
      $Hy_Calibration_50gr_Temperature_No1 = get_post_data('Hy_Calibration_50gr_Temperature_No1');
      $Hy_Calibration_50gr_Temperature_No2 = get_post_data('Hy_Calibration_50gr_Temperature_No2');
      $Hy_Calibration_50gr_Temperature_No3 = get_post_data('Hy_Calibration_50gr_Temperature_No3');
      $Hy_Calibration_50gr_Temperature_No4 = get_post_data('Hy_Calibration_50gr_Temperature_No4');
      $Hy_Calibration_50gr_Temperature_No5 = get_post_data('Hy_Calibration_50gr_Temperature_No5');
      $Hy_Calibration_50gr_Temperature_No6 = get_post_data('Hy_Calibration_50gr_Temperature_No6');
      $Hy_Calibration_50gr_Temperature_No7 = get_post_data('Hy_Calibration_50gr_Temperature_No7');
      $Hy_Calibration_50gr_Temperature_No8 = get_post_data('Hy_Calibration_50gr_Temperature_No8');
      $Hy_Calibration_50gr_Temperature_No9 = get_post_data('Hy_Calibration_50gr_Temperature_No9');
      $Hy_Calibration_50gr_Actual_Reading_No1 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No1');
      $Hy_Calibration_50gr_Actual_Reading_No2 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No2');
      $Hy_Calibration_50gr_Actual_Reading_No3 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No3');
      $Hy_Calibration_50gr_Actual_Reading_No4 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No4');
      $Hy_Calibration_50gr_Actual_Reading_No5 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No5');
      $Hy_Calibration_50gr_Actual_Reading_No6 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No6');
      $Hy_Calibration_50gr_Actual_Reading_No7 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No7');
      $Hy_Calibration_50gr_Actual_Reading_No8 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No8');
      $Hy_Calibration_50gr_Actual_Reading_No9 = get_post_data('Hy_Calibration_50gr_Actual_Reading_No9');
      $Hy_Measure_Fluid_50gr_Temperature_No1 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No1');
      $Hy_Measure_Fluid_50gr_Temperature_No2 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No2');
      $Hy_Measure_Fluid_50gr_Temperature_No3 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No3');
      $Hy_Measure_Fluid_50gr_Temperature_No4 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No4');
      $Hy_Measure_Fluid_50gr_Temperature_No5 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No5');
      $Hy_Measure_Fluid_50gr_Temperature_No6 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No6');
      $Hy_Measure_Fluid_50gr_Temperature_No7 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No7');
      $Hy_Measure_Fluid_50gr_Temperature_No8 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No8');
      $Hy_Measure_Fluid_50gr_Temperature_No9 = get_post_data('Hy_Measure_Fluid_50gr_Temperature_No9');
      $Hy_Measure_Fluid_50gr_Actual_Reading_No1 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No1');
      $Hy_Measure_Fluid_50gr_Actual_Reading_No2 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No2');
      $Hy_Measure_Fluid_50gr_Actual_Reading_No3 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No3');
      $Hy_Measure_Fluid_50gr_Actual_Reading_No4 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No4');
      $Hy_Measure_Fluid_50gr_Actual_Reading_No5 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No5');
      $Hy_Measure_Fluid_50gr_Actual_Reading_No6 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No6');
      $Hy_Measure_Fluid_50gr_Actual_Reading_No7 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No7');
      $Hy_Measure_Fluid_50gr_Actual_Reading_No8 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No8');
      $Hy_Measure_Fluid_50gr_Actual_Reading_No9 = get_post_data('Hy_Measure_Fluid_50gr_Actual_Reading_No9');
      $Hy_Calibration_25gr_Temperature_No1 = get_post_data('Hy_Calibration_25gr_Temperature_No1');
      $Hy_Calibration_25gr_Temperature_No2 = get_post_data('Hy_Calibration_25gr_Temperature_No2');
      $Hy_Calibration_25gr_Temperature_No3 = get_post_data('Hy_Calibration_25gr_Temperature_No3');
      $Hy_Calibration_25gr_Temperature_No4 = get_post_data('Hy_Calibration_25gr_Temperature_No4');
      $Hy_Calibration_25gr_Temperature_No5 = get_post_data('Hy_Calibration_25gr_Temperature_No5');
      $Hy_Calibration_25gr_Temperature_No6 = get_post_data('Hy_Calibration_25gr_Temperature_No6');
      $Hy_Calibration_25gr_Temperature_No7 = get_post_data('Hy_Calibration_25gr_Temperature_No7');
      $Hy_Calibration_25gr_Temperature_No8 = get_post_data('Hy_Calibration_25gr_Temperature_No8');
      $Hy_Calibration_25gr_Temperature_No9 = get_post_data('Hy_Calibration_25gr_Temperature_No9');
      $Hy_Calibration_25gr_Actual_Reading_No1 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No1');
      $Hy_Calibration_25gr_Actual_Reading_No2 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No2');
      $Hy_Calibration_25gr_Actual_Reading_No3 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No3');
      $Hy_Calibration_25gr_Actual_Reading_No4 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No4');
      $Hy_Calibration_25gr_Actual_Reading_No5 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No5');
      $Hy_Calibration_25gr_Actual_Reading_No6 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No6');
      $Hy_Calibration_25gr_Actual_Reading_No7 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No7');
      $Hy_Calibration_25gr_Actual_Reading_No8 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No8');
      $Hy_Calibration_25gr_Actual_Reading_No9 = get_post_data('Hy_Calibration_25gr_Actual_Reading_No9');
      $Hy_Measure_Fluid_25gr_Temperature_No1 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No1');
      $Hy_Measure_Fluid_25gr_Temperature_No2 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No2');
      $Hy_Measure_Fluid_25gr_Temperature_No3 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No3');
      $Hy_Measure_Fluid_25gr_Temperature_No4 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No4');
      $Hy_Measure_Fluid_25gr_Temperature_No5 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No5');
      $Hy_Measure_Fluid_25gr_Temperature_No6 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No6');
      $Hy_Measure_Fluid_25gr_Temperature_No7 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No7');
      $Hy_Measure_Fluid_25gr_Temperature_No8 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No8');
      $Hy_Measure_Fluid_25gr_Temperature_No9 = get_post_data('Hy_Measure_Fluid_25gr_Temperature_No9');
      $Hy_Measure_Fluid_25gr_Actual_Reading_No1 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No1');
      $Hy_Measure_Fluid_25gr_Actual_Reading_No2 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No2');
      $Hy_Measure_Fluid_25gr_Actual_Reading_No3 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No3');
      $Hy_Measure_Fluid_25gr_Actual_Reading_No4 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No4');
      $Hy_Measure_Fluid_25gr_Actual_Reading_No5 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No5');
      $Hy_Measure_Fluid_25gr_Actual_Reading_No6 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No6');
      $Hy_Measure_Fluid_25gr_Actual_Reading_No7 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No7');
      $Hy_Measure_Fluid_25gr_Actual_Reading_No8 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No8');
      $Hy_Measure_Fluid_25gr_Actual_Reading_No9 = get_post_data('Hy_Measure_Fluid_25gr_Actual_Reading_No9');
      $gr25_Date_No1 = get_post_data('gr25_Date_No1');
      $gr25_Date_No2 = get_post_data('gr25_Date_No2');
      $gr25_Date_No3 = get_post_data('gr25_Date_No3');
      $gr25_Date_No4 = get_post_data('gr25_Date_No4');
      $gr25_Date_No5 = get_post_data('gr25_Date_No5');
      $gr25_Date_No6 = get_post_data('gr25_Date_No6');
      $gr25_Date_No7 = get_post_data('gr25_Date_No7');
      $gr25_Date_No8 = get_post_data('gr25_Date_No8');
      $gr25_Date_No9 = get_post_data('gr25_Date_No9');
      $gr25_Hour_No1 = get_post_data('gr25_Hour_No1');
      $gr25_Hour_No2 = get_post_data('gr25_Hour_No2');
      $gr25_Hour_No3 = get_post_data('gr25_Hour_No3');
      $gr25_Hour_No4 = get_post_data('gr25_Hour_No4');
      $gr25_Hour_No5 = get_post_data('gr25_Hour_No5');
      $gr25_Hour_No6 = get_post_data('gr25_Hour_No6');
      $gr25_Hour_No7 = get_post_data('gr25_Hour_No7');
      $gr25_Hour_No8 = get_post_data('gr25_Hour_No8');
      $gr25_Hour_No9 = get_post_data('gr25_Hour_No9');
      $gr25_Reading_Time_min_No1 = get_post_data('gr25_Reading_Time_min_No1');
      $gr25_Reading_Time_min_No2 = get_post_data('gr25_Reading_Time_min_No2');
      $gr25_Reading_Time_min_No3 = get_post_data('gr25_Reading_Time_min_No3');
      $gr25_Reading_Time_min_No4 = get_post_data('gr25_Reading_Time_min_No4');
      $gr25_Reading_Time_min_No5 = get_post_data('gr25_Reading_Time_min_No5');
      $gr25_Reading_Time_min_No6 = get_post_data('gr25_Reading_Time_min_No6');
      $gr25_Reading_Time_min_No7 = get_post_data('gr25_Reading_Time_min_No7');
      $gr25_Reading_Time_min_No8 = get_post_data('gr25_Reading_Time_min_No8');
      $gr25_Reading_Time_min_No9 = get_post_data('gr25_Reading_Time_min_No9');
      $gr25_Temp_No1 = get_post_data('gr25_Temp_No1');
      $gr25_Temp_No2 = get_post_data('gr25_Temp_No2');
      $gr25_Temp_No3 = get_post_data('gr25_Temp_No3');
      $gr25_Temp_No4 = get_post_data('gr25_Temp_No4');
      $gr25_Temp_No5 = get_post_data('gr25_Temp_No5');
      $gr25_Temp_No6 = get_post_data('gr25_Temp_No6');
      $gr25_Temp_No7 = get_post_data('gr25_Temp_No7');
      $gr25_Temp_No8 = get_post_data('gr25_Temp_No8');
      $gr25_Temp_No9 = get_post_data('gr25_Temp_No9');
      $gr25_Hydrometer_Readings_Rm_No1 = get_post_data('gr25_Hydrometer_Readings_Rm_No1');
      $gr25_Hydrometer_Readings_Rm_No2 = get_post_data('gr25_Hydrometer_Readings_Rm_No2');
      $gr25_Hydrometer_Readings_Rm_No3 = get_post_data('gr25_Hydrometer_Readings_Rm_No3');
      $gr25_Hydrometer_Readings_Rm_No4 = get_post_data('gr25_Hydrometer_Readings_Rm_No4');
      $gr25_Hydrometer_Readings_Rm_No5 = get_post_data('gr25_Hydrometer_Readings_Rm_No5');
      $gr25_Hydrometer_Readings_Rm_No6 = get_post_data('gr25_Hydrometer_Readings_Rm_No6');
      $gr25_Hydrometer_Readings_Rm_No7 = get_post_data('gr25_Hydrometer_Readings_Rm_No7');
      $gr25_Hydrometer_Readings_Rm_No8 = get_post_data('gr25_Hydrometer_Readings_Rm_No8');
      $gr25_Hydrometer_Readings_Rm_No9 = get_post_data('gr25_Hydrometer_Readings_Rm_No9');
      $gr25_A_or_B_depending_of_the_Hy_type_No1 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No1');
      $gr25_A_or_B_depending_of_the_Hy_type_No2 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No2');
      $gr25_A_or_B_depending_of_the_Hy_type_No3 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No3');
      $gr25_A_or_B_depending_of_the_Hy_type_No4 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No4');
      $gr25_A_or_B_depending_of_the_Hy_type_No5 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No5');
      $gr25_A_or_B_depending_of_the_Hy_type_No6 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No6');
      $gr25_A_or_B_depending_of_the_Hy_type_No7 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No7');
      $gr25_A_or_B_depending_of_the_Hy_type_No8 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No8');
      $gr25_A_or_B_depending_of_the_Hy_type_No9 = get_post_data('gr25_A_or_B_depending_of_the_Hy_type_No9');
      $gr25_Offset_at_Reading_rdm_No1 = get_post_data('gr25_Offset_at_Reading_rdm_No1');
      $gr25_Offset_at_Reading_rdm_No2 = get_post_data('gr25_Offset_at_Reading_rdm_No2');
      $gr25_Offset_at_Reading_rdm_No3 = get_post_data('gr25_Offset_at_Reading_rdm_No3');
      $gr25_Offset_at_Reading_rdm_No4 = get_post_data('gr25_Offset_at_Reading_rdm_No4');
      $gr25_Offset_at_Reading_rdm_No5 = get_post_data('gr25_Offset_at_Reading_rdm_No5');
      $gr25_Offset_at_Reading_rdm_No6 = get_post_data('gr25_Offset_at_Reading_rdm_No6');
      $gr25_Offset_at_Reading_rdm_No7 = get_post_data('gr25_Offset_at_Reading_rdm_No7');
      $gr25_Offset_at_Reading_rdm_No8 = get_post_data('gr25_Offset_at_Reading_rdm_No8');
      $gr25_Offset_at_Reading_rdm_No9 = get_post_data('gr25_Offset_at_Reading_rdm_No9');
      $gr25_Mass_Percent_Finer_Nm_Porce_No1 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No1');
      $gr25_Mass_Percent_Finer_Nm_Porce_No2 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No2');
      $gr25_Mass_Percent_Finer_Nm_Porce_No3 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No3');
      $gr25_Mass_Percent_Finer_Nm_Porce_No4 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No4');
      $gr25_Mass_Percent_Finer_Nm_Porce_No5 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No5');
      $gr25_Mass_Percent_Finer_Nm_Porce_No6 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No6');
      $gr25_Mass_Percent_Finer_Nm_Porce_No7 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No7');
      $gr25_Mass_Percent_Finer_Nm_Porce_No8 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No8');
      $gr25_Mass_Percent_Finer_Nm_Porce_No9 = get_post_data('gr25_Mass_Percent_Finer_Nm_Porce_No9');
      $gr25_Effective_Length_Hm_No1 = get_post_data('gr25_Effective_Length_Hm_No1');
      $gr25_Effective_Length_Hm_No2 = get_post_data('gr25_Effective_Length_Hm_No2');
      $gr25_Effective_Length_Hm_No3 = get_post_data('gr25_Effective_Length_Hm_No3');
      $gr25_Effective_Length_Hm_No4 = get_post_data('gr25_Effective_Length_Hm_No4');
      $gr25_Effective_Length_Hm_No5 = get_post_data('gr25_Effective_Length_Hm_No5');
      $gr25_Effective_Length_Hm_No6 = get_post_data('gr25_Effective_Length_Hm_No6');
      $gr25_Effective_Length_Hm_No7 = get_post_data('gr25_Effective_Length_Hm_No7');
      $gr25_Effective_Length_Hm_No8 = get_post_data('gr25_Effective_Length_Hm_No8');
      $gr25_Effective_Length_Hm_No9 = get_post_data('gr25_Effective_Length_Hm_No9');
      $gr25_D_mm_No1 = get_post_data('gr25_D_mm_No1');
      $gr25_D_mm_No2 = get_post_data('gr25_D_mm_No2');
      $gr25_D_mm_No3 = get_post_data('gr25_D_mm_No3');
      $gr25_D_mm_No4 = get_post_data('gr25_D_mm_No4');
      $gr25_D_mm_No5 = get_post_data('gr25_D_mm_No5');
      $gr25_D_mm_No6 = get_post_data('gr25_D_mm_No6');
      $gr25_D_mm_No7 = get_post_data('gr25_D_mm_No7');
      $gr25_D_mm_No8 = get_post_data('gr25_D_mm_No8');
      $gr25_D_mm_No9 = get_post_data('gr25_D_mm_No9');
      $gr50_Date_No1 = get_post_data('gr50_Date_No1');
      $gr50_Date_No2 = get_post_data('gr50_Date_No2');
      $gr50_Date_No3 = get_post_data('gr50_Date_No3');
      $gr50_Date_No4 = get_post_data('gr50_Date_No4');
      $gr50_Date_No5 = get_post_data('gr50_Date_No5');
      $gr50_Date_No6 = get_post_data('gr50_Date_No6');
      $gr50_Date_No7 = get_post_data('gr50_Date_No7');
      $gr50_Date_No8 = get_post_data('gr50_Date_No8');
      $gr50_Date_No9 = get_post_data('gr50_Date_No9');
      $gr50_Hour_No1 = get_post_data('gr50_Hour_No1');
      $gr50_Hour_No2 = get_post_data('gr50_Hour_No2');
      $gr50_Hour_No3 = get_post_data('gr50_Hour_No3');
      $gr50_Hour_No4 = get_post_data('gr50_Hour_No4');
      $gr50_Hour_No5 = get_post_data('gr50_Hour_No5');
      $gr50_Hour_No6 = get_post_data('gr50_Hour_No6');
      $gr50_Hour_No7 = get_post_data('gr50_Hour_No7');
      $gr50_Hour_No8 = get_post_data('gr50_Hour_No8');
      $gr50_Hour_No9 = get_post_data('gr50_Hour_No9');
      $gr50_Reading_Time_min_No1 = get_post_data('gr50_Reading_Time_min_No1');
      $gr50_Reading_Time_min_No2 = get_post_data('gr50_Reading_Time_min_No2');
      $gr50_Reading_Time_min_No3 = get_post_data('gr50_Reading_Time_min_No3');
      $gr50_Reading_Time_min_No4 = get_post_data('gr50_Reading_Time_min_No4');
      $gr50_Reading_Time_min_No5 = get_post_data('gr50_Reading_Time_min_No5');
      $gr50_Reading_Time_min_No6 = get_post_data('gr50_Reading_Time_min_No6');
      $gr50_Reading_Time_min_No7 = get_post_data('gr50_Reading_Time_min_No7');
      $gr50_Reading_Time_min_No8 = get_post_data('gr50_Reading_Time_min_No8');
      $gr50_Reading_Time_min_No9 = get_post_data('gr50_Reading_Time_min_No9');
      $gr50_Temp_No1 = get_post_data('gr50_Temp_No1');
      $gr50_Temp_No2 = get_post_data('gr50_Temp_No2');
      $gr50_Temp_No3 = get_post_data('gr50_Temp_No3');
      $gr50_Temp_No4 = get_post_data('gr50_Temp_No4');
      $gr50_Temp_No5 = get_post_data('gr50_Temp_No5');
      $gr50_Temp_No6 = get_post_data('gr50_Temp_No6');
      $gr50_Temp_No7 = get_post_data('gr50_Temp_No7');
      $gr50_Temp_No8 = get_post_data('gr50_Temp_No8');
      $gr50_Temp_No9 = get_post_data('gr50_Temp_No9');
      $gr50_Hydrometer_Readings_Rm_No1 = get_post_data('gr50_Hydrometer_Readings_Rm_No1');
      $gr50_Hydrometer_Readings_Rm_No2 = get_post_data('gr50_Hydrometer_Readings_Rm_No2');
      $gr50_Hydrometer_Readings_Rm_No3 = get_post_data('gr50_Hydrometer_Readings_Rm_No3');
      $gr50_Hydrometer_Readings_Rm_No4 = get_post_data('gr50_Hydrometer_Readings_Rm_No4');
      $gr50_Hydrometer_Readings_Rm_No5 = get_post_data('gr50_Hydrometer_Readings_Rm_No5');
      $gr50_Hydrometer_Readings_Rm_No6 = get_post_data('gr50_Hydrometer_Readings_Rm_No6');
      $gr50_Hydrometer_Readings_Rm_No7 = get_post_data('gr50_Hydrometer_Readings_Rm_No7');
      $gr50_Hydrometer_Readings_Rm_No8 = get_post_data('gr50_Hydrometer_Readings_Rm_No8');
      $gr50_Hydrometer_Readings_Rm_No9 = get_post_data('gr50_Hydrometer_Readings_Rm_No9');
      $gr50_A_or_B_depending_of_the_Hy_type_No1 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No1');
      $gr50_A_or_B_depending_of_the_Hy_type_No2 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No2');
      $gr50_A_or_B_depending_of_the_Hy_type_No3 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No3');
      $gr50_A_or_B_depending_of_the_Hy_type_No4 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No4');
      $gr50_A_or_B_depending_of_the_Hy_type_No5 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No5');
      $gr50_A_or_B_depending_of_the_Hy_type_No6 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No6');
      $gr50_A_or_B_depending_of_the_Hy_type_No7 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No7');
      $gr50_A_or_B_depending_of_the_Hy_type_No8 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No8');
      $gr50_A_or_B_depending_of_the_Hy_type_No9 = get_post_data('gr50_A_or_B_depending_of_the_Hy_type_No9');
      $gr50_Offset_at_Reading_rdm_No1 = get_post_data('gr50_Offset_at_Reading_rdm_No1');
      $gr50_Offset_at_Reading_rdm_No2 = get_post_data('gr50_Offset_at_Reading_rdm_No2');
      $gr50_Offset_at_Reading_rdm_No3 = get_post_data('gr50_Offset_at_Reading_rdm_No3');
      $gr50_Offset_at_Reading_rdm_No4 = get_post_data('gr50_Offset_at_Reading_rdm_No4');
      $gr50_Offset_at_Reading_rdm_No5 = get_post_data('gr50_Offset_at_Reading_rdm_No5');
      $gr50_Offset_at_Reading_rdm_No6 = get_post_data('gr50_Offset_at_Reading_rdm_No6');
      $gr50_Offset_at_Reading_rdm_No7 = get_post_data('gr50_Offset_at_Reading_rdm_No7');
      $gr50_Offset_at_Reading_rdm_No8 = get_post_data('gr50_Offset_at_Reading_rdm_No8');
      $gr50_Offset_at_Reading_rdm_No9 = get_post_data('gr50_Offset_at_Reading_rdm_No9');
      $gr50_Mass_Percent_Finer_Nm_Porce_No1 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No1');
      $gr50_Mass_Percent_Finer_Nm_Porce_No2 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No2');
      $gr50_Mass_Percent_Finer_Nm_Porce_No3 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No3');
      $gr50_Mass_Percent_Finer_Nm_Porce_No4 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No4');
      $gr50_Mass_Percent_Finer_Nm_Porce_No5 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No5');
      $gr50_Mass_Percent_Finer_Nm_Porce_No6 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No6');
      $gr50_Mass_Percent_Finer_Nm_Porce_No7 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No7');
      $gr50_Mass_Percent_Finer_Nm_Porce_No8 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No8');
      $gr50_Mass_Percent_Finer_Nm_Porce_No9 = get_post_data('gr50_Mass_Percent_Finer_Nm_Porce_No9');
      $gr50_Effective_Length_Hm_No1 = get_post_data('gr50_Effective_Length_Hm_No1');
      $gr50_Effective_Length_Hm_No2 = get_post_data('gr50_Effective_Length_Hm_No2');
      $gr50_Effective_Length_Hm_No3 = get_post_data('gr50_Effective_Length_Hm_No3');
      $gr50_Effective_Length_Hm_No4 = get_post_data('gr50_Effective_Length_Hm_No4');
      $gr50_Effective_Length_Hm_No5 = get_post_data('gr50_Effective_Length_Hm_No5');
      $gr50_Effective_Length_Hm_No6 = get_post_data('gr50_Effective_Length_Hm_No6');
      $gr50_Effective_Length_Hm_No7 = get_post_data('gr50_Effective_Length_Hm_No7');
      $gr50_Effective_Length_Hm_No8 = get_post_data('gr50_Effective_Length_Hm_No8');
      $gr50_Effective_Length_Hm_No9 = get_post_data('gr50_Effective_Length_Hm_No9');
      $gr50_D_mm_No1 = get_post_data('gr50_D_mm_No1');
      $gr50_D_mm_No2 = get_post_data('gr50_D_mm_No2');
      $gr50_D_mm_No3 = get_post_data('gr50_D_mm_No3');
      $gr50_D_mm_No4 = get_post_data('gr50_D_mm_No4');
      $gr50_D_mm_No5 = get_post_data('gr50_D_mm_No5');
      $gr50_D_mm_No6 = get_post_data('gr50_D_mm_No6');
      $gr50_D_mm_No7 = get_post_data('gr50_D_mm_No7');
      $gr50_D_mm_No8 = get_post_data('gr50_D_mm_No8');
      $gr50_D_mm_No9 = get_post_data('gr50_D_mm_No9');
      $Nm_2um_Not_Dispersed = get_post_data('Nm_2um_Not_Dispersed');
      $Nm_2um_Dispersed = get_post_data('Nm_2um_Dispersed');
      $Porce_Dispersion = get_post_data('Porce_Dispersion');
      $Classification = get_post_data('Classification');
      $RegisterBy = $user['name'];

      $query = "UPDATE double_hydrometer SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Dispersing_Agent = '{$Dispersing_Agent}', ";
      $query .= "Amount_Used_g = '{$Amount_Used_g}', ";
      $query .= "Temperature_of_Test = '{$Temperature_of_Test}', ";
      $query .= "Viscosity_of_Water_gs_cm2 = '{$Viscosity_of_Water_gs_cm2}', ";
      $query .= "Mass_Density_of_Water_Calibrated = '{$Mass_Density_of_Water_Calibrated}', ";
      $query .= "Acceleration_cm_s2 = '{$Acceleration_cm_s2}', ";
      $query .= "Volume_of_Suspension_Vsp_cm3 = '{$Volume_of_Suspension_Vsp_cm3}', ";
      $query .= "Meniscus_Correction_Cm = '{$Meniscus_Correction_Cm}', ";
      $query .= "Percent_Passing_No_200_sieve = '{$Percent_Passing_No_200_sieve}', ";
      $query .= "Specific_Gravity = '{$Specific_Gravity}', ";
      $query .= "Tare_Name_50gr = '{$Tare_Name_50gr}', ";
      $query .= "Tare_Name_25gr = '{$Tare_Name_25gr}', ";
      $query .= "Oven_Temperature_50gr = '{$Oven_Temperature_50gr}', ";
      $query .= "Tare_Plus_Wet_Soil_50gr = '{$Tare_Plus_Wet_Soil_50gr}', ";
      $query .= "Tare_Plus_Wet_Soil_25gr = '{$Tare_Plus_Wet_Soil_25gr}', ";
      $query .= "Tare_Plus_Dry_Soil_50gr = '{$Tare_Plus_Dry_Soil_50gr}', ";
      $query .= "Tare_Plus_Dry_Soil_25gr = '{$Tare_Plus_Dry_Soil_25gr}', ";
      $query .= "Water_Ww_50gr = '{$Water_Ww_50gr}', ";
      $query .= "Water_Ww_25gr = '{$Water_Ww_25gr}', ";
      $query .= "Tare_50gr = '{$Tare_50gr}', ";
      $query .= "Tare_25gr = '{$Tare_25gr}', ";
      $query .= "Dry_Soil_Ws_50gr = '{$Dry_Soil_Ws_50gr}', ";
      $query .= "Dry_Soil_Ws_25gr = '{$Dry_Soil_Ws_25gr}', ";

      $query .= "Hy_Calibration_50gr_Temperature_No1 = '{$Hy_Calibration_50gr_Temperature_No1}', ";
      $query .= "Hy_Calibration_50gr_Temperature_No2 = '{$Hy_Calibration_50gr_Temperature_No2}', ";
      $query .= "Hy_Calibration_50gr_Temperature_No3 = '{$Hy_Calibration_50gr_Temperature_No3}', ";
      $query .= "Hy_Calibration_50gr_Temperature_No4 = '{$Hy_Calibration_50gr_Temperature_No4}', ";
      $query .= "Hy_Calibration_50gr_Temperature_No5 = '{$Hy_Calibration_50gr_Temperature_No5}', ";
      $query .= "Hy_Calibration_50gr_Temperature_No6 = '{$Hy_Calibration_50gr_Temperature_No6}', ";
      $query .= "Hy_Calibration_50gr_Temperature_No7 = '{$Hy_Calibration_50gr_Temperature_No7}', ";
      $query .= "Hy_Calibration_50gr_Temperature_No8 = '{$Hy_Calibration_50gr_Temperature_No8}', ";
      $query .= "Hy_Calibration_50gr_Temperature_No9 = '{$Hy_Calibration_50gr_Temperature_No9}', ";
      $query .= "Hy_Calibration_50gr_Actual_Reading_No1 = '{$Hy_Calibration_50gr_Actual_Reading_No1}', ";
      $query .= "Hy_Calibration_50gr_Actual_Reading_No2 = '{$Hy_Calibration_50gr_Actual_Reading_No2}', ";
      $query .= "Hy_Calibration_50gr_Actual_Reading_No3 = '{$Hy_Calibration_50gr_Actual_Reading_No3}', ";
      $query .= "Hy_Calibration_50gr_Actual_Reading_No4 = '{$Hy_Calibration_50gr_Actual_Reading_No4}', ";
      $query .= "Hy_Calibration_50gr_Actual_Reading_No5 = '{$Hy_Calibration_50gr_Actual_Reading_No5}', ";
      $query .= "Hy_Calibration_50gr_Actual_Reading_No6 = '{$Hy_Calibration_50gr_Actual_Reading_No6}', ";
      $query .= "Hy_Calibration_50gr_Actual_Reading_No7 = '{$Hy_Calibration_50gr_Actual_Reading_No7}', ";
      $query .= "Hy_Calibration_50gr_Actual_Reading_No8 = '{$Hy_Calibration_50gr_Actual_Reading_No8}', ";
      $query .= "Hy_Calibration_50gr_Actual_Reading_No9 = '{$Hy_Calibration_50gr_Actual_Reading_No9}', ";

      $query .= "Hy_Measure_Fluid_50gr_Temperature_No1 = '{$Hy_Measure_Fluid_50gr_Temperature_No1}', ";
      $query .= "Hy_Measure_Fluid_50gr_Temperature_No2 = '{$Hy_Measure_Fluid_50gr_Temperature_No2}', ";
      $query .= "Hy_Measure_Fluid_50gr_Temperature_No3 = '{$Hy_Measure_Fluid_50gr_Temperature_No3}', ";
      $query .= "Hy_Measure_Fluid_50gr_Temperature_No4 = '{$Hy_Measure_Fluid_50gr_Temperature_No4}', ";
      $query .= "Hy_Measure_Fluid_50gr_Temperature_No5 = '{$Hy_Measure_Fluid_50gr_Temperature_No5}', ";
      $query .= "Hy_Measure_Fluid_50gr_Temperature_No6 = '{$Hy_Measure_Fluid_50gr_Temperature_No6}', ";
      $query .= "Hy_Measure_Fluid_50gr_Temperature_No7 = '{$Hy_Measure_Fluid_50gr_Temperature_No7}', ";
      $query .= "Hy_Measure_Fluid_50gr_Temperature_No8 = '{$Hy_Measure_Fluid_50gr_Temperature_No8}', ";
      $query .= "Hy_Measure_Fluid_50gr_Temperature_No9 = '{$Hy_Measure_Fluid_50gr_Temperature_No9}', ";
      $query .= "Hy_Measure_Fluid_50gr_Actual_Reading_No1 = '{$Hy_Measure_Fluid_50gr_Actual_Reading_No1}', ";
      $query .= "Hy_Measure_Fluid_50gr_Actual_Reading_No2 = '{$Hy_Measure_Fluid_50gr_Actual_Reading_No2}', ";
      $query .= "Hy_Measure_Fluid_50gr_Actual_Reading_No3 = '{$Hy_Measure_Fluid_50gr_Actual_Reading_No3}', ";
      $query .= "Hy_Measure_Fluid_50gr_Actual_Reading_No4 = '{$Hy_Measure_Fluid_50gr_Actual_Reading_No4}', ";
      $query .= "Hy_Measure_Fluid_50gr_Actual_Reading_No5 = '{$Hy_Measure_Fluid_50gr_Actual_Reading_No5}', ";
      $query .= "Hy_Measure_Fluid_50gr_Actual_Reading_No6 = '{$Hy_Measure_Fluid_50gr_Actual_Reading_No6}', ";
      $query .= "Hy_Measure_Fluid_50gr_Actual_Reading_No7 = '{$Hy_Measure_Fluid_50gr_Actual_Reading_No7}', ";
      $query .= "Hy_Measure_Fluid_50gr_Actual_Reading_No8 = '{$Hy_Measure_Fluid_50gr_Actual_Reading_No8}', ";
      $query .= "Hy_Measure_Fluid_50gr_Actual_Reading_No9 = '{$Hy_Measure_Fluid_50gr_Actual_Reading_No9}', ";

      $query .= "Hy_Calibration_25gr_Temperature_No1 = '{$Hy_Calibration_25gr_Temperature_No1}', ";
      $query .= "Hy_Calibration_25gr_Temperature_No2 = '{$Hy_Calibration_25gr_Temperature_No2}', ";
      $query .= "Hy_Calibration_25gr_Temperature_No3 = '{$Hy_Calibration_25gr_Temperature_No3}', ";
      $query .= "Hy_Calibration_25gr_Temperature_No4 = '{$Hy_Calibration_25gr_Temperature_No4}', ";
      $query .= "Hy_Calibration_25gr_Temperature_No5 = '{$Hy_Calibration_25gr_Temperature_No5}', ";
      $query .= "Hy_Calibration_25gr_Temperature_No6 = '{$Hy_Calibration_25gr_Temperature_No6}', ";
      $query .= "Hy_Calibration_25gr_Temperature_No7 = '{$Hy_Calibration_25gr_Temperature_No7}', ";
      $query .= "Hy_Calibration_25gr_Temperature_No8 = '{$Hy_Calibration_25gr_Temperature_No8}', ";
      $query .= "Hy_Calibration_25gr_Temperature_No9 = '{$Hy_Calibration_25gr_Temperature_No9}', ";
      $query .= "Hy_Calibration_25gr_Actual_Reading_No1 = '{$Hy_Calibration_25gr_Actual_Reading_No1}', ";
      $query .= "Hy_Calibration_25gr_Actual_Reading_No2 = '{$Hy_Calibration_25gr_Actual_Reading_No2}', ";
      $query .= "Hy_Calibration_25gr_Actual_Reading_No3 = '{$Hy_Calibration_25gr_Actual_Reading_No3}', ";
      $query .= "Hy_Calibration_25gr_Actual_Reading_No4 = '{$Hy_Calibration_25gr_Actual_Reading_No4}', ";
      $query .= "Hy_Calibration_25gr_Actual_Reading_No5 = '{$Hy_Calibration_25gr_Actual_Reading_No5}', ";
      $query .= "Hy_Calibration_25gr_Actual_Reading_No6 = '{$Hy_Calibration_25gr_Actual_Reading_No6}', ";
      $query .= "Hy_Calibration_25gr_Actual_Reading_No7 = '{$Hy_Calibration_25gr_Actual_Reading_No7}', ";
      $query .= "Hy_Calibration_25gr_Actual_Reading_No8 = '{$Hy_Calibration_25gr_Actual_Reading_No8}', ";
      $query .= "Hy_Calibration_25gr_Actual_Reading_No9 = '{$Hy_Calibration_25gr_Actual_Reading_No9}', ";

      $query .= "Hy_Measure_Fluid_25gr_Temperature_No1 = '{$Hy_Measure_Fluid_25gr_Temperature_No1}', ";
      $query .= "Hy_Measure_Fluid_25gr_Temperature_No2 = '{$Hy_Measure_Fluid_25gr_Temperature_No2}', ";
      $query .= "Hy_Measure_Fluid_25gr_Temperature_No3 = '{$Hy_Measure_Fluid_25gr_Temperature_No3}', ";
      $query .= "Hy_Measure_Fluid_25gr_Temperature_No4 = '{$Hy_Measure_Fluid_25gr_Temperature_No4}', ";
      $query .= "Hy_Measure_Fluid_25gr_Temperature_No5 = '{$Hy_Measure_Fluid_25gr_Temperature_No5}', ";
      $query .= "Hy_Measure_Fluid_25gr_Temperature_No6 = '{$Hy_Measure_Fluid_25gr_Temperature_No6}', ";
      $query .= "Hy_Measure_Fluid_25gr_Temperature_No7 = '{$Hy_Measure_Fluid_25gr_Temperature_No7}', ";
      $query .= "Hy_Measure_Fluid_25gr_Temperature_No8 = '{$Hy_Measure_Fluid_25gr_Temperature_No8}', ";
      $query .= "Hy_Measure_Fluid_25gr_Temperature_No9 = '{$Hy_Measure_Fluid_25gr_Temperature_No9}', ";
      $query .= "Hy_Measure_Fluid_25gr_Actual_Reading_No1 = '{$Hy_Measure_Fluid_25gr_Actual_Reading_No1}', ";
      $query .= "Hy_Measure_Fluid_25gr_Actual_Reading_No2 = '{$Hy_Measure_Fluid_25gr_Actual_Reading_No2}', ";
      $query .= "Hy_Measure_Fluid_25gr_Actual_Reading_No3 = '{$Hy_Measure_Fluid_25gr_Actual_Reading_No3}', ";
      $query .= "Hy_Measure_Fluid_25gr_Actual_Reading_No4 = '{$Hy_Measure_Fluid_25gr_Actual_Reading_No4}', ";
      $query .= "Hy_Measure_Fluid_25gr_Actual_Reading_No5 = '{$Hy_Measure_Fluid_25gr_Actual_Reading_No5}', ";
      $query .= "Hy_Measure_Fluid_25gr_Actual_Reading_No6 = '{$Hy_Measure_Fluid_25gr_Actual_Reading_No6}', ";
      $query .= "Hy_Measure_Fluid_25gr_Actual_Reading_No7 = '{$Hy_Measure_Fluid_25gr_Actual_Reading_No7}', ";
      $query .= "Hy_Measure_Fluid_25gr_Actual_Reading_No8 = '{$Hy_Measure_Fluid_25gr_Actual_Reading_No8}', ";
      $query .= "Hy_Measure_Fluid_25gr_Actual_Reading_No9 = '{$Hy_Measure_Fluid_25gr_Actual_Reading_No9}', ";

      $query .= "gr25_Date_No1 = '{$gr25_Date_No1}', ";
      $query .= "gr25_Date_No2 = '{$gr25_Date_No2}', ";
      $query .= "gr25_Date_No3 = '{$gr25_Date_No3}', ";
      $query .= "gr25_Date_No4 = '{$gr25_Date_No4}', ";
      $query .= "gr25_Date_No5 = '{$gr25_Date_No5}', ";
      $query .= "gr25_Date_No6 = '{$gr25_Date_No6}', ";
      $query .= "gr25_Date_No7 = '{$gr25_Date_No7}', ";
      $query .= "gr25_Date_No8 = '{$gr25_Date_No8}', ";
      $query .= "gr25_Date_No9 = '{$gr25_Date_No9}', ";
      $query .= "gr25_Hour_No1 = '{$gr25_Hour_No1}', ";
      $query .= "gr25_Hour_No2 = '{$gr25_Hour_No2}', ";
      $query .= "gr25_Hour_No3 = '{$gr25_Hour_No3}', ";
      $query .= "gr25_Hour_No4 = '{$gr25_Hour_No4}', ";
      $query .= "gr25_Hour_No5 = '{$gr25_Hour_No5}', ";
      $query .= "gr25_Hour_No6 = '{$gr25_Hour_No6}', ";
      $query .= "gr25_Hour_No7 = '{$gr25_Hour_No7}', ";
      $query .= "gr25_Hour_No8 = '{$gr25_Hour_No8}', ";
      $query .= "gr25_Hour_No9 = '{$gr25_Hour_No9}', ";
      $query .= "gr25_Reading_Time_min_No1 = '{$gr25_Reading_Time_min_No1}', ";
      $query .= "gr25_Reading_Time_min_No2 = '{$gr25_Reading_Time_min_No2}', ";
      $query .= "gr25_Reading_Time_min_No3 = '{$gr25_Reading_Time_min_No3}', ";
      $query .= "gr25_Reading_Time_min_No4 = '{$gr25_Reading_Time_min_No4}', ";
      $query .= "gr25_Reading_Time_min_No5 = '{$gr25_Reading_Time_min_No5}', ";
      $query .= "gr25_Reading_Time_min_No6 = '{$gr25_Reading_Time_min_No6}', ";
      $query .= "gr25_Reading_Time_min_No7 = '{$gr25_Reading_Time_min_No7}', ";
      $query .= "gr25_Reading_Time_min_No8 = '{$gr25_Reading_Time_min_No8}', ";
      $query .= "gr25_Reading_Time_min_No9 = '{$gr25_Reading_Time_min_No9}', ";
      $query .= "gr25_Temp_No1 = '{$gr25_Temp_No1}', ";
      $query .= "gr25_Temp_No2 = '{$gr25_Temp_No2}', ";
      $query .= "gr25_Temp_No3 = '{$gr25_Temp_No3}', ";
      $query .= "gr25_Temp_No4 = '{$gr25_Temp_No4}', ";
      $query .= "gr25_Temp_No5 = '{$gr25_Temp_No5}', ";
      $query .= "gr25_Temp_No6 = '{$gr25_Temp_No6}', ";
      $query .= "gr25_Temp_No7 = '{$gr25_Temp_No7}', ";
      $query .= "gr25_Temp_No8 = '{$gr25_Temp_No8}', ";
      $query .= "gr25_Temp_No9 = '{$gr25_Temp_No9}', ";
      $query .= "gr25_Hydrometer_Readings_Rm_No1 = '{$gr25_Hydrometer_Readings_Rm_No1}', ";
      $query .= "gr25_Hydrometer_Readings_Rm_No2 = '{$gr25_Hydrometer_Readings_Rm_No2}', ";
      $query .= "gr25_Hydrometer_Readings_Rm_No3 = '{$gr25_Hydrometer_Readings_Rm_No3}', ";
      $query .= "gr25_Hydrometer_Readings_Rm_No4 = '{$gr25_Hydrometer_Readings_Rm_No4}', ";
      $query .= "gr25_Hydrometer_Readings_Rm_No5 = '{$gr25_Hydrometer_Readings_Rm_No5}', ";
      $query .= "gr25_Hydrometer_Readings_Rm_No6 = '{$gr25_Hydrometer_Readings_Rm_No6}', ";
      $query .= "gr25_Hydrometer_Readings_Rm_No7 = '{$gr25_Hydrometer_Readings_Rm_No7}', ";
      $query .= "gr25_Hydrometer_Readings_Rm_No8 = '{$gr25_Hydrometer_Readings_Rm_No8}', ";
      $query .= "gr25_Hydrometer_Readings_Rm_No9 = '{$gr25_Hydrometer_Readings_Rm_No9}', ";
      $query .= "gr25_A_or_B_depending_of_the_Hy_type_No1 = '{$gr25_A_or_B_depending_of_the_Hy_type_No1}', ";
      $query .= "gr25_A_or_B_depending_of_the_Hy_type_No2 = '{$gr25_A_or_B_depending_of_the_Hy_type_No2}', ";
      $query .= "gr25_A_or_B_depending_of_the_Hy_type_No3 = '{$gr25_A_or_B_depending_of_the_Hy_type_No3}', ";
      $query .= "gr25_A_or_B_depending_of_the_Hy_type_No4 = '{$gr25_A_or_B_depending_of_the_Hy_type_No4}', ";
      $query .= "gr25_A_or_B_depending_of_the_Hy_type_No5 = '{$gr25_A_or_B_depending_of_the_Hy_type_No5}', ";
      $query .= "gr25_A_or_B_depending_of_the_Hy_type_No6 = '{$gr25_A_or_B_depending_of_the_Hy_type_No6}', ";
      $query .= "gr25_A_or_B_depending_of_the_Hy_type_No7 = '{$gr25_A_or_B_depending_of_the_Hy_type_No7}', ";
      $query .= "gr25_A_or_B_depending_of_the_Hy_type_No8 = '{$gr25_A_or_B_depending_of_the_Hy_type_No8}', ";
      $query .= "gr25_A_or_B_depending_of_the_Hy_type_No9 = '{$gr25_A_or_B_depending_of_the_Hy_type_No9}', ";
      $query .= "gr25_Offset_at_Reading_rdm_No1 = '{$gr25_Offset_at_Reading_rdm_No1}', ";
      $query .= "gr25_Offset_at_Reading_rdm_No2 = '{$gr25_Offset_at_Reading_rdm_No2}', ";
      $query .= "gr25_Offset_at_Reading_rdm_No3 = '{$gr25_Offset_at_Reading_rdm_No3}', ";
      $query .= "gr25_Offset_at_Reading_rdm_No4 = '{$gr25_Offset_at_Reading_rdm_No4}', ";
      $query .= "gr25_Offset_at_Reading_rdm_No5 = '{$gr25_Offset_at_Reading_rdm_No5}', ";
      $query .= "gr25_Offset_at_Reading_rdm_No6 = '{$gr25_Offset_at_Reading_rdm_No6}', ";
      $query .= "gr25_Offset_at_Reading_rdm_No7 = '{$gr25_Offset_at_Reading_rdm_No7}', ";
      $query .= "gr25_Offset_at_Reading_rdm_No8 = '{$gr25_Offset_at_Reading_rdm_No8}', ";
      $query .= "gr25_Offset_at_Reading_rdm_No9 = '{$gr25_Offset_at_Reading_rdm_No9}', ";
      $query .= "gr25_Mass_Percent_Finer_Nm_Porce_No1 = '{$gr25_Mass_Percent_Finer_Nm_Porce_No1}', ";
      $query .= "gr25_Mass_Percent_Finer_Nm_Porce_No2 = '{$gr25_Mass_Percent_Finer_Nm_Porce_No2}', ";
      $query .= "gr25_Mass_Percent_Finer_Nm_Porce_No3 = '{$gr25_Mass_Percent_Finer_Nm_Porce_No3}', ";
      $query .= "gr25_Mass_Percent_Finer_Nm_Porce_No4 = '{$gr25_Mass_Percent_Finer_Nm_Porce_No4}', ";
      $query .= "gr25_Mass_Percent_Finer_Nm_Porce_No5 = '{$gr25_Mass_Percent_Finer_Nm_Porce_No5}', ";
      $query .= "gr25_Mass_Percent_Finer_Nm_Porce_No6 = '{$gr25_Mass_Percent_Finer_Nm_Porce_No6}', ";
      $query .= "gr25_Mass_Percent_Finer_Nm_Porce_No7 = '{$gr25_Mass_Percent_Finer_Nm_Porce_No7}', ";
      $query .= "gr25_Mass_Percent_Finer_Nm_Porce_No8 = '{$gr25_Mass_Percent_Finer_Nm_Porce_No8}', ";
      $query .= "gr25_Mass_Percent_Finer_Nm_Porce_No9 = '{$gr25_Mass_Percent_Finer_Nm_Porce_No9}', ";
      $query .= "gr25_Effective_Length_Hm_No1 = '{$gr25_Effective_Length_Hm_No1}', ";
      $query .= "gr25_Effective_Length_Hm_No2 = '{$gr25_Effective_Length_Hm_No2}', ";
      $query .= "gr25_Effective_Length_Hm_No3 = '{$gr25_Effective_Length_Hm_No3}', ";
      $query .= "gr25_Effective_Length_Hm_No4 = '{$gr25_Effective_Length_Hm_No4}', ";
      $query .= "gr25_Effective_Length_Hm_No5 = '{$gr25_Effective_Length_Hm_No5}', ";
      $query .= "gr25_Effective_Length_Hm_No6 = '{$gr25_Effective_Length_Hm_No6}', ";
      $query .= "gr25_Effective_Length_Hm_No7 = '{$gr25_Effective_Length_Hm_No7}', ";
      $query .= "gr25_Effective_Length_Hm_No8 = '{$gr25_Effective_Length_Hm_No8}', ";
      $query .= "gr25_Effective_Length_Hm_No9 = '{$gr25_Effective_Length_Hm_No9}', ";
      $query .= "gr25_D_mm_No1 = '{$gr25_D_mm_No1}', ";
      $query .= "gr25_D_mm_No2 = '{$gr25_D_mm_No2}', ";
      $query .= "gr25_D_mm_No3 = '{$gr25_D_mm_No3}', ";
      $query .= "gr25_D_mm_No4 = '{$gr25_D_mm_No4}', ";
      $query .= "gr25_D_mm_No5 = '{$gr25_D_mm_No5}', ";
      $query .= "gr25_D_mm_No6 = '{$gr25_D_mm_No6}', ";
      $query .= "gr25_D_mm_No7 = '{$gr25_D_mm_No7}', ";
      $query .= "gr25_D_mm_No8 = '{$gr25_D_mm_No8}', ";
      $query .= "gr25_D_mm_No9 = '{$gr25_D_mm_No9}', ";

      $query .= "gr50_Date_No1 = '{$gr50_Date_No1}', ";
      $query .= "gr50_Date_No2 = '{$gr50_Date_No2}', ";
      $query .= "gr50_Date_No3 = '{$gr50_Date_No3}', ";
      $query .= "gr50_Date_No4 = '{$gr50_Date_No4}', ";
      $query .= "gr50_Date_No5 = '{$gr50_Date_No5}', ";
      $query .= "gr50_Date_No6 = '{$gr50_Date_No6}', ";
      $query .= "gr50_Date_No7 = '{$gr50_Date_No7}', ";
      $query .= "gr50_Date_No8 = '{$gr50_Date_No8}', ";
      $query .= "gr50_Date_No9 = '{$gr50_Date_No9}', ";
      $query .= "gr50_Hour_No1 = '{$gr50_Hour_No1}', ";
      $query .= "gr50_Hour_No2 = '{$gr50_Hour_No2}', ";
      $query .= "gr50_Hour_No3 = '{$gr50_Hour_No3}', ";
      $query .= "gr50_Hour_No4 = '{$gr50_Hour_No4}', ";
      $query .= "gr50_Hour_No5 = '{$gr50_Hour_No5}', ";
      $query .= "gr50_Hour_No6 = '{$gr50_Hour_No6}', ";
      $query .= "gr50_Hour_No7 = '{$gr50_Hour_No7}', ";
      $query .= "gr50_Hour_No8 = '{$gr50_Hour_No8}', ";
      $query .= "gr50_Hour_No9 = '{$gr50_Hour_No9}', ";
      $query .= "gr50_Reading_Time_min_No1 = '{$gr50_Reading_Time_min_No1}', ";
      $query .= "gr50_Reading_Time_min_No2 = '{$gr50_Reading_Time_min_No2}', ";
      $query .= "gr50_Reading_Time_min_No3 = '{$gr50_Reading_Time_min_No3}', ";
      $query .= "gr50_Reading_Time_min_No4 = '{$gr50_Reading_Time_min_No4}', ";
      $query .= "gr50_Reading_Time_min_No5 = '{$gr50_Reading_Time_min_No5}', ";
      $query .= "gr50_Reading_Time_min_No6 = '{$gr50_Reading_Time_min_No6}', ";
      $query .= "gr50_Reading_Time_min_No7 = '{$gr50_Reading_Time_min_No7}', ";
      $query .= "gr50_Reading_Time_min_No8 = '{$gr50_Reading_Time_min_No8}', ";
      $query .= "gr50_Reading_Time_min_No9 = '{$gr50_Reading_Time_min_No9}', ";
      $query .= "gr50_Temp_No1 = '{$gr50_Temp_No1}', ";
      $query .= "gr50_Temp_No2 = '{$gr50_Temp_No2}', ";
      $query .= "gr50_Temp_No3 = '{$gr50_Temp_No3}', ";
      $query .= "gr50_Temp_No4 = '{$gr50_Temp_No4}', ";
      $query .= "gr50_Temp_No5 = '{$gr50_Temp_No5}', ";
      $query .= "gr50_Temp_No6 = '{$gr50_Temp_No6}', ";
      $query .= "gr50_Temp_No7 = '{$gr50_Temp_No7}', ";
      $query .= "gr50_Temp_No8 = '{$gr50_Temp_No8}', ";
      $query .= "gr50_Temp_No9 = '{$gr50_Temp_No9}', ";
      $query .= "gr50_Hydrometer_Readings_Rm_No1 = '{$gr50_Hydrometer_Readings_Rm_No1}', ";
      $query .= "gr50_Hydrometer_Readings_Rm_No2 = '{$gr50_Hydrometer_Readings_Rm_No2}', ";
      $query .= "gr50_Hydrometer_Readings_Rm_No3 = '{$gr50_Hydrometer_Readings_Rm_No3}', ";
      $query .= "gr50_Hydrometer_Readings_Rm_No4 = '{$gr50_Hydrometer_Readings_Rm_No4}', ";
      $query .= "gr50_Hydrometer_Readings_Rm_No5 = '{$gr50_Hydrometer_Readings_Rm_No5}', ";
      $query .= "gr50_Hydrometer_Readings_Rm_No6 = '{$gr50_Hydrometer_Readings_Rm_No6}', ";
      $query .= "gr50_Hydrometer_Readings_Rm_No7 = '{$gr50_Hydrometer_Readings_Rm_No7}', ";
      $query .= "gr50_Hydrometer_Readings_Rm_No8 = '{$gr50_Hydrometer_Readings_Rm_No8}', ";
      $query .= "gr50_Hydrometer_Readings_Rm_No9 = '{$gr50_Hydrometer_Readings_Rm_No9}', ";
      $query .= "gr50_A_or_B_depending_of_the_Hy_type_No1 = '{$gr50_A_or_B_depending_of_the_Hy_type_No1}', ";
      $query .= "gr50_A_or_B_depending_of_the_Hy_type_No2 = '{$gr50_A_or_B_depending_of_the_Hy_type_No2}', ";
      $query .= "gr50_A_or_B_depending_of_the_Hy_type_No3 = '{$gr50_A_or_B_depending_of_the_Hy_type_No3}', ";
      $query .= "gr50_A_or_B_depending_of_the_Hy_type_No4 = '{$gr50_A_or_B_depending_of_the_Hy_type_No4}', ";
      $query .= "gr50_A_or_B_depending_of_the_Hy_type_No5 = '{$gr50_A_or_B_depending_of_the_Hy_type_No5}', ";
      $query .= "gr50_A_or_B_depending_of_the_Hy_type_No6 = '{$gr50_A_or_B_depending_of_the_Hy_type_No6}', ";
      $query .= "gr50_A_or_B_depending_of_the_Hy_type_No7 = '{$gr50_A_or_B_depending_of_the_Hy_type_No7}', ";
      $query .= "gr50_A_or_B_depending_of_the_Hy_type_No8 = '{$gr50_A_or_B_depending_of_the_Hy_type_No8}', ";
      $query .= "gr50_A_or_B_depending_of_the_Hy_type_No9 = '{$gr50_A_or_B_depending_of_the_Hy_type_No9}', ";
      $query .= "gr50_Offset_at_Reading_rdm_No1 = '{$gr50_Offset_at_Reading_rdm_No1}', ";
      $query .= "gr50_Offset_at_Reading_rdm_No2 = '{$gr50_Offset_at_Reading_rdm_No2}', ";
      $query .= "gr50_Offset_at_Reading_rdm_No3 = '{$gr50_Offset_at_Reading_rdm_No3}', ";
      $query .= "gr50_Offset_at_Reading_rdm_No4 = '{$gr50_Offset_at_Reading_rdm_No4}', ";
      $query .= "gr50_Offset_at_Reading_rdm_No5 = '{$gr50_Offset_at_Reading_rdm_No5}', ";
      $query .= "gr50_Offset_at_Reading_rdm_No6 = '{$gr50_Offset_at_Reading_rdm_No6}', ";
      $query .= "gr50_Offset_at_Reading_rdm_No7 = '{$gr50_Offset_at_Reading_rdm_No7}', ";
      $query .= "gr50_Offset_at_Reading_rdm_No8 = '{$gr50_Offset_at_Reading_rdm_No8}', ";
      $query .= "gr50_Offset_at_Reading_rdm_No9 = '{$gr50_Offset_at_Reading_rdm_No9}', ";
      $query .= "gr50_Mass_Percent_Finer_Nm_Porce_No1 = '{$gr50_Mass_Percent_Finer_Nm_Porce_No1}', ";
      $query .= "gr50_Mass_Percent_Finer_Nm_Porce_No2 = '{$gr50_Mass_Percent_Finer_Nm_Porce_No2}', ";
      $query .= "gr50_Mass_Percent_Finer_Nm_Porce_No3 = '{$gr50_Mass_Percent_Finer_Nm_Porce_No3}', ";
      $query .= "gr50_Mass_Percent_Finer_Nm_Porce_No4 = '{$gr50_Mass_Percent_Finer_Nm_Porce_No4}', ";
      $query .= "gr50_Mass_Percent_Finer_Nm_Porce_No5 = '{$gr50_Mass_Percent_Finer_Nm_Porce_No5}', ";
      $query .= "gr50_Mass_Percent_Finer_Nm_Porce_No6 = '{$gr50_Mass_Percent_Finer_Nm_Porce_No6}', ";
      $query .= "gr50_Mass_Percent_Finer_Nm_Porce_No7 = '{$gr50_Mass_Percent_Finer_Nm_Porce_No7}', ";
      $query .= "gr50_Mass_Percent_Finer_Nm_Porce_No8 = '{$gr50_Mass_Percent_Finer_Nm_Porce_No8}', ";
      $query .= "gr50_Mass_Percent_Finer_Nm_Porce_No9 = '{$gr50_Mass_Percent_Finer_Nm_Porce_No9}', ";
      $query .= "gr50_Effective_Length_Hm_No1 = '{$gr50_Effective_Length_Hm_No1}', ";
      $query .= "gr50_Effective_Length_Hm_No2 = '{$gr50_Effective_Length_Hm_No2}', ";
      $query .= "gr50_Effective_Length_Hm_No3 = '{$gr50_Effective_Length_Hm_No3}', ";
      $query .= "gr50_Effective_Length_Hm_No4 = '{$gr50_Effective_Length_Hm_No4}', ";
      $query .= "gr50_Effective_Length_Hm_No5 = '{$gr50_Effective_Length_Hm_No5}', ";
      $query .= "gr50_Effective_Length_Hm_No6 = '{$gr50_Effective_Length_Hm_No6}', ";
      $query .= "gr50_Effective_Length_Hm_No7 = '{$gr50_Effective_Length_Hm_No7}', ";
      $query .= "gr50_Effective_Length_Hm_No8 = '{$gr50_Effective_Length_Hm_No8}', ";
      $query .= "gr50_Effective_Length_Hm_No9 = '{$gr50_Effective_Length_Hm_No9}', ";
      $query .= "gr50_D_mm_No1 = '{$gr50_D_mm_No1}', ";
      $query .= "gr50_D_mm_No2 = '{$gr50_D_mm_No2}', ";
      $query .= "gr50_D_mm_No3 = '{$gr50_D_mm_No3}', ";
      $query .= "gr50_D_mm_No4 = '{$gr50_D_mm_No4}', ";
      $query .= "gr50_D_mm_No5 = '{$gr50_D_mm_No5}', ";
      $query .= "gr50_D_mm_No6 = '{$gr50_D_mm_No6}', ";
      $query .= "gr50_D_mm_No7 = '{$gr50_D_mm_No7}', ";
      $query .= "gr50_D_mm_No8 = '{$gr50_D_mm_No8}', ";
      $query .= "gr50_D_mm_No9 = '{$gr50_D_mm_No9}', ";
    
      $query .= "Nm_2um_Not_Dispersed = '{$Nm_2um_Not_Dispersed}', ";
      $query .= "Nm_2um_Dispersed = '{$Nm_2um_Dispersed}', ";
      $query .= "Porce_Dispersion = '{$Porce_Dispersion}', ";
      $query .= "Classification = '{$Classification}', ";

      $query .= "Registered_By = '{$RegisterBy}' ";
      
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-Double-Hydrometer.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-Double-Hydrometer.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-Double-Hydrometer.php?id=' . $search_table['id'], false);
    }
  }
?>