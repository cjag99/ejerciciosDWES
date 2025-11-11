<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11. Invertir elementos</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body class="bg-light">

    <div class="container py-5">
        <h1 class="text-center mb-5 text-primary">11 - Invirtiendo valores</h1>

    <?php
    // Ejemplo de intercambio de variables y de inversión de arrays.
    // Funciones reutilizables swap() e invertirArray() están en `functionsRel3.php`.
    include "./functionsRel3.php";

    $var1 = "Hola";
    $var2 = "Adios";
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        echo '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-body">';
        echo '<h2 class="card-title text-secondary mb-3">Valores iniciales</h2>';
        echo '<ul class="list-group list-group-flush mb-3">';
        echo "<li class='list-group-item'><strong>Var 1:</strong> $var1</li>";
        echo "<li class='list-group-item'><strong>Var 2:</strong> $var2</li>";
        echo "<li class='list-group-item'><strong>Array:</strong> " . implode(' ', $array) . "</li>";
        echo '</ul>';
        echo '</div>';
        echo '</div>';

    // Llamadas a funciones que modifican por referencia
    swap($var1, $var2); // intercambia dos variables por referencia
    invertirArray($array); // invierte el array in-place

        echo '<div class="card shadow-sm">';
        echo '<div class="card-body">';
        echo '<h2 class="card-title text-secondary mb-3">Valores invertidos</h2>';
        echo '<ul class="list-group list-group-flush">';
        echo "<li class='list-group-item'><strong>Var 1:</strong> $var1</li>";
        echo "<li class='list-group-item'><strong>Var 2:</strong> $var2</li>";
        echo "<li class='list-group-item'><strong>Array invertido:</strong> " . implode(' ', $array) . "</li>";
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        ?>

    </div>

    <!-- Script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>