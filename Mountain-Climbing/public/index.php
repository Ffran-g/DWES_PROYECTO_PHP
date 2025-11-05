<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mountain Climbing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-success"> 
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom"> 
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"> 
                <svg class="bi me-2" width="40" height="32" aria-hidden="true">
                    <use xlink:href="#bootstrap"></use>
                </svg> 
                <span class="fs-4 text-white">Mountain Climbing</span> 
            </a>
            <!-- La barra de navegación tiene que ser solo visible cuando el usuario este registrado -->
            <ul class="nav nav-pills"> 
                <li class="nav-item"><a href="#" class="nav-link active bg-secondary text-white" aria-current="page">Inicio</a></li> 
                <li class="nav-item"><a href="#" class="nav-link text-white">Escalada</a></li> 
                <li class="nav-item"><a href="#" class="nav-link text-white">Ferratas</a></li> 
                <li class="nav-item"><a href="#" class="nav-link text-white">Rutas</a></li> 
                <li class="nav-item"><a href="#" class="nav-link text-white">Fotos</a></li> 
            </ul> 
        </header> 
    </div>
    
    <main>
        <div class="container mt-5">
            <div class="card shadow-lg border-0" style="max-width: 500px; margin: auto;">
                <div class="card-body p-4">
                <h3 class="card-title text-center mb-4 text-success">Registro de Usuario</h3>

                <form action="register.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="usernameInput" placeholder="Nombre de usuario">
                        <label for="usernameInput">Nombre de Usuario</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="emailInput" placeholder="Correo electrónico">
                        <label for="emailInput">Correo Electrónico</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="passwordInput" placeholder="Contraseña">
                        <label for="passwordInput">Contraseña</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirma tu contraseña">
                        <label for="confirmPassword">Confirmar Contraseña</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-block mb-2">Nivel de experiencia</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nivel" id="beginner">
                            <label class="form-check-label" for="beginner">Principiante</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nivel" id="amateur">
                            <label class="form-check-label" for="amateur">Intermedio</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nivel" id="expert">
                            <label class="form-check-label" for="expert">Avanzado</label>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label d-block mb-2">Especialización</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="especializacion[]" id="rutas">
                            <label class="form-check-label" for="rutas">Rutas</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="especializacion[]" id="ferratas">
                            <label class="form-check-label" for="ferratas">Ferratas</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="especializacion[]" id="escalada">
                            <label class="form-check-label" for="escalada">Escalada</label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="provincia" class="form-label">Provincia</label>
                        <select class="form-select" id="provincia">
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


    </main>
    <div class="container"> 
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"> 
            <div class="col-md-4 d-flex align-items-center"> 
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap"> 
                    <svg class="bi" width="30" height="24" aria-hidden="true">
                        <use xlink:href="#bootstrap"></use>
                    </svg> 
                </a> 
                <span class="mb-3 mb-md-0 text-body-secondary">© 2025 Mountaing Climbing, Inc</span>
                <span class="mb-3 mb-md-0 text-body-secondary">By Francisco José García Egea</span> 
            </div> 
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex"> 
                <li class="ms-3">
                    <a class="text-body-secondary" href="#" aria-label="Instagram">
                        <svg class="bi" width="24" height="24" aria-hidden="true">
                            <use xlink:href="#instagram"></use>
                        </svg>
                    </a>
                </li> 
                <li class="ms-3">
                    <a class="text-body-secondary" href="#" aria-label="Facebook">
                        <svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>
                </li> 
            </ul> 
        </footer> 
    </div>
</body>
</html>