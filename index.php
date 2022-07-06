<?php

use Ablam\Controllers\Home;

require_once "vendor/autoload.php";

$params = explode("/", $_GET["p"]);
if ($params[0]!="") {
    $controller = ucfirst($params[0]);
    $action = isset($params[1])? $params[1]:"index";

    $class =  '\Ablam\Controllers\\'.$controller;
    $controller = new $class();
    
    if(method_exists($controller, $action)){
        // On appelle la méthode
       $controller->$action();    
    }else{
        // On envoie le code réponse 404
        http_response_code(404);
        echo "La page recherchée n'existe pas";
    }
   
}else{
    $controller = new Home();

    // On appelle la méthode index
    $controller->index();
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