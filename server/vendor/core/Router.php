<?php

class Router
{

//    public function __construct()
//    {
//        echo __CLASS__.' - - '.__FUNCTION__.' - - '.__DIR__;
//    }

    protected static $routes = []; //all routes - patterns
    protected static $route = [];  //current route

    //add routes' patterns to array
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


    //checking if we can accept such route
    public static function matchRoute($url): bool
    {
        foreach (self::$routes as $pattern => $route) {
            //match $pattern and $url, full matching set as first array's($matches) element
            // and substrings as next elements
            if (preg_match("#$pattern#i", $url, $matches)) {
                foreach ($matches as $k => $v) {
                    //pull controller and index from $matches
                    if (is_string($k)) {
                        $route[$k] = $v;
                    }
                }
                // if action isn't set - set default
                if (!isset($route['action'])) {
                    $route['action'] = 'index';
                }
                //set upping current route
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    //find controller and run action
    public static function dispatch($url)
    {
        //checking if we have the route
        if (Router::matchRoute($url)) {
            //rebuild controller title to camel case
            $controller = self::upperCamelCase(self::$route['controller']);
            //cheeking if controller exists
            if (class_exists($controller))
            {
                //controller run
                $classObj = new $controller;
                //action defining
                $action = self::lowerCamelCase(self::$route['action']).'Action';

                //run action if exists
                if (method_exists($classObj, $action))
                {
                    $classObj->$action();
                }else{
                    echo "Action <b>$action</b> does not exist in <b>$controller</b><br>";
                }

                echo "Class <b>$controller</b> exists<br>";
            }else{
                echo "Class <b>$controller</b> does not exist!<br>";
            }
        } else {
            http_response_code(404);
            include '404.html';
        }
    }

    //rebuild kebabCase title of controller to camelCase all first symbols to Upper
    protected static function upperCamelCase($name)
    {
        $name = str_replace('-', ' ', $name);
        $name = ucwords($name);
        return str_replace(' ', '', $name);
    }

    //rebuild kebabCase title of controller to camelCase all first symbols to Upper exclude first
    protected static function lowerCamelCase($name)
    {
        $name = str_replace('-', ' ', $name);
        $name = ucwords($name);
        return lcfirst(str_replace(' ', '', $name));
    }

}