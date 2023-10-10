<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$ucs = find_by_id('uniaxial_compressive_strength', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(470, 390));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-83440_UCS - Core Specimens_Rev. 3.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(40, 48);
$pdf->Cell(30, 5, remove_junk(ucwords($ucs['Technician'])), 0, 1, 'C');
$pdf->SetXY(40, 53);
$pdf->Cell(30, 5, "nose", 0, 1, 'C');

$pdf->SetXY(140, 41);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Standard'])), 0, 1, 'C');
$pdf->SetXY(140, 47);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(140, 53);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(245, 41);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Method'])), 0, 1, 'C');
$pdf->SetXY(245, 47);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Extraction_Equipment'])), 0, 1, 'C');
$pdf->SetXY(245, 53);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Cutter_Equipment'])), 0, 1, 'C');
$pdf->SetXY(245, 59);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Test_Device'])), 0, 1, 'C');

$pdf->SetXY(40, 68);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Structure'])), 0, 1, 'C');
$pdf->SetXY(40, 74);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Area'])), 0, 1, 'C');
$pdf->SetXY(40, 79);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Source'])), 0, 1, 'C');
$pdf->SetXY(40, 84);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(140, 68);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(140, 73);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(140, 79);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(140, 84);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Elev'])), 0, 1, 'C');

$pdf->SetXY(245, 68);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(245, 73);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(245, 79);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['North'])), 0, 1, 'C');
$pdf->SetXY(245, 84);
$pdf->Cell(30, 6, remove_junk(ucwords($ucs['East'])), 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);

//Testing Information
$pdf->SetXY(12,114);
$pdf->Cell(33, 12, remove_junk(ucwords($ucs['Dimension_D_cm'])), 0, 1, 'C');
$pdf->SetXY(45,114);
$pdf->Cell(33, 12, remove_junk(ucwords($ucs['Dimension_H_cm'])), 0, 1, 'C');
$pdf->SetXY(78,114);
$pdf->Cell(19, 12, remove_junk(ucwords($ucs['Relation_hD'])), 0, 1, 'C');
$pdf->SetXY(97,114);
$pdf->Cell(33, 12, remove_junk(ucwords($ucs['Area_m2'])), 0, 1, 'C');
$pdf->SetXY(130,114);
$pdf->Cell(40, 12, remove_junk(ucwords($ucs['Volume_m3'])), 0, 1, 'C');

$pdf->SetXY(12,146);
$pdf->Cell(33, 10, remove_junk(ucwords($ucs['Weight_Core_Kg'])), 0, 1, 'C');
$pdf->SetXY(45,146);
$pdf->Cell(33, 10, remove_junk(ucwords($ucs['Unit_Weight_Core_kgm3'])), 0, 1, 'C');
$pdf->SetXY(78,146);
$pdf->Cell(19, 10, remove_junk(ucwords($ucs['Failure_Loand_KN'])), 0, 1, 'C');
$pdf->SetXY(97,146);
$pdf->Cell(33, 10, remove_junk(ucwords($ucs['Test_Timing_S'])), 0, 1, 'C');
$pdf->SetXY(130,146);
$pdf->Cell(40, 10, remove_junk(ucwords($ucs['Load_Proportion_Mpas'])), 0, 1, 'C');
$pdf->SetXY(12,183);
$pdf->Cell(33, 13, remove_junk(ucwords($ucs['uniaxial_Compressive_Strenght_Mpa'])), 0, 1, 'C');

$pdf->SetXY(12,332);
$pdf->Cell(342, 75, remove_junk(ucwords($ucs['Comments'])), 1, 1, 'C');

// PIC UCS 
$imageData = $ucs['Pic_Before_Test'];
$imageFileName1 = 'temp_image1.png';
file_put_contents($imageFileName1, $imageData);
$pdf->SetXY(35, 210);
$cellWidth = 105;
$cellHeight = 90;
$imagePath1 = "$imageFileName1";
$pdf->Image($imagePath1, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 1, 1, 'C');

unlink($imageFileName1);

$imageData = $ucs['Pic_After_Test'];
$imageFileName2 = 'temp_image2.png';
file_put_contents($imageFileName2, $imageData);
$pdf->SetXY(230, 210);
$cellWidth = 105;
$cellHeight = 90;
$imagePath2 = "$imageFileName2";
$pdf->Image($imagePath2, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 1, 1, 'C');

unlink($imageFileName2);

$imageData = $ucs['Graphic_Failure_Load_versus_Time'];
$imageFileName3 = 'temp_image3.png';
file_put_contents($imageFileName3, $imageData);
$pdf->SetXY(230, 102);
$cellWidth = 105;
$cellHeight = 90;
$imagePath3 = "$imageFileName3";
$pdf->Image($imagePath3, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 1, 1, 'C');

unlink($imageFileName3);



$pdf->Output();
?>