<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$bts = find_by_id('splitting_tensile_strenght', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(330, 380));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-80982_BTS_Rev 3.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(50, 46);
$pdf->Cell(21, 5, remove_junk(ucwords($bts['Technician'])), 0, 1, 'C');
$pdf->SetXY(50, 51);
$pdf->Cell(21, 5, "nose", 0, 1, 'C');

$pdf->SetXY(150, 40);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Standard'])), 0, 1, 'C');
$pdf->SetXY(150, 46);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(150, 51);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(240, 40);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Method'])), 0, 1, 'C');
$pdf->SetXY(240, 46);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Extraction_Equipment'])), 0, 1, 'C');
$pdf->SetXY(240, 51);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Cutter_Equipment'])), 0, 1, 'C');
$pdf->SetXY(240, 57);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Test_Device'])), 0, 1, 'C');

$pdf->SetXY(50, 66);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Structure'])), 0, 1, 'C');
$pdf->SetXY(50, 72);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Area'])), 0, 1, 'C');
$pdf->SetXY(50, 77);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Source'])), 0, 1, 'C');
$pdf->SetXY(50, 82);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(150, 66);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(150, 72);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(150, 77);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(150, 82);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Elev'])), 0, 1, 'C');

$pdf->SetXY(240, 66);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(240, 72);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(240, 77);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['North'])), 0, 1, 'C');
$pdf->SetXY(240, 82);
$pdf->Cell(21, 6, remove_junk(ucwords($bts['East'])), 0, 1, 'C');

// test information
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(54, 113);
$pdf->Cell(33, 5, remove_junk(ucwords($bts['Diameter_D_cm_No1'])), 0, 1, 'C');
$pdf->SetXY(87, 113);
$pdf->Cell(20, 5, remove_junk(ucwords($bts['Thicness_t_cm_No1'])), 0, 1, 'C');
$pdf->SetXY(107, 113);
$pdf->Cell(30, 5, remove_junk(ucwords($bts['Relation_td_No1'])), 0, 1, 'C');
$pdf->SetXY(137, 113);
$pdf->Cell(29, 5, remove_junk(ucwords($bts['Loading_Rate_KNs_No1'])), 0, 1, 'C');
$pdf->SetXY(166, 113);
$pdf->Cell(23, 5, remove_junk(ucwords($bts['Time_To_Failure_s_No1'])), 0, 1, 'C');
$pdf->SetXY(189, 113);
$pdf->Cell(40, 5, remove_junk(ucwords($bts['Max_Load_kN_No1'])), 0, 1, 'C');
$pdf->SetXY(229, 113);
$pdf->Cell(36, 5, remove_junk(ucwords($bts['Tensile_Strength_Mpa_No1'])), 0, 1, 'C');
$pdf->SetXY(265, 113);
$pdf->Cell(35, 5, remove_junk(ucwords($bts['Failure_Type_No1'])), 0, 1, 'C');

$pdf->SetXY(54, 118);
$pdf->Cell(33, 5, remove_junk(ucwords($bts['Diameter_D_cm_No2'])), 0, 1, 'C');
$pdf->SetXY(87, 118);
$pdf->Cell(20, 5, remove_junk(ucwords($bts['Thicness_t_cm_No2'])), 0, 1, 'C');
$pdf->SetXY(107, 118);
$pdf->Cell(30, 5, remove_junk(ucwords($bts['Relation_td_No2'])), 0, 1, 'C');
$pdf->SetXY(137, 118);
$pdf->Cell(29, 5, remove_junk(ucwords($bts['Loading_Rate_KNs_No2'])), 0, 1, 'C');
$pdf->SetXY(166, 118);
$pdf->Cell(23, 5, remove_junk(ucwords($bts['Time_To_Failure_s_No2'])), 0, 1, 'C');
$pdf->SetXY(189, 118);
$pdf->Cell(40, 5, remove_junk(ucwords($bts['Max_Load_kN_No2'])), 0, 1, 'C');
$pdf->SetXY(229, 118);
$pdf->Cell(36, 5, remove_junk(ucwords($bts['Tensile_Strength_Mpa_No2'])), 0, 1, 'C');
$pdf->SetXY(265, 118);
$pdf->Cell(35, 5, remove_junk(ucwords($bts['Failure_Type_No2'])), 0, 1, 'C');

