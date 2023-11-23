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

$sql_pendiente = "SELECT * FROM lista_de_pendiente";
$resultado_pendiente = $conexion->query($sql_pendiente);

$muestra_data = array();

while ($fila = $resultado_pendiente->fetch_assoc()) {
    $muestra_data[] = $fila;
}

$sql_preparacion = "SELECT * FROM muestra_en_preparacion";
$resultado_preparacion = $conexion->query($sql_preparacion);

$sql_realizacion = "SELECT * FROM muestra_en_realizacion";
$resultado_realizacion = $conexion->query($sql_realizacion);

$sql_entregado = "SELECT * FROM ensayo_en_entrega";
$resultado_entregado = $conexion->query($sql_entregado);

$sql_revision = "SELECT * FROM ensayos_en_revision";
$resultado_revision = $conexion->query($sql_revision);

$sql_repeticion= "SELECT * FROM ensayo_en_repeticion";
$resultado_repeticion = $conexion->query($sql_repeticion);


foreach ($muestra_data as &$muestra) {
    $sample_id = $muestra['Sample_ID'];
    $sample_number = $muestra['Sample_Number'];
    $test_type = $muestra['Test_Type'];

    // Inicializar las variables de estado
    $en_preparacion = false;
    $en_realizacion = false;
    $ensayo_entregado = false;
    $ensayo_revision = false;
    $ensayo_repeticion = false;

    // Verificar si la muestra se encuentra en cada una de las tablas
    while ($fila = $resultado_preparacion->fetch_assoc()) {
        if ($sample_id == $fila['Sample_ID'] && $sample_number == $fila['Sample_Number'] && $test_type == $fila['Test_Type']) {
            $en_preparacion = true;
            break;
        }
    }

    while ($fila = $resultado_realizacion->fetch_assoc()) {
        if ($sample_id == $fila['Sample_ID'] && $sample_number == $fila['Sample_Number'] && $test_type == $fila['Test_Type']) {
            $en_realizacion = true;
            break;
        }
    }

    while ($fila = $resultado_entregado->fetch_assoc()) {
        if ($sample_id == $fila['Sample_ID'] && $sample_number == $fila['Sample_Number'] && $test_type == $fila['Test_Type']) {
            $ensayo_entregado = true;
            break;
        }
    }
    while ($fila = $resultado_revision->fetch_assoc()) {
        if ($sample_id == $fila['Sample_ID'] && $sample_number == $fila['Sample_Number'] && $test_type == $fila['Test_Type']) {
            $ensayo_revision = true;
            break;
        }
    }
    while ($fila = $resultado_repeticion->fetch_assoc()) {
        if ($sample_id == $fila['Sample_ID'] && $sample_number == $fila['Sample_Number'] && $test_type == $fila['Test_Type']) {
            $ensayo_repeticion = true;
            break;
        }
    }


    // Marcar la fila correspondiente en la tabla
    $muestra['En_Preparacion'] = $en_preparacion;
    $muestra['En_Realizacion'] = $en_realizacion;
    $muestra['Ensayo_Entregado'] = $ensayo_entregado;
    $muestra['En_Revision'] = $ensayo_revision;
    $muestra['En_Repeticion'] = $ensayo_repeticion;
}
?>


<?php include_once('layouts/header.php'); ?>
<div class="container">
  
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
  <div class="container">

      <div class="col-md-24">
      <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Proceso de muestras</span>
      </div>
      <div class="col-md-24">
      <table class="table table-bordered">
    <thead>
        <tr>
            <th >Sample ID</th>
            <th>Sample Number</th>
            <th>Test Type</th>
            <th class='center-cell'>Preparacion</th>
            <th class='center-cell'>Realizacion</th>
            <th class='center-cell'>Entregado</th>
            <th class='center-cell'>Revision</th>
            <th class='center-cell'>Repeticion</th>
        </tr>
    </thead>
    <tbody>
    <?php

