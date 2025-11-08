<?php
include_once __DIR__ . '/../includes/header.php';

// Inicializar array de usuarios si no existe
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

// Variable para mensaje
$message = '';

// Comprobamos si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recogemos los datos del formulario
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $confirmPassword = trim($_POST['confirmPassword'] ?? '');
    $level = $_POST['level'] ?? '';
    $disciplines = $_POST['disciplines'] ?? [];
    $provincia = $_POST['provincia'] ?? '';

    // Validación básica
    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword) || empty($level) || empty($provincia)) {
        $message = '<div class="alert alert-danger mt-3">Por favor, completa todos los campos obligatorios.</div>';
    } 
    
    // Comprobar contraseñas
    if ($password !== $confirmPassword){
        $message = '<div class="alert alert-danger mt-3">Las contraseñas no coinciden.</div>';
    }else {
        // Comprobamos si ya existe el usuario o el email
        $exists = false;
        foreach ($_SESSION['users'] as $user) {
            if ($user['email'] === $email || $user['username'] === $username) {
                $exists = true;
                break;
            }
        }

        if ($exists) {
            $message = '<div class="alert alert-warning mt-3">El usuario o el correo ya están registrados.</div>';
        } else {
            // Guardamos el nuevo usuario en el array
            $_SESSION['users'][] = [
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'level' => $level,
                'disciplines' => $disciplines,
                'provincia' => $provincia
            ];

            $message = '<div class="alert alert-success mt-3">¡Registro exitoso! Ya puedes iniciar sesión.</div>';
            header('Location: login.php');
            exit();
        }
    }
}
?>

<div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
        <div class="card-body">
            <h3 class="text-center mb-4 text-indigo">Registrate con nosotros</h3>

            <form method="POST">
                <div class="mb-3">
                    <label for="newUserInput" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" id="newUserInput" name="username" placeholder="Fran Garcia">
                </div>

                <div class="mb-3">
                    <label for="newEmailInput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="newEmailInput" aria-describedby="newEmailInputHelp" name="email" placeholder="nombre@ejemplo.com">
                    <div id="newEmailInputHelp" class="form-text">Nunca compartiremos tu correo con nadie.</div>
                </div>

                <div class="mb-3">
                    <label for="newPasswdInput" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="newPasswdInput" name="password" placeholder="••••••••">
                </div>

                <div class="mb-3">
                    <label for="confirmPasswdInput" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="confirmPasswdInput" name="confirmPassword" placeholder="••••••••">
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">Nivel</label>
                    <select class="form-select" id="level" name="level">
                        <option value="" selected disabled>Selecciona tu nivel</option>
                        <option value="Principiante">Principiante</option>
                        <option value="Amateur">Amateur</option>
                        <option value="Intermedio">Intermedio</option>
                        <option value="Experto">Experto</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Disciplinas</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="disciplines[]" value="ferratas" id="ferratas">
                        <label class="form-check-label" for="Ferratas">Ferratas</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="disciplines[]" value="escalada" id="escalada">
                        <label class="form-check-label" for="Escalada">Escalada</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="disciplines[]" value="rutas" id="rutas">
                        <label class="form-check-label" for="Rutas">Rutas</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="provincia" class="form-label">Provincia</label>
                    <select class="form-select" id="provincia" name="provincia">
                        <option value="" selected disabled>Selecciona tu provincia</option>
                        <option value="Huesca">Huesca</option>
                        <option value="Zaragoza">Zaragoza</option>
                        <option value="Teruel">Teruel</option>
                    </select>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-sunrise btn-lg">Registrarme</button>
                </div>
            </form>
            <?= $message ?>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/../includes/footer.php';
?>