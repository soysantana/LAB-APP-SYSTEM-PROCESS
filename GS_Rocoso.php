<?php
$page_title = 'Granulometria para materiales rocosos';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('db/GrainSizeRock.php'); 
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
<span>Laboratory sieved Grain size for Rocks</span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="GS_Rocoso.php" onsubmit="calcular();calcularD();">

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
      
      </div>
      <div class="col-xs-4">
      <label >Standard</label>
      <select class="form-control" name="Standard">
      <option selected>Choose...</option>
      <option value="ASTM-D6913">ASTM-D6913</option>         
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

      <div class="col-xs-4">
      <label >GS TYPE</label>
      <select class="form-control" id="opciones" onchange="cambiarOpcion()">
      <option selected>TRF</option>
      <option value="RF">RF</option>
      <option value="IRF">IRF</option>
      <option value="UFF">UFF</option>
      </select>
      </div>


      <caption>Test Information</caption>
      <table class="table table-bordered border-primary" style="width: 300px; font-size: 12px;">
          <thead>
              
          </thead>
          <tbody>
              <tr>
                  <th style="font-size: 12px;" scope="row">Screen</th>
                  <th style="font-size: 12px; text-align: center;" scope="col" colspan="7">Weight (Kg)</th>
                  <th style="font-size: 12px; text-align: center;" scope="row">Total</th>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 150px; height: 25px;"scope="row">40"</th>
                <td><input type="text" name="Screen_40_No1" style="border: none;" size="12" style="background: transparent;"id="1"oninput="calcular()"></td>
                <td><input type="text" name="Screen_40_No2" style="border: none;" size="12" style="background: transparent;"id="2"oninput="calcular()"></td>
                <td><input type="text" name="Screen_40_No3" style="border: none;" size="12" style="background: transparent;"id="3"oninput="calcular()"></td>
                <td><input type="text" name="Screen_40_No4" style="border: none;" size="12" style="background: transparent;"id="4"oninput="calcular()"></td>
                <td><input type="text" name="Screen_40_No5" style="border: none;" size="12" style="background: transparent;"id="5"oninput="calcular()"></td>
                <td><input type="text" name="Screen_40_No6" style="border: none;" size="12" style="background: transparent;"id="6"oninput="calcular()"></td>
                <td><input type="text" name="Screen_40_No7" style="border: none;" size="12" style="background: transparent;"id="7"oninput="calcular()"></td>
                <td><input type="text" name="Total_40_No8" style="border: none;" size="12" style="background: transparent;"id="71"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">30"</th>
                <td><input type="text" name="Screen_30_No1" style="border: none;" size="12" style="background: transparent;"id="8"oninput="calcular()"></td>
                <td><input type="text" name="Screen_30_No2" style="border: none;" size="12" style="background: transparent;"id="9"oninput="calcular()"></td>
                <td><input type="text" name="Screen_30_No3" style="border: none;" size="12" style="background: transparent;"id="10"oninput="calcular()"></td>
                <td><input type="text" name="Screen_30_No4" style="border: none;" size="12" style="background: transparent;"id="11"oninput="calcular()"></td>
                <td><input type="text" name="Screen_30_No5" style="border: none;" size="12" style="background: transparent;"id="12"oninput="calcular()"></td>
                <td><input type="text" name="Screen_30_No6" style="border: none;" size="12" style="background: transparent;"id="13"oninput="calcular()"></td>
                <td><input type="text" name="Screen_30_No7" style="border: none;" size="12" style="background: transparent;"id="14"oninput="calcular()"></td>
                <td><input type="text" name="Total_30_No8" style="border: none;" size="12" style="background: transparent;"id="72"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">20"</th>
                <td><input type="text" name="Screen_20_No1" style="border: none;" size="12" style="background: transparent;"id="15"oninput="calcular()"></td>
                <td><input type="text" name="Screen_20_No2" style="border: none;" size="12" style="background: transparent;"id="16"oninput="calcular()"></td>
                <td><input type="text" name="Screen_20_No3" style="border: none;" size="12" style="background: transparent;"id="17"oninput="calcular()"></td>
                <td><input type="text" name="Screen_20_No4" style="border: none;" size="12" style="background: transparent;"id="18"oninput="calcular()"></td>
                <td><input type="text" name="Screen_20_No5" style="border: none;" size="12" style="background: transparent;"id="19"oninput="calcular()"></td>
                <td><input type="text" name="Screen_20_No6" style="border: none;" size="12" style="background: transparent;"id="20"oninput="calcular()"></td>
                <td><input type="text" name="Screen_20_No7" style="border: none;" size="12" style="background: transparent;"id="21"oninput="calcular()"></td>
                <td><input type="text" name="Total_20_No8" style="border: none;" size="12" style="background: transparent;"id="73"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">13"</th>
                <td><input type="text" name="Screen_13_No1" style="border: none;" size="12" style="background: transparent;"id="22"oninput="calcular()"></td>
                <td><input type="text" name="Screen_13_No2" style="border: none;" size="12" style="background: transparent;"id="23"oninput="calcular()"></td>
                <td><input type="text" name="Screen_13_No3" style="border: none;" size="12" style="background: transparent;"id="24"oninput="calcular()"></td>
                <td><input type="text" name="Screen_13_No4" style="border: none;" size="12" style="background: transparent;"id="25"oninput="calcular()"></td>
                <td><input type="text" name="Screen_13_No5" style="border: none;" size="12" style="background: transparent;"id="26"oninput="calcular()"></td>
                <td><input type="text" name="Screen_13_No6" style="border: none;" size="12" style="background: transparent;"id="27"oninput="calcular()"></td>
                <td><input type="text" name="Screen_13_No7" style="border: none;" size="12" style="background: transparent;"id="28"oninput="calcular()"></td>
                <td><input type="text" name="Total_13_No8" style="border: none;" size="12" style="background: transparent;"id="74"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">12"</th>
                <td><input type="text" name="Screen_12_No1" style="border: none;" size="12" style="background: transparent;"id="29"oninput="calcular()"></td>
                <td><input type="text" name="Screen_12_No2" style="border: none;" size="12" style="background: transparent;"id="30"oninput="calcular()"></td>
                <td><input type="text" name="Screen_12_No3" style="border: none;" size="12" style="background: transparent;"id="31"oninput="calcular()"></td>
                <td><input type="text" name="Screen_12_No4" style="border: none;" size="12" style="background: transparent;"id="32"oninput="calcular()"></td>
                <td><input type="text" name="Screen_12_No5" style="border: none;" size="12" style="background: transparent;"id="33"oninput="calcular()"></td>
                <td><input type="text" name="Screen_12_No6" style="border: none;" size="12" style="background: transparent;"id="34"oninput="calcular()"></td>
                <td><input type="text" name="Screen_12_No7" style="border: none;" size="12" style="background: transparent;"id="35"oninput="calcular()"></td>
                <td><input type="text" name="Total_12_No8" style="border: none;" size="12" style="background: transparent;"id="75"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">10"</th>
                <td><input type="text" name="Screen_10_No1" style="border: none;" size="12" style="background: transparent;"id="36"oninput="calcular()"></td>
                <td><input type="text" name="Screen_10_No2" style="border: none;" size="12" style="background: transparent;"id="37"oninput="calcular()"></td>
                <td><input type="text" name="Screen_10_No3" style="border: none;" size="12" style="background: transparent;"id="38"oninput="calcular()"></td>
                <td><input type="text" name="Screen_10_No4" style="border: none;" size="12" style="background: transparent;"id="39"oninput="calcular()"></td>
                <td><input type="text" name="Screen_10_No5" style="border: none;" size="12" style="background: transparent;"id="40"oninput="calcular()"></td>
                <td><input type="text" name="Screen_10_No6" style="border: none;" size="12" style="background: transparent;"id="41"oninput="calcular()"></td>
                <td><input type="text" name="Screen_10_No7" style="border: none;" size="12" style="background: transparent;"id="42"oninput="calcular()"></td>
                <td><input type="text" name="Total_10_No8" style="border: none;" size="12" style="background: transparent;"id="76"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">8"</th>
                <td><input type="text" name="Screen_8_No1" style="border: none;" size="12" style="background: transparent;"id="43"oninput="calcular()"></td>
                <td><input type="text" name="Screen_8_No2" style="border: none;" size="12" style="background: transparent;"id="44"oninput="calcular()"></td>
                <td><input type="text" name="Screen_8_No3" style="border: none;" size="12" style="background: transparent;"id="45"oninput="calcular()"></td>
                <td><input type="text" name="Screen_8_No4" style="border: none;" size="12" style="background: transparent;"id="46"oninput="calcular()"></td>
                <td><input type="text" name="Screen_8_No5" style="border: none;" size="12" style="background: transparent;"id="47"oninput="calcular()"></td>
                <td><input type="text" name="Screen_8_No6" style="border: none;" size="12" style="background: transparent;"id="48"oninput="calcular()"></td>
                <td><input type="text" name="Screen_8_No7" style="border: none;" size="12" style="background: transparent;"id="49"oninput="calcular()"></td>
                <td><input type="text" name="Total_8_No8" style="border: none;" size="12" style="background: transparent;"id="77"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">6"</th>
                <td><input type="text" name="Screen_6_No1" style="border: none;" size="12" style="background: transparent;"id="50"oninput="calcular()"></td>
                <td><input type="text" name="Screen_6_No2" style="border: none;" size="12" style="background: transparent;"id="51"oninput="calcular()"></td>
                <td><input type="text" name="Screen_6_No3" style="border: none;" size="12" style="background: transparent;"id="52"oninput="calcular()"></td>
                <td><input type="text" name="Screen_6_No4" style="border: none;" size="12" style="background: transparent;"id="53"oninput="calcular()"></td>
                <td><input type="text" name="Screen_6_No5" style="border: none;" size="12" style="background: transparent;"id="54"oninput="calcular()"></td>
                <td><input type="text" name="Screen_6_No6" style="border: none;" size="12" style="background: transparent;"id="55"oninput="calcular()"></td>
                <td><input type="text" name="Screen_6_No7" style="border: none;" size="12" style="background: transparent;"id="56"oninput="calcular()"></td>
                <td><input type="text" name="Total_6_No8" style="border: none;" size="12" style="background: transparent;"id="78"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">4"</th>
                <td><input type="text" name="Screen_4_No1" style="border: none;" size="12" style="background: transparent;"id="57"oninput="calcular()"></td>
                <td><input type="text" name="Screen_4_No2" style="border: none;" size="12" style="background: transparent;"id="58"oninput="calcular()"></td>
                <td><input type="text" name="Screen_4_No3" style="border: none;" size="12" style="background: transparent;"id="59"oninput="calcular()"></td>
                <td><input type="text" name="Screen_4_No4" style="border: none;" size="12" style="background: transparent;"id="60"oninput="calcular()"></td>
                <td><input type="text" name="Screen_4_No5" style="border: none;" size="12" style="background: transparent;"id="61"oninput="calcular()"></td>
                <td><input type="text" name="Screen_4_No6" style="border: none;" size="12" style="background: transparent;"id="62"oninput="calcular()"></td>
                <td><input type="text" name="Screen_4_No7" style="border: none;" size="12" style="background: transparent;"id="63"oninput="calcular()"></td>
                <td><input type="text" name="Total_4_No8" style="border: none;" size="12" style="background: transparent;"id="79"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" style="width: 550px; height: 25px;"scope="row">3"</th>
                <td><input type="text" name="Screen_3_No1" style="border: none;" size="12" style="background: transparent;"id="64"oninput="calcular()"></td>
                <td><input type="text" name="Screen_3_No2" style="border: none;" size="12" style="background: transparent;"id="65"oninput="calcular()"></td>
                <td><input type="text" name="Screen_3_No3" style="border: none;" size="12" style="background: transparent;"id="66"oninput="calcular()"></td>
                <td><input type="text" name="Screen_3_No4" style="border: none;" size="12" style="background: transparent;"id="67"oninput="calcular()"></td>
                <td><input type="text" name="Screen_3_No5" style="border: none;" size="12" style="background: transparent;"id="68"oninput="calcular()"></td>
                <td><input type="text" name="Screen_3_No6" style="border: none;" size="12" style="background: transparent;"id="69"oninput="calcular()"></td>
                <td><input type="text" name="Screen_3_No7" style="border: none;" size="12" style="background: transparent;"id="70"oninput="calcular()"></td>
                <td><input type="text" name="Total_3_No8" style="border: none;" size="12" style="background: transparent;"id="80" oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
    
       
