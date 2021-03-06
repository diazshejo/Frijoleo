CREATE TABLE IF NOT EXISTS pais(
    pais SMALLINT(5) UNSIGNED AUTO_INCREMENT COMMENT 'PK DE LA TABLA QUE IDENTIFICA EL REGISTRO',
    nacionalidad VARCHAR(255) COMMENT 'NACIONALIDAD DEL PAIS',
    nombre VARCHAR(255) COMMENT 'NOMBRE DEL PAIS',
    activo ENUM('Y','N') DEFAULT 'Y' COMMENT 'ENUM QUE INDICA SI EL PAIS ESTA ACTIVO',
    add_user INT(10) UNSIGNED NOT NULL COMMENT 'FK DE LA PERSONA QUE INGRESO EL REGISTRO',
    add_fecha DATETIME NOT NULL COMMENT 'FECHA Y HORA EN LA QUE SE INSERTO EL REGISTRO',
    mod_user INT(10) UNSIGNED COMMENT 'FK DE LA ULTIMA PERSONA QUE MODIFICO EL REGISTRO',
    mod_fecha DATETIME UNSIGNED COMMENT 'FECHA Y HORA DE LA ULTIMA VEZ QUE SE MODIFICO EL REGISTRO',
    PRIMARY KEY (pais),
    CONSTRAINT pais_add_use_f FOREIGN KEY (add_user) REFERENCES persona(persona) ON DELETE ON UPDATE RESTRICT,
    CONSTRAINT pais_mod_use_f FOREIGN KEY (mod_user) REFERENCES persona(persona) ON DELETE ON UPDATE RESTRICT
);

CREATE TABLE IF NOT EXISTS idioma(
    idioma SMALLINT(3) UNSIGNED AUTO_INCREMENT COMMET 'PK DE LA TABLA QUE IDENTIFICA EL REGISTRO',
    codigo VARCHAR(5) NOT NULL COMMENT 'CODIGO QUE IDENTFICA EL IDIOMA',
    nombre VARCHAR(15) NOT NULL COMMENT 'NOMBRE QUE IDENTIFICA EL IDIOMA',
    add_user INT(10) UNSIGNED NOT NULL COMMENT 'FK DE LA PERSONA QUE INGRESO EL REGISTRO',
    add_fecha DATETIME NOT NULL COMMENT 'FECHA Y HORA EN LA QUE SE INSERTO EL REGISTRO',
    mod_user INT(10) UNSIGNED COMMENT 'FK DE LA ULTIMA PERSONA QUE MODIFICO EL REGISTRO',
    mod_fecha DATETIME UNSIGNED COMMENT 'FECHA Y HORA DE LA ULTIMA VEZ QUE SE MODIFICO EL REGISTRO',
    PRIMARY KEY (idioma),
    CONSTRAINT idioma_add_use_f FOREIGN KEY (add_user) REFERENCES persona(persona) ON DELETE ON UPDATE RESTRICT,
    CONSTRAINT idioma_mod_use_f FOREIGN KEY (mod_user) REFERENCES persona(persona) ON DELETE ON UPDATE RESTRICT
);

CREATE TABLE IF NOT EXISTS persona(
    persona INT(10) UNSIGNED AUTO_INCREMENT COMMENT 'PK DE LA TABLA QUE IDENTIFICA EL REGISTRO',
    imagen_persona_path TEXT COMMENT 'PATH DE LA IMAGEN DE LA PERSONA',
    nombre1 VARCHAR(30) COMMENT 'PRIMER NOMBRE DE LA PERSONA',
    nombre2 VARCHAR(30) COMMENT 'OTROS NOMBRES DE LA PERSONA',
    apellido1 VARCHAR(30) COMMENT 'PRIMER APELLIDO DE LA PERSONA',
    apellido2 VARCHAR(30) COMMENT 'OTROS APELLIDOS DE LA PERSONA',
    pais SMALLINT(5) UNSIGNED COMMENT 'FK PAIS A LA QUE PERTENECE LA PERSONA',
    fecha_nacimiento DATE COMMENT 'FECHA DE NACIMIENTO DE LA PERSONA',
    activo ENUM('Y','N') DEFAULT 'Y' COMMENT 'ENUM QUE INDICA SI LA PERSONA ESTA ACTIVA',
    elimnado ENUM('Y','N') DEFAULT 'N' COMMENT 'ENUM QUE INDICA SI LA PERSONA ESTA ELIMINADA',
    email TEXT COMMENT 'EMAIL DE LA PERSONA',
    add_user INT(10) UNSIGNED NOT NULL COMMENT 'FK DE LA PERSONA QUE INGRESO EL REGISTRO',
    add_fecha DATETIME NOT NULL COMMENT 'FECHA Y HORA EN LA QUE SE INSERTO EL REGISTRO',
    mod_user INT(10) UNSIGNED COMMENT 'FK DE LA ULTIMA PERSONA QUE MODIFICO EL REGISTRO',
    mod_fecha DATETIME UNSIGNED COMMENT 'FECHA Y HORA DE LA ULTIMA VEZ QUE SE MODIFICO EL REGISTRO',
    PRIMARY KEY (persona),
    CONSTRAINT persona_add_use_f FOREIGN KEY (add_user) REFERENCES persona(persona) ON DELETE RESTRICT ON UPDATE RESTRICT,
    CONSTRAINT persona_mod_use_f FOREIGN KEY (mod_user) REFERENCES persona(persona) ON DELETE RESTRICT ON UPDATE RESTRICT
) COMMENT 'TABLA QUE CONTIENE TODOS LOS DATOS DE LA PERSONA';

