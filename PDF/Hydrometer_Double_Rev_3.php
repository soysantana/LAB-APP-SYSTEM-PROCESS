<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$hydrometer = find_by_id('double_hydrometer', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(520, 420));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-01742_DHY_Rev 3.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(50, 56);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Technician'])), 0, 1, 'C');
$pdf->SetXY(50, 62);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');

$pdf->SetXY(160, 50);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Standard'])), 0, 1, 'C');
$pdf->SetXY(160, 56);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(160, 62);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(250, 50);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(250, 56);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(250, 62);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Preparation_Method'])), 0, 1, 'C');

$pdf->SetXY(355, 50);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(355, 56);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(355, 62);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Preparation_Method'])), 0, 1, 'C');

$pdf->SetXY(50, 79);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Structure'])), 0, 1, 'C');
$pdf->SetXY(50, 84);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Area'])), 0, 1, 'C');
$pdf->SetXY(50, 89);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Source'])), 0, 1, 'C');
$pdf->SetXY(50, 95);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(160, 79);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(160, 84);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(160, 89);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(160, 95);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Elev'])), 0, 1, 'C');

$pdf->SetXY(250, 79);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(250, 84);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(250, 89);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['North'])), 0, 1, 'C');
$pdf->SetXY(250, 95);
$pdf->Cell(21, 6, remove_junk(ucwords($hydrometer['East'])), 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);

// Moisture Content Test 25 g & 50 g
$pdf->SetXY(87, 111);
$pdf->Cell(21, 5, '1', 1, 1, 'C');
$pdf->SetXY(87, 116);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Tare_Name_25gr'])), 0, 1, 'C');
$pdf->SetXY(87, 121);
$pdf->Cell(21, 6, utf8_decode(remove_junk(ucwords($hydrometer['Oven_Temperature_25gr']))), 0, 1, 'C');
$pdf->SetXY(87, 127);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Tare_Plus_Wet_Soil_25gr'])), 0, 1, 'C');
$pdf->SetXY(87, 133);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Tare_Plus_Dry_Soil_25gr'])), 0, 1, 'C');
$pdf->SetXY(87, 138);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Water_Ww_25gr'])), 0, 1, 'C');
$pdf->SetXY(87, 143);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Tare_25gr'])), 0, 1, 'C');
$pdf->SetXY(87, 148);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Dry_Soil_Ws_25gr'])), 0, 1, 'C');
$pdf->SetXY(87, 154);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Moisture_Content_Porce_25gr'])), 0, 1, 'C');

$pdf->SetXY(316, 111);
$pdf->Cell(21, 5, '2', 0, 1, 'C');
$pdf->SetXY(316, 116);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Tare_Name_50gr'])), 0, 1, 'C');
$pdf->SetXY(316, 121);
$pdf->Cell(21, 6, utf8_decode(remove_junk(ucwords($hydrometer['Oven_Temperature_50gr']))), 0, 1, 'C');
$pdf->SetXY(316, 127);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Tare_Plus_Wet_Soil_50gr'])), 0, 1, 'C');
$pdf->SetXY(316, 133);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Tare_Plus_Dry_Soil_50gr'])), 0, 1, 'C');
$pdf->SetXY(316, 138);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Water_Ww_50gr'])), 0, 1, 'C');
$pdf->SetXY(316, 143);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Tare_50gr'])), 0, 1, 'C');
$pdf->SetXY(316, 148);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Dry_Soil_Ws_50gr'])), 0, 1, 'C');
$pdf->SetXY(316, 154);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Moisture_Content_Porce_50gr'])), 0, 1, 'C');

// Limit & Gravity
$pdf->SetXY(195, 116);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Moisture_Content_Porce_50gr'])), 0, 1, 'C');
$pdf->SetXY(195, 122);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Moisture_Content_Porce_50gr'])), 0, 1, 'C');
$pdf->SetXY(195, 138);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['Moisture_Content_Porce_50gr'])), 0, 1, 'C');

// Hydrometer Calibration 25 gr
$pdf->SetXY(23, 177);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Temperature_No1'])), 0, 1, 'C');
$pdf->SetXY(54, 177);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Actual_Reading_No1'])), 0, 1, 'C');
$pdf->SetXY(87, 177);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Temperature_No1'])), 0, 1, 'C');
$pdf->SetXY(108, 177);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Actual_Reading_No1'])), 0, 1, 'C');

