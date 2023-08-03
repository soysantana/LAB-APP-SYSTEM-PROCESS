<?php
$archivo = fopen("libs/forms/mc.csv", "r");
echo "<table>";
while (($datos = fgetcsv($archivo, 1000, ",")) !== FALSE) {
    echo "<tr>";
    foreach ($datos as $dato) {
        echo "<td>" . htmlspecialchars($dato) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
fclose($archivo);
?>