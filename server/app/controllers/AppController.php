<?php

namespace app\controllers;
use app\models\File;

class AppController extends \vendor\core\base\Controller
{
    protected $model = '';
    protected $from = '';

    public function connect($forward)
    {
        $fileContent = $this->model->read();

        $fileContent = array_map(fn($k)=>$this->from.$k,$fileContent);

        if(isset($_POST['name']))
        {
            $this->model->write($_POST);
            header("Location:$forward"); //csv
        }
        $this->set(compact('fileContent'));
    }

}