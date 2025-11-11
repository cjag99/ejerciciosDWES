<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5- Estilo tablas</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body class="bg-light">

    <div class="container py-5">
        <h1 class="text-center text-primary mb-5">Arrays asociativos en PHP</h1>

        <?php
        // Array asociativo que contiene la temperatura (ºC) por día.
        // Se muestra como lista y como tabla para practicar bucles y presentación con Bootstrap.
        const TEMPSEMANA = [
            "Lunes" => 20,
            "Martes" => 22,
            "Miércoles" => 21,
            "Jueves" => 19,
            "Viernes" => 23,
            "Sábado" => 24,
            "Domingo" => 20
        ];

        echo '<div class="card shadow-sm mb-4">';
        echo '<div class="card-body">';
        echo '<h2 class="card-title text-secondary mb-3">Temperaturas semanales</h2>';

        echo "<p>La temperatura del <strong>lunes</strong> es <span class='text-primary fw-bold'>" . TEMPSEMANA["Lunes"] . " ºC</span>.</p>";

        // Lista con badges que muestran la temperatura por día.
        echo '<h5 class="text-muted">Resumen de temperaturas:</h5>';
        echo '<ul class="list-group mb-4">';
        foreach (TEMPSEMANA as $dia => $temp) {
            echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
            echo "<span>$dia</span><span class='badge bg-primary rounded-pill'>$temp ºC</span>";
            echo "</li>";
        }
        echo '</ul>';

    // Mostrar tabla con estilo Bootstrap: convertimos el array asociativo en filas.
        echo '<h5 class="text-muted">Tabla de temperaturas:</h5>';
        echo '<div class="table-responsive">';
        echo '<table class="table table-bordered table-hover align-middle text-center">';
        echo '<thead class="table-primary">';
        echo '<tr><th scope="col">Día</th><th scope="col">Temperatura (ºC)</th></tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach (TEMPSEMANA as $dia => $temp) {
            echo "<tr><td><strong>$dia</strong></td><td>$temp</td></tr>";
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';

        echo '</div>';
        echo '</div>';
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>