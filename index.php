<?php


// define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
use Ablam\Controllers\AdminController;
use Ablam\Controllers\HomeController;
use Ablam\Controllers\UserController;

require_once "vendor/autoload.php";

$params = explode("/", $_GET["p"]);
if ($params[0]!="") {
    $controller = $params[0];
    $action = isset($params[1])? $params[1]:"index";


    switch ($controller) {
        case "home":
            $home = new HomeController();
            $home->showHome();
            break;
        case "user":
            $userController = new UserController();
            $userController->showLogin();
            switch ($action) {
                case "index":
                    $userController->showLogin();
                    break;
                case "login":
                    (new UserController())->login();
                    break;
                default:
                echo "Action not found";
            }
        break;
        default:
        echo "Page not found 404";
    }
   
}

function callMethode($controller, $action){
    if(method_exists($controller, $action)){
        // On appelle la méthode
        $controller->$action();    
    }else{
        // On envoie le code réponse 404
        http_response_code(404);
        echo "La page recherchée n'existe pas";
    }
}

// // (new HomeController())->render();
// if (isset($_GET['p'])) {
//     $page = $_GET['p'];
// }else{
//     $page = ""; 
// }

// switch ($page) {
//     case "home":
//         (new HomeController())->showHome();
//         break;
//     case "login":
//         (new UserController())->showLogin();
//         break;
//     case "admin/dashboard":
//             (new AdminController())->showAdmin();
//             break;
//     default:
//         echo "Page Not found";
// }