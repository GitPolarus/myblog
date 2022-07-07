<?php

namespace Ablam\Controllers;

use Ablam\Models\User;

class Auth
{

    public function index(){
        require "Views/login.php";
    }
    
    public function login(){
       if (isset($_POST['submit'])) {
            $email = htmlspecialchars($_POST['email']);
            $pass = htmlspecialchars($_POST['password']);

            $authUser = new User($email, $pass);
            $user = $authUser->getOneByEmail();
            if ($user) {
                if (password_verify($pass, $user['password']) && $user['activate']) {
                    if ($user['role']== "user") {
                        header("location:/myblog/user");
                    }elseif($user['role']== "admin"){
                        header("location:/myblog/admin");
                    }else{
                        header("location:/myblog/home");
                    }
                }else{
                    echo "Mauvais mot de passe ou compte inactif";
                }
            }else{
                echo "mauvais email";
            }
       }
    }
    
    /**
     * show the register page
     *
     * @return void
     */
    public function register(){
        require "Views/register.php";
    }

    public function addUser(){
        var_dump($_POST);
       $user = new User($_POST['email'], $_POST['password'],$_POST['firstName'], $_POST['lastName'],$_POST['pseudo'], $_POST['birthDate']);
       $user->create();
    }
    

    
}