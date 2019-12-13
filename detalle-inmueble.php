<!DOCTYPE html>
<html lang="es">
<?php 
require_once('include/conexion-detalle.php');
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
    <link rel="stylesheet" href="css/regular.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/carrousel.inmuebles.css">
    <!-- Datos para compartir por facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'https://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];?>" />
    <meta property="og:title" content="<?php echo $r['Tipo_Inmueble'].' en '.$r['Gestion'];?>" />
    <meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] .', '. $r['ciudad'].', '.$r['depto'];?> " />
    <meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto'];?>" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <!-- fin de datos para compartir por facebook -->
    <style>
        .inmuebles-description {
            padding: initial;
        }

        .inmueble-description li {
            position: relative;
            display: inline-block;
            margin-right: 15px;
            padding-right: 17px;
        }

        .inmuebles-description li:before {
            content: "\f111";
            font-family: "FontAwesome";
            position: absolute;
            bottom: 50%;
            font-size: 8px;
            color: #ddd;
            right: -3px;
            -webkit-transform: translateY(50%);
            -moz-transform: translateY(50%);
            -ms-transform: translateY(50%);
            -o-transform: translateY(50%);
            transform: translateY(50%);
        }

        /* propiedades similares */
        .leo-sqft {
            width: 56% !important;
        }

        .leo-bedrooms,
        .leo-bathrooms {
            width: 22% !important;
        }
    </style>
</head>

