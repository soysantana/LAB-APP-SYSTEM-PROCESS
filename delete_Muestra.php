<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
?>
<?php
  $muestra = find_by_id('lab_test_requisition_form',(int)$_GET['id']);
  if(!$muestra){
    $session->msg("d","ID vacío");
    redirect('product.php');
  }
?>
<?php
  $delete_id = delete_by_id('lab_test_requisition_form',(int)$muestra['id']);
  if($delete_id){
      $session->msg("s","La Muestra fue eliminada");
      redirect('Muestra.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('product.php');
  }
?>

