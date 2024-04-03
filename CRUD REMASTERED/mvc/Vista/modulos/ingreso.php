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
	<section>
		<div class="container w-75 bg-primary mt-5 rounded shadow">
			<div class="row align-items-stretch">
				<div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>
				<div class="col bg-white p-5 rounded">
					<div class="text-end">
						<h2 class="fw-bold text-center pt-5 py=5" style="margin-bottom: 2rem">
							Bienvenido
						</h2>

						<!-- Login -->

						<form method="post">
							<div class="mb-4">
								<input type="text" placeholder="Usuario" class="form-control" name="usuarioI"
									required />
							</div>

							<div class="mb-4">
								<input type="password" placeholder="Contraseña" class="form-control" name="claveI"
									required />
							</div>

							<div class="mb-4 form-check">
								<input type="checkbox" name="connected" class="form-check-input" />
								<label for="connected" class="form-check-label">Mantenerme conectado</label>
							</div>

							<div class="d-grid">
								<button type="submit" class="btn btn-primary" value="Ingresar" name="btningresar">
									Iniciar Sesión
								</button>
							</div>

							<div class="my-3">
								<span>¿No tienes acceso? <a href="#">Regístrate</a></span>
								<br />
								<span><a href="#">Olvide mi contraseña</a></span>
							</div>
							<?php
							$ingreso = new AdminC();
$ingreso->IngresoC();

?>
						</form>

					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
		<script type="text/javascript" src="index.js"></script>
</body>

</html>
