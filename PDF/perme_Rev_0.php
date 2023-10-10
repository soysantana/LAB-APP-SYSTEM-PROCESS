<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$permeabilidad = find_by_id('permeability_of_granular_soils', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(360, 330));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-XXXXX_perme_ Rev 0.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(38, 46);
$pdf->Cell(21, 5, remove_junk(ucwords($permeabilidad['Technician'])), 0, 1, 'C');
$pdf->SetXY(38, 51);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');


$pdf->SetXY(165, 40);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Standard'])), 0, 1, 'C');
$pdf->SetXY(165, 46);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(165, 51);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(260, 40);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Method'])), 0, 1, 'C');
$pdf->SetXY(260, 46);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Method'])), 0, 1, 'C');
$pdf->SetXY(260, 51);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Method'])), 0, 1, 'C');

$pdf->SetXY(45, 66);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Structure'])), 0, 1, 'C');
$pdf->SetXY(45, 72);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Area'])), 0, 1, 'C');
$pdf->SetXY(45, 77);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Source'])), 0, 1, 'C');
$pdf->SetXY(45, 82);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(170, 66);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(170, 72);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(170, 77);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(170, 82);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Elev'])), 0, 1, 'C');

$pdf->SetXY(260, 66);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(260, 72);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(260, 77);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['North'])), 0, 1, 'C');
$pdf->SetXY(260, 82);
$pdf->Cell(21, 6, remove_junk(ucwords($permeabilidad['East'])), 0, 1, 'C');

// Geometry
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(41, 113);
$pdf->Cell(24, 6, remove_junk(ucwords($permeabilidad['Diameter_D_cm'])), 0, 1, 'C');
$pdf->SetXY(41, 120);
$pdf->Cell(24, 6, remove_junk(ucwords($permeabilidad['Area_cm2'])), 0, 1, 'C');
$pdf->SetXY(41, 126);
$pdf->Cell(24, 6, remove_junk(ucwords($permeabilidad['Lenght_L_cm'])), 0, 1, 'C');
$pdf->SetXY(41, 131);
$pdf->Cell(24, 6, remove_junk(ucwords($permeabilidad['Height_After_H2'])), 0, 1, 'C');
$pdf->SetXY(41, 137);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['Height_Net_cm'])), 0, 1, 'C');
$pdf->SetXY(41, 142);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['Void_Ratio_e'])), 0, 1, 'C');

$pdf->SetXY(95, 113);
$pdf->Cell(24, 6, remove_junk(ucwords($permeabilidad['W_Max_Kgm2'])), 0, 1, 'C');
$pdf->SetXY(95, 120);
$pdf->Cell(24, 6, remove_junk(ucwords($permeabilidad['W_Max_Kgm3'])), 0, 1, 'C');
$pdf->SetXY(95, 126);
$pdf->Cell(24, 6, remove_junk(ucwords($permeabilidad['Height_Before_H1'])), 0, 1, 'C');
$pdf->SetXY(95, 131);
$pdf->Cell(24, 16, remove_junk(ucwords($permeabilidad['Relative_Density_RD_Porce'])), 0, 1, 'C');

// Manometers
$pdf->SetXY(41, 163);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['H1_1'])), 0, 1, 'C');
$pdf->SetXY(65, 163);
$pdf->Cell(30, 5, remove_junk(ucwords($permeabilidad['H2_1'])), 0, 1, 'C');
$pdf->SetXY(95, 163);
$pdf->Cell(25, 5, remove_junk(ucwords($permeabilidad['Head_h_cm_N1'])), 0, 1, 'C');
$pdf->SetXY(120, 163);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['Quantity_of_water_discharged_cm3_N1'])), 0, 1, 'C');
$pdf->SetXY(144, 163);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['Total_time_of_discharge_sec_N1'])), 0, 1, 'C');
$pdf->SetXY(171, 163);
$pdf->Cell(31, 5, remove_junk(ucwords($permeabilidad['Q_At_N1'])), 0, 1, 'C');
$pdf->SetXY(202, 163);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['h_L_N1'])), 0, 1, 'C');
$pdf->SetXY(229, 163);
$pdf->Cell(32, 5, remove_junk(ucwords($permeabilidad['Temperature_C_N1'])), 0, 1, 'C');
$pdf->SetXY(261, 163);
$pdf->Cell(20, 5, remove_junk(ucwords($permeabilidad['Coefficient_of_permeability_cm_seg_N1'])), 0, 1, 'C');

