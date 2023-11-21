<?php
$page_title = 'Grain Size Calculation ';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);
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
<span>Grain Size Calculation</span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="" onsubmit="calcular();calcularD();">

<div>
  <table class="table table-bordered" style="width: 100%;">
    <thead>
      <caption></caption>
    </thead>
    <tbody>
      <tr></tr>
    </tbody>
    <tbody id="product_info"></tbody>
  </table>
</div>

<table class="table table-bordered">
<thead>
</div>

</div>
<div class="col-xs-4">
<label >Standard</label>
<select class="form-control" name="Standard">
<option selected>Choose...</option>
<option value="ASTM-C136">ASTM-C136</option>         
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
<select class="form-control" name="Split">
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
  <table class="table table-bordered border-primary" style="width: 350px;">
  <thead>
  </thead>
  <tbody>
  
  <tr>
  <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Container</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="1" name="Container"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Wet Soil + Tare (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="2" name="TareWetSoil"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil + Tare (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="3" name="TareDrySoil" oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row"> Tare (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="4" name="Tare" oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Dry Soil (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="5" name="DrySoil" oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Washed (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="6" name="Washed" oninput="calcular()"></td>
  </tr>
  
  <tr>
  <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Wt Wash Pan (gr):</th>
  <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="7" name="WashPan" oninput="calcular()"></td>
  </tr>
  </table>
</div>


<div style="margin-left: 1%;">
  <table class="table table-bordered border-primary" style="width: 350px;">
      <thead>
  </thead>
  <tbody>
      <tr>
        <th style="font-size: 15px;" style="width: 550px; height: 25px;"scope="row">Coarse Than Gravel %:</th>
        <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="112" name="CoarserThanGravel" oninput="calcular()"></td>
      </tr>
      <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Gravel %:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="113" name="Gravel" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Sand %:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="114" name="sand" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row"> Fines %:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="115" name="Fines" oninput="calcular()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D10 (mm):</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="116" name="d10" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D15 (mm):</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="117" name="d15" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D30 (mm)::</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="118" name="d30" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D60 (mm)::</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="119" name="d60" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">D85 (mm)::</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="120" name="d85" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Cc:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="121" name="Cc" oninput="calcularD()"></td>
        </tr>
        <tr>
          <th style="font-size: 15px;" style="width: 150px; height: 25px;"scope="row">Cu:</th>
          <td><input type="text" style="border: none;" size="12" style="background: transparent;"id="122" name="Cu" oninput="calcularD()"></td>
        </tr>
  </tbody>
  </table>
</div>

<div style="display: flex; flex-direction: row-reverse; justify-content: center; margin-top: -50%;">
  <table class="table table-bordered border-primary" style="width: 450px;">
  <thead>
  <tr>
  <th scope="col">Screen</th>
  <th scope="col">mm</th>
  <th scope="col">Wt Ret</th>
  <th scope="col">% Ret</th>
  <th scope="col">Cum % Ret</th>
  <th scope="col">% Pass</th>
  <th scope="col">Specs</th>
   </tr>
      </thead>
      <tbody>  
        <tr>
          <th scope="row">12"</th>
          <td>304.8</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="12" name="WtRet12" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="13" name="Ret12" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="14" name="CumRet12" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="15" name="Pass12" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;" oninput="calcular()"></td>
        </tr>
        <tr>
          <th scope="row">3"</th>
          <td>76.2</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="36" name="WtRet3" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="37" name="Ret3" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="38" name="CumRet3" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="39" name="Pass3" oninput="calcular()"></td>
          <td><input type="text" value="100" style="text-align: center; border: none;" size="4" style="background: transparent;"></td>
        </tr>
        <tr>
          <th scope="row">1.5"</th>
          <td>38.1</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="48" name="WtRet1p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="49" name="Ret1p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="50" name="CumRet1p5" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="51" name="Pass1p5" oninput="calcular()"></td>
          <td><input type="text" value="" style="text-align: center; border: none;" size="4" style="background: transparent;"></td>
        </tr>
        <tr>
          <th scope="row">1"</th>
          <td>25.4</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="52" name="WtRet1" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="53" name="Ret1" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="54" name="CumRet1" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="55" name="Pass1" oninput="calcular()"></td>
          <td><input type="text" value="" style="text-align: center; border: none;" size="4" style="background: transparent;"></td>
        </tr>
        <tr>
          <th scope="row">3/4"</th>
          <td>19.5</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="56" name="WtRet3p4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="57" name="Ret3p4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="58" name="CumRet3p4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="59" name="Pass3p4" oninput="calcular()"></td>
          <td><input type="text" value="80-100" style="text-align: center; border: none;" size="4" style="background: transparent;"></td>
        </tr>
        <tr>
          <th scope="row">3/8"</th>
          <td>9.5</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="64" name="WtRet3p8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="65" name="Ret3p8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="66" name="CumRet3p8" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="67" name="Pass3p8" oninput="calcular()"></td>
          <td><input type="text" value="70-100" style="text-align: center; border: none;" size="4" style="background: transparent;"></td>
        </tr>
        <tr>
          <th scope="row">No. 4</th>
          <td>4.75</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="68" name="WtRetn4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="69" name="Retn4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="70" name="CumRetn4" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="71" name="Passn4" oninput="calcular()"></td>
          <td><input type="text" value="60-100" style="text-align: center; border: none;" size="4" style="background: transparent;"></td>
        </tr>
        <tr>
          <th scope="row">No. 10</th>
          <td>2.00</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="72" name="WtRetn10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="73" name="Retn10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="74" name="CumRetn10" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="75" name="Passn10" oninput="calcular()"></td>
          <td><input type="text" value="50-100" style="text-align: center; border: none;" size="4" style="background: transparent;"></td>
        </tr>
        <tr>
          <th scope="row">No. 16</th>
          <td>1.18</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="76" name="WtRetn16" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="77" name="Retn16" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="78" name="CumRetn16" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="79" name="Passn16" oninput="calcular()"></td>
          <td><input type="text" value="" style="text-align: center; border: none;" size="4" style="background: transparent;"></td>
        </tr>
        <tr>
          <th scope="row">No. 20</th>
          <td>0.85</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="80" name="WtRetn20" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="81" name="Retn20" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="82" name="CumRetn20" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="83" name="Passn20" oninput="calcular()"></td>
          <td><input type="text" value="" style="text-align: center; border: none;" size="4" style="background: transparent;"></td>
        </tr>
        <tr>
          <th scope="row">No. 50</th>
          <td>0.30</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="84" name="WtRetn50" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="85" name="Retn50" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="86" name="CumRetn50" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="87" name="Passn50" oninput="calcular()"></td>
          <td><input type="text" value="" style="text-align: center; border: none;" size="4" style="background: transparent;"></td>
        </tr>
        <tr>
          <th scope="row">No. 60</th>
          <td>0.25</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="88" name="WtRetn60" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="89" name="Retn60" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="90" name="CumRetn60" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="91" name="Passn60" oninput="calcular()"></td>
          <td><input type="text" value="" style="text-align: center; border: none;" size="4" style="background: transparent;"></td>
        </tr>
        <tr>
          <th scope="row">No. 200</th>
          <td>0.075</td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="100" name="WtRetn200" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="101" name="Retn200" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="102" name="CumRetn200" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="103" name="Passn200" oninput="calcular()"></td>
          <td><input type="text" value="25-94" style="text-align: center; border: none;" size="4" style="background: transparent;"></td>
        </tr>
        <tr>
          <th scope="row" colspan="2">Pan</th>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="104" name="WtRentPan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="105" name="RetPan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="106" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="107" oninput="calcular()"></td>
          <td><input type="text" value="" style="text-align: center; border: none;" size="4" style="background: transparent;"></td>
        </tr>
        <tr>
          <th scope="row" colspan="2"> Total Pan</th>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="108" name="WtRetTpan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="109" name="RetTTPan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="110" name="CumRetPan" oninput="calcular()"></td>
          <td><input type="text" style="border: none;" size="4" style="background: transparent;"id="111" name="PassnPan" oninput="calcular()"></td>
          <td><input type="text" value="" style="text-align: center; border: none;" size="4" style="background: transparent;"></td>
        </tr>
      </tbody>
    </table>
</div>




  


<script>
  function calcular() {
    var WDST = parseFloat(document.getElementById("3").value);
    var wtare = parseFloat(document.getElementById("4").value);
    var wWashed = parseFloat(document.getElementById("6").value);
    var WR12 = parseFloat(document.getElementById("12").value);
    var WR3 = parseFloat(document.getElementById("36").value);
    var WR1P5 = parseFloat(document.getElementById("48").value);
    var WR1 = parseFloat(document.getElementById("52").value);
    var WR3P4 = parseFloat(document.getElementById("56").value);
    var WR3P8 = parseFloat(document.getElementById("64").value);
    var WRN4 = parseFloat(document.getElementById("68").value);
    var WRN10 = parseFloat(document.getElementById("72").value);
    var WRN16= parseFloat(document.getElementById("76").value);
    var WRN20 = parseFloat(document.getElementById("80").value);
    var WRN50 = parseFloat(document.getElementById("84").value);
    var WRN60 = parseFloat(document.getElementById("88").value);
    var WRN200 = parseFloat(document.getElementById("100").value);
    var WRPAN = parseFloat(document.getElementById("104").value);

    var WDS = WDST - wtare;
    var WWpan = WDS - wWashed;
    
    //Tamiz 12 pulgadas
    var PR12 = (WR12/WDS)*100;
    var CPR12 = PR12 + 0;
    var PP12 = 100 - CPR12;

    //Tamiz 3 pulgadas
    var PR3 = (WR3/WDS)*100;
    var CPR3 = PR3+CPR12;
    var PP3 = 100-CPR3;

    //Tamiz 1.5 pulgadas
    var PR1p5 = (WR1P5/WDS)*100;
    var CPR1p5 = PR1p5+CPR3;
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

  var p12 = parseFloat(document.getElementById("15").value);
  var p3 = parseFloat(document.getElementById("39").value);
  var p1m5 = parseFloat(document.getElementById("51").value);
  var p1 = parseFloat(document.getElementById("55").value);
  var p3m4 = parseFloat(document.getElementById("59").value);
  var p3m8 = parseFloat(document.getElementById("67").value);
  var no4 = parseFloat(document.getElementById("71").value);
  var no10 = parseFloat(document.getElementById("75").value);
  var no16 = parseFloat(document.getElementById("79").value);
  var no20 = parseFloat(document.getElementById("83").value);
  var no50 = parseFloat(document.getElementById("87").value);
  var no60 = parseFloat(document.getElementById("91").value);
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
  [p1, 25.0, p1m5, 37.5],
  [p1m5, 37.5, p3, 75.0],
  [p3, 75.0, p12, 300],
  [p12, 300, 0.0, 0],
];

const d10 = buscarFilaValorAproximado(10, datos, 3);
const valoresX10 = [d10[1], d10[3]];
const valoresY10 = [d10[0], d10[2]];
const D10 = calcularResultado(10, valoresX10, valoresY10);

const d15 = buscarFilaValorAproximado(15, datos, 3);
const valoresX15 = [d15[1], d15[3]];
const valoresY15 = [d15[0], d15[2]];
const D15 = calcularResultado(15, valoresX15, valoresY15);

const d30 = buscarFilaValorAproximado(30, datos, 3);
const valoresX30 = [d30[1], d30[3]];
const valoresY30 = [d30[0], d30[2]];
const D30 = calcularResultado(30, valoresX30, valoresY30);

const d60 = buscarFilaValorAproximado(60, datos, 3);
const valoresX60 = [d60[1], d60[3]];
const valoresY60 = [d60[0], d60[2]];
const D60 = calcularResultado(60, valoresX60, valoresY60);

const d85 = buscarFilaValorAproximado(85, datos, 3);
const valoresX85 = [d85[1], d85[3]];
const valoresY85 = [d85[0], d85[2]];
const D85 = calcularResultado(85, valoresX85, valoresY85);

var Cc = (Math.pow(D30, 2) / (D10 * D60));
var Cu = (D60 / D10);

    //pasamos los valores a los inputs
    document.getElementById("5").value = WDS.toFixed(2);
    document.getElementById("7").value = WWpan.toFixed(2);

    document.getElementById("13").value = PR12.toFixed(2);
    document.getElementById("14").value = CPR12.toFixed(2);
    document.getElementById("15").value = PP12.toFixed(2);

    document.getElementById("37").value = PR3.toFixed(2);
    document.getElementById("38").value = CPR3.toFixed(2);
    document.getElementById("39").value = PP3.toFixed(2);

    document.getElementById("49").value = PR1p5.toFixed(2);
    document.getElementById("50").value = CPR1p5.toFixed(2);
    document.getElementById("51").value = PP1p5.toFixed(2);

    document.getElementById("53").value = PR1.toFixed(2);
    document.getElementById("54").value = CPR1.toFixed(2);
    document.getElementById("55").value = PP1.toFixed(2);

    document.getElementById("57").value = PR3p4.toFixed(2);
    document.getElementById("58").value = CPR3p4.toFixed(2);
    document.getElementById("59").value = PP3p4.toFixed(2);

    document.getElementById("65").value = PR3p8.toFixed(2);
    document.getElementById("66").value = CPR3p8.toFixed(2);
    document.getElementById("67").value = PP3p8.toFixed(2);

    document.getElementById("69").value = PRn4.toFixed(2);
    document.getElementById("70").value = CPRn4.toFixed(2);
    document.getElementById("71").value = PPn4.toFixed(2);

    document.getElementById("73").value = PRn10.toFixed(2);
    document.getElementById("74").value = CPRn10.toFixed(2);
    document.getElementById("75").value = PPn10.toFixed(2);

    document.getElementById("77").value = PRn16.toFixed(2);
    document.getElementById("78").value = CPRn16.toFixed(2);
    document.getElementById("79").value = PPn16.toFixed(2);

    document.getElementById("81").value = PRn20.toFixed(2);
    document.getElementById("82").value = CPRn20.toFixed(2);
    document.getElementById("83").value = PPn20.toFixed(3);

    document.getElementById("85").value = PRn50.toFixed(2);
    document.getElementById("86").value = CPRn50.toFixed(2);
    document.getElementById("87").value = PPn50.toFixed(2);

    document.getElementById("89").value = PRn60.toFixed(2);
    document.getElementById("90").value = CPRn60.toFixed(2);
    document.getElementById("91").value = PPn60.toFixed(2);

    document.getElementById("101").value = PRn200.toFixed(2);
    document.getElementById("102").value = CPRn200.toFixed(2);
    document.getElementById("103").value = PPn200.toFixed(2);

    document.getElementById("105").value = PRpan.toFixed(2);
    document.getElementById("108").value = WRTP.toFixed(2);
    document.getElementById("109").value = PRTP.toFixed(2);
    document.getElementById("110").value = CPRTP.toFixed(2);
    document.getElementById("111").value = PPTP.toFixed(2);

    document.getElementById("112").value = ctgravel.toFixed(2);
    document.getElementById("113").value = gravel.toFixed(2);
    document.getElementById("114").value = sand.toFixed(2);
    document.getElementById("115").value = fines.toFixed(2);

    document.getElementById("116").value = D10.toFixed(2);
    document.getElementById("117").value = D15.toFixed(2);
    document.getElementById("118").value = D30.toFixed(2);
    document.getElementById("119").value = D60.toFixed(2);
    document.getElementById("120").value = D85.toFixed(2);
    document.getElementById("121").value = Cc.toFixed(2);
    document.getElementById("122").value = Cu.toFixed(2);
  }
</script>


<div style="margin-left: 25%;">
  <div id="gs_lpf" style="height: 600px; width: 1070px;"></div>
</div>


<button type="submit" name="Grain_Size" class="btn btn-danger">Registrar ensayo</button>
<button type="submit" name="grainsize" class="btn btn-primary" onclick="enviarData(event)">Graficar</button>
</form>
</div>
</div>
</div>
</div>

<script>
    function enviarData(event) {
      event.preventDefault()
      $.ajax({
        url: "libs/js/GS_LPF.JS",
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
  <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>

<?php include_once('layouts/footer.php'); ?>