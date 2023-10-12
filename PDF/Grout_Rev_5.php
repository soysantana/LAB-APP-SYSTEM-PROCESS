<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$grout = find_by_id('grout_specimens', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('L', array(400, 310));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-83766_Compressive Strenght Grout Rev. 5.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(45, 46);
$pdf->Cell(21, 5, remove_junk(ucwords($grout['Technician'])), 0, 1, 'C');
$pdf->SetXY(45, 51);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');

$pdf->SetXY(130, 40);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Standard'])), 0, 1, 'C');
$pdf->SetXY(130, 46);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(130, 51);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(215, 40);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(215, 46);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(215, 51);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Split_Method'])), 0, 1, 'C');

$pdf->SetXY(50, 66);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Structure'])), 0, 1, 'C');
$pdf->SetXY(50, 72);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Area'])), 0, 1, 'C');
$pdf->SetXY(50, 77);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Source'])), 0, 1, 'C');
$pdf->SetXY(50, 82);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(130, 66);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(130, 72);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(130, 77);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(130, 82);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Elev'])), 0, 1, 'C');

$pdf->SetXY(215, 66);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(215, 72);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(215, 77);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['North'])), 0, 1, 'C');
$pdf->SetXY(215, 82);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['East'])), 0, 1, 'C');

// test information
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(49, 116);
$pdf->Cell(20, 7, remove_junk(ucwords($grout['Diameter_N1'])), 0, 1, 'C');
$pdf->SetXY(69, 116);
$pdf->Cell(21, 7, remove_junk(ucwords($grout['High_N1'])), 0, 1, 'C');
$pdf->SetXY(90, 116);
$pdf->Cell(21, 7, remove_junk(ucwords($grout['Length_N1'])), 0, 1, 'C');
$pdf->SetXY(111, 116);
$pdf->Cell(25, 7, remove_junk(ucwords($grout['Area_m2_N1'])), 0, 1, 'C');
$pdf->SetXY(136, 116);
$pdf->Cell(24, 7, remove_junk(ucwords($grout['Volumen_m3_N1'])), 0, 1, 'C');
$pdf->SetXY(159, 116);
$pdf->Cell(23, 7, remove_junk(ucwords($grout['Weight_Cylinder_kg_N1'])), 0, 1, 'C');
$pdf->SetXY(182, 116);
$pdf->Cell(27, 7, remove_junk(ucwords($grout['Age_Days_N1'])), 0, 1, 'C');
$pdf->SetXY(209, 116);
$pdf->Cell(23, 7, remove_junk(ucwords($grout['Unit_Weight_kgm3_N1'])), 0, 1, 'C');
$pdf->SetXY(232, 116);
$pdf->Cell(21, 7, remove_junk(ucwords($grout['Failure_Load_kn_N1'])), 0, 1, 'C');
$pdf->SetXY(253, 116);
$pdf->Cell(17, 7, remove_junk(ucwords($grout['Strenght_Mpa_N1'])), 0, 1, 'C');
$pdf->SetXY(270, 116);
$pdf->Cell(21, 7, remove_junk(ucwords($grout['Average_Strenght_Mpa'])), 0, 1, 'C');
$pdf->SetXY(291, 116);
$pdf->Cell(25, 7, remove_junk(ucwords($grout['Type_Mpa_N1'])), 0, 1, 'C');

