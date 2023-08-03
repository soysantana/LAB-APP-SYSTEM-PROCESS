<?php
$page_title = 'Standard Count for Nuclear Gauche';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);
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
                <form method="post" action="#" onsubmit="calcular()">

                    <table class="table table-bordered">
                        <thead>
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
                <select class="form-control" type="text" name="method" id="">
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
                <input class="form-control" name="Test_Start_Date" type="date">
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
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>




<div style="display: flex; margin-left: 2%;">
    <table class="table table-bordered" style="width: 12%;">
        <thead>
            <caption>Test condition</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Passed</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Failed</th>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent; text-align: center;" size="5" id=""></td>
                <td><input type="text" style="border: none; background: transparent; text-align: center;" size="5" id=""></td>
            </tr>
        </tbody>
    </table>
  </div>




<div>
    <button type="submit" name="add_mcoven" class="btn btn-danger">Registrar ensayo</button>
</div>



























<?php include_once('layouts/footer.php'); ?>