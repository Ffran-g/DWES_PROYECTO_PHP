<?php
// Comprobar si se envió la petición de limpiar usuarios
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clear_users'])) {
    $_SESSION['users'] = [];
    $clear_message = 'El array de usuarios ha sido limpiado.';
}
?>
    </main>
    <div class="container"> 
        <footer class="py-3 my-4"> 
            <ul class="nav justify-content-center border-bottom pb-3 mb-3"> 
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li> 
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li> 
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li> 
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li> 
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li> 
            </ul> 
            <p class="text-center text-body-secondary">© 2025 Company, Inc</p> 
            <!-- Botón para limpiar array de usuarios -->
            <form method="POST" class="text-center mt-3">
                <button type="submit" name="clear_users" class="btn btn-danger">
                    Limpiar array de usuarios
                </button>
            </form>
        </footer> 
    </div>
</body>
</html>