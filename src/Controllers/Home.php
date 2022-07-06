<?php

namespace Ablam\Controllers;

use Ablam\Lib\Connection;
use Ablam\Models\User;

class Home
{

    public function index(){
        $db = Connection::getConnection();
        $user = new User("ablam@gmail.com", "password", "Ablam", "Hippolyte");
        require "Views/homepage.php";
    }

    public function hello(){
        echo "Hello les gars";
    }

    
}