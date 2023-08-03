<?php
require_once('Grain_Size.php');

page_require_level(3);
// Tamaños de partícula
$tamanos = array(0.075, 0.106, 0.15, 0.25, 0.30, 0.85, 1.18, 2.00, 4.75, 9.5, 19.5, 25.4, 
38.1, 50.80, 63.50, 76.20, 101.6, 127, 152.4, 203.2, 254, 304.8);

$porcentajes = array();

// Agregar valores de inputs al array de porcentajes
if (isset($_POST['11'])) {
  $porcentajes[] = floatval($_POST['11']);
}
if (isset($_POST['15'])) {
  $porcentajes[] = floatval($_POST['15']);
}
if (isset($_POST['19'])) {
  $porcentajes[] = floatval($_POST['19']);
}

if (isset($_POST['23'])) {
  $porcentajes[] = floatval($_POST['23']);
}

if (isset($_POST['27'])) {
  $porcentajes[] = floatval($_POST['27']);
}
if (isset($_POST['31'])) {
  $porcentajes[] = floatval($_POST['31']);
}
if (isset($_POST['35'])) {
  $porcentajes[] = floatval($_POST['35']);
}
if (isset($_POST['39'])) {
  $porcentajes[] = floatval($_POST['39']);
}
if (isset($_POST['43'])) {
  $porcentajes[] = floatval($_POST['43']);
}
if (isset($_POST['47'])) {
  $porcentajes[] = floatval($_POST['47']);
}
if (isset($_POST['51'])) {
  $porcentajes[] = floatval($_POST['51']);
}
if (isset($_POST['55'])) {
  $porcentajes[] = floatval($_POST['55']);
}
if (isset($_POST['59'])) {
  $porcentajes[] = floatval($_POST['59']);
}
if (isset($_POST['63'])) {
  $porcentajes[] = floatval($_POST['63']);
}
if (isset($_POST['67'])) {
  $porcentajes[] = floatval($_POST['71']);
}

if (isset($_POST['75'])) {
  $porcentajes[] = floatval($_POST['75']);
}
if (isset($_POST['79'])) {
  $porcentajes[] = floatval($_POST['79']);
}
if (isset($_POST['83'])) {
  $porcentajes[] = floatval($_POST['83']);
}
if (isset($_POST['87'])) {
  $porcentajes[] = floatval($_POST['87']);
}
if (isset($_POST['91'])) {
  $porcentajes[] = floatval($_POST['91']);
}
if (isset($_POST['95'])) {
  $porcentajes[] = floatval($_POST['95']);
}

function calcularD($tamanos, $porcentajes, $d) {
  $indice = -1; 

  for ($i = 0; $i < count($porcentajes); $i++) {
    if ($porcentajes[$i] >= $d) {
      $indice = $i;
      break;
    }
  }

  if ($indice == -1) {
    return -1;
  } else {
    $resultado = $tamanos[$indice - 1] + (($d - $porcentajes[$indice - 1]) / ($porcentajes[$indice] - $porcentajes[$indice - 1])) * ($tamanos[$indice] - $tamanos[$indice - 1]);
  }

  return $resultado;
}

// Cálculo de los valores de D10, D15, D30, D60 y D85
$d10 = calcularD($tamanos, $porcentajes, 10);
$d15 = calcularD($tamanos, $porcentajes, 15);
$d30 = calcularD($tamanos, $porcentajes, 30);
$d60 = calcularD($tamanos, $porcentajes, 60);
$d85 = calcularD($tamanos, $porcentajes, 85);

// Imprimir resultados
echo "D10 = " . $d10 . "<br>";
echo "D15 = " . $d15 . "<br>";
echo "D30 = " . $d30 . "<br>";
echo "D60 = " . $d60 . "<br>";
echo "D85 = " . $d85 . "<br>";
?>