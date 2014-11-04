/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     04-11-2014 13:53:54                          */
/*==============================================================*/


drop table if exists BODEGA;

drop table if exists COMANDA;

drop table if exists DETALLE_COMANDA;

drop table if exists MATERIA_PRIMA;

drop table if exists MENU;

drop table if exists MESA;

drop table if exists PRODUCTO_ELABORADO;

drop table if exists PRODUCTO_FINAL;

drop table if exists PRODUCTO_VENTA;

drop table if exists PROVEEDOR;

drop table if exists RECETA;

drop table if exists REGISTRO_COMPRAS_MP;

drop table if exists REGISTRO_COMPRAS_PF;

drop table if exists RESTAURANT;

drop table if exists TIPO_MATERIA_PRIMA;

drop table if exists TIPO_ROL;

drop table if exists USUARIO;

drop table if exists VENTA;

/*==============================================================*/
/* Table: BODEGA                                                */
/*==============================================================*/
create table BODEGA
(
   BODEGA_ID            int not null auto_increment,
   BODEGANOMBRE         char(25),
   primary key (BODEGA_ID)
);

/*==============================================================*/
/* Table: COMANDA                                               */
/*==============================================================*/
create table COMANDA
(
   COM_ID               int not null auto_increment,
   VENTA_ID             int,
   MENU_ID              int,
   MESA_ID              int,
   USU_ID               int,
   USU_USU_ID           int,
   COMFECHA             datetime,
   primary key (COM_ID)
);

/*==============================================================*/
/* Table: DETALLE_COMANDA                                       */
/*==============================================================*/
create table DETALLE_COMANDA
(
   DETALLE_ID           int not null auto_increment,
   COM_ID               int,
   PVENTA_ID            int,
   DETALLEESTADO        char(15),
   primary key (DETALLE_ID)
);

/*==============================================================*/
/* Table: MATERIA_PRIMA                                         */
/*==============================================================*/
create table MATERIA_PRIMA
(
   MP_ID                int not null auto_increment,
   BODEGA_ID            int,
   TMP_ID               int,
   MPNOMBRE             char(20),
   MPUNIDAD_MEDIDA      char(10),
   MPSTOCK              smallint,
   primary key (MP_ID)
);

/*==============================================================*/
/* Table: MENU                                                  */
/*==============================================================*/
create table MENU
(
   MENU_ID              int not null auto_increment,
   MENUNOMBRE           char(25),
   MENUPRECIO           int,
   MENUCANTIDADPERSONAS smallint,
   primary key (MENU_ID)
);

/*==============================================================*/
/* Table: MESA                                                  */
/*==============================================================*/
create table MESA
(
   MESA_ID              int not null auto_increment,
   MESACANTIDADPERSONA  smallint,
   primary key (MESA_ID)
);

/*==============================================================*/
/* Table: PRODUCTO_ELABORADO                                    */
/*==============================================================*/
create table PRODUCTO_ELABORADO
(
   PVENTA_ID            int not null auto_increment,
   PVENTANOMBRE         char(15),
   MENU_ID              int,
   primary key (PVENTA_ID)
);

/*==============================================================*/
/* Table: PRODUCTO_FINAL                                        */
/*==============================================================*/
create table PRODUCTO_FINAL
(
   PVENTA_ID            int not null auto_increment,
   PVENTANOMBRE         char(15),
   MENU_ID              int,
   BODEGA_ID            int,
   PFINALSTOCK          smallint,
   primary key (PVENTA_ID)
);

/*==============================================================*/
/* Table: PRODUCTO_VENTA                                        */
/*==============================================================*/
create table PRODUCTO_VENTA
(
   PVENTA_ID            int not null auto_increment,
   MENU_ID              int,
   PVENTANOMBRE         char(15),
   primary key (PVENTA_ID)
);

/*==============================================================*/
/* Table: PROVEEDOR                                             */
/*==============================================================*/
create table PROVEEDOR
(
   PROV_ID              int not null auto_increment,
   PROVNOMBRE           char(30),
   PROVRUT              char(12),
   PROVTELEFONO         smallint,
   primary key (PROV_ID)
);

/*==============================================================*/
/* Table: RECETA                                                */
/*==============================================================*/
create table RECETA
(
   RECETA_ID            int not null auto_increment,
   RECETACANTIDADPRODUCTO smallint,
   RECETAUNIDADMEDIDA   char(10),
   PVENTA_ID            int,
   MP_ID                int,
   primary key (RECETA_ID)
);

/*==============================================================*/
/* Table: REGISTRO_COMPRAS_MP                                   */
/*==============================================================*/
create table REGISTRO_COMPRAS_MP
(
   RCMP_ID              int not null auto_increment,
   PROV_ID              int,
   MP_ID                int,
   RCMPPRECIO_COMPRA    int,
   RCMPCANTIDAD         smallint,
   RCMPFECHA            date,
   primary key (RCMP_ID)
);

/*==============================================================*/
/* Table: REGISTRO_COMPRAS_PF                                   */
/*==============================================================*/
create table REGISTRO_COMPRAS_PF
(
   RPF_ID               int not null auto_increment,
   PVENTA_ID            int,
   PROV_ID              int,
   RVTASFECHA           date,
   RPFPRECIO_COMPRA     int,
   RPFPCANTIDAD         smallint,
   primary key (RPF_ID)
);

