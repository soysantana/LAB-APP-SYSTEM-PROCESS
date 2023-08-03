<!DOCTYPE html>
<html>
<head>
    <title>Moisture Content Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    require_once('includes/load.php');
    
    // Paso 1: Conexión a la base de datos
    $db = mysqli_connect('localhost', 'root', '', 'index_test_lab');
    if (!$db) {
        die("Error de conexión a la base de datos: " . mysqli_connect_error());
    }

    // Paso 2: Obtener los datos de la tabla moisture_content
    $query = "SELECT Sample_ID, Sample_Number FROM moisture_content";
    $result = mysqli_query($db, $query);
    if (!$result) {
        die("Error al consultar la base de datos: " . mysqli_error($db));
    }
    ?>

    <table>
        <thead>
            <tr>
                <th>Sample ID</th>
                <th>Sample Number</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['Sample_ID']; ?></td>
                    <td>
                        <!-- Paso 3: Enlace para visualizar la información en PDF -->
                        <a href="view_sample.php?sample_id=<?php echo $row['Sample_ID']; ?>">
                            <?php echo $row['Sample_Number']; ?>
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <?php
        // Paso 4: Cerrar la conexión a la base de datos
        mysqli_close($db);
    ?>
</body>
</html>
