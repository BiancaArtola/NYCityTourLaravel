<!DOCTYPE html>
<html>
<head>
    <title id="titulo"></title>
    <!-- Required meta tags-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link id="esti" rel="stylesheet" href="/stylesheets/estilo1.css" />
    <!-- Bootstrap CSS-->
    <script type="text/javascript" src="/javascripts/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/javascripts/funcionesRecos.js"></script>
    <link rel="shortcut icon" href="https://png.icons8.com/metro/1600/worldwide-location.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar_1"><a class="navbar-brand" href="https://ciudadesturisticas.herokuapp.com/"><img src="https://png.icons8.com/metro/1600/worldwide-location.png" width="30" height="30" alt=""/></a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand" href="https://ciudadesturisticas.herokuapp.com/"><b>CIUDADES TURISTICAS</b></a>
        <div
            class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <form class="form-inline my-2 my-lg-0"></form>
        </div>
    </nav>


    <div class="container-fluid">
     <form method="POST" action="agregar">
        {{ csrf_field() }}

          <div class="form-row">
            <div><h7>Ingresar atributos del recorrido</h7></div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <div id="nombre_recorrido"><strong>Nombre de recorrido </strong></div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="nombre" placeholder="Nombre del recorrido" name="nombre">
              </div>
              <div class="form-group col-md-6"></div>

              <div id="tiempo_recorrido"><strong>Tiempo estimado del recorrido</strong></div>
               <div class="form-group col-md-6">
                <input type="text" class="form-control" id="nombre" placeholder="Tiempo del recorrido en horas" name="tiempo">
              </div>
              <div class="form-group col-md-6"></div>

              <div id="categoria_recorrido"><strong>Categoría del recorrido</strong></div>
               <div class="form-group col-md-6">
               <select class="form-control" id="categoria">
                <option>Turistico</option>
                <option>Ninos</option>
                <option>Cultural</option>
                <option>Historico</option>
               </select>
               </div>
               <div class="form-group col-md-6"></div>
              

              <div id="url_recorrido"><strong>Url del recorrido</strong></div>
               <div class="form-group col-md-6">
                <input type="text" class="form-control" id="url" placeholder="Url del recorrido" name="url">
              </div>
              <div class="form-group col-md-6"></div>

           </div>
           <div class="form-group col-md-6">
              <div id="tarifa_recorrido"><strong>Tarifa del recorrido</strong></div>
              <div class="form-group col-md-6">
               <select class="form-control" id="tarifa">
                <option>5</option>
                <option>10</option>
                <option>20</option>
                <option>50</option>
               </select>
               </div>
               <div class="form-group col-md-6"></div>


              <div id="descripcion_recorrido"><strong>Descripción del recorrido</strong></div>
               <div class="form-group col-md-6">
                <input type="text" class="form-control" id="descripcion" placeholder="Descripcion del recorrido" name="descripcion">
              </div>
              <div class="form-group col-md-6"></div>

              <div id="descripcion_breve_recorrido"><strong>Descripcion breve del recorrido</strong></div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="descripcion_breve" placeholder="Descripcion breve del recorrido" name="descripcion_breve">
              </div>
              <div class="form-group col-md-6"></div>


              <div id="transporte_recorrido"><strong>Transporte del recorrido</strong></div>
              <div class="form-group col-md-6">
               <select class="form-control" id="categoria">
                <option>Auto</option>
                <option>Colectivo</option>
                <option>Caminando</option>
                <option>Bicicleta</option>
               </select>
               </div>
               <div class="form-group col-md-6"></div>

            </div>
          </div>

          <div class="form-row" id="panel-boton">
            <div class="form-group col-md-10"></div>
            <div class="form-group col-md-2">
              <button class="agregar" type="submit">Agregar recorrido</button>
            </div>
          </div>
    </div>
</body>
</html>