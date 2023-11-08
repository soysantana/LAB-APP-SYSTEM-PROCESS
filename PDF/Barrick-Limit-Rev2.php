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

//variables
$ID = $SeachTable['Sample_ID'];
$Number = $SeachTable['Sample_Number'];

//Project Information
$pdf->SetFont('Arial', '', 9);
$pdf->SetXY(41, 26);
$pdf->Cell(26, 4, 'Pueblo Viejo', 0, 1, 'L');
$pdf->SetXY(41, 30.5);
$pdf->Cell(26, 4.5, '0011-386', 0, 1, 'L');
$pdf->SetXY(41, 35);
$pdf->Cell(26, 5, 'PVDJ2', 0, 1, 'L');
$pdf->SetXY(179, 26);
$pdf->Cell(24, 4, 'PVDJ Lab Soil', 0, 1, 'L');
$pdf->SetXY(179, 30.5);
$pdf->Cell(24, 4.5, $SeachTable['Technician'], 0, 1, 'L');
$pdf->SetXY(179, 35);
$pdf->Cell(24, 4.5, $SeachTable['Standard'], 0, 1, 'L');
$pdf->SetXY(234, 26);
$pdf->Cell(27, 4, $SeachTable['Test_Start_Date'], 0, 1, 'L');
$pdf->SetXY(234, 30.5);
$pdf->Cell(27, 4.5, $SeachTable['Report_Date'], 0, 1, 'L');

//Sample Information
$pdf->SetXY(117, 40);
$pdf->Cell(28, 4, $SeachTable['Nat_Mc'], 0, 1, 'C');
$pdf->SetXY(41, 44.5);
$pdf->Cell(26, 4, $SeachTable['Sample_ID'], 0, 1, 'L');
$pdf->SetXY(41, 49);
$pdf->Cell(26, 4, $SeachTable['Area'], 0, 1, 'L');
$pdf->SetXY(41, 53.5);
$pdf->Cell(26, 4, $SeachTable['Source'], 0, 1, 'L');
$pdf->SetXY(91, 44.5);
$pdf->Cell(25, 4, 'LPF', 0, 1, 'L');
$pdf->SetXY(91, 49);
$pdf->Cell(25, 4, 'AA', 0, 1, 'L');
$pdf->SetXY(91, 53.5);
$pdf->Cell(25, 4, $SeachTable['Sample_Date'], 0, 1, 'L');
$pdf->SetXY(145, 44.5);
$pdf->Cell(34.5, 4, $ID . '-' . $Number, 0, 1, 'L');
$pdf->SetXY(145, 49);
$pdf->Cell(34.5, 4, $SeachTable['Depth_From'], 0, 1, 'L');
$pdf->SetXY(145, 53.5);
$pdf->Cell(34.5, 4, $SeachTable['Depth_To'], 0, 1, 'L');
$pdf->SetXY(203.5, 44.5);
$pdf->Cell(30.5, 4, $SeachTable['North'], 0, 1, 'L');
$pdf->SetXY(203.5, 49);
$pdf->Cell(30.5, 4, $SeachTable['East'], 0, 1, 'L');
$pdf->SetXY(203.5, 53.5);
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

