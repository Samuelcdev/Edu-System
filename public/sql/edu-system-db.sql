-- Eliminar base de datos si existe
DROP DATABASE IF EXISTS `edu-system`;

-- Creacion de la base de datos
CREATE DATABASE `edu-system`;
USE `edu-system`;

-- Eliminar tablas si existen
DROP TABLE IF EXISTS `students`, `subjects`, `teachers`, `users`;

-- Creacion tabla materias
CREATE TABLE subjects(
    subject_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    subject_name VARCHAR(255) NOT NULL,
    subject_final_note DECIMAL(5,2) NOT NULL
);

-- Creacion tabla usuarios
CREATE TABLE users(
    user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255) NOT NULL,
    user_lastname VARCHAR(255) NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    user_email VARCHAR(255) NOT NULL,
    user_document INT NOT NULL,
    user_profile ENUM('admin', 'teacher', 'student') NOT NULL,
    user_state ENUM('active', 'inactive') NOT NULL
);

-- Creacion tabla estudiantes
CREATE TABLE students(
    student_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100) NOT NULL,
    student_lastname VARCHAR(100) NOT NULL,
    student_document VARCHAR(10) NOT NULL,
    student_email VARCHAR(150) NOT NULL,
    student_subject VARCHAR(255) NOT NULL,
    student_teacher VARCHAR(255) NOT NULL,
    student_average DECIMAL(4,2) NOT NULL,
    student_date DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    subject_id INT NOT NULL,
    FOREIGN KEY (subject_id) REFERENCES subjects(subject_id) ON DELETE CASCADE
);

-- Creacion tabla de profesores
CREATE TABLE teachers(
    teacher_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    teacher_name VARCHAR(100) NOT NULL,
    teacher_lastname VARCHAR(100) NOT NULL,
    teacher_date DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    subject_id INT NOT NULL,
    FOREIGN KEY (subject_id) REFERENCES subjects(subject_id)
);
