<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$density = find_by_id('density_bulk', (int)$_GET['id']);

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
$pdf->setSourceFile('PV-F-01729_ Bulk-Density_Rev.1.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(60, 41);
$pdf->Cell(21, 5, remove_junk(ucwords($density['Technician'])), 0, 1, 'C');
$pdf->SetXY(60, 46);
$pdf->Cell(21, 5, remove_junk(ucwords($density['Technician'])), 0, 1, 'C');
$pdf->SetXY(60, 50);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');


$pdf->SetXY(145, 41);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Standard'])), 0, 1, 'C');
$pdf->SetXY(145, 46);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(145, 50);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(215, 41);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(215, 46);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(215, 50);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Preparation_Method'])), 0, 1, 'C');

$pdf->SetXY(60, 64);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Structure'])), 0, 1, 'C');
$pdf->SetXY(60, 69);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Area'])), 0, 1, 'C');
$pdf->SetXY(60, 73);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Source'])), 0, 1, 'C');
$pdf->SetXY(60, 78);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(145, 64);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(145, 69);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(145, 73);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(145, 78);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Elev'])), 0, 1, 'C');

$pdf->SetXY(215, 64);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(215, 69);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(215, 73);
$pdf->Cell(21, 6, remove_junk(ucwords($density['North'])), 0, 1, 'C');
$pdf->SetXY(215, 78);
$pdf->Cell(21, 6, remove_junk(ucwords($density['East'])), 0, 1, 'C');

// Loose Bulk Density
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(151, 92);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Weight_Tare_g'])), 0, 1, 'C');
$pdf->SetXY(151, 96);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Weight_Tare_Soil_g'])), 0, 1, 'C');
$pdf->SetXY(151, 101);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Volume_The_Mold_m3'])), 0, 1, 'C');
$pdf->SetXY(151, 106);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Weight_Loose_Material_g'])), 0, 1, 'C');
$pdf->SetXY(151, 111);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Absorption_Porce'])), 0, 1, 'C');
$pdf->SetXY(151, 116);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Specific_Gravity_OD'])), 0, 1, 'C');
$pdf->SetXY(151, 120);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Density_Water_Kgm3'])), 0, 1, 'C');
$pdf->SetXY(151, 125);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Loose_Bulk_Denisty_Kgm3'])), 0, 1, 'C');
$pdf->SetXY(151, 130);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Percent_Voids_Loose_Aggregate'])), 0, 1, 'C');

// Compacted Bulk Density
$pdf->SetXY(151, 143);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Compacted_Weight_Tare_g'])), 0, 1, 'C');
$pdf->SetXY(151, 148);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Compacted_Weight_Tare_Soil_g'])), 0, 1, 'C');
$pdf->SetXY(151, 152);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Compacted_Volume_The_Mold_m3'])), 0, 1, 'C');
$pdf->SetXY(151, 157);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Weight_Compacted_Material_g'])), 0, 1, 'C');
$pdf->SetXY(151, 161);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Compacted_Absorption_Porce'])), 0, 1, 'C');
$pdf->SetXY(151, 165);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Compacted_Specific_Gravity_OD'])), 0, 1, 'C');
$pdf->SetXY(151, 170);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Compacted_Density_Water_Kgm3'])), 0, 1, 'C');
$pdf->SetXY(151, 175);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Compacted_Bulk_Denisty_Kgm3'])), 0, 1, 'C');
$pdf->SetXY(151, 179);
$pdf->Cell(43, 5, remove_junk(ucwords($density['Percent_Voids_Compacted_Aggregate'])), 0, 1, 'C');

// Comentario Lab
$pdf->SetXY(30, 195);
$pdf->Cell(164, 74, remove_junk(ucwords($density['Comments'])), 0, 1, 'C');


$pdf->Output();
?>