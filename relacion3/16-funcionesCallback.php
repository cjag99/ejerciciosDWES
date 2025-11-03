<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16. Funciones Callback</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <h1>16- Funciones callback</h1>
        <?php
        $array = range(1, 100);
        $esPos = array_all($array, function ($n) {
            return $n < 0 ? False : True;
        }); //!: solo funciona en php 8.4 o superior
        echo phpversion();
        echo "¿Son todos los elementos del array positivos?: $esPos <br>";
        ?>
    </div>
</body>

</html>