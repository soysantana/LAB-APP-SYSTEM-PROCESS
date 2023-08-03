<?php
  $page_title = 'Enviar muestra a realizacion';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>
<?php
$realizacion = find_by_id('muestra_en_preparacion',(int)$_GET['id']);

if(!$realizacion){
  $session->msg("d","Missing sample id.");
  redirect('prepEnsayo.php');
}
?>
<?php
 if(isset($_POST['enviar_realizacion'])){
   $req_field = array('realizacion-Sample_ID','realizacion-Tecnico');
   validate_fields($req_field);
   $sampleid = remove_junk($db->escape($_POST['realizacion-Sample_ID']));
   $tecnico = remove_junk($db->escape($_POST['realizacion-Tecnico']));
   if(empty($errors)){
    $date =make_date();
      $sql  = "INSERT INTO muestra_en_realizacion (Sample_ID, Tecnico, Fecha_Inicio_Realizacion)";
      $sql .= " VALUES ('{$sampleid}', '{$tecnico}','{$date}')";
      if($db->query($sql)){
        $session->msg("s", "Ensayo enviado a realizacion exitosamente.");
        redirect('realizaEnsayo.php',false);
      } else {
        $session->msg("d", "Lo siento, envio falló");
        redirect('realizaEnsayo.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('realizaEnsayo.php',false);
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
        <span>Enviando a realizacion: </span>
     </strong>
    </div>
    <div class="panel-body">
      <form method="post" action="enviar_a_realizacion.php?id=<?php echo (int)$realizacion['id'];?>">
        <div class="form-group">
            <input type="text" class="form-control" name="realizacion-Sample_ID" value="<?php echo remove_junk(ucfirst($realizacion['Sample_ID']));?>">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="realizacion-Tecnico" value="<?php echo remove_junk(ucfirst($realizacion['Tecnico']));?>">
      </div>
        <button type="submit" name="enviar_realizacion" class="btn btn-primary">Enviar a Realizacion</button>
    </form>
    </div>
  </div>
</div>
</div>



<?php include_once('layouts/footer.php'); ?>