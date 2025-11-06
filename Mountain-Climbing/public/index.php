<?php
    include_once __DIR__ . "/../includes/header.php";
?>
        <div class="container mt-5">
            <div class="card shadow-lg border-0" style="max-width: 500px; margin: auto;">
                <div class="card-body p-4">
                <h3 class="card-title text-center mb-4 text-success">Registro de Usuario</h3>

                <form action="register.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="usernameInput" name="usernameInput" placeholder="Nombre de usuario">
                        <label for="usernameInput">Nombre de Usuario</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="emailInput" name="emailInput" placeholder="Correo electrónico">
                        <label for="emailInput">Correo Electrónico</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="passwordInput" name="passwordInput" placeholder="Contraseña">
                        <label for="passwordInput">Contraseña</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirma tu contraseña">
                        <label for="confirmPassword">Confirmar Contraseña</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-block mb-2">Nivel de experiencia</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nivel" id="beginner" value="beginner">
                            <label class="form-check-label" for="beginner">Principiante</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nivel" id="amateur" value="amateur">
                            <label class="form-check-label" for="amateur">Intermedio</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nivel" id="expert" value="expert">
                            <label class="form-check-label" for="expert">Avanzado</label>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label d-block mb-2">Especialización</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="especializacion[]" id="rutas" value="rutas">
                            <label class="form-check-label" for="rutas">Rutas</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="especializacion[]" id="ferratas" value="rutas">
                            <label class="form-check-label" for="ferratas">Ferratas</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="especializacion[]" id="escalada" value="rutas">
                            <label class="form-check-label" for="escalada">Escalada</label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="provincia" class="form-label">Provincia</label>
                        <select class="form-select" id="provincia" name="provincia">
                            <option value="" selected disabled>Selecciona una provincia</option>
                            <option value="huesca">Huesca</option>
                            <option value="zaragoza">Zaragoza</option>
                            <option value="teruel">Teruel</option>
                        </select>
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