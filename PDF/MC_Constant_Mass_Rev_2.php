<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$mc_constant_mass = find_by_id('moisture_content_constant_mass', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(320, 260));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-83815_MC-Constant-Mass_Rev 2.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 11);
$pdf->SetXY(70, 45);
$pdf->Cell(30, 6, remove_junk(ucwords($mc_constant_mass['Technician'])), 0, 1, 'C');
$pdf->SetXY(70, 51);
$pdf->Cell(30, 6, "Asasa", 0, 1, 'C');

$pdf->SetXY(200, 39);
$pdf->Cell(30, 6, remove_junk(ucwords($mc_constant_mass['Standard'])), 0, 1, 'C');
$pdf->SetXY(200, 45);
$pdf->Cell(30, 6, remove_junk(ucwords($mc_constant_mass['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(200, 51);
$pdf->Cell(30, 6, remove_junk(ucwords($mc_constant_mass['Report_Date'])), 0, 1, 'C');

// Agregar contenido adicional
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(163, 65);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Structure'])), 0, 1, 'C');
$pdf->SetXY(163, 70);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Area'])), 0, 1, 'C');
$pdf->SetXY(163, 76);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Source'])), 0, 1, 'C');
$pdf->SetXY(163, 83);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(163, 89);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(163, 95);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(163, 100);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Material_Type'])), 0, 1, 'C');
$pdf->SetXY(163, 106);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(163, 111);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(163, 116);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['North'])), 0, 1, 'C');
$pdf->SetXY(163, 121);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['East'])), 0, 1, 'C');
$pdf->SetXY(163, 126);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Elev'])), 0, 1, 'C');

$pdf->SetXY(163, 143);
$pdf->Cell(81, 6, '1', 0, 1, 'C');
$pdf->SetXY(163, 149);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Tare_Name'])), 0, 1, 'C');
$pdf->SetXY(163, 155);
$pdf->Cell(81, 6, utf8_decode(remove_junk(ucwords($mc_constant_mass['Temperature']))), 0, 1, 'C');
$pdf->SetXY(163, 161);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Tare_Plus_Wet_Soil'])), 0, 1, 'C');
$pdf->SetXY(163, 168);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Tare_Plus_Dry_Soil1'])), 0, 1, 'C');
$pdf->SetXY(163, 174);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Tare_Plus_Dry_Soil2'])), 0, 1, 'C');
$pdf->SetXY(163, 179);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Tare_Plus_Dry_Soil3'])), 0, 1, 'C');
$pdf->SetXY(163, 185);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Tare_Plus_Dry_Soil4'])), 0, 1, 'C');
$pdf->SetXY(163, 191);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Water'])), 0, 1, 'C');
$pdf->SetXY(163, 196);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Weigth_Tare'])), 0, 1, 'C');
$pdf->SetXY(163, 202);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Dry_Soil'])), 0, 1, 'C');
$pdf->SetXY(163, 208);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_constant_mass['Mc'])), 0, 1, 'C');

$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(15, 230);
$pdf->Cell(229, 45, remove_junk(ucwords($mc_constant_mass['Comment'])), 0, 1, 'C');



$pdf->Output();

?>