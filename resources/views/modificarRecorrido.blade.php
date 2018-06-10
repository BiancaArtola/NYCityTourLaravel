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
    </nav>


    <div class="container-fluid">
     <form method="POST" action="/modificar">
        {{ csrf_field() }}

          <div class="form-row">
            <div  class="text-center"><h3>Modificar atributos del recorrido</h3></div>
          </div>
          <hr>
          <div class="form-row">
            <div class="form-group col-md-6">
              <div id="nombre_recorrido"><strong>Nombre de recorrido </strong></div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="nombre" placeholder="Nombre del recorrido" name="nombre" required 
                value="{{ $recorrido[0]->nombre }}">

              </div>
              <div class="form-group col-md-6"></div>

              <div id="tiempo_recorrido"><strong>Tiempo estimado del recorrido</strong></div>
               <div class="form-group col-md-6">
                <input type="text" class="form-control" id="tiempo" placeholder="Tiempo del recorrido en horas" name="tiempo" required
                value="{{ $recorrido[0]->tiempo }}">
              </div>
              <div class="form-group col-md-6"></div>

              <div id="categoria_recorrido"><strong>Categoría del recorrido</strong></div>
               <div class="form-group col-md-6">
               <select class="form-control" id="categoria" name="categoria">
                  @if ($recorrido[0]->categoria == "turistico")
                    <option selected value="turistico">Turistico</option>
                    <option value="ninos">Niños</option>
                    <option value="cultural">Cultural</option>
                    <option value="historico">Historico</option>
                  @elseif ($recorrido[0]->categoria == "ninos")
                    <option value="turistico">Turistico</option>
                    <option selected value="ninos">Niños</option>
                    <option value="cultural">Cultural</option>
                    <option value="historico">Historico</option>
                  @elseif ($recorrido[0]->categoria == "cultural")
                    <option value="turistico">Turistico</option>
                    <option value="ninos">Niños</option>
                    <option selected value="cultural">Cultural</option>
                    <option value="historico">Historico</option>
                  @else
                    <option value="turistico">Turistico</option>
                    <option value="ninos">Niños</option>
                    <option value="cultural">Cultural</option>
                    <option selected value="historico">Historico</option>  
                  @endif
               </select>
               </div>
               <div class="form-group col-md-6"></div>
              

              <div id="url_recorrido"><strong>Url del recorrido</strong></div>
               <div class="form-group col-md-6">
                <input type="text" class="form-control" id="nombre_url" placeholder="Url del recorrido" name="nombre_url" required 
                value=" {{ $recorrido[0]->nombre_url }} ">
              </div>
              <div class="form-group col-md-6"></div>

              <div id="url_recorrido"><strong>Agregar puntos del recorrido</strong></div>
               <div class="form-group col-md-6" id="text-punto">
                @foreach ($recorrido[0]->puntos as $punto)
                <input type="text" class="form-control" id="puntos" placeholder="Ingrese el placeId del lugar que desee" name="puntosPI[]" required value=" {{ $punto}}">
                @endforeach
              </div>
              <div class="form-group col-md-6"></div>
              <button id="boton-puntos"  type="button" onclick="anadirText()" class="btn btn-default"> 
                Agregar otro punto
              </button>

           </div>
           <div class="form-group col-md-6">
              <div id="tarifa_recorrido"><strong>Tarifa del recorrido</strong></div>
              <div class="form-group col-md-6">
               <select class="form-control" id="tarifa" name="tarifa">
                  @if ($recorrido[0]->tarifa == "5")
                    <option selected value=5>Entre 0 y 5 U$</option>
                    <option value=10>Entre 6 y 10 U$</option>
                    <option value=20>Entre 10 y 20 U$</option>
                    <option value=50>Mayor a 20 U$</option>
                  @elseif ($recorrido[0]->tarifa == "10")
                    <option value=5>Entre 0 y 5 U$</option>
                    <option selected value=10>Entre 6 y 10 U$</option>
                    <option value=20>Entre 10 y 20 U$</option>
                    <option value=50>Mayor a 20 U$</option>
                  @elseif ($recorrido[0]->tarifa == "20")
                    <option value=5>Entre 0 y 5 U$</option>
                    <option value=10>Entre 6 y 10 U$</option>
                    <option selected value=20>Entre 10 y 20 U$</option>
                    <option value=50>Mayor a 20 U$</option>
                  @else
                    <option value=5>Entre 0 y 5 U$</option>
                    <option value=10>Entre 6 y 10 U$</option>
                    <option value=20>Entre 10 y 20 U$</option>
                    <option selected value=50>Mayor a 20 U$</option>
                  @endif
               </select>
               </div>
               <div class="form-group col-md-6"></div>


              <div id="descripcion_recorrido"><strong>Descripción del recorrido</strong></div>
               <div class="form-group col-md-6">
                <input type="text" class="form-control" id="descripcion" placeholder="Descripcion del recorrido" name="descripcion" required value="{{ $recorrido[0]->descripcion }}">
              </div>
              <div class="form-group col-md-6"></div>

              <div id="descripcion_breve_recorrido"><strong>Descripcion breve del recorrido</strong></div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="descripcion_breve" placeholder="Descripcion breve del recorrido" name="descripcion_breve" required value="{{ $recorrido[0]->descripcion_breve }}">
              </div>
              <div class="form-group col-md-6"></div>


              <div id="transporte_recorrido"><strong>Transporte del recorrido</strong></div>
              <div class="form-group col-md-6">
               <select class="form-control" id="apto" name="apto">
                 @if ($recorrido[0]->apto == "auto")
                    <option selected value="auto">Auto</option>
                    <option value="colectivo">Colectivo</option>
                    <option value="caminando">Caminando</option>
                    <option value="cicicleta">Bicicleta</option>
                 @elseif ($recorrido[0]->apto == "colectivo")
                    <option selected value="auto">Auto</option>
                    <option selected value="colectivo">Colectivo</option>
                    <option value="caminando">Caminando</option>
                    <option value="cicicleta">Bicicleta</option>
                 @elseif ($recorrido[0]->apto == "caminando")
                    <option selected value="auto">Auto</option>
                    <option value="colectivo">Colectivo</option>
                    <option selected value="caminando">Caminando</option>
                    <option value="cicicleta">Bicicleta</option>
                 @elseif ($recorrido[0]->apto == "bicicleta")
                    <option  value="auto">Auto</option>
                    <option value="colectivo">Colectivo</option>
                    <option value="caminando">Caminando</option>
                    <option selected value="cicicleta">Bicicleta</option>
                 @endif
               </select>
               </div>
               <div class="form-group col-md-6"></div>

               <div id="descripcion_breve_recorrido"><strong>Imagen del recorrido</strong></div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="imagen" placeholder="Imagen del recorrido" name="imagen" required value="{{ $recorrido[0]->imagen }}">
              </div>
              <div class="form-group col-md-6"></div>

            </div>
          </div>

          <div class="form-row" id="panel-boton">
            <div class="form-group col-md-10"></div>
            <div class="form-group col-md-2">

              <button  class="btn btn-default" type="submit" >Modificar recorrido</button>
              <!--type="submit"-->
            </div>
          </div>
         <input type="hidden" id="idRecorrido" name="idRecorrido" value="{{ $recorrido[0] -> _id }}"> 
    </div>
</body>
</html>