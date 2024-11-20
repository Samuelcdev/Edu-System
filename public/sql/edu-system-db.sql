--Eliminar base de datos si existe
DROP DATABASE IF EXISTS `edu-system`;

--Creacion de la base de datos
CREATE DATABASE `edu-system`;
USE `edu-system`;

--Eliminar tablas si existen
DROP TABLE IF EXISTS `students`, `subjects`, `users`;

--Creacion tabla estudiantes
CREATE TABLE students(
    student_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY
    student_name VARCHAR(255) NOT NULL,
    student_lastname VARCHAR(255) NOT NULL,
    student_document VARCHAR(12) NOT NULL,
    student_email VARCHAR(255) NOT NULL,
    student_subject VARCHAR(255) NOT NULL,
    student_teacher VARCHAR(255) NOT NULL,
    student_average INT(3) NOT NULL,
    student_date DATE NOT NULL
);

--Creacion tabla materias
CREATE TABLE subjects(
    subject_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    subjet_name VARCHAR(255) NOT NULL
);

--Creacion tabla usuarios
CREATE TABLE users(
    user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255) NOT NULL,
    user_lastname VARCHAR(255) NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    user_profile VARCHAR(40) NOT NULL,
    user_state VARCHAR(20) NOT NULL,
);