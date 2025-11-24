<?php
// Inicia la sesión para poder almacenar información del usuario
// y controlar el estado de autenticación a lo largo de las páginas.
session_start();

// Credenciales de ejemplo usadas por la demo. En un entorno real
// estas NO deberían estar en texto plano ni en el código.
define('USER', 'user1');
define('PASSWORD', '1234');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, 
                   initial-scale=1,
                   shrink-to-fit=no" />
    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <title>Bootstrap Form</title>
</head>

<body>
    <h1 class="text-success text-center">
        Ejemplo Login
    </h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="registrationForm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
                            <div class="form-group">
                                <label for="usuario">
                                    Introduzca su usuario
                                </label>
                                <input type="text"
                                    class="form-control"
                                    id="usuario"
                                    name="usuario"
                                    placeholder="Nombre de usuario" required />
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Introduzca su contraseña
                                </label>
                                <input type="password"
                                    class="form-control"
                                    id="password"
                                    name="password"
                                    placeholder="Contraseña"
                                    required />
                            </div>
                            <button class="btn btn-primary">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
                <?php
                // Procesamiento simple del formulario de login (método GET
                // usado en la práctica de clase). Comprueba las credenciales
                // contra las constantes definidas arriba y, si son válidas,
                // guarda datos en la sesión y redirige al panel de control.
                if (isset($_GET['usuario']) && isset($_GET['password'])) {
                    // Verifica usuario
                    if ($_GET['usuario'] === USER) {
                        // Almacena el usuario en la sesión para indicar que
                        // el usuario está logueado.
                        $_SESSION['user'] = USER;
                        // Verifica contraseña
                        if ($_GET['password'] === PASSWORD) {
                            // Guarda la contraseña (ejemplo) y redirige
                            $_SESSION['pass'] = PASSWORD;
                            header("Location: ./controlPanel.php");
                            exit;
                        } else {
                            // Mensaje de error si la contraseña no coincide
                            echo "<br><div
                                        class='alert alert-danger'
                                        role='alert'
                                    >
                                        <strong>ERROR:</strong> contraseña no válida
                                    </div>";
                        }
                    } else {
                        // Mensaje de error si el usuario no existe
                        echo "<br><div
                                        class='alert alert-danger'
                                        role='alert'
                                    >
                                        <strong>ERROR:</strong> usuario no válido
                                    </div>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>