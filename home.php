<?php
$page_title = 'Página de Inicio';
require_once('includes/load.php');

if (!$session->isUserLoggedIn(true)) {
    redirect('index.php', false);
}
$Search_ListP = find_all('lista_de_pendiente');

// Función para determinar el color de la barra de progreso según el porcentaje (ahora en PHP)
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
                            foreach ($Search_ListP as $muestra) {

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
</div>

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

<?php include_once('layouts/footer.php'); ?>
