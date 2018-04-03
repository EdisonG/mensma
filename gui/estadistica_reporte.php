<?php
require_once('../conexion/conexion.php');
Conectar(); 
$id = $_GET['id']; 
//echo($id);exit;
$sql = "select * from estadisticas where CODCAMPANA='$id'";
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
        function cargarModalActualizar(codigo,leido,noleido,privado,inactivo,spam){
            document.getElementById("modal_id_actualizar_codigo").value= codigo ;
            document.getElementById("modal_id_actualizar_leido").value= leido ; 
            document.getElementById("modal_id_actualizar_noleido").value= noleido ; 
            document.getElementById("modal_id_actualizar_privado").value= privado ;
            document.getElementById("modal_id_actualizar_inactivo").value= inactivo ;
            document.getElementById("modal_id_actualizar_spam").value= spam ;
             }
    </script>
  
    <script>
        $(document).ready(function() {
        $('#example').DataTable();});
    </script>
   </head>
    <body>
          <font color="red" size="6"><b>STATUS DE MENSAJE</b><td></td></font><br><br>
          <input type="button"  value="Ingresar Status"  data-toggle="modal" data-target="#ingresar"><br><br>
        
              <table id="example" class="display" style="width:100%">
              <thead>
                  <tr>
                    <td><b><font>Leidos</font></b></td>
                    <td><b><font>No leidos</font></b></td>
                    <td><b><font>Privados</font></b></td>
                    <td><b><font>Inactivos</font></b></td>
                    <td><b><font>Spam</font></b></td>
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
                    <td style="font-size: 18pt"><?php echo($fila["LEIDOESTADISTICA"]); ?></td>
                    <td style="font-size: 18pt"><?php echo($fila["NOLEIDOESTADISTICA"]); ?></td>
                    <td style="font-size: 18pt"><?php echo($fila["PRIVADOESTADISTICA"]); ?></td>
                    <td style="font-size: 18pt"><?php echo($fila["INACTIVOESTADISTICA"]); ?></td>
                    <td style="font-size: 18pt"><?php echo($fila["SPAMESTADISTICA"]); ?></td>

                   <td><a/><input type="button" value="Actualizar" onclick="cargarModalActualizar(<?php echo("'".$fila["CODCAMPANA"]."' , '".$fila["LEIDOESTADISTICA"]."', '".$fila["NOLEIDOESTADISTICA"]."', '".$fila["PRIVADOESTADISTICA"]."', '".$fila["INACTIVOESTADISTICA"]."', '".$fila["SPAMESTADISTICA"]."'") ?>);" data-toggle="modal" data-target="#modificar" ></a></td>
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
                  <form method="post" action="../DP/estadisticaDP.php" align="left" enctype="multipart/form-data" >
                  <input type="hidden" value=<?php echo($id)?> name="codCampana"/>
                        <legend  style="font-size: 14pt" align="center"><b>Ingresar Status</b></legend>
                          <label style="font-size: 10pt" px><b>Leidos</b></label><br>
                          <input type="text" name="leidosEstadistica" class="form-control"/><br>
                          <label style="font-size: 10pt"><b>No Leidos</b></label><br>
                          <input type="text" name="noleidosEstadistica" class="form-control"/><br>
                          <label style="font-size: 10pt"><b>Privados</b></label><br>
                          <input type="text" name="privadosEstadisticas" class="form-control"/><br>
                          <label style="font-size: 10pt"><b>Inactivos</b></label><br>
                          <input type="text" name="inactivosEstadisticas" class="form-control"/><br>
                          <label style="font-size: 10pt"><b>Spam</b></label><br>
                          <input type="text" name="spamEstadisticas" class="form-control"/><br>               
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
                    <font><b>Actualizar Precio</b></font><br><br>
                    <form action="../dp/estadisticaDP.php" method="post">
                    <table border="1">
                        <input type="hidden" id="modal_id_actualizar_codigo" name="codEstadistica"/>
                        <tr>
                        <td><b><font>Leidos</font></b></td>
                        <td><input type="text" id="modal_id_actualizar_leido" name="leidoEstadistica"/></td> 
                        </tr>
                        <tr>
                        <td><b><font>No Leidos</font></b></td>
                        <td><input type="text" id="modal_id_actualizar_noleido" name="noleidoEstadistica"/></td> 
                        </tr>
                        <tr>
                        <td><b><font>Privados</font></b></td>
                        <td><input type="text" id="modal_id_actualizar_privado" name="privadoEstadistica"/></td> 
                        </tr>
                        <tr>
                        <td><b><font>Inactivo</font></b></td>
                        <td><input type="text" id="modal_id_actualizar_inactivo" name="inactivoEstadistica"/></td> 
                        </tr>
                        <tr>
                        <td><b><font>Spam</font></b></td>
                        <td><input type="text" id="modal_id_actualizar_spam" name="spamEstadistica"/></td> 
                        </tr>
                    </table>
            </body>
                </div>
                  <div class="modal-footer">
                  <tr><td align="center"><input type="submit" class="btn btn-default" name="Editar" value="Editar"></td>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
                </form>
                </div></div></div></div><br><br><br>
                <font color="red" size="6"><b>REPORTE DETALLADO EXCEL</b><td></td></font><br><br>
                  <table id="example" class="display" style="width:100%">
                <tbody>
                  <tr>
                  <td><input type="file" id="files" name="file" /><br />
                          <output id="list"></output>
                  <input type="hidden" id="nombre_file" name="imagenUsuario"><br></td>
                </tr>
                </tbody>
              </table>  
    </body>
</html>