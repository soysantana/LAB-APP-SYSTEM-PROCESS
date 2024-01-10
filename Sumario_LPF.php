<?php

require 'js/vendor/autoload.php';
require_once('includes/load.php');

$SeachLimit = find_by_sql("SELECT * FROM atterberg_limit ORDER BY Sample_Date ASC");
$SeachMoisture = find_by_sql("SELECT * FROM moisture_content ORDER BY Sample_Date ASC");
$SeachGrainsize = find_by_sql("SELECT * FROM grain_size ORDER BY Sample_Date ASC");
$SeachProctor = find_by_sql("SELECT * FROM standard_proctor ORDER BY Sample_Date ASC");
$SeachGravityAbsortion = find_by_sql("SELECT * FROM specific_gravity_absortion ORDER BY Sample_Date ASC");

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

$spreadsheet = new Spreadsheet();

$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle('Atterberg Limit');

$sheet->setCellValue('A1', 'Sample Name');
$sheet->setCellValue('B1', 'Sample Number');
$sheet->setCellValue('C1', 'Struture Name');
$sheet->setCellValue('D1', 'Work Area');
$sheet->setCellValue('E1', 'Borrow Source');
$sheet->setCellValue('F1', 'Northing (m)');
$sheet->setCellValue('G1', 'Easting (m)');
$sheet->setCellValue('H1', 'Elevation (m)');
$sheet->setCellValue('I1', 'Material Type');
$sheet->setCellValue('J1', 'Moisture Natural');
$sheet->setCellValue('K1', 'Liquid Limit (%)');
$sheet->setCellValue('L1', 'Plastic Limit (%)');
$sheet->setCellValue('M1', 'Plasticity Index (%)');
$sheet->setCellValue('N1', 'Liquidity Index (%)');
$sheet->setCellValue('O1', 'ASTM-UCS Soil Classification');
$sheet->setCellValue('P1', 'Comments');

$titleStyle = [
    'font' => ['color' => ['rgb' => '000000']],
    'alignment' => ['wrapText' => true],
];
$sheet->getStyle('A1:P1')->applyFromArray($titleStyle);

$row = 2;

foreach ($SeachLimit as $Resultados):
    $sheet->setCellValue('A' . $row, $Resultados['Sample_ID']);
    $sheet->setCellValue('B' . $row, $Resultados['Sample_Number']);
    $sheet->setCellValue('C' . $row, $Resultados['Structure']);
    $sheet->setCellValue('D' . $row, $Resultados['Area']);
    $sheet->setCellValue('E' . $row, $Resultados['Source']);
    $sheet->setCellValue('F' . $row, $Resultados['North']);
    $sheet->setCellValue('G' . $row, $Resultados['East']);
    $sheet->setCellValue('H' . $row, $Resultados['Elev']);
    $sheet->setCellValue('I' . $row, $Resultados['Material_Type']);
    $sheet->setCellValue('J' . $row, $Resultados['Nat_Mc']);
    $sheet->setCellValue('K' . $row, $Resultados['Liquid_Limit_Porce']);
    $sheet->setCellValue('L' . $row, $Resultados['Plastic_Limit_Porce']);
    $sheet->setCellValue('M' . $row, $Resultados['Plasticity_Index_Porce']);
    $sheet->setCellValue('N' . $row, $Resultados['Liquidity_Index_Porce']);
    $sheet->setCellValue('O' . $row, $Resultados['Classification']);
    $sheet->setCellValue('P' . $row, $Resultados['Comments']);

$dataStyle = [
    'alignment' => ['wrapText' => true],
];
$sheet->getStyle('A' . $row . ':P' . $row)->applyFromArray($dataStyle);

    $row++;
endforeach;

// Crear una segunda hoja
$secondSheet = $spreadsheet->createSheet();
$secondSheet->setTitle('Moisture Content');

