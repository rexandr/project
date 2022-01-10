<?php

namespace app\controllers;

use app\controllers\AppController;

class LogOutController extends AppController
{
    public function indexAction()
    {
        header('/');
        $_SESSION = [];
        $_POST = [];

    }
}