<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$grain_size = find_by_id('grain_size', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(440, 360));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-81247_GS_Rev 5.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(70, 46);
$pdf->Cell(30, 5, remove_junk(ucwords($grain_size['Technician'])), 0, 1, 'C');
$pdf->SetXY(70, 52);
$pdf->Cell(30, 5, "nose", 0, 1, 'C');

$pdf->SetXY(185, 39);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Standard'])), 0, 1, 'C');
$pdf->SetXY(185, 46);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(185, 52);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(270, 45);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(270, 51);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Split_Method'])), 0, 1, 'C');

$pdf->SetXY(70, 69);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Structure'])), 0, 1, 'C');
$pdf->SetXY(70, 75);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Area'])), 0, 1, 'C');
$pdf->SetXY(70, 82);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Source'])), 0, 1, 'C');
$pdf->SetXY(70, 90);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(185, 69);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(185, 75);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(185, 83);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(185, 90);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Elev'])), 0, 1, 'C');

$pdf->SetXY(270, 69);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(270, 75);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(270, 83);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['North'])), 0, 1, 'C');
$pdf->SetXY(270, 90);
$pdf->Cell(30, 6, remove_junk(ucwords($grain_size['East'])), 0, 1, 'C');

// Testing Information
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(120, 110);
$pdf->Cell(28, 8, remove_junk(ucwords($grain_size['Container'])), 0, 1, 'C');
$pdf->SetXY(120, 117);
$pdf->Cell(28, 8, remove_junk(ucwords($grain_size['Tare_Wet_Soil'])), 0, 1, 'C');
$pdf->SetXY(120, 124);
$pdf->Cell(28, 7, remove_junk(ucwords($grain_size['Tare_Dry_Soil'])), 0, 1, 'C');
$pdf->SetXY(120, 131);
$pdf->Cell(28, 7, remove_junk(ucwords($grain_size['Tare'])), 0, 1, 'C');
$pdf->SetXY(120, 138);
$pdf->Cell(28, 7, remove_junk(ucwords($grain_size['Dry_Soil'])), 0, 1, 'C');
$pdf->SetXY(120, 145);
$pdf->Cell(28, 7, remove_junk(ucwords($grain_size['Washed'])), 0, 1, 'C');
$pdf->SetXY(120, 152);
$pdf->Cell(28, 7, remove_junk(ucwords($grain_size['Wash_Pan'])), 0, 1, 'C');

