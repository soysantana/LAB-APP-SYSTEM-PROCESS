<?php
$page_title = 'Página de Inicio';
require_once('includes/load.php');

if (!$session->isUserLoggedIn(true)) {
    redirect('index.php', false);
}

$Search_ListP = find_all('lista_de_pendiente');
$MuestraPreparacion = find_all('muestra_en_preparacion');
$MuestraRealizacion = find_all('muestra_en_realizacion');
$EnsayoEntregado = find_all('ensayo_en_entrega');
$EnsayoRevision = find_all('ensayos_en_revision');
$EnsayoRepeticion = find_all('ensayo_en_repeticion');

$en_preparacion = false;
foreach ($MuestraPreparacion as $fila) {
    // Verifica si la clave "en_preparacion" existe en la fila de datos
    if (isset($fila['en_preparacion'])) {
        if ($sample_id == $fila['Sample_ID'] && $sample_number == $fila['Sample_Number'] && $test_type == $fila['Test_Type']) {
            $en_preparacion = true;
            break;
        }
    }
}

$en_realizacion = false;
foreach ($MuestraRealizacion as $fila) {
    // Verifica si la clave "en_realizacion" existe en la fila de datos
    if (isset($fila['en_realizacion'])) {
        if ($sample_id == $fila['Sample_ID'] && $sample_number == $fila['Sample_Number'] && $test_type == $fila['Test_Type']) {
            $en_realizacion = true;
            break;
        }
    }
}

$ensayo_entregado = false;
foreach ($EnsayoEntregado as $fila) {
    // Verifica si la clave "ensayo_entregado" existe en la fila de datos
    if (isset($fila['ensayo_entregado'])) {
        if ($sample_id == $fila['Sample_ID'] && $sample_number == $fila['Sample_Number'] && $test_type == $fila['Test_Type']) {
            $ensayo_entregado = true;
            break;
        }
    }
}

$ensayo_revision = false;
foreach ($EnsayoRevision as $fila) {
    // Verifica si la clave "ensayo_revision" existe en la fila de datos
    if (isset($fila['ensayo_revision'])) {
        if ($sample_id == $fila['Sample_ID'] && $sample_number == $fila['Sample_Number'] && $test_type == $fila['Test_Type']) {
            $ensayo_revision = true;
            break;
        }
    }
}

$ensayo_repeticion = false;
foreach ($EnsayoRepeticion as $fila) {
    // Verifica si la clave "ensayo_repeticion" existe en la fila de datos
    if (isset($fila['ensayo_repeticion'])) {
        if ($sample_id == $fila['Sample_ID'] && $sample_number == $fila['Sample_Number'] && $test_type == $fila['Test_Type']) {
            $ensayo_repeticion = true;
            break;
        }
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
                                <th class='center-cell'>Revision</th>
                                <th class='center-cell'>Repeticion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($Search_ListP as $muestra) {
                                echo "<tr>";
                                echo "<td>" . $muestra['Sample_ID'] . "</td>";
                                echo "<td>" . $muestra['Sample_Number'] . "</td>";
                                echo "<td>" . $muestra['Test_Type'] . "</td>";

                                $muestra['En_Preparacion'] = $en_preparacion;
                                $muestra['En_Realizacion'] = $en_realizacion;
                                $muestra['Ensayo_Entregado'] = $ensayo_entregado;
                                $muestra['En_Revision'] = $ensayo_revision;
                                $muestra['En_Repeticion'] = $ensayo_repeticion;

                                echo "<td class='center-cell'>";
                                if ($muestra['En_Preparacion'] == 1 &&
                                    $sample_id == $muestra['Sample_ID'] &&
                                    $sample_number == $muestra['Sample_Number'] &&
                                    $test_type == $muestra['Test_Type']) {
                                    echo '<img src="uploads/img/realizado.png" alt="En Preparación" width="30px">';
                                } else {
                                    echo '<img src="uploads/img/norealizado.png" alt="No en Preparación" width="30px">';
                                }
                                echo "</td>";
                                
                                

                                // Columna de Realización
                                echo "<td class='center-cell'>";
                                echo $muestra['En_Realizacion'] ? '<img src="uploads/img/realizado.png" alt="En Realización" width="30px">' : '<img src="uploads/img/norealizado.png" alt="No En Realización" width="30px">';
                                echo "</td>";

                                // Columna de Entregado
                                echo "<td class='center-cell'>";
                                echo $muestra['Ensayo_Entregado'] ? '<img src="uploads/img/realizado.png" alt="Ensayo Entregado" width="30px">' : '<img src="uploads/img/norealizado.png" alt="No Ensayo Entregado" width="30px">';
                                echo "</td>";

                                // Columna de Revision
                                echo "<td class='center-cell'>";
                                echo $muestra['En_Revision'] ? '<img src="uploads/img/realizado.png" alt="En Revision" width="30px">' : '<img src="uploads/img/norealizado.png" alt="" width="30px">';
                                echo "</td>";

                                // Columna de Repeticion
                                echo "<td class='center-cell'>";
                                echo $muestra['En_Repeticion'] ? '<img src="uploads/img/repeticion.png" alt="En Repeticion" width="30px">' : '<img src="" alt="" width="30px">';
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

<?php include_once('layouts/footer.php'); ?>