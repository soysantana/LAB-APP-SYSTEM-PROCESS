<?php
$page_title = 'PERMEABILITY OF GRANULAR SOILS (CONSTANT HEAD)';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/PermeabilityGranular.php'); 
}
$SearchTable = find_by_id('permeability_of_granular_soils', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
  <?php echo display_msg($msg); ?>
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Permeability of Granular Soils</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="" onsubmit="calcular()">

            <table class="table table-bordered">
                <thead>
                <tbody id="product_info"></tbody>
          </div>
          <div class="col-xs-4">
            <label>Standard</label>
            <select class="form-control" name="Standard">
                <option <?php if ($SearchTable['Standard'] == 'ASTM-D46') echo 'selected'; ?>>ASTM-D46</option>
            </select>
          </div>
          <div class="col-xs-4">
            <label>Method</label>
            <select class="form-control" type = "text" name="Method" id="">
              <option <?php if ($SearchTable['Method'] == 'A') echo 'selected'; ?>>A</option>
              <option <?php if ($SearchTable['Method'] == 'B') echo 'selected'; ?>>B</option>
              <option <?php if ($SearchTable['Method'] == 'C') echo 'selected'; ?>>C</option>
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
            <table class="table table-bordered" style="width: 90%;">
                <thead>
                    <caption>Geometry</caption>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col" style="font-size: 15px;text-align: center;padding: 1%;">Description of material use for test:</th>
                        <th scope="col" style="font-size: 15px;text-align: center;padding: 1%;">Diameter D (cm)</th>
                        <th scope="col" style="font-size: 15px;text-align: center;padding: 1%;">Area cm2</th>
                        <th scope="col" style="font-size: 15px;text-align: center;padding: 1%;">Lenght L (cm)</th>
                        <th scope="col" style="font-size: 15px;text-align: center;padding: 1%;">W max Kg/m2</th>
                        <th scope="col" style="font-size: 15px;text-align: center;padding: 1%;">W max Kg/m3</th>
                        <th scope="col" style="font-size: 15px;text-align: center;padding: 1%;">Height Before (H1)</th>
                        <th scope="col" style="font-size: 15px;text-align: center;padding: 1%;">Height After (H2)</th>
                        <th scope="col" style="font-size: 15px;text-align: center;padding: 1%;">Height Net (cm)</th>
                        <th scope="col" style="font-size: 15px;text-align: center;padding: 1%;">Void Ratio e</th>
                        <th scope="col" style="font-size: 15px;text-align: center;padding: 1%;">Relative Density RD (%)</th>
                    </tr>
                    <tr>
                        <td>
                        <input value="<?php echo ($SearchTable['Description_of_material_use_for_test']); ?>" type="text" style="border: none;background: transparent;padding: 20%;width: 100%;" size="4" id="" name="Descriptionofmaterialusefortest" oninput="calcular()">
                        </td>

                        <td><input value="<?php echo ($SearchTable['Diameter_D_cm']); ?>" type="text" style="border: none; background: transparent;" size="4" id="1" name="DiameterDcm" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Area_cm2']); ?>" type="text" style="border: none; background: transparent;" size="4" id="2" name="Areacm2" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Lenght_L_cm']); ?>" type="text" style="border: none; background: transparent;" size="4" id="3" name="LenghtLcm" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['W_Max_Kgm2']); ?>" type="text" style="border: none; background: transparent;" size="4" id="4" name="WMaxKgm2" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['W_Max_Kgm3']); ?>" type="text" style="border: none; background: transparent;" size="4" id="5" name="WMaxKgm3" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Height_Before_H1']); ?>" type="text" style="border: none; background: transparent;" size="4" id="6" name="HeightBeforeH1" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Height_After_H2']); ?>" type="text" style="border: none; background: transparent;" size="4" id="7" name="HeightAfterH2" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Height_Net_cm']); ?>" type="text" style="border: none; background: transparent;" size="4" id="8" name="HeightNetcm" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Void_Ratio_e']); ?>" type="text" style="border: none; background: transparent;" size="4" id="9" name="VoidRatioe" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Relative_Density_RD_Porce']); ?>" type="text" style="border: none; background: transparent;" size="4" id="10" name="RelativeDensityRDPorce" oninput="calcular()"></td>
                    </tr>
                </tbody>
            </table>
          </div>



          <div style="margin-left: 1%;">
            <table class="table table-bordered" style="width: 70%;">
                <thead>
                    <caption>Manometers</caption>
                </thead>
                <tbody>
                    <tr>
                        <th style="font-size: 15px; text-align: center;">Test #</th>
                        <th style="font-size: 15px; text-align: center;">H1</th>
                        <th style="font-size: 15px; text-align: center;">H2</th>
                        <th style="font-size: 15px; text-align: center;">Head, h, (cm)</th>
                        <th style="font-size: 15px; text-align: center;">Quantity of water discharged (cm3)</th>
                        <th style="font-size: 15px; text-align: center;">Total time of discharge (sec)</th>
                        <th style="font-size: 15px; text-align: center;">Q/At</th>
                        <th style="font-size: 15px; text-align: center;">h/L</th>
                        <th style="font-size: 15px; text-align: center;">Temperature (⁰C)</th>
                        <th style="font-size: 15px; text-align: center;">Coefficient of permeability (cm/seg)</th>
                    </tr>
                    <tr>
                        <th style="font-size: 15px; text-align: center;">1</th>
                        <td><input value="<?php echo ($SearchTable['H1_1']); ?>" type="text" style="border: none; background: transparent;" name="H11" size="4" id="31" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['H2_1']); ?>" type="text" style="border: none; background: transparent;" name="H21" size="4" id="32" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Head_h_cm_N1']); ?>" type="text" style="border: none; background: transparent;" name="HeadhcmN1" size="4" id="33" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Quantity_of_water_discharged_cm3_N1']); ?>" type="text" style="border: none; background: transparent;" name="Quantityofwaterdischargedcm3N1" size="4" id="34" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Total_time_of_discharge_sec_N1']); ?>" type="text" style="border: none; background: transparent;" name="TotaltimeofdischargesecN1" size="4" id="35" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Q_At_N1']); ?>" type="text" style="border: none; background: transparent;" name="QAtN1" size="4" id="36" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['h_L_N1']); ?>" type="text" style="border: none; background: transparent;" name="hLN1" size="4" id="37" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Temperature_C_N1']); ?>" type="text" style="border: none; background: transparent;" name="TemperatureCN1" size="4" id="38" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Coefficient_of_permeability_cm_seg_N1']); ?>" type="text" style="border: none; background: transparent;" name="CoefficientofpermeabilitycmsegN1" size="4" id="39" oninput="calcular()"></td>
                    </tr>
                    <tr>
                        <th style="font-size: 15px; text-align: center;">2</th>
                        <td><input value="<?php echo ($SearchTable['H1_2']); ?>" type="text" style="border: none; background: transparent;" name="H12" size="4" id="40" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['H2_2']); ?>" type="text" style="border: none; background: transparent;" name="H22" size="4" id="41" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Head_h_cm_N2']); ?>" type="text" style="border: none; background: transparent;" name="HeadhcmN2" size="4" id="42" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Quantity_of_water_discharged_cm3_N2']); ?>" type="text" style="border: none; background: transparent;" name="Quantityofwaterdischargedcm3N2" size="4" id="43" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Total_time_of_discharge_sec_N2']); ?>" type="text" style="border: none; background: transparent;" name="TotaltimeofdischargesecN2" size="4" id="44" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Q_At_N2']); ?>" type="text" style="border: none; background: transparent;" name="QAtN2" size="4" id="45" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['h_L_N2']); ?>" type="text" style="border: none; background: transparent;" name="hLN2" size="4" id="46" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Temperature_C_N2']); ?>" type="text" style="border: none; background: transparent;" name="TemperatureCN2" size="4" id="47" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Coefficient_of_permeability_cm_seg_N2']); ?>" type="text" style="border: none; background: transparent;" name="CoefficientofpermeabilitycmsegN2" size="4" id="48" oninput="calcular()"></td>
                    </tr>
                    <tr>
                        <th style="font-size: 15px; text-align: center;">3</th>
                        <td><input value="<?php echo ($SearchTable['H1_3']); ?>" type="text" style="border: none; background: transparent;" name="H13" size="4" id="49" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['H2_3']); ?>" type="text" style="border: none; background: transparent;" name="H23" size="4" id="50" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Head_h_cm_N3']); ?>" type="text" style="border: none; background: transparent;" name="HeadhcmN3" size="4" id="51" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Quantity_of_water_discharged_cm3_N3']); ?>" type="text" style="border: none; background: transparent;" name="Quantityofwaterdischargedcm3N3" size="4" id="52" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Total_time_of_discharge_sec_N3']); ?>" type="text" style="border: none; background: transparent;" name="TotaltimeofdischargesecN3" size="4" id="53" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Q_At_N3']); ?>" type="text" style="border: none; background: transparent;" name="QAtN3" size="4" id="54" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['h_L_N3']); ?>" type="text" style="border: none; background: transparent;" name="hLN3" size="4" id="55" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Temperature_C_N3']); ?>" type="text" style="border: none; background: transparent;" name="TemperatureCN3" size="4" id="56" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Coefficient_of_permeability_cm_seg_N3']); ?>" type="text" style="border: none; background: transparent;" name="CoefficientofpermeabilitycmsegN3" size="4" id="57" oninput="calcular()"></td>
                    </tr>
                    <tr>
                        <th style="font-size: 15px; text-align: center;">4</th>
                        <td><input value="<?php echo ($SearchTable['H1_4']); ?>" type="text" style="border: none; background: transparent;" name="H14" size="4" id="58" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['H2_4']); ?>" type="text" style="border: none; background: transparent;" name="H24" size="4" id="59" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Head_h_cm_N4']); ?>" type="text" style="border: none; background: transparent;" name="HeadhcmN4" size="4" id="60" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Quantity_of_water_discharged_cm3_N4']); ?>" type="text" style="border: none; background: transparent;" name="Quantityofwaterdischargedcm3N4" size="4" id="61" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Total_time_of_discharge_sec_N4']); ?>" type="text" style="border: none; background: transparent;" name="TotaltimeofdischargesecN4" size="4" id="62" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Q_At_N4']); ?>" type="text" style="border: none; background: transparent;" name="QAtN4" size="4" id="63" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['h_L_N4']); ?>" type="text" style="border: none; background: transparent;" name="hLN4" size="4" id="64" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Temperature_C_N4']); ?>" type="text" style="border: none; background: transparent;" name="TemperatureCN4" size="4" id="65" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Coefficient_of_permeability_cm_seg_N4']); ?>" type="text" style="border: none; background: transparent;" name="CoefficientofpermeabilitycmsegN4" size="4" id="66" oninput="calcular()"></td>
                    </tr>
                    <tr>
                        <th style="font-size: 15px; text-align: center;">5</th>
                        <td><input value="<?php echo ($SearchTable['H1_5']); ?>" type="text" style="border: none; background: transparent;" name="H15" size="4" id="67" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['H2_5']); ?>" type="text" style="border: none; background: transparent;" name="H25" size="4" id="68" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Head_h_cm_N5']); ?>" type="text" style="border: none; background: transparent;" name="HeadhcmN5" size="4" id="69" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Quantity_of_water_discharged_cm3_N5']); ?>" type="text" style="border: none; background: transparent;" name="Quantityofwaterdischargedcm3N5" size="4" id="70" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Total_time_of_discharge_sec_N5']); ?>" type="text" style="border: none; background: transparent;" name="TotaltimeofdischargesecN5" size="4" id="71" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Q_At_N5']); ?>" type="text" style="border: none; background: transparent;" name="QAtN5" size="4" id="72" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['h_L_N5']); ?>" type="text" style="border: none; background: transparent;" name="hLN5" size="4" id="73" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Temperature_C_N5']); ?>" type="text" style="border: none; background: transparent;" name="TemperatureCN5" size="4" id="74" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Coefficient_of_permeability_cm_seg_N5']); ?>" type="text" style="border: none; background: transparent;" name="CoefficientofpermeabilitycmsegN5" size="4" id="75" oninput="calcular()"></td>
                    </tr>
                    <tr>
                        <th style="font-size: 15px; text-align: center;">6</th>
                        <td><input value="<?php echo ($SearchTable['H1_6']); ?>" type="text" style="border: none; background: transparent;" name="H16" size="4" id="76" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['H2_6']); ?>" type="text" style="border: none; background: transparent;" name="H26" size="4" id="77" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Head_h_cm_N6']); ?>" type="text" style="border: none; background: transparent;" name="HeadhcmN6" size="4" id="78" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Quantity_of_water_discharged_cm3_N6']); ?>" type="text" style="border: none; background: transparent;" name="Quantityofwaterdischargedcm3N6" size="4" id="79" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Total_time_of_discharge_sec_N6']); ?>" type="text" style="border: none; background: transparent;" name="TotaltimeofdischargesecN6" size="4" id="80" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Q_At_N6']); ?>" type="text" style="border: none; background: transparent;" name="QAtN6" size="4" id="81" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['h_L_N6']); ?>" type="text" style="border: none; background: transparent;" name="hLN6" size="4" id="82" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Temperature_C_N6']); ?>" type="text" style="border: none; background: transparent;" name="TemperatureCN6" size="4" id="83" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Coefficient_of_permeability_cm_seg_N6']); ?>" type="text" style="border: none; background: transparent;" name="CoefficientofpermeabilitycmsegN6" size="4" id="84" oninput="calcular()"></td>
                    </tr>
                    <tr>
                        <th style="font-size: 15px; text-align: center;">7</th>
                        <td><input value="<?php echo ($SearchTable['H1_7']); ?>" type="text" style="border: none; background: transparent;" name="H17" size="4" id="85" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['H2_7']); ?>" type="text" style="border: none; background: transparent;" name="H27" size="4" id="86" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Head_h_cm_N7']); ?>" type="text" style="border: none; background: transparent;" name="HeadhcmN7" size="4" id="87" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Quantity_of_water_discharged_cm3_N7']); ?>" type="text" style="border: none; background: transparent;" name="Quantityofwaterdischargedcm3N7" size="4" id="88" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Total_time_of_discharge_sec_N7']); ?>" type="text" style="border: none; background: transparent;" name="TotaltimeofdischargesecN7" size="4" id="89" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Q_At_N7']); ?>" type="text" style="border: none; background: transparent;" name="QAtN7" size="4" id="90" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['h_L_N7']); ?>" type="text" style="border: none; background: transparent;" name="hLN7" size="4" id="91" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Temperature_C_N7']); ?>" type="text" style="border: none; background: transparent;" name="TemperatureCN7" size="4" id="92" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Coefficient_of_permeability_cm_seg_N7']); ?>" type="text" style="border: none; background: transparent;" name="CoefficientofpermeabilitycmsegN7" size="4" id="93" oninput="calcular()"></td>
                    </tr>
                    <tr>
                        <th style="font-size: 15px; text-align: center;">8</th>
                        <td><input value="<?php echo ($SearchTable['H1_8']); ?>" type="text" style="border: none; background: transparent;" name="H18" size="4" id="94" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['H2_8']); ?>" type="text" style="border: none; background: transparent;" name="H28" size="4" id="95" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Head_h_cm_N8']); ?>" type="text" style="border: none; background: transparent;" name="HeadhcmN8" size="4" id="96" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Quantity_of_water_discharged_cm3_N8']); ?>" type="text" style="border: none; background: transparent;" name="Quantityofwaterdischargedcm3N8" size="4" id="97" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Total_time_of_discharge_sec_N8']); ?>" type="text" style="border: none; background: transparent;" name="TotaltimeofdischargesecN8" size="4" id="98" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Q_At_N8']); ?>" type="text" style="border: none; background: transparent;" name="QAtN8" size="4" id="99" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['h_L_N8']); ?>" type="text" style="border: none; background: transparent;" name="hLN8" size="4" id="100" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Temperature_C_N8']); ?>" type="text" style="border: none; background: transparent;" name="TemperatureCN8" size="4" id="101" oninput="calcular()"></td>
                        <td><input value="<?php echo ($SearchTable['Coefficient_of_permeability_cm_seg_N8']); ?>" type="text" style="border: none; background: transparent;" name="CoefficientofpermeabilitycmsegN8" size="4" id="102" oninput="calcular()"></td>
                    </tr>
                </tbody>
            </table>
          </div>



          <div style="display: flex; justify-content: center;">
            <div id="permeability_granular" style="width: 1000px; height: 600px;"></div>
          </div>


          <script>
            function calcular() {

              // Manometers
              Dcm = parseFloat(document.getElementById("1").value);
              Lengcm = parseFloat(document.getElementById("3").value);
              Wmax2 = parseFloat(document.getElementById("4").value);
              Wmax3 = parseFloat(document.getElementById("5").value);
              HeigBegore = parseFloat(document.getElementById("6").value);
              HeigAfter = parseFloat(document.getElementById("7").value);

              H1 = parseFloat(document.getElementById("31").value);
              H2 = parseFloat(document.getElementById("40").value);
              H3 = parseFloat(document.getElementById("49").value);
              H4 = parseFloat(document.getElementById("58").value);
              H5 = parseFloat(document.getElementById("67").value);
              H6 = parseFloat(document.getElementById("76").value);
              H7 = parseFloat(document.getElementById("85").value);
              H8 = parseFloat(document.getElementById("94").value);

              HH1 = parseFloat(document.getElementById("32").value);
              HH2 = parseFloat(document.getElementById("41").value);
              HH3 = parseFloat(document.getElementById("50").value);
              HH4 = parseFloat(document.getElementById("59").value);
              HH5 = parseFloat(document.getElementById("68").value);
              HH6 = parseFloat(document.getElementById("77").value);
              HH7 = parseFloat(document.getElementById("86").value);
              HH8 = parseFloat(document.getElementById("95").value);

              Qcm1 = parseFloat(document.getElementById("34").value);
              Qcm2 = parseFloat(document.getElementById("43").value);
              Qcm3 = parseFloat(document.getElementById("52").value);
              Qcm4 = parseFloat(document.getElementById("61").value);
              Qcm5 = parseFloat(document.getElementById("70").value);
              Qcm6 = parseFloat(document.getElementById("79").value);
              Qcm7 = parseFloat(document.getElementById("88").value);
              Qcm8 = parseFloat(document.getElementById("97").value);

              Tsec1 = parseFloat(document.getElementById("35").value);
              Tsec2 = parseFloat(document.getElementById("44").value);
              Tsec3 = parseFloat(document.getElementById("53").value);
              Tsec4 = parseFloat(document.getElementById("62").value);
              Tsec5 = parseFloat(document.getElementById("71").value);
              Tsec6 = parseFloat(document.getElementById("80").value);
              Tsec7 = parseFloat(document.getElementById("89").value);
              Tsec8 = parseFloat(document.getElementById("98").value);


              // Calculo Manometers
              var HeigNet = HeigBegore - HeigAfter;
              var RelDensity = (Wmax2*(1785-Wmax3))/(1785*(Wmax2-Wmax3))*100;
              var Areacm = +(Math.pow(Dcm, 2))*Math.PI/4;
              
              var HeadCM1 = Math.abs(H1 - HH1);
              var HeadCM2 = Math.abs(H2 - HH2);
              var HeadCM3 = Math.abs(H3 - HH3);
              var HeadCM4 = Math.abs(H4 - HH4);
              var HeadCM5 = Math.abs(H5 - HH5);
              var HeadCM6 = Math.abs(H6 - HH6);
              var HeadCM7 = Math.abs(H7 - HH7);
              var HeadCM8 = Math.abs(H8 - HH8);

              var Qat1 = + Qcm1 / (Areacm * Tsec1);
              var Qat2 = + Qcm2 / (Areacm * Tsec2);
              var Qat3 = + Qcm3 / (Areacm * Tsec3);
              var Qat4 = + Qcm4 / (Areacm * Tsec4);
              var Qat5 = + Qcm5 / (Areacm * Tsec5);
              var Qat6 = + Qcm6 / (Areacm * Tsec6);
              var Qat7 = + Qcm7 / (Areacm * Tsec7);
              var Qat8 = + Qcm8 / (Areacm * Tsec8);

              var Hl1 = + HeadCM1 / Lengcm;
              var Hl2 = + HeadCM2 / Lengcm;
              var Hl3 = + HeadCM3 / Lengcm;
              var Hl4 = + HeadCM4 / Lengcm;
              var Hl5 = + HeadCM5 / Lengcm;
              var Hl6 = + HeadCM6 / Lengcm;
              var Hl7 = + HeadCM7 / Lengcm;
              var Hl8 = + HeadCM8 / Lengcm;

              var KcmSeg1 = + Qat1 / Hl1;
              var KcmSeg2 = + Qat2 / Hl2;
              var KcmSeg3 = + Qat3 / Hl3;
              var KcmSeg4 = + Qat4 / Hl4;
              var KcmSeg5 = + Qat5 / Hl5;
              var KcmSeg6 = + Qat6 / Hl6;
              var KcmSeg7 = + Qat7 / Hl7;
              var KcmSeg8 = + Qat8 / Hl8;

              // Resultado Manometers
              document.getElementById("33").value = HeadCM1.toFixed(1);
              document.getElementById("42").value = HeadCM2.toFixed(1);
              document.getElementById("51").value = HeadCM3.toFixed(1);
              document.getElementById("60").value = HeadCM4.toFixed(1);
              document.getElementById("69").value = HeadCM5.toFixed(1);
              document.getElementById("78").value = HeadCM6.toFixed(1);
              document.getElementById("87").value = HeadCM7.toFixed(1);
              document.getElementById("96").value = HeadCM8.toFixed(1);

              document.getElementById("36").value = Qat1.toFixed(4);
              document.getElementById("45").value = Qat2.toFixed(4);
              document.getElementById("54").value = Qat3.toFixed(4);
              document.getElementById("63").value = Qat4.toFixed(4);
              document.getElementById("72").value = Qat5.toFixed(4);
              document.getElementById("81").value = Qat6.toFixed(4);
              document.getElementById("90").value = Qat7.toFixed(4);
              document.getElementById("99").value = Qat8.toFixed(4);

              document.getElementById("37").value = Hl1.toFixed(5);
              document.getElementById("46").value = Hl2.toFixed(5);
              document.getElementById("55").value = Hl3.toFixed(5);
              document.getElementById("64").value = Hl4.toFixed(5);
              document.getElementById("73").value = Hl5.toFixed(5);
              document.getElementById("82").value = Hl6.toFixed(5);
              document.getElementById("91").value = Hl7.toFixed(5);
              document.getElementById("100").value = Hl8.toFixed(5);

              document.getElementById("39").value = KcmSeg1.toFixed(1);
              document.getElementById("48").value = KcmSeg2.toFixed(1);
              document.getElementById("57").value = KcmSeg3.toFixed(1);
              document.getElementById("66").value = KcmSeg4.toFixed(1);
              document.getElementById("75").value = KcmSeg5.toFixed(1);
              document.getElementById("84").value = KcmSeg6.toFixed(1);
              document.getElementById("93").value = KcmSeg7.toFixed(1);
              document.getElementById("102").value = KcmSeg8.toFixed(1);

              document.getElementById("8").value = HeigNet.toFixed(1);
              document.getElementById("10").value = RelDensity.toFixed(1);
              document.getElementById("2").value = Areacm.toFixed(1);
              
            }

          </script>


<script>
  function enviarData(event) {
    event.preventDefault()
    $.ajax({
      url: "libs/js/perme_granular.js",
      type: "POST",
      data: $("#47").serialize(),
      success: function(data) {
        $("#resultado").html(data);
      }
    });
  }
</script>


<button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
<button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
<div class="btn-group dropup" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Generar PDF
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Contrucion</a></li>
                    <li><a href="PDF/perme_Rev_0.php?id=<?php echo intval($SearchTable['id']); ?>">Investigacion</a></li>
                    </ul>
                    </div>
<button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>
<button type="submit" name="grafico" class="btn btn-primary" onclick="enviarData(event)">Graficar</button>


<?php include_once('layouts/footer.php'); ?>