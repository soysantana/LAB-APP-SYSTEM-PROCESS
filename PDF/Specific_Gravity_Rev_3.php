<?php
require('libs/fpdf/fpdf.php');
require('libs/fpdi/src/autoload.php');
require_once('includes/load.php');

$specific_gravity = find_by_id('specific_gravity', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('L', array(300, 260));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-83462_SG-by pycnometer_Rev. 3.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(57, 43);
$pdf->Cell(21, 5, remove_junk(ucwords($specific_gravity['Technician'])), 0, 1, 'C');
$pdf->SetXY(57, 48);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');

$pdf->SetXY(150, 42);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(150, 47);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(220, 42);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Preparation_Method'])), 0, 1, 'C');
$pdf->SetXY(220, 47);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Split_Method'])), 0, 1, 'C');

$pdf->SetXY(57, 62);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Structure'])), 0, 1, 'C');
$pdf->SetXY(57, 68);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Area'])), 0, 1, 'C');
$pdf->SetXY(57, 74);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Source'])), 0, 1, 'C');
$pdf->SetXY(57, 80);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(155, 62);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(155, 68);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(155, 74);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(155, 80);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Elev'])), 0, 1, 'C');

$pdf->SetXY(220, 62);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(220, 68);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(220, 74);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['North'])), 0, 1, 'C');
$pdf->SetXY(220, 80);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['East'])), 0, 1, 'C');

// Testing Information

$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(148, 96);
$pdf->Cell(28, 5, remove_junk(ucwords($specific_gravity['Pycnometer_Used_mL'])), 0, 1, 'C');
$pdf->SetXY(148, 101);
$pdf->Cell(28, 5, remove_junk(ucwords($specific_gravity['Pycnometer_Number'])), 0, 1, 'C');
$pdf->SetXY(148, 106);
$pdf->Cell(28, 5, remove_junk(ucwords($specific_gravity['Test_Temp_Tt_C'])), 0, 1, 'C');
$pdf->SetXY(148, 111);
$pdf->Cell(28, 5, remove_junk(ucwords($specific_gravity['Ave_Calibrated_Mass_Dry_Pycnometer_Mp_gr'])), 0, 1, 'C');
$pdf->SetXY(148, 116);
$pdf->Cell(28, 5, remove_junk(ucwords($specific_gravity['Ave_Calibrated_Volume_Pycnometer_Vp_mL'])), 0, 1, 'C');
$pdf->SetXY(148, 122);
$pdf->Cell(28, 5, remove_junk(ucwords($specific_gravity['Density_Water_Test_Temp_gmL'])), 0, 1, 'C');
$pdf->SetXY(148, 127);
$pdf->Cell(28, 11, remove_junk(ucwords($specific_gravity['Calibration_Weight_Pynometer_Water_Calibration_Temp_Mpwc_gr'])), 0, 1, 'C');
$pdf->SetXY(148, 138);
$pdf->Cell(28, 5, remove_junk(ucwords($specific_gravity['Weight_Dry_Soil_Tare_gr'])), 0, 1, 'C');
$pdf->SetXY(148, 143);
$pdf->Cell(28, 5, remove_junk(ucwords($specific_gravity['Weight_Dry_Soil_Ms_gr'])), 0, 1, 'C');
$pdf->SetXY(148, 148);
$pdf->Cell(28, 6, remove_junk(ucwords($specific_gravity['Weight_Pycnometer_Soil_Water_Mpwst_gr'])), 0, 1, 'C');
$pdf->SetXY(148, 154);
$pdf->Cell(28, 5, remove_junk(ucwords($specific_gravity['Specific_Gravity_Soil_Solid_Test_Temp_Gt'])), 0, 1, 'C');
$pdf->SetXY(148, 159);
$pdf->Cell(28, 5, remove_junk(ucwords($specific_gravity['Temperature_Coefficent_K'])), 0, 1, 'C');
$pdf->SetXY(148, 164);
$pdf->Cell(28, 5, remove_junk(ucwords($specific_gravity['Specific_Gravity_Soil_Solid'])), 0, 1, 'C');

$pdf->SetXY(189, 97);
$pdf->Cell(70, 70, remove_junk(ucwords($specific_gravity['Comments'])), 0, 1, 'C');


$pdf->Output();
?>