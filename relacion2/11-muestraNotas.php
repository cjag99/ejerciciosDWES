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
    if (isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['faltas'])) {
        $notaFinal = (($_GET['nota1'] + $_GET['nota2']) / 2) - ($_GET['faltas'] * 0.25);
        if ($notaFinal < 5) {
            echo "<div class='alert alert-danger' role='alert'><strong>Lo sentimos,</strong>has suspendido con un ", $notaFinal, "</div>";
        } else {
            echo "<div class='alert alert-success' role='alert'><strong>Enhorabuena,</strong>has aprobado con un ", $notaFinal, "</div>";
        }
    }
    ?>
</body>

</html>