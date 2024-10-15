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

// Función para obtener los nombres de los ensayos
function obtenerNombresEnsayos($conn) {
    $ensayos = [];
    for ($i = 1; $i <= 20; $i++) {
        $sql = "SELECT DISTINCT Test_Type$i FROM lab_test_requisition_form WHERE Test_Type$i IS NOT NULL";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ensayos[] = $row["Test_Type$i"];
            }
        }
    }
    return array_unique($ensayos);
}

// Función para obtener muestras registradas por tipo de ensayo
function obtenerMuestrasRegistradasPorTipo($conn, $interval) {
    $sql = "SELECT Register_By, COUNT(*) as Total, ";
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

// Función para obtener muestras en preparación, realización y entrega por técnico y tipo de ensayo
function obtenerMuestrasPorTipo($conn, $interval, $tabla, $fechaCampo) {
    $sql = "SELECT Tecnico, Test_Type, COUNT(*) as Total
            FROM $tabla
            WHERE DATE($fechaCampo) $interval
            GROUP BY Tecnico, Test_Type";
    return $conn->query($sql);
}

// Función para obtener ensayos digitados por técnico y tipo de ensayo
function obtenerEnsayosDigitadosPorTipo($conn, $interval, $tabla, $fechaCampo) {
    $sql = "SELECT Registered_By, Test_Type, COUNT(*) as Total
            FROM $tabla
            WHERE DATE($fechaCampo) $interval
            GROUP BY Registered_By, Test_Type";
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
$muestras_digitadas = []; // Nueva sección para ensayos digitados

// Obtener los datos para los diferentes intervalos
foreach ($intervalos as $nombre_intervalo => $intervalo_sql) {
    $muestras_registradas[$nombre_intervalo] = obtenerMuestrasRegistradasPorTipo($conn, $intervalo_sql);
    $muestras_preparadas[$nombre_intervalo] = obtenerMuestrasPorTipo($conn, $intervalo_sql, 'muestra_en_preparacion', 'Fecha_Inicio_Preparacion');
    $muestras_realizadas[$nombre_intervalo] = obtenerMuestrasPorTipo($conn, $intervalo_sql, 'muestra_en_realizacion', 'Fecha_Inicio_Realizacion');
    $muestras_entregadas[$nombre_intervalo] = obtenerMuestrasPorTipo($conn, $intervalo_sql, 'ensayo_en_entrega', 'Fecha_de_Entrega');
    $muestras_digitadas[$nombre_intervalo] = obtenerEnsayosDigitadosPorTipo($conn, $intervalo_sql, 'ensayos_en_revision', 'Registed_Date'); // Cambia el nombre de la tabla y el campo según tu esquema
}

// Obtener los nombres de los ensayos
$nombres_ensayos = obtenerNombresEnsayos($conn);

// Función para mostrar tablas de muestras registradas por tipo de ensayo
function mostrarTablaPorTipoEnsayo($resultado, $titulo, $nombres_ensayos) {
    echo "<table class='table table-bordered'>";
    echo "<thead><tr><th>Registrador</th><th>Total</th>";
    foreach ($nombres_ensayos as $ensayo) {
        echo "<th>$ensayo</th>";
    }
    echo "</tr></thead><tbody>";

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr><td>{$row['Register_By']}</td><td>{$row['Total']}</td>";
            foreach ($nombres_ensayos as $ensayo) {
                $totalTipo = isset($row["Total_Test_Type" . (array_search($ensayo, $nombres_ensayos) + 1)]) ? $row["Total_Test_Type" . (array_search($ensayo, $nombres_ensayos) + 1)] : 0;
                echo "<td>" . ($totalTipo > 0 ? $totalTipo : '0') . "</td>";
            }
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='" . (count($nombres_ensayos) + 2) . "'>No hay datos disponibles</td></tr>";
    }
    echo "</tbody></table>";
}

// Función para mostrar otras tablas (preparadas, realizadas, entregadas, digitadas)
function mostrarTablaMuestras($resultado, $titulo) {
    $datos = [];
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $tecnico = $row['Tecnico'];
            $testType = $row['Test_Type'];
            $total = $row['Total'];
            $datos[$tecnico][$testType] = $total;
        }
    }

    $tiposEnsayo = [];
    foreach ($datos as $tecnico => $tests) {
        foreach ($tests as $testType => $total) {
            if (!in_array($testType, $tiposEnsayo)) {
                $tiposEnsayo[] = $testType;
            }
        }
    }
    sort($tiposEnsayo);

    echo "<table class='table table-bordered'>";
    echo "<thead><tr><th>Técnico</th>";
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
    echo "</tbody></table>";
}

