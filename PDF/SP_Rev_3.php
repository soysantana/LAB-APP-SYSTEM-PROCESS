<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$sp = find_by_id('standard_proctor', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(380, 310));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-83538_SP_Rev. 3.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(45, 41);
$pdf->Cell(30, 5, remove_junk(ucwords($sp['Technician'])), 0, 1, 'C');
$pdf->SetXY(45, 47);
$pdf->Cell(30, 5, "nose", 0, 1, 'C');

$pdf->SetXY(148, 34);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Standard'])), 0, 1, 'C');
$pdf->SetXY(148, 41);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(148, 47);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(220, 31);
//$pdf->Cell(30, 6, remove_junk(ucwords($sp['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(220, 40);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(220, 46);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Split_Method'])), 0, 1, 'C');
$pdf->SetXY(220, 56);
//$pdf->Cell(30, 6, remove_junk(ucwords($sp['Test_Device'])), 0, 1, 'C');

$pdf->SetXY(50, 61);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Structure'])), 0, 1, 'C');
$pdf->SetXY(50, 66);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Area'])), 0, 1, 'C');
$pdf->SetXY(50, 71);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Source'])), 0, 1, 'C');
$pdf->SetXY(50, 76);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Material_Type'])), 0, 1, 'C');
$pdf->SetXY(50, 81);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['SG_NMC'])), 0, 1, 'C');

$pdf->SetXY(148, 61);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(148, 66);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(148, 71);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(148, 76);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Elev'])), 0, 1, 'C');
$pdf->SetXY(148, 81);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Natural_MC'])), 0, 1, 'C');

$pdf->SetXY(220, 61);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(220, 66);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(220, 71);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['North'])), 0, 1, 'C');
$pdf->SetXY(220, 76);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['East'])), 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);

//Testing Information
$pdf->SetXY(81, 102);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['Wt_Wet_Soil_Mold_1'])), 0, 1, 'C');
$pdf->SetXY(106, 102);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Wt_Wet_Soil_Mold_2'])), 0, 1, 'C');
$pdf->SetXY(136, 102);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['Wt_Wet_Soil_Mold_3'])), 0, 1, 'C');
$pdf->SetXY(163, 102);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['Wt_Wet_Soil_Mold_4'])), 0, 1, 'C');
$pdf->SetXY(189, 102);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Wt_Wet_Soil_Mold_5'])), 0, 1, 'C');
$pdf->SetXY(213, 102);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Wt_Wet_Soil_Mold_6'])), 0, 1, 'C');

$pdf->SetXY(81, 108.5);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['Wt_Mold_g_1'])), 0, 1, 'C');
$pdf->SetXY(106, 108.5);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Wt_Mold_g_2'])), 0, 1, 'C');
$pdf->SetXY(136, 108.5);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['Wt_Mold_g_3'])), 0, 1, 'C');
$pdf->SetXY(163, 108.5);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['Wt_Mold_g_4'])), 0, 1, 'C');
$pdf->SetXY(189, 108.5);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Wt_Mold_g_5'])), 0, 1, 'C');
$pdf->SetXY(213, 108.5);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Wt_Mold_g_6'])), 0, 1, 'C');

$pdf->SetXY(81, 115);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['Wt_Wet_Soil_g_1'])), 0, 1, 'C');
$pdf->SetXY(106, 115);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Wt_Wet_Soil_g_2'])), 0, 1, 'C');
$pdf->SetXY(136, 115);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['Wt_Wet_Soil_g_3'])), 0, 1, 'C');
$pdf->SetXY(163, 115);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['Wt_Wet_Soil_g_4'])), 0, 1, 'C');
$pdf->SetXY(189, 115);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Wt_Wet_Soil_g_5'])), 0, 1, 'C');
$pdf->SetXY(213, 115);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Wt_Wet_Soil_g_6'])), 0, 1, 'C');

$pdf->SetXY(81, 121);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['Vol_Mold_cm3_1'])), 0, 1, 'C');
$pdf->SetXY(106, 121);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Vol_Mold_cm3_2'])), 0, 1, 'C');
$pdf->SetXY(136, 121);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['Vol_Mold_cm3_3'])), 0, 1, 'C');
$pdf->SetXY(163, 121);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['Vol_Mold_cm3_4'])), 0, 1, 'C');
$pdf->SetXY(189, 121);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Vol_Mold_cm3_5'])), 0, 1, 'C');
$pdf->SetXY(213, 121);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Vol_Mold_cm3_6'])), 0, 1, 'C');

