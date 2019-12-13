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
    <style>
    body {
        background-color: #fff;
    }

    .contact-form {
        position: relative;
    }

    .formulario {
        margin: 10% 0;

    }

    .formulario .container {
        background-color: #fff;
        font-weight: 600px;
        padding: 10%
    }

    #contacto {
        margin: 100px 0;
        background-color: #fff;
    }

    .table th,
    .table td {
        padding: 0;
    }

    .formulario label {
        color: #000;
        font-weight: 700;
    }

    .btn {
        font-weight: 700;
    }

    .ApColumn {
        height: 50vh;
    }

    #ubicacion a {
        color: #ea393e;
    }

    .color-rojo {
        color: #ea393e;
    }

    @media (min-width: 992px) {
        .formulario {
            position: absolute;
            z-index: 1;
            width: 30%;
            top: 5%;
            left: 10%;
            margin: 0 0;
        }

        .ApColumn {
            height: 800px;
        }

        @media (min-width: 1200px) {
            .ApColumn {
                height: 700px;
            }
        }
    }
    </style>
</head>

<body>

    <!-- Menu -->
    <?php $page ='contacto';include 'include/menu.php'; ?>
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
                    <li>Contacto</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="ubicacion">
        <div class="contact-form">
            <div class="row ApRow  " style="">
                <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12  ApColumn ">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.062893808791!2d-75.60048448573416!3d6.255444927958096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429735eb0ca81%3A0xc3fb85816e777789!2swww.zitios.com.co!5e0!3m2!1ses!2sco!4v1556285525068!5m2!1ses!2sco"
                        width="100%" height="100%;" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="formulario">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <h3 class="color-rojo">Envia un Mensaje</h3>
                            <form class="needs-validation" novalidate action="contact_me.php" method="post">
                                <div class="form-group">
                                    <label for="">Nombre y Apellido</label>
                                    <input type="text" class="form-control" name="name" placeholder="Ingrese Nombre"
                                        required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese un Nombre y Apellido
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Correo electrónico</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Correo Electronico" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese un Correo
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Teléfono</label>
                                    <input type="number" name="telefono" class="form-control" id=""
                                        placeholder="Telefono" required>
                                    <div class="invalid-feedback">
                                        Ingrese un Telefono Valido
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mensaje</label>
                                    <textarea class="form-control" name="message" rows="3" required></textarea>
                                    <div class="invalid-feedback">
                                        Por favor ingrese su Mensaje
                                    </div>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1">Confirmo que he leído, entendido
                                        y acepto la <a href="politica.pdf" download="Politica_de_datos"> policita de
                                            tratamiento de datos personales </a></label>
                                    <div class="invalid-feedback">
                                        por favor acepte Terminos y Condiciones
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-danger">Contáctame</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="sevice_title">
                        <h2 class="title_block text-center">Datos de Contacto</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center mt-4">
                    <div class="text-center">
                        <i class="fas fa-map-marker-alt" style="font-size:30px;"></i>
                        <h4 class="text-center">Dirección</h4>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row" class="pr-2"></i></th>
                                    <td>Carrera 80 # 45GG – 46</td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>(segundo piso)</td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>Barrio: Velódromo</td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>Medellin, Antioquia</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center mt-4">
                    <div class="text-center">
                        <i class="fas fa-phone" style="font-size:30px;"></i>
                        <h4 class="">Teléfonos</h4>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row" class="pr-2 text-left">PBX:</th>
                                    <td><a href="tel:0343222329">322 23 29</a></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-left">Celular comercial:</th>
                                    <td><a href="tel:+573105063745">310 506 3745</a></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-left">Celular administrativo:</th>
                                    <td><a href="tel:+573044639800">304 463 9800</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center mt-4">
                    <div class="text-center">
                        <i class="fas fa-clock" style="font-size:30px;"></i>
                        <h4 class="text-center">Horario de atención</h4>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th class="pr-2 text-center" rowspan="2">Lunes a Viernes:</th>
                                    <td>8:00 am – 12:00m</td>
                                </tr>
                                <tr>
                                    <td>1:00pm – 6:00pm </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">Sabados:</th>
                                    <td>8:00am – 12:00m</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-12  text-center mt-4">
                    <div class="text-center">
                        <i class="fas fa-envelope" style="font-size:30px;"></i>
                        <h4 class="text-center">Correo Electrónico</h4>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th class="pr-2 text-center"><a href="mailto:info@zitios.com">info@zitios.com.co</a> </th>
                            </tbody>
                        </table>
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
    <!-- funcion para validar el formulario -->
    <!-- Boton subir -->
    <?php include 'include/botonSubir.php'; ?>
    <script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>

</html>