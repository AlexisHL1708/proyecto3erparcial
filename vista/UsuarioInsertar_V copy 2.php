<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		body {
			width: 80%;
			margin: 80px auto;
			background: #fff;
			border: 10px solid #ddd;
			padding: 20px 5%;
		}
	</style>
</head>

<body>
	<section id="insertuno">
		<form action="index.php" method="post" enctype="multipart/form-data">
			<?php include 'zonas/menuAdmin.php' ?>

			<h2>Agregar cliente</h2> <br>

			<section class="form-group">
				<label for="clact">Actividad del cliente:</label>
				<select name="clact" id="clact">
					<option value="1">Activo</option>
					<option value="2">Suspendido</option>
				</select>
			</section>

			<section class="form-group">
				<label for="numcn">Numero de cuenta:</label>
				<input type="text" class="form-control" id="numcn" placeholder="Ingresa el numero de cuenta del cliente" name="numcn">
			</section>

			<section class="form-group">
				<label for="nomb">Nombre del cliente:</label>
				<input type="text" class="form-control" id="nomb" placeholder="Ingresa el nombre completo del cliente" name="nomb">
			</section>

			<section class="form-group">
				<label for="suc">Sucursal:</label>
				<select name="suc" id="sucursal">
					<option value="1">Banco Norte</option>
					<option value="0">Banco Sur</option>
				</select>
			</section>

			<input type="submit" name="btnAccionEmp" value="Guardar" @click="Guardar()">

		</form>
	</section>
</body>

</html>