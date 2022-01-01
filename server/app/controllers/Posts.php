<?php

namespace app\controllers;
use vendor\core\base\Controller;

class Posts extends Controller
{
    public function indexAction()
    {
        echo '<pre>';
        print_r($this->route);
        echo '</pre>';
        
        echo __CLASS__.__FUNCTION__.'<br>';
    }
}