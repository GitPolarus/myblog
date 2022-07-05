<?php

namespace Ablam\Controllers;

use Ablam\Lib\Connection;
use Ablam\Models\User;

class HomeController
{

    public function showHome(){
        Connection::$test;
        $db = Connection::getConnection();
        $user = new User("ablam@gmail.com", "password", "Ablam", "Hippolyte");
        require "Views/homepage.php";
    }

    
}