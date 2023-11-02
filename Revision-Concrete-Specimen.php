<?php
$page_title = 'Compressive Strenght of Cylindrical Concrete Specimens';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('db/ConcreteSpecimens.php'); 
  }
$SearchTable = find_by_id('concrete_specimens', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row"></div>
<div class="col-md-12"></div>
<?php echo display_msg($msg); ?>
<div class="panel panel-default">
<div class="panel-heading clearfix">
<strong>
<span class="glyphicon glyphicon-th"></span>
<span>Compressive Strenght of Cylindrical Concrete Specimens</span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="" oninput="calcular(); calculateAverageStrength();">

<table class="table table-bordered">
<thead>
<tbody id="product_info"></tbody>
</div>
<div class="col-xs-4">
<label >Standard</label>
<select class="form-control" name="Standard">
<option <?php if ($SearchTable['Standard'] == 'ASTM C88') echo 'selected'; ?>>ASTM C88</option>        
</select>
</div>

<div class="col-xs-4">
<label >Preparation Method</label>
<select class="form-control" name="PreparationMethod">
<option <?php if ($SearchTable['Preparation_Method'] == 'Oven_Dried') echo 'selected'; ?>>Oven_Dried</option>
<option <?php if ($SearchTable['Preparation_Method'] == 'Air_Dried') echo 'selected'; ?>>Air_Dried</option>
</select>
</div>

<div class="col-xs-4">
<label >Split Method</label>
<select class="form-control" name="SplitMethod">
<option <?php if ($SearchTable['Split_Method'] == 'Mech_Split') echo 'selected'; ?>>Mech_Split</option>
<option <?php if ($SearchTable['Split_Method'] == 'Man_Split') echo 'selected'; ?>>Man_Split</option>
</select>
</div>

<div class="col-xs-4">
<label>Comments</label>
<textarea class="form-control" name="Comments"><?php echo ($SearchTable['Comments']); ?></textarea>
</div>
      
<div class="col-xs-4">
<label>Technician</label>
<input class="form-control" name="Technician" value="<?php echo ($SearchTable['Technician']); ?>" type="text">
</div>
    
<div class="col-xs-4">
<label>Test Start Date</label>
<input class="form-control" name="TestStartDate" value="<?php echo ($SearchTable['Test_Start_Date']); ?>" type="date">
</div>




<div>
    <table class="table table-bordered" style="width: 100%;">
        <thead>
            <caption>Testing Information</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col" rowspan="2">No.1</th>
                <th style="font-size: 15px; text-align: center;" scope="col" colspan="2">Dimension (mm)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Area (m²)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Volumen (m³)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Weight of the Cylinder (Kg)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Age (days)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Unit Weight (Kg/m³)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Failure Load (KN)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Strenght (Mpa)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Average Strenght (Mpa)</th>
                <th style="font-size: 15px; text-align: center; padding: 25px;" scope="col" rowspan="2">Type of Fracture</th>
                <th style="font-size: 15px; text-align: center; padding: 25px;" scope="col" rowspan="2">Observations</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Diameter</th>
                <th style="font-size: 15px; text-align: center;" scope="col">High</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">1</th>
                <td><input value="<?php echo ($SearchTable['Diameter_N1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="DiameterN1"></td>
                <td><input value="<?php echo ($SearchTable['High_N1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="HighN1"></td>
                <td><input value="<?php echo ($SearchTable['Area_m2_N1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="Aream2N1"></td>
                <td><input value="<?php echo ($SearchTable['Volumen_m3_N1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Vol-m3-1" name="Volumenm3N1"></td>
                <td><input value="<?php echo ($SearchTable['Weight_Cylinder_kg_N1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Weig-Cylinder-1" name="WeightCylinderkgN1"></td>
                <td><input value="<?php echo ($SearchTable['Age_Days_N1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="AgeDaysN1"></td>
                <td><input value="<?php echo ($SearchTable['Unit_Weight_kgm3_N1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Unit-Weig-Kgm3-1" name="UnitWeightkgm3N1"></td>
                <td><input value="<?php echo ($SearchTable['Failure_Load_kn_N1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="FailureLoadknN1"></td>
                <td><input value="<?php echo ($SearchTable['Strenght_Mpa_N1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Strenght-Mpa-1" name="StrenghtMpaN1"></td>
                <td rowspan="5"><input value="<?php echo ($SearchTable['Average_Strenght_Mpa']); ?>" type="text" style="border: none; background: transparent; padding: 40%; width: 100%;" id="Average-Streng-Mpa" name="AverageStrenghtMpa"></td>
                <td><input value="<?php echo ($SearchTable['Type_Fracture_N1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="TypeFractureN1"></td>
                <td><input value="<?php echo ($SearchTable['Observations_N1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="ObservationsN1"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">2</th>
                <td><input value="<?php echo ($SearchTable['Diameter_N2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="DiameterN2"></td>
                <td><input value="<?php echo ($SearchTable['High_N2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="HighN2"></td>
                <td><input value="<?php echo ($SearchTable['Area_m2_N2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="Aream2N2"></td>
                <td><input value="<?php echo ($SearchTable['Volumen_m3_N2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Vol-m3-2" name="Volumenm3N2"></td>
                <td><input value="<?php echo ($SearchTable['Weight_Cylinder_kg_N2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Weig-Cylinder-2" name="WeightCylinderkgN2"></td>
                <td><input value="<?php echo ($SearchTable['Age_Days_N2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="AgeDaysN2"></td>
                <td><input value="<?php echo ($SearchTable['Unit_Weight_kgm3_N2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Unit-Weig-Kgm3-2" name="UnitWeightkgm3N2"></td>
                <td><input value="<?php echo ($SearchTable['Failure_Load_kn_N2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="FailureLoadknN2"></td>
                <td><input value="<?php echo ($SearchTable['Strenght_Mpa_N2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Strenght-Mpa-2" name="StrenghtMpaN2"></td>
                <td><input value="<?php echo ($SearchTable['Type_Fracture_N2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="TypeFractureN2"></td>
                <td><input value="<?php echo ($SearchTable['Observations_N2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="ObservationsN2"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3</th>
                <td><input value="<?php echo ($SearchTable['Diameter_N3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="DiameterN3"></td>
                <td><input value="<?php echo ($SearchTable['High_N3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="HighN3"></td>
                <td><input value="<?php echo ($SearchTable['Area_m2_N3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="Aream2N3"></td>
                <td><input value="<?php echo ($SearchTable['Volumen_m3_N3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Vol-m3-3" name="Volumenm3N3"></td>
                <td><input value="<?php echo ($SearchTable['Weight_Cylinder_kg_N3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Weig-Cylinder-3" name="WeightCylinderkgN3"></td>
                <td><input value="<?php echo ($SearchTable['Age_Days_N3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="AgeDaysN3"></td>
                <td><input value="<?php echo ($SearchTable['Unit_Weight_kgm3_N3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Unit-Weig-Kgm3-3" name="UnitWeightkgm3N3"></td>
                <td><input value="<?php echo ($SearchTable['Failure_Load_kn_N3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="FailureLoadknN3"></td>
                <td><input value="<?php echo ($SearchTable['Strenght_Mpa_N3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Strenght-Mpa-3" name="StrenghtMpaN3"></td>
                <td><input value="<?php echo ($SearchTable['Type_Fracture_N3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="TypeFractureN3"></td>
                <td><input value="<?php echo ($SearchTable['Observations_N3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="ObservationsN3"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">4</th>
                <td><input value="<?php echo ($SearchTable['Diameter_N4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="DiameterN4"></td>
                <td><input value="<?php echo ($SearchTable['High_N4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="HighN4"></td>
                <td><input value="<?php echo ($SearchTable['Area_m2_N4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="Aream2N4"></td>
                <td><input value="<?php echo ($SearchTable['Volumen_m3_N4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Vol-m3-4" name="Volumenm3N4"></td>
                <td><input value="<?php echo ($SearchTable['Weight_Cylinder_kg_N4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Weig-Cylinder-4" name="WeightCylinderkgN4"></td>
                <td><input value="<?php echo ($SearchTable['Age_Days_N4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="AgeDaysN4"></td>
                <td><input value="<?php echo ($SearchTable['Unit_Weight_kgm3_N4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Unit-Weig-Kgm3-4" name="UnitWeightkgm3N4"></td>
                <td><input value="<?php echo ($SearchTable['Failure_Load_kn_N4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="FailureLoadknN4"></td>
                <td><input value="<?php echo ($SearchTable['Strenght_Mpa_N4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Strenght-Mpa-4" name="StrenghtMpaN4"></td>
                <td><input value="<?php echo ($SearchTable['Type_Fracture_N4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="TypeFractureN4"></td>
                <td><input value="<?php echo ($SearchTable['Observations_N4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="ObservationsN4"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">5</th>
                <td><input value="<?php echo ($SearchTable['Diameter_N5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="DiameterN5"></td>
                <td><input value="<?php echo ($SearchTable['High_N5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="HighN5"></td>
                <td><input value="<?php echo ($SearchTable['Area_m2_N5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="Aream2N5"></td>
                <td><input value="<?php echo ($SearchTable['Volumen_m3_N5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Vol-m3-5" name="Volumenm3N5"></td>
                <td><input value="<?php echo ($SearchTable['Weight_Cylinder_kg_N5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Weig-Cylinder-5" name="WeightCylinderkgN5"></td>
                <td><input value="<?php echo ($SearchTable['Age_Days_N5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="AgeDaysN5"></td>
                <td><input value="<?php echo ($SearchTable['Unit_Weight_kgm3_N5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Unit-Weig-Kgm3-5" name="UnitWeightkgm3N5"></td>
                <td><input value="<?php echo ($SearchTable['Failure_Load_kn_N5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="FailureLoadknN5"></td>
                <td><input value="<?php echo ($SearchTable['Strenght_Mpa_N5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="Strenght-Mpa-5" name="StrenghtMpaN5"></td>
                <td><input value="<?php echo ($SearchTable['Type_Fracture_N5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="TypeMFractureN5"></td>
                <td><input value="<?php echo ($SearchTable['Observations_N5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;"id="" name="ObservationsN5"></td>
            </tr>
        </tbody>
    </table>
</div>

<div style="margin-left: 1%;">
<button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
<button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
<div class="btn-group dropup" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Generar PDF
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Contrucion</a></li>
                    <li><a href="PDF/Grout_Concrete_Rev_3.php?id=<?php echo intval($SearchTable['id']); ?>">Investigacion</a></li>
                    </ul>
                    </div>
<button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>
</div>

  <script>
    function convertToNumberOrZero(value) {
        const parsedValue = parseFloat(value);
        return isNaN(parsedValue) ? 0 : parsedValue;
    }
    function calculateAverageStrength() {
        const strengthInputs = [
        document.getElementById('Strenght-Mpa-1'),
        document.getElementById('Strenght-Mpa-2'),
        document.getElementById('Strenght-Mpa-3'),
        document.getElementById('Strenght-Mpa-4'),
        document.getElementById('Strenght-Mpa-5')
    ];

    let validCount = 0;
    let totalStrength = 0;

    for (const input of strengthInputs) {
        const value = parseFloat(input.value);
        if (!isNaN(value)) {
            totalStrength += value;
            validCount++;
        }
    }

    if (validCount === 0) {
        return 0;
    }

    const averageStrength = totalStrength / validCount;
    return document.getElementById("Average-Streng-Mpa").value = isNaN(averageStrength) ? 0 : averageStrength.toFixed(2);
}
    function calcular() {
        Volm31 = convertToNumberOrZero(document.getElementById("Vol-m3-1").value);
        WeigCylinder1 = convertToNumberOrZero(document.getElementById("Weig-Cylinder-1").value);
        Volm32 = convertToNumberOrZero(document.getElementById("Vol-m3-2").value);
        WeigCylinder2 = convertToNumberOrZero(document.getElementById("Weig-Cylinder-2").value);
        Volm33 = convertToNumberOrZero(document.getElementById("Vol-m3-3").value);
        WeigCylinder3 = convertToNumberOrZero(document.getElementById("Weig-Cylinder-3").value);
        Volm34 = convertToNumberOrZero(document.getElementById("Vol-m3-4").value);
        WeigCylinder4 = convertToNumberOrZero(document.getElementById("Weig-Cylinder-4").value);
        Volm35 = convertToNumberOrZero(document.getElementById("Vol-m3-5").value);
        WeigCylinder5 = convertToNumberOrZero(document.getElementById("Weig-Cylinder-5").value);

        const UnitWeigKgm31 = WeigCylinder1/Volm31;
        const UnitWeigKgm32 = WeigCylinder2/Volm32;
        const UnitWeigKgm33 = WeigCylinder3/Volm33;
        const UnitWeigKgm34 = WeigCylinder4/Volm34;
        const UnitWeigKgm35 = WeigCylinder5/Volm35;

        document.getElementById("Unit-Weig-Kgm3-1").value = isNaN(UnitWeigKgm31) ? 0 : UnitWeigKgm31.toFixed(2);
        document.getElementById("Unit-Weig-Kgm3-2").value = isNaN(UnitWeigKgm32) ? 0 : UnitWeigKgm32.toFixed(2);
        document.getElementById("Unit-Weig-Kgm3-3").value = isNaN(UnitWeigKgm33) ? 0 : UnitWeigKgm33.toFixed(2);
        document.getElementById("Unit-Weig-Kgm3-4").value = isNaN(UnitWeigKgm34) ? 0 : UnitWeigKgm34.toFixed(2);
        document.getElementById("Unit-Weig-Kgm3-5").value = isNaN(UnitWeigKgm35) ? 0 : UnitWeigKgm35.toFixed(2);
    }
</script>

<?php include_once('layouts/footer.php'); ?>