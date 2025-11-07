<?php
include_once __DIR__ . '/../includes/header.php';
?>

<div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
        <div class="card-body">
            <h3 class="text-center mb-4 text-primary">Iniciar sesión</h3>

            <form method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario o Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nombre@ejemplo.com">
                    <div id="emailHelp" class="form-text">Nunca compartiremos tu correo con nadie.</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="••••••••">
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Recuérdame</label>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/../includes/footer.php';
?>
