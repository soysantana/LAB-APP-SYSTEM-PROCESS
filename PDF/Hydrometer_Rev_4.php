<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$hydrometer = find_by_id('hydrometer', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(560, 440));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-83817_Hy_Rev 4.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(65, 65);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Technician'])), 0, 1, 'C');
$pdf->SetXY(65, 74);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');

$pdf->SetXY(160, 55);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Standard'])), 0, 1, 'C');
$pdf->SetXY(160, 65);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(160, 74);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(260, 53);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(260, 61);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(260, 70);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Dispersion_Device'])), 0, 1, 'C');

$pdf->SetXY(360, 53);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Hydrometer_Type'])), 0, 1, 'C');
$pdf->SetXY(360, 61);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(360, 70);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Specific_Gravity_Type'])), 0, 1, 'C');

$pdf->SetXY(65, 94);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Structure'])), 0, 1, 'C');
$pdf->SetXY(65, 100);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Area'])), 0, 1, 'C');
$pdf->SetXY(65, 105);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Source'])), 0, 1, 'C');
$pdf->SetXY(65, 110);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(160, 94);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(160, 100);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(160, 105);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(160, 110);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Elev'])), 0, 1, 'C');

$pdf->SetXY(260, 94);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(260, 100);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(260, 105);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['North'])), 0, 1, 'C');
$pdf->SetXY(260, 110);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['East'])), 0, 1, 'C');

// Hydrometer Analysis
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(94, 133);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Dispersing_Agent'])), 0, 1, 'C');
$pdf->SetXY(94, 138);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Amount_Used_g'])), 0, 1, 'C');
$pdf->SetXY(94, 143);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Temperature_of_Test'])), 0, 1, 'C');
$pdf->SetXY(94, 149);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Viscosity_of_Water_gs_cm2'])), 0, 1, 'C');
$pdf->SetXY(94, 155);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Mass_Density_of_Water_Calibrated'])), 0, 1, 'C');
$pdf->SetXY(94, 160);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Acceleration_cm_s2'])), 0, 1, 'C');
$pdf->SetXY(94, 165);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Volume_of_Suspension_Vsp_cm3'])), 0, 1, 'C');
$pdf->SetXY(94, 171);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Meniscus_Correction_Cm'])), 0, 1, 'C');
$pdf->SetXY(94, 177);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Percent_Passing_No_200_sieve'])), 0, 1, 'C');

// Atterber Limit & Specific Gravity Results
$pdf->SetXY(69, 193);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['Liquid_Limit_Porce'])), 0, 1, 'C');
$pdf->SetXY(69, 198);
$pdf->Cell(25, 6, remove_junk(ucwords($hydrometer['Plasticity_Index_Porce'])), 0, 1, 'C');
$pdf->SetXY(69, 215);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['Specific_Gravity'])), 0, 1, 'C');

// Moisture Content Test
$pdf->SetXY(205, 165);
$pdf->Cell(27, 6, '1', 0, 1, 'C');
$pdf->SetXY(205, 171);
$pdf->Cell(27, 6, remove_junk(ucwords($hydrometer['Tare_Name'])), 0, 1, 'C');
$pdf->SetXY(205, 177);
$pdf->Cell(27, 5, utf8_decode(remove_junk(ucwords($hydrometer['Oven_Temperature']))), 0, 1, 'C');
$pdf->SetXY(205, 182);
$pdf->Cell(27, 5, remove_junk(ucwords($hydrometer['Tare_Plus_Wet_Soil_gr'])), 0, 1, 'C');
$pdf->SetXY(205, 187);
$pdf->Cell(27, 5, remove_junk(ucwords($hydrometer['Tare_Plus_Dry_Soil_gr'])), 0, 1, 'C');
$pdf->SetXY(205, 193);
$pdf->Cell(27, 5, remove_junk(ucwords($hydrometer['Water_Ww_gr'])), 0, 1, 'C');
$pdf->SetXY(205, 199);
$pdf->Cell(27, 5, remove_junk(ucwords($hydrometer['Gs_Tare_gr'])), 0, 1, 'C');
$pdf->SetXY(205, 204);
$pdf->Cell(27, 5, remove_junk(ucwords($hydrometer['Dry_Soil_Ws_gr'])), 0, 1, 'C');
$pdf->SetXY(205, 210);
$pdf->Cell(27, 5, remove_junk(ucwords($hydrometer['Moisture_Content_Porce'])), 0, 1, 'C');

// Grain Size Hydrometer
$pdf->SetXY(254, 121);
$pdf->Cell(28, 4, remove_junk(ucwords($hydrometer['Container'])), 0, 1, 'C');
$pdf->SetXY(254, 125);
$pdf->Cell(28, 7, remove_junk(ucwords($hydrometer['Wt_Wet_Soil_Tare_gr'])), 0, 1, 'C');
$pdf->SetXY(254, 133);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['Wt_Dry_Soil_Tare_gr'])), 0, 1, 'C');
$pdf->SetXY(254, 138);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['Tare_gr'])), 0, 1, 'C');
$pdf->SetXY(254, 143);
$pdf->Cell(28, 6, remove_junk(ucwords($hydrometer['Wt_Dry_Soil_gr'])), 0, 1, 'C');
$pdf->SetXY(254, 149);
$pdf->Cell(28, 6, remove_junk(ucwords($hydrometer['Wt_Washed_gr'])), 0, 1, 'C');
$pdf->SetXY(254, 155);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['Wt_Wash_Pan_gr'])), 0, 1, 'C');

