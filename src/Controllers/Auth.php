<?php

namespace Ablam\Controllers;

use Ablam\Models\User;

class Auth
{

    public function index(){
        require "views/login.php";
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

    
}