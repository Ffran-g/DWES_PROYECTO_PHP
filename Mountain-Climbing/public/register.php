<?php

$errores = [];

function registrarUsuario($usuario, $email, $contraseña, $confirmarContraseña, $nivel, $especializacion, $provincia){
    // Validaciones
    if (empty($usuario)) {
        $errores[] = "El campo usuario es obligatorio";
    }

    if (empty($email)) {
        $errores[] = "El campo email es obligatorio";
    }

    if (empty($contraseña)) {
        $errores[] = "El campo contraseña es obligatorio";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "Email no válido";
    }

    if ($contraseña !== $confirmarContraseña) {
        $errores[] = "Las contraseñas no coinciden";
    }

    if (strlen($contraseña) < 8) {
        $errores[] = "Contraseña no válida: demasiado corta";
    }

    // Si todo está correcto
    if (empty($errores)) {
        // Guardamos los datos en un array asociativo
        $usuarioData = [
            "usuario" => $usuario,
            "email" => $email,
            "contraseña" => $contraseña,
            "nivel" => $nivel,
            "especializacion" => $especializacionList,
            "provincia" => $provincia
        ];
    } 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $usuarioData = registrarUsuario(
        ($_POST['usernameInput']) ?? '',
        ($_POST['emailInput'])?? '',
        ($_POST['passwordInput'])?? '',
        ($_POST['confirmPassword'])?? '',
        ($_POST['nivel'])?? '',
        ($_POST['especializacion'])?? '',
        ($_POST['provincia'])?? '',
    )
}

?>
