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
        <form action="./11-muestraNotas.php" class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25 my-5 m-auto" method="get">
            <h1 class="mb-4 text-center text-primary fw-bold">
                Formulario de notas
            </h1>
            <div class="mb-3">
                <label for="num1" class="form-label">Introduzca nota1:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="number"
                    name="nota1"
                    min="0"
                    max="10"
                    id="nota1" />
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Introduzca nota2:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="number"
                    name="nota2"
                    id="nota2" />
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Introduzca nº de faltas:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="number"
                    name="faltas"
                    min="0"
                    id="faltas" />
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-success me-md-2" type="submit">
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
</body>

</html>