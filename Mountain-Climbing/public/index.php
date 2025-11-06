<?php
    session_start();
    include_once __DIR__ . "/../includes/header.php";
?>

<div class="container mt-5">
    <div class="card shadow-lg border-0" style="max-width: 500px; margin: auto;">
        <div class="card-body p-4">
            <h3 class="card-title text-center mb-4 text-success">Registro de Usuario</h3>

            <!-- Formulario de registro -->
            <form action="register.php" method="POST">

                <!-- Usuario -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="usernameInput" name="usernameInput" placeholder="Nombre de usuario" required>
                    <label for="usernameInput">Nombre de Usuario</label>
                </div>

                <!-- Email -->
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="emailInput" name="emailInput" placeholder="Correo electrónico" required>
                    <label for="emailInput">Correo Electrónico</label>
                </div>

                <!-- Contraseña -->
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="passwordInput" name="passwordInput" placeholder="Contraseña" required>
                    <label for="passwordInput">Contraseña</label>
                </div>

                <!-- Confirmar Contraseña -->
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirma tu contraseña" required>
                    <label for="confirmPassword">Confirmar Contraseña</label>
                </div>

                <!-- Nivel de experiencia -->
                <div class="mb-3">
                    <label class="form-label d-block mb-2">Nivel de experiencia</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="nivel" id="beginner" value="Principiante">
                        <label class="form-check-label" for="beginner">Principiante</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="nivel" id="amateur" value="Intermedio">
                        <label class="form-check-label" for="amateur">Intermedio</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="nivel" id="expert" value="Avanzado">
                        <label class="form-check-label" for="expert">Avanzado</label>
                    </div>
                </div>

                <!-- Especialización -->
                <div class="mb-3">
                    <label class="form-label d-block mb-2">Especialización</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="especializacion[]" id="rutas" value="Rutas">
                        <label class="form-check-label" for="rutas">Rutas</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="especializacion[]" id="ferratas" value="Ferratas">
                        <label class="form-check-label" for="ferratas">Ferratas</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="especializacion[]" id="escalada" value="Escalada">
                        <label class="form-check-label" for="escalada">Escalada</label>
                    </div>
                </div>

                <!-- Provincia -->
                <div class="mb-4">
                    <label for="provincia" class="form-label">Provincia</label>
                    <select class="form-select" id="provincia" name="provincia" required>
                        <option value="" selected disabled>Selecciona una provincia</option>
                        <option value="Huesca">Huesca</option>
                        <option value="Zaragoza">Zaragoza</option>
                        <option value="Teruel">Teruel</option>
                    </select>
                </div>

                <!-- Botón de envío -->
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
