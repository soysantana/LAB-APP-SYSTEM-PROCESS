<?php

$user = current_user();

// Función para obtener y escapar datos del POST
function get_post_data($field) {
    global $db;
    return $db->escape($_POST[$field]);
}

if (isset($_POST['Consolidation'])) {
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
        $testype = "Consolidation";
        $Standard = get_post_data('Standard');
        $PreparationMethod = get_post_data('PreparationMethod');
        $Comments = get_post_data('Comments');
        $Technician = get_post_data('Technician');
        $TestStartDate = get_post_data('TestStartDate');

        $Date_No1 = get_post_data('Date_No1');
        $Date_No2 = get_post_data('Date_No2');
        $Date_No3 = get_post_data('Date_No3');
        $Date_No4 = get_post_data('Date_No4');
        $Date_No5 = get_post_data('Date_No5');
        $Date_No6 = get_post_data('Date_No6');
        $Date_No7 = get_post_data('Date_No7');
        $Date_No8 = get_post_data('Date_No8');
        $Date_No9 = get_post_data('Date_No9');
        $Date_No10 = get_post_data('Date_No10');
        $Date_No11 = get_post_data('Date_No11');
        $Date_No12 = get_post_data('Date_No12');
        $Date_No13 = get_post_data('Date_No13');
        $Date_No14 = get_post_data('Date_No14');
        $Date_No15 = get_post_data('Date_No15');
        $Date_No16 = get_post_data('Date_No16');
        $Name_Mass_on_Hangar_Colum1 = get_post_data('Name_Mass_on_Hangar_Colum1');
        $Mass_on_Hangar_Colum1_No1 = get_post_data('Mass_on_Hangar_Colum1_No1');
        $Mass_on_Hangar_Colum1_No2 = get_post_data('Mass_on_Hangar_Colum1_No2');
        $Mass_on_Hangar_Colum1_No3 = get_post_data('Mass_on_Hangar_Colum1_No3');
        $Mass_on_Hangar_Colum1_No4 = get_post_data('Mass_on_Hangar_Colum1_No4');
        $Mass_on_Hangar_Colum1_No5 = get_post_data('Mass_on_Hangar_Colum1_No5');
        $Mass_on_Hangar_Colum1_No6 = get_post_data('Mass_on_Hangar_Colum1_No6');
        $Mass_on_Hangar_Colum1_No7 = get_post_data('Mass_on_Hangar_Colum1_No7');
        $Mass_on_Hangar_Colum1_No8 = get_post_data('Mass_on_Hangar_Colum1_No8');
        $Mass_on_Hangar_Colum1_No9 = get_post_data('Mass_on_Hangar_Colum1_No9');
        $Mass_on_Hangar_Colum1_No10 = get_post_data('Mass_on_Hangar_Colum1_No10');
        $Mass_on_Hangar_Colum1_No11 = get_post_data('Mass_on_Hangar_Colum1_No11');
        $Mass_on_Hangar_Colum1_No12 = get_post_data('Mass_on_Hangar_Colum1_No12');
        $Mass_on_Hangar_Colum1_No13 = get_post_data('Mass_on_Hangar_Colum1_No13');
        $Mass_on_Hangar_Colum1_No14 = get_post_data('Mass_on_Hangar_Colum1_No14');
        $Mass_on_Hangar_Colum1_No15 = get_post_data('Mass_on_Hangar_Colum1_No15');
        $Mass_on_Hangar_Colum1_No16 = get_post_data('Mass_on_Hangar_Colum1_No16');
        $Name_Mass_on_Hangar_Colum2 = get_post_data('Name_Mass_on_Hangar_Colum2');
        $Mass_on_Hangar_Colum2_No1 = get_post_data('Mass_on_Hangar_Colum2_No1');
        $Mass_on_Hangar_Colum2_No2 = get_post_data('Mass_on_Hangar_Colum2_No2');
        $Mass_on_Hangar_Colum2_No3 = get_post_data('Mass_on_Hangar_Colum2_No3');
        $Mass_on_Hangar_Colum2_No4 = get_post_data('Mass_on_Hangar_Colum2_No4');
        $Mass_on_Hangar_Colum2_No5 = get_post_data('Mass_on_Hangar_Colum2_No5');
        $Mass_on_Hangar_Colum2_No6 = get_post_data('Mass_on_Hangar_Colum2_No6');
        $Mass_on_Hangar_Colum2_No7 = get_post_data('Mass_on_Hangar_Colum2_No7');
        $Mass_on_Hangar_Colum2_No8 = get_post_data('Mass_on_Hangar_Colum2_No8');
        $Mass_on_Hangar_Colum2_No9 = get_post_data('Mass_on_Hangar_Colum2_No9');
        $Mass_on_Hangar_Colum2_No10 = get_post_data('Mass_on_Hangar_Colum2_No10');
        $Mass_on_Hangar_Colum2_No11 = get_post_data('Mass_on_Hangar_Colum2_No11');
        $Mass_on_Hangar_Colum2_No12 = get_post_data('Mass_on_Hangar_Colum2_No12');
        $Mass_on_Hangar_Colum2_No13 = get_post_data('Mass_on_Hangar_Colum2_No13');
        $Mass_on_Hangar_Colum2_No14 = get_post_data('Mass_on_Hangar_Colum2_No14');
        $Mass_on_Hangar_Colum2_No15 = get_post_data('Mass_on_Hangar_Colum2_No15');
        $Mass_on_Hangar_Colum2_No16 = get_post_data('Mass_on_Hangar_Colum2_No16');
        $Name_Mass_on_Hangar_Colum3 = get_post_data('Name_Mass_on_Hangar_Colum3');
        $Mass_on_Hangar_Colum3_No1 = get_post_data('Mass_on_Hangar_Colum3_No1');
        $Mass_on_Hangar_Colum3_No2 = get_post_data('Mass_on_Hangar_Colum3_No2');
        $Mass_on_Hangar_Colum3_No3 = get_post_data('Mass_on_Hangar_Colum3_No3');
        $Mass_on_Hangar_Colum3_No4 = get_post_data('Mass_on_Hangar_Colum3_No4');
        $Mass_on_Hangar_Colum3_No5 = get_post_data('Mass_on_Hangar_Colum3_No5');
        $Mass_on_Hangar_Colum3_No6 = get_post_data('Mass_on_Hangar_Colum3_No6');
        $Mass_on_Hangar_Colum3_No7 = get_post_data('Mass_on_Hangar_Colum3_No7');
        $Mass_on_Hangar_Colum3_No8 = get_post_data('Mass_on_Hangar_Colum3_No8');
        $Mass_on_Hangar_Colum3_No9 = get_post_data('Mass_on_Hangar_Colum3_No9');
        $Mass_on_Hangar_Colum3_No10 = get_post_data('Mass_on_Hangar_Colum3_No10');
        $Mass_on_Hangar_Colum3_No11 = get_post_data('Mass_on_Hangar_Colum3_No11');
        $Mass_on_Hangar_Colum3_No12 = get_post_data('Mass_on_Hangar_Colum3_No12');
        $Mass_on_Hangar_Colum3_No13 = get_post_data('Mass_on_Hangar_Colum3_No13');
        $Mass_on_Hangar_Colum3_No14 = get_post_data('Mass_on_Hangar_Colum3_No14');
        $Mass_on_Hangar_Colum3_No15 = get_post_data('Mass_on_Hangar_Colum3_No15');
        $Mass_on_Hangar_Colum3_No16 = get_post_data('Mass_on_Hangar_Colum3_No16');
        $Name_Mass_on_Hangar_Colum4 = get_post_data('Name_Mass_on_Hangar_Colum4');
        $Mass_on_Hangar_Colum4_No1 = get_post_data('Mass_on_Hangar_Colum4_No1');
        $Mass_on_Hangar_Colum4_No2 = get_post_data('Mass_on_Hangar_Colum4_No2');
        $Mass_on_Hangar_Colum4_No3 = get_post_data('Mass_on_Hangar_Colum4_No3');
        $Mass_on_Hangar_Colum4_No4 = get_post_data('Mass_on_Hangar_Colum4_No4');
        $Mass_on_Hangar_Colum4_No5 = get_post_data('Mass_on_Hangar_Colum4_No5');
        $Mass_on_Hangar_Colum4_No6 = get_post_data('Mass_on_Hangar_Colum4_No6');
        $Mass_on_Hangar_Colum4_No7 = get_post_data('Mass_on_Hangar_Colum4_No7');
        $Mass_on_Hangar_Colum4_No8 = get_post_data('Mass_on_Hangar_Colum4_No8');
        $Mass_on_Hangar_Colum4_No9 = get_post_data('Mass_on_Hangar_Colum4_No9');
        $Mass_on_Hangar_Colum4_No10 = get_post_data('Mass_on_Hangar_Colum4_No10');
        $Mass_on_Hangar_Colum4_No11 = get_post_data('Mass_on_Hangar_Colum4_No11');
        $Mass_on_Hangar_Colum4_No12 = get_post_data('Mass_on_Hangar_Colum4_No12');
        $Mass_on_Hangar_Colum4_No13 = get_post_data('Mass_on_Hangar_Colum4_No13');
        $Mass_on_Hangar_Colum4_No14 = get_post_data('Mass_on_Hangar_Colum4_No14');
        $Mass_on_Hangar_Colum4_No15 = get_post_data('Mass_on_Hangar_Colum4_No15');
        $Mass_on_Hangar_Colum4_No16 = get_post_data('Mass_on_Hangar_Colum4_No16');
        $Name_Mass_on_Hangar_Colum5 = get_post_data('Name_Mass_on_Hangar_Colum5');
        $Mass_on_Hangar_Colum5_No1 = get_post_data('Mass_on_Hangar_Colum5_No1');
        $Mass_on_Hangar_Colum5_No2 = get_post_data('Mass_on_Hangar_Colum5_No2');
        $Mass_on_Hangar_Colum5_No3 = get_post_data('Mass_on_Hangar_Colum5_No3');
        $Mass_on_Hangar_Colum5_No4 = get_post_data('Mass_on_Hangar_Colum5_No4');
        $Mass_on_Hangar_Colum5_No5 = get_post_data('Mass_on_Hangar_Colum5_No5');
        $Mass_on_Hangar_Colum5_No6 = get_post_data('Mass_on_Hangar_Colum5_No6');
        $Mass_on_Hangar_Colum5_No7 = get_post_data('Mass_on_Hangar_Colum5_No7');
        $Mass_on_Hangar_Colum5_No8 = get_post_data('Mass_on_Hangar_Colum5_No8');
        $Mass_on_Hangar_Colum5_No9 = get_post_data('Mass_on_Hangar_Colum5_No9');
        $Mass_on_Hangar_Colum5_No10 = get_post_data('Mass_on_Hangar_Colum5_No10');
        $Mass_on_Hangar_Colum5_No11 = get_post_data('Mass_on_Hangar_Colum5_No11');
        $Mass_on_Hangar_Colum5_No12 = get_post_data('Mass_on_Hangar_Colum5_No12');
        $Mass_on_Hangar_Colum5_No13 = get_post_data('Mass_on_Hangar_Colum5_No13');
        $Mass_on_Hangar_Colum5_No14 = get_post_data('Mass_on_Hangar_Colum5_No14');
        $Mass_on_Hangar_Colum5_No15 = get_post_data('Mass_on_Hangar_Colum5_No15');
        $Mass_on_Hangar_Colum5_No16 = get_post_data('Mass_on_Hangar_Colum5_No16');
        $Name_Mass_on_Hangar_Colum6 = get_post_data('Name_Mass_on_Hangar_Colum6');
        $Mass_on_Hangar_Colum6_No1 = get_post_data('Mass_on_Hangar_Colum6_No1');
        $Mass_on_Hangar_Colum6_No2 = get_post_data('Mass_on_Hangar_Colum6_No2');
        $Mass_on_Hangar_Colum6_No3 = get_post_data('Mass_on_Hangar_Colum6_No3');
        $Mass_on_Hangar_Colum6_No4 = get_post_data('Mass_on_Hangar_Colum6_No4');
        $Mass_on_Hangar_Colum6_No5 = get_post_data('Mass_on_Hangar_Colum6_No5');
        $Mass_on_Hangar_Colum6_No6 = get_post_data('Mass_on_Hangar_Colum6_No6');
        $Mass_on_Hangar_Colum6_No7 = get_post_data('Mass_on_Hangar_Colum6_No7');
        $Mass_on_Hangar_Colum6_No8 = get_post_data('Mass_on_Hangar_Colum6_No8');
        $Mass_on_Hangar_Colum6_No9 = get_post_data('Mass_on_Hangar_Colum6_No9');
        $Mass_on_Hangar_Colum6_No10 = get_post_data('Mass_on_Hangar_Colum6_No10');
        $Mass_on_Hangar_Colum6_No11 = get_post_data('Mass_on_Hangar_Colum6_No11');
        $Mass_on_Hangar_Colum6_No12 = get_post_data('Mass_on_Hangar_Colum6_No12');
        $Mass_on_Hangar_Colum6_No13 = get_post_data('Mass_on_Hangar_Colum6_No13');
        $Mass_on_Hangar_Colum6_No14 = get_post_data('Mass_on_Hangar_Colum6_No14');
        $Mass_on_Hangar_Colum6_No15 = get_post_data('Mass_on_Hangar_Colum6_No15');
        $Mass_on_Hangar_Colum6_No16 = get_post_data('Mass_on_Hangar_Colum6_No16');
        $Tare_No = get_post_data('Tare_No');
        $Mass_of_Tare_gr = get_post_data('Mass_of_Tare_gr');
        $Mass_of_Wet_Soil_Tare_gr = get_post_data('Mass_of_Wet_Soil_Tare_gr');
        $Mass_of_Dry_Soil_Tare = get_post_data('Mass_of_Dry_Soil_Tare');
        $Mass_of_Water = get_post_data('Mass_of_Water');
        $Mass_of_Dry_Soil_gr = get_post_data('Mass_of_Dry_Soil_gr');
        $Initial_Moisture_Conten_Porce_Wfp = get_post_data('Initial_Moisture_Conten_Porce_Wfp');
        $Diamter_cm = get_post_data('Diamter_cm');
        $Height_cm = get_post_data('Height_cm');
        $Area_A_cm2 = get_post_data('Area_A_cm2');
        $Volume_Vo_cm3 = get_post_data('Volume_Vo_cm3');
        $Weight_gr = get_post_data('Weight_gr');
        $Initial_Mois_Mass_Ring_gr = get_post_data('Initial_Mois_Mass_Ring_gr');
        $Initial_Mois_Mass = get_post_data('Initial_Mois_Mass');
        $Final_Dry_Mass_Ring_gr = get_post_data('Final_Dry_Mass_Ring_gr');
        $Final_Dry_Mass_gr = get_post_data('Final_Dry_Mass_gr');
        $Initial_Dry_Density_g_cm3 = get_post_data('Initial_Dry_Density_g_cm3');
        $Dry_Unit_Weight_Yd_KN_m3 = get_post_data('Dry_Unit_Weight_Yd_KN_m3');
        $Density_of_Water_pW_gr_cm3 = get_post_data('Density_of_Water_pW_gr_cm3');
        $Specific_Gravity_Gs = get_post_data('Specific_Gravity_Gs');
        $Dry_Mass_Of_The_Total_Specimen_Md_gr = get_post_data('Dry_Mass_Of_The_Total_Specimen_Md_gr');
        $Volume_of_Solids_Vs_cm3 = get_post_data('Volume_of_Solids_Vs_cm3');
        $Equivalent_Height_of_Solids_Hs_cm = get_post_data('Equivalent_Height_of_Solids_Hs_cm');
        $Initial_specimen_height_Ho_cm = get_post_data('Initial_specimen_height_Ho_cm');
        $Final_specimen_height_Hf_cm = get_post_data('Final_specimen_height_Hf_cm');
        $Void_ratio_before_test_Eo = get_post_data('Void_ratio_before_test_Eo');
        $Void_ratio_after_test_ef = get_post_data('Void_ratio_after_test_ef');
        $Mass_Weight_of_Tare_gr_Initial = get_post_data('Mass_Weight_of_Tare_gr_Initial');
        $Mass_Weight_of_Tare_gr_Final = get_post_data('Mass_Weight_of_Tare_gr_Final');
        $Mass_Weight_Wet_Soil_Tare_gr_Initial = get_post_data('Mass_Weight_Wet_Soil_Tare_gr_Initial');
        $Mass_Weight_Wet_Soil_Tare_gr_Final = get_post_data('Mass_Weight_Wet_Soil_Tare_gr_Final');
        $Mass_Weight_Dry_Soil_Tare_gr_Initial = get_post_data('Mass_Weight_Dry_Soil_Tare_gr_Initial');
        $Mass_Weight_Dry_Soil_Tare_gr_Final = get_post_data('Mass_Weight_Dry_Soil_Tare_gr_Final');
        $Mass_of_Water_gr_Initial = get_post_data('Mass_of_Water_gr_Initial');
        $Mass_of_Water_gr_Final = get_post_data('Mass_of_Water_gr_Final');
        $Weight_Wet_Soil_gr_Initial = get_post_data('Weight_Wet_Soil_gr_Initial');
        $Weight_Wet_Soil_gr_Final = get_post_data('Weight_Wet_Soil_gr_Final');
        $Weight_Dry_Soil_gr_Initial = get_post_data('Weight_Dry_Soil_gr_Initial');
        $Weight_Dry_Soil_gr_Final = get_post_data('Weight_Dry_Soil_gr_Final');
        $Moisture_Content_Porce_Initial = get_post_data('Moisture_Content_Porce_Initial');
        $Moisture_Content_Porce_Final = get_post_data('Moisture_Content_Porce_Final');
        $Initial_Degree_of_Saturation_Porce = get_post_data('Initial_Degree_of_Saturation_Porce');
        $Final_Degree_of_Saturation_Porce = get_post_data('Final_Degree_of_Saturation_Porce');
        $Loading_Decrements_Name_Kg_No1 = get_post_data('Loading_Decrements_Name_Kg_No1');
        $Loading_Decrements_Name_Kg_No2 = get_post_data('Loading_Decrements_Name_Kg_No2');
        $Loading_Decrements_Name_Kg_No3 = get_post_data('Loading_Decrements_Name_Kg_No3');
        $Loading_Decrements_Name_Kg_No4 = get_post_data('Loading_Decrements_Name_Kg_No4');
        $Loading_Decrements_Value_No1 = get_post_data('Loading_Decrements_Value_No1');
        $Loading_Decrements_Value_No2 = get_post_data('Loading_Decrements_Value_No2');
        $Loading_Decrements_Value_No3 = get_post_data('Loading_Decrements_Value_No3');
        $Loading_Decrements_Value_No4 = get_post_data('Loading_Decrements_Value_No4');
        $Factor_Dial = get_post_data('Factor_Dial');
        $Load_Incement_Kg_No1 = get_post_data('Load_Increment_Kg_No1');
        $Load_Incement_Kg_No2 = get_post_data('Load_Increment_Kg_No2');
        $Load_Incement_Kg_No3 = get_post_data('Load_Increment_Kg_No3');
        $Load_Incement_Kg_No4 = get_post_data('Load_Increment_Kg_No4');
        $Load_Incement_Kg_No5 = get_post_data('Load_Increment_Kg_No5');
        $Load_Incement_Kg_No6 = get_post_data('Load_Increment_Kg_No6');
        $Load_Incement_Kg_No7 = get_post_data('Load_Increment_Kg_No7');
        $Load_Incement_Kg_No8 = get_post_data('Load_Increment_Kg_No8');
        $Load_Incement_Kg_No9 = get_post_data('Load_Increment_Kg_No9');
        $Load_Incement_Kg_No10 = get_post_data('Load_Increment_Kg_No10');
        $Ov_Kg_cm2_No1 = get_post_data('Ov_Kg_cm2_No1');
        $Ov_Kg_cm2_No2 = get_post_data('Ov_Kg_cm2_No2');
        $Ov_Kg_cm2_No3 = get_post_data('Ov_Kg_cm2_No3');
        $Ov_Kg_cm2_No4 = get_post_data('Ov_Kg_cm2_No4');
        $Ov_Kg_cm2_No5 = get_post_data('Ov_Kg_cm2_No5');
        $Ov_Kg_cm2_No6 = get_post_data('Ov_Kg_cm2_No6');
        $Ov_Kg_cm2_No7 = get_post_data('Ov_Kg_cm2_No7');
        $Ov_Kg_cm2_No8 = get_post_data('Ov_Kg_cm2_No8');
        $Ov_Kg_cm2_No9 = get_post_data('Ov_Kg_cm2_No9');
        $Ov_Kg_cm2_No10 = get_post_data('Ov_Kg_cm2_No10');
        $Reading_Dial_No1 = get_post_data('Reading_Dial_No1');
        $Reading_Dial_No2 = get_post_data('Reading_Dial_No2');
        $Reading_Dial_No3 = get_post_data('Reading_Dial_No3');
        $Reading_Dial_No4 = get_post_data('Reading_Dial_No4');
        $Reading_Dial_No5 = get_post_data('Reading_Dial_No5');
        $Reading_Dial_No6 = get_post_data('Reading_Dial_No6');
        $Reading_Dial_No7 = get_post_data('Reading_Dial_No7');
        $Reading_Dial_No8 = get_post_data('Reading_Dial_No8');
        $Reading_Dial_No9 = get_post_data('Reading_Dial_No9');
        $Reading_Dial_No10 = get_post_data('Reading_Dial_No10');
        $AH_mm_No1 = get_post_data('AH_mm_No1');
        $AH_mm_No2 = get_post_data('AH_mm_No2');
        $AH_mm_No3 = get_post_data('AH_mm_No3');
        $AH_mm_No4 = get_post_data('AH_mm_No4');
        $AH_mm_No5 = get_post_data('AH_mm_No5');
        $AH_mm_No6 = get_post_data('AH_mm_No6');
        $AH_mm_No7 = get_post_data('AH_mm_No7');
        $AH_mm_No8 = get_post_data('AH_mm_No8');
        $AH_mm_No9 = get_post_data('AH_mm_No9');
        $AH_mm_No10 = get_post_data('AH_mm_No10');
        $e_AH_Ho_No1 = get_post_data('e_AH_Ho_No1');
        $e_AH_Ho_No2 = get_post_data('e_AH_Ho_No2');
        $e_AH_Ho_No3 = get_post_data('e_AH_Ho_No3');
        $e_AH_Ho_No4 = get_post_data('e_AH_Ho_No4');
        $e_AH_Ho_No5 = get_post_data('e_AH_Ho_No5');
        $e_AH_Ho_No6 = get_post_data('e_AH_Ho_No6');
        $e_AH_Ho_No7 = get_post_data('e_AH_Ho_No7');
        $e_AH_Ho_No8 = get_post_data('e_AH_Ho_No8');
        $e_AH_Ho_No9 = get_post_data('e_AH_Ho_No9');
        $e_AH_Ho_No10 = get_post_data('e_AH_Ho_No10');
        $AH_Hs_No1 = get_post_data('AH_Hs_No1');
        $AH_Hs_No2 = get_post_data('AH_Hs_No2');
        $AH_Hs_No3 = get_post_data('AH_Hs_No3');
        $AH_Hs_No4 = get_post_data('AH_Hs_No4');
        $AH_Hs_No5 = get_post_data('AH_Hs_No5');
        $AH_Hs_No6 = get_post_data('AH_Hs_No6');
        $AH_Hs_No7 = get_post_data('AH_Hs_No7');
        $AH_Hs_No8 = get_post_data('AH_Hs_No8');
        $AH_Hs_No9 = get_post_data('AH_Hs_No9');
        $AH_Hs_No10 = get_post_data('AH_Hs_No10');
        $Ov_e_No1 = get_post_data('Ov_e_No1');
        $Ov_e_No2 = get_post_data('Ov_e_No2');
        $Ov_e_No3 = get_post_data('Ov_e_No3');
        $Ov_e_No4 = get_post_data('Ov_e_No4');
        $Ov_e_No5 = get_post_data('Ov_e_No5');
        $Ov_e_No6 = get_post_data('Ov_e_No6');
        $Ov_e_No7 = get_post_data('Ov_e_No7');
        $Ov_e_No8 = get_post_data('Ov_e_No8');
        $Ov_e_No9 = get_post_data('Ov_e_No9');
        $Ov_e_No10 = get_post_data('Ov_e_No10');
        $e_No1 = get_post_data('e_No1');
        $e_No2 = get_post_data('e_No2');
        $e_No3 = get_post_data('e_No3');
        $e_No4 = get_post_data('e_No4');
        $e_No5 = get_post_data('e_No5');
        $e_No6 = get_post_data('e_No6');
        $e_No7 = get_post_data('e_No7');
        $e_No8 = get_post_data('e_No8');
        $e_No9 = get_post_data('e_No9');
        $e_No10 = get_post_data('e_No10');
        $Lectura_Dial_No1 = get_post_data('Lectura_Dial_No1');
        $Lectura_Dial_No2 = get_post_data('Lectura_Dial_No2');
        $Lectura_Dial_No3 = get_post_data('Lectura_Dial_No3');
        $Lectura_Dial_No4 = get_post_data('Lectura_Dial_No4');
        $Lectura_Dial_No5 = get_post_data('Lectura_Dial_No5');
        $Lectura_Dial_No6 = get_post_data('Lectura_Dial_No6');
        $Lectura_Dial_No7 = get_post_data('Lectura_Dial_No7');
        $Deformacion_cm_No1 = get_post_data('Deformacion_cm_No1');
        $Deformacion_cm_No2 = get_post_data('Deformacion_cm_No2');
        $Deformacion_cm_No3 = get_post_data('Deformacion_cm_No3');
        $Deformacion_cm_No4 = get_post_data('Deformacion_cm_No4');
        $Deformacion_cm_No5 = get_post_data('Deformacion_cm_No5');
        $Deformacion_cm_No6 = get_post_data('Deformacion_cm_No6');
        $Deformacion_cm_No7 = get_post_data('Deformacion_cm_No7');
        $Peso_Kg_No1 = get_post_data('Peso_Kg_No1');
        $Peso_Kg_No2 = get_post_data('Peso_Kg_No2');
        $Peso_Kg_No3 = get_post_data('Peso_Kg_No3');
        $Peso_Kg_No4 = get_post_data('Peso_Kg_No4');
        $Peso_Kg_No5 = get_post_data('Peso_Kg_No5');
        $Peso_Kg_No6 = get_post_data('Peso_Kg_No6');
        $Peso_Kg_No7 = get_post_data('Peso_Kg_No7');
        $o_Kg_cm2_No1 = get_post_data('o_Kg_cm2_No1');
        $o_Kg_cm2_No2 = get_post_data('o_Kg_cm2_No2');
        $o_Kg_cm2_No3 = get_post_data('o_Kg_cm2_No3');
        $o_Kg_cm2_No4 = get_post_data('o_Kg_cm2_No4');
        $o_Kg_cm2_No5 = get_post_data('o_Kg_cm2_No5');
        $o_Kg_cm2_No6 = get_post_data('o_Kg_cm2_No6');
        $o_Kg_cm2_No7 = get_post_data('o_Kg_cm2_No7');
        $Ao_Kg_cm2_No1 = get_post_data('Ao_Kg_cm2_No1');
        $Ao_Kg_cm2_No2 = get_post_data('Ao_Kg_cm2_No2');
        $Ao_Kg_cm2_No3 = get_post_data('Ao_Kg_cm2_No3');
        $Ao_Kg_cm2_No4 = get_post_data('Ao_Kg_cm2_No4');
        $Ao_Kg_cm2_No5 = get_post_data('Ao_Kg_cm2_No5');
        $Ao_Kg_cm2_No6 = get_post_data('Ao_Kg_cm2_No6');
        $Ao_Kg_cm2_No7 = get_post_data('Ao_Kg_cm2_No7');
        $Ah_mm_Col2_No1 = get_post_data('Ah_mm_Col2_No1');
        $Ah_mm_Col2_No2 = get_post_data('Ah_mm_Col2_No2');
        $Ah_mm_Col2_No3 = get_post_data('Ah_mm_Col2_No3');
        $Ah_mm_Col2_No4 = get_post_data('Ah_mm_Col2_No4');
        $Ah_mm_Col2_No5 = get_post_data('Ah_mm_Col2_No5');
        $Ah_mm_Col2_No6 = get_post_data('Ah_mm_Col2_No6');
        $Ah_mm_Col2_No7 = get_post_data('Ah_mm_Col2_No7');
        $Ae_No1 = get_post_data('Ae_No1');
        $Ae_No2 = get_post_data('Ae_No2');
        $Ae_No3 = get_post_data('Ae_No3');
        $Ae_No4 = get_post_data('Ae_No4');
        $Ae_No5 = get_post_data('Ae_No5');
        $Ae_No6 = get_post_data('Ae_No6');
        $Ae_No7 = get_post_data('Ae_No7');
        $e_Col2_No1 = get_post_data('e_Col2_No1');
        $e_Col2_No2 = get_post_data('e_Col2_No2');
        $e_Col2_No3 = get_post_data('e_Col2_No3');
        $e_Col2_No4 = get_post_data('e_Col2_No4');
        $e_Col2_No5 = get_post_data('e_Col2_No5');
        $e_Col2_No6 = get_post_data('e_Col2_No6');
        $e_Col2_No7 = get_post_data('e_Col2_No7');
        $Ae_Ao_cm2_Kg_No1 = get_post_data('Ae_Ao_cm2_Kg_No1');
        $Ae_Ao_cm2_Kg_No2 = get_post_data('Ae_Ao_cm2_Kg_No2');
        $Ae_Ao_cm2_Kg_No3 = get_post_data('Ae_Ao_cm2_Kg_No3');
        $Ae_Ao_cm2_Kg_No4 = get_post_data('Ae_Ao_cm2_Kg_No4');
        $Ae_Ao_cm2_Kg_No5 = get_post_data('Ae_Ao_cm2_Kg_No5');
        $Ae_Ao_cm2_Kg_No6 = get_post_data('Ae_Ao_cm2_Kg_No6');
        $Ae_Ao_cm2_Kg_No7 = get_post_data('Ae_Ao_cm2_Kg_No7');
        $Cv_cm2_Kg_No1 = get_post_data('Cv_cm2_Kg_No1');
        $Cv_cm2_Kg_No2 = get_post_data('Cv_cm2_Kg_No2');
        $Cv_cm2_Kg_No3 = get_post_data('Cv_cm2_Kg_No3');
        $Cv_cm2_Kg_No4 = get_post_data('Cv_cm2_Kg_No4');
        $Cv_cm2_Kg_No5 = get_post_data('Cv_cm2_Kg_No5');
        $Cv_cm2_Kg_No6 = get_post_data('Cv_cm2_Kg_No6');
        $Cv_cm2_Kg_No7 = get_post_data('Cv_cm2_Kg_No7');

        $RegisterBy = $user['name'];

        $sql = "INSERT INTO consolidation (
            Sample_ID, Sample_Number, Structure, Area, Source, Depth_From, Depth_To,
            Material_Type, Sample_Type, North, East, Elev, Sample_Date, Report_Date,
            test_type, Standard, Preparation_Method, Comments, Technician,
            Test_Start_Date,
            Date_No1,
            Date_No2,
            Date_No3,
            Date_No4,
            Date_No5,
            Date_No6,
            Date_No7,
            Date_No8,
            Date_No9,
            Date_No10,
            Date_No11,
            Date_No12,
            Date_No13,
            Date_No14,
            Date_No15,
            Date_No16,
            Name_Mass_on_Hangar_Colum1,
            Mass_on_Hangar_Colum1_No1,
            Mass_on_Hangar_Colum1_No2,
            Mass_on_Hangar_Colum1_No3,
            Mass_on_Hangar_Colum1_No4,
            Mass_on_Hangar_Colum1_No5,
            Mass_on_Hangar_Colum1_No6,
            Mass_on_Hangar_Colum1_No7,
            Mass_on_Hangar_Colum1_No8,
            Mass_on_Hangar_Colum1_No9,
            Mass_on_Hangar_Colum1_No10,
            Mass_on_Hangar_Colum1_No11,
            Mass_on_Hangar_Colum1_No12,
            Mass_on_Hangar_Colum1_No13,
            Mass_on_Hangar_Colum1_No14,
            Mass_on_Hangar_Colum1_No15,
            Mass_on_Hangar_Colum1_No16,
            Name_Mass_on_Hangar_Colum2,
            Mass_on_Hangar_Colum2_No1,
            Mass_on_Hangar_Colum2_No2,
            Mass_on_Hangar_Colum2_No3,
            Mass_on_Hangar_Colum2_No4,
            Mass_on_Hangar_Colum2_No5,
            Mass_on_Hangar_Colum2_No6,
            Mass_on_Hangar_Colum2_No7,
            Mass_on_Hangar_Colum2_No8,
            Mass_on_Hangar_Colum2_No9,
            Mass_on_Hangar_Colum2_No10,
            Mass_on_Hangar_Colum2_No11,
            Mass_on_Hangar_Colum2_No12,
            Mass_on_Hangar_Colum2_No13,
            Mass_on_Hangar_Colum2_No14,
            Mass_on_Hangar_Colum2_No15,
            Mass_on_Hangar_Colum2_No16,
            Name_Mass_on_Hangar_Colum3,
            Mass_on_Hangar_Colum3_No1,
            Mass_on_Hangar_Colum3_No2,
            Mass_on_Hangar_Colum3_No3,
            Mass_on_Hangar_Colum3_No4,
            Mass_on_Hangar_Colum3_No5,
            Mass_on_Hangar_Colum3_No6,
            Mass_on_Hangar_Colum3_No7,
            Mass_on_Hangar_Colum3_No8,
            Mass_on_Hangar_Colum3_No9,
            Mass_on_Hangar_Colum3_No10,
            Mass_on_Hangar_Colum3_No11,
            Mass_on_Hangar_Colum3_No12,
            Mass_on_Hangar_Colum3_No13,
            Mass_on_Hangar_Colum3_No14,
            Mass_on_Hangar_Colum3_No15,
            Mass_on_Hangar_Colum3_No16,
            Name_Mass_on_Hangar_Colum4,
            Mass_on_Hangar_Colum4_No1,
            Mass_on_Hangar_Colum4_No2,
            Mass_on_Hangar_Colum4_No3,
            Mass_on_Hangar_Colum4_No4,
            Mass_on_Hangar_Colum4_No5,
            Mass_on_Hangar_Colum4_No6,
            Mass_on_Hangar_Colum4_No7,
            Mass_on_Hangar_Colum4_No8,
            Mass_on_Hangar_Colum4_No9,
            Mass_on_Hangar_Colum4_No10,
            Mass_on_Hangar_Colum4_No11,
            Mass_on_Hangar_Colum4_No12,
            Mass_on_Hangar_Colum4_No13,
            Mass_on_Hangar_Colum4_No14,
            Mass_on_Hangar_Colum4_No15,
            Mass_on_Hangar_Colum4_No16,
            Name_Mass_on_Hangar_Colum5,
            Mass_on_Hangar_Colum5_No1,
            Mass_on_Hangar_Colum5_No2,
            Mass_on_Hangar_Colum5_No3,
            Mass_on_Hangar_Colum5_No4,
            Mass_on_Hangar_Colum5_No5,
            Mass_on_Hangar_Colum5_No6,
            Mass_on_Hangar_Colum5_No7,
            Mass_on_Hangar_Colum5_No8,
            Mass_on_Hangar_Colum5_No9,
            Mass_on_Hangar_Colum5_No10,
            Mass_on_Hangar_Colum5_No11,
            Mass_on_Hangar_Colum5_No12,
            Mass_on_Hangar_Colum5_No13,
            Mass_on_Hangar_Colum5_No14,
            Mass_on_Hangar_Colum5_No15,
            Mass_on_Hangar_Colum5_No16,
            Name_Mass_on_Hangar_Colum6,
            Mass_on_Hangar_Colum6_No1,
            Mass_on_Hangar_Colum6_No2,
            Mass_on_Hangar_Colum6_No3,
            Mass_on_Hangar_Colum6_No4,
            Mass_on_Hangar_Colum6_No5,
            Mass_on_Hangar_Colum6_No6,
            Mass_on_Hangar_Colum6_No7,
            Mass_on_Hangar_Colum6_No8,
            Mass_on_Hangar_Colum6_No9,
            Mass_on_Hangar_Colum6_No10,
            Mass_on_Hangar_Colum6_No11,
            Mass_on_Hangar_Colum6_No12,
            Mass_on_Hangar_Colum6_No13,
            Mass_on_Hangar_Colum6_No14,
            Mass_on_Hangar_Colum6_No15,
            Mass_on_Hangar_Colum6_No16,
            Tare_No,
            Mass_of_Tare_gr,
            Mass_of_Wet_Soil_Tare_gr,
            Mass_of_Dry_Soil_Tare,
            Mass_of_Water,
            Mass_of_Dry_Soil_gr,
            Initial_Moisture_Conten_Porce_Wfp,
            Diamter_cm,
            Height_cm,
            Area_A_cm2,
            Volume_Vo_cm3,
            Weight_gr,
            Initial_Mois_Mass_Ring_gr,
            Initial_Mois_Mass,
            Final_Dry_Mass_Ring_gr,
            Final_Dry_Mass_gr,
            Initial_Dry_Density_g_cm3,
            Dry_Unit_Weight_Yd_KN_m3,
            Density_of_Water_pW_gr_cm3,
            Specific_Gravity_Gs,
            Dry_Mass_Of_The_Total_Specimen_Md_gr,
            Volume_of_Solids_Vs_cm3,
            Equivalent_Height_of_Solids_Hs_cm,
            Initial_specimen_height_Ho_cm,
            Final_specimen_height_Hf_cm,
            Void_ratio_before_test_Eo,
            Void_ratio_after_test_ef,
            Mass_Weight_of_Tare_gr_Initial,
            Mass_Weight_of_Tare_gr_Final,
            Mass_Weight_Wet_Soil_Tare_gr_Initial,
            Mass_Weight_Wet_Soil_Tare_gr_Final,
            Mass_Weight_Dry_Soil_Tare_gr_Initial,
            Mass_Weight_Dry_Soil_Tare_gr_Final,
            Mass_of_Water_gr_Initial,
            Mass_of_Water_gr_Final,
            Weight_Wet_Soil_gr_Initial,
            Weight_Wet_Soil_gr_Final,
            Weight_Dry_Soil_gr_Initial,
            Weight_Dry_Soil_gr_Final,
            Moisture_Content_Porce_Initial,
            Moisture_Content_Porce_Final,
            Initial_Degree_of_Saturation_Porce,
            Final_Degree_of_Saturation_Porce,
            Loading_Decrements_Name_Kg_No1,
            Loading_Decrements_Name_Kg_No2,
            Loading_Decrements_Name_Kg_No3,
            Loading_Decrements_Name_Kg_No4,
            Loading_Decrements_Value_No1,
            Loading_Decrements_Value_No2,
            Loading_Decrements_Value_No3,
            Loading_Decrements_Value_No4,
            Factor_Dial,
            Load_Incement_Kg_No1,
            Load_Incement_Kg_No2,
            Load_Incement_Kg_No3,
            Load_Incement_Kg_No4,
            Load_Incement_Kg_No5,
            Load_Incement_Kg_No6,
            Load_Incement_Kg_No7,
            Load_Incement_Kg_No8,
            Load_Incement_Kg_No9,
            Load_Incement_Kg_No10,
            Ov_Kg_cm2_No1,
            Ov_Kg_cm2_No2,
            Ov_Kg_cm2_No3,
            Ov_Kg_cm2_No4,
            Ov_Kg_cm2_No5,
            Ov_Kg_cm2_No6,
            Ov_Kg_cm2_No7,
            Ov_Kg_cm2_No8,
            Ov_Kg_cm2_No9,
            Ov_Kg_cm2_No10,
            Reading_Dial_No1,
            Reading_Dial_No2,
            Reading_Dial_No3,
            Reading_Dial_No4,
            Reading_Dial_No5,
            Reading_Dial_No6,
            Reading_Dial_No7,
            Reading_Dial_No8,
            Reading_Dial_No9,
            Reading_Dial_No10,
            AH_mm_No1,
            AH_mm_No2,
            AH_mm_No3,
            AH_mm_No4,
            AH_mm_No5,
            AH_mm_No6,
            AH_mm_No7,
            AH_mm_No8,
            AH_mm_No9,
            AH_mm_No10,
            e_AH_Ho_No1,
            e_AH_Ho_No2,
            e_AH_Ho_No3,
            e_AH_Ho_No4,
            e_AH_Ho_No5,
            e_AH_Ho_No6,
            e_AH_Ho_No7,
            e_AH_Ho_No8,
            e_AH_Ho_No9,
            e_AH_Ho_No10,
            AH_Hs_No1,
            AH_Hs_No2,
            AH_Hs_No3,
            AH_Hs_No4,
            AH_Hs_No5,
            AH_Hs_No6,
            AH_Hs_No7,
            AH_Hs_No8,
            AH_Hs_No9,
            AH_Hs_No10,
            Ov_e_No1,
            Ov_e_No2,
            Ov_e_No3,
            Ov_e_No4,
            Ov_e_No5,
            Ov_e_No6,
            Ov_e_No7,
            Ov_e_No8,
            Ov_e_No9,
            Ov_e_No10,
            e_No1,
            e_No2,
            e_No3,
            e_No4,
            e_No5,
            e_No6,
            e_No7,
            e_No8,
            e_No9,
            e_No10,
            Lectura_Dial_No1,
            Lectura_Dial_No2,
            Lectura_Dial_No3,
            Lectura_Dial_No4,
            Lectura_Dial_No5,
            Lectura_Dial_No6,
            Lectura_Dial_No7,
            Deformacion_cm_No1,
            Deformacion_cm_No2,
            Deformacion_cm_No3,
            Deformacion_cm_No4,
            Deformacion_cm_No5,
            Deformacion_cm_No6,
            Deformacion_cm_No7,
            Peso_Kg_No1,
            Peso_Kg_No2,
            Peso_Kg_No3,
            Peso_Kg_No4,
            Peso_Kg_No5,
            Peso_Kg_No6,
            Peso_Kg_No7,
            o_Kg_cm2_No1,
            o_Kg_cm2_No2,
            o_Kg_cm2_No3,
            o_Kg_cm2_No4,
            o_Kg_cm2_No5,
            o_Kg_cm2_No6,
            o_Kg_cm2_No7,
            Ao_Kg_cm2_No1,
            Ao_Kg_cm2_No2,
            Ao_Kg_cm2_No3,
            Ao_Kg_cm2_No4,
            Ao_Kg_cm2_No5,
            Ao_Kg_cm2_No6,
            Ao_Kg_cm2_No7,
            Ah_mm_Col2_No1,
            Ah_mm_Col2_No2,
            Ah_mm_Col2_No3,
            Ah_mm_Col2_No4,
            Ah_mm_Col2_No5,
            Ah_mm_Col2_No6,
            Ah_mm_Col2_No7,
            Ae_No1,
            Ae_No2,
            Ae_No3,
            Ae_No4,
            Ae_No5,
            Ae_No6,
            Ae_No7,
            e_Col2_No1,
            e_Col2_No2,
            e_Col2_No3,
            e_Col2_No4,
            e_Col2_No5,
            e_Col2_No6,
            e_Col2_No7,
            Ae_Ao_cm2_Kg_No1,
            Ae_Ao_cm2_Kg_No2,
            Ae_Ao_cm2_Kg_No3,
            Ae_Ao_cm2_Kg_No4,
            Ae_Ao_cm2_Kg_No5,
            Ae_Ao_cm2_Kg_No6,
            Ae_Ao_cm2_Kg_No7,
            Cv_cm2_Kg_No1,
            Cv_cm2_Kg_No2,
            Cv_cm2_Kg_No3,
            Cv_cm2_Kg_No4,
            Cv_cm2_Kg_No5,
            Cv_cm2_Kg_No6,
            Cv_cm2_Kg_No7,
            Registered_By

        ) VALUES (
            '$sampleid', '$samplenumber', '$structure', '$area', '$source', '$depthfrom',
            '$depthto', '$materialtype', '$sampletype', '$north', '$east', '$elev',
            '$sampledate', '$reportdate', '$testype', '$Standard', '$PreparationMethod',
            '$Comments', '$Technician', '$TestStartDate',
            '$Date_No1',
            '$Date_No2',
            '$Date_No3',
            '$Date_No4',
            '$Date_No5',
            '$Date_No6',
            '$Date_No7',
            '$Date_No8',
            '$Date_No9',
            '$Date_No10',
            '$Date_No11',
            '$Date_No12',
            '$Date_No13',
            '$Date_No14',
            '$Date_No15',
            '$Date_No16',
            '$Name_Mass_on_Hangar_Colum1',
            '$Mass_on_Hangar_Colum1_No1',
            '$Mass_on_Hangar_Colum1_No2',
            '$Mass_on_Hangar_Colum1_No3',
            '$Mass_on_Hangar_Colum1_No4',
            '$Mass_on_Hangar_Colum1_No5',
            '$Mass_on_Hangar_Colum1_No6',
            '$Mass_on_Hangar_Colum1_No7',
            '$Mass_on_Hangar_Colum1_No8',
            '$Mass_on_Hangar_Colum1_No9',
            '$Mass_on_Hangar_Colum1_No10',
            '$Mass_on_Hangar_Colum1_No11',
            '$Mass_on_Hangar_Colum1_No12',
            '$Mass_on_Hangar_Colum1_No13',
            '$Mass_on_Hangar_Colum1_No14',
            '$Mass_on_Hangar_Colum1_No15',
            '$Mass_on_Hangar_Colum1_No16',
            '$Name_Mass_on_Hangar_Colum2',
            '$Mass_on_Hangar_Colum2_No1',
            '$Mass_on_Hangar_Colum2_No2',
            '$Mass_on_Hangar_Colum2_No3',
            '$Mass_on_Hangar_Colum2_No4',
            '$Mass_on_Hangar_Colum2_No5',
            '$Mass_on_Hangar_Colum2_No6',
            '$Mass_on_Hangar_Colum2_No7',
            '$Mass_on_Hangar_Colum2_No8',
            '$Mass_on_Hangar_Colum2_No9',
            '$Mass_on_Hangar_Colum2_No10',
            '$Mass_on_Hangar_Colum2_No11',
            '$Mass_on_Hangar_Colum2_No12',
            '$Mass_on_Hangar_Colum2_No13',
            '$Mass_on_Hangar_Colum2_No14',
            '$Mass_on_Hangar_Colum2_No15',
            '$Mass_on_Hangar_Colum2_No16',
            '$Name_Mass_on_Hangar_Colum3',
            '$Mass_on_Hangar_Colum3_No1',
            '$Mass_on_Hangar_Colum3_No2',
            '$Mass_on_Hangar_Colum3_No3',
            '$Mass_on_Hangar_Colum3_No4',
            '$Mass_on_Hangar_Colum3_No5',
            '$Mass_on_Hangar_Colum3_No6',
            '$Mass_on_Hangar_Colum3_No7',
            '$Mass_on_Hangar_Colum3_No8',
            '$Mass_on_Hangar_Colum3_No9',
            '$Mass_on_Hangar_Colum3_No10',
            '$Mass_on_Hangar_Colum3_No11',
            '$Mass_on_Hangar_Colum3_No12',
            '$Mass_on_Hangar_Colum3_No13',
            '$Mass_on_Hangar_Colum3_No14',
            '$Mass_on_Hangar_Colum3_No15',
            '$Mass_on_Hangar_Colum3_No16',
            '$Name_Mass_on_Hangar_Colum4',
            '$Mass_on_Hangar_Colum4_No1',
            '$Mass_on_Hangar_Colum4_No2',
            '$Mass_on_Hangar_Colum4_No3',
            '$Mass_on_Hangar_Colum4_No4',
            '$Mass_on_Hangar_Colum4_No5',
            '$Mass_on_Hangar_Colum4_No6',
            '$Mass_on_Hangar_Colum4_No7',
            '$Mass_on_Hangar_Colum4_No8',
            '$Mass_on_Hangar_Colum4_No9',
            '$Mass_on_Hangar_Colum4_No10',
            '$Mass_on_Hangar_Colum4_No11',
            '$Mass_on_Hangar_Colum4_No12',
            '$Mass_on_Hangar_Colum4_No13',
            '$Mass_on_Hangar_Colum4_No14',
            '$Mass_on_Hangar_Colum4_No15',
            '$Mass_on_Hangar_Colum4_No16',
            '$Name_Mass_on_Hangar_Colum5',
            '$Mass_on_Hangar_Colum5_No1',
            '$Mass_on_Hangar_Colum5_No2',
            '$Mass_on_Hangar_Colum5_No3',
            '$Mass_on_Hangar_Colum5_No4',
            '$Mass_on_Hangar_Colum5_No5',
            '$Mass_on_Hangar_Colum5_No6',
            '$Mass_on_Hangar_Colum5_No7',
            '$Mass_on_Hangar_Colum5_No8',
            '$Mass_on_Hangar_Colum5_No9',
            '$Mass_on_Hangar_Colum5_No10',
            '$Mass_on_Hangar_Colum5_No11',
            '$Mass_on_Hangar_Colum5_No12',
            '$Mass_on_Hangar_Colum5_No13',
            '$Mass_on_Hangar_Colum5_No14',
            '$Mass_on_Hangar_Colum5_No15',
            '$Mass_on_Hangar_Colum5_No16',
            '$Name_Mass_on_Hangar_Colum6',
            '$Mass_on_Hangar_Colum6_No1',
            '$Mass_on_Hangar_Colum6_No2',
            '$Mass_on_Hangar_Colum6_No3',
            '$Mass_on_Hangar_Colum6_No4',
            '$Mass_on_Hangar_Colum6_No5',
            '$Mass_on_Hangar_Colum6_No6',
            '$Mass_on_Hangar_Colum6_No7',
            '$Mass_on_Hangar_Colum6_No8',
            '$Mass_on_Hangar_Colum6_No9',
            '$Mass_on_Hangar_Colum6_No10',
            '$Mass_on_Hangar_Colum6_No11',
            '$Mass_on_Hangar_Colum6_No12',
            '$Mass_on_Hangar_Colum6_No13',
            '$Mass_on_Hangar_Colum6_No14',
            '$Mass_on_Hangar_Colum6_No15',
            '$Mass_on_Hangar_Colum6_No16',
            '$Tare_No',
            '$Mass_of_Tare_gr',
            '$Mass_of_Wet_Soil_Tare_gr',
            '$Mass_of_Dry_Soil_Tare',
            '$Mass_of_Water',
            '$Mass_of_Dry_Soil_gr',
            '$Initial_Moisture_Conten_Porce_Wfp',
            '$Diamter_cm',
            '$Height_cm',
            '$Area_A_cm2',
            '$Volume_Vo_cm3',
            '$Weight_gr',
            '$Initial_Mois_Mass_Ring_gr',
            '$Initial_Mois_Mass',
            '$Final_Dry_Mass_Ring_gr',
            '$Final_Dry_Mass_gr',
            '$Initial_Dry_Density_g_cm3',
            '$Dry_Unit_Weight_Yd_KN_m3',
            '$Density_of_Water_pW_gr_cm3',
            '$Specific_Gravity_Gs',
            '$Dry_Mass_Of_The_Total_Specimen_Md_gr',
            '$Volume_of_Solids_Vs_cm3',
            '$Equivalent_Height_of_Solids_Hs_cm',
            '$Initial_specimen_height_Ho_cm',
            '$Final_specimen_height_Hf_cm',
            '$Void_ratio_before_test_Eo',
            '$Void_ratio_after_test_ef',
            '$Mass_Weight_of_Tare_gr_Initial',
            '$Mass_Weight_of_Tare_gr_Final',
            '$Mass_Weight_Wet_Soil_Tare_gr_Initial',
            '$Mass_Weight_Wet_Soil_Tare_gr_Final',
            '$Mass_Weight_Dry_Soil_Tare_gr_Initial',
            '$Mass_Weight_Dry_Soil_Tare_gr_Final',
            '$Mass_of_Water_gr_Initial',
            '$Mass_of_Water_gr_Final',
            '$Weight_Wet_Soil_gr_Initial',
            '$Weight_Wet_Soil_gr_Final',
            '$Weight_Dry_Soil_gr_Initial',
            '$Weight_Dry_Soil_gr_Final',
            '$Moisture_Content_Porce_Initial',
            '$Moisture_Content_Porce_Final',
            '$Initial_Degree_of_Saturation_Porce',
            '$Final_Degree_of_Saturation_Porce',
            '$Loading_Decrements_Name_Kg_No1',
            '$Loading_Decrements_Name_Kg_No2',
            '$Loading_Decrements_Name_Kg_No3',
            '$Loading_Decrements_Name_Kg_No4',
            '$Loading_Decrements_Value_No1',
            '$Loading_Decrements_Value_No2',
            '$Loading_Decrements_Value_No3',
            '$Loading_Decrements_Value_No4',
            '$Factor_Dial',
            '$Load_Incement_Kg_No1',
            '$Load_Incement_Kg_No2',
            '$Load_Incement_Kg_No3',
            '$Load_Incement_Kg_No4',
            '$Load_Incement_Kg_No5',
            '$Load_Incement_Kg_No6',
            '$Load_Incement_Kg_No7',
            '$Load_Incement_Kg_No8',
            '$Load_Incement_Kg_No9',
            '$Load_Incement_Kg_No10',
            '$Ov_Kg_cm2_No1',
            '$Ov_Kg_cm2_No2',
            '$Ov_Kg_cm2_No3',
            '$Ov_Kg_cm2_No4',
            '$Ov_Kg_cm2_No5',
            '$Ov_Kg_cm2_No6',
            '$Ov_Kg_cm2_No7',
            '$Ov_Kg_cm2_No8',
            '$Ov_Kg_cm2_No9',
            '$Ov_Kg_cm2_No10',
            '$Reading_Dial_No1',
            '$Reading_Dial_No2',
            '$Reading_Dial_No3',
            '$Reading_Dial_No4',
            '$Reading_Dial_No5',
            '$Reading_Dial_No6',
            '$Reading_Dial_No7',
            '$Reading_Dial_No8',
            '$Reading_Dial_No9',
            '$Reading_Dial_No10',
            '$AH_mm_No1',
            '$AH_mm_No2',
            '$AH_mm_No3',
            '$AH_mm_No4',
            '$AH_mm_No5',
            '$AH_mm_No6',
            '$AH_mm_No7',
            '$AH_mm_No8',
            '$AH_mm_No9',
            '$AH_mm_No10',
            '$e_AH_Ho_No1',
            '$e_AH_Ho_No2',
            '$e_AH_Ho_No3',
            '$e_AH_Ho_No4',
            '$e_AH_Ho_No5',
            '$e_AH_Ho_No6',
            '$e_AH_Ho_No7',
            '$e_AH_Ho_No8',
            '$e_AH_Ho_No9',
            '$e_AH_Ho_No10',
            '$AH_Hs_No1',
            '$AH_Hs_No2',
            '$AH_Hs_No3',
            '$AH_Hs_No4',
            '$AH_Hs_No5',
            '$AH_Hs_No6',
            '$AH_Hs_No7',
            '$AH_Hs_No8',
            '$AH_Hs_No9',
            '$AH_Hs_No10',
            '$Ov_e_No1',
            '$Ov_e_No2',
            '$Ov_e_No3',
            '$Ov_e_No4',
            '$Ov_e_No5',
            '$Ov_e_No6',
            '$Ov_e_No7',
            '$Ov_e_No8',
            '$Ov_e_No9',
            '$Ov_e_No10',
            '$e_No1',
            '$e_No2',
            '$e_No3',
            '$e_No4',
            '$e_No5',
            '$e_No6',
            '$e_No7',
            '$e_No8',
            '$e_No9',
            '$e_No10',
            '$Lectura_Dial_No1',
            '$Lectura_Dial_No2',
            '$Lectura_Dial_No3',
            '$Lectura_Dial_No4',
            '$Lectura_Dial_No5',
            '$Lectura_Dial_No6',
            '$Lectura_Dial_No7',
            '$Deformacion_cm_No1',
            '$Deformacion_cm_No2',
            '$Deformacion_cm_No3',
            '$Deformacion_cm_No4',
            '$Deformacion_cm_No5',
            '$Deformacion_cm_No6',
            '$Deformacion_cm_No7',
            '$Peso_Kg_No1',
            '$Peso_Kg_No2',
            '$Peso_Kg_No3',
            '$Peso_Kg_No4',
            '$Peso_Kg_No5',
            '$Peso_Kg_No6',
            '$Peso_Kg_No7',
            '$o_Kg_cm2_No1',
            '$o_Kg_cm2_No2',
            '$o_Kg_cm2_No3',
            '$o_Kg_cm2_No4',
            '$o_Kg_cm2_No5',
            '$o_Kg_cm2_No6',
            '$o_Kg_cm2_No7',
            '$Ao_Kg_cm2_No1',
            '$Ao_Kg_cm2_No2',
            '$Ao_Kg_cm2_No3',
            '$Ao_Kg_cm2_No4',
            '$Ao_Kg_cm2_No5',
            '$Ao_Kg_cm2_No6',
            '$Ao_Kg_cm2_No7',
            '$Ah_mm_Col2_No1',
            '$Ah_mm_Col2_No2',
            '$Ah_mm_Col2_No3',
            '$Ah_mm_Col2_No4',
            '$Ah_mm_Col2_No5',
            '$Ah_mm_Col2_No6',
            '$Ah_mm_Col2_No7',
            '$Ae_No1',
            '$Ae_No2',
            '$Ae_No3',
            '$Ae_No4',
            '$Ae_No5',
            '$Ae_No6',
            '$Ae_No7',
            '$e_Col2_No1',
            '$e_Col2_No2',
            '$e_Col2_No3',
            '$e_Col2_No4',
            '$e_Col2_No5',
            '$e_Col2_No6',
            '$e_Col2_No7',
            '$Ae_Ao_cm2_Kg_No1',
            '$Ae_Ao_cm2_Kg_No2',
            '$Ae_Ao_cm2_Kg_No3',
            '$Ae_Ao_cm2_Kg_No4',
            '$Ae_Ao_cm2_Kg_No5',
            '$Ae_Ao_cm2_Kg_No6',
            '$Ae_Ao_cm2_Kg_No7',
            '$Cv_cm2_Kg_No1',
            '$Cv_cm2_Kg_No2',
            '$Cv_cm2_Kg_No3',
            '$Cv_cm2_Kg_No4',
            '$Cv_cm2_Kg_No5',
            '$Cv_cm2_Kg_No6',
            '$Cv_cm2_Kg_No7',
            '$RegisterBy'
            
        )";

        if ($db->query($sql)) {
            $session->msg('s', "Ensayo agregado exitosamente.");
            redirect('./consolidation.php', false);
        } else {
            $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
            redirect('./consolidation.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('./consolidation.php', false);
    }
}

