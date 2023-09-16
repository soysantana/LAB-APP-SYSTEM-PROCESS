<?php
$page_title = 'Agregar Muestra';
require_once('includes/load.php');

// Verificar el nivel de permiso del usuario para ver esta página
page_require_level(3);

$all_sampleid = find_all('lab_test_requisition_form');

// Define your database credentials
$db_host = 'localhost';
$db_name = 'index_test_lab';
$db_user = 'root';
$db_pass = '';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle any database connection errors
    die("Database connection failed: " . $e->getMessage());
}

// Now you can use $pdo for database operations

if (isset($_POST['add_Muestra'])) {
    // Rest of your code here...
}
if (isset($_POST['add_Muestra'])) {
  $req_fields = array('Sample_ID', 'Sample_Number', 'Structure', 'Area', 'Source', 'Depth_From', 'Depth_To', 'Material_Type', 'Sample_Type', 'North', 'East', 'Elev', 'Comment', 'Sample_Date', 'Sample_By', 'Register_By');

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
    $registerby = remove_junk($db->escape($_POST['Register_By']));
    $Registed_Date = make_date();

    // Definir los checkboxes válidos
    $checkboxes = array(
      'MC_Oven', 'MC_Stove', 'MC_Scale', 'Atterberg_Limit', 'Grain_Size', 'Standard_Proctor', 'Specific_Gravity',
      'Acid_Reactivity', 'Sand_Castle', 'Los_Angeles_Abrasion', 'Soundness', 'UCS', 'PLT', 'BTS', 'Hydrometer',
      'Double_Hydrometer', 'Pinhole', 'Consolidation', 'Permeability'
    );

    // Definir un array para guardar los valores seleccionados
    $selected_values = array();

    // Recorrer los checkboxes y guardar los valores seleccionados
    foreach ($checkboxes as $checkbox) {
      if (isset($_POST[$checkbox])) {
        // Agregar el valor al array de valores seleccionados
        $selected_values[$checkbox] = $_POST[$checkbox];
      }
    }

    // Define the placeholders for the prepared statement
    $placeholders = implode(', ', array_fill(0, count($req_fields), '?'));

    // Define the list of column names for the INSERT statement
    $columns = implode(', ', $req_fields);

    // Create the SQL statement
    $sql = "INSERT INTO lab_test_requisition_form ($columns) VALUES ($placeholders)";

    $stmt->execute([
    $sampleid,
    $samplenumber,
    $structure,
    $area,
    $source,
    $depthfrom,
    $depthto,
    $materialtype,
    $sampletype,
    $north,
    $east,
    $elev,
    // Agrega valores para otras columnas también
]);


    // Bind the rest of the parameters dynamically using a loop
    $paramIndex = 13;
    foreach ($selected_values as $value) {
      $stmt->bindParam($paramIndex++, $value);
    }

    $stmt->bindParam($paramIndex++, $comment);
    $stmt->bindParam($paramIndex++, $sampledate);
    $stmt->bindParam($paramIndex++, $sampleby);
    $stmt->bindParam($paramIndex++, $registerby);
    $stmt->bindParam($paramIndex++, $Registed_Date);

    // Execute the prepared statement
    if ($stmt->execute()) {
      $session->msg('s', 'Muestra agregada exitosamente.');
      redirect('add_Muestra.php', false);
    } else {
      // Handle the SQL error
      $errorInfo = $stmt->errorInfo();
      $error_message = $errorInfo[2];
      $session->msg('d', 'Error en la consulta SQL: ' . $error_message);
      redirect('add_Muestra.php', false);
    }
  }
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
          <input class="form-check-input" type="checkbox" name="MC_Oven" value="MC_Oven">
          <label class="form-check-label" for="inlineCheckbox1">Contenido de humedad con horno</label>
          </div>
          <div class="form-check form-check-inline  col-xs-4  panel-body">
          <input class="form-check-input" type="checkbox" name="MC_Stove" value="MC_Stove">
          <label class="form-check-label" for="inlineCheckbox2">Contenido de humedad con estufa</label>
          </div>
          <div class="form-check form-check-inline  col-xs-4  panel-body">
          <input class="form-check-input" type="checkbox" name="MC_Scale" value="MC_Stove">
         <label class="form-check-label" for="inlineCheckbox3">Contenido de humedad con balanza</label>
        </div>
      

      <div class="form-check form-check-inline col-xs-4  panel-body">
        <input class="form-check-input" type="checkbox" name="Atterberg_Limit" value="AL">
        <label class="form-check-label" for="inlineCheckbox1">Limite de Atterberg</label>
        </div>
        <div class="form-check form-check-inline  col-xs-4 panel-body">
        <input class="form-check-input" type="checkbox" name="Grain_size" value="GS">
        <label class="form-check-label" for="inlineCheckbox2">Granulometria por Tamizado</label>
        </div>
        <div class="form-check form-check-inline  col-xs-4  panel-body">
        <input class="form-check-input" type="checkbox" name="Standard_Proctor" value="SP">
       <label class="form-check-label" for="inlineCheckbox3">Standard Proctor</label>
      </div>
    
    <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Specific_Gravity" value="SG">
      <label class="form-check-label" for="inlineCheckbox1">Gravedad Especifica</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Acid_Reactivity" value="AR">
      <label class="form-check-label" for="inlineCheckbox2">Reactividad acidad</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Sand_Castle" value="SC">
     <label class="form-check-label" for="inlineCheckbox3">Castillo de Arena</label>
    </div>
  
    <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Los_Angeles_Abrasion" value="LAA">
      <label class="form-check-label" for="inlineCheckbox1">Abrasion de Los Angeles</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Soundness" value="SND">
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
      <input class="form-check-input" type="checkbox" name="Hydrometer" value="HY">
     <label class="form-check-label" for="inlineCheckbox3">Hidrometro</label>
    </div>
     <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Double_Hydrometer" value="DHY">
      <label class="form-check-label" for="inlineCheckbox1">Doble Hidrometro</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Pinhole" value="PH">
      <label class="form-check-label" for="inlineCheckbox2">Pinhole</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Consolidation" value="Cons">
      <label class="form-check-label" for="inlineCheckbox3">Consolidacion</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Permeability" value="Perm">
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