<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$grain_size = find_by_id('grain_size_fine_aggregate', (int)$_GET['id']);

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
$pdf->setSourceFile('PV-F-83830_GS-for-FA_Rev 1.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(72, 64);
$pdf->Cell(21, 5, remove_junk(ucwords($grain_size['Technician'])), 0, 1, 'C');
$pdf->SetXY(72, 70);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');

$pdf->SetXY(193, 64);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(193, 70);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(288, 64);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(288, 70);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Split_Method'])), 0, 1, 'C');

$pdf->SetXY(72, 90);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Structure'])), 0, 1, 'C');
$pdf->SetXY(72, 101);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Area'])), 0, 1, 'C');
$pdf->SetXY(72, 111);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Source'])), 0, 1, 'C');
$pdf->SetXY(72, 120);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(210, 90);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(210, 101);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(210, 111);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(210, 120);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Elev'])), 0, 1, 'C');

$pdf->SetXY(288, 90);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(288, 101);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(288, 111);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['North'])), 0, 1, 'C');
$pdf->SetXY(288, 120);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['East'])), 0, 1, 'C');

$pdf->SetXY(385, 56);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Date_Material_Arrive'])), 0, 1, 'C');
$pdf->SetXY(385, 63);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Date_of_improvement'])), 0, 1, 'C');
$pdf->SetXY(385, 69);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Improvement'])), 0, 1, 'C');

$pdf->SetXY(341, 75);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Samples_usig_for_improvement_No1'])), 0, 1, 'C');
$pdf->SetXY(341, 81);
$pdf->Cell(25, 5, remove_junk(ucwords($grain_size['Samples_usig_for_improvement_No2'])), 0, 1, 'C');

// Testing Information
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(130, 146);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['Container'])), 1, 1, 'C');
$pdf->SetXY(130, 152);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['Tare_Wet_Soil'])), 0, 1, 'C');
$pdf->SetXY(130, 158);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['Tare_Dry_Soil'])), 0, 1, 'C');
$pdf->SetXY(130, 164.5);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['Tare'])), 0, 1, 'C');
$pdf->SetXY(130, 170);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['Dry_Soil'])), 0, 1, 'C');
$pdf->SetXY(130, 176);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['Washed'])), 0, 1, 'C');
$pdf->SetXY(130, 183);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['Wash_Pan'])), 0, 1, 'C');


// Reactivity Test Method FM13-007
$pdf->SetXY(130, 202);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['Weight_used_for_the_Test_g'])), 0, 1, 'C');
$pdf->SetXY(130, 208);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['A_Particles_Reactive'])), 0, 1, 'C');
$pdf->SetXY(130, 214);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['B_Particles_Reactive'])), 0, 1, 'C');
$pdf->SetXY(130, 220);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['C_Particles_Reactive'])), 0, 1, 'C');
$pdf->SetXY(130, 226);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['D_Particles_Reactive'])), 0, 1, 'C');
$pdf->SetXY(130, 233);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['E_Particles_Reactive'])), 0, 1, 'C');
$pdf->SetXY(130, 240);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['Average_Particles_Reactive'])), 0, 1, 'C');
$pdf->SetXY(130, 245);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['Reaction_Strength_Result'])), 0, 1, 'C');
$pdf->SetXY(130, 257);
$pdf->Cell(35, 6, remove_junk(ucwords($grain_size['Acid_Reactivity_Test_Result'])), 0, 1, 'C');

// Gran size Distribution
$pdf->SetXY(251, 152);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_5_127'])), 1, 1, 'C');
$pdf->SetXY(292, 152);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_5_127'])), 1, 1, 'C');
$pdf->SetXY(321, 152);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_5_127'])), 1, 1, 'C');
$pdf->SetXY(346, 152);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_5_127'])), 1, 1, 'C');
$pdf->SetXY(383, 152);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Specs_5_127'])), 1, 1, 'C');

$pdf->SetXY(251, 158);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_4_101'])), 0, 1, 'C');
$pdf->SetXY(292, 158);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_4_101'])), 0, 1, 'C');
$pdf->SetXY(321, 158);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_4_101'])), 0, 1, 'C');
$pdf->SetXY(346, 158);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_4_101'])), 0, 1, 'C');
$pdf->SetXY(383, 158);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Specs_4_101'])), 0, 1, 'C');

