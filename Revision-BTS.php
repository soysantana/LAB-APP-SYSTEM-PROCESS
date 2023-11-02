<?php
$page_title = 'BTS';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/BTS.php'); 
}
$SearchTable = find_by_id('splitting_tensile_strenght', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
  <?php echo display_msg($msg); ?>
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span> Splitting Tensile Strenght Calculation</span>
        </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="" onsubmit="calcular()">

        <table class="table table-bordered">
          <thead>
            <tbody id="product_info"></tbody>
          </thead>

          </div>
          <div class="col-xs-4">
            <label>Standard</label>
            <select class="form-control" name="Standard">
              <option <?php if ($SearchTable['Standard'] == 'Choose...') echo 'selected'; ?>>Choose...</option>
              <option <?php if ($SearchTable['Standard'] == 'ASTM-D3967') echo 'selected'; ?>>ASTM-D3967</option>
            </select>
          </div>
          <div class="col-xs-4">
            <label>Method</label>
            <select class="form-control" type = "text" name="Method" id="1">
                <option <?php if ($SearchTable['Method'] == 'Choose...') echo 'selected'; ?>>Choose...</option>
                <option <?php if ($SearchTable['Method'] == 'A') echo 'selected'; ?>>A</option>
                <option <?php if ($SearchTable['Method'] == 'B') echo 'selected'; ?>>B</option>
            </select>
          </div>
    
          <div class="col-xs-4">
            <label>Extraction Equipment:</label>
            <input class="form-control" name="ExtractionEquipment" type="text" value="<?php echo ($SearchTable['Extraction_Equipment']); ?>">
          </div>

          <div class="col-xs-4">
            <label>Cutter Equipment:</label>
            <input class="form-control" name="CutterEquipment" type="text" value="<?php echo ($SearchTable['Cutter_Equipment']); ?>">
          </div>
          <div class="col-xs-4">
            <label>Test Device:</label>
            <input class="form-control" name="TestDevice" type="text" value="<?php echo ($SearchTable['Test_Device']); ?>">
          </div>
    
          <div class="col-xs-4">
            <label>Comments</label>
            <textarea class="form-control" name="Comments"><?php echo ($SearchTable['Comments']); ?></textarea>
          </div>
    
          <div class="col-xs-4">
            <label>Technician</label>
            <input class="form-control" name="Technician" value="<?php echo ($SearchTable['Technician']); ?>" type="text">
          </div>
        </div>
          <div class="col-xs-4">
            <label>Test Start Date</label>
            <input class="form-control" name="TestStartDate" value="<?php echo ($SearchTable['Test_Start_Date']); ?>" type="date">
          </div>
          <div class="panel-body">
            <div class="col-md-12">
            </div>
          </div>
          <div style="display: flex; flex-direction: row; justify-content: space-between;">
            <table class="table table-bordered border-primary" style="width:950px;">
              <thead>
              </thead>
              <caption>Testing Information</caption>
              <tr>
                <th style="font-size: 20px; width: 350px; height: 25px; text-align: center;" scope="row" 
                colspan="9">Splittling Tensile Strength of Rock Core Specimen- Brazilian:</th>
                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                       <tr>
                        <th scope="col">Samples</th>
                        <th scope="col" style="text-align: center;">Diameter D (cm)</th>
                        <th scope="col" style="text-align: center;">Thicness t (cm)</th>
                        <th scope="col" style="text-align: center;">Relation t/d</th>
                        <th scope="col" style="text-align: center;">Loading rate (KN/s)</th>
                        <th scope="col" style="text-align: center;">Time to Failure (s)</th>
                        <th scope="col" style="text-align: center;">Max. Load (kN)</th>
                        <th scope="col" style="text-align: center;">Tensile Strength (Mpa)</th>
                        <th scope="col" style="text-align: center;">Failure type</th>
                      </tr>
            
                      <tbody>
                        <tr>
                          <th style="font-size: 12px;" style="width: 350px; height: 25px;" scope="row">Sample 1</th>
                          <td><input value="<?php echo ($SearchTable['Diameter_D_cm_No1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="DiameterDcmNo1" id="2" oninput="calcular()"></td>
                          <td><input value="<?php echo ($SearchTable['Thicness_t_cm_No1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ThicnesstcmNo1" id="3" oninput="calcular()"></td>
                          <td><input value="<?php echo ($SearchTable['Relation_td_No1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="RelationtdNo1" id="4" oninput="calcular()"></td>
                          <td><input value="<?php echo ($SearchTable['Loading_Rate_KNs_No1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="LoadingRateKNsNo1" id="5" oninput="calcular()"></td>
                          <td><input value="<?php echo ($SearchTable['Time_To_Failure_s_No1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TimeToFailuresNo1" id="6" oninput="calcular()"></td>
                          <td><input value="<?php echo ($SearchTable['Max_Load_kN_No1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="MaxLoadkNNo1" id="7" oninput="calcular()"></td>
                          <td><input value="<?php echo ($SearchTable['Tensile_Strength_Mpa_No1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TensileStrengthMpaNo1" id="8" oninput="calcular()"></td>
                          <td><input value="<?php echo ($SearchTable['Failure_Type_No1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FailureTypeNo1" id="9" oninput="calcular()"></td>
                        </tr>
                        <tr>
                            <th style="font-size: 12px;" style="width: 350px; height: 25px;" scope="row">Sample 2</th>
                            <td><input value="<?php echo ($SearchTable['Diameter_D_cm_No2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="DiameterDcmNo2" id="10" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Thicness_t_cm_No2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ThicnesstcmNo2" id="11" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Relation_td_No2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="RelationtdNo2" id="12" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Loading_Rate_KNs_No2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="LoadingRateKNsNo2" id="13" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Time_To_Failure_s_No2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TimeToFailuresNo2" id="14" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Max_Load_kN_No2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="MaxLoadkNNo2" id="15" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Tensile_Strength_Mpa_No2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TensileStrengthMpaNo2" id="16" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Failure_Type_No2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FailureTypeNo2" id="17" oninput="calcular()"></td>
                          </tr>
                          <tr>
                            <th style="font-size: 12px;" style="width: 350px; height: 25px;" scope="row">Sample 3</th>
                            <td><input value="<?php echo ($SearchTable['Diameter_D_cm_No3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="DiameterDcmNo3" id="18" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Thicness_t_cm_No3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ThicnesstcmNo3" id="19" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Relation_td_No3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="RelationtdNo3" id="20" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Loading_Rate_KNs_No3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="LoadingRateKNsNo3" id="21" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Time_To_Failure_s_No3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TimeToFailuresNo3" id="22" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Max_Load_kN_No3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="MaxLoadkNNo3" id="23" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Tensile_Strength_Mpa_No3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TensileStrengthMpaNo3" id="24" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Failure_Type_No3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FailureTypeNo3" id="25" oninput="calcular()"></td>
                          </tr>
                          <tr>
                            <th style="font-size: 12px;" style="width: 350px; height: 25px;" scope="row">Sample 4</th>
                            <td><input value="<?php echo ($SearchTable['Diameter_D_cm_No4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="DiameterDcmNo4" id="26" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Thicness_t_cm_No4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ThicnesstcmNo4" id="27" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Relation_td_No4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="RelationtdNo4" id="28" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Loading_Rate_KNs_No4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="LoadingRateKNsNo4" id="29" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Time_To_Failure_s_No4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TimeToFailuresNo4" id="30" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Max_Load_kN_No4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="MaxLoadkNNo4" id="31" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Tensile_Strength_Mpa_No4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TensileStrengthMpaNo4" id="32" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Failure_Type_No4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FailureTypeNo4" id="33" oninput="calcular()"></td>
                          </tr>
                          <tr>
                            <th style="font-size: 12px;" style="width: 350px; height: 25px;" scope="row">Sample 5</th>
                            <td><input value="<?php echo ($SearchTable['Diameter_D_cm_No5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="DiameterDcmNo5" id="34" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Thicness_t_cm_No5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ThicnesstcmNo5" id="35" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Relation_td_No5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="RelationtdNo5" id="36" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Loading_Rate_KNs_No5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="LoadingRateKNsNo5" id="37" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Time_To_Failure_s_No5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TimeToFailuresNo5" id="38" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Max_Load_kN_No5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="MaxLoadkNNo5" id="39" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Tensile_Strength_Mpa_No5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TensileStrengthMpaNo5" id="40" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Failure_Type_No5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FailureTypeNo5" id="41" oninput="calcular()"></td>
                          </tr>
                          <tr>
                            <th style="font-size: 12px;" style="width: 350px; height: 25px;" scope="row">Sample 6</th>
                            <td><input value="<?php echo ($SearchTable['Diameter_D_cm_No6']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="DiameterDcmNo6" id="42" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Thicness_t_cm_No6']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ThicnesstcmNo6" id="43" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Relation_td_No6']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="RelationtdNo6" id="44" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Loading_Rate_KNs_No6']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="LoadingRateKNsNo6" id="45" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Time_To_Failure_s_No6']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TimeToFailuresNo6" id="46" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Max_Load_kN_No6']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="MaxLoadkNNo6" id="47" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Tensile_Strength_Mpa_No6']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TensileStrengthMpaNo6" id="48" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Failure_Type_No6']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FailureTypeNo6" id="49" oninput="calcular()"></td>
                          </tr>
                          <tr>
                            <th style="font-size: 12px;" style="width: 350px; height: 25px;" scope="row">Sample 7</th>
                            <td><input value="<?php echo ($SearchTable['Diameter_D_cm_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="DiameterDcmNo7" id="50" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Thicness_t_cm_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ThicnesstcmNo7" id="51" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Relation_td_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="RelationtdNo7" id="52" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Loading_Rate_KNs_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="LoadingRateKNsNo7" id="53" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Time_To_Failure_s_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TimeToFailuresNo7" id="54" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Max_Load_kN_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="MaxLoadkNNo7" id="55" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Tensile_Strength_Mpa_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TensileStrengthMpaNo7" id="56" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Failure_Type_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FailureTypeNo7" id="57" oninput="calcular()"></td>
                          </tr>
                          <tr>
                            <th style="font-size: 12px;" style="width: 350px; height: 25px;" scope="row">Sample 8</th>
                            <td><input value="<?php echo ($SearchTable['Diameter_D_cm_No8']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="DiameterDcmNo8" id="58" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Thicness_t_cm_No8']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ThicnesstcmNo8" id="59" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Relation_td_No8']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="RelationtdNo8" id="60" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Loading_Rate_KNs_No8']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="LoadingRateKNsNo8" id="61" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Time_To_Failure_s_No8']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TimeToFailuresNo8" id="62" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Max_Load_kN_No8']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="MaxLoadkNNo8" id="63" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Tensile_Strength_Mpa_No8']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TensileStrengthMpaNo8" id="64" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Failure_Type_No8']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FailureTypeNo8" id="65" oninput="calcular()"></td>
                          </tr>
                          <tr>
                            <th style="font-size: 12px;" style="width: 350px; height: 25px;" scope="row">Sample 9</th>
                            <td><input value="<?php echo ($SearchTable['Diameter_D_cm_No9']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="DiameterDcmNo9" id="66" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Thicness_t_cm_No9']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ThicnesstcmNo9" id="67" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Relation_td_No9']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="RelationtdNo9" id="68" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Loading_Rate_KNs_No9']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="LoadingRateKNsNo9" id="69" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Time_To_Failure_s_No9']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TimeToFailuresNo9" id="70" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Max_Load_kN_No9']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="MaxLoadkNNo9" id="71" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Tensile_Strength_Mpa_No9']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TensileStrengthMpaNo9" id="72" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Failure_Type_No9']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FailureTypeNo9" id="73" oninput="calcular()"></td>
                          </tr>
                          <tr>
                            <th style="font-size: 12px;" style="width: 350px; height: 25px;" scope="row">Sample 10</th>
                            <td><input value="<?php echo ($SearchTable['Diameter_D_cm_No10']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="DiameterDcmNo10" id="74" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Thicness_t_cm_No10']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="ThicnesstcmNo10" id="75" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Relation_td_No10']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="RelationtdNo10" id="76" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Loading_Rate_KNs_No10']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="LoadingRateKNsNo10" id="77" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Time_To_Failure_s_No10']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TimeToFailuresNo10" id="78" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Max_Load_kN_No10']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="MaxLoadkNNo10" id="79" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Tensile_Strength_Mpa_No10']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="TensileStrengthMpaNo10" id="80" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Failure_Type_No10']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="FailureTypeNo10" id="81" oninput="calcular()"></td>
                          </tr>
                          <tr>
                            <th style="font-size: 12px;" style="width: 350px; height: 25px;" scope="row">Averages</th>
                            <td><input value="<?php echo ($SearchTable['Average_No1']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="AverageNo1" id="83" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Average_No2']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="AverageNo2" id="84" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Average_No3']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="AverageNo3" id="85" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Average_No4']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="AverageNo4" id="86" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Average_No5']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="AverageNo5" id="87" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Average_No6']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="AverageNo6" id="88" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Average_No7']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="AverageNo7" id="89" oninput="calcular()"></td>
                            <td><input value="<?php echo ($SearchTable['Average_No8']); ?>" type="text" style="border: none;" size="4" style="background: transparent;" name="AverageNo8" id="90" oninput="calcular()"></td>
                          </tr>
                        </tr>
                    </table>

                    <button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
                    <button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
                    
                    <div class="btn-group dropup" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Generar PDF
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Contrucion</a></li>
                    <li><a href="PDF/BTS_Rev_3.php?id=<?php echo intval($SearchTable['id']); ?>">Investigacion</a></li>
                    </ul>
                    </div>
                    <button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>

                    <?php include_once('layouts/footer.php'); ?>

                    
                    <script>
                      
                        function calcular() {
                          // Obtenemos los valores de los campos de entrada d
                          d1= parseFloat(document.getElementById("2").value);
                          d1= parseFloat(document.getElementById("10").value);
                          d1= parseFloat(document.getElementById("18").value);
                          d1= parseFloat(document.getElementById("26").value);
                          d1= parseFloat(document.getElementById("34").value);
                          d1= parseFloat(document.getElementById("42").value);
                          d1= parseFloat(document.getElementById("50").value);
                          d1= parseFloat(document.getElementById("58").value);
                          d1= parseFloat(document.getElementById("66").value);
                          d10= parseFloat(document.getElementById("74").value);
                          

                          t1 = parseFloat(document.geElementById("3").value);
                          t2 = parseFloat(document.geElementById("11").value);
                          t3 = parseFloat(document.geElementById("19").value);
                          t4 = parseFloat(document.geElementById("27").value);
                          t5 = parseFloat(document.geElementById("35").value);
                          t6 = parseFloat(document.geElementById("43").value);
                          t7 = parseFloat(document.geElementById("51").value);
                          t8 = parseFloat(document.geElementById("59").value);
                          t9 = parseFloat(document.geElementById("67").value);
                          t10 = parseFloat(document.geElementById("75").value);
                         

                          ML1 = parseFloat(document.geElementById("7").value);
                          ML2 = parseFloat(document.geElementById("15").value);
                          ML3 = parseFloat(document.geElementById("23").value);
                          ML4 = parseFloat(document.geElementById("31").value);
                          ML5 = parseFloat(document.geElementById("39").value);
                          ML6 = parseFloat(document.geElementById("47").value);
                          ML7 = parseFloat(document.geElementById("55").value);
                          ML8 = parseFloat(document.geElementById("63").value);
                          ML9= parseFloat(document.geElementById("71").value);
                          ML10 = parseFloat(document.geElementById("79").value);

                          aved=parseFloat(document.getElementById("83").value);
                          avet = parseFloat(document.geElementById("84").value);
                          aveM = parseFloat(document.geElementById("88").value);
                        
                          // Calculamos los resultados
                          var rel1= t1/d1;
                          var rel2= t2/d2;
                          var rel3= t3/d3;
                          var rel4= t4/d4;
                          var rel5= t5/d5;
                          var rel6= t6/d6;
                          var rel7= t7/d7;
                          var rel8= t8/d8;
                          var rel9= t9/d9;
                          var rel10= t10/d10;


                          
                          // Pasamos los resultados a los elementos correspondientes
                          document.getElementById("3").value = relh.toFixed(3);
                          document.getElementById("4").value = area.toFixed(5);
                          document.getElementById("5").value = volume.toFixed(6);
                          document.getElementById("7").value = Uwc.toFixed(3);
                        }
                        
                        </script>
                
                
                
                
                
                
                
          