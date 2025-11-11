<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8. Formularios texto</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../Bootstrap Templates/src/styles/formStyle.css">

</head>

<body>
    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5">
        <button class="btn btn-success me-md-2" type="button" onclick="formLowerUpper()">Formulario Mayus & Minus</button>
        <button class="btn btn-primary me-md-2" type="button" onclick="formLowerOrUpper()">Formulario Mayus || Minus</button>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center mt-5" id="form">
        <form
            action="<?php echo $_SERVER['PHP_SELF'] ?>"
            class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25"
            method="get"
            id="form1">
            <h1 class="mb-4 text-center text-primary fw-bold">
                Texto Mayus/Minus
            </h1>
            <input type="hidden" name="tipo" id="tipo" value="">
            <div class="mb-3">
                <label for="texto" class="form-label">Introduzca un texto</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border "
                    type="text"
                    name="texto"
                    id="texto" />
            </div>
            <div hidden id="mayusMinus">
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-success me-md-2" type="submit">Enviar</button>
                    <button class="btn btn-outline-secondary" type="reset">Borrar</button>
                </div>
            </div>

            <div hidden id="checkbox1">
                <div class="mb-3">
                    <p class="form-label">Indique la opción a ejecutar:</p>
                    <div class="form-check">
                        <input
                            class="form-check-input bg-secondary bg-opacity-25 border "
                            type="checkbox"
                            name="check1"
                            id="check1"
                            value="mayus" />
                        <label for="check1" class="form-check-label">Texto a mayúsculas</label>
                    </div>
                    <div class="form-check">
                        <input
                            class="form-check-input bg-secondary bg-opacity-25 border "
                            type="checkbox"
                            name="check2"
                            id="check2"
                            value="minus" />
                        <label for="check2" class="form-check-label">Texto a minúsculas</label>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-success me-md-2" type="submit">Enviar</button>
                    <button class="btn btn-outline-secondary" type="reset">Borrar</button>
                </div>
            </div>
    </div>
        </form>
        <!--
                Texto Mayus/Minus
                - Se ofrecen dos modos: convertir todo el texto a mayúsculas/minúsculas (form1)
                    o permitir seleccionar con checkboxes la(s) transformación(es) a aplicar (form2).
                - El campo oculto 'tipo' indica al servidor qué modo se ha usado.
        -->
    <div class="result-area text-center mt-2 w-100">

        <?php
        // Convierte el texto a minúsculas y lo muestra
        function textoLower()
        {
            if (isset($_GET['texto'])) {
                $texto = $_GET['texto'];
                echo "<p class='text-center mt-1 mb-0'>El texto $texto en minúsculas es: <b>" . strtolower($texto) . "</b></p>";
            }
        }
        // Convierte el texto a mayúsculas y lo muestra
        function textoUpper()
        {
            if (isset($_GET['texto'])) {
                $texto = $_GET['texto'];
                echo "<p class='text-center mt-1 mb-0'>El texto $texto en mayúsculas es: <b>" . strtoupper($texto) . "</b></p>";
            }
        }

        if (isset($_GET['tipo'])) {
            if ($_GET['tipo'] == 'form1') {
                textoLower();
                textoUpper();
            } elseif ($_GET['tipo'] == 'form2') {
                if (isset($_GET['check1']) && isset($_GET['check2'])) {
                    textoUpper();
                    textoLower();
                } elseif (isset($_GET['check1'])) {
                    textoUpper();
                } elseif (isset($_GET['check2'])) {
                    textoLower();
                } else {
                    echo "<div class='text-center mt-1 mb-0'><p>No se ha seleccionado ninguna opción de formateo de texto</p></div>";
                }
            }
        }
        ?>
    </div>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
        crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>

</html>