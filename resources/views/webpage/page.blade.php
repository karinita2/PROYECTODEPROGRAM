<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Empresarial</title>
    <meta name="description"
          content="Accomodation is developed for hotels, motels, guest house and accommodation planning like Vacation Rentals, Homes, Apartments & Rooms and much more.">
    <meta name="author" content="Themeinjection.com">

    <!-- Bootstrap -->
    <link href="assets/webpage/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap 3 Date Picker -->
    <link href="assets/webpage/bower_components/bootstrap-3-datepicker/dist/css/bootstrap-datepicker.min.css" rel='stylesheet' type='text/css'>

    <!-- Google Open Sans Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link href="assets/webpage/bower_components/font-awesome/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

    <!-- Animate Css -->
    <link href="assets/webpage/bower_components/animate.css/animate.min.css" rel='stylesheet' type='text/css'>

    <!-- Simple Line Icons -->
    <link href="assets/webpage/bower_components/simple-line-icons/css/simple-line-icons.css" rel='stylesheet' type='text/css'>


    <!-- Theme Style -->
    <link rel="stylesheet" href="assets/webpage/css/styles.css">
    <!-- Available main styles: styles-blue.css, styles-ochre.css -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/webpage/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/webpage/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/webpage/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/webpage/img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/webpage/img/ico/favicon.png">

</head>
<body>
<div id="page-top"></div>

<!--Navigation Top start-->
<section class="top-navbar container navbar-fixed-top">
    <nav class="navbar navbar-default" id="navigation-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--Brand / Logo start-->
                <a class="navbar-brand scroll-to" href="#page-top">
                    <img src="assets/webpage/img/logo.png" class="img-responsive" alt="Accommodation Landing Page"/>
                </a>
                <!--Brand / Logo end-->
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- Nav-Links start -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="scroll-to" href="#page-top">Inicio</a></li>
                    <li class="active"><a class="scroll-to" href="#sc-rooms">Espacios</a></li>
                    <li><a class="scroll-to" href="#sc-features">Servicios</a></li>
                    <li><a class="scroll-to" href="#sc-rates">Paquetes</a></li>
                    <li><a class="scroll-to" href="#sc-about">Sobre nosotros</a></li>
                    <li><a class="scroll-to" href="{{ url('/login') }}">Login</a></li>
                    <li><a class="scroll-to" href="{{ url('/register') }}">Registrate</a></li>
                </ul>
                <!-- Nav-Links end -->
            </div>
        </div>
    </nav>
</section>
<!--Navigation Top end-->

<!--Teaser Slider start-->
<section class="teaser-slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="false" data-interval="5000">
        <div class="carousel-inner" role="listbox">
            <!--Slider Items start-->
            <div class="item active">
                <img src="assets/webpage/img/frame1/imagen1.png" alt="The Sea Villa">

                <div class="carousel-caption">Hotel</div>
            </div>
            <div class="item">
                <img src="assets/webpage/img/frame1/imagen2.png" alt="The Sea Villa">

                <div class="carousel-caption"Habitaciones simples></div>
            </div>
            <div class="item">
                <img src="assets/webpage/img/frame1/imagen3.png" alt="The Sea Villa">

                <div class="carousel-caption">Salon de eventos</div>
            </div>
            <div class="item">
                <img src="assets/webpage/img/frame1/imagen4.png" alt="The Sea Villa">

                <div class="carousel-caption">Habitaciones matrimoniales</div>
            </div>
            <!--Slider Items end-->
        </div>
        <!-- Controls start -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
        <!-- Controls end -->
    </div>
</section>
<div class="teaser-slider-ph"></div>
<!--Teaser Slider end-->

