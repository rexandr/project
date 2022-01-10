<?php
session_start();
use vendor\core\Router;
use app\controllers\Posts;

//error_reporting(-1);

$query = rtrim($_SERVER['QUERY_STRING'], '/');

//Setting global variables/constants
define('PUB', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/core');
define('APP', dirname(__DIR__) . '/app');
define('ROOT', dirname(__DIR__));
define('LAYOUT', 'default');

//autoload called class if exists
spl_autoload_register(function ($class)
{
    //construction path for called class's before load
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';

   //checking if class exists in the specified path
   if (is_file($file))
   {
       require_once ($file);
   }
});

//add custom routs if we need unusual behavior
Router::add('^user/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'User']);
Router::add('^user/(?P<alias>[a-z-]+)$', ['controller' => 'User', 'action' => 'view']);

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





//echo '<pre><b>';
//echo 'dirname(__DIR__)=>'.dirname(__DIR__)."<br>";
//echo '__DIR___________=>'.__DIR__."<br>";
//echo '__FILE__________=>'.__FILE__."<br>";
//echo "<br>";
//echo 'CORE =>'.CORE."<br>";
//echo 'PUB__=>'.PUB."<br>";
//echo 'APP__=>'.APP."<br>";
//echo 'ROOT =>'.ROOT."<br>";
//echo '</b></pre>';

//require '../vendor/core/Router.php';
//require '../app/controllers/Db.php';
//require '../app/controllers/Db.php';
//require '../app/controllers/Register.php';

//Router::add('posts/add', ['controller' => 'Db', 'action' => 'add']);
//Router::add('posts', ['controller' => 'Db', 'action' => 'index']);
//Router::add('', ['controller' => 'Db', 'action' => 'index']);