<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays en php</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h1>Arrays en php</h1>
    <?php
    const DIASSEMANA = [
        "Lunes",
        "Martes",
        "Miércoles",
        "Jueves",
        "Viernes",
        "Sábado",
        "Domingo"
    ];
    //En php las constantes se definen con const y en mayúsculas por convención
    echo "El primer día de la semana es " . DIASSEMANA[0] . "<br>";
    for ($i = 0; $i < count(DIASSEMANA); $i++) {
        echo "Día " . ($i + 1) . ": " . DIASSEMANA[$i] . "<br>";
    }
    echo "<ul>";
    for ($i = 0; $i < count(DIASSEMANA); $i++) {
        echo "<li>" . DIASSEMANA[$i] . "</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>