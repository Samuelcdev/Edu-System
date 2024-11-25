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
            $confirmPassword = $_POST['confirm_password'];
            $userProfile = $_POST['user_profile'];
            $userState = $_POST['user_state'];

            try {
                $registerModel = new AuthModel();
                $message = $registerModel->createUser($name, $lastname, $password, $email, $document, $confirmPassword, $userProfile, $userState);
                echo "<script>alert('$message');
                    window.location.href = '/index.php?controller=auth&action=showLogin';
                </script>";
                exit;
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

    public function login() {}

    public function showRegister()
    {
        $data = [
            'title' => 'Registrarse',
        ];

        renderView('auth/registerView', $data);
    }

    public function showLogin()
    {
        $data = [
            'title' => 'Iniciar Sesion',
        ];

        renderView('auth/loginView', $data);
    }
}

if (isset($_GET['action'])) {
    $controller = new AuthController();
    $action = $_GET['action'];

    switch ($action) {
        case 'register':
            $controller->register();
            break;
        case 'showLogin':
            $controller->showLogin();
            break;
        case 'showRegister':
            $controller->showRegister();
            break;
        default:
            echo "Acción no válida";
    }
}
