<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$grain_size = find_by_id('grain_size_sieved_coarse_aggregate', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(550, 440));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-83829_GS-for-CTA_Rev 1.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(85, 72);
$pdf->Cell(21, 5, remove_junk(ucwords($grain_size['Technician'])), 0, 1, 'C');
$pdf->SetXY(85, 78);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');

$pdf->SetXY(199, 72);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(199, 78);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(288, 72);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(288, 78);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Split_Method'])), 0, 1, 'C');

$pdf->SetXY(85, 97);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Structure'])), 0, 1, 'C');
$pdf->SetXY(85, 104);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Area'])), 0, 1, 'C');
$pdf->SetXY(85, 114);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Source'])), 0, 1, 'C');
$pdf->SetXY(85, 123);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(210, 97);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(210, 104);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(210, 114);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(210, 123);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Elev'])), 0, 1, 'C');

$pdf->SetXY(288, 97);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(288, 104);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(288, 114);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['North'])), 0, 1, 'C');
$pdf->SetXY(288, 123);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['East'])), 0, 1, 'C');

$pdf->SetXY(385, 66);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Date_Material_Arrive'])), 0, 1, 'C');
$pdf->SetXY(385, 72);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Date_of_improvement'])), 0, 1, 'C');

$pdf->SetXY(341, 82);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Samples_usig_for_improvement_No1'])), 0, 1, 'C');
$pdf->SetXY(341, 88);
$pdf->Cell(25, 5, remove_junk(ucwords($grain_size['Samples_usig_for_improvement_No2'])), 0, 1, 'C');

// Testing Information
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(130, 137);
$pdf->Cell(37, 7, remove_junk(ucwords($grain_size['Container'])), 0, 1, 'C');
$pdf->SetXY(130, 143);
$pdf->Cell(37, 7, remove_junk(ucwords($grain_size['Tare_Wet_Soil'])), 0, 1, 'C');
$pdf->SetXY(130, 149);
$pdf->Cell(37, 7, remove_junk(ucwords($grain_size['Tare_Dry_Soil'])), 0, 1, 'C');
$pdf->SetXY(130, 155);
$pdf->Cell(37, 7, remove_junk(ucwords($grain_size['Tare'])), 0, 1, 'C');
$pdf->SetXY(130, 161);
$pdf->Cell(37, 7, remove_junk(ucwords($grain_size['Dry_Soil'])), 0, 1, 'C');
$pdf->SetXY(130, 167);
$pdf->Cell(37, 7, remove_junk(ucwords($grain_size['Washed'])), 0, 1, 'C');
$pdf->SetXY(130, 174);
$pdf->Cell(37, 7, remove_junk(ucwords($grain_size['Wash_Pan'])), 0, 1, 'C');


// Reactivity Test Method FM13-007
$pdf->SetXY(130, 194);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Total_Sample_Weight_g'])), 0, 1, 'C');
$pdf->SetXY(130, 200);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Weight_used_for_the_Test_g'])), 0, 1, 'C');
$pdf->SetXY(130, 206);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['A_Particles_Reactive'])), 0, 1, 'C');
$pdf->SetXY(130, 212);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['B_Particles_Reactive'])), 0, 1, 'C');
$pdf->SetXY(130, 218);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['C_Particles_Reactive'])), 0, 1, 'C');
$pdf->SetXY(130, 225);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Weight_Mat_Ret_No_4_If_Applicable'])), 0, 1, 'C');
$pdf->SetXY(130, 232);
$pdf->Cell(37, 5, remove_junk(ucwords($grain_size['Wt_Reactive_Part_Ret_No4_If_Applicable'])), 0, 1, 'C');
$pdf->SetXY(130, 237);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Percent_Reactive_Particles_If_Applicable'])), 0, 1, 'C');
$pdf->SetXY(130, 243);
$pdf->Cell(37, 5, remove_junk(ucwords($grain_size['Average_Particles_Reactive'])), 0, 1, 'C');
$pdf->SetXY(130, 248);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Reaction_Strength_Result'])), 0, 1, 'C');

$pdf->SetXY(130, 261);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Acid_Reactivity_Test_Result'])), 0, 1, 'C');

// Gran size Distribution
$pdf->SetXY(251, 144);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_5_127'])), 0, 1, 'C');
$pdf->SetXY(274, 144);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_5_127'])), 0, 1, 'C');
$pdf->SetXY(295, 144);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Cum_Ret_5_127'])), 0, 1, 'C');
$pdf->SetXY(322, 144);
$pdf->Cell(42, 6, remove_junk(ucwords($grain_size['Porce_Pass_5_127'])), 0, 1, 'C');
$pdf->SetXY(364, 144);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Specs_5_127'])), 0, 1, 'C');

