<?php
$page_title = 'Pinhole Test';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/Pinhole.php'); 
}

$PH = find_by_id('pinhole', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
  <?php echo display_msg($msg); ?>  
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Pinhole Test Calculation</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="Revision-PH.php?id=<?php echo (int)$PH['id']; ?>" onsubmit="calcular()">

            <table class="table table-bordered">
                <thead>
                <tbody id="product_info"></tbody>
          </div>
          <div class="col-xs-4">
            <label>Standard</label>
            <select class="form-control" name="Standard">
            <option <?php if ($PH['Standard'] == 'ASTM-D46') echo 'selected'; ?>>ASTM-D46</option>
            </select>
          </div>
          <div class="col-xs-4">
            <label>Method</label>
            <select class="form-control" type = "text" name="Method" id="">
            <option <?php if ($PH['Method'] == 'A') echo 'selected'; ?>>A</option>
            <option <?php if ($PH['Method'] == 'B') echo 'selected'; ?>>B</option>
            <option <?php if ($PH['Method'] == 'C') echo 'selected'; ?>>C</option>
            </select>
          </div>
    
          <div class="col-xs-4">
            <label>Comments</label>
            <textarea class="form-control" name="Comments"><?php echo ($PH['Comments']); ?></textarea>
          </div>
    
          <div class="col-xs-4">
            <label>Technician</label>
            <input class="form-control" name="Technician" value="<?php echo ($PH['Technician']); ?>" type="text">
          </div>
    
          <div class="col-xs-4">
            <label>Test Start Date</label>
            <input class="form-control" name="TestStartDate" value="<?php echo ($PH['Test_Start_Date']); ?>" type="date">
          </div>

          <div class="panel-body">
            <div class="col-md-12">
            </div>
          </div>
          
          <div style="display: flex; flex-direction: row; justify-content: space-between;">
            <table class="table table-bordered border-primary" style="width:450px;">
              <thead>
              </thead>
              <caption>Testing Information</caption>
              <tbody>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content Before Test</th>
                  <td><input value="<?php echo ($PH['Moisture_Content_Before_Test_MC_Porce']); ?>" type="text" style="border: none;" size="10" style="background: transparent;" name="MoistureContentBeforeTestMCPorce" id="2" oninput="calcular()"></td>
                </tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Specific Gravity (Estimated or Measured)</th>
                  <td><input value="<?php echo ($PH['Specific_Gravity_Estimated_or_Measured']); ?>" type="text" style="border: none;" size="10" style="background: transparent;" name="SpecificGravityEstimatedorMeasured" id="3" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Max Dry Density (g/cm3)</th>
                <td><input value="<?php echo ($PH['Max_Dry_Density_g_cm3']); ?>" type="text" style="border: none;" size="10" style="background: transparent;" name="MaxDryDensitygcm3" id="4" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Optimum Moisture Content (%)</th>
                <td><input value="<?php echo ($PH['Optimum_Moisture_Content_Porce']); ?>" type="text" style="border: none;" size="10" style="background: transparent;" name="OptimumMoistureContentPorce" id="5" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Wet Soil + Mold (gr)</th>
                <td><input value="<?php echo ($PH['Wt_Wet_Soil_Mold_gr']); ?>" type="text" style="border: none;" size="10" style="background: transparent;" name="WtWetSoilMoldgr" id="6" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Mold (gr)</th>
                <td><input value="<?php echo ($PH['Wt_Mold_gr']); ?>" type="text" style="border: none;" size="10" style="background: transparent;" name="WtMoldgr" id="7" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wt Wet Soil (gr)</th>
                <td><input value="<?php echo ($PH['Wt_Wet_Soil_gr']); ?>" type="text" style="border: none;" size="10" style="background: transparent;" name="WtWetSoilgr" id="8" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Logintud Del Specimen (cm)</th>
              <td><input value="<?php echo ($PH['Logintud_Del_Specimen_cm']); ?>" type="text" style="border: none;" size="10" style="background: transparent;" name="LogintudDelSpecimencm" id="9" oninput="calcular()"></td>
            </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Vol Specimen (cm3)</th>
                <td><input value="<?php echo ($PH['Vol_Specimen_cm3']); ?>" type="text" style="border: none;" size="10" style="background: transparent;" name="VolSpecimencm3" id="10" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wet Density (g/cm3)</th>
                <td><input value="<?php echo ($PH['Wet_Density_gcm3']); ?>" type="text" style="border: none;" size="10" style="background: transparent;" name="WetDensitygcm3" id="11" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Dry Density (g/cm3)</th>
                <td><input value="<?php echo ($PH['Dry_Density_gcm3']); ?>" type="text" style="border: none;" size="10" style="background: transparent;" name="DryDensitygcm3" id="12" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">% Compaction</th>
                <td><input value="<?php echo ($PH['Porce_Compaction']); ?>" type="text" style="border: none;" size="10" style="background: transparent;" name="PorceCompaction" id="13" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content after test %</th>
                <td><input value="<?php echo ($PH['Moisture_Content_After_Test_Porce']); ?>" type="text" style="border: none;" size="10" style="background: transparent;" name="MoistureContentAfterTestPorce" id="14" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Wire Punch Diameter (mm)</th>
                <td><input value="<?php echo ($PH['Wire_Punch_Diameter_mm']); ?>" type="text" style="border: none;" size="10" style="background: transparent;" name="WirePunchDiametermm" id="15" oninput="calcular()"></td>
              </tr>
              <th scope="col" style="text-align: center;">Compaction Type</th>
              <th scope="col" style="text-align: center;">Harvard miniature compaction Apparatus</th>
            </tbody>
            </table>
            </div>
            
            <div style="display: flex; flex-direction: row-reverse; justify-content: space-around; margin-left: 10%; margin-top: -750px;">
            <table class="table table-bordered border-primary" style="width:450px;">
              <thead>
              </thead>
              <caption></caption>
              <th style="font-size: 17px; text-align: center;" scope="row" colspan="9">Moisture Content before test MC(%)</th>
              <tbody>
                <tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Trial No</th>
                  <td><input disabled type="text" value="1" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                </tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Name</th>
                  <td><input value="<?php echo ($PH['Tare_Name_Mc_Before']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TareNameMcBefore" id="" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Oven Temperature (°C)</th>
                <td><input value="<?php echo ($PH['Oven_Temperature_Mc_Before']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="OvenTemperatureMcBefore" id="" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Wet Soil (g)</th>
                <td><input value="<?php echo ($PH['Tare_Plus_Wet_Soil_g_Mc_Before']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TarePlusWetSoilgMcBefore" id="16" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Dry Soil (g)</th>
                <td><input value="<?php echo ($PH['Tare_Plus_Dry_Soil_g_Mc_Before']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TarePlusDrySoilgMcBefore" id="17" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Water, Ww (g)</th>
                <td><input value="<?php echo ($PH['Water_Ww_g_Mc_Before']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="WaterWwgMcBefore" id="18" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare (g)</th>
                <td><input value="<?php echo ($PH['Tare_g_Mc_Before']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TaregMcBefore" id="19" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Dry Soil, Ws (g)</th>
                <td><input value="<?php echo ($PH['Dry_Soil_Ws_g_Mc_Before']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="DrySoilWsgMcBefore" id="20" oninput="calcular()"></td>
              </tr>
              <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content (%)</th>
                <td><input value="<?php echo ($PH['Moisture_Content_Porce_Mc_Before']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="MoistureContentPorceMcBefore" id="21" oninput="calcular()"></td>
              </tr>
              </tbody>
            </table>
            </div>

            <div style="display: flex; flex-direction: row-reverse; justify-content: space-around; margin-left: 10%;">
              <table class="table table-bordered border-primary" style="width:450px;">
                <thead>
                </thead>
                <caption></caption>
                <th style="font-size: 17px; text-align: center;" scope="row" colspan="9">Moisture Content after test, %</th>
                <tbody>
                  <tr>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Trial No</th>
                    <td><input disabled type="text" value="2" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
                  </tr>
                    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Name</th>
                    <td><input value="<?php echo ($PH['Tare_Name_Mc_After']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TareNameMcAfter" id="" oninput="calcular()"></td>
                  </tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Oven Temperature (°C)</th>
                  <td><input value="<?php echo ($PH['Oven_Temperature_Mc_After']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="OvenTemperatureMcAfter" id="" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Wet Soil (g)</th>
                  <td><input value="<?php echo ($PH['Tare_Plus_Wet_Soil_g_Mc_After']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TarePlusWetSoilgMcAfter" id="22" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Dry Soil (g)</th>
                  <td><input value="<?php echo ($PH['Tare_Plus_Dry_Soil_g_Mc_After']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TarePlusDrySoilgMcAfter" id="23" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Water, Ww (g)</th>
                  <td><input value="<?php echo ($PH['Water_Ww_g_Mc_After']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="WaterWwgMcAfter" id="24" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare (g)</th>
                  <td><input value="<?php echo ($PH['Tare_g_Mc_After']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TaregMcAfter" id="25" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Dry Soil, Ws (g)</th>
                  <td><input value="<?php echo ($PH['Dry_Soil_Ws_g_Mc_After']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="DrySoilWsgMcAfter" id="26" oninput="calcular()"></td>
                </tr>
                <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content (%)</th>
                  <td><input value="<?php echo ($PH['Moisture_Content_Porce_Mc_After']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="MoistureContentPorceMcAfter" id="27" oninput="calcular()"></td>
                </tr>
                </tbody>
              </table>
              </div>


              <div style="display: flex; flex-direction: row-reverse; justify-content: space-around; margin-left: 10%; margin-block-end: -7%;">
                <table class="table table-bordered border-primary" style="width:450px;">
                  <thead>
                  </thead>
                  <caption></caption>
                  <tbody>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Hole Size After Test (mm)</th>
                    <td><input value="<?php echo ($PH['Hole_Size_After_Test_mm']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="HoleSizeAfterTestmm" id="" oninput="calcular()"></td>
                  </tr>
                  <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Dispersive Classification</th>
                    <td><input value="<?php echo ($PH['Dispersive_Classification']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="DispersiveClassification" id="" oninput="calcular()"></td>
                  </tr>
                  </tbody>
                </table>
              </div>
        

              <div style="display: flex; flex-direction: row-reverse; justify-content: space-around; margin-left: 30%; margin-top: 10%; margin-bottom: -50%;">
                <div id="pinhole_graph" style="height: 650px; width: 900px;"></div>
                </div>


             <div style="display: flex; flex-direction: row; justify-content: space-between;">
              <table class="table table-bordered border-primary" style="width: 450px;">
                <thead>
                <th style="font-size: 20px; text-align: center;" scope="row" colspan="9">Flow</th>
                  <tr>
                    <th scope="col">Head</th>
                    <th scope="col">mL</th>
                    <th scope="col">Seg</th>
                    <th scope="col">Flow Rate</th>
                    <th scope="col">From Side</th>
                    <th scope="col">From Top</th>
                    <th scope="col">Observation</th>
                  </tr>
                </thead>
              <tbody>
                <tr>
                  <th scope="row" rowspan="12">50</th>
                  <td>10</td>
                  <td><input value="<?php echo ($PH['Seg_No1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="SegNo1" id="28" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo1" id="29" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo1" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo1" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo1" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td><input value="<?php echo ($PH['Seg_No2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="SegNo2" id="30" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo2" id="31" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo2" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo2" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo2" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td><input value="<?php echo ($PH['Seg_No3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="SegNo3" id="32" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo3" id="33" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo3" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo3" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo3" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td>25</td>
                  <td><input value="<?php echo ($PH['Seg_No4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="SegNo4" id="34" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo4" id="35" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo4" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo4" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo4" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td>25</td>
                  <td><input value="<?php echo ($PH['Seg_No5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="SegNo5" id="36" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo5" id="37" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo5" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo5" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo5" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td>25</td>
                  <td><input value="<?php echo ($PH['Seg_No6']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="SegNo6" id="38" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No6']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo6" id="39" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No6']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo6" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No6']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo6" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No6']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo6" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input value="<?php echo ($PH['mL_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo7" id="40" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Seg_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="SegNo7" id="41" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo7" id="42" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo7" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo7" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo7" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input value="<?php echo ($PH['mL_No8']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo8" id="43" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No8']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo8" id="44" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No8']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo8" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No8']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo8" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No8']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo8" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input value="<?php echo ($PH['mL_No9']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo9" id="45" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No9']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo9" id="46" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No9']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo9" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No9']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo9" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No9']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo9" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input value="<?php echo ($PH['mL_No10']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo10" id="47" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No10']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo10" id="48" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No10']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo10" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No10']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo10" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No10']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo10" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input value="<?php echo ($PH['mL_No11']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo11" id="49" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No11']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo11" id="50" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No11']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo11" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No11']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo11" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No11']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo11" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input value="<?php echo ($PH['mL_No12']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo12" id="51" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No12']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo12" id="52" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No12']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo12" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No12']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo12" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No12']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo12" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <th scope="row" rowspan="5">180</th>
                  <td><input value="<?php echo ($PH['mL_No13']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo13" id="53" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No13']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo13" id="54" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No13']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo13" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No13']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo13" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No13']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo13" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input value="<?php echo ($PH['mL_No14']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo14" id="55" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No14']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo14" id="56" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No14']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo14" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No14']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo14" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No14']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo14" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input value="<?php echo ($PH['mL_No15']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo15" id="57" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No15']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo15" id="58" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No15']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo15" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No15']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo15" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No15']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo15" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input value="<?php echo ($PH['mL_No16']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo16" id="59" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No16']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo16" id="60" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No16']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo16" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No16']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo16" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No16']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo16" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input value="<?php echo ($PH['mL_No17']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo17" id="61" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No17']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo17" id="62" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No17']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo17" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No17']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo17" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No17']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo17" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <th scope="row" rowspan="5">380</th>
                  <td><input value="<?php echo ($PH['mL_No18']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo18" id="63" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No18']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo18" id="64" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No18']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo18" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No18']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo18" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No18']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo18" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input value="<?php echo ($PH['mL_No19']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo19" id="65" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No19']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo19" id="66" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No19']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo19" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No19']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo19" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No19']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo19" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input value="<?php echo ($PH['mL_No20']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo20" id="67" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No20']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo20" id="68" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No20']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo20" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No20']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo20" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No20']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo20" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input value="<?php echo ($PH['mL_No21']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo21" id="69" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No21']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo21" id="70" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No21']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo21" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No21']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo21" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No21']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo21" id="" oninput="calcular()"></td>
                </tr>
                <tr>
                  <td><input value="<?php echo ($PH['mL_No22']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="mLNo22" id="71" oninput="calcular()"></td>
                  <td>60</td>
                  <td><input value="<?php echo ($PH['Flow_Rate_No22']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FlowRateNo22" id="72" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Side_No22']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromSideNo22" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['From_Top_No22']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FromTopNo22" id="" oninput="calcular()"></td>
                  <td><input value="<?php echo ($PH['Observation_No22']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ObservationNo22" id="" oninput="calcular()"></td>
                </tr>
              </tbody>
              </table>
             </div>

            <button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
          <button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
          <a href="PDF/Pinhole_Test_Rev_3.php?id=<?php echo intval($PH['id']); ?>" class="btn btn-primary">Generar PDF</a>
          <button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>

             
           


            </div>
          </form>
        </div>
      </div>



      <script>
        function calcular() {
      
          //before trial no.1
          tare_plus_wet_soil_before = parseFloat(document.getElementById("16").value);
          tare_plus_dry_soil_before = parseFloat(document.getElementById("17").value);
          tare_before = parseFloat(document.getElementById("19").value);


          //calcular before no.1
          var water_ww_before = tare_plus_wet_soil_before - tare_plus_dry_soil_before;
          var dry_soil_ws_before = tare_plus_dry_soil_before - tare_before;
          var mc_before = (water_ww_before / dry_soil_ws_before)*100;


          //resultado before no.1
          document.getElementById("18").value = water_ww_before.toFixed(2);
          document.getElementById("20").value = dry_soil_ws_before.toFixed(2);
          document.getElementById("21").value = mc_before.toFixed(2);


          

          //after trial no.2
          tare_plus_wet_soil_after = parseFloat(document.getElementById("22").value);
          tare_plus_dry_soil_after = parseFloat(document.getElementById("23").value);
          tare_after = parseFloat(document.getElementById("25").value);


          //calcular after no.2
          var water_ww_after = tare_plus_wet_soil_after - tare_plus_dry_soil_after;
          var dry_soil_ws_after = tare_plus_dry_soil_after - tare_after;
          var mc_after = (water_ww_after / dry_soil_ws_after)*100;


          //resultado after no.2
          document.getElementById("24").value = water_ww_after.toFixed(2);
          document.getElementById("26").value = dry_soil_ws_after.toFixed(2);
          document.getElementById("27").value = mc_after.toFixed(2);




          //obtener valores de input
          max_dry_density_gcm3 = parseFloat(document.getElementById("4").value);
          wt_wet_soil_mold_gr = parseFloat(document.getElementById("6").value);
          wt_mold_gr = parseFloat(document.getElementById("7").value);
          specimen_length = parseFloat(document.getElementById("9").value);


          //calculos
          var wt_wet_soil_gr =  wt_wet_soil_mold_gr - wt_mold_gr;
          var vol_specimen_cm3 =  Math.pow(3.322 / 2, 2) * specimen_length * 3.14159265358979;
          var wet_density_cm3 = wt_wet_soil_gr / vol_specimen_cm3;
          var dry_density_gcm3 = wet_density_cm3  / (1+(mc_before /100));
          var compaction = ( dry_density_gcm3 / max_dry_density_gcm3 ) * 100;

          //resultados
          document.getElementById("8").value = wt_wet_soil_gr.toFixed(2);
          document.getElementById("10").value = vol_specimen_cm3.toFixed(2);
          document.getElementById("11").value = wet_density_cm3.toFixed(2);
          document.getElementById("12").value = dry_density_gcm3.toFixed(2); 
          document.getElementById("13").value = compaction.toFixed(2); 

          document.getElementById("14").value = mc_after.toFixed(2);
          document.getElementById("2").value = mc_before.toFixed(2);


          //flow valores input
          seg1 = parseFloat(document.getElementById("28").value);
          seg2 = parseFloat(document.getElementById("30").value);
          seg3 = parseFloat(document.getElementById("32").value);
          seg4 = parseFloat(document.getElementById("34").value);
          seg5 = parseFloat(document.getElementById("36").value);
          seg6 = parseFloat(document.getElementById("38").value);

          ml1 = parseFloat(document.getElementById("40").value);
          seg7 = parseFloat(document.getElementById("41").value);

          ml2 = parseFloat(document.getElementById("43").value);
          ml3 = parseFloat(document.getElementById("45").value);
          ml4 = parseFloat(document.getElementById("47").value);
          ml5 = parseFloat(document.getElementById("49").value);
          ml6 = parseFloat(document.getElementById("51").value);
          ml7 = parseFloat(document.getElementById("53").value);
          ml8 = parseFloat(document.getElementById("55").value);
          ml9 = parseFloat(document.getElementById("57").value);
          ml10 = parseFloat(document.getElementById("59").value);
          ml11 = parseFloat(document.getElementById("61").value);
          ml12 = parseFloat(document.getElementById("63").value);
          ml13 = parseFloat(document.getElementById("65").value);
          ml14 = parseFloat(document.getElementById("67").value);
          ml15 = parseFloat(document.getElementById("69").value);
          ml16 = parseFloat(document.getElementById("71").value);


          //flow calculo
          var flowrate1 = 10 / seg1;
          var flowrate2 = 10 / seg2;
          var flowrate3 = 10 / seg3;
          var flowrate4 = 25 / seg4;
          var flowrate5 = 25 / seg5;
          var flowrate6 = 25 / seg6;

          var flowrate7 = ml1 / seg7;

          var flowrate8 = ml2 / 60;
          var flowrate9 = ml3 / 60;
          var flowrate10 = ml4 / 60;
          var flowrate11 = ml5 / 60;
          var flowrate12 = ml6 / 60;
          var flowrate13 = ml7 / 60;
          var flowrate14 = ml8 / 60;
          var flowrate15 = ml9 / 60;
          var flowrate16 = ml10 / 60;
          var flowrate17 = ml11 / 60;
          var flowrate18 = ml12 / 60;
          var flowrate19 = ml13 / 60;
          var flowrate20 = ml14 / 60;
          var flowrate21 = ml15 / 60;
          var flowrate22 = ml16 / 60;




          //flow resuktado
          document.getElementById("29").value = flowrate1.toFixed(2);
          document.getElementById("31").value = flowrate2.toFixed(2);
          document.getElementById("33").value = flowrate3.toFixed(2);
          document.getElementById("35").value = flowrate4.toFixed(2);
          document.getElementById("37").value = flowrate5.toFixed(2);
          document.getElementById("39").value = flowrate6.toFixed(2);

          document.getElementById("42").value = flowrate7.toFixed(2);

          document.getElementById("44").value = flowrate8.toFixed(2);
          document.getElementById("46").value = flowrate9.toFixed(2);
          document.getElementById("48").value = flowrate10.toFixed(2);
          document.getElementById("50").value = flowrate11.toFixed(2);
          document.getElementById("52").value = flowrate12.toFixed(2);
          document.getElementById("54").value = flowrate13.toFixed(2);
          document.getElementById("56").value = flowrate14.toFixed(2);
          document.getElementById("58").value = flowrate15.toFixed(2);
          document.getElementById("60").value = flowrate16.toFixed(2);
          document.getElementById("62").value = flowrate17.toFixed(2);
          document.getElementById("64").value = flowrate18.toFixed(2);
          document.getElementById("66").value = flowrate19.toFixed(2);
          document.getElementById("68").value = flowrate20.toFixed(2);
          document.getElementById("70").value = flowrate21.toFixed(2);
          document.getElementById("72").value = flowrate22.toFixed(2);


          //graph pinhole
          var point_seg = seg1 * 0.0166667;




        }



      </script>

<script>
  function enviarData(event) {
    event.preventDefault()
    $.ajax({
      url: "libs/js/pinhole.js",
      type: "POST",
      data: $("#47").serialize(),
      success: function(data) {
        $("#resultado").html(data);
      }
    });
  }
</script>


<script src="https://fastly.jsdelivr.net/npm/echarts@5.4.2/dist/echarts.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="libs/js/pinhole.js"></script>

                
<?php include_once('layouts/footer.php'); ?>