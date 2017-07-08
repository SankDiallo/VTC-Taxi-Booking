<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
require ('modele/DataBase.php');
require 'Autoloader.php';
require 'MySettings.php';
Autoloader::register();
MySettings::load();
if (isset($_GET['location'])) {
    $request = $_GET['location'];
}
else {
    $request = 'home';

}



// analyse de la demande

$controller = new Controller();


if ($request == 'home') {

    $controller->home();

}
elseif ($request == 'admin') {
    $controllerAdmin = new ControllerAdmin();

    if (isset($_GET['location2'])) {
        $request2 = $_GET['location2'];
        $controllerAdmin->home($request2);
    }
    else {
        $controllerAdmin->home();

    }
}
elseif ($request == 'deconnexion') {

        $controllerAdmin = new ControllerAdmin();

        $controllerAdmin->logOut();

}
elseif ($request == 'bon' AND isset($_GET['location2'])) {
        $controllerAdmin = new ControllerAdmin();

        $request2 = $_GET['location2'];
        $controllerAdmin->bon($request2);
}
elseif ($request == 'reservation' AND isset($_GET['location2'])) {

    $request2 = $_GET['location2'];

    if ($request2 == 'devis') {

        $controller->devis();

    }
    else {

        $controller->booking($request2);

    }

}
else {

    if ($controller->other($request) === false) {

        header("HTTP/1.0 404 Not Found");

    }

}

?>
