<?php
$page_title = 'Grain size Fine Aggregate';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/GrainSizeFine.php'); 
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
<span>Laboratory sieved Grain size Fine Aggregate</span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="gs_fine_agg.php" onsubmit="calcular();">

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
  <td><input type="text" style="border: none;" size="12" style="background: transparent;" name="Container" id=""></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Wet Soil + Tare (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;" name="TareWetSoil" id=""></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil + Tare (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;" name="TareDrySoil" id="10"oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row"> Tare (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;" name="Tare" id="11"oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;" name="DrySoil" id="12" oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Washed (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;" name="Washed" id="13" oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px; text-align: end;" style="width: 150px; height: 25px;"scope="row">Wt Wash Pan (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;" name="WashPan" id="14" oninput="calcular()"></td>
  </tr>

  </table>
</div>


<div>
    <table class="table table-bordered" style="width: 310px; margin-left: 3%;">
        <thead>
            <caption>Reactivity Test Method FM13-006</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Weight used for the Test (g):</th>
                <td><input type="text" style="border: none; background: transparent;" size="12" id="1" name="WeightusedfortheTestg" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">A Particles Reactive #:</th>
                <td><input type="text" style="border: none; background: transparent;" size="12" id="2" name="AParticlesReactive" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">B Particles Reactive #:</th>
                <td><input type="text" style="border: none; background: transparent;" size="12" id="3" name="BParticlesReactive" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">C Particles Reactive #:</th>
                <td><input type="text" style="border: none; background: transparent;" size="12" id="4" name="CParticlesReactive" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">D Particles Reactive #:</th>
                <td><input type="text" style="border: none; background: transparent;" size="12" id="5" name="DParticlesReactive" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">E Particles Reactive #:</th>
                <td><input type="text" style="border: none; background: transparent;" size="12" id="6" name="EParticlesReactive" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Average Particles Reactive:</th>
                <td><input type="text" style="border: none; background: transparent;" size="12" id="7" name="AverageParticlesReactive" oninput="calcular()"></td>
            </tr>

            <tr>
                <th style="font-size: 12px; text-align: end;" style="width: 550px; height: 25px;"scope="row">Reaction Strength Result:</th>
                <td><input type="text" style="border: none; background: transparent;" size="12" id="8" name="ReactionStrengthResult" oninput="calcular()"></td>
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
                <th style="font-size: 11px; text-align: center;" style="width: 550px; height: 25px;"scope="row">Acid Reactivity Test Result</th>
                <td><input type="text" style="border: none; background: transparent; text-align: center;" id="9" name="AcidReactivityTestResult" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="display: flex; flex-direction: row-reverse; margin-right: 1%; margin-top: -50%;">
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
            <th style="text-align: center;" scope="row">12"</th>
            <td>300</td>
            <td><input type="text" name="WtRet5127" style="text-align: center; border: none;" size="4" style="background: transparent;"id="15" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet5127" style="text-align: center; border: none;" size="4" style="background: transparent;"id="16" oninput="calcular()"></td>
            <td><input type="text" name="CumRet5127" style="text-align: center; border: none;" size="4" style="background: transparent;"id="17" oninput="ccalcular()"></td>
            <td><input type="text" name="PorcePass5127" style="text-align: center; border: none;" size="4" style="background: transparent;"id="18" oninput="calcular()"></td>
            <td><input type="text" name="Specs5127" style="text-align: center; border: none;" size="4" style="background: transparent;"id="19" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">3"</th>
            <td>75</td>
            <td><input type="text" name="WtRet375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="30" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="31" oninput="calcular()"></td>
            <td><input type="text" name="CumRet375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="32" oninput="calcular()"></td>
            <td><input type="text" name="PorcePass375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="33" oninput="calcular()"></td>
            <td><input type="text" name="Specs375" style="text-align: center; border: none;" size="4" style="background: transparent;"id="34" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1.5"</th>
            <td>37.5</td>
            <td><input type="text" name="WtRet1p537" style="text-align: center; border: none;" size="4" style="background: transparent;"id="45" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet1p537" style="text-align: center; border: none;" size="4" style="background: transparent;"id="46" oninput="calcular()"></td>
            <td><input type="text" name="CumRet1p537" style="text-align: center; border: none;" size="4" style="background: transparent;"id="47" oninput="calcular()"></td>
            <td><input type="text" name="PorcePass1p537" style="text-align: center; border: none;" size="4" style="background: transparent;"id="48" oninput="calcular()"></td>
            <td><input type="text" name="Specs1p537" value="" style="text-align: center; border: none;" size="4" style="background: transparent;"id="49" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">1"</th>
            <td>25</td>
            <td><input type="text" name="WtRet125" style="text-align: center; border: none;" size="4" style="background: transparent;"id="50" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet125" style="text-align: center; border: none;" size="4" style="background: transparent;"id="51" oninput="calcular()"></td>
            <td><input type="text" name="CumRet125" style="text-align: center; border: none;" size="4" style="background: transparent;"id="52" oninput="calcular()"></td>
            <td><input type="text" name="PorcePass125" style="text-align: center; border: none;" size="4" style="background: transparent;"id="53" oninput="calcular()"></td>
            <td><input type="text" name="Specs125" value="" style="text-align: center; border: none;" size="4" style="background: transparent;"id="54" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">3/4"</th>
            <td>19</td>
            <td><input type="text" name="WtRet3p419" style="text-align: center; border: none;" size="4" style="background: transparent;"id="55" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet3p419" style="text-align: center; border: none;" size="4" style="background: transparent;"id="56" oninput="calcular()"></td>
            <td><input type="text" name="CumRet3p419" style="text-align: center; border: none;" size="4" style="background: transparent;"id="57" oninput="calcular()"></td>
            <td><input type="text" name="PorcePass3p419" style="text-align: center; border: none;" size="4" style="background: transparent;"id="58" oninput="calcular()"></td>
            <td><input type="text" name="Specs3p419" value="" style="text-align: center; border: none;" size="4" style="background: transparent;"id="59" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">3/8"</th>
            <td>9.5</td>
            <td><input type="text" name="WtRet3p89" style="text-align: center; border: none;" size="4" style="background: transparent;"id="65" oninput="calcular()"></td>
            <td><input type="text" name="PorceRet3p89" style="text-align: center; border: none;" size="4" style="background: transparent;"id="66" oninput="calcular()"></td>
            <td><input type="text" name="CumRet3p89" style="text-align: center; border: none;" size="4" style="background: transparent;"id="67" oninput="calcular()"></td>
            <td><input type="text" name="PorcePass3p89" style="text-align: center; border: none;" size="4" style="background: transparent;"id="68" oninput="calcular()"></td>
            <td><input type="text" name="Specs3p89" value="100" style="text-align: center; border: none;" size="4" style="background: transparent;"id="69" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">No. 4</th>
            <td>4.75</td>
            <td><input type="text" name="WtRetNo44" style="text-align: center; border: none;" size="4" style="background: transparent;"id="70" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetNo44" style="text-align: center; border: none;" size="4" style="background: transparent;"id="71" oninput="calcular()"></td>
            <td><input type="text" name="CumRetNo44" style="text-align: center; border: none;" size="4" style="background: transparent;"id="72" oninput="calcular()"></td>
            <td><input type="text" name="PorcePassNo44" style="text-align: center; border: none;" size="4" style="background: transparent;"id="73" oninput="calcular()"></td>
            <td><input type="text" name="SpecsNo44" value="95-100" style="text-align: center; border: none;" size="4" style="background: transparent;"id="74" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">No. 10</th>
            <td>2</td>
            <td><input type="text" name="WtRetNo102" style="text-align: center; border: none;" size="4" style="background: transparent;"id="75" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetNo102" style="text-align: center; border: none;" size="4" style="background: transparent;"id="76" oninput="calcular()"></td>
            <td><input type="text" name="CumRetNo102" style="text-align: center; border: none;" size="4" style="background: transparent;"id="77" oninput="calcular()"></td>
            <td><input type="text" name="PorcePassNo102" style="text-align: center; border: none;" size="4" style="background: transparent;"id="78" oninput="calcular()"></td>
            <td><input type="text" name="SpecsNo102" value="65-100"style="text-align: center; border: none;" size="4" style="background: transparent;"id="79" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">No. 16</th>
            <td>1.18</td>
            <td><input type="text" name="WtRetNo161" style="text-align: center; border: none;" size="4" style="background: transparent;"id="80" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetNo161" style="text-align: center; border: none;" size="4" style="background: transparent;"id="81" oninput="calcular()"></td>
            <td><input type="text" name="CumRetNo161" style="text-align: center; border: none;" size="4" style="background: transparent;"id="82" oninput="calcular()"></td>
            <td><input type="text" name="PorcePassNo161" style="text-align: center; border: none;" size="4" style="background: transparent;"id="83" oninput="calcular()"></td>
            <td><input type="text" name="SpecsNo161" value="50-85" style="text-align: center; border: none;" size="4" style="background: transparent;"id="84" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">No. 20</th>
            <td>0.85</td>
            <td><input type="text" name="WtRetNo200p85" style="text-align: center; border: none;" size="4" style="background: transparent;"id="85" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetNo200p85" style="text-align: center; border: none;" size="4" style="background: transparent;"id="86" oninput="calcular()"></td>
            <td><input type="text" name="CumRetNo200p85" style="text-align: center; border: none;" size="4" style="background: transparent;"id="87" oninput="calcular()"></td>
            <td><input type="text" name="PorcePassNo200p85" style="text-align: center; border: none;" size="4" style="background: transparent;"id="88" oninput="calcular()"></td>
            <td><input type="text" name="SpecsNo200p85" value="" style="text-align: center; border: none;" size="4" style="background: transparent;"id="89" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row">No. 50</th>
            <td>0.30</td>
            <td><input type="text" name="WtRetNo500p3" style="text-align: center; border: none;" size="4" style="background: transparent;"id="90" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetNo500p3" style="text-align: center; border: none;" size="4" style="background: transparent;"id="91" oninput="calcular()"></td>
            <td><input type="text" name="CumRetNo500p3" style="text-align: center; border: none;" size="4" style="background: transparent;"id="92" oninput="calcular()"></td>
            <td><input type="text" name="PorcePassNo500p3" style="text-align: center; border: none;" size="4" style="background: transparent;"id="93" oninput="calcular()"></td>
            <td><input type="text" name="SpecsNo500p3" value="5-30" style="text-align: center; border: none;" size="4" style="background: transparent;"id="94" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center; font-size: 15px;" scope="row">No. 60</th>
            <td>0.25</td>
            <td><input type="text" name="WtRetNo600p25" style="border: none;" size="4" style="background: transparent;"id="95" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetNo600p25" style="border: none;" size="4" style="background: transparent;"id="96" oninput="calcular()"></td>
            <td><input type="text" name="CumRetNo600p25" style="border: none;" size="4" style="background: transparent;"id="97" oninput="calcular()"></td>
            <td><input type="text" name="PorcePassNo600p25" style="border: none;" size="4" style="background: transparent;"id="98" oninput="calcular()"></td>
            <td><input type="text" name="SpecsNo600p25" value="0-25" style="text-align: center; border: none;" size="4" style="background: transparent;"id="99" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center; font-size: 15px;" scope="row">No. 200</th>
            <td>0.075</td>
            <td><input type="text" name="WtRetNo2000p075" style="border: none;" size="4" style="background: transparent;"id="100" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetNo2000p075" style="border: none;" size="4" style="background: transparent;"id="101" oninput="calcular()"></td>
            <td><input type="text" name="CumRetNo2000p075" style="border: none;" size="4" style="background: transparent;"id="102" oninput="calcular()"></td>
            <td><input type="text" name="PorcePassNo2000p075" style="border: none;" size="4" style="background: transparent;"id="103" oninput="calcular()"></td>
            <td><input type="text" name="SpecsNo2000p075" value="0-5" style="text-align: center; border: none;" size="4" style="background: transparent;"id="104" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row" colspan="2">Pan</th>
            <td><input type="text" name="WtRetPan" style="border: none;" size="4" style="background: transparent;"id="105" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetPan" style="border: none;" size="4" style="background: transparent;"id="106" oninput="calcular()"></td>
            <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;"id="107" oninput="calcular()"></td>
            <td><input type="text" name="" style="border: none;" size="4" style="background: transparent;"id="108" oninput="calcular()"></td>
            <td><input type="text" name="" style="text-align: center; border: none;" size="4" style="background: transparent;"id="104" oninput="calcular()"></td>
          </tr>
          <tr>
            <th style="text-align: center;" scope="row" colspan="2"> Total Pan</th>
            <td><input type="text" name="WtRetTotalPan" style="border: none;" size="4" style="background: transparent;"id="109" oninput="calcular()"></td>
            <td><input type="text" name="PorceRetTotalPan" style="border: none;" size="4" style="background: transparent;"id="110" oninput="calcular()"></td>
            <td><input type="text" name="CumRetTotalPan" style="border: none;" size="4" style="background: transparent;"id="111" oninput="calcular()"></td>
            <td><input type="text" name="PorcePassTotalPan" style="border: none;" size="4" style="background: transparent;"id="112" oninput="calcular()"></td>
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
                <td><input type="text" style="border: none; background: transparent; text-align: center;" id="114" name="GrainSizeTestResultNo1" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
  </div>

  <div style="display: flex; flex-direction: row-reverse; margin-right: 18%;">
    <table class="table table-bordered border-primary" style="width: 180px;">
        <thead>
            <caption style="text-align: center;">Fine Grained Classification using the USCS</caption>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" style="border: none; background: transparent; text-align: center;" size="20" id="115" name="GrainSizeTestResultNo2" oninput="calcular()"></td>
            </tr>

        </tbody>
    </table>
</div>

<div style="display: flex; flex-direction: row-reverse; margin-right: 5%;">
  <table class="table table-bordered" style="width: 320px;">
        <thead>
            <caption>Summary Grain Size Distribution Parameter</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Coarser than Gravel%</th>
                <td><input type="text" name="CoarserthanGravel" style="border: none; background: transparent; text-align: center;" id="117" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Gravel%</th>
                <td><input type="text" name="Gravel" style="border: none; background: transparent; text-align: center;" id="118" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Sand%</th>
                <td><input type="text" name="Sand" style="border: none; background: transparent; text-align: center;" id="119" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Fines%</th>
                <td><input type="text" name="Fines" style="border: none; background: transparent; text-align: center;" id="120" oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">D10 (mm) :</th>
                <td><input type="text" name="D10" style="border: none; background: transparent; text-align: center;" id="121" oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">D30 (mm) :</th>
                <td><input type="text" name="D30" style="border: none; background: transparent; text-align: center;" id="123" oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">D60 (mm) :</th>
                <td><input type="text" name="D60" style="border: none; background: transparent; text-align: center;" id="124" oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Cc:</th>
                <td><input type="text" name="Cc" style="border: none; background: transparent; text-align: center;" id="126" oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 12px; text-align: end;" scope="row">Cu :</th>
                <td><input type="text" name="Cu" style="border: none; background: transparent; text-align: center;" id="127" oninput="calcularD()"></td>
            </tr>
        </tbody>
    </table>
</div>

<div>
  <div id="gs_ff" style="height: 600px; width: 1070px; display: flex; flex-direction: row-reverse; margin-top: -25%;"></div>
</div>

<button type="submit" name="GrainSizeFine" class="btn btn-danger">Registrar ensayo</button>
<button type="submit" name="gsfineagg" class="btn btn-primary" onclick="enviarData(event)">Graficar</button>
</form>
</div>
</div>
</div>
</div>

<script>
  function calcular() {

    var w20gr = parseFloat(document.getElementById("1").value);
    var PRA = parseFloat(document.getElementById("2").value);
    var PRB = parseFloat(document.getElementById("3").value);
    var PRC = parseFloat(document.getElementById("4").value);
    var PRD = parseFloat(document.getElementById("5").value);
    var PRE = parseFloat(document.getElementById("6").value);

    var WDST = parseFloat(document.getElementById("10").value);
    var wtare = parseFloat(document.getElementById("11").value);
    var wWashed = parseFloat(document.getElementById("13").value);
    var WR12 = parseFloat(document.getElementById("15").value);
    var WR3 = parseFloat(document.getElementById("30").value);
    var WR1P5 = parseFloat(document.getElementById("45").value);
    var WR1 = parseFloat(document.getElementById("50").value);
    var WR3P4 = parseFloat(document.getElementById("55").value);
    var WR3P8 = parseFloat(document.getElementById("65").value);
    var WRN4 = parseFloat(document.getElementById("70").value);
    var WRN10 = parseFloat(document.getElementById("75").value);
    var WRN16= parseFloat(document.getElementById("80").value);
    var WRN20 = parseFloat(document.getElementById("85").value);
    var WRN50 = parseFloat(document.getElementById("90").value);
    var WRN60 = parseFloat(document.getElementById("95").value);
    var WRN200 = parseFloat(document.getElementById("100").value);
    var WRPAN = parseFloat(document.getElementById("105").value);


    var count = 0;
    if (PRA != 0) count++;
    if (PRB != 0) count++;
    if (PRC != 0) count++;
    if (PRD != 0) count++;
    if (PRE != 0) count++;

    // Calcular el promedio en función del número de inputs con valor
    var APR;
    if (count > 0) {
      APR = (PRA + PRB + PRC + PRD + PRE) / count;
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
    var PR12 = (WR12/WDS)*100;
    var CPR12 = PR12 + 0;
    var PP12 = 100 - CPR12;

    //Tamiz 4 pulgadas
    var PR3 = (WR3/WDS)*100;
    var CPR3 = PR3+CPR12;
    var PP3 = 100-CPR3;

    //Tamiz 3.5 pulgadas
    var PR1p5 = (WR1P5/WDS)*100;
    var CPR1p5 = PR1p5+CPR3;
    var PP1p5 = 100-CPR1p5;

    //Tamiz 3 pulgadas
    var PR1 = (WR1/WDS)*100;
    var CPR1 = PR1+CPR1p5;
    var PP1 = 100-CPR1;

    //Tamiz 2.5 pulgadas
    var PR3p4 = (WR3P4/WDS)*100;
    var CPR3p4 = PR3p4+CPR1;
    var PP3p4 = 100-CPR3p4;

    //Tamiz 2 pulgadas
    var PR3p8 = (WR3P8/WDS)*100;
    var CPR3p8 = PR3p8+CPR3p4;
    var PP3p8 = 100-CPR3p8;
  
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
      
    
      if (PP3p8 === 100 &&
    (PPn4 >= 95 && PPn4 <= 100) &&
    (PPn10 >= 65 && PPn10 <= 100) &&
    (PPn16 >= 50 && PPn16 <= 85) &&
    (PPn50 >= 5 && PPn50 <= 30) &&
    (PPn60 >= 0 && PPn60 <= 25) &&
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


  var p12 = parseFloat(document.getElementById("18").value);
  var p3 = parseFloat(document.getElementById("33").value);
  var p1p5 = parseFloat(document.getElementById("48").value);
  var p1 = parseFloat(document.getElementById("53").value);
  var p3m4 = parseFloat(document.getElementById("58").value);
  var p3m8 = parseFloat(document.getElementById("68").value);
  var no4 = parseFloat(document.getElementById("73").value);
  var no10 = parseFloat(document.getElementById("78").value);
  var no16 = parseFloat(document.getElementById("83").value);
  var no20 = parseFloat(document.getElementById("88").value);
  var no50 = parseFloat(document.getElementById("93").value);
  var no60 = parseFloat(document.getElementById("98").value);
  var no200 = parseFloat(document.getElementById("103").value);

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
  [no200, 0.075, no60, 0.25],
  [no60, 0.25, no50, 0.30],
  [no50, 0.30, no20, 0.85],
  [no20, 0.850, no16, 1.18],
  [no16, 1.18, no10, 2.00],
  [no10, 2.00, no4, 4.75],
  [no4, 4.75, p3m8, 9.50],
  [p3m8, 9.50, p3m4, 19.0],
  [p3m4, 19.0, p1, 25.0],
  [p1, 25.0, p1p5, 37.5],
  [p1p5, 37.5, p3, 75.0],
  [p3, 75.0, p12, 300],
  [p12, 300, 0.0, 0],
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

var Cc = (Math.pow(D30, 2) / (D10 * D60));
var Cu = (D60 / D10);

function clasificarSuelo() {
    if (gravel > sand && fines < 5 && Cu >= 4 && Cc >= 1 && Cc <= 3 && sand < 15) {
        return "GW-Well graded gravel";
    } else if (gravel > sand && fines < 5 && Cu >= 4 && Cc >= 1 && Cc <= 3 && sand >= 15) {
        return "GW-Well graded gravel with sand";
    } else if (gravel > sand && fines < 5 && Cu < 4 && (Cc < 1 || Cc > 3) && sand < 15) {
        return "GP-Poorly graded gravel";
    } else if (gravel > sand && fines < 5 && Cu < 4 && (Cc < 1 || Cc > 3) && sand >= 15) {
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
    document.getElementById("7").value = APR.toFixed(0);
    document.getElementById("8").value = RsR;
    document.getElementById("9").value = ARTR;
    document.getElementById("12").value = WDS.toFixed(2);
    document.getElementById("14").value = WWpan.toFixed(2);

    document.getElementById("16").value = PR12.toFixed(2);
    document.getElementById("17").value = CPR12.toFixed(2);
    document.getElementById("18").value = PP12.toFixed(2);

    document.getElementById("31").value = PR3.toFixed(2);
    document.getElementById("32").value = CPR3.toFixed(2);
    document.getElementById("33").value = PP3.toFixed(2);

    document.getElementById("46").value = PR1p5.toFixed(2);
    document.getElementById("47").value = CPR1p5.toFixed(2);
    document.getElementById("48").value = PP1p5.toFixed(2);

    document.getElementById("51").value = PR1.toFixed(2);
    document.getElementById("52").value = CPR1.toFixed(2);
    document.getElementById("53").value = PP1.toFixed(2);

    document.getElementById("56").value = PR3p4.toFixed(2);
    document.getElementById("57").value = CPR3p4.toFixed(2);
    document.getElementById("58").value = PP3p4.toFixed(2);

    document.getElementById("66").value = PR3p8.toFixed(2);
    document.getElementById("67").value = CPR3p8.toFixed(2);
    document.getElementById("68").value = PP3p8.toFixed(2);

    document.getElementById("71").value = PRn4.toFixed(2);
    document.getElementById("72").value = CPRn4.toFixed(2);
    document.getElementById("73").value = PPn4.toFixed(2);

    document.getElementById("76").value = PRn10.toFixed(2);
    document.getElementById("77").value = CPRn10.toFixed(2);
    document.getElementById("78").value = PPn10.toFixed(2);

    document.getElementById("81").value = PRn16.toFixed(2);
    document.getElementById("82").value = CPRn16.toFixed(2);
    document.getElementById("83").value = PPn16.toFixed(2);

    document.getElementById("86").value = PRn20.toFixed(2);
    document.getElementById("87").value = CPRn20.toFixed(2);
    document.getElementById("88").value = PPn20.toFixed(2);

    document.getElementById("91").value = PRn50.toFixed(2);
    document.getElementById("92").value = CPRn50.toFixed(2);
    document.getElementById("93").value = PPn50.toFixed(2);

    document.getElementById("96").value = PRn60.toFixed(2);
    document.getElementById("97").value = CPRn60.toFixed(2);
    document.getElementById("98").value = PPn60.toFixed(2);

    document.getElementById("101").value = PRn200.toFixed(2);
    document.getElementById("102").value = CPRn200.toFixed(2);
    document.getElementById("103").value = PPn200.toFixed(2);

    document.getElementById("106").value = PRpan.toFixed(2);

    document.getElementById("109").value = WRTP.toFixed(2);
    document.getElementById("110").value = PRTP.toFixed(2);
    document.getElementById("111").value = CPRTP.toFixed(2);
    document.getElementById("112").value = PPTP.toFixed(2);
    document.getElementById("114").value = resultado;

    document.getElementById("117").value = ctgravel.toFixed(2);
    document.getElementById("118").value = gravel.toFixed(2);
    document.getElementById("119").value = sand.toFixed(2);
    document.getElementById("120").value = fines.toFixed(2);

    document.getElementById("121").value = D10.toFixed(2);
    document.getElementById("123").value = D30.toFixed(2);
    document.getElementById("124").value = D60.toFixed(2);
    document.getElementById("126").value = Cc.toFixed(2);
    document.getElementById("127").value = Cu.toFixed(2);
    document.getElementById("115").value = clasificacion;

  }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function enviarData(event) {
      event.preventDefault()
      $.ajax({
        url: "libs/js/GS_FF.js",
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


<?php include_once('layouts/footer.php'); ?>