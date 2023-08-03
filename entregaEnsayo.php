<?php
  $page_title = 'Lista de muestra en Entrega';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  
  $all_entrega = find_all('ensayo_en_entrega')
?>
<?php
 if(isset($_POST['add_entrega'])){
   $req_field = array('entrega-Sample_ID', 'entrega-Tecnico');
   validate_fields($req_field);
   $sampleid = remove_junk($db->escape($_POST['entrega-Sample_ID']));
   $tecnico = remove_junk($db->escape($_POST['entrega-Tecnico']));
   if(empty($errors)){
    $date =make_date();
      $sql  = "INSERT INTO ensayo_en_entrega (Sample_ID, Tecnico, Fecha_de_Entrega)";
      $sql .= " VALUES ('{$sampleid}', '{$tecnico}', '{$date}')";
      if($db->query($sql)){
        $session->msg("s", "muestra en entrega agregada exitosamente.");
        redirect('entregaEnsayo.php',false);
      } else {
        $session->msg("d", "Lo siento, registro falló");
        redirect('entregaEnsayo.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('entregaEnsayo.php',false);
   }
 }
?>
<?php include_once('layouts/header.php'); ?>
    </div>
    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de muestras en Entrega</span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th class="text-center" style="width: 50px;">Sample_ID</th>
                    <th class="text-center" style="width: 50px;">Tecnico</th>
                    <th class="text-center" style="width: 50px;">Fecha de Entrega</th>
                   
                </tr>
             
            </thead>
            <tbody>
             
              <?php foreach ($all_entrega as $entre):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($entre['Sample_ID'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($entre['Tecnico'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($entre['Fecha_de_Entrega'])); ?></td>
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