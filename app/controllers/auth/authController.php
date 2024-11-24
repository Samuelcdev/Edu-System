<?php

require_once __DIR__ . '/../../models/auth/authModel.php';

class AuthController
{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['user_name'];
            $lastname = $_POST['user_lastname'];
            $password = $_POST['user_password'];
            $email = $_POST['user_email'];
            $document = $_POST['user_document'];
            $confirmPassword = $_POST['confirmPassword'];
            $userProfile = $_POST['user_profile'];
            $userState = $_POST['user_state'];

            try {
                $registerModel = new AuthModel();
                $message = $registerModel->createUser($name, $lastname, $password, $email, $document, $confirmPassword, $userProfile, $userState);
                echo "<script>
                    alert('$message')
                 </script>";
            } catch (Exception $e) {
                $errorMessage = $e->getMessage();
                echo "<script>
                    alert('$errorMessage');
                    history.back();
                 </script>";
            }
        } else {
            $this->renderView('auth/registerView', 'Registrarse');
        }
    }

    public function showRegister(){
        $data = [
            'title' => 'Registrarse',
        ];

        renderView('auth/registerView', $data);
    }
}
