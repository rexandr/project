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
//        echo 'Here no layout';

//        //changing view and layout for current action
//        $this->view = 'test';
        $this->layout = 'default';
        $model = new Main();
//        $test = $model->findAll();
//        $findOne = $model->findOne('vasya', 'name');
//        $customSelect = $model->findByCustomSql("SELECT * FROM {$model->table} WHERE name LIKE ?", ['%ya']);
//        $like = $model->findByLike('va', 'name');
        $title = 'MainController';
        $this->set(compact('title'));
        //$this->set(['name' => $name, 'hi' => 'Hello']);
    }
}