<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);
?>

<?php
$lab_req_form_id = (int)$_GET['id']; // Obtén el ID de "lab_test_requisition_form" de alguna manera, por ejemplo, desde un parámetro GET.

// Obtén el "sample_id" y "sample_number" del registro en "lab_test_requisition_form" con el ID proporcionado.
$lab_req_form = find_by_id('lab_test_requisition_form', $lab_req_form_id);
$sample_id = $lab_req_form['Sample_ID'];
$sample_number = $lab_req_form['Sample_Number'];

// Realizar una consulta SQL para eliminar registros en la tabla "lista_de_pendientes" que coincidan con "sample_id" y "sample_number".
$sql = "DELETE FROM lista_de_pendiente WHERE sample_id = '$sample_id' AND sample_number = '$sample_number'";
$result = $db->query($sql); // Suponiendo que $db es la instancia de la conexión a la base de datos.

if ($result) {
    $session->msg("s", "Los datos en 'lista de pendientes' fueron eliminados correctamente");
} else {
    $session->msg("d", "Eliminación de datos en 'lista de pendientes' falló");
}

// Luego, puedes eliminar el registro en "lab_test_requisition_form" si es necesario.
$delete_id = delete_by_id('lab_test_requisition_form', $lab_req_form_id);

if ($delete_id) {
    $session->msg("s", "El registro en 'lab_test_requisition_form' fue eliminado");
} else {
    $session->msg("d", "Eliminación del registro en 'lab_test_requisition_form' falló");
}

redirect('regMuestra.php');
?>