$pdf->SetXY(251, 164);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_3p5_89'])), 0, 1, 'C');
$pdf->SetXY(292, 164);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_3p5_89'])), 0, 1, 'C');
$pdf->SetXY(321, 164);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_3p5_89'])), 0, 1, 'C');
$pdf->SetXY(346, 164);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_3p5_89'])), 0, 1, 'C');
$pdf->SetXY(383, 164);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Specs_3p5_89'])), 0, 1, 'C');

$pdf->SetXY(251, 170);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_3_75'])), 0, 1, 'C');
$pdf->SetXY(292, 170);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_3_75'])), 0, 1, 'C');
$pdf->SetXY(321, 170);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_3_75'])), 0, 1, 'C');
$pdf->SetXY(346, 170);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_3_75'])), 0, 1, 'C');
$pdf->SetXY(383, 170);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Specs_3_75'])), 0, 1, 'C');

$pdf->SetXY(251, 176);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(292, 176);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(321, 176);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(346, 176);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(383, 176);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Specs_2p5_63'])), 0, 1, 'C');

$pdf->SetXY(251, 183);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_2_50'])), 0, 1, 'C');
$pdf->SetXY(292, 183);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_2_50'])), 0, 1, 'C');
$pdf->SetXY(321, 183);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_2_50'])), 0, 1, 'C');
$pdf->SetXY(346, 183);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_2_50'])), 0, 1, 'C');
$pdf->SetXY(383, 183);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Specs_2_50'])), 0, 1, 'C');

$pdf->SetXY(251, 189);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_1p5_37'])), 0, 1, 'C');
$pdf->SetXY(292, 189);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_1p5_37'])), 0, 1, 'C');
$pdf->SetXY(321, 189);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_1p5_37'])), 0, 1, 'C');
$pdf->SetXY(346, 189);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_1p5_37'])), 0, 1, 'C');

$pdf->SetXY(251, 195);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_1_25'])), 0, 1, 'C');
$pdf->SetXY(292, 195);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_1_25'])), 0, 1, 'C');
$pdf->SetXY(321, 195);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_1_25'])), 0, 1, 'C');
$pdf->SetXY(346, 195);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_1_25'])), 0, 1, 'C');

$pdf->SetXY(251, 202);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_3p4_19'])), 0, 1, 'C');
$pdf->SetXY(292, 202);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_3p4_19'])), 0, 1, 'C');
$pdf->SetXY(321, 202);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_3p4_19'])), 0, 1, 'C');
$pdf->SetXY(346, 202);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_3p4_19'])), 0, 1, 'C');

$pdf->SetXY(251, 208);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_1p2_12'])), 0, 1, 'C');
$pdf->SetXY(292, 208);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_1p2_12'])), 0, 1, 'C');
$pdf->SetXY(321, 208);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_1p2_12'])), 0, 1, 'C');
$pdf->SetXY(346, 208);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_1p2_12'])), 0, 1, 'C');

$pdf->SetXY(251, 215);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_3p8_9'])), 0, 1, 'C');
$pdf->SetXY(292, 215);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_3p8_9'])), 0, 1, 'C');
$pdf->SetXY(321, 215);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_3p8_9'])), 0, 1, 'C');
$pdf->SetXY(346, 215);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_3p8_9'])), 0, 1, 'C');

$pdf->SetXY(251, 220);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_No4_4'])), 0, 1, 'C');
$pdf->SetXY(292, 220);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_No4_4'])), 0, 1, 'C');
$pdf->SetXY(321, 220);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_No4_4'])), 0, 1, 'C');
$pdf->SetXY(346, 220);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_No4_4'])), 0, 1, 'C');

$pdf->SetXY(251, 227);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_No10_2'])), 0, 1, 'C');
$pdf->SetXY(292, 227);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_No10_2'])), 0, 1, 'C');
$pdf->SetXY(321, 227);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_No10_2'])), 0, 1, 'C');
$pdf->SetXY(346, 227);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_No10_2'])), 0, 1, 'C');

