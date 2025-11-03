<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4-Estilo listas</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body class="bg-light">

    <div class="container py-5">
        <h1 class="text-center text-primary mb-5">Arrays en PHP</h1>

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

        echo '<div class="card shadow-sm">';
        echo '<div class="card-body">';
        echo '<h2 class="card-title text-secondary mb-3">Días de la semana</h2>';
        echo "<p class='mb-3'>El primer día de la semana es <strong>" . DIASSEMANA[0] . "</strong>.</p>";

        echo '<h5 class="text-muted">Listado de días:</h5>';
        echo '<ol class="list-group list-group-numbered">';
        for ($i = 0; $i < count(DIASSEMANA); $i++) {
            echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
            echo DIASSEMANA[$i];
            echo '<span class="badge bg-primary rounded-pill">Día ' . ($i + 1) . '</span>';
            echo '</li>';
        }
        echo '</ol>';

        echo '</div>';
        echo '</div>';
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>