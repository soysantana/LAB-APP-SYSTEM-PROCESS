<?php
require('../libs/fpdf/fpdf.php');
require('../libs/fpdi/src/autoload.php');
require_once('../includes/load.php');

$pinhole = find_by_id('pinhole', (int)$_GET['id']);

use setasign\Fpdi\Fpdi;

class PDF extends Fpdi {
    function Header() {}

    function Footer() {}
}

$pdf = new PDF();
$pdf->SetMargins(0, 0, 0);

// Define manualmente el tamaño de página
$pdf->AddPage('P', array(410, 360));

// Importar una página de otro PDF
$pdf->setSourceFile('PV-F-01743_Pinhole Test_Rev. 3.pdf'); // Reemplaza 'ruta/al/archivo.pdf' con la ruta al PDF que deseas importar.
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(60, 49);
$pdf->Cell(30, 5, remove_junk(ucwords($pinhole['Technician'])), 0, 1, 'C');
$pdf->SetXY(60, 54);
$pdf->Cell(30, 5, "nose", 0, 1, 'C');

$pdf->SetXY(167, 43);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Standard'])), 0, 1, 'C');
$pdf->SetXY(167, 49);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Test_Start_Date'])), 0, 1, 'C');
$pdf->SetXY(167, 55);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Report_Date'])), 0, 1, 'C');

$pdf->SetXY(250, 42);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Method'])), 0, 1, 'C');
$pdf->SetXY(270, 51);
//$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Split_Method'])), 1, 1, 'C');

$pdf->SetXY(60, 69);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Structure'])), 0, 1, 'C');
$pdf->SetXY(60, 75);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Area'])), 0, 1, 'C');
$pdf->SetXY(60, 80);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Source'])), 0, 1, 'C');
$pdf->SetXY(60, 85);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Material_Type'])), 0, 1, 'C');

$pdf->SetXY(167, 69);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Sample_ID'])), 0, 1, 'C');
$pdf->SetXY(167, 75);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Sample_Number'])), 0, 1, 'C');
$pdf->SetXY(167, 80);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Sample_Date'])), 0, 1, 'C');
$pdf->SetXY(167, 85);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Elev'])), 0, 1, 'C');

$pdf->SetXY(250, 69);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Depth_From'])), 0, 1, 'C');
$pdf->SetXY(250, 74);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['Depth_To'])), 0, 1, 'C');
$pdf->SetXY(250, 80);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['North'])), 0, 1, 'C');
$pdf->SetXY(250, 85);
$pdf->Cell(30, 6, remove_junk(ucwords($pinhole['East'])), 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);

// TESTING INFORMATION
$pdf->SetXY(104, 101);
$pdf->Cell(28, 6, remove_junk(ucwords($pinhole['Moisture_Content_Before_Test_MC_Porce'])), 0, 1, 'C');
$pdf->SetXY(104, 108);
$pdf->Cell(28, 6, remove_junk(ucwords($pinhole['Specific_Gravity_Estimated_or_Measured'])), 0, 1, 'C');
$pdf->SetXY(104, 115);
$pdf->Cell(28, 6, remove_junk(ucwords($pinhole['Max_Dry_Density_g_cm3'])), 0, 1, 'C');
$pdf->SetXY(104, 121);
$pdf->Cell(28, 6, remove_junk(ucwords($pinhole['Optimum_Moisture_Content_Porce'])), 0, 1, 'C');
$pdf->SetXY(104, 128);
$pdf->Cell(28, 6, remove_junk(ucwords($pinhole['Wt_Wet_Soil_Mold_gr'])), 0, 1, 'C');
$pdf->SetXY(104, 135);
$pdf->Cell(28, 6, remove_junk(ucwords($pinhole['Wt_Mold_gr'])), 0, 1, 'C');
$pdf->SetXY(104, 142);
$pdf->Cell(28, 6, remove_junk(ucwords($pinhole['Wt_Wet_Soil_gr'])), 0, 1, 'C');
$pdf->SetXY(104, 148);
$pdf->Cell(28, 6, remove_junk(ucwords($pinhole['Vol_Specimen_cm3'])), 0, 1, 'C');
$pdf->SetXY(104, 155);
$pdf->Cell(28, 6, remove_junk(ucwords($pinhole['Wet_Density_gcm3'])), 0, 1, 'C');
$pdf->SetXY(104, 162);
$pdf->Cell(28, 6, remove_junk(ucwords($pinhole['Dry_Density_gcm3'])), 0, 1, 'C');
$pdf->SetXY(104, 169);
$pdf->Cell(28, 6, remove_junk(ucwords($pinhole['Porce_Compaction'])), 0, 1, 'C');
$pdf->SetXY(104, 175);
$pdf->Cell(28, 6, remove_junk(ucwords($pinhole['Moisture_Content_After_Test_Porce'])), 0, 1, 'C');
$pdf->SetXY(104, 181);
$pdf->Cell(28, 6, remove_junk(ucwords($pinhole['Wire_Punch_Diameter_mm'])), 0, 1, 'C');

