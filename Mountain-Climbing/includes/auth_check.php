<?php
require_once 'functions.php';
session_start();

// Importamos el array con los usuarios registrados
require_once '../public/register.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginInput = trim($_POST['usernameInput']); // puede ser nombre o email
    $password = $_POST['passwordInput'];

    $usuarioValido = null;

    // Buscar usuario por nombre de usuario o email
    foreach ($nuevoUsuario as $usuario) {
        if ($usuario['username'] === $loginInput || $usuario['email'] === $loginInput) {
            $usuarioValido = $usuario;
            break;
        }
    }

    // Verificar contraseña
    if ($usuarioValido && $usuarioValido['password'] === $password) {
        $_SESSION['user'] = [
            'username' => $usuarioValido['username'],
            'email' => $usuarioValido['email']
        ];

        header("Location: ../public/profile.php");
        exit;
    } else {
        echo "<p style='color:red;'>Credenciales incorrectas. Intenta de nuevo.</p>";
    }
}
?>
