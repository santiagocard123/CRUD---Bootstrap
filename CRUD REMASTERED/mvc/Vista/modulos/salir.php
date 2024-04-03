<?php

session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<title>CRUD</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />
</head>

<body>

	<section class="text-center">
		<br />
		<h1>Has cerrado sesión Exitosamente</h1>

		<a href="index.php?ruta=ingreso">
			<button class="btn btn-primary">Volver a Ingresar</button>
		</a>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/index.js"></script>
</body>

</html>