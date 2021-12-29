<?php
use frameworkVendor\core\Router;

error_reporting(-1);

$query = rtrim($_SERVER['QUERY_STRING'], '/');

define('LAYOUT', 'default');

spl_autoload_register(function ($class){
    $file = dirname(__DIR__) . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_file($file)){
        require_once $file;
    }
});

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);

Router::add('^login', ['controller' => 'Login', 'action' => 'index']);

Router::dispatch($query);