<?php
include './Restaurante.php';

// Crear un restaurante
$restaurante = new Restaurante("La Buena Mesa", "Italiana");

// Añadir algunas valoraciones
try {
    $restaurante->addRatings(5, 4, 3, 5, 4);
} catch (ValueError $e) {
    echo "<div class='alert alert-danger'>Error: " . $e->getMessage() . "</div>";
}

// Obtener promedio
$promedio = $restaurante->getAverageRating();
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurante Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0"><?= $restaurante->getNombre() ?></h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Tipo de cocina:</strong> <?= $restaurante->getTipoCocina() ?></p>
                        <p><strong>Valoraciones:</strong>
                            <?= count($restaurante->getRatings()) > 0 ? implode(", ", $restaurante->getRatings()) : "Sin valoraciones" ?>
                        </p>
                        <p><strong>Promedio de valoraciones:</strong> <?= number_format($promedio, 2) ?></p>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">Añadir Valoración</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" class="row g-3">
                            <div class="col-md-4">
                                <input type="number" name="rating" class="form-control" placeholder="1-5" min="1" max="5" required>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success">Añadir</button>
                            </div>
                        </form>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rating'])) {
                            $nuevaRating = (int)$_POST['rating'];
                            try {
                                $restaurante->addRating($nuevaRating);
                                echo "<div class='alert alert-info mt-3'>Valoración $nuevaRating añadida correctamente.</div>";
                            } catch (ValueError $e) {
                                echo "<div class='alert alert-danger mt-3'>Error: " . $e->getMessage() . "</div>";
                            }
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>