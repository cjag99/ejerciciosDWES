<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolución de ecuación de 2º grado</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h1>Resolución de ecuación de 2º grado</h1>
    <?php
    $a = 1;
    $b = -3;
    $c = 2;
    echo "<p>Para la ecuación: ax² + bx + c = 0<br>Tenemos los siguiente valores:</p>";
    echo "<ul><li>a = $a</li><li>b = $b</li><li>c = $c</li></ul>";
    $discriminante = ($b ** 2) - (4 * $a * $c);
    if ($discriminante > 0) {
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
        echo "<p>La ecuación tiene dos soluciones reales: x1 = $x1 y x2 = $x2</p>";
    } elseif ($discriminante == 0) {
        $x = -$b / (2 * $a);
        echo "<p>La ecuación tiene una solución real: x = $x</p>";
    } else {
        echo "<p>La ecuación no tiene soluciones reales.</p>";
    }
    ?>
</body>

</html>