<?php

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['UCS'])) {

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
        'Method',
        'ExtraEquip',
        'CutterEquip',
        'TestDevice',
        'Temperature',
        'Comments',
        'Technician',
        'TestStartDate',
        'DimensionDcm',
        'DimensionHcm',
        'RelationhD',
        'Aream2',
        'Volumem3',
        'WeightCoreKg',
        'UnitWeightCorekgm3',
        'FailureLoandKN',
        'TestTimingS',
        'LoadProportionMpas',
        'uniaxialCompressiveStrenghtMpa'
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
    $testype = "UCS";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $Method = $db->escape($_POST['Method']);
    $ExtraEquip = $db->escape($_POST['ExtraEquip']);
    $CutterEquip = $db->escape($_POST['CutterEquip']);
    $TestDevice = $db->escape($_POST['TestDevice']);
    $Temperature = $db->escape($_POST['Temperature']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $DimensionDcm = $db->escape($_POST['DimensionDcm']);
    $DimensionHcm = $db->escape($_POST['DimensionHcm']);
    $RelationhD = $db->escape($_POST['RelationhD']);
    $Aream2 = $db->escape($_POST['Aream2']);
    $Volumem3 = $db->escape($_POST['Volumem3']);
    $WeightCoreKg = $db->escape($_POST['WeightCoreKg']);
    $UnitWeightCorekgm3 = $db->escape($_POST['UnitWeightCorekgm3']);
    $FailureLoandKN = $db->escape($_POST['FailureLoandKN']);
    $TestTimingS = $db->escape($_POST['TestTimingS']);
    $LoadProportionMpas = $db->escape($_POST['LoadProportionMpas']);
    $uniaxialCompressiveStrenghtMpa = $db->escape($_POST['uniaxialCompressiveStrenghtMpa']);

// Componemos la sentencia SQL
$sql = "INSERT INTO uniaxial_compressive_strength (
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
    Method,
    Extraction_Equipment,
    Cutter_Equipment,
    Test_Device,
    Comments,
    Technician,
    Test_Start_Date,
    Dimension_D_cm,
    Dimension_H_cm,
    Relation_hD,
    Area_m2,
    Volume_m3,
    Weight_Core_Kg,
    Unit_Weight_Core_kgm3,
    Failure_Loand_KN,
    Test_Timing_S,
    Load_Proportion_Mpas,
    uniaxial_Compressive_Strenght_Mpa
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
    '$Method',
    '$ExtraEquip',
    '$CutterEquip',
    '$TestDevice',
    '$Comments',
    '$Technician',
    '$TestStartDate',
    '$DimensionDcm',
    '$DimensionHcm',
    '$RelationhD',
    '$Aream2',
    '$Volumem3',
    '$WeightCoreKg',
    '$UnitWeightCorekgm3',
    '$FailureLoandKN',
    '$TestTimingS',
    '$LoadProportionMpas',
    '$uniaxialCompressiveStrenghtMpa'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./UCS.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./UCS.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./UCS.php', false);
  }
}

?>

<?php
$search_table = find_by_id('uniaxial_compressive_strength', (int)$_GET['id']);
  // Verifica si se ha enviado el formulario
  if (isset($_POST['update_muestra'])) {
    $req_fields = array(
      'Standard'
    );
    
    // Valida los campos requeridos
    validate_fields($req_fields);

    if (empty($errors)) {
      // Obtiene los valores de los campos del formulario
      $Standard = remove_junk($db->escape($_POST['Standard']));
      $Method = remove_junk($db->escape($_POST['Method']));
      $ExtraEquip = remove_junk($db->escape($_POST['ExtraEquip']));
      $CutterEquip = remove_junk($db->escape($_POST['CutterEquip']));
      $TestDevice = remove_junk($db->escape($_POST['TestDevice']));
      $Comments = remove_junk($db->escape($_POST['Comments']));
      $Technician = remove_junk($db->escape($_POST['Technician']));
      $TestStartDate = remove_junk($db->escape($_POST['TestStartDate']));
  
      $DimensionDcm = remove_junk($db->escape($_POST['DimensionDcm']));
      $DimensionHcm = remove_junk($db->escape($_POST['DimensionHcm']));
      $RelationhD = remove_junk($db->escape($_POST['RelationhD']));
      $Aream2 = remove_junk($db->escape($_POST['Aream2']));
      $Volumem3 = remove_junk($db->escape($_POST['Volumem3']));
      $WeightCoreKg = remove_junk($db->escape($_POST['WeightCoreKg']));
      $UnitWeightCorekgm3 = remove_junk($db->escape($_POST['UnitWeightCorekgm3']));
      $FailureLoandKN = remove_junk($db->escape($_POST['FailureLoandKN']));
      $TestTimingS = remove_junk($db->escape($_POST['TestTimingS']));
      $LoadProportionMpas = remove_junk($db->escape($_POST['LoadProportionMpas']));
      $uniaxialCompressiveStrenghtMpa = remove_junk($db->escape($_POST['uniaxialCompressiveStrenghtMpa']));

      $query = "UPDATE uniaxial_compressive_strength SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Method = '{$Method}', ";
      $query .= "Extraction_Equipment = '{$ExtraEquip}', ";
      $query .= "Cutter_Equipment = '{$CutterEquip}', ";
      $query .= "Test_Device = '{$TestDevice}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Dimension_D_cm = '{$DimensionDcm}', ";
      $query .= "Dimension_H_cm = '{$DimensionHcm}', ";
      $query .= "Relation_hD = '{$RelationhD}', ";
      $query .= "Area_m2 = '{$Aream2}', ";
      $query .= "Volume_m3 = '{$Volumem3}', ";
      $query .= "Weight_Core_Kg = '{$WeightCoreKg}', ";
      $query .= "Unit_Weight_Core_kgm3 = '{$UnitWeightCorekgm3}', ";
      $query .= "Failure_Loand_KN = '{$FailureLoandKN}', ";
      $query .= "Test_Timing_S = '{$TestTimingS}', ";
      $query .= "Load_Proportion_Mpas = '{$LoadProportionMpas}', ";
      $query .= "uniaxial_Compressive_Strenght_Mpa = '{$uniaxialCompressiveStrenghtMpa}' ";
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-UCS.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-UCS.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-UCS.php?id=' . $search_table['id'], false);
    }
  }
?>