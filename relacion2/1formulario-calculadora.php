<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario básico</title>
    <link rel="shortcut icon" href="../relacion1/logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h1>Formulario básico en php</h1>
    <form action="" method="get">
        <div>
            <label for="num1">Introduzca número 1:</label>
            <input type="number" name="num1" id="num1" required>
        </div>
        <div>
            <label for="operador">Indique el operador:</label>
            <select name="operador" id="operador">
                <option value="suma">+</option>
                <option value="resta">-</option>
                <option value="producto">*</option>
                <option value="cociente">/</option>
                <option value="módulo">%</option>
            </select>
        </div>
        <div>
            <label for="num2">Introduzca otro número entero:</label>
            <input type="number" name="num2" id="num2" required>
        </div>
        <input type="submit" value="Calcular">
    </form>

</body>

</html>