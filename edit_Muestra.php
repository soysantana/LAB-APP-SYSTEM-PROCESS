<?php
  $page_title = 'Editar producto';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>
<?php
$tdlab = find_by_id('lab_test_requisition_form',(int)$_GET['id']);

if(!$tdlab){
  $session->msg("d","Missing sample id.");
  redirect('add_regMuestra.php');
}
?>
<?php
if(isset($_POST['add_Muestra'])){
  $req_fields = array('Sample_ID', 'Structure', 'Area', 'Source', 'Depth_From', 'Depth_To', 'Material_Type', 'Sample_Type', 'North', 'East', 
  'Elev', 'MC_Oven', 'MC_Stove', 'MC_Scale', 'Atterberg_Limit', 'Grain_Size', 'Standard_Proctor', 'Specific_Gravity',
    'Acid_Reactivity', 'Sand_Castle', 'Los_Angeles_Abrasion', 'Soundness', 'UCS', 'PLT', 'BTS', 'Hydrometer', 'Double_Hydrometer', 'Pinhole', 
    'Consolidation', 'Permeability', 'Comment', 'Statuss', 'Sample_Date', 'Sample_By' );
  validate_fields($req_fields);
  
   if(empty($errors)){
    $sampleid  =remove_junk($db->escape($_POST['Sample_ID']));
    $structure   =remove_junk($db->escape($_POST['Structure']));
    $area   =remove_junk($db->escape($_POST['Area']));
    $source   =remove_junk($db->escape($_POST['Source']));
    $depthfrom  =remove_junk($db->escape($_POST['Depth_From']));
    $depthto  =remove_junk($db->escape($_POST['Depth_To']));
    $materialtype  =remove_junk($db->escape($_POST['Material_Type']));
    $sampletype  =remove_junk($db->escape($_POST['Sample_Type']));
    $north  =remove_junk($db->escape($_POST['North']));
    $east  =remove_junk($db->escape($_POST['East']));
    $elev  =remove_junk($db->escape($_POST['Elev']));
    $mc_oven  =remove_junk($db->escape($_POST['MC_Oven']));
    $mc_stove  =remove_junk($db->escape($_POST['MC_Stove']));
    $mc_scale  =remove_junk($db->escape($_POST['MC_Scale']));
    $attlimit  =remove_junk($db->escape($_POST['Atterberg_Limit']));
    $grain_size =remove_junk($db->escape($_POST['Grain_Size']));
    $std_proctor =remove_junk($db->escape($_POST['Standard_Proctor']));
    $spec_gravi  =remove_junk($db->escape($_POST['Specific_Gravity']));
    $acid_rea  =remove_junk($db->escape($_POST['Acid_Reactivity']));
    $sandcastle  =remove_junk($db->escape($_POST['Sand_Castle']));
    $LAA  =remove_junk($db->escape($_POST['Los_Angeles_Abrasion']));  
    $soundness  =remove_junk($db->escape($_POST['Soundness']));
    $UCS  =remove_junk($db->escape($_POST['UCS']));
    $PLT  =remove_junk($db->escape($_POST['PLT']));
    $bts  =remove_junk($db->escape($_POST['BTS']));
    $HY  =remove_junk($db->escape($_POST['Hydrometer']));
    $DHY  =remove_junk($db->escape($_POST['Double_Hydrometer']));
    $PH  =remove_junk($db->escape($_POST['Pinhole']));
    $consolid  =remove_junk($db->escape($_POST['Consolidation']));
    $Permea  =remove_junk($db->escape($_POST['Permeability']));
    $comment  =remove_junk($db->escape($_POST['Comment']));
    $sampleby  =remove_junk($db->escape($_POST['Sample_By']));
    $sampledate  =remove_junk($db->escape($_POST['Smple_Date']));
    $query .="Sample_ID,Structure,Area,Source, Depth_From, Depth_To, Material_Type, Sample_Type, North, East, 
    Elev, MC_Oven, MC_Stove, MC_Scale, Atterberg_Limit, Grain_Size, Standard_Proctor, Specific_Gravity,
      Acid_Reactivity, Sand_Castle, Los_Angeles_Abrasion, Soundness, UCS, PLT, BTS, Hydrometer, Double_Hydrometer, Pinhole, 
      Consolidation, Permeability, Comment, Sample_Date, Sample_By, ";
    $query .=") Value (";
    $query .="'{$sampleid}','{$structure}','{$area}','{$source}','{$depthfrom}','{$depthto}','{$materialtype}',
    '{$sampletype}','{$north}','{$east}','{$elev}','{$mc_oven}','{$mc_stove}','{$mc_scale}','{$attlimit}',
    '{$grain_size}','{$std_proctor}','{$spec_gravi}','{$acid_rea}','{$sandcastle}','{$LAA}','{$soundness}','{$UCS}',
    '{$PLT}','{$bts}','{$HY}','{$DHY}','{$PH}','{$consolid}','{$Permea}','{$coment}','{$sampledate}','{$sampleby}','{$date}'";
    $query .=")";
       $query  .=" WHERE id ='{$tdlab['id']}'";
       $result = $db->query($query);
               if($result && $db->affected_rows() === 1){
                 $session->msg('s',"La muestra ha sido actualizada. ");
                 redirect('add_regMuestra.php', false);
               } else {
                 $session->msg('d',' Lo siento, actualización falló.');
                 redirect('edit_prepMuestra.php?id='.$tdlab['id'], false);
               }

   } else{
       $session->msg("d", $errors);
       redirect('edit_prepMuestra.php?id='.$tdlab['id'], false);
   }

 }

