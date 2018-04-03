<?php
require_once('../conexion/conexion.php');
Conectar(); 
$sql = "select * from campanas";
$sql1 = "select * from usuarios";
//echo($sql1);exit;
?>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <style>.thumb { height: 200px; border: 1px solid #000; margin: 10px 5px 0 0;}</style>
   
  <script>
    function cargarModalActualizar(codigo,precio){
        document.getElementById("modal_id_actualizar_codigo").value= codigo ;
        document.getElementById("modal_id_actualizar_precio").value= precio ;  
    }
  </script>
</head>

    <body>
    <script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
    <font color="red" size="6"><b>DASHBOARD CAMPAÑAS</b><td></td></font><br><br>
    
        <table id="example" class="display" style="width:100%">
            <thead>
            <tr>
              <td><b><font>Cedula</font></b></td>
              <td><b><font>Cliente</font></b></td>
              <td><b><font>Campañas</font></b></td>
              <td><b><font>Fecha de inicio</font></b></td>
              <td><b><font>Fecha de fin</font></b></td>
              <td><b><font>Precio</font></b></td>
              <td><b><font>Configuración</font></b></td>
            </tr>
            </thead>
            <tbody>
                    <?php
                      try
                      {
                        $cursor = $conn->query($sql); 
                        foreach($cursor as $fila) 
                        {
                        ?>
                            <tr>
                            <td style="font-size: 18pt"><?php echo($fila["CODUSUARIO"]); ?></td> 
                            <input type="hidden" value="<?php echo($fila["CODCAMPANA"]) ?>" name="codCampana"><br>
                            <?php
                                        $cursor1 = $conn->query($sql1); 
                                        foreach($cursor1 as $fila1) 
                                        {
                                            if($fila['CODUSUARIO']==$fila1['CODUSUARIO'])
                                            {    
                            ?>
                            <td style="font-size: 18pt"><?php echo($fila1["USUARIOUSUARIO"]); ?></td>
                            <?php
                                            }
                                        }
                            ?>
                            <td style="font-size: 18pt"><?php echo($fila["TITULOCAMPANA"]); ?></td>
                            <td style="font-size: 18pt"><?php echo($fila["FECHAINICAMPANA"]); ?></td>
                            <td style="font-size: 18pt"><?php echo($fila["FECHAFINCAMPANA"]); ?></td>
                            <td style="font-size: 18pt"><?php echo($fila["PRECIOCAMPANA"]); ?></td>
                            <td><a><input type="button"  value="Precio" onclick="cargarModalActualizar(<?php echo("'".$fila["CODCAMPANA"]."' , '".$fila["PRECIOCAMPANA"]."'") ?>);" data-toggle="modal" data-target="#eliminar"></a>
                            <a href="../gui/estadistica_reporte.php?id=<?php echo($fila["CODCAMPANA"]);?>"><input type="button" value="Estadística" ></a></td>
                            </tr>
                <?php 
                        }
                    }
                    catch(PDOException $e)
                    {
                      echo("Error!; ".$e->getMessage()."<br/>");
                    }
                    $cursor = null;
                    $cursor1 = null;
                    $conn = null;
                ?>
                </tbody>
      </table>  
      
      <div class="modal fade" id="eliminar" role="dialog">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <body>
                    <font><b>Actualizar Precio</b></font><br><br>
                    <form action="../dp/campanaDP.php" method="post">
                    <table border="1">
                        <input type="hidden" id="modal_id_actualizar_codigo" name="codUsuario"/>
                        <tr>
                        <td><b><font>Precio Final</font></b></td>
                        <td><input type="text" id="modal_id_actualizar_precio" name="precioCampana"/></td> </tr>
                    </table>
            </body>
                </div>
                  <div class="modal-footer">
                  <tr><td align="center"><input type="submit" class="btn btn-default" name="Editar" value="Editar"></td>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
                </form>
                </div></div></div></div>
    </body>
</html>