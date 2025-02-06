<?php

    include ('../config/env.php');

    $route = "";

    if (isset($_GET['route'])) {
        $route = $_GET['route'];
    }

    switch ($route) {
        case "dashboard";
            include("../control/dashboardControl.php");
            break;
        case "room";
            include("../control/roomControl.php");
            break;
        case "booking";
            include("../control/bookingControl.php");
            break;
        case "settings";
            include("../control/settingsControl.php");
            break;
        case "authenticate";
            include("../control/authenticateControl.php");
            break;
        default;
            echo "<p>La route spécifié n'existe pas!</p>";
            break;

    }
