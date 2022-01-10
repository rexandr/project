<?php

namespace app\controllers;

use app\models\File;

class AppController extends \vendor\core\base\Controller
{
    protected $model = '';


    public function connect($forward)  // read write divide
    {
        $fileContent = $this->model->read();

        if (isset($_POST['name'])) {
            $this->model->write($_POST);
            header("Location:$forward"); //csv
        }
        $this->set(compact('fileContent'));
    }

}