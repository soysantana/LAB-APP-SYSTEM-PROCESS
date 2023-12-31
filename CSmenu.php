<?php
$page_title = 'Menu de Ensayos de Compresion';
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
                    <span>Menu de Ensayos de Compresion</span>
                </strong>
            </div>
            <div class="panel-body">
            <div class="list-group">
              <a href="UCS.php" class="list-group-item">UCS</a>
              <a href="grout_specimens.php" class="list-group-item">Grout Specimens</a>
              <a href="concrete_specimen.php" class="list-group-item">Concrete Specimens</a>
          </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>
