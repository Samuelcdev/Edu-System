<?php
require_once __DIR__ . "../../../models/auth/registerModel.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    handleCreateUser();
}


function handleCreateUser()
{
    $name = $_POST['user_name'];
    $lastname = $_POST['user_lastname'];
    $email = $_POST['user_email'];
    $document = $_POST['user_document'];
    $password = $_POST['user_password'];
    $confirmPassword = $_POST['confirm_password'];
    $profile = $_POST['user_profile'];
    $state = $_POST['user_state'];

    try {
        $userModel = new CreateUser();
        $message = $userModel->create($name, $lastname, $email, $document, $password, $confirmPassword, $profile, $state);

        echo "<script>
                alert('Usuario creado con éxito');
              </script>";
    } catch (Exception $e) {
        echo "<script>
                alert('El usuario no se pudo crear. Por favor, verifique.');
              </script>";
    }
}



//Funcion para renderizar el registro
function showRegister()
{
    $title = "Registrarse";

    $viewFile = './app/views/auth/registerView.php';

    if (file_exists($viewFile)) {
        ob_start();
        require_once $viewFile;
        $content = ob_get_clean();

        require_once './app/views/layouts/guest-layout.php';
    } else {
        die("Error: no se encontro la vista");
    }
}
