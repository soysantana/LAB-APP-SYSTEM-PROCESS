<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
	
			<a class="navbar-brand" href="#">Gestion de Laboratorio</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
			<li class="active">
     <a href="home.php">
       Panel Control <span style="font-size: 12px; margin-right: 20px;" class="pull-left hidden-md showopacity glyphicon glyphicon-home"></span>
      </a>
      </li>
	<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Acceso <span class="caret"></span><span style="font-size:16px; margin-right: 20px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-user submenu-toggle"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="group.php">Administrar grupo</a></li>
						<li><a href="users.php">Administrar usuarios</a></li>
					</ul>
				</li>

				<li ><a href="regMuestra.php">Registro de muestras<span style="font-size:16px; margin-right: 5px;" class="pull-left hidden-md showopacity glyphicon glyphicon-edit"></span></a></li>

				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Control de Muestras<span class="caret" style="font-size:10px;"></span><span style="font-size:14px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-eye-open submenu-toggle"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="prepEnsayo.php">Ensayos en Preparacion</a></li>
						<li><a href="realizaEnsayo.php">Ensayos en Realizacion</a></li>
						<li><a href="entregaEnsayo.php">Ensayos en Entrega</a></li>
						<li><a href="repiteEnsayo.php">Ensayos en Repeticion</a></li>
						<li><a href="ensayorevision.php">Ensayos en Revision</a></li>
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Registro de Ensayos<span class="caret"></span><span style="font-size:16px;" class="pull-left hidden-md showopacity glyphicon glyphicon-eye-open submenu-toggle"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="add_mcoven.php">Contenido de humedad</a></li>
						<li><a href="Grain_Size.php">Granulometria por Tamizado</a></li>
						<li><a href="Al.php">Limite de Atterberg</a></li>
						<li class="divider"></li>
						<li><a href="Standardproctor.php">Standard Proctor</a></li>
						<li><a href="PLT.php">PLT</a></li>
						<li><a href="UCS.php">UCS</a></li>
						<li class="divider"></li>
						<li><a href="BTS.php">BTS</a></li>
						<li><a  href="pinhole.php">Pinhole Test</a></li>


				
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="main">
<!-- Content Here -->
</div>
<style>
@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

body {
    background: lightgray;
}

.navbar-fixed-top {
    top: 0;
    border-width: 0 0 1px;
}

.navbar-default .navbar-nav #user-profile {
    height: 50px;
    padding-top: 15px;
    padding-left: 58px;
}

.navbar-default .navbar-nav #user-profile img {
    height: 45px;
    width: 45px;
    position: absolute;
    top: 2px;
    left: 8px;
    padding: 1px;
}

#wrapper {
    padding-top: 50px;
    padding-left: 0;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}

@media (min-width: 992px) {
    #wrapper {
        padding-left: 225px;
    }
}

@media (min-width: 992px) {
    #wrapper #sidebar-wrapper {
        width: 225px;
    }
}

#sidebar-wrapper {
    border-right: 1px solid #e7e7e7;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 225px;
    width: 0;
    height: 100%;
    margin-left: -225px;
    overflow-y: auto;
    background: #f8f8f8;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}

#sidebar-wrapper .sidebar-nav {
    position: absolute;
    top: 0;
    width: 225px;
    font-size: 14px;
    margin: 0;
    padding: 0;
    list-style: none;
}

#sidebar-wrapper .sidebar-nav li {
    text-indent: 0;
    line-height: 45px;
}

#sidebar-wrapper .sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #428bca;
}

.sidebar-nav li:first-child a {
    background: #92bce0 !important;
    color: #fff !important;
}

#sidebar-wrapper .sidebar-nav li a .sidebar-icon {
    width: 45px;
    height: 45px;
    font-size: 14px;
    padding: 0 2px;
    display: inline-block;
    text-indent: 7px;
    margin-right: 10px;
    color: #fff;
    float: left;
}

#sidebar-wrapper .sidebar-nav li a .caret {
  position: absolute;
  right: 23px;
  top: auto;
  margin-top: 20px;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse {
    list-style: none;
    -moz-padding-start: 0;
    -webkit-padding-start: 0;
    -khtml-padding-start: 0;
    -o-padding-start: 0;
    padding-start: 0;
    padding: 0;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse li i {
    margin-right: 10px;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse li {
    text-indent: 15px;
}

@media (max-width: 992px) {
    #wrapper #sidebar-wrapper {
        width: 45px;
    }
    #wrapper #sidebar-wrapper #sidebar #sidemenu li ul {
        position: fixed;
        left: 45px;
        margin-top: -45px;
        z-index: 1000;
        width: 200px;
        height: 0;
    }
}

.sidebar-nav li:first-child a {
    background: #92bce0 !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(2) a {
    background: #6aa3d5 !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(3) a {
    background: #428bca !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(4) a {
    background: #3071a9 !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(5) a {
    background: #245682 !important;
    color: #fff !important;
}
</style>