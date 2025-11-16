<?php
ob_start();
include "./Restaurante.php";
include "./gestorRestaurante.php";
session_start();
if (!isset($_SESSION['restaurantes'])) {
    $_SESSION['restaurantes'] = [];
}
opcionesMenu();
$outputMessages = ob_get_clean();
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
        <div class="container-fluid w-100 border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25">

            <h3>Eliga que opción desea ejecutar:</h3>
            <div class="form-check">

                <input class="form-check-input" type="checkbox" id="addRestaurant"  value="addRestaurant" onchange="checkOption('addRestaurant', 'restaurantForm')">
                <label class="form-check-label" for="addRestaurant">Añadir nuevo restaurante</label><br>
            </div>
            <div class="container" id="restaurantForm" hidden>
                <form
                    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
                    class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25"
                    method="get"
                    id="form1">
                    <h1 class="mb-4 text-center text-primary fw-bold">
                        Generador de Restaurantes
                    </h1>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Introduzca el nombre del restaurante:</label>
                        <input
                            class="form-control rounded-3 bg-secondary bg-opacity-25 border "
                            type="text"
                            name="nombre"
                            id="nombre" />
                    </div>
                    <div class="mb-3">
                        <label for="tipoCocina" class="form-label">Introduzca el tipo de cocina del restaurante:</label>
                        <input
                            class="form-control rounded-3 bg-secondary bg-opacity-25 border "
                            type="text"
                            name="tipoCocina"
                            id="tipoCocina" />
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-success me-md-2" name="addRestaurant" type="submit" >
                            Crear restaurante
                        </button>
                        <button class="btn btn-outline-secondary" type="reset">Borrar</button>
                    </div>
                </form>
            </div>
            <div id="options" <?php if (empty($_SESSION['restaurantes'])) { echo 'hidden'; } ?>>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="toString"  value="toString" onclick="checkOption('toString','showRestaurante')">
                    <label class="form-check-label" for="toString"> Mostrar restaurante</label><br>
                </div>
                <div id="showRestaurante" hidden>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
                        <button
                            type="submit"
                            name="toString"
                            class="btn btn-primary">
                            Mostrar Restaurantes
                        </button>

                    </form>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="getRatings"  value="getRatings" onclick="checkOption('getRatings','showRatings')">
                    <label class="form-check-label" for="getRatings">Obtener nº de valoraciones</label><br>
                </div>
                <div id="showRatings" hidden>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
                        <button
                            type="submit"
                            name="getRatings"
                            class="btn btn-primary">
                            Mostrar Ratings
                        </button>

                    </form>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="addRating"  value="addRating" onclick="checkOption('addRating','addRatingForm')">
                    <label class="form-check-label" for="addRating">Añadir valoración</label><br>
                </div>
                <div id="addRatingForm" hidden>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
                        <div class="mb-3">
                            <label for="buscaNombre">Introduzca el nombre del restaurante a valorar:</label> <br>
                            <input type="text" name="buscaNombre" id="buscaNombre" required> <br>
                            <label for="" class="form-label">Introduzca su valoración</label> <br>
                            <input
                                type="number"
                                class="form-control"
                                name="valoracion"
                                id="valoracion"
                                aria-describedby="helpId"
                                placeholder="" />
                            <small id="helpId" class="form-text text-muted">El nº debe ser entre 1 y 5</small>
                        </div>

                        <button
                            type="submit"
                            name="addRating"
                            class="btn btn-primary">
                            Añadir valoración
                        </button>

                    </form>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="addRatings"  value="addRatings" onclick="checkOption('addRatings','addRatingsForm')">
                    <label class="form-check-label" for="addRatings">Añadir valoraciones</label><br>
                </div>
                <div id="addRatingsForm" hidden>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
                        <div class="mb-3">
                            <label for="buscaNombre2">Introduzca el nombre del restaurante a valorar:</label> <br>
                            <input type="text" name="buscaNombre2" id="buscaNombre2" required> <br>
                            <label for="" class="form-label">Introduzca sus valoraciones</label> <br>
                            <input
                                type="text"
                                class="form-control"
                                name="valoraciones"
                                id="valoraciones"
                                aria-describedby="helpId"
                                placeholder="" />
                            <small id="helpId" class="form-text text-muted">Nºs entre 1 y 5, separados por comas</small>
                        </div>

                        <button
                            type="submit"
                            name="addRatings"
                            class="btn btn-primary">
                            Añadir valoración
                        </button>

                    </form>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="averageRating" value="averageRating" onclick="checkOption('averageRating','showAverage')">
                    <label class="form-check-label" for="averageRating">Obtener media de valoraciones</label><br>
                </div>
                <div id="showAverage" hidden>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">

                        <button
                            type="submit"
                             name="averageRating"
                            class="btn btn-primary">
                            Mostrar media de valoraciones
                        </button>
                    </form>

                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="destroyRestaurant"  value="destroyRestaurant" onclick="checkOption('destroyRestaurant', 'eraseRestaurantForm')">
                    <label class="form-check-label" for="destroyRestaurant">Eliminar restaurante</label><br>
                </div>
                <div class="container" id="eraseRestaurantForm" hidden>
                    <form
                        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
                        class="border border-0 rounded-4 shadow-lg p-4 p-4 bg-secondary bg-opacity-25"
                        method="get"
                        id="form1">
                        <h1 class="mb-4 text-center text-primary fw-bold">
                            Borrar un restaurante
                        </h1>

                        <div class="mb-3">
                            <label for="borraNombre" class="form-label">Introduzca el nombre del restaurante:</label>
                            <input
                                class="form-control rounded-3 bg-secondary bg-opacity-25 border "
                                type="text"
                                name="borraNombre"
                                id="borraNombre" />
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button class="btn btn-success me-md-2" type="submit" name="destroyRestaurant">
                                Eliminar restaurante
                            </button>
                            <button class="btn btn-outline-secondary" type="reset">Borrar</button>
                        </div>
                    </form>
                </div>
                <div class="container">
                    <form action="sessionClosed.php" method="get">
                         <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button
                                type="button"
                                class="btn btn-danger btn-lg"
                                data-bs-toggle="modal"
                                data-bs-target="#modalId"
                                >
                            Cerrar sesion
                            </button>
                <!-- Modal Body -->
                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div
                            class="modal fade"
                            id="modalId"
                            tabindex="-1"
                            data-bs-backdrop="static"
                            data-bs-keyboard="false"
                            role="dialog"
                            aria-labelledby="modalTitleId"
                            aria-hidden="true"
                            >
                            <div
                                class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                role="document"
                            >
                                <div class="modal-content bg-dark text-white">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">Cierre de sesión</h5>
                                    <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body">
                                    Se eliminarán todos los restaurantes ¿Desea cerrar sesión?
                                </div>
                                <div class="modal-footer">
                                    <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                    >
                                    Cancelar
                                    </button>
                                    <button
                                    type="submit"
                                    name="sessionClosed"
                                    class="btn btn-outline-danger"
                                    >
                                    Cerrar sesión
                                    </button>
                                </div>
                                </div>
                            </div>
                            </div>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php 
        echo $outputMessages;
        ?>
    </div>
    <script src="./main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
</body>

</html>