</div>
<div style="display: flex; justify-content: end; margin-top: -30%; margin-right: 42%; margin-top: -1%; text-align: center;">
    <table class="table table-bordered border-primary" style="width: 250px; height: 25px;">
        <thead>
            <caption>Total De Muestra  mayor de 3"</caption>
        </thead>
        <tbody>
            <th style="font-size: 12px; text-align: center;" scope="row">Kg</th>
            <th style="font-size: 12px; text-align: center;" scope="row">gr</th>
            <tr>
                <td><input type="text" name="Total_De_Muestra_Mayor_de_3_Kg" style="border: none;" size="12" style="background: transparent;"id="81"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Muestra_Mayor_de_3_Gr" style="border: none;" size="12" style="background: transparent;"id="82"oninput="calcular()"></td> 
            </tr>
        </tbody>
    </table>
</div>
<div>
           <caption>Total de Material Pasante menos 3"</caption>
    <table class="table table-bordered border-primary" style="width: 300px; font-size: 12px; margin-left: 2%;">
        <thead>
          
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum1_No1" style="border: none;" size="12" style="background: transparent;"id="83"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum1_No2" style="border: none;" size="12" style="background: transparent;"id="84"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum1_No3" style="border: none;" size="12" style="background: transparent;"id="85"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum1_No4" style="border: none;" size="12" style="background: transparent;"id="86"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum1_No5" style="border: none;" size="12" style="background: transparent;"id="87"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum1_No6" style="border: none;" size="12" style="background: transparent;"id="88"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum1_No7" style="border: none;" size="12" style="background: transparent;"id="89"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum1_No8" style="border: none;" size="12" style="background: transparent;"id="90"oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum2_No1" style="border: none;" size="12" style="background: transparent;"id="91"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum2_No2" style="border: none;" size="12" style="background: transparent;"id="92"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum2_No3" style="border: none;" size="12" style="background: transparent;"id="93"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum2_No4" style="border: none;" size="12" style="background: transparent;"id="94"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum2_No5" style="border: none;" size="12" style="background: transparent;"id="95"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum2_No6" style="border: none;" size="12" style="background: transparent;"id="96"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum2_No7" style="border: none;" size="12" style="background: transparent;"id="97"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum2_No8" style="border: none;" size="12" style="background: transparent;"id="98"oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum3_No1" style="border: none;" size="12" style="background: transparent;"id="99"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum3_No2" style="border: none;" size="12" style="background: transparent;"id="100"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum3_No3" style="border: none;" size="12" style="background: transparent;"id="101"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum3_No4" style="border: none;" size="12" style="background: transparent;"id="102"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum3_No5" style="border: none;" size="12" style="background: transparent;"id="103"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum3_No6" style="border: none;" size="12" style="background: transparent;"id="104"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum3_No7" style="border: none;" size="12" style="background: transparent;"id="105"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum3_No8" style="border: none;" size="12" style="background: transparent;"id="106"oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum4_No1" style="border: none;" size="12" style="background: transparent;"id="107"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum4_No2" style="border: none;" size="12" style="background: transparent;"id="108"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum4_No3" style="border: none;" size="12" style="background: transparent;"id="109"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum4_No4" style="border: none;" size="12" style="background: transparent;"id="110"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum4_No5" style="border: none;" size="12" style="background: transparent;"id="111"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum4_No6" style="border: none;" size="12" style="background: transparent;"id="112"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum4_No7" style="border: none;" size="12" style="background: transparent;"id="113"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum4_No8" style="border: none;" size="12" style="background: transparent;"id="114"oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum5_No1" style="border: none;" size="12" style="background: transparent;"id="115"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum5_No2" style="border: none;" size="12" style="background: transparent;"id="116"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum5_No3" style="border: none;" size="12" style="background: transparent;"id="117"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum5_No4" style="border: none;" size="12" style="background: transparent;"id="118"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum5_No5" style="border: none;" size="12" style="background: transparent;"id="119"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum5_No6" style="border: none;" size="12" style="background: transparent;"id="120"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum5_No7" style="border: none;" size="12" style="background: transparent;"id="121"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum5_No8" style="border: none;" size="12" style="background: transparent;"id="122"oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum6_No1" style="border: none;" size="12" style="background: transparent;"id="123"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum6_No2" style="border: none;" size="12" style="background: transparent;"id="124"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum6_No3" style="border: none;" size="12" style="background: transparent;"id="125"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum6_No4" style="border: none;" size="12" style="background: transparent;"id="126"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum6_No5" style="border: none;" size="12" style="background: transparent;"id="127"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum6_No6" style="border: none;" size="12" style="background: transparent;"id="128"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum6_No7" style="border: none;" size="12" style="background: transparent;"id="129"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum6_No8" style="border: none;" size="12" style="background: transparent;"id="130"oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum7_No1" style="border: none;" size="12" style="background: transparent;"id="131"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum7_No2" style="border: none;" size="12" style="background: transparent;"id="132"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum7_No3" style="border: none;" size="12" style="background: transparent;"id="133"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum7_No4" style="border: none;" size="12" style="background: transparent;"id="134"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum7_No5" style="border: none;" size="12" style="background: transparent;"id="135"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum7_No6" style="border: none;" size="12" style="background: transparent;"id="136"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum7_No7" style="border: none;" size="12" style="background: transparent;"id="137"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum7_No8" style="border: none;" size="12" style="background: transparent;"id="138"oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum8_No1" style="border: none;" size="12" style="background: transparent;"id="139"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum8_No2" style="border: none;" size="12" style="background: transparent;"id="140"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum8_No3" style="border: none;" size="12" style="background: transparent;"id="141"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum8_No4" style="border: none;" size="12" style="background: transparent;"id="142"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum8_No5" style="border: none;" size="12" style="background: transparent;"id="143"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum8_No6" style="border: none;" size="12" style="background: transparent;"id="144"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum8_No7" style="border: none;" size="12" style="background: transparent;"id="145"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum8_No8" style="border: none;" size="12" style="background: transparent;"id="146"oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum9_No1" style="border: none;" size="12" style="background: transparent;"id="147"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum9_No2" style="border: none;" size="12" style="background: transparent;"id="148"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum9_No3" style="border: none;" size="12" style="background: transparent;"id="149"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum9_No4" style="border: none;" size="12" style="background: transparent;"id="150"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum9_No5" style="border: none;" size="12" style="background: transparent;"id="151"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum9_No6" style="border: none;" size="12" style="background: transparent;"id="152"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum9_No7" style="border: none;" size="12" style="background: transparent;"id="153"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum9_No8" style="border: none;" size="12" style="background: transparent;"id="154"oninput="calcular()"></td>
            </tr>
            <tr>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum10_No1" style="border: none;" size="12" style="background: transparent;"id="155"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum10_No2" style="border: none;" size="12" style="background: transparent;"id="156"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum10_No3" style="border: none;" size="12" style="background: transparent;"id="157"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum10_No4" style="border: none;" size="12" style="background: transparent;"id="158"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum10_No5" style="border: none;" size="12" style="background: transparent;"id="159"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum10_No6" style="border: none;" size="12" style="background: transparent;"id="160"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum10_No7" style="border: none;" size="12" style="background: transparent;"id="161"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Material_Pasante_Menos_3_Colum10_No8" style="border: none;" size="12" style="background: transparent;"id="162"oninput="calcular()"></td>
            </tr>
        </tbody>
    </table>
