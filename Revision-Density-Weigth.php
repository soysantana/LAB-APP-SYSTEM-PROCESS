<?php
$page_title = 'Determination of Density (Unit Weight) of Soil Specimens';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('db/DensityWeigth.php'); 
  }
$SearchTable = find_by_id('density_weigth', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
    <?php echo display_msg($msg); ?>
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Determination of Density (Unit Weight) of Soil Specimens</span>
                </strong>
            </div>
            <div class="panel-body">
                <form method="post" action="" onsubmit="calcular()">

                    <table class="table table-bordered">
                        <thead>
                        <tbody></tbody>
            </div>
            <div class="col-xs-4">
                <label>Standard</label>
                <select class="form-control" name="Standard">
                    <option <?php if ($SearchTable['Standard'] == 'ASTM-D7263') echo 'selected'; ?>>ASTM-D7263</option>
                </select>
            </div>
            <div class="col-xs-4">
                <label>Method</label>
                <select class="form-control" type="text" name="PreparationMethod" id="">
                <option <?php if ($SearchTable['Preparation_Method'] == 'A') echo 'selected'; ?>>A</option>   
                <option <?php if ($SearchTable['Preparation_Method'] == 'B') echo 'selected'; ?>>B</option>   
                <option <?php if ($SearchTable['Preparation_Method'] == 'C') echo 'selected'; ?>>C</option>  
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

            <div class="panel-body">
                <div class="col-md-12">
                </div>
            </div>



            <div>
                <table class="table table-bordered" style="width: 60%;">
                    <thead>
                        <caption>Test Information</caption>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="col">Specimen Properties</th>
                            <th scope="col">Specimen 1</th>
                            <th scope="col">Specimen 2</th>
                            <th scope="col">Specimen 3</th>
                        </tr>
                        <tr>
                            <th scope="col">Shape type (Cylindrical or Cubical)</th>
                            <td><input value="<?php echo ($SearchTable['Shape_Type_1']); ?>" type="text" style="border: none; background: transparent;" size="4" id="1" name="ShapeType1" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Shape_Type_2']); ?>" type="text" style="border: none; background: transparent;" size="4" id="2" name="ShapeType2" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Shape_Type_3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="3" name="ShapeType3" oninput="calcular()"></td>
                        </tr>
                        <tr>
                            <th scope="col">Mass of moist specimen, M0</th>
                            <td><input value="<?php echo ($SearchTable['Mass_Moist_Specimen_1']); ?>" type="text" style="border: none; background: transparent;" size="4" id="4" name="MassMoistSpecimen1" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Mass_Moist_Specimen_2']); ?>" type="text" style="border: none; background: transparent;" size="4" id="5" name="MassMoistSpecimen2" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Mass_Moist_Specimen_3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="6" name="MassMoistSpecimen3" oninput="calcular()"></td>
                        </tr>
                        <tr>
                            <th scope="col">Diameter or Width, mm</th>
                            <td><input value="<?php echo ($SearchTable['Diameter_Width_1']); ?>" type="text" style="border: none; background: transparent;" size="4" id="7" name="DiameterWidth1" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Diameter_Width_2']); ?>" type="text" style="border: none; background: transparent;" size="4" id="8" name="DiameterWidth2" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Diameter_Width_3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="9" name="DiameterWidth3" oninput="calcular()"></td>
                        </tr>
                        <tr>
                            <th scope="col">height , mm</th>
                            <td><input value="<?php echo ($SearchTable['Height_1']); ?>" type="text" style="border: none; background: transparent;" size="4" id="10" name="Height1" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Height_2']); ?>" type="text" style="border: none; background: transparent;" size="4" id="11" name="Height2" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Height_3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="12" name="Height3" oninput="calcular()"></td>
                        </tr>
                        <tr>
                            <th scope="col">Length, mm</th>
                            <td><input value="<?php echo ($SearchTable['Length_1']); ?>" type="text" style="border: none; background: transparent;" size="4" id="13" name="Length1" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Length_2']); ?>" type="text" style="border: none; background: transparent;" size="4" id="14" name="Length2" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Length_3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="15" name="Length3" oninput="calcular()"></td>
                        </tr>
                        <tr>
                            <th scope="col">Volumes of Moist soil, V0 (cm3)</th>
                            <td><input value="<?php echo ($SearchTable['Volumes_Moist_Soil_1']); ?>" type="text" style="border: none; background: transparent;" size="4" id="16" name="VolumesMoistSoil1" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Volumes_Moist_Soil_2']); ?>" type="text" style="border: none; background: transparent;" size="4" id="17" name="VolumesMoistSoil2" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Volumes_Moist_Soil_3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="18" name="VolumesMoistSoil3" oninput="calcular()"></td>
                        </tr>
                    </tbody>
                </table>
            </div>



            <div style="display: flex; justify-content: flex-end; margin-top: -22.3%; margin-right: 2%;">
                <table class="table table-bordered" style="width: 30%;">
                    <thead>
                        <caption>Calculation</caption>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="col">total Volumes of Moist specimen, V (cm3)</th>
                            <td><input value="<?php echo ($SearchTable['Total_Volumes_Moist_Specimen']); ?>" type="text" style="border: none; background: transparent;" size="4" id="19" name="TotalVolumesMoistSpecimen" oninput="calcular()"></td>
                        </tr>
                        <tr>
                            <th scope="col">Mass of moist/total  of specimens, Mt (gr)</th>
                            <td><input value="<?php echo ($SearchTable['Mass_Moist_Total_Specimens']); ?>" type="text" style="border: none; background: transparent;" size="4" id="20" name="MassMoistTotalpecimens" oninput="calcular()"></td>
                        </tr>
                        <tr>
                            <th scope="col">Water Content of specimen, w (%)</th>
                            <td><input value="<?php echo ($SearchTable['Water_Content_Specimen']); ?>" type="text" style="border: none; background: transparent;" size="4" id="21" name="WaterContentSpecimen" oninput="calcular()"></td>
                        </tr>
                        <tr>
                            <th scope="col">Density of total moist specimen, ᵨm(gr/cm3)</th>
                            <td><input value="<?php echo ($SearchTable['Density_Total_Moist_Specimen']); ?>" type="text" style="border: none; background: transparent;" size="4" id="22" name="DensityTotalMoistSpecimen" oninput="calcular()"></td>
                        </tr>
                        <tr>
                            <th scope="col">Moist Unit Weight of Specimen,ᵨd(gr/cm3)</th>
                            <td><input value="<?php echo ($SearchTable['Moist_Unit_Weight_Specimen_grcm3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="23" name="MoistUnitWeightSpecimengrcm3" oninput="calcular()"></td>
                        </tr>
                        <tr>
                            <th scope="col">Moist Unit Weight of Specimen,ϒm (KN/m3)</th>
                            <td><input value="<?php echo ($SearchTable['Moist_Unit_Weight_Specimen_KNm3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="24" name="MoistUnitWeightSpecimenKNm3" oninput="calcular()"></td>
                        </tr>
                        <tr>
                            <th scope="col">Dry Unit Weight of Specimen,ϒd (KN/m3)</th>
                            <td><input value="<?php echo ($SearchTable['Dry_Unit_Weight_Specimen_KNm3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="25" name="DryUnitWeightSpecimenKNm3" oninput="calcular()"></td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div style="display: flex; justify-content: flex-end; margin-right: 2%;">
                <table class="table table-bordered" style="width: 30%;">
                    <thead></thead>
                    <tbody>
                        <tr>
                            <th scope="col">Moist Unit Weight of Specimen,ϒm (Kg/m3)</th>
                            <td><input value="<?php echo ($SearchTable['Moist_Unit_Weight_Specimen_Kgm3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="26" name="MoistUnitWeightSpecimenKgm3" oninput="calcular()"></td>
                        </tr>
                        <tr>
                            <th scope="col">Dry Unit Weight of Specimen,ϒd (Kg/m3)</th>
                            <td><input value="<?php echo ($SearchTable['Dry_Unit_Weight_Specimen_Kgm3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="27" name="DryUnitWeightSpecimenKgm3" oninput="calcular()"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
<button type="submit" name="repetir_muestra" class="btn btn-warning">Enviar ensayo repetir</button>
<div class="btn-group dropup" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Generar PDF
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Contrucion</a></li>
                    <li><a href="PDF/Density_Bulk_Rev_1.php?id=<?php echo intval($SearchTable['id']); ?>">Investigacion</a></li>
                    </ul>
                    </div>
<button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>

            <script>
    function calcular() {
        // Obtener los valores ingresados en los inputs
        const l = document.getElementById("1").value;
        const MMSM0 = parseFloat(document.getElementById("4").value)||0;
        const DWM = document.getElementById("7").value;
        const HM = document.getElementById("10").value;
        const LM = document.getElementById("13").value;

        const l2 = document.getElementById("2").value;
        const MMSM2 = parseFloat(document.getElementById("5").value)||0;
        const DWM2 = document.getElementById("8").value;
        const HM2 = document.getElementById("11").value;
        const LM2 = document.getElementById("14").value;

        const l3 = document.getElementById("3").value;
        const MMSM3 = parseFloat(document.getElementById("6").value)||0;
        const DWM3 = document.getElementById("9").value;
        const HM3 = document.getElementById("12").value;
        const LM3 = document.getElementById("15").value;

        const WCSW = document.getElementById("21").value;

        // Convertir la letra a mayúscula para que sea más fácil comparar
        const st = l.toUpperCase();
        const st2 = l2.toUpperCase();
        const st3 = l3.toUpperCase();

        let val;
        let val2;
        let val3;


        var count = 0;
        if (val != 0) count++;
        if (val2 != 0) count++;
        if (val3 != 0) count++;

        // Utilizar un bloque switch para realizar cálculos diferentes según la letra
        switch (st) {
            case 'CYLINDRICAL':
                val = ((Math.PI * (Math.pow(DWM, 2)) * HM) / 4000);
                break;
            case 'CUBICAL':
                val = ((DWM * HM * LM) / 4000);
                break;
            // Agregar más casos según sea necesario
            default:
                val = 0; // Valor predeterminado si la letra no coincide con ningún caso
        }

        switch (st2) {
            case 'CYLINDRICAL':
                val2 = ((Math.PI * (Math.pow(DWM2, 2)) * HM2) / 4000);
                break;
            case 'CUBICAL':
                val2 = ((DWM2 * HM2 * LM2) / 4000);
                break;
            // Agregar más casos según sea necesario
            default:
                val2 = 0; // Valor predeterminado si la letra no coincide con ningún caso
        }

        switch (st3) {
            case 'CYLINDRICAL':
                val3 = ((Math.PI * (Math.pow(DWM3, 2)) * HM3) / 4000);
                break;
            case 'CUBICAL':
                val3 = ((DWM3 * HM3 * LM3) / 4000);
                break;
            // Agregar más casos según sea necesario
            default:
                val3 = 0; // Valor predeterminado si la letra no coincide con ningún caso
        }

        // Calcular el promedio en función del número de inputs con valor
        var AVG;
        if (count > 0) {
            AVG = (val + val2 + val3) / count;
        } else {
            AVG = 0;
        }

        var cont = 0;
        if (MMSM0 != 0) cont++;
        if (MMSM2 != 0) cont++;
        if (MMSM3 != 0) cont++;

        // Calcular el promedio en función del número de inputs con valor
        var MMSMavg;
        if (cont > 0) {
            MMSMavg = (MMSM0 + MMSM2 + MMSM3) / cont;
        } else {
            MMSMavg = 0;
        }

        let DTMScm3 = MMSMavg/AVG;
        let MUWScm3 = DTMScm3/(1+(WCSW/100));
        const inkNm3 = 9.80665;
        let MUWSm3 = inkNm3*DTMScm3;
        let DUWSm3 = inkNm3*MUWScm3;
        let MUWSmkg3 = MUWSm3 * 100;
        let DUWSkg3 = DUWSm3 * 100;

        // Mostrar los resultados en los inputs
        document.getElementById("16").value = val.toFixed(2);
        document.getElementById("17").value = val2.toFixed(2);
        document.getElementById("18").value = val3.toFixed(2);
        document.getElementById("19").value = AVG.toFixed(2);
        document.getElementById("20").value = MMSMavg.toFixed(2);
        document.getElementById("22").value = DTMScm3.toFixed(2);
        document.getElementById("23").value = MUWScm3.toFixed(2);
        document.getElementById("24").value = MUWSm3.toFixed(2);
        document.getElementById("25").value = DUWSm3.toFixed(2);
        document.getElementById("26").value = MUWSmkg3.toFixed(2);
        document.getElementById("27").value = DUWSkg3.toFixed(2);
    }
</script>


            <?php include_once('layouts/footer.php'); ?>