<?php
$page_title = 'Rendimiento';
require_once('includes/load.php');
page_require_level(3);

// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "index_test_lab";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Función para obtener nombres de los ensayos
function obtenerNombresEnsayos($conn) {
    // Crear un array para almacenar los nombres de los ensayos
    $ensayos = [];

    // Consultar las columnas Test_Type1 a Test_Type20
    for ($i = 1; $i <= 20; $i++) {
        $sql = "SELECT DISTINCT Test_Type$i FROM lab_test_requisition_form WHERE Test_Type$i IS NOT NULL";
        $result = $conn->query($sql);

        // Si hay resultados, agregar a la lista de ensayos
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ensayos[] = $row["Test_Type$i"];
            }
        }
    }
    return array_unique($ensayos); // Eliminar duplicados
}

// Función para obtener muestras registradas por tipo de ensayo
function obtenerMuestrasRegistradasPorTipo($conn, $interval) {
    $sql = "SELECT Register_By, COUNT(*) as Total, ";

    // Agregar dinámicamente los SUM para Test_Type1 a Test_Type20
    for ($i = 1; $i <= 20; $i++) {
        $sql .= "SUM(Test_Type$i IS NOT NULL) AS Total_Test_Type$i";
        if ($i < 20) {
            $sql .= ", ";
        }
    }

    $sql .= " FROM lab_test_requisition_form 
              WHERE DATE(Registed_Date) $interval
              GROUP BY Register_By";

    return $conn->query($sql);
}

// Función para obtener muestras preparadas, realizadas y entregadas por técnico y tipo de ensayo (solo Test_Type)
function obtenerMuestrasPorTipo($conn, $interval, $tabla, $fechaCampo) {
    $sql = "SELECT Tecnico, Test_Type, COUNT(*) as Total
            FROM $tabla
            WHERE DATE($fechaCampo) $interval
            GROUP BY Tecnico, Test_Type";

    return $conn->query($sql);
}

// Definir los intervalos (diario, semanal, mensual, anual)
$intervalos = [
    'Diario' => "= CURDATE()",
    'Semanal' => "BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE()",
    'Mensual' => "BETWEEN DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND CURDATE()",
    'Anual' => "BETWEEN DATE_SUB(CURDATE(), INTERVAL 1 YEAR) AND CURDATE()",
];

// Arrays para almacenar los resultados
$muestras_registradas = [];
$muestras_preparadas = [];
$muestras_realizadas = [];
$muestras_entregadas = [];

// Obtener los datos para los diferentes intervalos
foreach ($intervalos as $nombre_intervalo => $intervalo_sql) {
    $muestras_registradas[$nombre_intervalo] = obtenerMuestrasRegistradasPorTipo($conn, $intervalo_sql);
    $muestras_preparadas[$nombre_intervalo] = obtenerMuestrasPorTipo($conn, $intervalo_sql, 'muestra_en_preparacion', 'Fecha_Inicio_Preparacion');
    $muestras_realizadas[$nombre_intervalo] = obtenerMuestrasPorTipo($conn, $intervalo_sql, 'muestra_en_realizacion', 'Fecha_Inicio_Realizacion');
    $muestras_entregadas[$nombre_intervalo] = obtenerMuestrasPorTipo($conn, $intervalo_sql, 'ensayo_en_entrega', 'Fecha_de_Entrega');
}

// Mostrar resultados
include_once('layouts/header.php');

// Obtener los nombres de los ensayos
$nombres_ensayos = obtenerNombresEnsayos($conn);

// Función para mostrar las muestras registradas por tipo de ensayo
function mostrarTablaPorTipoEnsayo($resultado, $titulo, $nombres_ensayos) {
    echo "<div class='panel panel-default'>";
    echo "<div class='panel-heading'><strong>$titulo</strong></div>";
    echo "<div class='panel-body'>";
    echo "<table class='table table-bordered'>";
    echo "<thead><tr><th>Registrador</th><th>Total</th>";

    // Agregar encabezados para los nombres de los ensayos
    foreach ($nombres_ensayos as $ensayo) {
        echo "<th>$ensayo</th>";
    }
    echo "</tr></thead><tbody>";

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr><td>{$row['Register_By']}</td><td>{$row['Total']}</td>";

            // Mostrar el conteo de cada ensayo
            foreach ($nombres_ensayos as $ensayo) {
                $totalTipo = isset($row["Total_Test_Type" . array_search($ensayo, $nombres_ensayos) + 1]) ? $row["Total_Test_Type" . array_search($ensayo, $nombres_ensayos) + 1] : 0;
                echo "<td>" . ($totalTipo > 0 ? $totalTipo : '0') . "</td>";
            }
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='" . (count($nombres_ensayos) + 2) . "'>No hay datos disponibles</td></tr>";
    }

    echo "</tbody></table></div></div>";
}

// Función para mostrar otras tablas (preparadas, realizadas, entregadas)
function mostrarTablaMuestras($resultado, $titulo) {
    // Primero, organizar los datos por técnico y tipo de ensayo
    $datos = [];
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $tecnico = $row['Tecnico'];
            $testType = $row['Test_Type'];
            $total = $row['Total'];

            $datos[$tecnico][$testType] = $total;
        }
    }

    // Obtener todos los tipos de ensayo utilizados
    $tiposEnsayo = [];
    foreach ($datos as $tecnico => $tests) {
        foreach ($tests as $testType => $total) {
            if (!in_array($testType, $tiposEnsayo)) {
                $tiposEnsayo[] = $testType;
            }
        }
    }
    sort($tiposEnsayo);

    // Mostrar la tabla
    echo "<div class='panel panel-default'>";
    echo "<div class='panel-heading'><strong>$titulo</strong></div>";
    echo "<div class='panel-body'>";
    echo "<table class='table table-bordered'>";
    echo "<thead><tr><th>Técnico</th>";

    // Encabezados de los tipos de ensayo
    foreach ($tiposEnsayo as $testType) {
        echo "<th>$testType</th>";
    }
    echo "</tr></thead><tbody>";

    if (!empty($datos)) {
        foreach ($datos as $tecnico => $tests) {
            echo "<tr><td>$tecnico</td>";
            foreach ($tiposEnsayo as $testType) {
                $total = isset($tests[$testType]) ? $tests[$testType] : 0;
                echo "<td>$total</td>";
            }
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='" . (count($tiposEnsayo) + 1) . "'>No hay datos disponibles</td></tr>";
    }

    echo "</tbody></table></div></div>";
}

// Mostrar tablas para los diferentes intervalos y muestras registradas
foreach ($intervalos as $nombre_intervalo => $intervalo_sql) {
    mostrarTablaPorTipoEnsayo($muestras_registradas[$nombre_intervalo], "Muestras Registradas $nombre_intervalo por Tipo de Ensayo", $nombres_ensayos);
}

// Mostrar tablas para muestras preparadas, realizadas y entregadas
foreach ($intervalos as $nombre_intervalo => $intervalo_sql) {
    mostrarTablaMuestras($muestras_preparadas[$nombre_intervalo], "Muestras Preparadas $nombre_intervalo");
    mostrarTablaMuestras($muestras_realizadas[$nombre_intervalo], "Muestras Realizadas $nombre_intervalo");
    mostrarTablaMuestras($muestras_entregadas[$nombre_intervalo], "Muestras Entregadas $nombre_intervalo");
}

include_once('layouts/footer.php');

// Cerrar la conexión a la base de datos
$conn->close();
?>
