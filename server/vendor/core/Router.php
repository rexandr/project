<?php

class Router
{

//    public function __construct()
//    {
//        echo __CLASS__.' - - '.__FUNCTION__.' - - '.__DIR__;
//    }

    protected static $routes = []; //all routes
    protected static $route = [];  //current route

    public static function add($regExp, $route = [])
    {
        self::$routes[$regExp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route)
        {
            if ($url == $pattern)
            {
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

}