$pdf->SetXY(250, 45.2);
$pdf->Cell(3.5, 3, $SeachTable['MethodOven'], 1, 1, 'L');
$pdf->SetXY(274, 45.2);
$pdf->Cell(3.5, 3, $SeachTable['MethodAir'], 1, 1, 'L');
$pdf->SetXY(257, 49.6);
$pdf->Cell(3.4, 3, '', 1, 1, 'L');
$pdf->SetXY(269, 50);
$pdf->Cell(3.4, 3, '', 1, 1, 'L');
$pdf->SetXY(257, 54);
$pdf->Cell(3.4, 3, '', 1, 1, 'L');
//Liquid Limit
$pdf->SetXY(40.5, 66.8);
$pdf->Cell(27, 4, $SeachTable['LL_Blows_1'], 0, 1, 'C');
$pdf->SetXY(67, 66.8);
$pdf->Cell(24, 4, $SeachTable['LL_Blows_2'], 0, 1, 'C');
$pdf->SetXY(91, 66.8);
$pdf->Cell(25.5, 4, $SeachTable['LL_Blows_3'], 0, 1, 'C');
$pdf->SetXY(40.5, 71);
$pdf->Cell(27, 4, $SeachTable['LL_Container_1'], 0, 1, 'C');
$pdf->SetXY(67, 71);
$pdf->Cell(24, 4, $SeachTable['LL_Container_2'], 0, 1, 'C');
$pdf->SetXY(91, 71);
$pdf->Cell(25.5, 4, $SeachTable['LL_Container_3'], 0, 1, 'C');
$pdf->SetXY(40.5, 75.5);
$pdf->Cell(27, 4, $SeachTable['LL_Wet_Soil_1'], 0, 1, 'C');
$pdf->SetXY(67, 75.5);
$pdf->Cell(24, 4, $SeachTable['LL_Wet_Soil_2'], 0, 1, 'C');
$pdf->SetXY(91, 75.5);
$pdf->Cell(25.5, 4, $SeachTable['LL_Wet_Soil_3'], 0, 1, 'C');
$pdf->SetXY(40.5, 79.5);
$pdf->Cell(27, 4, $SeachTable['LL_Dry_soil_tare1'], 0, 1, 'C');
$pdf->SetXY(67, 79.5);
$pdf->Cell(24, 4, $SeachTable['LL_Dry_soil_tare2'], 0, 1, 'C');
$pdf->SetXY(91, 79.5);
$pdf->Cell(25.5, 4, $SeachTable['LL_Dry_soil_tare3'], 0, 1, 'C');
$pdf->SetXY(40.5, 84);
$pdf->Cell(27, 4, $SeachTable['LL_Water_1'], 0, 1, 'C');
$pdf->SetXY(67, 84);
$pdf->Cell(24, 4, $SeachTable['LL_Water_2'], 0, 1, 'C');
$pdf->SetXY(91, 84);
$pdf->Cell(25.5, 4, $SeachTable['LL_Water_3'], 0, 1, 'C');
$pdf->SetXY(40.5, 88.5);
$pdf->Cell(27, 4, $SeachTable['LL_Tare_1'], 0, 1, 'C');
$pdf->SetXY(67, 88.5);
$pdf->Cell(24, 4, $SeachTable['LL_Tare_2'], 0, 1, 'C');
$pdf->SetXY(91, 88.5);
$pdf->Cell(25.5, 4, $SeachTable['LL_Tare_3'], 0, 1, 'C');
$pdf->SetXY(40.5, 92.5);
$pdf->Cell(27, 7, $SeachTable['LL_Wt_Dry_Soil_1'], 0, 1, 'C');
$pdf->SetXY(67, 92.5);
$pdf->Cell(24, 7, $SeachTable['LL_Wt_Dry_Soil_2'], 0, 1, 'C');
$pdf->SetXY(91, 92.5);
$pdf->Cell(25.5, 7, $SeachTable['LL_Wt_Dry_Soil_3'], 0, 1, 'C');
$pdf->SetXY(40.5, 100);
$pdf->Cell(27, 10, $SeachTable['LL_MC_Porce_1'], 0, 1, 'C');
$pdf->SetXY(67, 100);
$pdf->Cell(24, 10, $SeachTable['LL_MC_Porce_2'], 0, 1, 'C');
$pdf->SetXY(91, 100);
$pdf->Cell(25.5, 10, $SeachTable['LL_MC_Porce_3'], 0, 1, 'C');
//Plastic Limit
$pdf->SetXY(179, 66.8);
$pdf->Cell(24, 4, $SeachTable['PL_Container_1'], 0, 1, 'C');
$pdf->SetXY(203, 66.8);
$pdf->Cell(31, 4, $SeachTable['PL_Container_2'], 0, 1, 'C');
$pdf->SetXY(234, 66.8);
$pdf->Cell(27, 4, $SeachTable['PL_Container_3'], 0, 1, 'C');
$pdf->SetXY(179, 71);
$pdf->Cell(24, 4, $SeachTable['PL_Wet_Soil_1'], 0, 1, 'C');
$pdf->SetXY(203, 71);
$pdf->Cell(31, 4, $SeachTable['PL_Wet_Soil_2'], 0, 1, 'C');
$pdf->SetXY(234, 71);
$pdf->Cell(27, 4, $SeachTable['PL_Wet_Soil_3'], 0, 1, 'C');
$pdf->SetXY(179, 75.5);
$pdf->Cell(24, 4, $SeachTable['PL_Dry_soil_tare1'], 0, 1, 'C');
$pdf->SetXY(203, 75.5);
$pdf->Cell(31, 4, $SeachTable['PL_Dry_soil_tare2'], 0, 1, 'C');
$pdf->SetXY(234, 75.5);
$pdf->Cell(27, 4, $SeachTable['PL_Dry_soil_tare3'], 0, 1, 'C');
$pdf->SetXY(179, 79.5);
$pdf->Cell(24, 4, $SeachTable['PL_Water_1'], 0, 1, 'C');
$pdf->SetXY(203, 79.5);
$pdf->Cell(31, 4, $SeachTable['PL_Water_2'], 0, 1, 'C');
$pdf->SetXY(234, 79.5);
$pdf->Cell(27, 4, $SeachTable['PL_Water_3'], 0, 1, 'C');
$pdf->SetXY(179, 84);
$pdf->Cell(24, 4, $SeachTable['PL_Tare_1'], 0, 1, 'C');
$pdf->SetXY(203, 84);
$pdf->Cell(31, 4, $SeachTable['PL_Tare_2'], 0, 1, 'C');
$pdf->SetXY(234, 84);
$pdf->Cell(27, 4, $SeachTable['PL_Tare_3'], 0, 1, 'C');
$pdf->SetXY(179, 88.5);
$pdf->Cell(24, 4, $SeachTable['PL_Wt_Dry_Soil_1'], 0, 1, 'C');
$pdf->SetXY(203, 88.5);
$pdf->Cell(31, 4, $SeachTable['PL_Wt_Dry_Soil_2'], 0, 1, 'C');
$pdf->SetXY(234, 88.5);
$pdf->Cell(27, 4, $SeachTable['PL_Wt_Dry_Soil_3'], 0, 1, 'C');
$pdf->SetXY(179, 92.5);
$pdf->Cell(24, 7, $SeachTable['PL_MC_Porce_1'], 0, 1, 'C');
$pdf->SetXY(203, 92.5);
$pdf->Cell(31, 7, $SeachTable['PL_MC_Porce_2'], 0, 1, 'C');
$pdf->SetXY(234, 92.5);
$pdf->Cell(27, 7, $SeachTable['PL_MC_Porce_3'], 0, 1, 'C');
$pdf->SetXY(179, 100);
$pdf->Cell(82, 10, $SeachTable['PL_Avg_Mc'], 0, 1, 'C');
//Index Liquid & Plastic
$pdf->SetXY(29, 110);
$pdf->Cell(38, 3, $SeachTable['Liquid_Limit_Porce'], 0, 1, 'C');
$pdf->SetXY(91, 110);
$pdf->Cell(38, 3, $SeachTable['Plastic_Limit_Porce'], 0, 1, 'C');
$pdf->SetXY(173, 110);
$pdf->Cell(30, 3, $SeachTable['Plasticity_Index_Porce'], 0, 1, 'C');
$pdf->SetXY(230, 110);
$pdf->Cell(33, 3, $SeachTable['Liquidity_Index_Porce'], 0, 1, 'C');
//Comparison Information
$pdf->SetXY(145, 122.5);
$pdf->Cell(34, 4, $SeachTable['Liquid_Limit_Porce'], 0, 1, 'C');
$pdf->SetXY(145, 127);
$pdf->Cell(34, 4, $SeachTable['Plastic_Limit_Porce'], 0, 1, 'C');
$pdf->SetXY(145, 131);
$pdf->Cell(34, 5, $SeachTable['Plasticity_Index_Porce'], 0, 1, 'C');
$pdf->SetXY(145, 136);
$pdf->Cell(34, 4, $SeachTable['Liquidity_Index_Porce'], 0, 1, 'C');
$pdf->SetXY(117, 143);
$pdf->Cell(117, 50, $SeachTable['Comments'], 0, 1, 'C');
$pdf->SetXY(204, 194);
$pdf->Cell(30, 8, $SeachTable['Classification'], 0, 1, 'C');

$pdf->Output();
?>