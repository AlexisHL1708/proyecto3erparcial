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

		<h2>Actualizar cliente</h2> <br>
		<label for="pkIdclien">Movimiento:</label>
		<input type="text" class="form-control" id="pkIdclien" name="pkIdclien" readonly="readonly" value="<?php echo $idclien; ?>">
		<br>
		<section class="form-group">
			<label for="clact">Tipo de movimiento:</label>
			<select name="clact" id="perfil">
				<option value="1" <?php if ($clact == 1) echo 'selected' ?>>Activo</option>
				<option value="2" <?php if ($clact == 2) echo 'selected' ?>>Suspendido</option>
			</select>
		</section>

		<section class="form-group">
			<label for="numcn">Numero de cuenta</label>
			<input type="text" class="form-control" id="numcn" name="numcn" readonly="readonly" value="<?php echo $numcn; ?>">
		</section>

		<section class="form-group">
			<label for="nomb">Nombre actualizado:</label>
			<input type="text" class="form-control" id="nomb" placeholder="Actualiza o reescribe el nombre del cliente" name="nomb" value="<?php echo $nomb; ?>">
		</section>

		<section class="form-group">
			<label for="suc">Selecciona la sucursal:</label>
			<select name="suc" id="sucursal">
				<option value="1" <?php if ($suc == 1) echo 'selected' ?>>Banco Norte</option>
				<option value="0" <?php if ($suc == 0) echo 'selected' ?>>Banco Sur</option>
			</select>
		</section>

		<!--<section class="form-group">
			<label for="foto">Fotografía:</label>
			<img src="recursos/<?php echo $foto; ?>" alt="foto" widht="50" height="50"> <br>
			<input type="file" class="form-control" id="foto" name="foto">
		</section>-->
		
		

		<input type="submit" name="btnAccionEmp" value="Actualizar">
	</form>
</body>

</html>