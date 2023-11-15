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
          <a href="GS_FF.php" class="list-group-item">Granulometrias de FF</a>
          <a href="GS_CF.php" class="list-group-item">Granulometrias de CF</a>
          <a href="GS_LPF.php" class="list-group-item">Granulometrias de LPF</a>
          <a href="GS_UTF.php" class="list-group-item">Granulometrias de UTF</a>
          <a href="GS_TRF.php" class="list-group-item">Granulometrias de TRF</a>
          <a href="GS_RF.php" class="list-group-item">Granulometrias de RF</a>
          <a href="GS_IRF.php" class="list-group-item">Granulometrias de IRF</a>
          <a href="GS_UFF.php" class="list-group-item">Granulometrias de UFF</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('layouts/footer.php'); ?>
