<?php
// Inicio de sesión para mantener las variables entre recargas
session_start();

// Inicializa las variables de sesión usadas en la práctica si no existen.
// `num1` y `num2` se usan como contadores simples para demostrar
// persistencia de datos en la sesión.
if (!isset($_SESSION['num1'])) {
    $_SESSION['num1'] = 0;
}
if (!isset($_SESSION['num2'])) {
    $_SESSION['num2'] = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="m-0">Variables de sesión</h4>
            </div>

            <div class="card-body">

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">

                    <div class="mb-3">
                        <p class="fs-5">
                            <strong>num1:</strong>
                            <span class="badge bg-secondary"><?php echo $_SESSION['num1']; ?></span>
                            <br>
                            <strong>num2:</strong>
                            <span class="badge bg-secondary"><?php echo $_SESSION['num2']; ?></span>
                        </p>
                    </div>

                    <div class="mb-3">
                        <label for="opciones" class="form-label fw-semibold">Menú de opciones:</label>
                        <select class="form-select" name="opciones" id="opciones">
                            <option selected disabled>Selecciona una opción</option>
                            <option value="aumentarNum1">Aumentar A</option>
                            <option value="aumentarNum2">Aumentar B</option>
                            <option value="disminuirNum1">Disminuir A</option>
                            <option value="disminuirNum2">Disminuir B</option>
                            <option value="resetNum1">Resetear A</option>
                            <option value="resetNum2">Resetear B</option>
                            <option value="cerrar">Cerrar sesión</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Enviar
                    </button>

                </form>
                <?php
                // Maneja la opción seleccionada en el formulario y actualiza
                // las variables de sesión en consecuencia. Tras modificar la
                // sesión se recarga la página para evitar reenvío de datos GET.
                if (isset($_GET['opciones'])) {
                    $opcion = $_GET['opciones'];

                    switch ($opcion) {
                        case "aumentarNum1":
                            $_SESSION['num1']++;
                            break;

                        case "aumentarNum2":
                            $_SESSION['num2']++;
                            break;

                        case "disminuirNum1":
                            $_SESSION['num1']--;
                            break;

                        case "disminuirNum2":
                            $_SESSION['num2']--;
                            break;

                        case "resetNum1":
                            $_SESSION['num1'] = 0;
                            break;

                        case "resetNum2":
                            $_SESSION['num2'] = 0;
                            break;

                        case "cerrar":
                            // Elimina todos los datos de la sesión y la destruye.
                            session_unset();
                            session_destroy();
                    }

                    // Recargar la página tras actualizar para mostrar nuevos valores
                    header("Location: " . $_SERVER['PHP_SELF']);
                    exit;
                }
                ?>
            </div>
        </div>

    </div>

</body>

</html>