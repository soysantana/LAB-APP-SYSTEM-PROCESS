<?php
  $page_title = 'Lista de muestra en Repeticion';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  
  $all_repite = find_all('ensayo_en_repeticion')
?>
<?php
 if(isset($_POST['add_repite'])){
   $req_field = array('repite-Sample_ID', 'repite-Tecnico');
   validate_fields($req_field);
   $sampleid = remove_junk($db->escape($_POST['repite-Sample_ID']));
   $tecnico = remove_junk($db->escape($_POST['repite-Tecnico']));
   if(empty($errors)){
    $date =make_date();
      $sql  = "INSERT INTO ensayo_en_repeticion (Sample_ID, Tecnico, Fecha_Inicio)";
      $sql .= " VALUES ('{$sampleid}', '{$tecnico}', '{$date}')";
      if($db->query($sql)){
        $session->msg("s", "muestra en repeticion agregada exitosamente.");
        redirect('repiteEnsayo2.php',false);
      } else {
        $session->msg("d", "Lo siento, registro falló");
        redirect('repiteEnsayo2.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('repiteEnsayo2.php',false);
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
            <span>Agregar muestra a Repeticion</span>
         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="repiteEnsayo2.php">
            <div class="form-group">
                <input type="text" class="form-control" name="repite-Sample_ID" placeholder="Enviar muestra a repeticion" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="repite-Tecnico" placeholder="Enviar muestra a repeticion" required>
          </div>
            <button type="submit" name="add_repite" class="btn btn-primary">Enviar a Repeticion</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de muestras en Repeticion</span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th class="text-center" style="width: 50px;">Sample_ID</th>
                    <th class="text-center" style="width: 50px;">Tecnico</th>
                    <th class="text-center" style="width: 50px;">Fecha de solicitud de repeticion</th>
                    
                </tr>
             
            </thead>
            <tbody>
             
              <?php foreach ($all_repite as $repite):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($repite['Sample_ID'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($repite['Tecnico'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($repite['Fecha_Inicio'])); ?></td>
                 
            

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