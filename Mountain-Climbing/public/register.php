<?php
/**
 * Registro de nuevos usuarios
 *
 * Este script procesa los datos enviados desde el formulario de registro,
 * valida la información, crea un nuevo usuario y lo almacena en la sesión.
 * Luego redirige a la página de login.
 *
 * @package MountainClimbing
 * @version 1.0
 */

session_start();
// Descomenta esta línea SOLO si quieres vaciar todos los usuarios temporalmente
// unset($_SESSION['usuarios']);

require_once "../includes/functions.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nuevoUsuario = registrarUsuario(
        $_POST['usernameInput'] ?? '',
        $_POST['emailInput'] ?? '',
        $_POST['passwordInput'] ?? '',
        $_POST['confirmPassword'] ?? '',
        $_POST['nivel'] ?? '',
        $_POST['especializacion'] ?? [],
        $_POST['provincia'] ?? ''
    );

    // Si hay errores de validación
    if (isset($nuevoUsuario[0]) && is_string($nuevoUsuario[0])) {
        echo "Errores encontrados:<br>";
        print_r($nuevoUsuario);
    } else {
        // Inicializar el array de usuarios si no existe
        if (!isset($_SESSION['usuarios'])) {
            $_SESSION['usuarios'] = [];
        }

        // 🔹 Comprobar si ya existe un usuario con el mismo email
        $existe = false;
        foreach ($_SESSION['usuarios'] as $u) {
            if ($u['email'] === $nuevoUsuario['email']) {
                $existe = true;
                break;
            }
        }

        // 🔹 Si no existe, guardarlo
        if (!$existe) {
            // Guardar también el usuario actual
            $_SESSION['nuevoUsuario'] = $nuevoUsuario;
            $_SESSION['usuarios'][] = $nuevoUsuario;

            header("Location: login.php?registro=ok");
            exit;
        } else {
            echo "<p style='color:red;'>Ya existe un usuario con ese correo electrónico.</p>";
        }
    }
}
?>
