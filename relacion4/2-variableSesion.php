<?php
session_start();
$_SESSION['num1'] = 0;
$_SESSION['num2'] = 0;
?>
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
</head>

<body>
    <div class="container-fluid w-75 m-auto my-5 bg-light">
        <form action="<?php echo htmlspecialchars($_SERVER_SERVER['PHP_SELF']); ?>" method="get">
            <h3>Variables de sesión</h3>
            <div class="mb-3">
                <label for="opciones" class="form-label">Menú de opciones:</label>
                <select
                    class="form-select form-select-lg"
                    name="opciones"
                    id="opciones">
                    <option selected disabled>Select one</option>
                    <option value="">Aumentar a</option>
                    <option value="">Aumentar b</option>
                    <option value="">Disminuir a</option>
                    <option value="">Disminuir b</option>
                    <option value="">Resetear a</option>
                    <option value="">Resetear b</option>
                    <option value="">Cerrar sesión</option>
                </select>
            </div>
            <button
                type="submit"
                class="btn btn-primary">
                Enviar
            </button>
        </form>

    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>