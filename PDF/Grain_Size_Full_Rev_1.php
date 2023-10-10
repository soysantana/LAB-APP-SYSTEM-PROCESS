<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$grain_size = find_by_id('grain_size_rocks', (int)$_GET['id']);

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
$pdf->setSourceFile('PV-F-83831_Full-GS-Grandes_Rev 1.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(89, 55);
$pdf->Cell(21, 5, remove_junk(ucwords($grain_size['Technician'])), 0, 1, 'C');
$pdf->SetXY(89, 60);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');

$pdf->SetXY(215, 48);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Standard'])), 0, 1, 'C');
$pdf->SetXY(215, 55);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(215, 60);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(300, 48);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(300, 55);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(300, 60);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Preparation_Method'])), 0, 1, 'C');

$pdf->SetXY(89, 78);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Structure'])), 0, 1, 'C');
$pdf->SetXY(89, 85);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Area'])), 0, 1, 'C');
$pdf->SetXY(89, 92);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Source'])), 0, 1, 'C');
$pdf->SetXY(89, 98);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(215, 78);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(215, 85);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(215, 92);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(215, 98);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Elev'])), 0, 1, 'C');

$pdf->SetXY(300, 78);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(300, 85);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(300, 92);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['North'])), 0, 1, 'C');
$pdf->SetXY(300, 98);
$pdf->Cell(21, 6, remove_junk(ucwords($grain_size['East'])), 0, 1, 'C');

// Testing Information
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(134, 116);
$pdf->Cell(36, 9, remove_junk(ucwords($grain_size['Total_Peso_Seco_Sucio_Gr'])), 0, 1, 'C');
$pdf->SetXY(134, 125);
$pdf->Cell(36, 9, remove_junk(ucwords($grain_size['Mayor_a_3_Gr'])), 0, 1, 'C');
$pdf->SetXY(134, 134);
$pdf->Cell(36, 9, remove_junk(ucwords($grain_size['Total_De_Muestra_Menor_de_3_Gr'])), 0, 1, 'C');
$pdf->SetXY(134, 142);
$pdf->Cell(36, 9, remove_junk(ucwords($grain_size['Moisture_Content_Average_Porce'])), 0, 1, 'C');
$pdf->SetXY(134, 151);
$pdf->Cell(36, 9, remove_junk(ucwords($grain_size['Menor_a_3_Gr'])), 0, 1, 'C');
$pdf->SetXY(134, 160);
$pdf->Cell(36, 9, remove_junk(ucwords($grain_size['Total_Peso_Lavado_Gr'])), 0, 1, 'C');
$pdf->SetXY(134, 169);
$pdf->Cell(36, 9, remove_junk(ucwords($grain_size['Perdida_Por_Lavado_Gr'])), 0, 1, 'C');
$pdf->SetXY(134, 177);
$pdf->Cell(36, 9, remove_junk(ucwords($grain_size['Factor_De_Conversion'])), 0, 1, 'C');
$pdf->SetXY(134, 186);
$pdf->Cell(36, 9, remove_junk(ucwords($grain_size['Peso_Seco_Sucio'])), 0, 1, 'C');

/*
// Pictures grain_size
$imageData = $grain_size['Picture_1'];
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

$imageData = $grain_size['Picture_2'];
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

$imageData = $grain_size['Picture_3'];
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