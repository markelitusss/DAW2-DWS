<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
      <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
          <div class="card shadow-sm">
            <div class="card-body p-4">
              <h2 class="h4 mb-4 text-center">Iniciar sesión</h2>

              <!-- Error general (email/contraseña incorrectos o CSRF) -->

              <div class="alert alert-danger">email incorrecto</div>

              <form method="POST" action="login.html" novalidate>
                <input type="hidden" name="csrf_token" value="" />

                <!-- EMAIL -->
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control"
                    value=""
                    autocomplete="email"
                    autofocus
                    required
                  />
                </div>

                <!-- CONTRASEÑA -->
                <div class="mb-4">
                  <label for="password" class="form-label">Contraseña</label>
                  <input
                    type="password"
                    id="password"
                    name="password"
                    class="form-control"
                    autocomplete="current-password"
                    required
                  />
                </div>

                <button type="submit" class="btn btn-primary w-100">
                  Entrar
                </button>
              </form>

              <hr />
              <p class="text-center text-muted small mb-0">
                ¿No tienes cuenta?
                <a href="registro.html">Regístrate gratis</a>
              </p>
            </div>
          </div>
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
  </body>
</html>
