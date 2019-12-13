    <style>
      #wrap-preload{
        position: fixed;
        z-index: 10;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        opacity: 1;
        visibility: visible;
        transition: opacity .5s ease, visibility .5s ease;
        z-index: 998;
      }
      
      #wrap-preload.close{
        opacity: 0;
        visibility: hidden;
      }
      .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 2;
      }
      #wrap-preload > img.gif{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        z-index: 1032;
      }
        .navbar {
            min-height: 80px;
            transition: all .6s ease;
        }

        .bg-light {
            background-color: #fff !important;
        }

        .navbar-brand {
            padding: 0 15px;
            height: 70px;
            transition-duration: 0.6s;
        }

        .navbar-toggle {
            /* (80px - button height 34px) / 2 = 23px */
            margin-top: 23px;
            padding: 9px 10px !important;
        }

        .navbar-expand-xl .navbar-nav .nav-link:hover {
            color: red;
        }

        .navbar-expand-xl .navbar-nav .nav-link.active {
            color: #ea393e;
            background: rgba(255, 255, 255, 0.10);
        }

        .navbar img {
            max-width: 100%;
            max-height: 100%;
        }

        .bg-inverse {
            background-color: #000;
        }

        #menu .fa-bars {
            color: #000;
        }

        #menu .pago {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #menu .fa-facebook,
        #menu .fa-instagram,
        #menu .fa-youtube {
            font-size: 30px;
            margin-right: 15px;
            color: #fff;
        }

        .bg-light .navbar-nav>li>a {
            color: #000;
        }

        .bg-light .navbar-nav>li>a>.fa-facebook,
        .bg-light .navbar-nav>li>a>.fa-instagram,
        .bg-light .navbar-nav>li>a>.fa-youtube {
            color: #000 !important;
        }

        .redes-sociales img {
            height: 30px;
            margin-left: 10px;
            transition: all .6s ease;
        }

        .redes-sociales img:hover {
            transform: scale(1.2);
        }

        nav a {
            font-family: 'coolvetica_rg';
        }

        @media (max-width: 768px) {
            #menu .iconos {
                padding-top: 10px;
            }
            .redes-sociales{
                margin-top:12px; 
            }
        }
    </style>
    <!-- Navbar -->
    <div id="wrap-preload">
        <img src="images/preloader.gif" alt="gif" class="gif" id="gif">
    </div>
    <nav class="navbar navbar-expand-xl navbar bg bg-light fixed-top" id="menu">
        <div class="container-fluid">
            <div class="row col-md-10 offset-md-1 p-0 d-flex align-items-center">
                <a class="navbar-brand p-0 ml-4" href="index.php">
                    <img class="logo-menu" src="images/logo.png" alt="Logo de Zitios Inmobiliaria">
                </a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'inicio') {
                                                    echo 'active';
                                                } ?>" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'nosotros') {
                                                    echo 'active';
                                                } ?>" href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'inmueble') {
                                                    echo 'active';
                                                } ?>" href="inmuebles.php?">Inmuebles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'cliente') {
                                                    echo 'active';
                                                } ?>" href="clientes.php">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'contacto') {
                                                    echo 'active';
                                                } ?>" href="contacto.php">Contáctenos</a>
                        </li>
                        <li class="nav-item pago">
                            <a href="https://gateway2.tucompra.com.co/sites/zitios" target="_blank" class="p-0"><img src="images/logopse.png"
                                    width="60px;"></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto redes-sociales">
                        <li class="nav-item mx-auto">
                            <a href="https://www.facebook.com/zitios/" target="_blank" rel="redes sociales"> <img
                                    src="images/facebook.png" alt="Imagen de Facebook"></a>
                            <a href="https://www.instagram.com/zitios_inmobiliaria_medellin/"
                                target="_blank" rel="redes sociales"><img src="images/instagram.png"
                                    alt="Imagen de Instagram"></a>
                            <a href="https://www.youtube.com/channel/UCO8wxWwkZf5Yzi8c_LgSw7g" target="_blank"
                                rel="redes sociales"><img src="images/youtube.png" alt="Imagen de Youtube"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- fin de menu -->