
<?php
// Incluir el autoloader de PHPSpreadsheet
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Crear una instancia de Spreadsheet
$spreadsheet = new Spreadsheet();

// Obtener la hoja activa del libro de trabajo
$sheet = $spreadsheet->getActiveSheet();

// Escribir datos en celdas
$sheet->setCellValue('A1', 'Hola');
$sheet->setCellValue('B1', 'Mundo');

// Crear un objeto Writer (Escritor) para guardar el archivo
$writer = new Xlsx($spreadsheet);

// Definir la ruta donde se guardará el archivo
$filePath = 'ruta/donde/guardar/archivo.xlsx'; // Reemplaza con tu ruta y nombre de archivo

// Guardar el archivo
$writer->save($filePath);

echo "Archivo Excel creado correctamente en: $filePath";
?>
