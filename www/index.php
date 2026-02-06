<?php
echo "<!DOCTYPE html>
    <html>
    <head>
        <title>PortFolio</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <meta >
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>
        <link rel='stylesheet' type='text/css' href='style.css'>
    </head>
        <body>
            <main>";

            include('../config/env.php');
            include("../page/template/navBar.php");

            $route = "home";

            if (isset($_GET['route'])) {
                $route = $_GET['route'];
            }

            switch ($route) {
                case "settings";
                    include("../control/settingsControl.php");
                    $tabTitle = "Settings";
                    break;
                case "authenticate";
                    include("../control/authenticateControl.php");
                    break;
                case "home";
                    include("../control/HomeControl.php");
                    $tabTitle = "Home";
                    break;
                case "about";
                    include("../control/aboutControl.php");
                    break;
                case "parcoursPro";
                    include("../control/parcoursProControl.php");
                    break;
                case "parcoursSco";
                    include("../control/parcoursScoControl.php");
                    break;
                case "projet";
                    include("../control/projetControl.php");
                    break;
                case "veilleTechno";
                    include("../control/veilleTechnoControl.php");
                    break;
                case "contact";
                    include("../control/contactControl.php");
                    break;
                case "stageUnivers";
                    include("../control/Stage/UniversControl.php");
                    break;
                case "stageAcoss";
                    include("../control/Stage/AcossControl.php");
                    break;
                case "stageAcossWeekly";
                    include("../control/Stage/AcossWeeklyControl.php");
                    break;
                default;
                    echo "<p>La route spécifié n'existe pas!</p>";
                    break;

            }?>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            </main>
        </body>
    </html>