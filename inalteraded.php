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
                                $query = "SELECT id, Sample_ID, Sample_Number, Sample_Type, Depth_From, Depth_To FROM $tabla WHERE Registed_Date >= '$fechaLimite'";
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
                                    echo '<td>';

                                    // Botones de edición y eliminación
                                    echo '<div class="btn-group">';
                                    echo '<button class="btn btn-warning edit-button" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-pencil"></i></button>
                                    ';
                                    echo '<button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>';
                                    echo '</div>';

                                    echo '</td>';
                                    echo '</tr>';
                                }
                            }

                            mysqli_close($rtv);
                            ?>

                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="editModalLabel">Editar Muestra</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                          
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save Changes</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                         
                          
                          <script>
                              // Manejar el clic en el botón de edición
                              $('.edit-button').click(function () {
                                  // Obtener los valores de la fila de la tabla
                                  var row = $(this).closest('tr');
                                  var id = row.find('td:eq(0)').text();
                                  var sampleID = row.find('td:eq(2)').text();
                                  var sampleNumber = row.find('td:eq(3)').text();
                                  var sampleType = row.find('td:eq(4)').text();
                                  var depthFrom = row.find('td:eq(5)').text();
                                  var depthTo = row.find('td:eq(6)').text();
                          
                                  // Rellenar el modal con los valores de la muestra
                                  $('#editModal').find('.modal-body').html(`
                                      <form>
                                          <div class="form-group">
                                              <label for="editSampleID">Sample ID</label>
                                              <input type="text" class="form-control" id="editSampleID" value="${sampleID}">
                                          </div>
                                          <div class="form-group">
                                              <label for="editSampleNumber">Sample Number</label>
                                              <input type="text" class="form-control" id="editSampleNumber" value="${sampleNumber}">
                                          </div>
                                          <!-- Agregar más campos de edición según tus necesidades -->
                                      </form>
                                  `);
                              });
                          </script>
                          <script>
                            // Manejar el clic en el botón de edición
                            $('.edit-button').click(function () {
                                // Obtener los valores de la fila de la tabla
                                var row = $(this).closest('tr');
                                var id = row.find('td:eq(0)').text();
                                var sampleID = row.find('td:eq(2)').text();
                                var sampleNumber = row.find('td:eq(3)').text();
                                var sampleType = row.find('td:eq(4)').text();
                                var depthFrom = row.find('td:eq(5)').text();
                                var depthTo = row.find('td:eq(6)').text();
                          
                                // Rellenar el modal con los valores de la muestra
                                $('#editModal').find('.modal-body').html(`
                                    <form>
                                        <div class="form-group">
                                            <label for="editSampleID">Sample ID</label>
                                            <input type="text" class="form-control" id="editSampleID" value="${sampleID}">
                                        </div>
                                        <div class="form-group">
                                            <label for="editSampleNumber">Sample Number</label>
                                            <input type="text" class="form-control" id="editSampleNumber" value="${sampleNumber}">
                                        </div>
                                        <!-- Agregar más campos de edición según tus necesidades -->
                                    </form>
                                `);
                            });
                          </script>
                          
                          
                          
                          
                          
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>
