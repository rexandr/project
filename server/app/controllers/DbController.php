<?php

namespace app\controllers;

use app\controllers\AppController;
use app\models\Db;

class DbController extends AppController
{
    public function indexAction()
    {
        $this->model = new Db();
        if (isset($_SESSION['source'])) {
            $this->connect($_SESSION['source']);
        }

    }
}