</div>


<div style="display: flex; justify-content: end; margin-top: -30%; margin-right: 42%; margin-top: -1%;">
    <table class="table table-bordered border-primary" style="width: 250px; height: 25px;">
        <thead>
            <caption>Total De Muestra menor de 3"</caption>
        </thead>
        <tbody>
            <th style="font-size: 12px; text-align: center;" scope="row">Kg</th>
            <th style="font-size: 12px; text-align: center;" scope="row">gr</th>
            <tr>
                <td><input type="text" name="Total_De_Muestra_Menor_de_3_Kg" style="border: none;" size="12" style="background: transparent;"id="163"oninput="calcular()"></td>
                <td><input type="text" name="Total_De_Muestra_Menor_de_3_Gr" style="border: none;" size="12" style="background: transparent;"id="164"oninput="calcular()"></td> 
            </tr>
        </tbody>
    </table>
</div>




<div style="display: flex; justify-content: center; margin-top: -1%; margin-right: 10%;">
    <table class="table table-bordered border-primary" style="width:450px;">
    <thead>
    </thead>
    <caption>Moisture Content Test</caption>
    <tbody>
      <tr>
        <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content</th>
        <td><input type="text" value="1" style="border: none; text-align: center;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
        <td><input type="text" value="2" style="border: none; text-align: center;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
        <td><input type="text" value="3" style="border: none; text-align: center;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
      </tr>
      <tr>
       <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Name</th>
       <td><input type="text" name="Tare_Name_No1" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
       <td><input type="text" name="Tare_Name_No2" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
       <td><input type="text" name="Tare_Name_No3" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
      </tr>                
      <tr>
        <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Oven Temperature (°C)</th>
        <td><input type="text" name="Oven_Temperature_No1" value="110 º C" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
        <td><input type="text" name="Oven_Temperature_No2" value="110 º C" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
        <td><input type="text" name="Oven_Temperature_No3" value="110 º C" style="border: none;" size="4" style="background: transparent;" id="" oninput="calcular()"></td>
      </tr>
    <tr>
    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Wet Soil (gr)</th>
      <td><input type="text" name="Tare_Plus_Wet_Soil_Gr_No1" style="border: none;" size="4" style="background: transparent;" id="165" oninput="calcular()"></td>
      <td><input type="text" name="Tare_Plus_Wet_Soil_Gr_No2" style="border: none;" size="4" style="background: transparent;" id="166" oninput="calcular()"></td>
      <td><input type="text" name="Tare_Plus_Wet_Soil_Gr_No3" style="border: none;" size="4" style="background: transparent;" id="167" oninput="calcular()"></td>
    </tr>
    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare Plus Dry Soil (gr)</th>
      <td><input type="text" name="Tare_Plus_Dry_Soil_Gr_No1" style="border: none;" size="4" style="background: transparent;" id="168" oninput="calcular()"></td>
      <td><input type="text" name="Tare_Plus_Dry_Soil_Gr_No2" style="border: none;" size="4" style="background: transparent;" id="169" oninput="calcular()"></td>
      <td><input type="text" name="Tare_Plus_Dry_Soil_Gr_No3" style="border: none;" size="4" style="background: transparent;" id="170" oninput="calcular()"></td>
    </tr>
    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Water, Ww (gr)</th>
      <td><input type="text" name="Water_Ww_Gr_No1" style="border: none;" size="4" style="background: transparent;" id="171" oninput="calcular()"></td>
      <td><input type="text" name="Water_Ww_Gr_No2" style="border: none;" size="4" style="background: transparent;" id="172" oninput="calcular()"></td>
      <td><input type="text" name="Water_Ww_Gr_No3" style="border: none;" size="4" style="background: transparent;" id="173" oninput="calcular()"></td>
    </tr>
    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Tare (gr)</th>
      <td><input type="text" name="Tare_Gr_No1" style="border: none;" size="4" style="background: transparent;" id="174" oninput="calcular()"></td>
      <td><input type="text" name="Tare_Gr_No2" style="border: none;" size="4" style="background: transparent;" id="175" oninput="calcular()"></td>
      <td><input type="text" name="Tare_Gr_No3" style="border: none;" size="4" style="background: transparent;" id="176" oninput="calcular()"></td>
    </tr>
    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Dry Soil, Ws (gr)</th>
      <td><input type="text" name="Dry_Soil_Ws_Gr_No1" style="border: none;" size="4" style="background: transparent;" id="177" oninput="calcular()"></td>
      <td><input type="text" name="Dry_Soil_Ws_Gr_No2" style="border: none;" size="4" style="background: transparent;" id="178" oninput="calcular()"></td>
      <td><input type="text" name="Dry_Soil_Ws_Gr_No3" style="border: none;" size="4" style="background: transparent;" id="179" oninput="calcular()"></td>
    </tr>
    <th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row">Moisture Content (%)</th>
      <td><input type="text" name="Moisture_Content_Porce_No1" style="border: none;" size="4" style="background: transparent;" id="180" oninput="calcular()"></td>
      <td><input type="text" name="Moisture_Content_Porce_No2" style="border: none;" size="4" style="background: transparent;" id="181" oninput="calcular()"></td>
      <td><input type="text" name="Moisture_Content_Porce_No3" style="border: none;" size="4" style="background: transparent;" id="182" oninput="calcular()"></td>
    </tr>
</tr>
<th style="font-size: 15px;" style="width: 350px; height: 25px;" scope="row"colspan="3">Moisture Content Average (%)</th>
  <td><input type="text" name="Moisture_Content_Average_Porce" style="border: none;" size="4" style="background: transparent;" id="183" oninput="calcular()"></td>
  
</tr>
    </tbody>
  </table>
  </div>
  <div style="margin-left: 2%;">
    <table class="table table-bordered border-primary" style="width: 330px; height: 20px;">
        <thead>
            <caption></caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px;" scope="row">Mayor a 3" (gr)</th>
                <td><input type="text" name="Mayor_a_3_Gr" style="border: none;" size="12" style="background: transparent;"id="184" oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">Menor a  3" (gr)</th>
                <td><input type="text" name="Menor_a_3_Gr" style="border: none;" size="12" style="background: transparent;"id="185" oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">Total Peso Seco Sucio (gr)</th>
                <td><input type="text" name="Total_Peso_Seco_Sucio_Gr" style="border: none;" size="12" style="background: transparent;"id="186" oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">Total Peso Lavado (gr)</th>
                <td><input type="text" name="Total_Peso_Lavado_Gr" style="border: none;" size="12" style="background: transparent;"id="187" oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">Perdida por Lavado (gr)</th>
                <td><input type="text" name="Perdida_Por_Lavado_Gr" style="border: none;" size="12" style="background: transparent;"id="188" oninput="calcular()"></td> 
            </tr>
        </tbody>
    </table>
</div>

<div style="display: flex; margin-left: 2%;">
    <table class="table table-bordered border-primary" style="width: 330px; height: 20px;">
        <thead>
            <caption style="text-align: center;">GS REDUCIDA</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px;" scope="row">Peso Seco Sucio</th>
                <td><input type="text" name="Peso_Seco_Sucio" style="border: none;" size="12" style="background: transparent;"id="189"oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">Peso Lavado</th>
                <td><input type="text" name="Peso_Lavado" style="border: none;" size="12" style="background: transparent;"id="190"oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">Pan Lavado</th>
                <td><input type="text" name="Pan_Lavado" style="border: none;" size="12" style="background: transparent;"id="191"oninput="calcular()"></td> 
            </tr>
        </tbody>
    </table>
</div>