$secondSheet->setCellValue('A1', 'Sample Name');
$secondSheet->setCellValue('B1', 'Sample Number');
$secondSheet->setCellValue('C1', 'Structure Name');
$secondSheet->setCellValue('D1', 'Work Area');
$secondSheet->setCellValue('E1', 'Borrow Source');
$secondSheet->setCellValue('F1', 'Northing (m)');
$secondSheet->setCellValue('G1', 'Easting (m)');
$secondSheet->setCellValue('H1', 'Elevation (m)');
$secondSheet->setCellValue('I1', 'Material Type');
$secondSheet->setCellValue('J1', 'Oven Moisture Content (%)');
$secondSheet->setCellValue('K1', 'Test Method');

$titleStyle = [
    'font' => ['color' => ['rgb' => '000000']],
    'alignment' => ['wrapText' => true],
];
$secondSheet->getStyle('A1:K1')->applyFromArray($titleStyle);

$row = 2;

foreach ($SeachMoisture as $Moisture):
    $secondSheet->setCellValue('A' . $row, $Moisture['Sample_ID']);
    $secondSheet->setCellValue('B' . $row, $Moisture['Sample_Number']);
    $secondSheet->setCellValue('C' . $row, $Moisture['Structure']);
    $secondSheet->setCellValue('D' . $row, $Moisture['Area']);
    $secondSheet->setCellValue('E' . $row, $Moisture['Source']);
    $secondSheet->setCellValue('F' . $row, $Moisture['North']);
    $secondSheet->setCellValue('G' . $row, $Moisture['East']);
    $secondSheet->setCellValue('H' . $row, $Moisture['Elev']);
    $secondSheet->setCellValue('I' . $row, $Moisture['Material_Type']);
    $secondSheet->setCellValue('J' . $row, $Moisture['Mc']);
    $secondSheet->setCellValue('K' . $row, $Moisture['Standard']);

    $dataStyle = [
        'alignment' => ['wrapText' => true],
    ];
    $secondSheet->getStyle('A' . $row . ':K' . $row)->applyFromArray($dataStyle);

    $row++;
endforeach;



// Crear una tercera hoja
$threeSheet = $spreadsheet->createSheet();
$threeSheet->setTitle('Grain Size');

$threeSheet->setCellValue('A1', 'Sample Name');
$threeSheet->setCellValue('B1', 'Sample Number');
$threeSheet->setCellValue('C1', 'Structure Name');
$threeSheet->setCellValue('D1', 'Work Area');
$threeSheet->setCellValue('E1', 'Borrow Source');
$threeSheet->setCellValue('F1', 'Northing (m)');
$threeSheet->setCellValue('G1', 'Easting (m)');
$threeSheet->setCellValue('H1', 'Elevation (m)');
$threeSheet->setCellValue('I1', 'Material Type');
$threeSheet->setCellValue('J1', '12"');
$threeSheet->setCellValue('K1', '3"');
$threeSheet->setCellValue('L1', '1.5"');
$threeSheet->setCellValue('M1', '1"');
$threeSheet->setCellValue('N1', '3/4"');
$threeSheet->setCellValue('O1', '3/8"');
$threeSheet->setCellValue('P1', 'No.4"');
$threeSheet->setCellValue('Q1', '10');
$threeSheet->setCellValue('R1', '16');
$threeSheet->setCellValue('S1', '20');
$threeSheet->setCellValue('T1', '50');
$threeSheet->setCellValue('U1', '60');
$threeSheet->setCellValue('V1', '200');
$threeSheet->setCellValue('W1', 'Test Method');
$threeSheet->setCellValue('X1', 'Comments');

$titleStyle = [
    'font' => ['color' => ['rgb' => '000000']],
    'alignment' => ['wrapText' => true],
];
$threeSheet->getStyle('A1:X1')->applyFromArray($titleStyle);

$row = 2;

