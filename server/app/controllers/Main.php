<?php

namespace app\controllers;

use frameworkVendor\core\base\Controller;

class Main extends Controller
{

    public function index()
    {
        $model = new \app\models\Main;
        $posts = $model->findAll();

        $title = 'Title Main';
        $this->set(compact( 'title', 'posts'));
    }
}