<?php

namespace Ablam\Controllers;

use Ablam\Models\User;

class Admin extends Controller
{



    public function createUser(){
        if(isset($_POST['submit'])){
            
            $user = new User($_POST['email'],$_POST['password'],$_POST['firstName'],$_POST['lastName'],"",$_POST['birthDate']);
            $user->create();
            
            header("location:/myblog/admin/users");
        }
    }

    public function index(){
        require "Views/admin/dashboard.php";
    }

    public function addUser(){
        $this->render("admin/adduser");
    }
    
    public function users(){
        $user = new User();
        $users = $user->getAll();
        // var_dump($users);
        $this->render("admin/userlist", compact("users"));
    }



}