$pdf->SetXY(23, 181);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Temperature_No2'])), 0, 1, 'C');
$pdf->SetXY(54, 181);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Actual_Reading_No2'])), 0, 1, 'C');
$pdf->SetXY(87, 181);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Temperature_No2'])), 0, 1, 'C');
$pdf->SetXY(108, 181);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Actual_Reading_No2'])), 0, 1, 'C');

$pdf->SetXY(23, 186);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Temperature_No3'])), 0, 1, 'C');
$pdf->SetXY(54, 186);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Actual_Reading_No3'])), 0, 1, 'C');
$pdf->SetXY(87, 186);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Temperature_No3'])), 0, 1, 'C');
$pdf->SetXY(108, 186);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Actual_Reading_No3'])), 0, 1, 'C');

$pdf->SetXY(23, 190);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Temperature_No4'])), 0, 1, 'C');
$pdf->SetXY(54, 190);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Actual_Reading_No4'])), 0, 1, 'C');
$pdf->SetXY(87, 190);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Temperature_No4'])), 0, 1, 'C');
$pdf->SetXY(108, 190);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Actual_Reading_No4'])), 0, 1, 'C');

$pdf->SetXY(23, 195);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Temperature_No5'])), 0, 1, 'C');
$pdf->SetXY(54, 195);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Actual_Reading_No5'])), 0, 1, 'C');
$pdf->SetXY(87, 195);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Temperature_No5'])), 0, 1, 'C');
$pdf->SetXY(108, 195);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Actual_Reading_No5'])), 0, 1, 'C');

$pdf->SetXY(23, 199);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Temperature_No6'])), 0, 1, 'C');
$pdf->SetXY(54, 199);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Actual_Reading_No6'])), 0, 1, 'C');
$pdf->SetXY(87, 199);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Temperature_No6'])), 0, 1, 'C');
$pdf->SetXY(108, 199);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Actual_Reading_No6'])), 0, 1, 'C');

$pdf->SetXY(23, 203);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Temperature_No7'])), 0, 1, 'C');
$pdf->SetXY(54, 203);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Actual_Reading_No7'])), 0, 1, 'C');
$pdf->SetXY(87, 203);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Temperature_No7'])), 0, 1, 'C');
$pdf->SetXY(108, 203);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Actual_Reading_No7'])), 0, 1, 'C');

$pdf->SetXY(23, 208);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Temperature_No8'])), 0, 1, 'C');
$pdf->SetXY(54, 208);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Actual_Reading_No8'])), 0, 1, 'C');
$pdf->SetXY(87, 208);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Temperature_No8'])), 0, 1, 'C');
$pdf->SetXY(108, 208);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Actual_Reading_No8'])), 0, 1, 'C');


$pdf->SetXY(23, 212);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Temperature_No9'])), 0, 1, 'C');
$pdf->SetXY(54, 212);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_25gr_Actual_Reading_No9'])), 0, 1, 'C');
$pdf->SetXY(87, 212);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Temperature_No9'])), 0, 1, 'C');
$pdf->SetXY(108, 212);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_25gr_Actual_Reading_No9'])), 0, 1, 'C');


// Hydrometer Calibration 50gr
$pdf->SetXY(265, 177);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Temperature_No1'])), 0, 1, 'C');
$pdf->SetXY(288, 177);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Actual_Reading_No1'])), 0, 1, 'C');
$pdf->SetXY(317, 177);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Temperature_No1'])), 0, 1, 'C');
$pdf->SetXY(338, 177);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Actual_Reading_No1'])), 0, 1, 'C');

$pdf->SetXY(265, 181);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Temperature_No2'])), 0, 1, 'C');
$pdf->SetXY(288, 181);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Actual_Reading_No2'])), 0, 1, 'C');
$pdf->SetXY(317, 181);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Temperature_No2'])), 0, 1, 'C');
$pdf->SetXY(338, 181);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Actual_Reading_No2'])), 0, 1, 'C');

