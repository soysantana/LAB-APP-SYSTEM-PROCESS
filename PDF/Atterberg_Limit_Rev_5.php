<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$atterberg_limit = find_by_id('atterberg_limit', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('L', array(360, 290));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-80769_AL_Rev. 5.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(62, 39);
$pdf->Cell(30, 5, remove_junk(ucwords($atterberg_limit['Technician'])), 0, 1, 'C');
$pdf->SetXY(62, 45);
$pdf->Cell(30, 5, "nose", 0, 1, 'C');

$pdf->SetXY(165, 32);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Standard'])), 0, 1, 'C');
$pdf->SetXY(165, 39);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(165, 46);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(260, 32);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Split_Method'])), 0, 1, 'C');
$pdf->SetXY(260, 38);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Preparation_Method'])), 0, 1, 'C');

$pdf->SetXY(62, 64);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Structure'])), 0, 1, 'C');
$pdf->SetXY(62, 70);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Area'])), 0, 1, 'C');
$pdf->SetXY(62, 75);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Source'])), 0, 1, 'C');
$pdf->SetXY(62, 80);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(169, 64);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(169, 69.5);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(169, 75);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(169, 80);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Elev'])), 0, 1, 'C');

$pdf->SetXY(260, 64);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(260, 69.5);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(260, 75);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['North'])), 0, 1, 'C');
$pdf->SetXY(260, 80);
$pdf->Cell(30, 6, remove_junk(ucwords($atterberg_limit['East'])), 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 12);
$pdf->SetXY(69, 102);
$pdf->Cell(35, 9, '1', 0, 1, 'C');
$pdf->SetXY(104, 102);
$pdf->Cell(28, 9, '2', 0, 1, 'C');
$pdf->SetXY(132, 102);
$pdf->Cell(24, 9, '3', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 12);
$pdf->SetXY(69, 188);
$pdf->Cell(35, 9, '1', 0, 1, 'C');
$pdf->SetXY(104, 188);
$pdf->Cell(28, 9, '2', 0, 1, 'C');
$pdf->SetXY(132, 188);
$pdf->Cell(24, 9, '3', 0, 1, 'C');

//lIQUID lIMIT

$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(69, 110);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['LL_Blows_1'])), 0, 1, 'C');
$pdf->SetXY(104, 110);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['LL_Blows_2'])), 0, 1, 'C');
$pdf->SetXY(132, 110);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['LL_Blows_3'])), 0, 1, 'C');
$pdf->SetXY(69, 119);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['LL_Container_1'])), 0, 1, 'C');
$pdf->SetXY(104, 119);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['LL_Container_2'])), 0, 1, 'C');
$pdf->SetXY(132, 119);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['LL_Container_3'])), 0, 1, 'C');
$pdf->SetXY(69, 127);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['LL_Wet_Soil_1'])), 0, 1, 'C');
$pdf->SetXY(104, 127);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['LL_Wet_Soil_2'])), 0, 1, 'C');
$pdf->SetXY(132, 127);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['LL_Wet_Soil_3'])), 0, 1, 'C');
$pdf->SetXY(69, 136);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['LL_Dry_soil_tare1'])), 0, 1, 'C');
$pdf->SetXY(104, 136);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['LL_Dry_soil_tare2'])), 0, 1, 'C');
$pdf->SetXY(132, 136);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['LL_Dry_soil_tare3'])), 0, 1, 'C');
$pdf->SetXY(69, 144);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['LL_Water_1'])), 0, 1, 'C');
$pdf->SetXY(104, 144);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['LL_Water_2'])), 0, 1, 'C');
$pdf->SetXY(132, 144);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['LL_Water_3'])), 0, 1, 'C');
$pdf->SetXY(69, 153);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['LL_Tare_1'])), 0, 1, 'C');
$pdf->SetXY(104, 153);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['LL_Tare_2'])), 0, 1, 'C');
$pdf->SetXY(132, 153);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['LL_Tare_3'])), 0, 1, 'C');
$pdf->SetXY(69, 161);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['LL_Wt_Dry_Soil_1'])), 0, 1, 'C');
$pdf->SetXY(104, 161);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['LL_Wt_Dry_Soil_2'])), 0, 1, 'C');
$pdf->SetXY(132, 161);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['LL_Wt_Dry_Soil_3'])), 0, 1, 'C');
$pdf->SetXY(69, 169);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['LL_MC_Porce_1'])), 0, 1, 'C');
$pdf->SetXY(104, 169);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['LL_MC_Porce_2'])), 0, 1, 'C');
$pdf->SetXY(132, 169);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['LL_MC_Porce_3'])), 0, 1, 'C');

