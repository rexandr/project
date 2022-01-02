<?php

namespace vendor\core\base;

abstract class Controller
{
    public $route = [];
    public $view;
    public $layout;
    public $vars = [];

    public function __construct($route)
    {
        $this-> route = $route;
        $this->view = $route['action'];
        //$this->getView();
        //include APP . "/views/{$route['controller']}/{$this->view}.php";
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