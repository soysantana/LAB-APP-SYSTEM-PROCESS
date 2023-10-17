<?php
$page_title = 'Grain size Coarse  thanAggregate';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);

$SearchTable = find_by_id('grain_size_coarse_aggregate', (int)$_GET['id']);
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading clearfix">
<strong>
<span class="glyphicon glyphicon-th"></span>
<span>Laboratory sieved Grain size for Coarse Than Aggregate </span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="gs_coarse_agg.php" onsubmit="calcular();">

    <div>
    <table class="table table-bordered">
    <thead>
    <tbody id="product_info"> </tbody>
    </thead>
    </table>
    </div>
    
    <table class="table table-bordered">
    <thead>
    </div>
    <div class="col-xs-4">
    <label >Standard</label>
    <select class="form-control" name="Standard">
    <option <?php if ($SearchTable['Standard'] == 'Choose...') echo 'selected'; ?>>Choose...</option>
    <option <?php if ($SearchTable['Standard'] == 'ASTM-C136') echo 'selected'; ?>>ASTM-C136</option>         
    </select>
    </div>
    
    <div class="col-xs-4">
    <label >Preparation Method</label>
    <select class="form-control" name="PreparationMethod">
    <option <?php if ($SearchTable['Preparation_Method'] == 'Choose...') echo 'selected'; ?>>Choose...</option>
    <option <?php if ($SearchTable['Preparation_Method'] == 'Oven_Dried') echo 'selected'; ?>>Oven_Dried</option>
    <option <?php if ($SearchTable['Preparation_Method'] == 'Air_Dried') echo 'selected'; ?>>Air_Dried</option>
    </select>
    </div>
    
    <div class="col-xs-4">
    <label >Split Method</label>
    <select class="form-control" name="SplitMethod">
    <option <?php if ($SearchTable['Split_Method'] == 'Choose...') echo 'selected'; ?>>Choose...</option>
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
    </div>
    
    <div class="col-xs-4">
      <label>Date Material Arrive</label>
      <input class="form-control" name="DateMaterialArrive" value="<?php echo ($SearchTable['Date_Material_Arrive']); ?>" type="date">
      </div>
      </div>
    
      <div class="col-xs-4">
        <label>Date of improvement</label>
        <input class="form-control" name="Dateofimprovement" value="<?php echo ($SearchTable['Date_of_improvement']); ?>" type="date">
        </div>
        </div>
    
    <div class="col-xs-4">
      <label >Improvement</label>
      <select class="form-control" name="Improvement">
      <option <?php if ($SearchTable['Improvement'] == 'Choose...') echo 'selected'; ?>>Choose...</option>
      <option <?php if ($SearchTable['Improvement'] == 'Yes') echo 'selected'; ?>>Yes</option>
      <option <?php if ($SearchTable['Improvement'] == 'No') echo 'selected'; ?>>No</option>
      </select>
      </div>
    
      <div class="col-xs-4">
        <label>Samples usig for improvement</label>
        <input class="form-control" name="SamplesusigforimprovementNo1" value="<?php echo ($SearchTable['Samples_usig_for_improvement_No1']); ?>" type="text">
        <input class="form-control" name="SamplesusigforimprovementNo2" value="<?php echo ($SearchTable['Samples_usig_for_improvement_No2']); ?>" type="text">
        </div>
<div>
  <table class="table table-bordered border-primary" style="width: 300px; margin-left: 2%;">
  <thead>
    <caption>Testing Information</caption>
  </thead>
  <tbody>
  
    <tr>
      <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Container</th>
      <td><input value="<?php echo ($SearchTable['Container']); ?>" type="text" name="Container" style="border: none;" size="12" style="background: transparent;"id=""></td>
      </tr>
      
      <tr>
      <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Wet Soil + Tare (gr):</th>
      <td><input value="<?php echo ($SearchTable['Tare_Wet_Soil']); ?>" type="text" name="TareWetSoil" style="border: none;" size="12" style="background: transparent;"id=""></td>
      </tr>
      
      <tr>
      <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil + Tare (gr):</th>
      <td><input value="<?php echo ($SearchTable['Tare_Dry_Soil']); ?>" type="text" name="TareDrySoil" style="border: none;" size="12" style="background: transparent;"id="1"oninput="calcular()"></td>
      </tr>
      
      <tr>
      <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row"> Tare (gr):</th>
      <td><input value="<?php echo ($SearchTable['Tare']); ?>" type="text" name="Tare" style="border: none;" size="12" style="background: transparent;"id="2"oninput="calcular()"></td>
      </tr>
      
      <tr>
      <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil (gr):</th>
      <td><input value="<?php echo ($SearchTable['Dry_Soil']); ?>" type="text" name="DrySoil" style="border: none;" size="12" style="background: transparent;"id="3" oninput="calcular()"></td>
      </tr>
      
      <tr>
      <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Washed (gr):</th>
      <td><input value="<?php echo ($SearchTable['Washed']); ?>" type="text" name="Washed" style="border: none;" size="12" style="background: transparent;"id="4" oninput="calcular()"></td>
      </tr>
      
      <tr>
      <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Wash Pan (gr):</th>
      <td><input value="<?php echo ($SearchTable['Wash_Pan']); ?>" type="text" name="WashPan" style="border: none;" size="12" style="background: transparent;"id="5" oninput="calcular()"></td>
      </tr>
    
      </table>
    </div>
    

