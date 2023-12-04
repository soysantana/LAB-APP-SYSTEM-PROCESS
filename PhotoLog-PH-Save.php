<?php
$page_title = 'Photo Log';
require_once('includes/load.php');

page_require_level(2);
?>

<?php include_once('layouts/header.php'); ?>

<div class="col-md-5">
  <?php echo display_msg($msg); ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <strong>
        <span class="glyphicon glyphicon-th"></span>
        <span>Muestras de Pinhole</span>
      </strong>
    </div>
    <div class="panel-body">
      <form id="uploadForm" action="PhotoLog-PH-Update.php?id=1" method="post" enctype="multipart/form-data">
        <div class="row">
          <?php for ($i = 1; $i <= 7; $i++): ?>
            <div class="col-md-6">
              <label for="photo<?php echo $i; ?>">Photo <?php echo $i; ?></label>
              <input type="file" name="photo<?php echo $i; ?>" id="photo<?php echo $i; ?>" accept="image/*" class="form-control" />
              <br />
            </div>
            <?php if ($i % 2 == 0): ?>
              </div><div class="row">
            <?php endif; ?>
          <?php endfor; ?>
        </div>
        <div class="modal-footer">
          <button type="submit" name="Update_Picture" class="btn btn-primary">Subir Fotos</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>



<?php include_once('layouts/footer.php'); ?>