$pdf->SetXY(330, 125);
$pdf->Cell(22, 7, remove_junk(ucwords($hydrometer['Wt_Ret_2p5'])), 0, 1, 'C');
$pdf->SetXY(352, 125);
$pdf->Cell(17, 7, remove_junk(ucwords($hydrometer['Ret_2p5'])), 0, 1, 'C');
$pdf->SetXY(369, 125);
$pdf->Cell(19, 7, remove_junk(ucwords($hydrometer['Cum_Ret_2p5'])), 0, 1, 'C');
$pdf->SetXY(388, 125);
$pdf->Cell(31, 7, remove_junk(ucwords($hydrometer['Pass_2p5'])), 0, 1, 'C');

$pdf->SetXY(330, 133);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Wt_Ret_2'])), 0, 1, 'C');
$pdf->SetXY(352, 133);
$pdf->Cell(17, 5, remove_junk(ucwords($hydrometer['Ret_2'])), 0, 1, 'C');
$pdf->SetXY(369, 133);
$pdf->Cell(19, 5, remove_junk(ucwords($hydrometer['Cum_Ret_2'])), 0, 1, 'C');
$pdf->SetXY(388, 133);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Pass_2'])), 0, 1, 'C');

$pdf->SetXY(330, 138);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Wt_Ret_1p5'])), 0, 1, 'C');
$pdf->SetXY(352, 138);
$pdf->Cell(17, 5, remove_junk(ucwords($hydrometer['Ret_1p5'])), 0, 1, 'C');
$pdf->SetXY(369, 138);
$pdf->Cell(19, 5, remove_junk(ucwords($hydrometer['Cum_Ret_1p5'])), 0, 1, 'C');
$pdf->SetXY(388, 138);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Pass_1p5'])), 0, 1, 'C');

$pdf->SetXY(330, 143);
$pdf->Cell(22, 6, remove_junk(ucwords($hydrometer['Wt_Ret_1'])), 0, 1, 'C');
$pdf->SetXY(352, 143);
$pdf->Cell(17, 6, remove_junk(ucwords($hydrometer['Ret_1'])), 0, 1, 'C');
$pdf->SetXY(369, 143);
$pdf->Cell(19, 6, remove_junk(ucwords($hydrometer['Cum_Ret_1'])), 0, 1, 'C');
$pdf->SetXY(388, 143);
$pdf->Cell(31, 6, remove_junk(ucwords($hydrometer['Pass_1'])), 0, 1, 'C');

$pdf->SetXY(330, 149);
$pdf->Cell(22, 6, remove_junk(ucwords($hydrometer['Wt_Ret_3p4'])), 0, 1, 'C');
$pdf->SetXY(352, 149);
$pdf->Cell(17, 6, remove_junk(ucwords($hydrometer['Ret_3p4'])), 0, 1, 'C');
$pdf->SetXY(369, 149);
$pdf->Cell(19, 6, remove_junk(ucwords($hydrometer['Cum_Ret_3p4'])), 0, 1, 'C');
$pdf->SetXY(388, 149);
$pdf->Cell(31, 6, remove_junk(ucwords($hydrometer['Pass_3p4'])), 0, 1, 'C');

$pdf->SetXY(330, 155);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Wt_Ret_1p2'])), 0, 1, 'C');
$pdf->SetXY(352, 155);
$pdf->Cell(17, 5, remove_junk(ucwords($hydrometer['Ret_1p2'])), 0, 1, 'C');
$pdf->SetXY(369, 155);
$pdf->Cell(19, 5, remove_junk(ucwords($hydrometer['Cum_Ret_1p2'])), 0, 1, 'C');
$pdf->SetXY(388, 155);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Pass_1p2'])), 0, 1, 'C');

$pdf->SetXY(330, 160);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Wt_Ret_3p8'])), 0, 1, 'C');
$pdf->SetXY(352, 160);
$pdf->Cell(17, 5, remove_junk(ucwords($hydrometer['Ret_3p8'])), 0, 1, 'C');
$pdf->SetXY(369, 160);
$pdf->Cell(19, 5, remove_junk(ucwords($hydrometer['Cum_Ret_3p8'])), 0, 1, 'C');
$pdf->SetXY(388, 160);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Pass_3p8'])), 0, 1, 'C');

$pdf->SetXY(330, 165);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Wt_Ret_No4'])), 0, 1, 'C');
$pdf->SetXY(352, 165);
$pdf->Cell(17, 5, remove_junk(ucwords($hydrometer['Ret_No4'])), 0, 1, 'C');
$pdf->SetXY(369, 165);
$pdf->Cell(19, 5, remove_junk(ucwords($hydrometer['Cum_Ret_No4'])), 0, 1, 'C');
$pdf->SetXY(388, 165);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Pass_No4'])), 0, 1, 'C');

