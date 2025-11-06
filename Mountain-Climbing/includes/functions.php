<?php
/**
 * Funciones generales del proyecto
 *
 * Contiene utilidades para el registro y validación de usuarios.
 *
 * @package MountainClimbing
 * @version 1.0
 */

/**
 * Registra un nuevo usuario validando todos los campos.
 *
 * @param string $usuario Nombre del usuario.
 * @param string $email Correo electrónico del usuario.
 * @param string $contraseña Contraseña del usuario.
 * @param string $confirmarContraseña Confirmación de contraseña.
 * @param string $nivel Nivel de experiencia del usuario.
 * @param array $especializacion Áreas de especialización.
 * @param string $provincia Provincia seleccionada.
 *
 * @return array|string[] Devuelve un array con los datos del usuario o un array de errores.
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
            "contraseña" => password_hash($contraseña, PASSWORD_DEFAULT),
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

