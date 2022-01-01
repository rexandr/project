<?php

namespace app\controllers;

class Page extends \vendor\core\base\Controller
{

    public function viewAction()
    {
        echo '<pre>';
        print_r($_GET);
        echo '</pre>';
        echo __CLASS__ . __FUNCTION__ . '<br>';
    }

}