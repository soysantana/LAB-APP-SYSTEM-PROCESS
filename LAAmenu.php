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
              <a href="laa_small.php" class="btn btn-primary btn-lg btn-block">Los Angeles Abrasion of Small Size Coarse Aggregate</a>
              <a href="laa_large.php" class="btn btn-primary btn-lg btn-block">Los Angeles Abrasion of Large Size Coarse Aggregate</a>
          </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>
