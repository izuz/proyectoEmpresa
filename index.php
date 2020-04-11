<!DOCTYPE html>
<html id="inicio">
    <head>
        <meta charset="UTF-8">
        <title>LIF DESARROLLADORES</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" href="...">  
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    </head>

    <body>

        <!-- NAV -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="menu">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.html" id="contenedorLogo"><img src="" id="logo">LOGO / NOMBRE EMPRESA</a>           
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto" id="contenido_menu">
                        <li class="nav-item active">
                            <a id="veInicio" class="nav-link" href="#inicio"><i class="fa fa-home">INICIO</i></a>
                        </li>
                        <li class="nav-item">
                            <a id="veEmpresa" class="nav-link" href="#empresa"><i class="fa fa-sitemap">EMPRESA</i></a>
                        </li>
                        <li class="nav-item">
                            <a id="veProyectos" class="nav-link" href="#proyectos" ><i class="fa fa-camera">PROYECTOS</i></a>
                        </li>
                        <li class="nav-item">
                            <a id="veEquipo" class="nav-link" href="#equipo"><i class="fa fa-user">EQUIPO</i></a>
                        </li>
                        <li class="nav-item">
                            <a id="veContacto" class="nav-link" href="#contacto"><i class="fa fa-envelope">CONTACTO</i></a>
                        </li>
                    </ul>
                </div>    
            </div>
        </nav>

        <br>
        <br>

        <!-- EMPRESA -->
        <section class="main">
            <header id="empresa">
                <div class="container">
                    <br>
                    <h3 id="titulo_empresa">NUESTRAS EMPRESA</h3>
                    <br>
                    <p id="texto_empresa">Somos un grupo de jovenes emprendedores que buscamos hacernos un pequeño hueco
                    en el mercado de las páginas web.Especialistas en nuestro campo y con un trato a nuestros clientes muy personal.
                    Buscamos que nuestros clientes vean reflejado la esencia de su negocio en su web, por eso mantenemos en todo momento
                    el contacto con ellos.
                    </p>
                 
                </div>
            </header>
        </section>

        <br>
        <br>
        <br>

        <!-- PROYECTOS -->
        <section id="proyectos">
            <header>
                <div class="container">
                    <br>
                    <h3 id="titulo_proyectos">NUESTROS PROYECTOS</h3>
                    <br>
                    <p id="texto_proyectos">GALERÍA CON LOS PROYECTOS</p>
                </div>
            </header>
        </section>

        <br>
        <br>
        <br>

        <!-- EQUIPO -->
        <section  id="equipo">
            <header>
                <div class="container">
                    <br>
                    <h3 id="titulo_equipo">NUESTRO EQUIPO</h3>
                    <br>
                    <div class="card-deck">
                        <div class="card">
                            <img src="images/izuz.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">GONZALO IZUZQUIZA</h5>
                                <p class="card-text">Estudios: Técnico en desarrollo de aplicaciones multiplataforma y estudiante de ingeniería informática</p>
                                <p class="card-text">Edad: 22</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    VER MÁS
                                </button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/lago.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">ALEJANDRO LAGO</h5>
                                <p class="card-text">Estudios: Técnico en desarrollo de aplicaciones multiplataforma y estudiante de ingeniería informática</p>
                                <p class="card-text">Edad: 23</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/cifuentes.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">CARLOS FUENTES</h5>
                                <p class="card-text">Estudios: Técnico en desarrollo de aplicaciones multiplataforma y estudiante de python</p>
                                <p class="card-text">Edad: 105</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </section>

        <br>
        <br>
        <br>
        <br>
        <br>

        <!-- CONTACTO -->
        <section id="contacto">
            <header>
                <div class="container">
                    <br>
                    <h3 id="titulo_contacto">CONTÁCTANOS</h3>
                    <br>
                    <p id="texto_contacto">AQUI FORMULARIO DE CONTACTO</p>
                </div>
            </header>

            <footer id="footer">
                <div class="container">
                    <ul class="icons">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                        <li><a href="#" class="icon fa-whatsapp"><span class="label">WhatsApp</span></a></li>
                    </ul>
                </div>
                <div class="copyright" >
                    &copy; LIF DESARROLLADORES
                </div>
            </footer>

        </section>

        <!-- REDES SOCIALES -->
        <!--<footer id="footer">
            <div class="container">
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                    <li><a href="#" class="icon fa-whatsapp"><span class="label">WhatsApp</span></a></li>
                </ul>
            </div>
            <div class="copyright" >
                &copy; LIF DESARROLLADORES
            </div>
        </footer>-->

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.scrolly.min.js" type="text/javascript"></script>
        <script src="assets/js/browser.min.js" type="text/javascript"></script>
        <script src="assets/js/breakpoints.min.js" type="text/javascript"></script>
        <script src="assets/js/util.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Gonzalo Izuzquiza</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        INFORMACIÓN DE LA PERSONA
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>