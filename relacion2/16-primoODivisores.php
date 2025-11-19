<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16- Primo o divisores</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../BootstrapTemplates/src/styles/formStyle.css">
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">

        <form id="act16" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25">
            <h1 class="mb-4 text-center text-primary fw-bold">Formulario primo/divisores</h1>
            <div class="mb-3">
                <label for="num" class="form-label">Introduzca un nº natural: </label> <br>
                <input type="number" name="num" id="num" class="form-control rounded-3 bg-secondary bg-opacity-25 border"> <br>
                <span id="numHelp" style="visibility:hidden;">Error</span>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="opcion" value="primos" id="primos" />
                <label class="form-check-label" for="primos"> ¿Es número primo? </label>

            </div>
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="radio"
                    name="opcion"
                    value="divisores"
                    id="divisores"
                    checked />
                <label class="form-check-label" for="divisores">
                    Divisores del número
                </label>
                <span id="divisoresHelp" style="visibility:hidden;">Error</span>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-success me-md-2" type="button" id="miBoton" onclick="act16()">Enviar</button>
            </div>
        </form>
        <?php
        if (isset($_GET['num'])) {
            $numero  = $_GET['num'];
            $opcion = $_GET['opcion'] ?? '';
            if ($opcion == "primos") {
                $esPrimo = true;
                if ($numero <= 1) {
                    echo "El número $numero no puede ser primo.";
                } else {
                    for ($i = 2; $i < $numero; $i++) {
                        if ($numero % $i == 0) {
                            $esPrimo = false;
                            break;
                        }
                    }
                }
                if ($esPrimo) {
                    echo "El número $numero es primo.";
                } else {
                    echo "El número $numero no es primo.";
                }
            } else if ($opcion == "divisores") {
                $divisor = 1;
                echo "Los divisores de $numero son: <br>";
                while ($divisor <= $numero) {
                    if ($numero % $divisor == 0) {
                        echo "<span style='color: red;'>$divisor</span> ";
                    } else {
                        echo "$divisor ";
                    }
                    $divisor++;
                }
            }
        }
        ?>
    </div>
    <script type="module" src="./main.js"></script>
</body>

</html>