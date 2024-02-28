CREATE DATABASE datos;
USE datos;
CREATE TABLE Registros (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(50),
    area VARCHAR(30),
    sexo VARCHAR(15),
    correo VARCHAR(50),
    PRIMARY KEY (id)
);
