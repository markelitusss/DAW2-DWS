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
        
        $producto = buscarProducto($juegos, $id);

        switch ($accion) {
            case "agregar":
                if (!$producto) {
                    guardarMensaje("danger", "Ese producto no existe");
                }
                else if ($cantidad < 1 || $cantidad > 10) {
                    guardarMensaje("danger", "La cantidad debe estar entre 1 y 10");
                }
                else if ($producto["stock"] === 0) {
                    guardarMensaje("warning", "'$producto[game_title]' está agotado");
                }
                else if ($producto["stock"] < $cantidad) {
                    guardarMensaje("warning", "Solo puedes llevar " . $cantidad - $producto["stock"] . " unidad(es) de '$producto[game_title]'");
                }
                else {
                    agregarAlCarrito($producto, $cantidad);
                    guardarMensaje("success", "'$producto[game_title]' añadido al carrito");
                }
                break;
        }

        header('Location: carrito.php');
        exit;
    }
    
?>
<main class="container my-4">
    <?php
    $mensaje = leerMensaje(); 
    if ($mensaje) { 
    ?>
        <div class="alert alert-<?= $mensaje['tipo'] ?>">
            <?= $mensaje['texto'] ?>
        </div>
    <?php } ?>

    <div class="text-center py-5">
        <div class="fs-1 mb-3">🛒</div>
        <h3>Carrito en construcción</h3>
        <p class="text-muted">Lo implementaremos en UD3 con $_SESSION.</p>


        <!-- Feedback didáctico:  -->
        <div class="alert alert-info d-inline-block mt-3">
            <?php var_dump(obtenerCarrito()) ?>
        </div>

        <div class="mt-3">
            <a href="catalogo.php" class="btn btn-primary">← Volver al catálogo</a>
        </div>
    </div>
</main>
<!-- 5.- Sección Footer-->
<?php
    require_once("includes/footer.php");
?>