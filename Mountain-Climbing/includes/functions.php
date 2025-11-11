<?php
/**
 * Valida si el email tiene un formato correcto.
 * @param string $email El email a validar.
 * @return bool True si el email es válido, false en caso contrario.
 */
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Verifica que la contraseña cumpla con los requisitos mínimos.
 * @param string $password La contraseña a validar.
 * @return bool True si la contraseña es válida, false en caso contrario.
 */
function isValidPassword($password) {
    return preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password);
}


/**
 * Verifica si una sesión de usuario está activa.
 * @return bool True si el usuario está logueado, false en caso contrario.
 */
function isUserLoggedIn() {
    return isset($_SESSION['user']);
}

