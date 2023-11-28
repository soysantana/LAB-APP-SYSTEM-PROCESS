<?php

$user = current_user();

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['density_bulk'])) {

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
    $testype = "Bulk-density";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $PreparationMethod = $db->escape($_POST['PreparationMethod']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

    $Container = $db->escape($_POST['Container']);
    $WeightTareg = $db->escape($_POST['WeightTareg']);
    $WeightTareSoilg = $db->escape($_POST['WeightTareSoilg']);
    $VolumeTheMoldm3 = $db->escape($_POST['VolumeTheMoldm3']);
    $WeightLooseMaterialg = $db->escape($_POST['WeightLooseMaterialg']);
    $AbsorptionPorce = $db->escape($_POST['AbsorptionPorce']);
    $SpecificGravityOD = $db->escape($_POST['SpecificGravityOD']);
    $DensityWaterKgm3 = $db->escape($_POST['DensityWaterKgm3']);
    $LooseBulkDenistyKgm3 = $db->escape($_POST['LooseBulkDenistyKgm3']);
    $PercentVoidsLooseAggregate = $db->escape($_POST['PercentVoidsLooseAggregate']);
    
    $CompactedWeightTareg = $db->escape($_POST['CompactedWeightTareg']);
    $CompactedWeightTareSoilg = $db->escape($_POST['CompactedWeightTareSoilg']);
    $CompactedVolumeTheMoldm3 = $db->escape($_POST['CompactedVolumeTheMoldm3']);
    $WeightCompactedMaterialg = $db->escape($_POST['WeightCompactedMaterialg']);
    $CompactedAbsorptionPorce = $db->escape($_POST['CompactedAbsorptionPorce']);
    $CompactedSpecificGravityOD = $db->escape($_POST['CompactedSpecificGravityOD']);
    $CompactedDensityWaterKgm3 = $db->escape($_POST['CompactedDensityWaterKgm3']);
    $CompactedBulkDenistyKgm3 = $db->escape($_POST['CompactedBulkDenistyKgm3']);
    $PercentVoidsCompactedAggregate = $db->escape($_POST['PercentVoidsCompactedAggregate']);

    $RegisterBy = $user['name'];

// Componemos la sentencia SQL
$sql = "INSERT INTO density_bulk (
    Sample_ID, 
    Sample_Number, 
    Structure, Area, 
    Source, Depth_From, 
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
    Comments,
    Technician,
    Test_Start_Date,
    Container,
    Weight_Tare_g,
    Weight_Tare_Soil_g,
    Volume_The_Mold_m3,
    Weight_Loose_Material_g,
    Absorption_Porce,
    Specific_Gravity_OD,
    Density_Water_Kgm3,
    Loose_Bulk_Denisty_Kgm3,
    Percent_Voids_Loose_Aggregate,
    Compacted_Weight_Tare_g,
    Compacted_Weight_Tare_Soil_g,
    Compacted_Volume_The_Mold_m3,
    Weight_Compacted_Material_g,
    Compacted_Absorption_Porce,
    Compacted_Specific_Gravity_OD,
    Compacted_Density_Water_Kgm3,
    Compacted_Bulk_Denisty_Kgm3,
    Percent_Voids_Compacted_Aggregate,
    Registered_By
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
    '$Comments',
    '$Technician',
    '$TestStartDate',
    '$Container',
    '$WeightTareg',
    '$WeightTareSoilg',
    '$VolumeTheMoldm3',
    '$WeightLooseMaterialg',
    '$AbsorptionPorce',
    '$SpecificGravityOD',
    '$DensityWaterKgm3',
    '$LooseBulkDenistyKgm3',
    '$PercentVoidsLooseAggregate',
    '$CompactedWeightTareg',
    '$CompactedWeightTareSoilg',
    '$CompactedVolumeTheMoldm3',
    '$WeightCompactedMaterialg',
    '$CompactedAbsorptionPorce',
    '$CompactedSpecificGravityOD',
    '$CompactedDensityWaterKgm3',
    '$CompactedBulkDenistyKgm3',
    '$PercentVoidsCompactedAggregate',
    '$RegisterBy'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./density_bulk.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./density_bulk.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./density_bulk.php', false);
  }
}

?>


