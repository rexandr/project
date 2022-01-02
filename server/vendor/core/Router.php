<?php

namespace vendor\core;

class Router
{
    protected static array $routes = []; //all routes - patterns
    protected static array $route = [];  //current route

    //add routes' patterns from index file to $routes
    public static function add($regExp, $route = [])
    {
        self::$routes[$regExp] = $route;
    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }

    public static function getRoute(): array
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
                $route['controller'] = self::upperCamelCase($route['controller']);
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
        //remove GET parameters from $url
        $url = self::removeQueryString($url);
        //checking if we have the route
        if (Router::matchRoute($url)) {
            //set path to controllers and rebuild controller's title to camel case
            $controller = '\app\controllers\\'.self::$route['controller'];

            //cheeking if controller exists
            if (class_exists($controller))
            {
                //controller run
                $classObj = new $controller(self::$route);
                //action defining
                $action = self::lowerCamelCase(self::$route['action']).'Action';

                //run action if exists
                if (method_exists($classObj, $action))
                {
                    $classObj->$action();
                    $classObj->getView();
                }else{
                    echo "Action <b>$action</b> does not exist in <b>$controller</b><br>";
                }
            }else{
                echo "Class <b>$controller</b> does not exist!<br>";
            }
        } else {
            http_response_code(404);
            include PUB.'404.html';
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
    protected static function lowerCamelCase($name): string
    {
        $name = str_replace('-', ' ', $name);
        $name = ucwords($name);
        return lcfirst(str_replace(' ', '', $name));
    }

    //remove GET parameters from $url
    protected static function removeQueryString($url)
    {
        if ($url) //if url not empty
        {
            //divide url to pieces
            $params = explode('&', $url);
            //if first element is not GET parameter return it and cut out last slash OR return null
            if (false === strpos($params[0], '='))
                {
                    return rtrim($params[0],'/');
                }else{
                    return '';
                }
        }
        return $url;
    }

}