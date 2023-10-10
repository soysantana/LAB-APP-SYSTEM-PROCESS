<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$grain_size = find_by_id('grain_size_coarse_aggregate', (int)$_GET['id']);

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
$pdf->setSourceFile('PV-F-83828_GS-for-CA_Rev 1.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(77, 64);
$pdf->Cell(30, 5, remove_junk(ucwords($grain_size['Technician'])), 0, 1, 'C');
$pdf->SetXY(77, 70);
$pdf->Cell(30, 5, "nose", 0, 1, 'C');

$pdf->SetXY(200, 64);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(200, 70);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(290, 64);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(290, 70);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Split_Method'])), 0, 1, 'C');

$pdf->SetXY(77, 89);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Structure'])), 0, 1, 'C');
$pdf->SetXY(77, 97);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Area'])), 0, 1, 'C');
$pdf->SetXY(77, 106);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Source'])), 0, 1, 'C');
$pdf->SetXY(77, 116);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(210, 89);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(210, 97);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(210, 106);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(210, 116);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Elev'])), 0, 1, 'C');

$pdf->SetXY(290, 89);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(290, 97);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(290, 106);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['North'])), 0, 1, 'C');
$pdf->SetXY(290, 116);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['East'])), 0, 1, 'C');

$pdf->SetXY(385, 56);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Date_Material_Arrive'])), 0, 1, 'C');
$pdf->SetXY(385, 63);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Date_of_improvement'])), 0, 1, 'C');
$pdf->SetXY(385, 69);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Improvement'])), 0, 1, 'C');

$pdf->SetXY(318, 75);
$pdf->Cell(64, 6, remove_junk(ucwords($grain_size['Samples_usig_for_improvement_No1'])), 0, 1, 'C');
$pdf->SetXY(318, 81);
$pdf->Cell(64, 5, remove_junk(ucwords($grain_size['Samples_usig_for_improvement_No2'])), 0, 1, 'C');

// Testing Information
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(126, 132);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Container'])), 0, 1, 'C');
$pdf->SetXY(126, 138);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Tare_Wet_Soil'])), 0, 1, 'C');
$pdf->SetXY(126, 144);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Tare_Dry_Soil'])), 0, 1, 'C');
$pdf->SetXY(126, 151);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Tare'])), 0, 1, 'C');
$pdf->SetXY(126, 157);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Dry_Soil'])), 0, 1, 'C');
$pdf->SetXY(126, 163);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Washed'])), 0, 1, 'C');
$pdf->SetXY(126, 170);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Wash_Pan'])), 0, 1, 'C');

// Reactivity Test Method FM13-007
$pdf->SetXY(126, 189);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Total_Sample_Weight_g'])), 0, 1, 'C');
$pdf->SetXY(126, 196);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Weight_used_for_the_Test_g'])), 0, 1, 'C');
$pdf->SetXY(126, 202);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['A_Particles_Reactive'])), 0, 1, 'C');
$pdf->SetXY(126, 208);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['B_Particles_Reactive'])), 0, 1, 'C');
$pdf->SetXY(126, 214);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['C_Particles_Reactive'])), 0, 1, 'C');
$pdf->SetXY(126, 221);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Weight_Mat_Ret_No_4_If_Applicable'])), 0, 1, 'C');
$pdf->SetXY(126, 228);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Wt_Reactive_Part_Ret_No4_If_Applicable'])), 0, 1, 'C');
$pdf->SetXY(126, 233);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Percent_Reactive_Particles_If_Applicable'])), 0, 1, 'C');
$pdf->SetXY(126, 239);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Average_Particles_Reactive'])), 0, 1, 'C');
$pdf->SetXY(126, 245);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Reaction_Strength_Result'])), 0, 1, 'C');
$pdf->SetXY(126, 258);
$pdf->Cell(47, 6, remove_junk(ucwords($grain_size['Acid_Reactivity_Test_Result'])), 0, 1, 'C');

// Gran size Distribution
$pdf->SetXY(260, 138);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_5_127'])), 0, 1, 'C');
$pdf->SetXY(289, 138);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_5_127'])), 0, 1, 'C');
$pdf->SetXY(318, 138);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_5_127'])), 0, 1, 'C');
$pdf->SetXY(339, 138);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_5_127'])), 0, 1, 'C');
$pdf->SetXY(382, 138);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Specs_5_127'])), 0, 1, 'C');

