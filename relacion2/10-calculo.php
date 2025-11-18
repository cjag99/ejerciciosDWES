 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Formulario básico</title>
     <link rel="shortcut icon" href="../relacion1/logo-ies-playamar.png" type="image/x-icon">
     <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
         crossorigin="anonymous" />
     <link rel="stylesheet" href="../BootstrapTemplates/src/styles/formStyle.css">
 </head>

 <body>
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
 </body>

 </html>