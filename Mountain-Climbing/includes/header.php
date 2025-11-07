<?php

session_start();
// echo "<pre>";
// var_dump($_SESSION['users']);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOINTAIN CLIMBING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../includes/style.css">
</head>
<body>
    <header class="p-3 text-bg-dark"> 
        <div class="container"> 
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"> 
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"> 
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg> 
                </a> 
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"> 
                    <li><a href="#" class="nav-link px-2 text-secondary">Mountain Climbing</a></li> 
                    <li><a href="#" class="nav-link px-2 text-white">Rutas</a></li> 
                    <li><a href="#" class="nav-link px-2 text-white">Ferratas</a></li> 
                    <li><a href="#" class="nav-link px-2 text-white">Escalada</a></li> 
                    <li><a href="#" class="nav-link px-2 text-white">Galeria</a></li> 
                </ul> 
                <div class="text-end"> 
                    <button type="button" class="btn btn-outline-light me-2" onclick="window.location.href='../public/login.php'">Login</button>
 
                    <button type="button" class="btn btn-warning" onclick="window.location.href='../public/register.php'">Sign-up</button> 
                </div> 
            </div> 
        </div> 
    </header>
    <main>
