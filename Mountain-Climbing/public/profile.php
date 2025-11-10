<?php
include_once __DIR__ . '/../includes/header.php';

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$user = $_SESSION['user'];
$foto = $user['foto'] ?? '../assets/img/img_perfil.jpg';

// Contar rutas creadas
$rutasCreadas = isset($_SESSION['rutas']) ? count($_SESSION['rutas']) : 0;
?>

<div class="container py-5">
    <h1 class="text-center mb-5 text-sunrise fw-bold">Perfil de Usuario</h1>

    <div class="card shadow-lg mx-auto" style="max-width: 600px;">
        <div class="card-body">

            <div class="mb-4">
                <img 
                    src="<?= htmlspecialchars($foto) ?>" 
                    alt="Foto de perfil" 
                    class="rounded-circle shadow d-block mx-auto"
                    style="width: 150px; height: 150px; object-fit: cover;"
                >
            </div>

            <h4 class="card-title text-center mb-4 text-indigo">Información Personal</h4>

            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <strong>Nombre:</strong> <?= htmlspecialchars($user['username']) ?>
                </li>
                <li class="list-group-item">
                    <strong>Correo electrónico:</strong> <?= htmlspecialchars($user['email']) ?>
                </li>
                <?php if (isset($user['level'])): ?>
                    <li class="list-group-item">
                        <strong>Nivel:</strong> <?= htmlspecialchars($user['level']) ?>
                    </li>
                <?php endif; ?>

                <?php if (!empty($user['disciplines'])): ?>
                    <li class="list-group-item">
                        <strong>Disciplinas:</strong> <?= htmlspecialchars(implode(', ', $user['disciplines'])) ?>
                    </li>
                <?php endif; ?>

                <?php if (isset($user['provincia'])): ?>
                    <li class="list-group-item">
                        <strong>Provincia:</strong> <?= htmlspecialchars($user['provincia']) ?>
                    </li>
                <?php endif; ?>

                <!-- Nueva línea para cantidad de rutas -->
                <li class="list-group-item">
                    <strong>Rutas creadas:</strong> <?= $rutasCreadas ?>
                    <button type="button" class="btn btn-sunrise" onclick="window.location.href='<?= BASE_URL ?>/public/routes/list.php'">Ver lista de rutas</button>
                </li>
            </ul>

            <div class="text-center">
                <a href="#" class="btn btn-sunrise me-2">Editar Perfil</a>
                <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
            </div>
            
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/../includes/footer.php';
?>
