<?php

class CampanaMD { 
    public $cod_campana = -1; 
    public $nombre = ""; 
    public $nom_usuario = "ad";
    public $eslogan = ""; 
    public $tipoletra = ""; 
    public $mensaje = ""; 
    public $fecha_inicio = ""; 
    public $fecha_fin = ""; 
    public $numero_registrados = 0; 
    public $archivo = ""; 
    public $precio = 0; 
    public $imagen = ""; 
    public $video = ""; 
    public $gif = ""; 

    // CONSULTAR
    function getCampanas() { 

        //'traer la conexion como variable global'
        global $conexion;
        print_r($conexion);
        try {
            // ejecutar la consulta 
            $resultado =mysqli_query($conexion, " SELECT * FROM campanas  ");

        } catch (Exception $e) {            
            $resultado['error'] = $e->getMessage();
        
        }

        return $resultado;

        
    } 
    // INSERTAR 
    function insertCampanas() { 
        try {
        global $conexion;

        $query = "INSERT INTO `campanas` 
         ( `CODUSUARIO`, `TIPOLETRACAMPANA`, `IMAGENCAMPANA`, `GIFCAMPANA`, `BASECAMPANA`, `VIDEOCAMPANA`, `NUMCLIENTESCAMPANA`, `FECHAINICAMPANA`, `FECHAFINCAMPANA`, `PRECIOCAMPANA`, `FECHACREACIONCAMPANA`, `TITULOCAMPANA`, `ESLOGANCAMPANA`)
         VALUES  ( '$this->nom_usuario', '$this->tipoletra', '$this->imagen', '$this->gif', '$this->archivo', '$this->video', $this->numero_registrados, '$this->fecha_inicio', '$this->fecha_fin', 0, now() , '$this->nombre', '$this->eslogan') ";
        echo ($query);
        $resultado = mysqli_query($conexion , $query);

        } catch (Exception $e) {            
            $resultado['error']= $e->getMessage();
        
        }

        return $resultado;
        
    } 
    function deleteCampanas() { 
        try {

            $query = "DELETE from campanas WHERE  campanas.CODCAMPANA= ".$cod_campana;
        
            $resultado =mysqli_query($conexion,$query);
    
            } catch (Exception $e) {            
                $resultado['error']= $e->getMessage();
            
            }
    
            return $resultado ;

    } 
    function updateCampanas() { 
        try {

            $query = " UPDATE   campanas SET   
            campanas.TITULOCAMPANA = '' ,
            campanas.ESLOGANCAMPANA= '' 
           WHERE  campanas.CODCAMPANA= ".$cod_campana;
        
            $resultado =mysqli_query($conexion,$query);
    
            } catch (Exception $e) {            
                $resultado['error']= $e->getMessage();
            
            }
    
            return $resultado;
    }
    
}

