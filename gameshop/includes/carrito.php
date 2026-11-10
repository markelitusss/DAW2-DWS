<?php 
    declare(strict_types=1);
    require_once("config.php");

    function obtenerCarrito(): array {
        return $_SESSION["carrito"];
    }

    function agregarAlCarrito(array $producto, int $cantidad): int {
        // esto funciona
        if (empty($_SESSION["carrito"]) && $cantidad <= $producto["stock"] && $cantidad <= MAX_POR_PRODUCTO) {
            array_push($_SESSION["carrito"], ["id" => $producto["id"], "stock" => $cantidad]);
            return $_SESSION["carrito"][0]["stock"];
        }
        else if (empty($_SESSION["carrito"]) && ($cantidad > $producto["stock"] || $cantidad > MAX_POR_PRODUCTO)){ 
            return 0;
        }

        // TODO: arreglar esto

        foreach ($_SESSION["carrito"] as $item) {
            if ($item["id"] === $producto["id"]) {
                if ($cantidad + $item["stock"] > MAX_POR_PRODUCTO) { 
                    $item["stock"] = 10;
                }
                else if ($cantidad + $item["stock"] > $producto["stock"]) {
                    return $item["stock"];
                }
                else {
                    $item["stock"] += $cantidad;
                }

                $cantidadFinal = $item["stock"];
            }
        }

        return $cantidadFinal;
    }

    function guardarMensaje(string $tipo, string $texto): void {
        $_SESSION["mensaje"] = ["tipo" => $tipo, "texto" => $texto];
    }

    function leerMensaje(): ?array {
        $mensaje = $_SESSION["mensaje"] ?? null;
        unset($_SESSION["mensaje"]);
        return $mensaje;
    }

    $_SESSION['carrito'] = [];
    $p = ['id' => 99, 'stock' => 2];
    assert(agregarAlCarrito($p, 1) === 1);
    assert(agregarAlCarrito($p, 1) === 2);
?>