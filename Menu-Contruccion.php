<?php
$page_title = 'Menu de ensayos de Granulometrias';
require_once('includes/load.php');

page_require_level(2);
$products = join_lab_test_requisition_form();
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Menu De Contruccion</span>
        </strong>
      </div>
      <div class="panel-body">
        <div class="list-group">
        <a class="list-group-item" href="MCmenu.php" style="font-size: 16px;">Contenido de humedad</a>
            <a class="list-group-item" href="GSmenu.php"style="font-size: 16px;">Granulometrias</a>
            <a class="list-group-item" href="SGmenu.php" style="font-size: 16px;">Gravedad Especifica</a>
            <a class="list-group-item" href="LAAmenu.php" style="font-size: 16px;">Abrasion De Los Angeles</a>
            <a class="list-group-item" href="Al.php" style="font-size: 16px;">Limite de Atterberg</a>
            <a class="list-group-item" href="Standardproctor.php" style="font-size: 16px;">Standard Proctor</a>
            <a class="list-group-item" href="PLT.php" style="font-size: 16px;">Carga Puntual</a>
            <a class="list-group-item" href="CSmenu.php" style="font-size: 16px;">Esfuerzo a Compresion</a>
            <a class="list-group-item" href="BTS.php" style="font-size: 16px;">Esfuerzo a Tension</a>
            <a class="list-group-item" href="leeb_hardness.php" style="font-size: 16px;">Dureza Leeb</a>
            <a class="list-group-item" href="Dispermenu.php" style="font-size: 16px;">Dispersion</a>
            <a class="list-group-item" href="soundness.php" style="font-size: 16px;">Sanidad</a>
            <a class="list-group-item" href="PYmenu.php" style="font-size: 16px;">Permeabilidad</a>
            <a class="list-group-item" href="dencyMenu.php" style="font-size: 16px;">Densidades</a>
            <a class="list-group-item" href="consolidation.php" style="font-size: 16px;">Consolidacion</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('layouts/footer.php'); ?>
