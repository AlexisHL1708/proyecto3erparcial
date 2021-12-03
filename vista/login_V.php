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
    <form action="index.php" method="GET">
        
        <br>
        <h2>Iniciar sesión</h2>
        <section class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo" required>
        </section>

        <section class="form-group">
            <label for="contra">Contraseña:</label>
            <input type="password" class="form-control" id="contra" name="contra" placeholder="Ingresa tu contraseña" required>
        </section>
        <input type="submit" name="btnAccionBan" value="Iniciar sesión">
        <h5><?php if (isset($msj)) echo $msj 
            ?></h5>
    </form>
</body>

</html>