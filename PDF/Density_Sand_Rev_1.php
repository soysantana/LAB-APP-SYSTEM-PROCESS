<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$density = find_by_id('sand_density', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(330, 290));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-83693_ Sand-Density_Rev 1.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(79, 76);
$pdf->Cell(21, 5, remove_junk(ucwords($density['Technician'])), 0, 1, 'C');
$pdf->SetXY(79, 82);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');


$pdf->SetXY(185, 70);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Standard'])), 0, 1, 'C');
$pdf->SetXY(185, 76);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(185, 82);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(265, 70);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Structure'])), 0, 1, 'C');
$pdf->SetXY(265, 76);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(265, 82);
$pdf->Cell(21, 6, remove_junk(ucwords($density['Split_Method'])), 0, 1, 'C');

// Bulk Density Sand
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(145, 107);
$pdf->Cell(28, 8, remove_junk(ucwords($density['Weight_Sand_Mold_1'])), 0, 1, 'C');
$pdf->SetXY(173, 107);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Weight_Sand_Mold_2'])), 0, 1, 'C');
$pdf->SetXY(202, 107);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Weight_Sand_Mold_3'])), 0, 1, 'C');

$pdf->SetXY(145, 115);
$pdf->Cell(28, 8, remove_junk(ucwords($density['Mold_1'])), 0, 1, 'C');
$pdf->SetXY(173, 115);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Mold_2'])), 0, 1, 'C');
$pdf->SetXY(202, 115);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Mold_3'])), 0, 1, 'C');

$pdf->SetXY(145, 124);
$pdf->Cell(28, 8, remove_junk(ucwords($density['Weight_Mold_1'])), 0, 1, 'C');
$pdf->SetXY(173, 124);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Weight_Mold_2'])), 0, 1, 'C');
$pdf->SetXY(202, 124);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Weight_Mold_3'])), 0, 1, 'C');

$pdf->SetXY(145, 132);
$pdf->Cell(28, 8, remove_junk(ucwords($density['Weight_Sand_In_Mold_1'])), 0, 1, 'C');
$pdf->SetXY(173, 132);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Weight_Sand_In_Mold_2'])), 0, 1, 'C');
$pdf->SetXY(202, 132);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Weight_Sand_In_Mold_3'])), 0, 1, 'C');

$pdf->SetXY(145, 141);
$pdf->Cell(28, 8, remove_junk(ucwords($density['Volume_Mold_cm3_1'])), 0, 1, 'C');
$pdf->SetXY(173, 141);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Volume_Mold_cm3_2'])), 0, 1, 'C');
$pdf->SetXY(202, 141);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Volume_Mold_cm3_3'])), 0, 1, 'C');

$pdf->SetXY(145, 150);
$pdf->Cell(28, 8, remove_junk(ucwords($density['Bulk_Density_Sand_gcm3_1'])), 0, 1, 'C');
$pdf->SetXY(173, 150);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Bulk_Density_Sand_gcm3_2'])), 0, 1, 'C');
$pdf->SetXY(202, 150);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Bulk_Density_Sand_gcm3_3'])), 0, 1, 'C');

$pdf->SetXY(145, 158);
$pdf->Cell(86, 10, remove_junk(ucwords($density['Average_Bulk_Density_Sand'])), 0, 1, 'C');

// volume of Funnel
$pdf->SetXY(145, 195);
$pdf->Cell(28, 8, remove_junk(ucwords($density['Weight_Sand_Container_Before_Test_1'])), 0, 1, 'C');
$pdf->SetXY(173, 195);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Weight_Sand_Container_Before_Test_2'])), 0, 1, 'C');
$pdf->SetXY(202, 195);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Weight_Sand_Container_Before_Test_3'])), 0, 1, 'C');

$pdf->SetXY(145, 205);
$pdf->Cell(28, 8, remove_junk(ucwords($density['Weight_Sand_Container_After_Test_1'])), 0, 1, 'C');
$pdf->SetXY(173, 205);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Weight_Sand_Container_After_Test_2'])), 0, 1, 'C');
$pdf->SetXY(202, 205);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Weight_Sand_Container_After_Test_3'])), 0, 1, 'C');

$pdf->SetXY(145, 215);
$pdf->Cell(28, 8, remove_junk(ucwords($density['Weight_Sand_Used_1'])), 0, 1, 'C');
$pdf->SetXY(173, 215);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Weight_Sand_Used_2'])), 0, 1, 'C');
$pdf->SetXY(202, 215);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Weight_Sand_Used_3'])), 0, 1, 'C');

$pdf->SetXY(145, 225);
$pdf->Cell(28, 8, remove_junk(ucwords($density['Bulk_Density_of_Sand_1'])), 0, 1, 'C');
$pdf->SetXY(173, 225);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Bulk_Density_of_Sand_2'])), 0, 1, 'C');
$pdf->SetXY(202, 225);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Bulk_Density_of_Sand_3'])), 0, 1, 'C');

$pdf->SetXY(145, 234);
$pdf->Cell(28, 8, remove_junk(ucwords($density['Volume_Funnel_1'])), 0, 1, 'C');
$pdf->SetXY(173, 234);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Volume_Funnel_2'])), 0, 1, 'C');
$pdf->SetXY(202, 234);
$pdf->Cell(29, 8, remove_junk(ucwords($density['Volume_Funnel_3'])), 0, 1, 'C');

$pdf->SetXY(145, 242);
$pdf->Cell(86, 9, remove_junk(ucwords($density['Average_Volume_Funnel'])), 0, 1, 'C');

$pdf->SetXY(27, 260);
$pdf->Cell(203, 27, remove_junk(ucwords($density['Comments'])), 0, 1, 'C');


$pdf->Output();
?>