$pdf->SetXY(265, 186);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Temperature_No3'])), 0, 1, 'C');
$pdf->SetXY(288, 186);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Actual_Reading_No3'])), 0, 1, 'C');
$pdf->SetXY(317, 186);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Temperature_No3'])), 0, 1, 'C');
$pdf->SetXY(338, 186);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Actual_Reading_No3'])), 0, 1, 'C');

$pdf->SetXY(265, 190);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Temperature_No4'])), 0, 1, 'C');
$pdf->SetXY(288, 190);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Actual_Reading_No4'])), 0, 1, 'C');
$pdf->SetXY(317, 190);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Temperature_No4'])), 0, 1, 'C');
$pdf->SetXY(338, 190);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Actual_Reading_No4'])), 0, 1, 'C');

$pdf->SetXY(265, 195);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Temperature_No5'])), 0, 1, 'C');
$pdf->SetXY(288, 195);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Actual_Reading_No5'])), 0, 1, 'C');
$pdf->SetXY(317, 195);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Temperature_No5'])), 0, 1, 'C');
$pdf->SetXY(338, 195);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Actual_Reading_No5'])), 0, 1, 'C');

$pdf->SetXY(265, 199);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Temperature_No6'])), 0, 1, 'C');
$pdf->SetXY(288, 199);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Actual_Reading_No6'])), 0, 1, 'C');
$pdf->SetXY(317, 199);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Temperature_No6'])), 0, 1, 'C');
$pdf->SetXY(338, 199);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Actual_Reading_No6'])), 0, 1, 'C');

$pdf->SetXY(265, 203);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Temperature_No7'])), 0, 1, 'C');
$pdf->SetXY(288, 203);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Actual_Reading_No7'])), 0, 1, 'C');
$pdf->SetXY(317, 203);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Temperature_No7'])), 0, 1, 'C');
$pdf->SetXY(338, 203);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Actual_Reading_No7'])), 0, 1, 'C');

$pdf->SetXY(265, 208);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Temperature_No8'])), 0, 1, 'C');
$pdf->SetXY(288, 208);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Actual_Reading_No8'])), 0, 1, 'C');
$pdf->SetXY(317, 208);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Temperature_No8'])), 0, 1, 'C');
$pdf->SetXY(338, 208);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Actual_Reading_No8'])), 0, 1, 'C');

$pdf->SetXY(265, 212);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Temperature_No9'])), 0, 1, 'C');
$pdf->SetXY(288, 212);
$pdf->Cell(33, 5, remove_junk(ucwords($hydrometer['Hy_Calibration_50gr_Actual_Reading_No9'])), 0, 1, 'C');
$pdf->SetXY(317, 212);
$pdf->Cell(21, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Temperature_No9'])), 0, 1, 'C');
$pdf->SetXY(338, 212);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['Hy_Measure_Fluid_50gr_Actual_Reading_No9'])), 0, 1, 'C');

// Hydrometer Analysis
$pdf->SetXY(217, 159);
$pdf->Cell(22, 4, remove_junk(ucwords($hydrometer['Dispersing_Agent'])), 0, 1, 'C');
$pdf->SetXY(217, 164);
$pdf->Cell(22, 4, remove_junk(ucwords($hydrometer['Amount_Used_g'])), 0, 1, 'C');
$pdf->SetXY(217, 169);
$pdf->Cell(22, 4, remove_junk(ucwords($hydrometer['Temperature_of_Test'])), 0, 1, 'C');
$pdf->SetXY(217, 173);
$pdf->Cell(22, 4, remove_junk(ucwords($hydrometer['Viscosity_of_Water_gs_cm2'])), 0, 1, 'C');
$pdf->SetXY(217, 178);
$pdf->Cell(22, 4, remove_junk(ucwords($hydrometer['Mass_Density_of_Water_Calibrated'])), 0, 1, 'C');
$pdf->SetXY(217, 182);
$pdf->Cell(22, 4, remove_junk(ucwords($hydrometer['Acceleration_cm_s2'])), 0, 1, 'C');
$pdf->SetXY(217, 186);
$pdf->Cell(22, 4, remove_junk(ucwords($hydrometer['Volume_of_Suspension_Vsp_cm3'])), 0, 1, 'C');
$pdf->SetXY(217, 190);
$pdf->Cell(22, 4, remove_junk(ucwords($hydrometer['Meniscus_Correction_Cm'])), 0, 1, 'C');

