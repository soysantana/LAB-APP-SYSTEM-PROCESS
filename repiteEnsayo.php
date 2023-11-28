<?php
  $page_title = 'Lista de muestra en Repeticion';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  
  $all_repite = find_all('ensayo_en_repeticion')
?>
<?php
 if(isset($_POST['add_repite'])){
   $req_field = array('entrega-Sample_ID');
   validate_fields($req_field);
   $sampleid = remove_junk($db->escape($_POST['repite-Sample_ID']));
   $tecnico = remove_junk($db->escape($_POST['repite-Tecnico']));
   if(empty($errors)){
    $date =make_date();
      $sql  = "INSERT INTO ensayo_en_repeticion (Sample_ID, Tecnico, Fecha_Inicio)";
      $sql .= " VALUES ('{$sampleid}', '{$tecnico}', '{$date}')";
      if($db->query($sql)){
        $session->msg("s", "muestra en repeticion agregada exitosamente.");
        redirect('repitegaEnsayo.php',false);
      } else {
        $session->msg("d", "Lo siento, registro falló");
        redirect('repiteEnsayo.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('repiteEnsayo.php',false);
   }
 }
?>
<?php include_once('layouts/header.php'); ?>

<div>
    <div class="col-md-8">
    <?php echo display_msg($msg); ?>
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
                            <th class="text-center" style="width: 50px;">ID Muestra</th>
                            <th class="text-center" style="width: 50px;">Numero de Muestra</th>
                            <th class="text-center" style="width: 50px;">Tipo de Ensayo</th>
                            <th class="text-center" style="width: 50px;">Tecnico</th>
                            <th class="text-center" style="width: 50px;">Fecha solicitud repeticion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_repite as $repite): ?>
                            <tr>
                                <td class="text-center"><?php echo count_id(); ?></td>
                                <td class="text-center"><?php echo remove_junk(ucfirst($repite['Sample_ID'])); ?></td>
                                <td class="text-center"><?php echo remove_junk(ucfirst($repite['Sample_Number'])); ?></td>
                                <td class="text-center"><?php echo remove_junk(ucfirst($repite['Test_Type'])); ?></td>
                                <td class="text-center"><?php echo remove_junk(ucfirst($repite['Tecnico'])); ?></td>
                                <td class="text-center"><?php echo remove_junk(ucfirst($repite['Fecha_Inicio'])); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>