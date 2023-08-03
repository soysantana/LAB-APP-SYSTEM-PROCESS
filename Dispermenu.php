<?php
$page_title = 'Menu de ensayos de Dispersion';
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
                    <span>Menu de Ensayos de Dispersion</span>
                </strong>
            </div>
            <div class="panel-body">
              <a href="pinhole.php" class="btn btn-primary btn-lg btn-block">Pinhole</a>
              <a href="double_hydrometer.php" class="btn btn-primary btn-lg btn-block">Doble Hidrometro</a>
              <a href="pagina3.php" class="btn btn-primary btn-lg btn-block">Crumb</a>
              
          </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>


   