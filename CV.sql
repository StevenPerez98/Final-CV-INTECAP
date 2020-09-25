Create DATABASE CV;

USE CV;

CREATE TABLE usuario(
	idusuario INT (11) PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(50),
    Apellido VARCHAR(50),
    profesion VARCHAR(100),
    direccion VARCHAR(150),
    email varchar(50),
    telefono Varchar(15),
    fotoperfin VARCHAR(15),
    usuario VARCHAR(50),
    contra VARCHAR(50),
    color VARCHAR(15),
    fondo VARCHAR(15)
);

CREATE TABLE actividades(
	correlativo INT(11) PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(200),
    fechaInicio DATE,
    fechaFin DATE,
    descripcion TEXT,
    porcentaje int (11),
    tipo VARCHAR(1),
    usuario INT(11)
);

ALTER TABLE actividades
ADD CONSTRAINT FK_USUARIO FOREIGN KEY (usuario) REFERENCES usuario(idUsuario);

select *from actividades;
INSERT INTO usuario (idusuario,Nombre,Apellido,profesion,direccion,email,telefono,fotoperfin,usuario,contra,color,fondo) 
VALUES(NULL,'Andy','Perez','FROTED DEVELOPER','Guatemala, Ciudad','pandysteven@gmail.com','22209812','simpsons3.jpg','andy98','abril1998','negro','animado');

/*TWORK EXPERIENCES*/
INSERT INTO actividades (correlativo,titulo,fechaInicio,fechaFin,descripcion,porcentaje,tipo,usuario)
VALUES(NULL,'BOSCO 23','2018-09-25','2019-05-15','Trabajando como personal de mantenimiento',NULL,'t','1');
INSERT INTO actividades (correlativo,titulo,fechaInicio,fechaFin,descripcion,porcentaje,tipo,usuario)
VALUES(NULL,'ELEVATEC','2019-05-20','RECIENTEMENT','Trabajando soporte tecnico y tecnico de elevadores',NULL,'t','1');

/*EDUCATION*/
INSERT INTO actividades (correlativo,titulo,fechaInicio,fechaFin,descripcion,porcentaje,tipo,usuario)
VALUES(NULL,'CURSO DE MYSQL PRINCIPIANTES','2019-09-29','2019-12-22','Implementacion de conceptos basicos de DB y relaiones con JOINS',NULL,'e','1');
INSERT INTO actividades (correlativo,titulo,fechaInicio,fechaFin,descripcion,porcentaje,tipo,usuario)
VALUES(NULL,'Cursos de Ingles','2017-01-25','2017-08-29','Cursos de ingles intermedio en la acdemia de ATS Z4',NULL,'e','1');

/*SKILL*/
INSERT INTO actividades (correlativo,titulo,fechaInicio,fechaFin,descripcion,porcentaje,tipo,usuario)
VALUES(NULL,'HTML5',NULL,NULL,NULL,80,'s','1');
INSERT INTO actividades (correlativo,titulo,fechaInicio,fechaFin,descripcion,porcentaje,tipo,usuario)
VALUES(NULL,'CSS',NULL,NULL,NULL,60,'s','1');
INSERT INTO actividades (correlativo,titulo,fechaInicio,fechaFin,descripcion,porcentaje,tipo,usuario)
VALUES(NULL,'Java Script',NULL,NULL,NULL,40,'s','1');
INSERT INTO actividades (correlativo,titulo,fechaInicio,fechaFin,descripcion,porcentaje,tipo,usuario)
VALUES(NULL,'PHP',NULL,NULL,NULL,40,'s','1');

/*Languages*/
INSERT INTO actividades (correlativo,titulo,fechaInicio,fechaFin,descripcion,porcentaje,tipo,usuario)
VALUES(NULL,'Spanish',NULL,NULL,NULL,100,'l','1');
INSERT INTO actividades (correlativo,titulo,fechaInicio,fechaFin,descripcion,porcentaje,tipo,usuario)
VALUES(NULL,'English',NULL,NULL,NULL,50,'l','1');

SELECT *FROM actividades WHERE tipo = 's';