<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="shortcut icon" href="https://png.icons8.com/metro/1600/worldwide-location.png">
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link id="esti" rel="stylesheet" href="/css/estilo1.css">
    <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/funciones.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?zoom=1&amp;size=400x50&amp;callback=initMap&amp;key=AIzaSyD_mVCh6mJWkCl-rmCyWITJdMHIIqr-PRE&amp;libraries=places" async="" defer=""></script>
    <title>Recorridos turisticos</title>
</head>

<body>
    <div class="text-center">
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar_1"><a class="navbar-brand" href="https://ciudadesturisticas.herokuapp.com/"><img src="https://png.icons8.com/metro/1600/worldwide-location.png" width="30" height="30" alt=""/></a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand" href="https://ciudadesturisticas.herokuapp.com/"><b><?php echo e($title) ?></b></a>
        <div
            class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="col-md-8"><a class="nav_link" onclick="changeStyle()" style="cursor:pointer;"><b>Cambiar estilo</b></a></div>
                <div class="col-md-4">
                    <fb:login-button scope="public_profile,email" onlogin="checkLoginState();" autologoutlink="true"> </fb:login-button>
                </div>
            </form>
</div>
</nav>
<hr/>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="filtrado">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger">
                        <p class="font-weight-bold"></p>
                        <h4>Filtrar resultados</h4>
                        <p></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger">
                        <p class="font-weight-bold">Categoria del recorrido</p>
                    </a><select class="form-control" id="categoria"><option>Turistico</option><option>Ninos</option><option>Cultural</option><option>Historico</option><option>Todos los recorridos</option></select></li>
                <hr/>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger">
                        <p class="font-weight-bold">Tarifa</p>
                    </a>
                    <div class="row">
                        <div class="col-md-6"><input class="form-control" id="tarifa_minima" type="tarifaMinima" aria-describedby="tarifaMinima" placeholder="Minima" /></div>
                        <div class="col-md-6"><input class="form-control" id="tarifa_maxima" type="tarifaMaxima" aria-describedby="tarifaMaxima" placeholder="Maxima" /></div>
                    </div>
                </li>
                <hr/>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger">
                        <p class="font-weight-bold">Medio de transporte</p>
                    </a><select class="form-control" id="movilidad"><option>Bicicleta</option><option>Auto</option><option>Colectivo</option><option>Caminando</option><option>Todos los medios</option></select></li>
                <hr/>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger">
                        <p class="font-weight-bold">Duracion</p>
                    </a>
                    <div class="row">
                        <div class="col-md-6"><input class="form-control" id="duracion_minima" type="duracionMinima" placeholder="Minima" /></div>
                        <div class="col-md-6"><input class="form-control" id="duracion_maxima" type="duracionMaxima" placeholder="Maxima" /></div>
                    </div>
                </li>
                <hr/>
                <li class="nav-item"><button class="btn btn-lg btn-block btn-secondary" onclick="encontrarChequeado()" type="button">Filtrar</button></li>
                <hr/>
            </ul>
        </div>
        <div class="col-md-10" id="no_filtrado">
            <div class="row">
                <div class="h7" id="textoFiltrado">Nuestros recorridos m&aacute;s visitados</div> 
            </div>
                

                   
                     <div class="row">
                        @foreach ($recos as $reco)
                        <div class="col-md-4">
                                <div class="card"  >
                                <a pull-right class="close" onclick="oyenteCerrar('{{$reco->nombre}}')" >×</a>
                                  <img class="card-img-top" src= "{{$reco->puntos[0]->imagen}}">
                                  <div class="card-body">
                                    <h5 class="card-title">{{ $reco->nombre }}</h5>
                                    <p class="card-text" align='justify'>{{$reco->descripcion_breve}}</p>
                                    <a href="#" class="btn btn-secondary" onclick= "cargarEnMapa('{{$reco->nombre}}')" >Cargar en mapa</a>
                                  </div>
                                </div>

                        </div> 

                        @endforeach
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <hr/>
        </div>
    </div>
    <hr/>
    <div class="row" id="mapa">
        <div class="container-fluid" id="contenedor_mapa">
            <div class="col-md-12" id="campo"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" id="mostrador"></div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-3" id="mostrador_izquierda"></div>
        <div class="col-md-2" id="mostrador_derecha"></div>
        <div class="col-md-7"></div>
    </div>
    <hr/>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>

</html>