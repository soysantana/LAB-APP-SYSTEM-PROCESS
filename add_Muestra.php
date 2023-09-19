<?php
$page_title = 'Agregar Muestra';
require_once('includes/load.php');
// Incluir el archivo de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('db/Add-Muestra.php');
}
?>


<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
  <?php echo display_msg($msg); ?>    
  </div>
</div>

  <div class="mb-4 row"><div class="col-md-224"><div class="panel panel-default"><div class="panel-heading">
          <strong><span class="glyphicon glyphicon-th"></span>
               <span>Agregar Muestra</span></strong> </div>

        <div class="panel-body"><div class="col-md-14">
          <form method="post" action="add_Muestra.php" class="clearfix">
            
            <div class="col-xs-4">
              <label>Identificacion de muestra</label>
              <input class="form-control" name="Sample_ID" type="text">
            </div>
            <div class="col-xs-4">
              <label>Numero de muestra</label>
              <input class="form-control" name="Sample_Number" type="text">
            </div>
            <div class="col-xs-4">
              <label>Estructura</label>
              <input class="form-control" name="Structure" type="text">
            </div>
            <div class="col-xs-4">
              <label>Area</label>
              <input class="form-control" name="Area" type="text">
            </div>
            </div>

          <div class="panel-body"><div class="col-md-12"></div>
              
              <div class="col-xs-4">
                <label >Fuente</label>
                <input class="form-control" name="Source" type="text">
              </div>
              <div class="col-xs-4">
                <label>Profundidad hasta</label>
                <input class="form-control" name="Depth_From" type="text">
              </div>
              <div class="col-xs-4">
                <label>profundidad hasta</label>
                <input class="form-control" name="Depth_To" type="text">
              </div>
          </div>
              <div class="panel-body"><div class="col-md-12">
              <div></div>
              </div>
              <div class="col-xs-4">
                <label >Material Type</label>
                <select class="form-control" name="Material_Type">
                <option selected>Elige...</option>
                <option value="Soil">Suelo</option>
                <option value="Rock">Roca</option>
                <option value="Aggregates">Agregados</option>
            </select>
            </div>
              <div class="col-xs-4">
                <label >Tipo de Muestra</label>
                <select class="form-control" name="Sample_Type">
                <option selected>Elige...</option>
                <option value="Bulk">Bulk</option>
                <option value="Grab">Grab</option>
                <option value="Truck">Truck</option>
                <option value="Shelby">Shelby</option>
                <option value="Lexan">Lexan</option>
              </select>
            </div>
            
            </div>
            
            <div class="panel-body"><div class="col-md-12">
            </div>
            <div class="col-xs-4">
              <label >Coordenada Norte</label>
              <input class="form-control" name="North" type="text">
            </div>
            <div class="col-xs-4">
              <label>Coordenada Este</label>
              <input class="form-control" name=East type="text">
            </div>
            <div class="col-xs-4">
              <label>Elevacion</label>
              <input class="form-control" name="Elev" type="text">
            </div>
          
         
          <div class="form-check form-check-inline col-xs-4  panel-body">
          <input class="form-check-input" type="checkbox" name="Mc_Oven" value="Mc_Oven">
          <label class="form-check-label" for="inlineCheckbox1">Contenido de humedad con horno</label>
          </div>
          <div class="form-check form-check-inline  col-xs-4  panel-body">
          <input class="form-check-input" type="checkbox" name="Mc_Stove" value="Mc_Stove">
          <label class="form-check-label" for="inlineCheckbox2">Contenido de humedad con estufa</label>
          </div>
          <div class="form-check form-check-inline  col-xs-4  panel-body">
          <input class="form-check-input" type="checkbox" name="Mc_Scale" value="Mc_Scale">
         <label class="form-check-label" for="inlineCheckbox3">Contenido de humedad con balanza</label>
        </div>
      

      <div class="form-check form-check-inline col-xs-4  panel-body">
        <input class="form-check-input" type="checkbox" name="AL" value="AL">
        <label class="form-check-label" for="inlineCheckbox1">Limite de Atterberg</label>
        </div>
        <div class="form-check form-check-inline  col-xs-4 panel-body">
        <input class="form-check-input" type="checkbox" name="GS" value="GS">
        <label class="form-check-label" for="inlineCheckbox2">Granulometria por Tamizado</label>
        </div>
        <div class="form-check form-check-inline  col-xs-4  panel-body">
        <input class="form-check-input" type="checkbox" name="SP" value="SP">
       <label class="form-check-label" for="inlineCheckbox3">Standard Proctor</label>
      </div>
    
    <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="SG" value="SG">
      <label class="form-check-label" for="inlineCheckbox1">Gravedad Especifica</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="AR" value="AR">
      <label class="form-check-label" for="inlineCheckbox2">Reactividad acidad</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="SC" value="SC">
     <label class="form-check-label" for="inlineCheckbox3">Castillo de Arena</label>
    </div>
  
    <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="LAA" value="LAA">
      <label class="form-check-label" for="inlineCheckbox1">Abrasion de Los Angeles</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="SND" value="SND">
      <label class="form-check-label" for="inlineCheckbox2">Sanidad</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="UCS" value="UCS">
     <label class="form-check-label" for="inlineCheckbox3">UCS</label>
    </div>
     <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="PLT" value="PLT">
      <label class="form-check-label" for="inlineCheckbox1">PLT</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="BTS" value="BTS">
      <label class="form-check-label" for="inlineCheckbox2">Brazilian</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="HY" value="HY">
     <label class="form-check-label" for="inlineCheckbox3">Hidrometro</label>
    </div>
     <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="DHY" value="DHY">
      <label class="form-check-label" for="inlineCheckbox1">Doble Hidrometro</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="PH" value="PH">
      <label class="form-check-label" for="inlineCheckbox2">Pinhole</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Cons" value="Cons">
      <label class="form-check-label" for="inlineCheckbox3">Consolidacion</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Perm" value="Perm">
      <label class="form-check-label" for="inlineCheckbox3">Permeabilidad</label>
</div>


<div class="panel-body"><div class="col-md-12">
</div> 

  <div class="col-xs-4">
    <label>Comentario</label>
  <input class="form-control" name="Comment"type="textarea" >
</div>

  <div class="col-xs-4">
    <label>Muestrado por</label>
    <input class="form-control" name="Sample_By" type="text">
</div> 
</div>

<div class="panel-body"><div class="col-md-28">
</div> 

<div class="col-xs-4">
  <label>Fecha de Muestreo</label>
  <input class="form-control" name="Sample_Date" type="date">
</div>

<div class="col-xs-4">
  <label>Registrado por</label>
  <input class="form-control" name="Register_By" type="text">
</div>

<div class="panel-body"><div class="col-md-28">
</div> 
 <button type="submit" name="ADD_Muestra" class="btn btn-danger">Agregar Muestra</button>
 </div>
</div>
    
<?php include_once('layouts/footer.php'); ?>