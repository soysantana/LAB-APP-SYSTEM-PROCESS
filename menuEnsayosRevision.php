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
                    <span>Menu de Ensayos en revisión</span>
                </strong>
            </div>
            <div class="panel-body">
               
                <ul class="list-group">
                    <?php
                    $rtv = mysqli_connect('localhost', 'root', '', 'index_test_lab');
                    if (!$rtv) {
                        die("Error de conexión a la base de datos: " . mysqli_connect_error());
                    }

                    $fechaLimite = date('Y-m-d H:i:s', strtotime('-7 days'));

                    // Array con los nombres de las tablas deseadas
                    $tablas = array('moisture_content', 'grain_size', 'atterberg_limit', 'standard_proctor', 
                    'moisture_content_microwave', 'moisture_content_constant_mass', 'moisture_scale');

                    foreach ($tablas as $tabla) {
                        $query = "SELECT Sample_ID, Sample_Number, test_type FROM $tabla WHERE Report_Date >= '$fechaLimite'";
                        $result = mysqli_query($rtv, $query);
                        if (!$result) {
                            die("Error al consultar la base de datos: " . mysqli_error($rtv));
                        }

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                            echo '<a href="revisiones.php?sampleid=' . $row['Sample_ID'] . '&samplenumber=' . $row['Sample_Number'] . '&test_type=' . $row['test_type'] . '">' . $row['Sample_ID'] . '-' . $row['Sample_Number'] . '-' . $row['test_type'] . '</a>';
                            echo '<span class="badge bg-blue rounded-pill"><a href="revisiones.php?sampleid=' . $row['Sample_ID'] . '&samplenumber=' . $row['Sample_Number'] . '&test_type=' . $row['test_type'] . '">' . $row['Sample_Number'] . '-' . $row['Sample_Number'] . '-' . $row['test_type'] . '</a></span>';
                            echo '</li>';
                        }
                    }

                    mysqli_close($rtv);
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>









