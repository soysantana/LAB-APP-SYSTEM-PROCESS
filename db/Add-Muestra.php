<?php
// Función para obtener y escapar datos del POST
function get_post_data($field) {
    global $db;
    return $db->escape($_POST[$field]);
}

if (isset($_POST['ADD_Muestra'])) {
    $req_fields = array(
        'Sample_ID', 
        'Sample_Number', 
        'Structure', 
        'Area', 
        'Source', 
        'Depth_From', 
        'Depth_To', 
        'Material_Type',
        'Sample_Type', 
        'North', 
        'East', 
        'Elev', 
        'Comment', 
        'Sample_Date', 
        'Sample_By',
        'Register_By'
    );

    validate_fields($req_fields);

    if (empty($errors)) {
        $sampleid = get_post_data('Sample_ID');
        $samplenumber = get_post_data('Sample_Number');
        $structure = get_post_data('Structure');
        $area = get_post_data('Area');
        $source = get_post_data('Source');
        $depthfrom = get_post_data('Depth_From');
        $depthto = get_post_data('Depth_To');
        $materialtype = get_post_data('Material_Type');
        $sampletype = get_post_data('Sample_Type');
        $north = get_post_data('North');
        $east = get_post_data('East');
        $elev = get_post_data('Elev');
        $comment = get_post_data('Comment');
        $sampledate = get_post_data('Sample_Date');
        $sampleby = get_post_data('Sample_By');
        $Register_By = get_post_data('Register_By');
        $registed_date = make_date();
        $Test_Type1 = get_post_data('Mc_Oven');
        $Test_Type2 = get_post_data('Mc_Stove');
        $Test_Type3 = get_post_data('Mc_Scale');
        $Test_Type4 = get_post_data('AL');
        $Test_Type5 = get_post_data('GS');
        $Test_Type6 = get_post_data('SP');
        $Test_Type7 = get_post_data('SG');
        $Test_Type8 = get_post_data('AR');
        $Test_Type9 = get_post_data('SC');
        $Test_Type10 = get_post_data('LAA');
        $Test_Type11 = get_post_data('SND');
        $Test_Type12 = get_post_data('UCS');
        $Test_Type13 = get_post_data('PLT');
        $Test_Type14 = get_post_data('BTS');
        $Test_Type15 = get_post_data('HY');
        $Test_Type16 = get_post_data('DHY');
        $Test_Type17 = get_post_data('PH');
        $Test_Type18 = get_post_data('Cons');
        $Test_Type19 = get_post_data('Perm');

        $testTypes = array(
            'Mc_Oven',
            'Mc_Stove',
            'Mc_Scale',
            'AL',
            'GS',
            'SP',
            'SG',
            'AR',
            'SC',
            'LAA',
            'SND',
            'UCS',
            'PLT',
            'BTS',
            'HY',
            'DHY',
            'PH',
            'Cons',
            'Perm'
        );

        $sql_lab_test = "INSERT INTO lab_test_requisition_form (
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
            Comment,
            Sample_Date, 
            Sample_By,
            Register_By, 
            Registed_Date,
            Test_Type1,
            Test_Type2,
            Test_Type3,
            Test_Type4,
            Test_Type5,
            Test_Type6,
            Test_Type7,
            Test_Type8,
            Test_Type9,
            Test_Type10,
            Test_Type11,
            Test_Type12,
            Test_Type13,
            Test_Type14,
            Test_Type15,
            Test_Type16,
            Test_Type17,
            Test_Type18,
            Test_Type19

        ) VALUES (
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
            '$comment',
            '$sampledate',
            '$sampleby',
            '$Register_By',
            '$registed_date',
            '$Test_Type1',
            '$Test_Type2',
            '$Test_Type3',
            '$Test_Type4',
            '$Test_Type5',
            '$Test_Type6',
            '$Test_Type7',
            '$Test_Type8',
            '$Test_Type9',
            '$Test_Type10',
            '$Test_Type11',
            '$Test_Type12',
            '$Test_Type13',
            '$Test_Type14',
            '$Test_Type15',
            '$Test_Type16',
            '$Test_Type17',
            '$Test_Type18',
            '$Test_Type19'
        )";
        
        if ($db->query($sql_lab_test)) {
            $session->msg('s', "Lab data added successfully.");
        } else {
            $session->msg('d', 'Sorry, lab data could not be added.');
        }
        
        // Itera a través de los test_types y agrega una fila en la tabla "lista_de_pendiente" solo si no está vacío
        foreach ($testTypes as $testType) {
            $testTypeValue = get_post_data($testType);
            if (!empty($testTypeValue)) {
                $sql_lista_pendiente = "INSERT INTO lista_de_pendiente (
                    Sample_ID,
                    Sample_Number, 
                    Test_Type, 
                    Sample_Date

                ) VALUES (
                    '$sampleid', 
                    '$samplenumber', 
                    '$testTypeValue',
                    '$sampledate' 
                )";
                
                if (!$db->query($sql_lista_pendiente)) {
                    $session->msg('d', 'Sorry, the essay could not be added for ' . $testType);
                }
            }
        }

        redirect('./add_Muestra.php', false);
    } else {
        $session->msg("d", $errors);
        redirect('./add_Muestra.php', false);
    }
}

?>