<!--Start content before Slider-->
<div class="content-after-slider">

    <!--Call to Action start-->
    <section class="call-to-action container" id="sc-call-to-action">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="call-to-action-box text-center">
                    <div class="call-to-action-triangle"></div>
                    <button class="btn btn-color1 call-to-action-button show-inquiry-modal">
                        <i class="icon-calendar icons"></i> Reservas/Disponibilidad
                    </button>
                    <a class="call-to-action-phone" href="tel:+13174562564">71123456 - 2480523</a>
                </div>
            </div>
        </div>
    </section>
    <!--Call to Action end-->

    <br><br><br>
    <!--Room Tabs start-->
    <section class="room-tabs" id="sc-rooms">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Los espacios que ofrecemos...</h2>
                </div>
                <div class="col-md-12">
                    <!--Room Tabs Nav start -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#object1" aria-controls="object1" role="tab" data-toggle="tab">Sala de Conferencias</a></li>
                        <li role="presentation"><a href="#object2" aria-controls="object2" role="tab" data-toggle="tab">Salón de Eventos</a></li>
                        <li role="presentation"><a href="#object3" aria-controls="object3" role="tab" data-toggle="tab">Sala de Reuniones</a></li>
                    </ul>
                    <!--Room Tabs Nav end -->

                    <!-- Tabs start -->
                    <div class="tab-content">
                        <!--Room Tab 1 start-->
                        <div role="tabpanel" class="tab-pane fade in active" id="object1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="room-tabs-gallery">
                                        <div class="room-tabs-gallery-thumbnails">
                                            <a class="room-tabs-gallery-thumb" href="#object1">
                                                <img class="img-responsive" src="assets/webpage/img/salaconferencia1.png" alt="Gallery Thumbnail" title="The Image Title1"/>
                                            </a>
                                        </div>
                                        <div class="room-tabs-gallery-image">
                                            <a class="room-tabs-gallery-preview-container" href="#">
                                                <img class="img-responsive room-tabs-gallery-preview" src="assets/webpage/img/salaconferencia1.png"
                                                     alt="Image Preview" title="The Image Title"/>
                                            </a>

                                            <div class="room-tabs-gallery-caption">
                                                Precio 24 horas: <strong>Bs.- 000</strong>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 room-tabs-description">
                                    <h3>SALA DE CONFERENCIAS</h3>

                                    <p>La sala de conferencias es ideal para realizar charlas, exposiciones que sean parte de un evento, esta equipada con todo lo necesario para dar charlas hasta unas 80 personas.</p>

                                    <p>Cuenta con dos pantallas grandes para exposiciones, micrófonos inalámbricos, 120 sillas para invitados y disertantes.</p>

                                    <p>A continuación les presentamos un listado de todo el equipo en la sala de conferencias:</p>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <ul class="list-group room-tabs-checklist left">
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> 120 sillas</li>
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> 2 Pantallas</li>
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> 4 Micrófonos</li>
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> Amplificación</li>
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> Asistencia técnica</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Room Tab 1 end-->

                        <!--Room Tab 2 start-->
                        <div role="tabpanel" class="tab-pane fade" id="object2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="room-tabs-gallery">
                                        <div class="room-tabs-gallery-thumbnails">
                                            <a class="room-tabs-gallery-thumb" href="#object1">
                                                <img class="img-responsive" src="assets/webpage/img/salaevento1.png" alt="Gallery Thumbnail" title="The Image Title1"/>
                                            </a>
                                        </div>
                                        <div class="room-tabs-gallery-image">
                                            <a class="room-tabs-gallery-preview-container" href="#">
                                                <img class="img-responsive room-tabs-gallery-preview" src="assets/webpage/img/salaevento1.png"
                                                     alt="Image Preview" title="The Image Title"/>
                                            </a>

                                            <div class="room-tabs-gallery-caption">
                                                Precio 24 horas: <strong>Bs.- 000</strong>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 room-tabs-description">
                                    <h3>SALÓN DE EVENTOS</h3>

                                    <p>Nuestro salón de eventos esta equipado de extremo a extremo, es ideal para fiestas, quinceaños hasta bodas.</p>

                                    <p>Contamos con una amplificación de primer nivel, tenemos nuestro propio DJ y también contamos con un espacio para más de 250 personas.</p>

                                    <p>A continuación les presentamos un listado de todo el equipo en el salón de eventos:</p>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <ul class="list-group room-tabs-checklist left">
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> 300 sillas</li>
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> 40 mesas</li>
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> 4 Micrófonos</li>
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> Amplificación</li>
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> Asistencia técnica</li>
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> Juego de Luces</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <ul class="list-group room-tabs-checklist left">

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Room Tab 2 end-->

                        <!--Room Tab 3 start-->
                        <div role="tabpanel" class="tab-pane fade" id="object3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="room-tabs-gallery">
                                        <div class="room-tabs-gallery-thumbnails">
                                            <a class="room-tabs-gallery-thumb" href="#object1">
                                                <img class="img-responsive" src="assets/webpage/img/salareunion1.png" alt="Gallery Thumbnail" title="The Image Title1"/>
                                            </a>
                                        </div>
                                        <div class="room-tabs-gallery-image">
                                            <a class="room-tabs-gallery-preview-container" href="#">
                                                <img class="img-responsive room-tabs-gallery-preview" src="assets/webpage/img/salareunion1.png"
                                                     alt="Image Preview" title="The Image Title"/>
                                            </a>

                                            <div class="room-tabs-gallery-caption">
                                                Precio 24 horas: <strong>Bs.- 000</strong>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 room-tabs-description">
                                    <h3>SALA DE REUNIONES</h3>

                                    <p>Nuestra sala de reuniones es ideal para un grupo empresarial, contamos con una excelente conexión a internet, tenemos material de oficina para que pueda trabajar de manera cómoda.</p>

                                    <p>La pizarra y el datashow son practicamente nuevos, tenemos espacio par 12 personas, aparte se les brindará asistencia técnica.</p>

                                    <p>A continuación les presentamos un listado de todo el equipo en la sala de reuniones:</p>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <ul class="list-group room-tabs-checklist left">
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> 1 Mesa Ejecutiva</li>
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> 12 Sillas</li>
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> 1 DataShow</li>
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> 1 Pizarra</li>
                                                <li class="list-group-item"><i class="fa fa-check-square-o"></i> Asistencia técnica</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Room Tab 3 end-->

                        <!--Room Tab 4 start-->

                        <!--Room Tab 4 end-->
                    </div>
                    <!-- Tabs end -->
                </div>
            </div>
        </div>
    </section>
    <!--Room Tabs start-->


    <!--Attractions start-->
    <section class="features" id="sc-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>¡Te encantará todas las comodidades que ofrecemos!</h2>
                </div>
            </div>
            <div class="row">
                <!--Feature 1 start-->
                <div class="col-md-3 col-sm-6">
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="icon-speedometer"></i>
                        </div>
                        <h3>Internet de alta velocidad</h3>
                    </div>
                </div>
                <!--Feature 1 end-->

                <!--Feature 2 start-->
                <div class="col-md-3 col-sm-6">
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="icon-disc"></i>
                        </div>
                        <h3>Sistema de sonido Hifi</h3>
                    </div>
                </div>
                <!--Feature 2 end-->

                <!--Feature 3 start-->
                <div class="col-md-3 col-sm-6">
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="icon-map"></i>
                        </div>
                        <h3>Ubicación Ideal</h3>
                    </div>
                </div>
                <!--Feature 3 end-->

                <!--Feature 4 start-->
                <div class="col-md-3 col-sm-6">
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="icon-shield"></i>
                        </div>
                        <h3>Servicio de Seguridad</h3>
                    </div>
                </div>
                <!--Feature 4 end-->
            </div>
        </div>
    </section>
    <!--Attractions end-->

    <!--Services start-->
    <section class="services" id="sc-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Ofrecemos una amplia selección de servicios</h2>
                </div>
            </div>

            <div class="row service-row">
                <!-- Service Item start -->
                <div class="col-md-4 col-sm-6 service">
                    <div class="service-icon"><i class="fa fa-car"></i></div>
                    <h3>Garaje para tu auto</h3>
                </div>
                <!-- Service Item end -->

                <!-- Service Item start -->
                <div class="col-md-4 col-sm-6 service">
                    <div class="service-icon"><i class="fa fa-paw"></i></div>
                    <h3>Mascotas permitidas</h3>
                </div>
                <!-- Service Item end -->

                <!-- Service Item start -->
                <div class="col-md-4 col-sm-6 service">
                    <div class="service-icon"><i class="fa fa-fire"></i></div>
                    <h3>Área de fogatas</h3>
                </div>
                <!-- Service Item end -->

                <!-- Service Item start -->
                <div class="col-md-4 col-sm-6 service">
                    <div class="service-icon"><i class="fa fa-soccer-ball-o"></i></div>
                    <h3>Parque infantil</h3>
                </div>
                <!-- Service Item end -->

                <!-- Service Item start -->
                <div class="col-md-4 col-sm-6 service">
                    <div class="service-icon"><i class="fa fa-lock"></i></div>
                    <h3>Armarios electrónicos</h3>
                </div>
                <!-- Service Item end -->

                <!-- Service Item start -->
                <div class="col-md-4 col-sm-6 service">
                    <div class="service-icon"><i class="fa fa-coffee"></i></div>
                    <h3>Máquina de café</h3>
                </div>
                <!-- Service Item end -->
            </div>

        </div>
    </section>
    <!--Services end-->

    <!--Rates start-->
    <section class="rates" id="sc-rates">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>¡Nuestros Paquetes!</h2>
                </div>
            </div>
            <div class="row">
                <!--Rate 1 start-->
                @foreach($packs as $pack)
                <div class="col-md-3 rate-box">
                    <div class="rate-icon">
                        <div class="stars">
                            <i class="fa fa-star"></i>
                        </div>
                        <i class="fa fa-bed"></i>
                    </div>
                    <div class="rate-description">{{ $pack->pack }}</div>
                    <div class="rate-price">
                        <div class="rate-price-currency">Bs</div>
                        <div class="rate-price-amount">{{ $pack->price }}</div>
                        <div class="clearfix"></div>
                        <button class="btn btn-warning btn-detail viewpack" id="viewpack"
                                data-idpack         = "{{ $pack->id_pack }}"
                                data-pack           = "{{ $pack->pack}}"
                                data-price          = "{{ $pack->price}}">
                            <i class="material-icons dp48">detalle</i>
                        </button>
                    </div>

                </div>
                <!--Rate 1 end-->
                    @extends('modals.viewroom')
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 rates-payment-info">
                    <p>Aceptamos pagos con tarjetas:</p>
                    <img src="assets/webpage/img/credit-cards.png" alt="Credit Cards"/>
                </div>
            </div>
        </div>
    </section>
    <!--Rates end-->

    <!--About start-->
    <section class="about" id="sc-about">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="about-image">
                        <img src="assets/webpage/img/about-img.jpg" alt="Owner Image" class="img-responsive"/>
                    </div>
                </div>
                <div class="col-md-8">
                    <h2>Sobre nosotros</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                        Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatisDuis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
                        elit.</p>
                </div>
            </div>
        </div>
    </section>
    <!--About end-->

    <!--Counter start-->
    <section class="counter" id="sc-counter">
        <div class="container">
            <div class="row">
                <!--Counter1 start-->
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="counter-box sc-animate" data-effect="fadeInDown">
                        <div class="counter-icon"><i class="icon-star"></i></div>
                        <div class="counter-number" data-value="457">457</div>
                        <div class="counter-description">Clientes habituales</div>
                    </div>
                </div>
                <!--Counter1 end-->

                <!--Counter2 start-->
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="counter-box sc-animate" data-effect="fadeInUp">
                        <div class="counter-icon"><i class="icon-globe"></i></div>
                        <div class="counter-number" data-value="622">622</div>
                        <div class="counter-description">Clientes internacionales</div>
                    </div>
                </div>
                <!--Counter2 end-->

                <!--Counter3 start-->
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="counter-box sc-animate" data-effect="fadeInDown">
                        <div class="counter-icon"><i class="icon-cup"></i></div>
                        <div class="counter-number" data-value="986">986</div>
                        <div class="counter-description">Desayunos servidos</div>
                    </div>
                </div>
                <!--Counter3 end-->

                <!--Counter4 start-->
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="counter-box sc-animate" data-effect="fadeInUp">
                        <div class="counter-icon"><i class="icon-heart"></i></div>
                        <div class="counter-number" data-value="320">320</div>
                        <div class="counter-description">Nuevos clientes este mes</div>
                    </div>
                </div>
                <!--Counter4 end-->
            </div>
        </div>
    </section>
    <!--Counter end-->

    <!--Contact start-->
    <section class="contact" id="sc-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Contáctate con nosotros.</h2>

                                <h3>Si tienes preguntas, siéntete libre y escríbenos.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form action="#" id="contact-form">
                <input type="hidden" name="action" value="send_contact_form"/>

                <div class="alert hidden" id="contact-form-msg"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input type="text" name="name" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                            <input type="text" name="email" class="form-control" placeholder="Correo">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                            <input type="text" name="phone" class="form-control" placeholder="Teléfono o Celular">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
                            <input type="text" name="address" class="form-control" placeholder="Dirección">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group textbox">
                            <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                            <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-6">
                        <p class="contact-form-info">*todos los campos son obligatorios.</p>
                        <button class="btn btn-color1 btn-contact-form">Enviar <i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--Contact end-->

    <!--Address start-->
    <section class="address" id="sc-address">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><img src="assets/webpage/img/logo.png" alt="Logo"/></h2>
                    <address>Av. 14 de septiembre Obrajes</address>
                    <p class="address-info">Si tiene alguna consulta no dude en llamarnos</p>
                    <ul class="phones">
                        <li><i class="fa fa-phone"></i>2-489092</li>
                        <li><i class="fa fa-mobile"></i>72501923</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Address end-->

    <!--Footer start-->
    <footer class="footer" id="sc-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="footer-copyright">
                        &copy; UCB 1-2017
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="footer-social-media">
                        <li><a href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus fa-fw"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer end-->
