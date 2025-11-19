<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20- Formulario conversión decimal con optimización de select</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../BootstrapTemplates/src/styles/formStyle.css">
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">

        <form id="act18" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25">
            <h1 class="mb-4 text-center text-primary fw-bold">Formulario decimal a binario</h1>
            <div class="mb-3">
                <label for="num" class="form-label">Introduzca un nº entero: </label> <br>
                <input type="number" name="num" id="num" class="form-control rounded-3 bg-secondary bg-opacity-25 border"> <br>
                <span id="numHelp" style="visibility:hidden;">Error</span>
            </div>
            <div class="mb-3">
                <label for="conversion" class="form-label">Indique el tipo de conversión:</label>
                <select
                    class="form-select rounded-3 bg-secondary bg-opacity-25 border "
                    name="conversion"
                    id="conversion">
                    <option selected value="error">Seleccione tipo de conversión</option>
                    <option value="binario">binario</option>
                    <option value="octal">octal</option>
                    <option value="hexadecimal">hexadecimal</option>
                </select>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-success me-md-2" type="button" id="miBoton" onclick="act18()">Enviar</button>
            </div>
        </form>
        <?php
        if (isset($_GET['num'])) {
            $decimal = $_GET['num'];
            $resultado = match ($_GET['conversion']) {
                "binario" => (string) decbin($decimal),
                "octal" => (string) decoct($decimal),
                "hexadecimal" => strtoupper((string) dechex($decimal)),
                default => "ERROR: Operación no existe"
            };
            echo "El resultado de la conversión de $decimal a " . $_GET['conversion'] . " es $resultado";
        }
        ?>
    </div>
    <script type="module" src="./main.js"></script>
</body>

</html>