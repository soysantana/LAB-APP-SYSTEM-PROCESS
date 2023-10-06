
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $sampleId = $_POST["Sample_ID"];
    $sampleNumber = $_POST["Sample_Number"];
    $tarename = $_POST["tarename"];
    $tarewet = $_POST["tarewet"];
    $taredry= $_POST["taredry"];
    $water = $_POST["water"];
    $weigthtare = $_POST["weigthtare"];
    $drysoil = $_POST["drysoil"];
    $mc_corrected = $_POST["mccorrected"];

    $rtv1 = mysqli_connect('localhost', 'root', '', 'index_test_lab');
    if (!$rtv1) {
        die("Error de conexión a la base de datos: " . mysqli_connect_error());
    }
   
    $query1 = "UPDATE moisture_content SET Tare_Name = '$tarename', Tare_Plus_Wet_Soil = '$tarewet', Tare_Plus_Dry_Soil = '$taredry' , Water ='$water', Weigth_Tare = '$weigthtare', Dry_Soil = '$drysoil', Mc= '$mc_corrected' WHERE Sample_ID = '$sampleId' AND Sample_Number = '$sampleNumber'";
    
    $result1 = mysqli_query($rtv1, $query1);
    if ($result1) {
     // La inserción fue exitosa
     echo "El ensayo ha sido actualizado.";
    } else {
     // Error en la inserción
     echo "Error al actualizar el ensayo: " . mysqli_error($rtv1);
     }

   mysqli_close($rtv1);
  

  
    // Después de la actualización, puedes redirigir al usuario a la página de lista de ensayos u otra página
    header("Location: revisionensayoMCoven.php");
    exit();
  }
  ?>