<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mejor resolución de ecuación de 2º grado</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h1>Mejor resolución de ecuación de 2º grado en php</h1>
    <?php
    $a = 2;
    $b = 0;
    $c = 0;
    echo "<p>Para la ecuación: ax² + bx + c = 0<br>Tenemos los siguiente valores:</p>";
    echo "<ul><li>a = $a</li><li>b = $b</li><li>c = $c</li></ul>";
    if ($a == 0) {
        if ($b == 0) {
            echo "<p>La ecuación no tiene soluciones reales.</p>";
        } else {
            $x = -$c / $b;
            echo "<p>La ecuación es de primer grado y tiene una solución real: x = $x</p>";
        }
    } elseif ($b == 0) {
        if ($a == 0) {
            echo "<p>La ecuación no tiene soluciones reales.</p>";
        } else {
            if (-$c / $a < 0) {
                echo "<p>La ecuación no tiene soluciones reales.</p>";
            } else {
                $x1 = sqrt(-$c / $a);
                $x2 = -sqrt(-$c / $a);
                echo "<p>La ecuación tiene dos soluciones reales: x1 = $x1 y x2 = $x2</p>";
            }
        }
    } elseif ($c == 0) {
        $x1 = 0;
        $x2 = -$b / $a;
        echo "<p>La ecuación tiene dos soluciones reales: x1 = $x1 y x2 = $x2</p>";
    } else {
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
    }
    ?>
</body>

</html>