$pdf->SetXY(49, 123);
$pdf->Cell(20, 7, remove_junk(ucwords($grout['Diameter_N2'])), 0, 1, 'C');
$pdf->SetXY(69, 123);
$pdf->Cell(21, 7, remove_junk(ucwords($grout['High_N2'])), 0, 1, 'C');
$pdf->SetXY(90, 123);
$pdf->Cell(21, 7, remove_junk(ucwords($grout['Length_N2'])), 0, 1, 'C');
$pdf->SetXY(111, 123);
$pdf->Cell(25, 7, remove_junk(ucwords($grout['Area_m2_N2'])), 0, 1, 'C');
$pdf->SetXY(136, 123);
$pdf->Cell(24, 7, remove_junk(ucwords($grout['Volumen_m3_N2'])), 0, 1, 'C');
$pdf->SetXY(159, 123);
$pdf->Cell(23, 7, remove_junk(ucwords($grout['Weight_Cylinder_kg_N2'])), 0, 1, 'C');
$pdf->SetXY(182, 123);
$pdf->Cell(27, 7, remove_junk(ucwords($grout['Age_Days_N2'])), 0, 1, 'C');
$pdf->SetXY(209, 123);
$pdf->Cell(23, 7, remove_junk(ucwords($grout['Unit_Weight_kgm3_N2'])), 0, 1, 'C');
$pdf->SetXY(232, 123);
$pdf->Cell(21, 7, remove_junk(ucwords($grout['Failure_Load_kn_N2'])), 0, 1, 'C');
$pdf->SetXY(253, 123);
$pdf->Cell(17, 7, remove_junk(ucwords($grout['Strenght_Mpa_N2'])), 0, 1, 'C');
$pdf->SetXY(270, 123);
$pdf->Cell(21, 7, remove_junk(ucwords($grout['Average_Strenght_Mpa'])), 0, 1, 'C');
$pdf->SetXY(291, 123);
$pdf->Cell(25, 7, remove_junk(ucwords($grout['Type_Mpa_N2'])), 0, 1, 'C');

$pdf->SetXY(49, 131);
$pdf->Cell(20, 7, remove_junk(ucwords($grout['Diameter_N3'])), 0, 1, 'C');
$pdf->SetXY(69, 131);
$pdf->Cell(21, 7, remove_junk(ucwords($grout['High_N3'])), 0, 1, 'C');
$pdf->SetXY(90, 131);
$pdf->Cell(21, 7, remove_junk(ucwords($grout['Length_N3'])), 0, 1, 'C');
$pdf->SetXY(111, 131);
$pdf->Cell(25, 7, remove_junk(ucwords($grout['Area_m2_N3'])), 0, 1, 'C');
$pdf->SetXY(136, 131);
$pdf->Cell(24, 7, remove_junk(ucwords($grout['Volumen_m3_N3'])), 0, 1, 'C');
$pdf->SetXY(159, 131);
$pdf->Cell(23, 7, remove_junk(ucwords($grout['Weight_Cylinder_kg_N3'])), 0, 1, 'C');
$pdf->SetXY(182, 131);
$pdf->Cell(27, 7, remove_junk(ucwords($grout['Age_Days_N3'])), 0, 1, 'C');
$pdf->SetXY(209, 131);
$pdf->Cell(23, 7, remove_junk(ucwords($grout['Unit_Weight_kgm3_N3'])), 0, 1, 'C');
$pdf->SetXY(232, 131);
$pdf->Cell(21, 7, remove_junk(ucwords($grout['Failure_Load_kn_N3'])), 0, 1, 'C');
$pdf->SetXY(253, 131);
$pdf->Cell(17, 7, remove_junk(ucwords($grout['Strenght_Mpa_N3'])), 0, 1, 'C');
$pdf->SetXY(270, 131);
$pdf->Cell(21, 7, remove_junk(ucwords($grout['Average_Strenght_Mpa'])), 0, 1, 'C');
$pdf->SetXY(291, 131);
$pdf->Cell(25, 7, remove_junk(ucwords($grout['Type_Mpa_N3'])), 0, 1, 'C');

// Comments
$pdf->SetXY(26, 243);
$pdf->Cell(290, 22, remove_junk(ucwords($grout['Comments'])), 1, 1, 'C');

/*
// Pictures Grout
$imageData = $grout['Graphic_Load_versus_time'];
$imageFileName1 = 'temp_image1.jpg'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName1, $imageData);
$pdf->SetXY(28, 164);
$cellWidth = 80;
$cellHeight = 62;
$imagePath1 = "$imageFileName1";
$pdf->Image($imagePath1, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName1);

$imageData = $grout['Graphic_Load_versus_time'];
$imageFileName2 = 'temp_image2.jpg'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName2, $imageData);
$pdf->SetXY(143, 164);
$cellWidth = 80;
$cellHeight = 62;
$imagePath2 = "$imageFileName2";
$pdf->Image($imagePath2, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName2);

$imageData = $grout['Graphic_Load_versus_time'];
$imageFileName3 = 'temp_image3.jpg'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName3, $imageData);
$pdf->SetXY(254, 164);
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