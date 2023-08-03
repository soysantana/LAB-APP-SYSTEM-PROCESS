<?php
$page_title = 'Compressive Strenght of Cylindrical Concrete Specimens';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);
?>

<?php include_once('layouts/header.php'); ?>
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
<div class="row"></div>
<div class="col-md-12"></div>
<div class="panel panel-default">
<div class="panel-heading clearfix">
<strong>
<span class="glyphicon glyphicon-th"></span>
<span>Compressive Strenght of Cylindrical Concrete Specimens</span>
</strong>
</div>
<div class="panel-body">
<form method="post" action="" onsubmit="calcular();calcularD();">

<table class="table table-bordered">
<thead>
</div>
<div class="col-xs-4">
<label >Standard</label>
<select class="form-control" name="Standard">
<option selected>Choose...</option>
<option value="ASTM C88">ASTM C88</option>         
</select>
</div>

<div class="col-xs-4">
<label >Preparation Method</label>
<select class="form-control" name="preparacion">
<option selected>Choose...</option>
<option value="Oven_Dried">Oven Dried</option>
<option value="Air_Dried">Air Dried</option>
</select>
</div>

<div class="col-xs-4">
<label >Split Method</label>
<select class="form-control" name="preparacion">
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
<input class="form-control" name="Test_Start_Date" type="date">
</div>




<div>
    <table class="table table-bordered" style="width: 100%;">
        <thead>
            <caption>Testing Information</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col" rowspan="2">No.1</th>
                <th style="font-size: 15px; text-align: center;" scope="col" colspan="2">Dimension (mm)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Area (m²)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Volumen (m³)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Weight of the Cylinder (Kg)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Age (days)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Unit Weight (Kg/m³)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Failure Load (KN)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Strenght (Mpa)</th>
                <th style="font-size: 15px; text-align: center; padding: 1%;" scope="col" rowspan="2">Average Strenght (Mpa)</th>
                <th style="font-size: 15px; text-align: center; padding: 25px;" scope="col" rowspan="2">Type of Fracture</th>
                <th style="font-size: 15px; text-align: center; padding: 25px;" scope="col" rowspan="2">Observations</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Diameter</th>
                <th style="font-size: 15px; text-align: center;" scope="col">High</th>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">1</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td rowspan="5"><input type="text" style="border: none; background: transparent; padding: 40%; width: 100%;" id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">2</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">3</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">4</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">5</th>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
                <td><input type="text" style="border: none;" size="4" style="background: transparent;"id=""></td>
            </tr>
        </tbody>
    </table>
</div>



<div style="display: flex; flex-direction: column; flex-wrap: wrap; align-content: center; margin-right: 10%;">
    <span>Graphic Load versus time</span>
    <div>
      <form action="" method="POST" enctype="multipart/form-data">
      <div>
        <div>
          <span>
            <input type="file" name="" id="fileToUpload" multiple="multiple" class="btn btn-primary"/>
         </span>

         <div>
            <img id="imatge" sty>
         </div>
       </div>
      </div>
  </div>
  </div>


  
<div style="display: flex; flex-direction: column; flex-wrap: wrap; align-content: flex-end; margin-right: 25%; margin-top: -3.5%;">
    <span>Graphic Load versus time</span>
    <div>
      <form action="" method="POST" enctype="multipart/form-data">
      <div>
        <div>
          <span>
            <input type="file" name="" id="fileToUpload" multiple="multiple" class="btn btn-primary"/>
         </span>

         <div>
            <img id="imatge" sty>
         </div>
       </div>
      </div>
  </div>
  </div>



  
<div style="display: flex; flex-direction: column; flex-wrap: wrap; align-content: flex-end; margin-right: 4%; margin-top: -3.5%;">
    <span>Graphic Load versus time</span>
    <div>
      <form action="" method="POST" enctype="multipart/form-data">
      <div>
        <div>
          <span>
            <input type="file" name="" id="fileToUpload" multiple="multiple" class="btn btn-primary"/>
         </span>

         <div>
            <img id="imatge" sty>
         </div>
       </div>
      </div>
  </div>
  </div>




  <div style="display: flex; margin-left: 5%;">
    <table class="table table-bordered" style="width: 12%;">
        <thead>
            <caption>Test condition</caption>
        </thead>
        <tbody>
            <tr>
                <th style="font-size: 15px; text-align: center;" scope="col">Passed</th>
                <th style="font-size: 15px; text-align: center;" scope="col">Failed</th>
            </tr>
            <tr>
                <td><input type="text" style="border: none; background: transparent; text-align: center;" size="5" id=""></td>
                <td><input type="text" style="border: none; background: transparent; text-align: center;" size="5" id=""></td>
            </tr>
        </tbody>
    </table>
  </div>






































<?php include_once('layouts/footer.php'); ?>