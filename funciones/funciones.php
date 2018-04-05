<?php 
function subir_archivo($temp_filename, $filename ,$path ) {
try{
    // temp_filename $_FILES['uploaded_file']['tmp_name']
    //filename   $_FILES['uploaded_file']['name']


	  $path = $path.$filename;
	  if(move_uploaded_file($temp_filename, $path)) {
		echo "<script> alert('Se subio el archivo');</script>";
        return 1;
	  } else{
        echo "<script> alert('No se pudo subir el archivo');</script>";
        return -1;
      }
      
}
catch(Exception $e){
    echo "<script> alert('No se pudo subir el archivo: ".$e->getMessage()."');</script>";
    return 1;
}
	
}

?>