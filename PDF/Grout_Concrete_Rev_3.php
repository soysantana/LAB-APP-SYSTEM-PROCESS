<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$grout = find_by_id('concrete_specimens', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('L', array(380, 290));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-83678_Compressive_Strenght-for-concrete_ Rev. 3.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(54, 44);
$pdf->Cell(21, 5, remove_junk(ucwords($grout['Technician'])), 0, 1, 'C');
$pdf->SetXY(54, 49);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');

$pdf->SetXY(155, 38);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Standard'])), 0, 1, 'C');
$pdf->SetXY(155, 44);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(155, 49);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(240, 38);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(240, 44);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(240, 49);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Split_Method'])), 0, 1, 'C');

$pdf->SetXY(60, 65);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Structure'])), 0, 1, 'C');
$pdf->SetXY(60, 71);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Area'])), 0, 1, 'C');
$pdf->SetXY(60, 76);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Source'])), 0, 1, 'C');
$pdf->SetXY(60, 81);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(155, 65);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(155, 71);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(155, 76);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(155, 81);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Elev'])), 0, 1, 'C');

$pdf->SetXY(240, 65);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(240, 71);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(240, 76);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['North'])), 0, 1, 'C');
$pdf->SetXY(240, 81);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['East'])), 0, 1, 'C');

// test information
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(57, 112);
$pdf->Cell(26, 6, remove_junk(ucwords($grout['Diameter_N1'])), 1, 1, 'C');
$pdf->SetXY(83, 112);
$pdf->Cell(27, 6, remove_junk(ucwords($grout['High_N1'])), 1, 1, 'C');
$pdf->SetXY(110, 112);
$pdf->Cell(31, 6, remove_junk(ucwords($grout['Area_m2_N1'])), 1, 1, 'C');
$pdf->SetXY(141, 112);
$pdf->Cell(28, 6, remove_junk(ucwords($grout['Volumen_m3_N1'])), 1, 1, 'C');
$pdf->SetXY(169, 112);
$pdf->Cell(22, 6, remove_junk(ucwords($grout['Weight_Cylinder_kg_N1'])), 1, 1, 'C');
$pdf->SetXY(191, 112);
$pdf->Cell(15, 6, remove_junk(ucwords($grout['Age_Days_N1'])), 1, 1, 'C');
$pdf->SetXY(206, 112);
$pdf->Cell(30, 6, remove_junk(ucwords($grout['Unit_Weight_kgm3_N1'])), 1, 1, 'C');
$pdf->SetXY(236, 112);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Failure_Load_kn_N1'])), 1, 1, 'C');
$pdf->SetXY(257, 112);
$pdf->Cell(19, 6, remove_junk(ucwords($grout['Strenght_Mpa_N1'])), 1, 1, 'C');
$pdf->SetXY(276, 112);
$pdf->Cell(25, 6, remove_junk(ucwords($grout['Average_Strenght_Mpa'])), 1, 1, 'C');
$pdf->SetXY(301, 112);
$pdf->Cell(20, 6, remove_junk(ucwords($grout['Type_Fracture_N1'])), 1, 1, 'C');

$pdf->SetXY(57, 118);
$pdf->Cell(26, 6, remove_junk(ucwords($grout['Diameter_N2'])), 1, 1, 'C');
$pdf->SetXY(83, 118);
$pdf->Cell(27, 6, remove_junk(ucwords($grout['High_N2'])), 1, 1, 'C');
$pdf->SetXY(110, 118);
$pdf->Cell(31, 6, remove_junk(ucwords($grout['Area_m2_N2'])), 1, 1, 'C');
$pdf->SetXY(141, 118);
$pdf->Cell(28, 6, remove_junk(ucwords($grout['Volumen_m3_N2'])), 1, 1, 'C');
$pdf->SetXY(169, 118);
$pdf->Cell(22, 6, remove_junk(ucwords($grout['Weight_Cylinder_kg_N2'])), 1, 1, 'C');
$pdf->SetXY(191, 118);
$pdf->Cell(15, 6, remove_junk(ucwords($grout['Age_Days_N2'])), 1, 1, 'C');
$pdf->SetXY(206, 118);
$pdf->Cell(30, 6, remove_junk(ucwords($grout['Unit_Weight_kgm3_N2'])), 1, 1, 'C');
$pdf->SetXY(236, 118);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Failure_Load_kn_N2'])), 1, 1, 'C');
$pdf->SetXY(257, 118);
$pdf->Cell(19, 6, remove_junk(ucwords($grout['Strenght_Mpa_N2'])), 1, 1, 'C');
$pdf->SetXY(276, 118);
$pdf->Cell(25, 6, remove_junk(ucwords($grout['Average_Strenght_Mpa'])), 1, 1, 'C');
$pdf->SetXY(301, 118);
$pdf->Cell(20, 6, remove_junk(ucwords($grout['Type_Fracture_N2'])), 1, 1, 'C');

