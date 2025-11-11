<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13. Manejo de Strings</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../Bootstrap Templates/src/styles/formStyle.css">
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <form
            action="<?php echo $_SERVER['PHP_SELF'] ?>"
            class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25"
            method="get"
            id="form1">
            <h1 class="mb-4 text-center text-primary fw-bold">
                Manejo de Strings
            </h1>

            <div class="mb-3">
                <label for="texto" class="form-label">Introduzca una cadena de caracteres</label>
                <input
                    class="form-control rounded-3 bg-secondary bg-opacity-25 border border-black"
                    type="text"
                    name="texto"
                    id="texto" />
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-success me-md-2" type="submit">
                    Enviar
                </button>
                <button class="btn btn-outline-secondary" type="reset">Borrar</button>
            </div>
        </form>
        <?php
        // Utilidades de manejo de strings: palíndromo, invertir palabras, mayúsculas/minúsculas, conteos y encriptados
        function esPalindromo($texto)
        {
            $mensaje = "";
            if ($texto == strrev($texto)) {
                $mensaje = "La cadena es palíndroma";
            } else {
                $mensaje = "La cadena no es palíndroma";
            }
            // Muestra la cadena invertida y si es palíndroma
            echo "<div class='alert alert-primary' role='alert'>$texto del revés: " . strrev($texto) . "<br>$mensaje</div>";
        }
        function palabrasRevertidas($texto)
        {
            // Devuelve la cadena con el orden de palabras invertido
            $palabras = explode(" ", $texto);
            $palabrasInvertidas = array_reverse($palabras);
            $textoInvertido = implode(" ", $palabrasInvertidas);
            echo "<div class='alert alert-secondary' role='alert'>La cadena $texto con las palabras invertidas es: $textoInvertido</div>";
        }
        function mayusMinus($texto)
        {
            // Muestra la cadena en minúsculas y en mayúsculas
            echo "<div class='alert alert-success' role='alert'>La cadena $texto en minúsculas es: " . strtolower($texto) . "</div>";
            echo "<div class='alert alert-danger' role='alert'>La cadena $texto en mayúsculas es: " . strtoupper($texto) . "</div>";
        }
        function recuentoString($texto)
        {
            // strlen cuenta caracteres; str_word_count cuenta palabras
            echo "<div class='alert alert-warning' role='alert'>La cadena $texto tiene " . strlen($texto) . " caracteres</div>";
            echo "<div class='alert alert-info' role='alert'>La cadena $texto tiene " . str_word_count($texto) . " palabras</div>";
        }
        function encriptarTexto($texto)
        {
            // Ejemplos de funciones hash/crypt; notar que crypt/md5/sha1 no se deben usar para almacenar contraseñas en producción
            echo "<div class='alert alert-warning' role='alert'> $texto con crypt: " . crypt($texto, 'st') . "</div>";
            echo "<div class='alert alert-info' role='alert'>$texto con md5: " . md5($texto) .  " palabras</div>";
            echo "<div class='alert alert-success' role='alert'>$texto con sha1: " . sha1($texto) .  " caracteres</div>";
        }
        if (isset($_GET['texto'])) {
            $texto = $_GET['texto'];
            echo "<div class='container mt-4'>";
            echo "<div class='row g-3'>";

            echo "<div class='col-md-6'>";
            esPalindromo($texto);
            palabrasRevertidas($texto);
            mayusMinus($texto);
            echo "</div>";

            echo "<div class='col-md-6'>";
            recuentoString($texto);
            encriptarTexto($texto);
            echo "</div>";

            echo "</div></div>";
        }
        ?>
    </div>
</body>

</html>