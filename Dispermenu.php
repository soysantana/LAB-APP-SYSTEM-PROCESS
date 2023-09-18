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
                <div class="list-group">
              <a href="pinhole.php" class="list-group-item">Pinhole</a>
              <a href="double_hydrometer.php" class="list-group-item">Doble Hidrometro</a>
              <a href="pagina3.php" class="list-group-item">Crumb</a>
              
          </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>


   