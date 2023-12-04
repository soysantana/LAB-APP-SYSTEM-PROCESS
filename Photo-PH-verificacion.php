<?php
require_once('includes/load.php');

// Obtén el ID de la muestra desde la URL u otra fuente
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Realiza la verificación utilizando la función find_by_id
$SearchTable = find_by_id('pinhole', $id);

// Verifica si al menos una de las columnas Picture es null
$contieneDatos =
    !empty($SearchTable) &&
    (
        $SearchTable['Picture_1'] === null ||
        $SearchTable['Picture_2'] === null ||
        $SearchTable['Picture_3'] === null ||
        $SearchTable['Picture_4'] === null ||
        $SearchTable['Picture_5'] === null ||
        $SearchTable['Picture_6'] === null ||
        $SearchTable['Picture_7'] === null
    );

// Agrega este bloque de código para ver si estás llegando a esta parte
// y para depurar el valor de $contieneDatos
echo '<pre>';
var_dump($contieneDatos);
echo '</pre>';

// Redirecciona según el resultado de la verificación
if ($contieneDatos) {
    // Al menos una columna es null, redirige a otra_pagina.php
    header("Location: otra_pagina.php");
} else {
    // Todas las columnas tienen datos, redirige a PDF/PhotoLog-PH.php
    header("Location: PDF/PhotoLog-PH.php?id=" . $id);
}

// Asegúrate de que no haya nada después de las redirecciones
exit();
?>
