<?php

use Ablam\Controllers\AdminController;
use Ablam\Controllers\HomeController;
use Ablam\Controllers\UserController;

require_once "vendor/autoload.php";

// (new HomeController())->render();
if (isset($_GET['p'])) {
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
}