// Hydrometer Tabla
$pdf->SetXY(55, 245);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr25_Date_No1'])), 0, 1, 'C');
$pdf->SetXY(87, 245);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Hour_No1'])), 0, 1, 'C');
$pdf->SetXY(108, 245);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Reading_Time_min_No1'])), 0, 1, 'C');
$pdf->SetXY(129, 245);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Temp_No1'])), 0, 1, 'C');
$pdf->SetXY(156, 245);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr25_Hydrometer_Readings_Rm_No1'])), 0, 1, 'C');
$pdf->SetXY(195, 245);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_A_or_B_depending_of_the_Hy_type_No1'])), 0, 1, 'C');
$pdf->SetXY(218, 245);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Offset_at_Reading_rdm_No1'])), 0, 1, 'C');
$pdf->SetXY(240, 245);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr25_Mass_Percent_Finer_Nm_Porce_No1'])), 0, 1, 'C');
$pdf->SetXY(268, 245);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Effective_Length_Hm_No1'])), 0, 1, 'C');
$pdf->SetXY(294, 245);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_D_mm_No1'])), 0, 1, 'C');

$pdf->SetXY(55, 252);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr25_Date_No2'])), 0, 1, 'C');
$pdf->SetXY(87, 252);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Hour_No2'])), 0, 1, 'C');
$pdf->SetXY(108, 252);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Reading_Time_min_No2'])), 0, 1, 'C');
$pdf->SetXY(129, 252);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Temp_No2'])), 0, 1, 'C');
$pdf->SetXY(156, 252);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr25_Hydrometer_Readings_Rm_No2'])), 0, 1, 'C');
$pdf->SetXY(195, 252);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_A_or_B_depending_of_the_Hy_type_No2'])), 0, 1, 'C');
$pdf->SetXY(218, 252);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Offset_at_Reading_rdm_No2'])), 0, 1, 'C');
$pdf->SetXY(240, 252);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr25_Mass_Percent_Finer_Nm_Porce_No2'])), 0, 1, 'C');
$pdf->SetXY(268, 252);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Effective_Length_Hm_No2'])), 0, 1, 'C');
$pdf->SetXY(294, 252);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_D_mm_No2'])), 0, 1, 'C');

$pdf->SetXY(55, 258);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr25_Date_No3'])), 0, 1, 'C');
$pdf->SetXY(87, 258);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Hour_No3'])), 0, 1, 'C');
$pdf->SetXY(108, 258);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Reading_Time_min_No3'])), 0, 1, 'C');
$pdf->SetXY(129, 258);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Temp_No3'])), 0, 1, 'C');
$pdf->SetXY(156, 258);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr25_Hydrometer_Readings_Rm_No3'])), 0, 1, 'C');
$pdf->SetXY(195, 258);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_A_or_B_depending_of_the_Hy_type_No3'])), 0, 1, 'C');
$pdf->SetXY(218, 258);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Offset_at_Reading_rdm_No3'])), 0, 1, 'C');
$pdf->SetXY(240, 258);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr25_Mass_Percent_Finer_Nm_Porce_No3'])), 0, 1, 'C');
$pdf->SetXY(268, 258);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Effective_Length_Hm_No3'])), 0, 1, 'C');
$pdf->SetXY(294, 258);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_D_mm_No3'])), 0, 1, 'C');

$pdf->SetXY(55, 265);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr25_Date_No4'])), 0, 1, 'C');
$pdf->SetXY(87, 265);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Hour_No4'])), 0, 1, 'C');
$pdf->SetXY(108, 265);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Reading_Time_min_No4'])), 0, 1, 'C');
$pdf->SetXY(129, 265);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Temp_No4'])), 0, 1, 'C');
$pdf->SetXY(156, 265);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr25_Hydrometer_Readings_Rm_No4'])), 0, 1, 'C');
$pdf->SetXY(195, 265);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_A_or_B_depending_of_the_Hy_type_No4'])), 0, 1, 'C');
$pdf->SetXY(218, 265);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Offset_at_Reading_rdm_No4'])), 0, 1, 'C');
$pdf->SetXY(240, 265);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr25_Mass_Percent_Finer_Nm_Porce_No4'])), 0, 1, 'C');
$pdf->SetXY(268, 265);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Effective_Length_Hm_No4'])), 0, 1, 'C');
$pdf->SetXY(294, 265);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_D_mm_No4'])), 0, 1, 'C');

