<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. Es primo</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../Bootstrap Templates/src/styles/formStyle.css" />
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <!--
            1 - Función para comprobar números primos
            - Formulario que recibe un número entero y muestra los primos desde 1 hasta ese número.
            - La comprobación se realiza por inclusión de funciones desde `functionsRel3.php` (mostrarPrimos).
            - Nota: el método usado es didáctico (comprobación O(n^2) en total); para rangos grandes usar algoritmos optimizados.
        -->
        <form id="act1" action=<?php echo $_SERVER['PHP_SELF'] ?> method="get" class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25" id="form1">
            <h1 class="mb-4 text-center text-primary fw-bold">1- Función para nº primo</h1>
            <div class="mb-3">
                <label for="num" class="form-label">Introduzca un nº entero: </label> <br>
                <input type="number" name="num" id="num" class="form-control rounded-3 bg-secondary bg-opacity-25 border"> <br>
                <span id="numHelp" style="visibility:hidden;">Error</span>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-success me-md-2" type="button" id="miBoton" onclick="acti1()">Enviar</button>
            </div>
        </form>
    <?php include './functionsRel3.php';
    // Se incluye la librería local con las funciones reutilizables (mostrarPrimos, etc.)
        /*function mostrarPrimos($num)
        {
            echo "<div class='mt-4 text-center'>";
            echo "<h3 class='text-primary'>Números primos entre 1 y $num:</h3>";
            echo "<p class='mt-2'>";
            for ($i = 1; $i <= $num; $i++) {
                $esPrimo = true;
                for ($j = 2; $j < $i; $j++) {
                    if ($i % $j == 0) {
                        $esPrimo = false;
                        break;
                    }
                }
                if ($esPrimo) {
                    echo "<span class='mx-1 fw-bold'>$i</span>";
                }
            }
            echo "</p></div>";
        }*/

        if (isset($_GET['num'])) {
            // Convertir a entero y delegar la generación de salida a mostrarPrimos()
            $numero = intval($_GET['num']);
            mostrarPrimos($numero);
        }
        ?>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
        crossorigin="anonymous"></script>
    <script src="./main.js" type="module"></script>
</body>

</html>