// Función para mostrar secciones en un "accordion" por intervalo
function mostrarAccordionTabla($datos, $intervalos, $titulo, $nombres_ensayos = null) {
    echo "<div class='panel panel-default'>";
    echo "<div class='panel-heading'><strong>$titulo</strong></div>";
    echo "<div class='panel-body'>";
    echo "<div class='panel-group' id='accordion_$titulo'>";

    foreach ($intervalos as $nombre_intervalo => $intervalo_sql) {
        $accordion_id = "accordion_".str_replace(' ', '_', $titulo)."_".$nombre_intervalo;
        echo "<div class='panel panel-default'>";
        echo "<div class='panel-heading'>";
        echo "<h4 class='panel-title'>";
        echo "<a data-toggle='collapse' data-parent='#accordion_$titulo' href='#collapse_$accordion_id'>";
        echo "$nombre_intervalo";
        echo "</a></h4></div>";
        echo "<div id='collapse_$accordion_id' class='panel-collapse collapse'>";
        echo "<div class='panel-body'>";

        // Mostrar la tabla para este intervalo
        if ($nombres_ensayos) {
            mostrarTablaPorTipoEnsayo($datos[$nombre_intervalo], "Muestras Registradas $nombre_intervalo por Tipo de Ensayo", $nombres_ensayos);
        } else {
            mostrarTablaMuestras($datos[$nombre_intervalo], "Datos $nombre_intervalo");
        }

        echo "</div></div></div>";
    }

    echo "</div></div></div>";
}

// Incluir encabezado y estilos
include_once('layouts/header.php');

// Mostrar las secciones para Muestras Registradas, Preparadas, Realizadas, Entregadas y Digitadas
echo "<div class='container'>";
echo "<ul class='nav nav-tabs'>";
echo "<li class='active'><a data-toggle='tab' href='#registradas'>Muestras Registradas</a></li>";
echo "<li><a data-toggle='tab' href='#preparadas'>Ensayos Preparados</a></li>";
echo "<li><a data-toggle='tab' href='#realizadas'>Ensayos Realizados</a></li>";
echo "<li><a data-toggle='tab' href='#entregadas'>Ensayos Entregados</a></li>";
echo "<li><a data-toggle='tab' href='#digitados'>Ensayos Digitados</a></li>"; // Nueva pestaña
echo "</ul>";

echo "<div class='tab-content'>";
echo "<div id='registradas' class='tab-pane fade in active'>";
mostrarAccordionTabla($muestras_registradas, $intervalos, "Muestras Registradas", $nombres_ensayos);
echo "</div>";

echo "<div id='preparadas' class='tab-pane fade'>";
mostrarAccordionTabla($muestras_preparadas, $intervalos, "Ensayos Preparados");
echo "</div>";

echo "<div id='realizadas' class='tab-pane fade'>";
mostrarAccordionTabla($muestras_realizadas, $intervalos, "Ensayos Realizados");
echo "</div>";

echo "<div id='entregadas' class='tab-pane fade'>";
mostrarAccordionTabla($muestras_entregadas, $intervalos, "Ensayos Entregados");
echo "</div>";

echo "<div id='digitados' class='tab-pane fade'>"; // Nuevo contenido para la pestaña
mostrarAccordionTabla($muestras_digitadas, $intervalos, "Ensayos Digitados");
echo "</div>";
echo "</div>";
echo "</div>";

// Incluir pie de página
include_once('layouts/footer.php');
?>