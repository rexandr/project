<?php

namespace app\controllers;

use app\controllers\AppController;
use app\models\Db;
use app\models\File;
use app\models\Csv;

class MainController extends AppController
{
    //change layout for all actions or current class
    //public $layout = 'main';

    public function indexAction()
    {
        $db = new Db();
        $file = new File("/files/file.txt");
        $csv = new Csv("/files/file.csv");
        $allFromTest = $db->read();
//        $lines = [];
//        foreach ($allFromTest as $line)
//        {
//            $lines [] = implode('_', $line);
//        }
        $fileAll = $file->read();
        $csvAll = $csv->read();
        $all = array_merge($allFromTest, $fileAll, $csvAll);


//        //changing view and layout for current action
//        $this->view = 'test';
        $this->layout = 'default';
        $title = 'MainController';
        $this->set(compact('title', 'all'));
        //$this->set(['name' => $name, 'hi' => 'Hello']);
    }
}