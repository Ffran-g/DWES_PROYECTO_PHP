<?php
include_once __DIR__ . '/../../includes/header.php';
require_once __DIR__ . '/../../config/config.php';

$rutas = $_SESSION['rutas'] ?? [];
$rutasUser = array_filter($rutas, fn($r) =>
    isset($r['user']) && $r['user'] == $_SESSION['user']['username']
);
?>

<div class="container py-5">
    <button type="button" class="btn btn-sunrise" onclick="window.location.href='create.php'">Crear Ruta</button>
    <h3 class="mb-4 text-center">Listado de rutas creadas</h3>
    <div class="row">
        <?php if (!empty($rutasUser)): ?>
            <?php foreach($rutasUser as $index => $ruta): ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <?php if (!empty($ruta['imagenes'])): ?>
                            <img src="<?= BASE_URL ?>/uploads/photos/<?= $ruta['imagenes'][0] ?>" class="card-img-top" alt="Miniatura de <?= htmlspecialchars($ruta['nombreRuta']) ?>">
                        <?php else: ?>
                            <img src="<?= BASE_URL ?>/assets/img/logo.png" class="card-img-top" alt="Sin imagen">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($ruta['nombreRuta']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($ruta['descripcion']) ?></p>
                            <button type="button" class="btn btn-sunrise" onclick="#">Detalles</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href='delete.php?id=<?= $index ?>'">Eliminar</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay rutas registradas.</p>
        <?php endif; ?>
    </div>
</div>

<?php include_once __DIR__ . '/../../includes/footer.php'; ?>
