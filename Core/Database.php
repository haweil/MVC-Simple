<?php

namespace core;
require_once '../config/database.php';
use PDO;
use PDOException;

class Database
{


    protected  static $instance =null;
    public static function connect ()
    {
       if (is_null(self::$instance))
       {
           try
           {
               self::$instance = new PDO("mysql:host=".HOST.";dbname=".DBNAME,USER,pass);
               self::$instance ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           }
           catch (PDOException $e)
           {
               die ("Error:".$e->getMessage());
           }
       }
       return self::$instance;
    }
}