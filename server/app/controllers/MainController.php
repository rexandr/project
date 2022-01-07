<?php

namespace app\controllers;

use app\controllers\AppController;
use app\models\Db;
use app\models\File;

class MainController extends AppController
{
    //change layout for all actions og current class
    //public $layout = 'main';

    public function indexAction()
    {
        $db = new Db();
        $file = new File();
        $allFromTest = $db->findAll();
        $lines = [];
        foreach ($allFromTest as $line)
        {
            $lines [] = implode('_', $line);

        }

        $fileAll = $file->read();
        $all = array_merge($lines, $fileAll);
//        echo '<pre>';
//        print_r($all);
//        echo '</pre>';
//        //if data should be returned without layout
//        $this->layout = false;
//        echo 'Here no layout';

//        //changing view and layout for current action
//        $this->view = 'test';
        $this->layout = 'default';
        //$model = new Db();
//        $test = $model->findAll();
//        $findOne = $model->findOne('vasya', 'name');
//        $customSelect = $model->findByCustomSql("SELECT * FROM {$model->table} WHERE name LIKE ?", ['%ya']);
//        $like = $model->findByLike('va', 'name');
        $title = 'MainController';
        $this->set(compact('title', 'all'));
        //$this->set(['name' => $name, 'hi' => 'Hello']);
    }
}