$pdf->SetXY(41, 168);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['H1_2'])), 0, 1, 'C');
$pdf->SetXY(65, 168);
$pdf->Cell(30, 5, remove_junk(ucwords($permeabilidad['H2_2'])), 0, 1, 'C');
$pdf->SetXY(95, 168);
$pdf->Cell(25, 5, remove_junk(ucwords($permeabilidad['Head_h_cm_N2'])), 0, 1, 'C');
$pdf->SetXY(120, 168);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['Quantity_of_water_discharged_cm3_N2'])), 0, 1, 'C');
$pdf->SetXY(144, 168);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['Total_time_of_discharge_sec_N2'])), 0, 1, 'C');
$pdf->SetXY(171, 168);
$pdf->Cell(31, 5, remove_junk(ucwords($permeabilidad['Q_At_N2'])), 0, 1, 'C');
$pdf->SetXY(202, 168);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['h_L_N2'])), 0, 1, 'C');
$pdf->SetXY(229, 168);
$pdf->Cell(32, 5, remove_junk(ucwords($permeabilidad['Temperature_C_N2'])), 0, 1, 'C');
$pdf->SetXY(261, 168);
$pdf->Cell(20, 5, remove_junk(ucwords($permeabilidad['Coefficient_of_permeability_cm_seg_N2'])), 0, 1, 'C');

$pdf->SetXY(41, 173);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['H1_3'])), 0, 1, 'C');
$pdf->SetXY(65, 173);
$pdf->Cell(30, 5, remove_junk(ucwords($permeabilidad['H2_3'])), 0, 1, 'C');
$pdf->SetXY(95, 173);
$pdf->Cell(25, 5, remove_junk(ucwords($permeabilidad['Head_h_cm_N3'])), 0, 1, 'C');
$pdf->SetXY(120, 173);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['Quantity_of_water_discharged_cm3_N3'])), 0, 1, 'C');
$pdf->SetXY(144, 173);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['Total_time_of_discharge_sec_N3'])), 0, 1, 'C');
$pdf->SetXY(171, 173);
$pdf->Cell(31, 5, remove_junk(ucwords($permeabilidad['Q_At_N3'])), 0, 1, 'C');
$pdf->SetXY(202, 173);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['h_L_N3'])), 0, 1, 'C');
$pdf->SetXY(229, 173);
$pdf->Cell(32, 5, remove_junk(ucwords($permeabilidad['Temperature_C_N3'])), 0, 1, 'C');
$pdf->SetXY(261, 173);
$pdf->Cell(20, 5, remove_junk(ucwords($permeabilidad['Coefficient_of_permeability_cm_seg_N3'])), 0, 1, 'C');

$pdf->SetXY(41, 178);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['H1_4'])), 0, 1, 'C');
$pdf->SetXY(65, 178);
$pdf->Cell(30, 5, remove_junk(ucwords($permeabilidad['H2_4'])), 0, 1, 'C');
$pdf->SetXY(95, 178);
$pdf->Cell(25, 5, remove_junk(ucwords($permeabilidad['Head_h_cm_N4'])), 0, 1, 'C');
$pdf->SetXY(120, 178);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['Quantity_of_water_discharged_cm3_N4'])), 0, 1, 'C');
$pdf->SetXY(144, 178);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['Total_time_of_discharge_sec_N4'])), 0, 1, 'C');
$pdf->SetXY(171, 178);
$pdf->Cell(31, 5, remove_junk(ucwords($permeabilidad['Q_At_N4'])), 0, 1, 'C');
$pdf->SetXY(202, 178);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['h_L_N4'])), 0, 1, 'C');
$pdf->SetXY(229, 178);
$pdf->Cell(32, 5, remove_junk(ucwords($permeabilidad['Temperature_C_N4'])), 0, 1, 'C');
$pdf->SetXY(261, 178);
$pdf->Cell(20, 5, remove_junk(ucwords($permeabilidad['Coefficient_of_permeability_cm_seg_N4'])), 0, 1, 'C');

$pdf->SetXY(41, 183);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['H1_5'])), 0, 1, 'C');
$pdf->SetXY(65, 183);
$pdf->Cell(30, 5, remove_junk(ucwords($permeabilidad['H2_5'])), 0, 1, 'C');
$pdf->SetXY(95, 183);
$pdf->Cell(25, 5, remove_junk(ucwords($permeabilidad['Head_h_cm_N5'])), 0, 1, 'C');
$pdf->SetXY(120, 183);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['Quantity_of_water_discharged_cm3_N5'])), 0, 1, 'C');
$pdf->SetXY(144, 183);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['Total_time_of_discharge_sec_N5'])), 0, 1, 'C');
$pdf->SetXY(171, 183);
$pdf->Cell(31, 5, remove_junk(ucwords($permeabilidad['Q_At_N5'])), 0, 1, 'C');
$pdf->SetXY(202, 183);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['h_L_N5'])), 0, 1, 'C');
$pdf->SetXY(229, 183);
$pdf->Cell(32, 5, remove_junk(ucwords($permeabilidad['Temperature_C_N5'])), 0, 1, 'C');
$pdf->SetXY(261, 183);
$pdf->Cell(20, 5, remove_junk(ucwords($permeabilidad['Coefficient_of_permeability_cm_seg_N5'])), 0, 1, 'C');