$pdf->SetXY(55, 271);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr25_Date_No5'])), 0, 1, 'C');
$pdf->SetXY(87, 271);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Hour_No5'])), 0, 1, 'C');
$pdf->SetXY(108, 271);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Reading_Time_min_No5'])), 0, 1, 'C');
$pdf->SetXY(129, 271);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Temp_No5'])), 0, 1, 'C');
$pdf->SetXY(156, 271);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr25_Hydrometer_Readings_Rm_No5'])), 0, 1, 'C');
$pdf->SetXY(195, 271);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_A_or_B_depending_of_the_Hy_type_No5'])), 0, 1, 'C');
$pdf->SetXY(218, 271);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Offset_at_Reading_rdm_No5'])), 0, 1, 'C');
$pdf->SetXY(240, 271);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr25_Mass_Percent_Finer_Nm_Porce_No5'])), 0, 1, 'C');
$pdf->SetXY(268, 271);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Effective_Length_Hm_No5'])), 0, 1, 'C');
$pdf->SetXY(294, 271);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_D_mm_No5'])), 0, 1, 'C');

$pdf->SetXY(55, 278);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr25_Date_No6'])), 0, 1, 'C');
$pdf->SetXY(87, 278);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Hour_No6'])), 0, 1, 'C');
$pdf->SetXY(108, 278);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Reading_Time_min_No6'])), 0, 1, 'C');
$pdf->SetXY(129, 278);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Temp_No6'])), 0, 1, 'C');
$pdf->SetXY(156, 278);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr25_Hydrometer_Readings_Rm_No6'])), 0, 1, 'C');
$pdf->SetXY(195, 278);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_A_or_B_depending_of_the_Hy_type_No6'])), 0, 1, 'C');
$pdf->SetXY(218, 278);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Offset_at_Reading_rdm_No6'])), 0, 1, 'C');
$pdf->SetXY(240, 278);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr25_Mass_Percent_Finer_Nm_Porce_No6'])), 0, 1, 'C');
$pdf->SetXY(268, 278);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Effective_Length_Hm_No6'])), 0, 1, 'C');
$pdf->SetXY(294, 278);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_D_mm_No6'])), 0, 1, 'C');

$pdf->SetXY(55, 284);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr25_Date_No7'])), 0, 1, 'C');
$pdf->SetXY(87, 284);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Hour_No7'])), 0, 1, 'C');
$pdf->SetXY(108, 284);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Reading_Time_min_No7'])), 0, 1, 'C');
$pdf->SetXY(129, 284);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Temp_No7'])), 0, 1, 'C');
$pdf->SetXY(156, 284);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr25_Hydrometer_Readings_Rm_No7'])), 0, 1, 'C');
$pdf->SetXY(195, 284);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_A_or_B_depending_of_the_Hy_type_No7'])), 0, 1, 'C');
$pdf->SetXY(218, 284);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Offset_at_Reading_rdm_No7'])), 0, 1, 'C');
$pdf->SetXY(240, 284);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr25_Mass_Percent_Finer_Nm_Porce_No7'])), 0, 1, 'C');
$pdf->SetXY(268, 284);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Effective_Length_Hm_No7'])), 0, 1, 'C');
$pdf->SetXY(294, 284);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_D_mm_No7'])), 0, 1, 'C');

$pdf->SetXY(55, 291);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr25_Date_No8'])), 0, 1, 'C');
$pdf->SetXY(87, 291);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Hour_No8'])), 0, 1, 'C');
$pdf->SetXY(108, 291);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Reading_Time_min_No8'])), 0, 1, 'C');
$pdf->SetXY(129, 291);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Temp_No8'])), 0, 1, 'C');
$pdf->SetXY(156, 291);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr25_Hydrometer_Readings_Rm_No8'])), 0, 1, 'C');
$pdf->SetXY(195, 291);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_A_or_B_depending_of_the_Hy_type_No8'])), 0, 1, 'C');
$pdf->SetXY(218, 291);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Offset_at_Reading_rdm_No8'])), 0, 1, 'C');
$pdf->SetXY(240, 291);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr25_Mass_Percent_Finer_Nm_Porce_No8'])), 0, 1, 'C');
$pdf->SetXY(268, 291);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Effective_Length_Hm_No8'])), 0, 1, 'C');
$pdf->SetXY(294, 291);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_D_mm_No8'])), 0, 1, 'C');

