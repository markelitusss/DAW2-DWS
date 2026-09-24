<?php 
  // Declaración Variables
  $plataformas = ["🟦" => "PlayStation 5",
                  "🟩" => "Xbox Series",
                  "🔴" => "Nintendo Switch",
                  "🖥️" => "PC / Steam",
                  "📱" => "Móvil"
  ];

  $game_icon = "🧝";
  $game_platform = "Switch";
  $game_title = "Zelda: Tears of the Kingdom";
  $game_genre = "Aventura";
?>

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
      <!-- 2.- Sección Hero más categorías-->
      <div
        class="p-5 mb-4 rounded-3 text-white"
        style="background: linear-gradient(135deg, #26215c, #534ab7)"
      >
        <div class="row align-items-center">
          <div class="col-md-8">
            <h1 class="display-6 fw-semibold">
              Los mejores videojuegos al mejor precio
            </h1>
            <p class="lead opacity-75">
              Envío gratis en pedidos superiores a 30 &euro;
            </p>
            <a href="#" class="btn btn-light me-2">Ver catálogo</a>
            <a href="#" class="btn btn-outline-light">Ver ofertas</a>
          </div>
          <div class="col-md-4 text-center fs-1">🕹️</div>
        </div>
      </div>
      <!-- ======================================================
            CATEGORÍAS POR PLATAFORMA
            ====================================================== -->
      <h5 class="mb-3">Explorar por plataforma</h5>
      <div class="row g-3 mb-5">
        <?php 
          foreach ($plataformas as $icono => $plataforma) {
        ?>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="#" class="card text-center text-decoration-none h-100 py-3">
            <div class="fs-2"><?php echo "$icono";?></div>
            <small class="text-muted"><?php echo "$plataforma";?></small>
          </a>
        </div>
        <?php 
          }
        ?>
        </div>
      </div>
      <!-- 3.- Grid de Productos Destacados-->
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Destacados</h5>
        <a href="#" class="btn btn-sm btn-outline-secondary">Ver todos →</a>
      </div>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5">
        <!-- Col 1-->
        <div class="col">
          <div class="card h-100 shadow-sm">
            <!-- Imagen / emoji del juego -->
            <div
              class="card-img-top bg-light d-flex align-items-center justify-content-center fs-1 position-relative"
              style="height: 120px"
            >
            <?php 
              echo "$game_icon";
            ?>
              <!-- Badge de plataforma (esquina superior izquierda) -->
              <div class="position-absolute top-0 start-0 m-2">
                <?php 
                  
                  echo "<span class=\"badge text-bg-success\">$game_platform</span>";
                ?>
              </div>
              <!-- Badge OFERTA si tiene precio anterior -->
              <div class="position-absolute top-0 end-0 m-2">
                <span class="badge text-bg-danger">- 10%</span>
              </div>
            </div>
            <!-- Cuerpo de la card -->
            <div class="card-body d-flex flex-column">
              <?php 
                
                echo "<h6 class=\"card-title mb-1\">$game_title</h6>";
                echo "<small class=\"text-muted\">$game_genre</small>";
              ?>
              
              <!-- Precio -->
              <div
                class="mt-auto pt-3 d-flex justify-content-between align-items-center"
              >
                <div>
                  <span class="fw-semibold text-primary fs-6"
                    >59,99 &euro;</span
                  >
                  <small class="text-muted text-decoration-line-through ms-1"
                    >70,00 &euro;</small
                  >
                </div>
                <!-- Botón añadir al carrito-->
                <a href="#" class="btn btn-sm btn-primary">+ Carrito</a>
              </div>
            </div>
            <!-- Pie de la card: enlace a ficha del producto -->
            <div class="card-footer bg-transparent">
              <a href="#" class="btn btn-sm btn-outline-secondary w-100"
                >Ver ficha</a
              >
            </div>
          </div>
        </div>

        <!-- Col 2-->
        <div class="col">
          <div class="card h-100 shadow-sm">
            <!-- Imagen / emoji del juego -->
            <div
              class="card-img-top bg-light d-flex align-items-center justify-content-center fs-1 position-relative"
              style="height: 120px"
            >
              <?php 
                $game_icon = "⚔️";
                echo "$game_icon";
              ?>
              <!-- Badge de plataforma (esquina superior izquierda) -->
              <div class="position-absolute top-0 start-0 m-2">
                <?php 
                  $game_platform = "PS5";
                  echo "<span class=\"badge text-bg-primary\">PS5</span>";
                ?>
                
              </div>
              <!-- Badge OFERTA si tiene precio anterior -->
              <div class="position-absolute top-0 end-0 m-2">
                <span class="badge text-bg-danger">- 10%</span>
              </div>
            </div>
            <!-- Cuerpo de la card -->
            <div class="card-body d-flex flex-column">
              <?php 
                $game_title = "Elder Ring";
                $game_genre = "RPG";
                echo "<h6 class=\"card-title mb-1\">$game_title</h6>";
                echo "<small class=\"text-muted\">$game_genre</small>";
              ?>

              <!-- Precio -->
              <div
                class="mt-auto pt-3 d-flex justify-content-between align-items-center"
              >
                <div>
                  <span class="fw-semibold text-primary fs-6"
                    >39,99 &euro;</span
                  >
                  <small class="text-muted text-decoration-line-through ms-1"
                    >49,99 &euro;</small
                  >
                </div>
                <!-- Botón añadir al carrito-->
                <a href="#" class="btn btn-sm btn-primary">+ Carrito</a>
              </div>
            </div>
            <!-- Pie de la card: enlace a ficha del producto -->
            <div class="card-footer bg-transparent">
              <a href="#" class="btn btn-sm btn-outline-secondary w-100"
                >Ver ficha</a
              >
            </div>
          </div>
        </div>

        <!-- Col 3-->
        <div class="col">
          <div class="card h-100 shadow-sm">
            <!-- Imagen / emoji del juego -->
            <div
              class="card-img-top bg-light d-flex align-items-center justify-content-center fs-1 position-relative"
              style="height: 120px"
            >
              <?php 
                $game_icon = "⚽";
                echo "$game_icon";
              ?>
              <!-- Badge de plataforma (esquina superior izquierda) -->
              <div class="position-absolute top-0 start-0 m-2">
                <?php 
                  $game_platform = "Xbox";
                  echo "<span class=\"badge text-bg-success\">$game_platform</span>";
                ?>
              </div>
            </div>
            <!-- Cuerpo de la card -->
            <div class="card-body d-flex flex-column">
              <?php 
                $game_title = "EA Sport FC 25";
                $game_genre = "Deportes";
                echo "<h6 class=\"card-title mb-1\">$game_title</h6>";
                echo "<small class=\"text-muted\">$game_genre</small>";
              ?>
              <!-- Precio -->
              <div
                class="mt-auto pt-3 d-flex justify-content-between align-items-center"
              >
                <div>
                  <span class="fw-semibold text-primary fs-6"
                    >39,99 &euro;</span
                  >
                </div>
                <!-- Botón añadir al carrito-->
                <a href="#" class="btn btn-sm btn-primary">+ Carrito</a>
              </div>
            </div>
            <!-- Pie de la card: enlace a ficha del producto -->
            <div class="card-footer bg-transparent">
              <a href="#" class="btn btn-sm btn-outline-secondary w-100"
                >Ver ficha</a
              >
            </div>
          </div>
        </div>

        <!-- Col 4-->
        <div class="col">
          <div class="card h-100 shadow-sm">
            <!-- Imagen / emoji del juego -->
            <div
              class="card-img-top bg-light d-flex align-items-center justify-content-center fs-1 position-relative"
              style="height: 120px"
            >
              
              <?php 
                $game_icon = "🌆";
                echo "$game_icon";
              ?>
              <!-- Badge de plataforma (esquina superior izquierda) -->
              <div class="position-absolute top-0 start-0 m-2">
                <?php 
                  $game_platform = "PS5";
                  echo "<span class=\"badge text-bg-warning\">$game_platform</span>";
                ?>
              </div>
              <!-- Badge OFERTA si tiene precio anterior -->
              <div class="position-absolute top-0 end-0 m-2">
                <span class="badge text-bg-danger">- 30%</span>
              </div>
            </div>
            <!-- Cuerpo de la card -->
            <div class="card-body d-flex flex-column">
              <?php 
                $game_title = "Cyberpun 2077";
                $game_genre = "RPG";
                echo "<h6 class=\"card-title mb-1\">$game_title</h6>";
                echo "<small class=\"text-muted\">$game_genre</small>";
              ?>
              <!-- Precio -->
              <div
                class="mt-auto pt-3 d-flex justify-content-between align-items-center"
              >
                <div>
                  <span class="fw-semibold text-primary fs-6"
                    >27,99 &euro;</span
                  >
                  <small class="text-muted text-decoration-line-through ms-1"
                    >39,99 &euro;</small
                  >
                </div>
                <!-- Botón añadir al carrito-->
                <a href="#" class="btn btn-sm btn-primary">+ Carrito</a>
              </div>
            </div>
            <!-- Pie de la card: enlace a ficha del producto -->
            <div class="card-footer bg-transparent">
              <a href="#" class="btn btn-sm btn-outline-secondary w-100"
                >Ver ficha</a
              >
            </div>
          </div>
        </div>
      </div>
      <!-- 4.- Banner de registro-->
      <div class="card mb-5 border-0 bg-body-secondary">
        <div
          class="card-body d-flex justify-content-between align-items-center flex-wrap gap-3"
        >
          <div>
            <h6 class="mb-1">Crea tu cuenta y consigue 5€ de descuento</h6>
            <small class="text-muted"
              >Accede a tus pedidos, lista de deseos y ofertas
              exclusivas.</small
            >
          </div>
          <a href="#" class="btn btn-primary">Crear cuenta gratis</a>
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
