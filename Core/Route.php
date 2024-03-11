<?php

namespace core;

class Route
{
    public static  array $routes =[];
    public static function get($url, $action): void
    {
        // Route::get('url' , 'action')
        // Rote::get('home', 'HomeController@index')
        self::$routes['get'][$url] = $action;
    }
    public static function post($url, $action)
    {
        // Route::post('url' , 'action')
        // Rote::post('home', 'HomeController@index')
        self::$routes['post'][$url] = $action;
    }

    public static function resolve()
    {
        $uri = Request::uri();
        $method= Request::method();
        $action=self::$routes[$method][$uri]??false;
        if ($action === false)
        {
            echo "404 not founed";
            exit;
        }
       if(is_string($action))
       {
         self::callAction($action);
         exit();
       }
        $action();
    }
    private static function callAction($action)
    {
        $action =explode('@',$action);
        $controllerClass ="app\\controllers\\".$action[0];
        $method = $action[1];
        $controllerObject = new $controllerClass();
        $controllerObject->$method();
    }
}