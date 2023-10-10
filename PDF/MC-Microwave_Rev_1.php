<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$mc_microwave = find_by_id('moisture_content_microwave', (int)$_GET['id']);

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
$pdf->setSourceFile('PV-F-83834_Mc_Microwave_Rev 1.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 11);
$pdf->SetXY(70, 37);
$pdf->Cell(30, 5, remove_junk(ucwords($mc_microwave['Technician'])), 0, 1, 'C');
$pdf->SetXY(70, 42);
$pdf->Cell(30, 5, "nose", 0, 1, 'C');

$pdf->SetXY(185, 30);
$pdf->Cell(30, 6, remove_junk(ucwords($mc_microwave['Standard'])), 0, 1, 'C');
$pdf->SetXY(185, 36);
$pdf->Cell(30, 6, remove_junk(ucwords($mc_microwave['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(185, 42);
$pdf->Cell(30, 6, remove_junk(ucwords($mc_microwave['Report_Date'])), 0, 1, 'C');

// Agregar contenido adicional
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(135, 58);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Structure'])), 0, 1, 'C');
$pdf->SetXY(135, 64);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Area'])), 0, 1, 'C');
$pdf->SetXY(135, 69);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Source'])), 0, 1, 'C');
$pdf->SetXY(135, 76);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(135, 82.5);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(135, 89);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(135, 94.5);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Material_Type'])), 0, 1, 'C');
$pdf->SetXY(135, 100);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(135, 105);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(135, 111);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['North'])), 0, 1, 'C');
$pdf->SetXY(135, 116);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['East'])), 0, 1, 'C');
$pdf->SetXY(135, 122.5);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Elev'])), 0, 1, 'C');

$pdf->SetXY(135, 140);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Trial'])), 0, 1, 'C');
$pdf->SetXY(135, 146);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Tare_Name'])), 0, 1, 'C');
$pdf->SetXY(135, 152);
$pdf->Cell(81, 6, utf8_decode(remove_junk(ucwords($mc_microwave['Microwave_Model']))), 0, 1, 'C');
$pdf->SetXY(135, 158);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Microwave_Model'])), 0, 1, 'C');
$pdf->SetXY(135, 164);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Microwave_Model'])), 0, 1, 'C');
$pdf->SetXY(135, 169.5);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Tare_Plus_Wet_Soil'])), 0, 1, 'C');
$pdf->SetXY(135, 175);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Tare_Plus_Dry_Soil1'])), 0, 1, 'C');
$pdf->SetXY(135, 181);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Tare_Plus_Dry_Soil2'])), 0, 1, 'C');
$pdf->SetXY(135, 187);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Tare_Plus_Dry_Soil3'])), 0, 1, 'C');
$pdf->SetXY(135, 192);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Tare_Plus_Dry_Soil4'])), 0, 1, 'C');
$pdf->SetXY(135, 198);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Water'])), 0, 1, 'C');
$pdf->SetXY(135, 203);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Weigth_Tare'])), 0, 1, 'C');
$pdf->SetXY(135, 208.5);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Dry_Soil'])), 0, 1, 'C');
$pdf->SetXY(135, 214);
$pdf->Cell(81, 6, remove_junk(ucwords($mc_microwave['Mc'])), 0, 1, 'C');

$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(21, 230);
$pdf->Cell(183, 25, remove_junk(ucwords($mc_microwave['Comment'])), 0, 1, 'C');



$pdf->Output();

?>