// PLASTIC LIMIT

$pdf->SetXY(69, 195);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['PL_Container_1'])), 0, 1, 'C');
$pdf->SetXY(104, 195);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['PL_Container_2'])), 0, 1, 'C');
$pdf->SetXY(132, 195);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['PL_Container_3'])), 0, 1, 'C');
$pdf->SetXY(69, 203);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['PL_Wet_Soil_1'])), 0, 1, 'C');
$pdf->SetXY(104, 203);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['PL_Wet_Soil_2'])), 0, 1, 'C');
$pdf->SetXY(132, 203);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['PL_Wet_Soil_3'])), 0, 1, 'C');
$pdf->SetXY(69, 210);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['PL_Dry_soil_tare1'])), 0, 1, 'C');
$pdf->SetXY(104, 210);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['PL_Dry_soil_tare2'])), 0, 1, 'C');
$pdf->SetXY(132, 210);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['PL_Dry_soil_tare3'])), 0, 1, 'C');
$pdf->SetXY(69, 217);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['PL_Water_1'])), 0, 1, 'C');
$pdf->SetXY(104, 217);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['PL_Water_2'])), 0, 1, 'C');
$pdf->SetXY(132, 217);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['PL_Water_3'])), 0, 1, 'C');
$pdf->SetXY(69, 224);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['PL_Tare_1'])), 0, 1, 'C');
$pdf->SetXY(104, 224);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['PL_Tare_2'])), 0, 1, 'C');
$pdf->SetXY(132, 224);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['PL_Tare_3'])), 0, 1, 'C');
$pdf->SetXY(69, 231);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['PL_Wt_Dry_Soil_1'])), 0, 1, 'C');
$pdf->SetXY(104, 231);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['PL_Wt_Dry_Soil_2'])), 0, 1, 'C');
$pdf->SetXY(132, 231);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['PL_Wt_Dry_Soil_3'])), 0, 1, 'C');
$pdf->SetXY(69, 238.5);
$pdf->Cell(35, 9, remove_junk(ucwords($atterberg_limit['PL_MC_Porce_1'])), 0, 1, 'C');
$pdf->SetXY(104, 238.5);
$pdf->Cell(28, 9, remove_junk(ucwords($atterberg_limit['PL_MC_Porce_2'])), 0, 1, 'C');
$pdf->SetXY(132, 238.5);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['PL_MC_Porce_3'])), 0, 1, 'C');
$pdf->SetXY(69, 246);
$pdf->Cell(87, 7, remove_junk(ucwords($atterberg_limit['PL_Avg_Mc'])), 0, 1, 'C');

// SUMMARY Atteberg Limit Parameter

$pdf->SetXY(320, 102);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['Liquid_Limit_Porce'])), 0, 1, 'C');
$pdf->SetXY(320, 111);
$pdf->Cell(24, 8, remove_junk(ucwords($atterberg_limit['Plastic_Limit_Porce'])), 0, 1, 'C');
$pdf->SetXY(320, 119);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['Plasticity_Index_Porce'])), 0, 1, 'C');
$pdf->SetXY(320, 127);
$pdf->Cell(24, 9, remove_junk(ucwords($atterberg_limit['Liquidity_Index_Porce'])), 0, 1, 'C');
$pdf->SetXY(320, 144);
$pdf->Cell(24, 25, remove_junk(ucwords($atterberg_limit['Classification'])), 0, 1, 'C');

// Laboratory Comments

$pdf->SetXY(284, 179);
$pdf->Cell(60, 68, remove_junk(ucwords($atterberg_limit['Comments'])), 0, 1, 'C');
/*
// GRAFICAS DEL LIMITER
$imageData = $atterberg_limit['Liquid_Limit_Plot'];
$imageFileName1 = 'temp_image1.png'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName1, $imageData);
$pdf->SetXY(157, 92);
$cellWidth = 125;
$cellHeight = 80;
$imagePath1 = "$imageFileName1";
$pdf->Image($imagePath1, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName1);

// GRAFICAS DEL PLASTIC
$imageData = $atterberg_limit['Plasticity_Chart'];
$imageFileName2 = 'temp_image2.png'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la segunda imagen en un archivo temporal
file_put_contents($imageFileName2, $imageData);
$pdf->SetXY(158, 170);
$cellWidth = 125;
$cellHeight = 92;
$imagePath2 = "$imageFileName2";
$pdf->Image($imagePath2, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la segunda imagen
unlink($imageFileName2);
*/
$pdf->Output();
?>