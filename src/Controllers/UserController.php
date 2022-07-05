<?php

namespace Ablam\Controllers;

class UserController
{

    public function login(){
        echo $_POST["email"];
    }
    
    public function showLogin(){
        require_once "Views/login.php";
    }
}