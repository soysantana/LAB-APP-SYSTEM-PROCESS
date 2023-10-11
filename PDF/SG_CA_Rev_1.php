<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$specific_gravity = find_by_id('specific_gravity_absortion', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(270, 360));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-83832_SG-for-CA_Rev 1.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(48, 48);
$pdf->Cell(21, 5, remove_junk(ucwords($specific_gravity['Technician'])), 0, 1, 'C');
$pdf->SetXY(48, 53);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');


$pdf->SetXY(145, 41);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Standard'])), 0, 1, 'C');
$pdf->SetXY(145, 47);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(145, 53);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(230, 40);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Preparation_Method'])), 0, 1, 'C');

$pdf->SetXY(48, 68);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Structure'])), 0, 1, 'C');
$pdf->SetXY(48, 74);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Area'])), 0, 1, 'C');
$pdf->SetXY(48, 79);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Source'])), 0, 1, 'C');
$pdf->SetXY(48, 85);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(150, 68);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(150, 74);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(150, 79);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(150, 85);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Elev'])), 0, 1, 'C');

$pdf->SetXY(230, 67);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(230, 74);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(230, 80);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['North'])), 0, 1, 'C');
$pdf->SetXY(230, 87);
$pdf->Cell(21, 6, remove_junk(ucwords($specific_gravity['East'])), 0, 1, 'C');

// Testing Information
$pdf->SetFont('Arial', '', 11);
$pdf->SetXY(51, 120);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch5_Wt1'])), 0, 1, 'C');
$pdf->SetXY(51, 130);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch4_Wt1'])), 0, 1, 'C');
$pdf->SetXY(51, 139);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch3p5_Wt1'])), 0, 1, 'C');
$pdf->SetXY(51, 149);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch3_Wt1'])), 0, 1, 'C');
$pdf->SetXY(51, 158);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch2p5_Wt1'])), 0, 1, 'C');
$pdf->SetXY(51, 168);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch2_Wt1'])), 0, 1, 'C');
$pdf->SetXY(51, 176);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch1p5_Wt1'])), 0, 1, 'C');
$pdf->SetXY(51, 186);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch1_Wt1'])), 0, 1, 'C');
$pdf->SetXY(51, 195);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch3p4_Wt1'])), 0, 1, 'C');
$pdf->SetXY(51, 205);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch1p2_Wt1'])), 0, 1, 'C');
$pdf->SetXY(51, 214);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['InchTotal_Wt1'])), 0, 1, 'C');

$pdf->SetXY(110, 120);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch5_Wt2'])), 0, 1, 'C');
$pdf->SetXY(110, 130);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch4_Wt2'])), 0, 1, 'C');
$pdf->SetXY(110, 139);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch3p5_Wt2'])), 0, 1, 'C');
$pdf->SetXY(110, 149);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch3_Wt2'])), 0, 1, 'C');
$pdf->SetXY(110, 158);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch2p5_Wt2'])), 0, 1, 'C');
$pdf->SetXY(110, 168);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch2_Wt2'])), 0, 1, 'C');
$pdf->SetXY(110, 176);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch1p5_Wt2'])), 0, 1, 'C');
$pdf->SetXY(110, 186);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch1_Wt2'])), 0, 1, 'C');
$pdf->SetXY(110, 195);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch3p4_Wt2'])), 0, 1, 'C');
$pdf->SetXY(110, 205);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch1p2_Wt2'])), 0, 1, 'C');
$pdf->SetXY(110, 214);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['InchTotal_Wt2'])), 0, 1, 'C');

$pdf->SetXY(170, 120);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch5_Wt3'])), 0, 1, 'C');
$pdf->SetXY(170, 130);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch4_Wt3'])), 0, 1, 'C');
$pdf->SetXY(170, 139);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch3p5_Wt3'])), 0, 1, 'C');
$pdf->SetXY(170, 149);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch3_Wt3'])), 0, 1, 'C');
$pdf->SetXY(170, 158);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch2p5_Wt3'])), 0, 1, 'C');
$pdf->SetXY(170, 168);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch2_Wt3'])), 0, 1, 'C');
$pdf->SetXY(170, 176);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch1p5_Wt3'])), 0, 1, 'C');
$pdf->SetXY(170, 186);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch1_Wt3'])), 0, 1, 'C');
$pdf->SetXY(170, 195);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch3p4_Wt3'])), 0, 1, 'C');
$pdf->SetXY(170, 205);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['Inch1p2_Wt3'])), 0, 1, 'C');
$pdf->SetXY(170, 214);
$pdf->Cell(34, 10, remove_junk(ucwords($specific_gravity['InchTotal_Wt3'])), 0, 1, 'C');

// Results
$pdf->SetXY(85, 229);
$pdf->Cell(24, 8, remove_junk(ucwords($specific_gravity['Specific_Gravity_OD'])), 0, 1, 'C');
$pdf->SetXY(85, 237);
$pdf->Cell(24, 8, remove_junk(ucwords($specific_gravity['Specific_Gravity_SSD'])), 0, 1, 'C');
$pdf->SetXY(85, 245);
$pdf->Cell(24, 8, remove_junk(ucwords($specific_gravity['Apparent_Specific_Gravity'])), 0, 1, 'C');
$pdf->SetXY(85, 253);
$pdf->Cell(24, 8, remove_junk(ucwords($specific_gravity['Percent_Absortion'])), 0, 1, 'C');


// Comements
$pdf->SetXY(16, 270);
$pdf->Cell(205, 33, remove_junk(ucwords($specific_gravity['Comments'])), 0, 1, 'C');


$pdf->Output();
?>