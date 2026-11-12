<?php 
    declare(strict_types=1);
    require_once("config.php");

    function obtenerCarrito(): array {
        return $_SESSION["carrito"];
    }

    function agregarAlCarrito(array $producto, int $cantidad): int {
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

    function eliminarDelCarrito(int $id): void {
        unset($_SESSION["carrito"][$id]);
    }

    function vaciarCarrito(): void {
        $_SESSION["carrito"] = [];
    }

    function actualizarCantidad(array $producto, int $cantidad): void {
        $_SESSION["carrito"][$producto["id"]] = $cantidad;

        if ($_SESSION["carrito"][$producto["id"]] > MAX_POR_PRODUCTO) {
            $_SESSION["carrito"][$producto["id"]] = 10;
        }
        else if ($_SESSION["carrito"][$producto["id"]] > $producto["stock"]) {
            $_SESSION["carrito"][$producto["id"]] = $producto["stock"];
        }
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
                array_push($lineas, ["id"=> $id, "producto" => $producto["game_title"], "cantidad" => $cantidad, "unitario" => precio_formateado(precioFinal($producto)), "subtotal" => precioFinal($producto) * $cantidad]);
            }
        }

        return $lineas;
    }

    function totalesCarrito(array $lineas): array {
        $productos = round(array_sum(array_column($lineas, 'subtotal')), 2);
        
        if (!$productos || $productos >= ENVIO_GRATIS_DESDE) {
            $envio = 0;
        }
        else {
            $envio = COSTE_ENVIO;
        }
        $total = $productos + $envio;
        $base = $total / 1.21;
        $iva = $total - $base;
        return [
            'productos' => $productos,
            'envio' => $envio,
            'total' => $total,
            'base' => $base,
            'iva' => $iva,
            'faltaEnvioGratis' => $envio === 0 ? 0 : ENVIO_GRATIS_DESDE - $productos
        ];
    }

    function unidadesEnCarrito(): int {
        return array_sum(array_values($_SESSION["carrito"]));
    }

?>