/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     3/26/2018 10:54:58 AM                        */
/*==============================================================*/


drop table if exists CAMPANAS;

drop table if exists ESTADISTICAS;

drop table if exists REPORTES;

drop table if exists USUARIOS;

/*==============================================================*/
/* Table: CAMPANAS                                              */
/*==============================================================*/
create table CAMPANAS
(
   CODCAMPANA           int not null auto_increment,
   CODUSUARIO           char(10),
   TIPOLETRACAMPANA     char(100),
   IMAGENCAMPANA        char(100),
   GIFCAMPANA           char(100),
   BASECAMPANA          char(100),
   VIDEOCAMPANA         char(100),
   NUMCLIENTESCAMPANA   int,
   FECHAINICAMPANA      datetime,
   FECHAFINCAMPANA      datetime,
   PRECIOCAMPANA        decimal(8,2),
   FECHACREACIONCAMPANA datetime,
   primary key (CODCAMPANA)
);

/*==============================================================*/
/* Table: ESTADISTICAS                                          */
/*==============================================================*/
create table ESTADISTICAS
(
   CODESTADISTICA       int not null auto_increment,
   CODCAMPANA           int,
   LEIDOESTADISTICA     int,
   NOLEIDOESTADISTICA   int,
   PRIVADOESTADISTICA   int,
   INACTIVOESTADISTICA  int,
   SPAMESTADISTICA      int,
   primary key (CODESTADISTICA)
);

/*==============================================================*/
/* Table: REPORTES                                              */
/*==============================================================*/
create table REPORTES
(
   CODREPORTE           int not null auto_increment,
   CODCAMPANA           int,
   EXCELREPORTE         char(150),
   primary key (CODREPORTE)
);

/*==============================================================*/
/* Table: USUARIOS                                              */
/*==============================================================*/
create table USUARIOS
(
   CODUSUARIO           char(10) not null,
   USUARIOUSUARIO       char(30),
   CONTRASENAUSUARIO    char(20),
   NOMBREUSUARIO        varchar(150),
   FECHACREACIONUSUARIO datetime,
   IMAGENUSUARIO        char(50),
   primary key (CODUSUARIO)
);

alter table CAMPANAS add constraint FK_EFECTUA foreign key (CODUSUARIO)
      references USUARIOS (CODUSUARIO) on delete restrict on update restrict;

alter table ESTADISTICAS add constraint FK_VARIAS foreign key (CODCAMPANA)
      references CAMPANAS (CODCAMPANA) on delete restrict on update restrict;

alter table REPORTES add constraint FK_MUCHOS foreign key (CODCAMPANA)
      references CAMPANAS (CODCAMPANA) on delete restrict on update restrict;

