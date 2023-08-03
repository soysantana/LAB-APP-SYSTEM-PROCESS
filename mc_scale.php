<?php
$page_title = 'Moisture Content with Scale';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2); 

// Procesamiento del formulario de búsqueda

if (isset($_POST['mc_scale'])) {
  $req_fields = array('sampleid','samplenumber', 'structure', 'area', 'source', 'depthfrom', 'depthto', 
  'materialtype', 'sampletype', 'north', 'east', 'elev', 'sampledate','comment','technician', 'testdate', 
  'trial', 'tarename', 'scale_model', 'mc');
  validate_fields($req_fields);
  
  if (empty($errors)) {
    $sampleid = $db->escape($_POST['sampleid']);
    $samplenumber = $db->escape($_POST['samplenumber']);
    $structure = $db->escape($_POST['structure']);
    $area = $db->escape($_POST['area']);
    $source = $db->escape($_POST['source']);
    $depthfrom = $db->escape($_POST['depthfrom']);
    $depthto = $db->escape($_POST['depthto']);
    $materialtype = $db->escape($_POST['materialtype']);
    $sampletype = $db->escape($_POST['sampletype']);
    $north = $db->escape($_POST['north']);
    $east = $db->escape($_POST['east']);
    $elev = $db->escape($_POST['elev']);
    $sampledate = $db->escape($_POST['sampledate']);
    $comment = $db->escape($_POST['comment']);
    $technician = $db->escape($_POST['technician']);
    $testdate = $db->escape($_POST['testdate']);
    $trial = $db->escape($_POST['trial']);
    $tarename = $db->escape($_POST['tarename']);
    $scale_model = $db->escape($_POST['scale_model']);
    $mc = $db->escape($_POST['mc']);
    $reportdate = make_date();
    $testtype = "MC-Scale";

    $sql = "INSERT INTO moisture_scale (Sample_ID, Sample_Number, Structure, Area, Source, Depth_From, 
    Depth_To, Material_Type, Sample_Type, North, East, Elev, Sample_Date, Comment, Technician,
     Test_Start_Date, Trial, Tare_Name, Scale_Model, Mc, Report_Date, test_type) 
     VALUES (
        '$sampleid', '$samplenumber', '$structure', '$area', '$source', '$depthfrom', '$depthto', '$materialtype', 
        '$sampletype', '$north', '$east', '$elev', '$sampledate','$comment', '$technician','$testdate', '$trial', 
        '$tarename', '$scale_model' ,'$mc', '$reportdate', '$testtype')";

    if ($db->query($sql)) {
      $session->msg('s', "Ensayo agregado exitosamente.");
      redirect('mc_scale.php', false);
    } else {
      $session->msg('d', 'Lo siento, no se pudo agregar el ensayo.');
      redirect('mc_scale.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('mc_scale.php', false);
  }
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
