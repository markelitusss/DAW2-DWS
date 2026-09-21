<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catálogo</title>
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
    </ol>
</nav>

<!-- LAYOUT: sidebar izquierda (col-3) + contenido (col-9) -->
<div class="row g-4">

<!-- ═══════════════════ SIDEBAR ═══════════════════ -->
<aside class="col-lg-3">
    <div class="card shadow-sm">
        <div class="card-header fw-semibold">🔍 Filtrar</div>

        <!-- El formulario usa GET para que los filtros aparezcan en la URL.
             Esto permite compartir la URL filtrada y que el botón "atrás" funcione. -->
        <form method="GET" class="card-body">

            <!-- PLATAFORMA -->
            <p class="text-uppercase text-muted small fw-semibold mb-2">Plataforma</p>
            
                <div class="form-check mb-1">
                    <input class="form-check-input" type="radio"
                           name="plataforma"
                           value="PS5"
                           id="plat_PS5"
                    >
                    <label class="form-check-label"
                           for="plat_PS5">
                    PS5    
                    </label>
                </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="radio"
                           name="plataforma"
                           value="Switch"
                           id="plat_Switch"
                    >
                    <label class="form-check-label"
                           for="plat_Switch">
                    Switch    
                    </label>
                </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="radio"
                           name="plataforma"
                           value="PC"
                           id="plat_PC"
                    >
                    <label class="form-check-label"
                           for="plat_PC">
                    PC    
                    </label>
                </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="radio"
                           name="plataforma"
                           value="XBOX"
                           id="plat_XBOX"
                    >
                    <label class="form-check-label"
                           for="plat_XBOX">
                    XBOX    
                    </label>
                </div>




            <hr>

            <!-- GÉNERO -->
            <p class="text-uppercase text-muted small fw-semibold mb-2">Género</p>
            
                <div class="form-check mb-1">
                    <input class="form-check-input" type="radio"
                           name="genero"
                           value="Aventuras"
                           id="gen_Aventuras">
                    <label class="form-check-label"
                           for="gen_Aventuras">
                        Aventuras
                    </label>
                </div>

                <div class="form-check mb-1">
                    <input class="form-check-input" type="radio"
                           name="genero"
                           value="Deportes"
                           id="gen_Deportes">
                    <label class="form-check-label"
                           for="gen_Deportes">
                        Deportes
                    </label>
                </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="radio"
                           name="genero"
                           value="Plataformas"
                           id="gen_Plataformas">
                    <label class="form-check-label"
                           for="gen_Plataformas">
                        Plataformas
                    </label>
                </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="radio"
                           name="genero"
                           value="RPG"
                           id="gen_RPG">
                    <label class="form-check-label"
                           for="gen_RPG">
                        RPG
                    </label>
                </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="radio"
                           name="genero"
                           value="Shooter"
                           id="gen_Shooter">
                    <label class="form-check-label"
                           for="gen_Shooter">
                        Shooter
                    </label>
                </div>

            <hr>

            <!-- PRECIO MÁXIMO -->
            <p class="text-uppercase text-muted small fw-semibold mb-2">
                Precio máximo: <span id="precio-label">
                    99,99 €
                </span>
            </p>
            <input type="range" class="form-range"
                   name="precio_max" id="precio_max"
                   min="0" max="100" step="5"
                   value="50"
                   oninput="document.getElementById('precio-label').textContent='50€'">

            <hr>

            <!-- BÚSQUEDA -->
            <p class="text-uppercase text-muted small fw-semibold mb-2">Buscar</p>
            <input type="search" class="form-control form-control-sm"
                   name="q" placeholder="Nombre del juego…"
                   value=" ">

            <hr>

            <!-- BOTONES -->
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-sm">
                    Aplicar filtros
                </button>
                <a href="catalogo.html" class="btn btn-outline-secondary btn-sm">
                    Limpiar filtros
                </a>
            </div>

        </form>
    </div>
</aside>
<!-- ═══════ FIN SIDEBAR ═══════ -->

