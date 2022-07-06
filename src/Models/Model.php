<?php

namespace Ablam\Models;

use Ablam\Lib\Connection;
use PDO;

abstract class Model
{   
   /**
    * store connection object
    * conncetion
    *
    * @var mixed
    */
   protected PDO $connection ;

   protected $table;
   

   public function getConnection(){
    //    $this->connection = null;
       $this->connection = Connection::getConnection();
   }
   
}