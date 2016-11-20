<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <title>Sistema de reportes</title>
    	<meta name="keywords" content="" />
		<meta name="description" content="" />
<!-- 
Nature Theme 
http://www.templatemo.com/tm-398-nature
-->
        <meta name="viewport" content="width=device-width">
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,500,300,700' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/templatemo_main.css')}}">
    </head>
    <body>
        <div id="main-wrapper">
            <!--[if lt IE 7]>
                <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a rel="nofollow" href="http://browsehappy.com">upgrade your browser</a> or <a rel="nofollow" href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 affix text-center" style="z-index: 1;">
                <h1 class="templatemo-site-title">
                        <a href="#">Sistema reporte de basuras</a>
                        <img src="{{asset('images/btn-menu.png')}}" alt="main menu" id="m-btn" class="pull-right visible-xs visible-sm" >
                </h1>

                <ul id="responsive" style="display:none" class="hidden-lg hidden-md"></ul><!-- /.responsive -->
            </div>

            <div class="menu visible-md visible-lg">
                <ul id="menu-list">
                    <li class="active home-menu"><a href="#home">Reportes</a></li>
                    <li class="about-menu"><a href="#about">Acerca de nosotros</a></li>
                    <li class="services-menu"><a href="#services">Nuestros servicios</a></li>
                    <li class="testimonial-menu"><a href="#testimonial">Testimonios</a></li>
                    <li class="contact-menu"><a href="#contact">Generar reporte</a></li>
                    <li><a rel="nofollow" target="_parent" href="https://github.com/jhfaber" class="external">FB Page</a></li>
                </ul>
            </div><!-- /.menu -->

            <div class="image-section">
                <div class="image-container">
                    <img src="{{asset('images/nature1.jpg')}}" id="home-img" class="main-img inactive" alt="Home">
                    <img src="{{asset('images/nature2.jpg')}}" id="about-img" class="inactive" alt="About">
                    <img src="{{asset('images/nature3.jpg')}}" id="services-img"  class="inactive" alt="Services">
                    <img src="{{asset('images/nature4.jpg')}}" id="testimonial-img" class="inactive" alt="Testimonial">
                    <img src="{{asset('images/nature5.jpg')}}" id="contact-img" class="inactive" alt="Contact">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-6 col-md-offset-6 templatemo-content-wrapper">
                    <div class="templatemo-content">
                        
                        <section id="home-text" class="active templatemo-content-section">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                @yield('reportes')
                            </div>
                        </section><!-- /.home-text -->    
                        <section id="about-text" class="inactive">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <h2>¿Que hacemos?</h2>
                                <p>Es una organización voluntaria de la Unión Europea que reconoce a aquellas organizaciones que han implantado un SGMA (Sistema de Gestión Medioambiental) y han adquirido un compromiso de mejora continua, verificado mediante auditorías independientes. Las organizaciones reconocidas con el EMAS -ya sean compañías industriales, pequeñas y medianas empresas, organizaciones del tercer sector, administraciones y organizaciones internacionales (incluidas la Comisión Europea y el Parlamento Europeo1 )- tienen una política medioambiental definida, hacen uso de un sistema de gestión medioambiental y dan cuenta periódicamente del funcionamiento de dicho sistema a través de una declaración medioambiental verificada por organismos independientes. Estas entidades son reconocidas con el logotipo EMAS, que garantiza la fiabilidad de la información dada por dicha empresa. </p>
                            </div>
                        </section>

                      

                        <section id="services-text" class="inactive">
                            <h2 class="text-center">Nuestros servicios</h2>
                            <div class="col-sm-4 col-md-4">
                                <h3>Marketing</h3>
                                <p>Un servicio es un conjunto de actividades que buscan satisfacer las necesidades de un cliente. Los servicios incluyen una diversidad de actividades que se pueden planificar desempeñadas por un gran número de personas  </p>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <h3>Relaciones publicas</h3>
                                <p>Se define un marco donde las actividades se desarrollarán con la idea de fijar una expectativa en el resultado de estas.</p>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <h3>Digital Media</h3>
                                <p> Es el equivalente no material de un bien. Un servicio se diferencia de un bien (físico o intangible) en que el primero se consume y se desgasta de manera brutal puesto que la economía social nada tiene que ver con la política moderna..</p>
                            </div>
                        </section><!-- /.services-text --> 

                        <section id="testimonial-text" class="inactive">
                            <div class="col-sm-12 col-md-12">
                                <h2>Testimonios</h2>
                                <p>Quisque non tempus lacus, non placerat arcu. Donec nibh ipsum, pharetra nec pellentesque at, mattis ut lorem. Fusce dapibus tristique neque, eget ultricies lorem tincidunt vitae. Aliquam erat volutpat. Suspendisse non sem a leo mattis dapibus. Duis vel ornare arcu. Quisque at malesuada tortor.</p>
                                <p>Integer vulputate ultricies nisl, sed vehicula justo accumsan non. Aenean quis semper metus. Maecenas adipiscing, leo a facilisis tempor, mi quam feugiat eros, ullamcorper porttitor elit turpis ac risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </section><!-- /.testimonial-text --> 

                        <section id="contact-text" class="inactive">
                            @yield('contenido')
                        </section><!-- /.contact-text --> 
                    </div><!-- /.templatemo-content -->  
                </div><!-- /.templatemo-content-wrapper --> 
            </div><!-- /.row --> 

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">
                    <p class="footer-text">
                    	<span>Copyright &copy; 2016 JHFABER</span>
                	</p>
                </div><!-- /.footer --> 
            </div>

	</div><!-- /#main-wrapper -->
        
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div><!-- /#preloader -->
        
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/jquery.backstretch.min.js')}}"></script>
        <script src="{{asset('js/templatemo_script.js')}}"></script>
        <!-- templatemo 398 nature -->
    </body>
</html>