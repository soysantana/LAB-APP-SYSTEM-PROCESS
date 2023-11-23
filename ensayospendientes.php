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
        )
        ORDER BY lp.Test_Type"; // Ordenar por el tipo de ensayo

try {
    $result = $conn->query($sql);

    if ($result === false) {
        throw new Exception("Error en la consulta: " . $conn->error);
    }

    include_once('layouts/header.php');

    // Crear un array para almacenar los ensayos agrupados por tipo
    $ensayos_agrupados = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sample_id = $row['Sample_ID'];
            $sample_number = $row['Sample_Number'];
            $sample_date = $row['Sample_Date'];
            $testType = $row['Test_Type'];

            // Verificar si el tipo de ensayo ya está en el array
            if (!array_key_exists($testType, $ensayos_agrupados)) {
                $ensayos_agrupados[$testType] = array();
            }

            // Agregar el ensayo al tipo correspondiente
            $ensayos_agrupados[$testType][] = array(
                'Sample_ID' => $sample_id,
                'Sample_Number' => $sample_number,
                'Sample_Date' => $sample_date,
            );
        }
    }

    echo '<div class="row">';
    echo '<div class="col-md-12">';

    // Iterar a través de los ensayos agrupados por tipo
    foreach ($ensayos_agrupados as $testType => $ensayos) {
        echo '<div class="panel panel-default">';
        echo '<div class="panel-heading clearfix">';
        echo "<strong>Tipo de Ensayo: $testType</strong>";
        
        // Mostrar la cantidad de ensayos pendientes junto al nombre del tipo de ensayo
        $cantidad_pendiente = count($ensayos);
        echo '<span class="badge pull-center">' . $cantidad_pendiente . '</span>';
        
        // Agregar un botón de impresión
        echo '<button class="btn btn-primary btn-print pull-right" data-test-type="' . $testType . '">Imprimir</button>';
        
        echo '</div>';
        echo '<div class="panel-body">';
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Fecha de Muestreo</th>';
        echo '<th>ID Muestra</th>';
        echo '<th>Número de Muestra</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($ensayos as $ensayo) {
            $sample_id = $ensayo['Sample_ID'];
            $sample_number = $ensayo['Sample_Number'];
            $sample_date = $ensayo['Sample_Date'];

            echo "<tr>";
            echo "<td>$sample_date</td>";
            echo "<td>$sample_id</td>";
            echo "<td>$sample_number</td>";
            echo "</tr>";
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';

    include_once('layouts/footer.php');
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Manejar el clic en el botón de impresión
        $('.btn-print').click(function() {
            // Obtener el tipo de ensayo desde el atributo data
            var testType = $(this).data('test-type');
            
            // Generar una URL de impresión basada en el tipo de ensayo
            var printUrl = 'PDF/Barrick-Pendiente.php?testType=' + testType;
            
            // Abrir una nueva ventana o pestaña para imprimir
            window.open(printUrl, '_blank');
        });
    });
</script>
