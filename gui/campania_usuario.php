<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


  <div class="jumbotron text-center">
    <h1></h1>
    <p>Registro de campañas</p>
  </div>

  <div class="container">
    <!--
eslogan
numero de Registrados
foto de perfil , video , gif
tipo de LETRA
mensaje
fecha inicio
fecha fin
precio (campo en la abse que llena el admin )
   -->
    <form class="form">
        <div class="form-group">
          <label for="usr">Nombre de la Campaña:</label>
          <input type="text" class="form-control" id="name_campana">
        </div>

        <div class="form-group">
          <label for="usr">Eslogan de la Campaña:</label>
          <input type="text" class="form-control" id="eslogan_campana">
        </div>
        <div class="form-group">
          <label for="usr">Numero de registros:</label>
          <input type="text" class="form-control" id="numero_registros_campana">
        </div>
        <div class="form-group">
          <label for="usr">Tipo  de letra:</label>
          <select class="selectpicker form-control">
            <option>Cursiva</option>
            <option>Negrilla</option>
            <option>Tachada</option>
          </select>

        </div>
        <div class="form-group">
          <label for="usr">Mensaje:</label>
          <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <div class="form-group">
          <label for="usr">Fecha Inicio:</label>
          <input type="date" class="form-control" id="fecha_inicio_campana">
        </div>
        <div class="form-group">
          <label for="usr">Fecha Fin:</label>
          <input type="date" class="form-control" id="fecha_fin_campana">
        </div>
        <div class="form-group">
          <label for="usr">Foto:</label>
          <input type="text" class="form-control" id="numero_registros_campana">
        </div>
        <div class="form-group">
          <label for="usr">Video:</label>
          <input type="text" class="form-control" id="numero_registros_campana">
        </div>
        <div class="form-group">
          <label for="usr">Gif:</label>
          <input type="text" class="form-control" id="numero_registros_campana">
        </div>

        <button class="btn btn-success form-control">REGITRAR CAMPAÑA</button>

    </form>

  </div>

  </body>
  </html>
