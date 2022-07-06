<?php

namespace Ablam\Models;

use Ablam\Lib\Connection;
use PDO;

abstract class Model
{
    protected $connection;

    public $table;
    public $id;

    public function getConnection(){
        $this->connection = null;
        $this->connection = Connection::getConnection();
    }

    public function getAll(){
        $sql = "select * from $this->table";
        $request = $this->connection->prepare($sql);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getOne(){
        $sql = "select * from $this->table where id= $this->id";
        $request = $this->connection->prepare($sql);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }
    
}