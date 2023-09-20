<?php
  $page_title = 'Editar Elemento';
  require_once('includes/load.php');
  page_require_level(2);

  $lab_req_form = find_by_id('lab_test_requisition_form', (int)$_GET['id']);

  if (!$lab_req_form) {
    $session->msg("d", "No se encontró la muestra.");
    redirect('regMuestra.php');
  }

  if (isset($_POST['update_muestra'])) {
    $req_fields = array(
      'Sample_ID',
      'Sample_Number',
    );

    validate_fields($req_fields);

    if (empty($errors)) {
      $Sample_ID = remove_junk($db->escape($_POST['Sample_ID']));
      $Sample_Number = remove_junk($db->escape($_POST['Sample_Number']));

      $query = "UPDATE lab_test_requisition_form SET ";
      $query .= "Sample_ID = '{$Sample_ID}', ";
      $query .= "Sample_Number = '{$Sample_Number}' ";
      $query .= "WHERE id = '{$lab_req_form['id']}'";

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('regMuestra.php', false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('edit_regMuestra.php?id=' . $lab_req_form['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('edit_regMuestra.php?id=' . $lab_req_form['id'], false);
    }
  }
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
</div>

<div class="mb-4 row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong><span class="glyphicon glyphicon-th"></span>
        <span>Editar Muestra</span></strong>
      </div>
      
      <div class="panel-body">
        <div class="col-md-6">
          <form method="post" action="edit_regMuestra.php?id=<?php echo (int)$lab_req_form['id']; ?>" class="clearfix">
            <div class="col-xs-4">
              <label>Identificación de muestra</label>
              <input class="form-control" type="text" name="Sample_ID" value="<?php echo remove_junk($lab_req_form['Sample_ID']); ?>">
            </div>
            <div class="col-xs-4">
              <label>Número de muestra</label>
              <input class="form-control" name="Sample_Number" type="text" value="<?php echo remove_junk($lab_req_form['Sample_Number']); ?>">
            </div>
            <div class="col-xs-12 mt-3">
              <button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('layouts/footer.php'); ?>