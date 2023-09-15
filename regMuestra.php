<?php
$page_title = 'Lista de Muestras';
require_once('includes/load.php');
// Checking what level user has permission to view this page
page_require_level(3);
$products = join_lab_test_requisition_form();
$required_tests = ensayos_requeridos();
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-4">
    <?php echo display_msg($msg); ?>
  </div>
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <div class="pull-right">
          <a href="add_Muestra.php" class="btn btn-primary">Agregar muestra</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="box-body">
  <div class="table-responsive">
    <table id="tabla1" class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
      <thead>
        <tr>
          <th>ID de Muestra</th>
          <th>Número de Muestra</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product) { ?>
          <tr>
            <td><?php echo $product['Sample_ID']; ?></td>
            <td><?php echo $product['Sample_Number']; ?></td>
            <td>
              <button class="btn btn-primary ver-ensayos" data-toggle="modal" data-target="#basicModal_<?php echo $product['Sample_ID']; ?>">Ver Ensayos</button>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <div class="row">
    <?php $count = 0; ?>
    <?php foreach ($products as $product) { ?>
      <?php if ($count % 3 == 0) { ?>
        </div><div class="row">
      <?php } ?>

      <div class="modal fade" id="basicModal_<?php echo $product['Sample_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel_<?php echo $product['Sample_ID']; ?>" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="basicModalLabel_<?php echo $product['Sample_ID']; ?>"><?php echo remove_junk($product['Sample_ID']); ?> - <?php echo remove_junk($product['Sample_Number']); ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <h3>Ensayos Solicitados:</h3>

              <ul>
                <?php foreach ($required_tests as $column) { ?>
                  <?php if (isset($product[$column]) && $product[$column] === 'Required') { ?>
                    <li><?php echo remove_junk($column) . ': Required'; ?></li>
                  <?php } ?>
                <?php } ?>
              </ul>

              <h3>Fecha de muestreo: <?php echo remove_junk($product['Sample_Date']); ?></h3>
              <h3>Fecha de registo: <?php echo remove_junk($product['Registed_Date']); ?></h3>
              <h3>Registrado por: <?php echo remove_junk($product['Register_By']); ?></h3>

            </div>
            <div class="modal-footer">
              <form action="edit_regMuestra.php" method="GET" style="display: inline;">
                <button type="submit" class="btn btn-info btn-md" title="Editar" data-toggle="tooltip">
                  <span class="glyphicon glyphicon-edit"></span> Editar
                </button>
              </form>
              <button type="button" class="btn btn-danger btn-md" title="Eliminar" data-toggle="tooltip" onclick="confirmarEliminacion(event)">
                <span class="glyphicon glyphicon-trash"></span> Eliminar
              </button>
            </div>
          </div>
        </div>
      </div>
      <?php $count++; ?>

    <?php } ?>
  </div>

  <style>
    .modal-body h3 {
      font-size: 15px;
    }

    .modal-body ul {
      font-size: 14px;
    }

    .row {
      margin-bottom: 12px;
    }

    .modal-body ul li {
      font-size: 15px;
      margin-bottom: 10px;
    }

  </style>

  <?php include_once('layouts/footer.php'); ?>
