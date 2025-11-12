<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú del restaurante</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>
<body class="bg-light">
    <div class="cointainer-fluid w-75 m-auto py-5">
        <h1 class="text-primary text-center">Menú de opciones del restaurante:</h1>
        <div class="container-fluid w-100 border-1">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"
             class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25"
            method="get">
            <h3>Eliga que opción desea ejecutar:</h3>
            <input type="checkbox" id="toString" name="toString" value="toString">
            <label for="toString"> Mostrar restaurante</label><br>
            <input type="checkbox" id="getRatings" name="getRatings" value="getRatings">
            <label for="getRatings">Obtener nº de valoraciones</label><br>
            <input type="checkbox" id="addRating" name="addRating" value="addRating">
            <label for="addRating">Añadir valoración</label><br> 
             <input type="checkbox" id="toString" name="toString" value="toString">
            <label for="toString"> Mostrar restaurante</label><br>
            <input type="checkbox" id="getRatings" name="getRatings" value="getRatings">
            <label for="getRatings">Obtener nº de valoraciones</label><br>
            <input type="checkbox" id="addRating" name="addRating" value="addRating">
            <label for="addRating">Añadir valoración</label><br> 
             <input type="checkbox" id="addRatings" name="addRatings" value="addRatings">
            <label for="addRatings">Añadir valoraciones</label><br>
            <input type="checkbox" id="averageRating" name="averageRating" value="averageRating">
            <label for="averageRating">Obtener media de valoraciones</label><br>
            <button type="submit">Ejecutar</button> 
            </form>
            
        </div>
    </div>
</body>
</html>