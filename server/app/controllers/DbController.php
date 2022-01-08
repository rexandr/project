<?php

namespace app\controllers;
use app\controllers\AppController;
use app\models\Db;

class DbController extends AppController
{


    public function indexAction()
    {
        $db = new Db();
        if (isset($_POST['name'])&&isset($_POST['age']))
        {
            $db->save($_POST);
            header("Location:/db");
        }

        $allFromTest = $db->findAll();

        $this->set(compact('allFromTest'));

    }
}