$pdf->SetXY(54, 123);
$pdf->Cell(33, 5, remove_junk(ucwords($bts['Diameter_D_cm_No3'])), 0, 1, 'C');
$pdf->SetXY(87, 123);
$pdf->Cell(20, 5, remove_junk(ucwords($bts['Thicness_t_cm_No3'])), 0, 1, 'C');
$pdf->SetXY(107, 123);
$pdf->Cell(30, 5, remove_junk(ucwords($bts['Relation_td_No3'])), 0, 1, 'C');
$pdf->SetXY(137, 123);
$pdf->Cell(29, 5, remove_junk(ucwords($bts['Loading_Rate_KNs_No3'])), 0, 1, 'C');
$pdf->SetXY(166, 123);
$pdf->Cell(23, 5, remove_junk(ucwords($bts['Time_To_Failure_s_No3'])), 0, 1, 'C');
$pdf->SetXY(189, 123);
$pdf->Cell(40, 5, remove_junk(ucwords($bts['Max_Load_kN_No3'])), 0, 1, 'C');
$pdf->SetXY(229, 123);
$pdf->Cell(36, 5, remove_junk(ucwords($bts['Tensile_Strength_Mpa_No3'])), 0, 1, 'C');
$pdf->SetXY(265, 123);
$pdf->Cell(35, 5, remove_junk(ucwords($bts['Failure_Type_No3'])), 0, 1, 'C');

$pdf->SetXY(54, 128);
$pdf->Cell(33, 5, remove_junk(ucwords($bts['Diameter_D_cm_No4'])), 0, 1, 'C');
$pdf->SetXY(87, 128);
$pdf->Cell(20, 5, remove_junk(ucwords($bts['Thicness_t_cm_No4'])), 0, 1, 'C');
$pdf->SetXY(107, 128);
$pdf->Cell(30, 5, remove_junk(ucwords($bts['Relation_td_No4'])), 0, 1, 'C');
$pdf->SetXY(137, 128);
$pdf->Cell(29, 5, remove_junk(ucwords($bts['Loading_Rate_KNs_No4'])), 0, 1, 'C');
$pdf->SetXY(166, 128);
$pdf->Cell(23, 5, remove_junk(ucwords($bts['Time_To_Failure_s_No4'])), 0, 1, 'C');
$pdf->SetXY(189, 128);
$pdf->Cell(40, 5, remove_junk(ucwords($bts['Max_Load_kN_No4'])), 0, 1, 'C');
$pdf->SetXY(229, 128);
$pdf->Cell(36, 5, remove_junk(ucwords($bts['Tensile_Strength_Mpa_No4'])), 0, 1, 'C');
$pdf->SetXY(265, 128);
$pdf->Cell(35, 5, remove_junk(ucwords($bts['Failure_Type_No4'])), 0, 1, 'C');

$pdf->SetXY(54, 133);
$pdf->Cell(33, 5, remove_junk(ucwords($bts['Diameter_D_cm_No5'])), 0, 1, 'C');
$pdf->SetXY(87, 133);
$pdf->Cell(20, 5, remove_junk(ucwords($bts['Thicness_t_cm_No5'])), 0, 1, 'C');
$pdf->SetXY(107, 133);
$pdf->Cell(30, 5, remove_junk(ucwords($bts['Relation_td_No5'])), 0, 1, 'C');
$pdf->SetXY(137, 133);
$pdf->Cell(29, 5, remove_junk(ucwords($bts['Loading_Rate_KNs_No5'])), 0, 1, 'C');
$pdf->SetXY(166, 133);
$pdf->Cell(23, 5, remove_junk(ucwords($bts['Time_To_Failure_s_No5'])), 0, 1, 'C');
$pdf->SetXY(189, 133);
$pdf->Cell(40, 5, remove_junk(ucwords($bts['Max_Load_kN_No5'])), 0, 1, 'C');
$pdf->SetXY(229, 133);
$pdf->Cell(36, 5, remove_junk(ucwords($bts['Tensile_Strength_Mpa_No5'])), 0, 1, 'C');
$pdf->SetXY(265, 133);
$pdf->Cell(35, 5, remove_junk(ucwords($bts['Failure_Type_No5'])), 0, 1, 'C');

