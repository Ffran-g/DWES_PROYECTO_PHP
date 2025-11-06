<?php
require_once 'functions.php';
session_start();
$nuevoUsuario = $_SESSION['nuevoUsuario'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginInput = trim($_POST['loginInput']); // puede ser nombre o email
    $password = $_POST['passwordInput'];

    $usuarioValido = null;

    // Buscar usuario por nombre de usuario o email
    if (!empty($_SESSION['usuarios'])) {
        foreach ($_SESSION['usuarios'] as $usuario) {
            if ($usuario['usuario'] === $loginInput || $usuario['email'] === $loginInput) {
                $usuarioValido = $usuario;
                break;
            }
        }
    }

    // Verificar contraseña
    if ($usuarioValido && password_verify($password, $usuarioValido['contraseña'])) {
        $_SESSION['user'] = $usuarioValido;

        header("Location: ../public/profile.php");
        exit;
    } else {
        echo "<p style='color:red;'>Credenciales incorrectas. Intenta de nuevo.</p>";
    }
}
?>
