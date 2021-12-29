<?php

namespace app\controllers;

use frameworkVendor\core\base\Controller;

class Main extends Controller
{

    public function index()
    {

        $title = 'Title Main';
        $this->set(compact( 'title'));
    }
}