$pdf->SetXY(54, 138);
$pdf->Cell(33, 5, remove_junk(ucwords($bts['Diameter_D_cm_No6'])), 0, 1, 'C');
$pdf->SetXY(87, 138);
$pdf->Cell(20, 5, remove_junk(ucwords($bts['Thicness_t_cm_No6'])), 0, 1, 'C');
$pdf->SetXY(107, 138);
$pdf->Cell(30, 5, remove_junk(ucwords($bts['Relation_td_No6'])), 0, 1, 'C');
$pdf->SetXY(137, 138);
$pdf->Cell(29, 5, remove_junk(ucwords($bts['Loading_Rate_KNs_No6'])), 0, 1, 'C');
$pdf->SetXY(166, 138);
$pdf->Cell(23, 5, remove_junk(ucwords($bts['Time_To_Failure_s_No6'])), 0, 1, 'C');
$pdf->SetXY(189, 138);
$pdf->Cell(40, 5, remove_junk(ucwords($bts['Max_Load_kN_No6'])), 0, 1, 'C');
$pdf->SetXY(229, 138);
$pdf->Cell(36, 5, remove_junk(ucwords($bts['Tensile_Strength_Mpa_No6'])), 0, 1, 'C');
$pdf->SetXY(265, 138);
$pdf->Cell(35, 5, remove_junk(ucwords($bts['Failure_Type_No6'])), 0, 1, 'C');

$pdf->SetXY(54, 143);
$pdf->Cell(33, 5, remove_junk(ucwords($bts['Diameter_D_cm_No7'])), 0, 1, 'C');
$pdf->SetXY(87, 143);
$pdf->Cell(20, 5, remove_junk(ucwords($bts['Thicness_t_cm_No7'])), 0, 1, 'C');
$pdf->SetXY(107, 143);
$pdf->Cell(30, 5, remove_junk(ucwords($bts['Relation_td_No7'])), 0, 1, 'C');
$pdf->SetXY(137, 143);
$pdf->Cell(29, 5, remove_junk(ucwords($bts['Loading_Rate_KNs_No7'])), 0, 1, 'C');
$pdf->SetXY(166, 143);
$pdf->Cell(23, 5, remove_junk(ucwords($bts['Time_To_Failure_s_No7'])), 0, 1, 'C');
$pdf->SetXY(189, 143);
$pdf->Cell(40, 5, remove_junk(ucwords($bts['Max_Load_kN_No7'])), 0, 1, 'C');
$pdf->SetXY(229, 143);
$pdf->Cell(36, 5, remove_junk(ucwords($bts['Tensile_Strength_Mpa_No7'])), 0, 1, 'C');
$pdf->SetXY(265, 143);
$pdf->Cell(35, 5, remove_junk(ucwords($bts['Failure_Type_No7'])), 0, 1, 'C');

$pdf->SetXY(54, 148);
$pdf->Cell(33, 5, remove_junk(ucwords($bts['Diameter_D_cm_No8'])), 0, 1, 'C');
$pdf->SetXY(87, 148);
$pdf->Cell(20, 5, remove_junk(ucwords($bts['Thicness_t_cm_No8'])), 0, 1, 'C');
$pdf->SetXY(107, 148);
$pdf->Cell(30, 5, remove_junk(ucwords($bts['Relation_td_No8'])), 0, 1, 'C');
$pdf->SetXY(137, 148);
$pdf->Cell(29, 5, remove_junk(ucwords($bts['Loading_Rate_KNs_No8'])), 0, 1, 'C');
$pdf->SetXY(166, 148);
$pdf->Cell(23, 5, remove_junk(ucwords($bts['Time_To_Failure_s_No8'])), 0, 1, 'C');
$pdf->SetXY(189, 148);
$pdf->Cell(40, 5, remove_junk(ucwords($bts['Max_Load_kN_No8'])), 0, 1, 'C');
$pdf->SetXY(229, 148);
$pdf->Cell(36, 5, remove_junk(ucwords($bts['Tensile_Strength_Mpa_No8'])), 0, 1, 'C');
$pdf->SetXY(265, 148);
$pdf->Cell(35, 5, remove_junk(ucwords($bts['Failure_Type_No8'])), 0, 1, 'C');

