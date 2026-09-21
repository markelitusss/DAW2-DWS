<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Producto</title>
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

<!-- BREADCRUMB -->
<nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Inicio</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Catálogo</a>
        </li>
        <li class="breadcrumb-item active">
            Zelda: Tears of the Kingdom
        </li>
    </ol>
</nav>

<!-- FICHA: imagen izquierda (col-5) + datos derecha (col-7) -->
<div class="row g-5 mb-5">

    <!-- Columna imagen -->
    <div class="col-md-5">
        <div class="bg-light rounded-3 d-flex align-items-center
                      justify-content-center position-relative"
             style="height: 320px; font-size: 7rem;">
            🧝
            <!-- Badge oferta si aplica -->
                <span class="position-absolute top-0 end-0 m-3
                             badge text-bg-danger fs-6">
                    -10%
                </span>
        </div>
    </div>

    <!-- Columna datos -->
    <div class="col-md-7">

        <!-- Badge plataforma + género -->
        <div class="d-flex gap-2 mb-2">
            <span class="badge text-bg-success">Switch</span>
            <span class="badge text-bg-secondary">
                Aventura
            </span>
        </div>

        <!-- Título -->
        <h1 class="h2 fw-semibold mb-2">
            Zelda: Tears of the Kingdom
        </h1>

        <!-- Estrellas -->
        <div class="text-warning fs-5 mb-3">
            ★★★★☆
            <small class="text-muted fs-6 ms-1">
                (4/5)
            </small>
        </div>

        <!-- Descripción -->
        <p class="text-muted mb-4">
            La secuela de Breath of the Wild. Explora Hyrule con nuevas habilidades y un vasto mundo en el cielo.
        </p>

        <!-- Bloque de precio -->
        <div class="mb-4">
            <span class="fs-3 fw-bold text-primary">
                59,99 €
            </span>
           
                <span class="fs-5 text-muted text-decoration-line-through ms-2">
                    69,99 €
                </span>
                <span class="badge text-bg-danger ms-2">
                    Ahorras 10,00 €
                </span>
        </div>

        <!-- Versión UD2: enlace GET -->
        <a href="#"
           class="btn btn-primary btn-lg me-2">
            🛒 Añadir al carrito
        </a>

        <a href="catalogo.html" class="btn btn-outline-secondary btn-lg">
            ← Volver al catálogo
        </a>

        <!-- Aviso de envío gratis -->
            <div class="alert alert-success d-flex align-items-center mt-3 py-2">
                ✅ Este producto incluye envío gratis
            </div>
            <div class="alert alert-light d-flex align-items-center mt-3 py-2">
                🚚 Añade <strong>&nbsp;
                    5,01 €
                </strong>&nbsp; más para envío gratis
            </div>
    </div>
</div>
<!-- fin row ficha -->


<!-- PRODUCTOS RELACIONADOS -->
<section class="mt-2 mb-5">

    <h4 class="mb-3">
        También te puede interesar
        <small class="text-muted fs-6">
            — más juegos de Aventuras
        </small>
    </h4>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
        <div class="col">
            <div class="card h-100 shadow-sm">

                <div class="card-img-top bg-light d-flex align-items-center
                              justify-content-center fs-2 position-relative"
                     style="height: 90px;">
                   🕷️
                    <div class="position-absolute top-0 start-0 m-1">
                        <span class="badge text-bg-primary">PS5</span>
                    </div>
                </div>

                <div class="card-body d-flex flex-column">
                    <h6 class="card-title mb-1">
                        Marvel's Spider-Man 2
                    </h6>
                    <div class="text-warning small">
                        ★★★★★
                    </div>
                    <div class="mt-auto pt-2 d-flex justify-content-between align-items-center">
                        <span class="fw-semibold text-primary">
                            49,99 €
                        </span>
                        <a href="#"
                           class="btn btn-sm btn-outline-primary">
                            Ver ficha
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">

                <div class="card-img-top bg-light d-flex align-items-center
                              justify-content-center fs-2 position-relative"
                     style="height: 90px;">
                   🧙
                    <div class="position-absolute top-0 start-0 m-1">
                        <span class="badge text-bg-warning">PC</span>
                    </div>
                </div>

                <div class="card-body d-flex flex-column">
                    <h6 class="card-title mb-1">
                        Hogwarts Legacy
                    </h6>
                    <div class="text-warning small">
                        ★★★★☆
                    </div>
                    <div class="mt-auto pt-2 d-flex justify-content-between align-items-center">
                        <span class="fw-semibold text-primary">
                            34,99 €
                        </span>
                        <a href="#"
                           class="btn btn-sm btn-outline-primary">
                            Ver ficha
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>
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
