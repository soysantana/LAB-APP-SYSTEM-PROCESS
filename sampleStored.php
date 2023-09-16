<?php
$page_title = 'listado de muestras en el Laboratorio';
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
                    <span>Inalteraded Samples Stored List</span>
                </strong>
            </div>
            

            <div class="modal-body">
                <!-- Barra de búsqueda y botón -->
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary" id="btnBuscar">Find</button>
                      </span>
                      <input type="text" id="inputBusqueda" class="form-control" name="title" placeholder="Find inalteraded samples Registed">
                   </div>
                   <div id="result" class="list-group"></div>
                  </div>
            </div>

            <div class="box-body">
                <div class="table-responsive">
                    <table id="tabla2" class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Sample ID</th>
                                <th>Sample Number</th>
                                <th>Sample Type</th>
                                <th>Depth From</th>
                                <th>Depth To</th>
                                <th>Sample Length (mt)</th>
                                <th>Sample Weight (Kg)</th>
                                <th>Sample Date</th>
                                <th>Status</th>
                                <th>Comment</th>
                               
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
$tablas = array('inalteraded_samples');

foreach ($tablas as $tabla) {
    $query = "SELECT id, Sample_ID, Sample_Number, Sample_Type, Depth_From, Depth_To, Sample_Length, Sample_Weight, Comment, Sample_Date, Store_In FROM $tabla WHERE Store_In = 'Stored_PVLab'";
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
        echo '<td>' . $row['Sample_Length'] . '</td>';
        echo '<td>' . $row['Sample_Weight'] . '</td>';
        echo '<td>' . $row['Sample_Date'] . '</td>';
        echo '<td>' . $row['Store_In'] . '</td>';
        echo '<td>' . $row['Comment'] . '</td>';
        echo '<td>';

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function () {
    $("#btnBuscar").click(function () {
        var inputBusqueda = $("#inputBusqueda").val().toLowerCase();
        $("#tabla2 tbody tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(inputBusqueda) > -1);
        });
    });
});
</script>


<?php include_once('layouts/footer.php'); ?>