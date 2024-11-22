<?php

require_once __DIR__ . '/../baseModel.php';

class CreateUser extends BaseModal
{
    public function create($name, $lastname, $email, $document, $password, $confirmPassword, $userProfile, $userState)
    {

        if (empty($name) || empty($lastname) || empty($email) || empty($document) || empty($password) || empty($confirmPassword) || empty($userProfile) || empty($userState)) {
            throw new Exception("Todos los campos son obligatorios");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("El correo electronico no es valido");
        }

        if ($password !== $confirmPassword) {
            throw new Exception("las contraseñas no coinciden");
        }

        try {
            $stmt = $this->connection->prepare("INSERT INTO users(user_name, user_lastname, user_password, user_email, user_document, user_profile, user_state) VALUES(:name, :lastname, :password, :email, :document, :userprofile, :userstate)");

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':document', $document);
            $stmt->bindParam('userprofile', $userProfile);
            $stmt->bindParam('userstate', $userState);

            $stmt->execute();

            return "Usuario creado correctamente";
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                throw new Exception("el correo electronico ya esta registrado");
            }
            throw new Exception("Error al crear el usuario: " . $e->getMessage());
        }
    }
}
