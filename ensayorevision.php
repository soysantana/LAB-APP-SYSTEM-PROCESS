<?php
  $page_title = 'Lista de ensayo en revision';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  
  $all_revision = find_all('ensayos_en_revision')
?>
<?php
 if(isset($_POST['add_revision'])){
   $req_field = array('revision-Sample_ID', 'revision-Tecnico');
   validate_fields($req_field);
   $sampleid = remove_junk($db->escape($_POST['revision-Sample_ID']));
   $tecnico = remove_junk($db->escape($_POST['revision-Tecnico']));
   if(empty($errors)){
      $date =make_date();
      $sql  = "INSERT INTO ensayos_en_revision (Sample_ID, Tecnico, Fecha_Inicio)";
      $sql .= " VALUES ('{$sampleid}', '{$tecnico}', '{$date}')";
      $db->query($sql);
      if($db->query($sql)){
        $session->msg("s", "Ensayo en revision agregada exitosamente.");
        redirect('ensayorevision.php',false);
      } else {
        $session->msg("d", "Lo siento, registro falló");
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
  </div>
   <div class="row">
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Agregar ensayo en revision</span>
         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="ensayorevision.php">
            <div class="form-group">
                <input type="text" class="form-control" name="revision-Sample_ID" placeholder="Enviar ensayo a revision" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="revision-Tecnico" placeholder="Enviado por" required>
          </div>
            <button type="submit" name="add_revision" class="btn btn-primary">Enviar a Revision</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de ensayo en revision</span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th class="text-center" style="width: 50px;">Sample_ID</th>
                    <th class="text-center" style="width: 50px;">Enviado por</th>
                    <th class="text-center" style="width: 50px;">Fecha de inicio</th>
                </tr>
             
            </thead>
            <tbody>
             
              <?php foreach ($all_revision as $revision):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($revision['Sample_ID'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($revision['Tecnico'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($revision['Fecha_Inicio'])); ?></td>
                 
                    
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
  </div>
  <?php include_once('layouts/footer.php'); ?>