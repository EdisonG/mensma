<?php
require_once('../conexion/conexion.php');
Conectar(); 
$sql = "select * from usuarios";
//echo($sql);exit;
?>
<html>
<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <style>.thumb { height: 200px; border: 1px solid #000; margin: 10px 5px 0 0;}</style>

  <script>
    function cargarModalActualizar(codigo,nombre,usuario,contrasena){
        document.getElementById("modal_id_actualizar_codigo").value= codigo ;
        document.getElementById("modal_id_actualizar_nombre").value= nombre ;
        document.getElementById("modal_id_actualizar_usuario").value= usuario ;
        document.getElementById("modal_id_actualizar_contrasena").value= contrasena ;  
}
  </script>
</head>
    <body>

        <script>
        $(document).ready(function() {
        $('#example').DataTable();});
        </script>

          <font color="red" size="6"><b>REGISTRO DE USUARIOS</b><td></td></font><br><br>
          <input type="button"  value="  Registrar Usuarios  "  data-toggle="modal" data-target="#ingresar"><br><br>
        
              <table id="example" class="display" style="width:100%">
              <thead>
                  <tr>
                    <td><b><font>Cedula</font></b></td>
                    <td><b><font>Nombre Cliente</font></b></td>
                    <td><b><font>Usuario</font></b></td>
                    <td><b><font>Email</font></b></td>
                    <td><b><font>Fecha Creación</font></b></td>
                    <td><b><font>Configuracion</font></b></td>
                    <td><b><font>Contraseña</font></b></td>
                  </tr>
                </thead>
                <tbody>
                          <?php
                            try
                            {
                              $cursor = $conn->query($sql); 
                              foreach($cursor as $fila) {
                          ?>
                  <tr>
                    <td style="font-size: 18pt"><?php echo($fila["CODUSUARIO"]); ?></td>
                    <td style="font-size: 18pt"><?php echo($fila["NOMBREUSUARIO"]); ?></td>
                    <td style="font-size: 18pt"><?php echo($fila["USUARIOUSUARIO"]); ?></td>
                    <td style="font-size: 18pt"><?php echo($fila["MAILUSUARIO"]); ?></td>
                    <td style="font-size: 18pt"><?php echo($fila["FECHACREACIONUSUARIO"]); ?></td>
                    <td style="font-size: 18pt"><?php echo($fila["CONTRASENAUSUARIO"]); ?></td>
                    <td><a/><input type="button" value="Actualizar"  onclick="cargarModalActualizar(<?php echo("'".$fila["CODUSUARIO"]."' , '".$fila["NOMBREUSUARIO"]."', '".$fila["USUARIOUSUARIO"]."', '".$fila["CONTRASENAUSUARIO"]."'") ?>);"  data-toggle="modal" data-target="#modificar" ></a></td>
                  </tr>
                              <?php 
                            }
                          }
                          catch(PDOException $e)
                          {
                            echo("Error!; ".$e->getMessage()."<br/>");
                          }
                          $cursor = null;
                          $conn = null;
                              ?>
                              </tbody>
              </table>  


                <div class="modal fade" id="ingresar" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <form method="post" action="../DP/usuarioDP.php" align="left" enctype="multipart/form-data" >
                        <legend  style="font-size: 14pt" align="center"><b>Registro</b></legend>
                        <label style="font-size: 10pt" px><b>Ingresar Email</b></label><br>
                          <input type="email" name="mailUsuario" class="form-control" placeholder="Ingrese Email" required /><br>
                          <label style="font-size: 10pt" px><b>Ingresar Cédula de identidad</b></label><br>
                          <input type="text" name="codUsuario" class="form-control" placeholder="Ingrese Cédula" /><br>
                          <label style="font-size: 10pt"><b>Ingresar Usuario</b></label><br>
                          <input type="text" name="usuarioUsuario" class="form-control"  required placeholder="Ingrese Usuario"/><br>
                          <label style="font-size: 10pt"><b>Ingresar Nombre</b></label><br>
                          <input type="text" name="nombreUsuario" class="form-control"  required placeholder="Ingrese Nombre Completo"/><br>
                          <label style="font-size: 10pt"><b>Ingresa Contraseña</b></label><br>
                          <input type="password" name="pass" class="form-control"  placeholder="Ingrese Contraseña" /><br>
                          <label style="font-size: 10pt"><b>Repite Contraseña</b></label><br>
                          <input type="password" name="rpass" class="form-control" required placeholder="Repite Contraseña"/><br>               
                          <input type="file" id="files" name="file" /><br />
                          <output id="list"></output>
                  <input type="hidden" id="nombre_file" name="imagenUsuario"><br>
                
                  <script>
                        function archivo(evt) {
                            var files = evt.target.files; // FileList object             
                            // Obtenemos la imagen del campo "file".
                            for (var i = 0, f; f = files[i]; i++) {
                              //Solo admitimos imágenes.
                              if (!f.type.match('image.*')) {
                                  continue;
                              }
                      
                              var reader = new FileReader();
                              reader.onload = (function(theFile) {
                                  return function(e) {
                                    // Insertamos la imagen
                                  document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                                  document.getElementById("nombre_file").value=theFile.name;
                                  };
                              })(f);
                              reader.readAsDataURL(f);
                            }
                        }
                        document.getElementById('files').addEventListener('change', archivo, false);
                </script>
                <div class="modal-footer">
                <input type="submit" class="btn btn-default" name="procesar" value="Guardar">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button></div>
                </div>
                </form>
                </div></div></div></div>


                  <div class="modal fade" id="modificar" role="dialog">
                  <div class="modal-dialog">
                  <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
            <body>
                    <font><b>Actualizar Usuarios</b></font><br><br>
                    <form action="../dp/usuarioDP.php" method="post">
                    <table border="1">
                        <input type="hidden" id="modal_id_actualizar_codigo" name="codUsuario"/>
                        <tr>
                        <td><b><font>Nombre Cliente</font></b></td>
                        <td><input type="text" id="modal_id_actualizar_nombre" name="nombreUsuario"/></td> </tr>
                        <tr>
                        <td><b><font>Usuario</font></b></td> 
                        <td><input type="text" id="modal_id_actualizar_usuario" name="usuarioUsuario"/></td> </tr>
                        <tr> 
                        <td><b><font>Contraseña</font></b></td>
                        <td><input type="text" id="modal_id_actualizar_contrasena" name="contrasenaUsuario"/></td></tr>
                    </table>
            </body>
                </div>
                  <div class="modal-footer">
                  <tr><td align="center"><input type="submit" class="btn btn-default" name="Editar" value="Editar"></td>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>
                  </form>
                  </div></div></div></div>
    </body>
</html>