$pdf->SetXY(41, 189);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['H1_6'])), 0, 1, 'C');
$pdf->SetXY(65, 189);
$pdf->Cell(30, 5, remove_junk(ucwords($permeabilidad['H2_6'])), 0, 1, 'C');
$pdf->SetXY(95, 189);
$pdf->Cell(25, 5, remove_junk(ucwords($permeabilidad['Head_h_cm_N6'])), 0, 1, 'C');
$pdf->SetXY(120, 189);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['Quantity_of_water_discharged_cm3_N6'])), 0, 1, 'C');
$pdf->SetXY(144, 189);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['Total_time_of_discharge_sec_N6'])), 0, 1, 'C');
$pdf->SetXY(171, 189);
$pdf->Cell(31, 5, remove_junk(ucwords($permeabilidad['Q_At_N6'])), 0, 1, 'C');
$pdf->SetXY(202, 189);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['h_L_N6'])), 0, 1, 'C');
$pdf->SetXY(229, 189);
$pdf->Cell(32, 5, remove_junk(ucwords($permeabilidad['Temperature_C_N6'])), 0, 1, 'C');
$pdf->SetXY(261, 189);
$pdf->Cell(20, 5, remove_junk(ucwords($permeabilidad['Coefficient_of_permeability_cm_seg_N6'])), 0, 1, 'C');

$pdf->SetXY(41, 194);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['H1_7'])), 0, 1, 'C');
$pdf->SetXY(65, 194);
$pdf->Cell(30, 5, remove_junk(ucwords($permeabilidad['H2_7'])), 0, 1, 'C');
$pdf->SetXY(95, 194);
$pdf->Cell(25, 5, remove_junk(ucwords($permeabilidad['Head_h_cm_N7'])), 0, 1, 'C');
$pdf->SetXY(120, 194);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['Quantity_of_water_discharged_cm3_N7'])), 0, 1, 'C');
$pdf->SetXY(144, 194);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['Total_time_of_discharge_sec_N7'])), 0, 1, 'C');
$pdf->SetXY(171, 194);
$pdf->Cell(31, 5, remove_junk(ucwords($permeabilidad['Q_At_N7'])), 0, 1, 'C');
$pdf->SetXY(202, 194);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['h_L_N7'])), 0, 1, 'C');
$pdf->SetXY(229, 194);
$pdf->Cell(32, 5, remove_junk(ucwords($permeabilidad['Temperature_C_N7'])), 0, 1, 'C');
$pdf->SetXY(261, 194);
$pdf->Cell(20, 5, remove_junk(ucwords($permeabilidad['Coefficient_of_permeability_cm_seg_N7'])), 0, 1, 'C');

$pdf->SetXY(41, 199);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['H1_8'])), 0, 1, 'C');
$pdf->SetXY(65, 199);
$pdf->Cell(30, 5, remove_junk(ucwords($permeabilidad['H2_8'])), 0, 1, 'C');
$pdf->SetXY(95, 199);
$pdf->Cell(25, 5, remove_junk(ucwords($permeabilidad['Head_h_cm_N8'])), 0, 1, 'C');
$pdf->SetXY(120, 199);
$pdf->Cell(24, 5, remove_junk(ucwords($permeabilidad['Quantity_of_water_discharged_cm3_N8'])), 0, 1, 'C');
$pdf->SetXY(144, 199);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['Total_time_of_discharge_sec_N8'])), 0, 1, 'C');
$pdf->SetXY(171, 199);
$pdf->Cell(31, 5, remove_junk(ucwords($permeabilidad['Q_At_N8'])), 0, 1, 'C');
$pdf->SetXY(202, 199);
$pdf->Cell(27, 5, remove_junk(ucwords($permeabilidad['h_L_N8'])), 0, 1, 'C');
$pdf->SetXY(229, 199);
$pdf->Cell(32, 5, remove_junk(ucwords($permeabilidad['Temperature_C_N8'])), 0, 1, 'C');
$pdf->SetXY(261, 199);
$pdf->Cell(20, 5, remove_junk(ucwords($permeabilidad['Coefficient_of_permeability_cm_seg_N8'])), 0, 1, 'C');

// Comments Laboratory
$pdf->SetXY(15, 275);
$pdf->Cell(105, 36, remove_junk(ucwords($permeabilidad['Comments'])), 0, 1, 'C');



$pdf->Output();
?>