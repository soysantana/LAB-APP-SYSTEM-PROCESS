<?php
$page_title = 'Agregar Muestra';
require_once('includes/load.php');
require_once('includes/functions.php');
require_once('includes/config.php');

$db_host = "Localhost";
$db_user = "root";
$db_pass = "";
$db_name = "index_test_lab";

// Comprobación de errores
$errors = [];

// Inicializar mensajes
$msg = [];

// Comprobación de la solicitud POST
if (isset($_POST['add_Muestra'])) {
  $req_fields = array(
    'Sample_ID', 'Sample_Number', 'Structure', 'Area', 'Source', 'Depth_From', 'Depth_To', 'Material_Type',
    'Sample_Type', 'North', 'East', 'Elev', 'Comment', 'Sample_Date', 'Sample_By'
  );

  validate_fields($req_fields);

  if (empty($errors)) {
    $sampleid = remove_junk($db->escape($_POST['Sample_ID']));
    $samplenumber = remove_junk($db->escape($_POST['Sample_Number']));
    $structure = remove_junk($db->escape($_POST['Structure']));
    $area = remove_junk($db->escape($_POST['Area']));
    $source = remove_junk($db->escape($_POST['Source']));
    $depthfrom = remove_junk($db->escape($_POST['Depth_From']));
    $depthto = remove_junk($db->escape($_POST['Depth_To']));
    $materialtype = remove_junk($db->escape($_POST['Material_Type']));
    $sampletype = remove_junk($db->escape($_POST['Sample_Type']));
    $north = remove_junk($db->escape($_POST['North']));
    $east = remove_junk($db->escape($_POST['East']));
    $elev = remove_junk($db->escape($_POST['Elev']));
    $comment = remove_junk($db->escape($_POST['Comment']));
    $sampledate = remove_junk($db->escape($_POST['Sample_Date']));
    $sampleby = remove_junk($db->escape($_POST['Sample_By']));
    $registed_date = make_date();

    // Definir los checkboxes válidos
    $checkboxes = array(
       'Test_Type1', 'Test_Type2', 'Test_Type3', 'Test_Type4', 'Test_Type5',
        'Test_Type6', 'Test_Type7', 'Test_Type8', 'Test_Type9',
        'Test_Type10', 'Test_Type11', 'Test_Type12', 'Test_Type13', 'Test_Type14', 'Test_Type15',
        'Test_Type16', 'Test_Type17', 'Test_Type18', 'Test_Type19'
    );

    // Crear un array para almacenar los valores de los checkboxes seleccionados
    $checkboxes_values = array();

    // Recorrer los checkboxes y guardar los valores seleccionados
    foreach ($checkboxes as $checkbox) {
      if (isset($_POST[$checkbox])) {
        // Obtener el valor del checkbox
        $checkbox_value = remove_junk($db->escape($_POST[$checkbox]));
        // Guardar el valor en el array
        $checkboxes_values[$checkbox] = $checkbox_value;
      } else {
        // Si el checkbox no está marcado, asignar un valor predeterminado (en este caso, cadena vacía)
        $checkboxes_values[$checkbox] = '';
      }
    }

    $query  = "INSERT INTO lab_test_requisition_form (";
    $query .= "Sample_ID,Sample_Number,Structure,Area,Source, Depth_From, Depth_To, Material_Type, Sample_Type, North, East, Elev, ";

    // Agregar los nombres de las columnas de los checkboxes a la consulta SQL
    $query .= implode(',', $checkboxes);

    $query .= ", Comment, Sample_Date, Sample_By, Registed_Date";
    $query .= ") VALUES (";
    $query .= "'{$sampleid}', '{$samplenumber}', '{$structure}', '{$area}', '{$source}', '{$depthfrom}', '{$depthto}', '{$materialtype}', '{$sampletype}', '{$north}', '{$east}', '{$elev}', ";

    // Agregar los valores de los checkboxes a la consulta SQL
    $query .= implode(',', array_map(function($value) {
      return "'" . $value . "'";
    }, array_values($checkboxes_values)));

    $query .= ",'{$comment}','{$sampledate}','{$sampleby}','{$registed_date}'";
    $query .= ") ON DUPLICATE KEY UPDATE Sample_ID='{$sampleid}'";

    if ($db->query($query)) {
      $session->msg('s', 'Muestra agregada exitosamente.');
      redirect('add_Muestra.php', false);
    } else {
      $session->msg('d', 'Lo siento, el registro falló.');
      redirect('add_Muestra.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('add_Muestra.php', false);
  }
}
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <?php
        foreach ($msg as $message) {
            echo display_msg($message);
        }
        ?>
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
                <option value="Ring">Ring</option>
                <option value="Maxier">Maxier</option>
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
          <input class="form-check-input" type="checkbox" name="Test_Type1" value="MC_Oven">
          <label class="form-check-label" for="inlineCheckbox1">Contenido de humedad con horno</label>
          </div>
          <div class="form-check form-check-inline  col-xs-4  panel-body">
          <input class="form-check-input" type="checkbox" name="Test_Type2" value="MC_Stove">
          <label class="form-check-label" for="inlineCheckbox2">Contenido de humedad con estufa</label>
          </div>
          <div class="form-check form-check-inline  col-xs-4  panel-body">
          <input class="form-check-input" type="checkbox" name="Test_Type3" value="MC_Stove">
         <label class="form-check-label" for="inlineCheckbox3">Contenido de humedad con balanza</label>
        </div>
      

      <div class="form-check form-check-inline col-xs-4  panel-body">
        <input class="form-check-input" type="checkbox" name="Test_Type4" value="AL">
        <label class="form-check-label" for="inlineCheckbox1">Limite de Atterberg</label>
        </div>
        <div class="form-check form-check-inline  col-xs-4 panel-body">
        <input class="form-check-input" type="checkbox" name="Test_Type5" value="GS">
        <label class="form-check-label" for="inlineCheckbox2">Granulometria por Tamizado</label>
        </div>
        <div class="form-check form-check-inline  col-xs-4  panel-body">
        <input class="form-check-input" type="checkbox" name="Test_Type6" value="SP">
       <label class="form-check-label" for="inlineCheckbox3">Standard Proctor</label>
      </div>
    
    <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type7" value="SG">
      <label class="form-check-label" for="inlineCheckbox1">Gravedad Especifica</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type8" value="AR">
      <label class="form-check-label" for="inlineCheckbox2">Reactividad acidad</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type9" value="SC">
     <label class="form-check-label" for="inlineCheckbox3">Castillo de Arena</label>
    </div>
  
    <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type10" value="LAA">
      <label class="form-check-label" for="inlineCheckbox1">Abrasion de Los Angeles</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type11" value="SND">
      <label class="form-check-label" for="inlineCheckbox2">Sanidad</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type12" value="UCS">
     <label class="form-check-label" for="inlineCheckbox3">UCS</label>
    </div>
     <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type13 value="PLT">
      <label class="form-check-label" for="inlineCheckbox1">PLT</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type14" value="BTS">
      <label class="form-check-label" for="inlineCheckbox2">Brazilian</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type15" value="HY">
     <label class="form-check-label" for="inlineCheckbox3">Hidrometro</label>
    </div>
     <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type16" value="DHY">
      <label class="form-check-label" for="inlineCheckbox1">Doble Hidrometro</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type17" value="PH">
      <label class="form-check-label" for="inlineCheckbox2">Pinhole</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type18" value="Cons">
      <label class="form-check-label" for="inlineCheckbox3">Consolidacion</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type19" value="Perm">
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
 <button type="submit" name="add_Muestra" class="btn btn-danger">Agregar Muestra</button>
 </div>
</div>
    

<?php include_once('layouts/footer.php'); ?>