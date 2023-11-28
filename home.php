<?php
$page_title = 'Página de Inicio';
require_once('includes/load.php');

if (!$session->isUserLoggedIn(true)) {
    redirect('index.php', false);
}
$Search_ListP = find_all('lista_de_pendiente');
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

                                $Search_Repeticion = find_by_sample_info('ensayo_en_repeticion', $muestra['Sample_ID'], $muestra['Sample_Number'], $muestra['Test_Type']);

                                $rowClass = $Search_Repeticion ? 'highlight-row' : '';
                                $imgClass = $Search_Repeticion ? 'highlight-img' : '';

                                echo "<tr>";
                                echo "<td class='$rowClass'>" . $muestra['Sample_ID'] . "</td>";
                                echo "<td class='$rowClass'>" . $muestra['Sample_Number'] . "</td>";
                                echo "<td class='$rowClass'>" . $muestra['Test_Type'] . "</td>";
                                
                                
                                $Search_Preparacion = find_by_sample_info('muestra_en_preparacion', $muestra['Sample_ID'], $muestra['Sample_Number'], $muestra['Test_Type']);
    
                                echo "<td class='center-cell $rowClass' style='text-align: center;'>";
                                if ($Search_Preparacion) {
                                    
                                    echo "<img src='uploads/img/realizado-gren.png' alt='En preparación' width='30px'>";
                                } else {
                                    
                                    echo "<img src='uploads/img/norealizado-red.png' alt='No estoy aquí' width='30px'>";
                                }
                                echo "</td>";

                                
                                $Search_Realizacion = find_by_sample_info('muestra_en_realizacion', $muestra['Sample_ID'], $muestra['Sample_Number'], $muestra['Test_Type']);
    
                                echo "<td class='center-cell $rowClass' style='text-align: center;'>";
                                if ($Search_Realizacion) {
                                    
                                    echo "<img src='uploads/img/realizado-gren.png' alt='En preparación' width='30px'>";
                                } else {
                                    
                                    echo "<img src='uploads/img/norealizado-red.png' alt='No estoy aquí' width='30px'>";
                                }
                                echo "</td>";


                                $Search_Entregado = find_by_sample_info('ensayo_en_entrega', $muestra['Sample_ID'], $muestra['Sample_Number'], $muestra['Test_Type']);
    
                                echo "<td class='center-cell $rowClass' style='text-align: center;'>";
                                if ($Search_Entregado) {
                                    
                                    echo "<img src='uploads/img/realizado-gren.png' alt='En preparación' width='30px'>";
                                } else {
                                    
                                    echo "<img src='uploads/img/norealizado-red.png' alt='No estoy aquí' width='30px'>";
                                }
                                echo "</td>";


                                $Search_Revision = find_by_sample_info('ensayos_en_revision', $muestra['Sample_ID'], $muestra['Sample_Number'], $muestra['Test_Type']);
    
                                echo "<td class='center-cell $rowClass' style='text-align: center;'>";
                                if ($Search_Revision) {
                                    
                                    echo "<img src='uploads/img/realizado-gren.png' alt='En preparación' width='30px'>";
                                } else {
                                    
                                    echo "<img src='uploads/img/norealizado-red.png' alt='No estoy aquí' width='30px'>";
                                }
                                echo "</td>";
                                

                                echo "<td class='center-cell $rowClass' style='text-align: center;'>";
                                if ($Search_Repeticion) {
                                    echo "<img src='uploads/img/01.gif' class='imagen-amarilla' alt='En preparación' width='30px'>";
                                } else {
                                    echo "";
                                }
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
    background-color: #F0F0F0; /* Puedes cambiar el color de fondo a tu preferencia */
}
</style>

<?php include_once('layouts/footer.php'); ?>