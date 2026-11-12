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
            $producto = buscarProducto($juegos, $id);
        }
        if (isset($_POST["cantidad"]) && !empty($_POST["cantidad"])) {
            $cantidad = htmlspecialchars($_POST["cantidad"]);
        }
        
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
                else if ($producto["stock"] < $cantidad || $producto["stock"] === obtenerCarrito()[$id]) {
                    guardarMensaje("warning", "Solo puedes llevar " . $producto["stock"] . " unidad(es) de '$producto[game_title]'");
                }
                else {
                    agregarAlCarrito($producto, $cantidad);
                    guardarMensaje("success", "'$producto[game_title]' añadido al carrito");
                }
                break;

            case "actualizar":
                if (isset($cantidad)) {
                    actualizarCantidad($producto, $cantidad);
                    if ($producto["stock"] < $cantidad || $producto["stock"] < obtenerCarrito()[$id]) {
                        guardarMensaje("warning", "Solo puedes llevar " . $producto["stock"] . " unidad(es) de '$producto[game_title]'");
                    }
                }
                else {
                    eliminarDelCarrito($id);
                }
                break;

            case "eliminar":
                eliminarDelCarrito($id);
                break;

            case "vaciar":
                vaciarCarrito();
                break;
            
            default:
                guardarMensaje("danger", "Acción no válida");
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
    $totales = totalesCarrito($lineas);
    ?>

    <div class="text-center py-5 clearfix">
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
                    <th></th>
                </tr>
                <?php foreach ($lineas as $linea) {   
                ?>
                <tr>
                    <td><?= $linea["producto"] ?></td>
                    <td><?= $linea["unitario"] ?></td>
                    <td>
                        <form method="post" action="carrito.php" class="d-flex gap-1">
                            <input type="hidden" name="accion" value="actualizar">
                            <input type="hidden" name="id" value="<?= $linea['id'] ?>">
                            <input type="number" name="cantidad" value="<?= $linea['cantidad'] ?>"
                            min="0" max="10" class="form-control form-control-sm">
                            <button type="submit" class="btn btn-sm btn-outline-secondary">↻</button>
                        </form>
                    </td>
                    <td><?= precio_formateado($linea["subtotal"]) ?></td>
                    <td>
                        <form method="post" action="carrito.php">
                            <input type="hidden" name="accion" value="eliminar">
                            <input type="hidden" name="id" value="<?= $linea['id'] ?>">
                            <button type="submit" class="btn btn-sm btn-outline-danger">🗑</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <div class="card ms-5 p-0 w-50 float-end">
                <div class="card-header">
                    <h5>Resumen del pedido</h5>
                    <div class="d-flex justify-content-between">
                        <span>Productos (<?= unidadesEnCarrito() ?>)</span>
                        <span><?= precio_formateado($totales["productos"]) ?></span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Envío</span>
                        <span class="<?= $totales["envio"] === 0 ? "text-success fw-bold" : ""?>"><?= $totales["envio"] === 0 ? "Gratis" : precio_formateado(COSTE_ENVIO) ?></span>
                    </div>
                    <?php if ($totales["faltaEnvioGratis"] > 0) { ?>
                        <span class="text-secondary">Te faltan <?= precio_formateado($totales["faltaEnvioGratis"]) ?> para el envío gratis</span>
                    <?php } ?>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <span class="fw-bold">Total</span>
                        <span class="fs-4 fw-bold"><?= precio_formateado($totales["total"]) ?></span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Base imponible</span>
                        <span><?= precio_formateado($totales["base"]) ?></span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>IVA (21 %) incluido</span>
                        <span><?= precio_formateado($totales["iva"]) ?></span>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="mt-5 d-flex">
            <a href="catalogo.php" class="btn btn-primary me-3">← Volver al catálogo</a>
            <form action="carrito.php" method="post">
                <input type="hidden" name="accion" value="vaciar">
                <button type="submit" class="btn btn-outline-danger ">Vaciar carrito</button>
            </form>
        </div>
    </div>
</main>
<!-- 5.- Sección Footer-->
<?php
    require_once("includes/footer.php");
?>