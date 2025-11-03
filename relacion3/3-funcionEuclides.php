<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3. Cálculo de Euclides</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../Bootstrap Templates/src/styles/formStyle.css" />
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="get" class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25" id="form1">
            <h1 class="mb-4 text-center text-primary fw-bold">1- Función para cálculo de Euclides</h1>
            <div class="mb-3">
                <label for="num1" class="form-label">Introduzca num1: </label> <br>
                <input type="number" name="num1" id="num" class="form-control rounded-3 bg-secondary bg-opacity-25 border border-black"> <br>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Introduzca num2: </label> <br>
                <input type="number" name="num2" id="num" class="form-control rounded-3 bg-secondary bg-opacity-25 border border-black"> <br>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-success me-md-2" type="submit">Enviar</button>
            </div>
        </form>
        <?php include './functionsRel3.php';
        /*function divisionEuclides($dividendo, $divisor)
        {
            if ($dividendo < 0 || $divisor < 0) {
                return "Los números deben ser naturales (mayores o iguales a 0)";
            }
            if ($divisor == 0) {
                return "El divisor no puede ser 0";
            }
            //Caso base dividendo menor que divisor: cociente es 0 y el resto es el divisor
            if ($dividendo < $divisor) {
                return [
                    "cociente" => 0,
                    "resto" => $dividendo
                ];
            }
            // Caso recursivo: restamos el divisor y aumentamos el cociente en 1
            $resultado = divisionEuclides($dividendo - $divisor, $divisor);
            $resultado["cociente"]++;
            return $resultado;
        }

        function mcdEuclides($num1, $num2)
        {
            if ($num1 == $num2) {
                return $num1;
            } elseif ($num1 > $num2) {
                return mcdEuclides($num1 - $num2, $num2);
            } else {
                return mcdEuclides($num1, $num2 - $num1);
            }
        }*/
        if ((isset($_GET['num1']) and (isset($_GET['num2'])))) {
            $numero1 = intval($_GET['num1']);
            $numero2 = intval($_GET['num2']);
            $division = divisionEuclides($numero1, $numero2);
            $mcd = mcdEuclides($numero1, $numero2);
            echo "<div class='mt-4 text-center'>";
            echo "<ul>";
            foreach ($division as $clave => $valor) {
                echo "<li>$clave: $valor</li>";
            }
            echo "</ul>";
            echo "<p class='text-success fs-4 mt-2'>El mcd de $numero1 y $numero2 es: $mcd</p></div>";
        }

        ?>
    </div>

</body>

</html>