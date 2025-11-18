<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../BootstrapTemplates/src/styles/formStyle.css">
</head>

<body>
    <?php
    if (isset($_GET['inicial'])) {
        $nota = floatval($_GET['inicial']); // convertir a número

        // Determinar color según nota
        if ($nota >= 9) {
            $color = "success"; // verde
            $resultado = "SOBRESALIENTE";
        } elseif ($nota >= 7) {
            $color = "info"; // azul claro
            $resultado = "NOTABLE";
        } elseif ($nota >= 6) {
            $color = "primary"; // azul
            $resultado = "BIEN";
        } elseif ($nota >= 5) {
            $color = "warning"; // amarillo
            $resultado = "SUFICIENTE";
        } elseif ($nota >= 0) {
            $color = "danger"; // rojo
            $resultado = "INSUFICIENTE";
        } else {
            $color = "secondary";
            $resultado = "Nota no válida";
        }

        // Convertir nota a porcentaje para progress bar (0-10 → 0-100%)
        $porcentaje = min(max($nota * 10, 0), 100);

        echo "
    <div class='container my-5'>
        <div class='row justify-content-center'>
            <div class='col-md-6'>
                <div class='card text-center shadow-lg'>
                    <div class='card-header bg-dark text-white'>
                        Resultado de la calificación
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title'>Nota introducida: <span class='fw-bold'>{$nota}</span></h5>
                        <p class='card-text fs-5 text-{$color}'>{$resultado}</p>
                        <div class='progress' style='height: 30px;'>
                            <div class='progress-bar bg-{$color}' role='progressbar'
                                style='width: {$porcentaje}%;'
                                aria-valuenow='{$nota}' aria-valuemin='0' aria-valuemax='10'>
                                {$nota}/10
                            </div>
                        </div>
                    </div>
                    <div class='card-footer'>
                        <a href='./14-aprobadoSwitchForm.php' class='btn btn-outline-primary mt-3'>Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
    }
    ?>
</body>

</html>