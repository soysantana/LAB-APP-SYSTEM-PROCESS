<?php

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['ADD_Muestra'])) {

    // Definimos los campos requeridos para la validación
    $req_fields = array(
        'Sample_ID',
        'Sample_Number'
    );    

    // Llamamos a la función para validar los campos
    validate_fields($req_fields);

// Validación de post: Comprobamos si no hay errores
if (empty($errors)) {

    // Informaciones basicas
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
    $Registed_Date = date('Y-m-d');
    

    $Test_Type1 = $db->escape($_POST['Test_Type1']);
    $Test_Type2 = $db->escape($_POST['Test_Type2']);
    $Test_Type3 = $db->escape($_POST['Test_Type3']);
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


// Componemos la sentencia SQL
$sql = "INSERT INTO lab_test_requisition_form (
    Sample_ID, 
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
    Comment, 
    Sample_Date, 
    Sample_By, 
    Registed_Date, 
    Sample_Number, 
    Register_By
)
VALUES (
    '$Sample_ID', 
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
    '$Comment', 
    '$Sample_Date', 
    '$Sample_By', 
    '$Registed_Date', 
    '$Sample_Number', 
    '$Register_By'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('add_Muestra.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('add_Muestra.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('add_Muestra.php', false);
  }
}

?>