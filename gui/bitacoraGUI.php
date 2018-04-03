<?php
require_once('../conexion/conexion.php');
Conectar(); 
$sql = "select * from bitacoras";
$sql1 = "select * from usuarios";
//echo($sql1);exit;
?>
<html>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <style>.thumb { height: 200px; border: 1px solid #000; margin: 10px 5px 0 0;}</style>
   
    <body>
    <script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
    <font color="red" size="6"><b>BITÁCORA DE USUARIOS</b><td></td></font><br><br>
    
        <table id="example" class="display" style="width:100%">
            <thead>
            <tr>
              <td><b><font>Usuario</font></b></td>
              <td><b><font>Descripcion</font></b></td>
              <td><b><font>Fecha de Sesion</font></b></td>
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
                            <td style="font-size: 18pt"><?php echo($fila["DESCRIPCIONBITACORA"]); ?></td>
                            <td style="font-size: 18pt"><?php echo($fila["FECHABITACORA"]); ?></td>
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
    </body>
</html>