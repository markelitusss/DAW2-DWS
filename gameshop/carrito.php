<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <!-- Incluimos Bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <!-- CSS propio -->
    <link rel="stylesheet" href="css/miestilo.css" />
  </head>
  <body>
    <!-- 1.- Sección menú de navegación-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fw-semibold" href="#">🎮 GameShop</a>
        <!-- Botón colapso móvil -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navMenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Links de navegación -->
        <div class="collapse navbar-collapse" id="navMenu">
          <ul class="navbar-nav me-auto">
            <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Catálogo</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
          </ul>
          <!-- Zona derecha: carrito + login -->
          <div class="d-flex align-items-center gap-3">
            <!-- Carrito con badge -->
            <a href="#" class="btn btn-outline-light btn-sm position-relative">
              <i class="bi bi-cart3"></i>
              <span
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                >1</span
              >
            </a>
            <!-- Login / Usuario (UD3 en adelante) -->
            <span class="text-light small">Hola, Paco</span>
            <a href="#" class="btn btn-outline-secondary btn-sm">Salir</a>
          </div>
        </div>
      </div>
    </nav>
    <main class="container my-4">

<div class="text-center py-5">
    <div class="fs-1 mb-3">🛒</div>
    <h3>Carrito en construcción</h3>
    <p class="text-muted">Lo implementaremos en UD3 con $_SESSION.</p>

    
        <!-- Feedback didáctico:  -->
        <div class="alert alert-info d-inline-block mt-3">
            GET recibido: producto_id
            
        </div>

    <div class="mt-3">
        <a href="catalogo.html" class="btn btn-primary">← Volver al catálogo</a>
    </div>
</div>
        </main>
    <!-- 5.- Sección Footer-->
    <footer class="bg-dark text-light py-4 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-3">
            <h6 class="fw-semibold">🎮 GameShop</h6>
            <p class="text-secondary small">
              Los mejores videojuegos al mejor precio
            </p>
          </div>
          <div class="col-md-4 mb-3">
            <h6 class="fw-semibold">Navegación</h6>
            <ul class="list-unstyled small">
              <li>
                <a href="#" class="text-secondary text-decoration-none"
                  >Inicio</a
                >
              </li>
              <li>
                <a href="#" class="text-secondary text-decoration-none"
                  >Catálogo</a
                >
              </li>
              <li>
                <a href="#" class="text-secondary text-decoration-none"
                  >Contacto</a
                >
              </li>
            </ul>
          </div>
          <div class="col-md-4 mb-3">
            <h6 class="fw-semibold">Contacto</h6>
            <p class="text-secondary small">
              <i class="bi bi-envelope"></i> info@gameshop.com<br />
              <i class="bi bi-geo-alt"></i> Almoradí, España
            </p>
          </div>
        </div>
        <hr class="border-secondary" />
        <div class="d-flex justify-content-between small text-secondary">
          <span>&copy; 2026 GameShop · Todos los derechos reservados</span>
          <div class="d-flex gap-3">
            <a href="#" class="text-secondary text-decoration-none"
              >Aviso legal</a
            >
            <a href="#" class="text-secondary text-decoration-none"
              >Privacidad</a
            >
          </div>
        </div>
      </div>
    </footer>

    <!-- Incluimos Js Bootstrap-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>