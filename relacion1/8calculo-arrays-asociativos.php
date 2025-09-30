<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de nota con rúbrica</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h1>Cálculo de notas con rúbrica en php</h1>
    <?php
    $rubrica = [
        "Inicial" => 0.2,
        "Primera" => 0.3,
        "Segunda" => 0.2,
        "Tercera" => 0.3
    ];
    $notaAlumno = [
        "Inicial" => 8.0,
        "Primera" => 5.0,
        "Segunda" => 7.0,
        "Tercera" => 6.0
    ];
    $notaFinal = 0;
    echo "<p>Rúbrica:</p>";
    echo "<ul>";
    foreach ($rubrica as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    echo "</ul>";
    echo "<p>Notas del alumno:</p>";
    echo "<ul>";
    foreach ($notaAlumno as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    echo "</ul>";
    foreach ($rubrica as $key => $value) {
        $notaFinal += $value * $notaAlumno[$key];
    }
    if ($notaFinal < 5) {
        echo "El alumno ha suspendido con un " . $notaFinal;
    } else {
        echo "El alumno ha aprobado con un " . $notaFinal;
    }
    ?>
</body>

</html>