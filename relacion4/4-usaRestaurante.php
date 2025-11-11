<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
            class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25"
            method="get"
            id="form1">
            <h1 class="mb-4 text-center text-primary fw-bold">
                Generador de Restaurantes
            </h1>

            <div class="mb-3">
                <label for="nombre" class="form-label">Introduzca el nombre del restaurante:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border "
                    type="text"
                    name="nombre"
                    id="nombre" />
            </div>
            <div class="mb-3">
                <label for="tipoCocina" class="form-label">Introduzca el tipo de cocina del restaurante:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border "
                    type="text"
                    name="tipoCocina"
                    id="tipoCocina" />
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-success me-md-2" type="submit">
                    Crear restaurante
                </button>
                <button class="btn btn-outline-secondary" type="reset">Borrar</button>
            </div>
        </form>
        <?php
        include './Restaurante.php';
        if (isset($_GET['nombre']) && isset($_GET['tipoCocina'])) {
            $nuevoRestaurate = new Restaurante($_GET['nombre'], $_GET['tipoCocina']);
            echo $nuevoRestaurate;
        }
        ?>
    </div>
</body>

</html>