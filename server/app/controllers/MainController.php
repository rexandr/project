<?php

namespace app\controllers;

use app\controllers\AppController;
use app\models\Main;

class MainController extends AppController
{
    //change layout for all actions og current class
    public $layout = 'main';

    public function indexAction()
    {
//        //if data should be returned without layout
//        $this->layout = false;
//        echo 'Here no layout and no content';

//        //changing view and layout for current action
//        $this->view = 'test';
        $this->layout = 'default';
        $model = new Main();
        $test = $model->findAll();
        $title = __CLASS__ . ' - ' . __FUNCTION__;
        $this->set(compact('title', 'test'));
        //$this->set(['name' => $name, 'hi' => 'Hello']);
    }
}