// TESTING FLOW DISPERSION
$pdf->SetXY(67, 247);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No7'])), 0, 1, 'C');
$pdf->SetXY(67, 252);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No8'])), 0, 1, 'C');
$pdf->SetXY(67, 257);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No9'])), 0, 1, 'C');
$pdf->SetXY(67, 262);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No10'])), 0, 1, 'C');
$pdf->SetXY(67, 267);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No11'])), 0, 1, 'C');
$pdf->SetXY(67, 272);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No12'])), 0, 1, 'C');
$pdf->SetXY(67, 277);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No13'])), 0, 1, 'C');
$pdf->SetXY(67, 282);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No14'])), 0, 1, 'C');
$pdf->SetXY(67, 287);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No15'])), 0, 1, 'C');
$pdf->SetXY(67, 292);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No16'])), 0, 1, 'C');
$pdf->SetXY(67, 297);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No17'])), 0, 1, 'C');
$pdf->SetXY(67, 302);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No18'])), 0, 1, 'C');
$pdf->SetXY(67, 307);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No19'])), 0, 1, 'C');
$pdf->SetXY(67, 312);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No20'])), 0, 1, 'C');
$pdf->SetXY(67, 317);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No21'])), 0, 1, 'C');
$pdf->SetXY(67, 322);
$pdf->Cell(37, 5, remove_junk(ucwords($pinhole['mL_No22'])), 0, 1, 'C');

// seg
$pdf->SetXY(104, 217);
$pdf->Cell(28, 5, remove_junk(ucwords($pinhole['Seg_No1'])), 0, 1, 'C');
$pdf->SetXY(104, 222);
$pdf->Cell(28, 5, remove_junk(ucwords($pinhole['Seg_No2'])), 0, 1, 'C');
$pdf->SetXY(104, 227);
$pdf->Cell(28, 5, remove_junk(ucwords($pinhole['Seg_No3'])), 0, 1, 'C');
$pdf->SetXY(104, 232);
$pdf->Cell(28, 5, remove_junk(ucwords($pinhole['Seg_No4'])), 0, 1, 'C');
$pdf->SetXY(104, 237);
$pdf->Cell(28, 5, remove_junk(ucwords($pinhole['Seg_No5'])), 0, 1, 'C');
$pdf->SetXY(104, 242);
$pdf->Cell(28, 5, remove_junk(ucwords($pinhole['Seg_No6'])), 0, 1, 'C');
$pdf->SetXY(104, 247);
$pdf->Cell(28, 5, remove_junk(ucwords($pinhole['Seg_No7'])), 0, 1, 'C');

