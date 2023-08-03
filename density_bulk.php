<?php
$page_title = 'BULK DENSITY AND VOIDS IN AGGREGATES';
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
                    <span>BULK DENSITY AND VOIDS IN AGGREGATES</span>
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
                    <option value="ASTM C29">ASTM C29</option>
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
            <caption>Loose Bulk Density</caption>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Sample ID</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight of tare (g)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight of tare + Soil (g)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Volume of the Mold (m³)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight Loose Material (g)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Absorption %</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Specific Gravity (OD)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Density of Water (Kg/m³)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Loose Bulk Denisty (Kg/m³)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Percent Voids in loose Aggregate</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>



<div style="display: flex; justify-content: flex-end; margin-top: -30.2%; margin-bottom: 10%;">
    <table class="table table-bordered" style="width: 40%;">
        <thead>
            <caption>Compacted Bulk Density</caption>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Weight of tare (g)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight of tare + Soil (g)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Volume of the Mold (m³)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Weight Compacted Material (g)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Absorption %</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Specific Gravity (OD)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Density of Water (Kg/m³)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Compacted Bulk Denisty (Kg/m³)</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
            <tr>
                <th scope="col">Percent Voids in compacted Aggregate</th>
                <td><input type="text" style="border: none; background: transparent;" size="4" id="" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div>
    <button type="submit" name="add_mcoven" class="btn btn-danger">Registrar ensayo</button>
</div>























<?php include_once('layouts/footer.php'); ?>