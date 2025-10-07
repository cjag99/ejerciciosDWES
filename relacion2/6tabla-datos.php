<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de datos con formato Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container mx-auto">
        <h1 class="text-center py-3">Tabla de datos</h1>
        <table class="table table-striped-columns">
            <?php
            const MOCK_DATA = [
                ["1", "Caty", "Tortis", "ctortis0@jiathis.com", "Female", "134.226.111.64"],
                ["2", "Myrtle", "Peschke", "mpeschke1@who.int", "Female", "127.194.30.27"],
                ["3", "Annemarie", "Iglesia", "aiglesia2@biglobe.ne.jp", "Female", "22.26.199.26"],
                ["4", "Cly", "Hegg", "chegg3@harvard.edu", "Male", "183.230.27.136"],
                ["5", "Kalli", "Swadden", "kswadden4@wordpress.org", "Female", "61.157.62.111"],
                ["6", "Sissie", "Currington", "scurrington5@g.co", "Female", "131.121.108.94"],
                ["7", "Cordy", "Wiley", "cwiley6@amazon.co.jp", "Male", "125.220.139.105"],
                ["8", "Bald", "Bletsoe", "bbletsoe7@nationalgeographic.com", "Male", "140.203.93.246"],
                ["9", "Ethel", "Hannabus", "ehannabus8@phoca.cz", "Female", "158.245.192.22"],
                ["10", "Corbin", "Ruler", "cruler9@soup.io", "Male", "101.254.33.100"]
            ];
            echo ("<thead>");
            echo ("<tr>");
            echo ("<th scope='col'>id</th>");
            echo ("<th scope='col'>first_name</th>");
            echo ("<th scope='col'>last_name</th>");
            echo ("<th scope='col'>email</th>");
            echo ("<th scope='col'>gender</th>");
            echo ("<th scope='col'>ip_address</th>");
            echo ("</tr>");
            echo ("</thead>");
            echo ("<tbody>");
            for ($i = 0; $i < count(MOCK_DATA); $i++) {
                echo ("<tr>");
                for ($j = 0; $j < count(MOCK_DATA[$i]); $j++) {
                    if ($j == 0) {
                        echo ("<th scope='row'>" . MOCK_DATA[$i][0] . "</th>");
                    } else {
                        echo ("<td>" . MOCK_DATA[$i][$j] . "</td>");
                    }
                }
                echo ("</tr>");
            }
            echo ("</tbody>");
            echo ("</table>");
            ?>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>