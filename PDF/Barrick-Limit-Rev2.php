<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$SeachTable= find_by_id('atterberg_limit', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('L', array(290, 230));

// Importar una página de otro PDF
$pdf->setSourceFile('Barrick-Atterberg Limits.pdf'); 
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

//Project Information
$pdf->SetFont('Arial', '', 9);
$pdf->SetXY(42, 26);
$pdf->Cell(26, 4, 'Pueblo Viejo', 0, 1, 'L');
$pdf->SetXY(42, 30.5);
$pdf->Cell(26, 4.5, '0011-386', 1, 1, 'L');
$pdf->SetXY(42, 35);
$pdf->Cell(26, 5, 'PVDJ2', 0, 1, 'L');
$pdf->SetXY(178.5, 26);
$pdf->Cell(24, 4, 'PVDJ Lab Soil', 0, 1, 'L');
$pdf->SetXY(178.5, 30.5);
$pdf->Cell(24, 4.5, $SeachTable['Technician'], 0, 1, 'L');
$pdf->SetXY(178.5, 35);
$pdf->Cell(24, 4.5, $SeachTable['Standard'], 0, 1, 'L');
$pdf->SetXY(233, 26);
$pdf->Cell(27, 4, $SeachTable['Test_Start_Date'], 0, 1, 'L');
$pdf->SetXY(233, 30.5);
$pdf->Cell(27, 4.5, $SeachTable['Report_Date'], 0, 1, 'L');

//Sample Information
$pdf->SetXY(116, 40);
$pdf->Cell(28, 4, $SeachTable['Nat_Mc'], 0, 1, 'C');
$pdf->SetXY(42, 44.5);
$pdf->Cell(26, 4, 'SD2-S13', 0, 1, 'L');
$pdf->SetXY(42, 49);
$pdf->Cell(26, 4, 'CORE-LA', 0, 1, 'L');
$pdf->SetXY(42, 53.5);
$pdf->Cell(26, 4, 'T-25', 0, 1, 'L');
$pdf->SetXY(92, 44.5);
$pdf->Cell(24, 4, 'LPF', 0, 1, 'L');
$pdf->SetXY(92, 49);
$pdf->Cell(24, 4, 'AA', 0, 1, 'L');
$pdf->SetXY(92, 53.5);
$pdf->Cell(24, 4, $SeachTable['Sample_Date'], 0, 1, 'L');
$pdf->SetXY(144, 44.5);
$pdf->Cell(34.5, 4, 'SD2-S13-061', 0, 1, 'L');
$pdf->SetXY(144, 49);
$pdf->Cell(34.5, 4, $SeachTable['Depth_From'], 0, 1, 'L');
$pdf->SetXY(144, 53.5);
$pdf->Cell(34.5, 4, $SeachTable['Depth_To'], 0, 1, 'L');
$pdf->SetXY(202.5, 44.5);
$pdf->Cell(30.5, 4, $SeachTable['North'], 0, 1, 'L');
$pdf->SetXY(202.5, 49);
$pdf->Cell(30.5, 4, $SeachTable['East'], 0, 1, 'L');
$pdf->SetXY(202.5, 53.5);
$pdf->Cell(30.5, 4, $SeachTable['Elev'], 0, 1, 'L');

//Testing Information
if ($SeachTable['Preparation_Method'] == 'Oven_Dried') {
    $SeachTable['MethodOven'] = 'x';
    $SeachTable['MethodAir'] = '';
} elseif ($SeachTable['Preparation_Method'] == 'Air_Dried') {
    $SeachTable['MethodOven'] = '';
    $SeachTable['MethodAir'] = 'x';
} else {
    // En caso de otro valor, asignar un valor por defecto
    $SeachTable['MethodOven'] = '';
    $SeachTable['MethodAir'] = '';
}

$pdf->SetXY(249.2, 45.2);
$pdf->Cell(3.5, 3, $SeachTable['MethodOven'], 0, 1, 'L');
$pdf->SetXY(273, 45.2);
$pdf->Cell(3.5, 3, $SeachTable['MethodAir'], 0, 1, 'L');
$pdf->SetXY(255.7, 49.6);
$pdf->Cell(3.4, 3, '', 0, 1, 'L');
$pdf->SetXY(268, 50);
$pdf->Cell(3.4, 3, '', 0, 1, 'L');
$pdf->SetXY(255.7, 54);
$pdf->Cell(3.4, 3, '', 0, 1, 'L');
//Liquid Limit
$pdf->SetXY(42, 66.8);
$pdf->Cell(26, 4, $SeachTable['LL_Blows_1'], 0, 1, 'C');
$pdf->SetXY(68, 66.8);
$pdf->Cell(24, 4, $SeachTable['LL_Blows_2'], 0, 1, 'C');
$pdf->SetXY(92, 66.8);
$pdf->Cell(24, 4, $SeachTable['LL_Blows_3'], 0, 1, 'C');
$pdf->SetXY(42, 71);
$pdf->Cell(26, 4, $SeachTable['LL_Container_1'], 0, 1, 'C');
$pdf->SetXY(68, 71);
$pdf->Cell(24, 4, $SeachTable['LL_Container_2'], 0, 1, 'C');
$pdf->SetXY(92, 71);
$pdf->Cell(24, 4, $SeachTable['LL_Container_3'], 0, 1, 'C');
$pdf->SetXY(42, 75.5);
$pdf->Cell(26, 4, $SeachTable['LL_Wet_Soil_1'], 0, 1, 'C');
$pdf->SetXY(68, 75.5);
$pdf->Cell(24, 4, $SeachTable['LL_Wet_Soil_2'], 0, 1, 'C');
$pdf->SetXY(92, 75.5);
$pdf->Cell(24, 4, $SeachTable['LL_Wet_Soil_3'], 0, 1, 'C');
$pdf->SetXY(42, 79.5);
$pdf->Cell(26, 4, $SeachTable['LL_Dry_soil_tare1'], 0, 1, 'C');
$pdf->SetXY(68, 79.5);
$pdf->Cell(24, 4, $SeachTable['LL_Dry_soil_tare2'], 0, 1, 'C');
$pdf->SetXY(92, 79.5);
$pdf->Cell(24, 4, $SeachTable['LL_Dry_soil_tare3'], 0, 1, 'C');
$pdf->SetXY(42, 84);
$pdf->Cell(26, 4, $SeachTable['LL_Water_1'], 0, 1, 'C');
$pdf->SetXY(68, 84);
$pdf->Cell(24, 4, $SeachTable['LL_Water_2'], 0, 1, 'C');
$pdf->SetXY(92, 84);
$pdf->Cell(24, 4, $SeachTable['LL_Water_3'], 0, 1, 'C');
$pdf->SetXY(42, 88.5);
$pdf->Cell(26, 4, $SeachTable['LL_Tare_1'], 0, 1, 'C');
$pdf->SetXY(68, 88.5);
$pdf->Cell(24, 4, $SeachTable['LL_Tare_2'], 0, 1, 'C');
$pdf->SetXY(92, 88.5);
$pdf->Cell(24, 4, $SeachTable['LL_Tare_3'], 0, 1, 'C');
$pdf->SetXY(42, 92.5);
$pdf->Cell(26, 7, $SeachTable['LL_Wt_Dry_Soil_1'], 0, 1, 'C');
$pdf->SetXY(68, 92.5);
$pdf->Cell(24, 7, $SeachTable['LL_Wt_Dry_Soil_2'], 0, 1, 'C');
$pdf->SetXY(92, 92.5);
$pdf->Cell(24, 7, $SeachTable['LL_Wt_Dry_Soil_3'], 0, 1, 'C');
$pdf->SetXY(42, 100);
$pdf->Cell(26, 10, $SeachTable['LL_MC_Porce_1'], 0, 1, 'C');
$pdf->SetXY(68, 100);
$pdf->Cell(24, 10, $SeachTable['LL_MC_Porce_2'], 0, 1, 'C');
$pdf->SetXY(92, 100);
$pdf->Cell(24, 10, $SeachTable['LL_MC_Porce_3'], 0, 1, 'C');
//Plastic Limit
$pdf->SetXY(179, 66.8);
$pdf->Cell(24, 4, $SeachTable['LL_Blows_1'], 0, 1, 'C');
$pdf->SetXY(203, 66.8);
$pdf->Cell(30, 4, $SeachTable['LL_Blows_2'], 0, 1, 'C');
$pdf->SetXY(233, 66.8);
$pdf->Cell(27, 4, $SeachTable['LL_Blows_3'], 0, 1, 'C');
$pdf->SetXY(179, 71);
$pdf->Cell(24, 4, $SeachTable['LL_Container_1'], 0, 1, 'C');
$pdf->SetXY(203, 71);
$pdf->Cell(30, 4, $SeachTable['LL_Container_2'], 0, 1, 'C');
$pdf->SetXY(233, 71);
$pdf->Cell(27, 4, $SeachTable['LL_Container_3'], 0, 1, 'C');
$pdf->SetXY(179, 75.5);
$pdf->Cell(24, 4, $SeachTable['LL_Wet_Soil_1'], 0, 1, 'C');
$pdf->SetXY(203, 75.5);
$pdf->Cell(30, 4, $SeachTable['LL_Wet_Soil_2'], 0, 1, 'C');
$pdf->SetXY(233, 75.5);
$pdf->Cell(27, 4, $SeachTable['LL_Wet_Soil_3'], 0, 1, 'C');
$pdf->SetXY(179, 79.5);
$pdf->Cell(24, 4, $SeachTable['LL_Dry_soil_tare1'], 0, 1, 'C');
$pdf->SetXY(203, 79.5);
$pdf->Cell(30, 4, $SeachTable['LL_Dry_soil_tare2'], 0, 1, 'C');
$pdf->SetXY(233, 79.5);
$pdf->Cell(27, 4, $SeachTable['LL_Dry_soil_tare3'], 0, 1, 'C');
$pdf->SetXY(179, 84);
$pdf->Cell(24, 4, $SeachTable['LL_Water_1'], 0, 1, 'C');
$pdf->SetXY(203, 84);
$pdf->Cell(30, 4, $SeachTable['LL_Water_2'], 0, 1, 'C');
$pdf->SetXY(233, 84);
$pdf->Cell(27, 4, $SeachTable['LL_Water_3'], 0, 1, 'C');
$pdf->SetXY(179, 88.5);
$pdf->Cell(24, 4, $SeachTable['LL_Tare_1'], 0, 1, 'C');
$pdf->SetXY(203, 88.5);
$pdf->Cell(30, 4, $SeachTable['LL_Tare_2'], 0, 1, 'C');
$pdf->SetXY(233, 88.5);
$pdf->Cell(27, 4, $SeachTable['LL_Tare_3'], 0, 1, 'C');
$pdf->SetXY(179, 92.5);
$pdf->Cell(24, 7, $SeachTable['LL_Wt_Dry_Soil_1'], 0, 1, 'C');
$pdf->SetXY(203, 92.5);
$pdf->Cell(30, 7, $SeachTable['LL_Wt_Dry_Soil_2'], 0, 1, 'C');
$pdf->SetXY(233, 92.5);
$pdf->Cell(27, 7, $SeachTable['LL_Wt_Dry_Soil_3'], 0, 1, 'C');
$pdf->SetXY(179, 100);
$pdf->Cell(24, 10, $SeachTable['LL_MC_Porce_1'], 0, 1, 'C');
$pdf->SetXY(203, 100);
$pdf->Cell(30, 10, $SeachTable['LL_MC_Porce_2'], 0, 1, 'C');
$pdf->SetXY(233, 100);
$pdf->Cell(27, 10, $SeachTable['LL_MC_Porce_3'], 0, 1, 'C');
//Index Liquid & Plastic
$pdf->SetXY(30, 110);
$pdf->Cell(38, 3, $SeachTable['Liquid_Limit_Porce'], 0, 1, 'C');
$pdf->SetXY(92, 110);
$pdf->Cell(38, 3, $SeachTable['Plastic_Limit_Porce'], 0, 1, 'C');
$pdf->SetXY(172, 110);
$pdf->Cell(30, 3, $SeachTable['Plasticity_Index_Porce'], 0, 1, 'C');
$pdf->SetXY(229, 110);
$pdf->Cell(33, 3, $SeachTable['Liquidity_Index_Porce'], 0, 1, 'C');
//Comparison Information
$pdf->SetXY(144, 122.5);
$pdf->Cell(34, 4, $SeachTable['Liquid_Limit_Porce'], 0, 1, 'C');
$pdf->SetXY(144, 127);
$pdf->Cell(34, 4, $SeachTable['Plastic_Limit_Porce'], 0, 1, 'C');
$pdf->SetXY(144, 131);
$pdf->Cell(34, 5, $SeachTable['Plasticity_Index_Porce'], 0, 1, 'C');
$pdf->SetXY(144, 136);
$pdf->Cell(34, 4, $SeachTable['Liquidity_Index_Porce'], 0, 1, 'C');
$pdf->SetXY(116, 143);
$pdf->Cell(117, 50, $SeachTable['Comments'], 0, 1, 'C');
$pdf->SetXY(203, 194);
$pdf->Cell(30, 8, $SeachTable['Classification'], 0, 1, 'C');

$pdf->Output();
?>