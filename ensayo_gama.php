<?php
$page_title = 'Standard Count for Nuclear Gauche';
require_once('includes/load.php');
// Verifica el nivel de permiso del usuario para ver esta página
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
                <form method="post" action="#" oninput="calcular()">

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
                            <table class="table table-bordered" style="width: 20%;">
                            <thead>
                                <caption></caption>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">Station</th>
                                    <td><input type="text" style="border: none; background: transparent;" id="Station"></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-bordered" style="width: 30%;">
                            <thead>
                                <caption>Field Test Result</caption>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">Max Dry Density ( Kg/m3)</th>
                                    <td><input type="text" style="border: none; background: transparent;" id="Max-Dry-Densy-Kgm3"></td>
                                </tr>
                                <tr>
                                    <th scope="col">Max Wet Density (Kg/m3)</th>
                                    <td><input type="text" style="border: none; background: transparent;" id="Max-Wet-Densy-kgm3"></td>
                                </tr>
                                <tr>
                                    <th scope="col">Percent Moisture Content</th>
                                    <td><input type="text" style="border: none; background: transparent;" id="Porce-MC"></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-bordered" style="width: 35%;">
                            <thead>
                                <caption>LAB Test Result</caption>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">Optimun Moisture Content %</th>
                                    <td style="width: 10%;"><input type="text" style="border: none; background: transparent;" id="Optimun-MC-Porce"></td>
                                </tr>
                                <tr>
                                    <th scope="col">Max Dry Density (kg/m3)</th>
                                    <td><input type="text" style="border: none; background: transparent;" id="Max-Dry-Density-Lab"></td>
                                </tr>
                                <tr>
                                    <th scope="col">Percent of Compaction</th>
                                    <td><input type="text" style="border: none; background: transparent;" id="Porce-Compaction-Lab"></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <button type="submit" name="" class="btn btn-danger">Registrar ensayo</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function convertToNumberOrZero(value) {
        const parsedValue = parseFloat(value);
        return isNaN(parsedValue) ? 0 : parsedValue;
    }

    function calcular() {
        MaxDryDensyKgm31 = convertToNumberOrZero(document.getElementById("Max-Dry-Densy-Kgm3").value);
        MaxDryDensityLab = convertToNumberOrZero(document.getElementById("Max-Dry-Density-Lab").value);

        const PorceCompactionLab = (MaxDryDensyKgm31/MaxDryDensityLab)*100;

        document.getElementById("Porce-Compaction-Lab").value = isNaN(PorceCompactionLab) ? 0 : PorceCompactionLab.toFixed(0);
    }
</script>

<?php include_once('layouts/footer.php'); ?>