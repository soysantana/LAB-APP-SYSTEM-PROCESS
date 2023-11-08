<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$SeachTable = find_by_id('moisture_content', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(300, 260));

// Importar una página de otro PDF
$pdf->setSourceFile('Barrick-Moisture-Content.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

//Project Information
$pdf->SetFont('Arial', '', 9);
$pdf->SetXY(58.5, 46);
$pdf->Cell(25, 5, 'Pueblo Viejo', 1, 1, 'L');
$pdf->SetXY(58.5, 51);
$pdf->Cell(25, 4, '0011-373', 1, 1, 'L');
$pdf->SetXY(58.5, 55.5);
$pdf->Cell(25, 5, 'PVJ2', 1, 1, 'L');
//Laboratory Information
$pdf->SetXY(137, 46);
$pdf->Cell(27, 5, 'PVDJ Soil Lab', 1, 1, 'L');
$pdf->SetXY(137, 51);
$pdf->Cell(27, 4, $SeachTable['Technician'], 1, 1, 'L');
$pdf->SetXY(137, 55.5);
$pdf->Cell(27, 5, $SeachTable['Test_Start_Date'], 1, 1, 'L');
$pdf->SetXY(196, 46);
$pdf->Cell(26, 5, $SeachTable['Report_Date'], 1, 1, 'L');
$pdf->SetXY(196, 51);
$pdf->Cell(26, 4, $SeachTable['Standard'], 1, 1, 'L');
//Sample Information
$pdf->SetXY(58.5, 70);
$pdf->Cell(25, 4, $SeachTable['Structure'], 1, 1, 'L');
$pdf->SetXY(58.5, 74);
$pdf->Cell(25, 5, $SeachTable['Area'], 1, 1, 'L');
$pdf->SetXY(58.5, 79);
$pdf->Cell(25, 4, $SeachTable['Source'], 1, 1, 'L');
$pdf->SetXY(58.5, 83.5);
$pdf->Cell(25, 4, $SeachTable['Sample_Date'], 1, 1, 'L');
$pdf->SetXY(58.5, 88);
$pdf->Cell(25, 4, 'AA', 1, 1, 'L');
$pdf->SetXY(58.5, 92.5);
$pdf->Cell(25, 4, $SeachTable['North'], 1, 1, 'L');
$pdf->SetXY(58.5, 97);
$pdf->Cell(25, 4, $SeachTable['East'], 1, 1, 'L');
$pdf->SetXY(58.5, 101);
$pdf->Cell(25, 5, $SeachTable['Elev'], 1, 1, 'L');
$pdf->SetXY(58.5, 106);
$pdf->Cell(25, 5, $SeachTable['Sample_Number'], 1, 1, 'L');
$pdf->SetXY(58.5, 111.5);
$pdf->Cell(25, 5, $SeachTable['Material_Type'], 1, 1, 'L');
$pdf->SetXY(58.5, 116);
$pdf->Cell(25, 5, $SeachTable['Depth_From'], 1, 1, 'L');

$pdf->Output();

?>