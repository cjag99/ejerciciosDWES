<!doctype html>
<html lang="en">

<head>
    <title>7- Formulario de 2 números</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../BootstrapTemplates/src/styles/formStyle.css">
</head>

<body>
    <div class="container-fluid w-100">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25 my-5 m-auto" method="get">
            <h1 class="mb-4 text-center text-primary fw-bold">
                Formulario 2 números
            </h1>
            <div class="mb-3">
                <label for="num1" class="form-label">Introduzca un número:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="number"
                    name="num1"
                    id="num1" />
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Introduzca otro número:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="number"
                    name="num2"
                    id="num2" />
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-success me-md-2" type="submit">
                    Enviar
                </button>
                <button class="btn btn-outline-secondary" type="reset">Borrar</button>
            </div>
        </form>
        <?php
        if (isset($_GET['num1']) && isset($_GET['num2'])) {
            echo "<div class='container-fluid m-auto w-25'><ul class='list-group list-group-numbered'>
                <li class='list-group-item bg-secondary bg-opacity-25'><b>Primer número</b>= ", $_GET['num1'], "</li>
                <li class='list-group-item bg-secondary bg-opacity-25'><b>Segundo número</b>= ", $_GET['num2'], "</li>
            </ul></div>";
        }
        ?>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>