$pdf->SetXY(251, 150);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_4_101'])), 0, 1, 'C');
$pdf->SetXY(274, 150);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_4_101'])), 0, 1, 'C');
$pdf->SetXY(295, 150);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Cum_Ret_4_101'])), 0, 1, 'C');
$pdf->SetXY(322, 150);
$pdf->Cell(42, 6, remove_junk(ucwords($grain_size['Porce_Pass_4_101'])), 0, 1, 'C');
$pdf->SetXY(364, 150);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Specs_4_101'])), 0, 1, 'C');

$pdf->SetXY(251, 156);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_3p5_89'])), 0, 1, 'C');
$pdf->SetXY(274, 156);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_3p5_89'])), 0, 1, 'C');
$pdf->SetXY(295, 156);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Cum_Ret_3p5_89'])), 0, 1, 'C');
$pdf->SetXY(322, 156);
$pdf->Cell(42, 6, remove_junk(ucwords($grain_size['Porce_Pass_3p5_89'])), 0, 1, 'C');
$pdf->SetXY(364, 156);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Specs_3p5_89'])), 0, 1, 'C');

$pdf->SetXY(251, 162);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_3_75'])), 0, 1, 'C');
$pdf->SetXY(274, 162);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_3_75'])), 0, 1, 'C');
$pdf->SetXY(295, 162);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Cum_Ret_3_75'])), 0, 1, 'C');
$pdf->SetXY(322, 162);
$pdf->Cell(42, 6, remove_junk(ucwords($grain_size['Porce_Pass_3_75'])), 0, 1, 'C');
$pdf->SetXY(364, 162);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Specs_3_75'])), 0, 1, 'C');

$pdf->SetXY(251, 168);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(274, 168);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(295, 168);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Cum_Ret_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(322, 168);
$pdf->Cell(42, 6, remove_junk(ucwords($grain_size['Porce_Pass_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(364, 168);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Specs_2p5_63'])), 0, 1, 'C');

$pdf->SetXY(251, 174);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_2_50'])), 0, 1, 'C');
$pdf->SetXY(274, 174);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_2_50'])), 0, 1, 'C');
$pdf->SetXY(295, 174);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Cum_Ret_2_50'])), 0, 1, 'C');
$pdf->SetXY(322, 174);
$pdf->Cell(42, 6, remove_junk(ucwords($grain_size['Porce_Pass_2_50'])), 0, 1, 'C');
$pdf->SetXY(364, 174);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Specs_2_50'])), 0, 1, 'C');

$pdf->SetXY(251, 180);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_1p5_37'])), 0, 1, 'C');
$pdf->SetXY(274, 180);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_1p5_37'])), 0, 1, 'C');
$pdf->SetXY(295, 180);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Cum_Ret_1p5_37'])), 0, 1, 'C');
$pdf->SetXY(322, 180);
$pdf->Cell(42, 6, remove_junk(ucwords($grain_size['Porce_Pass_1p5_37'])), 0, 1, 'C');
$pdf->SetXY(364, 180);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Specs_1p5_37'])), 0, 1, 'C');

$pdf->SetXY(251, 187);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_1_25'])), 0, 1, 'C');
$pdf->SetXY(274, 187);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_1_25'])), 0, 1, 'C');
$pdf->SetXY(295, 187);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Cum_Ret_1_25'])), 0, 1, 'C');
$pdf->SetXY(322, 187);
$pdf->Cell(42, 6, remove_junk(ucwords($grain_size['Porce_Pass_1_25'])), 0, 1, 'C');
$pdf->SetXY(364, 187);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Specs_1_25'])), 0, 1, 'C');

$pdf->SetXY(251, 193);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_3p4_19'])), 0, 1, 'C');
$pdf->SetXY(274, 193);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_3p4_19'])), 0, 1, 'C');
$pdf->SetXY(295, 193);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Cum_Ret_3p4_19'])), 0, 1, 'C');
$pdf->SetXY(322, 193);
$pdf->Cell(42, 6, remove_junk(ucwords($grain_size['Porce_Pass_3p4_19'])), 0, 1, 'C');
$pdf->SetXY(364, 193);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Specs_3p4_19'])), 0, 1, 'C');

