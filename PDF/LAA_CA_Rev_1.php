<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$LAA = find_by_id('los_angeles_abrasion_small', (int)$_GET['id']);

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
$pdf->setSourceFile('PV-F-01716_LAA-for-LS_ Rev 1.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(72, 59);
$pdf->Cell(21, 5, remove_junk(ucwords($LAA['Technician'])), 0, 1, 'C');
$pdf->SetXY(72, 65);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');


$pdf->SetXY(190, 50);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Standard'])), 0, 1, 'C');
$pdf->SetXY(190, 58);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(190, 65);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(280, 50);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(280, 58);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(280, 65);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Split_Method'])), 0, 1, 'C');

$pdf->SetXY(72, 81);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Structure'])), 0, 1, 'C');
$pdf->SetXY(72, 89);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Area'])), 0, 1, 'C');
$pdf->SetXY(72, 97);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Source'])), 0, 1, 'C');
$pdf->SetXY(72, 104);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(190, 81);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(190, 89);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(190, 97);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(190, 104);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Elev'])), 0, 1, 'C');

$pdf->SetXY(280, 81);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(280, 89);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(280, 97);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['North'])), 0, 1, 'C');
$pdf->SetXY(280, 104);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['East'])), 0, 1, 'C');

// ASTM C131
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(118, 199);
$pdf->Cell(97, 5, remove_junk(ucwords($LAA['Selected_Grading'])), 1, 1, 'C');

$pdf->SetXY(118, 210);
$pdf->Cell(97, 6, remove_junk(ucwords($LAA['Initial_Weight'])), 1, 1, 'C');
$pdf->SetXY(118, 216);
$pdf->Cell(97, 6, remove_junk(ucwords($LAA['Final_Weight'])), 0, 1, 'C');

// Test information
$pdf->SetXY(118, 222);
$pdf->Cell(97, 6, remove_junk(ucwords($LAA['Weight_Loss'])), 0, 1, 'C');
$pdf->SetXY(118, 228);
$pdf->Cell(97, 6, remove_junk(ucwords($LAA['Weight_Loss_Porce'])), 0, 1, 'C');

// Laboratory Comments
$pdf->SetXY(40, 250);
$pdf->Cell(191, 65, remove_junk(ucwords($LAA['Comments'])), 0, 1, 'C');


$pdf->Output();
?>