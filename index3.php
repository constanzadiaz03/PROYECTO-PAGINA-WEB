<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Proyecto del gato</title>
    <link rel="stylesheet" href="estilos3.css">
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
                    <a href="index.php" d="enlace-inicio" class="btn-header">Inicio</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Mediciones de temperatura y eventos</h1>
        </div>
    </header>
    <main>
        <section class="team contenedor" id="tablamediciones">
            <h2><i>Mediciones</i></h2>
            <div class="table">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Mediciones que se han realizado a la fecha</th>
                            <th scope="col">La temperatura más alta que se ha detectado a la fecha es de</th>
                            <th scope="col">La temperatura más baja que se ha detectado a la fecha es de</th>
                            <th scope="col">La temperatura promedio es de</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">8</th>
                            <td>32°</td>
                            <td>14°</td>
                            <td>24,3°</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><i>Fecha</i></th>
                            <th scope="col"><i>Hora</i></th>
                            <th scope="col"><i>Temperatura</i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">23/Abril/2022</th>
                            <td>12:00 hrs</td>
                            <td>31°</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">23/Abril/2022</th>
                            <td>15:00 hrs</td>
                            <td>32°</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">24/Abril/2022</th>
                            <td>9:00 hrs</td>
                            <td>14°</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">24/Abril/2022</th>
                            <td>14:00 hrs</td>
                            <td>18°</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">24/Abril/2022</th>
                            <td>17:00 hrs</td>
                            <td>24°</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">24/Abril/2022</th>
                            <td>23:00 hrs</td>
                            <td>16°</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">25/Abril/2022</th>
                            <td>14:00 hrs</td>
                            <td>29°</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">25/Abril/2022</th>
                            <td>17:00 hrs</td>
                            <td>30°</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        </div>
        <section class="team contenedor" id="tablaeventos">
            <h2><i>Eventos</i></h2>
            <div class="table">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Eventos que se han detectado a la fecha</th>
                            <th scope="col">Cantidad de eventos de temperatura fuera de rango </th>
                            <th scope="col">Cantidad de eventos de proximidad a la puerta gatuna</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">12</th>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><i>Fecha</i></th>
                            <th scope="col"><i>Hora</i></th>
                            <th scope="col"><i>Tipo de evento</i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">23/Abril/2022</th>
                            <td>12:00 hrs</td>
                            <td>Apertura de ventanas</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">23/Abril/2022</th>
                            <td>19:00 hrs</td>
                            <td>Cierre de ventanas</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">24/Abril/2022</th>
                            <td>9:00 hrs</td>
                            <td>Proximidad a puerta gatuna</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">24/Abril/2022</th>
                            <td>14:00 hrs</td>
                            <td>Proximidad a puerta gatuna</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">24/Abril/2022</th>
                            <td>19:00 hrs</td>
                            <td>Apertura de ventanas</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">24/Abril/2022</th>
                            <td>23:00 hrs</td>
                            <td>Cierre de ventanas</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">25/Abril/2022</th>
                            <td>14:00 hrs</td>
                            <td>Apertura de ventanas</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">25/Abril/2022</th>
                            <td>17:00 hrs</td>
                            <td>Proximidad a puerta gatuna</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">26/Abril/2022</th>
                            <td>13:00 hrs</td>
                            <td>Apertura de ventanas</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">26/Abril/2022</th>
                            <td>16:00 hrs</td>
                            <td>Proximidad a puerta gatuna</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">26/Abril/2022</th>
                            <td>20:00 hrs</td>
                            <td>Cierre de ventanas</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">27/Abril/2022</th>
                            <td>18:00 hrs</td>
                            <td>Apertura de ventanas</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        </div>
        </div>
    </main>
    <footer id="contacto ">
        <div class="footer contenedor">
            <div>
                <img src="img/1.png" alt="" width:="100px" height:="100px">
            </div>
            <p>Siempre cuidando de ti y de tu familia.</p>
        </div>

    </footer>
    <script src=" js2/jquery2.js "></script>
    <script src="js2/main2.js "></script>
    <script src="js2/filtro2.js "></script>
</body>
</html>