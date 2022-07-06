<?php

namespace Ablam\Controllers;

class UserController
{

    public function login(){
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            echo $_POST["email"];
            echo $_POST["password"];
            // require_once "views/homepage.php";
        }
        
    }
    
    public function showLogin(){
        require_once "Views/login.php";
    }
}