?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
</div>
  <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Editar producto</span>
         </strong>
        </div>
        <div class="panel-body">
         <div class="col-md-7">
           <form method="post" action="edit_prepMuestra.php?id=<?php echo (int)$tdlab['id'] ?>">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-th-large"></i>
                  </span>
                  <input type="text" class="form-control" name="product-title" value="<?php echo remove_junk($tdlab['name']);?>">
               </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <select class="form-control" name="product-categorie">
                    <option value="">Selecciona una categoría</option>
                   <?php  foreach ($all_categories as $cat): ?>
                     <option value="<?php echo (int)$cat['id']; ?>" <?php if($tdlab['categorie_id'] === $cat['id']): echo "selected"; endif; ?> >
                       <?php echo remove_junk($cat['name']); ?></option>
                   <?php endforeach; ?>
                 </select>
                  </div>
                  <div class="col-md-6">
                    <select class="form-control" name="product-photo">
                      <option value=""> Sin imagen</option>
                      <?php  foreach ($all_photo as $photo): ?>
                        <option value="<?php echo (int)$photo['id'];?>" <?php if($tdlab['media_id'] === $photo['id']): echo "selected"; endif; ?> >
                          <?php echo $photo['file_name'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
               <div class="row">
                 <div class="col-md-4">
                  <div class="form-group">
                    <label for="qty">Cantidad</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                       <i class="glyphicon glyphicon-shopping-cart"></i>
                      </span>
                      <input type="number" class="form-control" name="product-quantity" value="<?php echo remove_junk($tdlab['quantity']); ?>">
                   </div>
                  </div>
                 </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label for="qty">Precio de compra</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-usd"></i>
                      </span>
                      <input type="number" class="form-control" name="buying-price" value="<?php echo remove_junk($tdlab['buy_price']);?>">
                      <span class="input-group-addon">.00</span>
                   </div>
                  </div>
                 </div>
                  <div class="col-md-4">
                   <div class="form-group">
                     <label for="qty">Precio de venta</label>
                     <div class="input-group">
                       <span class="input-group-addon">
                         <i class="glyphicon glyphicon-usd"></i>
                       </span>
                       <input type="number" class="form-control" name="saleing-price" value="<?php echo remove_junk($tdlab['sale_price']);?>">
                       <span class="input-group-addon">.00</span>
                    </div>
                   </div>
                  </div>
               </div>
              </div>
              <button type="submit" name="product" class="btn btn-danger">Actualizar</button>
          </form>
         </div>
        </div>
      </div>
  </div>

<?php include_once('layouts/footer.php'); ?>