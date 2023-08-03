<?php
$page_title = 'Editar registro de muestra';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);

$editmuestra = find_by_id('lab_test_requisition_form', (int)$_GET['id']);

if (!$editmuestra) {
  $session->msg("d", "Falta el ID de muestra.");
  redirect('regMuestra.php');
}

if (isset($_POST['edit_regMuestra'])) {
  $req_fields = array('Sample_ID', 'Structure', 'Area', 'Source', 'Depth_From', 'Depth_To', 'Material_Type',
    'Sample_Type', 'North', 'East', 'Elev', 'MC_Oven', 'MC_Stove', 'MC_Scale', 'Atterberg_Limit', 'Grain_size',
    'Standard_Proctor', 'Specific_Gravity', 'Acid_Reactivity', 'Sand_Castle', 'Los_Angeles_Abrasion', 'Soundness',
    'UCS', 'PLT', 'BTS', 'Hydrometer', 'Double_Hydrometer', 'Pinhole', 'Consolidation', 'Permeability', 'Comment',
    'Sample_By', 'Sample_Date');

  validate_fields($req_fields);
  if (empty($errors)) {
    $id = (int)$editmuestra['id'];
    $sampleid = remove_junk($db->escape($_POST['Sample_ID']));
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
    $mc_oven = isset($_POST['MC_Oven']) ? 1 : 0;
    $mc_stove = isset($_POST['MC_Stove']) ? 1 : 0;
    $mc_scale = isset($_POST['MC_Scale']) ? 1 : 0;
    $attlimit = isset($_POST['Atterberg_Limit']) ? 1 : 0;
    $grain_size = isset($_POST['Grain_size']) ? 1 : 0;
    $std_proctor = isset($_POST['Standard_Proctor']) ? 1 : 0;
    $spec_gravi = isset($_POST['Specific_Gravity']) ? 1 : 0;
    $acid_rea = isset($_POST['Acid_Reactivity']) ? 1 : 0;
    $sandcastle = isset($_POST['Sand_Castle']) ? 1 : 0;
    $LAA = isset($_POST['Los_Angeles_Abrasion']) ? 1 : 0;
    $soundness = isset($_POST['Soundness']) ? 1 : 0;
    $UCS = isset($_POST['UCS']) ? 1 : 0;
    $PLT = isset($_POST['PLT']) ? 1 : 0;
    $bts = isset($_POST['BTS']) ? 1 : 0;
    $HY = isset($_POST['Hydrometer']) ? 1 : 0;
    $DHY = isset($_POST['Double_Hydrometer']) ? 1 : 0;
    $PH = isset($_POST['Pinhole']) ? 1 : 0;
    $consolid = isset($_POST['Consolidation']) ? 1 : 0;
    $Permea = isset($_POST['Permeability']) ? 1 : 0;
    $comment = remove_junk($db->escape($_POST['Comment']));
    $sampleby = remove_junk($db->escape($_POST['Sample_By']));
    $sampledate = remove_junk($db->escape($_POST['Sample_Date']));

    $sql = "UPDATE lab_test_requisition_form SET Sample_ID='{$sampleid}', Structure='{$structure}', 
    Area='{$area}', Source='{$source}', Depth_From='{$depthfrom}', Depth_To='{$depthto}', 
    Material_Type='{$materialtype}', Sample_Type='{$sampletype}', North='{$north}', East='{$east}', 
    Elev='{$elev}', MC_Oven='{$mc_oven}', MC_Stove='{$mc_stove}', MC_Scale='{$mc_scale}', 
    Atterberg_Limit='{$attlimit}', Grain_Size='{$grain_size}', Standard_Proctor='{$std_proctor}', 
    Specific_Gravity='{$spec_gravi}', Acid_Reactivity='{$acid_rea}', Sand_Castle='{$sandcastle}', 
    Los_Angeles_Abrasion='{$LAA}', Soundness='{$soundness}', UCS='{$UCS}', PLT='{$PLT}',
     BTS='{$bts}', Hydrometer='{$HY}', Double_Hydrometer='{$DHY}', Pinhole='{$PH}', 
     Consolidation='{$consolid}', Permeability='{$Permea}', Comment='{$comment}', 
     Sample_By='{$sampleby}', Sample_Date='{$sampledate}' 
     WHERE id='{$db->escape($id)}'";

    $result = $db->query($sql);
    if ($result && $db->affected_rows() === 1) {
      $session->msg('s', 'La muestra ha sido actualizada.');
      redirect('edit_regMuestra.php', false);
    } else {
      $session->msg('d', 'Lo siento, la actualización falló.');
      redirect('edit_regMuestra.php?id=' . (int)$edit_regMuestra['id'], false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('edit_regMuestra.php?id=' . (int)$edit_regMuestra['id'], false);
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
  <div class="col-md-24">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong><span class="glyphicon glyphicon-th"></span>
          <span>Actualizar Muestra</span>
        </strong>
      </div>

      <div class="panel-body">
        <div class="col-md-14">
          <form method="post" action="edit_regMuestra.php" class="clearfix">
            <div class="col-xs-4">
              <label>Sample ID</label>
              <input class="form-control" name="Sample_ID" type="text" value="<?php echo $editmuestra['Sample_ID']; ?>">
            </div>
            <div class="col-xs-4">
              <label>Sample Number</label>
              <input class="form-control" name="Sample_Number" type="text" value="<?php echo $editmuestra['Sample_Number]; ?>">
            </div>
            <div class="col-xs-4">
              <label>Structure</label>
              <input class="form-control" name="Structure" type="text" value="<?php echo $editmuestra['Structure']; ?>">
            </div>
            <div class="col-xs-4">
              <label>Area</label>
              <input class="form-control" name="Area" type="text" value="<?php echo $editmuestra['Area']; ?>">
            </div>
          </div>

          <div class="panel-body">
            <div class="col-md-12"></div>

            <div class="col-xs-4">
              <label>Source</label>
              <input class="form-control" name="Source" type="text" value="<?php echo $editmuestra['Source']; ?>">
            </div>
            <div class="col-xs-4">
              <label>Depth From</label>
              <input class="form-control" name="Depth_From" type="text" value="<?php echo $editmuestra['Depth_From']; ?>">
            </div>
            <div class="col-xs-4">
              <label>Depth To</label>
              <input class="form-control" name="Depth_To" type="text" value="<?php echo $editmuestra['Depth_To']; ?>">
            </div>
          </div>

          <div class="panel-body">
            <div class="col-md-12">
              <div></div>
            </div>
            <div class="col-xs-4">
              <label>Material Type</label>
              <select class="form-control" name="Material_Type">
                <option <?php if ($editmuestra['Material_Type'] == "Soil") echo "selected"; ?>>Soil</option>
                <option <?php if ($editmuestra['Material_Type'] == "Rock") echo "selected"; ?>>Rock</option>
                <option <?php if ($editmuestra['Material_Type'] == "Aggregates") echo "selected"; ?>>Aggregates</option>
              </select>
            </div>
            <div class="col-xs-4">
              <label>Sample Type</label>
              <select class="form-control" name="Sample_Type">
                <option <?php if ($editmuestra['Sample_Type'] == "Bulk") echo "selected"; ?>>Bulk</option>
                <option <?php if ($editmuestra['Sample_Type'] == "Grab") echo "selected"; ?>>Grab</option>
                <option <?php if ($editmuestra['Sample_Type'] == "Truck") echo "selected"; ?>>Truck</option>
                <option <?php if ($editmuestra['Sample_Type'] == "Shelby") echo "selected"; ?>>Shelby</option>
                <option <?php if ($editmuestra['Sample_Type'] == "Lexan") echo "selected"; ?>>Lexan</option>
              </select>
            </div>

          </div>

          <div class="panel-body">
            <div class="col-md-12">
            </div>
            <div class="col-xs-4">
              <label>North</label>
              <input class="form-control" name="North" type="text" value="<?php echo $editmuestra['North']; ?>">
            </div>
            <div class="col-xs-4">
              <label>East</label>
              <input class="form-control" name="East" type="text" value="<?php echo $editmuestra['East']; ?>">
            </div>
            <div class="col-xs-4">
              <label>Elevation</label>
              <input class="form-control" name="Elev" type="text" value="<?php echo $editmuestra['Elev']; ?>">
            </div>
          </div>

          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="MC_Oven" value="" <?php if ($editmuestra['MC_Oven']  == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox1">Moisture Content Oven</label>
          </div>
          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="MC_Stove" value="" <?php if ($editmuestra['MC_Stove'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox2">Moisture Content Stove</label>
          </div>
          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="MC_Scale" value="" <?php if ($editmuestra['MC_Scale'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox3">Moisture Content Scale</label>
          </div>

          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="Atterberg_Limit" <?php if ($editmuestra['Atterberg_Limit'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox1">Atterberg Limit</label>
          </div>
          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="Grain_size" value="" <?php if ($editmuestra['Grain_size']  == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox2">Sieved Grain Size</label>
          </div>
          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="Standard_Proctor" value="" <?php if ($editmuestra['Standard_Proctor'] == 'Required') echo 'checked'; ?>
            <label class="form-check-label" for="inlineCheckbox3">Standard Proctor</label>
          </div>

          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="Specific_Gravity" value="" <?php if ($editmuestra['Specific_Gravity'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox1">Specific Gravity</label>
          </div>
          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="Acid_Reactivity" value="" <?php if ($editmuestra['Acid_Reactivity'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox2">Acid Reactivity</label>
          </div>
          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="Sand_Castle" value="" <?php if ($editmuestra['Sand_Castle'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox3">Sand Castle</label>
          </div>

          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="Los_Angeles_Abrasion" value="" <?php if ($editmuestra['Los_Angeles_Abrasion'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox1">Los Angeles Abrasion</label>
          </div>
          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="Soundness" value="" <?php if ($editmuestra['Soundness'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox2">Soundness</label>
          </div>
          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="UCS" value="" <?php if ($editmuestra['UCS'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox3">Unconfined Compressive Strength (UCS)</label>
          </div>

          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="PLT" value="" <?php if ($editmuestra['PLT'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox1">Point Load Test (PLT)</label>
          </div>
          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="BTS" value="" <?php if ($editmuestra['BTS'] == 'Required')  echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox2">Splitting Tensile Strength Test (Brazilian)</label>
          </div>
          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="Hydrometer" value="" <?php if ($editmuestra['Hydrometer'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox3">Hydrometer</label>
          </div>

          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="Double_Hydrometer" value="" <?php if ($editmuestra['Double_Hydrometer'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox1">Double Hydrometer</label>
          </div>
          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="Pinhole" value="" <?php if ($editmuestra['Pinhole'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox2">Pinhole</label>
          </div>
          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="Consolidation" value="" <?php if ($editmuestra['Consolidation'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox3">Consolidation</label>
          </div>
          <div class="form-check form-check-inline col-xs-4 panel-body">
            <input class="form-check-input" type="checkbox" name="Permeability" value="" <?php if ($editmuestra['Permeability'] == 'Required') echo 'checked'; ?>>
            <label class="form-check-label" for="inlineCheckbox3">Permeability</label>
          </div>

          <div class="panel-body">
            <div class="col-md-12">
            </div>

            <div class="col-xs-4">
              <label>Comment</label>
              <input class="form-control" name="Comment" type="textarea" value="<?php echo $editmuestra['Comment']; ?>">
            </div>

            <div class="col-xs-4">
              <label>Sample By</label>
              <input class="form-control" name="Sample_By" type="text" value="<?php echo $editmuestra['Sample_By']; ?>">
            </div>
          </div>

          <div class="panel-body">
            <div class="col-md-12">
            </div>
            <div class="col-xs-4">
              <label>Sample Date</label>
              <input class="form-control" name="Sample_Date" type="date" value="<?php echo $editmuestra['Sample_Date']; ?>">
            </div>

            <div class="panel-body">
              <div class="col-md-28">
              </div>
              <button type="submit" name="edit_regMuestra" class="btn btn-danger">Editar Muestra</button>
            </div>
          </div>

          <?php include_once('layouts/footer.php'); ?>
