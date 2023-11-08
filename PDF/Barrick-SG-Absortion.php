<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$SeachTable = find_by_id('specific_gravity_absortion', (int)$_GET['id']);

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
$pdf->AddPage('P', array(250, 300));

// Importar una página de otro PDF
$pdf->setSourceFile('Barrick-SG-Absortion.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$ID = $SeachTable['Sample_ID'];
$Number = $SeachTable['Sample_Number'];
$From = $SeachTable['Depth_From'];
$To = $SeachTable['Depth_To'];

//Project Information
$pdf->SetFont('Arial', '', 9);
$pdf->SetXY(39, 43);
$pdf->Cell(30, 4, 'Pueblo Viejo', 0, 1, 'L');
$pdf->SetXY(39, 47.5);
$pdf->Cell(30, 4, '0011-####', 0, 1, 'L');
$pdf->SetXY(39, 51.5);
$pdf->Cell(30, 4, 'PVDJ2', 0, 1, 'L');
//Laboratory Information
$pdf->SetXY(158, 43);
$pdf->Cell(23, 4, 'PVDJ Soil Lab', 0, 1, 'L');
$pdf->SetXY(158, 47.5);
$pdf->Cell(23, 4, $SeachTable['Technician'], 0, 1, 'L');
$pdf->SetXY(158, 51.5);
$pdf->Cell(23, 4, $SeachTable['Sample_Date'], 0, 1, 'L');
$pdf->SetXY(204, 43);
$pdf->Cell(28, 4, $SeachTable['Test_Start_Date'], 0, 1, 'L');
$pdf->SetXY(204, 47.5);
$pdf->Cell(28, 4, $SeachTable['Report_Date'], 0, 1, 'L');
$pdf->SetXY(204, 51.5);
$pdf->Cell(28, 4, $SeachTable['Standard'], 0, 1, 'L');
//Sample Information
$pdf->SetXY(39, 65);
$pdf->Cell(30, 4, $SeachTable['Structure'], 0, 1, 'L');
$pdf->SetXY(39, 69);
$pdf->Cell(30, 5, $SeachTable['Area'], 0, 1, 'L');
$pdf->SetXY(39, 74);
$pdf->Cell(30, 4, $SeachTable['Source'], 0, 1, 'L');
$pdf->SetXY(90, 65);
$pdf->Cell(25, 4, $ID . '-' . $Number, 0, 1, 'L');
$pdf->SetXY(90, 69);
$pdf->Cell(25, 5, $From . ' ' . $To, 0, 1, 'L');
$pdf->SetXY(90, 74);
$pdf->Cell(25, 4, $SeachTable['Material_Type'], 0, 1, 'L');
$pdf->SetXY(158, 65);
$pdf->Cell(23, 4, $SeachTable['North'], 0, 1, 'L');
$pdf->SetXY(158, 69);
$pdf->Cell(23, 5, $SeachTable['East'], 0, 1, 'L');
$pdf->SetXY(158, 74);
$pdf->Cell(23, 4, $SeachTable['Elev'], 0, 1, 'L');
//Test Information
$pdf->SetXY(39, 96);
$pdf->Cell(30, 4, $SeachTable['Inch3p5_Wt1'], 0, 1, 'R');
$pdf->SetXY(39, 100);
$pdf->Cell(30, 5, $SeachTable['Inch3_Wt1'], 0, 1, 'R');
$pdf->SetXY(39, 105.5);
$pdf->Cell(30, 4, $SeachTable['Inch2p5_Wt1'], 0, 1, 'R');
$pdf->SetXY(39, 110);
$pdf->Cell(30, 4, $SeachTable['Inch2_Wt1'], 0, 1, 'R');
$pdf->SetXY(39, 114);
$pdf->Cell(30, 4, $SeachTable['Inch1p5_Wt1'], 0, 1, 'R');
$pdf->SetXY(39, 118.5);
$pdf->Cell(30, 4, $SeachTable['Inch1_Wt1'], 0, 1, 'R');
$pdf->SetXY(39, 123);
$pdf->Cell(30, 4, $SeachTable['Inch3p4_Wt1'], 0, 1, 'R');
$pdf->SetXY(39, 127.5);
$pdf->Cell(30, 4, $SeachTable['Inch1p2_Wt1'], 0, 1, 'R');
$pdf->SetXY(39, 132);
$pdf->Cell(30, 4, $SeachTable['Inch3p8_Wt1'], 0, 1, 'R');
$pdf->SetXY(39, 136.2);
$pdf->Cell(30, 4, $SeachTable['InchNo4_Wt1'], 0, 1, 'R');
$pdf->SetXY(39, 141);
$pdf->Cell(30, 4, $SeachTable['InchTotal_Wt1'], 0, 1, 'R');
$pdf->SetXY(90, 96);
$pdf->Cell(25, 4, $SeachTable['Inch3p5_Wt2'], 0, 1, 'R');
$pdf->SetXY(90, 100);
$pdf->Cell(25, 5, $SeachTable['Inch3_Wt2'], 0, 1, 'R');
$pdf->SetXY(90, 105.5);
$pdf->Cell(25, 4, $SeachTable['Inch2p5_Wt2'], 0, 1, 'R');
$pdf->SetXY(90, 110);
$pdf->Cell(25, 4, $SeachTable['Inch2_Wt2'], 0, 1, 'R');
$pdf->SetXY(90, 114);
$pdf->Cell(25, 4, $SeachTable['Inch1p5_Wt2'], 0, 1, 'R');
$pdf->SetXY(90, 118.5);
$pdf->Cell(25, 4, $SeachTable['Inch1_Wt2'], 0, 1, 'R');
$pdf->SetXY(90, 123);
$pdf->Cell(25, 4, $SeachTable['Inch3p4_Wt2'], 0, 1, 'R');
$pdf->SetXY(90, 127.5);
$pdf->Cell(25, 4, $SeachTable['Inch1p2_Wt2'], 0, 1, 'R');
$pdf->SetXY(90, 132);
$pdf->Cell(25, 4, $SeachTable['Inch3p8_Wt2'], 0, 1, 'R');
$pdf->SetXY(90, 136.2);
$pdf->Cell(25, 4, $SeachTable['InchNo4_Wt2'], 0, 1, 'R');
$pdf->SetXY(90, 141);
$pdf->Cell(25, 4, $SeachTable['InchTotal_Wt2'], 0, 1, 'R');
$pdf->SetXY(158, 96);
$pdf->Cell(23, 4, $SeachTable['Inch3p5_Wt3'], 0, 1, 'R');
$pdf->SetXY(158, 100);
$pdf->Cell(23, 5, $SeachTable['Inch3_Wt3'], 0, 1, 'R');
$pdf->SetXY(158, 105.5);
$pdf->Cell(23, 4, $SeachTable['Inch2p5_Wt3'], 0, 1, 'R');
$pdf->SetXY(158, 110);
$pdf->Cell(23, 4, $SeachTable['Inch2_Wt3'], 0, 1, 'R');
$pdf->SetXY(158, 114);
$pdf->Cell(23, 4, $SeachTable['Inch1p5_Wt3'], 0, 1, 'R');
$pdf->SetXY(158, 118.5);
$pdf->Cell(23, 4, $SeachTable['Inch1_Wt3'], 0, 1, 'R');
$pdf->SetXY(158, 123);
$pdf->Cell(23, 4, $SeachTable['Inch3p4_Wt3'], 0, 1, 'R');
$pdf->SetXY(158, 127.5);
$pdf->Cell(23, 4, $SeachTable['Inch1p2_Wt3'], 0, 1, 'R');
$pdf->SetXY(158, 132);
$pdf->Cell(23, 4, $SeachTable['Inch3p8_Wt3'], 0, 1, 'R');
$pdf->SetXY(158, 136.2);
$pdf->Cell(23, 4, $SeachTable['InchNo4_Wt3'], 0, 1, 'R');
$pdf->SetXY(158, 141);
$pdf->Cell(23, 4, $SeachTable['InchTotal_Wt3'], 0, 1, 'R');
//Results
$pdf->SetXY(69.5, 149);
$pdf->Cell(20, 5, $SeachTable['Specific_Gravity_OD'], 0, 1, 'C');
$pdf->SetXY(69.5, 153.5);
$pdf->Cell(20, 5, $SeachTable['Specific_Gravity_SSD'], 0, 1, 'C');
$pdf->SetXY(69.5, 158);
$pdf->Cell(20, 5, $SeachTable['Apparent_Specific_Gravity'], 0, 1, 'C');
$pdf->SetXY(69.5, 162.9);
$pdf->Cell(20, 4, $SeachTable['Percent_Absortion'], 0, 1, 'C');
//Comments & Corrective action
$pdf->SetXY(117, 193);
$pdf->MultiCell(110, 4,  $SeachTable['Comments'], 1, 'L');



$pdf->Output();
?>