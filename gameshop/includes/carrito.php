<?php 
    declare(strict_types=1);
    require_once("config.php");

    function obtenerCarrito(): array {
        return $_SESSION["carrito"];
    }

    function agregarAlCarrito(array $producto, int $cantidad): int {
        if (!isset($_SESSION["carrito"])) {
            $_SESSION["carrito"] = [];
        }

        if (!in_array($producto["id"], array_keys($_SESSION["carrito"]))) {
            $_SESSION["carrito"][$producto["id"]] = $cantidad;
        }
        else {
            $_SESSION["carrito"][$producto["id"]] += $cantidad;
        }

        if ($_SESSION["carrito"][$producto["id"]] > MAX_POR_PRODUCTO) {
            $_SESSION["carrito"][$producto["id"]] = 10;
        }
        else if ($_SESSION["carrito"][$producto["id"]] > $producto["stock"]) {
            $_SESSION["carrito"][$producto["id"]] = $producto["stock"];
        }

        return $_SESSION["carrito"][$producto["id"]];
    }

    function guardarMensaje(string $tipo, string $texto): void {
        $_SESSION["mensaje"] = ["tipo" => $tipo, "texto" => $texto];
    }

    function leerMensaje(): ?array {
        $mensaje = $_SESSION["mensaje"] ?? null;
        unset($_SESSION["mensaje"]);
        return $mensaje;
    }

    function lineasCarrito(array $productos): array {
        $lineas = [];
        foreach (obtenerCarrito() as $id => $cantidad) {
            $producto = buscarProducto($productos, $id);

            if (is_null($producto)) {
                continue;
            }
            else {
                array_push($lineas, ["producto" => $producto["game_title"], "cantidad" => $cantidad, "unitario" => precio_formateado(precioFinal($producto)), "subtotal" => precio_formateado(precioFinal($producto) * $cantidad)]);
            }
        }

        return $lineas;
    }

?>