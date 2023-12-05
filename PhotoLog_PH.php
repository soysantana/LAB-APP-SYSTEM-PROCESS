<?php
$page_title = 'Photo Log';
require_once('includes/load.php');
page_require_level(2);
$SearchTable = find_all('pinhole');
?>

<?php include_once('layouts/header.php'); ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<div class="col-md-7">
  <?php echo display_msg($msg); ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <strong>
        <span class="glyphicon glyphicon-th"></span>
        <span>Muestras de Pinhole</span>
      </strong>
    </div>
    <div class="panel-body">
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px">#</th>
            <th class="text-center" style="width: 50px">ID Muestra</th>
            <th class="text-center" style="width: 50px">Numero de muestra</th>
            <th class="text-center" style="width: 50px">Registrado Por</th>
            <th class="text-center" style="width: 50px">Accion</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($SearchTable as $Search):?>
          <tr>
            <td class="text-center"><?php echo count_id();?></td>
            <td class="text-center"><?php echo $Search['Sample_ID']; ?></td>
            <td class="text-center"><?php echo $Search['Sample_Number']; ?></td>
            <td class="text-center"><?php echo $Search['Registered_By']; ?></td>
            <td class="text-center">
              <a href="#" class="btn btn-xs btn-success open-modal" id="verificarBtn" data-toggle="modal" data-target="#myModal_<?php echo intval($Search['id']); ?>" data-id="<?php echo intval($Search['id']); ?>">
                <span class="glyphicon glyphicon-ok-sign"></span>
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Primer modal -->
<?php foreach ($SearchTable as $Search):?>
  <div class="modal fade" id="myModal_<?php echo intval($Search['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><?php echo $Search['Sample_ID']; ?>-<?php echo $Search['Sample_Number']; ?></h4>
        </div>
        <div class="modal-body"><h3>¡Heey!   Seleciona una opcion puedes ver o agregar</h3></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          <a href="PhotoLog-PH-Save.php?id=<?php echo intval($Search['id']); ?>" class="btn btn-primary" onclick="verificarModal(<?php echo intval($Search['id']); ?>)">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
          </a>
          <a href="PDF/PhotoLog-PH.php?id=<?php echo intval($Search['id']); ?>" class="btn btn-primary" onclick="verificarModal(<?php echo intval($Search['id']); ?>)">
            <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php include_once('layouts/footer.php'); ?>