</div>
<!--End content before Slider-->

<a href="#page-top" class="scroll-to scroll-up-btn"><i class="fa fa-angle-up"></i></a>

<!--Room Tabs Gallery Preview Modal start-->
<div class="modal fade" id="roomTabsGalleryPreviewModal" tabindex="-1" role="dialog" aria-labelledby="roomTabsGalleryPreviewModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-nav">
                <div class="title pull-left"><!-- title via js --></div>
                <button type="button" class="close pull-right" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body" id="roomTabsGalleryPreviewModalLabel">
                <!-- img via js -->
            </div>
        </div>
    </div>
</div>
<!--Room Tabs Gallery Preview Modal start-->

<!--Inquiry Modal start-->
<div class="modal fade" id="inquiryModal" tabindex="-1" role="dialog" aria-labelledby="inquiryModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" method="post" id="inquiry-form" name="inquiry-form">
                <input type="hidden" name="action" value="send_inquiry_form"/>

                <!-- Modal header start -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
                    <h4 class="modal-title" id="inquiryModalLabel"><i class="icon-calendar"></i> Reservas</h4>
                </div>
                <!-- Modal header end -->

                <!-- Modal body start -->
                <div class="modal-body">

                    <!-- Inquiry Room and Date start -->
                    <div class="room-and-date">
                        <div class="alert hidden" id="inquiry-form-msg"></div>
                        <div class="room-select">
                            <div class="input-group">
                                <select name="inquiry-object" id="inquiry-object" class="form-control">
                                    <option value="">Seleccione una habitación</option>
                                    <option value="Single Room">Habitación simple</option>
                                    <option value="The Cottage">Habitación doble</option>
                                    <option value="Guest House">Habitación matrimonial</option>
                                    <option value="The Sea Villa">Suite</option>
                                </select>
                            </div>
                        </div>

                        <div class="inquiry-check-in">
                            <div class="date-select">
                                <label for="inquiry-date-check-in">CHECK-IN</label>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                    <input type="text" class="form-control datepicker" name="inquiry-date-check-in" id="inquiry-date-check-in" placeholder="Fecha: mm/dd/yyyy">
                                </div>
                            </div>
                        </div>
                        <div class="inquiry-check-out">
                            <div class="date-select">
                                <label for="inquiry-date-check-out">CHECK-OUT</label>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                    <input type="text" class="form-control datepicker" name="inquiry-date-check-out" placeholder="Fecha: mm/dd/yyyy" id="inquiry-date-check-out">
                                </div>
                            </div>
                        </div>


                        <div class="inquiry-people">
                            <div class="people-select">
                                <label for="inquiry-children">NIÑOS</label>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-user-follow"></i></span>
                                    <select name="inquiry-children" class="form-control" id="inquiry-children">
                                        <option value="Without children">Sin niños</option>
                                        <option value="1 - Child">1 - Niño</option>
                                        <option value="2 - Children">2 - Niños</option>
                                        <option value="3 - Children">3 - Niños</option>
                                        <option value="4 - Children">4 - Niños</option>
                                        <option value="5 - Children">5 - Niños</option>
                                    </select>
                                </div>
                            </div>

                            <div class="people-select" style="padding-right: 7px;">
                                <label for="inquiry-adults">ADULTOS</label>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-user-follow"></i></span>
                                    <select name="inquiry-adults" class="form-control" id="inquiry-adults">
                                        <option value="1 - Adult">1 - Adulto</option>
                                        <option value="2 - Adult">2 - Adultos</option>
                                        <option value="3 - Adult">3 - Adultos</option>
                                        <option value="4 - Adult">4 - Adultos</option>
                                        <option value="5 - Adult">5 - Adultos</option>
                                        <option value="6 - Adult">6 - Adultos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- Inquiry Room and Date end -->

                    <hr/>

                </div>
                <!-- Modal body end -->

                <!-- Modal footer start -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-inquiry-submit">Buscar</button>
                </div>
                <!-- Modal footer end -->

            </form>
        </div>
    </div>
</div>
<!--Inquiry Modal end-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
@section('js')
<script src="assets/webpage/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
<script type="text/javascript">
    $('#viewpack').on('click', function(){
        // $('#id').val($(this).data('id'));
        // $('#email').val($(this).data('email'));
        // $('#password').val($(this).data('password'));
        // $('#role').val($(this).data('role'));

        $('#viewpackmodal').openModal(true);
    });
</script>
<script src="assets/webpage/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<script src="assets/webpage/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/webpage/bower_components/jquery-animatenumber/jquery.animateNumber.min.js"></script>
<script src="assets/webpage/bower_components/bootstrap-3-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/webpage/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/webpage/js/custom.js"></script>
@endsection
</body>
</html>