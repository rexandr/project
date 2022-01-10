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
        $txt ="/files/file.txt";
        $csv ="/files/file.csv";
        if (isset($_SESSION['config']['txt']))
        {
            $txt = $_SESSION['config']['txt'];
        }
        if (isset($_SESSION['config']['csv']))
        {
            $txt = $_SESSION['config']['csv'];
        }

        $db = new Db();
        $file = new File($txt);
        $csv = new Csv($csv);
        $allFromTest = $db->read();

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