<?php
session_start();
//echo "<pre>";
//var_dump($_SESSION['users']);
//echo "</pre>";
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
$foto = $_SESSION['user']['foto'] ?? BASE_URL . '/assets/img/img_perfil.jpg';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= BASE_URL ?>/assets/img/Logo.png">
    <title>Mountain Climbing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>
<body>
    <header class="p-3 text-bg-custom"> 
        <div class="container"> 
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"> 
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"> 
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg> 
                </a> 
                <img src="<?= BASE_URL ?>/assets/img/Logo.png" alt="Logo de la página" width="80">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"> 
                    <?php if (isUserLoggedIn()): ?>
                        <!-- Header con sesión iniciada -->
                        <li><a href="<?= BASE_URL ?>/public/index.php" class="nav-link px-2 text-warning">Mountain Climbing</a></li>
                        <li><a href="<?= BASE_URL ?>/public/routes/list.php" class="nav-link px-2 text-white">Rutas</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Ferratas</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Escalada</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Galería</a></li>
                    <?php else: ?>
                        <!-- Header sin sesión -->
                        <li><a href="../public/index.php" class="nav-link px-2 text-warning">Mountain Climbing</a></li>
                    <?php endif; ?>
                </ul> 

                <div class="text-end">
                    <?php if (isUserLoggedIn()): ?>
                        <span class="me-3">
                            <a href="<?= BASE_URL ?>/public/profile.php" class="text-warning text-decoration-none">
                                <img src="<?= htmlspecialchars($foto) ?>" alt="Foto de perfil" class="rounded-circle me-2" style="width: 35px; height: 35px; object-fit: cover;">
                                <?php echo htmlspecialchars($_SESSION['user']['username']); ?>
                            </a>
                        </span>
                        <button type="button" class="btn btn-sunrise btn-outline-light" onclick="window.location.href='<?= BASE_URL ?>/public/logout.php'">Cerrar sesión</button>
                    <?php else: ?>
                        <button type="button" class="btn btn-outline-light me-2" onclick="window.location.href='../public/login.php'">Login</button>
                        <button type="button" class="btn btn-sunrise" onclick="window.location.href='../public/register.php'">Sign-up</button>
                    <?php endif; ?>
                </div> 
            </div> 
        </div> 
    </header>
    <main>