foreach ($SeachGrainsize as $Grainsize):
    $threeSheet->setCellValue('A' . $row, $Grainsize['Sample_ID']);
    $threeSheet->setCellValue('B' . $row, $Grainsize['Sample_Number']);
    $threeSheet->setCellValue('C' . $row, $Grainsize['Structure']);
    $threeSheet->setCellValue('D' . $row, $Grainsize['Area']);
    $threeSheet->setCellValue('E' . $row, $Grainsize['Source']);
    $threeSheet->setCellValue('F' . $row, $Grainsize['North']);
    $threeSheet->setCellValue('G' . $row, $Grainsize['East']);
    $threeSheet->setCellValue('H' . $row, $Grainsize['Elev']);
    $threeSheet->setCellValue('I' . $row, $Grainsize['Material_Type']);
    $threeSheet->setCellValue('J' . $row, $Grainsize['Porce_Pass_12_304']);
    $threeSheet->setCellValue('K' . $row, $Grainsize['Porce_Pass_3_75']);
    $threeSheet->setCellValue('L' . $row, $Grainsize['Porce_Pass_1p5_37']);
    $threeSheet->setCellValue('M' . $row, $Grainsize['Porce_Pass_1_25']);
    $threeSheet->setCellValue('N' . $row, $Grainsize['Porce_Pass_3p4_19']);
    $threeSheet->setCellValue('O' . $row, $Grainsize['Porce_Pass_3p8_9']);
    $threeSheet->setCellValue('P' . $row, $Grainsize['Porce_Pass_No4_4']);
    $threeSheet->setCellValue('Q' . $row, $Grainsize['Porce_Pass_No10_2']);
    $threeSheet->setCellValue('R' . $row, $Grainsize['Porce_Pass_No16_1']);
    $threeSheet->setCellValue('S' . $row, $Grainsize['Porce_Pass_No20_0p85']);
    $threeSheet->setCellValue('T' . $row, $Grainsize['Porce_Pass_No50_0p3']);
    $threeSheet->setCellValue('U' . $row, $Grainsize['Porce_Pass_No60_0p25']);
    $threeSheet->setCellValue('V' . $row, $Grainsize['Porce_Pass_No200_0p075']);
    $threeSheet->setCellValue('W' . $row, '');
    $threeSheet->setCellValue('X' . $row, $Grainsize['Comments']);

    $dataStyle = [
        'alignment' => ['wrapText' => true],
    ];
    $threeSheet->getStyle('A' . $row . ':X' . $row)->applyFromArray($dataStyle);

    $row++;
endforeach;

// Crear una Proctor hoja
$fourSheet = $spreadsheet->createSheet();
$fourSheet->setTitle('Standard Proctor');

$fourSheet->setCellValue('A1', 'Sample Name');
$fourSheet->setCellValue('B1', 'Sample Number');
$fourSheet->setCellValue('C1', 'Structure Name');
$fourSheet->setCellValue('D1', 'Work Area');
$fourSheet->setCellValue('E1', 'Borrow Source');
$fourSheet->setCellValue('F1', 'Northing (m)');
$fourSheet->setCellValue('G1', 'Easting (m)');
$fourSheet->setCellValue('H1', 'Elevation (m)');
$fourSheet->setCellValue('I1', 'Material Type');
$fourSheet->setCellValue('J1', 'Proctor Type (A-B-C)');
$fourSheet->setCellValue('K1', 'Specific Gravity (Gs-Ss) gs/cm3');
$fourSheet->setCellValue('L1', 'Natural Moisture');
$fourSheet->setCellValue('M1', 'Dry Density pt1 (Kg/m³)');
$fourSheet->setCellValue('N1', 'Moisture Content pt1 (%)');
$fourSheet->setCellValue('O1', 'Dry Density pt2 (Kg/m³)');
$fourSheet->setCellValue('P1', 'Moisture Content pt2 (%)');
$fourSheet->setCellValue('Q1', 'Dry Density pt3 (Kg/m³)');
$fourSheet->setCellValue('R1', 'Moisture Content pt3 (%)');
$fourSheet->setCellValue('S1', 'Dry Density pt4 (Kg/m³)');
$fourSheet->setCellValue('T1', 'Moisture Content pt4 (%)');
$fourSheet->setCellValue('U1', 'Dry Density pt5 (Kg/m³)');
$fourSheet->setCellValue('V1', 'Moisture Content pt5 (%)');
$fourSheet->setCellValue('W1', 'Dry Density pt6 (Kg/m³)');
$fourSheet->setCellValue('X1', 'Moisture Content pt6 (%)');
$fourSheet->setCellValue('Y1', 'Dry Density pt7 (Kg/m³)');
$fourSheet->setCellValue('Z1', 'Moisture Content pt7 (%)');
$fourSheet->setCellValue('AA1', 'Dry Density pt8 (Kg/m³)');
$fourSheet->setCellValue('AB1', 'Moisture Content pt8 (%)');
$fourSheet->setCellValue('AC1', 'Max Dry Density (Kg/m3) Proctor');
$fourSheet->setCellValue('AD1', 'Opt moisture content (%) Proctor');
$fourSheet->setCellValue('AE1', 'Test Method');
$fourSheet->setCellValue('AF1', 'Comments');

