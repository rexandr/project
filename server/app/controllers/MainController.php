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
        $findOne = $model->findOne('vasya', 'name');
        echo '<pre>';
        print_r($findOne);
        echo '</pre>';
//        $customSelect = $model->findByCustomSql("SELECT * FROM test");
//        echo '<pre>';
//        print_r($customSelect);
//        echo '</pre>';
        $customSelect = $model->findByCustomSql("SELECT * FROM {$model->table} WHERE name LIKE ?", ['%ya']);
        echo '<pre>';
        print_r($customSelect);
        echo '</pre>';
        
        $like = $model->findByLike('va', 'name');
        echo '<pre>';
        print_r($like);
        echo '</pre>';
        $title = __CLASS__ . ' - ' . __FUNCTION__;
        $this->set(compact('title', 'test', 'findOne'));
        //$this->set(['name' => $name, 'hi' => 'Hello']);
    }
}