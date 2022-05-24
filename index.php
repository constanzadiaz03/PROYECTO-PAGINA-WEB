<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto del gato</title>
    <link rel="stylesheet" href="estilos.css">

</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/1.png" alt="logo">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="#" id="enlace-inicio" class="btn-header">Inicio</a>
                    <a href="#" id="enlace-equipo" class="btn-header">Equipo</a>
                    <a href="#" id="enlace-servicio" class="btn-header">Servicios</a>
                    <a href="#" id="enlace-trabajo" class="btn-header">Trabajos</a>
                    <a href="#" id="enlace-contacto" class="btn-header">Contacto</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Puerta Gatuna</h1>
            <h2>KIT "gato protegido"</h2>
        </div>
    </header>
    <main>
        <section class="team contenedor" id="equipo">
            <h3>Nuestro equipo</h3>
            <p class="after">Conoce a nuestro equipo de trabajo</p>
            <div class="card">
                <div class="content-card">
                    <div class="people">
                        <img src="img/tomadedecisiones.png" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Rodrigo Pino</h4>
                        <p>rodrigo.pino@alumnos.uv.cl</p>

                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/tutorial.png" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Constanza Diaz</h4>
                        <p>constanza.diazpu@alumnos.uv.cl</p>

                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/habilidad.png" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Constanza Inostroza</h4>
                        <p>constanza.inostrozac@alumnos.uv.cl</p>

                    </div>
                </div>
            </div>
        </section>
        <section class="about" id="servicio">
            <div class="contenedor">
                <h3>Nuestros servicios</h3>
                <p class="after">Siempre mejorando para ti y tu mascota</p>
                <div class="servicios">
                    <div class="caja-servicios">
                        <img src="img/heart.png" alt="">
                        <h4>Creativos y asombrosos</h4>
                        <p>¿Qué quiere decir esto?, quiere decir que nuestro objeto será capaz de detectar temperaturas altas y bajas para abrir o cerrar puertas o ventanas; para el caso de la puerta para el gato deberá detectar la proximidad y los movimientos
                            para saber si el animal se acerca para abrir su puerta, para ello el dueño lo puede regular decidiendo la distancia que debe tener el gato de la puerta.</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/responsive.png" alt="" width="70px" height="70px">
                        <h4>Creativos y asombrosos</h4>
                        <p>Consistirá en diseñar e implementar un “kit hogareño”, que permitirá regular automáticamente la temperatura interior de los hogares por medio ventilación por apertura de puertas y/o ventanas, y que además permitirá a las mascotas
                            salir, a elección de sus dueños, mediante la apertura automática de puertas "gatunas" según proximidad. </p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/efectos.png" alt="">
                        <h4>Accesible para todos</h4>
                        <p>Este kit será proporcionado a diferentes familias de la región como parte de un plan piloto que podría extenderse a otras regiones, o incluso, a nivel mundial.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="work contenedor" id="trabajo">
            <h3>Nuestro trabajo</h3>
            <p class="after">Hacemos algo simple pero a la vez extraordinario</p>
            <div class="botones-work">
                <ul>
                    <li class="filter active" data-nombre='modelos'>Modelos</li>
                    <li class="filter" data-nombre='mediciones'>Mediciones</li>

                </ul>
            </div>
            <div class="galeria-work">
                <div class="cont-work modelos">
                    <div class="img-work">
                        <img src="img/12.jpg" alt="modelo puerta">
                    </div>
                    <div class="textos-work">
                        <h4>Modelo</h4>
                    </div>
                </div>
                <div class="cont-work modelos">
                    <div class="img-work">
                        <img src="img/13.jpg" alt="ejemplo puerta en uso">
                    </div>
                    <div class="textos-work">
                        <h4>Modelo de la puerta en uso</h4>
                    </div>
                </div>
            </div>
            <div class="galeria-work">
                <div class="cont-work mediciones">
                    <div class="img-work">
                        <img src="img/medicion.jpg" alt="mediciones de temperatura">
                    </div>
                    <div class="textos-work">
                        <h4><a href="index2.php" id="enlace-mediciones">Ver mediciones</a></h4>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="contacto">
        <div class="footer contenedor">
            <div>
                <img src="img/1.png" alt="" width="100px" height="100px">
            </div>
            <div class="iconos">
                <i class="fab fa-youtube"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-github"></i>
            </div>
            <p>Siempre cuidando de ti y de tu familia.</p>
        </div>

    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>

</html>