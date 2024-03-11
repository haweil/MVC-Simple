<?php

namespace core;
class Request
{
    public static function uri(): string
    {
        return explode("/",
            trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),"/")
        )[2] ?? '/';
    }


    public static function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}