<?php
$page_title = 'Menu de ensayos en revisión';
require_once('includes/load.php');
page_require_level(3);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Inalteraded Sample List</span>
                </strong>
            </div>

            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Sample ID</th>
                                <th>Sample Number</th>
                                <th>Sample Type</th>
                                <th>Depth From</th>
                                <th>Depth To</th>
                                <th>Sample Date</th>
                                <th>Comment</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rtv = mysqli_connect('localhost', 'root', '', 'index_test_lab');
                            if (!$rtv) {
                                die("Error de conexión a la base de datos: " . mysqli_connect_error());
                            }

                            $fechaLimite = date('Y-m-d H:i:s', strtotime('-1065 days'));

                            // Array con los nombres de las tablas deseadas
                            $tablas = array('lab_test_requisition_form');

                            foreach ($tablas as $tabla) {
                                $query = "SELECT id, Sample_ID, Sample_Number, Sample_Type, Depth_From, Depth_To, Comment, Sample_Date FROM $tabla WHERE Registed_Date >= '$fechaLimite'";
                                $result = mysqli_query($rtv, $query);
                                if (!$result) {
                                    die("Error al consultar la base de datos: " . mysqli_error($rtv));
                                }

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo '<td>' . $row['id'] . '</td>';
                                    echo '<td>' . $row['Sample_ID'] . '</td>';
                                    echo '<td>' . $row['Sample_Number'] . '</td>';
                                    echo '<td>' . $row['Sample_Type'] . '</td>';
                                    echo '<td>' . $row['Depth_From'] . '</td>';
                                    echo '<td>' . $row['Depth_To'] . '</td>';
                                    echo '<td>' . $row['Sample_Date'] . '</td>';
                                    echo '<td>' . $row['Comment'] . '</td>';
                                    echo '<td>';

                                    // Botones de edición y eliminación
                                    echo '<div class="btn-group">';
                                    echo '<button class="btn btn-warning edit-button" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-pencil"></i></button>';
                                    echo '<button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>';
                                    echo '</div>';

                                    echo '</td>';
                                    echo '</tr>';
                                }
                            }

                          
                                
                

                            mysqli_close($rtv);
                            
                            


                            ?>

                    <?php
                      // Importa o incluye tu archivo de configuración de la base de datos si no lo has hecho ya
                     // require_once('configuracion_basedatos.php');
                     function obtenerdatos($id) {
                        // Conexión a la base de datos (reemplaza estos valores con los tuyos)
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "index_test_lab";
                    
                        // Crear una conexión
                        $conn = new mysqli($servername, $username, $password, $dbname);
                    
                        // Verificar la conexión
                        if ($conn->connect_error) {
                            die("Error de conexión a la base de datos: " . $conn->connect_error);
                        }
                    
                        // Consulta SQL para obtener el comentario y la fecha de muestra
                        $sql = "SELECT Sample_Date, Comment FROM lab_test_requisition_form WHERE id = $id";
                    
                        // Ejecutar la consulta
                        $result = $conn->query($sql);
                    
                        if ($result->num_rows > 0) {
                            // Si se encuentra una fila, obtener el comentario y la fecha de muestra
                            $row = $result->fetch_assoc();
                            $comment = $row["Comment"];
                            $sampleDate = $row["Sample_Date"];
                        } else {
                            // Si no se encuentra ninguna fila, establecer un valor predeterminado o un mensaje de error
                            $comment = "Comentario no encontrado";
                            $sampleDate = "Fecha de muestra no encontrada";
                        }
                    
                        // Cerrar la conexión a la base de datos
                        $conn->close();
                    
                        // Devolver un arreglo asociativo con el comentario y la fecha de muestra
                        return array("Comment" => $comment, "Sample_Date" => $sampleDate);
                    }
                    

                          ?>      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de edición -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Inalteraded Sample Informacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <div class="form-group">
                        <label for="editSampleID">Sample ID</label>
                        <input type="text" class="form-control" id="editSampleID" name="editSampleID">
                    </div>
                    <div class="form-group">
                        <label for="editSampleNumber">Sample Number</label>
                        <input type="text" class="form-control" id="editSampleNumber" name="editSampleNumber">
                    </div>

                    <div class="form-group">
                        <label for="editSampleType">Sample Type</label>
                        <input type="text" class="form-control" id="editSampleType" name="editSampleType">
                    </div>

                    <div class="form-group">
                        <label for="editDepthFrom">Depth From (mt)</label>
                        <input type="text" class="form-control" id="editDepthFrom" name="editDepthFrom">
                    </div>

                    <div class="form-group">
                        <label for="editDepthTo">Depth To (mt)</label>
                        <input type="text" class="form-control" id="editDepthTo" name="editDepthTo">
                    </div>
                    <div class="form-group">
                        <label for="editSampleLength">Sample Length (mt)</label>
                        <input type="text" class="form-control" id="editSampleLength" name="editSampleLength">
                    </div>
                    <div class="form-group">
                        <label for="editSampleWeight">Sample Weight (Kg)</label>
                        <input type="text" class="form-control" id="editSampleWeigth" name="editSampleWeigth">
                    </div>
                    <div class="form-group">
                        <label for="editSampleDate">Sample Date</label>
                        <input type="text" class="form-control" id="editSampleDate" name="editSampleDate">
                    </div>
                    
                    <div class="form-group">
                        <label for="Status">Status</label>
                        <input type="text" class="form-control" id="Status" name="Status">
                    </div>

                    <div class="form-group">
                        <label for="Comment">Comment</label>
                        <input type="text" class="form-control" id="Comment" name="Comment">
                    </div>


                    <!-- Agregar más campos de edición según tus necesidades -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveChangesButton">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    // Manejar el clic en el botón de edición
    $('.edit-button').click(function () {
        // Obtener los valores de la fila de la tabla
        var row = $(this).closest('tr');
        var id = row.find('td:eq(0)').text();
        var sampleID = row.find('td:eq(1)').text();
        var sampleNumber = row.find('td:eq(2)').text();
        var sampletype = row.find('td:eq(3)').text();
        var Depth_From= row.find('td:eq(4)').text();
        var Depth_To= row.find('td:eq(5)').text();
        var sampleDate = row.find('td:eq(6)').text();


        var Comment= row.find('td:eq(7)').text();
        // Recoge los valores de otros campos según sea necesario

        // Rellenar el modal con los valores de la muestra
        $('#editSampleID').val(sampleID);
        $('#editSampleNumber').val(sampleNumber);
        $('#editSampleType').val(sampletype);
        $('#editDepthFrom').val(Depth_From);
        $('#editDepthTo').val(Depth_To);
        $('#editSampleDate').val(sampleDate);
        $('#Comment').val(Comment);

        // Asigna los valores de otros campos según sea necesario

        // Establecer un atributo personalizado en el botón "Guardar Cambios" para identificar el ID de la muestra
        $('#saveChangesButton').data('sample-id', id);
    });

    // Manejar el clic en el botón "Guardar Cambios"
    // Manejar el clic en el botón "Guardar Cambios"
