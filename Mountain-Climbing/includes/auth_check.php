<?php
session_start();

$loginInput = $_POST['loginInput'] ?? '';
$passwordInput = $_POST['passwordInput'] ?? '';

if (!isset($_SESSION['datosUsuario'])) {
    echo "⚠️ No hay usuarios registrados. Regístrate primero.";
    exit;
}

$usuario = $_SESSION['datosUsuario'];

// Comprobar usuario o email
if (
    ($usuario['usuario'] === $loginInput || $usuario['email'] === $loginInput)
    && $usuario['contraseña'] === $passwordInput
) {
    echo "Bienvenido, " . htmlspecialchars($usuario['usuario']) . "!";
} else {
    echo "Usuario o contraseña incorrectos.";
}
?>
