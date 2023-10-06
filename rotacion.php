<?php
// Define tus parámetros
$tecnicos = array('Rafael', 'Darielvi', 'Frandy', 'Rony');
$diasSemana = array('Miércoles', 'Jueves', 'Viernes', 'Sábado');
$horasLimites = array('16:00', '18:00');

// Divide los técnicos en dos grupos
$grupo1 = array_slice($tecnicos, 0, 2);
$grupo2 = array_slice($tecnicos, 2);

// Crea una estructura de datos para el horario
$horario = array();

// Algoritmo de asignación de técnicos
foreach ($diasSemana as $dia) {
    foreach ($horasLimites as $hora) {
        if (($dia == 'Domingo' || $dia == 'Miércoles') && $hora == '18:00') {
            $grupo = $grupo1;
        } else {
            $grupo = $grupo2;
        }

        // Asigna técnicos al horario (puedes personalizar esta lógica)
        shuffle($grupo); // Mezcla el grupo de técnicos
        $tecnico1 = array_pop($grupo);
        $tecnico2 = array_pop($grupo);

        $horario[$dia][$hora] = array($tecnico1, $tecnico2);
    }
}

// Muestra el horario
echo '<table>';
echo '<tr><th>Día</th><th>Hora</th><th>Técnico 1</th><th>Técnico 2</th></tr>';
foreach ($horario as $dia => $horas) {
    foreach ($horas as $hora => $tecnicos) {
        echo "<tr><td>$dia</td><td>$hora</td><td>{$tecnicos[0]}</td><td>{$tecnicos[1]}</td></tr>";
    }
}
echo '</table>';
?>
