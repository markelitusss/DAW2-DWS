<?php
  require_once("config.php");
?>

<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo "$title • ".SITE_NAME?></title>
  <!-- Incluimos Bootstrap-->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- CSS propio -->
  <link rel="stylesheet" href="css/miestilo.css" />
</head>

<body>
  <!-- 1.- Sección menú de navegación-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand fw-semibold" href="index.php">🎮 GameShop</a>
      <!-- Botón colapso móvil -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Links de navegación -->
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="catalogo.php">Catálogo</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
        </ul>
        <!-- Zona derecha: carrito + login -->
        <div class="d-flex align-items-center gap-3">
          <!-- Carrito con badge -->
          <a href="carrito.php" class="btn btn-outline-light btn-sm position-relative">
            <i class="bi bi-cart3"></i>
            <span
              class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">1</span>
          </a>
          <!-- Login / Usuario (UD3 en adelante) -->
          <span class="text-light small">Hola, Paco</span>
          <a href="index.php" class="btn btn-outline-secondary btn-sm">Salir</a>
        </div>
      </div>
    </div>
  </nav>;