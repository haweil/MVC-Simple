<?php

namespace app\models;

use app\QueryBuilder\QueryBuilder;

class model
{
    protected static string $table ;
    protected static $builder = null;

    protected static function getBuilder()
    {
        if (self::$builder===null)
        {
            self::$builder=new QueryBuilder();
        }
        return self::$builder;
    }
    public static function all()
    {
        return self::getBuilder()->getAll(static::$table);
    }
}