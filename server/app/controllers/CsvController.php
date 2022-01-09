<?php

namespace app\controllers;

use app\models\Csv;
use app\controllers\AppController;

class CsvController extends AppController
{
    public function indexAction()
    {
        $this->from = 'Data From Csv - ';
        $this->model = new Csv("/files/file.csv");
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