<?php
$page_title = 'Grain size Coarse  thanAggregate';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/GrainSizeCoarse.php'); 
}
?>

<?php include_once('layouts/header.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/regression/2.0.1/regression.min.js" integrity="sha512-0k6FXllQktdobw8Nc8KQN2WtZrOuxpMn7jC2RKCF6LR7EdOhhrg3H5cBPxhs3CFzQVlO6ni1B9SDLUPhBs0Alg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/regression/2.0.1/regression.js" integrity="sha512-PHHRPMxJK1xGYLQPv9FoDbCF2X23Ao1lMAD52oLY9TBW033s4zwIXl5JQBGlfI2iOx3W1qP3LAS/MMv5Ttj0aQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="row">
<div class="col-md-6">
<?php echo display_msg($msg); ?>
<form method="post" action="ajax.php" autocomplete="off" id="sug-form">
<div class="form-group">
<div class="input-group">
<span class="input-group-btn">
<button type="submit" class="btn btn-primary">Búsqueda</button>
</span>
<input type="text" id="sug_input" class="form-control" name="title"  placeholder="Buscar por el nombre de la muestra">
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
    <option selected>Choose...</option>
    <option value="ASTM- C136">ASTM- C136</option>         
    </select>
    </div>
    
    <div class="col-xs-4">
    <label >Preparation Method</label>
    <select class="form-control" name="PreparationMethod">
    <option selected>Choose...</option>
    <option value="Oven_Dried">Oven Dried</option>
    <option value="Air_Dried">Air Dried</option>
    </select>
    </div>
    
    <div class="col-xs-4">
    <label >Split Method</label>
    <select class="form-control" name="SplitMethod">
    <option selected>Choose...</option>
    <option value="Mech_Split">Mech. Split</option>
    <option value="Man_Split">Manual Split</option>
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
    <input class="form-control" name="TestStartDate" type="date">
    </div>
    </div>
    

<div>
  <table class="table table-bordered border-primary" style="width: 300px; margin-left: 2%;">
  <thead>
    <caption>Testing Information</caption>
  </thead>
  <tbody>
  
    <tr>
      <th style="font-size: 15px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Container</th>
      <td><input type="text" name="Container" style="border: none;" size="12" style="background: transparent;"id=""></td>
      </tr>
      
      <tr>
      <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Wet Soil + Tare (gr):</th>
      <td><input type="text" name="TareWetSoil" style="border: none;" size="12" style="background: transparent;"id=""></td>
      </tr>
      
      <tr>
      <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil + Tare (gr):</th>
      <td><input type="text" name="TareDrySoil" style="border: none;" size="12" style="background: transparent;"id="1"oninput="calcular()"></td>
      </tr>
      
      <tr>
      <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row"> Tare (gr):</th>
      <td><input type="text" name="Tare" style="border: none;" size="12" style="background: transparent;"id="2"oninput="calcular()"></td>
      </tr>
      
      <tr>
      <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil (gr):</th>
      <td><input type="text" name="DrySoil" style="border: none;" size="12" style="background: transparent;"id="3" oninput="calcular()"></td>
      </tr>
      
      <tr>
      <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Washed (gr):</th>
      <td><input type="text" name="Washed" style="border: none;" size="12" style="background: transparent;"id="4" oninput="calcular()"></td>
      </tr>
      
      <tr>
      <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Wash Pan (gr):</th>
      <td><input type="text" name="WashPan" style="border: none;" size="12" style="background: transparent;"id="5" oninput="calcular()"></td>
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
                <td><input type="text" name="TotalSampleWeightg" style="border: none; background: transparent;" size="12" id="6" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Weight used for the Test (g):</th>
                <td><input type="text" name="WeightusedfortheTestg" style="border: none; background: transparent;" size="12" id="7" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">A Particles Reactive #:</th>
                <td><input type="text" name="AParticlesReactive" style="border: none; background: transparent;" size="12" id="8" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">B Particles Reactive #:</th>
                <td><input type="text" name="BParticlesReactive" style="border: none; background: transparent;" size="12" id="9" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">C Particles Reactive #:</th>
                <td><input type="text" name="CParticlesReactive" style="border: none; background: transparent;" size="12" id="10" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Weight Mat. Ret. No. 4 (If Applicable)</th>
                <td><input type="text" name="WeightMatRetNo4IfApplicable" style="border: none; background: transparent;" size="12" id="11" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Wt Reactive Part. Ret. No.4 (If Applicable)</th>
                <td><input type="text" name="WtReactivePartRetNo4IfApplicable" style="border: none; background: transparent;" size="12" id="12" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Percent Reactive Particles (If Applicable)</th>
                <td><input type="text" name="PercentReactiveParticlesIfApplicable" style="border: none; background: transparent;" size="12" id="13" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Average Particles Reactive:</th>
                <td><input type="text" name="AverageParticlesReactive" style="border: none; background: transparent;" size="12" id="14" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Reaction Strength Result:</th>
                <td><input type="text" name="ReactionStrengthResult" style="border: none; background: transparent;" size="12" id="15" oninput="calcular()"></td>
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
                <td><input type="text" style="border: none; background: transparent; text-align: center;" id="16" name="AcidReactivityTestResult" oninput="calcular()"></td>
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
            <th style="text-align: center;" scope="row">4"</th>
            <td>101.6</td>
            <td><input type="text" name="WtRet4101" style="text-align: center; border: none;" size="4" style="background: transparent;"id="22" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet4101" style="text-align: center; border: none;" size="4" style="background: transparent;"id="23" oninput="calcular()"></td>
            <td><input type="text" name="CumRet4101" style="text-align: center; border: none;" size="4" style="background: transparent;"id="24" oninput="calcular()"></td>
            <td><input type="text" name="PorcePass4101" style="text-align: center; border: none;" size="4" style="background: transparent;"id="25" oninput="calcular()"></td>
            <td><input type="text" name="Specs4101" style="text-align: center; border: none;" size="4" style="background: transparent;"id="26" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">3.5"</th>
            <td>89.0</td>
            <td><input type="text" name="WtRet3p589" style="text-align: center; border: none;" size="4" style="background: transparent;"id="27" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet3p589" style="text-align: center; border: none;" size="4" style="background: transparent;"id="28" oninput="calcular()"></td>
            <td><input type="text" name="CumRet3p589" style="text-align: center; border: none;" size="4" style="background: transparent;"id="29" oninput="calcular()"></td>
            <td><input type="text" name="PorcePass3p589" style="text-align: center; border: none;" size="4" style="background: transparent;"id="30" oninput="calcular()"></td>
            <td><input type="text" name="Specs3p589" style="text-align: center; border: none;" size="4" style="background: transparent;"id="31" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">3"</th>
            <td>75</td>
            <td><input type="text" name="WtRet375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="32" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="33" oninput="calcular()"></td>
            <td><input type="text" name="CumRet375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="34" oninput="calcular()"></td>
            <td><input type="text" name="PorcePass375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="35" oninput="calcular()"></td>
            <td><input type="text" name="Specs375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="36" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">2.5"</th>
            <td>63</td>
            <td><input type="text" name="WtRet2p563" style="text-align: center; border: none;" size="4" style="background: transparent;"id="37" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet2p563" style="text-align: center; border: none;" size="4" style="background: transparent;"id="38" oninput="calcular()"></td>
            <td><input type="text" name="CumRet2p563" style="text-align: center; border: none;" size="4" style="background: transparent;"id="39" oninput="calcular()"></td>
            <td><input type="text" name="PorcePass2p563" style="text-align: center; border: none;" size="4" style="background: transparent;"id="40" oninput="calcular()"></td>
            <td><input type="text" name="Specs2p563" style="text-align: center; border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">2"</th>
            <td>50.8</td>
            <td><input type="text" name="WtRet250" style="text-align: center; border: none;" size="4" style="background: transparent;"id="41" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet250" style="text-align: center; border: none;" size="4" style="background: transparent;"id="42" oninput="calcular()"></td>
            <td><input type="text" name="CumRet250" style="text-align: center; border: none;" size="4" style="background: transparent;"id="43" oninput="calcular()"></td>
            <td><input type="text" name="PorcePass250" style="text-align: center; border: none;" size="4" style="background: transparent;"id="44" oninput="calcular()"></td>
            <td><input type="text" name="Specs250" value="100" style="text-align: center; border: none;" size="4" style="background: transparent;"id="45" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1.5"</th>
            <td>37.50</td>
            <td><input type="text" name="WtRet1p537" style="text-align: center; border: none;" size="4" style="background: transparent;"id="46" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet1p537" style="text-align: center; border: none;" size="4" style="background: transparent;"id="47" oninput="calcular()"></td>
            <td><input type="text" name="CumRet1p537" style="text-align: center; border: none;" size="4" style="background: transparent;"id="48" oninput="calcular()"></td>
            <td><input type="text" name="PorcePass1p537" style="text-align: center; border: none;" size="4" style="background: transparent;"id="49" oninput="calcular()"></td>
            <td><input type="text" name="Specs1p537" value=""style="text-align: center; border: none;" size="4" style="background: transparent;"id="51" oninput="calcular()"></td>
            
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1"</th>
            <td>25</td>
            <td><input type="text" name="WtRet125" style="text-align: center; border: none;" size="4" style="background: transparent;"id="52" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet125" style="text-align: center; border: none;" size="4" style="background: transparent;"id="53" oninput="calcular()"></td>
            <td><input type="text" name="CumRet125" style="text-align: center; border: none;" size="4" style="background: transparent;"id="54" oninput="calcular()"></td>
            <td><input type="text" name="PorcePass125" style="text-align: center; border: none;" size="4" style="background: transparent;"id="55" oninput="calcular()"></td>
            <td><input type="text" name="Specs125" value=""style="text-align: center; border: none;" size="4" style="background: transparent;"id="57" oninput="calcular()"></td>
      
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">3/4"</th>
            <td>19.00</td>
            <td><input type="text" name="WtRet3p419" style="text-align: center; border: none;" size="4" style="background: transparent;"id="58" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet3p419" style="text-align: center; border: none;" size="4" style="background: transparent;"id="59" oninput="calcular()"></td>
            <td><input type="text" name="CumRet3p419" style="text-align: center; border: none;" size="4" style="background: transparent;"id="60" oninput="calcular()"></td>
            <td><input type="text" name="PorcePass3p419" style="text-align: center; border: none;" size="4" style="background: transparent;"id="61" oninput="calcular()"></td>
            <td><input type="text" name="Specs3p419" value=""style="text-align: center; border: none;" size="4" style="background: transparent;"id="63" oninput="calcular()"></td>
            </tr>
            <tr>
            <th style="text-align: center;" scope="row">1/2</th>
            <td>12.5</td>
            <td><input type="text" name="WtRetNo161" style="text-align: center; border: none;" size="4" style="background: transparent;"id="81" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetNo161" style="text-align: center; border: none;" size="4" style="background: transparent;"id="82" oninput="calcular()"></td>
            <td><input type="text" name="CumRetNo161" style="text-align: center; border: none;" size="4" style="background: transparent;"id="83" oninput="calcular()"></td>
            <td><input type="text" name="PorcePassNo161" style="text-align: center; border: none;" size="4" style="background: transparent;"id="84" oninput="calcular()"></td>
            <td><input type="text" name="SpecsNo161" style="text-align: center; border: none;" size="4" style="background: transparent;"id="" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">3/8"</th>
            <td>9.5</td>
            <td><input type="text" name="WtRet3p89" style="text-align: center; border: none;" size="4" style="background: transparent;"id="64" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet3p89" style="text-align: center; border: none;" size="4" style="background: transparent;"id="65" oninput="calcular()"></td>
            <td><input type="text" name="CumRet3p89" style="text-align: center; border: none;" size="4" style="background: transparent;"id="66" oninput="calcular()"></td>
            <td><input type="text" name="PorcePass3p89" style="text-align: center; border: none;" size="4" style="background: transparent;"id="67" oninput="calcular()"></td>
            <td><input type="text" name="Specs3p89" value=""style="text-align: center; border: none;" size="4" style="background: transparent;"id="69" oninput="calcular()"></td>          </tr>
          <tr>
            <th style="text-align: center;" scope="row">No. 4</th>
            <td>4.75</td>
            <td><input type="text" name="WtRetNo44" style="text-align: center; border: none;" size="4" style="background: transparent;"id="70" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetNo44" style="text-align: center; border: none;" size="4" style="background: transparent;"id="71" oninput="calcular()"></td>
            <td><input type="text" name="CumRetNo44" style="text-align: center; border: none;" size="4" style="background: transparent;"id="72" oninput="calcular()"></td>
            <td><input type="text" name="PorcePassNo44" style="text-align: center; border: none;" size="4" style="background: transparent;"id="73" oninput="calcular()"></td>
            <td><input type="text" name="SpecsNo44" value=""style="text-align: center; border: none;" size="4" style="background: transparent;"id="75" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">No. 10</th>
            <td>2</td>
            <td><input type="text" name="WtRetNo102" style="text-align: center; border: none;" size="4" style="background: transparent;"id="76" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetNo102" style="text-align: center; border: none;" size="4" style="background: transparent;"id="77" oninput="calcular()"></td>
            <td><input type="text" name="CumRetNo102" style="text-align: center; border: none;" size="4" style="background: transparent;"id="78" oninput="calcular()"></td>
            <td><input type="text" name="PorcePassNo102" style="text-align: center; border: none;" size="4" style="background: transparent;"id="79" oninput="calcular()"></td>
            <td><input type="text" name="SpecsNo102" value=""style="text-align: center; border: none;" size="4" style="background: transparent;"id="80" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center; font-size: 15px;" scope="row">No. 200</th>
            <td>0.075</td>
            <td><input type="text" name="WtRetNo2000p075" style="text-align: center; border: none;" size="4" style="background: transparent;"id="99" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetNo2000p075" style="text-align: center; border: none;" size="4" style="background: transparent;"id="100" oninput="calcular()"></td>
            <td><input type="text" name="CumRetNo2000p075" style="text-align: center; border: none;" size="4" style="background: transparent;"id="101" oninput="calcular()"></td>
            <td><input type="text" name="PorcePassNo2000p075" style="text-align: center; border: none;" size="4" style="background: transparent;"id="102" oninput="calcular()"></td>
            <td><input type="text" name="SpecsNo2000p075" value="0-5" style="text-align: center; border: none;" size="4" style="background: transparent;"id="103" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row" colspan="2">Pan</th>
            <td><input type="text" name="WtRetPan" style="text-align: center; border: none;" size="4" style="background: transparent;"id="104" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetPan" style="text-align: center; border: none;" size="4" style="background: transparent;"id="105" oninput="calcular()"></td>
            <td><input type="text" name="" style="text-align: center; border: none;" size="4" style="background: transparent;"id="106" oninput="calcular()"></td>
            <td><input type="text" name="" style="text-align: center; border: none;" size="4" style="background: transparent;"id="107" oninput="calcular()"></td>
            <td><input type="text" name="" style="text-align: center; border: none;" size="4" style="background: transparent;"id="108" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row" colspan="2"> Total Pan</th>
            <td><input type="text" name="WtRetTotalPan" style="text-align: center; border: none;" size="4" style="background: transparent;"id="109" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetTotalPan" style="text-align: center; border: none;" size="4" style="background: transparent;"id="110" oninput="calcular()"></td>
            <td><input type="text" name="CumRetTotalPan" style="text-align: center; border: none;" size="4" style="background: transparent;"id="111" oninput="calcular()"></td>
            <td><input type="text" name="PorcePassTotalPan" style="text-align: center; border: none;" size="4" style="background: transparent;"id="112" oninput="calcular()"></td>
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
                <td><input type="text" style="border: none; background: transparent; text-align: center;" name="GrainSizeTestResult" id="114" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
  </div>

  <div style="display: flex; flex-direction: row-reverse; margin-right: 18%; margin-top: 0%;">
    <table class="table table-bordered border-primary" style="width: 180px;">
        <thead>
            <caption style="text-align: center;">Fine Grained Classification using the USCS</caption>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" style="border: none; background: transparent; text-align: center;" name="FineGrainedClassificationusingtheUSCS" size="20" id="115" oninput="calcular()"></td>
            </tr>

        </tbody>
    </table>
</div>

  <div style="display: flex; flex-direction: row-reverse; margin-right: 76%; margin-top: 5%;">
    <table class="table table-bordered" style="width: 320px;">
        <thead>
            <caption>Summary Grain Size Distribution Parameter</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Coarser than Gravel%</th>
                <td><input type="text" name="CoarserthanGravel" style="border: none; background: transparent; text-align: center;" id="116" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Gravel%</th>
                <td><input type="text" name="Gravel" style="border: none; background: transparent; text-align: center;" id="117" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Sand%</th>
                <td><input type="text" name="Sand" style="border: none; background: transparent; text-align: center;" id="118" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Fines%</th>
                <td><input type="text" name="Fines" style="border: none; background: transparent; text-align: center;" id="119" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">D10 (mm) :</th>
                <td><input type="text" name="D10" style="border: none; background: transparent; text-align: center;" id="120" oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">D30 (mm) :</th>
                <td><input type="text" name="D30" style="border: none; background: transparent; text-align: center;" id="122" oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">D60 (mm) :</th>
                <td><input type="text" name="D60" style="border: none; background: transparent; text-align: center;" id="123" oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Cc:</th>
                <td><input type="text" name="Cc" style="border: none; background: transparent; text-align: center;" id="125" oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Cu :</th>
                <td><input type="text" name="Cu" style="border: none; background: transparent; text-align: center;" id="126" oninput="calcularD()"></td>
            </tr>
        </tbody>
    </table>
</div>

<div style="display: flex; margin-bottom: 10%; margin-left: 35%; margin-top: -35%;">
  <div id="gs_utf" style="width: 1000px; height: 500px;"></div>
</div>

<button type="submit" name="" class="btn btn-danger">Registrar ensayo</button>
<button type="submit" name="gscoarseagg" class="btn btn-primary" onclick="enviarData(event)">Graficar</button>
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

    var WR4 = parseFloat(document.getElementById("22").value);
    var WR3P5 = parseFloat(document.getElementById("27").value);
    var WR3 = parseFloat(document.getElementById("32").value);
    var WR2P5= parseFloat(document.getElementById("37").value);
    var WR2 = parseFloat(document.getElementById("41").value);
    var WR1P5 = parseFloat(document.getElementById("46").value);
    var WR1 = parseFloat(document.getElementById("52").value);
    var WR3P4 = parseFloat(document.getElementById("58").value);
    var WRN1P2= parseFloat(document.getElementById("81").value);
    var WR3P8 = parseFloat(document.getElementById("64").value);
    var WRN4 = parseFloat(document.getElementById("70").value);
    var WRN10 = parseFloat(document.getElementById("76").value);
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

    //Tamiz 4 pulgadas
    var PR4 = (WR4/WDS)*100;
    var CPR4 = PR4+0;
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

     //Tamiz 1p2 Pulgadas
      var PR1p2 = (WRN1P2 / WDS) * 100;
      var CPR1p2 = PR1p2 + CPR3p4;
      var PP1p2 = 100 - CPR1p2;
  

    //Tamiz 3p8 pulgadas
    var PR3p8 = (WR3P8 / WDS) * 100;
      var CPR3p8 = PR3p8 + CPR1p2;
      var PP3p8 = 100 - CPR3p8;
  
      //Tamiz No4
      var PRn4 = (WRN4 / WDS) * 100;
      var CPRn4 = PRn4 + CPR3p8;
      var PPn4 = 100 - CPRn4;
  
      //Tamiz No10
      var PRn10 = (WRN10 / WDS) * 100;
      var CPRn10 = PRn10 + CPRn4;
      var PPn10 = 100 - CPRn10;
  
      //Tamiz No200
      var PRn200 = (WRN200 / WDS) * 100;
      var CPRn200 = PRn200 + CPRn10;
      var PPn200 = 100 - CPRn200;
  
      // Pan
      var PRpan = (WRPAN / WDS) * 100;
  
      // Total Pan
      var WRTP = WRPAN + WWpan;
      var PRTP = (WRTP / WDS) * 100;
      var CPRTP = PRTP + CPRn200;
      var PPTP = 100 - CPRTP;
      
    
      if (PP2p5 === 100 &&
    (PPn200 >= 0 && PPn200 <= 5)) {
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


function buscarFilaValorAproximado(lookupValue, data, colIndex) {
  if (colIndex < 1 || colIndex > data[0].length) {
    throw new Error("Índice de columna inválido");
  }

  let closestRow = data[0];
  let closestValue = data[0][colIndex - 1];
  let closestDifference = Math.abs(closestValue - lookupValue);

  for (const row of data.slice(1)) {
    const currentValue = row[colIndex - 1];
    const currentDifference = Math.abs(currentValue - lookupValue);

    if (currentDifference < closestDifference) {
      closestRow = row;
      closestValue = currentValue;
      closestDifference = currentDifference;
    }
  }

  return closestRow;
}

function calcularResultado(lookupValue, valoresX, valoresY) {
  const result = regression.logarithmic(valoresX.map((x, i) => [x, valoresY[i]]));
  const valorB = result.equation[0];
  const valorC = result.equation[1];
  return Math.exp((lookupValue - valorB) / valorC);
}

const datos = [
  [PPn200, 0.075, PPn10, 2.00],
  [PPn10, 2.000, PPn4, 4.75],
  [PPn4, 4.750, PP3p8, 9.50],
  [PP3p8, 9.500, PP1p2, 12.50],
  [PP1p2, 12.500, PP3p4, 19.00],
  [PP3p4, 19.000, PP1, 25.00],
  [PP1, 25.000, PP1p5, 37.50],
  [PP1p5, 37.500, PP2, 50.80],
  [PP2, 50.800, 100, 63.00],
];

const d10 = buscarFilaValorAproximado(10, datos, 3);
const valoresX10 = [d10[1], d10[3]];
const valoresY10 = [d10[0], d10[2]];
const D10 = calcularResultado(10, valoresX10, valoresY10);

const d30 = buscarFilaValorAproximado(30, datos, 3);
const valoresX30 = [d30[1], d30[3]];
const valoresY30 = [d30[0], d30[2]];
const D30 = calcularResultado(30, valoresX30, valoresY30);

const d60 = buscarFilaValorAproximado(60, datos, 3);
const valoresX60 = [d60[1], d60[3]];
const valoresY60 = [d60[0], d60[2]];
const D60 = calcularResultado(60, valoresX60, valoresY60);

var Cc = Math.pow(D30, 2) / (D10 * D60);
var Cu = D60 / D10;

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

    document.getElementById("82").value = PR1p2.toFixed(2);
    document.getElementById("83").value = CPR1p2.toFixed(2);
    document.getElementById("84").value = PP1p2.toFixed(2);
    
    document.getElementById("65").value = PR3p8.toFixed(2);
    document.getElementById("66").value = CPR3p8.toFixed(2);
    document.getElementById("67").value = PP3p8.toFixed(2);

    document.getElementById("71").value = PRn4.toFixed(2);
    document.getElementById("72").value = CPRn4.toFixed(2);
    document.getElementById("73").value = PPn4.toFixed(2);

    document.getElementById("77").value = PRn10.toFixed(2);
    document.getElementById("78").value = CPRn10.toFixed(2);
    document.getElementById("79").value = PPn10.toFixed(2);

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

    document.getElementById("120").value = D10.toFixed(2);
    document.getElementById("122").value = D30.toFixed(2);
    document.getElementById("123").value = D60.toFixed(2);
    document.getElementById("125").value = Cc.toFixed(2);
    document.getElementById("126").value = Cu.toFixed(2);
    document.getElementById("115").value = clasificacion;

  }
</script>

<script>
    function enviarData(event) {
      event.preventDefault()
      $.ajax({
        url: "libs/js/GS_UTF.js",
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