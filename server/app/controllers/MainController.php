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
        $file = new File("/files/file.txt");
        $csv = new File("/files/file.csv");
        $allFromTest = $db->read();
        $lines = [];
        foreach ($allFromTest as $line)
        {
            $lines [] = implode('_', $line);
        }
        $fileAll = $file->read();
        $csvAll = $csv->read();
        $all = array_merge($lines, $fileAll, $csvAll);
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