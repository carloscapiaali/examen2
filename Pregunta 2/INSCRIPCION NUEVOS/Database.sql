create table flujo_procesos(
    flujo varchar(2),
    proceso varchar(2),
    proceso_sig varchar(2),
    tipo varchar(1),
    rol varchar(15),
    pantalla varchar(30)
);
insert into flujo_procesos values('F1','P1','P2','I','estudiante', 'inicial');
insert into flujo_procesos values('F1','P2','P3','P','estudiante', 'registro_documentos');
insert into flujo_procesos values('F1','P3','P4','P','estudiante','generar_CPT');
insert into flujo_procesos values('F1','P4',null,'C','kardex','verificacion_pag');
insert into flujo_procesos values('F1','P5','P6','P','kardex','evaluacion_centralizacion');
insert into flujo_procesos values('F1','P6',null,'C','kardex','existencia_obs');
insert into flujo_procesos values('F1','P7',null,'P','kardex','asignacion_matricula');
insert into flujo_procesos values('F1','P8',null,'P','kardex','observaciones');


create table procesos_condicionales(
    flujo varchar(2),
    proceso varchar(2),
    xsi varchar(2),
    xno varchar(2)
);
insert into procesos_condicionales values('F1','P4','P5','P4');
insert into procesos_condicionales values('F1','P6','P8','P7');

create table asignacion_roles(
    cod integer,
    usuario varchar(30),
    contraseña varchar(30),
    rol varchar(15)
);

insert into asignacion_roles values('111111','rene','123456','estudiante');
insert into asignacion_roles values('222222','juan','123456','estudiante');
insert into asignacion_roles values('333333','jose','123456','kardex');

create table flujos(
    flujo varchar(2),
    descripcion varchar(50)
);

insert into flujos values('F1','MATRICULACION DE ESTUDIANTES NUEVOS');
insert into flujos values('F1','INSCRIPCION A CURSOS PARA ESTUDIANTES NUEVOS');

create table flujo_tramites(
    flujo varchar(3),
    proceso varchar(3),
    nro_tramite integer,
    fechaini datetime,
    fechafin datetime,
    usuarioInicio varchar(20),
    usuario varchar(20)
);

insert into flujo_tramites values('F1','P1',500,'2022/10/18 10:00',null,'rene','rene');
insert into flujo_tramites values('F1','P1',500,'2022/10/18 10:30','2022/10/18  11:00','juan','juan');
insert into flujo_tramites values('F1','P2',500,'2022/10/18 11:00',null,'juan','juan');
insert into flujo_tramites values('F1','P4',500,'2022/10/18 14:00',null,'rene','jose');
insert into flujo_tramites values('F1','P4',500,'2022/10/18 14:30',null,'juan','jose');

create table datosUniv(
    Ci integer ,
    Facultal varchar(50),
    Nro_Formulario varchar(30),
    Carrera varchar(30),
    Fecha_Llenado datetime,
    Mension varchar(30),
    Intentos integer,
    Sede varchar(30)
);

insert into datosUniv values('111111','FCPN',null,'INFORMATICA',null, 'SIN MENSION',null,'CIUDAD LA PAZ');
insert into datosUniv values('222222','FCPN',null,'MATEMATICA',null, 'SIN MENSION',null,'CIUDAD LA PAZ');

create table datosEst(
    Ci integer,
    Nombre varchar(100),
    Sexo varchar(10),
    Nacionalidad varchar(20),
    Estado_Civil varchar(10),
    Pais_Origen varchar(20),
    Fecha_de_Nacimiento datetime,
    Departamento varchar(15),
    Provincia varchar(50)
);

insert into datosEst values('111111','Rene Estrada Gomez','M','Boliviano','S','Bolivia','11/06/1998','La Paz','murillo');
insert into datosEst values('222222','juan garcia ruiz','M','Boliviano','S','Bolivia','11/06/1998','La Paz',null);

create table archivosAdj(
    Ci integer,
    cert_nacimiento longblob,    
    carnet longblob,
    dipl_bachiller_anverso longblob,
    dipl_bachiller_reverso longblob,
    cert_habilitacion longblob,
    descripcion varchar(100),
    observaciones varchar(100)
);

insert into archivosAdj values('111111',null,null,null,null,null,null,null);
insert into archivosAdj values('222222',null,null,null,null,null,null,null);

create table pagosRealizados(
    Ci integer,
    monto integer    
);

insert into pagosRealizados values('111111',27);
insert into pagosRealizados values('222222',27);


SELECT * FROM workflow.pagosrealizados x, workflow.datosuniv y, workflow.datosest z, workflow.archivosadj a  WHERE x.Ci=y.Ci AND  y.Ci=z.Ci AND z.Ci=a.Ci