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

		<h2>Actualizar usuario</h2> <br>
		<label for="pkIdUsuario">Id:</label>
		<input type="text" class="form-control" id="pkIdUsuario" name="pkIdUsuario" readonly="readonly" value="<?php echo $idUsuario; ?>">
		<section class="form-group">
			<label for="nickname">Usuario:</label>
			<input type="text" class="form-control" id="nickname" placeholder="Ingresa tu usuario" name="nickname" value="<?php echo $nickname; ?>">
		</section>

		<section class="form-group">
			<label for="sucursal">Sucursal:</label>
			<select name="sucursal" id="sucursal">
				<option value="1" <?php if ($sucursal == 1) echo 'selected' ?>>Banco norte</option>
				<option value="2" <?php if ($sucursal == 2) echo 'selected' ?>>Banco sur</option>
			</select>
		</section>

		<section class="form-group">
			<label for="pswd">Contraseña:</label>
			<input type="text" class="form-control" id="pswd" placeholder="Ingresa tu contraseña" name="pswd" value="<?php echo $pswd; ?>">
		</section>

		<section class="form-group">
			<label for="foto">Fotografía:</label>
			<img src="recursos/<?php echo $foto; ?>" alt="foto" widht="50" height="50"> <br>
			<input type="file" class="form-control" id="foto" name="foto">
		</section>

		<section class="form-group">
			<label for="perfil">Perfil:</label>
			<select name="perfil" id="perfil">
				<option value="1" <?php if ($perfil == 1) echo 'selected' ?>>Admin</option>
				<option value="2" <?php if ($perfil == 2) echo 'selected' ?>>Cliente</option>
				<option value="3" <?php if ($perfil == 3) echo 'selected' ?>>Empleado</option>
			</select>
		</section>

		<section class="form-group">
			<label for="activo">Activo:</label>
			<select name="activo" id="perfil">
				<option value="1" <?php if ($activo == 1) echo 'selected' ?>>Activo</option>
				<option value="0" <?php if ($activo == 0) echo 'selected' ?>>Inactivo</option>
			</select>
		</section>

		<input type="submit" name="btnAccionBan" value="Actualizar">
	</form>
</body>

</html>