<?php
$page_title = 'Menu de ensayos de Granulometrias';
require_once('includes/load.php');

page_require_level(2);
$products = join_lab_test_requisition_form();
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Menu de Ensayos de Granulometrias</span>
                </strong>
            </div>
            <div class="panel-body">
                <div class="list-group">
              <a href="Grain_Size.php" class="list-group-item">Granulometria por Tamizado para Suelos</a>
              <a href="gs_fine_agg.php" class="list-group-item">Granulometria por Tamizado de Agregados Finos</a>
              <a href="gs_coarse_agg.php" class="list-group-item">Granulometria por Tamizado de Agregados Gruesos</a>
              <a href="gs_coarsethan_agg.php" class="list-group-item">Granulometria por Tamizado de Agregados mas Gruesos</a>
              <a href="gs_rock.php" class="list-group-item">Granulometria por Tamizado de Rocas</a>
              <a href="hydrometer.php" class="list-group-item">Granulometria por Sedimentacion</a>
            </div>
        </div>
    </div>
</div>
</div>

<?php include_once('layouts/footer.php'); ?>
