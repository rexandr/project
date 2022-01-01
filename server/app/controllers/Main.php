<?php

namespace app\controllers;

use vendor\core\base\Controller;

class Main extends Controller
{
    public function indexAction()
    {
        echo __CLASS__.__FUNCTION__.'<br>';
    }
}