// flow rate
$pdf->SetXY(132, 217);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No1'])), 0, 1, 'C');
$pdf->SetXY(132, 222);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No2'])), 0, 1, 'C');
$pdf->SetXY(132, 227);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No3'])), 0, 1, 'C');
$pdf->SetXY(132, 232);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No4'])), 0, 1, 'C');
$pdf->SetXY(132, 237);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No5'])), 0, 1, 'C');
$pdf->SetXY(132, 242);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No6'])), 0, 1, 'C');
$pdf->SetXY(132, 247);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No7'])), 0, 1, 'C');
$pdf->SetXY(132, 252);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No8'])), 0, 1, 'C');
$pdf->SetXY(132, 257);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No9'])), 0, 1, 'C');
$pdf->SetXY(132, 262);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No10'])), 0, 1, 'C');
$pdf->SetXY(132, 267);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No11'])), 0, 1, 'C');
$pdf->SetXY(132, 272);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No12'])), 0, 1, 'C');
$pdf->SetXY(132, 277);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No13'])), 0, 1, 'C');
$pdf->SetXY(132, 282);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No14'])), 0, 1, 'C');
$pdf->SetXY(132, 287);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No15'])), 0, 1, 'C');
$pdf->SetXY(132, 292);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No16'])), 0, 1, 'C');
$pdf->SetXY(132, 297);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No17'])), 0, 1, 'C');
$pdf->SetXY(132, 302);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No18'])), 0, 1, 'C');
$pdf->SetXY(132, 307);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No19'])), 0, 1, 'C');
$pdf->SetXY(132, 312);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No20'])), 0, 1, 'C');
$pdf->SetXY(132, 317);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No21'])), 0, 1, 'C');
$pdf->SetXY(132, 322);
$pdf->Cell(20, 5, remove_junk(ucwords($pinhole['Flow_Rate_No22'])), 0, 1, 'C');

// from side
$pdf->SetXY(152, 217);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No1'])), 0, 1, 'C');
$pdf->SetXY(152, 222);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No2'])), 0, 1, 'C');
$pdf->SetXY(152, 227);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No3'])), 0, 1, 'C');
$pdf->SetXY(152, 232);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No4'])), 0, 1, 'C');
$pdf->SetXY(152, 237);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No5'])), 0, 1, 'C');
$pdf->SetXY(152, 242);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No6'])), 0, 1, 'C');
$pdf->SetXY(152, 247);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No7'])), 0, 1, 'C');
$pdf->SetXY(152, 252);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No8'])), 0, 1, 'C');
$pdf->SetXY(152, 257);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No9'])), 0, 1, 'C');
$pdf->SetXY(152, 262);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No10'])), 0, 1, 'C');
$pdf->SetXY(152, 267);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No11'])), 0, 1, 'C');
$pdf->SetXY(152, 272);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No12'])), 0, 1, 'C');
$pdf->SetXY(152, 277);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No13'])), 0, 1, 'C');
$pdf->SetXY(152, 282);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No14'])), 0, 1, 'C');
$pdf->SetXY(152, 287);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No15'])), 0, 1, 'C');
$pdf->SetXY(152, 292);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No16'])), 0, 1, 'C');
$pdf->SetXY(152, 297);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No17'])), 0, 1, 'C');
$pdf->SetXY(152, 302);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No18'])), 0, 1, 'C');
$pdf->SetXY(152, 307);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No19'])), 0, 1, 'C');
$pdf->SetXY(152, 312);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No20'])), 0, 1, 'C');
$pdf->SetXY(152, 317);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No21'])), 0, 1, 'C');
$pdf->SetXY(152, 322);
$pdf->Cell(32, 5, remove_junk(ucwords($pinhole['From_Side_No22'])), 0, 1, 'C');

// from top
$pdf->SetXY(184, 217);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No1'])), 0, 1, 'C');
$pdf->SetXY(184, 222);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No2'])), 0, 1, 'C');
$pdf->SetXY(184, 227);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No3'])), 0, 1, 'C');
$pdf->SetXY(184, 232);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No4'])), 0, 1, 'C');
$pdf->SetXY(184, 237);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No5'])), 0, 1, 'C');
$pdf->SetXY(184, 242);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No6'])), 0, 1, 'C');
$pdf->SetXY(184, 247);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No7'])), 0, 1, 'C');
$pdf->SetXY(184, 252);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No8'])), 0, 1, 'C');
$pdf->SetXY(184, 257);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No9'])), 0, 1, 'C');
$pdf->SetXY(184, 262);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No10'])), 0, 1, 'C');
$pdf->SetXY(184, 267);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No11'])), 0, 1, 'C');
$pdf->SetXY(184, 272);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No12'])), 0, 1, 'C');
$pdf->SetXY(184, 277);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No13'])), 0, 1, 'C');
$pdf->SetXY(184, 282);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No14'])), 0, 1, 'C');
$pdf->SetXY(184, 287);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No15'])), 0, 1, 'C');
$pdf->SetXY(184, 292);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No16'])), 0, 1, 'C');
$pdf->SetXY(184, 297);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No17'])), 0, 1, 'C');
$pdf->SetXY(184, 302);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No18'])), 0, 1, 'C');
$pdf->SetXY(184, 307);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No19'])), 0, 1, 'C');
$pdf->SetXY(184, 312);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No20'])), 0, 1, 'C');
$pdf->SetXY(184, 317);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No21'])), 0, 1, 'C');
$pdf->SetXY(184, 322);
$pdf->Cell(25, 5, remove_junk(ucwords($pinhole['From_Top_No22'])), 0, 1, 'C');

