<?php

$user = current_user();

// Verificamos si se ha enviado el campo a través del método POST
if (isset($_POST['density_weigth'])) {

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
    $testype = "Weigth-density";
    // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $PreparationMethod = $db->escape($_POST['PreparationMethod']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);
    // Test information Tabla
    $ShapeType1 = $db->escape($_POST['ShapeType1']);
    $ShapeType2 = $db->escape($_POST['ShapeType2']);
    $ShapeType3 = $db->escape($_POST['ShapeType3']);
    $MassMoistSpecimen1 = $db->escape($_POST['MassMoistSpecimen1']);
    $MassMoistSpecimen2 = $db->escape($_POST['MassMoistSpecimen2']);
    $MassMoistSpecimen3 = $db->escape($_POST['MassMoistSpecimen3']);
    $DiameterWidth1 = $db->escape($_POST['DiameterWidth1']);
    $DiameterWidth2 = $db->escape($_POST['DiameterWidth2']);
    $DiameterWidth3 = $db->escape($_POST['DiameterWidth3']);
    $Height1 = $db->escape($_POST['Height1']);
    $Height2 = $db->escape($_POST['Height2']);
    $Height3 = $db->escape($_POST['Height3']);
    $Length1 = $db->escape($_POST['Length1']);
    $Length2 = $db->escape($_POST['Length2']);
    $Length3 = $db->escape($_POST['Length3']);
    $VolumesMoistSoil1 = $db->escape($_POST['VolumesMoistSoil1']);
    $VolumesMoistSoil2 = $db->escape($_POST['VolumesMoistSoil2']);
    $VolumesMoistSoil3 = $db->escape($_POST['VolumesMoistSoil3']);
    // Calculation Table
    $TotalVolumesMoistSpecimen = $db->escape($_POST['TotalVolumesMoistSpecimen']);
    $MassMoistTotalpecimens = $db->escape($_POST['MassMoistTotalpecimens']);
    $WaterContentSpecimen = $db->escape($_POST['WaterContentSpecimen']);
    $DensityTotalMoistSpecimen = $db->escape($_POST['DensityTotalMoistSpecimen']);
    $MoistUnitWeightSpecimengrcm3 = $db->escape($_POST['MoistUnitWeightSpecimengrcm3']);
    $MoistUnitWeightSpecimenKNm3 = $db->escape($_POST['MoistUnitWeightSpecimenKNm3']);
    $DryUnitWeightSpecimenKNm3 = $db->escape($_POST['DryUnitWeightSpecimenKNm3']);
    $MoistUnitWeightSpecimenKgm3 = $db->escape($_POST['MoistUnitWeightSpecimenKgm3']);
    $DryUnitWeightSpecimenKgm3 = $db->escape($_POST['DryUnitWeightSpecimenKgm3']);

    $RegisterBy = $user['name'];

// Componemos la sentencia SQL
$sql = "INSERT INTO density_weigth (
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
    Shape_Type_1,
    Shape_Type_2,
    Shape_Type_3,
    Mass_Moist_Specimen_1,
    Mass_Moist_Specimen_2,
    Mass_Moist_Specimen_3,
    Diameter_Width_1,
    Diameter_Width_2,
    Diameter_Width_3,
    Height_1,
    Height_2,
    Height_3,
    Length_1,
    Length_2,
    Length_3,
    Volumes_Moist_Soil_1,
    Volumes_Moist_Soil_2,
    Volumes_Moist_Soil_3,
    Total_Volumes_Moist_Specimen,
    Mass_Moist_Total_Specimens,
    Water_Content_Specimen,
    Density_Total_Moist_Specimen,
    Moist_Unit_Weight_Specimen_grcm3,
    Moist_Unit_Weight_Specimen_KNm3,
    Dry_Unit_Weight_Specimen_KNm3,
    Moist_Unit_Weight_Specimen_Kgm3,
    Dry_Unit_Weight_Specimen_Kgm3,
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
    '$ShapeType1',
    '$ShapeType2',
    '$ShapeType3',
    '$MassMoistSpecimen1',
    '$MassMoistSpecimen2',
    '$MassMoistSpecimen3',
    '$DiameterWidth1',
    '$DiameterWidth2',
    '$DiameterWidth3',
    '$Height1',
    '$Height2',
    '$Height3',
    '$Length1',
    '$Length2',
    '$Length3',
    '$VolumesMoistSoil1',
    '$VolumesMoistSoil2',
    '$VolumesMoistSoil3',
    '$TotalVolumesMoistSpecimen',
    '$MassMoistTotalpecimens',
    '$WaterContentSpecimen',
    '$DensityTotalMoistSpecimen',
    '$MoistUnitWeightSpecimengrcm3',
    '$MoistUnitWeightSpecimenKNm3',
    '$DryUnitWeightSpecimenKNm3',
    '$MoistUnitWeightSpecimenKgm3',
    '$DryUnitWeightSpecimenKgm3',
    '$RegisterBy'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./density_weigth.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./density_weigth.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./density_weigth.php', false);
  }
}

?>

