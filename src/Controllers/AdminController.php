<?php

namespace Ablam\Controllers;

class AdminController
{
    public function showAdmin(){
        require "Views/admin/dashboard.php";
    }
}