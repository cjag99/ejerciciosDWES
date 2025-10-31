<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5. Tiradas de un dado</title>
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
            <h1 class="mb-4 text-center text-primary fw-bold">5- Tiradas de un dado(Clase Math)</h1>
            <div class="mb-3">
                <label for="num" class="form-label">Introduzca un nº entero: </label> <br>
                <input type="number" name="num" id="num" class="form-control rounded-3 bg-secondary bg-opacity-25 border border-black"> <br>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-success me-md-2" type="submit">Enviar</button>
            </div>
        </form>
        <?php
        if (isset($_GET['num'])) {
            $tiradas = intval($_GET['num']);
            echo "<br><h3 class='text-primary'>Tiramos el dado $tiradas veces:</h3>";
            echo "<div class='d-flex flex-row justify-content-center align-items-center mt-4'>";
            $dadoNormal = array_fill(1, 6, 0);
            $dadoTrucado = array_fill(1, 6, 0);
            for ($i = 0; $i < $tiradas; $i++) {
                $tirada = rand(1, 6);
                $tiradaTrucada = rand(1, 8);
                switch ($tirada) {
                    case 1:
                        $dadoNormal[$tirada]++;
                        break;
                    case 2:
                        $dadoNormal[$tirada]++;
                        break;
                    case 3:
                        $dadoNormal[$tirada]++;
                        break;
                    case 4:
                        $dadoNormal[$tirada]++;
                        break;
                    case 5:
                        $dadoNormal[$tirada]++;
                        break;
                    case 6:
                        $dadoNormal[$tirada]++;
                        break;
                }
                if ($tiradaTrucada < 6) {
                    $dadoTrucado[$tiradaTrucada]++;
                } else {
                    $dadoTrucado[6]++;
                }
            }
            echo "<div class='text-center me-5'>";
            echo "<p class='mt-2'>Tiradas con dado equiprobable:</p>";
            echo "<ul>";
            foreach ($dadoNormal as $index => $porcentaje) {
                echo "<li>Tirada $index: " . number_format((($porcentaje / $tiradas) * 100), 2) . "%</li>";
            }
            echo "</ul>";
            echo "</div>";
            echo "<div class='text-center'>";
            echo "<p class='mt-2'>Tiradas con dado trucado:</p>";
            echo "<ul>";
            foreach ($dadoTrucado as $index => $porcentajeTrucado) {
                echo "<li>Tirada $index: " . number_format((($porcentajeTrucado / $tiradas) * 100), 2) . "%</li>";
            }
            echo "</ul></div>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>