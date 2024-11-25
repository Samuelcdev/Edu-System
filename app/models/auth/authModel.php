<?php

require_once __DIR__ . '/../baseModel.php';

class AuthModel extends BaseModal
{
    public function createUser($name, $lastname, $passowrd, $email, $document, $confirmPassword, $userProfile, $userState)
    {
        if (empty($name) || empty($lastname) || empty($email) || empty($document) || empty($passowrd) || empty($confirmPassword) || empty($userProfile) || empty($userState)) {
            throw new Exception("Todos los campos son obligatorios");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("El correo electronico no es valido");
        }

        if ($passowrd !== $confirmPassword) {
            throw new Exception("Las contraseñanas no coinciden");
        }

        $hashedPassword = password_hash($passowrd, PASSWORD_DEFAULT);

        try {
            $stmt = $this->connection->prepare("INSERT INTO users(user_name, user_lastname, user_password, user_email, user_document, user_profile, user_state) VALUES (:name, :lastname, :password, :email, :document, :profile, :state)");

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':document', $document);
            $stmt->bindParam(':profile', $userProfile);
            $stmt->bindParam(':state', $userState);

            $stmt->execute();

            return "Usuario creado correctamente";
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                throw new Exception("El correo electronico ya esta en uso");
            }
            throw new Exception("Error al crear el usuario: " . $e->getMessage());
        }
    }
}
