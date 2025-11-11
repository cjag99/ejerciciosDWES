<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15. Funciones arrow</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../Bootstrap Templates/src/styles/formStyle.css">
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="get" class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25" id="form1">
            <h1 class="mb-4 text-center text-primary fw-bold">Funciones arrow</h1>
            <div class="mb-3">
                <label for="num" class="form-label">Introduzca un nº positivo: </label> <br>
                <input type="number" name="num" id="num" class="form-control rounded-3 bg-secondary bg-opacity-25 border "> <br>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-success me-md-2" type="submit">Enviar</button>
            </div>
        </form>
        <?php
        // Ejemplo de funciones flecha (arrow functions) disponibles en PHP 7.4+
        // Sintaxis compacta equivalente a pequeñas funciones anónimas
        if (isset($_GET['num'])) {
            $n = intval($_GET['num']);
            $circunferencia = fn($n) => 2 * M_PI * $n;

            $circulo = fn($n) => M_PI * ($n ** 2);

            $esfera = fn($n) => (4 / 3) * M_PI * ($n ** 3);

            echo "Longitud del círculo: " . $circunferencia($n) . "<br>";
            echo "Área del círculo: " . $circulo($n) . "<br>";
            echo "Volumen de la esfera: " . $esfera($n);
        }
        ?>
    </div>
</body>

</html>