<?php

namespace app\controllers;

use app\models\File;
use app\controllers\AppController;

class FileController extends AppController
{
    public function indexAction()
    {
        if (isset($_SESSION['source'])) {
            $this->model = new File($_SESSION['config']['txt']);
            $this->connect($_SESSION['source']);
        }
    }
}