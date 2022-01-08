<?php

namespace app\controllers;
use app\controllers\AppController;
use app\models\Db;

class DbController extends AppController
{
    public function indexAction()
    {
        $this->model = new Db();
        $this->connect($_SESSION['source']);



//        $db = new Db();
//        if (isset($_POST['name']))
//        {
//            $db->write($_POST);
//            header("Location:/db");
//        }
//
//        $allFromTest = $db->read();
//
//        $this->set(compact('allFromTest'));
    }
}