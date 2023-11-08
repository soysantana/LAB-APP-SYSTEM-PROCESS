<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$SeachTable= find_by_id('standard_proctor', (int)$_GET['id']);

// Función para reemplazar 0 con un valor vacío
function replaceZeroWithEmpty($value) {
    return ($value == 0) ? '' : $value;
}

// Aplica la función de reemplazo a cada valor en el arreglo $SeachTable
foreach ($SeachTable as $key => $value) {
    $SeachTable[$key] = replaceZeroWithEmpty($value);
}

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('L', array(630, 380));

// Importar una página de otro PDF
$pdf->setSourceFile('Barrick-Standard-Proctor.pdf'); 
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

//variables
$ID = $SeachTable['Sample_ID'];
$Number = $SeachTable['Sample_Number'];
$From = $SeachTable['Depth_From'];
$To = $SeachTable['Depth_To'];

//Project Information
$pdf->SetFont('Arial', '', 9);
$pdf->SetXY(94.4, 34);
$pdf->Cell(40, 5, 'Pueblo Viejo', 0, 1, 'L');
$pdf->SetXY(94.4, 39);
$pdf->Cell(40, 5, '0011-386', 0, 1, 'L');
$pdf->SetXY(94.4, 44);
$pdf->Cell(40, 5, 'Barrick', 0, 1, 'L');
//Sample Information
$pdf->SetXY(169.5, 34);
$pdf->Cell(36, 5, $SeachTable['Sample_ID'], 0, 1, 'L');
$pdf->SetXY(169.5, 39);
$pdf->Cell(36, 5, $SeachTable['Area'], 0, 1, 'L');
$pdf->SetXY(169.5, 44);
$pdf->Cell(36, 5, $SeachTable['Source'], 0, 1, 'L');
$pdf->SetXY(238, 34);
$pdf->Cell(39, 5, $ID . '-' . $Number, 0, 1, 'L');
$pdf->SetXY(238, 39);
$pdf->Cell(39, 5, $SeachTable['Material_Type'], 0, 1, 'L');
$pdf->SetXY(238, 44);
$pdf->Cell(39, 5, $From . ' - ' . $To, 0, 1, 'L');
$pdf->SetXY(309.5, 34);
$pdf->Cell(40, 5, $SeachTable['North'], 0, 1, 'L');
$pdf->SetXY(309.5, 39);
$pdf->Cell(40, 5, $SeachTable['East'], 0, 1, 'L');
$pdf->SetXY(309.5, 44);
$pdf->Cell(40, 5, $SeachTable['Elev'], 0, 1, 'L');
$pdf->SetXY(382, 34);
$pdf->Cell(33, 5, $SeachTable['Sample_Date'], 0, 1, 'L');
$pdf->SetXY(382, 39);
$pdf->Cell(33, 5, 'MS', 0, 1, 'L');
//Laboratory Information
$pdf->SetXY(480, 34);
$pdf->Cell(27, 5, 'PVDJ Soil Lab', 0, 1, 'L');
$pdf->SetXY(480, 39);
$pdf->Cell(27, 5, $SeachTable['Technician'], 0, 1, 'L');
$pdf->SetXY(480, 44);
$pdf->Cell(27, 5, $SeachTable['Standard'], 0, 1, 'L');
$pdf->SetXY(540, 34);
$pdf->Cell(32, 5, 'A', 0, 1, 'L');
$pdf->SetXY(540, 39);
$pdf->Cell(32, 5, $SeachTable['Test_Start_Date'], 0, 1, 'L');
$pdf->SetXY(540, 44);
$pdf->Cell(32, 5, $SeachTable['Report_Date'], 0, 1, 'L');
//Testing Information
$pdf->SetXY(94.4, 54);
$pdf->Cell(40, 5, $SeachTable['Natural_MC'], 0, 1, 'C');
$pdf->SetXY(94.4, 59);
$pdf->Cell(40, 7, $SeachTable['SG_NMC'], 0, 1, 'C');
$pdf->SetXY(205, 54);
$pdf->Cell(33, 5, 'Moist', 0, 1, 'C');
$pdf->SetXY(205, 59);
$pdf->Cell(33, 7, 'Mach', 0, 1, 'C');
//
$pdf->SetXY(94.4, 80.5);
$pdf->Cell(40, 6, $SeachTable['Wt_Wet_Soil_Mold_1'], 0, 1, 'C');
$pdf->SetXY(134.5, 80.5);
$pdf->Cell(35, 6, $SeachTable['Wt_Wet_Soil_Mold_2'], 0, 1, 'C');
$pdf->SetXY(169.5, 80.5);
$pdf->Cell(35.5, 6, $SeachTable['Wt_Wet_Soil_Mold_3'], 0, 1, 'C');
$pdf->SetXY(205, 80.5);
$pdf->Cell(32.5, 6, $SeachTable['Wt_Wet_Soil_Mold_4'], 0, 1, 'C');
$pdf->SetXY(237.5, 80.5);
$pdf->Cell(39.5, 6, $SeachTable['Wt_Wet_Soil_Mold_5'], 0, 1, 'C');
$pdf->SetXY(277, 80.5);
$pdf->Cell(32.5, 6, $SeachTable['Wt_Wet_Soil_Mold_6'], 0, 1, 'C');

