<?php
  $page_title = 'Enviar ensayo a revision';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>
<?php
$revision = find_by_id('ensayos_en_revision',(int)$_GET['id']);

if(!$revision){
  $session->msg("d","Missing sample id.");
  redirect('ensayorevision.php');
}
?>
<?php
 if(isset($_POST['enviar_revision'])){
   $req_field = array('revision-Sample_ID',revision-Tecnico' );
   validate_fields($req_field);
   $sampleid = remove_junk($db->escape($_POST['revision-Sample_ID']));
   $tecnico = remove_junk($db->escape($_POST['revision-Tecnico']));
   if(empty($errors)){
    $date =make_date();
      $sql  = "INSERT INTO ensayos_en_revision (Sample_ID, Tecnico, Fecha_Inicio)";
      $sql .= " VALUES ('{$sampleid}', '{$tecnico}','{$date}')";
      if($db->query($sql)){
        $session->msg("s", "Ensayo enviado a revision exitosamente.");
        redirect('ensayorevision.php',false);
      } else {
        $session->msg("d", "Lo siento, envio falló");
        redirect('ensayorevision.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('ensayorevision.php',false);
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
        <span>Enviando a revision: </span>
     </strong>
    </div>
    <div class="panel-body">
      <form method="post" action="enviar_a_revision.php?id=<?php echo (int)$revision['id'];?>">
        <div class="form-group">
            <input type="text" class="form-control" name="revision-Sample_ID" value="<?php echo remove_junk(ucfirst($revision['Sample_ID']));?>">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="revision-Tecnico" value="<?php echo remove_junk(ucfirst($revision['Tecnico']));?>">
      </div>
        <button type="submit" name="enviar_revision" class="btn btn-primary">Enviar a Revision</button>
    </form>
    </div>
  </div>
</div>
</div>



<?php include_once('layouts/footer.php'); ?>