<div>
  <table class="table table-bordered" style="width: 310px; margin-left: 3%;">
        <thead>
            <caption>Reactivity Test Method FM13-007</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Total Sample Weight (g):</th>
                <td><input value="<?php echo ($SearchTable['Total_Sample_Weight_g']); ?>" type="text" name="TotalSampleWeightg" style="border: none; background: transparent;" size="12" id="6" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Weight used for the Test (g):</th>
                <td><input value="<?php echo ($SearchTable['Weight_used_for_the_Test_g']); ?>" type="text" name="WeightusedfortheTestg" style="border: none; background: transparent;" size="12" id="7" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">A Particles Reactive #:</th>
                <td><input value="<?php echo ($SearchTable['A_Particles_Reactive']); ?>" type="text" name="AParticlesReactive" style="border: none; background: transparent;" size="12" id="8" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">B Particles Reactive #:</th>
                <td><input value="<?php echo ($SearchTable['B_Particles_Reactive']); ?>" type="text" name="BParticlesReactive" style="border: none; background: transparent;" size="12" id="9" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">C Particles Reactive #:</th>
                <td><input value="<?php echo ($SearchTable['C_Particles_Reactive']); ?>" type="text" name="CParticlesReactive" style="border: none; background: transparent;" size="12" id="10" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Weight Mat. Ret. No. 4 (If Applicable)</th>
                <td><input value="<?php echo ($SearchTable['Weight_Mat_Ret_No_4_If_Applicable']); ?>" type="text" name="WeightMatRetNo4IfApplicable" style="border: none; background: transparent;" size="12" id="11" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Wt Reactive Part. Ret. No.4 (If Applicable)</th>
                <td><input value="<?php echo ($SearchTable['Wt_Reactive_Part_Ret_No4_If_Applicable']); ?>" type="text" name="WtReactivePartRetNo4IfApplicable" style="border: none; background: transparent;" size="12" id="12" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Percent Reactive Particles (If Applicable)</th>
                <td><input value="<?php echo ($SearchTable['Percent_Reactive_Particles_If_Applicable']); ?>" type="text" name="PercentReactiveParticlesIfApplicable" style="border: none; background: transparent;" size="12" id="13" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Average Particles Reactive:</th>
                <td><input value="<?php echo ($SearchTable['Average_Particles_Reactive']); ?>" type="text" name="AverageParticlesReactive" style="border: none; background: transparent;" size="12" id="14" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Reaction Strength Result:</th>
                <td><input value="<?php echo ($SearchTable['Reaction_Strength_Result']); ?>" type="text" name="ReactionStrengthResult" style="border: none; background: transparent;" size="12" id="15" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div>
  <table class="table table-bordered" style="width: 380px; margin-left: 3%;">
        <thead>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Acid Reactivity Test Result</th>
                <td><input value="<?php echo ($SearchTable['Acid_Reactivity_Test_Result']); ?>" type="text" style="border: none; background: transparent; text-align: center;" id="16" name="AcidReactivityTestResult" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="display: flex; flex-direction: row-reverse; margin-right: 1%; margin-top: -60%;">
  <table class="table table-bordered border-primary" style="width: 550px;">
    <thead>
        <caption>Grain Size Distribution</caption>
    <tr>
    <th style="text-align: center;" scope="col">Screen</th>
    <th style="text-align: center;" scope="col">mm</th>
    <th style="text-align: center;" scope="col">Wt Ret</th>
    <th style="text-align: center;" scope="col">% Ret</th>
    <th style="text-align: center;" scope="col">Cum % Ret</th>
    <th style="text-align: center;" scope="col">% Pass</th>
    <th style="text-align: center;" scope="col">Specs</th>
     </tr>
        </thead>
        <tbody>
          <tr>
            <th style="text-align: center;" scope="row">5"</th>
            <td>127</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_5_127']); ?>" type="text" name="WtRet5127" style="text-align: center; border: none;" size="4" style="background: transparent;"id="17" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_5_127']); ?>" type="text" name="PorceRet5127" style="text-align: center; border: none;" size="4" style="background: transparent;"id="18" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_5_127']); ?>" type="text" name="CumRet5127" style="text-align: center; border: none;" size="4" style="background: transparent;"id="19" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_5_127']); ?>" type="text" name="PorcePass5127" style="text-align: center; border: none;" size="4" style="background: transparent;"id="20" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_5_127']); ?>" type="text" name="Specs5127" style="text-align: center; border: none;" size="4" style="background: transparent;"id="21" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">4"</th>
            <td>102</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_4_101']); ?>" type="text" name="WtRet4101" style="text-align: center; border: none;" size="4" style="background: transparent;"id="22" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_4_101']); ?>" type="text" name="PorceRet4101" style="text-align: center; border: none;" size="4" style="background: transparent;"id="23" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_4_101']); ?>" type="text" name="CumRet4101" style="text-align: center; border: none;" size="4" style="background: transparent;"id="24" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_4_101']); ?>" type="text" name="PorcePass4101" style="text-align: center; border: none;" size="4" style="background: transparent;"id="25" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_4_101']); ?>" type="text" name="Specs4101" style="text-align: center; border: none;" size="4" style="background: transparent;"id="26" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">3.5"</th>
            <td>89</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_3p5_89']); ?>" type="text" name="WtRet3p589" style="text-align: center; border: none;" size="4" style="background: transparent;"id="27" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_3p5_89']); ?>" type="text" name="PorceRet3p589" style="text-align: center; border: none;" size="4" style="background: transparent;"id="28" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_3p5_89']); ?>" type="text" name="CumRet3p589" style="text-align: center; border: none;" size="4" style="background: transparent;"id="29" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_3p5_89']); ?>" type="text" name="PorcePass3p589" style="text-align: center; border: none;" size="4" style="background: transparent;"id="30" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_3p5_89']); ?>" type="text" name="Specs3p589" style="text-align: center; border: none;" size="4" style="background: transparent;"id="31" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">3"</th>
            <td>75</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_3_75']); ?>" type="text" name="WtRet375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="32" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_3_75']); ?>" type="text" name="PorceRet375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="33" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_3_75']); ?>" type="text" name="CumRet375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="34" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_3_75']); ?>" type="text" name="PorcePass375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="35" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_3_75']); ?>" type="text" name="Specs375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="36" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">2.5"</th>
            <td>63</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_2p5_63']); ?>" type="text" name="WtRet2p563" style="text-align: center; border: none;" size="4" style="background: transparent;"id="37" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_2p5_63']); ?>" type="text" name="PorceRet2p563" style="text-align: center; border: none;" size="4" style="background: transparent;"id="38" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_2p5_63']); ?>" type="text" name="CumRet2p563" style="text-align: center; border: none;" size="4" style="background: transparent;"id="39" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_2p5_63']); ?>" type="text" name="PorcePass2p563" style="text-align: center; border: none;" size="4" style="background: transparent;"id="40" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_2p5_63']); ?>" type="text" name="Specs2p563" style="text-align: center; border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">2"</th>
            <td>50.8</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_2_50']); ?>" type="text" name="WtRet250" style="text-align: center; border: none;" size="4" style="background: transparent;"id="41" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_2_50']); ?>" type="text" name="PorceRet250" style="text-align: center; border: none;" size="4" style="background: transparent;"id="42" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_2_50']); ?>" type="text" name="CumRet250" style="text-align: center; border: none;" size="4" style="background: transparent;"id="43" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_2_50']); ?>" type="text" name="PorcePass250" style="text-align: center; border: none;" size="4" style="background: transparent;"id="44" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_2_50']); ?>" type="text" name="Specs250" style="text-align: center; border: none;" size="4" style="background: transparent;"id="45" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1.5"</th>
            <td>37.5</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_1p5_37']); ?>" type="text" name="WtRet1p537" style="text-align: center; border: none;" size="4" style="background: transparent;"id="46" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_1p5_37']); ?>" type="text" name="PorceRet1p537" style="text-align: center; border: none;" size="4" style="background: transparent;"id="47" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_1p5_37']); ?>" type="text" name="CumRet1p537" style="text-align: center; border: none;" size="4" style="background: transparent;"id="48" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_1p5_37']); ?>" type="text" name="PorcePass1p537" style="text-align: center; border: none;" size="4" style="background: transparent;"id="49" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_1p5_37']); ?>" type="text" name="Specs1p537" value="100"style="text-align: center; border: none;" size="4" style="background: transparent;"id="51" oninput="calcular()"></td>
            
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1"</th>
            <td>25</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_1_25']); ?>" type="text" name="WtRet125" style="text-align: center; border: none;" size="4" style="background: transparent;"id="52" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_1_25']); ?>" type="text" name="PorceRet125" style="text-align: center; border: none;" size="4" style="background: transparent;"id="53" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_1_25']); ?>" type="text" name="CumRet125" style="text-align: center; border: none;" size="4" style="background: transparent;"id="54" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_1_25']); ?>" type="text" name="PorcePass125" style="text-align: center; border: none;" size="4" style="background: transparent;"id="55" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_1_25']); ?>" type="text" name="Specs125" value="87-100"style="text-align: center; border: none;" size="4" style="background: transparent;"id="57" oninput="calcular()"></td>
           
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">3/4"</th>
            <td>19</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_3p4_19']); ?>" type="text" name="WtRet3p419" style="text-align: center; border: none;" size="4" style="background: transparent;"id="58" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_3p4_19']); ?>" type="text" name="PorceRet3p419" style="text-align: center; border: none;" size="4" style="background: transparent;"id="59" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_3p4_19']); ?>" type="text" name="CumRet3p419" style="text-align: center; border: none;" size="4" style="background: transparent;"id="60" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_3p4_19']); ?>" type="text" name="PorcePass3p419" style="text-align: center; border: none;" size="4" style="background: transparent;"id="61" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_3p4_19']); ?>" type="text" name="Specs3p419" value="80-100"style="text-align: center; border: none;" size="4" style="background: transparent;"id="63" oninput="calcular()"></td>
            </tr>
          <tr>
            <th style="text-align: center;" scope="row">3/8"</th>
            <td>9.5</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_3p8_9']); ?>" type="text" name="WtRet3p89" style="text-align: center; border: none;" size="4" style="background: transparent;"id="64" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_3p8_9']); ?>" type="text" name="PorceRet3p89" style="text-align: center; border: none;" size="4" style="background: transparent;"id="65" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_3p8_9']); ?>" type="text" name="CumRet3p89" style="text-align: center; border: none;" size="4" style="background: transparent;"id="66" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_3p8_9']); ?>" type="text" name="PorcePass3p89" style="text-align: center; border: none;" size="4" style="background: transparent;"id="67" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_3p8_9']); ?>" type="text" name="Specs3p89" value="40-100"style="text-align: center; border: none;" size="4" style="background: transparent;"id="69" oninput="calcular()"></td>          </tr>
          <tr>
            <th style="text-align: center;" scope="row">No. 4</th>
            <td>4.75</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_No4_4']); ?>" type="text" name="WtRetNo44" style="text-align: center; border: none;" size="4" style="background: transparent;"id="70" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_No4_4']); ?>" type="text" name="PorceRetNo44" style="text-align: center; border: none;" size="4" style="background: transparent;"id="71" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_No4_4']); ?>" type="text" name="CumRetNo44" style="text-align: center; border: none;" size="4" style="background: transparent;"id="72" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_No4_4']); ?>" type="text" name="PorcePassNo44" style="text-align: center; border: none;" size="4" style="background: transparent;"id="73" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_No4_4']); ?>" type="text" name="SpecsNo44" value="7-60"style="text-align: center; border: none;" size="4" style="background: transparent;"id="75" oninput="calcular()"></td>
           
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">No. 10</th>
            <td>2</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_No10_2']); ?>" type="text" name="WtRetNo102" style="text-align: center; border: none;" size="4" style="background: transparent;"id="76" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_No10_2']); ?>" type="text" name="PorceRetNo102" style="text-align: center; border: none;" size="4" style="background: transparent;"id="77" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_No10_2']); ?>" type="text" name="CumRetNo102" style="text-align: center; border: none;" size="4" style="background: transparent;"id="78" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_No10_2']); ?>" type="text" name="PorcePassNo102" style="text-align: center; border: none;" size="4" style="background: transparent;"id="79" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_No10_2']); ?>" type="text" name="SpecsNo102" value="0-15"style="text-align: center; border: none;" size="4" style="background: transparent;"id="80" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">No. 16</th>
            <td>1.18</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_No16_1']); ?>" type="text" name="WtRetNo161" style="text-align: center; border: none;" size="4" style="background: transparent;"id="81" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_No16_1']); ?>" type="text" name="PorceRetNo161" style="text-align: center; border: none;" size="4" style="background: transparent;"id="82" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_No16_1']); ?>" type="text" name="CumRetNo161" style="text-align: center; border: none;" size="4" style="background: transparent;"id="83" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_No16_1']); ?>" type="text" name="PorcePassNo161" style="text-align: center; border: none;" size="4" style="background: transparent;"id="84" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_No16_1']); ?>" type="text" name="SpecsNo161" style="text-align: center; border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">No. 20</th>
            <td>0.85</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_No20_0p85']); ?>" type="text" name="WtRetNo200p85" style="text-align: center; border: none;" size="4" style="background: transparent;"id="86" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_No20_0p85']); ?>" type="text" name="PorceRetNo200p85" style="text-align: center; border: none;" size="4" style="background: transparent;"id="87" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_No20_0p85']); ?>" type="text" name="CumRetNo200p85" style="text-align: center; border: none;" size="4" style="background: transparent;"id="88" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_No20_0p85']); ?>" type="text" name="PorcePassNo200p85" style="text-align: center; border: none;" size="4" style="background: transparent;"id="89" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_No20_0p85']); ?>" type="text" name="SpecsNo200p85" value="0-7" style="text-align: center; border: none;" size="4" style="background: transparent;"id="90" oninput="calcular()"></td>
            
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">No. 50</th>
            <td>0.30</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_No50_0p3']); ?>" type="text" name="WtRetNo500p3" style="text-align: center; border: none;" size="4" style="background: transparent;"id="91" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_No50_0p3']); ?>" type="text" name="PorceRetNo500p3" style="text-align: center; border: none;" size="4" style="background: transparent;"id="92" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_No50_0p3']); ?>" type="text" name="CumRetNo500p3" style="text-align: center; border: none;" size="4" style="background: transparent;"id="93" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_No50_0p3']); ?>" type="text" name="PorcePassNo500p3" style="text-align: center; border: none;" size="4" style="background: transparent;"id="94" oninput="calcular()"></td>          
            <td><input value="<?php echo ($SearchTable['Specs_No50_0p3']); ?>" type="text" name="SpecsNo500p3" value="" style="text-align: center; border: none;" size="4" style="background: transparent;"id="90" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center; font-size: 15px;" scope="row">No. 60</th>
            <td>0.25</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_No60_0p25']); ?>" type="text" name="WtRetNo600p25" style="border: none;" size="4" style="background: transparent;"id="95" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_No60_0p25']); ?>" type="text" name="PorceRetNo600p25" style="border: none;" size="4" style="background: transparent;"id="96" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_No60_0p25']); ?>" type="text" name="CumRetNo600p25" style="border: none;" size="4" style="background: transparent;"id="97" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_No60_0p25']); ?>" type="text" name="PorcePassNo600p25" style="border: none;" size="4" style="background: transparent;"id="98" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_No60_0p25']); ?>" type="text" name="SpecsNo600p25" value="" style="text-align: center; border: none;" size="4" style="background: transparent;"id="90" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center; font-size: 15px;" scope="row">No. 200</th>
            <td>0.075</td>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_No200_0p075']); ?>" type="text" name="WtRetNo2000p075" style="border: none;" size="4" style="background: transparent;"id="99" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_No200_0p075']); ?>" type="text" name="PorceRetNo2000p075" style="border: none;" size="4" style="background: transparent;"id="100" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_No200_0p075']); ?>" type="text" name="CumRetNo2000p075" style="border: none;" size="4" style="background: transparent;"id="101" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_No200_0p075']); ?>" type="text" name="PorcePassNo2000p075" style="border: none;" size="4" style="background: transparent;"id="102" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Specs_No200_0p075']); ?>" type="text" name="SpecsNo2000p075" value="0-1.7" style="text-align: center; border: none;" size="4" style="background: transparent;"id="103" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row" colspan="2">Pan</th>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_Pan']); ?>" type="text" name="WtRetPan" style="border: none;" size="4" style="background: transparent;"id="104" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_Pan']); ?>" type="text" name="PorceRetPan" style="border: none;" size="4" style="background: transparent;"id="105" oninput="calcular()"></td>
            <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;"id="106" oninput="calcular()"></td>
            <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;"id="107" oninput="calcular()"></td>
            <td><input type="text" name="" style="text-align: center; border: none;" size="4" style="background: transparent;"id="108" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row" colspan="2"> Total Pan</th>
            <td><input value="<?php echo ($SearchTable['Wt_Ret_Total_Pan']); ?>" type="text" name="WtRetTotalPan" style="border: none;" size="4" style="background: transparent;"id="109" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Ret_Total_Pan']); ?>" type="text" name="PorceRetTotalPan" style="border: none;" size="4" style="background: transparent;"id="110" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Cum_Ret_Total_Pan']); ?>" type="text" name="CumRetTotalPan" style="border: none;" size="4" style="background: transparent;"id="111" oninput="calcular()"></td>
            <td><input value="<?php echo ($SearchTable['Porce_Pass_Total_Pan']); ?>" type="text" name="PorcePassTotalPan" style="border: none;" size="4" style="background: transparent;"id="112" oninput="calcular()"></td>
            <td><input type="text" name="" style="text-align: center; border: none;" size="4" style="background: transparent;"id="113" oninput="calcular()"></td>
          </tr>
        </tbody>
      </table>
  </div>

  <div style="display: flex; flex-direction: row-reverse; margin-right: 18%;">
    <table class="table table-bordered" style="width: 300px;">
        <thead>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Grain Size Test Result</th>
                <td><input value="<?php echo ($SearchTable['Grain_Size_Test_Result']); ?>" type="text" style="border: none; background: transparent; text-align: center;" name="GrainSizeTestResult" id="114" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
  </div>

  <div style="display: flex; flex-direction: row-reverse; margin-right: 18%; margin-top: 5%;">
    <table class="table table-bordered border-primary" style="width: 180px;">
        <thead>
            <caption style="text-align: center;">Fine Grained Classification using the USCS</caption>
        </thead>
        <tbody>
            <tr>
                <td><input value="<?php echo ($SearchTable['Fine_Grained_Classification_using_the_USCS']); ?>" type="text" style="border: none; background: transparent; text-align: center;" name="FineGrainedClassificationusingtheUSCS" size="20" id="115" oninput="calcular()"></td>
            </tr>

        </tbody>
    </table>