CREATE TABLE IF NOT EXISTS usuario(
    persona INT(10) UNSIGNED AUTO_INCREMENT COMMENT 'PK FK DE LA TABLA QUE IDENTIFICA EL REGISTRO',
    usuario VARCHAR(75) NOT NULL COMMENT 'USUARIO PARA ENTRAR AL SISTEMA',
    password VARCHAR(40) NOT NULL COMMENT 'PASSWORD DE INGRESO DEL USUARIO',
    ultimo_nivel TINYINT(1) DEFAULT 0 NOT NULL COMMENT 'ULTIMO NIVEL QUE EL USUARIO JUGO SERVIRA PARA SABER QUE NIVELES HA PASADO',
    idioma SMALLINT(3) NOT NULL COMMENT 'IDIOMA QUE EL USUARIO VA A UTILIZAR',
    multi_sesion ENUM('Y','N') DEFAULT 'N' COMMENT 'INDICA SI EL USUARIO PUEDE TENER MAS DE UNA SESION ACTIVA',
    bloqueado ENUM('Y','N') DEFAULT 'N' COMMENT 'INDICA SI EL USUARIO HA SIDO BOQUEADO',
    add_user INT(10) UNSIGNED NOT NULL COMMENT 'FK DE LA PERSONA QUE INGRESO EL REGISTRO',
    add_fecha DATETIME NOT NULL COMMENT 'FECHA Y HORA EN LA QUE SE INSERTO EL REGISTRO',
    mod_user INT(10) UNSIGNED COMMENT 'FK DE LA ULTIMA PERSONA QUE MODIFICO EL REGISTRO',
    mod_fecha DATETIME UNSIGNED COMMENT 'FECHA Y HORA DE LA ULTIMA VEZ QUE SE MODIFICO EL REGISTRO',
    PRIMARY KEY (persona),
    CONSTRAINT usuario_per_f FOREIGN KEY (persona) REFERENCES persona(persona) ON DELETE RESTRICT ON UPDATE RESTRICT,
    CONSTRAINT usuario_idi_f FOREIGN KEY (idioma) REFERENCES idioma(idioma) ON DELETE RESTRICT ON UPDATE RESTRICT,
    CONSTRAINT usuario_add_use_f FOREIGN KEY (add_user) REFERENCES persona(persona) ON DELETE RESTRICT ON UPDATE RESTRICT,
    CONSTRAINT usuario_mod_use_f FOREIGN KEY (mod_user) REFERENCES persona(persona) ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE IF NOT EXISTS nivel(
    nivel SMALLINT(5) UNSIGNED AUTO_INCREMENT COMMET 'PK DE LA TABLA QUE IDENTIFICA EL REGISTRO',
    nombre VARCHAR(255) NOT NULL COMMENT 'NOMBRE DEL NIVEL DE JUEGO',
    descripcion TEXT COMMENT 'DESCRIPCION DEL NIVEL DE JUEGO'
    add_user INT(10) UNSIGNED NOT NULL COMMENT 'FK DE LA PERSONA QUE INGRESO EL REGISTRO',
    add_fecha DATETIME NOT NULL COMMENT 'FECHA Y HORA EN LA QUE SE INSERTO EL REGISTRO',
    mod_user INT(10) UNSIGNED COMMENT 'FK DE LA ULTIMA PERSONA QUE MODIFICO EL REGISTRO',
    mod_fecha DATETIME UNSIGNED COMMENT 'FECHA Y HORA DE LA ULTIMA VEZ QUE SE MODIFICO EL REGISTRO',
    PRIMARY KEY (idioma),
    CONSTRAINT idioma_add_use_f FOREIGN KEY (add_user) REFERENCES persona(persona) ON DELETE ON UPDATE RESTRICT,
    CONSTRAINT idioma_mod_use_f FOREIGN KEY (mod_user) REFERENCES persona(persona) ON DELETE ON UPDATE RESTRICT
);
