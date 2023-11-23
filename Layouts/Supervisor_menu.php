     <nav class="sidebar card py-2 mb-4">
      <ul class="nav flex-column" id="nav_accordion">
        <li class="nav-item">
          
          <a class="nav-link glyphicon glyphicon-home" href="home.php" style="font-size: 17px;" > Panel Control </a>

          <a class="nav-link  glyphicon glyphicon-user submenu-toggle" href="" style="font-size: 17px;"> Accesos</a>
          <ul class="submenu collapse">
            <li><a class="nav-link" href="group.php" style="font-size: 17px;"> Administrar grupos</a></li>
            </li>
            <li><a class="nav-link" href="users.php" style="font-size: 17px;">Administrar usuarios</a></li>
          </ul>
        </li>
          
        </li>
        <li class="nav-item">
          <a class="nav-link glyphicon glyphicon-edit" href="regMuestra.php" style="font-size: 17px;"> Registro de muestras</a>
        </li>
        <li class="nav-item has-submenu">
          <a class="nav-link  glyphicon glyphicon-eye-open submenu-toggle" href="" style="font-size: 17px;"> Seguimiento de Muestras</a>
          <ul class="submenu collapse">
            <li><a class="nav-link" href="prepEnsayo.php" style="font-size: 16px;">Ensayos en Preparacion</a></li>
            <li><a class="nav-link" href="realizaEnsayo.php" style="font-size: 16px;">Ensayos en Realizacion</a></li>
            <li><a class="nav-link" href="entregaEnsayo.php" style="font-size: 16px;">Ensayos en Entrega</a></li>
            <li><a class="nav-link" href="repiteEnsayo.php" style="font-size: 16px;">Ensayos en Repeticion</a></li>
            <li><a class="nav-link" href="ensayorevision.php" style="font-size: 16px;">Ensayos en Revision</a></li>
          </ul>
        </li>
        <li class="nav-item has-submenu">
          <a class="nav-link  glyphicon glyphicon-briefcase submenu-toggle" href="" style="font-size: 17px;"> Registro de Ensayos</a>
          <ul class="submenu collapse">
            <li><a class="nav-link" href="Menu-Contruccion.php" style="font-size: 16px;">Construccion</a></li>
            <li><a class="nav-link" href="Menu-Investigacion.php"style="font-size: 16px;">Investigacion</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link glyphicon glyphicon-calendar" href="planificacion.php" style="font-size: 17px;"> Planificacion Semanal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link glyphicon glyphicon-registration-mark" href="menuEnsayosRevision.php" style="font-size: 17px;"> Ensayos en Revision</a>
        </li>
        <li class="nav-item">
          <a class="nav-link glyphicon glyphicon-question-sign" href="ensayospendientes.php" style="font-size: 17px;"> Ensayos Pendientes</a>
        </li>
        <li class="nav-item has-submenu">
          <a class="nav-link  glyphicon glyphicon-shopping-cart submenu-toggle" href="inventario.php" style="font-size: 17px;">Inventarios</a>
          <ul class="submenu collapse">
              <li><a class="nav-link" href="inventarioequipos.php" style="font-size: 16px;">Inventario de Equipos</a></li>
              <li class="nav-item has-submenu">
                  <a class="nav-link glyphicon glyphicon-shopping-cart submenu-toggle" href="" style="font-size: 17px;">Samples Inventory</a>
                  <ul class="submenu collapse">
                      <li><a class="nav-link" href="inalteraded.php" style="font-size: 16px;">Undisturbed Sample</a></li>
                      <li><a class="nav-link" href="alteradedSample.php" style="font-size: 16px;">Disturbed Sample</a></li>
                  </ul>
              </li>
          </ul>
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