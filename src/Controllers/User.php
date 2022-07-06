<?php

namespace Ablam\Controllers;

class User extends Controller
{
    public function index(){
        $this->render("login");
    }

    public function addUser(){
        $this->render("admin/adduser");
    }
    
    public function users(){
        $this->render("admin/userlist");
    }
    
 
}