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
	<form action="index.php" method="post" enctype="multipart/form-data">
		<?php include 'zonas/menuAdmin.php' ?>

		<h2>Agregar nuevo usuario</h2> <br>
		<section class="form-group">
			<label for="nickname">Cuenta:</label>
			<input type="text" class="form-control" id="nickname" placeholder="Ingresa tu nombre" name="nickname">
		</section>

		<section class="form-group">
	      <label for="correo">Correo-E:</label>
	      <input type="email" class="form-control" id="correo" placeholder="Ingresa tu Correo-E" name="correo">
	    </section>

		<section class="form-group">
			<label for="sucursal">Sucursal:</label>
			<section class="form-group">
				<select name="sucursal" id="sucursal">
					<option value="1">Banco norte</option>
					<option value="2">Banco sur</option>
				</select>
			</section>
		</section>

		<section class="form-group">
			<label for="pswd">Contraseña:</label>
			<input type="password" class="form-control" id="pswd" placeholder="Ingresa tu contraseña" name="pswd">
		</section>

		<section class="form-group">
			<label for="foto">Fotografía:</label>
			<input type="file" class="form-control" id="foto" name="foto">
		</section>

		<section class="form-group">
			<label for="perfil">Perfil:</label>
			<select name="perfil" id="perfil">
				<option value="1">Admin</option>
				<option value="2">Cliente</option>
				<option value="3">Empleado</option>
			</select>
		</section>

		<section class="form-group">
			<label for="activo">Activo:</label>
			<select name="activo" id="perfil">
				<option value="1">Activo</option>
				<option value="0">Inactivo</option>
			</select>
		</section>

		<input type="submit" name="btnAccionBan" value="Guardar">
	</form>
</body>

</html>