<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$grout = find_by_id('consolidation', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(500, 550));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-83826_Conso_Rev 3.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(91, 51);
$pdf->Cell(21, 5, remove_junk(ucwords($grout['Technician'])), 0, 1, 'C');
$pdf->SetXY(91, 56);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');

$pdf->SetXY(230, 45);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Standard'])), 0, 1, 'C');
$pdf->SetXY(230, 50);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(230, 55);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(370, 50);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(370, 55);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(370, 60);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Preparation_Method'])), 0, 1, 'C');

$pdf->SetXY(91, 70);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Structure'])), 0, 1, 'C');
$pdf->SetXY(91, 76);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Area'])), 0, 1, 'C');
$pdf->SetXY(91, 81);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Source'])), 0, 1, 'C');
$pdf->SetXY(91, 87);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(230, 70);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(230, 76);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(230, 81);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(230, 87);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Elev'])), 0, 1, 'C');

$pdf->SetXY(370, 76);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(370, 82);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(370, 88);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['North'])), 0, 1, 'C');
$pdf->SetXY(370, 94);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['East'])), 0, 1, 'C');

//Tabla MC
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(95, 112);
$pdf->Cell(25, 8, remove_junk(ucwords($grout['Tare_No'])), 1, 1, 'C');
$pdf->SetXY(95, 120);
$pdf->Cell(25, 8, remove_junk(ucwords($grout['Mass_of_Tare_gr'])), 1, 1, 'C');
$pdf->SetXY(95, 128);
$pdf->Cell(25, 7, remove_junk(ucwords($grout['Mass_of_Wet_Soil_Tare_gr'])), 1, 1, 'C');
$pdf->SetXY(95, 135);
$pdf->Cell(25, 8, remove_junk(ucwords($grout['Mass_of_Dry_Soil_Tare'])), 1, 1, 'C');
$pdf->SetXY(95, 143);
$pdf->Cell(25, 8, remove_junk(ucwords($grout['Mass_of_Water'])), 1, 1, 'C');
$pdf->SetXY(95, 151);
$pdf->Cell(25, 8, remove_junk(ucwords($grout['Mass_of_Dry_Soil_gr'])), 1, 1, 'C');
$pdf->SetXY(95, 159);
$pdf->Cell(25, 8, remove_junk(ucwords($grout['Initial_Moisture_Conten_Porce_Wfp'])), 1, 1, 'C');

// Ring Properties
$pdf->SetXY(95, 175);
$pdf->Cell(25, 8, remove_junk(ucwords($grout['Weight_gr'])), 1, 1, 'C');

/*
// Pictures Grout
$imageData = $grout['Picture_1'];
$imageFileName1 = 'temp_image1.jpg'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName1, $imageData);
$pdf->SetXY(28, 155);
$cellWidth = 80;
$cellHeight = 62;
$imagePath1 = "$imageFileName1";
$pdf->Image($imagePath1, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName1);

$imageData = $grout['Picture_2'];
$imageFileName2 = 'temp_image2.jpg'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName2, $imageData);
$pdf->SetXY(148, 155);
$cellWidth = 80;
$cellHeight = 62;
$imagePath2 = "$imageFileName2";
$pdf->Image($imagePath2, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName2);

$imageData = $grout['Picture_3'];
$imageFileName3 = 'temp_image3.jpg'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName3, $imageData);
$pdf->SetXY(259, 155);
$cellWidth = 60;
$cellHeight = 62;
$imagePath3 = "$imageFileName3";
$pdf->Image($imagePath3, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName3);
*/

$pdf->Output();
?>