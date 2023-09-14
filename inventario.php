<?php
$page_title = 'Menu de Inventario';
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
                    <span>Samples stored in List</span>
                </strong>
            </div>
            <div class="panel-body">
               
                <ul class="list-group">


<?php include_once('layouts/footer.php'); ?>

