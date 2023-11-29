<?php
$page_title = 'Menu de Photo Log';
require_once('includes/load.php');

page_require_level(2);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Menu de Photo Log</span>
        </strong>
      </div>
      <div class="panel-body">
        <div class="list-group">
          <a class="list-group-item" href="PhotoLog_PH.php" style="font-size: 16px">Pinhole</a>
          <a class="list-group-item" href="" style="font-size: 16px">Sanidad</a>
          <a class="list-group-item" href="" style="font-size: 16px">Sand Castle</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('layouts/footer.php'); ?>