$pdf->SetXY(330, 171);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Wt_Ret_No10'])), 0, 1, 'C');
$pdf->SetXY(352, 171);
$pdf->Cell(17, 5, remove_junk(ucwords($hydrometer['Ret_No10'])), 0, 1, 'C');
$pdf->SetXY(369, 171);
$pdf->Cell(19, 5, remove_junk(ucwords($hydrometer['Cum_Ret_No10'])), 0, 1, 'C');
$pdf->SetXY(388, 171);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Pass_No10'])), 0, 1, 'C');

$pdf->SetXY(330, 177);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Wt_Ret_No16'])), 0, 1, 'C');
$pdf->SetXY(352, 177);
$pdf->Cell(17, 5, remove_junk(ucwords($hydrometer['Ret_No16'])), 0, 1, 'C');
$pdf->SetXY(369, 177);
$pdf->Cell(19, 5, remove_junk(ucwords($hydrometer['Cum_Ret_No16'])), 0, 1, 'C');
$pdf->SetXY(388, 177);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Pass_No16'])), 0, 1, 'C');

$pdf->SetXY(330, 182);
$pdf->Cell(22, 4, remove_junk(ucwords($hydrometer['Wt_Ret_No20'])), 0, 1, 'C');
$pdf->SetXY(352, 182);
$pdf->Cell(17, 4, remove_junk(ucwords($hydrometer['Ret_No20'])), 0, 1, 'C');
$pdf->SetXY(369, 182);
$pdf->Cell(19, 4, remove_junk(ucwords($hydrometer['Cum_Ret_No20'])), 0, 1, 'C');
$pdf->SetXY(388, 182);
$pdf->Cell(31, 4, remove_junk(ucwords($hydrometer['Pass_No20'])), 0, 1, 'C');

$pdf->SetXY(330, 187);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Wt_Ret_No50'])), 0, 1, 'C');
$pdf->SetXY(352, 187);
$pdf->Cell(17, 5, remove_junk(ucwords($hydrometer['Ret_No50'])), 0, 1, 'C');
$pdf->SetXY(369, 187);
$pdf->Cell(19, 5, remove_junk(ucwords($hydrometer['Cum_Ret_No50'])), 0, 1, 'C');
$pdf->SetXY(388, 187);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Pass_No50'])), 0, 1, 'C');

$pdf->SetXY(330, 193);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Wt_Ret_No60'])), 0, 1, 'C');
$pdf->SetXY(352, 193);
$pdf->Cell(17, 5, remove_junk(ucwords($hydrometer['Ret_No60'])), 0, 1, 'C');
$pdf->SetXY(369, 193);
$pdf->Cell(19, 5, remove_junk(ucwords($hydrometer['Cum_Ret_No60'])), 0, 1, 'C');
$pdf->SetXY(388, 193);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Pass_No60'])), 0, 1, 'C');

$pdf->SetXY(330, 198);
$pdf->Cell(22, 6, remove_junk(ucwords($hydrometer['Wt_Ret_No100'])), 0, 1, 'C');
$pdf->SetXY(352, 198);
$pdf->Cell(17, 6, remove_junk(ucwords($hydrometer['Ret_No100'])), 0, 1, 'C');
$pdf->SetXY(369, 198);
$pdf->Cell(19, 6, remove_junk(ucwords($hydrometer['Cum_Ret_No100'])), 0, 1, 'C');
$pdf->SetXY(388, 198);
$pdf->Cell(31, 6, remove_junk(ucwords($hydrometer['Pass_No100'])), 0, 1, 'C');

$pdf->SetXY(330, 204);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Wt_Ret_No140'])), 0, 1, 'C');
$pdf->SetXY(352, 204);
$pdf->Cell(17, 5, remove_junk(ucwords($hydrometer['Ret_No140'])), 0, 1, 'C');
$pdf->SetXY(369, 204);
$pdf->Cell(19, 5, remove_junk(ucwords($hydrometer['Cum_Ret_No140'])), 0, 1, 'C');
$pdf->SetXY(388, 204);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Pass_No140'])), 0, 1, 'C');

$pdf->SetXY(330, 210);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Wt_Ret_No200'])), 0, 1, 'C');
$pdf->SetXY(352, 210);
$pdf->Cell(17, 5, remove_junk(ucwords($hydrometer['Ret_No200'])), 0, 1, 'C');
$pdf->SetXY(369, 210);
$pdf->Cell(19, 5, remove_junk(ucwords($hydrometer['Cum_Ret_No200'])), 0, 1, 'C');
$pdf->SetXY(388, 210);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Pass_No200'])), 0, 1, 'C');

$pdf->SetXY(330, 215);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Pan_Wt_Ret'])), 0, 1, 'C');
$pdf->SetXY(352, 215);
$pdf->Cell(17, 5, remove_junk(ucwords($hydrometer['Pan_Ret'])), 0, 1, 'C');

