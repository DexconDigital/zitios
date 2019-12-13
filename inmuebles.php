<!DOCTYPE html>
<html lang="es">
<?php
$url = $_SERVER["REQUEST_URI"];

if (isset($_GET["pag"])) {
    $pagina = $_GET["pag"];
} else {
    $pagina = 1;
}
$ciudad = 0;
$barrio = 0;
$gestion = 0;
$tipo_inmueble = 0;
$alcobas = 0;
$banos = 0;
$min = 0;
$max = 0;
$aremax = 0;
$aremin = 0;

if (
    isset($_GET["ci"]) || isset($_GET["bar"]) || isset($_GET["ge"]) || isset($_GET["in"])
    || isset($_GET["al"]) || isset($_GET["ban"]) || isset($_GET["min"]) || isset($_GET["max"])
    || isset($_GET["aremin"]) || isset($_GET["aremax"])
) {
    $ciudad = $_GET["ci"];
    $barrio = $_GET["bar"];
    $gestion = $_GET["ge"];
    $tipo_inmueble = $_GET["in"];
    $alcobas = $_GET["al"];
    $banos = $_GET["ban"];
    $min = $_GET["min"];
    $max = $_GET["max"];
    $aremin = $_GET["aremin"];
    $aremax = $_GET["aremax"];
}
?>

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
    <link rel="stylesheet" href="css/doubleSlide.css">
    <link rel="stylesheet" href="css/regular.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    .overlay .none {
        display: none;
    }

    @media (min-width: 992px) {
        .overlay .none {
            display: block;
        }
    }
</style>

<body>
    <!-- Menu -->
    <?php $page = 'inmueble';
    include 'include/menu.php'; ?>
    <!-- preloader -->
    <script>
        var ocultar = function() {
            setTimeout(function() {
                loader.style.visibility = "hidden";
            }, 2500)
        }
        var loader = document.getElementById("wrap-preload");
        window.addEventListener("load", ocultar());
    </script>
    <!-- fin de preloader -->
    <!-- contenido -->
    <section class="bread">
        <div class="container-fluid">
            <div class="row col-md-10 offset-md-1">
                <ul class="breadcrumb">
                    <li><a href="index.php">Inicio</a></li>
                    <li>Inmuebles</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="clientes">
        <div class="container-fluid">
            <div class="row col-10 offset-1">

            </div>
        </div>
    </section>
    <!-- fin de menu -->
    <section id="hero" class="hero-fondo">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagesop/slide2inmueble.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imagesop/slide1inmuebles.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <div class="overlay">
                <div class="container">
                    <div class="row align-items-star">
                        <div class="col-md-12 text-center none">
                            <h1 style="margin-top:200px; -webkit-text-stroke: 0.5px #787878;">¡Tu Lugar Ideal!</h1>
                        </div>
                        <div class="col-12 fondo">
                            <?php include 'include/buscador.php' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- inmuebles -->
    <section id="destacadas" class="inmuebles">
        <div class="container-fluid">

            <div class="row col-sm-12 col-lg-10 offset-lg-1 mx-auto" id="inm">
                <div class="col-12">
                    <div class="sevice_title">
                        <h2 class="title_block text-center">Lista de inmuebles</h2>
                    </div>
                </div>
                <!-- propiedad -->
            </div>
            <div class="col-12 d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link previus" onclick="paginador('ant')">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <div class="lista-paginas">

                        </div>
                        <li class="page-item">
                            <a class="page-link next" onclick="paginador('sig')" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- fin propiedad -->
        </div>
        </div>
    </section>
    <!-- fin inmueble -->
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
    <!-- scritps -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owlCarouselStar.js"></script>
    <script src="js/doubleslide.js"></script>
    <script src="js/all.js"></script>
    <!-- scripts API -->
    <?php
    echo '<script>var url = "' . $url . '"</script>';
    echo '<script>var ciudad = ' . $ciudad . '</script>';
    echo '<script>var barrio = ' . $barrio . '</script>';
    echo '<script>var gestion = ' . $gestion . '</script>';
    echo '<script>var tipo_inmueble = ' . $tipo_inmueble . '</script>';
    echo '<script>var alcobas = ' . $alcobas . '</script>';
    echo '<script>var banos = ' . $banos . '</script>';
    echo '<script>var min = ' . $min . '</script>';
    echo '<script>var max = ' . $max . '</script>';
    echo '<script>var aremin = ' . $aremin . '</script>';
    echo '<script>var aremax = ' . $aremax . '</script>';
    ?>
    <?php echo "<script> var pagina ='" . $pagina . "';</script>"; ?>
    <script src="conexion_api/buscador.js"></script>
    <script src="conexion_api/token_api.js"></script>
    <script src="conexion_api/validadores.js"></script>
    <script src="conexion_api/modelo_inmueble.js"></script>
    <script src="conexion_api/listarInmuebles.js"></script>

    <!-- Boton subir -->
    <?php include 'include/botonSubir.php'; ?>
</body>

</html>