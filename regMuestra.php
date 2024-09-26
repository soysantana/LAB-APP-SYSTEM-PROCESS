<?php
$page_title = 'Lista de muestras';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);
$lab_req_form = join_lab_test_requisition_form();
?>
<?php include_once('layouts/header.php'); ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <div class="pull-right">
          <a href="add_Muestra.php" class="btn btn-primary">Agregar Muestra</a>
        </div>
      </div>
      <div class="panel-body">
      <div class="form-group">
      <div class="input-group">
        <span class="input-group-btn">
          <button type="submit" class="btn btn-primary" id="btnBuscar">Find</button>
        </span>
        <input
          type="text"
          id="inputBusqueda"
          class="form-control"
          name="title"
          placeholder="Find inalteraded samples Registed"
        />
      </div>
      <div id="result" class="list-group"></div>
    </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="text-center" style="width: 50px">#</th>
              <th>ID de Muestras</th>
              <th>Numero de Muestras</th>
              <th class="text-center" style="width: 150px">Progreso de Ensayos</th>
              <th class="text-center" style="width: 100px">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($lab_req_form as $lab_req_id):
              // Contar ensayos solicitados y entregados
              $total_ensayos_solicitados = 0;
              $total_ensayos_entregados = 0;

              for ($i = 1; $i <= 19; $i++) {
                $column_name = 'Test_Type' . $i;
                if (isset($lab_req_id[$column_name]) && !empty($lab_req_id[$column_name])) {
                  $total_ensayos_solicitados++;
                  // Verificar si el ensayo ha sido entregado
                  $query = "SELECT COUNT(*) AS entregado FROM ensayo_en_entrega WHERE Sample_ID = '{$lab_req_id['Sample_ID']}' AND Test_Type = '{$lab_req_id[$column_name]}'";
                  $result = $db->query($query);
                  $row = $result->fetch_assoc();
                  if ($row['entregado'] > 0) {
                    $total_ensayos_entregados++;
                  }
                }
              }

              // Calcular el porcentaje de ensayos entregados
              $porcentaje_entregado = ($total_ensayos_solicitados > 0) ? ($total_ensayos_entregados / $total_ensayos_solicitados) * 100 : 0;
            ?>
            <tr>
              <td class="text-center"><?php echo count_id(); ?></td>
              <td class="text-center"><?php echo remove_junk($lab_req_id['Sample_ID']); ?></td>
              <td class="text-center"><?php echo remove_junk($lab_req_id['Sample_Number']); ?></td>
              <td class="text-center">
                <span>Total Solicitados: <?php echo $total_ensayos_solicitados; ?></span><br>
                <span>Total Entregados: <?php echo $total_ensayos_entregados; ?></span><br>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje_entregado; ?>%;" aria-valuenow="<?php echo $porcentaje_entregado; ?>" aria-valuemin="0" aria-valuemax="100">
                    <?php echo round($porcentaje_entregado, 2); ?>%
                  </div>
                </div>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <a
                    class="btn btn-warning btn-xs"
                    title="Ver Detalles"
                    data-toggle="modal"
                    data-target="#basicModal_<?php echo $lab_req_id['id']; ?>"
                  >
                    <span class="glyphicon glyphicon-eye-open"></span>
                  </a>
                  <a
                    href="edit_regMuestra.php?id=<?php echo intval($lab_req_id['id']); ?>"
                    class="btn btn-info btn-xs"
                    title="Editar"
                    data-toggle="tooltip"
                  >
                    <span class="glyphicon glyphicon-edit"></span>
                  </a>
                  <a
                    href="delete_Muestra.php?id=<?php echo (int)$lab_req_id['id'];?>"
                    class="btn btn-danger btn-xs"
                    title="Eliminar"
                    data-toggle="tooltip"
                  >
                    <span class="glyphicon glyphicon-trash"></span>
                  </a>
                </div>
              </td>
            </tr>

            <div
              class="modal fade"
              id="basicModal_<?php echo $lab_req_id['id']; ?>"
              tabindex="-1"
              role="dialog"
              aria-labelledby="basicModalLabel_<?php echo $lab_req_id['Sample_ID']; ?>"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="basicModalLabel_<?php echo $lab_req_id['Sample_ID']; ?>">
                      <?php echo remove_junk($lab_req_id['Sample_ID']); ?>
                      - <?php echo remove_junk($lab_req_id['Sample_Number']); ?>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h3>Ensayos Solicitados:</h3>

                    <ul>
                      <?php for ($i = 1; $i <= 19; $i++) { $column_name = 'Test_Type' . $i; if
                      (isset($lab_req_id[$column_name]) && !empty($lab_req_id[$column_name])) { ?>
                      <li><?php echo remove_junk($lab_req_id[$column_name]); ?></li>
                      <?php } } ?>
                    </ul>

                    <h3>Fecha de muestreo: <?php echo remove_junk($lab_req_id['Sample_Date']); ?></h3>
                    <h3>Fecha de registro: <?php echo remove_junk($lab_req_id['Registed_Date']); ?></h3>
                    <h3>Registrado por: <?php echo remove_junk($lab_req_id['Register_By']); ?></h3>
                  </div>
                </div>

                <?php endforeach; ?>
              </div>
            </div>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    $("#btnBuscar").on("click", function () {
      var searchTerm = $("#inputBusqueda").val().toLowerCase();

      // Oculta todas las filas de la tabla
      $("tbody tr").hide();

      // Muestra solo las filas que contienen el término de búsqueda
      $("tbody tr").each(function () {
        var sampleID = $(this).find("td:nth-child(2)").text().toLowerCase();
        var sampleNumber = $(this).find("td:nth-child(3)").text().toLowerCase();

        if (sampleID.includes(searchTerm) || sampleNumber.includes(searchTerm)) {
          $(this).show();
        }
      });
    });
  });
</script>

<style>
    .modal-body h3 {
        font-size: 18px;
        color: #333;
        margin-bottom: 12px;
    }

    .modal-body ul {
        font-size: 16px;
        color: #555;
        margin-bottom: 16px;
    }

    .modal-body ul li {
        font-size: 16px;
        margin-bottom: 10px;
        color: #666;
    }

    .row {
        margin-bottom: 20px;
    }

    .modal-content {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .modal-header {
      background-color: #007bff;
      color: white;
      border-radius: 5px 5px 0 0;
      text-align: center;
    }

    .modal-title {
        font-size: 24px;
        margin: 0;
    }
</style>

<?php include_once('layouts/footer.php'); ?>
