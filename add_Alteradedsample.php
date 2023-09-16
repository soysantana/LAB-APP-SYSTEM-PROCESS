<?php
// Recibe los datos del formulario enviado por AJAX
$id = $_POST['id'];
$sampleID = $_POST['sampleID'];
$sampleNumber = $_POST['sampleNumber'];
$sampleType = $_POST['sampleType'];
$depthFrom = $_POST['depthFrom'];
$depthTo = $_POST['depthTo'];
$sampleWeight = $_POST['sampleWeight'];
$sampleDate = $_POST['sampleDate'];
$status = $_POST['status'];
$comment = $_POST['comment'];

// Realiza la conexión a la base de datos (reemplaza con tus propios datos de conexión)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "index_test_lab";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Prepara la consulta SQL para insertar los datos en la tabla "Alteraded_Samples"
$sql = "INSERT INTO Alteraded_Samples (Sample_ID, Sample_Number, Sample_Type, Depth_From, Depth_To, Sample_Weight, Sample_Date, Store_In, Comment)
        VALUES ('$sampleID', '$sampleNumber', '$sampleType', '$depthFrom', '$depthTo', '$sampleWeight', '$sampleDate', '$status', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados exitosamente";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>
