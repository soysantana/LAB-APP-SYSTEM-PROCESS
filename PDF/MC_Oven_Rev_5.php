<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$mc_oven = find_by_id('moisture_content', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(300, 250));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-81248_MC_Oven_Rev 5.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 11);
$pdf->SetXY(60, 37);
$pdf->Cell(30, 5, remove_junk(ucwords($mc_oven['Technician'])), 0, 1, 'C');
$pdf->SetXY(60, 42);
$pdf->Cell(30, 5, "nose", 0, 1, 'C');

$pdf->SetXY(170, 30);
$pdf->Cell(30, 6, remove_junk(ucwords($mc_oven['Standard'])), 0, 1, 'C');
$pdf->SetXY(170, 36);
$pdf->Cell(30, 6, remove_junk(ucwords($mc_oven['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(170, 42);
$pdf->Cell(30, 6, remove_junk(ucwords($mc_oven['Report_Date'])), 0, 1, 'C');

// Agregar contenido adicional
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(120, 58);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Structure'])), 0, 1, 'C');
$pdf->SetXY(120, 64);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Area'])), 0, 1, 'C');
$pdf->SetXY(120, 69);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(120, 75);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(120, 81);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(120, 87);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Material_Type'])), 0, 1, 'C');
$pdf->SetXY(120, 93);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(120, 99);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(120, 104);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['North'])), 0, 1, 'C');
$pdf->SetXY(120, 109);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['East'])), 0, 1, 'C');
$pdf->SetXY(120, 115);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Elev'])), 0, 1, 'C');

$pdf->SetXY(120, 133);
$pdf->Cell(81, 6, '1', 0, 1, 'C');
$pdf->SetXY(120, 139);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Tare_Name'])), 0, 1, 'C');
$pdf->SetXY(120, 145);
$pdf->Cell(81, 6, utf8_decode(remove_junk(ucwords($mc_oven['Temperature']))), 0, 1, 'C');
$pdf->SetXY(120, 150);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Tare_Plus_Wet_Soil'])), 0, 1, 'C');
$pdf->SetXY(120, 156);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Tare_Plus_Dry_Soil'])), 0, 1, 'C');
$pdf->SetXY(120, 161);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Water'])), 0, 1, 'C');
$pdf->SetXY(120, 167);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Weigth_Tare'])), 0, 1, 'C');
$pdf->SetXY(120, 173);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Dry_Soil'])), 0, 1, 'C');
$pdf->SetXY(120, 178);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_oven['Mc'])), 0, 1, 'C');

$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(21, 200);
$pdf->Cell(170, 50, remove_junk(ucwords($mc_oven['Comments'])), 0, 1, 'C');



$pdf->Output();

?>