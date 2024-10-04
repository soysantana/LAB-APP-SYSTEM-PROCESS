<?php
$page_title = 'Muestras a botar';
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
                    <span>Listado de ensayos a botar</span>
                </strong>
            </div>
            <div class="panel-body">
                <?php
                // Conectar a la base de datos
                $rtv = mysqli_connect('localhost', 'root', '', 'index_test_lab');
                if (!$rtv) {
                    die("Error de conexión a la base de datos: " . mysqli_connect_error());
                }

                // Establecer la fecha límite
                $fechaLimite = date('Y-m-d H:i:s', strtotime('-7 days'));

                // Array con los nombres de las tablas deseadas
                $tablas = array(
                    'moisture_content', 'grain_size', 'atterberg_limit', 'standard_proctor',
                    'moisture_content_microwave', 'moisture_content_constant_mass', 'moisture_scale',
                    'count_gama', 'density_bulk', 'density_weigth', 'ensayo_gama', 'los_angeles_abrasion_small',
                    'sand_density', 'specific_gravity', 'specific_gravity_absortion', 'specific_gravity_fine',
                    'splitting_tensile_strenght', 'uniaxial_compressive_strength', 'pinhole', 'point_load_test',
                    'permeability_of_granular_soils', 'los_angeles_abrasion_large', 'leeb_hardness', 'grout_specimens',
                    'concrete_specimens', 'hydrometer', 'double_hydrometer', 'grain_size_fine_aggregate',
                    'grain_size_coarse_aggregate', 'grain_size_sieved_coarse_aggregate', 'consolidation'
                );

                // Obtener datos de las muestras a botar
                $muestras = obtenerMuestrasABotar($rtv, $tablas, $fechaLimite);

                // Cerrar la conexión
                mysqli_close($rtv);
                ?>

                <!-- Tabla de muestras -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre de Muestra</th>
                            <th>Número de Muestra</th>
                            <th>Tipo de Material</th>
                            <th>Tipo de Ensayo</th>
                            <th>Número de Bandeja</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($muestras)): ?>
                            <tr>
                                <td colspan="6" class="text-center">No hay muestras a botar</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($muestras as $muestra): ?>
                                <tr>
                                    <td><?= htmlspecialchars($muestra['Sample_ID']) ?></td>
                                    <td><?= htmlspecialchars($muestra['Sample_Number']) ?></td>
                                    <td><?= isset($muestra['Material_Type']) ? htmlspecialchars($muestra['Material_Type']) : 'N/A' ?></td>
                                    <td><?= htmlspecialchars($muestra['test_type']) ?></td>
                                    <td><?= isset($muestra['Tare_Name']) ? htmlspecialchars($muestra['Tare_Name']) : 'N/A' ?></td>
                                    <td>
                                        <a>Botar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>

<?php
// Función para obtener muestras a botar
function obtenerMuestrasABotar($conexion, $tablas, $fechaLimite) {
    $muestras = [];
    foreach ($tablas as $tabla) {
        $columns = "id, Sample_ID, Sample_Number, test_type";

        // Verifica si la tabla tiene la columna 'Tare_Name'
        $checkColumnQuery = "SHOW COLUMNS FROM $tabla LIKE 'Tare_Name'";
        $checkColumnResult = mysqli_query($conexion, $checkColumnQuery);

        if (mysqli_num_rows($checkColumnResult) > 0) {
            $columns .= ", Tare_Name";
        }

        // Verifica si la tabla tiene la columna 'Material_Type'
        $checkMaterialTypeQuery = "SHOW COLUMNS FROM $tabla LIKE 'Material_Type'";
        $checkMaterialTypeResult = mysqli_query($conexion, $checkMaterialTypeQuery);

        if (mysqli_num_rows($checkMaterialTypeResult) > 0) {
            $columns .= ", Material_Type"; // Solo agregar si existe
        }

        $query = "SELECT $columns FROM $tabla WHERE Test_Start_Date >= '$fechaLimite'";
        $result = mysqli_query($conexion, $query);
        if (!$result) {
            die("Error al consultar la base de datos: " . mysqli_error($conexion));
        }

        while ($row = mysqli_fetch_assoc($result)) {
            $muestras[] = $row;
        }
    }

    // Ahora buscar en la tabla de ensayos en revisión
    $queryEnsayos = "SELECT Sample_ID, Sample_Number, test_type FROM ensayos_en_revision WHERE Test_Start_Date	 >= '$fechaLimite'";
    $resultEnsayos = mysqli_query($conexion, $queryEnsayos);
    if (!$resultEnsayos) {
        die("Error al consultar la base de datos: " . mysqli_error($conexion));
    }

    while ($row = mysqli_fetch_assoc($resultEnsayos)) {
        // Verificar si ya existe en $muestras para evitar duplicados
        $muestras[] = $row;
    }

    return $muestras;
}
?>
