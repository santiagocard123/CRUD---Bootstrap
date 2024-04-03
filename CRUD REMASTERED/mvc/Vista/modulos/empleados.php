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
		<table id="t1">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>Puesto</th>
					<th>Salario</th>
					<th></th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				
				<?php 
        $mostrar = new EmpleadosC();
        $mostrar->MostrarEmpleadosC();
        ?>
			</tbody>
		</table>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>

		
</body>
<script type="text/javascript" src="index.js"></script>
</html>

<?php

$eliminar = new EmpleadosC();
$eliminar->BorrarEmpleadoC();

?>