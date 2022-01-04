<?php

namespace app\controllers;

use \vendor\core\base\Controller;
use app\models\File;

class FileController extends Controller
{

    public function indexAction()
    {

        $file = new File();

        $fileContent = $file->read();

        $this->set(compact('fileContent'));

    }

}