$pdf->SetXY(81, 127.5);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['Wet_Density_kgm3_1'])), 0, 1, 'C');
$pdf->SetXY(106, 127.5);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Wet_Density_kgm3_2'])), 0, 1, 'C');
$pdf->SetXY(136, 127.5);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['Wet_Density_kgm3_3'])), 0, 1, 'C');
$pdf->SetXY(163, 127.5);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['Wet_Density_kgm3_4'])), 0, 1, 'C');
$pdf->SetXY(189, 127.5);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Wet_Density_kgm3_5'])), 0, 1, 'C');
$pdf->SetXY(213, 127.5);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Wet_Density_kgm3_6'])), 0, 1, 'C');

$pdf->SetXY(81, 133.5);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['Dry_Density_kgm3_1'])), 0, 1, 'C');
$pdf->SetXY(106, 133.5);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Dry_Density_kgm3_2'])), 0, 1, 'C');
$pdf->SetXY(136, 133.5);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['Dry_Density_kgm3_3'])), 0, 1, 'C');
$pdf->SetXY(163, 133.5);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['Dry_Density_kgm3_4'])), 0, 1, 'C');
$pdf->SetXY(189, 133.5);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Dry_Density_kgm3_5'])), 0, 1, 'C');
$pdf->SetXY(213, 133.5);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Dry_Density_kgm3_6'])), 0, 1, 'C');

$pdf->SetXY(81, 140);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['Dry_Density_Corrected_kgm3_1'])), 0, 1, 'C');
$pdf->SetXY(106, 140);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Dry_Density_Corrected_kgm3_2'])), 0, 1, 'C');
$pdf->SetXY(136, 140);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['Dry_Density_Corrected_kgm3_3'])), 0, 1, 'C');
$pdf->SetXY(163, 140);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['Dry_Density_Corrected_kgm3_4'])), 0, 1, 'C');
$pdf->SetXY(189, 140);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Dry_Density_Corrected_kgm3_5'])), 0, 1, 'C');
$pdf->SetXY(213, 140);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Dry_Density_Corrected_kgm3_6'])), 0, 1, 'C');

//Information Table
$pdf->SetXY(81, 155);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['MC_Container_1'])), 0, 1, 'C');
$pdf->SetXY(106, 155);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['MC_Container_2'])), 0, 1, 'C');
$pdf->SetXY(136, 155);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['MC_Container_3'])), 0, 1, 'C');
$pdf->SetXY(163, 155);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['MC_Container_4'])), 0, 1, 'C');
$pdf->SetXY(189, 155);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['MC_Container_5'])), 0, 1, 'C');
$pdf->SetXY(213, 155);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['MC_Container_6'])), 0, 1, 'C');

$pdf->SetXY(81, 160);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['MC_Wt_Wet_Soil_Tare_1'])), 0, 1, 'C');
$pdf->SetXY(106, 160);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['MC_Wt_Wet_Soil_Tare_2'])), 0, 1, 'C');
$pdf->SetXY(136, 160);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['MC_Wt_Wet_Soil_Tare_3'])), 0, 1, 'C');
$pdf->SetXY(163, 160);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['MC_Wt_Wet_Soil_Tare_4'])), 0, 1, 'C');
$pdf->SetXY(189, 160);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['MC_Wt_Wet_Soil_Tare_5'])), 0, 1, 'C');
$pdf->SetXY(213, 160);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['MC_Wt_Wet_Soil_Tare_6'])), 0, 1, 'C');

$pdf->SetXY(81, 165);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['MC_Wt_Dry_Soil_g_1'])), 0, 1, 'C');
$pdf->SetXY(106, 165);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['MC_Wt_Dry_Soil_g_2'])), 0, 1, 'C');
$pdf->SetXY(136, 165);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['MC_Wt_Dry_Soil_g_3'])), 0, 1, 'C');
$pdf->SetXY(163, 165);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['MC_Wt_Dry_Soil_g_4'])), 0, 1, 'C');
$pdf->SetXY(189, 165);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['MC_Wt_Dry_Soil_g_5'])), 0, 1, 'C');
$pdf->SetXY(213, 165);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['MC_Wt_Dry_Soil_g_6'])), 0, 1, 'C');

$pdf->SetXY(81, 170);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['Wt_Water_g_1'])), 0, 1, 'C');
$pdf->SetXY(106, 170);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Wt_Water_g_2'])), 0, 1, 'C');
$pdf->SetXY(136, 170);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['Wt_Water_g_3'])), 0, 1, 'C');
$pdf->SetXY(163, 170);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['Wt_Water_g_4'])), 0, 1, 'C');
$pdf->SetXY(189, 170);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Wt_Water_g_5'])), 0, 1, 'C');
$pdf->SetXY(213, 170);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Wt_Water_g_6'])), 0, 1, 'C');

