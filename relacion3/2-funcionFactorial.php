<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. Factorial</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../Bootstrap Templates/src/styles/formStyle.css" />
</head>
<div class="d-flex flex-column justify-content-center align-items-center vh-100">
    <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="get" class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25" id="form1">
        <h1 class="mb-4 text-center text-primary fw-bold">2- Función para factorial de número</h1>
        <div class="mb-3">
            <label for="num" class="form-label">Introduzca un nº entero: </label> <br>
            <input type="number" name="num" id="num" class="form-control rounded-3 bg-secondary bg-opacity-25 border border-black"> <br>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button class="btn btn-primary me-md-2" type="submit">Enviar</button>
        </div>
    </form>
    <?php include './4-relacion3.php';
    /*function factorial($num)
    {
        if (intval($num) == 1) {
            return $num;
        } else {
            return $num * factorial($num - 1);
        }
    }*/
    if (isset($_GET['num'])) {
        $numero = $_GET['num'];
        $factorial = factorial($numero);
        echo "<div class='mt-4 text-center'>";

        echo "<p class='text-success fs-4 mt-2'>El factorial de $numero es: $factorial</p></div>";
    }
    ?>
</div>

<body>

</body>

</html>