<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zitios Inmobiliaria</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/doubleSlide.css">
    <!--  Estilos de carga hero -->
    <!-- Site Name, Title, and Description to be displayed -->
    <meta property="og:site_name" content="Zitios Inmobiliaria">
    <meta property="og:title" content="Zitios Inmobiliaria">
    <meta property="og:description" content="Empresa Inmobiliaria en Colombia">

    <!-- Image to display -->
    <!-- Replace   «example.com/image01.jpg» with your own -->
    <meta property="og:image" itemprop="image" content="https://zitios.com.co/images/logo.jpg">

    <!-- No need to change anything here -->
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/jpeg">

    <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
    <meta property="og:image:width" content="150">
    <meta property="og:image:height" content="150">

    <!-- Website to visit when clicked in fb or WhatsApp-->
    <meta property="og:url" content="https://zitios.com.co">
    <style>
        #hero .carousel-inner {
            width: 100%;
            overflow: hidden;
        }

        #hero .carousel-inner img {
            max-height: 100vh;
            object-fit: cover;
        }

        #carousel {
            position: relative;
        }

        .overlay .none {
            display: none;
        }

        @media (min-width: 576px) {}



        @media (min-width: 992px) {
            .overlay .none {
                display: block;
            }
        }

        @media (min-width: 1200px) {}
    </style>
</head>

<body>
    <link itemprop="thumbnailUrl" href="https://zitios.com.co/images/logo.jpg"> 
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"> 
        <link itemprop="url" href="https://zitios.com.co/images/logo.jpg"> 
    </span>
    <!-- Menu -->
    <?php $page = 'inicio';
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
    <!-- Fin menu -->
    <!-- Comienzo del hero -->
    <section id="hero" style="margin-top:100px;">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagesop/slide1index.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imagesop/slide2index.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imagesop/slide3index.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <div class="overlay">
                <div class="container">
                    <div class="row align-items-center">
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
    <!-- fin del hero -->
    <!-- comienzo de Destacados -->
    <section id="destacadas" class="inmuebles bg-light">
        <div class="container-fluid">
            <div class="sevice_title">
                <h1 class="title_block text-center">Propiedades Destacadas</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10" id="columna-destacadas">
                    <div class="owl-carousel owl-theme" id="propiedades_destacadas">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin de destacados -->

    <!-- fin de section de informacin -->
    <section id="agentes">
        <div class="container-fluid">
            <div class="sevice_title">
                <h1 class="title_block text-center">Nuestros Agentes</h1>
            </div>
            <div class="row justify-content-center">
                <!-- Primera columna de Agentes -->
                <div class="col-sm-12 col-md-5">
                    <!-- Bloque de agente -->
                    <div class="row justify-content-center mb-4 efecto">
                        <div class="col-4">
                            <img src="imagesop/heriberto_betancur.png" alt="" class="img-rounded">
                        </div>
                        <div class="col-8">
                            <h3>Heriberto Betancur</h3>
                            <span class="mt-4">Agente inmobiliario</span><br>
                            <a href="tel:+573013867371" class=""><i class="fas fa-phone"></i> Llámame:
                                3013867371</a><br>
                            <a href="https://wa.me/573013867371" class=""><i class="fab fa-whatsapp"></i> Escríbeme:
                                3013867371</a>
                        </div>
                    </div>
                    <!-- Bloque de agente -->
                    <div class="row justify-content-center mb-4 efecto">
                        <div class="col-4">
                            <img src="imagesop/sara_berrio.png" alt="" class="img-rounded">
                        </div>
                        <div class="col-8">
                            <h3>Sara Berrio</h3>
                            <span class="mt-4">Agente inmobiliario</span><br>
                            <a href="tel:+573106481735" class=""><i class="fas fa-phone"></i> Llámame:
                                3106481735</a><br>
                            <a href="https://wa.me/573106481735" class=""><i class="fab fa-whatsapp"></i> Escríbeme:
                                3106481735</a>
                        </div>
                    </div>
                    <!-- Bloque de agente -->
                    <div class="row justify-content-center mb-4 efecto">
                        <div class="col-4">
                            <img src="imagesop/victor_gil.png" alt="" class="img-rounded">
                        </div>
                        <div class="col-8">
                            <h3>Victor Gil</h3>
                            <span class="mt-4">Agente inmobiliario</span><br>
                            <a href="tel:+573113388525" class=""><i class="fas fa-phone"></i> Llámame:
                                3113388525</a><br>
                            <a href="https://wa.me/573113388525" class=""><i class="fab fa-whatsapp"></i> Escríbeme:
                                3113388525</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5">
                    <!-- Bloque de agente -->
                    <div class="row justify-content-center mb-4 efecto">
                        <div class="col-4">
                            <img src="imagesop/andres_agudelo.png" alt="" class="img-rounded">
                        </div>
                        <div class="col-8">
                            <h3>Carlos Andres</h3>
                            <span class="mt-4">Agente inmobiliario</span><br>
                            <a href="tel:+573014355992" class=""><i class="fas fa-phone"></i> Llámame:
                                3014355992</a><br>
                            <a href="https://wa.me/573014355992" class=""><i class="fab fa-whatsapp"></i> Escríbeme:
                                3014355992</a>
                        </div>
                    </div>
                    <!-- Bloque de agente -->
                    <div class="row justify-content-center mb-4 efecto">
                        <div class="col-4">
                            <img src="imagesop/yessica_cardona.png" alt="" class="img-rounded">
                        </div>
                        <div class="col-8">
                            <h3>Yessica Cardona</h3>
                            <span class="mt-4">Agente inmobiliario</span><br>
                            <a href="tel:+573105063745" class=""><i class="fas fa-phone"></i> Llámame: 3105063745
                            </a><br>
                            <a href="https://wa.me/573105063745" class=""><i class="fab fa-whatsapp"></i> Escríbeme:
                                3105063745 </a>
                        </div>
                    </div>
                    <!-- Bloque de agente -->
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- fin de seccion agentes -->
    <!-- Seccion de Aliados -->
    <section id="aliados">
        <div class="container-fluid">
            <div class="sevice_title">
                <h1 class="title_block text-center">Nuestros Aliados</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="owl-carousel owl-theme" id="alianzas">
                        <div class="item">
                            <img src="imagesop/camara_inmobiliaria.png" alt="">
                        </div>
                        <div class="item">
                            <img src="imagesop/Logo_Lonja.png">
                        </div>
                        <div class="item">
                            <img src="imagesop/libertador.png" alt="">
                        </div>
                        <div class="item">
                            <img src="imagesop/SIMI.png" alt="">
                        </div>
                        <div class="item">
                            <img src="imagesop/fenalco_antioquia.png" alt="">
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
                <span> ©Copyright 2019 <a href="http://dexcondigital.com">Dexcon Digital.</a> Todos los derechos
                    reservados.</span>
            </div>
        </div>
    </footer>
    <!-- inicio exportacion librerias -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animaciones.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/doubleslide.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owlCarouselStar.js"></script>
    <script src="js/all.js"></script>
    <!-- conexion API -->
    <script src="conexion_api/token_api.js"></script>
    <script src="conexion_api/validadores.js"></script>
    <script src="conexion_api/buscador.js"></script>
    <script src="conexion_api/modelo_inmueble.js"></script>
    <script src="conexion_api/inmuebles_destacados.js"></script>
    <!-- <script src="js/sidebarNavigation.js"></script> -->

    <!-- Boton subir -->
    <?php include 'include/botonSubir.php'; ?>
</body>

</html>