?>

<?php
$search_table = find_by_id('consolidation', (int)$_GET['id']);
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

      $Date_No1 = get_post_data('Date_No1');
      $Date_No2 = get_post_data('Date_No2');
      $Date_No3 = get_post_data('Date_No3');
      $Date_No4 = get_post_data('Date_No4');
      $Date_No5 = get_post_data('Date_No5');
      $Date_No6 = get_post_data('Date_No6');
      $Date_No7 = get_post_data('Date_No7');
      $Date_No8 = get_post_data('Date_No8');
      $Date_No9 = get_post_data('Date_No9');
      $Date_No10 = get_post_data('Date_No10');
      $Date_No11 = get_post_data('Date_No11');
      $Date_No12 = get_post_data('Date_No12');
      $Date_No13 = get_post_data('Date_No13');
      $Date_No14 = get_post_data('Date_No14');
      $Date_No15 = get_post_data('Date_No15');
      $Date_No16 = get_post_data('Date_No16');
      $Name_Mass_on_Hangar_Colum1 = get_post_data('Name_Mass_on_Hangar_Colum1');
      $Mass_on_Hangar_Colum1_No1 = get_post_data('Mass_on_Hangar_Colum1_No1');
      $Mass_on_Hangar_Colum1_No2 = get_post_data('Mass_on_Hangar_Colum1_No2');
      $Mass_on_Hangar_Colum1_No3 = get_post_data('Mass_on_Hangar_Colum1_No3');
      $Mass_on_Hangar_Colum1_No4 = get_post_data('Mass_on_Hangar_Colum1_No4');
      $Mass_on_Hangar_Colum1_No5 = get_post_data('Mass_on_Hangar_Colum1_No5');
      $Mass_on_Hangar_Colum1_No6 = get_post_data('Mass_on_Hangar_Colum1_No6');
      $Mass_on_Hangar_Colum1_No7 = get_post_data('Mass_on_Hangar_Colum1_No7');
      $Mass_on_Hangar_Colum1_No8 = get_post_data('Mass_on_Hangar_Colum1_No8');
      $Mass_on_Hangar_Colum1_No9 = get_post_data('Mass_on_Hangar_Colum1_No9');
      $Mass_on_Hangar_Colum1_No10 = get_post_data('Mass_on_Hangar_Colum1_No10');
      $Mass_on_Hangar_Colum1_No11 = get_post_data('Mass_on_Hangar_Colum1_No11');
      $Mass_on_Hangar_Colum1_No12 = get_post_data('Mass_on_Hangar_Colum1_No12');
      $Mass_on_Hangar_Colum1_No13 = get_post_data('Mass_on_Hangar_Colum1_No13');
      $Mass_on_Hangar_Colum1_No14 = get_post_data('Mass_on_Hangar_Colum1_No14');
      $Mass_on_Hangar_Colum1_No15 = get_post_data('Mass_on_Hangar_Colum1_No15');
      $Mass_on_Hangar_Colum1_No16 = get_post_data('Mass_on_Hangar_Colum1_No16');
      $Name_Mass_on_Hangar_Colum2 = get_post_data('Name_Mass_on_Hangar_Colum2');
      $Mass_on_Hangar_Colum2_No1 = get_post_data('Mass_on_Hangar_Colum2_No1');
      $Mass_on_Hangar_Colum2_No2 = get_post_data('Mass_on_Hangar_Colum2_No2');
      $Mass_on_Hangar_Colum2_No3 = get_post_data('Mass_on_Hangar_Colum2_No3');
      $Mass_on_Hangar_Colum2_No4 = get_post_data('Mass_on_Hangar_Colum2_No4');
      $Mass_on_Hangar_Colum2_No5 = get_post_data('Mass_on_Hangar_Colum2_No5');
      $Mass_on_Hangar_Colum2_No6 = get_post_data('Mass_on_Hangar_Colum2_No6');
      $Mass_on_Hangar_Colum2_No7 = get_post_data('Mass_on_Hangar_Colum2_No7');
      $Mass_on_Hangar_Colum2_No8 = get_post_data('Mass_on_Hangar_Colum2_No8');
      $Mass_on_Hangar_Colum2_No9 = get_post_data('Mass_on_Hangar_Colum2_No9');
      $Mass_on_Hangar_Colum2_No10 = get_post_data('Mass_on_Hangar_Colum2_No10');
      $Mass_on_Hangar_Colum2_No11 = get_post_data('Mass_on_Hangar_Colum2_No11');
      $Mass_on_Hangar_Colum2_No12 = get_post_data('Mass_on_Hangar_Colum2_No12');
      $Mass_on_Hangar_Colum2_No13 = get_post_data('Mass_on_Hangar_Colum2_No13');
      $Mass_on_Hangar_Colum2_No14 = get_post_data('Mass_on_Hangar_Colum2_No14');
      $Mass_on_Hangar_Colum2_No15 = get_post_data('Mass_on_Hangar_Colum2_No15');
      $Mass_on_Hangar_Colum2_No16 = get_post_data('Mass_on_Hangar_Colum2_No16');
      $Name_Mass_on_Hangar_Colum3 = get_post_data('Name_Mass_on_Hangar_Colum3');
      $Mass_on_Hangar_Colum3_No1 = get_post_data('Mass_on_Hangar_Colum3_No1');
      $Mass_on_Hangar_Colum3_No2 = get_post_data('Mass_on_Hangar_Colum3_No2');
      $Mass_on_Hangar_Colum3_No3 = get_post_data('Mass_on_Hangar_Colum3_No3');
      $Mass_on_Hangar_Colum3_No4 = get_post_data('Mass_on_Hangar_Colum3_No4');
      $Mass_on_Hangar_Colum3_No5 = get_post_data('Mass_on_Hangar_Colum3_No5');
      $Mass_on_Hangar_Colum3_No6 = get_post_data('Mass_on_Hangar_Colum3_No6');
      $Mass_on_Hangar_Colum3_No7 = get_post_data('Mass_on_Hangar_Colum3_No7');
      $Mass_on_Hangar_Colum3_No8 = get_post_data('Mass_on_Hangar_Colum3_No8');
      $Mass_on_Hangar_Colum3_No9 = get_post_data('Mass_on_Hangar_Colum3_No9');
      $Mass_on_Hangar_Colum3_No10 = get_post_data('Mass_on_Hangar_Colum3_No10');
      $Mass_on_Hangar_Colum3_No11 = get_post_data('Mass_on_Hangar_Colum3_No11');
      $Mass_on_Hangar_Colum3_No12 = get_post_data('Mass_on_Hangar_Colum3_No12');
      $Mass_on_Hangar_Colum3_No13 = get_post_data('Mass_on_Hangar_Colum3_No13');
      $Mass_on_Hangar_Colum3_No14 = get_post_data('Mass_on_Hangar_Colum3_No14');
      $Mass_on_Hangar_Colum3_No15 = get_post_data('Mass_on_Hangar_Colum3_No15');
      $Mass_on_Hangar_Colum3_No16 = get_post_data('Mass_on_Hangar_Colum3_No16');
      $Name_Mass_on_Hangar_Colum4 = get_post_data('Name_Mass_on_Hangar_Colum4');
      $Mass_on_Hangar_Colum4_No1 = get_post_data('Mass_on_Hangar_Colum4_No1');
      $Mass_on_Hangar_Colum4_No2 = get_post_data('Mass_on_Hangar_Colum4_No2');
      $Mass_on_Hangar_Colum4_No3 = get_post_data('Mass_on_Hangar_Colum4_No3');
      $Mass_on_Hangar_Colum4_No4 = get_post_data('Mass_on_Hangar_Colum4_No4');
      $Mass_on_Hangar_Colum4_No5 = get_post_data('Mass_on_Hangar_Colum4_No5');
      $Mass_on_Hangar_Colum4_No6 = get_post_data('Mass_on_Hangar_Colum4_No6');
      $Mass_on_Hangar_Colum4_No7 = get_post_data('Mass_on_Hangar_Colum4_No7');
      $Mass_on_Hangar_Colum4_No8 = get_post_data('Mass_on_Hangar_Colum4_No8');
      $Mass_on_Hangar_Colum4_No9 = get_post_data('Mass_on_Hangar_Colum4_No9');
      $Mass_on_Hangar_Colum4_No10 = get_post_data('Mass_on_Hangar_Colum4_No10');
      $Mass_on_Hangar_Colum4_No11 = get_post_data('Mass_on_Hangar_Colum4_No11');
      $Mass_on_Hangar_Colum4_No12 = get_post_data('Mass_on_Hangar_Colum4_No12');
      $Mass_on_Hangar_Colum4_No13 = get_post_data('Mass_on_Hangar_Colum4_No13');
      $Mass_on_Hangar_Colum4_No14 = get_post_data('Mass_on_Hangar_Colum4_No14');
      $Mass_on_Hangar_Colum4_No15 = get_post_data('Mass_on_Hangar_Colum4_No15');
      $Mass_on_Hangar_Colum4_No16 = get_post_data('Mass_on_Hangar_Colum4_No16');
      $Name_Mass_on_Hangar_Colum5 = get_post_data('Name_Mass_on_Hangar_Colum5');
      $Mass_on_Hangar_Colum5_No1 = get_post_data('Mass_on_Hangar_Colum5_No1');
      $Mass_on_Hangar_Colum5_No2 = get_post_data('Mass_on_Hangar_Colum5_No2');
      $Mass_on_Hangar_Colum5_No3 = get_post_data('Mass_on_Hangar_Colum5_No3');
      $Mass_on_Hangar_Colum5_No4 = get_post_data('Mass_on_Hangar_Colum5_No4');
      $Mass_on_Hangar_Colum5_No5 = get_post_data('Mass_on_Hangar_Colum5_No5');
      $Mass_on_Hangar_Colum5_No6 = get_post_data('Mass_on_Hangar_Colum5_No6');
      $Mass_on_Hangar_Colum5_No7 = get_post_data('Mass_on_Hangar_Colum5_No7');
      $Mass_on_Hangar_Colum5_No8 = get_post_data('Mass_on_Hangar_Colum5_No8');
      $Mass_on_Hangar_Colum5_No9 = get_post_data('Mass_on_Hangar_Colum5_No9');
      $Mass_on_Hangar_Colum5_No10 = get_post_data('Mass_on_Hangar_Colum5_No10');
      $Mass_on_Hangar_Colum5_No11 = get_post_data('Mass_on_Hangar_Colum5_No11');
      $Mass_on_Hangar_Colum5_No12 = get_post_data('Mass_on_Hangar_Colum5_No12');
      $Mass_on_Hangar_Colum5_No13 = get_post_data('Mass_on_Hangar_Colum5_No13');
      $Mass_on_Hangar_Colum5_No14 = get_post_data('Mass_on_Hangar_Colum5_No14');
      $Mass_on_Hangar_Colum5_No15 = get_post_data('Mass_on_Hangar_Colum5_No15');
      $Mass_on_Hangar_Colum5_No16 = get_post_data('Mass_on_Hangar_Colum5_No16');
      $Name_Mass_on_Hangar_Colum6 = get_post_data('Name_Mass_on_Hangar_Colum6');
      $Mass_on_Hangar_Colum6_No1 = get_post_data('Mass_on_Hangar_Colum6_No1');
      $Mass_on_Hangar_Colum6_No2 = get_post_data('Mass_on_Hangar_Colum6_No2');
      $Mass_on_Hangar_Colum6_No3 = get_post_data('Mass_on_Hangar_Colum6_No3');
      $Mass_on_Hangar_Colum6_No4 = get_post_data('Mass_on_Hangar_Colum6_No4');
      $Mass_on_Hangar_Colum6_No5 = get_post_data('Mass_on_Hangar_Colum6_No5');
      $Mass_on_Hangar_Colum6_No6 = get_post_data('Mass_on_Hangar_Colum6_No6');
      $Mass_on_Hangar_Colum6_No7 = get_post_data('Mass_on_Hangar_Colum6_No7');
      $Mass_on_Hangar_Colum6_No8 = get_post_data('Mass_on_Hangar_Colum6_No8');
      $Mass_on_Hangar_Colum6_No9 = get_post_data('Mass_on_Hangar_Colum6_No9');
      $Mass_on_Hangar_Colum6_No10 = get_post_data('Mass_on_Hangar_Colum6_No10');
      $Mass_on_Hangar_Colum6_No11 = get_post_data('Mass_on_Hangar_Colum6_No11');
      $Mass_on_Hangar_Colum6_No12 = get_post_data('Mass_on_Hangar_Colum6_No12');
      $Mass_on_Hangar_Colum6_No13 = get_post_data('Mass_on_Hangar_Colum6_No13');
      $Mass_on_Hangar_Colum6_No14 = get_post_data('Mass_on_Hangar_Colum6_No14');
      $Mass_on_Hangar_Colum6_No15 = get_post_data('Mass_on_Hangar_Colum6_No15');
      $Mass_on_Hangar_Colum6_No16 = get_post_data('Mass_on_Hangar_Colum6_No16');
      $Tare_No = get_post_data('Tare_No');
      $Mass_of_Tare_gr = get_post_data('Mass_of_Tare_gr');
      $Mass_of_Wet_Soil_Tare_gr = get_post_data('Mass_of_Wet_Soil_Tare_gr');
      $Mass_of_Dry_Soil_Tare = get_post_data('Mass_of_Dry_Soil_Tare');
      $Mass_of_Water = get_post_data('Mass_of_Water');
      $Mass_of_Dry_Soil_gr = get_post_data('Mass_of_Dry_Soil_gr');
      $Initial_Moisture_Conten_Porce_Wfp = get_post_data('Initial_Moisture_Conten_Porce_Wfp');
      $Diamter_cm = get_post_data('Diamter_cm');
      $Height_cm = get_post_data('Height_cm');
      $Area_A_cm2 = get_post_data('Area_A_cm2');
      $Volume_Vo_cm3 = get_post_data('Volume_Vo_cm3');
      $Weight_gr = get_post_data('Weight_gr');
      $Initial_Mois_Mass_Ring_gr = get_post_data('Initial_Mois_Mass_Ring_gr');
      $Initial_Mois_Mass = get_post_data('Initial_Mois_Mass');
      $Final_Dry_Mass_Ring_gr = get_post_data('Final_Dry_Mass_Ring_gr');
      $Final_Dry_Mass_gr = get_post_data('Final_Dry_Mass_gr');
      $Initial_Dry_Density_g_cm3 = get_post_data('Initial_Dry_Density_g_cm3');
      $Dry_Unit_Weight_Yd_KN_m3 = get_post_data('Dry_Unit_Weight_Yd_KN_m3');
      $Density_of_Water_pW_gr_cm3 = get_post_data('Density_of_Water_pW_gr_cm3');
      $Specific_Gravity_Gs = get_post_data('Specific_Gravity_Gs');
      $Dry_Mass_Of_The_Total_Specimen_Md_gr = get_post_data('Dry_Mass_Of_The_Total_Specimen_Md_gr');
      $Volume_of_Solids_Vs_cm3 = get_post_data('Volume_of_Solids_Vs_cm3');
      $Equivalent_Height_of_Solids_Hs_cm = get_post_data('Equivalent_Height_of_Solids_Hs_cm');
      $Initial_specimen_height_Ho_cm = get_post_data('Initial_specimen_height_Ho_cm');
      $Final_specimen_height_Hf_cm = get_post_data('Final_specimen_height_Hf_cm');
      $Void_ratio_before_test_Eo = get_post_data('Void_ratio_before_test_Eo');
      $Void_ratio_after_test_ef = get_post_data('Void_ratio_after_test_ef');
      $Mass_Weight_of_Tare_gr_Initial = get_post_data('Mass_Weight_of_Tare_gr_Initial');
      $Mass_Weight_of_Tare_gr_Final = get_post_data('Mass_Weight_of_Tare_gr_Final');
      $Mass_Weight_Wet_Soil_Tare_gr_Initial = get_post_data('Mass_Weight_Wet_Soil_Tare_gr_Initial');
      $Mass_Weight_Wet_Soil_Tare_gr_Final = get_post_data('Mass_Weight_Wet_Soil_Tare_gr_Final');
      $Mass_Weight_Dry_Soil_Tare_gr_Initial = get_post_data('Mass_Weight_Dry_Soil_Tare_gr_Initial');
      $Mass_Weight_Dry_Soil_Tare_gr_Final = get_post_data('Mass_Weight_Dry_Soil_Tare_gr_Final');
      $Mass_of_Water_gr_Initial = get_post_data('Mass_of_Water_gr_Initial');
      $Mass_of_Water_gr_Final = get_post_data('Mass_of_Water_gr_Final');
      $Weight_Wet_Soil_gr_Initial = get_post_data('Weight_Wet_Soil_gr_Initial');
      $Weight_Wet_Soil_gr_Final = get_post_data('Weight_Wet_Soil_gr_Final');
      $Weight_Dry_Soil_gr_Initial = get_post_data('Weight_Dry_Soil_gr_Initial');
      $Weight_Dry_Soil_gr_Final = get_post_data('Weight_Dry_Soil_gr_Final');
      $Moisture_Content_Porce_Initial = get_post_data('Moisture_Content_Porce_Initial');
      $Moisture_Content_Porce_Final = get_post_data('Moisture_Content_Porce_Final');
      $Initial_Degree_of_Saturation_Porce = get_post_data('Initial_Degree_of_Saturation_Porce');
      $Final_Degree_of_Saturation_Porce = get_post_data('Final_Degree_of_Saturation_Porce');
      $Loading_Decrements_Name_Kg_No1 = get_post_data('Loading_Decrements_Name_Kg_No1');
      $Loading_Decrements_Name_Kg_No2 = get_post_data('Loading_Decrements_Name_Kg_No2');
      $Loading_Decrements_Name_Kg_No3 = get_post_data('Loading_Decrements_Name_Kg_No3');
      $Loading_Decrements_Name_Kg_No4 = get_post_data('Loading_Decrements_Name_Kg_No4');
      $Loading_Decrements_Value_No1 = get_post_data('Loading_Decrements_Value_No1');
      $Loading_Decrements_Value_No2 = get_post_data('Loading_Decrements_Value_No2');
      $Loading_Decrements_Value_No3 = get_post_data('Loading_Decrements_Value_No3');
      $Loading_Decrements_Value_No4 = get_post_data('Loading_Decrements_Value_No4');
      $Factor_Dial = get_post_data('Factor_Dial');
      $Load_Incement_Kg_No1 = get_post_data('Load_Increment_Kg_No1');
      $Load_Incement_Kg_No2 = get_post_data('Load_Increment_Kg_No2');
      $Load_Incement_Kg_No3 = get_post_data('Load_Increment_Kg_No3');
      $Load_Incement_Kg_No4 = get_post_data('Load_Increment_Kg_No4');
      $Load_Incement_Kg_No5 = get_post_data('Load_Increment_Kg_No5');
      $Load_Incement_Kg_No6 = get_post_data('Load_Increment_Kg_No6');
      $Load_Incement_Kg_No7 = get_post_data('Load_Increment_Kg_No7');
      $Load_Incement_Kg_No8 = get_post_data('Load_Increment_Kg_No8');
      $Load_Incement_Kg_No9 = get_post_data('Load_Increment_Kg_No9');
      $Load_Incement_Kg_No10 = get_post_data('Load_Increment_Kg_No10');
      $Ov_Kg_cm2_No1 = get_post_data('Ov_Kg_cm2_No1');
      $Ov_Kg_cm2_No2 = get_post_data('Ov_Kg_cm2_No2');
      $Ov_Kg_cm2_No3 = get_post_data('Ov_Kg_cm2_No3');
      $Ov_Kg_cm2_No4 = get_post_data('Ov_Kg_cm2_No4');
      $Ov_Kg_cm2_No5 = get_post_data('Ov_Kg_cm2_No5');
      $Ov_Kg_cm2_No6 = get_post_data('Ov_Kg_cm2_No6');
      $Ov_Kg_cm2_No7 = get_post_data('Ov_Kg_cm2_No7');
      $Ov_Kg_cm2_No8 = get_post_data('Ov_Kg_cm2_No8');
      $Ov_Kg_cm2_No9 = get_post_data('Ov_Kg_cm2_No9');
      $Ov_Kg_cm2_No10 = get_post_data('Ov_Kg_cm2_No10');
      $Reading_Dial_No1 = get_post_data('Reading_Dial_No1');
      $Reading_Dial_No2 = get_post_data('Reading_Dial_No2');
      $Reading_Dial_No3 = get_post_data('Reading_Dial_No3');
      $Reading_Dial_No4 = get_post_data('Reading_Dial_No4');
      $Reading_Dial_No5 = get_post_data('Reading_Dial_No5');
      $Reading_Dial_No6 = get_post_data('Reading_Dial_No6');
      $Reading_Dial_No7 = get_post_data('Reading_Dial_No7');
      $Reading_Dial_No8 = get_post_data('Reading_Dial_No8');
      $Reading_Dial_No9 = get_post_data('Reading_Dial_No9');
      $Reading_Dial_No10 = get_post_data('Reading_Dial_No10');
      $AH_mm_No1 = get_post_data('AH_mm_No1');
      $AH_mm_No2 = get_post_data('AH_mm_No2');
      $AH_mm_No3 = get_post_data('AH_mm_No3');
      $AH_mm_No4 = get_post_data('AH_mm_No4');
      $AH_mm_No5 = get_post_data('AH_mm_No5');
      $AH_mm_No6 = get_post_data('AH_mm_No6');
      $AH_mm_No7 = get_post_data('AH_mm_No7');
      $AH_mm_No8 = get_post_data('AH_mm_No8');
      $AH_mm_No9 = get_post_data('AH_mm_No9');
      $AH_mm_No10 = get_post_data('AH_mm_No10');
      $e_AH_Ho_No1 = get_post_data('e_AH_Ho_No1');
      $e_AH_Ho_No2 = get_post_data('e_AH_Ho_No2');
      $e_AH_Ho_No3 = get_post_data('e_AH_Ho_No3');
      $e_AH_Ho_No4 = get_post_data('e_AH_Ho_No4');
      $e_AH_Ho_No5 = get_post_data('e_AH_Ho_No5');
      $e_AH_Ho_No6 = get_post_data('e_AH_Ho_No6');
      $e_AH_Ho_No7 = get_post_data('e_AH_Ho_No7');
      $e_AH_Ho_No8 = get_post_data('e_AH_Ho_No8');
      $e_AH_Ho_No9 = get_post_data('e_AH_Ho_No9');
      $e_AH_Ho_No10 = get_post_data('e_AH_Ho_No10');
      $AH_Hs_No1 = get_post_data('AH_Hs_No1');
      $AH_Hs_No2 = get_post_data('AH_Hs_No2');
      $AH_Hs_No3 = get_post_data('AH_Hs_No3');
      $AH_Hs_No4 = get_post_data('AH_Hs_No4');
      $AH_Hs_No5 = get_post_data('AH_Hs_No5');
      $AH_Hs_No6 = get_post_data('AH_Hs_No6');
      $AH_Hs_No7 = get_post_data('AH_Hs_No7');
      $AH_Hs_No8 = get_post_data('AH_Hs_No8');
      $AH_Hs_No9 = get_post_data('AH_Hs_No9');
      $AH_Hs_No10 = get_post_data('AH_Hs_No10');
      $Ov_e_No1 = get_post_data('Ov_e_No1');
      $Ov_e_No2 = get_post_data('Ov_e_No2');
      $Ov_e_No3 = get_post_data('Ov_e_No3');
      $Ov_e_No4 = get_post_data('Ov_e_No4');
      $Ov_e_No5 = get_post_data('Ov_e_No5');
      $Ov_e_No6 = get_post_data('Ov_e_No6');
      $Ov_e_No7 = get_post_data('Ov_e_No7');
      $Ov_e_No8 = get_post_data('Ov_e_No8');
      $Ov_e_No9 = get_post_data('Ov_e_No9');
      $Ov_e_No10 = get_post_data('Ov_e_No10');
      $e_No1 = get_post_data('e_No1');
      $e_No2 = get_post_data('e_No2');
      $e_No3 = get_post_data('e_No3');
      $e_No4 = get_post_data('e_No4');
      $e_No5 = get_post_data('e_No5');
      $e_No6 = get_post_data('e_No6');
      $e_No7 = get_post_data('e_No7');
      $e_No8 = get_post_data('e_No8');
      $e_No9 = get_post_data('e_No9');
      $e_No10 = get_post_data('e_No10');
      $Lectura_Dial_No1 = get_post_data('Lectura_Dial_No1');
      $Lectura_Dial_No2 = get_post_data('Lectura_Dial_No2');
      $Lectura_Dial_No3 = get_post_data('Lectura_Dial_No3');
      $Lectura_Dial_No4 = get_post_data('Lectura_Dial_No4');
      $Lectura_Dial_No5 = get_post_data('Lectura_Dial_No5');
      $Lectura_Dial_No6 = get_post_data('Lectura_Dial_No6');
      $Lectura_Dial_No7 = get_post_data('Lectura_Dial_No7');
      $Deformacion_cm_No1 = get_post_data('Deformacion_cm_No1');
      $Deformacion_cm_No2 = get_post_data('Deformacion_cm_No2');
      $Deformacion_cm_No3 = get_post_data('Deformacion_cm_No3');
      $Deformacion_cm_No4 = get_post_data('Deformacion_cm_No4');
      $Deformacion_cm_No5 = get_post_data('Deformacion_cm_No5');
      $Deformacion_cm_No6 = get_post_data('Deformacion_cm_No6');
      $Deformacion_cm_No7 = get_post_data('Deformacion_cm_No7');
      $Peso_Kg_No1 = get_post_data('Peso_Kg_No1');
      $Peso_Kg_No2 = get_post_data('Peso_Kg_No2');
      $Peso_Kg_No3 = get_post_data('Peso_Kg_No3');
      $Peso_Kg_No4 = get_post_data('Peso_Kg_No4');
      $Peso_Kg_No5 = get_post_data('Peso_Kg_No5');
      $Peso_Kg_No6 = get_post_data('Peso_Kg_No6');
      $Peso_Kg_No7 = get_post_data('Peso_Kg_No7');
      $o_Kg_cm2_No1 = get_post_data('o_Kg_cm2_No1');
      $o_Kg_cm2_No2 = get_post_data('o_Kg_cm2_No2');
      $o_Kg_cm2_No3 = get_post_data('o_Kg_cm2_No3');
      $o_Kg_cm2_No4 = get_post_data('o_Kg_cm2_No4');
      $o_Kg_cm2_No5 = get_post_data('o_Kg_cm2_No5');
      $o_Kg_cm2_No6 = get_post_data('o_Kg_cm2_No6');
      $o_Kg_cm2_No7 = get_post_data('o_Kg_cm2_No7');
      $Ao_Kg_cm2_No1 = get_post_data('Ao_Kg_cm2_No1');
      $Ao_Kg_cm2_No2 = get_post_data('Ao_Kg_cm2_No2');
      $Ao_Kg_cm2_No3 = get_post_data('Ao_Kg_cm2_No3');
      $Ao_Kg_cm2_No4 = get_post_data('Ao_Kg_cm2_No4');
      $Ao_Kg_cm2_No5 = get_post_data('Ao_Kg_cm2_No5');
      $Ao_Kg_cm2_No6 = get_post_data('Ao_Kg_cm2_No6');
      $Ao_Kg_cm2_No7 = get_post_data('Ao_Kg_cm2_No7');
      $Ah_mm_Col2_No1 = get_post_data('Ah_mm_Col2_No1');
      $Ah_mm_Col2_No2 = get_post_data('Ah_mm_Col2_No2');
      $Ah_mm_Col2_No3 = get_post_data('Ah_mm_Col2_No3');
      $Ah_mm_Col2_No4 = get_post_data('Ah_mm_Col2_No4');
      $Ah_mm_Col2_No5 = get_post_data('Ah_mm_Col2_No5');
      $Ah_mm_Col2_No6 = get_post_data('Ah_mm_Col2_No6');
      $Ah_mm_Col2_No7 = get_post_data('Ah_mm_Col2_No7');
      $Ae_No1 = get_post_data('Ae_No1');
      $Ae_No2 = get_post_data('Ae_No2');
      $Ae_No3 = get_post_data('Ae_No3');
      $Ae_No4 = get_post_data('Ae_No4');
      $Ae_No5 = get_post_data('Ae_No5');
      $Ae_No6 = get_post_data('Ae_No6');
      $Ae_No7 = get_post_data('Ae_No7');
      $e_Col2_No1 = get_post_data('e_Col2_No1');
      $e_Col2_No2 = get_post_data('e_Col2_No2');
      $e_Col2_No3 = get_post_data('e_Col2_No3');
      $e_Col2_No4 = get_post_data('e_Col2_No4');
      $e_Col2_No5 = get_post_data('e_Col2_No5');
      $e_Col2_No6 = get_post_data('e_Col2_No6');
      $e_Col2_No7 = get_post_data('e_Col2_No7');
      $Ae_Ao_cm2_Kg_No1 = get_post_data('Ae_Ao_cm2_Kg_No1');
      $Ae_Ao_cm2_Kg_No2 = get_post_data('Ae_Ao_cm2_Kg_No2');
      $Ae_Ao_cm2_Kg_No3 = get_post_data('Ae_Ao_cm2_Kg_No3');
      $Ae_Ao_cm2_Kg_No4 = get_post_data('Ae_Ao_cm2_Kg_No4');
      $Ae_Ao_cm2_Kg_No5 = get_post_data('Ae_Ao_cm2_Kg_No5');
      $Ae_Ao_cm2_Kg_No6 = get_post_data('Ae_Ao_cm2_Kg_No6');
      $Ae_Ao_cm2_Kg_No7 = get_post_data('Ae_Ao_cm2_Kg_No7');
      $Cv_cm2_Kg_No1 = get_post_data('Cv_cm2_Kg_No1');
      $Cv_cm2_Kg_No2 = get_post_data('Cv_cm2_Kg_No2');
      $Cv_cm2_Kg_No3 = get_post_data('Cv_cm2_Kg_No3');
      $Cv_cm2_Kg_No4 = get_post_data('Cv_cm2_Kg_No4');
      $Cv_cm2_Kg_No5 = get_post_data('Cv_cm2_Kg_No5');
      $Cv_cm2_Kg_No6 = get_post_data('Cv_cm2_Kg_No6');
      $Cv_cm2_Kg_No7 = get_post_data('Cv_cm2_Kg_No7');

      $RegisterBy = $user['name'];

      $query = "UPDATE consolidation SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Date_No1 = '{$Date_No1}', ";
      $query .= "Date_No2 = '{$Date_No2}', ";
      $query .= "Date_No3 = '{$Date_No3}', ";
      $query .= "Date_No4 = '{$Date_No4}', ";
      $query .= "Date_No5 = '{$Date_No5}', ";
      $query .= "Date_No6 = '{$Date_No6}', ";
      $query .= "Date_No7 = '{$Date_No7}', ";
      $query .= "Date_No8 = '{$Date_No8}', ";
      $query .= "Date_No9 = '{$Date_No9}', ";
      $query .= "Date_No10 = '{$Date_No10}', ";
      $query .= "Date_No11 = '{$Date_No11}', ";
      $query .= "Date_No12 = '{$Date_No12}', ";
      $query .= "Date_No13 = '{$Date_No13}', ";
      $query .= "Date_No14 = '{$Date_No14}', ";
      $query .= "Date_No15 = '{$Date_No15}', ";
      $query .= "Date_No16 = '{$Date_No16}', ";

      $query .= "Name_Mass_on_Hangar_Colum1 = '{$Name_Mass_on_Hangar_Colum1}', ";
      $query .= "Mass_on_Hangar_Colum1_No1 = '{$Mass_on_Hangar_Colum1_No1}', ";
      $query .= "Mass_on_Hangar_Colum1_No2 = '{$Mass_on_Hangar_Colum1_No2}', ";
      $query .= "Mass_on_Hangar_Colum1_No3 = '{$Mass_on_Hangar_Colum1_No3}', ";
      $query .= "Mass_on_Hangar_Colum1_No4 = '{$Mass_on_Hangar_Colum1_No4}', ";
      $query .= "Mass_on_Hangar_Colum1_No5 = '{$Mass_on_Hangar_Colum1_No5}', ";
      $query .= "Mass_on_Hangar_Colum1_No6 = '{$Mass_on_Hangar_Colum1_No6}', ";
      $query .= "Mass_on_Hangar_Colum1_No7 = '{$Mass_on_Hangar_Colum1_No7}', ";
      $query .= "Mass_on_Hangar_Colum1_No8 = '{$Mass_on_Hangar_Colum1_No8}', ";
      $query .= "Mass_on_Hangar_Colum1_No9 = '{$Mass_on_Hangar_Colum1_No9}', ";
      $query .= "Mass_on_Hangar_Colum1_No10 = '{$Mass_on_Hangar_Colum1_No10}', ";
      $query .= "Mass_on_Hangar_Colum1_No11 = '{$Mass_on_Hangar_Colum1_No11}', ";
      $query .= "Mass_on_Hangar_Colum1_No12 = '{$Mass_on_Hangar_Colum1_No12}', ";
      $query .= "Mass_on_Hangar_Colum1_No13 = '{$Mass_on_Hangar_Colum1_No13}', ";
      $query .= "Mass_on_Hangar_Colum1_No14 = '{$Mass_on_Hangar_Colum1_No14}', ";
      $query .= "Mass_on_Hangar_Colum1_No15 = '{$Mass_on_Hangar_Colum1_No15}', ";
      $query .= "Mass_on_Hangar_Colum1_No16 = '{$Mass_on_Hangar_Colum1_No16}', ";

      $query .= "Name_Mass_on_Hangar_Colum2 = '{$Name_Mass_on_Hangar_Colum2}', ";
      $query .= "Mass_on_Hangar_Colum2_No1 = '{$Mass_on_Hangar_Colum2_No1}', ";
      $query .= "Mass_on_Hangar_Colum2_No2 = '{$Mass_on_Hangar_Colum2_No2}', ";
      $query .= "Mass_on_Hangar_Colum2_No3 = '{$Mass_on_Hangar_Colum2_No3}', ";
      $query .= "Mass_on_Hangar_Colum2_No4 = '{$Mass_on_Hangar_Colum2_No4}', ";
      $query .= "Mass_on_Hangar_Colum2_No5 = '{$Mass_on_Hangar_Colum2_No5}', ";
      $query .= "Mass_on_Hangar_Colum2_No6 = '{$Mass_on_Hangar_Colum2_No6}', ";
      $query .= "Mass_on_Hangar_Colum2_No7 = '{$Mass_on_Hangar_Colum2_No7}', ";
      $query .= "Mass_on_Hangar_Colum2_No8 = '{$Mass_on_Hangar_Colum2_No8}', ";
      $query .= "Mass_on_Hangar_Colum2_No9 = '{$Mass_on_Hangar_Colum2_No9}', ";
      $query .= "Mass_on_Hangar_Colum2_No10 = '{$Mass_on_Hangar_Colum2_No10}', ";
      $query .= "Mass_on_Hangar_Colum2_No11 = '{$Mass_on_Hangar_Colum2_No11}', ";
      $query .= "Mass_on_Hangar_Colum2_No12 = '{$Mass_on_Hangar_Colum2_No12}', ";
      $query .= "Mass_on_Hangar_Colum2_No13 = '{$Mass_on_Hangar_Colum2_No13}', ";
      $query .= "Mass_on_Hangar_Colum2_No14 = '{$Mass_on_Hangar_Colum2_No14}', ";
      $query .= "Mass_on_Hangar_Colum2_No15 = '{$Mass_on_Hangar_Colum2_No15}', ";
      $query .= "Mass_on_Hangar_Colum2_No16 = '{$Mass_on_Hangar_Colum2_No16}', ";

      $query .= "Name_Mass_on_Hangar_Colum3 = '{$Name_Mass_on_Hangar_Colum3}', ";
      $query .= "Mass_on_Hangar_Colum3_No1 = '{$Mass_on_Hangar_Colum3_No1}', ";
      $query .= "Mass_on_Hangar_Colum3_No2 = '{$Mass_on_Hangar_Colum3_No2}', ";
      $query .= "Mass_on_Hangar_Colum3_No3 = '{$Mass_on_Hangar_Colum3_No3}', ";
      $query .= "Mass_on_Hangar_Colum3_No4 = '{$Mass_on_Hangar_Colum3_No4}', ";
      $query .= "Mass_on_Hangar_Colum3_No5 = '{$Mass_on_Hangar_Colum3_No5}', ";
      $query .= "Mass_on_Hangar_Colum3_No6 = '{$Mass_on_Hangar_Colum3_No6}', ";
      $query .= "Mass_on_Hangar_Colum3_No7 = '{$Mass_on_Hangar_Colum3_No7}', ";
      $query .= "Mass_on_Hangar_Colum3_No8 = '{$Mass_on_Hangar_Colum3_No8}', ";
      $query .= "Mass_on_Hangar_Colum3_No9 = '{$Mass_on_Hangar_Colum3_No9}', ";
      $query .= "Mass_on_Hangar_Colum3_No10 = '{$Mass_on_Hangar_Colum3_No10}', ";
      $query .= "Mass_on_Hangar_Colum3_No11 = '{$Mass_on_Hangar_Colum3_No11}', ";
      $query .= "Mass_on_Hangar_Colum3_No12 = '{$Mass_on_Hangar_Colum3_No12}', ";
      $query .= "Mass_on_Hangar_Colum3_No13 = '{$Mass_on_Hangar_Colum3_No13}', ";
      $query .= "Mass_on_Hangar_Colum3_No14 = '{$Mass_on_Hangar_Colum3_No14}', ";
      $query .= "Mass_on_Hangar_Colum3_No15 = '{$Mass_on_Hangar_Colum3_No15}', ";
      $query .= "Mass_on_Hangar_Colum3_No16 = '{$Mass_on_Hangar_Colum3_No16}', ";

      $query .= "Name_Mass_on_Hangar_Colum4 = '{$Name_Mass_on_Hangar_Colum4}', ";
      $query .= "Mass_on_Hangar_Colum4_No1 = '{$Mass_on_Hangar_Colum4_No1}', ";
      $query .= "Mass_on_Hangar_Colum4_No2 = '{$Mass_on_Hangar_Colum4_No2}', ";
      $query .= "Mass_on_Hangar_Colum4_No3 = '{$Mass_on_Hangar_Colum4_No3}', ";
      $query .= "Mass_on_Hangar_Colum4_No4 = '{$Mass_on_Hangar_Colum4_No4}', ";
      $query .= "Mass_on_Hangar_Colum4_No5 = '{$Mass_on_Hangar_Colum4_No5}', ";
      $query .= "Mass_on_Hangar_Colum4_No6 = '{$Mass_on_Hangar_Colum4_No6}', ";
      $query .= "Mass_on_Hangar_Colum4_No7 = '{$Mass_on_Hangar_Colum4_No7}', ";
      $query .= "Mass_on_Hangar_Colum4_No8 = '{$Mass_on_Hangar_Colum4_No8}', ";
      $query .= "Mass_on_Hangar_Colum4_No9 = '{$Mass_on_Hangar_Colum4_No9}', ";
      $query .= "Mass_on_Hangar_Colum4_No10 = '{$Mass_on_Hangar_Colum4_No10}', ";
      $query .= "Mass_on_Hangar_Colum4_No11 = '{$Mass_on_Hangar_Colum4_No11}', ";
      $query .= "Mass_on_Hangar_Colum4_No12 = '{$Mass_on_Hangar_Colum4_No12}', ";
      $query .= "Mass_on_Hangar_Colum4_No13 = '{$Mass_on_Hangar_Colum4_No13}', ";
      $query .= "Mass_on_Hangar_Colum4_No14 = '{$Mass_on_Hangar_Colum4_No14}', ";
      $query .= "Mass_on_Hangar_Colum4_No15 = '{$Mass_on_Hangar_Colum4_No15}', ";
      $query .= "Mass_on_Hangar_Colum4_No16 = '{$Mass_on_Hangar_Colum4_No16}', ";

      $query .= "Name_Mass_on_Hangar_Colum5 = '{$Name_Mass_on_Hangar_Colum5}', ";
      $query .= "Mass_on_Hangar_Colum5_No1 = '{$Mass_on_Hangar_Colum5_No1}', ";
      $query .= "Mass_on_Hangar_Colum5_No2 = '{$Mass_on_Hangar_Colum5_No2}', ";
      $query .= "Mass_on_Hangar_Colum5_No3 = '{$Mass_on_Hangar_Colum5_No3}', ";
      $query .= "Mass_on_Hangar_Colum5_No4 = '{$Mass_on_Hangar_Colum5_No4}', ";
      $query .= "Mass_on_Hangar_Colum5_No5 = '{$Mass_on_Hangar_Colum5_No5}', ";
      $query .= "Mass_on_Hangar_Colum5_No6 = '{$Mass_on_Hangar_Colum5_No6}', ";
      $query .= "Mass_on_Hangar_Colum5_No7 = '{$Mass_on_Hangar_Colum5_No7}', ";
      $query .= "Mass_on_Hangar_Colum5_No8 = '{$Mass_on_Hangar_Colum5_No8}', ";
      $query .= "Mass_on_Hangar_Colum5_No9 = '{$Mass_on_Hangar_Colum5_No9}', ";
      $query .= "Mass_on_Hangar_Colum5_No10 = '{$Mass_on_Hangar_Colum5_No10}', ";
      $query .= "Mass_on_Hangar_Colum5_No11 = '{$Mass_on_Hangar_Colum5_No11}', ";
      $query .= "Mass_on_Hangar_Colum5_No12 = '{$Mass_on_Hangar_Colum5_No12}', ";
      $query .= "Mass_on_Hangar_Colum5_No13 = '{$Mass_on_Hangar_Colum5_No13}', ";
      $query .= "Mass_on_Hangar_Colum5_No14 = '{$Mass_on_Hangar_Colum5_No14}', ";
      $query .= "Mass_on_Hangar_Colum5_No15 = '{$Mass_on_Hangar_Colum5_No15}', ";
      $query .= "Mass_on_Hangar_Colum5_No16 = '{$Mass_on_Hangar_Colum5_No16}', ";

      $query .= "Name_Mass_on_Hangar_Colum6 = '{$Name_Mass_on_Hangar_Colum6}', ";
      $query .= "Mass_on_Hangar_Colum6_No1 = '{$Mass_on_Hangar_Colum6_No1}', ";
      $query .= "Mass_on_Hangar_Colum6_No2 = '{$Mass_on_Hangar_Colum6_No2}', ";
      $query .= "Mass_on_Hangar_Colum6_No3 = '{$Mass_on_Hangar_Colum6_No3}', ";
      $query .= "Mass_on_Hangar_Colum6_No4 = '{$Mass_on_Hangar_Colum6_No4}', ";
      $query .= "Mass_on_Hangar_Colum6_No5 = '{$Mass_on_Hangar_Colum6_No5}', ";
      $query .= "Mass_on_Hangar_Colum6_No6 = '{$Mass_on_Hangar_Colum6_No6}', ";
      $query .= "Mass_on_Hangar_Colum6_No7 = '{$Mass_on_Hangar_Colum6_No7}', ";
      $query .= "Mass_on_Hangar_Colum6_No8 = '{$Mass_on_Hangar_Colum6_No8}', ";
      $query .= "Mass_on_Hangar_Colum6_No9 = '{$Mass_on_Hangar_Colum6_No9}', ";
      $query .= "Mass_on_Hangar_Colum6_No10 = '{$Mass_on_Hangar_Colum6_No10}', ";
      $query .= "Mass_on_Hangar_Colum6_No11 = '{$Mass_on_Hangar_Colum6_No11}', ";
      $query .= "Mass_on_Hangar_Colum6_No12 = '{$Mass_on_Hangar_Colum6_No12}', ";
      $query .= "Mass_on_Hangar_Colum6_No13 = '{$Mass_on_Hangar_Colum6_No13}', ";
      $query .= "Mass_on_Hangar_Colum6_No14 = '{$Mass_on_Hangar_Colum6_No14}', ";
      $query .= "Mass_on_Hangar_Colum6_No15 = '{$Mass_on_Hangar_Colum6_No15}', ";
      $query .= "Mass_on_Hangar_Colum6_No16 = '{$Mass_on_Hangar_Colum6_No16}', ";

      $query .= "Tare_No = '{$Tare_No}', ";
      $query .= "Mass_of_Tare_gr = '{$Mass_of_Tare_gr}', ";
      $query .= "Mass_of_Wet_Soil_Tare_gr = '{$Mass_of_Wet_Soil_Tare_gr}', ";
      $query .= "Mass_of_Dry_Soil_Tare = '{$Mass_of_Dry_Soil_Tare}', ";
      $query .= "Mass_of_Water = '{$Mass_of_Water}', ";
      $query .= "Mass_of_Dry_Soil_gr = '{$Mass_of_Dry_Soil_gr}', ";
      $query .= "Initial_Moisture_Conten_Porce_Wfp = '{$Initial_Moisture_Conten_Porce_Wfp}', ";

      $query .= "Diamter_cm = '{$Diamter_cm}', ";
      $query .= "Height_cm = '{$Height_cm}', ";
      $query .= "Area_A_cm2 = '{$Area_A_cm2}', ";
      $query .= "Volume_Vo_cm3 = '{$Volume_Vo_cm3}', ";
      $query .= "Weight_gr = '{$Weight_gr}', ";

      $query .= "Initial_Mois_Mass_Ring_gr = '{$Initial_Mois_Mass_Ring_gr}', ";
      $query .= "Initial_Mois_Mass = '{$Initial_Mois_Mass}', ";
      $query .= "Final_Dry_Mass_Ring_gr = '{$Final_Dry_Mass_Ring_gr}', ";
      $query .= "Final_Dry_Mass_gr = '{$Final_Dry_Mass_gr}', ";
      $query .= "Initial_Dry_Density_g_cm3 = '{$Initial_Dry_Density_g_cm3}', ";
      $query .= "Dry_Unit_Weight_Yd_KN_m3 = '{$Dry_Unit_Weight_Yd_KN_m3}', ";
      $query .= "Density_of_Water_pW_gr_cm3 = '{$Density_of_Water_pW_gr_cm3}', ";

      $query .= "Specific_Gravity_Gs = '{$Specific_Gravity_Gs}', ";
      $query .= "Dry_Mass_Of_The_Total_Specimen_Md_gr = '{$Dry_Mass_Of_The_Total_Specimen_Md_gr}', ";
      $query .= "Volume_of_Solids_Vs_cm3 = '{$Volume_of_Solids_Vs_cm3}', ";
      $query .= "Equivalent_Height_of_Solids_Hs_cm = '{$Equivalent_Height_of_Solids_Hs_cm}', ";
      $query .= "Initial_specimen_height_Ho_cm = '{$Initial_specimen_height_Ho_cm}', ";
      $query .= "Final_specimen_height_Hf_cm = '{$Final_specimen_height_Hf_cm}', ";
      $query .= "Void_ratio_before_test_Eo = '{$Void_ratio_before_test_Eo}', ";
      $query .= "Void_ratio_after_test_ef = '{$Void_ratio_after_test_ef}', ";

      $query .= "Mass_Weight_of_Tare_gr_Initial = '{$Mass_Weight_of_Tare_gr_Initial}', ";
      $query .= "Mass_Weight_of_Tare_gr_Final = '{$Mass_Weight_of_Tare_gr_Final}', ";
      $query .= "Mass_Weight_Wet_Soil_Tare_gr_Initial = '{$Mass_Weight_Wet_Soil_Tare_gr_Initial}', ";
      $query .= "Mass_Weight_Wet_Soil_Tare_gr_Final = '{$Mass_Weight_Wet_Soil_Tare_gr_Final}', ";
      $query .= "Mass_Weight_Dry_Soil_Tare_gr_Initial = '{$Mass_Weight_Dry_Soil_Tare_gr_Initial}', ";
      $query .= "Mass_Weight_Dry_Soil_Tare_gr_Final = '{$Mass_Weight_Dry_Soil_Tare_gr_Final}', ";
      $query .= "Mass_of_Water_gr_Initial = '{$Mass_of_Water_gr_Initial}', ";
      $query .= "Weight_Wet_Soil_gr_Initial = '{$Weight_Wet_Soil_gr_Initial}', ";
      $query .= "Weight_Wet_Soil_gr_Final = '{$Weight_Wet_Soil_gr_Final}', ";
      $query .= "Weight_Dry_Soil_gr_Initial = '{$Weight_Dry_Soil_gr_Initial}', ";
      $query .= "Weight_Dry_Soil_gr_Final = '{$Weight_Dry_Soil_gr_Final}', ";
      $query .= "Moisture_Content_Porce_Initial = '{$Moisture_Content_Porce_Initial}', ";
      $query .= "Moisture_Content_Porce_Final = '{$Moisture_Content_Porce_Final}', ";
      $query .= "Initial_Degree_of_Saturation_Porce = '{$Initial_Degree_of_Saturation_Porce}', ";
      $query .= "Final_Degree_of_Saturation_Porce = '{$Final_Degree_of_Saturation_Porce}', ";

      $query .= "Loading_Decrements_Name_Kg_No1 = '{$Loading_Decrements_Name_Kg_No1}', ";
      $query .= "Loading_Decrements_Name_Kg_No2 = '{$Loading_Decrements_Name_Kg_No2}', ";
      $query .= "Loading_Decrements_Name_Kg_No3 = '{$Loading_Decrements_Name_Kg_No3}', ";
      $query .= "Loading_Decrements_Name_Kg_No4 = '{$Loading_Decrements_Name_Kg_No4}', ";
      $query .= "Loading_Decrements_Value_No1 = '{$Loading_Decrements_Value_No1}', ";
      $query .= "Loading_Decrements_Value_No2 = '{$Loading_Decrements_Value_No2}', ";
      $query .= "Loading_Decrements_Value_No3 = '{$Loading_Decrements_Value_No3}', ";
      $query .= "Loading_Decrements_Value_No4 = '{$Loading_Decrements_Value_No4}', ";
      $query .= "Factor_Dial = '{$Factor_Dial}', ";

      $query .= "Load_Incement_Kg_No1 = '{$Load_Incement_Kg_No1}', ";
      $query .= "Load_Incement_Kg_No2 = '{$Load_Incement_Kg_No2}', ";
      $query .= "Load_Incement_Kg_No3 = '{$Load_Incement_Kg_No3}', ";
      $query .= "Load_Incement_Kg_No4 = '{$Load_Incement_Kg_No4}', ";
      $query .= "Load_Incement_Kg_No5 = '{$Load_Incement_Kg_No5}', ";
      $query .= "Load_Incement_Kg_No6 = '{$Load_Incement_Kg_No6}', ";
      $query .= "Load_Incement_Kg_No7 = '{$Load_Incement_Kg_No7}', ";
      $query .= "Load_Incement_Kg_No8 = '{$Load_Incement_Kg_No8}', ";
      $query .= "Load_Incement_Kg_No9 = '{$Load_Incement_Kg_No9}', ";
      $query .= "Load_Incement_Kg_No10 = '{$Load_Incement_Kg_No10}', ";

      $query .= "Ov_Kg_cm2_No1 = '{$Ov_Kg_cm2_No1}', ";
      $query .= "Ov_Kg_cm2_No2 = '{$Ov_Kg_cm2_No2}', ";
      $query .= "Ov_Kg_cm2_No3 = '{$Ov_Kg_cm2_No3}', ";
      $query .= "Ov_Kg_cm2_No4 = '{$Ov_Kg_cm2_No4}', ";
      $query .= "Ov_Kg_cm2_No5 = '{$Ov_Kg_cm2_No5}', ";
      $query .= "Ov_Kg_cm2_No6 = '{$Ov_Kg_cm2_No6}', ";
      $query .= "Ov_Kg_cm2_No7 = '{$Ov_Kg_cm2_No7}', ";
      $query .= "Ov_Kg_cm2_No8 = '{$Ov_Kg_cm2_No8}', ";
      $query .= "Ov_Kg_cm2_No9 = '{$Ov_Kg_cm2_No9}', ";
      $query .= "Ov_Kg_cm2_No10 = '{$Ov_Kg_cm2_No10}', ";

      $query .= "Reading_Dial_No1 = '{$Reading_Dial_No1}', ";
      $query .= "Reading_Dial_No2 = '{$Reading_Dial_No2}', ";
      $query .= "Reading_Dial_No3 = '{$Reading_Dial_No3}', ";
      $query .= "Reading_Dial_No4 = '{$Reading_Dial_No4}', ";
      $query .= "Reading_Dial_No5 = '{$Reading_Dial_No5}', ";
      $query .= "Reading_Dial_No6 = '{$Reading_Dial_No6}', ";
      $query .= "Reading_Dial_No7 = '{$Reading_Dial_No7}', ";
      $query .= "Reading_Dial_No8 = '{$Reading_Dial_No8}', ";
      $query .= "Reading_Dial_No9 = '{$Reading_Dial_No9}', ";
      $query .= "Reading_Dial_No10 = '{$Reading_Dial_No10}', ";

      $query .= "AH_mm_No1 = '{$AH_mm_No1}', ";
      $query .= "AH_mm_No2 = '{$AH_mm_No2}', ";
      $query .= "AH_mm_No3 = '{$AH_mm_No3}', ";
      $query .= "AH_mm_No4 = '{$AH_mm_No4}', ";
      $query .= "AH_mm_No5 = '{$AH_mm_No5}', ";
      $query .= "AH_mm_No6 = '{$AH_mm_No6}', ";
      $query .= "AH_mm_No7 = '{$AH_mm_No7}', ";
      $query .= "AH_mm_No8 = '{$AH_mm_No8}', ";
      $query .= "AH_mm_No9 = '{$AH_mm_No9}', ";
      $query .= "AH_mm_No10 = '{$AH_mm_No10}', ";

      $query .= "e_AH_Ho_No1 = '{$e_AH_Ho_No1}', ";
      $query .= "e_AH_Ho_No2 = '{$e_AH_Ho_No2}', ";
      $query .= "e_AH_Ho_No3 = '{$e_AH_Ho_No3}', ";
      $query .= "e_AH_Ho_No4 = '{$e_AH_Ho_No4}', ";
      $query .= "e_AH_Ho_No5 = '{$e_AH_Ho_No5}', ";
      $query .= "e_AH_Ho_No6 = '{$e_AH_Ho_No6}', ";
      $query .= "e_AH_Ho_No7 = '{$e_AH_Ho_No7}', ";
      $query .= "e_AH_Ho_No8 = '{$e_AH_Ho_No8}', ";
      $query .= "e_AH_Ho_No9 = '{$e_AH_Ho_No9}', ";
      $query .= "e_AH_Ho_No10 = '{$e_AH_Ho_No10}', ";

      $query .= "AH_Hs_No1 = '{$AH_Hs_No1}', ";
      $query .= "AH_Hs_No2 = '{$AH_Hs_No2}', ";
      $query .= "AH_Hs_No3 = '{$AH_Hs_No3}', ";
      $query .= "AH_Hs_No4 = '{$AH_Hs_No4}', ";
      $query .= "AH_Hs_No5 = '{$AH_Hs_No5}', ";
      $query .= "AH_Hs_No6 = '{$AH_Hs_No6}', ";
      $query .= "AH_Hs_No7 = '{$AH_Hs_No7}', ";
      $query .= "AH_Hs_No8 = '{$AH_Hs_No8}', ";
      $query .= "AH_Hs_No9 = '{$AH_Hs_No9}', ";
      $query .= "AH_Hs_No10 = '{$AH_Hs_No10}', ";

      $query .= "Ov_e_No1 = '{$Ov_e_No1}', ";
      $query .= "Ov_e_No2 = '{$Ov_e_No2}', ";
      $query .= "Ov_e_No3 = '{$Ov_e_No3}', ";
      $query .= "Ov_e_No4 = '{$Ov_e_No4}', ";
      $query .= "Ov_e_No5 = '{$Ov_e_No5}', ";
      $query .= "Ov_e_No6 = '{$Ov_e_No6}', ";
      $query .= "Ov_e_No7 = '{$Ov_e_No7}', ";
      $query .= "Ov_e_No8 = '{$Ov_e_No8}', ";
      $query .= "Ov_e_No9 = '{$Ov_e_No9}', ";
      $query .= "Ov_e_No10 = '{$Ov_e_No10}', ";

      $query .= "e_No1 = '{$e_No1}', ";
      $query .= "e_No2 = '{$e_No2}', ";
      $query .= "e_No3 = '{$e_No3}', ";
      $query .= "e_No4 = '{$e_No4}', ";
      $query .= "e_No5 = '{$e_No5}', ";
      $query .= "e_No6 = '{$e_No6}', ";
      $query .= "e_No7 = '{$e_No7}', ";
      $query .= "e_No8 = '{$e_No8}', ";
      $query .= "e_No9 = '{$e_No9}', ";
      $query .= "e_No10 = '{$e_No10}', ";

      $query .= "Lectura_Dial_No1 = '{$Lectura_Dial_No1}', ";
      $query .= "Lectura_Dial_No2 = '{$Lectura_Dial_No2}', ";
      $query .= "Lectura_Dial_No3 = '{$Lectura_Dial_No3}', ";
      $query .= "Lectura_Dial_No4 = '{$Lectura_Dial_No4}', ";
      $query .= "Lectura_Dial_No5 = '{$Lectura_Dial_No5}', ";
      $query .= "Lectura_Dial_No6 = '{$Lectura_Dial_No6}', ";
      $query .= "Lectura_Dial_No7 = '{$Lectura_Dial_No7}', ";

      $query .= "Deformacion_cm_No1 = '{$Deformacion_cm_No1}', ";
      $query .= "Deformacion_cm_No2 = '{$Deformacion_cm_No2}', ";
      $query .= "Deformacion_cm_No3 = '{$Deformacion_cm_No3}', ";
      $query .= "Deformacion_cm_No4 = '{$Deformacion_cm_No4}', ";
      $query .= "Deformacion_cm_No5 = '{$Deformacion_cm_No5}', ";
      $query .= "Deformacion_cm_No6 = '{$Deformacion_cm_No6}', ";
      $query .= "Deformacion_cm_No7 = '{$Deformacion_cm_No7}', ";

      $query .= "Peso_Kg_No1 = '{$Peso_Kg_No1}', ";
      $query .= "Peso_Kg_No2 = '{$Peso_Kg_No2}', ";
      $query .= "Peso_Kg_No3 = '{$Peso_Kg_No3}', ";
      $query .= "Peso_Kg_No4 = '{$Peso_Kg_No4}', ";
      $query .= "Peso_Kg_No5 = '{$Peso_Kg_No5}', ";
      $query .= "Peso_Kg_No6 = '{$Peso_Kg_No6}', ";
      $query .= "Peso_Kg_No7 = '{$Peso_Kg_No7}', ";

      $query .= "o_Kg_cm2_No1 = '{$o_Kg_cm2_No1}', ";
      $query .= "o_Kg_cm2_No2 = '{$o_Kg_cm2_No2}', ";
      $query .= "o_Kg_cm2_No3 = '{$o_Kg_cm2_No3}', ";
      $query .= "o_Kg_cm2_No4 = '{$o_Kg_cm2_No4}', ";
      $query .= "o_Kg_cm2_No5 = '{$o_Kg_cm2_No5}', ";
      $query .= "o_Kg_cm2_No6 = '{$o_Kg_cm2_No6}', ";
      $query .= "o_Kg_cm2_No7 = '{$o_Kg_cm2_No7}', ";

      $query .= "Ao_Kg_cm2_No1 = '{$Ao_Kg_cm2_No1}', ";
      $query .= "Ao_Kg_cm2_No2 = '{$Ao_Kg_cm2_No2}', ";
      $query .= "Ao_Kg_cm2_No3 = '{$Ao_Kg_cm2_No3}', ";
      $query .= "Ao_Kg_cm2_No4 = '{$Ao_Kg_cm2_No4}', ";
      $query .= "Ao_Kg_cm2_No5 = '{$Ao_Kg_cm2_No5}', ";
      $query .= "Ao_Kg_cm2_No6 = '{$Ao_Kg_cm2_No6}', ";
      $query .= "Ao_Kg_cm2_No7 = '{$Ao_Kg_cm2_No7}', ";

      $query .= "Ah_mm_Col2_No1 = '{$Ah_mm_Col2_No1}', ";
      $query .= "Ah_mm_Col2_No2 = '{$Ah_mm_Col2_No2}', ";
      $query .= "Ah_mm_Col2_No3 = '{$Ah_mm_Col2_No3}', ";
      $query .= "Ah_mm_Col2_No4 = '{$Ah_mm_Col2_No4}', ";
      $query .= "Ah_mm_Col2_No5 = '{$Ah_mm_Col2_No5}', ";
      $query .= "Ah_mm_Col2_No6 = '{$Ah_mm_Col2_No6}', ";
      $query .= "Ah_mm_Col2_No7 = '{$Ah_mm_Col2_No7}', ";

      $query .= "Ae_No1 = '{$Ae_No1}', ";
      $query .= "Ae_No2 = '{$Ae_No2}', ";
      $query .= "Ae_No3 = '{$Ae_No3}', ";
      $query .= "Ae_No4 = '{$Ae_No4}', ";
      $query .= "Ae_No5 = '{$Ae_No5}', ";
      $query .= "Ae_No6 = '{$Ae_No6}', ";
      $query .= "Ae_No7 = '{$Ae_No7}', ";

      $query .= "e_Col2_No1 = '{$e_Col2_No1}', ";
      $query .= "e_Col2_No2 = '{$e_Col2_No2}', ";
      $query .= "e_Col2_No3 = '{$e_Col2_No3}', ";
      $query .= "e_Col2_No4 = '{$e_Col2_No4}', ";
      $query .= "e_Col2_No5 = '{$e_Col2_No5}', ";
      $query .= "e_Col2_No6 = '{$e_Col2_No6}', ";
      $query .= "e_Col2_No7 = '{$e_Col2_No7}', ";

      $query .= "Ae_Ao_cm2_Kg_No1 = '{$Ae_Ao_cm2_Kg_No1}', ";
      $query .= "Ae_Ao_cm2_Kg_No2 = '{$Ae_Ao_cm2_Kg_No2}', ";
      $query .= "Ae_Ao_cm2_Kg_No3 = '{$Ae_Ao_cm2_Kg_No3}', ";
      $query .= "Ae_Ao_cm2_Kg_No4 = '{$Ae_Ao_cm2_Kg_No4}', ";
      $query .= "Ae_Ao_cm2_Kg_No5 = '{$Ae_Ao_cm2_Kg_No5}', ";
      $query .= "Ae_Ao_cm2_Kg_No6 = '{$Ae_Ao_cm2_Kg_No6}', ";
      $query .= "Ae_Ao_cm2_Kg_No7 = '{$Ae_Ao_cm2_Kg_No7}', ";

      $query .= "Cv_cm2_Kg_No1 = '{$Cv_cm2_Kg_No1}', ";
      $query .= "Cv_cm2_Kg_No2 = '{$Cv_cm2_Kg_No2}', ";
      $query .= "Cv_cm2_Kg_No3 = '{$Cv_cm2_Kg_No3}', ";
      $query .= "Cv_cm2_Kg_No4 = '{$Cv_cm2_Kg_No4}', ";
      $query .= "Cv_cm2_Kg_No5 = '{$Cv_cm2_Kg_No5}', ";
      $query .= "Cv_cm2_Kg_No6 = '{$Cv_cm2_Kg_No6}', ";
      $query .= "Cv_cm2_Kg_No7 = '{$Cv_cm2_Kg_No7}', ";

      $query .= "Registered_By = '{$RegisterBy}' ";

      
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-Consolidation.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-Consolidation.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-Consolidation.php?id=' . $search_table['id'], false);
    }
  }
?>