/*==============================================================*/
/* Table: RESTAURANT                                            */
/*==============================================================*/
create table RESTAURANT
(
   RESTO_ID             int not null auto_increment,
   RESTONOMBRE          char(25),
   RESTOFECHACREACION   date,
   primary key (RESTO_ID)
);

/*==============================================================*/
/* Table: TIPO_MATERIA_PRIMA                                    */
/*==============================================================*/
create table TIPO_MATERIA_PRIMA
(
   TMP_ID               int not null auto_increment,
   TMPNOMBRE            char(30),
   primary key (TMP_ID)
);

/*==============================================================*/
/* Table: TIPO_ROL                                              */
/*==============================================================*/
create table TIPO_ROL
(
   ROL_ID               int not null auto_increment,
   ROLNOMBRE            char(15),
   primary key (ROL_ID)
);

/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO
(
   USU_ID               int not null auto_increment,
   RESTO_ID             int,
   ROL_ID               int,
   USUPASSWORD          char(30),
   USUCREATE            date,
   USUNOMBRES           char(25),
   USUAPELLIDOS         char(25),
   USURUT               char(12),
   USUTELEFONO          int,
   USUESTADO            char(13),
   primary key (USU_ID)
);

/*==============================================================*/
/* Table: VENTA                                                 */
/*==============================================================*/
create table VENTA
(
   VENTA_ID             int not null auto_increment,
   USU_ID               int,
   VENTAFECHA           datetime,
   VENTATOTAL           int,
   VENTAFORMADEPAGO     char(15),
   primary key (VENTA_ID)
);

alter table COMANDA add constraint FK_ASIGNAR foreign key (MESA_ID)
      references MESA (MESA_ID) on delete restrict on update restrict;

alter table COMANDA add constraint FK_DETALLAT foreign key (VENTA_ID)
      references VENTA (VENTA_ID) on delete restrict on update restrict;

alter table COMANDA add constraint FK_ENTREGAR foreign key (USU_USU_ID)
      references USUARIO (USU_ID) on delete restrict on update restrict;

alter table COMANDA add constraint FK_INGRESAR foreign key (USU_ID)
      references USUARIO (USU_ID) on delete restrict on update restrict;

alter table COMANDA add constraint FK_RELATIONSHIP_18 foreign key (MENU_ID)
      references MENU (MENU_ID) on delete restrict on update restrict;

alter table DETALLE_COMANDA add constraint FK_ESPECIFICAR foreign key (COM_ID)
      references COMANDA (COM_ID) on delete restrict on update restrict;

alter table DETALLE_COMANDA add constraint FK_INCLUIR foreign key (PVENTA_ID)
      references PRODUCTO_VENTA (PVENTA_ID) on delete restrict on update restrict;

alter table MATERIA_PRIMA add constraint FK_RELATIONSHIP_11 foreign key (TMP_ID)
      references TIPO_MATERIA_PRIMA (TMP_ID) on delete restrict on update restrict;

alter table MATERIA_PRIMA add constraint FK_RELATIONSHIP_7 foreign key (BODEGA_ID)
      references BODEGA (BODEGA_ID) on delete restrict on update restrict;

alter table PRODUCTO_ELABORADO add constraint FK_INHERITANCE_2 foreign key (PVENTA_ID)
      references PRODUCTO_VENTA (PVENTA_ID) on delete restrict on update restrict;

alter table PRODUCTO_FINAL add constraint FK_INHERITANCE_3 foreign key (PVENTA_ID)
      references PRODUCTO_VENTA (PVENTA_ID) on delete restrict on update restrict;

alter table PRODUCTO_FINAL add constraint FK_RELATIONSHIP_6 foreign key (BODEGA_ID)
      references BODEGA (BODEGA_ID) on delete restrict on update restrict;

alter table PRODUCTO_VENTA add constraint FK_DERIVAR foreign key (MENU_ID)
      references MENU (MENU_ID) on delete restrict on update restrict;

alter table RECETA add constraint FK_INCORPORAR foreign key (MP_ID)
      references MATERIA_PRIMA (MP_ID) on delete restrict on update restrict;

alter table RECETA add constraint FK_TENER foreign key (PVENTA_ID)
      references PRODUCTO_ELABORADO (PVENTA_ID) on delete restrict on update restrict;

alter table REGISTRO_COMPRAS_MP add constraint FK_RELATIONSHIP_10 foreign key (PROV_ID)
      references PROVEEDOR (PROV_ID) on delete restrict on update restrict;

alter table REGISTRO_COMPRAS_MP add constraint FK_RELATIONSHIP_9 foreign key (MP_ID)
      references MATERIA_PRIMA (MP_ID) on delete restrict on update restrict;

alter table REGISTRO_COMPRAS_PF add constraint FK_REGISTRAR foreign key (PVENTA_ID)
      references PRODUCTO_FINAL (PVENTA_ID) on delete restrict on update restrict;

alter table REGISTRO_COMPRAS_PF add constraint FK_VENDER foreign key (PROV_ID)
      references PROVEEDOR (PROV_ID) on delete restrict on update restrict;

alter table USUARIO add constraint FK_POSEER foreign key (ROL_ID)
      references TIPO_ROL (ROL_ID) on delete restrict on update restrict;

alter table USUARIO add constraint FK_TRABAJAR foreign key (RESTO_ID)
      references RESTAURANT (RESTO_ID) on delete restrict on update restrict;

alter table VENTA add constraint FK_REALIZAR foreign key (USU_ID)
      references USUARIO (USU_ID) on delete restrict on update restrict;

