<?php
$page_title = 'Listado de ensayos pendientes';
require_once('includes/load.php');
page_require_level(3);

// Configuración de la conexión a la base de datos (ajusta estos valores según tu configuración)
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

$sql = "SELECT
            lp.Sample_ID,
            lp.Sample_Number,
            lp.Test_Type,
            lp.Sample_Date
        FROM
            lista_de_pendiente lp
        WHERE NOT EXISTS (
            SELECT 1 FROM muestra_en_preparacion p
            WHERE lp.Sample_ID = p.Sample_ID
            AND lp.Sample_Number = p.Sample_Number
            AND lp.Test_Type = p.Test_Type
            
        ) AND NOT EXISTS (
            SELECT 1 FROM muestra_en_realizacion r
            WHERE lp.Sample_ID = r.Sample_ID
            AND lp.Sample_Number = r.Sample_Number
            AND lp.Test_Type = r.Test_Type
            
        ) AND NOT EXISTS (
            SELECT 1 FROM ensayo_en_entrega e
            WHERE lp.Sample_ID = e.Sample_ID
            AND lp.Sample_Number = e.Sample_Number
            AND lp.Test_Type = e.Test_Type
           
        )";


try {
    $result = $conn->query($sql);

    if ($result === false) {
        throw new Exception("Error en la consulta: " . $conn->error);
    }

    include_once('layouts/header.php');

    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo '<div class="panel panel-default">';
    echo '<div class="panel-heading clearfix">';
    echo '<strong>';
    echo '<span class="glyphicon glyphicon-th"></span>';
    echo '<span>Listado de ensayos pendientes</span>';
    echo '</strong>';
    echo '</div>';
    echo '<div class="panel-body">';
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Fecha de Muestreo</th>';
    echo '<th>ID Muestra</th>';
    echo '<th>Número de Muestra</th>';
    echo '<th>Ensayo</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sample_id = $row['Sample_ID'];
            $sample_number = $row['Sample_Number'];
            $sample_date = $row['Sample_Date'];
            $testType = $row['Test_Type'];

            if (!empty($testType)) {
                echo "<tr>";
                echo "<td>$sample_date</td>";
                echo "<td>$sample_id</td>";
                echo "<td>$sample_number</td>";
                echo "<td>$testType</td>";
                echo "</tr>";
            }
        }
    } else {
        echo "<tr>";
        echo "<td colspan='4'>No hay ensayos pendientes.</td>";
        echo "</tr>";
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    include_once('layouts/footer.php');
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