<?php
$search_table = find_by_id('density_weigth', (int)$_GET['id']);
  // Verifica si se ha enviado el formulario
  if (isset($_POST['update_muestra'])) {
    $req_fields = array(
      'Standard'
    );
    
    // Valida los campos requeridos
    validate_fields($req_fields);

    if (empty($errors)) {
      // Obtiene los valores de los campos del formulario
      $Standard = $db->escape($_POST['Standard']);
      $PreparationMethod = $db->escape($_POST['PreparationMethod']);
      $Comments = $db->escape($_POST['Comments']);
      $Technician = $db->escape($_POST['Technician']);
      $TestStartDate = $db->escape($_POST['TestStartDate']);
      // Test information Tabla
      $ShapeType1 = $db->escape($_POST['ShapeType1']);
      $ShapeType2 = $db->escape($_POST['ShapeType2']);
      $ShapeType3 = $db->escape($_POST['ShapeType3']);
      $MassMoistSpecimen1 = $db->escape($_POST['MassMoistSpecimen1']);
      $MassMoistSpecimen2 = $db->escape($_POST['MassMoistSpecimen2']);
      $MassMoistSpecimen3 = $db->escape($_POST['MassMoistSpecimen3']);
      $DiameterWidth1 = $db->escape($_POST['DiameterWidth1']);
      $DiameterWidth2 = $db->escape($_POST['DiameterWidth2']);
      $DiameterWidth3 = $db->escape($_POST['DiameterWidth3']);
      $Height1 = $db->escape($_POST['Height1']);
      $Height2 = $db->escape($_POST['Height2']);
      $Height3 = $db->escape($_POST['Height3']);
      $Length1 = $db->escape($_POST['Length1']);
      $Length2 = $db->escape($_POST['Length2']);
      $Length3 = $db->escape($_POST['Length3']);
      $VolumesMoistSoil1 = $db->escape($_POST['VolumesMoistSoil1']);
      $VolumesMoistSoil2 = $db->escape($_POST['VolumesMoistSoil2']);
      $VolumesMoistSoil3 = $db->escape($_POST['VolumesMoistSoil3']);
      // Calculation Table
      $TotalVolumesMoistSpecimen = $db->escape($_POST['TotalVolumesMoistSpecimen']);
      $MassMoistTotalpecimens = $db->escape($_POST['MassMoistTotalpecimens']);
      $WaterContentSpecimen = $db->escape($_POST['WaterContentSpecimen']);
      $DensityTotalMoistSpecimen = $db->escape($_POST['DensityTotalMoistSpecimen']);
      $MoistUnitWeightSpecimengrcm3 = $db->escape($_POST['MoistUnitWeightSpecimengrcm3']);
      $MoistUnitWeightSpecimenKNm3 = $db->escape($_POST['MoistUnitWeightSpecimenKNm3']);
      $DryUnitWeightSpecimenKNm3 = $db->escape($_POST['DryUnitWeightSpecimenKNm3']);
      $MoistUnitWeightSpecimenKgm3 = $db->escape($_POST['MoistUnitWeightSpecimenKgm3']);
      $DryUnitWeightSpecimenKgm3 = $db->escape($_POST['DryUnitWeightSpecimenKgm3']);

      $RegisterBy = $user['name'];

      $query = "UPDATE density_weigth SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Shape_Type_1 = '{$ShapeType1}', ";
      $query .= "Shape_Type_2 = '{$ShapeType2}', ";
      $query .= "Shape_Type_3 = '{$ShapeType3}', ";
      $query .= "Mass_Moist_Specimen_1 = '{$MassMoistSpecimen1}', ";
      $query .= "Mass_Moist_Specimen_2 = '{$MassMoistSpecimen2}', ";
      $query .= "Mass_Moist_Specimen_3 = '{$MassMoistSpecimen3}', ";
      $query .= "Diameter_Width_1 = '{$DiameterWidth1}', ";
      $query .= "Diameter_Width_2 = '{$DiameterWidth2}', ";
      $query .= "Diameter_Width_3 = '{$DiameterWidth3}', ";
      $query .= "Height_1 = '{$Height1}', ";
      $query .= "Height_2 = '{$Height2}', ";
      $query .= "Height_3 = '{$Height3}', ";
      $query .= "Length_1 = '{$Length1}', ";
      $query .= "Length_2 = '{$Length2}', ";
      $query .= "Length_3 = '{$Length3}', ";
      $query .= "Volumes_Moist_Soil_1 = '{$VolumesMoistSoil1}', ";
      $query .= "Volumes_Moist_Soil_2 = '{$VolumesMoistSoil2}', ";
      $query .= "Volumes_Moist_Soil_3 = '{$VolumesMoistSoil3}', ";

      $query .= "Total_Volumes_Moist_Specimen = '{$TotalVolumesMoistSpecimen}', ";
      $query .= "Mass_Moist_Total_Specimens = '{$MassMoistTotalpecimens}', ";
      $query .= "Water_Content_Specimen = '{$WaterContentSpecimen}', ";
      $query .= "Density_Total_Moist_Specimen = '{$DensityTotalMoistSpecimen}', ";
      $query .= "Moist_Unit_Weight_Specimen_grcm3 = '{$MoistUnitWeightSpecimengrcm3}', ";
      $query .= "Moist_Unit_Weight_Specimen_KNm3 = '{$MoistUnitWeightSpecimenKNm3}', ";
      $query .= "Dry_Unit_Weight_Specimen_KNm3 = '{$DryUnitWeightSpecimenKNm3}', ";
      $query .= "Moist_Unit_Weight_Specimen_Kgm3 = '{$MoistUnitWeightSpecimenKgm3}', ";
      $query .= "Dry_Unit_Weight_Specimen_Kgm3 = '{$DryUnitWeightSpecimenKgm3}', ";

      $query .= "Registered_By = '{$RegisterBy}' ";
      
      $query .= "WHERE id = '{$search_table['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-Density-Weigth.php?id=' . $search_table['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-Density-Weigth.php?id=' . $search_table['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-Density-Weigth.php?id=' . $search_table['id'], false);
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
    $query_select = "SELECT * FROM density_weigth WHERE id = '{$search_table}'";
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