$pdf->SetXY(55, 297);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr25_Date_No9'])), 0, 1, 'C');
$pdf->SetXY(87, 297);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Hour_No9'])), 0, 1, 'C');
$pdf->SetXY(108, 297);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Reading_Time_min_No9'])), 0, 1, 'C');
$pdf->SetXY(129, 297);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Temp_No9'])), 0, 1, 'C');
$pdf->SetXY(156, 297);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr25_Hydrometer_Readings_Rm_No9'])), 0, 1, 'C');
$pdf->SetXY(195, 297);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_A_or_B_depending_of_the_Hy_type_No9'])), 0, 1, 'C');
$pdf->SetXY(218, 297);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr25_Offset_at_Reading_rdm_No9'])), 0, 1, 'C');
$pdf->SetXY(240, 297);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr25_Mass_Percent_Finer_Nm_Porce_No9'])), 0, 1, 'C');
$pdf->SetXY(268, 297);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr25_Effective_Length_Hm_No9'])), 0, 1, 'C');
$pdf->SetXY(294, 297);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr25_D_mm_No9'])), 0, 1, 'C');


// Hydrometer Tabla 2 two
$pdf->SetXY(55, 327);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr50_Date_No1'])), 0, 1, 'C');
$pdf->SetXY(87, 327);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Hour_No1'])), 0, 1, 'C');
$pdf->SetXY(108, 327);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Reading_Time_min_No1'])), 0, 1, 'C');
$pdf->SetXY(129, 327);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Temp_No1'])), 0, 1, 'C');
$pdf->SetXY(156, 327);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr50_Hydrometer_Readings_Rm_No1'])), 0, 1, 'C');
$pdf->SetXY(195, 327);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_A_or_B_depending_of_the_Hy_type_No1'])), 0, 1, 'C');
$pdf->SetXY(218, 327);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Offset_at_Reading_rdm_No1'])), 0, 1, 'C');
$pdf->SetXY(240, 327);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr50_Mass_Percent_Finer_Nm_Porce_No1'])), 0, 1, 'C');
$pdf->SetXY(268, 327);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Effective_Length_Hm_No1'])), 0, 1, 'C');
$pdf->SetXY(294, 327);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_D_mm_No1'])), 0, 1, 'C');

$pdf->SetXY(55, 335);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr50_Date_No2'])), 0, 1, 'C');
$pdf->SetXY(87, 335);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Hour_No2'])), 0, 1, 'C');
$pdf->SetXY(108, 335);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Reading_Time_min_No2'])), 0, 1, 'C');
$pdf->SetXY(129, 335);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Temp_No2'])), 0, 1, 'C');
$pdf->SetXY(156, 335);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr50_Hydrometer_Readings_Rm_No2'])), 0, 1, 'C');
$pdf->SetXY(195, 335);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_A_or_B_depending_of_the_Hy_type_No2'])), 0, 1, 'C');
$pdf->SetXY(218, 335);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Offset_at_Reading_rdm_No2'])), 0, 1, 'C');
$pdf->SetXY(240, 335);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr50_Mass_Percent_Finer_Nm_Porce_No2'])), 0, 1, 'C');
$pdf->SetXY(268, 335);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Effective_Length_Hm_No2'])), 0, 1, 'C');
$pdf->SetXY(294, 335);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_D_mm_No2'])), 0, 1, 'C');

