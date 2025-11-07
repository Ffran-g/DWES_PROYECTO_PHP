<?php
include_once __DIR__ . '/../includes/header.php';

// Mostrar mensaje de error si existe
$login_error = $_SESSION['login_error'] ?? '';
unset($_SESSION['login_error']); // Limpiar mensaje después de mostrar
?>

<div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
        <div class="card-body">
            <h3 class="text-center mb-4 text-indigo">Iniciar sesión</h3>

            <form method="POST" action="../includes/auth_check.php">
                <div class="mb-3">
                    <label for="userInput" class="form-label">Usuario o Email</label>
                    <input type="text" class="form-control" id="userInput" name="login" placeholder="Usuario o Email">
                </div>

                <div class="mb-3">
                    <label for="passwordInput" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="passwordInput" name="password" placeholder="••••••••">
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Recuérdame</label>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-purple btn-lg">Entrar</button>
                    <p class="text-center mb-4 text-secundary">¿No tienes una cuenta con nosotros?<a href="register.php" class="text-indigo">REGISTRATE</a></p>
                </div>
            </form>
            <?= $login_error ?>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/../includes/footer.php';
?>