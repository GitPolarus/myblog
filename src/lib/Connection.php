<?php
namespace Ablam\Lib;

use PDO;
use PDOException;

class Connection{
    public static $test;

    public static function getConnection(){
        try {
            // echo "Connected successfully";
            return new PDO("mysql: host=localhost; dbname=myblog_db; charset=utf8","root", "" );
        } catch (PDOException $ex) {
           die("DB Connexion error ".$ex->getMessage());
        }
    }
}
        
    