foreach ($muestra_data as $muestra) {
    echo "<tr>";
    echo "<td>" . $muestra['Sample_ID'] . "</td>";
    echo "<td>" . $muestra['Sample_Number'] . "</td>";
    echo "<td>" . $muestra['Test_Type'] . "</td>";

    // Inicializa las variables para rastrear si se encuentra en alguna de las tablas
    $enPreparacion = false;
    $enRealizacion = false;
    $ensayoEntregado = false;
    $ensayoRepeticion = false;
    $ensayoRevision = false;


    // Busca en la tabla muestra_en_preparacion
    $sql_preparacion = "SELECT * FROM muestra_en_preparacion WHERE Sample_ID = '{$muestra['Sample_ID']}' AND Sample_Number = '{$muestra['Sample_Number']}' AND Test_Type = '{$muestra['Test_Type']}'";
    $resultado_preparacion = $conexion->query($sql_preparacion);
    if ($resultado_preparacion && $resultado_preparacion->num_rows > 0) {
        $enPreparacion = true;
    }

    // Busca en la tabla muestra_en_realizacion
    $sql_realizacion = "SELECT * FROM muestra_en_realizacion WHERE Sample_ID = '{$muestra['Sample_ID']}' AND Sample_Number = '{$muestra['Sample_Number']}' AND Test_Type = '{$muestra['Test_Type']}'";
    $resultado_realizacion = $conexion->query($sql_realizacion);
    if ($resultado_realizacion && $resultado_realizacion->num_rows > 0) {
        $enRealizacion = true;
    }

    // Busca en la tabla ensayo_en_entrega
    $sql_entregado = "SELECT * FROM ensayo_en_entrega WHERE Sample_ID = '{$muestra['Sample_ID']}' AND Sample_Number = '{$muestra['Sample_Number']}' AND Test_Type = '{$muestra['Test_Type']}'";
    $resultado_entregado = $conexion->query($sql_entregado);
    if ($resultado_entregado && $resultado_entregado->num_rows > 0) {
        $ensayoEntregado = true;
    }
    // Busca en la tabla ensayo_en_revision
    $sql_revision = "SELECT * FROM ensayos_en_revision WHERE Sample_ID = '{$muestra['Sample_ID']}' AND Sample_Number = '{$muestra['Sample_Number']}' AND Test_Type = '{$muestra['Test_Type']}'";
    $resultado_revision = $conexion->query($sql_repeticion);
    if ($resultado_revision && $resultado_revision->num_rows > 0) {
    $ensayoRevision = true;
    }

   // Busca en la tabla ensayo_en_repeticion
   $sql_repeticion = "SELECT * FROM ensayo_en_repeticion WHERE Sample_ID = '{$muestra['Sample_ID']}' AND Sample_Number = '{$muestra['Sample_Number']}' AND Test_Type = '{$muestra['Test_Type']}'";
   $resultado_repeticion = $conexion->query($sql_repeticion);
   if ($resultado_repeticion && $resultado_repeticion->num_rows > 0) {
    $ensayoRepeticion = true;
    }

    // Columna de Preparación
    echo "<td class='center-cell'>";
    if ($enPreparacion) {
        echo '<img src="uploads/img/realizado.png" alt="En Preparación" width="30px">';
    } else {
        echo '<img src="uploads/img/norealizado.png" alt="No En Preparación"width="30px" >';
    }
    echo "</td>";

    // Columna de Realización
    echo "<td class='center-cell'>";
    if ($enRealizacion) {
        echo '<img src="uploads/img/realizado.png"  alt="En Realización"width="30px">';
    } else {
        echo '<img src="uploads/img/norealizado.png"  alt="No En Realización"width="30px">';
    }
    echo "</td>";

    // Columna de Entregado
    echo "<td class='center-cell'>";
    if ($ensayoEntregado) {
        echo '<img src="uploads/img/realizado.png"  alt="Ensayo Entregado"width="30px">';
    } else {
        echo '<img src="uploads/img/norealizado.png"  alt="No Ensayo Entregado"width="30px">';
    }
    echo "</td>";

  // Columna de Revision
  echo "<td class='center-cell'>";
  if ($ensayoRevision) {
      echo '<img src="uploads/img/realizado.png"  alt="En Revision"width="30px">';
  } else {
      echo '<img src="uploads/img/norealizado.png"  alt=""width="30px">';
  }
  echo "</td>";

    // Columna de Repeticion
    echo "<td class='center-cell'>";
    if ($ensayoRepeticion) {
        echo '<img src="uploads/img/repeticion.png"  alt="En Repeticion"width="30px">';
    } else {
        echo '<img src=""  alt=""width="30px">';
    }
    echo "</td>";

   
}
?>



    </tbody>
</table>







      </div>
  </div>
</div>

<div class="container-form">
  <!-- Contenido del formulario -->
</div>




<style>
 
.center-cell {
    text-align: center;
}
</style>

<?php include_once('layouts/footer.php'); ?>