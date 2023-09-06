<?php
$page_title = 'Compressive Strength of Grout Specimens';
require_once('includes/load.php');
// Verificar el nivel de permiso del usuario para ver esta página
page_require_level(2);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('db/GroutSpecimen.php'); 
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
                    <input type="text" id="sug_input" class="form-control" name="title" placeholder="Buscar por el nombre de la muestra">
                </div>
                <div id="result" class="list-group"></div>
            </div>
        </form>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Compressive Strength of Grout Specimens</span>
        </strong>
    </div>
    <div class="panel-body">
        <form method="post" action="grout_specimens.php" oninput="calcular(); calculateAverageStrength();">
        <table class="table table-bordered">
<thead>
<tbody id="product_info"></tbody>
            <div class="row">
                <div class="col-xs-4">
                    <label>Standard</label>
                    <select class="form-control" name="Standard">
                        <option selected>Choose...</option>
                        <option value="ASTM C88">ASTM C88</option>
                    </select>
                </div>
                <div class="col-xs-4">
                    <label>Preparation Method</label>
                    <select class="form-control" name="PreparationMethod">
                        <option selected>Choose...</option>
                        <option value="Oven_Dried">Oven Dried</option>
                        <option value="Air_Dried">Air Dried</option>
                    </select>
                </div>
                <div class="col-xs-4">
                    <label>Split Method</label>
                    <select class="form-control" name="SplitMethod">
                        <option selected>Choose...</option>
                        <option value="Mech_Split">Mech. Split</option>
                        <option value="Man_Split">Manual Split</option>
                    </select>
                </div>
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

            <div>
    <table class="table table-bordered" style="width: 100%;">
        <thead>
            <caption>Testing Information</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col" rowspan="2">No.1</th>
                <th style="font-size: 15px; text-align: center;" scope="col" colspan="3">Dimension (mm)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Area (m²)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Volumen (m³)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Weight of the Cylinder (Kg)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Age (days)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Unit Weight (Kg/m³)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Failure Load (KN)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Strenght (Mpa)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Average Strenght (Mpa)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Type of Fracture</th>
                <th style="font-size: 15px; text-align: center; padding: 25px;" scope="col" rowspan="2">Observations</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Diameter</th>
                <th style="font-size: 15px; text-align: center;" scope="col">High</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Length</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">1</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="DiameterN1"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="HighN1"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="LengthN1"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="Aream2N1"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Vol-m3-1" name="Volumenm3N1"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Weig-Cylinder-1" name="WeightCylinderkgN1"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="AgeDaysN1"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Unit-Weig-Kgm3-1" name="UnitWeightkgm3N1"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="FailureLoadknN1"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Strenght-Mpa-1" name="StrenghtMpaN1"></td>
                <td rowspan="5"><input type="text" style="border: none;" size="4" style="background: transparent;"id="Average-Streng-Mpa" name="AverageStrenghtMpa"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="TypeMpaN1"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="ObservationsN1"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">2</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="DiameterN2"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="HighN2"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="LengthN2"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="Aream2N2"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Vol-m3-2" name="Volumenm3N2"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Weig-Cylinder-2" name="WeightCylinderkgN2"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="AgeDaysN2"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Unit-Weig-Kgm3-2" name="UnitWeightkgm3N2"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="FailureLoadknN2"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Strenght-Mpa-2" name="StrenghtMpaN2"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="TypeMpaN2"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="ObservationsN2"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="DiameterN3"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="HighN3"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="LengthN3"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="Aream2N3"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Vol-m3-3" name="Volumenm3N3"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Weig-Cylinder-3" name="WeightCylinderkgN3"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="AgeDaysN3"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Unit-Weig-Kgm3-3" name="UnitWeightkgm3N3"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="FailureLoadknN3"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Strenght-Mpa-3" name="StrenghtMpaN3"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="TypeMpaN3"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="ObservationsN3"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">4</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="DiameterN4"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="HighN4"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="LengthN4"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="Aream2N4"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Vol-m3-4" name="Volumenm3N4"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Weig-Cylinder-4" name="WeightCylinderkgN4"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="AgeDaysN4"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Unit-Weig-Kgm3-4" name="UnitWeightkgm3N4"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="FailureLoadknN4"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Strenght-Mpa-4" name="StrenghtMpaN4"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="TypeMpaN4"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="ObservationsN4"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">5</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="DiameterN5"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="HighN5"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="LengthN5"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="Aream2N5"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Vol-m3-5" name="Volumenm3N5"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Weig-Cylinder-5" name="WeightCylinderkgN5"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="AgeDaysN5"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Unit-Weig-Kgm3-5" name="UnitWeightkgm3N5"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="FailureLoadknN5"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="Strenght-Mpa-5" name="StrenghtMpaN5"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="TypeMpaN5"></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="" name="ObservationsN5"></td>
            </tr>
        </tbody>
    </table>
</div>

  <div style="margin-left: 1%;">
    <button type="submit" name="GroutSpecimens" class="btn btn-danger">Registrar ensayo</button>
</div>

  <div style="display: flex; flex-direction: column; flex-wrap: wrap; align-content: flex-end; margin-right: 10%;">
    <span>Graphic Load versus time</span>
    <div>
      <form action="" method="POST" enctype="multipart/form-data">
      <div>
        <div>
          <span>
            <input type="file" name="" id="fileToUpload" multiple="multiple" class="btn btn-primary"/>
         </span>

         <div>
            <img id="imatge" sty>
         </div>
       </div>
      </div>
  </div>
  </div>

        </form>
    </div>
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