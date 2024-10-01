<?php
$page_title = 'Seguimiento detallado';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);
$lab_req_form = join_lab_test_requisition_form();
?>
<?php include_once('layouts/header.php'); ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="row">
    <div class="col-md-12">
        <?php echo display_msg($msg); ?>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <div class="pull-right"></div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary" id="btnBuscar">Find</button>
                        </span>
                        <input
                            type="text"
                            id="inputBusqueda"
                            class="form-control"
                            name="title"
                            placeholder="Buscar detalle de muestras"
                        />
                    </div>
                    <div id="result" class="list-group"></div>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 150px">Fecha de Muestreo</th>
                            <th class="text-center" style="width: 150px">Clientes</th>
                            <th class="text-center" style="width: 150px">ID de Muestras</th>
                            <th class="text-center" style="width: 150px">Numero de Muestras</th>
                            <th class="text-center" style="width: 25px">MC</th>
                            <th class="text-center" style="width: 25px">AL</th>
                            <th class="text-center" style="width: 25px">GS</th>
                            <th class="text-center" style="width: 25px">SP</th>
                            <th class="text-center" style="width: 25px">SG</th>
                            <th class="text-center" style="width: 25px">AR</th>
                            <th class="text-center" style="width: 25px">SCT</th>
                            <th class="text-center" style="width: 25px">LAA</th>
                            <th class="text-center" style="width: 25px">SND</th>
                            <th class="text-center" style="width: 25px">Con</th>
                            <th class="text-center" style="width: 25px">UCS</th>
                            <th class="text-center" style="width: 25px">PLT</th>
                            <th class="text-center" style="width: 25px">BTS</th>
                            <th class="text-center" style="width: 25px">HY</th>
                            <th class="text-center" style="width: 25px">DHY</th>
                            <th class="text-center" style="width: 25px">PH</th>
                            <th class="text-center" style="width: 25px">Per</th>
                            <th class="text-center" style="width: 25px">Sha</th>
                            <th class="text-center" style="width: 25px">Den</th>
                            <th class="text-center" style="width: 25px">Cru</th>
                            <th class="text-center" style="width: 100px">Ens. Solicitados</th>
                            <th class="text-center" style="width: 100px">Ens. Realizados</th>
                            <th class="text-center" style="width: 150px">Progreso de Ensayos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lab_req_form as $lab_req_id): ?>
                            <?php
                            // Contar ensayos solicitados y entregados
                            $total_ensayos_solicitados = 0;
                            $total_ensayos_entregados = 0;

                            // Array para almacenar los resultados de cada Test_Type
                            $test_status = [];

                            for ($i = 1; $i <= 20; $i++) {
                                $column_name = 'Test_Type' . $i;
                                if (isset($lab_req_id[$column_name]) && !empty($lab_req_id[$column_name])) {
                                    $total_ensayos_solicitados++;
                                    // Verificar si el ensayo ha sido entregado
                                    $query = "SELECT COUNT(*) AS entregado FROM ensayo_en_entrega WHERE Sample_ID = '{$lab_req_id['Sample_ID']}' AND Test_Type = '{$lab_req_id[$column_name]}'";
                                    $result = $db->query($query);
                                    $row = $result->fetch_assoc();
                                    if ($row['entregado'] > 0) {
                                        $test_status[$i] = 'entregado';  // Guardar si fue entregado
                                        $total_ensayos_entregados++;
                                    } else {
                                        $test_status[$i] = 'no_entregado';  // Guardar si no fue entregado
                                    }
                                } else {
                                    $test_status[$i] = 'no_test';  // Guardar si no hay test
                                }
                            }

                            // Calcular el porcentaje de ensayos entregados
                            $porcentaje_entregado = ($total_ensayos_solicitados > 0) ? ($total_ensayos_entregados / $total_ensayos_solicitados) * 100 : 0;
                            ?>
                            <tr>
                                <td class="text-center"><?php echo remove_junk($lab_req_id['Sample_Date']); ?></td>
                                <td class="text-center"><?php echo remove_junk($lab_req_id['Clientes']); ?></td>
                                <td class="text-center"><?php echo remove_junk($lab_req_id['Sample_ID']); ?></td>
                                <td class="text-center"><?php echo remove_junk($lab_req_id['Sample_Number']); ?></td>

                                <?php for ($i = 1; $i <= 20; $i++): ?>
                                    <td class="text-center">
                                        <?php if ($test_status[$i] === 'entregado'): ?>
                                            <i class="fas fa-check text-primary"></i> <!-- Cotejo azul -->
                                        <?php elseif ($test_status[$i] === 'no_entregado'): ?>
                                            <i class="fas fa-times text-danger"></i> <!-- X roja -->
                                        <?php else: ?>
                                            <i class=""></i> <!-- Sin test -->
                                        <?php endif; ?>
                                    </td>
                                <?php endfor; ?>

                                <td class="text-center"><?php echo $total_ensayos_solicitados; ?></td>
                                <td class="text-center"><?php echo $total_ensayos_entregados; ?></td>
                                <td class="text-center">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje_entregado; ?>%;" aria-valuenow="<?php echo $porcentaje_entregado; ?>" aria-valuemin="0" aria-valuemax="100">
                                            <?php echo round($porcentaje_entregado, 2); ?>%
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
// Resumen de Ensayos y Muestras por Clientes
$clientes_ensayos = [];
$clientes_muestras = []; // Para almacenar las muestras únicas por cliente

