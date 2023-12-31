<?php
$page_title = 'Menu de ensayos de Gravedades Expesificas';
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
                    <span>Menu de Ensayos de Specific Gravity</span>
                </strong>
            </div>
            <div class="panel-body">
                <div class="list-group">
              <a href="specific_gravity.php" class="list-group-item">Specific Gravity By Pycnometer</a>
              <a href="sg_absortion.php" class="list-group-item">Specific Gravity and Absortion In Coarse Aggregate</a>
              <a href="sg_fine.php" class="list-group-item">Specific Gravity For Fine Aggregate</a>
          </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>
