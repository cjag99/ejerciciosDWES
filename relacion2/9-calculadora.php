<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9.Calculadora php</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../BootstrapTemplates/src/styles/formStyle.css">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form
            class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25"
            method="get"
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
            id="form1">
            <h1 class="mb-4 text-center text-primary fw-bold">
                Formulario calculadora
            </h1>

            <div class="mb-3">
                <label for="num1" class="form-label">Introduzca un número:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border "
                    type="number"
                    name="num1"
                    id="num1" />
            </div>

            <div class="mb-3">
                <label for="operador" class="form-label">Indique el tipo de operación:</label>
                <select
                    class="form-select rounded-3 bg-secondary bg-opacity-25 border "
                    name="operador"
                    id="operador">
                    <option selected disabled>Seleccione una operación</option>
                    <option value="suma">+</option>
                    <option value="resta">-</option>
                    <option value="producto">*</option>
                    <option value="cociente">/</option>
                    <option value="modulo">%</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="num2" class="form-label">Introduzca otro número:</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border "
                    type="number"
                    name="num2"
                    id="num2" />
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-success me-md-2" type="submit">
                    Calcular
                </button>
                <button class="btn btn-outline-secondary" type="reset">Borrar</button>
            </div>
        </form>
        <?php
        if (isset($_GET['num1']) && isset($_GET['num2'])) {
            if (isset($_GET['operador'])) {
                switch ($_GET['operador']) {
                    case "suma":
                        echo $_GET['num1'], "+", $_GET['num2'], "= ", $_GET['num1'] + $_GET['num2'];
                        break;
                    case "resta":
                        echo $_GET['num1'], "-", $_GET['num2'], "= ", $_GET['num1'] - $_GET['num2'];
                        break;
                    case "producto":
                        echo $_GET['num1'], "*", $_GET['num2'], "= ", $_GET['num1'] * $_GET['num2'];
                        break;
                    case "cociente":
                        if ($_GET['num2'] == 0) {
                            echo "<div class='alert alert-danger' role='alert'><strong>Error:</strong> división por 0</div>";
                        } else {
                            echo $_GET['num1'], "/", $_GET['num2'], "= ", $_GET['num1'] / $_GET['num2'];
                        }
                        break;
                    case "modulo":
                        if ($_GET['num2'] == 0) {
                            echo "<div class='alert alert-danger' role='alert'><strong>Error:</strong> división por 0</div>";
                        } else {
                            echo $_GET['num1'], "%", $_GET['num2'], "= ", $_GET['num1'] % $_GET['num2'];
                        }
                        break;
                }
            }
        }
        ?>
    </div>
</body>

</html>