$pdf->SetXY(330, 220);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Total_Wt_Ret'])), 0, 1, 'C');
$pdf->SetXY(352, 220);
$pdf->Cell(17, 5, remove_junk(ucwords($hydrometer['Total_Ret'])), 0, 1, 'C');
$pdf->SetXY(369, 220);
$pdf->Cell(19, 5, remove_junk(ucwords($hydrometer['Total_Cum_Ret'])), 0, 1, 'C');
$pdf->SetXY(388, 220);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Total_Pass'])), 0, 1, 'C');

// Sumary Grain Size Distribution Parameter
$pdf->SetXY(330, 241);
$pdf->Cell(22, 10, remove_junk(ucwords($hydrometer['Coarser_than_Gravel'])), 0, 1, 'C');
$pdf->SetXY(330, 252);
$pdf->Cell(22, 4, remove_junk(ucwords($hydrometer['Gravel'])), 0, 1, 'C');
$pdf->SetXY(330, 257);
$pdf->Cell(22, 4, remove_junk(ucwords($hydrometer['Sand'])), 0, 1, 'C');
$pdf->SetXY(330, 261);
$pdf->Cell(22, 4, remove_junk(ucwords($hydrometer['Fines'])), 0, 1, 'C');
$pdf->SetXY(330, 265);
$pdf->Cell(22, 4, remove_junk(ucwords($hydrometer['D10'])), 0, 1, 'C');
$pdf->SetXY(330, 270);
$pdf->Cell(22, 4, remove_junk(ucwords($hydrometer['D15'])), 0, 1, 'C');
$pdf->SetXY(330, 275);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['D30'])), 0, 1, 'C');
$pdf->SetXY(330, 282);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['D60'])), 0, 1, 'C');
$pdf->SetXY(330, 288);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['D85'])), 0, 1, 'C');
$pdf->SetXY(330, 295);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Cc'])), 0, 1, 'C');
$pdf->SetXY(330, 301);
$pdf->Cell(22, 7, remove_junk(ucwords($hydrometer['Cu'])), 0, 1, 'C');

