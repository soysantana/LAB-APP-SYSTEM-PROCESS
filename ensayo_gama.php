<?php
$page_title = 'Standard Count for Nuclear Gauche';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);
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
    <table class="table table-bordered" style="width: 50%;">
        <thead>
            <caption style="text-align: center;"></caption>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Structure</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Work Area</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Project Name</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Project Numbere</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Sample Number</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Station</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Proctor ID:</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Optimum MC:</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Max Dry Density (Kg/m3):</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Coordinates N/E</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Elevation</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="margin-left: 1%;">
    <table class="table table-bordered" style="width: 40%;">
        <thead>
            <caption style="text-align: center;">Field Test Result</caption>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Max Dry Density ( Kg/m3)</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Max Wet Density (Kg/m3)</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Percent Moisture Content</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Percent of Compaction</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="margin-left: 1%;">
    <table class="table table-bordered" style="width: 40%;">
        <thead>
            <caption style="text-align: center;">LAB Test Result</caption>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Weight of Wet Soil + Tare (g)</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight of Dry + Tare (g)</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight of Tare (g)</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight of Water (g)</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight of Dry Soil (g)</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Moisture Content %</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Corrected LAB Dry Density (kg/m3)</th>
                <td><input type="text" style="border: none; background: transparent;" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Corrected Percent of Compaction</th>
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