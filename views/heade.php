<?php
session_start();
$usuario =  $_SESSION['nombre'];
if(!isset($usuario)){
    header('Location: ../index.html');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid bg-dark p-2 mb-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand " href="inicio.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="usuarios.php">Usuarios</a>
                    <a class="nav-link active" aria-current="page" href="cuenta.php">Cuenta</a>
                    <a class="nav-link active" aria-current="page" href="../conexionBD/salir.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </nav>
    </div>