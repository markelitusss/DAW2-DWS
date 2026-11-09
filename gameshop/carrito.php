<?php
    $title = "Carrito";
    require_once("includes/funciones.php");
    require_once("includes/carrito.php");
    require_once("includes/datos.php");
    require_once("includes/header.php");

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["accion"]) && !empty($_POST["accion"])) {
            $accion = htmlspecialchars($_POST["accion"]);
        }
        if (isset($_POST["id"]) && !empty($_POST["id"])) {
            $id = htmlspecialchars($_POST["id"]);
        }
        if (isset($_POST["cantidad"]) && !empty($_POST["cantidad"])) {
            $cantidad = htmlspecialchars($_POST["cantidad"]);
        }
        
        switch ($accion) {
            case "agregar":
                agregarAlCarrito(buscarProducto($juegos, $id), $cantidad);
                
                header('Location: carrito.php');
                exit;
        }
    }
?>
<main class="container my-4">

    <div class="text-center py-5">
        <div class="fs-1 mb-3">🛒</div>
        <h3>Carrito en construcción</h3>
        <p class="text-muted">Lo implementaremos en UD3 con $_SESSION.</p>


        <!-- Feedback didáctico:  -->
        <div class="alert alert-info d-inline-block mt-3">
            <?= $id ?>
        </div>

        <div class="mt-3">
            <a href="catalogo.html" class="btn btn-primary">← Volver al catálogo</a>
        </div>
    </div>
</main>
<!-- 5.- Sección Footer-->
<?php
    require_once("includes/footer.php");
?>