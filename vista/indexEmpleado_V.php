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
    body{
        width: 80%;
        margin: 80px auto;
        background: #fff;
        border: 10px solid #ddd;
        padding: 20px 5%;
    }
  </style>
</head>
<body>
    <form action="index.php" method="POST">
    <?php require_once('zonas/menuEmpleado.php'); ?>
    <br>
    <h2>Bienvenidos zona empleado</h2>
    <h5><?php if(isset($msj)) echo$msj ?></h5>
    </form>
</body>
</html>