$pdf->SetXY(251, 200);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_3p8_9'])), 0, 1, 'C');
$pdf->SetXY(274, 200);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_3p8_9'])), 0, 1, 'C');
$pdf->SetXY(295, 200);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Cum_Ret_3p8_9'])), 0, 1, 'C');
$pdf->SetXY(322, 200);
$pdf->Cell(42, 6, remove_junk(ucwords($grain_size['Porce_Pass_3p8_9'])), 0, 1, 'C');
$pdf->SetXY(364, 200);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Specs_3p8_9'])), 0, 1, 'C');

$pdf->SetXY(251, 206);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_No4_4'])), 0, 1, 'C');
$pdf->SetXY(274, 206);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_No4_4'])), 0, 1, 'C');
$pdf->SetXY(295, 206);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Cum_Ret_No4_4'])), 0, 1, 'C');
$pdf->SetXY(322, 206);
$pdf->Cell(42, 6, remove_junk(ucwords($grain_size['Porce_Pass_No4_4'])), 0, 1, 'C');
$pdf->SetXY(364, 206);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Specs_No4_4'])), 0, 1, 'C');

$pdf->SetXY(251, 212);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_No10_2'])), 0, 1, 'C');
$pdf->SetXY(274, 212);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_No10_2'])), 0, 1, 'C');
$pdf->SetXY(295, 212);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Cum_Ret_No10_2'])), 0, 1, 'C');
$pdf->SetXY(322, 212);
$pdf->Cell(42, 6, remove_junk(ucwords($grain_size['Porce_Pass_No10_2'])), 0, 1, 'C');
$pdf->SetXY(364, 212);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Specs_No10_2'])), 0, 1, 'C');

$pdf->SetXY(251, 218);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_No200_0p075'])), 0, 1, 'C');
$pdf->SetXY(274, 218);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_No200_0p075'])), 0, 1, 'C');
$pdf->SetXY(295, 218);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Cum_Ret_No200_0p075'])), 0, 1, 'C');
$pdf->SetXY(322, 218);
$pdf->Cell(42, 6, remove_junk(ucwords($grain_size['Porce_Pass_No200_0p075'])), 0, 1, 'C');
$pdf->SetXY(364, 218);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Specs_No200_0p075'])), 0, 1, 'C');

$pdf->SetXY(251, 224);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_Pan'])), 0, 1, 'C');
$pdf->SetXY(274, 224);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_Pan'])), 0, 1, 'C');

$pdf->SetXY(251, 231);
$pdf->Cell(23, 6, remove_junk(ucwords($grain_size['Wt_Ret_Total_Pan'])), 0, 1, 'C');
$pdf->SetXY(274, 231);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_Total_Pan'])), 0, 1, 'C');
$pdf->SetXY(295, 231);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Cum_Ret_Total_Pan'])), 0, 1, 'C');
$pdf->SetXY(322, 231);
$pdf->Cell(42, 6, remove_junk(ucwords($grain_size['Porce_Pass_Total_Pan'])), 0, 1, 'C');


// Summary Grain Size Distribution Parameter

$pdf->SetXY(295, 248);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Coarser_than_Gravel'])), 1, 1, 'C');
$pdf->SetXY(295, 255);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Gravel'])), 0, 1, 'C');
$pdf->SetXY(295, 261);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Sand'])), 0, 1, 'C');
$pdf->SetXY(295, 267);
$pdf->Cell(27, 6, remove_junk(ucwords($grain_size['Fines'])), 0, 1, 'C');
$pdf->SetXY(322, 273);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['D10'])), 1, 1, 'C');
$pdf->SetXY(322, 279);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['D15'])), 0, 1, 'C');
$pdf->SetXY(322, 285);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['D30'])), 0, 1, 'C');
$pdf->SetXY(322, 291);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['D60'])), 0, 1, 'C');
$pdf->SetXY(322, 297);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['D85'])), 0, 1, 'C');
$pdf->SetXY(322, 303);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Cc'])), 0, 1, 'C');
$pdf->SetXY(322, 309);
$pdf->Cell(41, 5, remove_junk(ucwords($grain_size['Cu'])), 0, 1, 'C');


//Coarse Grained Classification & Comments
$pdf->SetXY(250, 327);
$pdf->Cell(138, 6, remove_junk(ucwords($grain_size['Fine_Grained_Classification_using_the_USCS'])), 0, 1, 'C');
$pdf->SetXY(322, 350);
$pdf->Cell(67, 6, remove_junk(ucwords($grain_size['Grain_Size_Test_Result'])), 0, 1, 'C');
$pdf->SetXY(53, 394);
$pdf->Cell(336, 73, remove_junk(ucwords($grain_size['Comments'])), 0, 1, 'C');



$pdf->Output();
?>