foreach ($lab_req_form as $lab_req_id) {
    $cliente = remove_junk($lab_req_id['Clientes']);
    
    // Inicializar el cliente en el array si no existe
    if (!isset($clientes_ensayos[$cliente])) {
        $clientes_ensayos[$cliente] = 0;
        $clientes_muestras[$cliente] = []; // Inicializar un array para las muestras
    }
    
    // Contar ensayos solicitados para este cliente
    for ($i = 1; $i <= 20; $i++) {
        $column_name = 'Test_Type' . $i;
        if (isset($lab_req_id[$column_name]) && !empty($lab_req_id[$column_name])) {
            $clientes_ensayos[$cliente]++;
        }
    }

    // Almacenar las muestras únicas por cliente
    $clientes_muestras[$cliente][] = $lab_req_id['Sample_ID'];
}

// Calcular el total de ensayos solicitados y la cantidad de muestras únicas
$total_muestras = [];
foreach ($clientes_muestras as $cliente => $muestras) {
    $total_muestras[$cliente] = count(array_unique($muestras)); // Contar muestras únicas
}

// Calcular totales generales
$total_ensayos_generales = array_sum($clientes_ensayos);
$total_muestras_generales = array_sum($total_muestras);
?>

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <h3 class="panel-title">Resumen de Muestras por Cliente</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Cliente</th>
                    <th class="text-center">Total de Ensayos</th>
                    <th class="text-center">Cantidad de Muestras</th>
                    <th class="text-center">Porcentaje de Ensayos</th>
                    <th class="text-center">Porcentaje de Muestras</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes_ensayos as $cliente => $total_ensayos): ?>
                    <tr>
                        <td class="text-center"><?php echo $cliente; ?></td>
                        <td class="text-center"><?php echo $total_ensayos; ?></td>
                        <td class="text-center"><?php echo isset($total_muestras[$cliente]) ? $total_muestras[$cliente] : 0; ?></td>
                        <td class="text-center">
                            <?php 
                            $porcentaje_ensayos = ($total_ensayos_generales > 0) ? ($total_ensayos / $total_ensayos_generales) * 100 : 0;
                            echo round($porcentaje_ensayos, 2) . '%'; 
                            ?>
                        </td>
                        <td class="text-center">
                            <?php 
                            $porcentaje_muestras = ($total_muestras_generales > 0) ? ($total_muestras[$cliente] / $total_muestras_generales) * 100 : 0;
                            echo round($porcentaje_muestras, 2) . '%'; 
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <h3 class="panel-title">Distribución porcentual de Ensayos por Cliente</h3>
    </div>
    <div class="panel-body">
        <canvas id="myPieChartEnsayos"></canvas>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <h3 class="panel-title">Distribución porcentual de Muestras por Cliente</h3>
    </div>
    <div class="panel-body">
        <canvas id="myPieChartMuestras"></canvas>
    </div>
</div>

<style>
    #myPieChartEnsayos, #myPieChartMuestras {
        width: 400px;  /* Ajusta el ancho según tus necesidades */
        height: 400px; /* Ajusta la altura según tus necesidades */
    }
</style>

<script>
    // Gráfico de Muestras
    const ctxMuestras = document.getElementById('myPieChartMuestras').getContext('2d');
    const dataMuestras = {
        labels: <?php echo json_encode(array_keys($total_muestras)); ?>,
        datasets: [{
            label: 'Cantidad de Muestras',
            data: <?php echo json_encode(array_values($total_muestras)); ?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)'
            ],
            borderColor: 'rgba(255, 255, 255, 1)',
            borderWidth: 1
        }]
    };

    const myPieChartMuestras = new Chart(ctxMuestras, {
        type: 'pie',
        data: dataMuestras,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Distribución de Muestras por Cliente'
                }
            }
        }
    });

    // Gráfico de Ensayos
    const ctxEnsayos = document.getElementById('myPieChartEnsayos').getContext('2d');
    const dataEnsayos = {
        labels: <?php echo json_encode(array_keys($clientes_ensayos)); ?>,
        datasets: [{
            label: 'Cantidad de Ensayos',
            data: <?php echo json_encode(array_values($clientes_ensayos)); ?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)'
            ],
            borderColor: 'rgba(255, 255, 255, 1)',
            borderWidth: 1
        }]
    };

    const myPieChartEnsayos = new Chart(ctxEnsayos, {
        type: 'pie',
        data: dataEnsayos,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Distribución de Ensayos por Cliente'
                }
            }
        }
    });
</script>

<?php include_once('layouts/footer.php'); ?>