<body>

    <link itemprop="thumbnailUrl" href="<?php echo $r['fotos'][0]['foto'];?>"> 
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"> 
        <link itemprop="url" href="<?php echo $r['fotos'][0]['foto'];?>"> 
    </span>
    <!-- Menu -->
    <?php $page = 'inmueble';
    include 'include/menu.php'; ?>
    <script>
        var ocultar = function() {
            setTimeout(function() {
                loader.style.visibility = "hidden";
            }, 2500)
        }
        var loader = document.getElementById("wrap-preload");
        window.addEventListener("load", ocultar());
    </script>
    <!-- contenido -->
    <!--Carousel Wrapper-->
    <section class="bread">
        <div class="container-fluid">
            <div class="row col-md-10 offset-md-1">
                <ul class="breadcrumb">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="inmuebles.php">Inmueble</a></li>
                    <li>Detalle Inmueble</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="inmueble">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 offset-xl-1 col-sm-12 offset-sm-0">
                    <!--Carousel Wrapper-->
                    <div class="row ml-2">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-auto">
                                    <h2><?php echo $r['barrio'] .', '. $r['ciudad'].', '.$r['depto']?></h2>
                                </div>
                                <div class="col-auto ml-md-auto text-right">
                                    <!-- Validar si es arriendo venta o arrieno venta -->
                                    <?php if($r['Gestion'] == 'Arriendo/venta'){
                                        echo '<h3>$'.number_format($r['ValorCanon']).'/$'.number_format($r['ValorVenta']).'</h3>';
                                    }else if($r['Gestion']== 'Arriendo'){
                                        echo '<h3>$'.number_format($r['ValorCanon']).'</h3>';                                        
                                    }else{
                                        echo '<h3>$'.number_format($r['ValorVenta']).'</h3>';                                        
                                    } ?> 
                                </div>
                            </div>
                        </div>
                        <div class="col-12 borde ml-2">
                            <ul class="inmuebles-description">
                                <li class="mr-4">
                                    <i class="fas fa-sign mr-2"><?php echo $r['Gestion']?></i>
                                </li>
                                <li class="mr-4">
                                    <i class="fas fa-ruler-combined mr-2"></i>Area Construida: <?php echo $r['AreaConstruida'] ?>
                                </li>
                                <li class="mr-4">
                                    <i class="fas fa-ruler-vertical mr-2"></i>Area Total: <?php echo $r['AreaLote']?>
                                </li>
                                <li class="mr-4">
                                    <i class="fas fa-bed mr-2"></i>Alcobas:<?php echo $r['alcobas'] ?>
                                </li>
                                <li class="mr-4">
                                    <i class="fas fa-shower mr-2"></i>Baños: <?php echo $r['banos']?>
                                </li>
                                <li class="mr-4">
                                    <i class="fas fa-home mr-2"> </i><?php echo $r['Tipo_Inmueble']?>
                                </li>
                                <li class="mr-4">
                                    <i class="fas fa-user-tie mr-2"></i>Administración $ <?php echo $r['Administracion']?>
                                </li>
                            </ul>
                        </div>
                        <br>
                    </div>
                    <div class="col-12 ">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php
                                        echo '<div class="carousel-item active">
                                        <img src="' . $r['fotos'][0]['foto'] . '"  alt="...">
                                        </div>';
                                        for ($i = 1; $i < count($r['fotos']); $i++) {
                                            echo '<div class="carousel-item">
                                            <img src="' . $r['fotos'][$i]['foto'] . '"  alt="...">
                                            </div>';
                                        }
                                        ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                    <div class="col-12 redes-sociales">
                        <ul class="row align-items-center pr-0">
                            <li class="col-sm-12 col-xl-auto mr-auto d-flex justify-content-center"><a class="btn btn-danger" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=<?php echo $codigo ?>" target="_blank">Imprimir Ficha</a></li>
                            <li class="col-6 col-md-auto ml-auto m-top">Compartir por: </li>
                            <li class="col-2 col-md-auto m-top"><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.zitios.com.co%2Fdetalle-inmueble.php%3Fco%3D<?php echo $codigo; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                            <li class="col-2 col-md-auto m-top"><a href="<?php echo 'https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.zitios.com.co%2Fdetalle-inmueble.php%3Fco%3D' . $codigo . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li class="col-2 col-auto d-md-none m-top"><a href="<?php echo 'https://wa.me/?text=%20https://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-12 card inmueble">
                        <div class="row">
                            <?php if($r['video'] != "") {
                                echo '
                                <div class="col-8">
                                    <h3>Descripcion de la propiedad</h3>'.$r['descripcionlarga'].'</p>
                                </div>
                                <div class="col-4" id="video">
                                    <iframe style="max-width:100%" src="'.$r['video'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                ';
                            }else{
                                echo'
                                <div class="col-12">
                                    <h3>Descripcion de la propiedad</h3>'.$r['descripcionlarga'].'</p>
                                </div>
                                ';
                            }

                            ?>
                        </div>
                    </div>
                    <?php 
                        if (count($r['caracteristicasExternas']) != 0) {
                            echo '
                            <div class="col-12 card inmueble" id="caracteristicas_internas">
                                <h3>Caracteristicas internas</h3>
                                <ul id=lista_caracteristicas_internas>
                            ';
                            for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                echo '<li>' . $caracteristicas . '</li>';   
                            }
                            echo  '</ul>
                                </div>';
                        }
                        if(count($r['caracteristicasExternas'])> 0){
                            echo '
                            <div class="col-12 card inmueble" >
                                <h3>Caracteristicas externas</h3>
                                <ul>
                            ';
                            for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                echo '<li>' . $caracteristicas . '</li>';
                            }
                            echo'
                                </ul>
                            </div>
                            ';
                        }
                        if(count($r['caracteristicasAlrededores'])> 0){
                            echo '
                            <div class="col-12 card inmueble">
                                <h3>Caracteristicas de los Alrededores</h3>
                                <ul>
                            ';
                            for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                echo '<li>' . $caracteristicas . '</li>';
                            }
                            echo'
                                </ul>
                            </div>
                            ';
                        }
                    ?>
                    <div class="col-12 card inmueble">
                        <h3>Mapa</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.062893808791!2d-75.60048448573413!3d6.255444927958089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429735eb0ca81%3A0xc3fb85816e777789!2swww.zitios.com.co!5e0!3m2!1ses!2sco!4v1556560667118!5m2!1ses!2sco" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-12">
                        <div class="row justify-content-center mb-4 efecto">
                            <div class="col-12" id="agente">
                                <h3>Datos del Asesor</h3>
                                <!-- //datos de asesor -->

                            </div>
                            <div class="col-12">
                                <form action="contact_me2.php" class="mt-4" id="formulario" method="post">
                                    <?php 
                                    echo '
                                        <h4>'.$r['asesor'][0]['ntercero'].'</h4>
                                        <span class="mt-4 mb-4">Agente inmobiliario</span><br>
                                        <a href="+57'.$r['asesor'][0]['celular'].'" class="mb-4"><i class="fas fa-phone mr-3"></i> '.$r['asesor'][0]['celular'].'</a><br>
                                        <a href="wa.me/57'.$r['asesor'][0]['celular'].'" class="mb-4"><i class="fab fa-whatsapp mr-3"></i> '.$r['asesor'][0]['celular'].'</a>
                                    ';
                                    ?>
                                    <h3>Contacta con el Asesor</h3>
                                    <input type="text" class="form-control mb-4" name ="name" placeholder="Nombre y Apellido">
                                    <input type="hidden" name="id_inmueble" value="<?php echo $codigo?>">
                                    <input type="hidden" name="asesor" value='<?php echo $r['asesor'][0]['celular']?>'>
                                    <input type="number" class="form-control mb-4"  name="telefono" placeholder="Telefono">
                                    <input type="mail" class="form-control mb-4" name="email" placeholder="Correo">
                                    <textarea class="form-control mb-4" rows="3" name="message" placeholder="Mensaje"></textarea>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                        <label class="form-check-label" for="exampleCheck1">Confirmo que he leído, entendido
                                            y acepto la <a href="politica.pdf" download="Politica_de_datos"> politica de tratamiento de datos personales </a></label>
                                        <div class="invalid-feedback">
                                            por favor acepte Terminos y Condiciones
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-sm btn-block">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Carousel Wrapper-->
                <div class=" col-10 offset-1 col-md-8 offset-md-2 col-xl-3 offset-xl-0" id="p_similares">
                    <h3 class="text-center">Propiedades similares</h3>
                    <hr>
                </div>


            </div>
        </div>
    </section>
    <section class="pt-4 mt-4 pb-4 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-8">
                    <strong class="pl-4">
                    Conoce Nuestra Política de Datos
                    </strong> 
                </div>
                <div class="col-2">
                    <a href="politica.pdf" download="Politica_de_datos" class="btn btn-danger btn-sm btn-block">Descargar</a>
                </div>
            </div>
        </div>
    </section>
    </div>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <span> ©Copyright 2019 <a href="http://">Dexcon Digital.</a> Todos los derechos reservados.</span>
                </div>
            </div>
        </div>
    </footer>



    <!-- fin contenido -->
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Archivos de API -->
    <?php
    echo '<script>var idCiudad = ' . $r['IdCiudad'] . '</script>';
    echo '<script>var idInmueble = ' . $r['IdTpInm'] . '</script>';
    ?>
    <script src="conexion_api/token_api.js"></script>
    <script src="conexion_api/validadores.js"></script>
    <script src="conexion_api/modelo_inmueble.js"></script>
    <script src="conexion_api/similares.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Boton subir -->
    <?php include 'include/botonSubir.php'; ?>
</body>

</html>