<?php
$page_title = 'Lista de muestras';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);
$lab_req_form = join_lab_test_requisition_form();
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <div class="pull-right">
          <a href="add_Muestra.php" class="btn btn-primary">Agregar Muestra</a>
        </div>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="text-center" style="width: 50px;">#</th>
              <th> ID de Muestras </th>
              <th> Numero de Muestras </th>
              <th class="text-center" style="width: 100px;"> Acciones </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($lab_req_form as $lab_req_id):?>
            <tr>
              <td class="text-center"><?php echo remove_junk($lab_req_id['id']); ?></td>
              <td class="text-center"> <?php echo remove_junk($lab_req_id['Sample_ID']); ?></td>
              <td class="text-center"> <?php echo remove_junk($lab_req_id['Sample_Number']); ?></td>
              <td class="text-center">
                <div class="btn-group">
                  <a href="edit_regMuestra.php?id=<?php echo intval($lab_req_id['id']); ?>" class="btn btn-info btn-xs"  title="Editar" data-toggle="tooltip">
                    <span class="glyphicon glyphicon-edit"></span>
                  </a>
                  <a href="delete_product.php?id=<?php echo (int)$lab_req_id['id'];?>" class="btn btn-danger btn-xs"  title="Eliminar" data-toggle="tooltip">
                    <span class="glyphicon glyphicon-trash"></span>
                  </a>
                </div>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include_once('layouts/footer.php'); ?>