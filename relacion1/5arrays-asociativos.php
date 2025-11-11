<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays asociativos en php</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <!--
        Arrays asociativos en PHP
        - Muestra cómo usar keys legibles (por ejemplo, nombres de días) en lugar de índices numéricos.
        - Se presentan varias formas de volcar los datos: eco directo, listas y tablas HTML.
    -->
    <h1>Arrays asociativos en php</h1>
    <?php
    const TEMPSEMANA = [
        "Lunes" => 20,
        "Martes" => 22,
        "Miércoles" => 21,
        "Jueves" => 19,
        "Viernes" => 23,
        "Sábado" => 24,
        "Domingo" => 20
    ];
    echo "La temperatura del lunes es " . TEMPSEMANA["Lunes"] . " ºC<br><br>";
    foreach (TEMPSEMANA as $dia => $temp) {
        echo "El día $dia la temperatura fue de $temp ºC<br>";
    }
    // Mostrar en una lista HTML: foreach es ideal para arrays asociativos
    echo "<ul>";
    foreach (TEMPSEMANA as $dia => $temp) {
        echo "<li>El día $dia la temperatura fue de $temp ºC</li>";
    }
    echo "</ul>";
    //Mostrar en una tabla html
    echo "<table><tr><th>Día</th><th>Temperatura (ºC)</th></tr>";
    foreach (TEMPSEMANA as $dia => $temp) {
        echo "<tr><td>$dia</td><td>$temp</td></tr>";
    }
    ?>
</body>

</html>