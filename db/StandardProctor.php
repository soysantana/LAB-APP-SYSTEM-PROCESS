<?php
// Recuperamos los datos del formulario
if (isset($_POST['Standardproctor'])) {
  $req_fields = array(
'sampleid', 'samplenumber', 'structure', 'area', 'source', 'depthfrom', 'depthto', 'materialtype', 'sampletype', 'north', 
'east', 'elev', 'sampledate', 'Standard', 'PreparationMethod', 'Split', 'Nmc', 'natmc', 'Comments', 'Technician',
'TestStartDate'
);
  validate_fields($req_fields);

// Validacion de post
  if (empty($errors)) {
    // Valores Obtenidos del ajax
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
    $testype = "SP";

  // Informaciones basicas
    $Standard = $db->escape($_POST['Standard']);
    $PreparationMethod = $db->escape($_POST['PreparationMethod']);
    $Split = $db->escape($_POST['Split']);
    $Nmc = $db->escape($_POST['Nmc']);
    $natmc = $db->escape($_POST['natmc']);
    $Comments = $db->escape($_POST['Comments']);
    $Technician = $db->escape($_POST['Technician']);
    $TestStartDate = $db->escape($_POST['TestStartDate']);

 // Densidades
    $Wt_Wet_Soil_Mold_1 = $db->escape($_POST['Wt_Wet_Soil_Mold_1']);
    $Wt_Wet_Soil_Mold_2 = $db->escape($_POST['Wt_Wet_Soil_Mold_2']);
    $Wt_Wet_Soil_Mold_3 = $db->escape($_POST['Wt_Wet_Soil_Mold_3']);
    $Wt_Wet_Soil_Mold_4 = $db->escape($_POST['Wt_Wet_Soil_Mold_4']);
    $Wt_Wet_Soil_Mold_5 = $db->escape($_POST['Wt_Wet_Soil_Mold_5']);
    $Wt_Wet_Soil_Mold_6 = $db->escape($_POST['Wt_Wet_Soil_Mold_6']);
    $Wt_Mold_g_1 = $db->escape($_POST['Wt_Mold_g_1']);
    $Wt_Mold_g_2 = $db->escape($_POST['Wt_Mold_g_2']);
    $Wt_Mold_g_3 = $db->escape($_POST['Wt_Mold_g_3']);
    $Wt_Mold_g_4 = $db->escape($_POST['Wt_Mold_g_4']);
    $Wt_Mold_g_5 = $db->escape($_POST['Wt_Mold_g_5']);
    $Wt_Mold_g_6 = $db->escape($_POST['Wt_Mold_g_6']);
    $Wt_Wet_Soil_g_1 = $db->escape($_POST['Wt_Wet_Soil_g_1']);
    $Wt_Wet_Soil_g_2 = $db->escape($_POST['Wt_Wet_Soil_g_2']);
    $Wt_Wet_Soil_g_3 = $db->escape($_POST['Wt_Wet_Soil_g_3']);
    $Wt_Wet_Soil_g_4 = $db->escape($_POST['Wt_Wet_Soil_g_4']);
    $Wt_Wet_Soil_g_5 = $db->escape($_POST['Wt_Wet_Soil_g_5']);
    $Wt_Wet_Soil_g_6 = $db->escape($_POST['Wt_Wet_Soil_g_6']);
    $Vol_Mold_cm3_1 = $db->escape($_POST['Vol_Mold_cm3_1']);
    $Vol_Mold_cm3_2 = $db->escape($_POST['Vol_Mold_cm3_2']);
    $Vol_Mold_cm3_3 = $db->escape($_POST['Vol_Mold_cm3_3']);
    $Vol_Mold_cm3_4 = $db->escape($_POST['Vol_Mold_cm3_4']);
    $Vol_Mold_cm3_5 = $db->escape($_POST['Vol_Mold_cm3_5']);
    $Vol_Mold_cm3_6 = $db->escape($_POST['Vol_Mold_cm3_6']);
    $Wet_Density_kgm3_1 = $db->escape($_POST['Wet_Density_kgm3_1']);
    $Wet_Density_kgm3_2 = $db->escape($_POST['Wet_Density_kgm3_2']);
    $Wet_Density_kgm3_3 = $db->escape($_POST['Wet_Density_kgm3_3']);
    $Wet_Density_kgm3_4 = $db->escape($_POST['Wet_Density_kgm3_4']);
    $Wet_Density_kgm3_5 = $db->escape($_POST['Wet_Density_kgm3_5']);
    $Wet_Density_kgm3_6 = $db->escape($_POST['Wet_Density_kgm3_6']);
    $Dry_Density_kgm3_1 = $db->escape($_POST['Dry_Density_kgm3_1']);
    $Dry_Density_kgm3_2 = $db->escape($_POST['Dry_Density_kgm3_2']);
    $Dry_Density_kgm3_3 = $db->escape($_POST['Dry_Density_kgm3_3']);
    $Dry_Density_kgm3_4 = $db->escape($_POST['Dry_Density_kgm3_4']);
    $Dry_Density_kgm3_5 = $db->escape($_POST['Dry_Density_kgm3_5']);
    $Dry_Density_kgm3_6 = $db->escape($_POST['Dry_Density_kgm3_6']);
    $Dry_Density_Corrected_kgm3_1 = $db->escape($_POST['Dry_Density_Corrected_kgm3_1']);
    $Dry_Density_Corrected_kgm3_2 = $db->escape($_POST['Dry_Density_Corrected_kgm3_2']);
    $Dry_Density_Corrected_kgm3_3 = $db->escape($_POST['Dry_Density_Corrected_kgm3_3']);
    $Dry_Density_Corrected_kgm3_4 = $db->escape($_POST['Dry_Density_Corrected_kgm3_4']);
    $Dry_Density_Corrected_kgm3_5 = $db->escape($_POST['Dry_Density_Corrected_kgm3_5']);
    $Dry_Density_Corrected_kgm3_6 = $db->escape($_POST['Dry_Density_Corrected_kgm3_6']);

 // Segunda Tabla
    $MC_Container_1 = $db->escape($_POST['MC_Container_1']);
    $MC_Container_2 = $db->escape($_POST['MC_Container_2']);
    $MC_Container_3 = $db->escape($_POST['MC_Container_3']);
    $MC_Container_4 = $db->escape($_POST['MC_Container_4']);
    $MC_Container_5 = $db->escape($_POST['MC_Container_5']);
    $MC_Container_6 = $db->escape($_POST['MC_Container_6']);
    $MC_Wt_Wet_Soil_Tare_1 = $db->escape($_POST['MC_Wt_Wet_Soil_Tare_1']);
    $MC_Wt_Wet_Soil_Tare_2 = $db->escape($_POST['MC_Wt_Wet_Soil_Tare_2']);
    $MC_Wt_Wet_Soil_Tare_3 = $db->escape($_POST['MC_Wt_Wet_Soil_Tare_3']);
    $MC_Wt_Wet_Soil_Tare_4 = $db->escape($_POST['MC_Wt_Wet_Soil_Tare_4']);
    $MC_Wt_Wet_Soil_Tare_5 = $db->escape($_POST['MC_Wt_Wet_Soil_Tare_5']);
    $MC_Wt_Wet_Soil_Tare_6 = $db->escape($_POST['MC_Wt_Wet_Soil_Tare_6']);
    $MC_Wt_Dry_Soil_Tare_1 = $db->escape($_POST['MC_Wt_Dry_Soil_Tare_1']);
    $MC_Wt_Dry_Soil_Tare_2 = $db->escape($_POST['MC_Wt_Dry_Soil_Tare_2']);
    $MC_Wt_Dry_Soil_Tare_3 = $db->escape($_POST['MC_Wt_Dry_Soil_Tare_3']);
    $MC_Wt_Dry_Soil_Tare_4 = $db->escape($_POST['MC_Wt_Dry_Soil_Tare_4']);
    $MC_Wt_Dry_Soil_Tare_5 = $db->escape($_POST['MC_Wt_Dry_Soil_Tare_5']);
    $MC_Wt_Dry_Soil_Tare_6 = $db->escape($_POST['MC_Wt_Dry_Soil_Tare_6']);
    $Wt_Water_g_1 = $db->escape($_POST['Wt_Water_g_1']);
    $Wt_Water_g_2 = $db->escape($_POST['Wt_Water_g_2']);
    $Wt_Water_g_3 = $db->escape($_POST['Wt_Water_g_3']);
    $Wt_Water_g_4 = $db->escape($_POST['Wt_Water_g_4']);
    $Wt_Water_g_5 = $db->escape($_POST['Wt_Water_g_5']);
    $Wt_Water_g_6 = $db->escape($_POST['Wt_Water_g_6']);
    $Tare_g_1 = $db->escape($_POST['Tare_g_1']);
    $Tare_g_2 = $db->escape($_POST['Tare_g_2']);
    $Tare_g_3 = $db->escape($_POST['Tare_g_3']);
    $Tare_g_4 = $db->escape($_POST['Tare_g_4']);
    $Tare_g_5 = $db->escape($_POST['Tare_g_5']);
    $Tare_g_6 = $db->escape($_POST['Tare_g_6']);
    $MC_Wt_Dry_Soil_g_1 = $db->escape($_POST['MC_Wt_Dry_Soil_g_1']);
    $MC_Wt_Dry_Soil_g_2 = $db->escape($_POST['MC_Wt_Dry_Soil_g_2']);
    $MC_Wt_Dry_Soil_g_3 = $db->escape($_POST['MC_Wt_Dry_Soil_g_3']);
    $MC_Wt_Dry_Soil_g_4 = $db->escape($_POST['MC_Wt_Dry_Soil_g_4']);
    $MC_Wt_Dry_Soil_g_5 = $db->escape($_POST['MC_Wt_Dry_Soil_g_5']);
    $MC_Wt_Dry_Soil_g_6 = $db->escape($_POST['MC_Wt_Dry_Soil_g_6']);
    $MC_Porce_1 = $db->escape($_POST['MC_Porce_1']);
    $MC_Porce_2 = $db->escape($_POST['MC_Porce_2']);
    $MC_Porce_3 = $db->escape($_POST['MC_Porce_3']);
    $MC_Porce_4 = $db->escape($_POST['MC_Porce_4']);
    $MC_Porce_5 = $db->escape($_POST['MC_Porce_5']);
    $MC_Porce_6 = $db->escape($_POST['MC_Porce_6']);
    $MC_Porce_Corrected_1 = $db->escape($_POST['MC_Porce_Corrected_1']);
    $MC_Porce_Corrected_2 = $db->escape($_POST['MC_Porce_Corrected_2']);
    $MC_Porce_Corrected_3 = $db->escape($_POST['MC_Porce_Corrected_3']);
    $MC_Porce_Corrected_4 = $db->escape($_POST['MC_Porce_Corrected_4']);
    $MC_Porce_Corrected_5 = $db->escape($_POST['MC_Porce_Corrected_5']);
    $MC_Porce_Corrected_6 = $db->escape($_POST['MC_Porce_Corrected_6']);

 // Correcion x MC
    $Max_Dry_Density_kgm3 = $db->escape($_POST['Max_Dry_Density_kgm3']);
    $Optimun_MC_Porce = $db->escape($_POST['Optimun_MC_Porce']);
    $Wc_Porce = $db->escape($_POST['Wc_Porce']);
    $GM_Porce = $db->escape($_POST['GM_Porce']);
    $PC_Porce = $db->escape($_POST['PC_Porce']);
    $PF_Porce = $db->escape($_POST['PF_Porce']);
    $YDF_Porce = $db->escape($_POST['YDF_Porce']);
    $YDT_Porce = $db->escape($_POST['YDT_Porce']);
    $Yw_KnM3 = $db->escape($_POST['Yw_KnM3']);
    $Corrected_Dry_Unit_Weigt = $db->escape($_POST['Corrected_Dry_Unit_Weigt']);
    $Corrected_Water_Content_Finer = $db->escape($_POST['Corrected_Water_Content_Finer']);


// Componemos la sentencia SQL
    $sql = "INSERT INTO standard_proctor (
Sample_ID, Sample_Number, Structure, Area, Source, Depth_From, Depth_To, Material_Type, Sample_Type, North, 
East, Elev, Sample_Date, Report_Date, test_type, Standard, Preparation_Method, Split_Method, Natural_MC, SG_NMC, 
Comments, Technician, Test_Start_Date, Wt_Wet_Soil_Mold_1, Wt_Wet_Soil_Mold_2, Wt_Wet_Soil_Mold_3, Wt_Wet_Soil_Mold_4,
Wt_Wet_Soil_Mold_5, Wt_Wet_Soil_Mold_6, Wt_Mold_g_1, Wt_Mold_g_2, Wt_Mold_g_3, Wt_Mold_g_4, Wt_Mold_g_5, Wt_Mold_g_6,
Wt_Wet_Soil_g_1, Wt_Wet_Soil_g_2, Wt_Wet_Soil_g_3, Wt_Wet_Soil_g_4, Wt_Wet_Soil_g_5, Wt_Wet_Soil_g_6, Vol_Mold_cm3_1,
Vol_Mold_cm3_2, Vol_Mold_cm3_3, Vol_Mold_cm3_4, Vol_Mold_cm3_5, Vol_Mold_cm3_6, Wet_Density_kgm3_1, Wet_Density_kgm3_2,
Wet_Density_kgm3_3, Wet_Density_kgm3_4, Wet_Density_kgm3_5, Wet_Density_kgm3_6, Dry_Density_kgm3_1, Dry_Density_kgm3_2,
Dry_Density_kgm3_3, Dry_Density_kgm3_4, Dry_Density_kgm3_5, Dry_Density_kgm3_6, Dry_Density_Corrected_kgm3_1,
Dry_Density_Corrected_kgm3_2, Dry_Density_Corrected_kgm3_3, Dry_Density_Corrected_kgm3_4, Dry_Density_Corrected_kgm3_5,
Dry_Density_Corrected_kgm3_6, MC_Container_1, MC_Container_2, MC_Container_3, MC_Container_4, MC_Container_5,
MC_Container_6, MC_Wt_Wet_Soil_Tare_1, MC_Wt_Wet_Soil_Tare_2, MC_Wt_Wet_Soil_Tare_3, MC_Wt_Wet_Soil_Tare_4,
MC_Wt_Wet_Soil_Tare_5, MC_Wt_Wet_Soil_Tare_6, MC_Wt_Dry_Soil_Tare_1, MC_Wt_Dry_Soil_Tare_2, MC_Wt_Dry_Soil_Tare_3,
MC_Wt_Dry_Soil_Tare_4, MC_Wt_Dry_Soil_Tare_5, MC_Wt_Dry_Soil_Tare_6, Wt_Water_g_1, Wt_Water_g_2, Wt_Water_g_3,
Wt_Water_g_4, Wt_Water_g_5, Wt_Water_g_6, Tare_g_1, Tare_g_2, Tare_g_3, Tare_g_4, Tare_g_5, Tare_g_6,
MC_Wt_Dry_Soil_g_1, MC_Wt_Dry_Soil_g_2, MC_Wt_Dry_Soil_g_3, MC_Wt_Dry_Soil_g_4, MC_Wt_Dry_Soil_g_5,
MC_Wt_Dry_Soil_g_6, MC_Porce_1, MC_Porce_2, MC_Porce_3, MC_Porce_4, MC_Porce_5, MC_Porce_6, MC_Porce_Corrected_1,
MC_Porce_Corrected_2, MC_Porce_Corrected_3, MC_Porce_Corrected_4, MC_Porce_Corrected_5, MC_Porce_Corrected_6,
Max_Dry_Density_kgm3, Optimun_MC_Porce, Wc_Porce, GM_Porce, PC_Porce, PF_Porce, YDF_Porce, YDT_Porce,
Yw_KnM3, Corrected_Dry_Unit_Weigt, Corrected_Water_Content_Finer
)
      VALUES (
'$sampleid', '$samplenumber', '$structure', '$area', '$source', '$depthfrom', 
'$depthto', '$materialtype', '$sampletype', '$north', '$east', '$elev', '$sampledate',
'$reportdate', '$testype', '$Standard', '$PreparationMethod', '$Split', '$Nmc', '$natmc',
'$Comments', '$Technician', '$TestStartDate', '$Wt_Wet_Soil_Mold_1', '$Wt_Wet_Soil_Mold_2',
'$Wt_Wet_Soil_Mold_3', '$Wt_Wet_Soil_Mold_4', '$Wt_Wet_Soil_Mold_5', '$Wt_Wet_Soil_Mold_6',
'$Wt_Mold_g_1', '$Wt_Mold_g_2', '$Wt_Mold_g_3', '$Wt_Mold_g_4', '$Wt_Mold_g_5', '$Wt_Mold_g_6',
'$Wt_Wet_Soil_g_1', '$Wt_Wet_Soil_g_2', '$Wt_Wet_Soil_g_3', '$Wt_Wet_Soil_g_4', '$Wt_Wet_Soil_g_5',
'$Wt_Wet_Soil_g_6', '$Vol_Mold_cm3_1', '$Vol_Mold_cm3_2', '$Vol_Mold_cm3_3', '$Vol_Mold_cm3_4',
'$Vol_Mold_cm3_5', '$Vol_Mold_cm3_6', '$Wet_Density_kgm3_1', '$Wet_Density_kgm3_2', '$Wet_Density_kgm3_3',
'$Wet_Density_kgm3_4', '$Wet_Density_kgm3_5', '$Wet_Density_kgm3_6', '$Dry_Density_kgm3_1', '$Dry_Density_kgm3_2',
'$Dry_Density_kgm3_3', '$Dry_Density_kgm3_4', '$Dry_Density_kgm3_5', '$Dry_Density_kgm3_6', '$Dry_Density_Corrected_kgm3_1',
'$Dry_Density_Corrected_kgm3_2', '$Dry_Density_Corrected_kgm3_3', '$Dry_Density_Corrected_kgm3_4',
'$Dry_Density_Corrected_kgm3_5', '$Dry_Density_Corrected_kgm3_6', '$MC_Container_1', '$MC_Container_2',
'$MC_Container_3', '$MC_Container_4', '$MC_Container_5', '$MC_Container_6', '$MC_Wt_Wet_Soil_Tare_1',
'$MC_Wt_Wet_Soil_Tare_2', '$MC_Wt_Wet_Soil_Tare_3', '$MC_Wt_Wet_Soil_Tare_4', '$MC_Wt_Wet_Soil_Tare_5',
'$MC_Wt_Wet_Soil_Tare_6', '$MC_Wt_Dry_Soil_Tare_1', '$MC_Wt_Dry_Soil_Tare_2', '$MC_Wt_Dry_Soil_Tare_3',
'$MC_Wt_Dry_Soil_Tare_4', '$MC_Wt_Dry_Soil_Tare_5', '$MC_Wt_Dry_Soil_Tare_6', '$Wt_Water_g_1',
'$Wt_Water_g_2', '$Wt_Water_g_3', '$Wt_Water_g_4', '$Wt_Water_g_5', '$Wt_Water_g_6', '$Tare_g_1',
'$Tare_g_2', '$Tare_g_3', '$Tare_g_4', '$Tare_g_5', '$Tare_g_6', '$MC_Wt_Dry_Soil_g_1',
'$MC_Wt_Dry_Soil_g_2', '$MC_Wt_Dry_Soil_g_3', '$MC_Wt_Dry_Soil_g_4', '$MC_Wt_Dry_Soil_g_5', '$MC_Wt_Dry_Soil_g_6',
'$MC_Porce_1', '$MC_Porce_2', '$MC_Porce_3', '$MC_Porce_4', '$MC_Porce_5', '$MC_Porce_6',
'$MC_Porce_Corrected_1', '$MC_Porce_Corrected_2', '$MC_Porce_Corrected_3', '$MC_Porce_Corrected_4',
'$MC_Porce_Corrected_5', '$MC_Porce_Corrected_6', '$Max_Dry_Density_kgm3', '$Optimun_MC_Porce',
'$Wc_Porce', '$GM_Porce', '$PC_Porce', '$PF_Porce', '$YDF_Porce', '$YDT_Porce', '$Yw_KnM3',
'$Corrected_Dry_Unit_Weigt', '$Corrected_Water_Content_Finer'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./Standardproctor.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./Standardproctor.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./Standardproctor.php', false);
  }
}
?>

