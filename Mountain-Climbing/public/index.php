<?php
include_once __DIR__ . '/../includes/header.php';
?>

<div class="container py-5">
    <h1 class="text-center mb-5 text-sunrise fw-bold">Explora el Mundo Vertical</h1>
    <p class="text-center mb-5 fs-5 text-muted">
        Bienvenido a nuestra comunidad de aventureros. Aquí encontrarás toda la información, rutas y consejos sobre ferratas, escalada y senderismo.  
        ¡Prepárate para descubrir nuevas alturas y horizontes!
    </p>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Carta Ferratas -->
        <div class="col">
            <div class="card shadow-lg h-100 border-0">
                <div class="card-body">
                    <h5 class="card-title text-indigo text-center">Ferratas</h5>
                    <p class="card-text">
                        Las vías ferratas son rutas equipadas con cables, grapas y escaleras de acero que permiten ascender paredes rocosas con seguridad.  
                        Perfectas para quienes buscan una mezcla de adrenalina y paisaje.
                    </p>
                    <?php if (isset($_SESSION['user'])): ?>
                    <div class="d-flex justify-content-center gap-2 mt-4">
                        <button type="button" class="btn btn-sunrise" onclick="#">Lista de ferratas</button>
                        <button type="button" class="btn btn-sunrise" onclick="#">Crear ferrata</button>
                    </div>
                    <?php endif; ?> 
                </div>
            </div>
        </div>

        <!-- Carta Escalada -->
        <div class="col">
            <div class="card shadow-lg h-100 border-0">
                <div class="card-body">
                    <h5 class="card-title text-indigo text-center">Escalada</h5>
                    <p class="card-text">
                        La escalada deportiva es una disciplina que combina técnica, fuerza y concentración.  
                        Desde muros artificiales hasta rutas naturales, la escalada es una forma única de superarte física y mentalmente.
                    </p>
                    <?php if (isset($_SESSION['user'])): ?>
                    <div class="d-flex justify-content-center gap-2 mt-4">
                        <button type="button" class="btn btn-sunrise" onclick="#">Lista de escalada</button>
                        <button type="button" class="btn btn-sunrise" onclick="#">Crear escalada</button>
                    </div>
                    <?php endif; ?> 
                </div>
            </div>
        </div>

        <!-- Carta Rutas -->
        <div class="col">
            <div class="card shadow-lg h-100 border-0">
                <div class="card-body">
                    <h5 class="card-title text-indigo text-center">Rutas</h5>
                    <p class="card-text">
                        Las rutas de senderismo te conectan con la naturaleza a través de paisajes únicos.  
                        Descubre itinerarios adaptados a todos los niveles, desde paseos tranquilos hasta travesías exigentes.
                    </p>
                    <?php if (isset($_SESSION['user'])): ?>
                    <div class="d-flex justify-content-center gap-2 mt-4">
                        <button type="button" class="btn btn-sunrise" onclick="window.location.href='<?= BASE_URL ?>/public/routes/list.php'">Lista de rutas</button>
                        <button type="button" class="btn btn-sunrise" onclick="window.location.href='<?= BASE_URL ?>/public/routes/create.php'">Crear ruta</button>
                    </div>
                    <?php endif; ?>                
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/../includes/footer.php';
?>