<?php
function registrarUsuario($usuario, $email, $contraseña, $confirmarContraseña, $nivel, $especializacion, $provincia) {
    $errores = [];

    // Validaciones
    if (empty($usuario)) $errores[] = "El campo usuario es obligatorio";
    if (empty($email)) $errores[] = "El campo email es obligatorio";
    if (empty($contraseña)) $errores[] = "El campo contraseña es obligatorio";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errores[] = "Email no válido";
    if ($contraseña !== $confirmarContraseña) $errores[] = "Las contraseñas no coinciden";
    if (strlen($contraseña) < 8) $errores[] = "Contraseña demasiado corta";

    if (empty($errores)) {
        $datosNuevoUser = [
            "usuario" => $usuario,
            "email" => $email,
            "contraseña" => $contraseña,
            "nivel" => $nivel,
            "especializacion" => $especializacion,
            "provincia" => $provincia
        ];
        return $datosNuevoUser;
    } else {
        return $errores;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $datosUsuario = registrarUsuario(
        $_POST['usernameInput'] ?? '',
        $_POST['emailInput'] ?? '',
        $_POST['passwordInput'] ?? '',
        $_POST['confirmPassword'] ?? '',
        $_POST['nivel'] ?? '',
        $_POST['especializacion'] ?? [],
        $_POST['provincia'] ?? ''
    );

    // Mostrar datos
    echo "<pre>";
    if (isset($datosUsuario[0]) && is_string($datosUsuario[0])) {
        echo "Errores encontrados:\n";
        print_r($datosUsuario);
    } else {
        echo "Datos guardados correctamente:\n";
        print_r($datosUsuario);
    }
    echo "</pre>";
}
?>
