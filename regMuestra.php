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
  </div>
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <div class="pull-right">
          <a href="add_Muestra.php" class="btn btn-primary">Agregar Muestra</a>
        </div>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="text-center" style="width: 50px">#</th>
              <th>ID de Muestras</th>
              <th>Numero de Muestras</th>
              <th class="text-center" style="width: 100px">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($lab_req_form as $lab_req_id):?>
            <tr>
              <td class="text-center"><?php echo count_id();?></td>
              <td class="text-center"><?php echo remove_junk($lab_req_id['Sample_ID']); ?></td>
              <td class="text-center"><?php echo remove_junk($lab_req_id['Sample_Number']); ?></td>
              <td class="text-center">
                <div class="btn-group">
                  <a
                    class="btn btn-warning btn-xs"
                    title="Editar"
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
                    <h3>Fecha de registo: <?php echo remove_junk($lab_req_id['Registed_Date']); ?></h3>
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
      background-color: blanchedalmond;
        color: black;
        border-bottom: 1px solid #ddd;
    }

    .modal-header h4 {
        margin: 0;
    }

    .btn-primary {
        background-color: #337ab7;
        color: #fff;
        border: 1px solid #337ab7;
    }

    .btn-primary:hover {
        background-color: #286090;
        border: 1px solid #286090;
    }

    /* Estilos adicionales para el botón de cierre */
    .close {
        font-size: 30px;
        color: red;
        position: relative;
        top: -10px; /* Ajusta la posición superior según sea necesario */
        opacity: 10;
    }

    .close:hover {
        color: #fff;
        opacity: 0.8;
    }
</style>

<!-- Agrega jQuery (si no lo has hecho) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
  $(document).ready(function() {
    $('#btnBuscar').click(function() {
      // Obtener el valor del campo de búsqueda
      var sampleID = $('#inputBusqueda').val();

      // Realizar la solicitud AJAX para obtener los resultados según el Sample ID
      $.ajax({
        url: 'buscar_muestra.php', // Reemplaza 'buscar_muestra.php' con la URL correcta del backend
        method: 'POST',
        data: { sampleID: sampleID },
        dataType: 'json',
        success: function(data) {
          // Limpiar la tabla antes de agregar nuevos resultados
          $('#labReqTable tbody').empty();

          // Agregar los nuevos resultados a la tabla
          $.each(data, function(index, lab_req_id) {
            var row = '<tr>' +
              '<td class="text-center">' + remove_junk(lab_req_id.id) + '</td>' +
              '<td class="text-center">' + remove_junk(lab_req_id.Sample_ID) + '</td>' +
              '<td class="text-center">' + remove_junk(lab_req_id.Sample_Number) + '</td>' +
              '<td class="text-center">' +
              '<div class="btn-group">' +
              '<a class="btn btn-warning btn-xs" title="Editar" data-toggle="modal" data-target="#basicModal_' + lab_req_id.id + '">' +
              '<span class="glyphicon glyphicon-eye-open"></span>' +
              '</a>' +
              '<a href="edit_regMuestra.php?id=' + parseInt(lab_req_id.id) + '" class="btn btn-info btn-xs" title="Editar" data-toggle="tooltip">' +
              '<span class="glyphicon glyphicon-edit"></span>' +
              '</a>' +
              '<a href="delete_Muestra.php?id=' + parseInt(lab_req_id.id) + '" class="btn btn-danger btn-xs" title="Eliminar" data-toggle="tooltip">' +
              '<span class="glyphicon glyphicon-trash"></span>' +
              '</a>' +
              '</div>' +
              '</td>' +
              '</tr>';

            $('#labReqTable tbody').append(row);
          });
        },
        error: function(error) {
          console.log('Error al obtener resultados:', error);
        }
      });
    });
  });
</script>




<?php include_once('layouts/footer.php'); ?>