<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$mc_scale = find_by_id('moisture_scale', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(260, 220));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-01714_MC-Scale_Rev 1.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 11);
$pdf->SetXY(62, 41);
$pdf->Cell(30, 5, remove_junk(ucwords($mc_scale['Technician'])), 0, 1, 'C');
$pdf->SetXY(62, 46);
$pdf->Cell(30, 5, "nose", 0, 1, 'C');

$pdf->SetXY(165, 35);
$pdf->Cell(30, 6, remove_junk(ucwords($mc_scale['Structure'])), 0, 1, 'C');
$pdf->SetXY(165, 41);
$pdf->Cell(30, 6, remove_junk(ucwords($mc_scale['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(165, 47);
$pdf->Cell(30, 6, remove_junk(ucwords($mc_scale['Report_Date'])), 0, 1, 'C');

// Agregar contenido adicional
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(110, 61);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['Structure'])), 0, 1, 'C');
$pdf->SetXY(110, 67.5);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['Area'])), 0, 1, 'C');
$pdf->SetXY(110, 72.5);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['Source'])), 0, 1, 'C');
$pdf->SetXY(110, 77.5);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(110, 82.5);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(110, 87);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(110, 92);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['Material_Type'])), 0, 1, 'C');
$pdf->SetXY(110, 97);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(110, 102);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(110, 107.5);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['North'])), 0, 1, 'C');
$pdf->SetXY(110, 112.5);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['East'])), 0, 1, 'C');
$pdf->SetXY(110, 117.5);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['Elev'])), 0, 1, 'C');

$pdf->SetXY(110, 131);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['Trial'])), 0, 1, 'C');
$pdf->SetXY(110, 136);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['Tare_Name'])), 0, 1, 'C');
$pdf->SetXY(110, 141);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_scale['Mc'])), 0, 1, 'C');

$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(19, 162);
$pdf->Cell(154, 40, remove_junk(ucwords($mc_scale['Comment'])), 0, 1, 'C');



$pdf->Output();

?>