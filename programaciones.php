



<head>
    <link rel="stylesheet" type="text/css" href="css/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
<?php


$con = mysqli_connect("localhost", "root", "", "index_test_lab");

if (mysqli_connect_errno()) {
    echo "Error en la conexión a la base de datos: " . mysqli_connect_error();
    exit();
}

$SqlEventos = "SELECT * FROM eventoscalendar";
$resulEventos = mysqli_query($con, $SqlEventos);
?>

<div class="mt-5"></div>
<div class="container">
    <div class="row">
        <div class="col msjs">
            <?php include 'msjs.php'; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <h3 class="text-center" id="title">Programacion Activicades del Laboratorio</h3>
        </div>
    </div>
</div>

<div id="calendar"></div>
<?php include 'modalNuevoEvento.php'; ?>
<?php include 'modalUpdateEvento.php'; ?>
<!-- Modal Nuevo Evento -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

</div>

<!-- Modal Actualizar Evento -->
<div class="modal fade" id="modalUpdateEvento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

</div>

<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/moment.min.js"></script>
<script type="text/javascript" src="js/fullcalendar.min.js"></script>
<script src='locales/es.js'></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#calendar").fullCalendar({
            header: {
                left: "prev,next today",
                center: "title",
                right: "month,agendaWeek,agendaDay"
            },
            locale: 'es',
            defaultView: "month",
            navLinks: true,
            eventLimit: true,
            selectable: true,
            selectHelper: false,
            // Nuevo Evento
            select: function (start, end) {
                $("#exampleModal").modal();
                $("input[name=fecha_inicio]").val(start.format('DD-MM-YYYY'));
                var valorFechaFin = end.format("DD-MM-YYYY");
                var F_final = moment(valorFechaFin, "DD-MM-YYYY").subtract(1, 'days').format('DD-MM-YYYY'); // Le resto 1 día
                $('input[name=fecha_fin]').val(F_final);
            },
            events: [
                <?php while ($dataEvento = mysqli_fetch_array($resulEventos)) { ?>
                    {
                        _id: '<?php echo $dataEvento['id']; ?>',
                        title: '<?php echo $dataEvento['tecnico']; ?>',
                        title1: '<?php echo $dataEvento['actividad']; ?>',
                        start: '<?php echo $dataEvento['fecha_inicio']; ?>',
                        end: '<?php echo $dataEvento['fecha_fin']; ?>',
                        color: '<?php echo $dataEvento['color_evento']; ?>'
                    },
                <?php } ?>
            ],
        });

        // Oculta mensajes de Notificación
        setTimeout(function () {
            $(".alert").slideUp(300);
        }, 3000);
    });
</script>
</body>


<?php
include_once('layouts/footer.php');
?>
