<?php
$page_title = 'Standard Count for Nuclear Gauche';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);

$Density = find_by_id('count_gama', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

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
                    <option <?php if ($Density['Standard'] == 'ASTM D6938') echo 'selected'; ?>>ASTM D6938</option>
                </select>
            </div>
            <div class="col-xs-4">
                <label>Method</label>
                <select class="form-control" type="text" name="PreparationMethod" id="">
                    <option <?php if ($Density['Preparation_Method'] == 'A') echo 'selected'; ?>>A</option>   
                    <option <?php if ($Density['Preparation_Method'] == 'B') echo 'selected'; ?>>B</option>   
                    <option <?php if ($Density['Preparation_Method'] == 'C') echo 'selected'; ?>>C</option> 
                </select>
            </div>

            <div class="col-xs-4">
                <label>Comments</label>
                <textarea class="form-control" name="Comments"><?php echo ($Density['Comments']); ?></textarea>
            </div>

            <div class="col-xs-4">
                <label>Technician</label>
                <input class="form-control" name="Technician" value="<?php echo ($Density['Technician']); ?>" type="text">
            </div>

            <div class="col-xs-4">
                <label>Test Start Date</label>
                <input class="form-control" name="TestStartDate" value="<?php echo ($Density['Test_Start_Date']); ?>" type="date">
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
                <td><input value="<?php echo ($Density['Date_Count_1']); ?>" type="text" style="border: none; background: transparent;" name="DateCount1" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Value_Count_1']); ?>" type="text" style="border: none; background: transparent;" name="ValueCount1" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Rank_Date_1']); ?>" type="text" style="border: none; background: transparent;" name="RankDate1" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Operator_1']); ?>" type="text" style="border: none; background: transparent;" name="Operator1" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input value="<?php echo ($Density['Date_Count_2']); ?>" type="text" style="border: none; background: transparent;" name="DateCount2" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Value_Count_2']); ?>" type="text" style="border: none; background: transparent;" name="ValueCount2" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Rank_Date_2']); ?>" type="text" style="border: none; background: transparent;" name="RankDate2" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Operator_2']); ?>" type="text" style="border: none; background: transparent;" name="Operator2" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input value="<?php echo ($Density['Date_Count_3']); ?>" type="text" style="border: none; background: transparent;" name="DateCount3" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Value_Count_3']); ?>" type="text" style="border: none; background: transparent;" name="ValueCount3" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Rank_Date_3']); ?>" type="text" style="border: none; background: transparent;" name="RankDate3" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Operator_3']); ?>" type="text" style="border: none; background: transparent;" name="Operator3" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input value="<?php echo ($Density['Date_Count_4']); ?>" type="text" style="border: none; background: transparent;" name="DateCount4" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Value_Count_4']); ?>" type="text" style="border: none; background: transparent;" name="ValueCount4" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Rank_Date_4']); ?>" type="text" style="border: none; background: transparent;" name="RankDate4" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Operator_4']); ?>" type="text" style="border: none; background: transparent;" name="Operator4" oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input value="<?php echo ($Density['Date_Count_5']); ?>" type="text" style="border: none; background: transparent;" name="DateCount5" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Value_Count_5']); ?>" type="text" style="border: none; background: transparent;" name="ValueCount5" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Rank_Date_5']); ?>" type="text" style="border: none; background: transparent;" name="RankDate5" oninput="calcular()"></td>
                <td><input value="<?php echo ($Density['Operator_5']); ?>" type="text" style="border: none; background: transparent;" name="Operator5" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>

<div>
<button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
<button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
<a href="PDF/Density_Bulk_Rev_1.php?id=<?php echo intval($Density['id']); ?>" class="btn btn-primary">Generar PDF</a>
</div>

<?php include_once('layouts/footer.php'); ?>