<?php
$page_title = 'Enviar muestra a realización';
require_once('includes/load.php');
// Verificar el nivel de permisos del usuario para ver esta página
page_require_level(3);
?>
<?php
$realizacion = find_by_id('muestra_en_preparacion', (int)$_GET['id']);

if (!$realizacion) {
  $session->msg("d", "Muestra Duplicada");
  redirect('prepEnsayo.php');
}
?>
<?php
if (isset($_POST['enviar_realizacion'])) {
  $req_fields = array('realizacion-Sample_ID', 'realizacion-Sample_Number', 'realizacion-Test_Type', 'realizacion-Tecnico');
  validate_fields($req_fields);
  $sample_id = remove_junk($db->escape($_POST['realizacion-Sample_ID']));
  $sample_number = remove_junk($db->escape($_POST['realizacion-Sample_Number']));
  $test_type = remove_junk($db->escape($_POST['realizacion-Test_Type']));
  $tecnico = remove_junk($db->escape($_POST['realizacion-Tecnico']));

  // Check if the entry already exists
  $checkQuery = "SELECT * FROM muestra_en_realizacion WHERE Test_Type = '{$test_type}'";
  $result = $db->query($checkQuery);

  if ($result->num_rows > 0) {
    $session->msg("d", "Error: Entrada duplicada para el tipo de prueba '{$test_type}'.");
    redirect('enviar_a_realizacion.php', false);
  }

  // Proceed with the insertion
  $date = make_date();
  $status = "Realizacion";
  $sql = "INSERT INTO muestra_en_realizacion (Sample_ID, Sample_Number, Test_Type, Tecnico, Fecha_Inicio_Realizacion, Estatus)";
  $sql .= "VALUES ('{$sample_id}', '{$sample_number}', '{$test_type}', '{$tecnico}', '{$date}', '{$status}')";

  if ($db->query($sql)) {
    $session->msg("s", "Ensayo enviado a realización exitosamente.");
    redirect('realizaEnsayo.php', false);
  } else {
    $session->msg("d", "Lo siento, el envío falló: " . mysqli_error($db));
    redirect('enviar_a_realizacion.php', false);
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
          <span>Enviando a realización:</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="enviar_a_realizacion.php?id=<?php echo (int)$realizacion['id']; ?>">
          <div class="form-group">
            <input type="text" class="form-control" name="realizacion-Sample_ID" value="<?php echo remove_junk(ucfirst($realizacion['Sample_ID'])); ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="realizacion-Sample_Number" value="<?php echo remove_junk(ucfirst($realizacion['Sample_Number'])); ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="realizacion-Test_Type" value="<?php echo remove_junk(ucfirst($realizacion['Test_Type'])); ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="realizacion-Tecnico" value="<?php echo remove_junk(ucfirst($realizacion['Tecnico'])); ?>">
          </div>
          <button type="submit" name="enviar_realizacion" class="btn btn-primary">Enviar a Realización</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include_once('layouts/footer.php'); ?>
