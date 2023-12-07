<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Búsqueda</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <form id="searchForm">
        <label for="sample_id">Sample ID:</label>
        <input type="text" id="sample_id2" name="sample_id">
        <br>
        <label for="sample_number">Sample Number:</label>
        <input type="text" id="sample_number" name="sample_number">
        <br>
        <label for="humedad_natural">Humedad Natural:</label>
        <input type="text" id="humedad_natural" name="humedad_natural" readonly>
        <br>
        <button type="button" onclick="search()">Buscar</button>
    </form>

    <script>
        function search() {
            var sampleId = $('#sample_id').val();
            var sampleNumber = $('#sample_number').val();

            $.ajax({
                type: 'POST',
                url: 'Ajax-Mc.php',
                data: { sample_id: sampleId, sample_number: sampleNumber },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#humedad_natural').val(response.mc_value);
                    } else {
                        alert(response.message);
                    }
                },
                error: function() {
                    alert('Error en la solicitud AJAX.');
                }
            });
        }
    </script>
</body>
</html>
