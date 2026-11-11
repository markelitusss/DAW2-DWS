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
    <?php } 
    $lineas = lineasCarrito($juegos);
    ?>

    <div class="text-center py-5">
        <div class="fs-1 mb-3">🛒</div>
        <h3 class="mb-4">Mi carrito</h3>

        <?php
            if (empty($lineas)) {
                echo "Tu carrito está vacío";
            }
            else { ?>
            <table class="table">
                <tr class="table-dark">
                    <th>Juego</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
                <?php foreach ($lineas as $linea) { ?>
                <tr>
                    <td><?= $linea["producto"] ?></td>
                    <td><?= $linea["unitario"] ?></td>
                    <td><?= $linea["cantidad"] ?></td>
                    <td><?= $linea["subtotal"] ?></td>
                </tr>
                <?php } ?>
            </table>
        <?php } ?>

        <div class="mt-5">
            <a href="catalogo.php" class="btn btn-primary">← Volver al catálogo</a>
        </div>
    </div>
</main>
<!-- 5.- Sección Footer-->
<?php
    require_once("includes/footer.php");
?>