$pdf->SetXY(55, 341);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr50_Date_No3'])), 0, 1, 'C');
$pdf->SetXY(87, 341);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Hour_No3'])), 0, 1, 'C');
$pdf->SetXY(108, 341);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Reading_Time_min_No3'])), 0, 1, 'C');
$pdf->SetXY(129, 341);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Temp_No3'])), 0, 1, 'C');
$pdf->SetXY(156, 341);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr50_Hydrometer_Readings_Rm_No3'])), 0, 1, 'C');
$pdf->SetXY(195, 341);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_A_or_B_depending_of_the_Hy_type_No3'])), 0, 1, 'C');
$pdf->SetXY(218, 341);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Offset_at_Reading_rdm_No3'])), 0, 1, 'C');
$pdf->SetXY(240, 341);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr50_Mass_Percent_Finer_Nm_Porce_No3'])), 0, 1, 'C');
$pdf->SetXY(268, 341);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Effective_Length_Hm_No3'])), 0, 1, 'C');
$pdf->SetXY(294, 341);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_D_mm_No3'])), 0, 1, 'C');

$pdf->SetXY(55, 348);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr50_Date_No4'])), 0, 1, 'C');
$pdf->SetXY(87, 348);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Hour_No4'])), 0, 1, 'C');
$pdf->SetXY(108, 348);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Reading_Time_min_No4'])), 0, 1, 'C');
$pdf->SetXY(129, 348);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Temp_No4'])), 0, 1, 'C');
$pdf->SetXY(156, 348);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr50_Hydrometer_Readings_Rm_No4'])), 0, 1, 'C');
$pdf->SetXY(195, 348);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_A_or_B_depending_of_the_Hy_type_No4'])), 0, 1, 'C');
$pdf->SetXY(218, 348);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Offset_at_Reading_rdm_No4'])), 0, 1, 'C');
$pdf->SetXY(240, 348);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr50_Mass_Percent_Finer_Nm_Porce_No4'])), 0, 1, 'C');
$pdf->SetXY(268, 348);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Effective_Length_Hm_No4'])), 0, 1, 'C');
$pdf->SetXY(294, 348);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_D_mm_No4'])), 0, 1, 'C');

$pdf->SetXY(55, 355);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr50_Date_No5'])), 0, 1, 'C');
$pdf->SetXY(87, 355);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Hour_No5'])), 0, 1, 'C');
$pdf->SetXY(108, 355);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Reading_Time_min_No5'])), 0, 1, 'C');
$pdf->SetXY(129, 355);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Temp_No5'])), 0, 1, 'C');
$pdf->SetXY(156, 355);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr50_Hydrometer_Readings_Rm_No5'])), 0, 1, 'C');
$pdf->SetXY(195, 355);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_A_or_B_depending_of_the_Hy_type_No5'])), 0, 1, 'C');
$pdf->SetXY(218, 355);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Offset_at_Reading_rdm_No5'])), 0, 1, 'C');
$pdf->SetXY(240, 355);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr50_Mass_Percent_Finer_Nm_Porce_No5'])), 0, 1, 'C');
$pdf->SetXY(268, 355);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Effective_Length_Hm_No5'])), 0, 1, 'C');
$pdf->SetXY(294, 355);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_D_mm_No5'])), 0, 1, 'C');

$pdf->SetXY(55, 361);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr50_Date_No6'])), 0, 1, 'C');
$pdf->SetXY(87, 361);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Hour_No6'])), 0, 1, 'C');
$pdf->SetXY(108, 361);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Reading_Time_min_No6'])), 0, 1, 'C');
$pdf->SetXY(129, 361);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Temp_No6'])), 0, 1, 'C');
$pdf->SetXY(156, 361);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr50_Hydrometer_Readings_Rm_No6'])), 0, 1, 'C');
$pdf->SetXY(195, 361);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_A_or_B_depending_of_the_Hy_type_No6'])), 0, 1, 'C');
$pdf->SetXY(218, 361);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Offset_at_Reading_rdm_No6'])), 0, 1, 'C');
$pdf->SetXY(240, 361);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr50_Mass_Percent_Finer_Nm_Porce_No6'])), 0, 1, 'C');
$pdf->SetXY(268, 361);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Effective_Length_Hm_No6'])), 0, 1, 'C');
$pdf->SetXY(294, 361);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_D_mm_No6'])), 0, 1, 'C');

