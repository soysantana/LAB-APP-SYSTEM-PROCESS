<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$leeb_hardness = find_by_id('leeb_hardness', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(360, 300));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-80986_Leeb Hardness Testing_Rev 1.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(75, 61);
$pdf->Cell(21, 5, remove_junk(ucwords($leeb_hardness['Technician'])), 0, 1, 'C');
$pdf->SetXY(75, 66);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');


$pdf->SetXY(160, 55);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Standard'])), 0, 1, 'C');
$pdf->SetXY(160, 61);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(160, 66);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(230, 55);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Method'])), 0, 1, 'C');
$pdf->SetXY(230, 61);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Method'])), 0, 1, 'C');
$pdf->SetXY(230, 66);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Method'])), 0, 1, 'C');

$pdf->SetXY(80, 89);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Structure'])), 0, 1, 'C');
$pdf->SetXY(80, 95);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Area'])), 0, 1, 'C');
$pdf->SetXY(80, 100);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Source'])), 0, 1, 'C');
$pdf->SetXY(80, 105);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(160, 89);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(160, 95);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(160, 100);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(160, 105);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Elev'])), 0, 1, 'C');

$pdf->SetXY(220, 89);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(220, 95);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(220, 100);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['North'])), 0, 1, 'C');
$pdf->SetXY(220, 105);
$pdf->Cell(21, 6, remove_junk(ucwords($leeb_hardness['East'])), 0, 1, 'C');

// testing Information
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(181, 121);
$pdf->Cell(46, 5, 'Leeb Hardness Number', 0, 1, 'C');
$pdf->SetXY(181, 126);
$pdf->Cell(46, 5, remove_junk(ucwords($leeb_hardness['Leeb_Hardness_Number1'])), 0, 1, 'C');
$pdf->SetXY(181, 131);
$pdf->Cell(46, 5, remove_junk(ucwords($leeb_hardness['Leeb_Hardness_Number2'])), 0, 1, 'C');
$pdf->SetXY(181, 137);
$pdf->Cell(46, 5, remove_junk(ucwords($leeb_hardness['Leeb_Hardness_Number3'])), 0, 1, 'C');
$pdf->SetXY(181, 142);
$pdf->Cell(46, 5, remove_junk(ucwords($leeb_hardness['Leeb_Hardness_Number4'])), 0, 1, 'C');
$pdf->SetXY(181, 148);
$pdf->Cell(46, 5, remove_junk(ucwords($leeb_hardness['Leeb_Hardness_Number5'])), 0, 1, 'C');
$pdf->SetXY(181, 153);
$pdf->Cell(46, 5, remove_junk(ucwords($leeb_hardness['Leeb_Hardness_Number6'])), 0, 1, 'C');
$pdf->SetXY(181, 159);
$pdf->Cell(46, 5, remove_junk(ucwords($leeb_hardness['Leeb_Hardness_Number7'])), 0, 1, 'C');
$pdf->SetXY(181, 164);
$pdf->Cell(46, 5, remove_junk(ucwords($leeb_hardness['Leeb_Hardness_Number8'])), 0, 1, 'C');
$pdf->SetXY(181, 170);
$pdf->Cell(46, 5, remove_junk(ucwords($leeb_hardness['Leeb_Hardness_Number9'])), 0, 1, 'C');
$pdf->SetXY(181, 175);
$pdf->Cell(46, 5, remove_junk(ucwords($leeb_hardness['Leeb_Hardness_Number10'])), 0, 1, 'C');
$pdf->SetXY(181, 180);
$pdf->Cell(46, 5, remove_junk(ucwords($leeb_hardness['Average'])), 0, 1, 'C');

// Comments Laboratory
$pdf->SetXY(54, 201);
$pdf->Cell(173, 96, remove_junk(ucwords($leeb_hardness['Comments'])), 0, 1, 'C');


$pdf->Output();
?>