<div style="display: flex; margin-left: 2%;">
    <table class="table table-bordered border-primary" style="width: 330px; height: 20px;">
        <thead>
            <caption></caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px;" scope="row">Sieve</th>
                <th style="font-size: 15px;" scope="row">Wt. Ret.</th>
                <th style="font-size: 15px;" scope="row">%Ret.</th>
                <th style="font-size: 15px;" scope="row">%Cum. Ret.</th>
                <th style="font-size: 15px;" scope="row">%Pass</th>
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">3"</th>
                <td><input type="text" name="Wt_Ret_3" style="border: none;" size="12" style="background: transparent;"id="192" oninput="calcular()"></td>
                <td><input type="text" name="Ret_3" style="border: none;" size="12" style="background: transparent;"id="193" oninput="calcular()"></td> 
                <td><input type="text" name="Cum_Ret_3" style="border: none;" size="12" style="background: transparent;"id="194" oninput="calcular()"></td> 
                <td><input type="text" name="Pass_3" style="border: none;" size="12" style="background: transparent;"id="195" oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">2"</th>
                <td><input type="text" name="Wt_Ret_2" style="border: none;" size="12" style="background: transparent;"id="200"oninput="calcular()"></td>
                <td><input type="text" name="Ret_2" style="border: none;" size="12" style="background: transparent;"id="201"oninput="calcular()"></td> 
                <td><input type="text" name="Cum_Ret_2" style="border: none;" size="12" style="background: transparent;"id="202"oninput="calcular()"></td> 
                <td><input type="text" name="Pass_2" style="border: none;" size="12" style="background: transparent;"id="203"oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">1.5"</th>
                <td><input type="text" name="Wt_Ret_1p5" style="border: none;" size="12" style="background: transparent;"id="204"oninput="calcular()"></td>
                <td><input type="text" name="Ret_1p5" style="border: none;" size="12" style="background: transparent;"id="205"oninput="calcular()"></td> 
                <td><input type="text" name="Cum_Ret_1p5" style="border: none;" size="12" style="background: transparent;"id="206"oninput="calcular()"></td> 
                <td><input type="text" name="Pass_1p5" style="border: none;" size="12" style="background: transparent;"id="207"oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">1"</th>
                <td><input type="text" name="Wt_Ret_1" style="border: none;" size="12" style="background: transparent;"id="208"oninput="calcular()"></td>
                <td><input type="text" name="Ret_1" style="border: none;" size="12" style="background: transparent;"id="209"oninput="calcular()"></td> 
                <td><input type="text" name="Cum_Ret_1" style="border: none;" size="12" style="background: transparent;"id="210"oninput="calcular()"></td> 
                <td><input type="text" name="Pass_1" style="border: none;" size="12" style="background: transparent;"id="211"oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">3/4"</th>
                <td><input type="text" name="Wt_Ret_3p4" style="border: none;" size="12" style="background: transparent;"id="212"oninput="calcular()"></td>
                <td><input type="text" name="Ret_3p4" style="border: none;" size="12" style="background: transparent;"id="213"oninput="calcular()"></td> 
                <td><input type="text" name="Cum_Ret_3p4" style="border: none;" size="12" style="background: transparent;"id="214"oninput="calcular()"></td> 
                <td><input type="text" name="Pass_3p4" style="border: none;" size="12" style="background: transparent;"id="215"oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">1/2"</th>
                <td><input type="text" name="Wt_Ret_1p2" style="border: none;" size="12" style="background: transparent;"id="216"oninput="calcular()"></td>
                <td><input type="text" name="Ret_1p2" style="border: none;" size="12" style="background: transparent;"id="217"oninput="calcular()"></td> 
                <td><input type="text" name="Cum_Ret_1p2" style="border: none;" size="12" style="background: transparent;"id="218"oninput="calcular()"></td> 
                <td><input type="text" name="Pass_1p2" style="border: none;" size="12" style="background: transparent;"id="219"oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">3/8"</th>
                <td><input type="text" name="Wt_Ret_3p8" style="border: none;" size="12" style="background: transparent;"id="220"oninput="calcular()"></td>
                <td><input type="text" name="Ret_3p8" style="border: none;" size="12" style="background: transparent;"id="221"oninput="calcular()"></td> 
                <td><input type="text" name="Cum_Ret_3p8" style="border: none;" size="12" style="background: transparent;"id="222"oninput="calcular()"></td> 
                <td><input type="text" name="Pass_3p8" style="border: none;" size="12" style="background: transparent;"id="223"oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">No.4</th>
                <td><input type="text" name="Wt_Ret_No4" style="border: none;" size="12" style="background: transparent;"id="224"oninput="calcular()"></td>
                <td><input type="text" name="Ret_No4" style="border: none;" size="12" style="background: transparent;"id="225"oninput="calcular()"></td> 
                <td><input type="text" name="Cum_Ret_No4" style="border: none;" size="12" style="background: transparent;"id="226"oninput="calcular()"></td> 
                <td><input type="text" name="Pass_No4" style="border: none;" size="12" style="background: transparent;"id="227"oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">No.20</th>
                <td><input type="text" name="Wt_Ret_No20" style="border: none;" size="12" style="background: transparent;"id="236"oninput="calcular()"></td>
                <td><input type="text" name="Ret_No20" style="border: none;" size="12" style="background: transparent;"id="237"oninput="calcular()"></td> 
                <td><input type="text" name="Cum_Ret_No20" style="border: none;" size="12" style="background: transparent;"id="238"oninput="calcular()"></td> 
                <td><input type="text" name="Pass_No20" style="border: none;" size="12" style="background: transparent;"id="239"oninput="calcular()"></td> 
            </tr>
           
        
            <tr>
                <th style="font-size: 15px;" scope="row">No.200</th>
                <td><input type="text" name="Wt_Ret_No200" style="border: none;" size="12" style="background: transparent;"id="256"oninput="calcular()"></td>
                <td><input type="text" name="Ret_No200" style="border: none;" size="12" style="background: transparent;"id="257"oninput="calcular()"></td> 
                <td><input type="text" name="Cum_Ret_No200" style="border: none;" size="12" style="background: transparent;"id="258"oninput="calcular()"></td> 
                <td><input type="text" name="Pass_No200" style="border: none;" size="12" style="background: transparent;"id="259"oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">Pan</th>
                <td><input type="text" name="Pan_Wt_Ret" style="border: none;" size="12" style="background: transparent;"id="260"oninput="calcular()"></td>
                <td><input type="text" name="Pan_Ret" style="border: none;" size="12" style="background: transparent;"id="261"oninput="calcular()"></td> 
                <td><input type="text" name="" style="border: none;" size="12" style="background: transparent;"id="262"oninput="calcular()"></td> 
                <td><input type="text" name="" style="border: none;" size="12" style="background: transparent;"id="263"oninput="calcular()"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">Total</th>
                <td><input type="text" name="Total_Wt_Ret" style="border: none;" size="12" style="background: transparent;"id="264"oninput="calcular()"></td>
                <td><input type="text" name="Total_Ret" style="border: none;" size="12" style="background: transparent;"id="265"oninput="calcular()"></td> 
                <td><input type="text" name="Total_Cum_Ret" style="border: none;" size="12" style="background: transparent;"id="266"oninput="calcular()"></td> 
                <td><input type="text" name="Total_Pass" style="border: none;" size="12" style="background: transparent;"id="267"oninput="calcular()"></td> 
            </tr>
        </tbody>
    </table>
</div>


<div style="display: flex; justify-content: end; margin-top: -30%; margin-right: 42%; margin-top: -1%; text-align: center;">
    <table class="table table-bordered border-primary" style="width: 250px; height: 25px;">
        <thead>
            <caption>Factor de Conversion</caption>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="Factor_De_Conversion" style="border: none;" size="12" style="background: transparent;"id="394"oninput="calcular()"></td> 
            </tr>
        </tbody>
    </table>
</div>

