<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$specific_gravity = find_by_id('specific_gravity_fine', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('L', array(285, 280));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-83833_SG-for-FA_Rev 1.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(55, 43);
$pdf->Cell(21, 5, remove_junk(ucwords($specific_gravity['Technician'])), 0, 1, 'C');
$pdf->SetXY(55, 49);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');

$pdf->SetXY(140, 42);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(140, 47);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(230, 36);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Preparation_Method'])), 0, 1, 'C');

$pdf->SetXY(55, 67);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Structure'])), 0, 1, 'C');
$pdf->SetXY(55, 74);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Area'])), 0, 1, 'C');
$pdf->SetXY(55, 80);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Source'])), 0, 1, 'C');
$pdf->SetXY(55, 87);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(143, 67);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(143, 74);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(143, 80);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(143, 87);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Elev'])), 0, 1, 'C');

$pdf->SetXY(230, 67);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(230, 74);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(230, 80);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['North'])), 0, 1, 'C');
$pdf->SetXY(230, 87);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['East'])), 0, 1, 'C');

// Testing Information
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(94, 102);
$pdf->Cell(35, 6, remove_junk(ucwords($specific_gravity['Pycnometer_Number'])), 0, 1, 'C');
$pdf->SetXY(94, 107);
$pdf->Cell(35, 7, remove_junk(ucwords($specific_gravity['Weight_Pycnometer'])), 0, 1, 'C');
$pdf->SetXY(94, 113);
$pdf->Cell(35, 8, remove_junk(ucwords($specific_gravity['Weight_Dry_Soil_Tare'])), 0, 1, 'C');
$pdf->SetXY(94, 121);
$pdf->Cell(35, 6, remove_junk(ucwords($specific_gravity['Weight_Dry_Soil'])), 0, 1, 'C');
$pdf->SetXY(94, 127);
$pdf->Cell(35, 12, remove_junk(ucwords($specific_gravity['Weight_Saturated_Surface_Dry_Soil_Air'])), 0, 1, 'C');
$pdf->SetXY(94, 139);
$pdf->Cell(35, 6, remove_junk(ucwords($specific_gravity['Temp_Sample'])), 0, 1, 'C');
$pdf->SetXY(94, 144);
$pdf->Cell(35, 12, remove_junk(ucwords($specific_gravity['Weight_Pycnometer_Soil_Water'])), 0, 1, 'C');
$pdf->SetXY(94, 157);
$pdf->Cell(35, 11, remove_junk(ucwords($specific_gravity['Calibration_Weight_Pycnometer_Desired_Temp'])), 0, 1, 'C');

// RESULTS
$pdf->SetXY(94, 179);
$pdf->Cell(35, 6, remove_junk(ucwords($specific_gravity['Specific_Gravity'])), 0, 1, 'C');
$pdf->SetXY(94, 185);
$pdf->Cell(35, 10, remove_junk(ucwords($specific_gravity['Specific_Gravity_SSD'])), 0, 1, 'C');
$pdf->SetXY(94, 195);
$pdf->Cell(35, 10, remove_junk(ucwords($specific_gravity['Apparent_Specific_Gravity'])), 0, 1, 'C');
$pdf->SetXY(94, 205);
$pdf->Cell(35, 10, remove_junk(ucwords($specific_gravity['Percent_Absortion'])), 0, 1, 'C');

//Comments
$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(155, 103);
$pdf->Cell(90, 80, remove_junk(ucwords($specific_gravity['Comments'])), 0, 1, 'C');

$pdf->Output();
?>