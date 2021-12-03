<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <!--header-->
    <form action="index.php" method="GET">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">BancoChido</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active">
                                <input type="submit" name="btnAccionBan" value="Inicia sesión" class="btn">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </form>
    <br><br>
    <section>
        <h1 class="text-center"> Somos vanguardia y seguridad</h1>
    </section>
    <br><br>

    <!--imagen carrusel-->
    <section>
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="true" data-bs-interval="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1601597111158-2fceff292cdc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-50 container" alt="atm">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-50 container" alt="banco">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1571840615771-acc2e9f42641?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1113&q=80" class="d-block w-50 container" alt="gris">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <br><br>
    <section>
        <h1 class="text-center"> Conoce a tu mejor opción de banco</h1>
    </section>
    <br><br>
    <!--tarjetas-->
    <br><br><br>
    <section class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1532033375034-a29004ea9769?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Asociate</h5>
                        <p class="card-text">Manejamos la mejor oferta para nuestros clientes, la anualidad más baja y la tasa de interés es totalmente la diferencia a lado de nuestra competencia.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1515432085503-cabf2fbcd690?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Más seguro que nunca</h5>
                        <p class="card-text">Todas nuestras sucursales y cajeros automaticos cuentan con la mejor vigilancia las 24 horas, dandote la confianza para que realices movimientos sin miedos.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1519598944665-ff9c7f8abafe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apoyo por linea telefónica</h5>
                        <p class="card-text">Nuestros asesores siempre están disponibles para resolver tus dudas, nunca dudes en marcarnos en cualquier momento, por que estamos siempre a tu servicio.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1522648485144-849409408aee?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Desde casa</h5>
                        <p class="card-text">Con nuestro sitio en linea, inicia tu sesión y realiza los movimientos que desees sin salir de casa para apoyar más a tu seguridad, todas nuestras bases de datos son seguras para tu comodidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section class="text-center">
        <h2>¡Incorporate ya!</h2>
    </section>
    <br><br><br><br><br><br>

</body>

</html>