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
		<?php include 'zonas/menuCliente.php' ?>

		<h2>Registrar movimiento</h2> <br>

		<section class="form-group">
			<label for="tipomov">Tipo de movimiento:</label>
			<select name="tipomov" id="tipomov">
				<option value="1">Depósito</option>
				<option value="2">Retiro</option>
			</select>
		</section>

		<section class="form-group">
			<label for="monto">Monto:</label>
			<input type="text" class="form-control" id="monto" placeholder="Ingresa el monto $" name="monto">
		</section>

		<section class="form-group">
			<label for="desti">Destinatario:</label>
			<input type="text" class="form-control" id="desti" placeholder="Ingresa el destinatario" name="desti">
		</section>

		<section class="form-group">
			<label for="remi">Remitente:</label>
			<input type="text" class="form-control" id="remi" placeholder="Ingresa el remitente" name="remi">
		</section>

		

		

		<!--<section class="form-group">
			<label for="activo">Activo:</label>
			<select name="activo" id="perfil">
				<option value="1">Activo</option>
				<option value="0">Inactivo</option>
			</select>
		</section>-->

		<input type="submit" name="btnAccionUsr" value="Guardar">
	</form>
</body>

</html>