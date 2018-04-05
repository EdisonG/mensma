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


  <!--<div class="jumbotron text-center">
    <h1></h1>
    <p>Registro de campañas</p>
  </div>-->
  <div class=" text-left">
  <h1> INGRESAR CAMPAÑAS  </h1>
  <hr>
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
    <form class="form" enctype="multipart/form-data"  method="post" action="../dp/campanaDP.php">
        <div class="form-group">
          <label for="usr">Nombre de la Campaña:</label>
          <input type="text" class="form-control" id="name_campana" name="name_campana" >
        </div>

        <div class="form-group">
          <label for="usr">Eslogan de la Campaña:</label>
          <input type="text" class="form-control" id="eslogan_campana" name="eslogan_campana">
        </div>
        <div class="form-group">
          <label for="usr">Numero de registros:</label>
          <input type="text" class="form-control" id="numero_registros_campana" name="numero_registros_campana" >
        </div>
        <div class="form-group">
          <label for="usr">Tipo  de letra:</label>
          <select class="selectpicker form-control"  id="tipo_letra_campana" name="tipo_letra_campana">
            <option>Cursiva</option>
            <option>Negrilla</option>
            <option>Tachada</option>
          </select>

        </div>
        <div class="form-group">
          <label for="usr">Mensaje:</label>
          <textarea class="form-control" rows="5" id="mensaje_campana" name="mensaje_campana"></textarea>
        </div>
        <div class="form-group">
          <label for="usr">Fecha Inicio:</label>
          <input type="date" class="form-control" id="fecha_inicio_campana"  name="fecha_inicio_campana">
        </div>
        <div class="form-group">
          <label for="usr">Fecha Fin:</label>
          <input type="date" class="form-control" id="fecha_fin_campana" name="fecha_fin_campana" >
        </div>
        <div class="form-group">
          <label for="usr">Foto:</label>
          <input type="text" class="form-control" id="imagen_campana" name="imagen_campana">
        </div>
        <div class="form-group">
          <label for="usr">Video:</label>
          <input type="text" class="form-control" id="video_campana" name="video_campana" >
        </div>
        <div class="form-group">
          <label for="usr">Gif:</label>
          <input type="text" class="form-control" id="gif_campana" name="gif_campana">
        </div>
        <div>
          <p>Imagen</p>
          <input type="file" name="uploaded_file"></input><br />
        </div>
        <div>
          <p>Video</p>
          <input type="file" name="uploaded_video"></input><br />
        </div>
        <div>
          <p>Gif</p>
          <input type="file" name="uploaded_gif"></input><br />
        </div>

        <input type="submit" class="btn btn-success form-control" id="btn-submit" name="accion" value="insert">
        <!--<button class="btn btn-success form-control">REGISTRAR CAMPAÑA</button>-->

    </form>

    <br><br>

  </div>

  </body>
  </html>