$('#saveChangesButton').click(function () {
    var id = $(this).data('sample-id');
    var sampleID = $('#editSampleID').val();
    var sampleNumber = $('#editSampleNumber').val();
    var sampleType = $('#editSampleType').val();
    var depthFrom = $('#editDepthFrom').val();
    var depthTo = $('#editDepthTo').val();
    var sampleLength = $('#editSampleLength').val();
    var sampleWeight = $('#editSampleWeigth').val();
    var sampleDate = $('#editSampleDate').val();
    var status = $('#Status').val();
    var comment = $('#Comment').val();

    // Realiza una solicitud AJAX para guardar los datos en el servidor
    $.ajax({
        url: 'add_Inalteradedsample.php', // Ruta para procesar la actualización de datos en el servidor
        type: 'POST',
        data: {
            id: id,
            sampleID: sampleID,
            sampleNumber: sampleNumber,
            sampleType: sampleType,
            depthFrom: depthFrom,
            depthTo: depthTo,
            sampleLength: sampleLength,
            sampleWeight: sampleWeight,
            sampleDate: sampleDate,
            status: status,
            comment: comment
        },
        success: function (response) {
            // Maneja la respuesta del servidor si es necesario
            // Por ejemplo, mostrar un mensaje de éxito
            alert('Datos guardados exitosamente.');
            // Cierra el modal después de guardar los cambios
            $('#editModal').modal('hide');
            // Recarga la página o actualiza la tabla si es necesario
            location.reload();
        },
        error: function (error) {
            // Maneja errores de la solicitud AJAX si es necesario
            alert('Ocurrió un error al guardar los datos.');
        }
    });
});

</script>

<?php include_once('layouts/footer.php'); ?>

