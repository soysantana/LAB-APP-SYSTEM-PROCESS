<?php
$page_title = 'Lista de ensayos en revisión';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(1);
?>

<?php
$rtv = mysqli_connect('localhost', 'root', '', 'index_test_lab');
if (!$rtv) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

$fechaLimite = date('Y-m-d H:i:s', strtotime('-50 days'));

// Array con los nombres de las tablas deseadas
$tablas = array('moisture_content', 'grain_size', 'atterberg_limit', 'standard_proctor', 'moisture_content_microwave', 'moisture_content_constant_mass', 'moisture_scale', 'count_gama', 'density_bulk', 'density_weigth', 'ensayo_gama', 'los_angeles_abrasion_small', 'sand_density', 'specific_gravity', 'specific_gravity_absortion', 'specific_gravity_fine', 'splitting_tensile_strenght', 'uniaxial_compressive_strength', 'pinhole', 'point_load_test', 'permeability_of_granular_soils', 'los_angeles_abrasion_large', 'leeb_hardness', 'grout_specimens', 'concrete_specimens', 'hydrometer', 'double_hydrometer', 'grain_size_fine_aggregate', 'grain_size_coarse_aggregate', 'grain_size_sieved_coarse_aggregate', 'consolidation');

?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-8">
    <?php echo display_msg($msg); ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de ensayos en revisión</span>
        </strong>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th class="text-center" style="width: 50px">#</th>
              <th class="text-center" style="width: 50px">Id muestra</th>
              <th class="text-center" style="width: 50px">Numero de muestra</th>
              <th class="text-center" style="width: 50px">Tipo de ensayo</th>
              <th class="text-center" style="width: 50px">Tecnico</th>
              <th class="text-center" style="width: 50px">Fecha de inicio</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($tablas as $tabla): ?>
              <?php
                $query = "SELECT id, Sample_ID, Sample_Number, test_type, Tecnico, Fecha_Inicio FROM $tabla WHERE Report_Date >= '$fechaLimite'";
                $result = mysqli_query($rtv, $query);
                if (!$result) {
                  die("Error al consultar la base de datos: " . mysqli_error($rtv));
                }
              ?>
              <?php while ($rev = mysqli_fetch_assoc($result)): ?>
                <tr>
                  <td class="text-center"><?php echo count_id();?></td>
                  <td><?php echo remove_junk(ucfirst($rev['Sample_ID'])); ?></td>
                  <td><?php echo remove_junk(ucfirst($rev['Sample_Number'])); ?></td>
                  <td><?php echo remove_junk(ucfirst($rev['test_type'])); ?></td>
                  <td><?php echo remove_junk(ucfirst($rev['Tecnico'])); ?></td>
                  <td><?php echo remove_junk(ucfirst($rev['Fecha_Inicio'])); ?></td>
                </tr>
              <?php endwhile; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include_once('layouts/footer.php'); ?>
