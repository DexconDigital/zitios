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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
</head>
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
                    <li><a href="clientes.php">Clientes</a></li>
                    <li>Propietarios</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="iframe">
        <div class="container-fluid p-0">
            <iframe src="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=940&tipo=1" frameborder="0"></iframe>
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
                <span> ©Copyright 2019 <a href="https://dexcondigital.com">Dexcon Digital.</a> Todos los derechos reservados.</span>
            </div>
        </div>
    </footer>

    <!-- fin contenido -->
    <link rel="stylesheet" href="css/animaciones.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Boton subir -->
    <?php include 'include/botonSubir.php'; ?>
</body>

</html>