<div style="display: flex; justify-content: flex-end; margin-top: -1%; margin-right: 1%;">
    <table class="table table-bordered border-primary" style="width: 850px; height: 20px;">
        <thead>
            <caption style="text-align: center;">GS's COMBINADAS</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px;" scope="row">(mm)</th>
                <th style="font-size: 15px;" scope="row">Sieve</th>
                <th style="font-size: 15px;" scope="row">Wt. Ret.</th>
                <th style="font-size: 15px;" scope="row">%Ret.</th>
                <th style="font-size: 15px;" scope="row">%Cum. Ret.</th>
                <th style="font-size: 15px;" scope="row">% Pass</th>
                <th style="font-size: 15px;" scope="row">Specs</th>
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">1000</th>
                <th style="font-size: 15px;" scope="row">40"</th>
                <td><input type="text" name="Gs_Wt_Ret_40" style="border: none;" size="12" style="background: transparent;"id="272"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_40" style="border: none;" size="12" style="background: transparent;"id="273"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_40" style="border: none;" size="12" style="background: transparent;"id="274"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_40" style="border: none;" size="12" style="background: transparent;"id="275"oninput="calcular()"></td>  
            <td><input type="text" id="Specs_40" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">304.8</th>
                <th style="font-size: 15px;" scope="row">12"</th>
                <td><input type="text" name="Gs_Wt_Ret_12" style="border: none;" size="12" style="background: transparent;"id="276"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_12" style="border: none;" size="12" style="background: transparent;"id="277"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_12" style="border: none;" size="12" style="background: transparent;"id="278"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_12" style="border: none;" size="12" style="background: transparent;"id="279"oninput="calcular()"></td>  
            <td><input type="text" id="Specs_12" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">250</th>
                <th style="font-size: 15px;" scope="row">10"</th>
                <td><input type="text" name="Gs_Wt_Ret_10" style="border: none;" size="12" style="background: transparent;"id="280"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_10" style="border: none;" size="12" style="background: transparent;"id="281"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_10" style="border: none;" size="12" style="background: transparent;"id="282"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_10" style="border: none;" size="12" style="background: transparent;"id="283"oninput="calcular()"></td>  
            <td><input type="text" id="" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">200</th>
                <th style="font-size: 15px;" scope="row">8"</th>
                <td><input type="text" name="Gs_Wt_Ret_8" style="border: none;" size="12" style="background: transparent;"id="284"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_8" style="border: none;" size="12" style="background: transparent;"id="285"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_8" style="border: none;" size="12" style="background: transparent;"id="286"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_8" style="border: none;" size="12" style="background: transparent;"id="287"oninput="calcular()"></td>  
            <td><input type="text" id="" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">150</th>
                <th style="font-size: 15px;" scope="row">6"</th>
                <td><input type="text" name="Gs_Wt_Ret_6" style="border: none;" size="12" style="background: transparent;"id="288"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_6" style="border: none;" size="12" style="background: transparent;"id="289"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_6" style="border: none;" size="12" style="background: transparent;"id="291"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_6" style="border: none;" size="12" style="background: transparent;"id="292"oninput="calcular()"></td>  
            <td><input type="text" id="" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">101.6</th>
                <th style="font-size: 15px;" scope="row">4"</th>
                <td><input type="text" name="Gs_Wt_Ret_4" style="border: none;" size="12" style="background: transparent;"id="293"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_4" style="border: none;" size="12" style="background: transparent;"id="294"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_4" style="border: none;" size="12" style="background: transparent;"id="295"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_4" style="border: none;" size="12" style="background: transparent;"id="296"oninput="calcular()"></td>  
            <td><input type="text" id="" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">75</th>
                <th style="font-size: 15px;" scope="row">3"</th>
                <td><input type="text" name="Gs_Wt_Ret_3" style="border: none;" size="12" style="background: transparent;"id="297"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_3" style="border: none;" size="12" style="background: transparent;"id="298"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_3" style="border: none;" size="12" style="background: transparent;"id="299"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_3" style="border: none;" size="12" style="background: transparent;"id="300"oninput="calcular()"></td>  
            <td><input type="text" id="Specs_3" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">50</th>
                <th style="font-size: 15px;" scope="row">2"</th>
                <td><input type="text" name="Gs_Wt_Ret_2" style="border: none;" size="12" style="background: transparent;"id="305"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_2" style="border: none;" size="12" style="background: transparent;"id="306"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_2" style="border: none;" size="12" style="background: transparent;"id="307"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_2" style="border: none;" size="12" style="background: transparent;"id="308"oninput="calcular()"></td>  
            <td><input type="text" id="" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">37.5</th>
                <th style="font-size: 15px;" scope="row">1.5"</th>
                <td><input type="text" name="Gs_Wt_Ret_1p5" style="border: none;" size="12" style="background: transparent;"id="309"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_1p5" style="border: none;" size="12" style="background: transparent;"id="310"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_1p5" style="border: none;" size="12" style="background: transparent;"id="311"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_1p5" style="border: none;" size="12" style="background: transparent;"id="312"oninput="calcular()"></td>  
            <td><input type="text" id="" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">25</th>
                <th style="font-size: 15px;" scope="row">1"</th>
                <td><input type="text" name="Gs_Wt_Ret_1" style="border: none;" size="12" style="background: transparent;"id="313"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_1" style="border: none;" size="12" style="background: transparent;"id="314"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_1" style="border: none;" size="12" style="background: transparent;"id="315"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_1" style="border: none;" size="12" style="background: transparent;"id="316"oninput="calcular()"></td>  
            <td><input type="text" id="" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">19</th>
                <th style="font-size: 15px;" scope="row">3/4"</th>
                <td><input type="text" name="Gs_Wt_Ret_3p4" style="border: none;" size="12" style="background: transparent;"id="317"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_3p4" style="border: none;" size="12" style="background: transparent;"id="318"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_3p4" style="border: none;" size="12" style="background: transparent;"id="319"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_3p4" style="border: none;" size="12" style="background: transparent;"id="320"oninput="calcular()"></td>  
            <td><input type="text" id="Specs_3p4" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">12.5</th>
                <th style="font-size: 15px;" scope="row">1/2"</th>
                <td><input type="text" name="Gs_Wt_Ret_1p2" style="border: none;" size="12" style="background: transparent;"id="331"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_1p2" style="border: none;" size="12" style="background: transparent;"id="332"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_1p2" style="border: none;" size="12" style="background: transparent;"id="333"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_1p2" style="border: none;" size="12" style="background: transparent;"id="334"oninput="calcular()"></td>  
            <td><input type="text" id="Specs_1p2" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">9.5</th>
                <th style="font-size: 15px;" scope="row">3/8"</th>
                <td><input type="text" name="Gs_Wt_Ret_3p8" style="border: none;" size="12" style="background: transparent;"id="335"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_3p8" style="border: none;" size="12" style="background: transparent;"id="336"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_3p8" style="border: none;" size="12" style="background: transparent;"id="337"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_3p8" style="border: none;" size="12" style="background: transparent;"id="338"oninput="calcular()"></td>  
            <td><input type="text" id="Specs_3p8" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">4.75</th>
                <th style="font-size: 15px;" scope="row">No.4</th>
                <td><input type="text" name="Gs_Wt_Ret_No4" style="border: none;" size="12" style="background: transparent;"id="339"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_No4" style="border: none;" size="12" style="background: transparent;"id="340"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_No4" style="border: none;" size="12" style="background: transparent;"id="341"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_No4" style="border: none;" size="12" style="background: transparent;"id="342"oninput="calcular()"></td>  
            <td><input type="text" id="Specs_No4" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
           
            <tr>
                <th style="font-size: 15px;" scope="row">0.85</th>
                <th style="font-size: 15px;" scope="row">No.20</th>
                <td><input type="text" name="Gs_Wt_Ret_No20" style="border: none;" size="12" style="background: transparent;"id="351"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_No20" style="border: none;" size="12" style="background: transparent;"id="352"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_No20" style="border: none;" size="12" style="background: transparent;"id="353"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_No20" style="border: none;" size="12" style="background: transparent;"id="354"oninput="calcular()"></td>  
            <td><input type="text" id="Specs_No20" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>    
    
            <tr>
                <th style="font-size: 15px;" scope="row">0.075</th>
                <th style="font-size: 15px;" scope="row">No.200</th>
                <td><input type="text" name="Gs_Wt_Ret_No200" style="border: none;" size="12" style="background: transparent;"id="371"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Ret_No200" style="border: none;" size="12" style="background: transparent;"id="372"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Cum_Ret_No200" style="border: none;" size="12" style="background: transparent;"id="373"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Pass_No200" style="border: none;" size="12" style="background: transparent;"id="374"oninput="calcular()"></td>  
            <td><input type="text" id="Specs_No200" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <td><input type="text" name="" style="border: none;" size="12" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px;" scope="row">Pan</th>
                <td><input type="text" name="Gs_Pan_Wt_Ret" style="border: none;" size="12" style="background: transparent;"id="375"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Pan_Ret" style="border: none;" size="12" style="background: transparent;"id="376"oninput="calcular()"></td> 
                <td><input type="text" name="" style="border: none;" size="12" style="background: transparent;"id="377"oninput="calcular()"></td> 
                <td><input type="text" name="" style="border: none;" size="12" style="background: transparent;"id="378"oninput="calcular()"></td>  
            <td><input type="text" id="" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
            <tr>
                <td><input type="text" name="" style="border: none;" size="12" style="background: transparent;"id=""oninput="calcular()"></td>
                <th style="font-size: 15px;" scope="row">Total Pan</th>
                <td><input type="text" name="Gs_Total_Wt_Ret" style="border: none;" size="12" style="background: transparent;"id="979"oninput="calcular()"></td>
                <td><input type="text" name="Gs_Total_Ret" style="border: none;" size="12" style="background: transparent;"id="980"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Total_Cum_Ret" style="border: none;" size="12" style="background: transparent;"id="981"oninput="calcular()"></td> 
                <td><input type="text" name="Gs_Total_Pass" style="border: none;" size="12" style="background: transparent;"id="982"oninput="calcular()"></td>  
            <td><input type="text" id="" value="" name="" style="border: none;" size="12" style="background: transparent;"></td> 
            </tr>
        </tbody>
    </table>
</div>


<div style="display: flex; margin-left: 2%; margin-top: -1%;">
    <table class="table table-bordered border-primary" style="width: 300px;">
        <thead>
            <th style="text-align: center;" scope="col" colspan="2">Sumary Parameter</th>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px;" scope="row">Coarser than Gravel %:</th>
                <td><input type="text" name="Coarser_than_Gravel" style="border: none;" size="4" style="background: transparent; "id="383"oninput="calcularDiametro"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">Gravel %:</th>
                <td><input type="text" name="Gravel" style="border: none;" size="4" style="background: transparent; "id="384"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">Sand %:</th>
                <td><input type="text" name="Sand" style="border: none;" size="4" style="background: transparent; "id="385"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">Fines %:</th>
                <td><input type="text" name="Fines" style="border: none;" size="4" style="background: transparent; "id="386"oninput="calcular()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">D10 (mm):</th>
                <td><input type="text" name="D10" style="border: none;" size="4" style="background: transparent; "id="387"oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">D15 (mm):</th>
                <td><input type="text" name="D15" style="border: none;" size="4" style="background: transparent; "id="388"oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">D30 (mm):</th>
                <td><input type="text" name="D30" style="border: none;" size="4" style="background: transparent; "id="389"oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">D60 (mm):</th>
                <td><input type="text" name="D60" style="border: none;" size="4" style="background: transparent; "id="390"oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">D85 (mm):</th>
                <td><input type="text" name="D85" style="border: none;" size="4" style="background: transparent; "id="391"oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">Cc:</th>
                <td><input type="text" name="Cc" style="border: none;" size="4" style="background: transparent; "id="392"oninput="calcularD()"></td>
            </tr>
            <tr>
                <th style="font-size: 15px;" scope="row">Cu:</th>
                <td><input type="text" name="Cu" style="border: none;" size="4" style="background: transparent; "id="393"oninput="calcularD()"></td>
            </tr>
        </tbody>
    </table>