</div>

  <div style="display: flex; flex-direction: row-reverse; margin-right: 68%; margin-top: -15%;">
    <table class="table table-bordered" style="width: 320px;">
        <thead>
            <caption>Summary Grain Size Distribution Parameter</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Coarser than Gravel%</th>
                <td><input value="<?php echo ($SearchTable['Coarser_than_Gravel']); ?>" type="text" name="CoarserthanGravel" style="border: none; background: transparent; text-align: center;" id="116" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Gravel%</th>
                <td><input value="<?php echo ($SearchTable['Gravel']); ?>" type="text" name="Gravel" style="border: none; background: transparent; text-align: center;" id="117" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Sand%</th>
                <td><input value="<?php echo ($SearchTable['Sand']); ?>" type="text" name="Sand" style="border: none; background: transparent; text-align: center;" id="118" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Fines%</th>
                <td><input value="<?php echo ($SearchTable['Fines']); ?>" type="text" name="Fines" style="border: none; background: transparent; text-align: center;" id="119" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">D10 (mm) :</th>
                <td><input value="<?php echo ($SearchTable['D10']); ?>" type="text" name="D10" style="border: none; background: transparent; text-align: center;" id="120" oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">D15 (mm) :</th>
                <td><input value="<?php echo ($SearchTable['D15']); ?>" type="text" name="D15" style="border: none; background: transparent; text-align: center;" id="121" oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">D30 (mm) :</th>
                <td><input value="<?php echo ($SearchTable['D30']); ?>" type="text" name="D30" style="border: none; background: transparent; text-align: center;" id="122" oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">D60 (mm) :</th>
                <td><input value="<?php echo ($SearchTable['D60']); ?>" type="text" name="D60" style="border: none; background: transparent; text-align: center;" id="123" oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">D85 (mm) :</th>
                <td><input value="<?php echo ($SearchTable['D85']); ?>" type="text" name="D85" style="border: none; background: transparent; text-align: center;" id="124" oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Cc:</th>
                <td><input value="<?php echo ($SearchTable['Cc']); ?>" type="text" name="Cc" style="border: none; background: transparent; text-align: center;" id="125" oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Cu :</th>
                <td><input value="<?php echo ($SearchTable['Cu']); ?>" type="text" name="Cu" style="border: none; background: transparent; text-align: center;" id="126" oninput="calcularD()"></td>
            </tr>
        </tbody>
    </table>
