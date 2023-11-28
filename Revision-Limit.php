<?php
$page_title = 'Atterberg limit  Calculation ';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/AtterbergLimit.php'); 
}
$SearchTable = find_by_id('atterberg_limit', (int)$_GET['id']);
?>
<script src="https://cdn.jsdelivr.net/npm/regression@2.0.1/dist/regression.min.js"></script>
<?php include_once('layouts/header.php'); ?>


<div class="row">
  <div class="col-md-12">
  <?php echo display_msg($msg); ?>
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Atterberg Limit Calculation</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="" onsubmit="calcular()">
          <table class="table table-bordered">
            <thead>
            <tbody id="product_info"> </tbody>
            </thead>
          </table>
      </div>
      <div class="col-xs-4">
        <label>Standard</label>
        <select class="form-control" name="standard">
        <option <?php if ($SearchTable['Standard'] == 'Choose...') echo 'selected'; ?>>Choose...</option>
        <option <?php if ($SearchTable['Standard'] == 'ASTM-D4318') echo 'selected'; ?>>ASTM-D4318</option>
        </select>
      </div>
      <div class="col-xs-4">
        <label>Preparation Method</label>
        <select class="form-control" name="methodpre">
            <option <?php if ($SearchTable['Preparation_Method'] == 'Oven_Dried') echo 'selected'; ?>>Oven_Dried</option>
            <option <?php if ($SearchTable['Preparation_Method'] == 'Air_Dried') echo 'selected'; ?>>Air_Dried</option>
            <option <?php if ($SearchTable['Preparation_Method'] == 'Microwave_Dried') echo 'selected'; ?>>Microwave_Dried</option>
            <option <?php if ($SearchTable['Preparation_Method'] == 'Wet') echo 'selected'; ?>>Wet</option>
        </select>
      </div>

      <div class="col-xs-4">
        <label>Split Method</label>
        <select class="form-control" name="split">
            <option <?php if ($SearchTable['Split_Method'] == 'Manual') echo 'selected'; ?>>Manual</option>
            <option <?php if ($SearchTable['Split_Method'] == 'Mechanical') echo 'selected'; ?>>Mechanical</option>
        </select>
      </div>

      <div class="col-xs-4">
        <label>Natural Mc (%):</label>
        <input class="form-control" name="natmc" value="<?php echo ($SearchTable['Nat_Mc']); ?>" type="text" id="1">
      </div>

      <div class="col-xs-4">
        <label>Comments</label>
        <textarea class="form-control" name="comments"><?php echo ($SearchTable['Comments']); ?></textarea>
      </div>

      <div class="col-xs-4">
        <label>Technician</label>
        <input class="form-control" name="technician" value="<?php echo ($SearchTable['Technician']); ?>" type="text">
      </div>

      <div class="col-xs-4">
        <label>Test Start Date</label>
        <input class="form-control" name="test_start_date" value="<?php echo ($SearchTable['Test_Start_Date']); ?>" type="date">
      </div>


      <div class="panel-body"></div>


      <div style="display: flex; flex-direction: row; justify-content: space-between;">
        <table class="table table-bordered border-primary" style="width:450px;">
          <thead>
          </thead>
          <caption style="font-weight: bold;">Liquid Limit</caption>
          <tr>
            <th scope="col">Trial Number</th>
            <th scope="col" style="text-align: center;">1</th>
            <th scope="col" style="text-align: center;">2</th>
            <th scope="col" style="text-align: center;">3</th>
          </tr>

          <tbody>
            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">No. of Blows</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="2" name="LLBlows1" value="<?php echo ($SearchTable['LL_Blows_1']); ?>" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="3" name="LLBlows2" value="<?php echo ($SearchTable['LL_Blows_2']); ?>" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="4" name="LLBlows3" value="<?php echo ($SearchTable['LL_Blows_3']); ?>" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Container</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="5" value="<?php echo ($SearchTable['LL_Container_1']); ?>" name="LLContainer1"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="6" value="<?php echo ($SearchTable['LL_Container_2']); ?>" name="LLContainer2"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="7" value="<?php echo ($SearchTable['LL_Container_3']); ?>" name="LLContainer3"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Wet Soil + Tare (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="8" value="<?php echo ($SearchTable['LL_Wet_Soil_1']); ?>" name="LLWetSoil1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="9" value="<?php echo ($SearchTable['LL_Wet_Soil_2']); ?>" name="LLWetSoil2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="10" value="<?php echo ($SearchTable['LL_Wet_Soil_3']); ?>" name="LLWetSoil3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Dry Soil + Tare (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="11" value="<?php echo ($SearchTable['LL_Dry_soil_tare1']); ?>" name="LLDrysoiltare1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="12" value="<?php echo ($SearchTable['LL_Dry_soil_tare2']); ?>" name="LLDrysoiltare2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="13" value="<?php echo ($SearchTable['LL_Dry_soil_tare3']); ?>" name="LLDrysoiltare3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Water (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="14" value="<?php echo ($SearchTable['LL_Water_1']); ?>" name="LLWater1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="15" value="<?php echo ($SearchTable['LL_Water_2']); ?>" name="LLWater2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="16" value="<?php echo ($SearchTable['LL_Water_3']); ?>" name="LLWater3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row"> Tare (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="17" value="<?php echo ($SearchTable['LL_Tare_1']); ?>" name="LLTare1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="18" value="<?php echo ($SearchTable['LL_Tare_2']); ?>" name="LLTare2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="19" value="<?php echo ($SearchTable['LL_Tare_3']); ?>" name="LLTare3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Dry Soil (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="20" value="<?php echo ($SearchTable['LL_Wt_Dry_Soil_1']); ?>" name="LLWtDrySoil1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="21" value="<?php echo ($SearchTable['LL_Wt_Dry_Soil_2']); ?>" name="LLWtDrySoil2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="22" value="<?php echo ($SearchTable['LL_Wt_Dry_Soil_3']); ?>" name="LLWtDrySoil3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content (%) </th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="23" value="<?php echo ($SearchTable['LL_MC_Porce_1']); ?>" name="LLMCPorce1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="24" value="<?php echo ($SearchTable['LL_MC_Porce_2']); ?>" name="LLMCPorce2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" id="25" value="<?php echo ($SearchTable['LL_MC_Porce_3']); ?>" name="LLMCPorce3" oninput="calcular()"></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div id="chart-container" style="margin-top: -28%; margin-left: 30%; height: 450px; width: 730px;"></div>

      <div style="display: flex; flex-wrap: wrap; margin-left: 1%;">
        <table class="table table-bordered border-primary" style=" width:450px;">
          <thead>
          </thead>
          <caption style="font-weight: bold;">Plastic Limit</caption>
          <thead>
            <tr>
              <th scope="col">Trial Number</th>
              <th scope="col" style="text-align: center;">1</th>
              <th scope="col" style="text-align: center;">2</th>
              <th scope="col" style="text-align: center;">3</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Container</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Container_1']); ?>" id="26" name="PLContainer1"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Container_2']); ?>" id="27" name="PLContainer2"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Container_3']); ?>" id="28" name="PLContainer3"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Wet Soil + Tare (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Wet_Soil_1']); ?>" id="29" name="PLWetSoil1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Wet_Soil_2']); ?>" id="30" name="PLWetSoil2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Wet_Soil_3']); ?>" id="31" name="PLWetSoil3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Dry Soil + Tare (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Dry_soil_tare1']); ?>" id="32" name="PLDrysoiltare1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Dry_soil_tare2']); ?>" id="33" name="PLDrysoiltare2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Dry_soil_tare3']); ?>" id="34" name="PLDrysoiltare3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Water (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Water_1']); ?>" id="35" name="PLWater1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Water_2']); ?>" id="36" name="PLWater2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Water_3']); ?>" id="37" name="PLWater3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row"> Tare (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Tare_1']); ?>" id="38" name="PLTare1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Tare_2']); ?>" id="39" name="PLTare2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Tare_3']); ?>" id="40" name="PLTare3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Dry Soil (gr)</th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Wt_Dry_Soil_1']); ?>" id="41" name="PLWtDrySoil1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Wt_Dry_Soil_2']); ?>" id="42" name="PLWtDrySoil2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_Wt_Dry_Soil_3']); ?>" id="43" name="PLWtDrySoil3" oninput="calcular()"></td>
            </tr>

            <tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content (%) </th>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_MC_Porce_1']); ?>" id="44" name="PLMCPorce1" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_MC_Porce_2']); ?>" id="45" name="PLMCPorce2" oninput="calcular()"></td>
              <td><input type="text" style="border: none;" size="4" style="background: transparent;" value="<?php echo ($SearchTable['PL_MC_Porce_3']); ?>" id="46" name="PLMCPorce3" oninput="calcular()"></td>
            </tr>

            
            <tr>
              <th style="font-size: 14px;" scope="row">Avg. Moisture Content%</th>
              <td scope="row" colspan="3"><input type="text" style="border: none; text-align: center;" size="25" style="background: transparent;" value="<?php echo ($SearchTable['PL_Avg_Mc']); ?>" id="52" name="PLAvgMc" oninput="calcular()"></td>
            </tr>
        </table>
      </div>

      <div id="plasticity-chart" style="margin-top: -25%; margin-left: 30%; height: 450px; width: 730px;"></div>

        <div style="display: flex; flex-direction: row-reverse; margin-top: -55%; margin-bottom: 35%;">
          <table class="table table-bordered border-primary" style="width: 350px;">
            <thead>

              <caption>Summary Atteberg Limit Parameter</caption>
            </thead>
            <tbody>
              <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Liquid Limit (%):</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"  value="<?php echo ($SearchTable['Liquid_Limit_Porce']); ?>" id="47" name="LLPorce" oninput="calcular()"></td>
              </tr>

              <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Plastic Limit (%):</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"  value="<?php echo ($SearchTable['Plastic_Limit_Porce']); ?>" id="48" name="PLPorce" oninput="calcular()"></td>
              </tr>

              <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Plasticity Index (%):</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"  value="<?php echo ($SearchTable['Plasticity_Index_Porce']); ?>" id="49" name="PLIndexPorce" oninput="calcular()"></td>

              <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Liquidity Index (%):</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"  value="<?php echo ($SearchTable['Liquidity_Index_Porce']); ?>" id="50" name="LLIndexPorce" oninput="calcular()"></td>
              </tr>
              <tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Soil Classification as per Unified Soil Classification System,ASTM designation D2487-06</th>
                <td><input type="text" style="border: none;" size="6" style="background: transparent;"  value="<?php echo ($SearchTable['Classification']); ?>" id="51" name="classification" oninput="calcular()"></td>
               
              </tr>
             
              <div>
              
              </div>
              <td><input type="hidden"  style="border: none;" size="4" style="background: transparent;" id="51.1" name="rsq" oninput="calcular()"></td>

              <script>
                function calcular() {
                  // Obtener los valores del liquid limit
                  var Nmc = parseFloat(document.getElementById("1").value);
                  var Lwst1 = parseFloat(document.getElementById("8").value);
                  var Lwst2 = parseFloat(document.getElementById("9").value);
                  var Lwst3 = parseFloat(document.getElementById("10").value);

                  var Ldst1 = parseFloat(document.getElementById("11").value);
                  var Ldst2 = parseFloat(document.getElementById("12").value);
                  var Ldst3 = parseFloat(document.getElementById("13").value);

                  var Lw1 = parseFloat(document.getElementById("14").value);
                  var Lw2 = parseFloat(document.getElementById("15").value);
                  var Lw3 = parseFloat(document.getElementById("16").value);

                  var Lt1 = parseFloat(document.getElementById("17").value);
                  var Lt2 = parseFloat(document.getElementById("18").value);
                  var Lt3 = parseFloat(document.getElementById("19").value);

                  var Lds1 = parseFloat(document.getElementById("20").value);
                  var Lds2 = parseFloat(document.getElementById("21").value);
                  var Lds3 = parseFloat(document.getElementById("22").value);

                  var Pwst1 = parseFloat(document.getElementById("29").value);
                  var Pwst2 = parseFloat(document.getElementById("30").value);
                  var Pwst3 = parseFloat(document.getElementById("31").value);

                  var Pdst1 = parseFloat(document.getElementById("32").value);
                  var Pdst2 = parseFloat(document.getElementById("33").value);
                  var Pdst3 = parseFloat(document.getElementById("34").value);

                  var Pw1 = parseFloat(document.getElementById("35").value);
                  var Pw2 = parseFloat(document.getElementById("36").value);
                  var Pw3 = parseFloat(document.getElementById("37").value);

                  var Pt1 = parseFloat(document.getElementById("38").value);
                  var Pt2 = parseFloat(document.getElementById("39").value);
                  var Pt3 = parseFloat(document.getElementById("40").value);

                  var Pds1 = parseFloat(document.getElementById("41").value);
                  var Pds2 = parseFloat(document.getElementById("42").value);
                  var Pds3 = parseFloat(document.getElementById("43").value);

                  var PLL = parseFloat(document.getElementById("48").value);
                  var PLP = parseFloat(document.getElementById("49").value);
                  var IP = parseFloat(document.getElementById("50").value);

                  var golpe1 = parseFloat(document.getElementById("2").value);
                  var golpe2 = parseFloat(document.getElementById("3").value);
                  var golpe3 = parseFloat(document.getElementById("4").value);



                  //calcular
                  var Ww1 = Lwst1 - Ldst1;
                  var Ww2 = Lwst2 - Ldst2;
                  var Ww3 = Lwst3 - Ldst3;

                  var Ds1 = Ldst1 - Lt1;
                  var Ds2 = Ldst2 - Lt2;
                  var Ds3 = Ldst3 - Lt3;

                  var Lmc1 = (Ww1 / Ds1) * 100;
                  var Lmc2 = (Ww2 / Ds2) * 100;
                  var Lmc3 = (Ww3 / Ds3) * 100;

                  var Ww4 = Pwst1 - Pdst1;
                  var Ww5 = Pwst2 - Pdst2;
                  var Ww6 = Pwst3 - Pdst3;

                  var Ds4 = Pdst1 - Pt1;
                  var Ds5 = Pdst2 - Pt2;
                  var Ds6 = Pdst3 - Pt3;

                  var Lmc4 = (Ww4 / Ds4) * 100;
                  var Lmc5 = (Ww5 / Ds5) * 100;
                  var Lmc6 = (Ww6 / Ds6) * 100;
                  var golpes = [golpe1, golpe2, golpe3];
                  var mc = [Lmc1, Lmc2, Lmc3];

                  
                  var x = 25;

                  // Crear un conjunto de datos
                  var data = [];
                  for (var i = 0; i < golpes.length; i++) {
                      data.push([Math.log(golpes[i]), mc[i]]);
                    }

                  // Realizar la regresión lineal
                  var result = regression.linear(data);

                  // Obtener los coeficientes c y b
                  var c = result.equation[0]; // Pendiente
                  var b = result.equation[1]; // Intercepto

                  // Calcular R^2
                  var rSquared = result.r2;

                  // Calcular PLL
                  var lnX = Math.log(x);
                  var PLL = c * lnX + b;



                 var valores = [Lmc4, Lmc5, Lmc6];
                 var valoresValidos = valores.filter(valor => !isNaN(valor));

                  var PLP = valoresValidos.reduce((total, valor) => total + valor, 0) / valoresValidos.length;
                  var IP = PLL - PLP;
                  var LI = ((Nmc - PLP) / IP)||0;

                  
                  function clasificarsuelo(PLL, IP) {
    var resultado = "Error"; // Valor predeterminado en caso de valores no válidos

    if (!isNaN(PLL) && !isNaN(IP)) {
        if (PLL < 50) {
            if (IP > 7 && (0.73 * (PLL - 20)) <= IP) {
                resultado = "CL or OL";
            } else if (IP >= 4 && (0.73 * (PLL - 20)) <= IP) {
                resultado = "CL or ML";
            } else if (IP < 4 || (0.73 * (PLL - 20)) > IP) {
                resultado = "ML or OL";
            }
        } else {
            if ((0.73 * (PLL - 20)) <= IP) {
                resultado = "CH or OH";
            } else {
                resultado = "MH or OH";
            }
        }
    }

    return resultado;
}






                  // Pasar el resultado al input
                  document.getElementById("14").value = Ww1.toFixed(2);
                  document.getElementById("15").value = Ww2.toFixed(2);
                  document.getElementById("16").value = Ww3.toFixed(2);

                  document.getElementById("20").value = Ds1.toFixed(2);
                  document.getElementById("21").value = Ds2.toFixed(2);
                  document.getElementById("22").value = Ds3.toFixed(2);

                  document.getElementById("23").value = Lmc1.toFixed(2);
                  document.getElementById("24").value = Lmc2.toFixed(2);
                  document.getElementById("25").value = Lmc3.toFixed(2);

                  document.getElementById("35").value = Ww4.toFixed(2);
                  document.getElementById("36").value = Ww5.toFixed(2);
                  document.getElementById("37").value = Ww6.toFixed(2);

                  document.getElementById("41").value = Ds4.toFixed(2);
                  document.getElementById("42").value = Ds5.toFixed(2);
                  document.getElementById("43").value = Ds6.toFixed(2);

                  document.getElementById("44").value = Lmc4.toFixed(2);
                  document.getElementById("45").value = Lmc5.toFixed(2);
                  document.getElementById("46").value = Lmc6.toFixed(2);

                  document.getElementById("47").value = PLL.toFixed(0);
                  document.getElementById("48").value = PLP.toFixed(0);
                  document.getElementById("49").value = IP.toFixed(0);
                  document.getElementById("50").value = LI.toFixed(4);
                  document.getElementById("51").value = clasificarsuelo(PLL, IP);
                  document.getElementById("51.1").value = rSquared.toFixed(7);


                  //average
                  
                  document.getElementById("52").value = PLP.toFixed(2);

                }
              </script>
        </div>
      </div>
    </div>
    </thead>
    
    </table>


  
  

  <script>
    function enviarData(event) {
      event.preventDefault()
      $.ajax({
        url: "libs/js/liquid_limit_plot.js",
        type: "POST",
        data: $("#47").serialize(),
        success: function(data) {
          $("#resultado").html(data);
        }
      });
    }
  </script>

<script>
    function enviarData2(event) {
      $.ajax({
        url: "libs/js/plasticity_chart.js",
        type: "POST",
        data: $("#23").serialize(),
        success: function(data) {
          $("#resultado").html(data);
        }
      });
    }
  </script>

<script>
    $(pag).ready(function() {
        var refrescarid = setInterval(function() {
            $("#23").load("Al.php")
            .error(function() { alert("Error"); });
        }, 1000); // Tiempo
        $.ajaxSetup({ cache: false });              
    });
</script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  </div>
  <button type="submit" name="repetir_muestra" class="btn btn-warning">Enviar ensayo repetir</button>
  
  <div class="btn-group dropup" role="group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
      Generar PDF
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="PDF/Barrick-Limit-Rev2.php?id=<?php echo intval($SearchTable['id']); ?>">Contrucion</a></li>
      <li><a href="PDF/Atterberg_Limit_Rev_5.php?id=<?php echo intval($SearchTable['id']); ?>">Investigacion</a></li>
    </ul>
  </div>

   <button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>
  <button type="submit" name="grafico" class="btn btn-primary" onclick="enviarData(event),enviarData2(event) ">Graficar</button>
  </form>

</div>
</div>
</div>
</div>



<?php include_once('layouts/footer.php'); ?>