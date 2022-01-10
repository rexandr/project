<?php

namespace app\controllers;

use app\models\Csv;
use app\controllers\AppController;

class CsvController extends AppController
{
    public function indexAction()
    {
        if (isset($_SESSION['source'])) {
            $this->model = new Csv($_SESSION['config']['csv']);
            $this->connect($_SESSION['source']);
        }
    }
}