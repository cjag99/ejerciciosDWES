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
        <form action="./5-mostrarCallificaciones.php" class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25 my-5 m-auto" method="get" id="act5">
            <h1 class="mb-4 text-center text-primary fw-bold">
                Formulario de calificaciones
            </h1>
            <div class="mb-3">
                <label for="nombre" class="form-label">Introduzca su nombre:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="text"
                    name="nombre"
                    required
                    minlength="1"
                    id="nombre" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Introduzca su correo electrónico:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="email"
                    name="email"
                    required
                    id="email" />
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="documento" value="dni" id="dnI" />
                <label class="form-check-label" for="dnI"> DNI </label>

            </div>
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="radio"
                    name="documento"
                    value="nie"
                    id="niE" />
                <label class="form-check-label" for="niE">
                    NIE
                </label>
                <span id="documentoHelp" class="text-danger" style="visibility:hidden;">Error</span>
            </div>
            <div id="dniContainer" class="mb-3" hidden>
                <label for="dni">Introduzca su documento de identidad:</label> <br>
                <input class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="text" name="dni" id="dni" required>
                <span id="dniHelp" class="text-danger" style="visibility: hidden;">Error</span>
            </div>
            <div id="nieContainer" class="mb-3" hidden>
                <label for="nie">Introduzca su documento de identidad:</label> <br>
                <input class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="text" name="nie" id="nie" required>
                <span id="nieHelp" class="text-danger" style="visibility: hidden;">Error</span> <br>
                <label for="tie">Introduza su nº de TIE:</label> <br>
                <input class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="text" name="tie" id="tie" required>
                <span id="tieHelp" class="text-danger" style="visibility: hidden;">Error</span>
            </div>
            <div class="mb-3">
                <label for="inicial" class="form-label">Introduzca nota inicial:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="number"
                    name="inicial"
                    min="0"
                    max="10"
                    id="inicial" />
            </div>
            <div class="mb-3">
                <label for="primera" class="form-label">Introduzca nota primera:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="number"
                    name="primera"
                    id="primera" />
            </div>
            <div class="mb-3">
                <label for="segunda" class="form-label">Introduzca nota segunda:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="number"
                    name="segunda"
                    min="0"
                    max="10"
                    id="segunda" />
            </div>
            <div class="mb-3">
                <label for="tercera" class="form-label">Introduzca nota tercera:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border"
                    type="number"
                    name="tercera"
                    min="0"
                    max="10"
                    id="tercera" />
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-success me-md-2" type="button">
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


    <script src="./main.js" type="module"></script>
</body>

</html>