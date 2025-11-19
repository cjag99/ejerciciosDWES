<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17- Algoritmo de Euclides</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../BootstrapTemplates/src/styles/formStyle.css">
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">

        <form id="act17" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25">
            <h1 class="mb-4 text-center text-primary fw-bold">Formulario algoritmo Euclides</h1>
            <div class="mb-3">
                <label for="num1" class="form-label">Introduzca un nº natural: </label> <br>
                <input type="number" name="num1" id="num1" class="form-control rounded-3 bg-secondary bg-opacity-25 border"> <br>
                <span id="num1Help" style="visibility:hidden;">Error</span>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Introduzca otro nº natural: </label> <br>
                <input type="number" name="num2" id="num2" class="form-control rounded-3 bg-secondary bg-opacity-25 border"> <br>
                <span id="num2Help" style="visibility:hidden;">Error</span>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="opcion[]" value="divide" id="divide" />
                <label class="form-check-label" for="primos"> División natural de Euclides </label>

            </div>
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="opcion[]"
                    value="mcd"
                    id="mcd" />
                <label class="form-check-label" for="divisores">
                    Máximo común divisor de Euclides
                </label> <br>
                <span id="euclidesHelp" style="visibility:hidden;">Error</span>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-success me-md-2" type="button" id="miBoton" onclick="act17()">Enviar</button>
            </div>
        </form>
        <?php
        if (isset($_GET['num1']) && isset($_GET['num2'])) {
            $dividendo = $_GET['num1'];
            $divisor = $_GET['num2'];
            $opciones = $_GET['opcion'] ?? [];
            foreach ($opciones as $opcion) {

                if ($opcion == "divide") {
                    $cociente = 0;
                    $resto = $dividendo;
                    if ($dividendo < 0 || $divisor < 0) {
                        echo "Los números deben ser naturales (mayores o iguales a 0)";
                    } else {
                        if ($divisor == 0) {
                            echo "El divisor no puede ser 0";
                        } else {
                            while ($resto >= $divisor) {
                                $resto -= $divisor;
                                $cociente++;
                            }
                            echo "El resultado de dividir $dividendo entre $divisor es: <br>";
                            echo "Cociente: $cociente <br>";
                            echo "Resto: $resto <br>";
                        }
                    }
                } elseif ($opcion == "mcd") {
                    $a = $dividendo;
                    $b = $divisor;
                    if ($a < 0 || $b < 0) {
                        echo "Los números deben ser naturales (mayores o iguales a 0)";
                    } else {
                        while ($a != $b) {
                            if ($a > $b) {
                                $a -= $b;
                            } else {
                                $b -= $a;
                            }
                        }
                        echo "El máximo común divisor es: $a";
                    }
                }
            }
        } ?>
        <script src="./main.js" type="module"></script>
</body>

</html>