<!-- ═══════════════ COLUMNA PRINCIPAL ═══════════════ -->
<main class="col-lg-9">

    <!-- CABECERA: resultados + ordenación -->
    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
        <span class="text-muted small">
            Mostrando <strong>10 </strong> juegos
        </span>
        <select class="form-select form-select-sm w-auto">
            <option value="1" selected>Nombre A–Z</option>
            <option value="2">Precio: menor a mayor</option>
            <option value="3">Precio: mayor a menor</option>
            <option value="4">Mejor valorados</option>
        </select>
    </div>
    <div class="d-flex gap-2 flex-wrap mb-3">
            <a href="#"
               class="badge text-bg-primary text-decoration-none">
                &nsbp; ×
            </a>
    </div>

    <!-- GRID DE PRODUCTOS -->
        <div class="alert alert-info">
            No se encontraron juegos con los filtros seleccionados.
            <a href="catalogo.html">Ver todos</a>
        </div>
      <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
        <div class="col">
            <div class="card h-100 shadow-sm">

                <div class="card-img-top bg-light d-flex align-items-center
                              justify-content-center fs-1 position-relative"
                     style="height:110px">
                    🍄
                    <div class="position-absolute top-0 start-0 m-2">
                        <span class="badge text-bg-success">Switch</span>
                    </div>
                </div>

                <div class="card-body d-flex flex-column">
                    <h6 class="card-title mb-1">
                        Super Mario Odyssey
                    </h6>
                    <!-- Estrellas de valoración -->
                    <div class="text-warning small mb-1">
                        ★★★★★
                    </div>
                    <small class="text-muted">
                        Plataformas
                    </small>
                    <div class="mt-auto pt-3 d-flex justify-content-between align-items-center">
                        <div>
                            <span class="fw-semibold text-primary">
                                49,99 €
                            </span>
                            
                        </div>
                        <a href="carrito.html"
                           class="btn btn-sm btn-primary">+ Carrito</a>
                    </div>
                </div>

                <div class="card-footer bg-transparent">
                    <a href="producto.html"
                       class="btn btn-sm btn-outline-secondary w-100">Ver ficha</a>
                </div>

            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm">

                <div class="card-img-top bg-light d-flex align-items-center
                              justify-content-center fs-1 position-relative"
                     style="height:110px">
                    ⚔️
                    <div class="position-absolute top-0 start-0 m-2">
                        <span class="badge text-bg-primary">PS5</span>
                    </div>
                    <div class="position-absolute top-0 end-0 m-2">
                        <span class="badge text-bg-danger">
                            5%
                        </span>
                    </div>
                </div>

                <div class="card-body d-flex flex-column">
                    <h6 class="card-title mb-1">
                        Elden Ring
                    </h6>
                    <!-- Estrellas de valoración -->
                    <div class="text-warning small mb-1">
                        ★★★★☆
                    </div>
                    <small class="text-muted">
                        RPG
                    </small>
                    <div class="mt-auto pt-3 d-flex justify-content-between align-items-center">
                        <div>
                            <span class="fw-semibold text-primary">
                                39,99 €
                            </span>
                            <small class="text-muted text-decoration-line-through ms-1">
                                49,99 €
                            </small>
                        </div>
                        <a href="carrito.html"
                           class="btn btn-sm btn-primary">+ Carrito</a>
                    </div>
                </div>

                <div class="card-footer bg-transparent">
                    <a href="producto.html"
                       class="btn btn-sm btn-outline-secondary w-100">Ver ficha</a>
                </div>

            </div>
        </div>

    </div>

<!-- fin grid -->

 <!-- PAGINACIÓN -->
    
    <nav class="mt-4" aria-label="Paginación del catálogo">
        <ul class="pagination justify-content-center">

            <!-- Anterior -->
            <li class="page-item disabled">
                <a class="page-link"
                   href="#">
                    ‹
                </a>
            </li>

            <!-- Números de página -->
                <li class="page-item active">
                    <a class="page-link"
                       href="#">
                        1
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link"
                       href="#">
                        2
                    </a>
                </li>
            
            <!-- Siguiente -->
            <li class="page-item ">
                <a class="page-link"
                   href="#">
                    ›
                </a>
            </li>

        </ul>
    </nav>
    

</main>    <!-- fin col-lg-9 -->
</div>     <!-- fin row -->


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