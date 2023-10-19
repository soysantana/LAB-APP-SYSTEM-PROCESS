<?php
$page_title = 'Moisture Content with Scale';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2); 

// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/McScale.php'); 
}
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
<div class="row">
<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading clearfix">
      <strong>
        <span class="glyphicon glyphicon-th"></span>
        <span>Moisture Content with Scale</span>
     </strong>
    </div>
    <div class="panel-body">
      <form method="post" action="mc_scale.php" onsubmit="calcular()">
 
        <table class="table table-bordered">
             <thead>
            </div>
           
            <div class="col-xs-4">
              <label>Trial No.</label>
              <input class="form-control" name="trial" type="text"value="" id="trial">
            </div>
            <div class="col-xs-4">
              <label>Tare Name.</label>
              <input class="form-control" name="tarename" type="text" value="">
            </div>
            <div class="col-xs-4">
              <label>Moisture Content (%)</label>
              <input class="form-control" name="mc" type="text" value="" id="mc" oninput="calcular()">
            </div>
              
            <div class="col-xs-4">
              <label>scale Model</label>
              <input class="form-control" name="scale_model" type="text" value="" id="scale_model" oninput="calcular()">
            </div>
          
            <div class="col-xs-4">
              <label>Technician</label>
              <input class="form-control" name="technician" type="text">
            </div>
            
        <div class="col-xs-4">
              <label>Test Start Date</label>
              <input class="form-control" name="testdate" type="date">
            </div>

            <div class="col-xs-4">
              <label>Comments</label>
              <textarea class="form-control" name="comment" type="text"></textarea>
            </div>
          
            <div class="panel-body"><div class="col-md-12">
            </div> 
          </div> 
 <button type="submit" name="mc_scale" class="btn btn-danger">Registrar ensayo</button>
 </div>
</div>


             </thead>
             <tbody  id="product_info"> </tbody>
        
       </table>
     </form>
    </div>
    </div>
  </div>

</div>


<?php include_once('layouts/footer.php'); ?>
