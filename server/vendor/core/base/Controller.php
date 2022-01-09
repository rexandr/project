<?php

namespace vendor\core\base;


abstract class Controller implements \vendor\core\interfaces\ConnectInterface
{
    public $route = [];
    public $view;
    public $layout;
    public $vars = [];

    public function __construct($route)
    {
        

        if (isset($_POST['txt'])||isset($_POST['csv'])||isset($_POST['host']))
        {
            $_SESSION['config'] = $_POST;

            //$_POST = [];
        }

        if (!isset($_SESSION['name']) && $route['controller'] !== 'Register')
        {
            $route = [
                'controller' => 'SignIn',
                'action' => 'index'
            ];
        }

        $this-> route = $route;

        $this->view = $route['action'];
    }

    public function getView()
    {
        $viewObj = new View($this->route, $this->layout, $this->view);
        $viewObj->render($this->vars);
    }

    public function set($vars){
        $this->vars = $vars;
    }

}