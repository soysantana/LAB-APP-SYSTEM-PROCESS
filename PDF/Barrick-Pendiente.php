<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$testType = isset($_GET['testType']) ? $_GET['testType'] : '';

$SeachTable = find_by_sql("SELECT * FROM lista_de_pendiente WHERE Test_Type = '{$testType}' ORDER BY Sample_Date ASC");

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(8.5 * 25.4, 11 * 25.4)); // 1 pulgada = 25.4 mm

// Importar una página de otro PDF
$pdf->setSourceFile('Barrick-Pendiente.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$imagePath = '../uploads/img/Barrick-Logo.jpg';
$pdf->Image($imagePath, 20, 20, 50, 0);

$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(140, 20);
$pdf->Cell(100, 10, '', 0, 1, 'C');


// Calcular el centro de la página
$centerX = $pdf->GetPageWidth() / 2;
$centerY = $pdf->GetPageHeight() / 2;

// Agregar un título a la tabla
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetXY($centerX - 50, 40); // Ajusta la posición del título
$pdf->Cell(100, 10, 'Prioridad de ' . $testType, 0, 1, 'C');

// Definir el ancho de la tabla
$tableWidth = 180; // Ancho total de las celdas de la tabla

// Calcular la posición de la tabla para centrarla
$tableX = $centerX - ($tableWidth / 2);
$tableY = 50; // Ajusta esto según la posición vertical deseada

// Establecer la posición de la tabla
$pdf->SetXY($tableX, $tableY);

// Encabezados de la tabla
$pdf->SetFillColor(200, 220, 255); // Color de fondo
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(60, 10, 'Sample Date', 1, 0, 'C', true);
$pdf->Cell(60, 10, 'Sample Name', 1, 0, 'C', true);
$pdf->Cell(60, 10, 'Sample Number', 1, 1, 'C', true); // Salto de línea después de la última celda

// Tipo Letra
$pdf->SetFont('Arial', '', 10);

foreach ($SeachTable as $Pendiente):
$pdf->SetX($tableX); // Establecer la posición X al inicio de la tabla

$pdf->Cell(60, 10, $Pendiente['Sample_Date'], 1, 0, 'C'); // Cambié la alineación a 'C' para centrar el contenido
$pdf->Cell(60, 10, $Pendiente['Sample_ID'], 1, 0, 'C');
$pdf->Cell(60, 10, $Pendiente['Sample_Number'], 1, 1, 'C'); // Salto de línea después de la última celda
endforeach;


$pdf->Output();
?>
