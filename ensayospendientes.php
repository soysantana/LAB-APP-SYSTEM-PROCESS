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

// Consulta SQL para obtener los ensayos pendientes
$sql = "SELECT
            ltrf.Sample_ID,
            ltrf.Sample_Number,
            ltrf.Sample_Date,
            ltrf.Test_Type1,
            ltrf.Test_Type2,
            ltrf.Test_Type3,
            ltrf.Test_Type4,
            ltrf.Test_Type5,
            ltrf.Test_Type6,
            ltrf.Test_Type7,
            ltrf.Test_Type8,
            ltrf.Test_Type9,
            ltrf.Test_Type10,
            ltrf.Test_Type11,
            ltrf.Test_Type12,
            ltrf.Test_Type13,
            ltrf.Test_Type14,
            ltrf.Test_Type15,
            ltrf.Test_Type16,
            ltrf.Test_Type17,
            ltrf.Test_Type18,
            ltrf.Test_Type19
        FROM
            lab_test_requisition_form ltrf
        LEFT JOIN
            muestra_en_preparacion preparacion
            ON ltrf.Sample_ID = preparacion.Sample_ID
            AND ltrf.Sample_Number = preparacion.Sample_Number
        LEFT JOIN
            muestra_en_realizacion realizacion
            ON ltrf.Sample_ID = realizacion.Sample_ID
            AND ltrf.Sample_Number = realizacion.Sample_Number
        LEFT JOIN
            ensayo_en_entrega entrega
            ON ltrf.Sample_ID = entrega.Sample_ID
            AND ltrf.Sample_Number = entrega.Sample_Number
        WHERE
            preparacion.Sample_ID IS NULL
            AND realizacion.Sample_ID IS NULL
            AND entrega.Sample_ID IS NULL
            AND (
                ltrf.Test_Type1 IS NOT NULL OR
                ltrf.Test_Type2 IS NOT NULL OR
                ltrf.Test_Type3 IS NOT NULL OR
                ltrf.Test_Type4 IS NOT NULL OR
                ltrf.Test_Type5 IS NOT NULL OR
                ltrf.Test_Type6 IS NOT NULL OR
                ltrf.Test_Type7 IS NOT NULL OR
                ltrf.Test_Type8 IS NOT NULL OR
                ltrf.Test_Type9 IS NOT NULL OR
                ltrf.Test_Type10 IS NOT NULL OR
                ltrf.Test_Type11 IS NOT NULL OR
                ltrf.Test_Type12 IS NOT NULL OR
                ltrf.Test_Type13 IS NOT NULL OR
                ltrf.Test_Type14 IS NOT NULL OR
                ltrf.Test_Type15 IS NOT NULL OR
                ltrf.Test_Type16 IS NOT NULL OR
                ltrf.Test_Type17 IS NOT NULL OR
                ltrf.Test_Type18 IS NOT NULL OR
                ltrf.Test_Type19 IS NOT NULL
            )";

// Ejecutar la consulta
$result = $conn->query($sql);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Listado de ensayos pendientes</span>
                </strong>
            </div>
            <div class="panel-body">
                <?php
                // Verificar si la consulta fue exitosa
                if (!$result) {
                    die("Error en la consulta: " . $conn->error);
                }
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Fecha de Muestreo</th>
                            <th>ID Muestra</th>
                            <th>Número de Muestra</th>
                            <th>Ensayo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            $sample_id = $row['Sample_ID'];
                            $sample_number = $row['Sample_Number'];
                            $sample_date = $row['Sample_Date'];

                            // Iterar a través de las columnas Test_Type y mostrarlas si tienen un valor
                            for ($i = 1; $i <= 19; $i++) {
                                $testType = $row["Test_Type$i"];
                                if (!empty($testType)) {
                                    echo "<tr>";
                                    echo "<td>$sample_date</td>";
                                    echo "<td>$sample_id</td>";
                                    echo "<td>$sample_number</td>";
                                    echo "<td> $testType</td>";
                                    echo "</tr>";
                                }
                            }
                        }

                        if ($result->num_rows == 0) {
                            echo "<tr>";
                            echo "<td colspan='4'>No hay ensayos pendientes.</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
// Cerrar la conexión a la base de datos
$conn->close();
include_once('layouts/footer.php');
?>