$pdf->SetXY(94.4, 87);
$pdf->Cell(40, 5, $SeachTable['Wt_Mold_g_1'], 0, 1, 'C');
$pdf->SetXY(134.5, 87);
$pdf->Cell(35, 5, $SeachTable['Wt_Mold_g_2'], 0, 1, 'C');
$pdf->SetXY(169.5, 87);
$pdf->Cell(35.5, 5, $SeachTable['Wt_Mold_g_3'], 0, 1, 'C');
$pdf->SetXY(205, 87);
$pdf->Cell(32.5, 5, $SeachTable['Wt_Mold_g_4'], 0, 1, 'C');
$pdf->SetXY(237.5, 87);
$pdf->Cell(39.5, 5, $SeachTable['Wt_Mold_g_5'], 0, 1, 'C');
$pdf->SetXY(277, 87);
$pdf->Cell(32.5, 5, $SeachTable['Wt_Mold_g_6'], 0, 1, 'C');

$pdf->SetXY(94.4, 92);
$pdf->Cell(40, 8, $SeachTable['Wt_Wet_Soil_g_1'], 0, 1, 'C');
$pdf->SetXY(134.5, 92);
$pdf->Cell(35, 8, $SeachTable['Wt_Wet_Soil_g_2'], 0, 1, 'C');
$pdf->SetXY(169.5, 92);
$pdf->Cell(35.5, 8, $SeachTable['Wt_Wet_Soil_g_3'], 0, 1, 'C');
$pdf->SetXY(205, 92);
$pdf->Cell(32.5, 8, $SeachTable['Wt_Wet_Soil_g_4'], 0, 1, 'C');
$pdf->SetXY(237.5, 92);
$pdf->Cell(39.5, 8, $SeachTable['Wt_Wet_Soil_g_5'], 0, 1, 'C');
$pdf->SetXY(277, 92);
$pdf->Cell(32.5, 8, $SeachTable['Wt_Wet_Soil_g_6'], 0, 1, 'C');

$pdf->SetXY(94.4, 100);
$pdf->Cell(40, 6.5, $SeachTable['Vol_Mold_cm3_1'], 0, 1, 'C');
$pdf->SetXY(134.5, 100);
$pdf->Cell(35, 6.5, $SeachTable['Vol_Mold_cm3_2'], 0, 1, 'C');
$pdf->SetXY(169.5, 100);
$pdf->Cell(35.5, 6.5, $SeachTable['Vol_Mold_cm3_3'], 0, 1, 'C');
$pdf->SetXY(205, 100);
$pdf->Cell(32.5, 6.5, $SeachTable['Vol_Mold_cm3_4'], 0, 1, 'C');
$pdf->SetXY(237.5, 100);
$pdf->Cell(39.5, 6.5, $SeachTable['Vol_Mold_cm3_5'], 0, 1, 'C');
$pdf->SetXY(277, 100);
$pdf->Cell(32.5, 6.5, $SeachTable['Vol_Mold_cm3_6'], 0, 1, 'C');

$pdf->SetXY(94.4, 106.5);
$pdf->Cell(40, 7.5, $SeachTable['Wet_Density_kgm3_1'], 0, 1, 'C');
$pdf->SetXY(134.5, 106.5);
$pdf->Cell(35, 7.5, $SeachTable['Wet_Density_kgm3_2'], 0, 1, 'C');
$pdf->SetXY(169.5, 106.5);
$pdf->Cell(35.5, 7.5, $SeachTable['Wet_Density_kgm3_3'], 0, 1, 'C');
$pdf->SetXY(205, 106.5);
$pdf->Cell(32.5, 7.5, $SeachTable['Wet_Density_kgm3_4'], 0, 1, 'C');
$pdf->SetXY(237.5, 106.5);
$pdf->Cell(39.5, 7.5, $SeachTable['Wet_Density_kgm3_5'], 0, 1, 'C');
$pdf->SetXY(277, 106.5);
$pdf->Cell(32.5, 7.5, $SeachTable['Wet_Density_kgm3_6'], 0, 1, 'C');

