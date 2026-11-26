<?php
  require_once("config.php");
  require_once("includes/carrito.php");
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
            <?php if (unidadesEnCarrito() !== 0) { ?>
            <span
              class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?= unidadesEnCarrito() ?></span>
            <?php } ?>
          </a>
          <!-- Login / Usuario (UD3 en adelante) -->
          <?php if ($usuario = usuarioActual()): ?>
          <span class="text-light small">Hola, <strong><?= $_SESSION["usuario"]["nombre"] ?></strong></span>
          <form method="post" action="logout.php" class="m-0">
          <button type="submit" class="btn btn-sm btn-outline-light">Cerrar
          sesión</button>
          </form>
          <?php else: ?>
          <a href="login.php" class="btn btn-primary">Iniciar sesión</a>
          <a href="registro.php" class="btn btn-secondary">Crear cuenta</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>
  <?php
  // mostrar mensajes
    $mensaje = leerMensaje(); 
    if ($mensaje) { 
    ?>
        <div class="container mt-3 alert alert-<?= $mensaje['tipo'] ?>">
            <?= $mensaje['texto'] ?>
        </div>
    <?php } ?>