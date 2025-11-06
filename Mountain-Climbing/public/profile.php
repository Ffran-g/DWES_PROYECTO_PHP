<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION['user'];
include_once __DIR__ . "/../includes/header.php";
?>

<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4" style="max-width: 600px; margin: auto;">
        <div class="card-body text-center p-5">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" 
                 alt="avatar" 
                 class="rounded-circle mb-3" 
                 width="120" height="120">
            
            <h2 class="card-title text-success mb-2"><?= htmlspecialchars($user['usuario']); ?></h2>
            <p class="text-muted mb-4"><?= htmlspecialchars($user['email']); ?></p>

            <hr class="my-4">

            <h5 class="text-secondary mb-3">Detalles del perfil</h5>
            <ul class="list-group list-group-flush text-start mb-4">
                <li class="list-group-item"><strong>Nivel:</strong> <?= htmlspecialchars($user['nivel'] ?? 'No especificado'); ?></li>
                <li class="list-group-item"><strong>Especialización:</strong> <?= htmlspecialchars(implode(", ", $user['especializacion'] ?? [])); ?></li>
                <li class="list-group-item"><strong>Provincia:</strong> <?= htmlspecialchars($user['provincia'] ?? 'No especificada'); ?></li>
            </ul>

            <a href="logout.php" class="btn btn-outline-danger btn-lg w-100 mt-3">Cerrar sesión</a>
        </div>
    </div>
</div>

<?php include_once __DIR__ . "/../includes/footer.php"; ?>
