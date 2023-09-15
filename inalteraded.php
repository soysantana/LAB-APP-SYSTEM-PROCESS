<?php
$page_title = 'listado de muestras inalteradas';
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
                    <span>Inalteraded Samples Registed List</span>
                </strong>
            </div>
            

            <div class="modal-body">
                <!-- Barra de búsqueda y botón -->
                <div class="custom-input-group">
                    <input type="text" class="form-control" id="inputBusqueda" placeholder="Find.." aria-label="Find..." aria-describedby="btnBuscar">
                    <button class="btn btn-outline-secondary" id="btnBuscar" type="button">Find</button>
                </div>
            </div>

            <div class="box-body">
                <div class="table-responsive">
                    <table id="tabla1" class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
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
                        <select class="form-control" id="Status" name="Status">
                        <option selected>Sample Status</option>
                        <option value="Stored_PVLab">Sample Store in PV Lab</option>
                        <option value="Sended_To">Sample Sended </option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="Comment">Comment</label>
                        <input type="text" class="form-control" id="Comment" name="Comment">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="guardarCambios">Save Changes</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        // Manejar el clic en el botón "Editar"
        $('.edit-button').click(function () {
            var row = $(this).closest('tr');
            var id = row.find('td:eq(0)').text();
            var sampleID = row.find('td:eq(1)').text();
            var sampleNumber = row.find('td:eq(2)').text();
            var sampletype = row.find('td:eq(3)').text();
            var Depth_From = row.find('td:eq(4)').text();
            var Depth_To = row.find('td:eq(5)').text();
            var sampleDate = row.find('td:eq(6)').text();
            var Comment = row.find('td:eq(7)').text();

            // Asigna los valores a los campos del formulario de edición
            $('#editSampleID').val(sampleID);
            $('#editSampleNumber').val(sampleNumber);
            $('#editSampleType').val(sampletype);
            $('#editDepthFrom').val(Depth_From);
            $('#editDepthTo').val(Depth_To);
            $('#editSampleDate').val(sampleDate);
            $('#Comment').val(Comment);

            
        });

        // Manejar el clic en el botón "Guardar Cambios"
        $('#guardarCambios').click(function () {
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


            $.ajax({
                url: 'add_Inalteradedsample.php',
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
                    alert('Datos actualizados exitosamente.');
                    $('#editModal').modal('hide');
                    location.reload();
                },
                error: function (error) {
                    alert('Ocurrió un error al actualizar los datos.');
                }
            });
        });

        $(document).ready(function () {
    $("#btnBuscar").click(function () {
        var inputBusqueda = $("#inputBusqueda").val().toLowerCase();
        $("#tabla1 tbody tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(inputBusqueda) > -1);
        });
    });
});
    });
</script>

<div class="botones-flotantes">
    <button class="boton-flotante" id="btSampleStored"><a href="sampleStored.php">Samples Stored In</a></button>
    <button class="boton-flotante" id="btSampleSended"><a href="sampleSended.php">Samples Sended</a></button>
</div>

    
</div>

<style>
    .botones-flotantes {
        position: fixed;
        bottom: 20px; /* Ajusta la distancia desde la parte inferior según tus preferencias */
        right: 20px; /* Ajusta la distancia desde la derecha según tus preferencias */
    }

    .boton-flotante {
        display: block;
        margin-bottom: 10px; /* Espacio entre los botones */
        padding: 10px 20px; /* Tamaño del botón */
        background-color: #007BFF; /* Color de fondo */
        color: #fff; /* Color del texto */
        border: none;
        border-radius: 5px; /* Bordes redondeados */
        cursor: pointer;
    }

    .boton-flotante:hover {
        background-color: #0056b3; /* Cambio de color al pasar el mouse */
    }

    
</style>








<?php include_once('layouts/footer.php'); ?>

