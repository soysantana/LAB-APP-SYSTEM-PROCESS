<?php
$page_title = 'Enviar muestra a entrega';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);
?>
<?php
$entrega = find_by_id('muestra_en_realizacion', (int)$_GET['id']);

if (!$entrega) {
  $session->msg("d", "Missing sample id.");
  redirect('entregaEnsayo.php');
}
?>
<?php
if (isset($_POST['enviar_entrega'])) {
  $req_fields = array('entrega-Sample_ID', 'entrega-Sample_Number', 'entrega-Test_Type', 'entrega-Tecnico');
  validate_fields($req_field);
  $sample_id = remove_junk($db->escape($_POST['entrega-Sample_ID']));
  $sample_number = remove_junk($db->escape($_POST['entrega-Sample_Number']));
  $test_type = remove_junk($db->escape($_POST['entrega-Test_Type']));
  $tecnico = remove_junk($db->escape($_POST['entrega-Tecnico']));

  if (empty($errors)) {
    $date = make_date();
    $status = "Entregado";
    $sql  = "INSERT INTO ensayo_en_entrega (Sample_ID, Sample_Number, Test_Type, Tecnico, Fecha_de_Entrega, Estatus)";
    $sql .= "VALUES ('{$sample_id}', '{$sample_number}', '{$test_type}', '{$tecnico}', '{$date}', '{$status}')";

    if ($db->query($sql)) {
      $session->msg("s", "Ensayo enviado a entrega exitosamente.");
      redirect('entregaEnsayo.php', false);
    } else {
      $session->msg("d", "Lo siento, envío falló");
      redirect('entregaEnsayo.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('entregaEnsayo.php', false);
  }
}
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
<div class="col-md-12">
  <?php echo display_msg($msg); ?>
</div>
<div class="col-md-5">
  <div class="panel panel-default">
    <div class="panel-heading">
      <strong>
        <span class="glyphicon glyphicon-th"></span>
        <span>Enviando a entrega: </span>
     </strong>
    </div>
    <div class="panel-body">
      <form method="post" action="enviar_a_entrega.php?id=<?php echo (int)$entrega['id'];?>">
        <div class="form-group">
          <input type="text" class="form-control" name="entrega-Sample_ID" value="<?php echo remove_junk(ucfirst($entrega['Sample_ID'])); ?>">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="entrega-Sample_Number" value="<?php echo remove_junk(ucfirst($entrega['Sample_Number'])); ?>">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="entrega-Test_Type" value="<?php echo remove_junk(ucfirst($entrega['Test_Type'])); ?>">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="entrega-Tecnico" value="<?php echo remove_junk(ucfirst($entrega['Tecnico'])); ?>">
        </div>
        <button type="submit" name="enviar_entrega" class="btn btn-primary">Enviar a Entrega</button>
    </form>
    </div>
  </div>
</div>
</div>



<?php include_once('layouts/footer.php'); ?>