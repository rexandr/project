<?php

echo 'Start' . '<br>';

$query = rtrim($_SERVER['QUERY_STRING'],'/');
echo '<pre>';
print_r($query);
echo '</pre>';


require '../vendor/core/Router.php';

Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
Router::add('posts', ['controller' => 'Posts', 'action' => 'index']);
Router::add('', ['controller' => 'Main', 'action' => 'index']);

if (Router::matchRoute($query)) {
    echo 'Route' . '<br>';
    echo '<pre>';
    print_r(Router::getRoute());
    echo '</pre>';
} else {
    include '404.html';
}

echo 'Routes' . '<br>';
echo '<pre>';
print_r(Router::getRoutes());
echo '</pre>';
