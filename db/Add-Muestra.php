<?php
require_once('includes/load.php');

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['ADD_Muestra'])) {

  // Definimos los campos requeridos para la validación
  $req_fields = array(
      'Sample_ID'
  );    

  // Llamamos a la función para validar los campos
  validate_fields($req_fields);

// Validación de post: Comprobamos si no hay errores
if (empty($errors)) {

  // Valores obtenidos del AJAX
  $Sample_ID = $db->escape($_POST['Sample_ID']);
  $Sample_Number = $db->escape($_POST['Sample_Number']);
  $Structure = $db->escape($_POST['Structure']);
  $Area = $db->escape($_POST['Area']);
  $Source = $db->escape($_POST['Source']);
  $Depth_From = $db->escape($_POST['Depth_From']);
  $Depth_To = $db->escape($_POST['Depth_To']);
  $Material_Type = $db->escape($_POST['Material_Type']);
  $Sample_Type = $db->escape($_POST['Sample_Type']);
  $North = $db->escape($_POST['North']);
  $East = $db->escape($_POST['East']);
  $Elev = $db->escape($_POST['Elev']);
  $Comment = $db->escape($_POST['Comment']);
  $Sample_By = $db->escape($_POST['Sample_By']);
  $Sample_Date = $db->escape($_POST['Sample_Date']);
  $Register_By = $db->escape($_POST['Register_By']);
  $Registed_Date = make_date();

  $Test_Type1 = $db->escape($_POST['Test_Type1']);
  $Test_Type2  = $db->escape($_POST['Test_Type2']);
  $Test_Type3  = $db->escape($_POST['Test_Type3']);
  $Test_Type4 = $db->escape($_POST['Test_Type4']);
  $Test_Type5 = $db->escape($_POST['Test_Type5']);
  $Test_Type6 = $db->escape($_POST['Test_Type6']);
  $Test_Type7 = $db->escape($_POST['Test_Type7']);
  $Test_Type8 = $db->escape($_POST['Test_Type8']);
  $Test_Type9 = $db->escape($_POST['Test_Type9']);
  $Test_Type10 = $db->escape($_POST['Test_Type10']);
  $Test_Type11 = $db->escape($_POST['Test_Type11']);
  $Test_Type12 = $db->escape($_POST['Test_Type12']);
  $Test_Type13 = $db->escape($_POST['Test_Type13']);
  $Test_Type14 = $db->escape($_POST['Test_Type14']);
  $Test_Type15 = $db->escape($_POST['Test_Type15']);
  $Test_Type16 = $db->escape($_POST['Test_Type16']);
  $Test_Type17 = $db->escape($_POST['Test_Type17']);
  $Test_Type18 = $db->escape($_POST['Test_Type18']);
  $Test_Type19 = $db->escape($_POST['Test_Type19']);
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
            Test_Type19,
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
            '$Test_Type19',
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

        redirect('add_Muestra.php', false);
    } else {
        $session->msg("d", 'Hubo un error :(', $errors);
        redirect('add_Muestra.php', false);
    }
}
?>