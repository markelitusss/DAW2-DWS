<?php
    //Nombre del sitio y eslogan
    define('SITE_NAME',"GameShop");
    define('SITE_SLOGAN',"Los mejores videojuegos al mejor precio");
    define('SITE_VERSION',"1.0");

    //Email de contacto
    define('SITE_CONTACT',"info@gameshop.es");

    //Configuración del carrito (Esto para la UD3)
    define('IVA',0.21);
    define('ENVIO_GRATIS_DESDE',30);
    define('COSTE_ENVIO', 4.95);
    define("MAX_POR_PRODUCTO", 10);

    //Para cuando nuestra web está en subcarpeta 
    //IMPORTANTE!!!! (pon la ruta a tu subcarpeta)
    define('BASE_URL',"http://localhost/gameshop");

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>