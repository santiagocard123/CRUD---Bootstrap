<?php

session_start();

if (!$_SESSION["Ingreso"]) {
    header("location:index.php?ruta=ingreso");
    exit();
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>CRUD</title>
	<script src="https://kit.fontawesome.com/9dfb2c7d9e.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

<body>


	<div class="wdcn container bg-white mt-5 rounded shadow">
		<main class="regis">
			<br>
			<div class="col rounded perfil">
				<img class="user" src="img/icon-user-register.png" alt="">
			</div>

			<form method="post" action="">

				<div class="mb-4">
					<input class="form-control" type="text" placeholder="Nombre" name="nombreR" required>
				</div>

				<div class="mb-4">
					<input class="form-control" type="text" placeholder="Apellido" name="apellidoR" required>
				</div>

				<div class="mb-4">
					<input class="form-control" type="email" placeholder="Email" name="emailR" required>
				</div>

				<div class="mb-4">
					<input class="form-control" type="text" placeholder="Puesto" name="puestoR" required>
				</div>

				<div class="mb-4">
					<input class="form-control" type="text" placeholder="Salario" name="salarioR" required>
				</div>

				<div class="d-grid">
					<input class="btn btn-primary" type="submit" value="Registrar">
				</div>

				<?php

					$registrar = new EmpleadosC();
					$registrar->RegistrarEmpleadosC();

					?>


			</form>

			</section>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
		<script type="text/javascript" src="index.js"></script>
</body>

</html>