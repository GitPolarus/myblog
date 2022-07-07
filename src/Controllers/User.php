<?php

namespace Ablam\Controllers;

class User
{

    public function index(){
        require_once "Views/user/home.php";
    }
    public function login(){
        echo $_POST["email"];
    }
    
    public function showLogin(){
        require_once "Views/login.php";
    }
}