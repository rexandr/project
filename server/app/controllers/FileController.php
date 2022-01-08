<?php

namespace app\controllers;

use app\models\File;
use app\controllers\AppController;

class FileController extends AppController
{

    public function indexAction()
    {
        $this->model = new File("/files/file.txt");
        $this->connect($_SESSION['source']);
    }

}


//        $file = new File("/files/file.txt");
//
//        $fileContent = $file->read();
//
//        if(isset($_POST['name'])&&isset($_POST['secondname']))
//        {
//            $file->write($_POST);
//            header("Location:/file");
//        }
//
//        $this->set(compact('fileContent'));