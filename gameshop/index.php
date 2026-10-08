<?php
$title = "Inicio";
require_once("includes/header.php");
require_once("includes/funciones.php");
require_once("includes/datos.php");

// Comprobaciones previas
assert(count(obtenerDestacados($juegos)) === 4);
assert(array_keys(obtenerDestacados($juegos)) === [0, 1, 2, 3]);
assert(precio_formateado(1234.5) === '1.234,50 €');
assert(estadoStock(0) === 'Agotado');
assert(estadoStock(3) === 'Últimas unidades');
assert(generarSlug('Zelda: Tears of the Kingdom') === 'zelda-tears-of-the-kingdom');
assert(generarSlug(' ¡Hola, mundo! ') === 'hola-mundo');

?>
<main class="container my-4">
  <!-- 2.- Sección Hero más categorías-->
  <div
    class="p-5 mb-4 rounded-3 text-white"
    style="background: linear-gradient(135deg, #26215c, #534ab7)">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h1 class="display-6 fw-semibold">
          Los mejores videojuegos al mejor precio
        </h1>
        <p class="lead opacity-75">
          Envío gratis en pedidos superiores a 30 &euro;
        </p>
        <a href="catalogo.php" class="btn btn-light me-2">Ver catálogo</a>
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
        <a href="catalogo.php?plat=<?php echo generarSlug($plataforma) ?>" class="card text-center text-decoration-none h-100 py-3">
          <div class="fs-2"><?php echo "$icono"; ?></div>
          <small class="text-muted"><?php echo "$plataforma"; ?></small>
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
    <?php 
      foreach (obtenerDestacados($juegos) as $juego) {
    ?>
    <!-- Col 1-->
    <div class="col">
      <div class="card h-100 shadow-sm">
        <!-- Imagen / emoji del juego -->
        <div
          class="card-img-top bg-light d-flex align-items-center justify-content-center fs-1 position-relative"
          style="height: 120px">
          <?php
          echo htmlspecialchars($juego["game_icon"]);
          ?>
          <!-- Badge de plataforma (esquina superior izquierda) -->
          <div class="position-absolute top-0 start-0 m-2">
            <span class="badge <?php echo badge_plataforma($juego["game_platform"]) ?>"><?php echo htmlspecialchars($juego["game_platform"]);?></span>
          </div>
          <!-- Badge OFERTA si tiene precio anterior -->
           <?php 
            if ($juego["descuento"] > 0) {
           ?>
          <div class="position-absolute top-0 end-0 m-2">
            <span class="badge text-bg-danger"><?php echo "-".$juego["descuento"]."%";?></span>
          </div>
          <?php } ?>
        </div>
        <!-- Cuerpo de la card -->
        <div class="card-body d-flex flex-column">
          <h6 class="card-title mb-1"><?php echo htmlspecialchars($juego["game_title"]);?></h6>
          <small class="text-muted"><?php echo htmlspecialchars($juego["game_genre"]);?></small>

          <!-- Precio -->
          <div
            class="mt-auto pt-3 d-flex justify-content-between align-items-center">
            <div>
              <?php 
                if ($juego["descuento"] > 0) {
              ?>
              <span class="fw-semibold text-primary fs-6"><?php echo precio_formateado($juego["precio"] * (100 - $juego["descuento"]) / 100); ?></span>
              <small class="text-muted text-decoration-line-through ms-1"><?php echo precio_formateado($juego["precio"]);?></small>
              <?php 
                } else {
              ?>
              <span class="fw-semibold text-primary fs-6"><?php echo precio_formateado($juego["precio"]);?></span>
              <?php 
                }
              ?>
            </div>
            <!-- Botón añadir al carrito-->
             <?php 
              if ($juego["stock"] > 0) {
                ?>
                <a href="#" class="btn btn-sm btn-primary">+ Carrito</a>
              <?php } else { ?>
                <a href="#" class="btn btn-sm btn-primary disabled">+ Carrito</a>
              <?php } ?>
          </div>
          <small class="text-muted"><?php echo estadoStock($juego["stock"]) ?></small>
        </div>
        <!-- Pie de la card: enlace a ficha del producto -->
        <div class="card-footer bg-transparent">
          <a href="<?php echo "producto.php?slug=".generarSlug($juego["game_title"]) ?>" class="btn btn-sm btn-outline-secondary w-100">Ver ficha</a>
        </div>
      </div>
    </div>
    <?php } 
    // número de juegos y valor del inventario
      echo "<span>Mostrando ".count(obtenerDestacados($juegos))." de ".count($juegos)." juegos • Valor del inventario: ".precio_formateado(valorInventario($juegos))."</span>";
    ?>
  <!-- 4.- Banner de registro-->
  <div class="card mb-5 border-0 bg-body-secondary">
    <div
      class="card-body d-flex justify-content-between align-items-center flex-wrap gap-3">
      <div>
        <h6 class="mb-1">Crea tu cuenta y consigue 5€ de descuento</h6>
        <small class="text-muted">Accede a tus pedidos, lista de deseos y ofertas
          exclusivas.</small>
      </div>
      <a href="#" class="btn btn-primary">Crear cuenta gratis</a>
    </div>
  </div>
</main>
<!-- 5.- Sección Footer-->
<?php
require_once("includes/footer.php");
?>