<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
?>
<?php
  $lab_req_form = find_by_id('lab_test_requisition_form',(int)$_GET['id']);
  if(!$lab_req_form){
    $session->msg("d","ID vacío");
    redirect('regMuestra.php');
  }
?>
<?php
  $delete_id = delete_by_id('lab_test_requisition_form',(int)$lab_req_form['id']);
  if($delete_id){
      $session->msg("s","La Muestra fue eliminada");
      redirect('regMuestra.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('regMuestra.php');
  }
?>

