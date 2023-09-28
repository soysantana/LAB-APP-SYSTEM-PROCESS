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
                  <h1>Bienvenidos a Soil Index Test</h1>
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
                      <th class="text-center">MC</th>
                      <th class="text-center">GS</th>
                      <th class="text-center">SP</th> 
                      <th class="text-center">AL</th> 
                      <th class="text-center">SG</th> 
                      <th class="text-center">HY</th> 
                      <th class="text-center">DHY</th> 
                      <th class="text-center">PH</th> 
                      <th class="text-center">UCS</th> 
                      <th class="text-center">PLT</th> 
                      <th class="text-center">BTS</th> 
                      <th>Progreso (%)</th>
                  </tr>
              </thead>
              <tbody>
                 
                      <tr>
                          
                      </tr>
                  
              </tbody>
          </table>
      </div>
  </div>
</div>

<div class="container-form">
  <!-- Contenido del formulario -->
</div>

<?php include_once('layouts/footer.php'); ?>