$pdf->SetXY(94.4, 114);
$pdf->Cell(40, 8.5, $SeachTable['Dry_Density_kgm3_1'], 0, 1, 'C');
$pdf->SetXY(134.5, 114);
$pdf->Cell(35, 8.5, $SeachTable['Dry_Density_kgm3_2'], 0, 1, 'C');
$pdf->SetXY(169.5, 114);
$pdf->Cell(35.5, 8.5, $SeachTable['Dry_Density_kgm3_3'], 0, 1, 'C');
$pdf->SetXY(205, 114);
$pdf->Cell(32.5, 8.5, $SeachTable['Dry_Density_kgm3_4'], 0, 1, 'C');
$pdf->SetXY(237.5, 114);
$pdf->Cell(39.5, 8.5, $SeachTable['Dry_Density_kgm3_5'], 0, 1, 'C');
$pdf->SetXY(277, 114);
$pdf->Cell(32.5, 8.5, $SeachTable['Dry_Density_kgm3_6'], 0, 1, 'C');
//
$pdf->SetXY(94.4, 133);
$pdf->Cell(40, 6.5, $SeachTable['MC_Container_1'], 0, 1, 'C');
$pdf->SetXY(134.5, 133);
$pdf->Cell(35, 6.5, $SeachTable['MC_Container_2'], 0, 1, 'C');
$pdf->SetXY(169.5, 133);
$pdf->Cell(35.5, 6.5, $SeachTable['MC_Container_3'], 0, 1, 'C');
$pdf->SetXY(205, 133);
$pdf->Cell(32.5, 6.5, $SeachTable['MC_Container_4'], 0, 1, 'C');
$pdf->SetXY(237.5, 133);
$pdf->Cell(39.5, 6.5, $SeachTable['MC_Container_5'], 0, 1, 'C');
$pdf->SetXY(277, 133);
$pdf->Cell(32.5, 6.5, $SeachTable['MC_Container_6'], 0, 1, 'C');

$pdf->SetXY(94.4, 139.5);
$pdf->Cell(40, 6, $SeachTable['MC_Wt_Wet_Soil_Tare_1'], 0, 1, 'C');
$pdf->SetXY(134.5, 139.5);
$pdf->Cell(35, 6, $SeachTable['MC_Wt_Wet_Soil_Tare_2'], 0, 1, 'C');
$pdf->SetXY(169.5, 139.5);
$pdf->Cell(35.5, 6, $SeachTable['MC_Wt_Wet_Soil_Tare_3'], 0, 1, 'C');
$pdf->SetXY(205, 139.5);
$pdf->Cell(32.5, 6, $SeachTable['MC_Wt_Wet_Soil_Tare_4'], 0, 1, 'C');
$pdf->SetXY(237.5, 139.5);
$pdf->Cell(39.5, 6, $SeachTable['MC_Wt_Wet_Soil_Tare_5'], 0, 1, 'C');
$pdf->SetXY(277, 139.5);
$pdf->Cell(32.5, 6, $SeachTable['MC_Wt_Wet_Soil_Tare_6'], 0, 1, 'C');

$pdf->SetXY(94.4, 145.5);
$pdf->Cell(40, 8, $SeachTable['MC_Wt_Dry_Soil_Tare_1'], 0, 1, 'C');
$pdf->SetXY(134.5, 145.5);
$pdf->Cell(35, 8, $SeachTable['MC_Wt_Dry_Soil_Tare_2'], 0, 1, 'C');
$pdf->SetXY(169.5, 145.5);
$pdf->Cell(35.5, 8, $SeachTable['MC_Wt_Dry_Soil_Tare_3'], 0, 1, 'C');
$pdf->SetXY(205, 145.5);
$pdf->Cell(32.5, 8, $SeachTable['MC_Wt_Dry_Soil_Tare_4'], 0, 1, 'C');
$pdf->SetXY(237.5, 145.5);
$pdf->Cell(39.5, 8, $SeachTable['MC_Wt_Dry_Soil_Tare_5'], 0, 1, 'C');
$pdf->SetXY(277, 145.5);
$pdf->Cell(32.5, 8, $SeachTable['MC_Wt_Dry_Soil_Tare_6'], 0, 1, 'C');

