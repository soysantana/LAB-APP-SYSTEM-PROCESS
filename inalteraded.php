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
                <div class="modal-body">
        
                    <div class="box-body">
                              <div class="table-responsive">
                                  <table id = "tabla1" class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
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



           

<?php include_once('layouts/footer.php'); ?>