$pdf->SetXY(81, 175);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['Tare_g_1'])), 0, 1, 'C');
$pdf->SetXY(106, 175);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['Tare_g_2'])), 0, 1, 'C');
$pdf->SetXY(136, 175);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['Tare_g_3'])), 0, 1, 'C');
$pdf->SetXY(163, 175);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['Tare_g_4'])), 0, 1, 'C');
$pdf->SetXY(189, 175);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Tare_g_5'])), 0, 1, 'C');
$pdf->SetXY(213, 175);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['Tare_g_6'])), 0, 1, 'C');

$pdf->SetXY(81, 180);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['MC_Wt_Dry_Soil_g_1'])), 0, 1, 'C');
$pdf->SetXY(106, 180);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['MC_Wt_Dry_Soil_g_2'])), 0, 1, 'C');
$pdf->SetXY(136, 180);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['MC_Wt_Dry_Soil_g_3'])), 0, 1, 'C');
$pdf->SetXY(163, 180);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['MC_Wt_Dry_Soil_g_4'])), 0, 1, 'C');
$pdf->SetXY(189, 180);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['MC_Wt_Dry_Soil_g_5'])), 0, 1, 'C');
$pdf->SetXY(213, 180);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['MC_Wt_Dry_Soil_g_6'])), 0, 1, 'C');

$pdf->SetXY(81, 185);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['MC_Porce_1'])), 0, 1, 'C');
$pdf->SetXY(106, 185);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['MC_Porce_2'])), 0, 1, 'C');
$pdf->SetXY(136, 185);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['MC_Porce_3'])), 0, 1, 'C');
$pdf->SetXY(163, 185);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['MC_Porce_4'])), 0, 1, 'C');
$pdf->SetXY(189, 185);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['MC_Porce_5'])), 0, 1, 'C');
$pdf->SetXY(213, 185);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['MC_Porce_6'])), 0, 1, 'C');

$pdf->SetXY(81, 190);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['MC_Porce_Corrected_1'])), 0, 1, 'C');
$pdf->SetXY(106, 190);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['MC_Porce_Corrected_2'])), 0, 1, 'C');
$pdf->SetXY(136, 190);
$pdf->Cell(27, 6, remove_junk(ucwords($sp['MC_Porce_Corrected_3'])), 0, 1, 'C');
$pdf->SetXY(163, 190);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['MC_Porce_Corrected_4'])), 0, 1, 'C');
$pdf->SetXY(189, 190);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['MC_Porce_Corrected_5'])), 0, 1, 'C');
$pdf->SetXY(213, 190);
$pdf->Cell(24, 6, remove_junk(ucwords($sp['MC_Porce_Corrected_6'])), 0, 1, 'C');

$pdf->SetXY(81, 196);
$pdf->Cell(25, 6, remove_junk(ucwords($sp['Max_Dry_Density_kgm3'])), 0, 1, 'C');
$pdf->SetXY(163, 196);
$pdf->Cell(26, 6, remove_junk(ucwords($sp['Optimun_MC_Porce'])), 0, 1, 'C');

$pdf->SetXY(106, 214);
$pdf->Cell(30, 9, remove_junk(ucwords($sp['Corrected_Dry_Unit_Weigt'])), 0, 1, 'C');
$pdf->SetXY(106, 223);
$pdf->Cell(30, 8, remove_junk(ucwords($sp['Corrected_Water_Content_Finer'])), 0, 1, 'C');

$pdf->SetXY(106, 230);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['YDF_Porce'])), 0, 1, 'C');

$pdf->SetXY(106, 236);
$pdf->Cell(30, 6, remove_junk(ucwords($sp['PF_Porce'])), 0, 1, 'C');

$pdf->SetXY(106, 242);
$pdf->Cell(30, 5, remove_junk(ucwords($sp['YDT_Porce'])), 0, 1, 'C');

$pdf->SetXY(53, 231);
$pdf->Cell(28, 5, remove_junk(ucwords($sp['Wc_Porce'])), 0, 1, 'C');

$pdf->SetXY(53, 236);
$pdf->Cell(28, 5, remove_junk(ucwords($sp['PC_Porce'])), 0, 1, 'C');

$pdf->SetXY(53, 242);
$pdf->Cell(28, 5, remove_junk(ucwords($sp['GM_Porce'])), 0, 1, 'C');

$pdf->SetXY(53, 247);
$pdf->Cell(28, 5, remove_junk(ucwords($sp['Yw_KnM3'])), 0, 1, 'C');

$pdf->SetXY(163, 206);
$pdf->Cell(104, 46, remove_junk(ucwords($sp['Comments'])), 0, 1, 'C');

// PIC SP 
$imageData = $sp['SP_Graphic'];
$imageFileName1 = 'temp_image1.png';
file_put_contents($imageFileName1, $imageData);
$pdf->SetXY(70, 256);
$cellWidth = 150;
$cellHeight = 90;
$imagePath1 = "$imageFileName1";
$pdf->Image($imagePath1, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 1, 1, 'C');

unlink($imageFileName1);

$pdf->Output();
?>