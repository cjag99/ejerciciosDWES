<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../BootstrapTemplates/src/styles/formStyle.css">
</head>

<body>
    <div class="container-fluid w-100">
        <form action="./14-mostrarAprobado.php" class=" border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25 my-5 m-auto" method="get" id="act14">
            <h1 class="mb-4 text-center text-primary fw-bold">
                Formulario de calificaciones
            </h1>

            <div class="mb-3">
                <label for="inicial" class="form-label">Introduzca su nota:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="number"
                    name="inicial"
                    id="inicial" />
                <span id="inicialHelp" style="visibility:hidden;">Error</span>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-success me-md-2" type="button" onclick="act14()">
                    Enviar
                </button>
                <button class="btn btn-outline-secondary" type="reset">Borrar</button>
            </div>
        </form>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script type="module" src="./main.js"></script>
</body>

</html>