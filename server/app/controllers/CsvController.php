<?php

namespace app\controllers;

use app\models\File;
use app\controllers\AppController;

class CsvController extends AppController
{
    public function indexAction()
    {
        $this->model = new File("/files/file.csv");
        $this->connect($_SESSION['source']);

//        $file = new File("/files/file.csv");
//        $fileContent = $file->read();
//        if(isset($_POST['name'])&&isset($_POST['secondname']))
//        {
//            $file->write($_POST);
//            header("Location:/csv");
//        }
//        $this->set(compact('fileContent'));

    }
}