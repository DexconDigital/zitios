<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zitios Inmobiliaria</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style> 
    #clientes .container-fluid{
        margin: 100px 0;
    }
    .btn{
        font-weight:700;
    }
</style>
<body>    
    <!-- Menu -->
    <?php $page ='cliente';include 'include/menu.php'; ?>
    <script>
        var loader = document.getElementById("wrap-preload");
        window.addEventListener("load",function() {
                loader.style.visibility = "hidden";
            });
    </script>
    <!-- contenido -->
    <section class="bread">
        <div class="container-fluid">
            <div class="row col-md-10 offset-md-1">
                <ul class="breadcrumb">
                    <li><a href="#">Inicio</a></li>
                    <li>Clientes</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="clientes">
        <div class="container-fluid">
            <div class="row col-sm-12 col-md-6 offset-md-3">
            <div class="col-12">
                    <div class="card mb-3"">
                        <div class=" row no-gutters">
                        <div class="col-md-4">
                            <a href="http://">
                            <img src="images/arrendatarios.png" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Arrendatarios</h5>
                                <p class="card-text">Arrendatario descarga aquí tu Cupón de Pago y Factura.</p>
                                    <a class="btn btn-danger" href="arrendatarios.php" role="button">Entrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="">
                                <img src="images/propietarios.png" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Propietarios</h5>
                                <p class="card-text">Propietario descarga aquí tu Estado de Cuenta, Factura y Certificado de Ingresos y Retenciones.</p>
                                <a class="btn btn-danger" href="propietarios.php" role="button">Entrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="http://">
                            <img src="images/PAGO-PSE.png" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Pagos PSE</h5>
                                <p class="card-text">Más fácil, más seguro, realice sus pagos con un solo clic a través de PSE.</p>
                                    <a class="btn btn-danger" href="https://gateway2.tucompra.com.co/sites/zitios" target="_blank" role="button">Entrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class=" pt-4 pb-4 bg-light">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-8 text-center text-md-left">
                    <strong class="pl-4">
                        Conoce Nuestra Política de Datos
                    </strong> 
                </div>
                <div class="col-10 col-md-2">
                    <a href="politica.pdf" download="Politica_de_datos" class="btn btn-danger btn-sm btn-block">Descargar</a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <span> ©Copyright 2019 <a href="http://">Dexcon Digital.</a> Todos los derechos reservados.</span>
            </div>
        </div>
    </footer>

    <!-- fin contenido -->
    <link rel="stylesheet" href="css/animaciones.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owlCarouselStar.js"></script>
    <script src="js/all.js"></script>
    <!-- Boton subir -->
    <?php include 'include/botonSubir.php'; ?>
</body>

</html>