//Grain Size Distribution
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(235, 117);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');
$pdf->SetXY(253, 117);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_8_203'])), 0, 1, 'C');
$pdf->SetXY(275, 117);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_8_203'])), 0, 1, 'C');
$pdf->SetXY(296, 117);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_8_203'])), 0, 1, 'C');
$pdf->SetXY(314, 117);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 124);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');
$pdf->SetXY(253, 124);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_8_203'])), 0, 1, 'C');
$pdf->SetXY(275, 124);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_8_203'])), 0, 1, 'C');
$pdf->SetXY(296, 124);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_8_203'])), 0, 1, 'C');
$pdf->SetXY(314, 124);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 131);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_6_152'])), 0, 1, 'C');
$pdf->SetXY(253, 131);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_6_152'])), 0, 1, 'C');
$pdf->SetXY(275, 131);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_6_152'])), 0, 1, 'C');
$pdf->SetXY(296, 131);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_6_152'])), 0, 1, 'C');
$pdf->SetXY(314, 131);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 138);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_5_127'])), 0, 1, 'C');
$pdf->SetXY(253, 138);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_5_127'])), 0, 1, 'C');
$pdf->SetXY(275, 138);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_5_127'])), 0, 1, 'C');
$pdf->SetXY(296, 138);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_5_127'])), 0, 1, 'C');
$pdf->SetXY(314, 138);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 145);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_4_101'])), 0, 1, 'C');
$pdf->SetXY(253, 145);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_4_101'])), 0, 1, 'C');
$pdf->SetXY(275, 145);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_4_101'])), 0, 1, 'C');
$pdf->SetXY(296, 145);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_4_101'])), 0, 1, 'C');
$pdf->SetXY(314, 145);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 152);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_6_152'])), 0, 1, 'C');
$pdf->SetXY(253, 152);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_6_152'])), 0, 1, 'C');
$pdf->SetXY(275, 152);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_6_152'])), 0, 1, 'C');
$pdf->SetXY(296, 152);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_6_152'])), 0, 1, 'C');
$pdf->SetXY(314, 152);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 158.5);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_3_75'])), 0, 1, 'C');
$pdf->SetXY(253, 158.5);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_3_75'])), 0, 1, 'C');
$pdf->SetXY(275, 158.5);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_3_75'])), 0, 1, 'C');
$pdf->SetXY(296, 158.5);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_3_75'])), 0, 1, 'C');
$pdf->SetXY(314, 158.5);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 165);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(253, 165);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(275, 165);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(296, 165);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_2p5_63'])), 0, 1, 'C');
$pdf->SetXY(314, 165);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 171);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_2_50'])), 0, 1, 'C');
$pdf->SetXY(253, 171);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_2_50'])), 0, 1, 'C');
$pdf->SetXY(275, 171);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_2_50'])), 0, 1, 'C');
$pdf->SetXY(296, 171);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_2_50'])), 0, 1, 'C');
$pdf->SetXY(314, 171);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 177);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_1p5_37'])), 0, 1, 'C');
$pdf->SetXY(253, 177);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_1p5_37'])), 0, 1, 'C');
$pdf->SetXY(275, 177);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_1p5_37'])), 0, 1, 'C');
$pdf->SetXY(296, 177);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_1p5_37'])), 0, 1, 'C');
$pdf->SetXY(314, 177);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 183);
$pdf->Cell(17, 6, remove_junk(ucwords($grain_size['Wt_Ret_1_25'])), 0, 1, 'C');
$pdf->SetXY(253, 183);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_1_25'])), 0, 1, 'C');
$pdf->SetXY(275, 183);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_1_25'])), 0, 1, 'C');
$pdf->SetXY(296, 183);
$pdf->Cell(18, 6, remove_junk(ucwords($grain_size['Porce_Pass_1_25'])), 0, 1, 'C');
$pdf->SetXY(314, 183);
//$pdf->Cell(19, 6, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 188);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_3p4_19'])), 0, 1, 'C');
$pdf->SetXY(253, 188);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_3p4_19'])), 0, 1, 'C');
$pdf->SetXY(275, 188);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_3p4_19'])), 0, 1, 'C');
$pdf->SetXY(296, 188);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_3p4_19'])), 0, 1, 'C');
$pdf->SetXY(314, 188);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 194);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_1p2_12'])), 0, 1, 'C');
$pdf->SetXY(253, 194);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_1p2_12'])), 0, 1, 'C');
$pdf->SetXY(275, 194);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_1p2_12'])), 0, 1, 'C');
$pdf->SetXY(296, 194);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_1p2_12'])), 0, 1, 'C');
$pdf->SetXY(314, 194);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 200);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_3p8_9'])), 0, 1, 'C');
$pdf->SetXY(253, 200);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_3p8_9'])), 0, 1, 'C');
$pdf->SetXY(275, 200);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_3p8_9'])), 0, 1, 'C');
$pdf->SetXY(296, 200);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_3p8_9'])), 0, 1, 'C');
$pdf->SetXY(314, 200);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 206);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_No4_4'])), 0, 1, 'C');
$pdf->SetXY(253, 206);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_No4_4'])), 0, 1, 'C');
$pdf->SetXY(275, 206);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_No4_4'])), 0, 1, 'C');
$pdf->SetXY(296, 206);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_No4_4'])), 0, 1, 'C');
$pdf->SetXY(314, 206);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 212);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_No10_2'])), 0, 1, 'C');
$pdf->SetXY(253, 212);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_No10_2'])), 0, 1, 'C');
$pdf->SetXY(275, 212);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_No10_2'])), 0, 1, 'C');
$pdf->SetXY(296, 212);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_No10_2'])), 0, 1, 'C');
$pdf->SetXY(314, 212);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 217.5);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_No16_1'])), 0, 1, 'C');
$pdf->SetXY(253, 217.5);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_No16_1'])), 0, 1, 'C');
$pdf->SetXY(275, 217.5);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_No16_1'])), 0, 1, 'C');
$pdf->SetXY(296, 217.5);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_No16_1'])), 0, 1, 'C');
$pdf->SetXY(314, 217.5);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 223);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_No20_0p85'])), 0, 1, 'C');
$pdf->SetXY(253, 223);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_No20_0p85'])), 0, 1, 'C');
$pdf->SetXY(275, 223);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_No20_0p85'])), 0, 1, 'C');
$pdf->SetXY(296, 223);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_No20_0p85'])), 0, 1, 'C');
$pdf->SetXY(314, 223);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 229);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_No50_0p3'])), 0, 1, 'C');
$pdf->SetXY(253, 229);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_No50_0p3'])), 0, 1, 'C');
$pdf->SetXY(275, 229);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_No50_0p3'])), 0, 1, 'C');
$pdf->SetXY(296, 229);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_No50_0p3'])), 0, 1, 'C');
$pdf->SetXY(314, 229);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 235);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_No60_0p25'])), 0, 1, 'C');
$pdf->SetXY(253, 235);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_No60_0p25'])), 0, 1, 'C');
$pdf->SetXY(275, 235);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_No60_0p25'])), 0, 1, 'C');
$pdf->SetXY(296, 235);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_No60_0p25'])), 0, 1, 'C');
$pdf->SetXY(314, 235);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 241);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_No100_0p15'])), 0, 1, 'C');
$pdf->SetXY(253, 241);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_No100_0p15'])), 0, 1, 'C');
$pdf->SetXY(275, 241);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_No100_0p15'])), 0, 1, 'C');
$pdf->SetXY(296, 241);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_No100_0p15'])), 0, 1, 'C');
$pdf->SetXY(314, 241);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 246);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_No140_0p106'])), 0, 1, 'C');
$pdf->SetXY(253, 246);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_No140_0p106'])), 0, 1, 'C');
$pdf->SetXY(275, 246);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_No140_0p106'])), 0, 1, 'C');
$pdf->SetXY(296, 246);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_No140_0p106'])), 0, 1, 'C');
$pdf->SetXY(314, 246);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 252);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_No200_0p075'])), 0, 1, 'C');
$pdf->SetXY(253, 252);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_No200_0p075'])), 0, 1, 'C');
$pdf->SetXY(275, 252);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Cum_Ret_No200_0p075'])), 0, 1, 'C');
$pdf->SetXY(296, 252);
$pdf->Cell(18, 7, remove_junk(ucwords($grain_size['Porce_Pass_No200_0p075'])), 0, 1, 'C');
$pdf->SetXY(314, 252);
//$pdf->Cell(19, 7, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

