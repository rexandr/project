<?php
use vendor\core\Router;
use app\controllers\Posts;

error_reporting(-1);

echo 'Start' . '<br>';

$query = rtrim($_SERVER['QUERY_STRING'], '/');

//Setting global variables/constants
define('PUB', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/core');
define('APP', dirname(__DIR__) . '/app');
define('ROOT', dirname(__DIR__));

echo '<pre><b>';
echo 'dirname(__DIR__)=>'.dirname(__DIR__)."<br>";
echo '__DIR___________=>'.__DIR__."<br>";
echo '__FILE__________=>'.__FILE__."<br>";
echo "<br>";
echo 'CORE =>'.CORE."<br>";
echo 'PUB__=>'.PUB."<br>";
echo 'APP__=>'.APP."<br>";
echo 'ROOT =>'.ROOT."<br>";
echo '</b></pre>';


//require '../vendor/core/Router.php';
//require '../app/controllers/Main.php';
//require '../app/controllers/Posts.php';
//require '../app/controllers/PostsNew.php';

//autoload called class if exists
spl_autoload_register(function ($class)
{
    //complaining any class's path before run
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
echo $file.'<br>';
   //checking if file exists through the path
   if (is_file($file))
   {
       require_once ($file);
   }
});

//Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
//Router::add('posts', ['controller' => 'Posts', 'action' => 'index']);
//Router::add('', ['controller' => 'Main', 'action' => 'index']);

//add custom rout if we need unusual behavior
Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'Page']);
Router::add('^page/(?P<alias>[a-z-]+)$', ['controller' => 'Page', 'action' => 'view']);

//DEFAULT ROUTS
// if url string is empty
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
// reg expressions for controller && action,
// brackets indicate segments
// ?P<> titles the same array's extra elements
// ? before expression makes it unnecessary
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');


//find controller and run action
Router::dispatch($query);



