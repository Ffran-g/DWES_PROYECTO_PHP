<?php
    session_start();
    include_once __DIR__ . "/../includes/header.php";
?>
<div class="container mt-5">
            <div class="card shadow-lg border-0" style="max-width: 500px; margin: auto;">
                <div class="card-body p-4">
                <h3 class="card-title text-center mb-4 text-success">Iniciar Sesion</h3>

                <form action="../includes/auth_check.php" method="POST"> 
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="loginInput" name="loginInput" placeholder="Nombre de usuario o Email" required>
                        <label for="loginInput">Nombre de Usuario / Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="passwordInput" name="passwordInput" placeholder="Contraseña" required>
                        <label for="passwordInput">Contraseña</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg">Aceptar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>


<?php
    include_once __DIR__ . "/../includes/footer.php";
?>