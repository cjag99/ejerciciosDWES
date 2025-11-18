<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15. Formulario Factorial</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../BootstrapTemplates/src/styles/formStyle.css">
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">

        <form id="act15" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="border rounded-4 shadow-lg p-4 bg-secondary bg-opacity-25">
            <h1 class="mb-4 text-center text-primary fw-bold">Formulario para factorial</h1>

            <div class="mb-3">
                <label for="num" class="form-label">Introduzca un nº natural: </label>
                <input type="number" name="num" id="num" class="form-control rounded-3 bg-secondary bg-opacity-25 border">
                <span id="numHelp" style="visibility:hidden;">Error</span>
            </div>
            <div class="p-3 bg-light rounded mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="opcion" id="primo" value="primo">
                    <label class="form-check-label" for="primo"> Mostrar si es primo </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="opcion" id="divisores" value="divisores">
                    <label class="form-check-label" for="divisores"> Mostrar divisores </label>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-3">
                <button class="btn btn-success me-md-2" type="button" id="miBoton" onclick="act15()">Enviar</button>
            </div>
        </form>

        <?php
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <script src="./main.js" type="module"></script>
</body>

</html>