$pdf->SetXY(55, 368);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr50_Date_No7'])), 0, 1, 'C');
$pdf->SetXY(87, 368);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Hour_No7'])), 0, 1, 'C');
$pdf->SetXY(108, 368);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Reading_Time_min_No7'])), 0, 1, 'C');
$pdf->SetXY(129, 368);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Temp_No7'])), 0, 1, 'C');
$pdf->SetXY(156, 368);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr50_Hydrometer_Readings_Rm_No7'])), 0, 1, 'C');
$pdf->SetXY(195, 368);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_A_or_B_depending_of_the_Hy_type_No7'])), 0, 1, 'C');
$pdf->SetXY(218, 368);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Offset_at_Reading_rdm_No7'])), 0, 1, 'C');
$pdf->SetXY(240, 368);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr50_Mass_Percent_Finer_Nm_Porce_No7'])), 0, 1, 'C');
$pdf->SetXY(268, 368);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Effective_Length_Hm_No7'])), 0, 1, 'C');
$pdf->SetXY(294, 368);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_D_mm_No7'])), 0, 1, 'C');

$pdf->SetXY(55, 375);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr50_Date_No8'])), 0, 1, 'C');
$pdf->SetXY(87, 375);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Hour_No8'])), 0, 1, 'C');
$pdf->SetXY(108, 375);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Reading_Time_min_No8'])), 0, 1, 'C');
$pdf->SetXY(129, 375);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Temp_No8'])), 0, 1, 'C');
$pdf->SetXY(156, 375);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr50_Hydrometer_Readings_Rm_No8'])), 0, 1, 'C');
$pdf->SetXY(195, 375);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_A_or_B_depending_of_the_Hy_type_No8'])), 0, 1, 'C');
$pdf->SetXY(218, 375);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Offset_at_Reading_rdm_No8'])), 0, 1, 'C');
$pdf->SetXY(240, 375);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr50_Mass_Percent_Finer_Nm_Porce_No8'])), 0, 1, 'C');
$pdf->SetXY(268, 375);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Effective_Length_Hm_No8'])), 0, 1, 'C');
$pdf->SetXY(294, 375);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_D_mm_No8'])), 0, 1, 'C');

$pdf->SetXY(55, 382);
$pdf->Cell(31, 5, remove_junk(ucwords($hydrometer['gr50_Date_No9'])), 0, 1, 'C');
$pdf->SetXY(87, 382);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Hour_No9'])), 0, 1, 'C');
$pdf->SetXY(108, 382);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Reading_Time_min_No9'])), 0, 1, 'C');
$pdf->SetXY(129, 382);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Temp_No9'])), 0, 1, 'C');
$pdf->SetXY(156, 382);
$pdf->Cell(38, 5, remove_junk(ucwords($hydrometer['gr50_Hydrometer_Readings_Rm_No9'])), 0, 1, 'C');
$pdf->SetXY(195, 382);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_A_or_B_depending_of_the_Hy_type_No9'])), 0, 1, 'C');
$pdf->SetXY(218, 382);
$pdf->Cell(20, 5, remove_junk(ucwords($hydrometer['gr50_Offset_at_Reading_rdm_No9'])), 0, 1, 'C');
$pdf->SetXY(240, 382);
$pdf->Cell(28, 5, remove_junk(ucwords($hydrometer['gr50_Mass_Percent_Finer_Nm_Porce_No9'])), 0, 1, 'C');
$pdf->SetXY(268, 382);
$pdf->Cell(25, 5, remove_junk(ucwords($hydrometer['gr50_Effective_Length_Hm_No9'])), 0, 1, 'C');
$pdf->SetXY(294, 382);
$pdf->Cell(22, 5, remove_junk(ucwords($hydrometer['gr50_D_mm_No9'])), 0, 1, 'C');

// Perce Dispersion
$pdf->SetXY(55, 400);
$pdf->Cell(52, 10, remove_junk(ucwords($hydrometer['Nm_2um_Not_Dispersed'])), 0, 1, 'C');
$pdf->SetXY(55, 410);
$pdf->Cell(52, 8, remove_junk(ucwords($hydrometer['Nm_2um_Dispersed'])), 0, 1, 'C');
$pdf->SetXY(55, 419);
$pdf->Cell(52, 8, remove_junk(ucwords($hydrometer['Porce_Dispersion'])), 0, 1, 'C');
$pdf->SetXY(55, 428);
$pdf->Cell(52, 7, remove_junk(ucwords($hydrometer['Classification'])), 0, 1, 'C');

$pdf->Output();
?>