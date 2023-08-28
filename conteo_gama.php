<?php
$page_title = 'Standard Count for Nuclear Gauche';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('db/CountGama.php'); 
  }
?>

<?php include_once('layouts/header.php'); ?>
<div class="row">
    <div class="col-md-6">
        <?php echo display_msg($msg); ?>
        <form method="post" action="ajax.php" autocomplete="off" id="sug-form">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Búsqueda</button>
                    </span>
                    <input type="text" id="sug_input" class="form-control" name="title"
                        placeholder="Buscar por el nombre de la muestra">
                </div>
                <div id="result" class="list-group"></div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Standard Count for Nuclear Gauche</span>
                </strong>
            </div>
            <div class="panel-body">
                <form method="post" action="conteo_gama.php" onsubmit="calcular()">

                    <table class="table table-bordered">
                        <thead>
                        <tbody id="product_info"></tbody>
            </div>
            <div class="col-xs-4">
                <label>Standard</label>
                <select class="form-control" name="Standard">
                    <option selected>Choose...</option>
                    <option value="ASTM D6938">ASTM D6938</option>
                </select>
            </div>
            <div class="col-xs-4">
                <label>Method</label>
                <select class="form-control" type="text" name="PreparationMethod" id="">
                    <option selected>Choose...</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </div>

            <div class="col-xs-4">
                <label>Comments</label>
                <textarea class="form-control" name="Comments"></textarea>
            </div>

            <div class="col-xs-4">
                <label>Technician</label>
                <input class="form-control" name="Technician" type="text">
            </div>

            <div class="col-xs-4">
                <label>Test Start Date</label>
                <input class="form-control" name="TestStartDate" type="date">
            </div>

            <div class="panel-body">
                <div class="col-md-12">
                </div>
            </div>



<div>
    <table class="table table-bordered" style="width: 70%;">
        <thead>
            <caption style="text-align: center;">Test Information</caption>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Date of Count</th>
                <th scope="col">Value of Count</th>
                <th scope="col">Rank to Date</th>
                <th scope="col">Operator</th>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" name="DateCount1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="ValueCount1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="RankDate1" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="Operator1" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" name="DateCount2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="ValueCount2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="RankDate2" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="Operator2" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" name="DateCount3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="ValueCount3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="RankDate3" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="Operator3" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" name="DateCount4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="ValueCount4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="RankDate4" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="Operator4" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" name="DateCount5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="ValueCount5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="RankDate5" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" name="Operator5" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>

<div>
    <button type="submit" name="CountGama" class="btn btn-danger">Registrar ensayo</button>
</div>

<?php include_once('layouts/footer.php'); ?>