$pdf->SetXY(94.4, 153);
$pdf->Cell(40, 8.5, $SeachTable['Wt_Water_g_1'], 0, 1, 'C');
$pdf->SetXY(134.5, 153);
$pdf->Cell(35, 8.5, $SeachTable['Wt_Water_g_2'], 0, 1, 'C');
$pdf->SetXY(169.5, 153);
$pdf->Cell(35.5, 8.5, $SeachTable['Wt_Water_g_3'], 0, 1, 'C');
$pdf->SetXY(205, 153);
$pdf->Cell(32.5, 8.5, $SeachTable['Wt_Water_g_4'], 0, 1, 'C');
$pdf->SetXY(237.5, 153);
$pdf->Cell(39.5, 8.5, $SeachTable['Wt_Water_g_5'], 0, 1, 'C');
$pdf->SetXY(277, 153);
$pdf->Cell(32.5, 8.5, $SeachTable['Wt_Water_g_6'], 0, 1, 'C');

$pdf->SetXY(94.4, 161.5);
$pdf->Cell(40,7, $SeachTable['Tare_g_1'], 0, 1, 'C');
$pdf->SetXY(134.5, 161.5);
$pdf->Cell(35,7, $SeachTable['Tare_g_2'], 0, 1, 'C');
$pdf->SetXY(169.5, 161.5);
$pdf->Cell(35.5,7, $SeachTable['Tare_g_3'], 0, 1, 'C');
$pdf->SetXY(205, 161.5);
$pdf->Cell(32.5,7, $SeachTable['Tare_g_4'], 0, 1, 'C');
$pdf->SetXY(237.5, 161.5);
$pdf->Cell(39.5,7, $SeachTable['Tare_g_5'], 0, 1, 'C');
$pdf->SetXY(277, 161.5);
$pdf->Cell(32.5,7, $SeachTable['Tare_g_6'], 0, 1, 'C');

$pdf->SetXY(94.4, 169);
$pdf->Cell(40, 8, $SeachTable['MC_Wt_Dry_Soil_g_1'], 0, 1, 'C');
$pdf->SetXY(134.5, 169);
$pdf->Cell(35, 8, $SeachTable['MC_Wt_Dry_Soil_g_2'], 0, 1, 'C');
$pdf->SetXY(169.5, 169);
$pdf->Cell(35.5, 8, $SeachTable['MC_Wt_Dry_Soil_g_3'], 0, 1, 'C');
$pdf->SetXY(205, 169);
$pdf->Cell(32.5, 8, $SeachTable['MC_Wt_Dry_Soil_g_4'], 0, 1, 'C');
$pdf->SetXY(237.5, 169);
$pdf->Cell(39.5, 8, $SeachTable['MC_Wt_Dry_Soil_g_5'], 0, 1, 'C');
$pdf->SetXY(277, 169);
$pdf->Cell(32.5, 8, $SeachTable['MC_Wt_Dry_Soil_g_6'], 0, 1, 'C');

$pdf->SetXY(94.4, 177);
$pdf->Cell(40, 8.5, $SeachTable['MC_Porce_1'], 0, 1, 'C');
$pdf->SetXY(134.5, 177);
$pdf->Cell(35, 8.5, $SeachTable['MC_Porce_2'], 0, 1, 'C');
$pdf->SetXY(169.5, 177);
$pdf->Cell(35.5, 8.5, $SeachTable['MC_Porce_3'], 0, 1, 'C');
$pdf->SetXY(205, 177);
$pdf->Cell(32.5, 8.5, $SeachTable['MC_Porce_4'], 0, 1, 'C');
$pdf->SetXY(237.5, 177);
$pdf->Cell(39.5, 8.5, $SeachTable['MC_Porce_5'], 0, 1, 'C');
$pdf->SetXY(277, 177);
$pdf->Cell(32.5, 8.5, $SeachTable['MC_Porce_6'], 0, 1, 'C');

$pdf->SetXY(94.4, 185.5);
$pdf->Cell(40, 5.5, $SeachTable['Max_Dry_Density_kgm3'], 0, 1, 'C');
$pdf->SetXY(94.4, 191);
$pdf->Cell(40, 7, $SeachTable['Optimun_MC_Porce'], 0, 1, 'C');

$pdf->SetXY(447, 80.5);
$pdf->Cell(33, 6, $SeachTable['Max_Dry_Density_kgm3'], 0, 1, 'C');
$pdf->SetXY(447, 87);
$pdf->Cell(33, 5, $SeachTable['Optimun_MC_Porce'], 0, 1, 'C');

$pdf->Output();
?>