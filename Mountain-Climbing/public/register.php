<?php

session_start();
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

    if (isset($nuevoUsuario[0]) && is_string($nuevoUsuario[0])) {
        echo "Errores encontrados:<br>";
        print_r($nuevoUsuario);
    } else {
        $_SESSION['usuarios'][] = $nuevoUsuario;
        header("Location: login.php?registro=ok");
        exit;
    } 
        // var_dump($nuevoUsuario)
        
        //echo "<pre>";
        //if (isset($nuevoUsuario[0]) && is_string($nuevoUsuario[0])) {
        //    echo "Errores encontrados:\n";
        //    print_r($nuevoUsuario);
        //} else {
        //    echo "Datos guardados correctamente:\n";
        //    print_r($nuevoUsuario);
    
        //    $_SESSION['nuevoUsuario'] = $nuevoUsuario;
        //    echo "\nUsuario guardado en sesión correctamente.";
        //}
        //echo "</pre>";
    
}
?>
