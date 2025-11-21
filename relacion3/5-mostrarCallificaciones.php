<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../BootstrapTemplates/src/styles/formStyle.css">
</head>

<body>
    <?php
    include "./functionsRel3.php";
    $rubrica = [
        "Inicial" => 0.2,
        "Primera" => 0.3,
        "Segunda" => 0.2,
        "Tercera" => 0.3
    ];
    $calificaciones;

    if (isset($_GET['inicial']) && isset($_GET['primera']) && isset($_GET['segunda']) && isset($_GET['tercera'])) {
        $calificaciones = [
            "Inicial" => $_GET['inicial'],
            "Primera" => $_GET['primera'],
            "Segunda" => $_GET['segunda'],
            "Tercera" => $_GET['tercera']
        ];
    }
    if (isset($_GET['documento'])) {
        $resultado = match ($_GET['documento']) {
            "dni" => $_GET['dni'] . calcularLetraDNI(intval($_GET['dni'])),
            "nie" => $_GET['nie'] . calcularLetraNIE($_GET['nie']) . "-" . formatTIE($_GET['tie'])
        };
    }
    if (isset($_GET['nombre']) && $_GET['email']) {

        echo "
    <div class='container mt-5'>
        <div class='card shadow-lg bg-secondary bg-opacity-25'>
            <div class='card-body'>
                <h1 class='text-primary mb-4 text-center'>Boletín de Calificaciones</h1>

                <h4 class='text-dark'>Alumno: <span class='text-light'>" . $_GET['nombre'] . "</span></h4>
                <h5 class='text-dark mb-4'>Correo: <span class='text-light'>" . $_GET['email'] . "</span></h5>
                <h5 class='text-dark mb-4'>Documento de identidad: <span class='text-light'>" . $resultado . "</span></h5>
                <h4 class='mt-4'>Rúbrica</h4>
                <ul class='list-group list-group mb-4'>";

        foreach ($rubrica as $key => $value) {
            echo "<li class='list-group-item d-flex justify-content-between bg-secondary bg-opacity-25'>
                            <strong>$key</strong> 
                            <span>$value</span>
                          </li>";
        }

        echo "</ul>";

        $notaFinal = 0;

        echo "<h4 class='mt-4 mb-3'>Calificaciones</h4>";

        foreach ($calificaciones as $key => $value) {
            $porcentaje = ($value / 10) * 100;

            echo "<p class='mt-3 mb-1'><strong>$key</strong>: $value / 10</p>";

            echo "<div class='progress mb-2'>
                <div
                    class='progress-bar bg-primary'
                    role='progressbar'
                    style='width: $porcentaje%;'
                    aria-valuenow='$value'
                    aria-valuemin='0'
                    aria-valuemax='10'
                >
                    " . intval($porcentaje) . "%
                </div>
              </div>";

            $notaFinal += $value * $rubrica[$key];
        }

        // Mostrar resultado final redondeado
        $notaFinal = round($notaFinal, 2);

        if ($notaFinal < 5) {
            echo "<div class='alert alert-danger mt-4' role='alert'>
                <strong>Lo sentimos,</strong> has suspendido con un $notaFinal
              </div>";
        } else {
            echo "<div class='alert alert-success mt-4' role='alert'>
                <strong>Enhorabuena,</strong> has aprobado con un $notaFinal
              </div>";
        }

        echo "
            </div>
        </div>
    </div>";
    }
    ?>

</body>

</html>