</div>

<div style="display: flex; margin-bottom: 1%; margin-left: -3%;">
  <div id="gs_coarse_agg" style="width: 1000px; height: 500px;"></div>
</div>
<button type="submit" class="btn btn-success">Enviar ensayo a firma</button>
<button type="submit" name="repeat" class="btn btn-warning">Enviar ensayo repetir</button>
<a href="PDF/Grain_Size_CA_Rev_1.php?id=<?php echo intval($SearchTable['id']); ?>" class="btn btn-primary">Generar PDF</a>
<button type="submit" name="grafico" class="btn btn-primary" onclick="enviarData(event)">Graficar</button>
</form>
</div>
</div>
</div>
</div>

<script>
  function calcular() {
   
    //Calculo de reactividad acida.
    // Obtener los valores
    var totalsample = parseFloat(document.getElementById("6").value); 
    var w20gr = parseFloat(document.getElementById("7").value);
    var PRA = parseFloat(document.getElementById("8").value);
    var PRB = parseFloat(document.getElementById("9").value);
    var PRC = parseFloat(document.getElementById("10").value);
    var wmrno4 = parseFloat(document.getElementById("11").value);
    var wprno4 = parseFloat(document.getElementById("12").value);
    var prp = parseFloat(document.getElementById("13").value);
    var APR = parseFloat(document.getElementById("14").value);
    var RsR = parseFloat(document.getElementById("15").value);

    var WDST = parseFloat(document.getElementById("1").value);
    var wtare = parseFloat(document.getElementById("2").value);
    var wWashed = parseFloat(document.getElementById("4").value);

    var WR5 = parseFloat(document.getElementById("17").value);
    var WR4 = parseFloat(document.getElementById("22").value);
    var WR3P5 = parseFloat(document.getElementById("27").value);
    var WR3 = parseFloat(document.getElementById("32").value);
    var WR2P5= parseFloat(document.getElementById("37").value);
    var WR2 = parseFloat(document.getElementById("41").value);
    var WR1P5 = parseFloat(document.getElementById("46").value);
    var WR1 = parseFloat(document.getElementById("52").value);
    var WR3P4 = parseFloat(document.getElementById("58").value);
    var WR3P8 = parseFloat(document.getElementById("64").value);
    var WRN4 = parseFloat(document.getElementById("70").value);
    var WRN10 = parseFloat(document.getElementById("76").value);
    var WRN16= parseFloat(document.getElementById("81").value);
    var WRN20 = parseFloat(document.getElementById("86").value);
    var WRN50 = parseFloat(document.getElementById("91").value);
    var WRN60 = parseFloat(document.getElementById("95").value);
    var WRN200 = parseFloat(document.getElementById("99").value);
    var WRPAN = parseFloat(document.getElementById("104").value);

    var count = 0;
    if (PRA != 0) count++;
    if (PRB != 0) count++;
    if (PRC != 0) count++;
    
    // Calcular el promedio en función del número de inputs con valor
    var APR;
    if (count > 0) {
      APR = (PRA + PRB + PRC ) / count;
    } else {
      APR = 0;
    }

    // Evaluar la reacción según el valor de APR
    var RsR;
    if (APR >= 30) {
      RsR = "Strong Reaction";
    } else if (APR >= 16 && APR <= 30) {
      RsR = "Moderate Reaction";
    } else if (APR >= 1 && APR <= 15) {
      RsR = "Weak Reaction";
    } else {
      RsR = "No Reaction";
    }
    
    // Evaluar ARTR basado en RsR
    var ARTR;
    if (RsR === "No Reaction") {
      ARTR = "Accepted";
    } else if (RsR === "Weak Reaction" || RsR === "Moderate Reaction") {
      ARTR = "Accepted";
    } else {
      ARTR = "Rejected";
    }
    
    var WDS = WDST - wtare;
    var WWpan = WDS - wWashed;
    
    //Tamiz 5 pulgadas
    var PR5 = (WR5/WDS)*100;
    var CPR5 = PR5 + 0;
    var PP5 = 100 - CPR5;

    //Tamiz 4 pulgadas
    var PR4 = (WR4/WDS)*100;
    var CPR4 = PR4+CPR5;
    var PP4 = 100-CPR4;

    //Tamiz 3.5 pulgadas
    var PR3p5 = (WR3P5/WDS)*100;
    var CPR3p5 = PR3p5+CPR4;
    var PP3p5 = 100-CPR3p5;

    //Tamiz 3 pulgadas
    var PR3 = (WR3/WDS)*100;
    var CPR3 = PR3+CPR3p5;
    var PP3 = 100-CPR3;

    //Tamiz 2.5 pulgadas
    var PR2p5 = (WR2P5/WDS)*100;
    var CPR2p5 = PR2p5+CPR3;
    var PP2p5 = 100-CPR2p5;

    //Tamiz 2 pulgadas
    var PR2 = (WR2/WDS)*100;
    var CPR2 = PR2+CPR2p5;
    var PP2 = 100-CPR2;

    //Tamiz 1.5 pulgadas
    var PR1p5 = (WR1P5/WDS)*100;
    var CPR1p5 = PR1p5+CPR2;
    var PP1p5 = 100-CPR1p5;
  
    //Tamiz 1 pulgadas
    var PR1 = (WR1/WDS)*100;
    var CPR1 = PR1+CPR1p5;
    var PP1 = 100-CPR1;
  
    //Tamiz 3p4 pulgadas
    var PR3p4 = (WR3P4/WDS)*100;
    var CPR3p4 = PR3p4+CPR1;
    var PP3p4 = 100-CPR3p4;
  

    //Tamiz 3p8 pulgadas
    var PR3p8 = (WR3P8 / WDS) * 100;
      var CPR3p8 = PR3p8 + CPR3p4;
      var PP3p8 = 100 - CPR3p8;
  
      //Tamiz No4
      var PRn4 = (WRN4 / WDS) * 100;
      var CPRn4 = PRn4 + CPR3p8;
      var PPn4 = 100 - CPRn4;
  
      //Tamiz No10
      var PRn10 = (WRN10 / WDS) * 100;
      var CPRn10 = PRn10 + CPRn4;
      var PPn10 = 100 - CPRn10;
  
      //Tamiz No16
      var PRn16 = (WRN16 / WDS) * 100;
      var CPRn16 = PRn16 + CPRn10;
      var PPn16 = 100 - CPRn16;
  
      //Tamiz No20
      var PRn20 = (WRN20 / WDS) * 100;
      var CPRn20 = PRn20 + CPRn16;
      var PPn20 = 100 - CPRn20;
  
      //Tamiz No50
      var PRn50 = (WRN50 / WDS) * 100;
      var CPRn50 = PRn50 + CPRn20;
      var PPn50 = 100 - CPRn50;
  
      //Tamiz No60
      var PRn60 = (WRN60 / WDS) * 100;
      var CPRn60 = PRn60 + CPRn50;
      var PPn60 = 100 - CPRn60;
  
      //Tamiz No200
      var PRn200 = (WRN200 / WDS) * 100;
      var CPRn200 = PRn200 + CPRn60;
      var PPn200 = 100 - CPRn200;
  
      // Pan
      var PRpan = (WRPAN / WDS) * 100;
  
      // Total Pan
      var WRTP = WRPAN + WWpan;
      var PRTP = (WRTP / WDS) * 100;
      var CPRTP = PRTP + CPRn200;
      var PPTP = 100 - CPRTP;
      
    
      if (PP1p5 === 100 &&
    (PP1 >= 87 && PP1 <= 100) &&
    (PP3p4 >= 80 && PP3p4 <= 100) &&
    (PP3p8 >= 40 && PP3p8 <= 100) &&
    (PPn4 >= 7 && PPn4 <= 60) &&
    (PPn10 >= 0 && PPn10 <= 15) &&
    (PPn20 >= 0 && PPn20 <= 7) &&
    (PPn200 >= 0 && PPn200 <= 1.70)) {
    resultado = "Accepted";
     } else {
     resultado = "Rejected";
    }


    var pasante3;
  
  if (PP3 === "") {
    pasante3 = 100;
  } else {
    pasante3 = PP3;
  }
   
    var ctgravel = 100-pasante3;
    var gravel = pasante3-PPn4;
    var sand = PPn4-PPn200;
    var fines = PPn200;


  var p5 = parseFloat(document.getElementById("20").value);
  var p4 = parseFloat(document.getElementById("25").value);
  var p3p5 = parseFloat(document.getElementById("30").value);
  var p3 = parseFloat(document.getElementById("35").value);
  var p2m5 = parseFloat(document.getElementById("40").value);
  var p2 = parseFloat(document.getElementById("44").value);
  var p1m5 = parseFloat(document.getElementById("49").value);
  var p1 = parseFloat(document.getElementById("55").value);
  var p3m4 = parseFloat(document.getElementById("61").value);
  var p3m8 = parseFloat(document.getElementById("67").value);
  var no4 = parseFloat(document.getElementById("73").value);
  var no10 = parseFloat(document.getElementById("79").value);
  var no16 = parseFloat(document.getElementById("84").value);
  var no20 = parseFloat(document.getElementById("89").value);
  var no50 = parseFloat(document.getElementById("94").value);
  var no60 = parseFloat(document.getElementById("98").value);
  var no200 = parseFloat(document.getElementById("102").value);

  var tamanos = [0.075, 0.25, 0.30, 0.85, 1.18, 2.00, 4.75, 9.5, 19.5, 25.4, 38.1, 50.80, 63.50,
    76.2, 101.6, 127];
  var porcentajes = [no200, no60, no50, no20, no16, no10, no4, p3m8, p3m4, p1, p1m5,
    p2, p2m5, p3, p3p5, p4, p5];

    function calcularDiametro(d) {
      function buscarIndice() {
    for (var i = 0; i < porcentajes.length; i++) {
      if (porcentajes[i] >= d) {
        return i;
      }
    }
    return porcentajes.length - 1; // Si no se encuentra un índice, se devuelve el último
  }

  var indice = buscarIndice();
  if (porcentajes[indice] == d) {
    return tamanos[indice];
  } else {
    // Realizar interpolación logarítmica
    var logD = Math.log(d);
    var logD1 = Math.log(porcentajes[indice - 1]);
    var logD2 = Math.log(porcentajes[indice]);
    var logT1 = Math.log(tamanos[indice - 1]);
    var logT2 = Math.log(tamanos[indice]);
    var resultadoD = Math.exp(logT1 + (logD - logD1) * (logT2 - logT1) / (logD2 - logD1));
    return resultadoD;
  }
}

var d10 = calcularDiametro(10)||0;
var d15 = calcularDiametro(15)||0;
var d30 = calcularDiametro(30)||0;
var d60 = calcularDiametro(60)||0;
var d85 = calcularDiametro(85)||0;
  
var Cc = (Math.pow(d30, 2) / (d10 * d60))||0;
var Cu = (d60 / d10)||0;

function clasificarSuelo() {
    if (gravel > sand && fines < 5 && Cu >= 4 && Cc >= 1 && Cc <= 3 && sand < 15) {
        return "GW-Well graded gravel";
    } else if (gravel > sand && fines < 5 && Cu >= 4 && Cc >= 1 && Cc <= 3 && sand >= 15) {
        return "GW-Well graded gravel with sand";
    } else if (gravel > sand && fines < 5 && Cu < 4 && Cc < 1  && sand < 15) {
        return "GP-Poorly graded gravel";
      } else if (gravel > sand && fines < 5 && Cu < 4 &&  Cc > 3 && sand < 15) {
        return "GP-Poorly graded gravel";
    } else if (gravel > sand && fines < 5 && Cu < 4 && Cc < 1 && sand >= 15) {
        return "GP-Poorly graded gravel with sand";
      } else if (gravel > sand && fines < 5 && Cu < 4 &&  Cc > 3 && sand >= 15) {
        return "GP-Poorly graded gravel with sand";
    } else if (gravel > sand && fines >= 5 && fines <= 12 && Cu >= 4 && Cc >= 1 && Cc <= 3 && (fines == "ML" || fines == "MH") && sand < 15) {
        return "GW-GM-Well graded gravel with silt";
    } else if (gravel > sand && fines >= 5 && fines <= 12 && Cu >= 4 && Cc >= 1 && Cc <= 3 && (fines == "ML" || fines == "MH") && sand >= 15) {
        return "GW-GM-Well graded gravel with silt and sand";
    } else if (gravel > sand && fines >= 5 && fines <= 12 && Cu >= 4 && Cc >= 1 && Cc <= 3 && (fines == "CL" || fines == "CH") && sand < 15) {
        return "GW-GC-Well graded gravel with clay";
    } else if (gravel > sand && fines >= 5 && fines <= 12 && Cu >= 4 && Cc >= 1 && Cc <= 3 && (fines == "CL" || fines == "CH") && sand >= 15) {
        return "GW-GC-Well graded gravel with clay and sand";
    } else if (gravel > sand && fines >= 5 && fines <= 12 && Cu < 4 && Cc < 1 && Cc > 3 && (fines == "ML" || fines == "MH") && sand < 15) {
        return "GP-GM-Poorly graded gravel with silt";
    } else if (gravel > sand && fines >= 5 && fines <= 12 && Cu < 4 && Cc < 1 && Cc > 3 && (fines == "ML" || fines == "MH") && sand >= 15) {
        return "GP-GM-Poorly graded gravel with silt and sand";
    } else if (gravel > sand && fines >= 5 && fines <= 12 && Cu < 4 && Cc < 1 && Cc > 3 && (fines == "CL" || fines == "CH") && sand < 15) {
        return "GP-GC-Poorly graded gravel with clay";
    } else if (gravel > sand && fines >= 5 && fines <= 12 && Cu < 4 && Cc < 1 && Cc > 3 && (fines == "CL" || fines == "CH") && sand >= 15) {
        return "GP-GC-Poorly graded gravel with clay and sand";
    } else if (gravel > sand && fines >= 5 && fines > 12 && (fines == "ML" || fines == "MH") && sand < 15) {
        return "GM-Silty gravel";
    } else if (gravel > sand && fines >= 5 && fines > 12 && (fines == "ML" || fines == "MH") && sand >= 15) {
        return "GM-Silty gravel with sand";
    } else if (gravel > sand && fines >= 5 && fines > 12 && (fines == "CL" || fines == "CH") && sand < 15) {
        return "GC-Clayey gravel";
    } else if (gravel > sand && fines >= 5 && fines > 12 && (fines == "CL" || fines == "CH") && sand >= 15) {
        return "GC-Clayey gravel with sand";
    } else if (gravel > sand && fines >= 5 && fines > 12 && (fines == "CL" || fines == "ML") && sand < 15) {
        return "GC-GM-Silty clayey gravel";
    } else if (gravel > sand && fines >= 5 && fines > 12 && (fines == "CL" || fines == "ML") && sand >= 15) {
        return "GC-GM-Silty clayey gravel with sand";
    } else if (sand > gravel && fines < 5 && Cu >= 6 && Cc >= 1 && Cc <= 3 && gravel < 15) {
        return "SW-Well graded sand";
    } else if (sand > gravel && fines < 5 && Cu >= 6 && Cc >= 1 && Cc <= 3 && gravel >= 15) {
        return "SW-Well graded sand with gravel";
    } else if (sand > gravel && fines < 5 && Cu < 6 && Cc < 1 && gravel < 15) {
        return "SP-Poorly graded sand";
      } else if (sand > gravel && fines < 5 && Cu < 6 &&  Cc > 3 && gravel < 15) {
        return "SP-Poorly graded sand";
    } else if (sand > gravel && fines < 5 && Cu < 6 && (Cc < 1 || Cc > 3) && gravel >= 15) {
        return "SP-Poorly graded sand with gravel";
    } else if (sand > gravel && fines >= 5 && fines <= 12 && Cu >= 6 && Cc >= 1 && Cc <= 3 && (fines == "ML" || fines == "MH") && gravel < 15) {
        return "SW-SM-Well graded sand with silt";
    } else if (sand >gravel && fines >= 5 && fines <= 12 && Cu >= 6 && Cc >= 1 && Cc <= 3 && (fines == "ML" || fines == "MH") && gravel>= 15) {
        return "SW-SM-Well graded sand with silt and sand";
      } else if (sand > gravel && fines >= 5 && fines <= 12 && Cu >= 6 && Cc >= 1 && Cc <= 3 && (fines == "CL" || fines == "CH") && gravel< 15) {
        return "SW-SC-Well graded sand with clay";
    } else if (sand > gravel && fines >= 5 && fines <= 12 && Cu >= 6 && Cc >= 1 && Cc <= 3 && (fines == "CL" || fines == "CH") && gravel >= 15) {
        return "SW-SC-Well graded sand with clay and sand";
    } else if (sand > gravel && fines >= 5 && fines <= 12 && Cu < 6 && Cc < 1 && Cc > 3 && (fines == "ML" || fines == "MH") && gravel < 15) {
        return "SP-SM-Poorly graded sand with silt";
    } else if (sand > gravel && fines >= 5 && fines <= 12 && Cu < 6 && Cc < 1 && Cc > 3 && (fines == "ML" || fines == "MH") && gravel>= 15) {
        return "SP-SM-Poorly graded sand with silt and sand";
    } else if (sand > gravel && fines >= 5 && fines <= 12 && Cu < 6 && Cc < 1 && Cc > 3 && (fines == "CL" || fines == "CH") && gravel < 15) {
        return "SP-SC-Poorly graded sand with clay";
    } else if (sand > gravel && fines >= 5 && fines <= 12 && Cu < 6 && Cc < 1 && Cc > 3 && (fines == "CL" || fines == "CH") && gravel>= 15) {
        return "SP-SC-Poorly graded sand with clay and sand";
    } else if (sand > gravel && fines >= 5 && fines > 12 && (fines == "ML" || fines == "MH") && gravel < 15) {
        return "SM-Silty sand";
    } else if (sand > gravel && fines >= 5 && fines > 12 && (fines == "ML" || fines == "MH") && gravel >= 15) {
        return "SM-Silty sand with gravel";
    } else if (sand > gravel && fines >= 5 && fines > 12 && (fines == "CL" || fines == "CH") && gravel < 15) {ss
        return "SC-Clayey sand";
    } else if (sand > gravel && fines >= 5 && fines > 12 && (fines == "CL" || fines == "CH") && gravel >= 15) {
        return "SC-Clayey sand with gravel";
    } else if (sand > gravel && fines >= 5 && fines > 12 && (fines == "CL" || fines == "ML") && gravel < 15) {
        return "SC-GM-Silty clayey sand";
    } else if (sand > gravel && fines >= 5 && fines > 12 && (fines == "CL" || fines == "ML") && gravel >= 15) {
        return "SC-GM-Silty clayey sand with gravel";
    } else {
        return "Error: No se pudo clasificar el suelo.";
    }
}

 var clasificacion = clasificarSuelo();

    //pasando los valores al los inputs.
    document.getElementById("14").value = APR.toFixed(0);
    document.getElementById("15").value = RsR;
    document.getElementById("16").value = ARTR;
    document.getElementById("3").value = WDS.toFixed(2);
    document.getElementById("5").value = WWpan.toFixed(2);

    document.getElementById("18").value = PR5.toFixed(2);
    document.getElementById("19").value = CPR5.toFixed(2);
    document.getElementById("20").value = PP5.toFixed(2);

    document.getElementById("23").value = PR4.toFixed(2);
    document.getElementById("24").value = CPR4.toFixed(2);
    document.getElementById("25").value = PP4.toFixed(2);

    document.getElementById("28").value = PR3p5.toFixed(2);
    document.getElementById("29").value = CPR3p5.toFixed(2);
    document.getElementById("30").value = PP3p5.toFixed(2);

    document.getElementById("33").value = PR3.toFixed(2);
    document.getElementById("34").value = CPR3.toFixed(2);
    document.getElementById("35").value = PP3.toFixed(2);

    document.getElementById("38").value = PR2p5.toFixed(2);
    document.getElementById("39").value = CPR2p5.toFixed(2);
    document.getElementById("40").value = PP2p5.toFixed(2);

    document.getElementById("42").value = PR2.toFixed(2);
    document.getElementById("43").value = CPR2.toFixed(2);
    document.getElementById("44").value = PP2.toFixed(2);
  
    document.getElementById("47").value = PR1p5.toFixed(2);
    document.getElementById("48").value = CPR1p5.toFixed(2);
    document.getElementById("49").value = PP1p5.toFixed(2);

    document.getElementById("53").value = PR1.toFixed(2);
    document.getElementById("54").value = CPR1.toFixed(2);
    document.getElementById("55").value = PP1.toFixed(2);

    document.getElementById("59").value = PR3p4.toFixed(2);
    document.getElementById("60").value = CPR3p4.toFixed(2);
    document.getElementById("61").value = PP3p4.toFixed(2);
    
    document.getElementById("65").value = PR3p8.toFixed(2);
    document.getElementById("66").value = CPR3p8.toFixed(2);
    document.getElementById("67").value = PP3p8.toFixed(2);

    document.getElementById("71").value = PRn4.toFixed(2);
    document.getElementById("72").value = CPRn4.toFixed(2);
    document.getElementById("73").value = PPn4.toFixed(2);

    document.getElementById("77").value = PRn10.toFixed(2);
    document.getElementById("78").value = CPRn10.toFixed(2);
    document.getElementById("79").value = PPn10.toFixed(2);

    document.getElementById("82").value = PRn16.toFixed(2);
    document.getElementById("83").value = CPRn16.toFixed(2);
    document.getElementById("84").value = PPn16.toFixed(2);

    document.getElementById("87").value = PRn20.toFixed(2);
    document.getElementById("88").value = CPRn20.toFixed(2);
    document.getElementById("89").value = PPn20.toFixed(2);

    document.getElementById("92").value = PRn50.toFixed(2);
    document.getElementById("93").value = CPRn50.toFixed(2);
    document.getElementById("94").value = PPn50.toFixed(2);

    document.getElementById("96").value = PRn60.toFixed(2);
    document.getElementById("97").value = CPRn60.toFixed(2);
    document.getElementById("98").value = PPn60.toFixed(2);

    document.getElementById("100").value = PRn200.toFixed(2);
    document.getElementById("101").value = CPRn200.toFixed(2);
    document.getElementById("102").value = PPn200.toFixed(2);

    document.getElementById("105").value = PRpan.toFixed(2);

    document.getElementById("109").value = WRTP.toFixed(2);
    document.getElementById("110").value = PRTP.toFixed(2);
    document.getElementById("111").value = CPRTP.toFixed(2);
    document.getElementById("112").value = PPTP.toFixed(2);
    document.getElementById("114").value = resultado;

    document.getElementById("116").value = ctgravel.toFixed(2);
    document.getElementById("117").value = gravel.toFixed(2);
    document.getElementById("118").value = sand.toFixed(2);
    document.getElementById("119").value = fines.toFixed(2);

    document.getElementById("120").value = d10.toFixed(2);
    document.getElementById("121").value = d15.toFixed(2);
    document.getElementById("122").value = d30.toFixed(2);
    document.getElementById("123").value = d60.toFixed(2);
    document.getElementById("124").value = d85.toFixed(2);
    document.getElementById("125").value = Cc.toFixed(2);
    document.getElementById("126").value = Cu.toFixed(2);
    document.getElementById("115").value = clasificacion;

  }
</script>

<script>
    function enviarData(event) {
      event.preventDefault()
      $.ajax({
        url: "libs/js/gs_coarse_agg.js",
        type: "POST",
        data: $("#mxy").serialize(),
        success: function(data) {
          $("#resultado").html(data);
        }
      });


    }
    $(document).ready(function() {
    $('#sug_input').keyup(function() {
      var query = $(this).val();
      if (query != '') {
        $.ajax({
          url: "ajax.php",
          method: "POST",
          data: {
            query: query
          },
          success: function(data) {
            $('#result').html(data);
          }
        });
      } else {
        $('#result').html('');
      }
    });
  });
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<?php include_once('layouts/footer.php'); ?>