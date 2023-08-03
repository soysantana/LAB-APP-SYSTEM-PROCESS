<?php
$page_title = 'Menu de ensayos de Humedad';
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
                    <span>Menu de Ensayos de Contenido de Humedad</span>
                </strong>
            </div>
            <div class="panel-body">
              <a href="mcoven.php" class="btn btn-primary btn-lg btn-block">Contenido de humedad en Horno</a>
              <a href="mc_microwave.php" class="btn btn-primary btn-lg btn-block">Contenido de humedad en Microhonda</a>
              <a href="mc_constant_mass.php" class="btn btn-primary btn-lg btn-block">Contenido de humedad en 60°C</a>
              <a href="mc_scale.php" class="btn btn-primary btn-lg btn-block">Contenido de humedad en Scale</a>
          </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>


   