<?php
$search_table = find_by_id('density_bulk', (int)$_GET['id']);
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
      $PreparationMethod = remove_junk($db->escape($_POST['PreparationMethod']));
      $Comments = remove_junk($db->escape($_POST['Comments']));
      $Technician = remove_junk($db->escape($_POST['Technician']));
      $TestStartDate = remove_junk($db->escape($_POST['TestStartDate']));
  
      $Container = remove_junk($db->escape($_POST['Container']));
      $WeightTareg = remove_junk($db->escape($_POST['WeightTareg']));
      $WeightTareSoilg = remove_junk($db->escape($_POST['WeightTareSoilg']));
      $VolumeTheMoldm3 = remove_junk($db->escape($_POST['VolumeTheMoldm3']));
      $WeightLooseMaterialg = remove_junk($db->escape($_POST['WeightLooseMaterialg']));
      $AbsorptionPorce = remove_junk($db->escape($_POST['AbsorptionPorce']));
      $SpecificGravityOD = remove_junk($db->escape($_POST['SpecificGravityOD']));
      $DensityWaterKgm3 = remove_junk($db->escape($_POST['DensityWaterKgm3']));
      $LooseBulkDenistyKgm3 = remove_junk($db->escape($_POST['LooseBulkDenistyKgm3']));
      $PercentVoidsLooseAggregate = remove_junk($db->escape($_POST['PercentVoidsLooseAggregate']));
      
      $CompactedWeightTareg = remove_junk($db->escape($_POST['CompactedWeightTareg']));
      $CompactedWeightTareSoilg = remove_junk($db->escape($_POST['CompactedWeightTareSoilg']));
      $CompactedVolumeTheMoldm3 = remove_junk($db->escape($_POST['CompactedVolumeTheMoldm3']));
      $WeightCompactedMaterialg = remove_junk($db->escape($_POST['WeightCompactedMaterialg']));
      $CompactedAbsorptionPorce = remove_junk($db->escape($_POST['CompactedAbsorptionPorce']));
      $CompactedSpecificGravityOD = remove_junk($db->escape($_POST['CompactedSpecificGravityOD']));
      $CompactedDensityWaterKgm3 = remove_junk($db->escape($_POST['CompactedDensityWaterKgm3']));
      $CompactedBulkDenistyKgm3 = remove_junk($db->escape($_POST['CompactedBulkDenistyKgm3']));
      $PercentVoidsCompactedAggregate = remove_junk($db->escape($_POST['PercentVoidsCompactedAggregate']));

      $RegisterBy = $user['name'];

      $query = "UPDATE density_bulk SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Container = '{$Container}', ";
      $query .= "Weight_Tare_g = '{$WeightTareg}', ";
      $query .= "Weight_Tare_Soil_g = '{$WeightTareSoilg}', ";
      $query .= "Volume_The_Mold_m3 = '{$VolumeTheMoldm3}', ";
      $query .= "Weight_Loose_Material_g = '{$WeightLooseMaterialg}', ";
      $query .= "Absorption_Porce = '{$AbsorptionPorce}', ";
      $query .= "Specific_Gravity_OD = '{$SpecificGravityOD}', ";
      $query .= "Density_Water_Kgm3 = '{$DensityWaterKgm3}', ";
      $query .= "Loose_Bulk_Denisty_Kgm3 = '{$LooseBulkDenistyKgm3}', ";
      $query .= "Percent_Voids_Loose_Aggregate = '{$PercentVoidsLooseAggregate}', ";

      $query .= "Compacted_Weight_Tare_g = '{$CompactedWeightTareg}', ";
      $query .= "Compacted_Weight_Tare_Soil_g = '{$CompactedWeightTareSoilg}', ";
      $query .= "Compacted_Volume_The_Mold_m3 = '{$CompactedVolumeTheMoldm3}', ";
      $query .= "Weight_Compacted_Material_g = '{$WeightCompactedMaterialg}', ";
      $query .= "Compacted_Absorption_Porce = '{$CompactedAbsorptionPorce}', ";
      $query .= "Compacted_Specific_Gravity_OD = '{$CompactedSpecificGravityOD}', ";
      $query .= "Compacted_Density_Water_Kgm3 = '{$CompactedDensityWaterKgm3}', ";
      $query .= "Compacted_Bulk_Denisty_Kgm3 = '{$CompactedBulkDenistyKgm3}', ";
      $query .= "Percent_Voids_Compacted_Aggregate = '{$PercentVoidsCompactedAggregate}', ";
      $query .= "Registered_By = '{$RegisterBy}' ";
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-Density-Bulk.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-Density-Bulk.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-Density-Bulk.php?id=' . $search_table['id'], false);
    }
  }
?>

<?php
// Verifica si se ha hecho clic en el botón "repetir"
if (isset($_POST['repetir_muestra'])) {
    // Obtén el ID de la muestra específica
    $search_table = (int)$_GET['id'];
    $reportdate = make_date();

    // Consulta para obtener los datos de la muestra específica
    $query_select = "SELECT * FROM density_bulk WHERE id = '{$search_table}'";
    $result_select = $db->query($query_select);

    if ($result_select && $db->num_rows($result_select) == 1) {
        $search_table_data = $db->fetch_assoc($result_select);

        // Verifica si ya existe una fila con los mismos Sample_ID, Sample_Number y Test_Type
        $query_check_existence = "SELECT COUNT(*) as count FROM ensayo_en_repeticion WHERE Sample_ID = '{$search_table_data['Sample_ID']}' AND Sample_Number = '{$search_table_data['Sample_Number']}' AND Test_Type = '{$search_table_data['test_type']}'";
        $result_check_existence = $db->query($query_check_existence);
        $existence_data = $db->fetch_assoc($result_check_existence);

        if ($existence_data['count'] > 0) {
            // Ya existe una fila con los mismos Sample_ID, Sample_Number y Test_Type
            $session->msg('d', 'No se puede repetir la muestra porque ya existe una fila con los mismos Sample_ID, Sample_Number y Test_Type.');
            redirect('repiteEnsayo.php', false);
        } else {
            // Inserta los datos en la tabla "ensayo_en_repeticion"
            $query_insert = "INSERT INTO ensayo_en_repeticion (Sample_ID, Sample_Number, Test_Type, Tecnico, Fecha_Inicio) VALUES ";
            $query_insert .= "('{$search_table_data['Sample_ID']}', '{$search_table_data['Sample_Number']}', '{$search_table_data['test_type']}', '{$search_table_data['Technician']}', '{$reportdate}')";

            $result_insert = $db->query($query_insert);

            if ($result_insert && $db->affected_rows() === 1) {
                $session->msg('s', 'Muestra repetida con éxito.');
                redirect('repiteEnsayo.php', false);
            } else {
                $session->msg('d', 'Error al repetir la muestra.');
                redirect('repiteEnsayo.php', false);
            }
        }
    } else {
        $session->msg('d', 'Error al obtener datos de la muestra específica.');
        redirect('repiteEnsayo.php', false);
    }
}
?>