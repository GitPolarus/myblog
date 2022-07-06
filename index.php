<?php
require_once "vendor/autoload.php";
// On sépare l'url sous form de sous chaine dans un tableau
$params = explode("/",$_GET['p']);

if ($params[0]!="") {
    $controller = ucfirst($params[0]);
    
    //Création dynamique de classes du controlleur
    $class =  '\Ablam\Controllers\\'.$controller;
    $controller = new $class();
    
    $action = isset($params[1])? $params[1]: "index";

    //action via la methode 
    if (method_exists($controller,$action)) {
        $controller->$action();
    }else{
        echo "Page Not found 404";
    }
}else{
    $home = new \Ablam\Controllers\Home();
    $home->index();
}














// (new HomeController())->render();
/* if (isset($_GET['p'])) {
    $page = $_GET['p'];
}else{
    $page = "";
    
}

switch ($page) {
    case "home":
        (new HomeController())->showHome();
        break;
    case "login":
        (new UserController())->showLogin();
        break;
    case "admin/dashboard":
            (new AdminController())->showAdmin();
            break;
    default:
        echo "Page Not found";
} */