// Hydrometer calibration
$pdf->SetXY(30, 256);
$pdf->Cell(39, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_Temperature_No1'])), 0, 1, 'C');
$pdf->SetXY(69, 256);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_Actual_Reading_No1'])), 0, 1, 'C');
$pdf->SetXY(94, 256);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Temperature_No1'])), 0, 1, 'C');
$pdf->SetXY(115, 256);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Actual_Reading_No1'])), 0, 1, 'C');

$pdf->SetXY(30, 261);
$pdf->Cell(39, 4, remove_junk(ucwords($hydrometer['Hy_Calibration_Temperature_No2'])), 0, 1, 'C');
$pdf->SetXY(69, 261);
$pdf->Cell(25, 4, remove_junk(ucwords($hydrometer['Hy_Calibration_Actual_Reading_No2'])), 0, 1, 'C');
$pdf->SetXY(94, 261);
$pdf->Cell(21, 4, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Temperature_No2'])), 0, 1, 'C');
$pdf->SetXY(115, 261);
$pdf->Cell(20, 4, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Actual_Reading_No2'])), 0, 1, 'C');

$pdf->SetXY(30, 266);
$pdf->Cell(39, 4, remove_junk(ucwords($hydrometer['Hy_Calibration_Temperature_No3'])), 0, 1, 'C');
$pdf->SetXY(69, 266);
$pdf->Cell(25, 4, remove_junk(ucwords($hydrometer['Hy_Calibration_Actual_Reading_No3'])), 0, 1, 'C');
$pdf->SetXY(94, 266);
$pdf->Cell(21, 4, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Temperature_No3'])), 0, 1, 'C');
$pdf->SetXY(115, 266);
$pdf->Cell(20, 4, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Actual_Reading_No3'])), 0, 1, 'C');

$pdf->SetXY(30, 270);
$pdf->Cell(39, 4, remove_junk(ucwords($hydrometer['Hy_Calibration_Temperature_No4'])), 0, 1, 'C');
$pdf->SetXY(69, 270);
$pdf->Cell(25, 4, remove_junk(ucwords($hydrometer['Hy_Calibration_Actual_Reading_No4'])), 0, 1, 'C');
$pdf->SetXY(94, 270);
$pdf->Cell(21, 4, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Temperature_No4'])), 0, 1, 'C');
$pdf->SetXY(115, 270);
$pdf->Cell(20, 4, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Actual_Reading_No4'])), 0, 1, 'C');

$pdf->SetXY(30, 274);
$pdf->Cell(39, 7, remove_junk(ucwords($hydrometer['Hy_Calibration_Temperature_No5'])), 0, 1, 'C');
$pdf->SetXY(69, 274);
$pdf->Cell(25, 7, remove_junk(ucwords($hydrometer['Hy_Calibration_Actual_Reading_No5'])), 0, 1, 'C');
$pdf->SetXY(94, 274);
$pdf->Cell(21, 7, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Temperature_No5'])), 0, 1, 'C');
$pdf->SetXY(115, 274);
$pdf->Cell(20, 7, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Actual_Reading_No5'])), 0, 1, 'C');

$pdf->SetXY(30, 282);
$pdf->Cell(39, 4, remove_junk(ucwords($hydrometer['Hy_Calibration_Temperature_No6'])), 0, 1, 'C');
$pdf->SetXY(69, 282);
$pdf->Cell(25, 4, remove_junk(ucwords($hydrometer['Hy_Calibration_Actual_Reading_No6'])), 0, 1, 'C');
$pdf->SetXY(94, 282);
$pdf->Cell(21, 4, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Temperature_No6'])), 0, 1, 'C');
$pdf->SetXY(115, 282);
$pdf->Cell(20, 4, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Actual_Reading_No6'])), 0, 1, 'C');

$pdf->SetXY(30, 289);
$pdf->Cell(39, 4, remove_junk(ucwords($hydrometer['Hy_Calibration_Temperature_No7'])), 0, 1, 'C');
$pdf->SetXY(69, 289);
$pdf->Cell(25, 4, remove_junk(ucwords($hydrometer['Hy_Calibration_Actual_Reading_No7'])), 0, 1, 'C');
$pdf->SetXY(94, 289);
$pdf->Cell(21, 4, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Temperature_No7'])), 0, 1, 'C');
$pdf->SetXY(115, 289);
$pdf->Cell(20, 4, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Actual_Reading_No7'])), 0, 1, 'C');

$pdf->SetXY(30, 296);
$pdf->Cell(39, 4, remove_junk(ucwords($hydrometer['Hy_Calibration_Temperature_No8'])), 0, 1, 'C');
$pdf->SetXY(69, 296);
$pdf->Cell(25, 4, remove_junk(ucwords($hydrometer['Hy_Calibration_Actual_Reading_No8'])), 0, 1, 'C');
$pdf->SetXY(94, 296);
$pdf->Cell(21, 4, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Temperature_No8'])), 0, 1, 'C');
$pdf->SetXY(115, 296);
$pdf->Cell(20, 4, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Actual_Reading_No8'])), 0, 1, 'C');

$pdf->SetXY(30, 301);
$pdf->Cell(39, 8, remove_junk(ucwords($hydrometer['Hy_Calibration_Temperature_No9'])), 0, 1, 'C');
$pdf->SetXY(69, 301);
$pdf->Cell(25, 8, remove_junk(ucwords($hydrometer['Hy_Calibration_Actual_Reading_No9'])), 0, 1, 'C');
$pdf->SetXY(94, 301);
$pdf->Cell(21, 8, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Temperature_No9'])), 0, 1, 'C');
$pdf->SetXY(115, 301);
$pdf->Cell(20, 8, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_Actual_Reading_No9'])), 0, 1, 'C');

// Hydrometer Table
$pdf->SetXY(30, 335);
$pdf->Cell(39, 9, '1', 0, 1, 'C');
$pdf->SetXY(69, 335);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Date_No1'])), 0, 1, 'C');
$pdf->SetXY(94, 335);
$pdf->Cell(21, 9, remove_junk(ucwords($hydrometer['Hour_No1'])), 0, 1, 'C');
$pdf->SetXY(115, 335);
$pdf->Cell(20, 9, remove_junk(ucwords($hydrometer['Reading_Time_min_No1'])), 0, 1, 'C');
$pdf->SetXY(135, 335);
$pdf->Cell(30, 9, remove_junk(ucwords($hydrometer['Temp_No1'])), 0, 1, 'C');
$pdf->SetXY(165, 335);
$pdf->Cell(40, 9, remove_junk(ucwords($hydrometer['Hydrometer_Readings_Rm_No1'])), 0, 1, 'C');
$pdf->SetXY(205, 335);
$pdf->Cell(27, 9, remove_junk(ucwords($hydrometer['A_or_B_depending_of_the_Hy_type_No1'])), 0, 1, 'C');
$pdf->SetXY(232, 335);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Offset_at_Reading_rdm_No1'])), 0, 1, 'C');
$pdf->SetXY(254, 335);
$pdf->Cell(28, 9, remove_junk(ucwords($hydrometer['Mass_Percent_Finer_Nm_Porce_No1'])), 0, 1, 'C');
$pdf->SetXY(282, 335);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Effective_Length_Hm_No1'])), 0, 1, 'C');
$pdf->SetXY(307, 335);
$pdf->Cell(23, 9, remove_junk(ucwords($hydrometer['D_mm_No1'])), 0, 1, 'C');
$pdf->SetXY(330, 335);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Passing_Percentage_Respect_to_the_Total_Sample_No1'])), 0, 1, 'C');

$pdf->SetXY(30, 345);
$pdf->Cell(39, 9, '2', 0, 1, 'C');
$pdf->SetXY(69, 345);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Date_No2'])), 0, 1, 'C');
$pdf->SetXY(94, 345);
$pdf->Cell(21, 9, remove_junk(ucwords($hydrometer['Hour_No2'])), 0, 1, 'C');
$pdf->SetXY(115, 345);
$pdf->Cell(20, 9, remove_junk(ucwords($hydrometer['Reading_Time_min_No2'])), 0, 1, 'C');
$pdf->SetXY(135, 345);
$pdf->Cell(30, 9, remove_junk(ucwords($hydrometer['Temp_No2'])), 0, 1, 'C');
$pdf->SetXY(165, 345);
$pdf->Cell(40, 9, remove_junk(ucwords($hydrometer['Hydrometer_Readings_Rm_No2'])), 0, 1, 'C');
$pdf->SetXY(205, 345);
$pdf->Cell(27, 9, remove_junk(ucwords($hydrometer['A_or_B_depending_of_the_Hy_type_No2'])), 0, 1, 'C');
$pdf->SetXY(232, 345);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Offset_at_Reading_rdm_No2'])), 0, 1, 'C');
$pdf->SetXY(254, 345);
$pdf->Cell(28, 9, remove_junk(ucwords($hydrometer['Mass_Percent_Finer_Nm_Porce_No2'])), 0, 1, 'C');
$pdf->SetXY(282, 345);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Effective_Length_Hm_No2'])), 0, 1, 'C');
$pdf->SetXY(307, 345);
$pdf->Cell(23, 9, remove_junk(ucwords($hydrometer['D_mm_No2'])), 0, 1, 'C');
$pdf->SetXY(330, 345);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Passing_Percentage_Respect_to_the_Total_Sample_No2'])), 0, 1, 'C');

$pdf->SetXY(30, 355);
$pdf->Cell(39, 9, '3', 0, 1, 'C');
$pdf->SetXY(69, 355);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Date_No3'])), 0, 1, 'C');
$pdf->SetXY(94, 355);
$pdf->Cell(21, 9, remove_junk(ucwords($hydrometer['Hour_No3'])), 0, 1, 'C');
$pdf->SetXY(115, 355);
$pdf->Cell(20, 9, remove_junk(ucwords($hydrometer['Reading_Time_min_No3'])), 0, 1, 'C');
$pdf->SetXY(135, 355);
$pdf->Cell(30, 9, remove_junk(ucwords($hydrometer['Temp_No3'])), 0, 1, 'C');
$pdf->SetXY(165, 355);
$pdf->Cell(40, 9, remove_junk(ucwords($hydrometer['Hydrometer_Readings_Rm_No3'])), 0, 1, 'C');
$pdf->SetXY(205, 355);
$pdf->Cell(27, 9, remove_junk(ucwords($hydrometer['A_or_B_depending_of_the_Hy_type_No3'])), 0, 1, 'C');
$pdf->SetXY(232, 355);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Offset_at_Reading_rdm_No3'])), 0, 1, 'C');
$pdf->SetXY(254, 355);
$pdf->Cell(28, 9, remove_junk(ucwords($hydrometer['Mass_Percent_Finer_Nm_Porce_No3'])), 0, 1, 'C');
$pdf->SetXY(282, 355);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Effective_Length_Hm_No3'])), 0, 1, 'C');
$pdf->SetXY(307, 355);
$pdf->Cell(23, 9, remove_junk(ucwords($hydrometer['D_mm_No3'])), 0, 1, 'C');
$pdf->SetXY(330, 355);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Passing_Percentage_Respect_to_the_Total_Sample_No3'])), 0, 1, 'C');

$pdf->SetXY(30, 364);
$pdf->Cell(39, 9, '4', 0, 1, 'C');
$pdf->SetXY(69, 364);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Date_No4'])), 0, 1, 'C');
$pdf->SetXY(94, 364);
$pdf->Cell(21, 9, remove_junk(ucwords($hydrometer['Hour_No4'])), 0, 1, 'C');
$pdf->SetXY(115, 364);
$pdf->Cell(20, 9, remove_junk(ucwords($hydrometer['Reading_Time_min_No4'])), 0, 1, 'C');
$pdf->SetXY(135, 364);
$pdf->Cell(30, 9, remove_junk(ucwords($hydrometer['Temp_No4'])), 0, 1, 'C');
$pdf->SetXY(165, 364);
$pdf->Cell(40, 9, remove_junk(ucwords($hydrometer['Hydrometer_Readings_Rm_No4'])), 0, 1, 'C');
$pdf->SetXY(205, 364);
$pdf->Cell(27, 9, remove_junk(ucwords($hydrometer['A_or_B_depending_of_the_Hy_type_No4'])), 0, 1, 'C');
$pdf->SetXY(232, 364);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Offset_at_Reading_rdm_No4'])), 0, 1, 'C');
$pdf->SetXY(254, 364);
$pdf->Cell(28, 9, remove_junk(ucwords($hydrometer['Mass_Percent_Finer_Nm_Porce_No4'])), 0, 1, 'C');
$pdf->SetXY(282, 364);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Effective_Length_Hm_No4'])), 0, 1, 'C');
$pdf->SetXY(307, 364);
$pdf->Cell(23, 9, remove_junk(ucwords($hydrometer['D_mm_No4'])), 0, 1, 'C');
$pdf->SetXY(330, 364);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Passing_Percentage_Respect_to_the_Total_Sample_No4'])), 0, 1, 'C');

$pdf->SetXY(30, 373);
$pdf->Cell(39, 9, '5', 0, 1, 'C');
$pdf->SetXY(69, 373);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Date_No5'])), 0, 1, 'C');
$pdf->SetXY(94, 373);
$pdf->Cell(21, 9, remove_junk(ucwords($hydrometer['Hour_No5'])), 0, 1, 'C');
$pdf->SetXY(115, 373);
$pdf->Cell(20, 9, remove_junk(ucwords($hydrometer['Reading_Time_min_No5'])), 0, 1, 'C');
$pdf->SetXY(135, 373);
$pdf->Cell(30, 9, remove_junk(ucwords($hydrometer['Temp_No5'])), 0, 1, 'C');
$pdf->SetXY(165, 373);
$pdf->Cell(40, 9, remove_junk(ucwords($hydrometer['Hydrometer_Readings_Rm_No5'])), 0, 1, 'C');
$pdf->SetXY(205, 373);
$pdf->Cell(27, 9, remove_junk(ucwords($hydrometer['A_or_B_depending_of_the_Hy_type_No5'])), 0, 1, 'C');
$pdf->SetXY(232, 373);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Offset_at_Reading_rdm_No5'])), 0, 1, 'C');
$pdf->SetXY(254, 373);
$pdf->Cell(28, 9, remove_junk(ucwords($hydrometer['Mass_Percent_Finer_Nm_Porce_No5'])), 0, 1, 'C');
$pdf->SetXY(282, 373);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Effective_Length_Hm_No5'])), 0, 1, 'C');
$pdf->SetXY(307, 373);
$pdf->Cell(23, 9, remove_junk(ucwords($hydrometer['D_mm_No5'])), 0, 1, 'C');
$pdf->SetXY(330, 373);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Passing_Percentage_Respect_to_the_Total_Sample_No5'])), 0, 1, 'C');

$pdf->SetXY(30, 383);
$pdf->Cell(39, 9, '6', 0, 1, 'C');
$pdf->SetXY(69, 383);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Date_No6'])), 0, 1, 'C');
$pdf->SetXY(94, 383);
$pdf->Cell(21, 9, remove_junk(ucwords($hydrometer['Hour_No6'])), 0, 1, 'C');
$pdf->SetXY(115, 383);
$pdf->Cell(20, 9, remove_junk(ucwords($hydrometer['Reading_Time_min_No6'])), 0, 1, 'C');
$pdf->SetXY(135, 383);
$pdf->Cell(30, 9, remove_junk(ucwords($hydrometer['Temp_No6'])), 0, 1, 'C');
$pdf->SetXY(165, 383);
$pdf->Cell(40, 9, remove_junk(ucwords($hydrometer['Hydrometer_Readings_Rm_No6'])), 0, 1, 'C');
$pdf->SetXY(205, 383);
$pdf->Cell(27, 9, remove_junk(ucwords($hydrometer['A_or_B_depending_of_the_Hy_type_No6'])), 0, 1, 'C');
$pdf->SetXY(232, 383);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Offset_at_Reading_rdm_No6'])), 0, 1, 'C');
$pdf->SetXY(254, 383);
$pdf->Cell(28, 9, remove_junk(ucwords($hydrometer['Mass_Percent_Finer_Nm_Porce_No6'])), 0, 1, 'C');
$pdf->SetXY(282, 383);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Effective_Length_Hm_No6'])), 0, 1, 'C');
$pdf->SetXY(307, 383);
$pdf->Cell(23, 9, remove_junk(ucwords($hydrometer['D_mm_No6'])), 0, 1, 'C');
$pdf->SetXY(330, 383);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Passing_Percentage_Respect_to_the_Total_Sample_No6'])), 0, 1, 'C');

$pdf->SetXY(30, 392);
$pdf->Cell(39, 9, '7', 0, 1, 'C');
$pdf->SetXY(69, 392);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Date_No7'])), 0, 1, 'C');
$pdf->SetXY(94, 392);
$pdf->Cell(21, 9, remove_junk(ucwords($hydrometer['Hour_No7'])), 0, 1, 'C');
$pdf->SetXY(115, 392);
$pdf->Cell(20, 9, remove_junk(ucwords($hydrometer['Reading_Time_min_No7'])), 0, 1, 'C');
$pdf->SetXY(135, 392);
$pdf->Cell(30, 9, remove_junk(ucwords($hydrometer['Temp_No7'])), 0, 1, 'C');
$pdf->SetXY(165, 392);
$pdf->Cell(40, 9, remove_junk(ucwords($hydrometer['Hydrometer_Readings_Rm_No7'])), 0, 1, 'C');
$pdf->SetXY(205, 392);
$pdf->Cell(27, 9, remove_junk(ucwords($hydrometer['A_or_B_depending_of_the_Hy_type_No7'])), 0, 1, 'C');
$pdf->SetXY(232, 392);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Offset_at_Reading_rdm_No7'])), 0, 1, 'C');
$pdf->SetXY(254, 392);
$pdf->Cell(28, 9, remove_junk(ucwords($hydrometer['Mass_Percent_Finer_Nm_Porce_No7'])), 0, 1, 'C');
$pdf->SetXY(282, 392);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Effective_Length_Hm_No7'])), 0, 1, 'C');
$pdf->SetXY(307, 392);
$pdf->Cell(23, 9, remove_junk(ucwords($hydrometer['D_mm_No7'])), 0, 1, 'C');
$pdf->SetXY(330, 392);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Passing_Percentage_Respect_to_the_Total_Sample_No7'])), 0, 1, 'C');

$pdf->SetXY(30, 401);
$pdf->Cell(39, 9, '8', 0, 1, 'C');
$pdf->SetXY(69, 401);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Date_No8'])), 0, 1, 'C');
$pdf->SetXY(94, 401);
$pdf->Cell(21, 9, remove_junk(ucwords($hydrometer['Hour_No8'])), 0, 1, 'C');
$pdf->SetXY(115, 401);
$pdf->Cell(20, 9, remove_junk(ucwords($hydrometer['Reading_Time_min_No8'])), 0, 1, 'C');
$pdf->SetXY(135, 401);
$pdf->Cell(30, 9, remove_junk(ucwords($hydrometer['Temp_No8'])), 0, 1, 'C');
$pdf->SetXY(165, 401);
$pdf->Cell(40, 9, remove_junk(ucwords($hydrometer['Hydrometer_Readings_Rm_No8'])), 0, 1, 'C');
$pdf->SetXY(205, 401);
$pdf->Cell(27, 9, remove_junk(ucwords($hydrometer['A_or_B_depending_of_the_Hy_type_No8'])), 0, 1, 'C');
$pdf->SetXY(232, 401);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Offset_at_Reading_rdm_No8'])), 0, 1, 'C');
$pdf->SetXY(254, 401);
$pdf->Cell(28, 9, remove_junk(ucwords($hydrometer['Mass_Percent_Finer_Nm_Porce_No8'])), 0, 1, 'C');
$pdf->SetXY(282, 401);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Effective_Length_Hm_No8'])), 0, 1, 'C');
$pdf->SetXY(307, 401);
$pdf->Cell(23, 9, remove_junk(ucwords($hydrometer['D_mm_No8'])), 0, 1, 'C');
$pdf->SetXY(330, 401);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Passing_Percentage_Respect_to_the_Total_Sample_No8'])), 0, 1, 'C');

$pdf->SetXY(30, 410);
$pdf->Cell(39, 9, '9', 0, 1, 'C');
$pdf->SetXY(69, 410);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Date_No9'])), 0, 1, 'C');
$pdf->SetXY(94, 410);
$pdf->Cell(21, 9, remove_junk(ucwords($hydrometer['Hour_No9'])), 0, 1, 'C');
$pdf->SetXY(115, 410);
$pdf->Cell(20, 9, remove_junk(ucwords($hydrometer['Reading_Time_min_No9'])), 0, 1, 'C');
$pdf->SetXY(135, 410);
$pdf->Cell(30, 9, remove_junk(ucwords($hydrometer['Temp_No9'])), 0, 1, 'C');
$pdf->SetXY(165, 410);
$pdf->Cell(40, 9, remove_junk(ucwords($hydrometer['Hydrometer_Readings_Rm_No9'])), 0, 1, 'C');
$pdf->SetXY(205, 410);
$pdf->Cell(27, 9, remove_junk(ucwords($hydrometer['A_or_B_depending_of_the_Hy_type_No9'])), 0, 1, 'C');
$pdf->SetXY(232, 410);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Offset_at_Reading_rdm_No9'])), 0, 1, 'C');
$pdf->SetXY(254, 410);
$pdf->Cell(28, 9, remove_junk(ucwords($hydrometer['Mass_Percent_Finer_Nm_Porce_No9'])), 0, 1, 'C');
$pdf->SetXY(282, 410);
$pdf->Cell(25, 9, remove_junk(ucwords($hydrometer['Effective_Length_Hm_No9'])), 0, 1, 'C');
$pdf->SetXY(307, 410);
$pdf->Cell(23, 9, remove_junk(ucwords($hydrometer['D_mm_No9'])), 0, 1, 'C');
$pdf->SetXY(330, 410);
$pdf->Cell(22, 9, remove_junk(ucwords($hydrometer['Passing_Percentage_Respect_to_the_Total_Sample_No9'])), 0, 1, 'C');

// Classification & Comment
$pdf->SetXY(165, 256);
$pdf->Cell(89, 18, remove_junk(ucwords($hydrometer['Classification_of_Soils_as_per_USCS'])), 0, 1, 'C');
$pdf->SetXY(254, 434);
$pdf->Cell(134, 85, remove_junk(ucwords($hydrometer['Comments'])), 0, 1, 'C');

$pdf->Output();
?>