$pdf->SetXY(260, 144);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_4_101'])), 0, 1, 'C');
$pdf->SetXY(289, 144);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_4_101'])), 0, 1, 'C');
$pdf->SetXY(318, 144);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_4_101'])), 0, 1, 'C');
$pdf->SetXY(339, 144);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_4_101'])), 0, 1, 'C');
$pdf->SetXY(382, 144);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Specs_4_101'])), 0, 1, 'C');

$pdf->SetXY(260, 150);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_3p5_89'])), 0, 1, 'C');
$pdf->SetXY(289, 150);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_3p5_89'])), 0, 1, 'C');
$pdf->SetXY(318, 150);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_3p5_89'])), 0, 1, 'C');
$pdf->SetXY(339, 150);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_3p5_89'])), 0, 1, 'C');
$pdf->SetXY(382, 150);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Specs_3p5_89'])), 0, 1, 'C');

$pdf->SetXY(260, 156);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_3_75'])), 0, 1, 'C');
$pdf->SetXY(289, 156);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_3_75'])), 0, 1, 'C');
$pdf->SetXY(318, 156);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_3_75'])), 0, 1, 'C');
$pdf->SetXY(339, 156);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_3_75'])), 0, 1, 'C');
$pdf->SetXY(382, 156);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Specs_3_75'])), 0, 1, 'C');

$pdf->SetXY(260, 163);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(289, 163);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(318, 163);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(339, 163);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(382, 163);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Specs_2p5_63'])), 0, 1, 'C');

$pdf->SetXY(260, 170);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_2_50'])), 0, 1, 'C');
$pdf->SetXY(289, 170);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_2_50'])), 0, 1, 'C');
$pdf->SetXY(318, 170);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_2_50'])), 0, 1, 'C');
$pdf->SetXY(339, 170);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_2_50'])), 0, 1, 'C');
$pdf->SetXY(382, 170);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Specs_2_50'])), 0, 1, 'C');

$pdf->SetXY(260, 176);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_1p5_37'])), 0, 1, 'C');
$pdf->SetXY(289, 176);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_1p5_37'])), 0, 1, 'C');
$pdf->SetXY(318, 176);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_1p5_37'])), 0, 1, 'C');
$pdf->SetXY(339, 176);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_1p5_37'])), 0, 1, 'C');

$pdf->SetXY(260, 182);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_1_25'])), 0, 1, 'C');
$pdf->SetXY(289, 182);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_1_25'])), 0, 1, 'C');
$pdf->SetXY(318, 182);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_1_25'])), 0, 1, 'C');
$pdf->SetXY(339, 182);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_1_25'])), 0, 1, 'C');

$pdf->SetXY(260, 189);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_3p4_19'])), 0, 1, 'C');
$pdf->SetXY(289, 189);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_3p4_19'])), 0, 1, 'C');
$pdf->SetXY(318, 189);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_3p4_19'])), 0, 1, 'C');
$pdf->SetXY(339, 189);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_3p4_19'])), 0, 1, 'C');

$pdf->SetXY(260, 195);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_3p8_9'])), 0, 1, 'C');
$pdf->SetXY(289, 195);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_3p8_9'])), 0, 1, 'C');
$pdf->SetXY(318, 195);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_3p8_9'])), 0, 1, 'C');
$pdf->SetXY(339, 195);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_3p8_9'])), 0, 1, 'C');

$pdf->SetXY(260, 202);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_No4_4'])), 0, 1, 'C');
$pdf->SetXY(289, 202);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_No4_4'])), 0, 1, 'C');
$pdf->SetXY(318, 202);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_No4_4'])), 0, 1, 'C');
$pdf->SetXY(339, 202);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_No4_4'])), 0, 1, 'C');

$pdf->SetXY(260, 208);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_No10_2'])), 0, 1, 'C');
$pdf->SetXY(289, 208);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_No10_2'])), 0, 1, 'C');
$pdf->SetXY(318, 208);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_No10_2'])), 0, 1, 'C');
$pdf->SetXY(339, 208);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_No10_2'])), 0, 1, 'C');

