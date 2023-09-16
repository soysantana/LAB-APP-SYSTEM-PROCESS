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
            lab_test_requisition_form.Sample_ID,
            lab_test_requisition_form.Sample_Number,
            lab_test_requisition_form.Test_Type
        FROM
            lab_test_requisition_form
        LEFT JOIN
            muestra_en_preparacion preparacion
            ON lab_test_requisition_form.Sample_ID = preparacion.Sample_ID
            AND lab_test_requisition_form.Sample_Number = preparacion.Sample_Number
        LEFT JOIN
            muestra_en_realizacion realizacion
            ON lab_test_requisition_form.Sample_ID = realizacion.Sample_ID
            AND lab_test_requisition_form.Sample_Number = realizacion.Sample_Number
        LEFT JOIN
            ensayo_en_entrega entrega
            ON lab_test_requisition_form.Sample_ID = entrega.Sample_ID
            AND lab_test_requisition_form.Sample_Number = entrega.Sample_Number
        LEFT JOIN
            ensayo_en_repeticion repeticion
            ON lab_test_requisition_form.Sample_ID = repeticion.Sample_ID
            AND lab_test_requisition_form.Sample_Number = repeticion.Sample_Number
        WHERE
            Porcentaje_Completado = 100
            AND COUNT(repeticion.id) = 0";



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
                <ul class="list-group">
                    <?php $result = $conn->query($sql);

                    
                    // Verificar si la consulta fue exitosa
                    if (!$result) {
                        die("Error en la consulta: " . $conn->error);
                    } ?>
                     
                        <?php while ($row = $result->fetch_assoc()) : ?>
                            <li class="list-group-item">
                                <strong>Sample ID:</strong> <?php echo $row['Sample_ID']; ?><br>
                                <strong>Sample Number:</strong> <?php echo $row['Sample_Number']; ?><br>
                                <strong>Test Type:</strong> <?php echo $row['Tipo_de_ensayo']; ?><br>
                                <!-- Puedes agregar más detalles si es necesario -->
                            </li>
                        <?php endwhile; ?>
                    
                        <li class="list-group-item">No hay ensayos pendientes.</li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
// Cerrar la conexión a la base de datos
$conn->close();
include_once('layouts/footer.php');
?>
