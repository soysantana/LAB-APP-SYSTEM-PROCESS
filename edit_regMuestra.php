<?php
  $page_title = 'Editar Muestra';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);
?>

<?php
  // Obtén los datos de la muestra a editar por su ID
  $lab_req_form = find_by_id('lab_test_requisition_form', (int)$_GET['id']);
  // Verifica si la muestra no existe
  if (!$lab_req_form) {
    $session->msg("d", "No se encontró la muestra.");
    redirect('regMuestra.php');
  }
?>

<?php
  // Verifica si se ha enviado el formulario
  if (isset($_POST['update_muestra'])) {
    $req_fields = array(
      'Sample_ID',
      'Sample_Number',
    );
    
    // Valida los campos requeridos
    validate_fields($req_fields);

    if (empty($errors)) {
      // Obtiene los valores de los campos del formulario
      $Sample_ID = remove_junk($db->escape($_POST['Sample_ID']));
      $Sample_Number = remove_junk($db->escape($_POST['Sample_Number']));
      $Structure = remove_junk($db->escape($_POST['Structure']));
      $Area = remove_junk($db->escape($_POST['Area']));
      $Source = remove_junk($db->escape($_POST['Source']));
      $Depth_From = remove_junk($db->escape($_POST['Depth_From']));
      $Depth_To = remove_junk($db->escape($_POST['Depth_To']));
      $Material_Type = remove_junk($db->escape($_POST['Material_Type']));
      $Sample_Type = remove_junk($db->escape($_POST['Sample_Type']));
      $North = remove_junk($db->escape($_POST['North']));
      $East = remove_junk($db->escape($_POST['East']));
      $Elev = remove_junk($db->escape($_POST['Elev']));
      $Test_Type1 = remove_junk($db->escape($_POST['Test_Type1']));
      $Test_Type2 = remove_junk($db->escape($_POST['Test_Type2']));
      $Test_Type3 = remove_junk($db->escape($_POST['Test_Type3']));
      $Test_Type4 = remove_junk($db->escape($_POST['Test_Type4']));
      $Test_Type5 = remove_junk($db->escape($_POST['Test_Type5']));
      $Test_Type6 = remove_junk($db->escape($_POST['Test_Type6']));
      $Test_Type7 = remove_junk($db->escape($_POST['Test_Type7']));
      $Test_Type8 = remove_junk($db->escape($_POST['Test_Type8']));
      $Test_Type9 = remove_junk($db->escape($_POST['Test_Type9']));
      $Test_Type10 = remove_junk($db->escape($_POST['Test_Type10']));
      $Test_Type11 = remove_junk($db->escape($_POST['Test_Type11']));
      $Test_Type12 = remove_junk($db->escape($_POST['Test_Type12']));
      $Test_Type13 = remove_junk($db->escape($_POST['Test_Type13']));
      $Test_Type14 = remove_junk($db->escape($_POST['Test_Type14']));
      $Test_Type15 = remove_junk($db->escape($_POST['Test_Type15']));
      $Test_Type16 = remove_junk($db->escape($_POST['Test_Type16']));
      $Test_Type17 = remove_junk($db->escape($_POST['Test_Type17']));
      $Test_Type18 = remove_junk($db->escape($_POST['Test_Type18']));
      $Test_Type19 = remove_junk($db->escape($_POST['Test_Type19']));

      $query = "UPDATE lab_test_requisition_form SET ";
      $query .= "Sample_ID = '{$Sample_ID}', ";
      $query .= "Sample_Number = '{$Sample_Number}', ";
      $query .= "Structure = '{$Structure}', ";
      $query .= "Area = '{$Area}', ";
      $query .= "Source = '{$Source}', ";
      $query .= "Depth_From = '{$Depth_From}', ";
      $query .= "Depth_To = '{$Depth_To}', ";
      $query .= "Material_Type = '{$Material_Type}', ";
      $query .= "Sample_Type = '{$Sample_Type}', ";
      $query .= "North = '{$North}', ";
      $query .= "East = '{$East}', ";
      $query .= "Elev = '{$Elev}', ";
      $query .= "Test_Type1 = '{$Test_Type1}', ";
      $query .= "Test_Type2 = '{$Test_Type2}', ";
      $query .= "Test_Type3 = '{$Test_Type3}', ";
      $query .= "Test_Type4 = '{$Test_Type4}', ";
      $query .= "Test_Type5 = '{$Test_Type5}', ";
      $query .= "Test_Type6 = '{$Test_Type6}', ";
      $query .= "Test_Type7 = '{$Test_Type7}', ";
      $query .= "Test_Type8 = '{$Test_Type8}', ";
      $query .= "Test_Type9 = '{$Test_Type9}', ";
      $query .= "Test_Type10 = '{$Test_Type10}', ";
      $query .= "Test_Type11 = '{$Test_Type11}', ";
      $query .= "Test_Type12 = '{$Test_Type12}', ";
      $query .= "Test_Type13 = '{$Test_Type13}', ";
      $query .= "Test_Type14 = '{$Test_Type14}', ";
      $query .= "Test_Type15 = '{$Test_Type15}', ";
      $query .= "Test_Type16 = '{$Test_Type16}', ";
      $query .= "Test_Type17 = '{$Test_Type17}', ";
      $query .= "Test_Type18 = '{$Test_Type18}', ";
      $query .= "Test_Type19 = '{$Test_Type19}' ";
      $query .= "WHERE id = '{$lab_req_form['id']}'";      

      $result = $db->query($query);

      if ($result && $db->affected_rows() === 1) {
        $session->msg('s', 'Muestra ha sido actualizada.');
        redirect('regMuestra.php', false);
      } else {
        $session->msg('d', 'Lo siento, la actualización falló.');
        redirect('edit_regMuestra.php?id=' . $lab_req_form['id'], false);
      }
    } else {
      $session->msg("d", $errors);
      redirect('edit_regMuestra.php?id=' . $lab_req_form['id'], false);
    }
  }
