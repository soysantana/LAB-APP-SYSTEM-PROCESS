<?php
$page_title = 'Lista de Sumarios';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);

$rtv = mysqli_connect('localhost', 'root', '', 'index_test_lab');
if (!$rtv) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}


// Array con los nombres de las tablas deseadas
$tablas = array('moisture_content', 'grain_size', 'atterberg_limit', 'standard_proctor', 'moisture_content_microwave', 'moisture_content_constant_mass', 'moisture_scale', 'count_gama', 'density_bulk', 'density_weigth', 'ensayo_gama', 'los_angeles_abrasion_small', 'sand_density', 'specific_gravity', 'specific_gravity_absortion', 'specific_gravity_fine', 'splitting_tensile_strenght', 'uniaxial_compressive_strength', 'pinhole', 'point_load_test', 'permeability_of_granular_soils', 'los_angeles_abrasion_large', 'leeb_hardness', 'grout_specimens', 'concrete_specimens', 'hydrometer', 'double_hydrometer', 'grain_size_fine_aggregate', 'grain_size_coarse_aggregate', 'grain_size_sieved_coarse_aggregate', 'consolidation');

?>

?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-6">
    <?php echo display_msg($msg); ?>
    <form method="post" action="ajax.php" autocomplete="off" id="sug-form">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-primary">Búsqueda</button>
            </span>
            <input type="text" id="sug_input" class="form-control" name="title"  placeholder="Buscar por el nombre de la muestra">
         </div>
         <div id="result" class="list-group"></div>
        </div>
    </form>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>LPF</span>
                </strong>
            </div>
            <div class="panel-body">

             <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th class="text-center" style="width: 30px">#</th>
              <th class="text-center" style="width: 30px">ID Muestra</th>
              <th class="text-center" style="width: 30px">Numero de Muestra</th>
              <th class="text-center" style="width: 30px">Tipo de ensayo</th>
              <th class="text-center" style="width: 30px">Material Type</th>
              <th class="text-center" style="width: 30px">Accion</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($tablas as $tabla): ?>
              <?php
                $query = "SELECT Sample_ID, Sample_Number, test_type, Material_Type FROM $tabla WHERE Material_Type = 'LPF'";
                $result = mysqli_query($rtv, $query);
                if (!$result) {
                  die("Error al consultar la base de datos: " . mysqli_error($rtv));
                }
              ?>
              <?php while ($rev = mysqli_fetch_assoc($result)): ?>
                <tr>
                  <td class="text-center"><?php echo count_id();?></td>
                  <td class="text-center"><?php echo ($rev['Sample_ID']); ?></td>
                  <td class="text-center"><?php echo ($rev['Sample_Number']); ?></td>
                  <td class="text-center"><?php echo ($rev['test_type']); ?></td>
                  <td class="text-center"><?php echo ($rev['Material_Type']); ?></td>
                  <td class="text-center">
                    <a href="Sumario_LPF.php"  class="btn btn-success" data-toggle="tooltip" title="Sumario de LPF">
                    <span class="glyphicon glyphicon-send"></span>
                    </a>
                  </td>
                </tr>
              <?php endwhile; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
            
            </div>
        </div>

    </div>
</div>
</div>
</div>

<?php include_once('layouts/footer.php'); ?>