$pdf->SetXY(57, 124);
$pdf->Cell(26, 6, remove_junk(ucwords($grout['Diameter_N3'])), 1, 1, 'C');
$pdf->SetXY(83, 124);
$pdf->Cell(27, 6, remove_junk(ucwords($grout['High_N3'])), 1, 1, 'C');
$pdf->SetXY(110, 124);
$pdf->Cell(31, 6, remove_junk(ucwords($grout['Area_m2_N3'])), 1, 1, 'C');
$pdf->SetXY(141, 124);
$pdf->Cell(28, 6, remove_junk(ucwords($grout['Volumen_m3_N3'])), 1, 1, 'C');
$pdf->SetXY(169, 124);
$pdf->Cell(22, 6, remove_junk(ucwords($grout['Weight_Cylinder_kg_N3'])), 1, 1, 'C');
$pdf->SetXY(191, 124);
$pdf->Cell(15, 6, remove_junk(ucwords($grout['Age_Days_N3'])), 1, 1, 'C');
$pdf->SetXY(206, 124);
$pdf->Cell(30, 6, remove_junk(ucwords($grout['Unit_Weight_kgm3_N3'])), 1, 1, 'C');
$pdf->SetXY(236, 124);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Failure_Load_kn_N3'])), 1, 1, 'C');
$pdf->SetXY(257, 124);
$pdf->Cell(19, 6, remove_junk(ucwords($grout['Strenght_Mpa_N3'])), 1, 1, 'C');
$pdf->SetXY(276, 124);
$pdf->Cell(25, 6, remove_junk(ucwords($grout['Average_Strenght_Mpa'])), 1, 1, 'C');
$pdf->SetXY(301, 124);
$pdf->Cell(20, 6, remove_junk(ucwords($grout['Type_Fracture_N3'])), 1, 1, 'C');

$pdf->SetXY(57, 130);
$pdf->Cell(26, 6, remove_junk(ucwords($grout['Diameter_N4'])), 1, 1, 'C');
$pdf->SetXY(83, 130);
$pdf->Cell(27, 6, remove_junk(ucwords($grout['High_N4'])), 1, 1, 'C');
$pdf->SetXY(110, 130);
$pdf->Cell(31, 6, remove_junk(ucwords($grout['Area_m2_N4'])), 1, 1, 'C');
$pdf->SetXY(141, 130);
$pdf->Cell(28, 6, remove_junk(ucwords($grout['Volumen_m3_N4'])), 1, 1, 'C');
$pdf->SetXY(169, 130);
$pdf->Cell(22, 6, remove_junk(ucwords($grout['Weight_Cylinder_kg_N4'])), 1, 1, 'C');
$pdf->SetXY(191, 130);
$pdf->Cell(15, 6, remove_junk(ucwords($grout['Age_Days_N4'])), 1, 1, 'C');
$pdf->SetXY(206, 130);
$pdf->Cell(30, 6, remove_junk(ucwords($grout['Unit_Weight_kgm3_N4'])), 1, 1, 'C');
$pdf->SetXY(236, 130);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Failure_Load_kn_N4'])), 1, 1, 'C');
$pdf->SetXY(257, 130);
$pdf->Cell(19, 6, remove_junk(ucwords($grout['Strenght_Mpa_N4'])), 1, 1, 'C');
$pdf->SetXY(276, 130);
$pdf->Cell(25, 6, remove_junk(ucwords($grout['Average_Strenght_Mpa'])), 1, 1, 'C');
$pdf->SetXY(301, 130);
$pdf->Cell(20, 6, remove_junk(ucwords($grout['Type_Fracture_N4'])), 1, 1, 'C');

$pdf->SetXY(57, 136);
$pdf->Cell(26, 6, remove_junk(ucwords($grout['Diameter_N5'])), 1, 1, 'C');
$pdf->SetXY(83, 136);
$pdf->Cell(27, 6, remove_junk(ucwords($grout['High_N5'])), 1, 1, 'C');
$pdf->SetXY(110, 136);
$pdf->Cell(31, 6, remove_junk(ucwords($grout['Area_m2_N5'])), 1, 1, 'C');
$pdf->SetXY(141, 136);
$pdf->Cell(28, 6, remove_junk(ucwords($grout['Volumen_m3_N5'])), 1, 1, 'C');
$pdf->SetXY(169, 136);
$pdf->Cell(22, 6, remove_junk(ucwords($grout['Weight_Cylinder_kg_N5'])), 1, 1, 'C');
$pdf->SetXY(191, 136);
$pdf->Cell(15, 6, remove_junk(ucwords($grout['Age_Days_N5'])), 1, 1, 'C');
$pdf->SetXY(206, 136);
$pdf->Cell(30, 6, remove_junk(ucwords($grout['Unit_Weight_kgm3_N5'])), 1, 1, 'C');
$pdf->SetXY(236, 136);
$pdf->Cell(21, 6, remove_junk(ucwords($grout['Failure_Load_kn_N5'])), 1, 1, 'C');
$pdf->SetXY(257, 136);
$pdf->Cell(19, 6, remove_junk(ucwords($grout['Strenght_Mpa_N5'])), 1, 1, 'C');
$pdf->SetXY(276, 136);
$pdf->Cell(25, 6, remove_junk(ucwords($grout['Average_Strenght_Mpa'])), 1, 1, 'C');
$pdf->SetXY(301, 136);
$pdf->Cell(20, 6, remove_junk(ucwords($grout['Type_Fracture_N5'])), 1, 1, 'C');


// Comments
$pdf->SetXY(25, 235);
$pdf->Cell(296, 22, remove_junk(ucwords($grout['Comments'])), 1, 1, 'C');

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



$pdf->Output();
?>