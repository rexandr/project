<?php

namespace app\controllers;

class ConfigsController extends AppController
{
    public function indexAction()
    {
        if (isset($_POST['select'])) {
            $_SESSION['source'] = $_POST['select'];
            $_POST = [];

            $source = $_SESSION['source'];

            $this->set(compact('source'));
        } else {
            $_SESSION['source'] = '/';
            $_POST = [];

            $source = $_SESSION['source'];

            $this->set(compact('source'));
        }
    }

}