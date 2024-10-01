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

// Función para obtener muestras registradas por tipo de ensayo
function obtenerMuestrasRegistradasPorTipo($conn, $interval) {
    $sql = "SELECT Register_By, 
                   COUNT(*) as Total, 
                   SUM(Test_Type1 IS NOT NULL) AS Total_Test_Type1,
                   SUM(Test_Type2 IS NOT NULL) AS Total_Test_Type2,
                   SUM(Test_Type3 IS NOT NULL) AS Total_Test_Type3,
                   SUM(Test_Type4 IS NOT NULL) AS Total_Test_Type4,
                   SUM(Test_Type5 IS NOT NULL) AS Total_Test_Type5,
                   SUM(Test_Type6 IS NOT NULL) AS Total_Test_Type6,
                   SUM(Test_Type7 IS NOT NULL) AS Total_Test_Type7,
                   SUM(Test_Type8 IS NOT NULL) AS Total_Test_Type8,
                   SUM(Test_Type9 IS NOT NULL) AS Total_Test_Type9,
                   SUM(Test_Type10 IS NOT NULL) AS Total_Test_Type10,
                   SUM(Test_Type11 IS NOT NULL) AS Total_Test_Type11,
                   SUM(Test_Type12 IS NOT NULL) AS Total_Test_Type12,
                   SUM(Test_Type13 IS NOT NULL) AS Total_Test_Type13,
                   SUM(Test_Type14 IS NOT NULL) AS Total_Test_Type14,
                   SUM(Test_Type15 IS NOT NULL) AS Total_Test_Type15,
                   SUM(Test_Type16 IS NOT NULL) AS Total_Test_Type16,
                   SUM(Test_Type17 IS NOT NULL) AS Total_Test_Type17,
                   SUM(Test_Type18 IS NOT NULL) AS Total_Test_Type18,
                   SUM(Test_Type19 IS NOT NULL) AS Total_Test_Type19,
                   SUM(Test_Type20 IS NOT NULL) AS Total_Test_Type20
            FROM lab_test_requisition_form 
            WHERE DATE(Registed_Date) $interval
            GROUP BY Register_By";

    return $conn->query($sql);
}

// Función para obtener otras muestras (preparadas, realizadas, etc.)
function obtenerMuestrasPreparadas($conn, $interval) {
    $sql = "SELECT Tecnico, COUNT(*) as Total
            FROM muestra_en_preparacion 
            WHERE DATE(Fecha_Inicio_Preparacion) $interval
            GROUP BY Tecnico";

    return $conn->query($sql);
}

function obtenerMuestrasRealizadas($conn, $interval) {
    $sql = "SELECT Tecnico, COUNT(*) as Total
            FROM muestra_en_realizacion 
            WHERE DATE(Fecha_Inicio_Realizacion) $interval
            GROUP BY Tecnico";

    return $conn->query($sql);
}

function obtenerMuestrasEntregadas($conn, $interval) {
    $sql = "SELECT Tecnico, COUNT(*) as Total
            FROM ensayo_en_entrega 
            WHERE DATE(Fecha_de_Entrega) $interval
            GROUP BY Tecnico";

    return $conn->query($sql);
}

// Definir el intervalo (diario, semanal, mensual, anual)
$intervalo_diario = "= CURDATE()";

// Obtener los datos
$muestras_registradas_por_tipo = obtenerMuestrasRegistradasPorTipo($conn, $intervalo_diario);
$muestras_preparadas = obtenerMuestrasPreparadas($conn, $intervalo_diario);
$muestras_realizadas = obtenerMuestrasRealizadas($conn, $intervalo_diario);
$muestras_entregadas = obtenerMuestrasEntregadas($conn, $intervalo_diario);

// Mostrar resultados
include_once('layouts/header.php');

// Función para mostrar las muestras registradas por tipo de ensayo
function mostrarTablaPorTipoEnsayo($resultado, $titulo) {
    echo "<div class='panel panel-default'>";
    echo "<div class='panel-heading'><strong>$titulo</strong></div>";
    echo "<div class='panel-body'>";
    echo "<table class='table'>";
    echo "<thead><tr><th>Registrador</th><th>Total</th>";

    // Agregar encabezados para los tipos de ensayo (Test_Type1 - Test_Type20)
    for ($i = 1; $i <= 20; $i++) {
        echo "<th>Test Type $i</th>";
    }
    echo "</tr></thead><tbody>";

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr><td>{$row['Register_By']}</td><td>{$row['Total']}</td>";

            // Mostrar el conteo de cada tipo de ensayo
            for ($i = 1; $i <= 20; $i++) {
                $totalTipo = $row['Total_Test_Type' . $i];
                echo "<td>" . ($totalTipo > 0 ? $totalTipo : '0') . "</td>";
            }
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='22'>No hay datos disponibles</td></tr>";
    }

    echo "</tbody></table></div></div>";
}

// Función para mostrar otras tablas
function mostrarTabla($resultado, $titulo, $tipo) {
    echo "<div class='panel panel-default'>";
    echo "<div class='panel-heading'><strong>$titulo</strong></div>";
    echo "<div class='panel-body'>";
    echo "<table class='table'>";
    echo "<thead><tr><th>" . ($tipo == 'registradas' ? 'Registrador' : 'Técnico') . "</th><th>Total</th></tr></thead><tbody>";

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $nombre = $tipo == 'registradas' ? $row['Register_By'] : $row['Tecnico'];
            echo "<tr><td>{$nombre}</td><td>{$row['Total']}</td></tr>";
        }
    } else {
        echo "<tr><td colspan='2'>No hay datos disponibles</td></tr>";
    }

    echo "</tbody></table></div></div>";
}

// Mostrar tablas
mostrarTablaPorTipoEnsayo($muestras_registradas_por_tipo, 'Muestras Registradas por Tipo de Ensayo');
mostrarTabla($muestras_preparadas, 'Muestras Preparadas', 'preparadas');
mostrarTabla($muestras_realizadas, 'Muestras Realizadas', 'realizadas');
mostrarTabla($muestras_entregadas, 'Muestras Entregadas', 'entregadas');

include_once('layouts/footer.php');

// Cerrar la conexión a la base de datos
$conn->close();
?>
