<?php

namespace Ablam\Controllers;

use Ablam\Models\User;

class Auth extends Controller
{
        public function index(){
            require_once("Views/login.php");
        }

        public function login(){
           
            if (isset($_POST["email"]) && isset($_POST["password"])) {
                $user = new User($_POST["email"],$_POST["password"]);
                if ($user->getOneByEmail()) {
                    // var_dump($user->getOneByEmail());
                    $u =$user->getOneByEmail();
                    $pass = $u['password'];
                    if (password_verify($_POST["password"],$pass )) {
                        echo "logged in";
                    }else{
                        echo "Incorrect password";
                    }
                }else{
                    echo "Compte Inexistant";
                }
            }
            
        }

}