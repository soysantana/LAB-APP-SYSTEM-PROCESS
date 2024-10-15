<?php
$page_title = 'Página de Inicio';
require_once('includes/load.php');

if (!$session->isUserLoggedIn(true)) {
    redirect('index.php', false);
}

// Obtenemos la lista de muestras evitando duplicados
$Search_ListP = find_all('lista_de_pendiente');

// Función para determinar el color de la barra de progreso según el porcentaje
function getColorForPercentage($porcentaje) {
    if ($porcentaje <= 50) {
        return 'red';
    } elseif ($porcentaje <= 80) {
        return 'yellow';
    } else {
        return 'green';
    }
}
?>

<?php include_once('layouts/header.php'); ?>

<div class="container-list">
    <div class="row">
        <div class="col-md-12">
            <?php echo display_msg($msg); ?>
            <div class="panel">
                <div class="jumbotron text-center">
                    <h1>Bienvenidos a Soil Index Test</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-24">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>
                        <span class="glyphicon glyphicon-th"></span>
                        <span>Proceso de muestras</span>
                    </strong>
                </div>
                <div class="col-md-24">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sample ID</th>
                                <th>Sample Number</th>
                                <th>Test Type</th>
                                <th class='center-cell'>Preparación</th>
                                <th class='center-cell'>Realización</th>
                                <th class='center-cell'>Entregado</th>
                                <th class='center-cell'>Revisión</th>
                                <th class='center-cell'>Repetición</th>
                                <th class='center-cell'>Progreso</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $processedSamples = []; // Array para rastrear las muestras procesadas
                            
                            foreach ($Search_ListP as $muestra) {
                                // Verificar si la muestra ya ha sido procesada
                                if (in_array($muestra['Sample_ID'], $processedSamples)) {
                                    continue; // Si ya se procesó, omitir
                                }

                                // Agregar el Sample_ID al array para marcarlo como procesado
                                $processedSamples[] = $muestra['Sample_ID'];

                                $Search_Repeticion = find_by_sample_info('ensayo_en_repeticion', $muestra['Sample_ID'], $muestra['Sample_Number'], $muestra['Test_Type']);

                                $rowClass = $Search_Repeticion ? 'highlight-row' : '';

                                // Inicializamos las variables para el progreso
                                $progresoTotal = 0;
                                $etapasCompletadas = 0;
                                $etapasTotales = 4; // Preparación, Realización, Entregado, Revisión

                                echo "<tr>";
                                echo "<td class='$rowClass'>" . $muestra['Sample_ID'] . "</td>";
                                echo "<td class='$rowClass'>" . $muestra['Sample_Number'] . "</td>";
                                echo "<td class='$rowClass'>" . $muestra['Test_Type'] . "</td>";

                                // Preparación
                                $Search_Preparacion = find_by_sample_info('muestra_en_preparacion', $muestra['Sample_ID'], $muestra['Sample_Number'], $muestra['Test_Type']);
                                echo "<td class='center-cell $rowClass' style='text-align: center;'>";
                                if ($Search_Preparacion) {
                                    echo "<img src='uploads/img/realizado-gren.png' alt='En preparación' width='30px'>";
                                    $etapasCompletadas++;
                                } else {
                                    echo "<img src='uploads/img/norealizado-red.png' alt='No realizado' width='30px'>";
                                }
                                echo "</td>";

                                // Realización
                                $Search_Realizacion = find_by_sample_info('muestra_en_realizacion', $muestra['Sample_ID'], $muestra['Sample_Number'], $muestra['Test_Type']);
                                echo "<td class='center-cell $rowClass' style='text-align: center;'>";
                                if ($Search_Realizacion) {
                                    echo "<img src='uploads/img/realizado-gren.png' alt='Realizado' width='30px'>";
                                    $etapasCompletadas++;
                                } else {
                                    echo "<img src='uploads/img/norealizado-red.png' alt='No realizado' width='30px'>";
                                }
                                echo "</td>";

                                // Entregado
                                $Search_Entregado = find_by_sample_info('ensayo_en_entrega', $muestra['Sample_ID'], $muestra['Sample_Number'], $muestra['Test_Type']);
                                echo "<td class='center-cell $rowClass' style='text-align: center;'>";
                                if ($Search_Entregado) {
                                    echo "<img src='uploads/img/realizado-gren.png' alt='Entregado' width='30px'>";
                                    $etapasCompletadas++;
                                } else {
                                    echo "<img src='uploads/img/norealizado-red.png' alt='No entregado' width='30px'>";
                                }
                                echo "</td>";

                                // Revisión
                                $Search_Revision = find_by_sample_info('ensayos_en_revision', $muestra['Sample_ID'], $muestra['Sample_Number'], $muestra['Test_Type']);
                                echo "<td class='center-cell $rowClass' style='text-align: center;'>";
                                if ($Search_Revision) {
                                    echo "<img src='uploads/img/realizado-gren.png' alt='En revisión' width='30px'>";
                                    $etapasCompletadas++;
                                } else {
                                    echo "<img src='uploads/img/norealizado-red.png' alt='No revisado' width='30px'>";
                                }
                                echo "</td>";

                                // Repetición
                                echo "<td class='center-cell $rowClass' style='text-align: center;'>";
                                if ($Search_Repeticion) {
                                    echo "<img src='uploads/img/01.gif' class='imagen-amarilla' alt='En repetición' width='30px'>";
                                }
                                echo "</td>";

                                // Cálculo del porcentaje de progreso
                                $progresoTotal = ($etapasCompletadas / $etapasTotales) * 100;
                                $color = getColorForPercentage($progresoTotal);

                                echo "<td class='center-cell'>";
                                echo "<div class='progress-bar-container'>";
                                echo "<div class='progress-bar' style='width: $progresoTotal%; background-color: $color;'></div>";
                                // Mostrar el porcentaje numérico al lado de la barra
                                echo "<span class='progress-percentage'>$progresoTotal%</span>";
                                echo "</div>";
                                echo "</td>";

                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Nueva sección para listar ensayos a botar -->
    <div class="container">
    <div class="col-md-24">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Listado de ensayos a botar</span>
                </strong>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre de Muestra</th>
                            <th>Numero de Muestra</th>
                            <th>Tipo de Ensayo</th>
                            <th>Bandeja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Conectar a la base de datos
                        $rtv = mysqli_connect('localhost', 'root', '', 'index_test_lab');
                        if (!$rtv) {
                            die("Error de conexión a la base de datos: " . mysqli_connect_error());
                        }

                        // Obtener muestras en revisión
                        $muestrasRevision = obtenerMuestrasEnRevision($rtv);
                        $muestras = buscarEnTodasLasTablas($rtv, $muestrasRevision);

                        // Cerrar la conexión
                        mysqli_close($rtv);
                        ?>

                        <?php if (!empty($muestras)) : ?>
                            <?php foreach ($muestras as $muestra) : ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($muestra['Sample_ID']); ?></td>
                                    <td><?php echo htmlspecialchars($muestra['Sample_Number']); ?></td>
                                    <td><?php echo htmlspecialchars($muestra['Test_Type']); ?></td>
                                    <td><?php echo htmlspecialchars($muestra['Tare_Name']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="4">No hay ensayos para botar.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>

<?php
// Función para obtener muestras en revisión
function obtenerMuestrasEnRevision($conexion) {
    $query = "SELECT Sample_ID, Sample_Number, test_type FROM ensayos_en_revision";
    $result = mysqli_query($conexion, $query);
    if (!$result) {
        die("Error al consultar la base de datos: " . mysqli_error($conexion));
    }

    $muestras = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $muestras[] = $row;
    }
    return $muestras;
}

// Función para buscar en todas las tablas
function buscarEnTodasLasTablas($conexion, $muestrasRevision) {
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

    $muestrasEncontradas = [];
    foreach ($muestrasRevision as $muestra) {
        foreach ($tablas as $tabla) {
            $query = "SELECT Sample_ID, Sample_Number, test_type, Tare_Name FROM $tabla WHERE Sample_ID = '{$muestra['Sample_ID']}' AND Sample_Number = '{$muestra['Sample_Number']}' AND test_type = '{$muestra['test_type']}'";
            $result = mysqli_query($conexion, $query);
            if (!$result) {
                die("Error al consultar la base de datos: " . mysqli_error($conexion));
            }

            while ($row = mysqli_fetch_assoc($result)) {
                $muestrasEncontradas[] = $row; // Agregar a la lista de muestras encontradas
            }
        }
    }

    return $muestrasEncontradas; // Retornar todas las muestras encontradas
}
?>
<style>
    /* Estilo para resaltar la fila */
    .highlight-row {
        background-color: #F0F0F0;
    }

    /* Estilos para la barra de progreso */
    .progress-bar-container {
        width: 100%;
        background-color: #f3f3f3;
        border-radius: 5px;
        height: 20px;
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .progress-bar {
        height: 20px;
        border-radius: 5px;
        transition: width 0.3s;
    }

    .progress-percentage {
        padding-left: 5px;
        font-weight: bold;
    }
</style>