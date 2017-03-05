DROP SCHEMA IF EXISTS DAW206_JJRIDBDiwTrack;

CREATE DATABASE DAW206_JJRIDBDiwTrack DEFAULT COLLATE utf8_unicode_ci;
USE DAW206_JJRIDBDiwTrack;
CREATE TABLE IF NOT EXISTS usuario (
	username VARCHAR(15) COLLATE utf8_spanish_ci PRIMARY KEY,
    password VARCHAR(64) COLLATE utf8_spanish_ci,
	email VARCHAR(50) COLLATE utf8_spanish_ci UNIQUE,
	nombreApellidos VARCHAR(80) COLLATE utf8_spanish_ci,
	fechaNac VARCHAR(11) COLLATE utf8_spanish_ci,
	estatura INT(3),
	peso INT(3),
	sexo VARCHAR(1) COLLATE utf8_spanish_ci,

    /* El tipo de corredor lo define un numero entero */
	tipoCorredor int(1) COLLATE utf8_spanish_ci,

    /* Corredor de medio fondo*/
	cmf5km INT(5),
	cmf10km INT(5),
	cmfMediaMaraton INT(5),

    /* Corredor de fondo */
	cfMejorMarca INT(5),
	cfMejorMaraton INT(5),

    /* Corredor de trail */
	ctNombre VARCHAR(50) COLLATE utf8_spanish_ci,
	cfDistancia INT(5),
	ctDesnivel INT(5),
	ctTiempo INT(5),
    /* Metas */
    metaCalorias INT(6),
    metaDistancia INT(3),

    /* Frecuencias cardiacas */

	freqMinima INT(3),
    freqSencillo INT(3),
    freqCardio  INT(3),
    freqFitness  INT(3),
    freqVelocidad INT(3),
    freqSprint INT(3),
	foto varchar(20)
)ENGINE=INNODB COLLATE utf8_unicode_ci;

/*
CREATE TABLE IF NOT EXISTS track(
	idTrack int AUTO_INCREMENT PRIMARY KEY,
	codUsuario VARCHAR(15) COLLATE utf8_spanish_ci,
	visibilidad BOOLEAN,
	nombre VARCHAR(100) COLLATE utf8_spanish_ci,
	comentario VARCHAR(255) COLLATE utf8_spanish_ci,
	fechaImportacion VARCHAR(11) COLLATE utf8_spanish_ci,
	fechaInicio VARCHAR(11) COLLATE utf8_spanish_ci,
	FOREIGN KEY (codUsuario) REFERENCES usuario(codUsuario) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=INNODB COLLATE utf8_unicode_ci;
CREATE TABLE IF NOT EXISTS trackpoint(
	idTrackpoint int AUTO_INCREMENT PRIMARY KEY,
	idTrack INT(255),
	latitud FLOAT,
	longitud FLOAT,
	tiempo INT(20),
	heartRateBPM INT(3),
	elevacion FLOAT,
	numSatelites INT(2),
	velocidad FLOAT,
	calorias FLOAT,
	FOREIGN KEY (idTrack) REFERENCES track(idTrack) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=INNODB COLLATE utf8_unicode_ci;
*/