?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>    
  </div>
</div>

<div class="mb-4 row">
  <div class="col-md-224">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong><span class="glyphicon glyphicon-th"></span>
        <span>Editar Muestra</span></strong>
      </div>
      
      <div class="panel-body">
        <div class="col-md-14">
          <form method="post" action="edit_regMuestra.php?id=<?php echo (int)$lab_req_form['id']; ?>" class="clearfix">

            <div class="col-xs-4">
              <label>Identificación de muestra</label>
              <input class="form-control" type="text" name="Sample_ID" value="<?php echo remove_junk($lab_req_form['Sample_ID']); ?>">
            </div>
            <div class="col-xs-4">
              <label>Número de muestra</label>
              <input class="form-control" name="Sample_Number" type="text" value="<?php echo remove_junk($lab_req_form['Sample_Number']); ?>">
            </div>
            
            <div class="col-xs-4">
              <label>Estructura</label>
              <input class="form-control" name="Structure" type="text" value="<?php echo remove_junk($lab_req_form['Structure']); ?>">
            </div>
            <div class="col-xs-4">
              <label>Area</label>
              <input class="form-control" name="Area" type="text" value="<?php echo remove_junk($lab_req_form['Area']); ?>">
            </div>
            </div>

          <div class="panel-body"><div class="col-md-12"></div>
              
              <div class="col-xs-4">
                <label >Fuente</label>
                <input class="form-control" name="Source" type="text" value="<?php echo remove_junk($lab_req_form['Source']); ?>">
              </div>
              <div class="col-xs-4">
                <label>Profundidad hasta</label>
                <input class="form-control" name="Depth_From" type="text" value="<?php echo remove_junk($lab_req_form['Depth_From']); ?>">
              </div>
              <div class="col-xs-4">
                <label>profundidad hasta</label>
                <input class="form-control" name="Depth_To" type="text" value="<?php echo remove_junk($lab_req_form['Depth_To']); ?>">
              </div>
          </div>
              <div class="panel-body"><div class="col-md-12">
              <div></div>
              </div>
              <div class="col-xs-4">
                <label >Material Type</label>
            <select class="form-control" name="Material_Type">
                <option <?php if ($lab_req_form['Material_Type'] == 'Soil') echo 'selected'; ?>>Suelo</option>
                <option <?php if ($lab_req_form['Material_Type'] == 'Rock') echo 'selected'; ?>>Roca</option>
                <option <?php if ($lab_req_form['Material_Type'] == 'Aggregates') echo 'selected'; ?>>Agregados</option>
            </select>
            </div>
              <div class="col-xs-4">
                <label >Tipo de Muestra</label>
                <select class="form-control" name="Sample_Type">
                <option <?php if ($lab_req_form['Sample_Type'] == 'Bulk') echo 'selected'; ?>>Bulk</option>
                <option <?php if ($lab_req_form['Sample_Type'] == 'Grab') echo 'selected'; ?>>Grab</option>
                <option <?php if ($lab_req_form['Sample_Type'] == 'Truck') echo 'selected'; ?>>Truck</option>
                <option <?php if ($lab_req_form['Sample_Type'] == 'Shelby') echo 'selected'; ?>>Shelby</option>
                <option <?php if ($lab_req_form['Sample_Type'] == 'Lexan') echo 'selected'; ?>>Lexan</option>
                <option <?php if ($lab_req_form['Sample_Type'] == 'Mazier') echo 'selected'; ?>>Mazier</option>
                <option <?php if ($lab_req_form['Sample_Type'] == 'Ring') echo 'selected'; ?>>Ring</option>
                <option <?php if ($lab_req_form['Sample_Type'] == 'Rock') echo 'selected'; ?>>Rock</option>
              </select>
            </div>
            
            </div>
            
            <div class="panel-body"><div class="col-md-12">
            </div>
            <div class="col-xs-4">
              <label >Coordenada Norte</label>
              <input class="form-control" name="North" type="text" value="<?php echo remove_junk($lab_req_form['North']); ?>">
            </div>
            <div class="col-xs-4">
              <label>Coordenada Este</label>
              <input class="form-control" name=East type="text" value="<?php echo remove_junk($lab_req_form['East']); ?>">
            </div>
            <div class="col-xs-4">
              <label>Elevacion</label>
              <input class="form-control" name="Elev" type="text" value="<?php echo remove_junk($lab_req_form['Elev']); ?>">
            </div>
          
         
          <div class="form-check form-check-inline col-xs-4  panel-body">
          <input class="form-check-input" type="checkbox" name="Test_Type1" value="Mc_Oven" <?php if ($lab_req_form['Test_Type1'] == 'Mc_Oven') echo 'checked'; ?>>
          <label class="form-check-label" for="inlineCheckbox1">Contenido de humedad con horno</label>
          </div>
          <div class="form-check form-check-inline  col-xs-4  panel-body">
          <input class="form-check-input" type="checkbox" name="Test_Type2" value="Mc_Stove" <?php if ($lab_req_form['Test_Type2'] == 'Mc_Stove') echo 'checked'; ?>>
          <label class="form-check-label" for="inlineCheckbox2">Contenido de humedad con estufa</label>
          </div>
          <div class="form-check form-check-inline  col-xs-4  panel-body">
          <input class="form-check-input" type="checkbox" name="Test_Type3" value="Mc_Scale" <?php if ($lab_req_form['Test_Type3'] == 'Mc_Scale') echo 'checked'; ?>>
         <label class="form-check-label" for="inlineCheckbox3">Contenido de humedad con balanza</label>
        </div>
      

      <div class="form-check form-check-inline col-xs-4  panel-body">
        <input class="form-check-input" type="checkbox" name="Test_Type4" value="AL" <?php if ($lab_req_form['Test_Type4'] == 'AL') echo 'checked'; ?>>
        <label class="form-check-label" for="inlineCheckbox1">Limite de Atterberg</label>
        </div>
        <div class="form-check form-check-inline  col-xs-4 panel-body">
        <input class="form-check-input" type="checkbox" name="Test_Type5" value="GS" <?php if ($lab_req_form['Test_Type5'] == 'GS') echo 'checked'; ?>>
        <label class="form-check-label" for="inlineCheckbox2">Granulometria por Tamizado</label>
        </div>
        <div class="form-check form-check-inline  col-xs-4  panel-body">
        <input class="form-check-input" type="checkbox" name="Test_Type6" value="SP" <?php if ($lab_req_form['Test_Type6'] == 'SP') echo 'checked'; ?>>
       <label class="form-check-label" for="inlineCheckbox3">Standard Proctor</label>
      </div>
    
    <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type7" value="SG" <?php if ($lab_req_form['Test_Type7'] == 'SG') echo 'checked'; ?>>
      <label class="form-check-label" for="inlineCheckbox1">Gravedad Especifica</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type8" value="AR" <?php if ($lab_req_form['Test_Type8'] == 'AR') echo 'checked'; ?>>
      <label class="form-check-label" for="inlineCheckbox2">Reactividad acidad</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type9" value="SC" <?php if ($lab_req_form['Test_Type9'] == 'SC') echo 'checked'; ?>>
     <label class="form-check-label" for="inlineCheckbox3">Castillo de Arena</label>
    </div>
  
    <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type10" value="LAA" <?php if ($lab_req_form['Test_Type10'] == 'LAA') echo 'checked'; ?>>
      <label class="form-check-label" for="inlineCheckbox1">Abrasion de Los Angeles</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type11" value="SND" <?php if ($lab_req_form['Test_Type11'] == 'SND') echo 'checked'; ?>>
      <label class="form-check-label" for="inlineCheckbox2">Sanidad</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type12" value="UCS" <?php if ($lab_req_form['Test_Type12'] == 'UCS') echo 'checked'; ?>>
     <label class="form-check-label" for="inlineCheckbox3">UCS</label>
    </div>
     <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type13" value="PLT" <?php if ($lab_req_form['Test_Type13'] == 'PLT') echo 'checked'; ?>>
      <label class="form-check-label" for="inlineCheckbox1">PLT</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type14" value="BTS" <?php if ($lab_req_form['Test_Type14'] == 'BTS') echo 'checked'; ?>>
      <label class="form-check-label" for="inlineCheckbox2">Brazilian</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type15" value="HY" <?php if ($lab_req_form['Test_Type15'] == 'HY') echo 'checked'; ?>>
     <label class="form-check-label" for="inlineCheckbox3">Hidrometro</label>
    </div>
     <div class="form-check form-check-inline col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type16" value="DHY" <?php if ($lab_req_form['Test_Type16'] == 'DHY') echo 'checked'; ?>>
      <label class="form-check-label" for="inlineCheckbox1">Doble Hidrometro</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4  panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type17" value="PH" <?php if ($lab_req_form['Test_Type17'] == 'PH') echo 'checked'; ?>>
      <label class="form-check-label" for="inlineCheckbox2">Pinhole</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type18" value="Cons" <?php if ($lab_req_form['Test_Type18'] == 'Cons') echo 'checked'; ?>>
      <label class="form-check-label" for="inlineCheckbox3">Consolidacion</label>
      </div>
      <div class="form-check form-check-inline  col-xs-4 panel-body">
      <input class="form-check-input" type="checkbox" name="Test_Type19" value="Perm" <?php if ($lab_req_form['Test_Type19'] == 'Perm') echo 'checked'; ?>>
      <label class="form-check-label" for="inlineCheckbox3">Permeabilidad</label>
            
            <div class="col-xs-12">

              <button type="submit" name="update_muestra" class="btn btn-danger">Actualizar Muestra</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    
<?php include_once('layouts/footer.php'); ?>
