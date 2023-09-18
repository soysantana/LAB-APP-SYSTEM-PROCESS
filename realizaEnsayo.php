<?php
  $page_title = 'Lista de muestra en Realizacion';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  
  $all_realizacion = find_all('muestra_en_realizacion')
?>
<?php
 if(isset($_POST['add_real'])){
  $req_field = array('realizacion-Sample_ID','realizacion-Sample_Number','realizacion-Test_Type','realizacion-Tecnico');
   validate_fields($req_field);
   $sampleid = remove_junk($db->escape($_POST['realizacion-Sample_ID']));
   $samplenumber = remove_junk($db->escape($_POST['realizacion-Sample_Number']));
   $testtype = remove_junk($db->escape($_POST['realizacion-Test_Type']));
   $tecnico = remove_junk($db->escape($_POST['realizacion-Tecnico']));
   if(empty($errors)){
    $date =make_date();
      $sql  = "INSERT INTO muestra_en_realizacion (Sample_ID, Sample_Number, Test_Type, Tecnico, Fecha_Inicio_Realizacion)";
      $sql .= " VALUES ('{$sampleid}','{$samplenumber}','{$testtype}','{$tecnico}','{$date}')";
      if($db->query($sql)){
        $session->msg("s", "muestra en realizacion agregada exitosamente.");
        redirect('realizaEnsayo.php',false);
      } else {
        $session->msg("d", "Lo siento, registro falló");
        redirect('realizaEnsayo.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('realizaEnsayo.php',false);
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
          <span>Lista de muestras en Realizacion</span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                  <th class="text-center" style="width: 50px;">#</th>
                  <th class="text-center" style="width: 50px;">Id muestra</th>
                  <th class="text-center" style="width: 50px;">Numero de muestra</th>
                  <th class="text-center" style="width: 50px;">Tipo de ensayo</th>
                  <th class="text-center" style="width: 50px;">Tecnico</th>
                  <th class="text-center" style="width: 50px;">Fecha de inicio</th>
                  <th class="text-center" style="width: 100px;">enviar muestra a Realizacion</th>
                </tr>
             
            </thead>
            <tbody>
             
              <?php foreach ($all_realizacion as $real):?>
                <tr>
                  <td class="text-center"><?php echo count_id();?></td>
                  <td><?php echo remove_junk(ucfirst($real['Sample_ID'])); ?></td>
                  <td><?php echo remove_junk(ucfirst($real['Sample_Number'])); ?></td>
                  <td><?php echo remove_junk(ucfirst($real['Test_Type'])); ?></td>
                  <td><?php echo remove_junk(ucfirst($real['Tecnico'])); ?></td>
                  <td><?php echo remove_junk(ucfirst($real['Fecha_Inicio_Realizacion'])); ?></td>
                 
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="enviar_a_entrega.php?id=<?php echo (int)$real['id'];?>"  class="btn btn-xs btn btn-success" data-toggle="tooltip" title="Editar">
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