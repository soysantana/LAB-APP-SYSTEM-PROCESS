<?php

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['GroutSpecimens'])) {

    // Definimos los campos requeridos para la validación
    $req_fields = array(
        'sampleid',
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
        'TestStartDate'
    );    

    // Llamamos a la función para validar los campos
    validate_fields($req_fields);

// Validación de post: Comprobamos si no hay errores
if (empty($errors)) {

    // Valores obtenidos del AJAX
    $sampleid = $db->escape($_POST['sampleid']);
    $samplenumber = $db->escape($_POST['samplenumber']);
    $structure = $db->escape($_POST['structure']);
    $area = $db->escape($_POST['area']);
    $source = $db->escape($_POST['source']);
    $depthfrom = $db->escape($_POST['depthfrom']);
    $depthto = $db->escape($_POST['depthto']);
    $materialtype = $db->escape($_POST['materialtype']);
    $sampletype = $db->escape($_POST['sampletype']);
    $north = $db->escape($_POST['north']);
    $east = $db->escape($_POST['east']);
    $elev = $db->escape($_POST['elev']);
    $sampledate = $db->escape($_POST['sampledate']);
    $reportdate = make_date();
    $testype = "UCS-grout";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $PreparationMethod = $db->escape($_POST['PreparationMethod']);
    $SplitMethod = $db->escape($_POST['SplitMethod']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $DiameterN1 = $db->escape($_POST['DiameterN1']);
    $DiameterN2 = $db->escape($_POST['DiameterN2']);
    $DiameterN3 = $db->escape($_POST['DiameterN3']);
    $DiameterN4 = $db->escape($_POST['DiameterN4']);
    $DiameterN5 = $db->escape($_POST['DiameterN5']);

    $HighN1 = $db->escape($_POST['HighN1']);
    $HighN2 = $db->escape($_POST['HighN2']);
    $HighN3 = $db->escape($_POST['HighN3']);
    $HighN4 = $db->escape($_POST['HighN4']);
    $HighN5 = $db->escape($_POST['HighN5']);
    $LengthN1 = $db->escape($_POST['LengthN1']);
    $LengthN2 = $db->escape($_POST['LengthN2']);
    $LengthN3 = $db->escape($_POST['LengthN3']);
    $LengthN4 = $db->escape($_POST['LengthN4']);
    $LengthN5 = $db->escape($_POST['LengthN5']);
    $Aream2N1 = $db->escape($_POST['Aream2N1']);
    $Aream2N2 = $db->escape($_POST['Aream2N2']);
    $Aream2N3 = $db->escape($_POST['Aream2N3']);
    $Aream2N4 = $db->escape($_POST['Aream2N4']);
    $Aream2N5 = $db->escape($_POST['Aream2N5']);
    $Volumenm3N1 = $db->escape($_POST['Volumenm3N1']);
    $Volumenm3N2 = $db->escape($_POST['Volumenm3N2']);
    $Volumenm3N3 = $db->escape($_POST['Volumenm3N3']);
    $Volumenm3N4 = $db->escape($_POST['Volumenm3N4']);
    $Volumenm3N5 = $db->escape($_POST['Volumenm3N5']);
    $WeightCylinderkgN1 = $db->escape($_POST['WeightCylinderkgN1']);
    $WeightCylinderkgN2 = $db->escape($_POST['WeightCylinderkgN2']);
    $WeightCylinderkgN3 = $db->escape($_POST['WeightCylinderkgN3']);
    $WeightCylinderkgN4 = $db->escape($_POST['WeightCylinderkgN4']);
    $WeightCylinderkgN5 = $db->escape($_POST['WeightCylinderkgN5']);
    $AgeDaysN1 = $db->escape($_POST['AgeDaysN1']);
    $AgeDaysN2 = $db->escape($_POST['AgeDaysN2']);
    $AgeDaysN3 = $db->escape($_POST['AgeDaysN3']);
    $AgeDaysN4 = $db->escape($_POST['AgeDaysN4']);
    $AgeDaysN5 = $db->escape($_POST['AgeDaysN5']);
    $UnitWeightkgm3N1 = $db->escape($_POST['UnitWeightkgm3N1']);
    $UnitWeightkgm3N2 = $db->escape($_POST['UnitWeightkgm3N2']);
    $UnitWeightkgm3N3 = $db->escape($_POST['UnitWeightkgm3N3']);
    $UnitWeightkgm3N4 = $db->escape($_POST['UnitWeightkgm3N4']);
    $UnitWeightkgm3N5 = $db->escape($_POST['UnitWeightkgm3N5']);
    $FailureLoadknN1 = $db->escape($_POST['FailureLoadknN1']);
    $FailureLoadknN2 = $db->escape($_POST['FailureLoadknN2']);
    $FailureLoadknN3 = $db->escape($_POST['FailureLoadknN3']);
    $FailureLoadknN4 = $db->escape($_POST['FailureLoadknN4']);
    $FailureLoadknN5 = $db->escape($_POST['FailureLoadknN5']);
    $StrenghtMpaN1 = $db->escape($_POST['StrenghtMpaN1']);
    $StrenghtMpaN2 = $db->escape($_POST['StrenghtMpaN2']);
    $StrenghtMpaN3 = $db->escape($_POST['StrenghtMpaN3']);
    $StrenghtMpaN4 = $db->escape($_POST['StrenghtMpaN4']);
    $StrenghtMpaN5 = $db->escape($_POST['StrenghtMpaN5']);
    $AverageStrenghtMpa = $db->escape($_POST['AverageStrenghtMpa']);
    $TypeMpaN1 = $db->escape($_POST['TypeMpaN1']);
    $TypeMpaN2 = $db->escape($_POST['TypeMpaN2']);
    $TypeMpaN3 = $db->escape($_POST['TypeMpaN3']);
    $TypeMpaN4 = $db->escape($_POST['TypeMpaN4']);
    $TypeMpaN5 = $db->escape($_POST['TypeMpaN5']);
    $ObservationsN1 = $db->escape($_POST['ObservationsN1']);
    $ObservationsN2 = $db->escape($_POST['ObservationsN2']);
    $ObservationsN3 = $db->escape($_POST['ObservationsN3']);
    $ObservationsN4 = $db->escape($_POST['ObservationsN4']);
    $ObservationsN5 = $db->escape($_POST['ObservationsN5']);

// Componemos la sentencia SQL
$sql = "INSERT INTO grout_specimens (
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
    Sample_Date, 
    Report_Date, 
    test_type, 
    Standard, 
    Preparation_Method,
    Split_Method,
    Comments,
    Technician,
    Test_Start_Date,
    Diameter_N1,
    Diameter_N2,
    Diameter_N3,
    Diameter_N4,
    Diameter_N5,
    High_N1,
    High_N2,
    High_N3,
    High_N4,
    High_N5,
    Length_N1,
    Length_N2,
    Length_N3,
    Length_N4,
    Length_N5,
    Area_m2_N1,
    Area_m2_N2,
    Area_m2_N3,
    Area_m2_N4,
    Area_m2_N5,
    Volumen_m3_N1,
    Volumen_m3_N2,
    Volumen_m3_N3,
    Volumen_m3_N4,
    Volumen_m3_N5,
    Weight_Cylinder_kg_N1,
    Weight_Cylinder_kg_N2,
    Weight_Cylinder_kg_N3,
    Weight_Cylinder_kg_N4,
    Weight_Cylinder_kg_N5,
    Age_Days_N1,
    Age_Days_N2,
    Age_Days_N3,
    Age_Days_N4,
    Age_Days_N5,
    Unit_Weight_kgm3_N1,
    Unit_Weight_kgm3_N2,
    Unit_Weight_kgm3_N3,
    Unit_Weight_kgm3_N4,
    Unit_Weight_kgm3_N5,
    Failure_Load_kn_N1,
    Failure_Load_kn_N2,
    Failure_Load_kn_N3,
    Failure_Load_kn_N4,
    Failure_Load_kn_N5,
    Strenght_Mpa_N1,
    Strenght_Mpa_N2,
    Strenght_Mpa_N3,
    Strenght_Mpa_N4,
    Strenght_Mpa_N5,
    Average_Strenght_Mpa,
    Type_Mpa_N1,
    Type_Mpa_N2,
    Type_Mpa_N3,
    Type_Mpa_N4,
    Type_Mpa_N5,
    Observations_N1,
    Observations_N2,
    Observations_N3,
    Observations_N4,
    Observations_N5
)
VALUES (
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
    '$sampledate',
    '$reportdate',
    '$testype',
    '$Standard',
    '$PreparationMethod',
    '$SplitMethod',
    '$Comments',
    '$Technician',
    '$TestStartDate',
    '$DiameterN1',
    '$DiameterN2',
    '$DiameterN3',
    '$DiameterN4',
    '$DiameterN5',
    '$HighN1',
    '$HighN2',
    '$HighN3',
    '$HighN4',
    '$HighN5',
    '$LengthN1',
    '$LengthN2',
    '$LengthN3',
    '$LengthN4',
    '$LengthN5',
    '$Aream2N1',
    '$Aream2N2',
    '$Aream2N3',
    '$Aream2N4',
    '$Aream2N5',
    '$Volumenm3N1',
    '$Volumenm3N2',
    '$Volumenm3N3',
    '$Volumenm3N4',
    '$Volumenm3N5',
    '$WeightCylinderkgN1',
    '$WeightCylinderkgN2',
    '$WeightCylinderkgN3',
    '$WeightCylinderkgN4',
    '$WeightCylinderkgN5',
    '$AgeDaysN1',
    '$AgeDaysN2',
    '$AgeDaysN3',
    '$AgeDaysN4',
    '$AgeDaysN5',
    '$UnitWeightkgm3N1',
    '$UnitWeightkgm3N2',
    '$UnitWeightkgm3N3',
    '$UnitWeightkgm3N4',
    '$UnitWeightkgm3N5',
    '$FailureLoadknN1',
    '$FailureLoadknN2',
    '$FailureLoadknN3',
    '$FailureLoadknN4',
    '$FailureLoadknN5',
    '$StrenghtMpaN1',
    '$StrenghtMpaN2',
    '$StrenghtMpaN3',
    '$StrenghtMpaN4',
    '$StrenghtMpaN5',
    '$AverageStrenghtMpa',
    '$TypeMpaN1',
    '$TypeMpaN2',
    '$TypeMpaN3',
    '$TypeMpaN4',
    '$TypeMpaN5',
    '$ObservationsN1',
    '$ObservationsN2',
    '$ObservationsN3',
    '$ObservationsN4',
    '$ObservationsN5'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./grout_specimens.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./grout_specimens.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./grout_specimens.php', false);
  }
}

?>