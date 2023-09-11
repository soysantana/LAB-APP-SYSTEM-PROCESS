<?php
// Función para obtener y escapar datos del POST
function get_post_data($field) {
    global $db;
    return $db->escape($_POST[$field]);
}

if (isset($_POST['GrainSizeRocks'])) {
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

        $Screen_40_No1 = get_post_data('Screen_40_No1');
        $Screen_40_No2 = get_post_data('Screen_40_No2');
        $Screen_40_No3 = get_post_data('Screen_40_No3');
        $Screen_40_No4 = get_post_data('Screen_40_No4');
        $Screen_40_No5 = get_post_data('Screen_40_No5');
        $Screen_40_No6 = get_post_data('Screen_40_No6');
        $Screen_40_No7 = get_post_data('Screen_40_No7');
        $Total_40_No8 = get_post_data('Total_40_No8');
        $Screen_30_No1 = get_post_data('Screen_30_No1');
        $Screen_30_No2 = get_post_data('Screen_30_No2');
        $Screen_30_No3 = get_post_data('Screen_30_No3');
        $Screen_30_No4 = get_post_data('Screen_30_No4');
        $Screen_30_No5 = get_post_data('Screen_30_No5');
        $Screen_30_No6 = get_post_data('Screen_30_No6');
        $Screen_30_No7 = get_post_data('Screen_30_No7');
        $Total_30_No8 = get_post_data('Total_30_No8');
        $Screen_20_No1 = get_post_data('Screen_20_No1');
        $Screen_20_No2 = get_post_data('Screen_20_No2');
        $Screen_20_No3 = get_post_data('Screen_20_No3');
        $Screen_20_No4 = get_post_data('Screen_20_No4');
        $Screen_20_No5 = get_post_data('Screen_20_No5');
        $Screen_20_No6 = get_post_data('Screen_20_No6');
        $Screen_20_No7 = get_post_data('Screen_20_No7');
        $Total_20_No8 = get_post_data('Total_20_No8');
        $Screen_13_No1 = get_post_data('Screen_13_No1');
        $Screen_13_No2 = get_post_data('Screen_13_No2');
        $Screen_13_No3 = get_post_data('Screen_13_No3');
        $Screen_13_No4 = get_post_data('Screen_13_No4');
        $Screen_13_No5 = get_post_data('Screen_13_No5');
        $Screen_13_No6 = get_post_data('Screen_13_No6');
        $Screen_13_No7 = get_post_data('Screen_13_No7');
        $Total_13_No8 = get_post_data('Total_13_No8');
        $Screen_12_No1 = get_post_data('Screen_12_No1');
        $Screen_12_No2 = get_post_data('Screen_12_No2');
        $Screen_12_No3 = get_post_data('Screen_12_No3');
        $Screen_12_No4 = get_post_data('Screen_12_No4');
        $Screen_12_No5 = get_post_data('Screen_12_No5');
        $Screen_12_No6 = get_post_data('Screen_12_No6');
        $Screen_12_No7 = get_post_data('Screen_12_No7');
        $Total_12_No8 = get_post_data('Total_12_No8');
        $Screen_10_No1 = get_post_data('Screen_10_No1');
        $Screen_10_No2 = get_post_data('Screen_10_No2');
        $Screen_10_No3 = get_post_data('Screen_10_No3');
        $Screen_10_No4 = get_post_data('Screen_10_No4');
        $Screen_10_No5 = get_post_data('Screen_10_No5');
        $Screen_10_No6 = get_post_data('Screen_10_No6');
        $Screen_10_No7 = get_post_data('Screen_10_No7');
        $Total_10_No8 = get_post_data('Total_10_No8');
        $Screen_8_No1 = get_post_data('Screen_8_No1');
        $Screen_8_No2 = get_post_data('Screen_8_No2');
        $Screen_8_No3 = get_post_data('Screen_8_No3');
        $Screen_8_No4 = get_post_data('Screen_8_No4');
        $Screen_8_No5 = get_post_data('Screen_8_No5');
        $Screen_8_No6 = get_post_data('Screen_8_No6');
        $Screen_8_No7 = get_post_data('Screen_8_No7');
        $Total_8_No8 = get_post_data('Total_8_No8');
        $Screen_6_No1 = get_post_data('Screen_6_No1');
        $Screen_6_No2 = get_post_data('Screen_6_No2');
        $Screen_6_No3 = get_post_data('Screen_6_No3');
        $Screen_6_No4 = get_post_data('Screen_6_No4');
        $Screen_6_No5 = get_post_data('Screen_6_No5');
        $Screen_6_No6 = get_post_data('Screen_6_No6');
        $Screen_6_No7 = get_post_data('Screen_6_No7');
        $Total_6_No8 = get_post_data('Total_6_No8');
        $Screen_4_No1 = get_post_data('Screen_4_No1');
        $Screen_4_No2 = get_post_data('Screen_4_No2');
        $Screen_4_No3 = get_post_data('Screen_4_No3');
        $Screen_4_No4 = get_post_data('Screen_4_No4');
        $Screen_4_No5 = get_post_data('Screen_4_No5');
        $Screen_4_No6 = get_post_data('Screen_4_No6');
        $Screen_4_No7 = get_post_data('Screen_4_No7');
        $Total_4_No8 = get_post_data('Total_4_No7');
        $Screen_3_No1 = get_post_data('Screen_3_No1');
        $Screen_3_No2 = get_post_data('Screen_3_No2');
        $Screen_3_No3 = get_post_data('Screen_3_No3');
        $Screen_3_No4 = get_post_data('Screen_3_No4');
        $Screen_3_No5 = get_post_data('Screen_3_No5');
        $Screen_3_No6 = get_post_data('Screen_3_No6');
        $Screen_3_No7 = get_post_data('Screen_3_No7');
        $Total_3_No8 = get_post_data('Total_3_No8');
        $Total_De_Muestra_Mayor_de_3_Kg = get_post_data('Total_De_Muestra_Mayor_de_3_Kg');
        $Total_De_Muestra_Mayor_de_3_Gr = get_post_data('Total_De_Muestra_Mayor_de_3_Gr');
        $Total_De_Material_Pasante_Menos_3_Colum1_No1 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum1_No1');
        $Total_De_Material_Pasante_Menos_3_Colum1_No2 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum1_No2');
        $Total_De_Material_Pasante_Menos_3_Colum1_No3 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum1_No3');
        $Total_De_Material_Pasante_Menos_3_Colum1_No4 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum1_No4');
        $Total_De_Material_Pasante_Menos_3_Colum1_No5 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum1_No5');
        $Total_De_Material_Pasante_Menos_3_Colum1_No6 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum1_No6');
        $Total_De_Material_Pasante_Menos_3_Colum1_No7 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum1_No7');
        $Total_De_Material_Pasante_Menos_3_Colum1_No8 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum1_No8');
        $Total_De_Material_Pasante_Menos_3_Colum2_No1 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum2_No1');
        $Total_De_Material_Pasante_Menos_3_Colum2_No2 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum2_No2');
        $Total_De_Material_Pasante_Menos_3_Colum2_No3 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum2_No3');
        $Total_De_Material_Pasante_Menos_3_Colum2_No4 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum2_No4');
        $Total_De_Material_Pasante_Menos_3_Colum2_No5 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum2_No5');
        $Total_De_Material_Pasante_Menos_3_Colum2_No6 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum2_No6');
        $Total_De_Material_Pasante_Menos_3_Colum2_No7 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum2_No7');
        $Total_De_Material_Pasante_Menos_3_Colum2_No8 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum2_No8');
        $Total_De_Material_Pasante_Menos_3_Colum3_No1 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum3_No1');
        $Total_De_Material_Pasante_Menos_3_Colum3_No2 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum3_No2');
        $Total_De_Material_Pasante_Menos_3_Colum3_No3 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum3_No3');
        $Total_De_Material_Pasante_Menos_3_Colum3_No4 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum3_No4');
        $Total_De_Material_Pasante_Menos_3_Colum3_No5 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum3_No5');
        $Total_De_Material_Pasante_Menos_3_Colum3_No6 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum3_No6');
        $Total_De_Material_Pasante_Menos_3_Colum3_No7 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum3_No7');
        $Total_De_Material_Pasante_Menos_3_Colum3_No8 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum3_No8');
        $Total_De_Material_Pasante_Menos_3_Colum4_No1 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum4_No1');
        $Total_De_Material_Pasante_Menos_3_Colum4_No2 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum4_No2');
        $Total_De_Material_Pasante_Menos_3_Colum4_No3 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum4_No3');
        $Total_De_Material_Pasante_Menos_3_Colum4_No4 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum4_No4');
        $Total_De_Material_Pasante_Menos_3_Colum4_No5 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum4_No5');
        $Total_De_Material_Pasante_Menos_3_Colum4_No6 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum4_No6');
        $Total_De_Material_Pasante_Menos_3_Colum4_No7 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum4_No7');
        $Total_De_Material_Pasante_Menos_3_Colum4_No8 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum4_No8');
        $Total_De_Material_Pasante_Menos_3_Colum5_No1 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum5_No1');
        $Total_De_Material_Pasante_Menos_3_Colum5_No2 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum5_No2');
        $Total_De_Material_Pasante_Menos_3_Colum5_No3 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum5_No3');
        $Total_De_Material_Pasante_Menos_3_Colum5_No4 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum5_No4');
        $Total_De_Material_Pasante_Menos_3_Colum5_No5 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum5_No5');
        $Total_De_Material_Pasante_Menos_3_Colum5_No6 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum5_No6');
        $Total_De_Material_Pasante_Menos_3_Colum5_No7 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum5_No7');
        $Total_De_Material_Pasante_Menos_3_Colum5_No8 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum5_No8');
        $Total_De_Material_Pasante_Menos_3_Colum6_No1 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum6_No1');
        $Total_De_Material_Pasante_Menos_3_Colum6_No2 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum6_No2');
        $Total_De_Material_Pasante_Menos_3_Colum6_No3 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum6_No3');
        $Total_De_Material_Pasante_Menos_3_Colum6_No4 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum6_No4');
        $Total_De_Material_Pasante_Menos_3_Colum6_No5 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum6_No5');
        $Total_De_Material_Pasante_Menos_3_Colum6_No6 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum6_No6');
        $Total_De_Material_Pasante_Menos_3_Colum6_No7 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum6_No7');
        $Total_De_Material_Pasante_Menos_3_Colum6_No8 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum6_No8');
        $Total_De_Material_Pasante_Menos_3_Colum7_No1 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum7_No1');
        $Total_De_Material_Pasante_Menos_3_Colum7_No2 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum7_No2');
        $Total_De_Material_Pasante_Menos_3_Colum7_No3 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum7_No3');
        $Total_De_Material_Pasante_Menos_3_Colum7_No4 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum7_No4');
        $Total_De_Material_Pasante_Menos_3_Colum7_No5 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum7_No5');
        $Total_De_Material_Pasante_Menos_3_Colum7_No6 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum7_No6');
        $Total_De_Material_Pasante_Menos_3_Colum7_No7 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum7_No7');
        $Total_De_Material_Pasante_Menos_3_Colum7_No8 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum7_No8');
        $Total_De_Material_Pasante_Menos_3_Colum8_No1 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum8_No1');
        $Total_De_Material_Pasante_Menos_3_Colum8_No2 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum8_No2');
        $Total_De_Material_Pasante_Menos_3_Colum8_No3 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum8_No3');
        $Total_De_Material_Pasante_Menos_3_Colum8_No4 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum8_No4');
        $Total_De_Material_Pasante_Menos_3_Colum8_No5 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum8_No5');
        $Total_De_Material_Pasante_Menos_3_Colum8_No6 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum8_No6');
        $Total_De_Material_Pasante_Menos_3_Colum8_No7 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum8_No7');
        $Total_De_Material_Pasante_Menos_3_Colum8_No8 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum8_No8');
        $Total_De_Material_Pasante_Menos_3_Colum9_No1 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum9_No1');
        $Total_De_Material_Pasante_Menos_3_Colum9_No2 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum9_No2');
        $Total_De_Material_Pasante_Menos_3_Colum9_No3 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum9_No3');
        $Total_De_Material_Pasante_Menos_3_Colum9_No4 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum9_No4');
        $Total_De_Material_Pasante_Menos_3_Colum9_No5 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum9_No5');
        $Total_De_Material_Pasante_Menos_3_Colum9_No6 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum9_No6');
        $Total_De_Material_Pasante_Menos_3_Colum9_No7 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum9_No7');
        $Total_De_Material_Pasante_Menos_3_Colum9_No8 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum9_No8');
        $Total_De_Material_Pasante_Menos_3_Colum10_No1 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum10_No1');
        $Total_De_Material_Pasante_Menos_3_Colum10_No2 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum10_No2');
        $Total_De_Material_Pasante_Menos_3_Colum10_No3 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum10_No3');
        $Total_De_Material_Pasante_Menos_3_Colum10_No4 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum10_No4');
        $Total_De_Material_Pasante_Menos_3_Colum10_No5 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum10_No5');
        $Total_De_Material_Pasante_Menos_3_Colum10_No6 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum10_No6');
        $Total_De_Material_Pasante_Menos_3_Colum10_No7 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum10_No7');
        $Total_De_Material_Pasante_Menos_3_Colum10_No8 = get_post_data('Total_De_Material_Pasante_Menos_3_Colum10_No8');
        $Total_De_Muestra_Menor_de_3_Kg = get_post_data('Total_De_Muestra_Menor_de_3_Kg');
        $Total_De_Muestra_Menor_de_3_Gr = get_post_data('Total_De_Muestra_Menor_de_3_Gr');
        $Tare_Name_No1 = get_post_data('Tare_Name_No1');
        $Tare_Name_No2 = get_post_data('Tare_Name_No2');
        $Tare_Name_No3 = get_post_data('Tare_Name_No3');
        $Oven_Temperature_No1 = get_post_data('Oven_Temperature_No1');
        $Oven_Temperature_No2 = get_post_data('Oven_Temperature_No2');
        $Oven_Temperature_No3 = get_post_data('Oven_Temperature_No3');
        $Tare_Plus_Wet_Soil_Gr_No1 = get_post_data('Tare_Plus_Wet_Soil_Gr_No1');
        $Tare_Plus_Wet_Soil_Gr_No2 = get_post_data('Tare_Plus_Wet_Soil_Gr_No2');
        $Tare_Plus_Wet_Soil_Gr_No3 = get_post_data('Tare_Plus_Wet_Soil_Gr_No3');
        $Tare_Plus_Dry_Soil_Gr_No1 = get_post_data('Tare_Plus_Dry_Soil_Gr_No1');
        $Tare_Plus_Dry_Soil_Gr_No2 = get_post_data('Tare_Plus_Dry_Soil_Gr_No2');
        $Tare_Plus_Dry_Soil_Gr_No3 = get_post_data('Tare_Plus_Dry_Soil_Gr_No3');
        $Water_Ww_Gr_No1 = get_post_data('Water_Ww_Gr_No1');
        $Water_Ww_Gr_No2 = get_post_data('Water_Ww_Gr_No2');
        $Water_Ww_Gr_No3 = get_post_data('Water_Ww_Gr_No3');
        $Tare_Gr_No1 = get_post_data('Tare_Gr_No1');
        $Tare_Gr_No2 = get_post_data('Tare_Gr_No2');
        $Tare_Gr_No3 = get_post_data('Tare_Gr_No3');
        $Dry_Soil_Ws_Gr_No1 = get_post_data('Dry_Soil_Ws_Gr_No1');
        $Dry_Soil_Ws_Gr_No2 = get_post_data('Dry_Soil_Ws_Gr_No2');
        $Dry_Soil_Ws_Gr_No3 = get_post_data('Dry_Soil_Ws_Gr_No3');
        $Moisture_Content_Porce_No1 = get_post_data('Moisture_Content_Porce_No1');
        $Moisture_Content_Porce_No2 = get_post_data('Moisture_Content_Porce_No2');
        $Moisture_Content_Porce_No3 = get_post_data('Moisture_Content_Porce_No3');
        $Moisture_Content_Average_Porce = get_post_data('Moisture_Content_Average_Porce');
        $Mayor_a_3_Gr = get_post_data('Mayor_a_3_Gr');
        $Menor_a_3_Gr = get_post_data('Menor_a_3_Gr');
        $Total_Peso_Seco_Sucio_Gr = get_post_data('Total_Peso_Seco_Sucio_Gr');
        $Total_Peso_Lavado_Gr = get_post_data('Total_Peso_Lavado_Gr');
        $Perdida_Por_Lavado_Gr = get_post_data('Perdida_Por_Lavado_Gr');
        $Peso_Seco_Sucio = get_post_data('Peso_Seco_Sucio');
        $Peso_Lavado = get_post_data('Peso_Lavado');
        $Pan_Lavado = get_post_data('Pan_Lavado');
        $Wt_Ret_3 = get_post_data('Wt_Ret_3');
        $Ret_3 = get_post_data('Ret_3');
        $Cum_Ret_3 = get_post_data('Cum_Ret_3');
        $Pass_3 = get_post_data('Pass_3');
        $Wt_Ret_21p2 = get_post_data('Wt_Ret_21p2');
        $Ret_21p2 = get_post_data('Ret_21p2');
        $Cum_Ret_21p2 = get_post_data('Cum_Ret_21p2');
        $Pass_21p2 = get_post_data('Pass_21p2');
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
        $Factor_De_Conversion = get_post_data('Factor_De_Conversion');
        $Gs_Wt_Ret_50 = get_post_data('Gs_Wt_Ret_50');
        $Gs_Ret_50 = get_post_data('Gs_Ret_50');
        $Gs_Cum_Ret_50 = get_post_data('Gs_Cum_Ret_50');
        $Gs_Pass_50 = get_post_data('Gs_Pass_50');
        $Gs_Wt_Ret_40 = get_post_data('Gs_Wt_Ret_40');
        $Gs_Ret_40 = get_post_data('Gs_Ret_40');
        $Gs_Cum_Ret_40 = get_post_data('Gs_Cum_Ret_40');
        $Gs_Pass_40 = get_post_data('Gs_Pass_40');
        $Gs_Wt_Ret_12 = get_post_data('Gs_Wt_Ret_12');
        $Gs_Ret_12 = get_post_data('Gs_Ret_12');
        $Gs_Cum_Ret_12 = get_post_data('Gs_Cum_Ret_12');
        $Gs_Pass_12 = get_post_data('Gs_Pass_12');
        $Gs_Wt_Ret_10 = get_post_data('Gs_Wt_Ret_10');
        $Gs_Ret_10 = get_post_data('Gs_Ret_10');
        $Gs_Cum_Ret_10 = get_post_data('Gs_Cum_Ret_10');
        $Gs_Pass_10 = get_post_data('Gs_Pass_10');
        $Gs_Wt_Ret_8 = get_post_data('Gs_Wt_Ret_8');
        $Gs_Ret_8 = get_post_data('Gs_Ret_8');
        $Gs_Cum_Ret_8 = get_post_data('Gs_Cum_Ret_8');
        $Gs_Pass_8 = get_post_data('Gs_Pass_8');
        $Gs_Wt_Ret_6 = get_post_data('Gs_Wt_Ret_6');
        $Gs_Ret_6 = get_post_data('Gs_Ret_6');
        $Gs_Cum_Ret_6 = get_post_data('Gs_Cum_Ret_6');
        $Gs_Pass_6 = get_post_data('Gs_Pass_6');
        $Gs_Wt_Ret_4 = get_post_data('Gs_Wt_Ret_4');
        $Gs_Ret_4 = get_post_data('Gs_Ret_4');
        $Gs_Cum_Ret_4 = get_post_data('Gs_Cum_Ret_4');
        $Gs_Pass_4 = get_post_data('Gs_Pass_4');
        $Gs_Wt_Ret_3 = get_post_data('Gs_Wt_Ret_3');
        $Gs_Ret_3 = get_post_data('Gs_Ret_3');
        $Gs_Cum_Ret_3 = get_post_data('Gs_Cum_Ret_3');
        $Gs_Pass_3 = get_post_data('Gs_Pass_3');
        $Gs_Wt_Ret_2p5 = get_post_data('Gs_Wt_Ret_2p5');
        $Gs_Ret_2p5 = get_post_data('Gs_Ret_2p5');
        $Gs_Cum_Ret_2p5 = get_post_data('Gs_Cum_Ret_2p5');
        $Gs_Pass_2p5 = get_post_data('Gs_Pass_2p5');
        $Gs_Wt_Ret_2 = get_post_data('Gs_Wt_Ret_2');
        $Gs_Ret_2 = get_post_data('Gs_Ret_2');
        $Gs_Cum_Ret_2 = get_post_data('Gs_Cum_Ret_2');
        $Gs_Pass_2 = get_post_data('Gs_Pass_2');
        $Gs_Wt_Ret_1p5 = get_post_data('Gs_Wt_Ret_1p5');
        $Gs_Ret_1p5 = get_post_data('Gs_Ret_1p5');
        $Gs_Cum_Ret_1p5 = get_post_data('Gs_Cum_Ret_1p5');
        $Gs_Pass_1p5 = get_post_data('Gs_Pass_1p5');
        $Gs_Wt_Ret_1 = get_post_data('Gs_Wt_Ret_1');
        $Gs_Ret_1 = get_post_data('Gs_Ret_1');
        $Gs_Cum_Ret_1 = get_post_data('Gs_Cum_Ret_1');
        $Gs_Pass_1 = get_post_data('Gs_Pass_1');
        $Gs_Wt_Ret_3p4 = get_post_data('Gs_Wt_Ret_3p4');
        $Gs_Ret_3p4 = get_post_data('Gs_Ret_3p4');
        $Gs_Cum_Ret_3p4 = get_post_data('Gs_Cum_Ret_3p4');
        $Gs_Pass_3p4 = get_post_data('Gs_Pass_3p4');
        $Gs_Wt_Ret_1p2 = get_post_data('Gs_Wt_Ret_1p2');
        $Gs_Ret_1p2 = get_post_data('Gs_Ret_1p2');
        $Gs_Cum_Ret_1p2 = get_post_data('Gs_Cum_Ret_1p2');
        $Gs_Pass_1p2 = get_post_data('Gs_Pass_1p2');
        $Gs_Wt_Ret_3p8 = get_post_data('Gs_Wt_Ret_3p8');
        $Gs_Ret_3p8 = get_post_data('Gs_Ret_3p8');
        $Gs_Cum_Ret_3p8 = get_post_data('Gs_Cum_Ret_3p8');
        $Gs_Pass_3p8 = get_post_data('Gs_Pass_3p8');
        $Gs_Wt_Ret_No4 = get_post_data('Gs_Wt_Ret_No4');
        $Gs_Ret_No4 = get_post_data('Gs_Ret_No4');
        $Gs_Cum_Ret_No4 = get_post_data('Gs_Cum_Ret_No4');
        $Gs_Pass_No4 = get_post_data('Gs_Pass_No4');
        $Gs_Wt_Ret_No10 = get_post_data('Gs_Wt_Ret_No10');
        $Gs_Ret_No10 = get_post_data('Gs_Ret_No10');
        $Gs_Cum_Ret_No10 = get_post_data('Gs_Cum_Ret_No10');
        $Gs_Pass_No10 = get_post_data('Gs_Pass_No10');
        $Gs_Wt_Ret_No16 = get_post_data('Gs_Wt_Ret_No16');
        $Gs_Ret_No16 = get_post_data('Gs_Ret_No16');
        $Gs_Cum_Ret_No16 = get_post_data('Gs_Cum_Ret_No16');
        $Gs_Pass_No16 = get_post_data('Gs_Pass_No16');
        $Gs_Wt_Ret_No20 = get_post_data('Gs_Wt_Ret_No20');
        $Gs_Ret_No20 = get_post_data('Gs_Ret_No20');
        $Gs_Cum_Ret_No20 = get_post_data('Gs_Cum_Ret_No20');
        $Gs_Pass_No20 = get_post_data('Gs_Pass_No20');
        $Gs_Wt_Ret_No50 = get_post_data('Gs_Wt_Ret_No50');
        $Gs_Ret_No50 = get_post_data('Gs_Ret_No50');
        $Gs_Cum_Ret_No50 = get_post_data('Gs_Cum_Ret_No50');
        $Gs_Pass_No50 = get_post_data('Gs_Pass_No50');
        $Gs_Wt_Ret_No60 = get_post_data('Gs_Wt_Ret_No60');
        $Gs_Ret_No60 = get_post_data('Gs_Ret_No60');
        $Gs_Cum_Ret_No60 = get_post_data('Gs_Cum_Ret_No60');
        $Gs_Pass_No60 = get_post_data('Gs_Pass_No60');
        $Gs_Wt_Ret_No100 = get_post_data('Gs_Wt_Ret_No100');
        $Gs_Ret_No100 = get_post_data('Gs_Ret_No100');
        $Gs_Cum_Ret_No100 = get_post_data('Gs_Cum_Ret_No100');
        $Gs_Pass_No100 = get_post_data('Gs_Pass_No100');
        $Gs_Wt_Ret_No140 = get_post_data('Gs_Wt_Ret_No140');
        $Gs_Ret_No140 = get_post_data('Gs_Ret_No140');
        $Gs_Cum_Ret_No140 = get_post_data('Gs_Cum_Ret_No140');
        $Gs_Pass_No140 = get_post_data('Gs_Pass_No140');
        $Gs_Wt_Ret_No200 = get_post_data('Gs_Wt_Ret_No200');
        $Gs_Ret_No200 = get_post_data('Gs_Ret_No200');
        $Gs_Cum_Ret_No200 = get_post_data('Gs_Cum_Ret_No200');
        $Gs_Pass_No200 = get_post_data('Gs_Pass_No200');
        $Gs_Pan_Wt_Ret = get_post_data('Gs_Pan_Wt_Ret');
        $Gs_Pan_Ret = get_post_data('Gs_Pan_Ret');
        $Gs_Total_Wt_Ret = get_post_data('Gs_Total_Wt_Ret');
        $Gs_Total_Ret = get_post_data('Gs_Total_Ret');
        $Gs_Total_Cum_Ret = get_post_data('Gs_Total_Cum_Ret');
        $Gs_Total_Pass = get_post_data('Gs_Total_Pass');
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

        $sql = "INSERT INTO grain_size_rocks (
            Sample_ID, Sample_Number, Structure, Area, Source, Depth_From, Depth_To,
            Material_Type, Sample_Type, North, East, Elev, Sample_Date, Report_Date,
            test_type, Standard, Preparation_Method, Split_Method, Comments, Technician,
            Test_Start_Date,
            Screen_40_No1,
            Screen_40_No2,
            Screen_40_No3,
            Screen_40_No4,
            Screen_40_No5,
            Screen_40_No6,
            Screen_40_No7,
            Total_40_No8,
            Screen_30_No1,
            Screen_30_No2,
            Screen_30_No3,
            Screen_30_No4,
            Screen_30_No5,
            Screen_30_No6,
            Screen_30_No7,
            Total_30_No8,
            Screen_20_No1,
            Screen_20_No2,
            Screen_20_No3,
            Screen_20_No4,
            Screen_20_No5,
            Screen_20_No6,
            Screen_20_No7,
            Total_20_No8,
            Screen_13_No1,
            Screen_13_No2,
            Screen_13_No3,
            Screen_13_No4,
            Screen_13_No5,
            Screen_13_No6,
            Screen_13_No7,
            Total_13_No8,
            Screen_12_No1,
            Screen_12_No2,
            Screen_12_No3,
            Screen_12_No4,
            Screen_12_No5,
            Screen_12_No6,
            Screen_12_No7,
            Total_12_No8,
            Screen_10_No1,
            Screen_10_No2,
            Screen_10_No3,
            Screen_10_No4,
            Screen_10_No5,
            Screen_10_No6,
            Screen_10_No7,
            Total_10_No8,
            Screen_8_No1,
            Screen_8_No2,
            Screen_8_No3,
            Screen_8_No4,
            Screen_8_No5,
            Screen_8_No6,
            Screen_8_No7,
            Total_8_No8,
            Screen_6_No1,
            Screen_6_No2,
            Screen_6_No3,
            Screen_6_No4,
            Screen_6_No5,
            Screen_6_No6,
            Screen_6_No7,
            Total_6_No8,
            Screen_4_No1,
            Screen_4_No2,
            Screen_4_No3,
            Screen_4_No4,
            Screen_4_No5,
            Screen_4_No6,
            Screen_4_No7,
            Total_4_No8,
            Screen_3_No1,
            Screen_3_No2,
            Screen_3_No3,
            Screen_3_No4,
            Screen_3_No5,
            Screen_3_No6,
            Screen_3_No7,
            Total_3_No8,
            Total_De_Muestra_Mayor_de_3_Kg,
            Total_De_Muestra_Mayor_de_3_Gr,
            Total_De_Material_Pasante_Menos_3_Colum1_No1,
            Total_De_Material_Pasante_Menos_3_Colum1_No2,
            Total_De_Material_Pasante_Menos_3_Colum1_No3,
            Total_De_Material_Pasante_Menos_3_Colum1_No4,
            Total_De_Material_Pasante_Menos_3_Colum1_No5,
            Total_De_Material_Pasante_Menos_3_Colum1_No6,
            Total_De_Material_Pasante_Menos_3_Colum1_No7,
            Total_De_Material_Pasante_Menos_3_Colum1_No8,
            Total_De_Material_Pasante_Menos_3_Colum2_No1,
            Total_De_Material_Pasante_Menos_3_Colum2_No2,
            Total_De_Material_Pasante_Menos_3_Colum2_No3,
            Total_De_Material_Pasante_Menos_3_Colum2_No4,
            Total_De_Material_Pasante_Menos_3_Colum2_No5,
            Total_De_Material_Pasante_Menos_3_Colum2_No6,
            Total_De_Material_Pasante_Menos_3_Colum2_No7,
            Total_De_Material_Pasante_Menos_3_Colum2_No8,
            Total_De_Material_Pasante_Menos_3_Colum3_No1,
            Total_De_Material_Pasante_Menos_3_Colum3_No2,
            Total_De_Material_Pasante_Menos_3_Colum3_No3,
            Total_De_Material_Pasante_Menos_3_Colum3_No4,
            Total_De_Material_Pasante_Menos_3_Colum3_No5,
            Total_De_Material_Pasante_Menos_3_Colum3_No6,
            Total_De_Material_Pasante_Menos_3_Colum3_No7,
            Total_De_Material_Pasante_Menos_3_Colum3_No8,
            Total_De_Material_Pasante_Menos_3_Colum4_No1,
            Total_De_Material_Pasante_Menos_3_Colum4_No2,
            Total_De_Material_Pasante_Menos_3_Colum4_No3,
            Total_De_Material_Pasante_Menos_3_Colum4_No4,
            Total_De_Material_Pasante_Menos_3_Colum4_No5,
            Total_De_Material_Pasante_Menos_3_Colum4_No6,
            Total_De_Material_Pasante_Menos_3_Colum4_No7,
            Total_De_Material_Pasante_Menos_3_Colum4_No8,
            Total_De_Material_Pasante_Menos_3_Colum5_No1,
            Total_De_Material_Pasante_Menos_3_Colum5_No2,
            Total_De_Material_Pasante_Menos_3_Colum5_No3,
            Total_De_Material_Pasante_Menos_3_Colum5_No4,
            Total_De_Material_Pasante_Menos_3_Colum5_No5,
            Total_De_Material_Pasante_Menos_3_Colum5_No6,
            Total_De_Material_Pasante_Menos_3_Colum5_No7,
            Total_De_Material_Pasante_Menos_3_Colum5_No8,
            Total_De_Material_Pasante_Menos_3_Colum6_No1,
            Total_De_Material_Pasante_Menos_3_Colum6_No2,
            Total_De_Material_Pasante_Menos_3_Colum6_No3,
            Total_De_Material_Pasante_Menos_3_Colum6_No4,
            Total_De_Material_Pasante_Menos_3_Colum6_No5,
            Total_De_Material_Pasante_Menos_3_Colum6_No6,
            Total_De_Material_Pasante_Menos_3_Colum6_No7,
            Total_De_Material_Pasante_Menos_3_Colum6_No8,
            Total_De_Material_Pasante_Menos_3_Colum7_No1,
            Total_De_Material_Pasante_Menos_3_Colum7_No2,
            Total_De_Material_Pasante_Menos_3_Colum7_No3,
            Total_De_Material_Pasante_Menos_3_Colum7_No4,
            Total_De_Material_Pasante_Menos_3_Colum7_No5,
            Total_De_Material_Pasante_Menos_3_Colum7_No6,
            Total_De_Material_Pasante_Menos_3_Colum7_No7,
            Total_De_Material_Pasante_Menos_3_Colum7_No8,
            Total_De_Material_Pasante_Menos_3_Colum8_No1,
            Total_De_Material_Pasante_Menos_3_Colum8_No2,
            Total_De_Material_Pasante_Menos_3_Colum8_No3,
            Total_De_Material_Pasante_Menos_3_Colum8_No4,
            Total_De_Material_Pasante_Menos_3_Colum8_No5,
            Total_De_Material_Pasante_Menos_3_Colum8_No6,
            Total_De_Material_Pasante_Menos_3_Colum8_No7,
            Total_De_Material_Pasante_Menos_3_Colum8_No8,
            Total_De_Material_Pasante_Menos_3_Colum9_No1,
            Total_De_Material_Pasante_Menos_3_Colum9_No2,
            Total_De_Material_Pasante_Menos_3_Colum9_No3,
            Total_De_Material_Pasante_Menos_3_Colum9_No4,
            Total_De_Material_Pasante_Menos_3_Colum9_No5,
            Total_De_Material_Pasante_Menos_3_Colum9_No6,
            Total_De_Material_Pasante_Menos_3_Colum9_No7,
            Total_De_Material_Pasante_Menos_3_Colum9_No8,
            Total_De_Material_Pasante_Menos_3_Colum10_No1,
            Total_De_Material_Pasante_Menos_3_Colum10_No2,
            Total_De_Material_Pasante_Menos_3_Colum10_No3,
            Total_De_Material_Pasante_Menos_3_Colum10_No4,
            Total_De_Material_Pasante_Menos_3_Colum10_No5,
            Total_De_Material_Pasante_Menos_3_Colum10_No6,
            Total_De_Material_Pasante_Menos_3_Colum10_No7,
            Total_De_Material_Pasante_Menos_3_Colum10_No8,
            Total_De_Muestra_Menor_de_3_Kg,
            Total_De_Muestra_Menor_de_3_Gr,
            Tare_Name_No1,
            Tare_Name_No2,
            Tare_Name_No3,
            Oven_Temperature_No1,
            Oven_Temperature_No2,
            Oven_Temperature_No3,
            Tare_Plus_Wet_Soil_Gr_No1,
            Tare_Plus_Wet_Soil_Gr_No2,
            Tare_Plus_Wet_Soil_Gr_No3,
            Tare_Plus_Dry_Soil_Gr_No1,
            Tare_Plus_Dry_Soil_Gr_No2,
            Tare_Plus_Dry_Soil_Gr_No3,
            Water_Ww_Gr_No1,
            Water_Ww_Gr_No2,
            Water_Ww_Gr_No3,
            Tare_Gr_No1,
            Tare_Gr_No2,
            Tare_Gr_No3,
            Dry_Soil_Ws_Gr_No1,
            Dry_Soil_Ws_Gr_No2,
            Dry_Soil_Ws_Gr_No3,
            Moisture_Content_Porce_No1,
            Moisture_Content_Porce_No2,
            Moisture_Content_Porce_No3,
            Moisture_Content_Average_Porce,
            Mayor_a_3_Gr,
            Menor_a_3_Gr,
            Total_Peso_Seco_Sucio_Gr,
            Total_Peso_Lavado_Gr,
            Perdida_Por_Lavado_Gr,
            Peso_Seco_Sucio,
            Peso_Lavado,
            Pan_Lavado,
            Wt_Ret_3,
            Ret_3,
            Cum_Ret_3,
            Pass_3,
            Wt_Ret_21p2,
            Ret_21p2,
            Cum_Ret_21p2,
            Pass_21p2,
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
            Factor_De_Conversion,
            Gs_Wt_Ret_50,
            Gs_Ret_50,
            Gs_Cum_Ret_50,
            Gs_Pass_50,
            Gs_Wt_Ret_40,
            Gs_Ret_40,
            Gs_Cum_Ret_40,
            Gs_Pass_40,
            Gs_Wt_Ret_12,
            Gs_Ret_12,
            Gs_Cum_Ret_12,
            Gs_Pass_12,
            Gs_Wt_Ret_10,
            Gs_Ret_10,
            Gs_Cum_Ret_10,
            Gs_Pass_10,
            Gs_Wt_Ret_8,
            Gs_Ret_8,
            Gs_Cum_Ret_8,
            Gs_Pass_8,
            Gs_Wt_Ret_6,
            Gs_Ret_6,
            Gs_Cum_Ret_6,
            Gs_Pass_6,
            Gs_Wt_Ret_4,
            Gs_Ret_4,
            Gs_Cum_Ret_4,
            Gs_Pass_4,
            Gs_Wt_Ret_3,
            Gs_Ret_3,
            Gs_Cum_Ret_3,
            Gs_Pass_3,
            Gs_Wt_Ret_2p5,
            Gs_Ret_2p5,
            Gs_Cum_Ret_2p5,
            Gs_Pass_2p5,
            Gs_Wt_Ret_2,
            Gs_Ret_2,
            Gs_Cum_Ret_2,
            Gs_Pass_2,
            Gs_Wt_Ret_1p5,
            Gs_Ret_1p5,
            Gs_Cum_Ret_1p5,
            Gs_Pass_1p5,
            Gs_Wt_Ret_1,
            Gs_Ret_1,
            Gs_Cum_Ret_1,
            Gs_Pass_1,
            Gs_Wt_Ret_3p4,
            Gs_Ret_3p4,
            Gs_Cum_Ret_3p4,
            Gs_Pass_3p4,
            Gs_Wt_Ret_1p2,
            Gs_Ret_1p2,
            Gs_Cum_Ret_1p2,
            Gs_Pass_1p2,
            Gs_Wt_Ret_3p8,
            Gs_Ret_3p8,
            Gs_Cum_Ret_3p8,
            Gs_Pass_3p8,
            Gs_Wt_Ret_No4,
            Gs_Ret_No4,
            Gs_Cum_Ret_No4,
            Gs_Pass_No4,
            Gs_Wt_Ret_No10,
            Gs_Ret_No10,
            Gs_Cum_Ret_No10,
            Gs_Pass_No10,
            Gs_Wt_Ret_No16,
            Gs_Ret_No16,
            Gs_Cum_Ret_No16,
            Gs_Pass_No16,
            Gs_Wt_Ret_No20,
            Gs_Ret_No20,
            Gs_Cum_Ret_No20,
            Gs_Pass_No20,
            Gs_Wt_Ret_No50,
            Gs_Ret_No50,
            Gs_Cum_Ret_No50,
            Gs_Pass_No50,
            Gs_Wt_Ret_No60,
            Gs_Ret_No60,
            Gs_Cum_Ret_No60,
            Gs_Pass_No60,
            Gs_Wt_Ret_No100,
            Gs_Ret_No100,
            Gs_Cum_Ret_No100,
            Gs_Pass_No100,
            Gs_Wt_Ret_No140,
            Gs_Ret_No140,
            Gs_Cum_Ret_No140,
            Gs_Pass_No140,
            Gs_Wt_Ret_No200,
            Gs_Ret_No200,
            Gs_Cum_Ret_No200,
            Gs_Pass_No200,
            Gs_Pan_Wt_Ret,
            Gs_Pan_Ret,
            Gs_Total_Wt_Ret,
            Gs_Total_Ret,
            Gs_Total_Cum_Ret,
            Gs_Total_Pass,
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
            '$Screen_40_No1',
            '$Screen_40_No2',
            '$Screen_40_No3',
            '$Screen_40_No4',
            '$Screen_40_No5',
            '$Screen_40_No6',
            '$Screen_40_No7',
            '$Total_40_No8',
            '$Screen_30_No1',
            '$Screen_30_No2',
            '$Screen_30_No3',
            '$Screen_30_No4',
            '$Screen_30_No5',
            '$Screen_30_No6',
            '$Screen_30_No7',
            '$Total_30_No8',
            '$Screen_20_No1',
            '$Screen_20_No2',
            '$Screen_20_No3',
            '$Screen_20_No4',
            '$Screen_20_No5',
            '$Screen_20_No6',
            '$Screen_20_No7',
            '$Total_20_No8',
            '$Screen_13_No1',
            '$Screen_13_No2',
            '$Screen_13_No3',
            '$Screen_13_No4',
            '$Screen_13_No5',
            '$Screen_13_No6',
            '$Screen_13_No7',
            '$Total_13_No8',
            '$Screen_12_No1',
            '$Screen_12_No2',
            '$Screen_12_No3',
            '$Screen_12_No4',
            '$Screen_12_No5',
            '$Screen_12_No6',
            '$Screen_12_No7',
            '$Total_12_No8',
            '$Screen_10_No1',
            '$Screen_10_No2',
            '$Screen_10_No3',
            '$Screen_10_No4',
            '$Screen_10_No5',
            '$Screen_10_No6',
            '$Screen_10_No7',
            '$Total_10_No8',
            '$Screen_8_No1',
            '$Screen_8_No2',
            '$Screen_8_No3',
            '$Screen_8_No4',
            '$Screen_8_No5',
            '$Screen_8_No6',
            '$Screen_8_No7',
            '$Total_8_No8',
            '$Screen_6_No1',
            '$Screen_6_No2',
            '$Screen_6_No3',
            '$Screen_6_No4',
            '$Screen_6_No5',
            '$Screen_6_No6',
            '$Screen_6_No7',
            '$Total_6_No8',
            '$Screen_4_No1',
            '$Screen_4_No2',
            '$Screen_4_No3',
            '$Screen_4_No4',
            '$Screen_4_No5',
            '$Screen_4_No6',
            '$Screen_4_No7',
            '$Total_4_No8',
            '$Screen_3_No1',
            '$Screen_3_No2',
            '$Screen_3_No3',
            '$Screen_3_No4',
            '$Screen_3_No5',
            '$Screen_3_No6',
            '$Screen_3_No7',
            '$Total_3_No8',
            '$Total_De_Muestra_Mayor_de_3_Kg',
            '$Total_De_Muestra_Mayor_de_3_Gr',
            '$Total_De_Material_Pasante_Menos_3_Colum1_No1',
            '$Total_De_Material_Pasante_Menos_3_Colum1_No2',
            '$Total_De_Material_Pasante_Menos_3_Colum1_No3',
            '$Total_De_Material_Pasante_Menos_3_Colum1_No4',
            '$Total_De_Material_Pasante_Menos_3_Colum1_No5',
            '$Total_De_Material_Pasante_Menos_3_Colum1_No6',
            '$Total_De_Material_Pasante_Menos_3_Colum1_No7',
            '$Total_De_Material_Pasante_Menos_3_Colum1_No8',
            '$Total_De_Material_Pasante_Menos_3_Colum2_No1',
            '$Total_De_Material_Pasante_Menos_3_Colum2_No2',
            '$Total_De_Material_Pasante_Menos_3_Colum2_No3',
            '$Total_De_Material_Pasante_Menos_3_Colum2_No4',
            '$Total_De_Material_Pasante_Menos_3_Colum2_No5',
            '$Total_De_Material_Pasante_Menos_3_Colum2_No6',
            '$Total_De_Material_Pasante_Menos_3_Colum2_No7',
            '$Total_De_Material_Pasante_Menos_3_Colum2_No8',
            '$Total_De_Material_Pasante_Menos_3_Colum3_No1',
            '$Total_De_Material_Pasante_Menos_3_Colum3_No2',
            '$Total_De_Material_Pasante_Menos_3_Colum3_No3',
            '$Total_De_Material_Pasante_Menos_3_Colum3_No4',
            '$Total_De_Material_Pasante_Menos_3_Colum3_No5',
            '$Total_De_Material_Pasante_Menos_3_Colum3_No6',
            '$Total_De_Material_Pasante_Menos_3_Colum3_No7',
            '$Total_De_Material_Pasante_Menos_3_Colum3_No8',
            '$Total_De_Material_Pasante_Menos_3_Colum4_No1',
            '$Total_De_Material_Pasante_Menos_3_Colum4_No2',
            '$Total_De_Material_Pasante_Menos_3_Colum4_No3',
            '$Total_De_Material_Pasante_Menos_3_Colum4_No4',
            '$Total_De_Material_Pasante_Menos_3_Colum4_No5',
            '$Total_De_Material_Pasante_Menos_3_Colum4_No6',
            '$Total_De_Material_Pasante_Menos_3_Colum4_No7',
            '$Total_De_Material_Pasante_Menos_3_Colum4_No8',
            '$Total_De_Material_Pasante_Menos_3_Colum5_No1',
            '$Total_De_Material_Pasante_Menos_3_Colum5_No2',
            '$Total_De_Material_Pasante_Menos_3_Colum5_No3',
            '$Total_De_Material_Pasante_Menos_3_Colum5_No4',
            '$Total_De_Material_Pasante_Menos_3_Colum5_No5',
            '$Total_De_Material_Pasante_Menos_3_Colum5_No6',
            '$Total_De_Material_Pasante_Menos_3_Colum5_No7',
            '$Total_De_Material_Pasante_Menos_3_Colum5_No8',
            '$Total_De_Material_Pasante_Menos_3_Colum6_No1',
            '$Total_De_Material_Pasante_Menos_3_Colum6_No2',
            '$Total_De_Material_Pasante_Menos_3_Colum6_No3',
            '$Total_De_Material_Pasante_Menos_3_Colum6_No4',
            '$Total_De_Material_Pasante_Menos_3_Colum6_No5',
            '$Total_De_Material_Pasante_Menos_3_Colum6_No6',
            '$Total_De_Material_Pasante_Menos_3_Colum6_No7',
            '$Total_De_Material_Pasante_Menos_3_Colum6_No8',
            '$Total_De_Material_Pasante_Menos_3_Colum7_No1',
            '$Total_De_Material_Pasante_Menos_3_Colum7_No2',
            '$Total_De_Material_Pasante_Menos_3_Colum7_No3',
            '$Total_De_Material_Pasante_Menos_3_Colum7_No4',
            '$Total_De_Material_Pasante_Menos_3_Colum7_No5',
            '$Total_De_Material_Pasante_Menos_3_Colum7_No6',
            '$Total_De_Material_Pasante_Menos_3_Colum7_No7',
            '$Total_De_Material_Pasante_Menos_3_Colum7_No8',
            '$Total_De_Material_Pasante_Menos_3_Colum8_No1',
            '$Total_De_Material_Pasante_Menos_3_Colum8_No2',
            '$Total_De_Material_Pasante_Menos_3_Colum8_No3',
            '$Total_De_Material_Pasante_Menos_3_Colum8_No4',
            '$Total_De_Material_Pasante_Menos_3_Colum8_No5',
            '$Total_De_Material_Pasante_Menos_3_Colum8_No6',
            '$Total_De_Material_Pasante_Menos_3_Colum8_No7',
            '$Total_De_Material_Pasante_Menos_3_Colum8_No8',
            '$Total_De_Material_Pasante_Menos_3_Colum9_No1',
            '$Total_De_Material_Pasante_Menos_3_Colum9_No2',
            '$Total_De_Material_Pasante_Menos_3_Colum9_No3',
            '$Total_De_Material_Pasante_Menos_3_Colum9_No4',
            '$Total_De_Material_Pasante_Menos_3_Colum9_No5',
            '$Total_De_Material_Pasante_Menos_3_Colum9_No6',
            '$Total_De_Material_Pasante_Menos_3_Colum9_No7',
            '$Total_De_Material_Pasante_Menos_3_Colum9_No8',
            '$Total_De_Material_Pasante_Menos_3_Colum10_No1',
            '$Total_De_Material_Pasante_Menos_3_Colum10_No2',
            '$Total_De_Material_Pasante_Menos_3_Colum10_No3',
            '$Total_De_Material_Pasante_Menos_3_Colum10_No4',
            '$Total_De_Material_Pasante_Menos_3_Colum10_No5',
            '$Total_De_Material_Pasante_Menos_3_Colum10_No6',
            '$Total_De_Material_Pasante_Menos_3_Colum10_No7',
            '$Total_De_Material_Pasante_Menos_3_Colum10_No8',
            '$Total_De_Muestra_Menor_de_3_Kg',
            '$Total_De_Muestra_Menor_de_3_Gr',
            '$Tare_Name_No1',
            '$Tare_Name_No2',
            '$Tare_Name_No3',
            '$Oven_Temperature_No1',
            '$Oven_Temperature_No2',
            '$Oven_Temperature_No3',
            '$Tare_Plus_Wet_Soil_Gr_No1',
            '$Tare_Plus_Wet_Soil_Gr_No2',
            '$Tare_Plus_Wet_Soil_Gr_No3',
            '$Tare_Plus_Dry_Soil_Gr_No1',
            '$Tare_Plus_Dry_Soil_Gr_No2',
            '$Tare_Plus_Dry_Soil_Gr_No3',
            '$Water_Ww_Gr_No1',
            '$Water_Ww_Gr_No2',
            '$Water_Ww_Gr_No3',
            '$Tare_Gr_No1',
            '$Tare_Gr_No2',
            '$Tare_Gr_No3',
            '$Dry_Soil_Ws_Gr_No1',
            '$Dry_Soil_Ws_Gr_No2',
            '$Dry_Soil_Ws_Gr_No3',
            '$Moisture_Content_Porce_No1',
            '$Moisture_Content_Porce_No2',
            '$Moisture_Content_Porce_No3',
            '$Moisture_Content_Average_Porce',
            '$Mayor_a_3_Gr',
            '$Menor_a_3_Gr',
            '$Total_Peso_Seco_Sucio_Gr',
            '$Total_Peso_Lavado_Gr',
            '$Perdida_Por_Lavado_Gr',
            '$Peso_Seco_Sucio',
            '$Peso_Lavado',
            '$Pan_Lavado',
            '$Wt_Ret_3',
            '$Ret_3',
            '$Cum_Ret_3',
            '$Pass_3',
            '$Wt_Ret_21p2',
            '$Ret_21p2',
            '$Cum_Ret_21p2',
            '$Pass_21p2',
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
            '$Factor_De_Conversion',
            '$Gs_Wt_Ret_50',
            '$Gs_Ret_50',
            '$Gs_Cum_Ret_50',
            '$Gs_Pass_50',
            '$Gs_Wt_Ret_40',
            '$Gs_Ret_40',
            '$Gs_Cum_Ret_40',
            '$Gs_Pass_40',
            '$Gs_Wt_Ret_12',
            '$Gs_Ret_12',
            '$Gs_Cum_Ret_12',
            '$Gs_Pass_12',
            '$Gs_Wt_Ret_10',
            '$Gs_Ret_10',
            '$Gs_Cum_Ret_10',
            '$Gs_Pass_10',
            '$Gs_Wt_Ret_8',
            '$Gs_Ret_8',
            '$Gs_Cum_Ret_8',
            '$Gs_Pass_8',
            '$Gs_Wt_Ret_6',
            '$Gs_Ret_6',
            '$Gs_Cum_Ret_6',
            '$Gs_Pass_6',
            '$Gs_Wt_Ret_4',
            '$Gs_Ret_4',
            '$Gs_Cum_Ret_4',
            '$Gs_Pass_4',
            '$Gs_Wt_Ret_3',
            '$Gs_Ret_3',
            '$Gs_Cum_Ret_3',
            '$Gs_Pass_3',
            '$Gs_Wt_Ret_2p5',
            '$Gs_Ret_2p5',
            '$Gs_Cum_Ret_2p5',
            '$Gs_Pass_2p5',
            '$Gs_Wt_Ret_2',
            '$Gs_Ret_2',
            '$Gs_Cum_Ret_2',
            '$Gs_Pass_2',
            '$Gs_Wt_Ret_1p5',
            '$Gs_Ret_1p5',
            '$Gs_Cum_Ret_1p5',
            '$Gs_Pass_1p5',
            '$Gs_Wt_Ret_1',
            '$Gs_Ret_1',
            '$Gs_Cum_Ret_1',
            '$Gs_Pass_1',
            '$Gs_Wt_Ret_3p4',
            '$Gs_Ret_3p4',
            '$Gs_Cum_Ret_3p4',
            '$Gs_Pass_3p4',
            '$Gs_Wt_Ret_1p2',
            '$Gs_Ret_1p2',
            '$Gs_Cum_Ret_1p2',
            '$Gs_Pass_1p2',
            '$Gs_Wt_Ret_3p8',
            '$Gs_Ret_3p8',
            '$Gs_Cum_Ret_3p8',
            '$Gs_Pass_3p8',
            '$Gs_Wt_Ret_No4',
            '$Gs_Ret_No4',
            '$Gs_Cum_Ret_No4',
            '$Gs_Pass_No4',
            '$Gs_Wt_Ret_No10',
            '$Gs_Ret_No10',
            '$Gs_Cum_Ret_No10',
            '$Gs_Pass_No10',
            '$Gs_Wt_Ret_No16',
            '$Gs_Ret_No16',
            '$Gs_Cum_Ret_No16',
            '$Gs_Pass_No16',
            '$Gs_Wt_Ret_No20',
            '$Gs_Ret_No20',
            '$Gs_Cum_Ret_No20',
            '$Gs_Pass_No20',
            '$Gs_Wt_Ret_No50',
            '$Gs_Ret_No50',
            '$Gs_Cum_Ret_No50',
            '$Gs_Pass_No50',
            '$Gs_Wt_Ret_No60',
            '$Gs_Ret_No60',
            '$Gs_Cum_Ret_No60',
            '$Gs_Pass_No60',
            '$Gs_Wt_Ret_No100',
            '$Gs_Ret_No100',
            '$Gs_Cum_Ret_No100',
            '$Gs_Pass_No100',
            '$Gs_Wt_Ret_No140',
            '$Gs_Ret_No140',
            '$Gs_Cum_Ret_No140',
            '$Gs_Pass_No140',
            '$Gs_Wt_Ret_No200',
            '$Gs_Ret_No200',
            '$Gs_Cum_Ret_No200',
            '$Gs_Pass_No200',
            '$Gs_Pan_Wt_Ret',
            '$Gs_Pan_Ret',
            '$Gs_Total_Wt_Ret',
            '$Gs_Total_Ret',
            '$Gs_Total_Cum_Ret',
            '$Gs_Total_Pass',
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
            '$Cu'
        )";

        if ($db->query($sql)) {
            $session->msg('s', "Ensayo agregado exitosamente.");
            redirect('./gs_rock.php', false);
        } else {
            $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
            redirect('./gs_rock.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('./gs_rock.php', false);
    }
}

?>