
/*==============================================================*/
/* Table: Blessed                                               */
/*==============================================================*/
create table Blessed
(
   codigoBlessed        int not null auto_increment,
   codigoUsuario        int,
   fechaBlessed         datetime,
   pregunta1A           float,
   pregunta2A           float,
   pregunta3A           float,
   pregunta4A           float,
   pregunta5A           float,
   pregunta6A           float,
   pregunta7A           float,
   pregunta8A           float,
   pregunta1B           int,
   pregunta2B           int,
   pregunta3B           int,
   pregunta1C           int,
   pregunta2C           int,
   pregunta3C           int,
   pregunta4C           int,
   pregunta5C           int,
   pregunta6C           int,
   pregunta7C           int,
   pregunta8C           int,
   pregunta9C           int,
   pregunta10C          int,
   pregunta11C          int,
   resultadoBlessed     varchar(254),
   primary key (codigoBlessed)
);

/*==============================================================*/
/* Table: Fms                                                   */
/*==============================================================*/
create table Fms
(
   codigoFms            int not null auto_increment,
   codigoUsuario        int,
   fechaFms             datetime,
   5mFms                varchar(254),
   50mFms               varchar(254),
   500mFms              varchar(254),
   observacionesFms     varchar(254),
   primary key (codigoFms)
);

/*==============================================================*/
/* Table: Katz                                                  */
/*==============================================================*/
create table Katz
(
   codigoKatz           int not null auto_increment,
   codigoUsuario        int,
   fechaKatz            datetime,
   banioKatz            int,
   vestirseKatz         int,
   retreteKatz          int,
   movilidadKatz        int,
   continenciaKatz      int,
   alimentacionKatz     int,
   resultadoKatz        varchar(254),
   primary key (codigoKatz)
);

/*==============================================================*/
/* Table: Lobo                                                  */
/*==============================================================*/
create table Lobo
(
   codigoLobo           int not null auto_increment,
   codigoUsuario        int,
   fechaLobo            datetime,
   1oLobo               int,
   2oLobo               int,
   3oLobo               int,
   4oLobo               int,
   5oLobo               int,
   6oLobo               int,
   7oLobo               int,
   8oLobo               int,
   9oLobo               int,
   10oLobo              int,
   11oLobo              int,
   1fLobo               int,
   1cLobo               int,
   2cLobo               int,
   1mLobo               int,
   1lLobo               int,
   2lLobo               int,
   3lLobo               int,
   4lLobo               int,
   5lLobo               int,
   6lLobo               int,
   7lLobo               int,
   8lLobo               int,
   resultadoLobo        varchar(254),
   primary key (codigoLobo)
);

/*==============================================================*/
/* Table: Macs                                                  */
/*==============================================================*/
create table Macs
(
   codigoMacs           int not null auto_increment,
   codigoUsuario        int,
   fechaMacs            datetime,
   nivelMacs            varchar(254),
   observacionesMacs    varchar(254),
   primary key (codigoMacs)
);

/*==============================================================*/
/* Table: Tinetti                                               */
/*==============================================================*/
create table Tinetti
(
   codigoTinetti        int not null auto_increment,
   codigoUsuario        int,
   fechaTinetti         datetime,
   marchaTinetti        int,
   longitudDerecho1Tinetti int,
   longitudDerecho2Tinetti int,
   longitudIzquierdo1Tinetti int,
   longitudIzquierdo2Tinetti int,
   simetriaTinetti      int,
   fluidezTinetti       int,
   trayectoriaTinetti   int,
   troncoTinetti        int,
   posturaTinetti       int,
   equilibrioTinetti    int,
   levantarseTinetti    int,
   intentosTinetti      int,
   inmediataTinetti     int,
   equilibrioETinetti   int,
   empujarTinetti       int,
   ojosCerradosTinetti  int,
   vueltaA360Tinetti    int,
   vueltaB360Tinetti    int,
   sentarseTinetti      int,
   resultadoTinetti     varchar(254),
   primary key (codigoTinetti)
);

/*==============================================================*/
/* Table: Usuario                                               */
/*==============================================================*/
create table Usuario
(
   codigoUsuario        int not null auto_increment,
   identificadorUsuario varchar(50) unique,
   nombresUsuario       varchar(100),
   apellidosUsuario     varchar(100),
   fechaNacimientoUsuario datetime,
   aulaUsuario          varchar(25),
   diagnosticoMedicoUsuario varchar(254),
   diagnosticoFisioterapiaUsuario varchar(254),
   objetivosUsuario     varchar(254),
   conclusionesUsuario  varchar(254),
   primary key (codigoUsuario)
);

alter table Blessed add constraint FK_tieneB foreign key (codigoUsuario)
      references Usuario (codigoUsuario) on delete restrict on update restrict;

alter table Fms add constraint FK_tieneF foreign key (codigoUsuario)
      references Usuario (codigoUsuario) on delete restrict on update restrict;

alter table Katz add constraint FK_tieneK foreign key (codigoUsuario)
      references Usuario (codigoUsuario) on delete restrict on update restrict;

alter table Lobo add constraint FK_tieneL foreign key (codigoUsuario)
      references Usuario (codigoUsuario) on delete restrict on update restrict;

alter table Macs add constraint FK_tieneM foreign key (codigoUsuario)
      references Usuario (codigoUsuario) on delete restrict on update restrict;

alter table Tinetti add constraint FK_tieneT foreign key (codigoUsuario)
      references Usuario (codigoUsuario) on delete restrict on update restrict;

