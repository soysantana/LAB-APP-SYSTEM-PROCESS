<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$plt = find_by_id('point_load_test', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(360, 270));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-01712_PLT_Rev. 2.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(38, 43);
$pdf->Cell(30, 5, remove_junk(ucwords($plt['Technician'])), 0, 1, 'C');
$pdf->SetXY(38, 51);
$pdf->Cell(30, 5, "nose", 0, 1, 'C');

$pdf->SetXY(148, 34);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Standard'])), 0, 1, 'C');
$pdf->SetXY(148, 43);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(148, 51);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(237, 31);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Method'])), 0, 1, 'C');
$pdf->SetXY(237, 40);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Extraction_Equipment'])), 0, 1, 'C');
$pdf->SetXY(237, 48);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Cutter_Equipment'])), 0, 1, 'C');
$pdf->SetXY(237, 56);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Test_Device'])), 0, 1, 'C');

$pdf->SetXY(38, 69);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Structure'])), 0, 1, 'C');
$pdf->SetXY(38, 76);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Area'])), 0, 1, 'C');
$pdf->SetXY(38, 82);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Source'])), 0, 1, 'C');
$pdf->SetXY(38, 88);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(148, 68);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(148, 75);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(148, 83);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(148, 90);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Elev'])), 0, 1, 'C');

$pdf->SetXY(237, 68);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(237, 75);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(237, 83);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['North'])), 0, 1, 'C');
$pdf->SetXY(237, 90);
$pdf->Cell(30, 6, remove_junk(ucwords($plt['East'])), 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);

// PLT Device Values
$pdf->SetXY(107, 104);
$pdf->Cell(26, 6, remove_junk(ucwords($plt['Effective_Area_of_Jack_Piston_m2'])), 0, 1, 'C');
$pdf->SetXY(107, 109);
$pdf->Cell(26, 6, remove_junk(ucwords($plt['K1_Value_Assumed_Value_To_Correlate_Is50_To_UCS'])), 0, 1, 'C');
$pdf->SetXY(107, 114);
$pdf->Cell(26, 6, remove_junk(ucwords($plt['K2_Value_Assumed'])), 0, 1, 'C');

// Testing Information
$pdf->SetXY(9, 145);
$pdf->Cell(37, 12, remove_junk(ucwords($plt['Test_Type_A_B_C_D'])), 0, 1, 'C');
$pdf->SetXY(46, 145);
$pdf->Cell(35, 12, remove_junk(ucwords($plt['Dimension_L_mm'])), 0, 1, 'C');
$pdf->SetXY(81, 145);
$pdf->Cell(26, 12, remove_junk(ucwords($plt['Dimension_D_or_W_mm'])), 0, 1, 'C');
$pdf->SetXY(107, 145);
$pdf->Cell(26, 12, remove_junk(ucwords($plt['Plattens_Separation_mm'])), 0, 1, 'C');
$pdf->SetXY(133, 145);
$pdf->Cell(31, 12, utf8_decode(remove_junk(ucwords($plt['Load_Direction']))), 0, 1, 'C');
$pdf->SetXY(164, 145);
$pdf->Cell(32, 12, remove_junk(ucwords($plt['Gauge_Reading_Mpa'])), 0, 1, 'C');
$pdf->SetXY(196, 145);
$pdf->Cell(28, 12, remove_junk(ucwords($plt['Failure_Laod_MN'])), 0, 1, 'C');

$pdf->SetXY(9, 173);
$pdf->Cell(37, 12, remove_junk(ucwords($plt['De_mm'])), 0, 1, 'C');
$pdf->SetXY(46, 173);
$pdf->Cell(35, 12, remove_junk(ucwords($plt['Is_Mpa'])), 0, 1, 'C');
$pdf->SetXY(81, 173);
$pdf->Cell(26, 12, remove_junk(ucwords($plt['F'])), 0, 1, 'C');
$pdf->SetXY(107, 173);
$pdf->Cell(26, 12, remove_junk(ucwords($plt['Is_50'])), 0, 1, 'C');
$pdf->SetXY(133, 173);
$pdf->Cell(31, 12, remove_junk(ucwords($plt['UCS_From_K1_Mpa'])), 0, 1, 'C');
$pdf->SetXY(164, 173);
$pdf->Cell(32, 12, remove_junk(ucwords($plt['UCS_From_K2_Mpa'])), 0, 1, 'C');
$pdf->SetXY(196, 173);
$pdf->Cell(28, 12, remove_junk(ucwords($plt['Strenght_Classification'])), 0, 1, 'C');

// Comentario
$pdf->SetXY(9, 287);
$pdf->Cell(215, 25, remove_junk(ucwords($plt['Comments'])), 0, 1, 'C');
/*
// PIC PLT 
$imageData = $plt['Specimen_Before_Test'];
$imageFileName1 = 'temp_image1.png'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName1, $imageData);
$pdf->SetXY(10, 200);
$cellWidth = 110;
$cellHeight = 85;
$Width = 100;
$Height = 80;
$imagePath1 = "$imageFileName1";
$pdf->Image($imagePath1, $pdf->GetX(), $pdf->GetY(), $Width, $Height);
$pdf->SetXY(5, 197);
$pdf->Cell($cellWidth, $cellHeight, "", 1, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName1);

$imageData = $plt['Specimen_After_Test'];
$imageFileName2 = 'temp_image2.png'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName2, $imageData);
$pdf->SetXY(125, 200);
$cellWidth = 110;
$cellHeight = 85;
$Width = 100;
$Height = 80;
$imagePath1 = "$imageFileName2";
$pdf->Image($imagePath1, $pdf->GetX(), $pdf->GetY(), $Width, $Height);
$pdf->SetXY(120, 197);
$pdf->Cell($cellWidth, $cellHeight, "", 1, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName2);

*/

$pdf->Output();
?>