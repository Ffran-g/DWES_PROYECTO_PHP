<?php
/**
 *  Añadir documentación
 */
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
        $nuevoUsuario = [
            "usuario" => $usuario,
            "email" => $email,
            "contraseña" => $contraseña,
            "nivel" => $nivel,
            "especializacion" => $especializacion,
            "provincia" => $provincia
        ];
        return $nuevoUsuario;
    } else {
        return $errores;
    }
}
?>

