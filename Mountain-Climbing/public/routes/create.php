<?php
include_once __DIR__ . '/../../includes/header.php';
require_once __DIR__ . '/../../config/config.php';

// Inicializar array de rutas si no existe
if (!isset($_SESSION['rutas'])) {
    $_SESSION['rutas'] = [];
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger datos
    $nombreRuta = trim($_POST['nombreRuta'] ?? '');
    $dificultad = $_POST['dificultad'] ?? '';
    $distancia = trim($_POST['distancia'] ?? '');
    $desnivel = trim($_POST['desnivel'] ?? '');
    $duracion = trim($_POST['duracion'] ?? '');
    $provincia = $_POST['provincia'] ?? '';
    $epocas = $_POST['epoca'] ?? [];
    $descripcion = trim($_POST['descripcion'] ?? '');
    $nivelTecnico = $_POST['nivelTecnico'] ?? '';
    $nivelFisico = $_POST['nivelFisico'] ?? '';

    // Validación básica
    if (empty($nombreRuta) || empty($dificultad) || empty($distancia) || empty($desnivel) ||
        empty($duracion) || empty($provincia) || empty($nivelTecnico) || empty($nivelFisico)) {
        $message = '<div class="alert alert-danger mt-3">Por favor completa todos los campos obligatorios.</div>';
    } else {
        // Validar imágenes si se subieron
        $imagenes = [];
        if (!empty($_FILES['fotos']['name'][0])) {
            foreach ($_FILES['fotos']['name'] as $key => $name) {
                $tmpName = $_FILES['fotos']['tmp_name'][$key];
                $size = $_FILES['fotos']['size'][$key];
                $type = mime_content_type($tmpName);
                $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

                // Validación tipo de archivo
                if (!in_array($ext, ['jpg','jpeg','png'])) {
                    $message = '<div class="alert alert-danger mt-3">Solo se permiten archivos JPG, JPEG o PNG.</div>';
                    break;
                }

                // Validación tamaño
                if ($size > 2 * 1024 * 1024) {
                    $message = '<div class="alert alert-danger mt-3">Cada imagen no puede superar 2MB.</div>';
                    break;
                }

                // Renombrado seguro
                $nuevoNombre = uniqid('ruta_') . '.' . $ext;
                $destino = __DIR__ . '/../../uploads/photos/' . $nuevoNombre;

                if (move_uploaded_file($tmpName, $destino)) {
                    $imagenes[] = $nuevoNombre;
                }
            }
        }

        // Guardar ruta en sesión
        $_SESSION['rutas'][] = [
            'nombreRuta' => $nombreRuta,
            'dificultad' => $dificultad,
            'distancia' => $distancia,
            'desnivel' => $desnivel,
            'duracion' => $duracion,
            'provincia' => $provincia,
            'epocas' => $epocas,
            'descripcion' => $descripcion,
            'nivelTecnico' => $nivelTecnico,
            'nivelFisico' => $nivelFisico,
            'imagenes' => $imagenes
        ];

        $message = '<div class="alert alert-success mt-3">Ruta registrada correctamente.</div>';
        header('Location: list.php'); 
        exit();
    }
}
?>

<div class="container py-5">
    <div class="card shadow-lg p-4" style="max-width: 700px; margin:auto;">
        <div class="card-body">
            <h3 class="text-center mb-4 text-indigo">Crear nueva ruta</h3>

            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nombre de la ruta</label>
                    <input type="text" class="form-control" name="nombreRuta">
                </div>

                <div class="mb-3">
                    <label class="form-label">Dificultad</label>
                    <select class="form-select" name="dificultad">
                        <option value="" disabled selected>Selecciona dificultad</option>
                        <option value="facil">Fácil</option>
                        <option value="moderada">Moderada</option>
                        <option value="dificil">Difícil</option>
                        <option value="muy dificil">Muy difícil</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Distancia (km)</label>
                    <input type="number" step="0.1" class="form-control" name="distancia">
                </div>

                <div class="mb-3">
                    <label class="form-label">Desnivel positivo (m)</label>
                    <input type="number" class="form-control" name="desnivel">
                </div>

                <div class="mb-3">
                    <label class="form-label">Duración estimada (horas)</label>
                    <input type="number" step="0.1" class="form-control" name="duracion">
                </div>

                <div class="mb-3">
                    <label class="form-label">Provincia</label>
                    <select class="form-select" name="provincia">
                        <option value="" selected disabled>Selecciona provincia</option>
                        <option value="Huesca">Huesca</option>
                        <option value="Zaragoza">Zaragoza</option>
                        <option value="Teruel">Teruel</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Época recomendada</label>
                    <?php foreach(['primavera','verano','otono','invierno'] as $epoca): ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="epoca[]" value="<?= $epoca ?>" id="<?= $epoca ?>">
                            <label class="form-check-label" for="<?= $epoca ?>"><?= ucfirst($epoca) ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nivel técnico (1-5)</label>
                    <input type="number" min="1" max="5" class="form-control" name="nivelTecnico">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nivel físico (1-5)</label>
                    <input type="number" min="1" max="5" class="form-control" name="nivelFisico">
                </div>

                <div class="mb-3">
                    <label class="form-label">Fotos de la ruta</label>
                    <input type="file" class="form-control" name="fotos[]" multiple>
                    <small class="form-text text-muted">JPG, JPEG o PNG. Máx 2MB por archivo.</small>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-sunrise btn-lg">Crear ruta</button>
                </div>
            </form>
            <?= $message ?>
        </div>
        <button type="button" class="btn btn-sunrise" onclick="window.location.href='../routes/list.php'">Ver lista de rutas</button>
    </div>
</div>

<?php
include_once __DIR__ . '/../../includes/footer.php';
?>