$pdf->SetXY(260, 214);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_No16_1'])), 0, 1, 'C');
$pdf->SetXY(289, 214);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_No16_1'])), 0, 1, 'C');
$pdf->SetXY(318, 214);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_No16_1'])), 0, 1, 'C');
$pdf->SetXY(339, 214);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_No16_1'])), 0, 1, 'C');
$pdf->SetXY(382, 214);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Specs_No16_1'])), 0, 1, 'C');

$pdf->SetXY(260, 221);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_No20_0p85'])), 0, 1, 'C');
$pdf->SetXY(289, 221);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_No20_0p85'])), 0, 1, 'C');
$pdf->SetXY(318, 221);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_No20_0p85'])), 0, 1, 'C');
$pdf->SetXY(339, 221);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_No20_0p85'])), 0, 1, 'C');

$pdf->SetXY(260, 228);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_No50_0p3'])), 0, 1, 'C');
$pdf->SetXY(289, 228);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_No50_0p3'])), 0, 1, 'C');
$pdf->SetXY(318, 228);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_No50_0p3'])), 0, 1, 'C');
$pdf->SetXY(339, 228);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_No50_0p3'])), 0, 1, 'C');
$pdf->SetXY(382, 228);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Specs_No50_0p3'])), 0, 1, 'C');

$pdf->SetXY(260, 234);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_No60_0p25'])), 0, 1, 'C');
$pdf->SetXY(289, 234);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_No60_0p25'])), 0, 1, 'C');
$pdf->SetXY(318, 234);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_No60_0p25'])), 0, 1, 'C');
$pdf->SetXY(339, 234);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_No60_0p25'])), 0, 1, 'C');
$pdf->SetXY(382, 234);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Specs_No60_0p25'])), 0, 1, 'C');

$pdf->SetXY(260, 239);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_No200_0p075'])), 0, 1, 'C');
$pdf->SetXY(289, 239);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_No200_0p075'])), 0, 1, 'C');
$pdf->SetXY(318, 239);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_No200_0p075'])), 0, 1, 'C');
$pdf->SetXY(339, 239);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_No200_0p075'])), 0, 1, 'C');

$pdf->SetXY(260, 245);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_Pan'])), 0, 1, 'C');
$pdf->SetXY(289, 245);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_Pan'])), 0, 1, 'C');

$pdf->SetXY(260, 252);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Wt_Ret_Total_Pan'])), 0, 1, 'C');
$pdf->SetXY(289, 252);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_Total_Pan'])), 0, 1, 'C');
$pdf->SetXY(318, 252);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_Total_Pan'])), 0, 1, 'C');
$pdf->SetXY(339, 252);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Porce_Pass_Total_Pan'])), 0, 1, 'C');

// Summary Grain Size Distribution Parameter

$pdf->SetXY(339, 277);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Coarser_than_Gravel'])), 1, 1, 'C');
$pdf->SetXY(339, 282);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Gravel'])), 0, 1, 'C');
$pdf->SetXY(339, 288);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Sand'])), 0, 1, 'C');
$pdf->SetXY(339, 295);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Fines'])), 0, 1, 'C');
$pdf->SetXY(339, 301);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['D10'])), 0, 1, 'C');
$pdf->SetXY(339, 307);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['D15'])), 0, 1, 'C');
$pdf->SetXY(339, 314);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['D30'])), 0, 1, 'C');
$pdf->SetXY(339, 320);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['D60'])), 0, 1, 'C');
$pdf->SetXY(339, 326);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['D85'])), 0, 1, 'C');
$pdf->SetXY(339, 333);
$pdf->Cell(43, 6, remove_junk(ucwords($grain_size['Cc'])), 0, 1, 'C');
$pdf->SetXY(339, 339);
$pdf->Cell(43, 5, remove_junk(ucwords($grain_size['Cu'])), 0, 1, 'C');

//Coarse Grained Classification using the USCS

$pdf->SetXY(260, 357);
$pdf->Cell(152, 6, remove_junk(ucwords($grain_size['Fine_Grained_Classification_using_the_USCS'])), 0, 1, 'C');
$pdf->SetXY(339, 383);
$pdf->Cell(73, 6, remove_junk(ucwords($grain_size['Grain_Size_Test_Result'])), 0, 1, 'C');

$pdf->SetXY(52, 408);
$pdf->Cell(360, 70, remove_junk(ucwords($grain_size['Comments'])), 0, 1, 'C');



$pdf->Output();
?>