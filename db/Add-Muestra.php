<?php
require_once('includes/load.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ADD_Muestra'])) {
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
        'Sample_Date', 
        'Sample_By',
        'Register_By'
    );

    // Función para validar y escapar datos del POST
    function validate_and_escape($field) {
        global $db;
        $value = trim($_POST[$field]);
        // Aquí puedes agregar tu propia lógica de validación si es necesario
        // Ejemplo: if (empty($value)) { return false; }
        return $db->escape($value);
    }

    $errors = array();

    // Obtén y escapa los valores de los campos del formulario
    foreach ($req_fields as $field) {
        ${$field} = validate_and_escape($field); // Usando ${$field} para crear variables dinámicas
        if (empty(${$field})) {
            $errors[] = "El campo $field es obligatorio.";
        }
    }

    if (empty($errors)) {
        // Los datos son válidos, procede con la inserción en la base de datos
        $sql = "INSERT INTO lab_test_requisition_form (
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
            Registed_Date
        ) VALUES (
            '$Sample_ID', 
            '$Sample_Number', 
            '$Structure', 
            '$Area', 
            '$Source', 
            '$Depth_From',
            '$Depth_To', 
            '$Material_Type', 
            '$Sample_Type', 
            '$North', 
            '$East', 
            '$Elev',
            '$Comment',
            '$Sample_Date',
            '$Sample_By',
            '$Register_By',
            NOW()
        )";

        if ($db->query($sql)) {
            $session->msg('s', "Datos de laboratorio agregados con éxito.");
        } else {
            $session->msg('d', 'Lo siento, no se pudieron agregar los datos de laboratorio.');
        }

        // Itera a través de los campos de prueba y agrega registros a lista_de_pendiente si están marcados
        $testTypes = array(
            'Test_Type1' => 'Mc_Oven',
            'Test_Type2' => 'Mc_Stove',
            'Test_Type3' => 'Mc_Scale',
            'Test_Type4' => 'AL',
            'Test_Type5' => 'GS',
            'Test_Type6' => 'SP',
            'Test_Type7' => 'SG',
            'Test_Type8' => 'AR',
            'Test_Type9' => 'SC',
            'Test_Type10' => 'LAA',
            'Test_Type11' => 'SND',
            'Test_Type12' => 'UCS',
            'Test_Type13' => 'PLT',
            'Test_Type14' => 'BTS',
            'Test_Type15' => 'HY',
            'Test_Type16' => 'DHY',
            'Test_Type17' => 'PH',
            'Test_Type18' => 'Cons',
            'Test_Type19' => 'Perm'
        );

        foreach ($testTypes as $testTypeKey => $testTypeValue) {
            if (!empty($_POST[$testTypeKey])) {
                $sql_lista_pendiente = "INSERT INTO lista_de_pendiente (
                    Sample_ID,
                    Sample_Number, 
                    Test_Type, 
                    Sample_Date
                ) VALUES (
                    '$Sample_ID', 
                    '$Sample_Number', 
                    '$testTypeValue',
                    '$Sample_Date' 
                )";
        
                if (!$db->query($sql_lista_pendiente)) {
                    $session->msg('d', 'Sorry, the essay could not be added for ' . $testTypeValue);
                }
            }
        }

        redirect('./add_Muestra.php', false);
    } else {
        $session->msg("d", implode('<br>', $errors));
        redirect('./add_Muestra.php', false);
    }
}
?>
