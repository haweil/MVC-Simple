<?php

namespace app\QueryBuilder;

use core\Database;

class QueryBuilder
{
    protected $connection ;
    public function  __construct()
    {
        $this->connection =Database::connect();
    }

    public function  getAll($table)
    {
        $sql = "SELECT * FROM {$table}";
        $stmt =$this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}