$pdf->SetXY(54, 153);
$pdf->Cell(33, 5, remove_junk(ucwords($bts['Diameter_D_cm_No9'])), 0, 1, 'C');
$pdf->SetXY(87, 153);
$pdf->Cell(20, 5, remove_junk(ucwords($bts['Thicness_t_cm_No9'])), 0, 1, 'C');
$pdf->SetXY(107, 153);
$pdf->Cell(30, 5, remove_junk(ucwords($bts['Relation_td_No9'])), 0, 1, 'C');
$pdf->SetXY(137, 153);
$pdf->Cell(29, 5, remove_junk(ucwords($bts['Loading_Rate_KNs_No9'])), 0, 1, 'C');
$pdf->SetXY(166, 153);
$pdf->Cell(23, 5, remove_junk(ucwords($bts['Time_To_Failure_s_No9'])), 0, 1, 'C');
$pdf->SetXY(189, 153);
$pdf->Cell(40, 5, remove_junk(ucwords($bts['Max_Load_kN_No9'])), 0, 1, 'C');
$pdf->SetXY(229, 153);
$pdf->Cell(36, 5, remove_junk(ucwords($bts['Tensile_Strength_Mpa_No9'])), 0, 1, 'C');
$pdf->SetXY(265, 153);
$pdf->Cell(35, 5, remove_junk(ucwords($bts['Failure_Type_No9'])), 0, 1, 'C');

$pdf->SetXY(54, 158);
$pdf->Cell(33, 5, remove_junk(ucwords($bts['Diameter_D_cm_No10'])), 0, 1, 'C');
$pdf->SetXY(87, 158);
$pdf->Cell(20, 5, remove_junk(ucwords($bts['Thicness_t_cm_No10'])), 0, 1, 'C');
$pdf->SetXY(107, 158);
$pdf->Cell(30, 5, remove_junk(ucwords($bts['Relation_td_No10'])), 0, 1, 'C');
$pdf->SetXY(137, 158);
$pdf->Cell(29, 5, remove_junk(ucwords($bts['Loading_Rate_KNs_No10'])), 0, 1, 'C');
$pdf->SetXY(166, 158);
$pdf->Cell(23, 5, remove_junk(ucwords($bts['Time_To_Failure_s_No10'])), 0, 1, 'C');
$pdf->SetXY(189, 158);
$pdf->Cell(40, 5, remove_junk(ucwords($bts['Max_Load_kN_No10'])), 0, 1, 'C');
$pdf->SetXY(229, 158);
$pdf->Cell(36, 5, remove_junk(ucwords($bts['Tensile_Strength_Mpa_No10'])), 0, 1, 'C');
$pdf->SetXY(265, 158);
$pdf->Cell(35, 5, remove_junk(ucwords($bts['Failure_Type_No10'])), 0, 1, 'C');

$pdf->SetXY(54, 163);
$pdf->Cell(33, 9, remove_junk(ucwords($bts['Average_No1'])), 0, 1, 'C');
$pdf->SetXY(87, 163);
$pdf->Cell(20, 9, remove_junk(ucwords($bts['Average_No2'])), 0, 1, 'C');
$pdf->SetXY(107, 163);
$pdf->Cell(30, 9, remove_junk(ucwords($bts['Average_No3'])), 0, 1, 'C');
$pdf->SetXY(137, 163);
$pdf->Cell(29, 9, remove_junk(ucwords($bts['Average_No4'])), 0, 1, 'C');
$pdf->SetXY(166, 163);
$pdf->Cell(23, 9, remove_junk(ucwords($bts['Average_No5'])), 0, 1, 'C');
$pdf->SetXY(189, 163);
$pdf->Cell(40, 9, remove_junk(ucwords($bts['Average_No6'])), 0, 1, 'C');
$pdf->SetXY(229, 163);
$pdf->Cell(36, 9, remove_junk(ucwords($bts['Average_No7'])), 0, 1, 'C');

// Comments
$pdf->SetXY(22, 287);
$pdf->Cell(278, 55, remove_junk(ucwords($bts['Comments'])), 1, 1, 'C');

/*
// Pictures BTS
$imageData = $bts['Speciment_Before_Test'];
$imageFileName1 = 'temp_image1.png'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName1, $imageData);
$pdf->SetXY(25, 180);
$cellWidth = 109;
$cellHeight = 80;
$imagePath1 = "$imageFileName1";
$pdf->Image($imagePath1, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName1);

$imageData = $bts['Speciment_After_Test'];
$imageFileName2 = 'temp_image2.png'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName2, $imageData);
$pdf->SetXY(176, 180);
$cellWidth = 109;
$cellHeight = 80;
$imagePath2 = "$imageFileName2";
$pdf->Image($imagePath2, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 0, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName2);
*/

$pdf->Output();
?>