</div>

<div style="display: flex; justify-content: center; margin-left: 20%; margin-top: -1%;">
    <div id="gs_trf" style="width: 1080px; height: 700px;"></div>
</div>

<button type="submit" name="GrainSizeRocks" class="btn btn-danger">Registrar ensayo</button>
<button type="submit" name="gs_rock" class="btn btn-primary" onclick="enviarData(event)">Graficar</button>
</form>
</div>
</div>
</div>
</div>

<script>
    function cambiarOpcion() {
      var select = document.getElementById("opciones");
      var Specs_40 = document.getElementById("Specs_40");
      var Specs_12 = document.getElementById("Specs_12");
      var Specs_3 = document.getElementById("Specs_3");
      var Specs_3p4 = document.getElementById("Specs_3p4");
      var Specs_1p2 = document.getElementById("Specs_1p2");
      var Specs_3p8 = document.getElementById("Specs_3p8");
      var Specs_No4 = document.getElementById("Specs_No4");
      var Specs_No20 = document.getElementById("Specs_No20");
      var Specs_No200 = document.getElementById("Specs_No200");
      var gs_trf = document.getElementById("gs_trf");

      // Obtén el valor seleccionado
      var opcionSeleccionada = select.value;

      // Lógica para cambiar el valor del input según la opción seleccionada
      switch (opcionSeleccionada) {
        case "RF":
            Specs_40.value = "100" + Specs_40.value;
            Specs_12.value = "100" + Specs_12.value;
            Specs_3.value = "0-100" + Specs_3.value;
            Specs_1p2.value = "0-30" + Specs_1p2.value;
            Specs_3p8.value = "0-20" + Specs_3p8.value;
            Specs_No4.value = "0-12" + Specs_No4.value;
            Specs_No20.value = "0-5" + Specs_No20.value;
            Specs_No200.value = "0-3" + Specs_No200.value;
            gs_trf.id = "gs_rf";
          break;
        case "IRF":
            Specs_40.value = "100" + Specs_40.value;
            Specs_12.value = "100" + Specs_12.value;
            Specs_3.value = "0-100" + Specs_3.value;
            Specs_1p2.value = "0-45" + Specs_1p2.value;
            Specs_3p8.value = "0-40" + Specs_3p8.value;
            Specs_No4.value = "0-25" + Specs_No4.value;
            Specs_No20.value = "0-14" + Specs_No20.value;
            Specs_No200.value = "0-8" + Specs_No200.value;
            gs_trf.id = "gs_irf";
          break;
        case "UFF":
            Specs_40.value = "100" + Specs_40.value;
            Specs_3.value = "40-100" + Specs_3.value;
            Specs_3p4.value = "25-65" + Specs_3p4.value;
            Specs_1p2.value = "0-45" + Specs_1p2.value;
            Specs_No4.value = "20-50" + Specs_No4.value;
            Specs_No20.value = "12-43" + Specs_No20.value;
            Specs_No200.value = "10-35" + Specs_No200.value;
            gs_trf.id = "gs_uff";
          break;
        case "FRF":
          break;
        default:
      }
    }
  </script>