$titleStyle = [
    'font' => ['color' => ['rgb' => '000000']],
    'alignment' => ['wrapText' => true],
];
$fourSheet->getStyle('A1:AF1')->applyFromArray($titleStyle);

$row = 2;

foreach ($SeachProctor as $Proctor):
    $fourSheet->setCellValue('A' . $row, $Proctor['Sample_ID']);
    $fourSheet->setCellValue('B' . $row, $Proctor['Sample_Number']);
    $fourSheet->setCellValue('C' . $row, $Proctor['Structure']);
    $fourSheet->setCellValue('D' . $row, $Proctor['Area']);
    $fourSheet->setCellValue('E' . $row, $Proctor['Source']);
    $fourSheet->setCellValue('F' . $row, $Proctor['North']);
    $fourSheet->setCellValue('G' . $row, $Proctor['East']);
    $fourSheet->setCellValue('H' . $row, $Proctor['Elev']);
    $fourSheet->setCellValue('I' . $row, $Proctor['Material_Type']);
    $fourSheet->setCellValue('J' . $row, '');
    $fourSheet->setCellValue('K' . $row, $Proctor['SG_NMC']);
    $fourSheet->setCellValue('L' . $row, $Proctor['Natural_MC']);
    $fourSheet->setCellValue('M' . $row, $Proctor['Dry_Density_kgm3_1']);
    $fourSheet->setCellValue('N' . $row, $Proctor['MC_Porce_1']);
    $fourSheet->setCellValue('O' . $row, $Proctor['Dry_Density_kgm3_2']);
    $fourSheet->setCellValue('P' . $row, $Proctor['MC_Porce_2']);
    $fourSheet->setCellValue('Q' . $row, $Proctor['Dry_Density_kgm3_3']);
    $fourSheet->setCellValue('R' . $row, $Proctor['MC_Porce_3']);
    $fourSheet->setCellValue('S' . $row, $Proctor['Dry_Density_kgm3_4']);
    $fourSheet->setCellValue('T' . $row, $Proctor['MC_Porce_4']);
    $fourSheet->setCellValue('U' . $row, $Proctor['Dry_Density_kgm3_5']);
    $fourSheet->setCellValue('V' . $row, $Proctor['MC_Porce_5']);
    $fourSheet->setCellValue('W' . $row, $Proctor['Dry_Density_kgm3_6']);
    $fourSheet->setCellValue('X' . $row, $Proctor['MC_Porce_6']);
    $fourSheet->setCellValue('Y' . $row, '');
    $fourSheet->setCellValue('Z' . $row, '');
    $fourSheet->setCellValue('AA' . $row, '');
    $fourSheet->setCellValue('AB' . $row, '');
    $fourSheet->setCellValue('AC' . $row, $Proctor['Max_Dry_Density_kgm3']);
    $fourSheet->setCellValue('AD' . $row, $Proctor['Optimun_MC_Porce']);
    $fourSheet->setCellValue('AE' . $row, '');
    $fourSheet->setCellValue('AF' . $row, $Proctor['Comments']);

    $dataStyle = [
        'alignment' => ['wrapText' => true],
    ];
    $fourSheet->getStyle('A' . $row . ':AF' . $row)->applyFromArray($dataStyle);

    $row++;
