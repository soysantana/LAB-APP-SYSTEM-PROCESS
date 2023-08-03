<?php
  $page_title = 'Lista de muestra en Preparacion';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  
  $all_preparacion = find_all('muestra_en_preparacion')
?>
<?php
 if(isset($_POST['add_prep'])){
   $req_field = array('preparacion-Sample_ID', 'preparacion-Tecnico');
   validate_fields($req_field);
   $sampleid = remove_junk($db->escape($_POST['preparacion-Sample_ID']));
   $tecnico = remove_junk($db->escape($_POST['preparacion-Tecnico']));
   if(empty($errors)){
      $date = make_date();
      $sql  = "INSERT INTO muestra_en_preparacion (Sample_ID, Tecnico, Fecha_Inicio_Preparacion)";
      $sql .= " VALUES ('{$sampleid}','{$tecnico}',  '{$date}')";
      $db->query($sql);
      if($db->query($sql)){
        $session->msg("s", "muestra en preparacion agregada exitosamente.");
        redirect('prepEnsayo.php',false);
      } else {
        $session->msg("d", "Lo siento, registro falló");
        redirect('prepEnsayo.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('prepEnsayo.php',false);
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
            <span>Agregar muestra a Preparacion</span>
         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="prepEnsayo.php">
            <div class="form-group">
                <input type="text" class="form-control" name="preparacion-Sample_ID" placeholder="Enviar muestra a preparacion" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="preparacion-Tecnico" placeholder="Tecnico" required>
          </div>
            <button type="submit" name="add_prep" class="btn btn-primary">Enviar a Preparacion</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de muestras en Preparacion</span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th class="text-center" style="width: 50px;">Sample_ID</th>
                    <th class="text-center" style="width: 50px;">Tecnico</th>
                    <th class="text-center" style="width: 50px;">Fecha_de_inicio</th>
                    <th class="text-center" style="width: 100px;">enviar muestra a Realizacion</th>
                </tr>
             
            </thead>
            <tbody>
             
              <?php foreach ($all_preparacion as $prep):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($prep['Sample_ID'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($prep['Tecnico'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($prep['Fecha_Inicio_Preparacion'])); ?></td>
                 
                    <td class="text-center">
                      <a href="enviar_a_realizacion.php?id=<?php echo (int)$prep['id'];?>"  class="btn btn-xs btn btn-success" data-toggle="tooltip" title="Enviar a realizacion">
                        <span class="glyphicon glyphicon-send"></span>
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
  </div>
  <?php include_once('layouts/footer.php'); ?>