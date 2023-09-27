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

// Arreglo para almacenar las muestras y su progreso
$muestrasConProgreso = array();



  

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
