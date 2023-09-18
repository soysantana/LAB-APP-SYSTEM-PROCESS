<?php
$page_title = 'Menu de ensayos de Gravedades Expesificas';
require_once('includes/load.php');

page_require_level(3);
$products = join_lab_test_requisition_form();
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Menu de Ensayos de Compresion</span>
                </strong>
            </div>
            <div class="panel-body">
                <div class="list-group">
              <a href="density_weigth.php" class="list-group-item">Densidades De Especimenes De Suelo</a>
              <a href="density_bulk.php" class="list-group-item">Densidad Bulk</a>
              <a href="conteo_gama.php" class="list-group-item">Conteo Gamma Densimetro</a>
              <a href="ensayo_gama.php" class="list-group-item">Ensayo Gamma Densimetro</a>
              <a href="sand_density.php" class="list-group-item">Calibracion de Arena</a>
          </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>
