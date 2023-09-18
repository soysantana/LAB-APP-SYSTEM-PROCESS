<?php

// Recuperamos los datos del formulario
if (isset($_POST['Al'])) {
  $req_fields = array(
'sampleid', 'structure', 'samplenumber', 'area', 'source', 'depthfrom', 'depthto', 'materialtype', 'sampletype', 'north', 'east', 'elev', 'sampledate',
'standard', 'technician', 'comments', 'test_start_date', 'LLBlows1', 'LLBlows2', 'LLBlows3', 'LLContainer1', 'LLContainer2', 'LLContainer3',
'LLWetSoil1', 'LLWetSoil2', 'LLWetSoil3', 'LLDrysoiltare1', 'LLDrysoiltare2', 'LLDrysoiltare3', 'LLWater1', 'LLWater2', 'LLWater3', 'LLTare1',
'LLTare2', 'LLTare3', 'LLWtDrySoil1', 'LLWtDrySoil2', 'LLWtDrySoil3', 'LLMCPorce1', 'LLMCPorce2', 'LLMCPorce3', 'PLContainer1', 'PLContainer2', 'PLContainer3',
'PLWetSoil1', 'PLWetSoil2', 'PLWetSoil3', 'PLDrysoiltare1', 'PLDrysoiltare2', 'PLDrysoiltare3', 'PLWater1', 'PLWater2', 'PLWater3', 'PLTare1',
'PLTare2', 'PLTare3', 'PLWtDrySoil1', 'PLWtDrySoil2', 'PLWtDrySoil3', 'PLMCPorce1', 'PLMCPorce2', 'PLMCPorce3', 'PLAvgMc', 'LLPorce', 'PLPorce',
'PLIndexPorce', 'LLIndexPorce', 'classification', 'split', 'methodpre'
);
  validate_fields($req_fields);

// Validacion de post
  if (empty($errors)) {
    $sampleid = $db->escape($_POST['sampleid']);
    $structure = $db->escape($_POST['structure']);
    $samplenumber = $db->escape($_POST['Sample_Number']);
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
    $standard = $db->escape($_POST['standard']);
    $technician = $db->escape($_POST['technician']);
    $comments = $db->escape($_POST['comments']);
    $test_start_date = $db->escape($_POST['test_start_date']);


    $reportdate = make_date();
    $testype = "AL";

// LIQUID LIMIT
    $LLBlows1 = $db->escape($_POST['LLBlows1']);
    $LLBlows2 = $db->escape($_POST['LLBlows2']);
    $LLBlows3 = $db->escape($_POST['LLBlows3']);
    $LLContainer1 = $db->escape($_POST['LLContainer1']);
    $LLContainer2 = $db->escape($_POST['LLContainer2']);
    $LLContainer3 = $db->escape($_POST['LLContainer3']);
    $LLWetSoil1 = $db->escape($_POST['LLWetSoil1']);
    $LLWetSoil2 = $db->escape($_POST['LLWetSoil2']);
    $LLWetSoil3 = $db->escape($_POST['LLWetSoil3']);
    $LLDrysoiltare1 = $db->escape($_POST['LLDrysoiltare1']);
    $LLDrysoiltare2 = $db->escape($_POST['LLDrysoiltare2']);
    $LLDrysoiltare3 = $db->escape($_POST['LLDrysoiltare3']);
    $LLWater1 = $db->escape($_POST['LLWater1']);
    $LLWater2 = $db->escape($_POST['LLWater2']);
    $LLWater3 = $db->escape($_POST['LLWater3']);
    $LLTare1 = $db->escape($_POST['LLTare1']);
    $LLTare2 = $db->escape($_POST['LLTare2']);
    $LLTare3 = $db->escape($_POST['LLTare3']);
    $LLWtDrySoil1 = $db->escape($_POST['LLWtDrySoil1']);
    $LLWtDrySoil2 = $db->escape($_POST['LLWtDrySoil2']);
    $LLWtDrySoil3 = $db->escape($_POST['LLWtDrySoil3']);
    $LLMCPorce1 = $db->escape($_POST['LLMCPorce1']);
    $LLMCPorce2 = $db->escape($_POST['LLMCPorce2']);
    $LLMCPorce3 = $db->escape($_POST['LLMCPorce3']);

// PLASTIC LIMIT
    $PLContainer1 = $db->escape($_POST['PLContainer1']);
    $PLContainer2 = $db->escape($_POST['PLContainer2']);
    $PLContainer3 = $db->escape($_POST['PLContainer3']);
    $PLWetSoil1 = $db->escape($_POST['PLWetSoil1']);
    $PLWetSoil2 = $db->escape($_POST['PLWetSoil2']);
    $PLWetSoil3 = $db->escape($_POST['PLWetSoil3']);
    $PLDrysoiltare1 = $db->escape($_POST['PLDrysoiltare1']);
    $PLDrysoiltare2 = $db->escape($_POST['PLDrysoiltare2']);
    $PLDrysoiltare3 = $db->escape($_POST['PLDrysoiltare3']);
    $PLWater1 = $db->escape($_POST['PLWater1']);
    $PLWater2 = $db->escape($_POST['PLWater2']);
    $PLWater3 = $db->escape($_POST['PLWater3']);
    $PLTare1 = $db->escape($_POST['PLTare1']);
    $PLTare2 = $db->escape($_POST['PLTare2']);
    $PLTare3 = $db->escape($_POST['PLTare3']);
    $PLWtDrySoil1 = $db->escape($_POST['PLWtDrySoil1']);
    $PLWtDrySoil2 = $db->escape($_POST['PLWtDrySoil2']);
    $PLWtDrySoil3 = $db->escape($_POST['PLWtDrySoil3']);
    $PLMCPorce1 = $db->escape($_POST['PLMCPorce1']);
    $PLMCPorce2 = $db->escape($_POST['PLMCPorce2']);
    $PLMCPorce3 = $db->escape($_POST['PLMCPorce3']);
    $PLAvgMc = $db->escape($_POST['PLAvgMc']);
    
// Limit Parameter
  $LLPorce = $db->escape($_POST['LLPorce']);
  $PLPorce = $db->escape($_POST['PLPorce']);
  $PLIndexPorce = $db->escape($_POST['PLIndexPorce']);
  $LLIndexPorce = $db->escape($_POST['LLIndexPorce']);
  $classification = $db->escape($_POST['classification']);

  $split = $db->escape($_POST['split']);
  $methodpre = $db->escape($_POST['methodpre']);


// Componemos la sentencia SQL
    $sql = "INSERT INTO atterberg_limit (
Sample_ID, Structure, Sample_Number, Area, Source, Depth_From, Depth_To, Material_Type, Sample_Type, North, East, Elev, Sample_Date, Standard, Technician,
Comments, Test_Start_Date, Report_Date, test_type, LL_Blows_1, LL_Blows_2, LL_Blows_3, LL_Container_1, LL_Container_2, LL_Container_3, 
LL_Wet_Soil_1, LL_Wet_Soil_2, LL_Wet_Soil_3, LL_Dry_soil_tare1, LL_Dry_soil_tare2, LL_Dry_soil_tare3, LL_Water_1, LL_Water_2, LL_Water_3, 
LL_Tare_1, LL_Tare_2, LL_Tare_3, LL_Wt_Dry_Soil_1, LL_Wt_Dry_Soil_2, LL_Wt_Dry_Soil_3, LL_MC_Porce_1, LL_MC_Porce_2, LL_MC_Porce_3, PL_Container_1, PL_Container_2, PL_Container_3, 
PL_Wet_Soil_1, PL_Wet_Soil_2, PL_Wet_Soil_3, PL_Dry_soil_tare1, PL_Dry_soil_tare2, PL_Dry_soil_tare3, PL_Water_1, PL_Water_2, PL_Water_3, 
PL_Tare_1, PL_Tare_2, PL_Tare_3, PL_Wt_Dry_Soil_1, PL_Wt_Dry_Soil_2, PL_Wt_Dry_Soil_3, PL_MC_Porce_1, PL_MC_Porce_2, PL_MC_Porce_3, PL_Avg_Mc, Liquid_Limit_Porce,
Plastic_Limit_Porce, Plasticity_Index_Porce, Liquidity_Index_Porce, Classification, Split_Method, Preparation_Method
)
      VALUES (
'$sampleid', '$structure', '$samplenumber', '$area', '$source', '$depthfrom', '$depthto', '$materialtype', '$sampletype', '$north', '$east', '$elev', '$sampledate',
'$standard', '$technician', '$comments', '$test_start_date', '$reportdate', '$testype', '$LLBlows1', '$LLBlows2', '$LLBlows3', '$LLContainer1', '$LLContainer2',
'$LLContainer3', '$LLWetSoil1', '$LLWetSoil2', '$LLWetSoil3', '$LLDrysoiltare1', '$LLDrysoiltare2', '$LLDrysoiltare3', '$LLWater1', '$LLWater2', '$LLWater3',
'$LLTare1', '$LLTare2', '$LLTare3', '$LLWtDrySoil1', '$LLWtDrySoil2', '$LLWtDrySoil3', '$LLMCPorce1', '$LLMCPorce2', '$LLMCPorce3', '$PLContainer1', '$PLContainer2',
'$PLContainer3', '$PLWetSoil1', '$PLWetSoil2', '$PLWetSoil3', '$PLDrysoiltare1', '$PLDrysoiltare2', '$PLDrysoiltare3', '$PLWater1', '$PLWater2', '$PLWater3',
'$PLTare1', '$PLTare2', '$PLTare3', '$PLWtDrySoil1', '$PLWtDrySoil2', '$PLWtDrySoil3', '$PLMCPorce1', '$PLMCPorce2', '$PLMCPorce3', '$PLAvgMc', '$LLPorce',
'$PLPorce', '$PLIndexPorce', '$LLIndexPorce', '$classification', '$split', '$methodpre'
)";

// Ejecutamos la sentencia
    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('./Al.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('./Al.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('./Al.php', false);
  }
}

?>