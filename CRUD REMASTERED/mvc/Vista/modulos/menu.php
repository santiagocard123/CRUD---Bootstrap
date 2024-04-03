<!-- <nav>
	<ul>

		<li><a href="index.php?ruta=ingreso">Ingresar</a></li>
		<li><a href="index.php?ruta=registrar">Registrar</a></li>
		<li><a href="index.php?ruta=empleados">Empleados</a></li>
		<li><a href="index.php?ruta=salir">Salir</a></li>

	</ul>
</nav> -->
<header class="header">
	<div class="logo">
		<img src="img/It.ico" alt="Logo de la marca">
	</div>
	<nav>
		<ul class="nav-links">
			<li><a href="index.php?ruta=ingreso">Ingresar</a></li>
			<li><a href="index.php?ruta=registrar">Registrar</a></li>
			<li><a href="index.php?ruta=empleados">Empleados</a></li>
		</ul>
	</nav>

	<a class="btn" href="index.php?ruta=salir"><button>Salir</button></a>



	<a onclick="openNav()"  class="menu" href="#"><button>Menu</button></a>
	
	<div class="overlay" id="mobile-menu">
		<a onclick="closeNav()" href="" class="close">&times;</a>
		<div class="overlay-content">
			<a href="#">Services</a>
			<a href="#">Project</a>
			<a href="#">About</a>
			<a href="#">Contact</a>
		</div>
	</div>

</header>

<script type="text/javascript" src="index.js"></script>