$pdf->SetXY(235, 258);
$pdf->Cell(17, 7, remove_junk(ucwords($grain_size['Wt_Ret_Pan'])), 0, 1, 'C');
$pdf->SetXY(253, 258);
$pdf->Cell(21, 7, remove_junk(ucwords($grain_size['Porce_Ret_Pan'])), 0, 1, 'C');

$pdf->SetXY(235, 264);
$pdf->Cell(17, 6, remove_junk(ucwords($grain_size['Wt_Ret_Total_Pan'])), 0, 1, 'C');
$pdf->SetXY(253, 264);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Porce_Ret_Total_Pan'])), 0, 1, 'C');
$pdf->SetXY(275, 264);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Cum_Ret_Total_Pan'])), 0, 1, 'C');
$pdf->SetXY(296, 264);
$pdf->Cell(18, 6, remove_junk(ucwords($grain_size['Porce_Pass_Total_Pan'])), 0, 1, 'C');
$pdf->SetXY(314, 264);
//$pdf->Cell(19, 6, remove_junk(ucwords($grain_size['Wt_Ret_8_203'])), 0, 1, 'C');

//Sumary grain Size Distribution Parameter

$pdf->SetXY(314, 280);
$pdf->Cell(19, 6, remove_junk(ucwords($grain_size['Coarser_than_Gravel'])), 0, 1, 'C');
$pdf->SetXY(314, 286);
$pdf->Cell(19, 6, remove_junk(ucwords($grain_size['Gravel'])), 0, 1, 'C');
$pdf->SetXY(314, 293);
$pdf->Cell(19, 6, remove_junk(ucwords($grain_size['Sand'])), 0, 1, 'C');
$pdf->SetXY(314, 299);
$pdf->Cell(19, 6, remove_junk(ucwords($grain_size['Fines'])), 0, 1, 'C');
$pdf->SetXY(314, 305);
$pdf->Cell(19, 6, remove_junk(ucwords($grain_size['D10'])), 0, 1, 'C');
$pdf->SetXY(314, 312);
$pdf->Cell(19, 6, remove_junk(ucwords($grain_size['D15'])), 0, 1, 'C');
$pdf->SetXY(314, 318);
$pdf->Cell(19, 6, remove_junk(ucwords($grain_size['D30'])), 0, 1, 'C');
$pdf->SetXY(314, 324);
$pdf->Cell(19, 6, remove_junk(ucwords($grain_size['D60'])), 0, 1, 'C');
$pdf->SetXY(314, 331);
$pdf->Cell(19, 6, remove_junk(ucwords($grain_size['D85'])), 0, 1, 'C');
$pdf->SetXY(314, 337);
$pdf->Cell(19, 6, remove_junk(ucwords($grain_size['Cc'])), 0, 1, 'C');
$pdf->SetXY(314, 343);
$pdf->Cell(19, 6, remove_junk(ucwords($grain_size['Cu'])), 0, 1, 'C');

$pdf->SetXY(41, 165);
$pdf->Cell(108, 105, remove_junk(ucwords($grain_size['Comments'])), 0, 1, 'C');

/*
// GRAFICAS DEL LIMITER
$imageData = $grain_size['Graphic'];
$imageFileName1 = 'temp_image1.png'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName1, $imageData);
$pdf->SetXY(157, 92);
$cellWidth = 125;
$cellHeight = 80;
$imagePath1 = "$imageFileName1";
$pdf->Image($imagePath1, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName1);
*/

$pdf->Output();
?>