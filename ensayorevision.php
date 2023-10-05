<?php
$page_title = 'Lista de ensayos en revision';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(1);

$all_revision = find_all('ensayos_en_revision')
?>

<?php
//Configuración de la conexión a la base de datos (ajusta estos valores según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$database = "index_test_lab";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
if (isset($_POST['add_revision'])) {
    $req_field = array('revision-Sample_ID', 'revision-Sample_Number', 'revision-Test_Type', 'revision-Tecnico');
    validate_fields($req_field);
    $sampleid = remove_junk($db->escape($_POST['revision-Sample_ID']));
    $samplenumber = remove_junk($db->escape($_POST['revision-Sample_Number']));
    $testtype = remove_junk($db->escape($_POST['revision-Test_Type']));
    $tecnico = remove_junk($db->escape($_POST['revision-Tecnico']));

    // Verificar si el Test_Type ya existe en la base de datos
    $existing_test_type_query = "SELECT Test_Type FROM ensayos_en_revision WHERE Test_Type = '{$testtype}'";
    $existing_test_type_result = $conn->query($existing_test_type_query);

    if ($existing_test_type_result->num_rows > 0) {
        $session->msg("d", "El Test_Type ya existe en la base de datos.");
        redirect('ensayorevision.php', false);
    } else {
        // Si no existe, insertar el nuevo registro
        $date = make_date();
        $status = "Revision";
        $sql = "INSERT INTO ensayos_en_revision (Sample_ID, Sample_Number, Test_Type, Tecnico, Fecha_Inicio, Estatus)";
        $sql .= " VALUES ('{$sampleid}','{$samplenumber}','{$testtype}','{$tecnico}','{$date}', '{$status}')";

        if ($conn->query($sql) === TRUE) {
            $session->msg("s", "Ensayo en revision agregada exitosamente.");
            redirect('ensayorevision.php', false);
        } else {
            $session->msg("d", "Lo siento, registro falló");
            redirect('ensayorevision.php', false);
        }
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
          <form method="post" action="ensayorevision.php">
            <div class="form-group">
                <input type="text" class="form-control" name="revision-Sample_ID" placeholder="Identificacion de muestra" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="revision-Sample_Number" placeholder="Numero de muestra" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="revision-Test_Type" placeholder="Tipo de Ensayo" required>
        </div>
            <div class="form-group">
              <input type="text" class="form-control" name="revision-Tecnico" placeholder="Tecnico" required>
          </div>
            <button type="submit" name="add_revision" class="btn btn-primary">Enviar a Preparacion</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de ensayos en revision</span>
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
                  
                </tr>
             
            </thead>
            <tbody>
             
              <?php foreach ($all_revision as $rev):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($rev['Sample_ID'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($rev['Sample_Number'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($rev['Test_Type'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($rev['Tecnico'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($rev['Fecha_Inicio'])); ?></td>
                 
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