// Observation
$pdf->SetXY(209, 217);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No1'])), 0, 1, 'C');
$pdf->SetXY(209, 222);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No2'])), 0, 1, 'C');
$pdf->SetXY(209, 227);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No3'])), 0, 1, 'C');
$pdf->SetXY(209, 232);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No4'])), 0, 1, 'C');
$pdf->SetXY(209, 237);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No5'])), 0, 1, 'C');
$pdf->SetXY(209, 242);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No6'])), 0, 1, 'C');
$pdf->SetXY(209, 247);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No7'])), 0, 1, 'C');
$pdf->SetXY(209, 252);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No8'])), 0, 1, 'C');
$pdf->SetXY(209, 257);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No9'])), 0, 1, 'C');
$pdf->SetXY(209, 262);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No10'])), 0, 1, 'C');
$pdf->SetXY(209, 267);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No11'])), 0, 1, 'C');
$pdf->SetXY(209, 272);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No12'])), 0, 1, 'C');
$pdf->SetXY(209, 277);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No13'])), 0, 1, 'C');
$pdf->SetXY(209, 282);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No14'])), 0, 1, 'C');
$pdf->SetXY(209, 287);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No15'])), 0, 1, 'C');
$pdf->SetXY(209, 292);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No16'])), 0, 1, 'C');
$pdf->SetXY(209, 297);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No17'])), 0, 1, 'C');
$pdf->SetXY(209, 302);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No18'])), 0, 1, 'C');
$pdf->SetXY(209, 307);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No19'])), 0, 1, 'C');
$pdf->SetXY(209, 312);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No20'])), 0, 1, 'C');
$pdf->SetXY(209, 317);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No21'])), 0, 1, 'C');
$pdf->SetXY(209, 322);
$pdf->Cell(48, 5, remove_junk(ucwords($pinhole['Observation_No22'])), 0, 1, 'C');

// Hole Size After Test mm Dispersive Classification 1 Comment
$pdf->SetFont('Arial', '', 13);
$pdf->SetXY(257, 217);
$pdf->Cell(48, 110, remove_junk(ucwords($pinhole['Hole_Size_After_Test_mm'])), 0, 1, 'C');
$pdf->SetXY(305, 217);
$pdf->Cell(33, 110, remove_junk(ucwords($pinhole['Dispersive_Classification'])), 0, 1, 'C');
$pdf->SetXY(24, 332);
$pdf->Cell(314, 40, remove_junk(ucwords($pinhole['Comments'])), 0, 1, 'C');


// GRAFICAS DEL PINHOLE
$imageData = $pinhole['Pinhole_Graphic'];
$imageFileName1 = 'temp_image1.png'; // Cambiar el nombre del archivo temporal
// Guardar los datos de la imagen en un archivo temporal
file_put_contents($imageFileName1, $imageData);
$pdf->SetXY(145, 95);
$cellWidth = 190;
$cellHeight = 100;
$imagePath1 = "$imageFileName1";
$pdf->Image($imagePath1, $pdf->GetX(), $pdf->GetY(), $cellWidth, $cellHeight);
$pdf->Cell($cellWidth, $cellHeight, "", 1, 1, 'C');
// Eliminar el archivo temporal de la primera imagen
unlink($imageFileName1);



$pdf->Output();
?>