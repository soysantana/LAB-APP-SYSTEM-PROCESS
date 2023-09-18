<?php
$page_title = 'Menu de Inventario de equipos y herramientas';
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
                    <span>Menu de Inventario de equipos y herramientas</span>
                </strong>
            </div>
            <div class="panel-body">
                <a href="categorie.php" class="list-group-item">Categorias</a>
                <a href="product.php" class="list-group-item">Articulos</a>
                <a href="media.php" class="list-group-item">Imagenes</a>
          </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>























