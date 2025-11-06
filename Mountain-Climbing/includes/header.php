<?php
// Iniciar sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Comprobamos si el usuario está autenticado
$usuarioLogueado = $_SESSION['usuario'] ?? null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mountain Climbing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-success">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" aria-hidden="true">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Mountain Climbing</span>
            </a>

            <?php if ($usuarioLogueado): ?>
                <!-- Navegación visible solo si el usuario está autenticado -->
                <ul class="nav nav-pills align-items-center">
                    <li class="nav-item"><a href="profile.php" class="nav-link text-white">Perfil</a></li>
                    <li class="nav-item"><a href="climbing/list.php" class="nav-link text-white">Escalada</a></li>
                    <li class="nav-item"><a href="ferratas/list.php" class="nav-link text-white">Ferratas</a></li>
                    <li class="nav-item"><a href="routes/list.php" class="nav-link text-white">Rutas</a></li>
                    <li class="nav-item"><a href="photos/list.php" class="nav-link text-white">Fotos</a></li>
                    <li class="nav-item">
                        <a href="logout.php" class="btn btn-secondary btn-sm ms-3">Cerrar sesión</a>
                    </li>
                </ul>
            <?php else: ?>
                <!-- Si no hay sesión activa, mostramos opciones de registro o login -->
                <ul class="nav nav-pills align-items-center">
                    <li class="nav-item"><a href="index.php" class="nav-link text-white">Registro</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link text-white">Iniciar Sesión</a></li>
                </ul>
            <?php endif; ?>
        </header>
    </div>

    <main>
