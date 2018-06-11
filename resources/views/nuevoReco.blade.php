<!DOCTYPE html>
<html>
<head>
    <title id="titulo"></title>
    <!-- Required meta tags-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link id="esti" rel="stylesheet" href="/css/estilo1.css" />
    <!-- Bootstrap CSS-->
    <script type="text/javascript" src="/javascripts/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/js/funcionesRecos.js"></script>
    <link rel="shortcut icon" href="https://png.icons8.com/metro/1600/worldwide-location.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar_1"><a class="navbar-brand" href="http://ciudadesturisticas-admin.herokuapp.com/"><img src="https://png.icons8.com/metro/1600/worldwide-location.png" width="30" height="30" alt=""/></a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand" href="http://ciudadesturisticas-admin.herokuapp.com/"><b>CIUDADES TURISTICAS</b></a>
        <div
            class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <form class="form-inline my-2 my-lg-0"></form>
        </div>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                          <!--  <li><a class="nav-link" disabled href="{{ route('register') }}">{{ __('Register') }}</a></li>-->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
    </nav>


    <div class="container-fluid">
     <form method="POST" action="agregar">
        {{ csrf_field() }}

          <div class="form-row">
            <div><h3>Ingresar atributos del recorrido</h3></div>
            <hr>

          </div>
             @include ('error')
          <div class="form-row">
            <div class="form-group col-md-6">
              <div id="nombre_recorrido"><strong>Nombre de recorrido </strong></div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="nombre" placeholder="Nombre del recorrido" name="nombre" value="{{ old('nombre') }}" required>
              </div>
              <div class="form-group col-md-6"></div>

              <div id="tiempo_recorrido"><strong>Tiempo estimado del recorrido</strong></div>
               <div class="form-group col-md-6">
                <input type="text" class="form-control" id="tiempo" placeholder="Tiempo del recorrido en horas" name="tiempo" value="{{ old('tiempo') }}" required>
              </div>
              <div class="form-group col-md-6"></div>

              <div id="categoria_recorrido"><strong>Categoría del recorrido</strong></div>
               <div class="form-group col-md-6">
               <select class="form-control" id="categoria" name="categoria">
                <option value="turistico">Turistico</option>
                <option value="ninos">Niños</option>
                <option value="cultural">Cultural</option>
                <option value="historico">Historico</option>
               </select>
               </div>
               <div class="form-group col-md-6"></div>
              

              <div id="url_recorrido"><strong>Url del recorrido</strong></div>
               <div class="form-group col-md-6">
                <input type="text" class="form-control" id="url" placeholder="Url del recorrido" name="url" value="{{ old('url') }}" required>
              </div>
              <div class="form-group col-md-6"></div>

              <div id="puntos_recorrido"><strong>Agregar puntos del recorrido</strong></div>
               <div class="form-group col-md-6" id="text-punto">
                <input type="text" class="form-control" id="puntos" name="puntosPI[]" value="{{ old('puntosPI[]') }}" placeholder="Ingrese el placeId del lugar que desee" name="puntos" required>
              </div>
              <div class="form-group col-md-6"></div>
              <button type="button" onclick="anadirText()" class="btn btn-default"> 
                Agregar otro punto
              </button>

           </div>
           <div class="form-group col-md-6">
              <div id="tarifa_recorrido"><strong>Tarifa del recorrido</strong></div>
              <div class="form-group col-md-6">
               <select class="form-control" id="tarifa" name="tarifa">
                  <option value=5>Entre 0 y 5 U$</option>
                  <option value=10>Entre 6 y 10 U$</option>
                  <option value=20>Entre 10 y 20 U$</option>
                  <option value=50>Mayor a 20 U$</option>
               </select>
               </div>
               <div class="form-group col-md-6"></div>


              <div id="descripcion_recorrido"><strong>Descripción del recorrido</strong></div>
               <div class="form-group col-md-6">
                <input type="text" class="form-control" id="descripcion" placeholder="Descripcion del recorrido" name="descripcion" value="{{ old('descripcion') }}" required>
              </div>
              <div class="form-group col-md-6"></div>

              <div id="descripcion_breve_recorrido"><strong>Descripcion breve del recorrido</strong></div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="descripcion_breve" placeholder="Descripcion breve del recorrido" name="descripcion_breve" value="{{ old('descripcion_breve') }}" required>
              </div>
              <div class="form-group col-md-6"></div>


              <div id="transporte_recorrido"><strong>Transporte del recorrido</strong></div>
              <div class="form-group col-md-6">
               <select class="form-control" id="apto" name="apto">
                <option value="auto">Auto</option>
                <option value="colectivo">Colectivo</option>
                <option value="caminando">Caminando</option>
                <option value="bicicleta">Bicicleta</option>
               </select>
               </div>
               <div class="form-group col-md-6"></div>


              <div id="transporte_recorrido"><strong>Imagen del recorrido</strong></div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="imagen" placeholder="Imagen del recorrido" name="imagen" value="{{ old('imagen') }}" required>
              </div>
               <div class="form-group col-md-6"></div>

            </div>
          </div>

          <div class="form-row" id="panel-boton">
            <div class="form-group col-md-10"></div>
            <div class="form-group col-md-2">

              <button class="btn btn-default" type="submit">Agregar recorrido</button>
            </div>
          </div>
    </div>


   </form>
</body>
</html>