$pdf->SetXY(251, 233);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_No16_1'])), 0, 1, 'C');
$pdf->SetXY(292, 233);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_No16_1'])), 0, 1, 'C');
$pdf->SetXY(321, 233);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_No16_1'])), 0, 1, 'C');
$pdf->SetXY(346, 233);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_No16_1'])), 0, 1, 'C');

$pdf->SetXY(251, 239);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_No20_0p85'])), 0, 1, 'C');
$pdf->SetXY(292, 239);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_No20_0p85'])), 0, 1, 'C');
$pdf->SetXY(321, 239);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_No20_0p85'])), 0, 1, 'C');
$pdf->SetXY(346, 239);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_No20_0p85'])), 0, 1, 'C');

$pdf->SetXY(251, 245);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_No50_0p3'])), 0, 1, 'C');
$pdf->SetXY(292, 245);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_No50_0p3'])), 0, 1, 'C');
$pdf->SetXY(321, 245);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_No50_0p3'])), 0, 1, 'C');
$pdf->SetXY(346, 245);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_No50_0p3'])), 0, 1, 'C');

$pdf->SetXY(251, 251);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_No60_0p25'])), 0, 1, 'C');
$pdf->SetXY(292, 251);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_No60_0p25'])), 0, 1, 'C');
$pdf->SetXY(321, 251);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_No60_0p25'])), 0, 1, 'C');
$pdf->SetXY(346, 251);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_No60_0p25'])), 0, 1, 'C');

$pdf->SetXY(251, 257);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_No200_0p075'])), 0, 1, 'C');
$pdf->SetXY(292, 257);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_No200_0p075'])), 0, 1, 'C');
$pdf->SetXY(321, 257);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_No200_0p075'])), 0, 1, 'C');
$pdf->SetXY(346, 257);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_No200_0p075'])), 0, 1, 'C');

$pdf->SetXY(251, 263.5);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_Pan'])), 0, 1, 'C');
$pdf->SetXY(292, 263.5);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_Pan'])), 0, 1, 'C');

$pdf->SetXY(251, 270);
$pdf->Cell(41, 6, remove_junk(ucwords($grain_size['Wt_Ret_Total_Pan'])), 0, 1, 'C');
$pdf->SetXY(292, 270);
$pdf->Cell(29, 6, remove_junk(ucwords($grain_size['Porce_Ret_Total_Pan'])), 0, 1, 'C');
$pdf->SetXY(321, 270);
$pdf->Cell(25, 6, remove_junk(ucwords($grain_size['Cum_Ret_Total_Pan'])), 0, 1, 'C');
$pdf->SetXY(346, 270);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Porce_Pass_Total_Pan'])), 0, 1, 'C');



// Summary Grain Size Distribution Parameter

$pdf->SetXY(346, 288);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Coarser_than_Gravel'])), 0, 1, 'C');
$pdf->SetXY(346, 293);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Gravel'])), 0, 1, 'C');
$pdf->SetXY(346, 299);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Sand'])), 0, 1, 'C');
$pdf->SetXY(346, 305.5);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Fines'])), 0, 1, 'C');
$pdf->SetXY(346, 311);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['D10'])), 0, 1, 'C');
$pdf->SetXY(346, 318);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['D15'])), 0, 1, 'C');
$pdf->SetXY(346, 324);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['D30'])), 0, 1, 'C');
$pdf->SetXY(346, 330);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['D60'])), 0, 1, 'C');
$pdf->SetXY(346, 336.5);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['D85'])), 0, 1, 'C');
$pdf->SetXY(346, 343);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Cc'])), 0, 1, 'C');
$pdf->SetXY(346, 349);
$pdf->Cell(37, 5, remove_junk(ucwords($grain_size['Cu'])), 0, 1, 'C');

//Coarse Grained Classification using the USCS

$pdf->SetXY(250, 366);
$pdf->Cell(154, 6, remove_junk(ucwords($grain_size['Grain_Size_Test_Result_No1'])), 0, 1, 'C');
$pdf->SetXY(346, 392);
$pdf->Cell(37, 6, remove_junk(ucwords($grain_size['Grain_Size_Test_Result_No2'])), 0, 1, 'C');

$pdf->SetXY(44, 438);
$pdf->Cell(360, 70, remove_junk(ucwords($grain_size['Comments'])), 0, 1, 'C');


$pdf->Output();
?>