<?php
$SearchTable = find_by_id('standard_proctor', (int)$_GET['id']);
  // Verifica si se ha enviado el formulario
  if (isset($_POST['update_muestra'])) {
    $req_fields = array(
      'Standard'
    );
    
    // Valida los campos requeridos
    validate_fields($req_fields);

    if (empty($errors)) {

  // Informaciones basicas
  $Standard = $db->escape($_POST['Standard']);
  $PreparationMethod = $db->escape($_POST['PreparationMethod']);
  $Split = $db->escape($_POST['Split']);
  $Nmc = $db->escape($_POST['Nmc']);
  $natmc = $db->escape($_POST['natmc']);
  $Comments = $db->escape($_POST['Comments']);
  $Technician = $db->escape($_POST['Technician']);
  $TestStartDate = $db->escape($_POST['TestStartDate']);

// Densidades
  $Wt_Wet_Soil_Mold_1 = $db->escape($_POST['Wt_Wet_Soil_Mold_1']);
  $Wt_Wet_Soil_Mold_2 = $db->escape($_POST['Wt_Wet_Soil_Mold_2']);
  $Wt_Wet_Soil_Mold_3 = $db->escape($_POST['Wt_Wet_Soil_Mold_3']);
  $Wt_Wet_Soil_Mold_4 = $db->escape($_POST['Wt_Wet_Soil_Mold_4']);
  $Wt_Wet_Soil_Mold_5 = $db->escape($_POST['Wt_Wet_Soil_Mold_5']);
  $Wt_Wet_Soil_Mold_6 = $db->escape($_POST['Wt_Wet_Soil_Mold_6']);
  $Wt_Mold_g_1 = $db->escape($_POST['Wt_Mold_g_1']);
  $Wt_Mold_g_2 = $db->escape($_POST['Wt_Mold_g_2']);
  $Wt_Mold_g_3 = $db->escape($_POST['Wt_Mold_g_3']);
  $Wt_Mold_g_4 = $db->escape($_POST['Wt_Mold_g_4']);
  $Wt_Mold_g_5 = $db->escape($_POST['Wt_Mold_g_5']);
  $Wt_Mold_g_6 = $db->escape($_POST['Wt_Mold_g_6']);
  $Wt_Wet_Soil_g_1 = $db->escape($_POST['Wt_Wet_Soil_g_1']);
  $Wt_Wet_Soil_g_2 = $db->escape($_POST['Wt_Wet_Soil_g_2']);
  $Wt_Wet_Soil_g_3 = $db->escape($_POST['Wt_Wet_Soil_g_3']);
  $Wt_Wet_Soil_g_4 = $db->escape($_POST['Wt_Wet_Soil_g_4']);
  $Wt_Wet_Soil_g_5 = $db->escape($_POST['Wt_Wet_Soil_g_5']);
  $Wt_Wet_Soil_g_6 = $db->escape($_POST['Wt_Wet_Soil_g_6']);
  $Vol_Mold_cm3_1 = $db->escape($_POST['Vol_Mold_cm3_1']);
  $Vol_Mold_cm3_2 = $db->escape($_POST['Vol_Mold_cm3_2']);
  $Vol_Mold_cm3_3 = $db->escape($_POST['Vol_Mold_cm3_3']);
  $Vol_Mold_cm3_4 = $db->escape($_POST['Vol_Mold_cm3_4']);
  $Vol_Mold_cm3_5 = $db->escape($_POST['Vol_Mold_cm3_5']);
  $Vol_Mold_cm3_6 = $db->escape($_POST['Vol_Mold_cm3_6']);
  $Wet_Density_kgm3_1 = $db->escape($_POST['Wet_Density_kgm3_1']);
  $Wet_Density_kgm3_2 = $db->escape($_POST['Wet_Density_kgm3_2']);
  $Wet_Density_kgm3_3 = $db->escape($_POST['Wet_Density_kgm3_3']);
  $Wet_Density_kgm3_4 = $db->escape($_POST['Wet_Density_kgm3_4']);
  $Wet_Density_kgm3_5 = $db->escape($_POST['Wet_Density_kgm3_5']);
  $Wet_Density_kgm3_6 = $db->escape($_POST['Wet_Density_kgm3_6']);
  $Dry_Density_kgm3_1 = $db->escape($_POST['Dry_Density_kgm3_1']);
  $Dry_Density_kgm3_2 = $db->escape($_POST['Dry_Density_kgm3_2']);
  $Dry_Density_kgm3_3 = $db->escape($_POST['Dry_Density_kgm3_3']);
  $Dry_Density_kgm3_4 = $db->escape($_POST['Dry_Density_kgm3_4']);
  $Dry_Density_kgm3_5 = $db->escape($_POST['Dry_Density_kgm3_5']);
  $Dry_Density_kgm3_6 = $db->escape($_POST['Dry_Density_kgm3_6']);
  $Dry_Density_Corrected_kgm3_1 = $db->escape($_POST['Dry_Density_Corrected_kgm3_1']);
  $Dry_Density_Corrected_kgm3_2 = $db->escape($_POST['Dry_Density_Corrected_kgm3_2']);
  $Dry_Density_Corrected_kgm3_3 = $db->escape($_POST['Dry_Density_Corrected_kgm3_3']);
  $Dry_Density_Corrected_kgm3_4 = $db->escape($_POST['Dry_Density_Corrected_kgm3_4']);
  $Dry_Density_Corrected_kgm3_5 = $db->escape($_POST['Dry_Density_Corrected_kgm3_5']);
  $Dry_Density_Corrected_kgm3_6 = $db->escape($_POST['Dry_Density_Corrected_kgm3_6']);

// Segunda Tabla
  $MC_Container_1 = $db->escape($_POST['MC_Container_1']);
  $MC_Container_2 = $db->escape($_POST['MC_Container_2']);
  $MC_Container_3 = $db->escape($_POST['MC_Container_3']);
  $MC_Container_4 = $db->escape($_POST['MC_Container_4']);
  $MC_Container_5 = $db->escape($_POST['MC_Container_5']);
  $MC_Container_6 = $db->escape($_POST['MC_Container_6']);
  $MC_Wt_Wet_Soil_Tare_1 = $db->escape($_POST['MC_Wt_Wet_Soil_Tare_1']);
  $MC_Wt_Wet_Soil_Tare_2 = $db->escape($_POST['MC_Wt_Wet_Soil_Tare_2']);
  $MC_Wt_Wet_Soil_Tare_3 = $db->escape($_POST['MC_Wt_Wet_Soil_Tare_3']);
  $MC_Wt_Wet_Soil_Tare_4 = $db->escape($_POST['MC_Wt_Wet_Soil_Tare_4']);
  $MC_Wt_Wet_Soil_Tare_5 = $db->escape($_POST['MC_Wt_Wet_Soil_Tare_5']);
  $MC_Wt_Wet_Soil_Tare_6 = $db->escape($_POST['MC_Wt_Wet_Soil_Tare_6']);
  $MC_Wt_Dry_Soil_Tare_1 = $db->escape($_POST['MC_Wt_Dry_Soil_Tare_1']);
  $MC_Wt_Dry_Soil_Tare_2 = $db->escape($_POST['MC_Wt_Dry_Soil_Tare_2']);
  $MC_Wt_Dry_Soil_Tare_3 = $db->escape($_POST['MC_Wt_Dry_Soil_Tare_3']);
  $MC_Wt_Dry_Soil_Tare_4 = $db->escape($_POST['MC_Wt_Dry_Soil_Tare_4']);
  $MC_Wt_Dry_Soil_Tare_5 = $db->escape($_POST['MC_Wt_Dry_Soil_Tare_5']);
  $MC_Wt_Dry_Soil_Tare_6 = $db->escape($_POST['MC_Wt_Dry_Soil_Tare_6']);
  $Wt_Water_g_1 = $db->escape($_POST['Wt_Water_g_1']);
  $Wt_Water_g_2 = $db->escape($_POST['Wt_Water_g_2']);
  $Wt_Water_g_3 = $db->escape($_POST['Wt_Water_g_3']);
  $Wt_Water_g_4 = $db->escape($_POST['Wt_Water_g_4']);
  $Wt_Water_g_5 = $db->escape($_POST['Wt_Water_g_5']);
  $Wt_Water_g_6 = $db->escape($_POST['Wt_Water_g_6']);
  $Tare_g_1 = $db->escape($_POST['Tare_g_1']);
  $Tare_g_2 = $db->escape($_POST['Tare_g_2']);
  $Tare_g_3 = $db->escape($_POST['Tare_g_3']);
  $Tare_g_4 = $db->escape($_POST['Tare_g_4']);
  $Tare_g_5 = $db->escape($_POST['Tare_g_5']);
  $Tare_g_6 = $db->escape($_POST['Tare_g_6']);
  $MC_Wt_Dry_Soil_g_1 = $db->escape($_POST['MC_Wt_Dry_Soil_g_1']);
  $MC_Wt_Dry_Soil_g_2 = $db->escape($_POST['MC_Wt_Dry_Soil_g_2']);
  $MC_Wt_Dry_Soil_g_3 = $db->escape($_POST['MC_Wt_Dry_Soil_g_3']);
  $MC_Wt_Dry_Soil_g_4 = $db->escape($_POST['MC_Wt_Dry_Soil_g_4']);
  $MC_Wt_Dry_Soil_g_5 = $db->escape($_POST['MC_Wt_Dry_Soil_g_5']);
  $MC_Wt_Dry_Soil_g_6 = $db->escape($_POST['MC_Wt_Dry_Soil_g_6']);
  $MC_Porce_1 = $db->escape($_POST['MC_Porce_1']);
  $MC_Porce_2 = $db->escape($_POST['MC_Porce_2']);
  $MC_Porce_3 = $db->escape($_POST['MC_Porce_3']);
  $MC_Porce_4 = $db->escape($_POST['MC_Porce_4']);
  $MC_Porce_5 = $db->escape($_POST['MC_Porce_5']);
  $MC_Porce_6 = $db->escape($_POST['MC_Porce_6']);
  $MC_Porce_Corrected_1 = $db->escape($_POST['MC_Porce_Corrected_1']);
  $MC_Porce_Corrected_2 = $db->escape($_POST['MC_Porce_Corrected_2']);
  $MC_Porce_Corrected_3 = $db->escape($_POST['MC_Porce_Corrected_3']);
  $MC_Porce_Corrected_4 = $db->escape($_POST['MC_Porce_Corrected_4']);
  $MC_Porce_Corrected_5 = $db->escape($_POST['MC_Porce_Corrected_5']);
  $MC_Porce_Corrected_6 = $db->escape($_POST['MC_Porce_Corrected_6']);

// Correcion x MC
  $Max_Dry_Density_kgm3 = $db->escape($_POST['Max_Dry_Density_kgm3']);
  $Optimun_MC_Porce = $db->escape($_POST['Optimun_MC_Porce']);
  $Wc_Porce = $db->escape($_POST['Wc_Porce']);
  $GM_Porce = $db->escape($_POST['GM_Porce']);
  $PC_Porce = $db->escape($_POST['PC_Porce']);
  $PF_Porce = $db->escape($_POST['PF_Porce']);
  $YDF_Porce = $db->escape($_POST['YDF_Porce']);
  $YDT_Porce = $db->escape($_POST['YDT_Porce']);
  $Yw_KnM3 = $db->escape($_POST['Yw_KnM3']);
  $Corrected_Dry_Unit_Weigt = $db->escape($_POST['Corrected_Dry_Unit_Weigt']);
  $Corrected_Water_Content_Finer = $db->escape($_POST['Corrected_Water_Content_Finer']);


      $query = "UPDATE standard_proctor SET ";
      $query .= "Standard = '{$Standard}', ";
      $query .= "Preparation_Method = '{$PreparationMethod}', ";
      $query .= "Split_Method = '{$Split}', ";
      $query .= "Natural_MC = '{$Nmc}', ";
      $query .= "SG_NMC = '{$natmc}', ";
      $query .= "Comments = '{$Comments}', ";
      $query .= "Technician = '{$Technician}', ";
      $query .= "Test_Start_Date = '{$TestStartDate}', ";

      $query .= "Wt_Wet_Soil_Mold_1 = '{$Wt_Wet_Soil_Mold_1}', ";
      $query .= "Wt_Wet_Soil_Mold_2 = '{$Wt_Wet_Soil_Mold_2}', ";
      $query .= "Wt_Wet_Soil_Mold_3 = '{$Wt_Wet_Soil_Mold_3}', ";
      $query .= "Wt_Wet_Soil_Mold_4 = '{$Wt_Wet_Soil_Mold_4}', ";
      $query .= "Wt_Wet_Soil_Mold_5 = '{$Wt_Wet_Soil_Mold_5}', ";
      $query .= "Wt_Wet_Soil_Mold_6 = '{$Wt_Wet_Soil_Mold_6}', ";
      $query .= "Wt_Mold_g_1 = '{$Wt_Mold_g_1}', ";
      $query .= "Wt_Mold_g_2 = '{$Wt_Mold_g_2}', ";
      $query .= "Wt_Mold_g_3 = '{$Wt_Mold_g_3}', ";
      $query .= "Wt_Mold_g_4 = '{$Wt_Mold_g_4}', ";
      $query .= "Wt_Mold_g_5 = '{$Wt_Mold_g_5}', ";
      $query .= "Wt_Mold_g_6 = '{$Wt_Mold_g_6}', ";
      $query .= "Wt_Wet_Soil_g_1 = '{$Wt_Wet_Soil_g_1}', ";
      $query .= "Wt_Wet_Soil_g_2 = '{$Wt_Wet_Soil_g_2}', ";
      $query .= "Wt_Wet_Soil_g_3 = '{$Wt_Wet_Soil_g_3}', ";
      $query .= "Wt_Wet_Soil_g_4 = '{$Wt_Wet_Soil_g_4}', ";
      $query .= "Wt_Wet_Soil_g_5 = '{$Wt_Wet_Soil_g_5}', ";
      $query .= "Wt_Wet_Soil_g_6 = '{$Wt_Wet_Soil_g_6}', ";
      $query .= "Vol_Mold_cm3_1 = '{$Vol_Mold_cm3_1}', ";
      $query .= "Vol_Mold_cm3_2 = '{$Vol_Mold_cm3_2}', ";
      $query .= "Vol_Mold_cm3_3 = '{$Vol_Mold_cm3_3}', ";
      $query .= "Vol_Mold_cm3_4 = '{$Vol_Mold_cm3_4}', ";
      $query .= "Vol_Mold_cm3_5 = '{$Vol_Mold_cm3_5}', ";
      $query .= "Vol_Mold_cm3_6 = '{$Vol_Mold_cm3_6}', ";
      $query .= "Wet_Density_kgm3_1 = '{$Wet_Density_kgm3_1}', ";
      $query .= "Wet_Density_kgm3_2 = '{$Wet_Density_kgm3_2}', ";
      $query .= "Wet_Density_kgm3_3 = '{$Wet_Density_kgm3_3}', ";
      $query .= "Wet_Density_kgm3_4 = '{$Wet_Density_kgm3_4}', ";
      $query .= "Wet_Density_kgm3_5 = '{$Wet_Density_kgm3_5}', ";
      $query .= "Wet_Density_kgm3_6 = '{$Wet_Density_kgm3_6}', ";
      $query .= "Dry_Density_kgm3_1 = '{$Dry_Density_kgm3_1}', ";
      $query .= "Dry_Density_kgm3_2 = '{$Dry_Density_kgm3_2}', ";
      $query .= "Dry_Density_kgm3_3 = '{$Dry_Density_kgm3_3}', ";
      $query .= "Dry_Density_kgm3_4 = '{$Dry_Density_kgm3_4}', ";
      $query .= "Dry_Density_kgm3_5 = '{$Dry_Density_kgm3_5}', ";
      $query .= "Dry_Density_kgm3_6 = '{$Dry_Density_kgm3_6}', ";
      $query .= "Dry_Density_Corrected_kgm3_1 = '{$Dry_Density_Corrected_kgm3_1}', ";
      $query .= "Dry_Density_Corrected_kgm3_2 = '{$Dry_Density_Corrected_kgm3_2}', ";
      $query .= "Dry_Density_Corrected_kgm3_3 = '{$Dry_Density_Corrected_kgm3_3}', ";
      $query .= "Dry_Density_Corrected_kgm3_4 = '{$Dry_Density_Corrected_kgm3_4}', ";
      $query .= "Dry_Density_Corrected_kgm3_5 = '{$Dry_Density_Corrected_kgm3_5}', ";
      $query .= "Dry_Density_Corrected_kgm3_6 = '{$Dry_Density_Corrected_kgm3_6}', ";

      $query .= "MC_Container_1 = '{$MC_Container_1}', ";
      $query .= "MC_Container_2 = '{$MC_Container_2}', ";
      $query .= "MC_Container_3 = '{$MC_Container_3}', ";
      $query .= "MC_Container_4 = '{$MC_Container_4}', ";
      $query .= "MC_Container_5 = '{$MC_Container_5}', ";
      $query .= "MC_Container_6 = '{$MC_Container_6}', ";
      $query .= "MC_Wt_Wet_Soil_Tare_1 = '{$MC_Wt_Wet_Soil_Tare_1}', ";
      $query .= "MC_Wt_Wet_Soil_Tare_2 = '{$MC_Wt_Wet_Soil_Tare_2}', ";
      $query .= "MC_Wt_Wet_Soil_Tare_3 = '{$MC_Wt_Wet_Soil_Tare_3}', ";
      $query .= "MC_Wt_Wet_Soil_Tare_4 = '{$MC_Wt_Wet_Soil_Tare_4}', ";
      $query .= "MC_Wt_Wet_Soil_Tare_5 = '{$MC_Wt_Wet_Soil_Tare_5}', ";
      $query .= "MC_Wt_Wet_Soil_Tare_6 = '{$MC_Wt_Wet_Soil_Tare_6}', ";
      $query .= "MC_Wt_Dry_Soil_Tare_1 = '{$MC_Wt_Dry_Soil_Tare_1}', ";
      $query .= "MC_Wt_Dry_Soil_Tare_2 = '{$MC_Wt_Dry_Soil_Tare_2}', ";
      $query .= "MC_Wt_Dry_Soil_Tare_3 = '{$MC_Wt_Dry_Soil_Tare_3}', ";
      $query .= "MC_Wt_Dry_Soil_Tare_4 = '{$MC_Wt_Dry_Soil_Tare_4}', ";
      $query .= "MC_Wt_Dry_Soil_Tare_5 = '{$MC_Wt_Dry_Soil_Tare_5}', ";
      $query .= "MC_Wt_Dry_Soil_Tare_6 = '{$MC_Wt_Dry_Soil_Tare_6}', ";
      $query .= "Wt_Water_g_1 = '{$Wt_Water_g_1}', ";
      $query .= "Wt_Water_g_2 = '{$Wt_Water_g_2}', ";
      $query .= "Wt_Water_g_3 = '{$Wt_Water_g_3}', ";
      $query .= "Wt_Water_g_4 = '{$Wt_Water_g_4}', ";
      $query .= "Wt_Water_g_5 = '{$Wt_Water_g_5}', ";
      $query .= "Wt_Water_g_6 = '{$Wt_Water_g_6}', ";
      $query .= "Tare_g_1 = '{$Tare_g_1}', ";
      $query .= "Tare_g_2 = '{$Tare_g_2}', ";
      $query .= "Tare_g_3 = '{$Tare_g_3}', ";
      $query .= "Tare_g_4 = '{$Tare_g_4}', ";
      $query .= "Tare_g_5 = '{$Tare_g_5}', ";
      $query .= "Tare_g_6 = '{$Tare_g_6}', ";
      $query .= "MC_Wt_Dry_Soil_g_1 = '{$MC_Wt_Dry_Soil_g_1}', ";
      $query .= "MC_Wt_Dry_Soil_g_2 = '{$MC_Wt_Dry_Soil_g_2}', ";
      $query .= "MC_Wt_Dry_Soil_g_3 = '{$MC_Wt_Dry_Soil_g_3}', ";
      $query .= "MC_Wt_Dry_Soil_g_4 = '{$MC_Wt_Dry_Soil_g_4}', ";
      $query .= "MC_Wt_Dry_Soil_g_5 = '{$MC_Wt_Dry_Soil_g_5}', ";
      $query .= "MC_Wt_Dry_Soil_g_6 = '{$MC_Wt_Dry_Soil_g_6}', ";
      $query .= "MC_Porce_1 = '{$MC_Porce_1}', ";
      $query .= "MC_Porce_2 = '{$MC_Porce_2}', ";
      $query .= "MC_Porce_3 = '{$MC_Porce_3}', ";
      $query .= "MC_Porce_4 = '{$MC_Porce_4}', ";
      $query .= "MC_Porce_5 = '{$MC_Porce_5}', ";
      $query .= "MC_Porce_6 = '{$MC_Porce_6}', ";
      $query .= "MC_Porce_Corrected_1 = '{$MC_Porce_Corrected_1}', ";
      $query .= "MC_Porce_Corrected_2 = '{$MC_Porce_Corrected_2}', ";
      $query .= "MC_Porce_Corrected_3 = '{$MC_Porce_Corrected_3}', ";
      $query .= "MC_Porce_Corrected_4 = '{$MC_Porce_Corrected_4}', ";
      $query .= "MC_Porce_Corrected_5 = '{$MC_Porce_Corrected_5}', ";
      $query .= "MC_Porce_Corrected_6 = '{$MC_Porce_Corrected_6}', ";

      $query .= "Max_Dry_Density_kgm3 = '{$Max_Dry_Density_kgm3}', ";
      $query .= "Optimun_MC_Porce = '{$Optimun_MC_Porce}', ";
      $query .= "Wc_Porce = '{$Wc_Porce}', ";
      $query .= "GM_Porce = '{$GM_Porce}', ";
      $query .= "PC_Porce = '{$PC_Porce}', ";
      $query .= "PF_Porce = '{$PF_Porce}', ";
      $query .= "YDF_Porce = '{$YDF_Porce}', ";
      $query .= "YDT_Porce = '{$YDT_Porce}', ";
      $query .= "Yw_KnM3 = '{$Yw_KnM3}', ";
      $query .= "Corrected_Dry_Unit_Weigt = '{$Corrected_Dry_Unit_Weigt}', ";
      $query .= "Corrected_Water_Content_Finer = '{$Corrected_Water_Content_Finer}' ";


      $query .= "WHERE id = '{$SearchTable['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('Revision-SP.php?id=' . $SearchTable['id'], false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('Revision-SP.php?id=' . $SearchTable['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('Revision-SP.php?id=' . $SearchTable['id'], false);
    }
  }
?>