endforeach;


// Crear Specific Gravity hoja
$fiveSheet = $spreadsheet->createSheet();
$fiveSheet->setTitle('Specific Gravity Absortion');

$fiveSheet->setCellValue('A1', 'Sample Name');
$fiveSheet->setCellValue('B1', 'Sample Number');
$fiveSheet->setCellValue('C1', 'Structure Name');
$fiveSheet->setCellValue('D1', 'Work Area');
$fiveSheet->setCellValue('E1', 'Borrow Source');
$fiveSheet->setCellValue('F1', 'Northing (m)');
$fiveSheet->setCellValue('G1', 'Easting (m)');
$fiveSheet->setCellValue('H1', 'Elevation (m)');
$fiveSheet->setCellValue('I1', 'Material Type');
$fiveSheet->setCellValue('J1', 'Specific Gravity (OD)');
$fiveSheet->setCellValue('K1', 'Specific Gravity (SSD)');
$fiveSheet->setCellValue('L1', 'Apparent Specific Gravity (A/(A-C))');
$fiveSheet->setCellValue('M1', 'Percent of Absortion ((B-A)/A)*100)');
$fiveSheet->setCellValue('N1', 'Test Method');
$fiveSheet->setCellValue('O1', 'Comments');

$titleStyle = [
    'font' => ['color' => ['rgb' => '000000']],
    'alignment' => ['wrapText' => true],
];
$fiveSheet->getStyle('A1:O1')->applyFromArray($titleStyle);

$row = 2;

foreach ($SeachGravityAbsortion as $GravityAbsortion):
    $fiveSheet->setCellValue('A' . $row, $GravityAbsortion['Sample_ID']);
    $fiveSheet->setCellValue('B' . $row, $GravityAbsortion['Sample_Number']);
    $fiveSheet->setCellValue('C' . $row, $GravityAbsortion['Structure']);
    $fiveSheet->setCellValue('D' . $row, $GravityAbsortion['Area']);
    $fiveSheet->setCellValue('E' . $row, $GravityAbsortion['Source']);
    $fiveSheet->setCellValue('F' . $row, $GravityAbsortion['North']);
    $fiveSheet->setCellValue('G' . $row, $GravityAbsortion['East']);
    $fiveSheet->setCellValue('H' . $row, $GravityAbsortion['Elev']);
    $fiveSheet->setCellValue('I' . $row, $GravityAbsortion['Material_Type']);
    $fiveSheet->setCellValue('J' . $row, $GravityAbsortion['Specific_Gravity_OD']);
    $fiveSheet->setCellValue('K' . $row, $GravityAbsortion['Specific_Gravity_SSD']);
    $fiveSheet->setCellValue('L' . $row, $GravityAbsortion['Apparent_Specific_Gravity']);
    $fiveSheet->setCellValue('M' . $row, $GravityAbsortion['Percent_Absortion']);
    $fiveSheet->setCellValue('N' . $row, $GravityAbsortion['Standard']);
    $fiveSheet->setCellValue('O' . $row, $GravityAbsortion['Comments']);

    $dataStyle = [
        'alignment' => ['wrapText' => true],
    ];
    $fiveSheet->getStyle('A' . $row . ':O' . $row)->applyFromArray($dataStyle);

    $row++;
endforeach;


$writer = new Xlsx($spreadsheet);
$filePath = 'archivo.xlsx';
$writer->save($filePath);

echo "Archivo Excel creado correctamente en: $filePath";
?>
