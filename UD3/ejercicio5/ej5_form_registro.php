<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (empty($_SESSION["csrf"])) {
        $_SESSION["csrf"] = bin2hex(random_bytes(32));
    }

    if (isset($_SESSION["error"])) {
        $error = $_SESSION["error"];
        unset($_SESSION["error"]);
    }

    if (isset($_SESSION["old_input"])) {
        $old = $_SESSION["old_input"];
        unset($_SESSION["old_input"]);
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>
    <main class="container">
        <?php if (!empty($error)) { ?>
            <div class="alert alert-danger mt-3">
                <p><?= $error ?></p>
            </div>
        <?php } ?>
        <h1 class="mt-3">Ejercicio 5</h1>
        <form class="mt-4" action="result_form_registro.php" method="post">
            <input type="hidden" name="csrf" value="<?= htmlspecialchars($_SESSION["csrf"]) ?>">
            <div class="mb-3 row">
                <label
                    for="nombre"
                    class="col-4 col-form-label">Nombre</label>
                <div
                    class="col-8">
                    <input
                        type="text"
                        class="form-control"
                        name="nombre"
                        id="nombre"
                        value="<?= isset($old) ? htmlspecialchars($old["nombre"]) : "" ?>"
                        required/>
                </div>
            </div>
            <div class="mb-3 row">
                <label
                    for="apellidos"
                    class="col-4 col-form-label">Apellidos</label>
                <div
                    class="col-8">
                    <input
                        type="text"
                        class="form-control"
                        name="apellidos"
                        id="apellidos"
                        value="<?= isset($old) ? htmlspecialchars($old["apellidos"]) : "" ?>"
                        required/>
                </div>
            </div>
            <div class="mb-3 row">
                <label
                    for="email"
                    class="col-4 col-form-label">Email</label>
                <div
                    class="col-8">
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="email"
                        value="<?= isset($old) ? htmlspecialchars($old["email"]) : "" ?>"
                        required/>
                </div>
            </div>
            <div class="mb-3 row">
                <label
                    for="passwd"
                    class="col-4 col-form-label">Contraseña</label>
                <div
                    class="col-8">
                    <input
                        type="password"
                        class="form-control"
                        name="passwd"
                        id="passwd"
                        required/>
                </div>
            </div>
            <div class="mb-3 row">
                <label
                    for="genero"
                    class="col-4 col-form-label">Género</label>
                <div
                    class="col-8">
                    <input
                        type="radio"
                        class="form-radio"
                        name="genero"
                        id="genero"
                        value="Masculino"
                        <?= isset($old["genero"]) && $old["genero"] === "Masculino" ? "checked" : "" ?>
                        required/>
                    <label for="masculino">Masculino</label>
                    <input
                        type="radio"
                        class="form-radio ms-2"
                        name="genero"
                        id="genero"
                        value="Femenino"
                        <?= isset($old["genero"]) && $old["genero"] === "Femenino" ? "checked" : "" ?>
                        required/>
                    <label for="femenino">Femenino</label>
                    <input
                        type="radio"
                        class="form-radio ms-2"
                        name="genero"
                        id="genero"
                        value="Otro"
                        <?= isset($old["genero"]) && $old["genero"] === "Otro" ? "checked" : "" ?>
                        required/>
                    <label for="otro">Otro</label>
                </div>
            </div>
            <div class="mb-3 row">
                <label
                    for="direccion"
                    class="col-4 col-form-label">Dirección</label>
                <div
                    class="col-8">
                    <input
                        type="text"
                        class="form-control"
                        name="direccion"
                        id="direccion"
                        value="<?= isset($old) ? htmlspecialchars($old["direccion"]) : "" ?>"
                        required/>
                </div>
            </div>
            <div class="mb-3 row">
                <label
                    for="poblacion"
                    class="col-4 col-form-label">Población</label>
                <div
                    class="col-8">
                    <input
                        type="text"
                        class="form-control"
                        name="poblacion"
                        id="poblacion"
                        value="<?= isset($old) ? htmlspecialchars($old["poblacion"]) : "" ?>"
                        required/>
                </div>
            </div>
            <div class="mb-3 row">
                <label
                    for="cp"
                    class="col-4 col-form-label">CP</label>
                <div
                    class="col-3">
                    <input
                        type="text"
                        class="form-control"
                        name="cp"
                        id="cp"
                        value="<?= isset($old) ? htmlspecialchars($old["cp"]) : "" ?>"
                        required/>
                </div>
                <div
                    class="col-5">
                    <select required name="provincia" class="form-select">
                        <option value="">Elige Provincia</option>
                        <option value="Álava/Araba">Álava/Araba</option>
                        <option value="Albacete">Albacete</option>
                        <option value="Alicante">Alicante</option>
                        <option value="Almería">Almería</option>
                        <option value="Asturias">Asturias</option>
                        <option value="Ávila">Ávila</option>
                        <option value="Badajoz">Badajoz</option>
                        <option value="Baleares">Baleares</option>
                        <option value="Barcelona">Barcelona</option>
                        <option value="Burgos">Burgos</option>
                        <option value="Cáceres">Cáceres</option>
                        <option value="Cádiz">Cádiz</option>
                        <option value="Cantabria">Cantabria</option>
                        <option value="Castellón">Castellón</option>
                        <option value="Ceuta">Ceuta</option>
                        <option value="Ciudad Real">Ciudad Real</option>
                        <option value="Córdoba">Córdoba</option>
                        <option value="Cuenca">Cuenca</option>
                        <option value="Gerona/Girona">Gerona/Girona</option>
                        <option value="Granada">Granada</option>
                        <option value="Guadalajara">Guadalajara</option>
                        <option value="Guipúzcoa/Gipuzkoa">Guipúzcoa/Gipuzkoa</option>
                        <option value="Huelva">Huelva</option>
                        <option value="Huesca">Huesca</option>
                        <option value="Jaén">Jaén</option>
                        <option value="La Coruña/A Coruña">La Coruña/A Coruña</option>
                        <option value="La Rioja">La Rioja</option>
                        <option value="Las Palmas">Las Palmas</option>
                        <option value="León">León</option>
                        <option value="Lérida/Lleida">Lérida/Lleida</option>
                        <option value="Lugo">Lugo</option>
                        <option value="Madrid">Madrid</option>
                        <option value="Málaga">Málaga</option>
                        <option value="Melilla">Melilla</option>
                        <option value="Murcia">Murcia</option>
                        <option value="Navarra">Navarra</option>
                        <option value="Orense/Ourense">Orense/Ourense</option>
                        <option value="Palencia">Palencia</option>
                        <option value="Pontevedra">Pontevedra</option>
                        <option value="Salamanca">Salamanca</option>
                        <option value="Segovia">Segovia</option>
                        <option value="Sevilla">Sevilla</option>
                        <option value="Soria">Soria</option>
                        <option value="Tarragona">Tarragona</option>
                        <option value="Tenerife">Tenerife</option>
                        <option value="Teruel">Teruel</option>
                        <option value="Toledo">Toledo</option>
                        <option value="Valencia">Valencia</option>
                        <option value="Valladolid">Valladolid</option>
                        <option value="Vizcaya/Bizkaia">Vizcaya/Bizkaia</option>
                        <option value="Zamora">Zamora</option>
                        <option value="Zaragoza">Zaragoza</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">
                        Enviar
                    </button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>