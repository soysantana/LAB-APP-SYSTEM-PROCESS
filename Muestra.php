<?php
  $page_title = 'Lista de Muestras';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
   $muestras= join_lab_test_requisition_form();
?>
<?php include_once('layouts/header.php'); ?>
  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
         <div class="pull-right">
           <a href="add_Muestra.php" class="btn btn-primary">Agragar muestra</a>
         </div>
        </div>


        <div class="panel-body">
          <table class="table table-bordered table-responsive-xl">
            <thead>
              <tr>
                <th class="text-center" style="width: 10px;">#</th>
                <th class="text-center" style="width: 10px;">ID</th>
                <th class="text-center" style="width: 10px;">McO</th>
                <th class="text-center" style="width: 10px;">McSt</th>
                <th class="text-center" style="width: 10px;">McSc</th>
                <th class="text-center" style="width: 10px;">AL</th>
                <th class="text-center" style="width: 10px;">GS</th>
                <th class="text-center" style="width: 10px;">SP</th>
                <th class="text-center" style="width: 10px;">SG</th>
                <th class="text-center" style="width: 10px;">AR</th>
                <th class="text-center" style="width: 10px;">Snc</th>
                <th class="text-center" style="width: 10px;">LAA</th>
                <th class="text-center" style="width: 10px;">SNSS</th>
                <th class="text-center" style="width: 10px;">UCS</th>
                <th class="text-center" style="width: 10px;">PLT</th>
                <th class="text-center" style="width: 10px;">BTS</th>
                <th class="text-center" style="width: 10px;">HY</th>
                <th class="text-center" style="width: 10px;">DHY</th>
                <th class="text-center" style="width: 10px;">PH</th>
                <th class="text-center" style="width: 10px;">Conso</th>
                <th class="text-center" style="width: 10px;">Perme</th>
                <th class="text-center" style="width: 10px;">Sample Date</th>
                <th class="text-center" style="width: 10px;">Registed Date</th>
                <th class="text-center" style="width: 10px;">Update Sample</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($muestras as $muestra):?>
              <tr>
                <td class="text-center"><?php echo count_id();?></td>
                <td> <?php echo remove_junk($muestra['Sample_ID']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['MC_Oven']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['MC_Stove']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['MC_Scale']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Atterberg_Limit']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Grain_Size']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Standard_Proctor']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Specific_Gravity']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Acid_Reactivity']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Sand_Castle']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Los_Angeles_Abrasion']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Soundness']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['UCS']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['PLT']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['BTS']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Hydrometer']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Double_Hydrometer']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Pinhole']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Consolidation']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Permeability']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Sample_Date']); ?></td>
                <td class="text-center"> <?php echo remove_junk($muestra['Registed_Date']); ?></td>
                <td class="text-center">
                  <div class="btn-group">
                    <a href="edit_Muestra.php?id=<?php echo (int)$muestra['id'];?>" class="btn btn-info btn-xs"  title="Editar" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                     <a href="delete_Muestra.php?id=<?php echo (int)$muestra['id'];?>" class="btn btn-danger btn-xs"  title="Eliminar" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </div>
                </td>
              </tr>
             <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>
