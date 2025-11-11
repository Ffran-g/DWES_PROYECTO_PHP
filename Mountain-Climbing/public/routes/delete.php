<?php
session_start();

$id = $_GET['id'] ?? null;

if ($id !== null && isset($_SESSION['rutas'][$id])) {
    $ruta = $_SESSION['rutas'][$id];

    // Verificar que la ruta pertenece al usuario actual
    if ($ruta['user'] === $_SESSION['user']['username']) {
        unset($_SESSION['rutas'][$id]);
        $_SESSION['rutas'] = array_values($_SESSION['rutas']); // Reindexar array
        $_SESSION['message'] = '<div class="alert alert-success mt-3">Ruta eliminada correctamente.</div>';
    } else {
        $_SESSION['message'] = '<div class="alert alert-danger mt-3">No puedes eliminar rutas de otro usuario.</div>';
    }
} else {
    $_SESSION['message'] = '<div class="alert alert-danger mt-3">Ruta no encontrada.</div>';
}

header('Location: list.php');
exit();
