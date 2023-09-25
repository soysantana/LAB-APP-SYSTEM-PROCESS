<?php
$page_title = 'Pagina de Inicio';
require_once('includes/load.php');

if (!$session->isUserLoggedIn(true)) {
    redirect('index.php', false);
}

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "index_test_lab");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta para obtener la lista de muestras en lista_de_pendiente
$queryMuestrasPendientes = "SELECT Sample_ID, Sample_Number, Test_Type FROM lista_de_pendiente";
$resultadoMuestrasPendientes = $conexion->query($queryMuestrasPendientes);

// Arreglo para almacenar las muestras y su progreso
$muestrasConProgreso = array();

if ($resultadoMuestrasPendientes) {
    while ($filaMuestraPendiente = $resultadoMuestrasPendientes->fetch_assoc()) {
        $sampleID = $filaMuestraPendiente['Sample_ID'];
        $sampleNumber = $filaMuestraPendiente['Sample_Number'];
        $testType = $filaMuestraPendiente['Test_Type'];

        // Verificar si la muestra está en cualquiera de las tres tablas
        $queryVerificarEnTablas = "SELECT COUNT(*) AS total
                                   FROM muestra_en_preparacion
                                   WHERE Sample_ID = $sampleID
                                   AND Sample_Number = $sampleNumber
                                   AND Test_Type = '$testType'
                                   UNION
                                   SELECT COUNT(*) AS total
                                   FROM muestra_en_realizacion
                                   WHERE Sample_ID = $sampleID
                                   AND Sample_Number = $sampleNumber
                                   AND Test_Type = '$testType'
                                   UNION
                                   SELECT COUNT(*) AS total
                                   FROM ensayo_en_entrega
                                   WHERE Sample_ID = $sampleID
                                   AND Sample_Number = $sampleNumber
                                   AND Test_Type = '$testType'";

        $resultadoVerificarEnTablas = $conexion->query($queryVerificarEnTablas);

        if ($resultadoVerificarEnTablas) {
            $totalCoincidencias = 0;
            while ($filaCoincidencia = $resultadoVerificarEnTablas->fetch_assoc()) {
                $totalCoincidencias += $filaCoincidencia['total'];
            }

            // Calcular el progreso en porcentaje
            $progresoMuestra = ($totalCoincidencias > 0) ? 100 : 0;

            // Agregar la muestra y su progreso al arreglo
            $muestrasConProgreso[] = array(
                'Sample_ID' => $sampleID,
                'Sample_Number' => $sampleNumber,
                'Test_Type' => $testType,
                'Progreso' => $progresoMuestra
            );
        } else {
            echo "Error al ejecutar la consulta: " . $conexion->error;
        }
    }
} else {
    echo "Error al ejecutar la consulta: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>

<?php include_once('layouts/header.php'); ?>
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <?php echo display_msg($msg); ?>
      </div>
  </div>
</div>

<div class="container-list">
  <div class="row">
      <div class="col-md-12">
          <div class="panel">
              <div class="jumbotron text-center">
                  <h1>Bienvenidos a QA Soil Test Index</h1>
              </div>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-12">
          <h2>Muestras y Progreso</h2>
      </div>
      <div class="col-md-12">
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>Sample ID</th>
                      <th>Sample Number</th>
                      <th>Test Type</th>
                      <th>Progreso (%)</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($muestrasConProgreso as $muestra) : ?>
                      <tr>
                          <td><?php echo $muestra['Sample_ID']; ?></td>
                          <td><?php echo $muestra['Sample_Number']; ?></td>
                          <td><?php echo $muestra['Test_Type']; ?></td>
                          <td><?php echo $muestra['Progreso']; ?></td>
                      </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
      </div>
  </div>
</div>

<div class="container-form">
  <!-- Contenido del formulario -->
</div>

<?php include_once('layouts/footer.php'); ?>
