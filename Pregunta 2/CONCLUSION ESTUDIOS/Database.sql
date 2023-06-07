create table flujo_procesos(
    flujo varchar(2),
    proceso varchar(2),
    proceso_sig varchar(2),
    tipo varchar(1),
    rol varchar(15),
    pantalla varchar(30)
);
insert into flujo_procesos values('F1','P1','P2','I','estudiante', 'inicial');
insert into flujo_procesos values('F1','P2','P3','P','estudiante', 'carta');
insert into flujo_procesos values('F1','P3','P4','P','estudiante','adj_requisitos');
insert into flujo_procesos values('F1','P4','P5','P','estudiante','req_fisico');
insert into flujo_procesos values('F1','P5','P6','P','kardex','recepcion_verificacion');
insert into flujo_procesos values('F1','P6',null,'C','kardex','observacion');
insert into flujo_procesos values('F1','P7',null,'P','kardex','recepcion_preparacion');
insert into flujo_procesos values('F1','P8',null,'P','estudiante','Listar_obs');

create table procesos_condicionales(
    flujo varchar(2),
    proceso varchar(2),
    xsi varchar(2),
    xno varchar(2)
);
insert into procesos_condicionales values('F1','P6','P7','P8');

create table asignacion_roles(
    cod integer,
    usuario varchar(30),
    contraseña varchar(30),
    rol varchar(15)
);
insert into asignacion_roles values('111111','rene','123456','estudiante');
insert into asignacion_roles values('222222','juan','123456','estudiante');
insert into asignacion_roles values('333333','jose','123456','kardex');
insert into asignacion_roles values('444444','pedro','123456','kardex');

create table flujos(
    flujo varchar(2),
    descripcion varchar(50)
);
insert into flujos values('F1','certificado de conclusion');


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
insert into flujo_tramites values('F1','P4',500,'2022/10/18 14:30',null,'rene','pedro');

create table datosGral(
    ci integer,
    correo varchar(100),
    celular integer,
    paterno varchar(20),
    materno varchar(20),
    nombre varchar(20),
    regUniv integer,
    anioIng integer,
    modalidad_ing varchar(100),
    tutor varchar(50),
    asesor varchar(50),
    mod_graduacion datetime,
    mencion varchar(15),
    titulo_grado varchar(50)
);