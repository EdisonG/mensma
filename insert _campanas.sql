select * from dat_campaniaactualizacion

select * from sis_datoregistro.nom_datoregistro

ref_campaniadatoregistro


select * from ref_campaniadatoregistro where  ref_campaniadatoregistro.cod_campania=14

select * from ref_campaniadatoregistro where  ref_campaniadatoregistro.cod_campania

select * from rel_usuariocampaniaactualizacion


INSERT INTO `campanas` VALUES ( `CODUSUARIO`, `TIPOLETRACAMPANA`, `IMAGENCAMPANA`, `GIFCAMPANA`, `BASECAMPANA`, `VIDEOCAMPANA`, `NUMCLIENTESCAMPANA`, `FECHAINICAMPANA`, `FECHAFINCAMPANA`, `PRECIOCAMPANA`, `FECHACREACIONCAMPANA`, `TITULOCAMPANA`, `ESLOGANCAMPANA`) ( 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '01-01-2018', '01-01-2018', 0, now() , 'campana prueba', 'eslogan prueba insert')

aaalarconfusuarios
aaaponte
aaaveiga

rel_usuariocampaniaactualizacion.obs_campaniaactualizacionusuario

SELECT * FROM 
ref_campaniadatoregistro JOIN sis_datoregistro  ON ref_campaniadatoregistro.cod_datoregistro = sis_datoregistro.cod_datoregistro
 WHERE ref_campaniadatoregistro.cod_campania =14;
 
 
 select * from rel_usuariocampaniaactualizacion where rel_usuariocampaniaactualizacion.usr_usuario = 'aaaponte' and
 rel_usuariocampaniaactualizacion.fec_usuariofechactualizacion = 2
 
 SELECT COUNT(*) contador
  FROM rel_usuariocampaniaactualizacioncampanas
   where rel_usuariocampaniaactualizacion.usr_usuario = 'aaapon1te'
   
   
   
   SELECT * FROM campanas
   
   
   INSERT INTO `campanas`  ( `CODUSUARIO`, `TIPOLETRACAMPANA`, `IMAGENCAMPANA`, `GIFCAMPANA`, `BASECAMPANA`, `VIDEOCAMPANA`, `NUMCLIENTESCAMPANA`, `FECHAINICAMPANA`, `FECHAFINCAMPANA`, `PRECIOCAMPANA`, `FECHACREACIONCAMPANA`, `TITULOCAMPANA`, `ESLOGANCAMPANA`) 
	VALUES ( 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0, now() , 'campana prueba', 'eslogan prueba insert')
	
