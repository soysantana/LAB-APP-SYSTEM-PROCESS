<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$LAA = find_by_id('los_angeles_abrasion_large', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(480, 380));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-01715_LAA-for-LS_Rev 1.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(88, 51);
$pdf->Cell(21, 5, remove_junk(ucwords($LAA['Technician'])), 0, 1, 'C');
$pdf->SetXY(88, 57);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');


$pdf->SetXY(200, 44);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Standard'])), 0, 1, 'C');
$pdf->SetXY(200, 51);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(200, 57);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(285, 42);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(285, 50);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(285, 57);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Split_Method'])), 0, 1, 'C');

$pdf->SetXY(88, 74);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Structure'])), 0, 1, 'C');
$pdf->SetXY(88, 81);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Area'])), 0, 1, 'C');
$pdf->SetXY(88, 87);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Source'])), 0, 1, 'C');
$pdf->SetXY(88, 95);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(205, 74);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(205, 81);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(205, 87);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(205, 95);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Elev'])), 0, 1, 'C');

$pdf->SetXY(285, 74);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(285, 81);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(285, 87);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['North'])), 0, 1, 'C');
$pdf->SetXY(285, 95);
$pdf->Cell(21, 6, remove_junk(ucwords($LAA['East'])), 0, 1, 'C');

// ASTM C131
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(93, 240);
$pdf->Cell(40, 5, remove_junk(ucwords($LAA['Selected_Grading'])), 0, 1, 'C');

$pdf->SetXY(93, 252);
$pdf->Cell(70, 10, remove_junk(ucwords($LAA['Weight_of_The_Spheres'])), 0, 1, 'C');
$pdf->SetXY(93, 263);
$pdf->Cell(70, 5, remove_junk(ucwords($LAA['Revolutions'])), 0, 1, 'C');

// Test information
$pdf->SetXY(134, 287);
$pdf->Cell(29, 9, remove_junk(ucwords($LAA['Initial_Weight'])), 0, 1, 'C');
$pdf->SetXY(134, 296);
$pdf->Cell(29, 9, remove_junk(ucwords($LAA['Final_Weight'])), 0, 1, 'C');
$pdf->SetXY(134, 305);
$pdf->Cell(29, 9, remove_junk(ucwords($LAA['Weight_Loss'])), 0, 1, 'C');
$pdf->SetXY(134, 315);
$pdf->Cell(29, 9, remove_junk(ucwords($LAA['Weight_Loss_Porce'])), 0, 1, 'C');

// Laboratory Comments
$pdf->SetXY(60, 345);
$pdf->Cell(180, 55, remove_junk(ucwords($LAA['Comments'])), 0, 1, 'C');


$pdf->Output();
?>