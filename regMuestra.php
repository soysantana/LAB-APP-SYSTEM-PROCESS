<?php
$page_title = 'Lista de Muestras';
require_once('includes/load.php');
// Checking what level user has permission to view this page
page_require_level(3);
$products = join_lab_test_requisition_form();
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



<div class="row">
  <?php $count = 0; ?>
  <?php foreach ($products as $product) { ?>
    <?php if ($count % 3== 0) { ?>
    </div><div class="row">
<?php } ?>
<div class="col-md-4">
    <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#basicModal_<?php echo $product['Sample_ID']; ?>">
        <?php echo count_id(); ?> - <?php echo remove_junk($product['Sample_ID']); ?> - <?php echo remove_junk($product['Sample_Number']);?> 
    </button>
    <div class="modal fade" id="basicModal_<?php echo $product['Sample_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel_<?php echo $product['Sample_ID']; ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="basicModalLabel_<?php echo $product['Sample_ID']; ?>"><?php echo remove_junk($product['Sample_ID']); ?> - <?php echo remove_junk($product['Sample_Number']);?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                  
                    <ul>

                        <li>McO:  <?php echo remove_junk($product['MC_Oven']);?></li>
                        <li>McSt: <?php echo remove_junk($product['MC_Stove']); ?></li>
                        <li>McSc: <?php echo remove_junk($product['MC_Scale']);?></li>
                        <li>AL: <?php echo remove_junk($product['Atterberg_Limit']);?></li>
                        <li>GS: <?php echo remove_junk($product['Grain_Size']);?></li>
                        <li>SP: <?php echo remove_junk($product['Standard_Proctor']);?></li>
                        <li>SG:  <?php echo remove_junk($product['Specific_Gravity']);?></li>
                        <li>AR: <?php echo remove_junk($product['Acid_Reactivity']);?></li>
                        <li>SNC: <?php echo remove_junk($product['Sand_Castle']);?></li>
                        <li>LAA:  <?php echo remove_junk($product['Los_Angeles_Abrasion']);?></li>
                        <li>SNS: <?php echo remove_junk($product['Soundness']);?></li>
                        <li>UCS: <?php echo remove_junk($product['UCS']); ?></li>
                        <li>PLT:  <?php echo remove_junk($product['PLT']);?></li>
                        <li>BTS:  <?php echo remove_junk($product['BTS']); ?></li>
                        <li>HY: <?php echo remove_junk($product['Hydrometer']);?></li>
                        <li>DHY:  <?php echo remove_junk($product['Double_Hydrometer']);?></li>
                        <li>PH:  <?php echo remove_junk($product['Pinhole']);?></li>
                        <li>Consol: <?php echo remove_junk($product['Consolidation']);?></li>
                        <li>PERM:  <?php echo remove_junk($product['Permeability']); ?></li>
                    </ul>
                    <h3>Sample Date:  <?php echo remove_junk($product['Sample_Date']); ?></h3>  
                    <h3>Register Date: <?php echo remove_junk($product['Registed_Date']); ?></h3>
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
</div>
<?php $count++; ?>

  <?php } ?>
</div>

<style>
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

