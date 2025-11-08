<?php
session_start();
// Comprobamos si se envió el formulario de login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login_input = trim($_POST['login'] ?? ''); // El input puede ser nombre o correo
    $password = trim($_POST['password'] ?? '');

    $user_found = false;

    // Recorremos los usuarios para buscar coincidencia
    foreach ($_SESSION['users'] as $user) {
        if (($user['email'] === $login_input || $user['username'] === $login_input) 
            && password_verify($password, $user['password'])) {
            
            // Usuario correcto
            $_SESSION['logged_in'] = true;
            $_SESSION['user'] = $user; // Guardamos los datos del usuario en sesión
            $user_found = true;

            if (isset($_POST['remember'])) {
                // Guardar cookies que duren, por ejemplo, 7 días
                setcookie('remember_user', $_SESSION['user']['username'], 0, "/");
                setcookie('remember_email', $_SESSION['user']['email'], 0, "/");
            } else {
                // Si no marca la casilla, eliminamos cookies anteriores
                setcookie('remember_user', '', time() - 3600, "/");
                setcookie('remember_email', '', time() - 3600, "/");
            }


            header('Location: ../public/index.php');
            exit();
        }
    }

    if (!$user_found) {
        $_SESSION['login_error'] = "Usuario o contraseña incorrectos";
        header('Location: ../public/login.php');
        exit();
    }
}
?>