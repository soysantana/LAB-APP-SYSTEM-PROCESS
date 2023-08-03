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
                    <span>Menu de Ensayos de Permeabilidad</span>
                </strong>
            </div>
            <div class="panel-body">
              <a href="permeability_granular.php" class="btn btn-primary btn-lg btn-block">Permeabilidad Suelo Granular</a>
              <a href="" class="btn btn-primary btn-lg btn-block">Permeabilidad</a>
          </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>
