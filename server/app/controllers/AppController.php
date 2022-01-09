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

        if ($this->from !== '')
        {
            $fileContent = array_map(fn($line)=>$this->from.$line,$fileContent);
        }

        if(isset($_POST['name']))
        {
            $this->model->write($_POST);
            header("Location:$forward"); //csv
        }
        $this->set(compact('fileContent'));
    }

}