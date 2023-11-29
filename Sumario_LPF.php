<?php

$spreadsheet = require_once __DIR__.'/libs/PhpSpreadsheet/src/PhpSpreadsheet/Spreadsheet.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;


// Crear una nueva instancia de Spreadsheet
$spreadsheet = new Spreadsheet();

// ... Trabaja con la hoja de cálculo ...

// Guardar el archivo de Excel en formato xlsx
$writer = new Xlsx($spreadsheet);
$writer->save('hola-mundo.xlsx');

?>