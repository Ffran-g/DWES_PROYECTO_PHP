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

            header('Location: ../public/index.php');
            exit();
        }
    }

    // Si no se encontró usuario
    if (!$user_found) {
        $_SESSION['login_error'] = 'Nombre de usuario o correo, o contraseña incorrectos.';
        header('Location: ../public/login.php');
        exit();
    }
}
?>