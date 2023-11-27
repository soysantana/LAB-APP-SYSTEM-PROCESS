

<nav class="sidebar card py-2 mb-4">
  <ul class="nav flex-column" id="nav_accordion">
    <li class="nav-item">
      
      <a class="nav-link glyphicon glyphicon-home" href="home.php" style="font-size: 17px;" > Panel Control </a>

      
    </li>
    <li class="nav-item">
      <a class="nav-link glyphicon glyphicon-edit" href="regMuestra.php" style="font-size: 17px;"> Registro de muestras</a>
    </li>
    <li class="nav-item has-submenu">
      <a class="nav-link  glyphicon glyphicon-eye-open submenu-toggle" href="" style="font-size: 17px;"> Seguimiento de Muestras</a>
      <ul class="submenu collapse">
        <li><a class="nav-link" href="prepEnsayo.php" style="font-size: 16px;">Ensayos en Preparacion</a></li>
        </li>
        <li><a class="nav-link" href="realizaEnsayo.php" style="font-size: 16px;">Ensayos en Realizacion</a></li>
        <li><a class="nav-link" href="entregaEnsayo.php" style="font-size: 16px;">Ensayos en Entrega</a></li>
        <li><a class="nav-link" href="repiteEnsayo.php" style="font-size: 16px;">Ensayos en Repeticion</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link glyphicon glyphicon-calendar" href="planificacion.php" style="font-size: 17px;"> Programaciones</a>
    </li>
    <li class="nav-item">
          <a class="nav-link glyphicon glyphicon-question-sign" href="ensayospendientes.php" style="font-size: 17px;"> Ensayos Pendientes</a>
        </li>
    
<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.submenu-toggle').forEach(function(element) {
      element.addEventListener('click', function(e) {
        e.preventDefault();
        let submenu = element.nextElementSibling;
        submenu.classList.toggle('show');
      });
    });
  });
</script>