<script>
    function calcular() {
        //calcular el total de material mayor de 3 pulgadas
      var valores = [];
      for (var i = 1; i <= 70; i++) {
        valores.push(parseFloat(document.getElementById(i.toString()).value) || 0);
      }
    
      var totalSuma = valores.reduce(function(acumulador, valorActual) {
        return acumulador + valorActual;
      }, 0);
    
      var total40= valores[0] + valores[1]+ valores[2]+ valores[3]+ valores[4]+ valores[5]+ valores[6] ;
      var total30= valores[7] + valores[8]+ valores[9]+ valores[10]+ valores[11]+ valores[12]+ valores[13] ;
      var total20= valores[14] + valores[15]+ valores[16]+ valores[17]+ valores[18]+ valores[19]+ valores[20] ;
      var total12= valores[28] + valores[29]+ valores[30]+ valores[31]+ valores[32]+ valores[33]+ valores[34] ;
      var total10= valores[35] + valores[36]+ valores[37]+ valores[38]+ valores[39]+ valores[40]+ valores[41] ;
      var total8= valores[42] + valores[43]+ valores[44]+ valores[45]+ valores[46]+ valores[47]+ valores[48] ;
      var total6= valores[49] + valores[50]+ valores[51]+ valores[52]+ valores[53]+ valores[54]+ valores[55] ;
      var total4= valores[56] + valores[57]+ valores[58]+ valores[59]+ valores[60]+ valores[61]+ valores[62] ;
      var total3= valores[63] + valores[64]+ valores[65]+ valores[66]+ valores[67]+ valores[68]+ valores[69] ;
      // Pasar el resultado a otra unidad (por ejemplo, multiplicar por 1000)
      var resultadoOtraUnidad = totalSuma * 1000;
    
      // calcular el total de material menor de 3 pulgadas
      var valores1 = [];
      for (var i = 83; i <= 162; i++) {
        valores1.push(parseFloat(document.getElementById(i.toString()).value) || 0);
      }
    
      var totalSuma1 = valores1.reduce(function(acumulador, valorActual) {
        return acumulador + valorActual;
      }, 0);
      var resultadoOtraUnidad1 = totalSuma1 * 1000;
      
    var TPWS1 = parseFloat(document.getElementById("165").value);
    var TPWS2 = parseFloat(document.getElementById("166").value);
    var TPWS3 = parseFloat(document.getElementById("167").value);
    var TPDS1 = parseFloat(document.getElementById("168").value);
    var TPDS2 = parseFloat(document.getElementById("169").value);
    var TPDS3 = parseFloat(document.getElementById("170").value);
    var WT1 = parseFloat(document.getElementById("174").value);
    var WT2 = parseFloat(document.getElementById("175").value);
    var WT3 = parseFloat(document.getElementById("176").value);

    var PSSR = parseFloat(document.getElementById("189").value);
    var PLR = parseFloat(document.getElementById("190").value);
    var PaLR = parseFloat(document.getElementById("191").value);

    var WR3 = parseFloat(document.getElementById("192").value);
    var WR2 = parseFloat(document.getElementById("200").value);
    var WR1p5 = parseFloat(document.getElementById("204").value);
    var WR1 = parseFloat(document.getElementById("208").value);
    var WR3p4 = parseFloat(document.getElementById("212").value);
    var WR1p2 = parseFloat(document.getElementById("216").value);
    var WR3p8 = parseFloat(document.getElementById("220").value);
    var WRno4 = parseFloat(document.getElementById("224").value);
    var WRno20 = parseFloat(document.getElementById("236").value);
    var WRno200 = parseFloat(document.getElementById("256").value);
    var WRPAN = parseFloat(document.getElementById("260").value);

    
    var cWR40 = parseFloat(document.getElementById("272").value);
    var cWR12 = parseFloat(document.getElementById("276").value);
    var cWR10 = parseFloat(document.getElementById("280").value);
    var cWR8 = parseFloat(document.getElementById("284").value);
    var cWR6 = parseFloat(document.getElementById("288").value);
    var cWR4 = parseFloat(document.getElementById("293").value);
    var cWR3 = parseFloat(document.getElementById("297").value);
    var cWR2 = parseFloat(document.getElementById("305").value);
    var cWR1p5 = parseFloat(document.getElementById("309").value);
    var cWR1 = parseFloat(document.getElementById("313").value);
    var cWR3p4 = parseFloat(document.getElementById("317").value);
    var cWR1p2 = parseFloat(document.getElementById("331").value);
    var cWR3p8 = parseFloat(document.getElementById("335").value);
    var cWRno4 = parseFloat(document.getElementById("339").value);
    var cWRno20 = parseFloat(document.getElementById("351").value);
    var cWRno200 = parseFloat(document.getElementById("371").value);
    var cWRPAN = parseFloat(document.getElementById("375").value);



    // //calculo de humedades
    var water1 = TPWS1 - TPDS1;
    var Drysoil1 = TPDS1 - WT1;
    var Mc1 = (water1 / Drysoil1) * 100;
      
    var water2 = TPWS2 - TPDS2;
    var Drysoil2 = TPDS2 - WT2;
    var Mc2 = (water2 / Drysoil2) * 100;

    var water3 = TPWS3 - TPDS3;
    var Drysoil3 = TPDS3 - WT3;
    var Mc3 = (water3 / Drysoil3) * 100;

    var count = 0;
    if (Mc1 != 0) count++;
    if (Mc2 != 0) count++;
    if (Mc3 != 0) count++;

    // Calcular el promedio en función del número de inputs con valor
    var Amc;
    if (count > 0) {
      Amc = (Mc1 + Mc2 + Mc3) / count;
    } else {
      Amc = 0;
    }
    
      //correccion por humedad
      var Menor3c = resultadoOtraUnidad1 / (1 + (Amc / 100));
      var TPSS = resultadoOtraUnidad + Menor3c;
      var ROU1 = resultadoOtraUnidad1;
      
      // Calculo de granulometria reducida
    PaLR = PSSR - PLR;


      //Tamiz 3 pulgadas
    var PR3 = (WR3 / PSSR) * 100;
    var CPR3 = PR3 + 0;
    var PP3 = 100 - CPR3;

    //Tamiz 2 pulgadas
    var PR2 = (WR2 / PSSR)*100;
    var CPR2 = PR2 + CPR3;
    var PP2 = 100 - CPR2;

    //Tamiz 1.5 pulgadas
    var PR1p5 = (WR1p5 / PSSR)*100;
    var CPR1p5 = PR1p5 + CPR2;
    var PP1p5 = 100 - CPR1p5;
  
    //Tamiz 1 pulgadas
    var PR1 = (WR1 / PSSR)*100;
    var CPR1 = PR1 + CPR1p5;
    var PP1 = 100 - CPR1;
  
    //Tamiz 3p4 pulgadas
    var PR3p4 = (WR3p4 / PSSR)*100;
    var CPR3p4 = PR3p4 + CPR1;
    var PP3p4 = 100 - CPR3p4;
  
    //Tamiz 1p2 pulgadas
    var PR1p2 = (WR1p2 / PSSR)*100;
    var CPR1p2 = PR1p2 + CPR3p4;
    var PP1p2 = 100 - CPR1p2;

    //Tamiz 3p8 pulgadas
    var PR3p8 = (WR3p8 / PSSR) * 100;
      var CPR3p8 = PR3p8 + CPR1p2;
      var PP3p8 = 100 - CPR3p8;
  
      //Tamiz No4
      var PRn4 = (WRno4 / PSSR) * 100;
      var CPRn4 = PRn4 + CPR3p8;
      var PPn4 = 100 - CPRn4;
  
      //Tamiz No20
      var PRn20 = (WRno20 / PSSR) * 100;
      var CPRn20 = PRn20 + CPRn4;
      var PPn20 = 100 - CPRn20;
  
     //Tamiz No200
      var PRn200 = (WRno200 / PSSR) * 100;
      var CPRn200 = PRn200 + CPRn20;
      var PPn200 = 100 - CPRn200;
  
      // Pan
      var PRpan = (WRPAN / PSSR) * 100;
  
      // Total Pan
      var WRTP = WRPAN + PaLR;
      var PRTP = (WRTP / PSSR) * 100;
      var CPRTP = PRTP + CPRn200;
      var PPTP = 100 - CPRTP;

      
      //calculo de factore de convercion
      var factor = (PSSR / TPSS) * 100;
      
      // Aplicacion de factor
        
        var fcWR2 = (WR2 * 100) / factor;
        var fcWR1p5 = (WR1p5 * 100) / factor;
        var fcWR1 = (WR1 * 100) / factor;
        var fcWR3p4 = (WR3p4 * 100) / factor;
        var fcWR1p2 = (WR1p2 * 100) / factor;
        var fcWR3p8 = (WR3p8 *100) / factor;
        var fcWRn4 = (WRno4 * 100) / factor;
        var fcWRn20 = (WRno20 * 100) / factor;
        var fcWRn200 = (WRno200 * 100) / factor;
        var fcWRpan = (WRPAN * 100) / factor;

      // Calculo de granulometria combinada
      



//Tamiz 40 pulgadas
var cPR40 = (cWR40/ TPSS) * 100;
var cCPR40 = cPR40 + 0;
var cPP40 = 100 - cCPR40;

//Tamiz 12 pulgadas
var cPR12 = (cWR12 / TPSS) * 100;
var cCPR12= cPR12 + cCPR40;
var cPP12 = 100 - cCPR12;

//Tamiz 10 pulgadas
var cPR10 = (cWR10/ TPSS) * 100;
var cCPR10 = cPR10 + cCPR12;
var cPP10 = 100 - cCPR10;

//Tamiz 8 pulgadas
var cPR8 = (cWR8  / TPSS) * 100;
var cCPR8 = cPR8 + cCPR10;
var cPP8 = 100 - cCPR8;

//Tamiz 6 pulgadas
var cPR6 = (cWR6/ TPSS) * 100;
var cCPR6 = cPR6 + cCPR8;
var cPP6 = 100 - cCPR6;

//Tamiz 4 pulgadas
var cPR4 = (cWR4/ TPSS) * 100;
var cCPR4 = cPR4 + cCPR6;
var cPP4 = 100 - cCPR4;


//Tamiz 3 pulgadas
var cPR3 = (cWR3 / TPSS) * 100;
var cCPR3 = cPR3 + cCPR4;
var cPP3 = 100 - cCPR3;


    //Tamiz 2 pulgadas
    var cPR2 = (fcWR2 / TPSS) * 100;
    var cCPR2 = cPR2 + cCPR3;
    var cPP2 = 100 - cCPR2;

    //Tamiz 1.5 pulgadas
    var cPR1p5 = (fcWR1p5 / TPSS) * 100;
    var cCPR1p5 = cPR1p5 + cCPR2;
    var cPP1p5 = 100 - cCPR1p5;
  
    //Tamiz 1 pulgadas
    var cPR1 = (fcWR1 / TPSS) * 100;
    var cCPR1 = cPR1 + cCPR1p5;
    var cPP1 = 100 - cCPR1;
  
    //Tamiz 3p4 pulgadas
    var cPR3p4 = (fcWR3p4 / TPSS) * 100;
    var cCPR3p4 = cPR3p4 + cCPR1;
    var cPP3p4 = 100 - cCPR3p4;
  
    //Tamiz 1p2 pulgadas
    var cPR1p2 = (fcWR1p2 / TPSS) * 100;
    var cCPR1p2 = cPR1p2 + cCPR3p4;
    var cPP1p2 = 100 - cCPR1p2;

    //Tamiz 3p8 pulgadas
    var cPR3p8 = (fcWR3p8 / TPSS) * 100;
      var cCPR3p8 = cPR3p8 + cCPR1p2;
      var cPP3p8 = 100 - cCPR3p8;
  
      //Tamiz No4
      var cPRn4 = (fcWRn4 / TPSS) * 100;
      var cCPRn4 = cPRn4 + cCPR3p8;
      var cPPn4 = 100 - cCPRn4;
  
  
      //Tamiz No20
      var cPRn20 = (fcWRn20 / TPSS) * 100;
      var cCPRn20 = cPRn20 + cCPRn4;
      var cPPn20 = 100 - cCPRn20;
  

      //Tamiz No200
      var cPRn200 = (fcWRn200 / TPSS) * 100;
      var cCPRn200 = cPRn200 + cCPRn20;
      var cPPn200 = 100 - cCPRn200;
  
      // Pan
      var cPRpan = (fcWRpan / TPSS) * 100;
  
      

      var TPL = cWR40 + cWR12 + cWR10 + cWR8 + cWR6 + cWR4 + cWR3 + fcWR2 +
      fcWR1p5 + fcWR1 + fcWR3p4 + fcWR1p2 + fcWR3p8 + fcWRn4 + fcWRn20 + fcWRn200 + fcWRpan;
      
      var PPL = TPSS - TPL;

      // Total Pan
      var cWRTP = fcWRpan + PPL;
      var cPRTP = (cWRTP / TPSS) * 100;
      var cCPRTP = cPRTP + cCPRn200;
      var cPPTP = 100 - cCPRTP;

      var pasante3;
  
         if (cPP3 === "") {
            pasante3 = 100;
        } else {
            pasante3 = cPP3;
        }
   
    var pasanteN4 = cPPn4;
    var pasanteN200 = cPPn200;
    var ctgravel = 100 - pasante3;
    var gravel = pasante3 - pasanteN4;
    var sand = pasanteN4 - pasanteN200;
    var fines = pasanteN200;

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
  [cPPn200, 0.075, cPPn20, 0.85],
  [cPPn20, 0.85, cPPn4, 4.75],
  [cPPn4, 4.750, cPP3p8, 9.50],
  [cPP3p8, 9.500, cPP1p2, 12.50],
  [cPP1p2, 12.500, cPP3p4, 19.00],
  [cPP3p4, 19.000, cPP1, 25.00],
  [cPP1, 25.000, cPP1p5, 37.50],
  [cPP1p5, 37.500, cPP2, 50.80],
  [cPP2, 50.00, cPP3, 75.80],
  [cPP3, 75.00, cPP4, 100],
  [cPP4, 100, cPP6, 150.00],
  [cPP6, 150, cPP8, 200.0],
  [cPP8, 200, cPP10, 250.00],
  [cPP10, 250, cPP12, 300.00],
  [cPP12, 300, cPP40, 1000],
  [cPP40, 1000, 100, 0.00],
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




      // Pasar los valores a los inputs

      document.getElementById("71").value = total40.toFixed(2);
      document.getElementById("72").value = total30.toFixed(2);
      document.getElementById("73").value = total20.toFixed(2);
      document.getElementById("75").value = total12.toFixed(2);
      document.getElementById("76").value = total10.toFixed(2);
      document.getElementById("77").value = total8.toFixed(2);
      document.getElementById("78").value = total6.toFixed(2);
      document.getElementById("79").value = total4.toFixed(2);
      document.getElementById("80").value = total3.toFixed(2);

      document.getElementById("81").value = totalSuma.toFixed(2);
      document.getElementById("82").value = resultadoOtraUnidad.toFixed(2);
      document.getElementById("163").value = totalSuma1.toFixed(2);
      document.getElementById("164").value = resultadoOtraUnidad1.toFixed(2);
      document.getElementById("171").value = water1.toFixed(2);
      document.getElementById("177").value = Drysoil1.toFixed(2);
      document.getElementById("180").value = Mc1.toFixed(2);
      document.getElementById("172").value = water2.toFixed(2);
      document.getElementById("178").value = Drysoil2.toFixed(2);
      document.getElementById("181").value = Mc2.toFixed(2);
      document.getElementById("173").value = water3.toFixed(2);
      document.getElementById("179").value = Drysoil3.toFixed(2);
      document.getElementById("182").value = Mc3.toFixed(2);
      document.getElementById("183").value = Amc.toFixed(2);
      document.getElementById("184").value = resultadoOtraUnidad.toFixed(2);
      document.getElementById("185").value = ROU1.toFixed(2);
      document.getElementById("186").value = TPSS.toFixed(2);
      document.getElementById("187").value = TPL.toFixed(2);
      document.getElementById("188").value = PPL.toFixed(2);


      document.getElementById("191").value = PaLR.toFixed(2);

      // pasando valores a la granulometria reducida
      document.getElementById("193").value = PR3.toFixed(2);
      document.getElementById("194").value = CPR3.toFixed(2);
      document.getElementById("195").value = PP3.toFixed(2);

      document.getElementById("201").value = PR2.toFixed(2);
      document.getElementById("202").value = CPR2.toFixed(2);
      document.getElementById("203").value = PP2.toFixed(2);

      document.getElementById("205").value = PR1p5.toFixed(2);
      document.getElementById("206").value = CPR1p5.toFixed(2);
      document.getElementById("207").value = PP1p5.toFixed(2);

      document.getElementById("209").value = PR1.toFixed(2);
      document.getElementById("210").value = CPR1.toFixed(2);
      document.getElementById("211").value = PP1.toFixed(2);

      document.getElementById("213").value = PR3p4.toFixed(2);
      document.getElementById("214").value = CPR3p4.toFixed(2);
      document.getElementById("215").value = PP3p4.toFixed(2);

      document.getElementById("217").value = PR1p2.toFixed(2);
      document.getElementById("218").value = CPR1p2.toFixed(2);
      document.getElementById("219").value = PP1p2.toFixed(2);

      document.getElementById("221").value = PR3p8.toFixed(2);
      document.getElementById("222").value = CPR3p8.toFixed(2);
      document.getElementById("223").value = PP3p8.toFixed(2);

      document.getElementById("225").value = PRn4.toFixed(2);
      document.getElementById("226").value = CPRn4.toFixed(2);
      document.getElementById("227").value = PPn4.toFixed(2);

      document.getElementById("237").value = PRn20.toFixed(2);
      document.getElementById("238").value = CPRn20.toFixed(2);
      document.getElementById("239").value = PPn20.toFixed(3);


      document.getElementById("257").value = PRn200.toFixed(2);
      document.getElementById("258").value = CPRn200.toFixed(2);
      document.getElementById("259").value = PPn200.toFixed(2);

      document.getElementById("261").value = PRpan.toFixed(2);

      document.getElementById("264").value = WRTP.toFixed(2);
      document.getElementById("265").value = PRTP.toFixed(2);
      document.getElementById("266").value = CPRTP.toFixed(2);
      document.getElementById("267").value = PPTP.toFixed(2);
      
      
      
      
      //pasando valores a la granulometria combinada
      document.getElementById("394").value = factor.toFixed(2);

      document.getElementById("272").value = (total40 * 1000).toFixed(2);
      document.getElementById("273").value = cCPR40.toFixed(2);
      document.getElementById("274").value = cCPR40.toFixed(2);
      document.getElementById("275").value = cPP40.toFixed(2);

      document.getElementById("276").value = (total12 * 1000).toFixed(2);
      document.getElementById("277").value = cPR12.toFixed(2);
      document.getElementById("278").value = cCPR12.toFixed(2);
      document.getElementById("279").value = cPP12.toFixed(2);

      document.getElementById("280").value = (total10 * 1000).toFixed(2);
      document.getElementById("281").value = cPR10.toFixed(2);
      document.getElementById("282").value = cCPR10.toFixed(2);
      document.getElementById("283").value = cPP10.toFixed(2);

      document.getElementById("284").value = (total8 * 1000).toFixed(2);
      document.getElementById("285").value = cPR8.toFixed(2);
      document.getElementById("286").value = cCPR8.toFixed(2);
      document.getElementById("287").value = cPP8.toFixed(2);

      document.getElementById("288").value = (total6 * 1000).toFixed(2);
      document.getElementById("289").value = cPR6.toFixed(2);
      document.getElementById("291").value = cCPR6.toFixed(2);
      document.getElementById("292").value = cPP6.toFixed(2);

      document.getElementById("293").value = (total4 * 1000).toFixed(2);  
      document.getElementById("294").value = cPR4.toFixed(2);
      document.getElementById("295").value = cCPR4.toFixed(2);
      document.getElementById("296").value = cPP4.toFixed(2);

      document.getElementById("297").value = (total3 * 1000).toFixed(2);
      document.getElementById("298").value = cPR3.toFixed(2);
      document.getElementById("299").value = cCPR3.toFixed(2);
      document.getElementById("300").value = cPP3.toFixed(2);

     

      document.getElementById("305").value = fcWR2.toFixed(2);
      document.getElementById("306").value = cPR2.toFixed(2);
      document.getElementById("307").value = cCPR2.toFixed(2);
      document.getElementById("308").value = cPP2.toFixed(2);

      document.getElementById("309").value = fcWR1p5.toFixed(2);
      document.getElementById("310").value = cPR1p5.toFixed(2);
      document.getElementById("311").value = cCPR1p5.toFixed(2);
      document.getElementById("312").value = cPP1p5.toFixed(2);

      document.getElementById("313").value = fcWR1.toFixed(2);
      document.getElementById("314").value = cPR1.toFixed(2);
      document.getElementById("315").value = cCPR1.toFixed(2);
      document.getElementById("316").value = cPP1.toFixed(2);

      document.getElementById("317").value = fcWR3p4.toFixed(2);
      document.getElementById("318").value = cPR3p4.toFixed(2);
      document.getElementById("319").value = cCPR3p4.toFixed(2);
      document.getElementById("320").value = cPP3p4.toFixed(2);

      document.getElementById("331").value = fcWR1p2.toFixed(2);
      document.getElementById("332").value = cPR1p2.toFixed(2);
      document.getElementById("333").value = cCPR1p2.toFixed(2);
      document.getElementById("334").value = cPP1p2.toFixed(2);

      document.getElementById("335").value = fcWR3p8.toFixed(2);
      document.getElementById("336").value = cPR3p8.toFixed(2);
      document.getElementById("337").value = cCPR3p8.toFixed(2);
      document.getElementById("338").value = cPP3p8.toFixed(2);

      document.getElementById("339").value = fcWRn4.toFixed(2);
      document.getElementById("340").value = cPRn4.toFixed(2);
      document.getElementById("341").value = cCPRn4.toFixed(2);
      document.getElementById("342").value = cPPn4.toFixed(2);

      document.getElementById("351").value = fcWRn20.toFixed(2);
      document.getElementById("352").value = cPRn20.toFixed(2);
      document.getElementById("353").value = cCPRn20.toFixed(2);
      document.getElementById("354").value = cPPn20.toFixed(3);

      document.getElementById("371").value = fcWRn200.toFixed(2);
      document.getElementById("372").value = cPRn200.toFixed(2);
      document.getElementById("373").value = cCPRn200.toFixed(2)
      document.getElementById("374").value = cPPn200.toFixed(2);

      document.getElementById("375").value = fcWRpan.toFixed(2);
      document.getElementById("376").value = cPRpan.toFixed(2);

      document.getElementById("979").value = cWRTP.toFixed(2);
      document.getElementById("980").value = cPRTP.toFixed(2);
      document.getElementById("981").value = cCPRTP.toFixed(2);
      document.getElementById("982").value = cPPTP.toFixed(2);


      document.getElementById("383").value = ctgravel.toFixed(2);
      document.getElementById("384").value = gravel.toFixed(2);
      document.getElementById("385").value = sand.toFixed(2);
      document.getElementById("386").value = fines.toFixed(2);

      document.getElementById("387").value = D10.toFixed(2);
      document.getElementById("389").value = D30.toFixed(2);
      document.getElementById("390").value = D60.toFixed(2);
    

      document.getElementById("392").value = Cc.toFixed(2);
      document.getElementById("393").value = Cu.toFixed(2);
     

    }
    </script>

<script>
  function enviarData(event) {
    event.preventDefault();

    // Obtén el valor seleccionado
    var opcionSeleccionada = document.getElementById("opciones").value;

    // Define la URL base
    var urlBase = "libs/js/";

    // Construye la URL completa según la opción seleccionada
    var url = urlBase + "GS_" + opcionSeleccionada + ".js";

    // Realiza la solicitud AJAX con la URL construida
    $.ajax({
      url: url,
      type: "POST",
      data: $("#mxy").serialize(),
      success: function(data) {
        $("#resultado").html(data);
      }
    });
  }
</script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php include_once('layouts/footer.php'); ?>
