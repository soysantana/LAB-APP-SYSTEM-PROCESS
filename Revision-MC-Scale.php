<?php
$page_title = 'Moisture Content with Scale';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2); 

$MC = find_by_id('moisture_scale', (int)$_GET['id']);
?>


<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Moisture Content with Scale</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="mc_scale.php" onsubmit="calcular()">

          <div class="col-xs-4">
            <label>Trial No.</label>
            <input class="form-control" name="trial" type="text" value="<?php echo ($MC['Trial']); ?>" id="trial">
          </div>
          <div class="col-xs-4">
            <label>Tare Name.</label>
            <input class="form-control" name="tarename" type="text" value="<?php echo ($MC['Tare_Name']); ?>">
          </div>
          <div class="col-xs-4">
            <label>Moisture Content (%)</label>
            <input class="form-control" name="mc" type="text" value="<?php echo ($MC['Mc']); ?>" id="mc" oninput="calcular()">
          </div>
          <div class="col-xs-4">
            <label>Scale Model</label>
            <input class="form-control" name="scale_model" type="text" value="<?php echo ($MC['Scale_Model']); ?>" id="scale_model" oninput="calcular()">
          </div>
          <div class="col-xs-4">
            <label>Technician</label>
            <input class="form-control" name="technician" type="text" value="<?php echo ($MC['Technician']); ?>">
          </div>
          <div class="col-xs-4">
            <label>Test Start Date</label>
            <input class="form-control" name="testdate" type="date" value="<?php echo ($MC['Test_Start_Date']); ?>">
          </div>
          <div class="col-xs-4">
            <label>Comments</label>
            <textarea class="form-control" name="comment" type="text"><?php echo ($MC['Comment']); ?></textarea>
          </div>
          <div class="panel-body">
            <div class="col-md-12"></div>
          </div>
          <button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
          <button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
          <a href="PDF/MC_Scale_Rev_1.php?id=<?php echo intval($MC['id']); ?>" class="btn btn-primary">Generar PDF</a>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include_once('layouts/footer.php'); ?>