<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$SearchTable = find_by_id('pinhole', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {
        global $SearchTable;
        $this->SetFont('Arial', 'B', 13);
        $this->Cell(0, 30,  $SearchTable['Sample_ID'] . '-' . $SearchTable['Sample_Number'] . ' Pinhole Photo Log   ', 0, 1, 'R');
    }

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('L', array(350, 220));

// Importar la primera página de otro PDF
$pdf->setSourceFile('PhotoLog-PH.pdf');
$tplIdx1 = $pdf->importPage(1);
$pdf->useTemplate($tplIdx1, 0, 0);

$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(50, 107);
$pdf->Cell(100, 5, 'Effluent of 10, 10, 10 mL collected during the test.', 1, 1, 'C');
$pdf->SetXY(210, 107);
$pdf->Cell(100, 5, 'Effluent of 25, 25, 25 mL collected during the test.', 1, 1, 'C');
$pdf->SetXY(50, 192);
$pdf->Cell(100, 5, 'Effluent of ' . $SearchTable['mL_No7'] . ' mL collected during the test.', 1, 1, 'C');
$pdf->SetXY(210, 192);
$pdf->Cell(100, 5, 'Effluent of ' . $SearchTable['mL_No8'] . ', ' . $SearchTable['mL_No9'] . ', ' . $SearchTable['mL_No10'] . ', ' . $SearchTable['mL_No11'] . ', ' . $SearchTable['mL_No12'] . ' mL collected during the test.', 1, 1, 'C');


$imageData = $SearchTable['Picture_1'];
$imageFileName1 = 'temp_image1.jpg'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName1, $imageData);
$pdf->SetXY(60, 38);
$cellWidth = 70;
$cellHeight = 60;
$imagePath1 = "$imageFileName1";
$pdf->Image($imagePath1, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName1);

$imageData = $SearchTable['Picture_2'];
$imageFileName2 = 'temp_image2.jpg'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName2, $imageData);
$pdf->SetXY(228, 38);
$cellWidth = 70;
$cellHeight = 60;
$imagePath2 = "$imageFileName2";
$pdf->Image($imagePath2, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName2);

$imageData = $SearchTable['Picture_3'];
$imageFileName3 = 'temp_image3.jpg'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName3, $imageData);
$pdf->SetXY(60, 123);
$cellWidth = 70;
$cellHeight = 60;
$imagePath3 = "$imageFileName3";
$pdf->Image($imagePath3, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName3);

$imageData = $SearchTable['Picture_4'];
$imageFileName4 = 'temp_image4.jpg'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName4, $imageData);
$pdf->SetXY(228, 123);
$cellWidth = 70;
$cellHeight = 60;
$imagePath4 = "$imageFileName4";
$pdf->Image($imagePath4, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName4);


// Agregar una segunda página
$pdf->AddPage('L', array(350, 225));

// Importar la segunda página de otro PDF
$tplIdx2 = $pdf->importPage(2); // Cambia el número de página según tus necesidades
$pdf->useTemplate($tplIdx2, 0, 0);

$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(45, 107);
$pdf->Cell(105, 5, 'Effluent of ' . $SearchTable['mL_No13'] . ', ' . $SearchTable['mL_No14'] . ', ' . $SearchTable['mL_No15'] . ', ' . $SearchTable['mL_No16'] . ', ' . $SearchTable['mL_No17'] . ' mL collected during the test.', 1, 1, 'C');
$pdf->SetXY(210, 107);
$pdf->Cell(105, 5, 'Effluent of ' . $SearchTable['mL_No18'] . ', ' . $SearchTable['mL_No19'] . ', ' . $SearchTable['mL_No20'] . ', ' . $SearchTable['mL_No21'] . ', ' . $SearchTable['mL_No22'] . ' mL collected during the test.', 1, 1, 'C');
$pdf->SetXY(130, 196);
$pdf->Cell(100, 5, 'Hole size after test.', 1, 1, 'C');

$imageData = $SearchTable['Picture_5'];
$imageFileName5 = 'temp_image5.jpg'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName5, $imageData);
$pdf->SetXY(60, 38);
$cellWidth = 70;
$cellHeight = 60;
$imagePath5 = "$imageFileName5";
$pdf->Image($imagePath5, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName5);

$imageData = $SearchTable['Picture_6'];
$imageFileName6 = 'temp_image6.jpg'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName6, $imageData);
$pdf->SetXY(228, 38);
$cellWidth = 70;
$cellHeight = 60;
$imagePath6 = "$imageFileName6";
$pdf->Image($imagePath6, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName6);

$imageData = $SearchTable['Picture_7'];
$imageFileName7 = 'temp_image7.jpg'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName7, $imageData);
$pdf->SetXY(150, 128);
$cellWidth = 70;
$cellHeight = 60;
$imagePath7 = "$imageFileName7";
$pdf->Image($imagePath7, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName7);

$pdf->Output();
?>
