<?php
        try {
            echo "Connected successfully";
            $db = new PDO("mysql: host=localhost; dbname=myblog_db; charset=utf8","root", "" );
        } catch (PDOException $ex) {
           die("DB Connexion error ".$ex->getMessage());
        }
    