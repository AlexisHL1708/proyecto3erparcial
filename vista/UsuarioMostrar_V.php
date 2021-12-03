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

		<h2>Actualizar movimiento</h2> <br>
		<label for="pkIdmovimiento">Movimiento:</label>
		<input type="text" class="form-control" id="pkIdmovimiento" name="pkIdmovimiento" readonly="readonly" value="<?php echo $idmovimiento; ?>">
		<br>
		<section class="form-group">
			<label for="tipomov">Tipo de movimiento:</label>
			<select name="tipomov" id="perfil">
				<option value="1" <?php if ($tipomov == 1) echo 'selected' ?>>Depósito</option>
				<option value="2" <?php if ($tipomov == 2) echo 'selected' ?>>Retiro</option>
			</select>
		</section>

		<section class="form-group">
			<label for="monto">Nuevo monto:</label>
			<input type="text" class="form-control" id="monto" placeholder="Ingresa tu nuevo monto" name="monto" value="<?php echo $monto; ?>">
		</section>

		<section class="form-group">
			<label for="desti">Nuevo destinatario:</label>
			<input type="text" class="form-control" id="desti" placeholder="Ingresa tu nuevo destinatario" name="desti" value="<?php echo $desti; ?>">
		</section>

		<section class="form-group">
			<label for="remi">Nuevo monto:</label>
			<input type="text" class="form-control" id="remi" placeholder="Ingresa tu nuevo remitente" name="remi" value="<?php echo $remi; ?>">
		</section>

		<!--<section class="form-group">
			<label for="foto">Fotografía:</label>
			<img src="recursos/<?php echo $foto; ?>" alt="foto" widht="50" height="50"> <br>
			<input type="file" class="form-control" id="foto" name="foto">
		</section>-->
		
		

		<input type="submit" name="btnAccionUsr" value="Actualizar">
	</form>
</body>

</html>