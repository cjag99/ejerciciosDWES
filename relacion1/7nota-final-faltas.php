<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de nota final con faltas</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h1>Calcular la nota final mediante la media y faltas injustificadas</h1>
    <?php
    $nota1 = 7.5;
    $nota2 = 6.0;
    $faltas = 3;
    echo "<p>Nota 1: $nota1</p>";
    echo "<p>Nota 2: $nota2</p>";
    echo "<p>Faltas injustificadas: $faltas</p>";
    $notaFinal = (($nota1 + $nota2) / 2) - ($faltas * 0.25);
    if ($notaFinal < 5) {
        echo "El alumno ha suspendido con un " . $notaFinal;
    } else {
        echo "El alumno ha aprobado con un " . $notaFinal;
    }
    ?>
</body>

</html>